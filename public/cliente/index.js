var formularioCliente = document.getElementById('formularioCliente');
var respuesta = document.getElementById('respuesta');
//var documento = document.getElementById('documento');


// documento.addEventListener('focusout',function(e) {
// 	e.preventDefault();
	
//    let documento = document.getElementById('documento').value;

//     fntFetchFormulario('buscar','POST','app/mod_asointegral/operaciones.php?buscar=documento',formulario,'respuesta',documento);
// });

formularioCliente.addEventListener('submit', function(e){
	e.preventDefault();
	var operacion = document.getElementById('operacion').value;	
	
    fntFetchFormulario(operacion,'POST','../../app/controladores/controladorCliente.php',formularioCliente,'respuesta',null);   
});


function listarbeneficiarios(){
	fntFetchFormulario('listarTabla','POST','app/mod_asointegral/operaciones.php',formulario,'divTabla',null);

} 

function  fntFetchFormulario  (funcion,metodo,url,formulario=null,divRespuesta,id=null){
	
	let datos = new FormData(formulario);
	//codigo = id;
		
	datos.append("operacion", funcion);
	//if (url =='app/mod_Cargos/operaciones.php') {
	//	datos.append("tabla", divRespuesta);
	//}

	//if (id =!null) {
	//	datos.append("codigo", codigo)
	//}
	//if (funcion =="eliminar") {
	//	let r = confirm("¿Seguro que desea eliminar el registro Nº "+codigo+" ?");

	//	if (r==false) {
	//		alert("Proceso Cancelado");
	//		return;
	//	}
	//}

	//if (funcion =="Actualizar") {
	//	let r = confirm("¿Seguro que desea modificar los datos de este asociado ?");
	//	if (r==false) {
	//		alert("Proceso Cancelado");
	//		return;
	//	}
	//}

	fetch(url,{
		method: metodo,
		body: datos
	})
	.then(response =>  response.json())
	.then(dataJSON => {

		//if (divRespuesta != "divTabla" && divRespuesta != "respuesta" ) {
		
		//}else{
		//	if (funcion == "listarTabla" || funcion == "filtro") {
		//	fntCreateDataTable(dataJSON,divRespuesta,[{'title':'#'},{'title':'EDITAR'},{'title':'ELIMINAR'},{'title':'CODIGO'},{'title':'DOCUMENTO'},{'title':'NOMBRE'},{'title':'P. APELLIDO'},{'title':'S. APELLIDO'},{'title':'GENERO'},{'title':'TELEFONO'}],'dataTableDefault','table table-striped dt-responsive nowrap');	
		//}
		//if (funcion == "buscar") {
		
		//	if (dataJSON.id_asointegral) {
				
		//		document.getElementById('id').value = dataJSON.id_asointegral;
		//		document.getElementById('documento').value = dataJSON.documento ;
		//		document.getElementById('nombre').value = dataJSON.nombres ;
		//		document.getElementById('apellido1').value = dataJSON.apellido1 ;
		//		document.getElementById('apellido2').value = dataJSON.apellido2;
		//		document.getElementById('sexo').value = dataJSON.sexo;
		//		document.getElementById('telefono').value = dataJSON.telefono ;
		//		document.getElementById('t_Incapacidad').value = dataJSON.t_Incapacidad ;
		//		document.getElementById('operacion').value = "Actualizar";
		//		dataJSON = null;
			
				
		//	}else{
		//		console.log(dataJSON);
		//	}
			
		//}
		//	if (funcion == "Actualizar" || funcion == "Guardar" || funcion == "eliminar") {	
				
		//		alert(dataJSON);  
		//		loadcontent('contenido','app/mod_asointegral/index.html');
				
		//	}
		//}

		// dataJSON=null;
		respuesta.innerHTML = "";	
		respuesta.innerHTML = dataJSON;
		dataJSON =null
	}) 

}

var fntCreateDataTable=(data,divResponse,dataTableHeader,dataTableID='dataTableDefault',dataTableClass='table table-striped dt-responsive table-responsive nowrap')=>{
	
	let contenido=document.getElementById(divResponse);
	contenido.innerHTML='';
	if(data.length<1){
		contenido.innerHTML='<p class="text-center"><strong>No hay datos para mostrar</strong></p>';
		return;
	}

	let tbl=document.createElement('table');
	tbl.setAttribute('id',dataTableID);
	tbl.setAttribute('width','100%');
	tbl.setAttribute('class',dataTableClass);			
	contenido.appendChild(tbl);

	for (var i=0; i < data.length; i++) {
		data[i].unshift("<span role='button' onclick=fntFetchFormulario('buscar','POST','app/mod_asointegral/operaciones.php',formulario,'respuesta',"+data[i][0]+")><i class='glyphicon glyphicon-pencil text-info'></i></span>","<span role='button' onclick=fntFetchFormulario('eliminar','POST','app/mod_asointegral/operaciones.php',formulario,'respuesta',"+data[i][0]+") ><i class='glyphicon glyphicon-remove text-info'></i></span>");	
		data[i].unshift(i+1);
	}
	$('#'+dataTableID).DataTable({
		dom: 'Bfrtip',
		buttons: ['copy', 'csv', 'excel', 'pdf'],
	    select: true,
		data:data,
		columns:dataTableHeader
	})
		data=null;
}




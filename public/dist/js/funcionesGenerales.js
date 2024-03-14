
// var time=1000;
// var timerFunctionAjax;
// var tableLoading=true;
// var contenidoLoading=false;
// function fntAjaxMenu(url,breadcrumb){
// 	clearTimeout(timerFunctionAjax);
// 	if(contenidoLoading){
// 		$('#divContenido').html('<div align="center"><h3>Cargando contenido...</h3><h3><i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i></h3></div>');
// 		$('#liBreadcrumb').html(breadcrumb);
// 		setTimeout(function(){$("#divContenido").load(url)},time);
// 	}else{
// 		$("#divContenido").load(url);
// 		$('#liBreadcrumb').html(breadcrumb);
// 	}
// }
// function fntAjaxTableLoading(){
// 	if(tableLoading){
// 		$('#panelTable').html('<div align="center"><h3>Cargando datos...</h3><h3><i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i></h3></div>');
// 	}
// }
// function fntAjax(funcion,metodo,url,divRespuesta){
// 	$.ajax({
// 	sync:true,
// 	cache:false,
// 	type:metodo,
// 	data:funcion+'='+funcion,		
// 	url:url,
// 	success:function(resp){
// 		$('#'+divRespuesta).html(resp);
// 	}
// 	});
// }
// function fntAjaxUnParametro(funcion,metodo,url,parametro1,divRespuesta){
// 	$.ajax({
// 	sync:true,
// 	cache:false,
// 	type:metodo,
// 	data:'valor='+parametro1+'&'+funcion+'='+funcion,
// 	url:url,
// 	success:function(resp){
// 		$('#'+divRespuesta).html(resp);
// 	}
// 	});
// }
// function fntAjaxDosParametros(funcion,metodo,url,parametro1,parametro2,divRespuesta){
// 	$.ajax({
// 	sync:true,
// 	cache:false,
// 	type:metodo,
// 	data:'valor1='+parametro1+'&valor2='+parametro2+'&'+funcion+'='+funcion,
// 	url:url,
// 	success:function(resp){
// 		$('#'+divRespuesta).html(resp);
// 	}
// 	});
// }
// function fntAjaxTresParametros(funcion,metodo,url,parametro1,parametro2,parametro3,divRespuesta){
// 	$.ajax({
// 	sync:true,
// 	cache:false,
// 	type:metodo,
// 	data:'valor1='+parametro1+'&valor2='+parametro2+'&valor3='+parametro3+'&'+funcion+'='+funcion,
// 	url:url,
// 	success:function(resp){
// 		$('#'+divRespuesta).html(resp);
// 	}
// 	});
// }
// function fntAjaxArray(funcion,metodo,url,arreglo,divRespuesta){
// 	$.ajax({
// 	sync:true,
// 	cache:false,
// 	type:metodo,
// 	data:'valor='+JSON.stringify(arreglo)+'&'+funcion+'='+funcion,
// 	url:url,
// 	success:function(resp){
// 		$('#'+divRespuesta).html(resp);
// 	}
// 	});
// }
// function fntAjaxIdElemento(funcion,metodo,url,idElemento,divRespuesta){
// 	valor=document.getElementById(idElemento).value;
// 	$.ajax({
// 	sync:true,
// 	cache:false,
// 	type:metodo,
// 	data:'valor='+valor+'&'+funcion+'='+funcion,
// 	url:url,
// 	success:function(resp){
// 		$('#'+divRespuesta).html(resp);
// 	}
// 	});
// }
// function fntAjaxFormulario(funcion,metodo,url,formulario,divRespuesta){
// 	var datos = new FormData(document.getElementById(formulario));
// 	$.ajax({

// 	sync:true,
// 	cache:false,
// 	type:metodo,
// 	data:datos,
// 	url:url,
// 	processData: false,
//     contentType: false,	
 	
// 	success:function(resp){
// 		$('#'+divRespuesta).html(resp);
// 	}
// 	});
// }
// function fntImportarJS(rutaJS,idElemento,limpiarDiv){
// 	if(limpiarDiv=='si'){
// 		document.getElementById(idElemento).innerHTML='';
// 	}
// 	var scr=document.createElement('script');
// 	scr.setAttribute('type','text/javascript');
// 	scr.setAttribute('src',rutaJS);
// 	document.getElementById(idElemento).appendChild(scr);
// }
function loadcontent(contenedor, url){
   $("#"+contenedor).load(url);
   
}


// var formulario = document.getElementById('formulario');
// var respuesta = document.getElementById('respuesta');

// formulario.addEventListener('submit', function(e){

// 	e.preventDefault();
// 	fntFetchFormulario("guardar","POST","imageup.php",formulario,respuesta);

// })
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;


   /**
     * Los atributos que son asignables masivamente.
     *
     * @var array
     */

    protected $fillable = ['name'];

}

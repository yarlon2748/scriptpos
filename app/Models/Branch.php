<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    use HasFactory;

   /**
     * Los atributos que son asignables masivamente.
     *
     * @var array
     */

    protected $fillable = ['title', 'short_description', 'contact_person', 'phone', 'address'];
}

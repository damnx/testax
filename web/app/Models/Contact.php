<?php

namespace App\Models;

use Backpack\CRUD\CrudTrait;
use Backpack\CRUD\ModelTraits\SpatieTranslatable\HasTranslations;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use CrudTrait;
    use HasTranslations;

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'contact';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $fillable = ['name', 'email', 'phone', 'message'];
  

}

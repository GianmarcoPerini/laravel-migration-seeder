<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Travel extends Model
{
    protected $fillable = ['name','price','number_of_location','how_many_poeple','end_validity','description'];
}

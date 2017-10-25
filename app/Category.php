<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	/*
	 * mapeia a tabela categories, escrevivel na tabela
	 */
    protected $fillable = ['name'];
}

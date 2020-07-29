<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Product extends Model{
	// protected $fillable = ["quantity","description"]; // To be inserted

	 protected $guarded = [];

	 protected $table ="products";

	
}


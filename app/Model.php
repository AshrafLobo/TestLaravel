<?php

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Model extends Eloquent
{
   	//Created a new main class so you don't need to add this everytime
	//Second way - takes the fields that aren't needed
		protected $guarded = [];
}

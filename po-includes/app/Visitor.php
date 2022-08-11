<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Visitor extends Model
{

        protected $fillable = [
		'ip', 'visited_date', 'hits'
	];

}

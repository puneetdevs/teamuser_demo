<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tuser extends Model
{
        protected $table = 'users';
		protected $primaryKey = 'id';
		public function teamuser_user($value='')
		{
			return $this->hasMany('App\TeamUser','user_id');
		}
}




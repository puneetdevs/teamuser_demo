<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
            protected $table = 'teams';
		protected $primaryKey = 'id';
		public function teamuser_team($value='')
		{
			return $this->hasMany('App\TeamUser','team_id');
		}
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TeamUser extends Model
{
        protected $table = 'teams_users';
		protected $primaryKey = 'id';
		public function get_users()
		{
			return $this->belongsTo('App\Tuser','user_id');
		}
		public function get_teams()
		{
			return $this->belongsTo('App\Team','team_id');
		}

}

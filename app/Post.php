<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	public function userName() {
		User::find($this->user_id) ? User::find($this->user_id)->name : null;
	}
}

<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Recommendation extends Model
{
    public function section()
    {
    	return $this->belongsTo(Section::class);
    }
}

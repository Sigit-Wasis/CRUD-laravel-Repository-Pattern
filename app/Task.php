<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
    'code', 'name_id', 'name_ar', 'nip', 'gender'
	];
}

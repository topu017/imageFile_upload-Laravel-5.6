<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use Notifiable;
    //
    protected $guarded = [];
    protected $fillable = ['title', 'image',];
	protected $hidden = ['id'];
}

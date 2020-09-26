<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Carbon\Carbon;

class Post extends Model
{
    use HasFactory;

    protected $with = ['user'];

    protected $fillable = ['title', 'description', 'user_id', 'slug'];

    public function user(){
    	return $this->belongsTo(User::class);
    }

    public function setSlugAttribute($value){
        // dd($value);
        $this->attributes['slug'] = Str::slug($value, '-');
    }
    
    public function getCreatedAtAttribute($value){
    	// dd($value);
    	$createdAt = Carbon::parse($value);
    	return $createdAt->isoFormat('MMMM DD, YYYY');
    }    
}

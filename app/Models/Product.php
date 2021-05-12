<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\User;
use App\Models\Image;

class Product extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'created_at', 'updated_at'];

public function getRouteKeyName(){
        return 'slug';
}

//Relación uno a muchos inversa
 public function user(){
     return $this->belongsTo(User::class);
 }
 public function category(){
     return $this->belongsTo(Category::class);
 }
 //Relación uno a uno Polimorfica
 public function image(){
    return $this->morphOne(Image::class,'imageable');
}


}

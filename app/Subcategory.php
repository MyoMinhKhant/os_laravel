<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    //
     protected $fillable = [
    	'name','category_id'];

    	public function category($value='')
{
       return $this->belongsto('App\Category');
}
   	    	public function Items($value='')
{
       return $this->hasMany('App\Item');
}
}

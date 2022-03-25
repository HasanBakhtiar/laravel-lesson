<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    // protected $fillable = ['name','autherid'];
    protected $guarded = [];
    protected $table = "book";
    public $timestamps = false;

    public function auther(){
        return $this->hasOne('\App\Auther','id','autherid');
    }


}

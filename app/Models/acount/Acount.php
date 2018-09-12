<?php

namespace App\Models\acount;

use Illuminate\Database\Eloquent\Model;

class Acount extends Model
{
    //

    protected $table = "acounts";

     protected $primarykey ="id";

    protected $fillable= ["date","city","enterprise_id","user_id","description","amount"];


                
             

        
        public function enterprise()
        {
            return $this->belongsTo(Enterprise::class);
        }
        
    }



<?php

namespace App\Models\enterprise;

use Illuminate\Database\Eloquent\Model;

class Enterprise extends Model
{

    protected $table = 'enterprises';

    protected $primarykey = 'id';

    protected  $fillable = ['name','nit_enterprise'];

    
  
  public function acount()
  {
      return $this->hasMany(Acount::class);
  }
  


}

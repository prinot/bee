<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Envio extends Model
{
    

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'phone', 'email','name_business', 'package',
    ];

   


    public function scopeName($query, $name){
       
        if($name)
             return $query->where('name','LIKE', "%$name%");
            
        
    }
    
    public function scopePhone($query, $phone){
       
        if($phone)
             return $query->where('phone','LIKE', "%$phone%");
            
        
    }
    
    public function scopeEmail($query, $email){
       
        if($email)
             return $query->where('email','LIKE', "%$email%");
            
        
    }

 

}


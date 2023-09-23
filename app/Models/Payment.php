<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $guarded="id";
    use HasFactory;
    public function user(){
        return $this->belongsTo(User::class,"user_id","id");
    }

    public function admin(){
        return $this->belongsTo(Admin::class,"admin_id","id");
    }
}

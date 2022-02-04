<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Domain extends Model
{
    use HasFactory;

    public $fillable = ['id', 'name', 'user_id', 'domain_name', 'price', 'type', 'description', 'info1', 'info2', 'info3', 'unit_age', 'status', 'industry'];

    public function fullName(){
        return $this->domain_name . '  ' . ' $' . $this->price . ' by ' . $this->name . ' ' . $this->type. ' ' . $this->status;
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

}

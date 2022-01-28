<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Domain extends Model
{
    use HasFactory;

    public $fillable = ['id', 'name', 'domain_name', 'price', 'type'];

    public function fullName(){
        return $this->domain_name . ' [Image] ' . $this->image . ' $' . $this->price . ' by ' . $this->name . ' ' . $this->type;
    }
}

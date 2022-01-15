<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PremiumDomainsTable extends Model
{
    use HasFactory;

    public $table = "premium_domains";

    public $fillable = ['id', 'company_name', 'domain_name', 'price'];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'tbl_products';
    const CREATED_AT = 'created_date';
    const UPDATED_AT = 'updated_date';
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;
    protected $table = 'tbl_sales';
    const CREATED_AT = 'created_date';
    const UPDATED_AT = 'updated_date';

    public function total()
    {
        return $this->price * $this->quantity;
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Column extends Model
{
    use HasFactory;


    public function columnValues()
    {
        return $this->hasMany(columnValues::class, 'column_id');
    }
}

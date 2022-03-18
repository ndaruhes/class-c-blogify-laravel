<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = 'categories';

    // Menentukan field yg boleh di masukkan ke dalam table
    protected $fillable = ['title'];

    // Menentukan field yg tidak boleh dimasukkan ke dalam table
    // protected $guarded = ['id'];
}

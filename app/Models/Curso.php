<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    // protected $fillable = ['name', 'description', 'category'];
    protected $guarded = [];
    // protected $guarded = ['status'];

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutPdrrmo extends Model
{
    use HasFactory;

    // The table associated with the model
    protected $table = 'about';

    // The attributes that are mass assignable
    protected $fillable = ['section', 'content'];

    // Disable automatic timestamps if not needed
    public $timestamps = true;
}

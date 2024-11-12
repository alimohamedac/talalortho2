<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BeforeAndAfter extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'before_and_after';

    protected $fillable = [
        'title', 'description', 'image'
    ];
}

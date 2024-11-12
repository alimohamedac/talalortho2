<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PatientInstruction extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'patient_instructions';

    protected $fillable = [
        'title', 'description', 'image'
    ];
}

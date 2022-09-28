<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SecretaryDoctor extends Model
{
    use HasFactory;
    
  protected $table = '_secretary_doctors';
  protected$primaryKey = 'id';
  protected $fillable = [
    'fname',
    'lname',
    'phone',
    'email',
    'password',
    'type'
];
}

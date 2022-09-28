<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModellandingPageSetting extends Model
{
    use HasFactory;


    protected $table = 'landingpagesettings';

    protected $fillable = [
        'logo',
        'title',
        'stitle',
        'location',
        'aboutus'
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class County extends Model
{
    protected $table = 'kenyacounties';

    protected $fillable = [
        'countycode',
        'countyname',
    ];
}

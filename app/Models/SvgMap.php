<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SvgMap extends Model
{
    use HasFactory;
    protected $table = 'svg_maps';

    protected $fillable = [
        'sm_description',
        'sm_markup',
        'sm_last_updated',
    ];
}

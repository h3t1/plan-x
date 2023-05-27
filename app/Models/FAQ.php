<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FAQ extends Model
{
    use HasFactory;
    protected $table = 'faqs';

    protected $fillable = [
        'faq_question',
        'faq_answer',
        'created_at',
        'updated_at'
    ];
}

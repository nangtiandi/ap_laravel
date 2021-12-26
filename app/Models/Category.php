<?php

namespace App\Models;

use App\Mail\CatMail;
use App\Mail\MarkdownMail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Mail;

class Category extends Model
{
    use HasFactory;

    protected static function booted()
    {
        static::created(function ($category) {
            Mail::to('nangdi00@gmail.com')->send(new MarkdownMail($category));
        });
    }
}

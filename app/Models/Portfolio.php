<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Portfolio extends Model
{
    use HasFactory;

    use HasTranslations;
    public $translatable=['name'];
    protected $fillable=['name','description'];
    // protected $fillable=['name','description'];
}

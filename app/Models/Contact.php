<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'description'];

    public function setNameAttribute($value)
    {
        return $this->attributes['name'] = Str::of($value)->trim()->title();
    }

    public function setDescriptionAttribute($value)
    {
        return $this->attributes['description'] = Str::of($value)->trim()->ucfirst();
    }
}

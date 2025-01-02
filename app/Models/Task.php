<?php

namespace App\Models;

// use Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Support\Str;

class Task extends Model
{
    /** @use HasFactory<\Database\Factories\TaskFactory> */
    use HasFactory;

    protected $fillable = ['name'];

    // public function getNameAttribute($value)
    // {
    //     return Str::lower($value);
    // }

    // public function name(): Attribute
    // {
    //     return Attribute::make(
    //         get: fn(string $value) => Str::lower($value)
    //     );
    // }

    // public function setNameAttribute($value)
    // {
    //     $this->attributes['name'] = Str::kebab($value);
    // }

        public function name(): Attribute
        {
            return Attribute::make(
                get: fn(string $value) => Str::kebab($value),
                set: fn(string $value) => Str::upper($value),
            );
        }
}

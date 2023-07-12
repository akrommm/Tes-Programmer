<?php

namespace App\Models;

use App\Http\Middleware\Authenticate;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class ModelAuthenticate extends Authenticatable
{
    protected $keyType = 'string';
    public $incrementing = false;

    public static function boot()
    {
        parent::boot();
        static::creating(function ($item) {
            $item->id = (string) Str::orderedUuid();
        });
    }

    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }

    public function scopeHasRole($query, $value)
    {
        return $this->role()->whereHas('module', function ($query) use ($value) {
            return $query->where('tag', $value);
        })->count() > 0;
    }
}

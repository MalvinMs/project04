<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Team extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug'];

    public function employees(): HasMany
    {
        return $this->hasMany(Employee::class);
    }

    public function departments(): HasMany
    {
        return $this->hasMany(Employee::class);
    }
    // public function country(): HasMany
    // {
    //     return $this->hasMany(Country::class);
    // }
    // public function state(): HasMany
    // {
    //     return $this->hasMany(State::class);
    // }
    // public function city(): HasMany
    // {
    //     return $this->hasMany(City::class);
    // }

    public function members(): BelongsToMany
    {
        return $this->belongsToMany(User::class);
    }
}

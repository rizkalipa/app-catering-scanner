<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $guarded = [];

    protected $appends = ['type_name'];

    public function getTypeNameAttribute()
    {
        return isset($this->attributes['type']) && $this->attributes['type'] === 'food' ? 'Makanan' : 'Minuman';
    }
}

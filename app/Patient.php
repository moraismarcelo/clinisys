<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $guarded = [];

    public function exame()
    {
        return $this->hasMany(Exame::class);
    }
}

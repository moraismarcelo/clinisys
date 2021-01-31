<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Exame extends Model
{
    use SoftDeletes;
    protected $fillable = ['nome', 'preco', 'paciente_id'];

    public function paciente()
    {
        return $this->belongsTo(Patient::class);
    }
}

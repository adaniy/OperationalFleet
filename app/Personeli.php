<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;
use Illuminate\Notifications\Notifiable;

class Personeli extends Model
{

    use softDeletes,Notifiable;

    protected $dates = ['deleted_at'];

    public $table = "personeli";

    protected $fillable = [
        'emri_mbiemri',
        'nr_personal',
        'email',
        'data_lindjes',
        'nr_telefonite',
        'niveli_shkollimit',
        'grupi_gjakut',
    ];
}

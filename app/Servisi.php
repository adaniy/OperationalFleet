<?php


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Servisi extends Model
{

    use softDeletes;

    protected $dates = ['deleted_at'];

    public $table = "servisi";

    protected $fillable = [
        'automjeti_id',
        'personeli_id',
        'pershkrimi',
        'shuma',
        'servisi_ardhshem',
    ];
}

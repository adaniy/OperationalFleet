<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;
use App\Scopes\AutomjetiScope;

class automjeti extends Model
{

    use softDeletes;

    protected $dates = ['deleted_at'];

    protected static function boot(){
        parent::boot();
        static::addGlobalScope(new AutomjetiScope);
    }


    public $table = "automjeti";

    protected $fillable = [
        'nr_shasise',
        'regjistrimi',
        'lloji',
        'brendi',
        'viti',
        'aktiv',
        'kilometrat',
        'image'
    ];
}

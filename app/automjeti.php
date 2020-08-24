<?php

namespace App;

use App\Transformers\AutomjetiTransformer;
use App\Transformers\UserTransformer;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;
use App\Scopes\AutomjetiScope;

class automjeti extends Model
{

    use softDeletes;

    public $transformer = AutomjetiTransformer::class;


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

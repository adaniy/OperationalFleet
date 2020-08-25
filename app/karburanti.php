<?php

namespace App;

use App\Transformers\AutomjetiTransformer;
use App\Transformers\KarburantiTransformer;
use App\Transformers\UserTransformer;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class karburanti extends Model
{

    use softDeletes;

    protected $dates = ['deleted_at'];

    public $transformer = KarburantiTransformer::class;

    public $table = "karburanti";

    protected $fillable = [
        'automjeti_id',
        'personeli_id',
        'litra',
        'shuma',
    ];
}

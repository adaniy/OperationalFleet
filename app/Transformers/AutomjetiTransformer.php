<?php

namespace App\Transformers;

use App\automjeti;
use League\Fractal\TransformerAbstract;

class AutomjetiTransformer extends TransformerAbstract
{
    /**
     * List of resources to automatically include
     *
     * @var array
     */
    protected $defaultIncludes = [
        //
    ];

    /**
     * List of resources possible to include
     *
     * @var array
     */
    protected $availableIncludes = [
        //
    ];

    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform(automjeti $automjeti)
    {
        return [
            'identifier' =>(int)$automjeti->id,
            'NrShasise' =>(string)$automjeti->nr_shasise,
            'Lloji' =>(string)$automjeti->lloji,
            'Viti' =>(string)$automjeti->brendi,
            'regjistrimi' =>(string)$automjeti->regjistrimi,
            'kilometrat' => (String)($automjeti->kilometrat),
            'image' => (String)($automjeti->image),
            'creationDate' => (string)$automjeti->created_at,
            'lastChange' => (string)$automjeti->updated_at,
            'DeletedDate' => isset($automjeti->deleted_at) ? (string) $automjeti->deleted_at : null,

            'links' => [
                'rel' =>  'self',
                'href' =>  route('automjeti.show', $automjeti->id),
            ]

        ];
    }

    public static function originalAttribute($index)
    {
        $attributes = [
            'identifier' =>'id',
            'NrShasise' =>'nr_shasise',
            'Lloji' =>'lloji',
            'Viti' =>'viti',
            'Brendi'=>'brendi',
            'Regjistrimi' =>'regjistrimi',
            'Kilometrat' => 'kilometrat',
            'image' => 'image',
            'creationDate' => 'created_at',
            'lastChange' => 'updated_at',
            'DeletedDate' => 'deleted_at',
        ];
        return isset($attributes[$index]) ? $attributes[$index] : null ;
    }

    public static function transformedAttribute($index)
    {
        $attributes = [
            'id' =>'identifier',
            'nr_shasise' =>'NrShasise',
            'lloji' =>'Lloji',
            'viti' =>'Viti',
            'brendi' => 'Brendi',
            'regjistrimi' =>'Regjistrimi',
            'kilometrat' => 'Kilometrat',
            'image' => 'image',
            'created_at' => 'creationDate',
            'updated_at' => 'lastChange',
            'deleted_at' => 'DeletedDate',
        ];
        return isset($attributes[$index]) ? $attributes[$index] : null ;
    }
}

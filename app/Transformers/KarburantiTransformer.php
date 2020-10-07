<?php

namespace App\Transformers;

use App\karburanti;
use League\Fractal\TransformerAbstract;

class KarburantiTransformer extends TransformerAbstract
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
    public function transform(karburanti $k)
    {
            return [
                'identifier' =>(int)$k->id,
                'Automjeti' =>(string)$k->automjeti_id,
                'Personeli' =>(string)$k->personeli_id,
                'Litra' =>(string)$k->litra,
                'Shuma' =>(string)$k->shuma,
                'CreationDate' => (string)$k->created_at,
                'lastChange' => (string)$k->updated_at,
                'DeletedDate' => isset($k->deleted_at) ? (string) $k->deleted_at : null,

                'links' => [
                    'rel' =>  'self',
                    'href' =>  route('karburant.show', $k->id),
                ],
                [
                    'rel' =>  'automjeti.show',
                    'href' =>  route('automjeti.show', $k->automjeti_id),
                ]

            ];
    }

    public static function originalAttribute($index)
    {
        $attributes = [
            'identifier' =>'id',
            'Automjeti' =>'automjeti_id',
            '' =>'personeli_id',
            'Litra' =>'litra',
            'Shuma' =>'shuma',
            'creationDate' => 'created_at',
            'lastChange' => 'updated_at',
            'DeletedDate' => 'deleted_at',
        ];
        return isset($attributes[$index]) ? $attributes[$index] : null ;
    }

    public static function transformedAttribute($index)
    {
        $attributes = [
            'identifier' =>'id',
            'automjeti_id' =>'Automjeti',
            'personeli_id' =>'Personeli',
            'litra' =>'Litra',
            'shuma' =>'Shuma',
            'created_at' => 'creationDate',
            'updated_at' => 'lastChange',
            'deleted_at' => 'DeletedDate',
        ];
        return isset($attributes[$index]) ? $attributes[$index] : null ;
    }
}

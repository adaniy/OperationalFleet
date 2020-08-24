<?php

namespace App\Transformers;

use App\User;
use League\Fractal\TransformerAbstract;

class UserTransformer extends TransformerAbstract
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
    public function transform(User $user)
    {
        return [
            'id' =>(int)$user->id,
            'name' =>(string)$user->name,
            'email' =>(string)$user->email,
            'email_verified_at' =>$user->email_verified_at,
            'isAdmin' => ($user->admin === 'true'),
            'creationDate' => $user->created_at,
            'lastChange' => $user->updated_at,
            'DeletedDatae' => isset($user->deleted_at) ? (string) $user->deleted_at : null,

        ];
    }
}

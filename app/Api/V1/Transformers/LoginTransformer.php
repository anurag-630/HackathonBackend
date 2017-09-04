<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 05-Sep-17
 * Time: 12:42 AM
 */

namespace App\Api\V1\Transformers;


use App\Signup;
use League\Fractal\TransformerAbstract;

class LoginTransformer extends TransformerAbstract
{
    public function transform(Signup $signup)
    {
        return [
            'id' => (int)$signup->id,
            'name' => $signup->name,
            'email' => $signup->email,
            'login_as' => $signup->login_as,
            'validation' => 'successfull',
            'created_at' => $signup->created_at->toDateTimeString(),
            'updated_at' => $signup->updated_at->toDateTimeString()
        ];
    }

}
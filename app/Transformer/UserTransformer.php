<?php
/**
 * Created by PhpStorm.
 * User: Faycal
 * Date: 05/03/2019
 * Time: 11:25
 */

namespace App\Transformer;

use League\Fractal\TransformerAbstract;

class UserTransformer extends TransformerAbstract {

    public function transform($user) {
        return [
            'id' => $user->id,
            'name' => $user->name,
            'email' => $user->email
        ];
    }
}
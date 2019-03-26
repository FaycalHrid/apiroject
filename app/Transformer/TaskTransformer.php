<?php
/**
 * Created by PhpStorm.
 * User: Faycal
 * Date: 19/02/2019
 * Time: 11:27
 */


namespace App\Transformer;

use League\Fractal\TransformerAbstract;

class TaskTransformer extends TransformerAbstract {

    public function transform($task) {
        return [
            'id' => $task->id,
            'task' => $task->name,
            'task_description' => $task->description
        ];
    }
}
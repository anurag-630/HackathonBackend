<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 05-Sep-17
 * Time: 1:24 AM
 */

namespace App\Api\V1\Transformers;


use App\Question;
use League\Fractal\TransformerAbstract;

class QuestionTransformer extends TransformerAbstract
{
    public function transform(Question $question)
    {
        return [
            'ques_id' => (int)$question->id,
            'student_id' => (int)$question->student_id,
            'question' => $question->question,
            'technology' => $question->technology,
            'created_at' => $question->created_at->toDateTimeString(),
            'updated_at' => $question->updated_at->toDateTimeString()
        ];
    }
}
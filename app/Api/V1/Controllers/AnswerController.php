<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 06-Sep-17
 * Time: 2:17 AM
 */

namespace App\Api\v1\Controllers;


use App\Answer;
use App\Api\V1\Requests\AnswerRequest;
use App\Api\V1\Transformers\AnswerTransformer;
use Dingo\Api\Routing\Helpers;
use Illuminate\Routing\Controller;

class AnswerController extends Controller
{
    use Helpers;

    public function store(AnswerRequest $request)
    {
        $answer = new Answer();
        $answer->question_id = $request->getQuestionID();
        $answer->answer = $request->getAnswer();
        $answer->mentor_id = $request->getAnswerBy();
        $answer->save();
        return $this->response->item($answer,new AnswerTransformer());
    }
}
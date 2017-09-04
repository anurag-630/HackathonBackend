<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 05-Sep-17
 * Time: 1:27 AM
 */

namespace App\Api\v1\Controllers;


use App\Api\V1\Requests\QuestionRequest;
use App\Api\V1\Transformers\QuestionTransformer;
use App\Api\V1\Transformers\QuestionTransformerAll;
use App\Question;
use Dingo\Api\Routing\Helpers;
use Illuminate\Routing\Controller;

class QuestionController extends Controller
{
    use Helpers;

    public function store(QuestionRequest $request)
    {
        $question = new Question();
        $question->signup_id = $request->senderID();
        $question->question = $request->question();
        $question->technology = $request->tech();
        $question->save();
        return $this->response->item($question,new QuestionTransformer());
    }

    public function index(){
        $question=Question::all();
        return $this->response->collection($question,new QuestionTransformerAll());
    }

}
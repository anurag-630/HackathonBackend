<?php

namespace App\Api\v1\Controllers;

use App\Api\V1\Requests\LoginRequest;
use App\Api\V1\Requests\SignupRequest;
use App\Api\V1\Transformers\LoginTransformer;
use App\Api\V1\Transformers\QuestionTransformerAll;
use App\Signup;
use Dingo\Api\Routing\Helpers;
use Illuminate\Routing\Controller;
use App\Api\V1\Transformers\SignupTransformer;


/**
 * Created by PhpStorm.
 * User: user
 * Date: 04-Sep-17
 * Time: 10:13 PM
 */
class SignupController extends Controller
{
    use Helpers;

    public function store(SignupRequest $request)
    {
        $signup = new Signup();
        $signup->name = $request->getName();
        $signup->email = $request->getEmail();
        $signup->password = $request->getPassword();
        $signup->login_as = $request->getLoginAs();
        $signup->save();
        return $this->response->item($signup, new SignupTransformer());

    }

    public function authenticate(LoginRequest $request)
    {
        $user = Signup::where('email', $request->getEmail())->where('password', $request->getPassword())->where('login_as', $request->getLoginAs())->first();
        return $this->response->item($user, new LoginTransformer());
    }

    public function questionsAll($id){
        $user=Signup::find($id);
        return $this->response->collection($user->question,new QuestionTransformerAll());
    }
}
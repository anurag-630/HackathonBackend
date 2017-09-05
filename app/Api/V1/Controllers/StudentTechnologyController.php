<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 05-Sep-17
 * Time: 2:48 AM
 */

namespace App\Api\v1\Controllers;


use App\Api\V1\Requests\StudentTechnologyRequest;
use App\Api\V1\Transformers\StudentTechnologyTransformer;
use App\StudentTechnology;
use Dingo\Api\Routing\Helpers;
use Illuminate\Routing\Controller;

class StudentTechnologyController extends Controller
{
    use Helpers;

    public function store(StudentTechnologyRequest $request)
    {
        $technology = new StudentTechnology();
        $technology->sender_id=$request->getSenderID();
        $technology->technology=$request->getTechnology();
        $technology->save();
        return $this->response->item($technology,new StudentTechnologyTransformer());
    }

    public function index(){
        $tech=StudentTechnology::all();

        return $this->response->collection($tech,new StudentTechnologyTransformer());
    }

   
}
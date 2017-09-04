<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 05-Sep-17
 * Time: 2:48 AM
 */

namespace App\Api\v1\Controllers;


use App\Api\V1\Requests\TechnologyRequest;
use App\Api\V1\Transformers\TechnologyTransformer;
use App\Technology;
use Dingo\Api\Routing\Helpers;
use Illuminate\Routing\Controller;

class TechnologyController extends Controller
{
    use Helpers;

    public function store(TechnologyRequest $request)
    {
        $technology = new Technology();
        $technology->signup_id=$request->getSenderID();
        $technology->technology=$request->getTechnology();
        $technology->save();
        return $this->response->item($technology,new TechnologyTransformer());
    }
}
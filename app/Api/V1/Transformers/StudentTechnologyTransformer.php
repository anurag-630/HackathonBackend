<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 05-Sep-17
 * Time: 2:53 AM
 */

namespace App\Api\V1\Transformers;


use App\StudentTechnology;
use League\Fractal\TransformerAbstract;

class StudentTechnologyTransformer extends TransformerAbstract
{
    public function transform(StudentTechnology $technology)
    {
        return [
            'tech_id' => (int)$technology->id,
            'signup_id' => (int)$technology->signup_id,
            'technology' => $technology->technology,
            'created_at' => $technology->created_at->toDateTimeString(),
            'updated_at' => $technology->updated_at->toDateTimeString()
        ];
    }
}
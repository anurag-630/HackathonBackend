<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 06-Sep-17
 * Time: 4:49 PM
 */

namespace App\Api\V1\Transformers;


use App\Technology;
use League\Fractal\TransformerAbstract;

class TechnologyTransformer extends TransformerAbstract
{
    public function transform(Technology $technology)
    {
        return [
            'tech_id' => (int)$technology->id,
            'technology' => $technology->technology,
            'created_at' => $technology->created_at->toDateTimeString(),
            'updated_at' => $technology->updated_at->toDateTimeString()
        ];
    }
}
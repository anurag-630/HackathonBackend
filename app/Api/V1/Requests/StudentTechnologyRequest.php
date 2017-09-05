<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 05-Sep-17
 * Time: 2:50 AM
 */

namespace App\Api\V1\Requests;


use App\Contracts\AddStudentTechnology;

class StudentTechnologyRequest extends Request implements AddStudentTechnology
{
    const SENDER_ID = 'sender_id';
    const TECHNOLOGY = 'technology';

    public function getTechnology()
    {
        // TODO: Implement getTechnology() method.
        return $this->get(self::TECHNOLOGY);
    }

    public function getSenderID()
    {
        // TODO: Implement getSenderID() method.
        return $this->get(self::SENDER_ID);
    }
}
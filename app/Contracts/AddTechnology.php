<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 05-Sep-17
 * Time: 2:49 AM
 */

namespace App\Contracts;


interface AddTechnology
{
    public function getTechnology();

    public function getSenderID();
}
<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 04-Sep-17
 * Time: 10:16 PM
 */

namespace App\Api\V1\Requests;


use App\Contracts\AddSignupDetails;

class SignupRequest extends Request implements AddSignupDetails
{
    const NAME = 'name';
    const EMAIL = 'email';
    const LOGIN_AS = 'login_as';
    const PASSWORD = 'password';

    public function getName()
    {
        // TODO: Implement getName() method.
        return $this->get(self::NAME);
    }

    public function getEmail()
    {
        // TODO: Implement getEmail() method.
        return $this->get(self::EMAIL);
    }

    public function getLoginAs()
    {
        // TODO: Implement getLoginAs() method.
        return $this->get(self::LOGIN_AS);
    }

    public function getPassword()
    {
        return $this->get(self::PASSWORD);
    }
}
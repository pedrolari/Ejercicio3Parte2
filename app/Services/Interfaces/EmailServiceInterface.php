<?php

namespace App\Services\Interfaces;

use App\Entities\Email;
use App\Entities\Study;
use App\Entities\User as UserEntity;

interface EmailServiceInterface
{
    /**
     * @param Email $email
     * @return void
     */
    public function send(Email $email): void;

    /**
     * @param UserEntity $userEntity
     * @return void
     */
    public function sendNotification(UserEntity $userEntity): void;
}

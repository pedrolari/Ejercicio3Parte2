<?php

namespace App\Services;

use App\Entities\Email;
use App\Entities\User as UserEntity;
use App\Services\Interfaces\EmailServiceInterface;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Throwable;

class EmailService implements EmailServiceInterface
{
    /**
     * @param Email $email
     * @return void
     */
    public function send(Email $email): void
    {
        DB::table('emails')->insert([
            'eml_from' => $email->getFrom(),
            'eml_from_name' => $email->getFromName(),
            'eml_to' => $email->getTo(),
            'eml_subject' => $email->getSubject(),
            'eml_body' => $email->getBody()
        ]);
    }


    /**
     * @param UserEntity $userEntity
     * @return void
     */
    public function sendNotification(UserEntity $userEntity): void
    {
        $email = new Email();
        $email
            ->setFrom('prueba@gmail.com')
            ->setFromName('Leadtech Team')
            ->setTo($userEntity->getEmail())
            ->setSubject('Welcome to Leadtech')
            ->setBody('Hello ' . $userEntity->getName() . ', thanks for registering on our site. <br>Regards, Leadtech Team');

        $this->send($email);
    }
}

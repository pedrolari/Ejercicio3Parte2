<?php

namespace App\Models;

use App\Entities\User as UserEntity;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;


    /**
     * @return UserEntity
     */
    public function toEntity(): UserEntity
    {
        $userEntity = new UserEntity();
        $userEntity
            ->setId($this->id)
            ->setName($this->name)
            ->setEmail($this->email)
        ;

        return $userEntity;
    }
}

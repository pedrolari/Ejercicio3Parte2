<?php

namespace App\Http\Controllers\Api\Interfaces;

use App\Http\Resources\UserResource;
use Illuminate\Http\Request;

interface UserControllerInterface
{
    /**
     * @param Request $request
     * @return UserResource
     */
    public function registerAndNotify(Request $request): UserResource;
}

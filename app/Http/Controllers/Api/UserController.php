<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use App\Services\Interfaces\UserServiceInterface;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class UserController extends Controller implements Interfaces\UserControllerInterface
{
    private const USER_RULES = [
        'email' => 'required|string|min:3',
        'name' => 'required|string|min:3',
    ];

    /**
     * @param UserServiceInterface $userService
     */
    public function __construct(
        private UserServiceInterface $userService
    ) {}

    /**
     * @param Request $request
     * @return UserResource
     */
    public function registerAndNotify(Request $request): UserResource
    {
        $validateFields = $request->validate(self::USER_RULES);

        return new UserResource($this->userService->registerAndNotify($validateFields));
    }
}

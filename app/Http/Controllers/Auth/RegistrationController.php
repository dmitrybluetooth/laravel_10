<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegistrationRequest;
use App\Services\RegistrationService;
use Illuminate\Validation\ValidationException;

class RegistrationController extends Controller
{
    private RegistrationService $loginService;

    /**
     * @param RegistrationService $loginService
     */
    public function __construct(RegistrationService $loginService)
    {
        $this->loginService = $loginService;
    }


    /**
     * @param RegistrationRequest $request
     * @return \Illuminate\Http\JsonResponse
     * @throws ValidationException
     */
    public function register(RegistrationRequest $request)
    {
        $data = $request->validated();

        if ($this->loginService->register($data['name'], $data['email'], $data['password'])) {
            return response()->json();
        } else {
            throw ValidationException::withMessages([
                'email' => [trans('auth.failed')],
            ]);
        }
    }
}

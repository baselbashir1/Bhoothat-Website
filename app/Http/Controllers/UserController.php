<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\UserRequest;
use App\Http\Services\UserService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    private UserService $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function register(UserRequest $request)
    {
        // $this->userService->register($request);
        $formFields = $request->validated();
        $formFields['password'] = bcrypt($formFields['password']);
        // $user = $this->userRepository->createUser($formFields);
        $user = $this->userService->register($formFields);
        Auth::guard('web')->login($user);
        return redirect()->route('request-research');
    }

    public function login(LoginRequest $request)
    {
        if ($this->userService->login($request))
            return redirect()->route('request-research');
        return back()->withErrors(['email' => __('trans.invalid_credentials')])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        $this->userService->logout($request);
        return redirect()->route('index');
    }
}

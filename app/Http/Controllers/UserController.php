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
        $this->userService->register($request);
        return redirect()->route('request-research');
    }

    public function login(LoginRequest $request)
    {
        $formFields = $request->validated();

        if (Auth::guard('web')->attempt($formFields)) {
            $request->session()->regenerate();

            return redirect()->route('request-research');
        }

        return back()->withErrors(['email' => 'Invalid Credentials'])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        $this->userService->logout($request);
        return redirect()->route('index');
    }
}

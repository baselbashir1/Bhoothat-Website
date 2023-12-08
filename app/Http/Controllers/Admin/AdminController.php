<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\LoginRequest;
use App\Http\Services\Admin\AdminService;
use App\Http\Services\Admin\OrderService;
use App\Http\Services\Admin\ResearchService;
use App\Http\Services\Admin\UserService;

class AdminController extends Controller
{
    private AdminService $adminService;
    private UserService $userService;
    private OrderService $orderService;
    private ResearchService $researchService;

    public function __construct(AdminService $adminService, UserService $userService, OrderService $orderService, ResearchService $researchService)
    {
        $this->adminService = $adminService;
        $this->userService = $userService;
        $this->orderService = $orderService;
        $this->researchService = $researchService;
    }

    public function dashboard()
    {
        $users = $this->userService->users();
        $orders = $this->orderService->orders();
        $researches = $this->researchService->researches();
        return view('admin.pages.dashboard', ['title' => 'لوحة التحكم'], [
            'users' => $users,
            'orders' => $orders,
            'researches' => $researches
        ]);
    }

    public function viewSignIn()
    {
        return view('admin.pages.authentication.boxed.signin', ['title' => 'تسجيل الدخول']);
    }

    public function login(LoginRequest $request)
    {
        $this->adminService->login($request);
        return redirect()->route('dashboard');
    }

    public function logout(Request $request)
    {
        $this->adminService->logout($request);
        return redirect()->route('admin-sign-in');
    }

    public function redirectToDashboard()
    {
        return redirect()->route('dashboard');
    }
}

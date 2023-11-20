<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Services\UserService;
use App\Mail\RegistrationThankYouMail;
use App\Http\Requests\RegistrationRequest;

class UserController extends Controller
{
    protected $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function showRegistrationForm()
    {
        return view('user.registration');
    }

    public function register(RegistrationRequest $request)
    {
        Mail::to($request->email)->send(new RegistrationThankYouMail($request->name));
        $userData = $request->only([
            'name',
            'email',
            'password',
            'telephone',
            'address1',
            'address2',
            'city',
            'state',
            'zip',
            'username',
            'password'
        ]);
        $user = $this->userService->insert($userData);
        return response()->json([
            'success' => true,
            'name' => $request->name
        ], 200);
    }

    public function showThankYouPage(Request $request)
    {
        return view('user.thank_you', ['name' => $request->name]);
    }
}

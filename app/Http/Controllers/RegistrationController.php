<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Contracts\View\Factory;

class RegistrationController extends Controller
{
    /**
     * @var User
     */
    private $user;

    /**
     * RegistrationController constructor.
     *
     * @param User $user
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * @return Factory|\Illuminate\View\View
     */
    public function create()
    {
        $users = $this->user->fetchAll();
        $arrayUsers = json_decode(json_encode($users), true);
        return view('registration.create', ['users' => $arrayUsers]);
    }

    /**
     * @return Factory|\Illuminate\View\View
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store()
    {
        $this->validate(request(), [
            'first_name'    => 'required',
            'last_name'     => 'required',
            'phone_number'  => 'required',
            'date_of_birth' => 'required'
        ]);
        User::create(request(['first_name', 'last_name', 'phone_number', 'date_of_birth']));
        $users = $this->user->fetchAll();
        $arrayUsers = json_decode(json_encode($users), true);
        return view('registration.create', ['users' => $arrayUsers]);
    }
}

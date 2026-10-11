<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index()
    {
        $users = [
            [
                'id' => 1,
                'username' => 'admin',
                'name' => 'Alex Santos',
                'role' => 'Administrator',
            ],
            [
                'id' => 2,
                'username' => 'jsmith',
                'name' => 'Jamie Smith',
                'role' => 'Staff',
            ],
            [
                'id' => 3,
                'username' => 'mgarcia',
                'name' => 'Morgan Garcia',
                'role' => 'Staff',
            ],
            [
                'id' => 4,
                'username' => 'alee',
                'name' => 'Ashley Lee',
                'role' => 'Manager',
            ],
            [
                'id' => 5,
                'username' => 'rbrown',
                'name' => 'Riley Brown',
                'role' => 'Staff',
            ],
        ];

        return view('users', [
            'title' => 'User Accounts',
            'users' => $users,
        ]);
    }
}
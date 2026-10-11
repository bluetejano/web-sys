<?php

namespace App\Controllers;

class Customers extends BaseController
{
    public function index()
    {
        $customers = [
            [
                'id' => 1,
                'name' => 'Maria Santos',
                'email' => 'maria@example.com',
                'phone' => '09171234567'
            ],
            [
                'id' => 2,
                'name' => 'John Reyes',
                'email' => 'john@example.com',
                'phone' => '09182345678'
            ],
            [
                'id' => 3,
                'name' => 'Angela Cruz',
                'email' => 'angela@example.com',
                'phone' => '09193456789'
            ],
            [
                'id' => 4,
                'name' => 'Daniel Garcia',
                'email' => 'daniel@example.com',
                'phone' => '09204567891'
            ],
            [
                'id' => 5,
                'name' => 'Sofia Mendoza',
                'email' => 'sofia@example.com',
                'phone' => '09215678912'
            ]
        ];

        return view('customers', [
            'title' => 'Customer Accounts',
            'customers' => $customers
        ]);
    }
}
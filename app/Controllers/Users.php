<?php

namespace App\Controllers;

use App\Models\UserModel;

class Users extends BaseController
{
    protected $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    public function index()
    {
        $data['users'] = $this->userModel->findAll();

        return view('users/index', $data);
    }

    public function new()
    {
        return view('users/new');
    }

    public function create()
    {
        $rules = [
            'username' => 'required|is_unique[users.username]',
            'full_name' => 'required'
        ];

        if (!$this->validate($rules))
        {
            return redirect()->back()->withInput();
        }

        $this->userModel->save([
            'username' => $this->request->getPost('username'),
            'full_name' => $this->request->getPost('full_name'),
            'role' => $this->request->getPost('role')
        ]);

        return redirect()->to('/users');
    }

    public function edit($id)
    {
        $data['user'] = $this->userModel->find($id);

        return view('users/edit', $data);
    }

    public function update($id)
    {
        $user = $this->userModel->find($id);

        $avatar = $user['avatar'];

        $file = $this->request->getFile('avatar');

        if ($file && $file->isValid() && !$file->hasMoved())
        {
            $validationRule = [
                'avatar' => [
                    'rules' => 'max_size[avatar,2048]|mime_in[avatar,image/png,image/jpeg]'
                ]
            ];

            if ($this->validate($validationRule))
            {
                $newName = $file->getRandomName();

                $file->move(
                    FCPATH . 'uploads',
                    $newName
                );

                $avatar = $newName;
            }
        }

        $this->userModel->update($id, [
            'username' => $this->request->getPost('username'),
            'full_name' => $this->request->getPost('full_name'),
            'role' => $this->request->getPost('role'),
            'avatar' => $avatar
        ]);

        return redirect()->to('/users');
    }
}
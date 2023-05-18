<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Models\UserModel; 

class Login extends ResourceController
{
    protected $session;

    public function __construct() {
        $this->userModel = new UserModel();
        $this->session = \Config\Services::session();
    }

    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    public function index()
    {
        echo view('auth/login');
    }

    /**
     * Return the properties of a resource object
     *
     * @return mixed
     */
    public function show($id = null)
    {
        //
    }

    /**
     * Return a new resource object, with default properties
     *
     * @return mixed
     */
    public function new()
    {
        //
    }

    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    public function create()
    {
        try{
            $validate = $this -> validate([
                'emailaddress' => 'required',
                'passwordemployee' => 'required',
            ], [
                "emailaddress" => [
                    "required" => "Email harus diisi!",
                ],
                "passwordemployee" => [
                    "required" => "Anda harus mengisi kata sandi!",
                ],
            ]);
            if(!$validate) {
                session()->setFlashData("errors", $this->validator->listErrors());
                return redirect()->to(previous_url())->withInput();
            }
            $email = $this->request->getPost('emailaddress');
            $password = $this->request->getPost('passwordemployee');

            $user = $this->userModel
                ->where('emailaddress', $email)
                ->first();
            if(!$user) {
                session() -> setFlashData ("errors", "Email or Password is invalid");
                return redirect()->to(previous_url())->withInput();
            }
            if(md5($password) != $user['passwordemployee']) {
                session() -> setFlashData ("errors", "Email or Password is invalid");
                return redirect()->to(previous_url())->withInput();
            }
            $this->session->set('id_employee', $user['id_employee']);
            $this->session->set('employeename', $user['employeename']);
            $this->session->set('loggedIn', true);

            if($email == 'admindisini@gmail.com' && $password =='123345asdfghjkl')
            {
                return redirect()->to('/product');
                
            }
            else
            {
                return redirect()->to('/dashboard');
            }
        }catch (\Exception $e){
            return redirect()-> to (previous_url());
        }
    }

    /**
     * Return the editable properties of a resource object
     *
     * @return mixed
     */
    public function edit($id = null)
    {
        //
    }

    /**
     * Add or update a model resource, from "posted" properties
     *
     * @return mixed
     */
    public function update($id = null)
    {
        //
    }

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        //
    }
}
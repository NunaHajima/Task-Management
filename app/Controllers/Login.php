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
        $email = $this->request->getPost('emailaddress');
        $password = $this->request->getPost('passwordemployee');

        $user = $this->userModel
                ->where('emailaddress', $email)
                ->first();


        if(!$user) {
            throw new \Exception("User not found!");
        }

        if(md5($password) != $user['passwordemployee']) {
            throw new \Exception("Credentials is invalid!");
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
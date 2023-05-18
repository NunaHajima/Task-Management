<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Models\UserModel; 

class Product extends ResourceController
{
    public function __construct() {
        $this->UserModel = new UserModel();
    }
    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    public function index()
    {
        $user = $this->UserModel->findAll();

        $users = [
            "user" => $user
        ];

        echo view('layouts/admin/dashboard/dashboard/index', $users);
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
        echo view('layouts/admin/dashboard/product/new');
    }

    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    public function create()
    {
        $users = [
            "id" => uniqid(),
            "username" => $this->request->getPost('username'),
            "userrole" => $this->request->getPost('userrole'),
            "emailaddress" => $this->request->getPost('emailaddress'),
            "password" => $this->request->getPost('password'),
        ];

        $this->UserModel->insert($users);
        return redirect()->to('/product');
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
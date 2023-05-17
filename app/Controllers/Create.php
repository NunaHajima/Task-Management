<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Models\Users;

class Create extends ResourceController
{
    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    public function __construct() {
        $this->users = new Users();
    }
    public function index()
    {
        $users = $this->users->findAll();

        $data = [
            "users" => $users
        ];
        echo view ('layouts/users/create/index',$data);
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
        $data = [
            "id" => uniqid(),
            "date" => $this->request->getPost('date'),
            "taskname" => $this->request->getPost('taskname'),
            "assignedfrom" => $this->request->getPost('assignedfrom'),
            "comments" => $this->request->getPost('comments'),
        ];

        $this->users->insert($data);
        return redirect()->to('/dashboard');
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

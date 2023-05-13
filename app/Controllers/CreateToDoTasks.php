<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Models\Todo;

class CreateToDoTasks extends ResourceController
{
    
    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    public function __construct() {
        $this->todo = new Todo();
    }

    public function index()
    {
        $todo = $this->todo->findAll();

        $todos = [
            "todo" => $todo
        ];
        echo view ("layouts/admin/todotask/createtodotasks/index");
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

        $todos = [
            "id" => uniqid(),
            "taskname" => $this->request->getPost('taskname'),
            "comments" => $this->request->getPost('comments'),
        ];

        $this->todo->insert($todos);
        return redirect()->to('/createtodotasks');
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

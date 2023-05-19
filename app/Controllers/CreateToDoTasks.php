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
        echo view ("layouts/admin/todotask/createtodotasks/index", $todos);
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
            "date" => $this->request->getPost('date'),
            "taskname" => $this->request->getPost('taskname'),
            "assignedfrom" => $this->request->getPost('assignedfrom'),
            "comments" => $this->request->getPost('comments'),
            "status" => $this->request->getPost('status'),
        ];

        $this->todo->insert($todos);
        return redirect()->to('/viewmytodo');
    }

    /**
     * Return the editable properties of a resource object
     *
     * @return mixed
     */
    public function edit($id_todo = null)
    {
        $todo = $this->todo->find($id_todo);
        
        if (!$todo) {
            throw new \Exception("Data not found!");   
        }
        
        echo view ("layouts/admin/todotask/viewmytodo/edit", ["item" => $todo]);
    }

    /**
     * Add or update a model resource, from "posted" properties
     *
     * @return mixed
     */
    public function update($id_todo = null)
    {
        $todos = [
            "date" => $this->request->getPost('date'),
            "taskname" => $this->request->getPost('taskname'),
            "assignedfrom" => $this->request->getPost('assignedfrom'),
            "comments" => $this->request->getPost('comments'),
            "status" => $this->request->getPost('status'),
        ];

        $this->todo->update($id_todo, $todos);
        return redirect()->to('/viewmytodo');
    }

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id_todo = null)
    {
        $this->todo->delete($id_todo);
        return redirect()->to('/viewmytodo');
    }
}

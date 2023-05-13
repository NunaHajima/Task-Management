<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Models\Assign;

class AssignTasks extends ResourceController
{
    public function __construct() {
        $this->assign = new Assign();
    }
    
    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    public function index()
    {
        $assign = $this->assign->findAll();
        
        $assigned = [
            "assign" => $assign
        ];
        
        echo view ("layouts/admin/todotask/assigntasks/index", $assigned);
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
        echo view ("layouts/admin/todotask/assigntasks/index", $assigned);
    }

    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    public function create()
    {
        $assigned = [
            "id" => uniqid(),
            "date" => $this->request->getPost('date'),
            "taskname" => $this->request->getPost('taskname'),
            "assignedemployees" => $this->request->getPost('assignedemployees'),
            "comments" => $this->request->getPost('comments'),
        ];

        $this->assign->insert($assigned);
        return redirect()->to('/assigntasks');
    }

    /**
     * Return the editable properties of a resource object
     *
     * @return mixed
     */
    public function edit($id = null)
    {
        $product = $this->assign->find($id);
        
        if (!$product) {
            throw new \Exception("assignment not found!");   
        }
        
        echo view('product/edit', ["data" => $product]);
    }

    /**
     * Add or update a model resource, from "posted" properties
     *
     * @return mixed
     */
    public function update($id = null)

    {
        $assigned = [
            "id" => uniqid(),
            "date" => $this->request->getPost('date'),
            "taskname" => $this->request->getPost('taskname'),
            "assignedemployees" => $this->request->getPost('assignedemployees'),
            "comments" => $this->request->getPost('comments'),
        ];

        $this->assign ->update($id, $assigned);
        return redirect()->to('/assigntask');
    }

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        $this->assign->delete($id);
        return redirect()->to('assigntasks');
    }
}

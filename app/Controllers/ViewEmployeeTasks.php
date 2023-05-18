<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Models\Assign; 

class ViewEmployeeTasks extends ResourceController
{
    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    public function __construct() {
        $this->assign = new Assign();
    }

    public function index()
    {
        $assign = $this->assign->paginate(6,'assign');

        $assigned = [
            "assign" => $assign,
            "pager" => $this->assign->pager
        ];
        echo view ("layouts/admin/todotask/viewemployeetasks/index",$assigned);
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
        //
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

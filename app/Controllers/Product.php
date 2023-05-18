<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
//use App\Models\UserModel; 
use App\Models\Todo; 

class Product extends ResourceController
{
    
    public function __construct() {
        $this -> request = service("request");
        //$this->usermodel = new UserModel();
        $this->todo = new Todo();
    }

    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    public function index()
    {
        // $dataemployee = $this ->usermodel->get()->resultID->num_rows;
        // $data =[
        //     'title' => 'Users',
        //     'dataemployee' => $dataemployee
        // ];

        $datatodo = $this ->todo->get()->resultID->num_rows;
        $data2 =[
            'title' => 'todos',
            'datatodo' => $datatodo
        ];
        return view ('layouts/admin/dashboard/dashboard/index',$data2);
        
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
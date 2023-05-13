<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Models\EmployeeModel; 

class Product extends ResourceController
{
    public function __construct() {
        $this->employeeModel = new EmployeeModel();
    }


    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    public function index()
    {
        $employee = $this->employeeModel->findAll();

        $employees = [
            "employee" => $employee
        ];

        echo view('layouts/admin/dashboard/dashboard/index', $employees);
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
        $employees = [
            "id" => uniqid(),
            "employeename" => $this->request->getPost('employeename'),
            "employeerole" => $this->request->getPost('employeerole'),
            "emailaddress" => $this->request->getPost('emailaddress'),
            "password" => $this->request->getPost('password'),
        ];

        $this->employeeModel->insert($employees);
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
<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Models\EmployeeModel; 

class AddEmployee extends ResourceController
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
        echo view ('layouts/admin/employeesection/addemployee/index',$employees);
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
    public function edit($id_employee = null)
    {
        $employee = $this->employeeModel->find($id_employee);
        
        if (!$employee) {
            throw new \Exception("Data not found!");   
        }
        
        echo view ('layouts/admin/employeesection/viewallemployee/edit', ["item" => $employee]);
    }

    /**
     * Add or update a model resource, from "posted" properties
     *
     * @return mixed
     */
    public function update($id_employee = null)
    {
        $employees = [
            "employeename" => $this->request->getPost('employeename'),
            "employeerole" => $this->request->getPost('employeerole'),
        ];

        $this->employeeModel->update($id_employee, $employees);
        return redirect()->to('/viewallemployee');
    }

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id_employee = null)
    {
        $this->employeeModel->delete($id_employee);
        return redirect()->to('/viewallemployee');
    }
}

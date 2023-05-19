<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Models\UserModel; 

class AddEmployee extends ResourceController
{
    //add employee
    public function __construct() {
        $this->userModel = new UserModel();
    }
    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    
    public function index()
    {
        $user = $this->userModel->findAll();

        $users = [
            "user" => $user
        ];
        echo view ('layouts/admin/employeesection/addemployee/index',$users);
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

        $users = [
            "id" => uniqid(),
            "employeename" => $this->request->getPost('employeename'),
            "employeerole" => $this->request->getPost('employeerole'),
            "emailaddress" => $this->request->getPost('emailaddress'),
            "passwordtampil" => $this->request->getPost('passwordtampil'),
            "passwordemployee" => md5($this->request->getPost('passwordemployee')),
        ];

        $this->userModel->insert($users);
        return redirect()->to('/viewallemployee');
    }

    /**
     * Return the editable properties of a resource object
     *
     * @return mixed
     */
    public function edit($id_employee = null)
    {
        $user = $this->userModel->find($id_employee);
        
        if (!$user) {
            throw new \Exception("Data not found!");   
        }
        
        echo view ('layouts/admin/employeesection/viewallemployee/edit', ["item" => $user]);
    }

    /**
     * Add or update a model resource, from "posted" properties
     *
     * @return mixed
     */
    public function update($id_employee = null)
    {
        $users = [
            "employeename" => $this->request->getPost('employeename'),
            "employeerole" => $this->request->getPost('employeerole'),
        ];

        $this->userModel->update($id_employee, $users);
        return redirect()->to('/viewallemployee');
    }

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id_employee = null)
    {
        $this->userModel->delete($id_employee);
        return redirect()->to('/viewallemployee');
    }

}

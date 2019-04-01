<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Modules\EmployeeModule;
use App\Employee;

class EmployeeController extends Controller
{
  /**
   * Return book list
   */
  public function index()
  {
    $employeeModule = new EmployeeModule();
    $response = $employeeModule->list();
    return $this->response($response);
  }

  /**
   * Create employee
   *
   * Sample json input
   * {
   *     "data": {
   *         "name": "Sample name",
   *         "role": "Sample role"
   *     }
   * }
   */
  public function store(Request $request)
  {
    $data = $request->input('data');
    $employeeModule = new EmployeeModule();

    $response = $employeeModule->create($data);
    return $this->response($response);
  }
}

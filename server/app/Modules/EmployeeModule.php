<?php
/**
 * Created by PhpStorm.
 * User: dilruwan.wijesinghe
 * Date: 3/29/19
 * Time: 11:43 AM
 */

namespace App\Modules;

use App\Employee;
use App\Http\Resources\Employee as EmployeeResource;

class EmployeeModule extends BaseModule
{
  /**
   * Returns all employees
   */
  public function list()
  {
    try {
      $employees = Employee::all();
      // $employees = Employee::paginate(10);
      // $employees = Employee::all()->sortByDesc("updated_at")->values();
      // $employees = Employee::paginate(10)->sortByDesc("updated_at")->values();

      $resources = EmployeeResource::collection($employees);
      // Return a collection of employees
      return $this->success(200, $resources);
    } catch (\Exception $e) {
      error_log($e->getMessage());
      return $this->error(500, [], 'Error occurred while retrieving employees list');
    }
  }

  /**
   * Create employee
   *
   * @param $data array
   * [
   *     "name" => "Sample employee name",
   *     "role" => "Sample role"
   * ]
   */
  public function create($data)
  {
    try {
      $employee = new Employee();

      // TODO: Validation
      if (empty($data['name'])) {
        return $this->error(400, [], 'Name is mandatory field');
      }

      if (empty($data['role'])) {
        return $this->error(400, [], 'Role is mandatory field');
      }

      $employee->name = $data['name'];
      $employee->role = $data['role'];

      if ($employee->save()) {
        $resource = new EmployeeResource($employee);
        return $this->success(200, $resource, 'Employee created successfully');
      }

      return $this->error(500, [], 'Error occurred while creating employee');
    } catch (\Exception $e) {
      error_log($e->getMessage());
      return $this->error(500, [], 'Error occurred while creating employee');
    }
  }

  /**
   * Returns requested employee by given id
   *
   * @param integer $id Id of the requested employee
   */
  public function get($id)
  {
    try {
      // Get the employee
      $employee = Employee::find($id);
      if (!$employee) {
        return $this->error(404, [], 'Employee Not Found');
      }

      // Return a single employee
      $resource = new EmployeeResource($employee);
      return $this->success(200, $resource);
    } catch (\Exception $e) {
      error_log($e->getMessage());
      return $this->error(500, [], 'Error occurred while retrieving employee');
    }
  }

  /**
   * Delete requested employee by given id
   *
   * @param integer $id Id of the requested employee
   */
  public function destroy($id)
  {
    try {
      // Get the employee
      $employee = Employee::find($id);
      if (!$employee) {
        return $this->error(404, [], 'Employee Not Found');
      }
      if ($employee->delete()) {
        return $this->success(200, [], 'Employee deleted successfully');
      }
      return $this->error(500, [], 'Error occurred while deleting employee');
    } catch (\Exception $e) {
      error_log($e->getMessage());
      return $this->error(500, [], 'Error occurred while deleting employee');
    }
  }

  /**
   * Update employee
   *
   * @param integer $id Id of the requested employee
   * @param $data array
   * [
   *     "name" => "Updated employee name",
   *     "role" => "Updated employee role"
   * ]
   */
  public function update($id, $data)
  {
    try {
      // Get the employee
      $employee = Employee::find($id);
      if (!$employee) {
        return $this->error(404, [], 'Employee Not Found');
      }
      // TODO: Validation
      $employee->name = $data['name'];
      $employee->role = $data['role'];
      if ($employee->save()) {
        $resource = new EmployeeResource($employee);
        return $this->success(200, $resource, 'Employee updated successfully');
      }

      return $this->error(500, [], 'Error occurred while updating employee');
    } catch (\Exception $e) {
      error_log($e->getMessage());
      return $this->error(500, [], 'Error occurred while updating employee');
    }
  }


}
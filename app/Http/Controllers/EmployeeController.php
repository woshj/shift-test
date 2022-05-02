<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{

  public function show($id)
  {
    //find model by id with relation
    $employee = Employee::with(['job_title', 'office'])->find($id);
    //Check if model exists
    if(!$employee){return 'Error - Employee not found';}
    //return found record
    return $employee;
  }

  public function update($id, Request $request)
  {
    //find model by id
    $employee = Employee::find($id);
    //Check if model exists
    if(!$employee){return 'Error - Employee not found';}
    //Check if model was saved
    $saved = $employee->fill($request->all())->save();
    //return verbose messages
    if($saved) {
      return 'Success - Employee updated';
    } else {
      return 'Error - Employee not updated';
    }
  }

}

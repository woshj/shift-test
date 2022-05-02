<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JobTitle;

class JobTitleController extends Controller
{

  public function show($id)
  {
    //find model by id with relation
    $jobTitle = jobTitle::with('employees')->find($id);
    //Check if model exists
    if(!$jobTitle){return 'Error - Job title not found';}
    //return found record
    return $jobTitle;
  }

  public function update($id, Request $request)
  {
    //find model by id
    $JobTitle = JobTitle::find($id);
    //Check if model exists
    if(!$JobTitle){return 'Error - Job title not found';}
    //Check if model was saved
    $saved = $JobTitle->fill($request->all())->save();
    //return verbose messages
    if($saved) {
      return 'Success - Job title updated';
    } else {
      return 'Error - Job title not updated';
    }
  }

}

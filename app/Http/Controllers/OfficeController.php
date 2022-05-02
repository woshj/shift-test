<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Office;

class OfficeController extends Controller
{

  public function show($id)
  {
    //find model by id with relation
    $office = Office::with('employees')->find($id);
    //Check if model exists
    if(!$office){return 'Error - Office not found';}
    //return found record
    return $office;
  }

  public function update($id, Request $request)
  {
    //find model by id
    $office = Office::find($id);
    //Check if model exists
    if(!$office){return 'Error - Office not found';}
    //Check if model was saved
    $saved = $office->fill($request->all())->save();
    //return verbose messages
    if($saved) {
      return 'Success - Office updated';
    } else {
      return 'Error - Office not updated';
    }
  }

}

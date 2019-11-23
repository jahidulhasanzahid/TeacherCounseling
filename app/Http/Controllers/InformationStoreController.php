<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Information;

class InformationStoreController extends Controller
{
    public function store(Request $request){
    	$this->validate($request, [
      'teacher_code' => 'required',
      'day' => 'required',
      'slotOne' => 'required',
      'slotTwo' => 'required',
      'slotThree' => 'required',
      'slotFour' => 'required',
      'slotFive' => 'required',
      'slotSix' => 'required',

    ],
    [
      'teacher_code.required'  => 'Please Provide a teacher_code',
      'day.required'  => 'Please Provide day',
      'slotOne.required'  => 'Please Provide slotOne',
      'slotTwo.required'  => 'Please Provide slotTwo',
      'slotThree.required'  => 'Please Provide slotThree',
      'slotFour.required'  => 'Please Provide slotFour',
      'slotFive.required'  => 'Please Provide slotFive',
      'slotSix.required'  => 'Please Provide slotSix',
    ]);

    $infoSave = new Information();
    $infoSave->teacher_code = $request->teacher_code;
    $infoSave->day = $request->day;
    $infoSave->slotOne = $request->slotOne;
    $infoSave->slotTwo = $request->slotTwo;
    $infoSave->slotThree = $request->slotThree;
    $infoSave->slotFour = $request->slotFour;
    $infoSave->slotFive = $request->slotFive;
    $infoSave->slotSix = $request->slotSix;

    
    $infoSave->save();

    session()->flash('success', 'Your Message Send successfully !!');
    return back();
    }




     public function destroy($id)
  {
    $info = Information::find($id);
    if (!is_null($info)) {
      $info->delete();
    }else {
      return redirect()->route('home');
    }
    session()->flash('success', 'Information deleted!!!');
    return back();
  }


  public function update(Request $request,$id){

    $update = Information::where('day',$id)->where('teacher_code',$request->teacher_code)->update([
      'teacher_code'  => $request['teacher_code'],
      'day' =>  $request['day'],
      'slotOne' =>  $request['slotOne'],
      'slotTwo' =>  $request['slotTwo'],
      'slotThree' =>  $request['slotThree'],
      'slotFour' =>  $request['slotFour'],
      'slotFive' =>  $request['slotFive'],
      'slotSix' =>  $request['slotSix'],
    ]);
    if($update){
        return back();
      }
      else {
        return "Error";
      }
  }

}

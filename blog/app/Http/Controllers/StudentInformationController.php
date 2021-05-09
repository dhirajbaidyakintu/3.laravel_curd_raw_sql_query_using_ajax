<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
class StudentInformationController extends Controller{
    //For Selecting Data into database
    function onSelect(){
        $jsonData= DB::select('select * from students');
        $jsonString= json_encode($jsonData);
        $selectData= json_decode($jsonString);
        return view('select', ['selectKey'=>$selectData]);
    }



    //For inserting data into database
    function onInsert(Request $request){
        $name= $request->input('name');
        $class= $request->input('class');
        $roll= $request->input('roll');
        $age= $request->input('age');
        $email= $request->input('email');
        $result= DB::insert('INSERT INTO `students`(`name`, `class`, `roll`, `age`, `email`) VALUES (?,?,?,?,?)',[$name,$class,$roll,$age,$email]);
        if($result == true){
            return "Data Insert Success";
        }else{
            return "Data Insert Failed";
        }
    }



    //For delete data into database
    function onDelete(Request $request){
        $ID= $request->input('id');
        $result= DB::delete('DELETE FROM `students` WHERE `id`=?',[$ID]);
        if($result == true){
            return "Data Delete Success";
        }else{
            return "Data Delete Failed";
        }
    }



    //For update data into database
    function onUpdate(Request $request){
        $name= $request->input('name');
        $class= $request->input('class');
        $roll= $request->input('roll');
        $age= $request->input('age');
        $email= $request->input('email');
        $ID= $request->input('id');
        $result= DB::update('UPDATE `students` SET `name`=?,`class`=?,`roll`=?,`age`=?,`email`=? WHERE `id`=?',[$name, $class, $roll, $age, $email, $ID]);
        if($result == true){
            return "Data Update Successful";
        }else{
            return "Data Update Failed";
        }
    }
}

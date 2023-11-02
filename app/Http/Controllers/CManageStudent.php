<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\student;

class CManageStudent extends Controller
{
    public function index() {
        $students = student::all();
        return view( 'list_students', [ 'students' => $students ] );
    }

    public function delete($id) {
        $data = student::find( $id );
        $data->delete();
        return redirect('/');
    }

    public function edit($id) {
        $data = student::find( $id );
        return view('edit_student', ['data' => $data]);
    }

    public function addStudent() {
        return view('add_student', ['data' => []]);
    }

    public function save( Request $request ) {
        $objStudent = new student();
        $objStudent->name = $request->name;
        $objStudent->age = $request->age;
        $objStudent->save();
        return redirect('/');

    }

    public function update( Request $request ) {
        $objStudent = student::find( $request->id );
        $objStudent->name = $request->name;
        $objStudent->age = $request->age;
        $objStudent->save();
        return redirect('/');
    }

}

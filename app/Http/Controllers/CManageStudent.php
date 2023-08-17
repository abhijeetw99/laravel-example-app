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

}

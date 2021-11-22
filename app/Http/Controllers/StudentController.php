<?php

namespace App\Http\Controllers;

use App\DataTables\StudentDataTable;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function add(){
        return view('add');
    }

    public function addPost(request $request){
        $validated = $request->validate([
            'name' => 'required|unique:students|min:2|max:255|regex:/^[a-zA-Z]+$/u',
            'subject' => 'required',
            'mark' => 'required',
        ]);

       Student::create($request->all());
       $students=Student::paginate(4);
       return view('index',['students'=>$students]);
    }
    public function getStudents(Request $request)
    {
        if ($request->ajax()) {
            $data = Student::latest()->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $actionBtn = '<a href="javascript:void(0)" class="edit btn btn-success btn-sm">Edit</a> <a href="javascript:void(0)" class="delete btn btn-danger btn-sm">Delete</a>';
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
    }
    public function index1(StudentDataTable $dataTable)
    {
        return view('index1');
       
    //     $students=Student::paginate(4);
    //    return view('index',['students'=>$students]);
    }
   
    public function index(request $request)
    {
        $students=Student::paginate(4);
        return view('index',['students'=>$students]);
    }

    public function deleteItem($id){
        Student::where('id',$id)->delete();
        $students=Student::paginate(4);
        return view('index',['students'=>$students]);
    }
    public function edit($id){
        $student=Student::find($id);
        return view('update',['student'=>$student]);
    }

    public function updateItem($id,request $request){
       
        $request=$request->except('_token');
        $student=Student::where('id',$id)->update($request);
        $students=Student::paginate(4);
        return view('index',['students'=>$students]);
     }

}

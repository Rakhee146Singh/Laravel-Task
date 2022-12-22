<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $student = Student::all();
        return view('student', ['student' => $student]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //simple validate
        // $request->validate(
        //     [
        //         'name' => 'required',
        //         'city' => 'required',
        //         'marks' => 'required'
        //     ]
        // );

        //validation with using facade validator
        $validate = Validator::make($request->all(), [
            'name' => 'required|min:5',
            'city' => 'required',
            'subject' => 'required',
            'gender' => 'required',
            'marks' => 'required',
        ], [
            'name.required' => 'Name is must.',
            'name.min' => 'Name must have 5 char.',
        ]);
        if ($validate->fails()) {
            return back()->withErrors($validate->errors())->withInput();
        }
        $student = new Student;
        $student->name = $request->name;
        $student->city = $request->city;
        $student->subject = $request->subject;
        $student->gender = $request->gender;
        $student->marks = $request->marks;
        $student->save();
        return redirect(route('index'))->with('status', 'Inserted Successfully');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = Student::find($id);
        return view('editstudent', ['student' => $student]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate(
            [
                'name' => 'required',
                'city' => 'required',
                'subject' => 'required',
                'gender' => 'required',
                'marks' => 'required'
            ]
        );

        $student = Student::find($id);
        $student->name = $request->name;
        $student->city = $request->city;
        $student->subject = $request->subject;
        $student->gender = $request->gender;
        $student->marks = $request->marks;
        $student->save();
        return redirect(route('index'))->with('status', 'Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Student::findOrFail($id)->delete();
        return redirect(route('index'))->with('status', 'Deleted Successfully');
    }
}

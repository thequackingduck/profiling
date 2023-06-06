<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use App\College;
use App\Course;
class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $model = Course::all();
        $options = College::all();
        return view('admin.course.index', compact('model', 'options'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = $request->validate([
            'college_id' => 'required', 'max:255',
            'course' => 'required', 'max:255',
            'code' => 'required', 'max:255'
        ]);

        $exist = Course::where('course', $request->course)->where('code', $request->code)->first();

        if ($exist == null) {

            $model = new Course;
            $model->college_id = $request->college_id;
            $model->course = $request->course;
            $model->code = $request->code;
            $model->save();

            Session::flash('Inserted');
        }else{
            Session::flash('Duplicate');
        }

        
        return redirect('course');
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
        $model = Course::all();
        $options = College::all();
        $collection = Course::find($id);
        return view('admin.course.edit', compact('model' , 'collection', 'options'));
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
        $validator = $request->validate([
            'college_id' => 'required', 'max:255',
            'course' => 'required', 'max:255',
            'code' => 'required', 'max:255'
        ]);

        $model = Course::findOrFail($id);
        $model->college_id = $request->college_id;
        $model->course = $request->course;
        $model->code = $request->code;
        $model->save();

        Session::flash('Updated');
        
        return redirect('course');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

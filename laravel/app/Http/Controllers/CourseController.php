<?php

namespace App\Http\Controllers;

use App\Http\Requests\CourseRequest;
use App\Http\Requests\CourseUpdateRequest;
use App\Models\Course;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $courses = Course::paginate(5);

        return view("courses.index", compact("courses"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("courses.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CourseRequest $request)
    {
        $validated = $request->validated();
        if ($request->hasFile("image_url")) {
            $path = $request->file("image_url")->store("courses_image","public");
            $validated["image_url"] = $path;
        } 

        $course = Course::create($validated);

        return redirect()
        ->back()
        ->with("success","Курс: " .$course->course_name." успешно создан");

    }

    /**
     * Display the specified resource.
     */
    public function show(Course $course)
    {
        return view("lessons.show", compact("course"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Course $course)
    {
        return view("courses.edit", compact("course"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CourseUpdateRequest $request, Course $course)
    {
        $validated = $request->validated();
        if ($request->hasFile("image_url")) {
            $path = $request->file("image_url")->store("courses_image","public");
            $validated["image_url"] = $path;
        } else {
            unset( $validated["image_url"] );
        }

        $course->update($validated);

        return redirect()
        ->back()
        ->with("success","Курс: " .$course->course_name." успешно обновлён");

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {
        $course->delete();

        return redirect()
        ->route("courses.index")
        ->with("success","Курс: " .$course->course_name." успешно удалён");
    }

    public function order() {
        $orders = Order::all();
        return view("order.students", compact("orders"));

    }

    public function certificate(Order $order, Course $course) {

        return view("order.certificate", compact("order", 'course'));

    }
}

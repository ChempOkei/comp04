<?php

namespace App\Http\Controllers;

use App\Http\Requests\LessonRequest;
use App\Models\Course;
use App\Models\Lesson;
use Illuminate\Http\Request;

class LessonController extends Controller
{

    /**
     * Show the form for creating a new resource.
     */
    public function create(Course $course)
    {
        return view('lessons.create', compact('course'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(LessonRequest $request, Course $course)
    {
        $validated = $request->validated();
        $lesson = Lesson::create([
            ...$validated,
            'course_id'=>$course->id
        ]);
        
        return redirect()
        ->back()
        ->with('success','Урок ' . $lesson->title .' успешно создан');
        
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Course $course, Lesson $lesson)
    {
        return view('lessons.edit', compact('course', 'lesson'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(LessonRequest $request, Course $course, Lesson $lesson)
    {
        $validated = $request->validated();
        $lesson->update([
            ...$validated,
            'course_id'=>$course->id
        ]);

        return redirect()
        ->back()
        ->with('success','Урок ' . $lesson->title .' успешно обновлен');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course, Lesson $lesson)
    {
        $lesson->delete();

        return redirect()
        ->back()
        ->with('success','Урок ' . $lesson->title .' успешно удалён');
    }
}

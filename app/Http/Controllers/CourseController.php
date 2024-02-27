<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'banner_url' => 'required|url',
            'num_of_people' => 'required|integer',
        ]);

        $course = Course::create($validatedData);

        return response()->json(['message' => 'Course created successfully', 'course' => $course], 201);
    }

    public function index()
    {
        $courses = Course::all();
        return response()->json(['courses' => $courses], 200);
    }
}

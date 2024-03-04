<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{
    //
    public function create_student()
    {
        return view('student.create_student');
    }

    public function store_student(Request $request)
    {
        $request->validate([
            'name' => 'required|max:100|nullable',
            'roll' => 'required',
            'gender' => 'required',
            'age' => 'required',
            'district' => 'required',
            'country' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'image' => 'required|mimes:jpeg,jpg,png,gif',
        ]);

        // $imageName = time() . '.' . $request->image->extension();
        // $request->image->move(public_path('students'), $imageName);
        // $student = new Student;
        // $student->image = $imageName;
        // $student->name = $request->name;
        // $student->roll = $request->roll;
        // $student->gender = $request->gender;
        // $student->age = $request->age;
        // $student->district = $request->district;
        // $student->country = $request->country;
        // $student->phone = $request->phone;
        // $student->email = $request->email;
        // $student->save();

        //     $fileName = null;

        //     if ($request->hasFile('image')) {
        // // Ensure an image is uploaded before trying to access its extension
        //     $fileName = time() . '.' . $request->image->extension();
        //     $request->image->storeAs('public/images', $fileName);
        //     }
        $image_path = $request->file('image')->store('students', 'public');

        $data_insert = student::create([
            'name' => $request->name,
            'roll' => $request->roll,
            'gender' => $request->gender,
            'age' => $request->age,
            'district' => $request->district,
            'country' => $request->country,
            'phone' => $request->phone,
            'email' => $request->email,
            'image' => $image_path,
            'created_by' => Auth::user()->id,
        ]);

        return redirect()->route('create.student')->with('success', 'Student information create Successfully?');
    }

    public function student_list()
    {
        $students = student::orderBy('id', 'desc')->paginate(5);
        return view('student.student_list', compact('students'));
    }

    public function student_edit($id)
    {
        $student = student::find($id);
        return view('student.student_edit', compact('student', 'id'));
    }
    public function student_update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|max:100|nullable',
            'roll' => 'required',
            'gender' => 'required',
            'age' => 'required',
            'district' => 'required',
            'country' => 'required',
            'phone' => 'required',
            'email' => 'required',
            // 'image' => 'required|mimes:jpeg,jpg,png,gif',
        ]);

// if ($request->hasFile('image')) {
//     $file = $request->file('image');
//     // Debugging: Log the file details
//     Log::info('Uploaded file details:', ['name' => $file->getClientOriginalName(), 'size' => $file->getSize()]);

//     $extension = $file->getClientOriginalExtension();
//     $filename = md5(time()) . '.' . $extension;
//     $file->move(public_path('students'), $filename);
//     $data->image = $filename;
// }

        $data = student::find($id);
        $data->name = $request->name;
        $data->roll = $request->roll;
        $data->gender = $request->gender;
        $data->age = $request->age;
        $data->district = $request->district;
        $data->country = $request->country;
        $data->phone = $request->phone;
        $data->email = $request->email;
        $data->updated_by = Auth::user()->id;
        $data->save();
        return redirect()->route('student.update', $id)->with('success', 'Student information update Successfully?');

    }

    // public function student_delete($id):RedirectResponse
    // {
    //     $student->delete();
    //     return redirect()->route('student.list')
    //             ->withSuccess('student information is deleted successfully.');
    // }
    // public function student_delete($id)
    // {
    //     $student = student::find($id);
    //     $student->delete();
    //     return redirect()->route('student.list');
    // }

    public function student_delete($id)
    {
        // Find the student record by ID
        $student = Student::findOrFail($id);

        // Delete the student record
        $student->delete();

        // Redirect to the student list page with a success message
        return redirect()->route('student.list')->withSuccess('Student information is deleted successfully.');
    }
    public function student_view($id)
    {
        $student = student::find($id);
        return view('student.student_view', compact('student', 'id'));
    }
}

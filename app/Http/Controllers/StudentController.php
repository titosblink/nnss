<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\StudentsImport;

use App\Models\Users as Users;
use App\Models\Classes as Classes;
use App\Models\Arms as Arms;
use App\Models\Divisions as Divisions;
use App\Models\Houses as Houses;
use App\Models\Subjects as Subjects;
use App\Models\Students as Students;
use Hash;
use File;
use Auth;
use DB;

class StudentController extends Controller
{
    public function uploadStudent(Request $request)
    {
        $request->validate([
            'excel_file' => 'required|mimes:xlsx,csv'
        ]);

        try {
            Excel::import(new StudentsImport, $request->file('excel_file'));

            return back()->with('success', 'Students Imported Successfully!');
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }

    public function uploadPassport(Request $request)
{
    try {
        $request->validate([
            'passport' => 'required|image|mimes:jpg,jpeg,png|max:2048'
        ]);

        if ($request->hasFile('passport')) {
            $file = $request->file('passport');
            $filename = time() . '.' . $file->extension();

            $file->move(public_path('passport'), $filename);

            // Update student record
            Students::where('id', $request->student_id)
                ->update(['passport' => $filename]);

            return back()->with('success', 'Passport uploaded successfully');
        }

        return back()->with('error', 'No file selected');
    } catch (\Exception $e) {
        return back()->with('error', 'Error uploading passport');
    }
}

public function storestudent(Request $request)
{
    try {

        $idi = $request->idi;

        $Students = Students::where('id', $idi)->first();
        if($Students){
            DB::table('students')->where('id', $idi)->update([
                'dob' => $request->dob,
                'states' => $request->states,
                'lga' => $request->lga,
                'place_of_birth' => $request->place_of_birth,
                'parent_address' => $request->parent_address,
                'parent_phone' => $request->parent_phone,
                'house' => $request->house,
                'division' => $request->division,
                'parent' => $request->parent_status,
                'updated_at' => now()
            ]);

        }else{
            DB::table('students')->insert([
                'firstname' => $request->firstname,
                'lastname' => $request->lastname,
                'dob' => $request->dob,
                'states' => $request->states,
                'lga' => $request->lga,
                'place_of_birth' => $request->place_of_birth,
                'parent_address' => $request->parent_address,
                'parent_phone' => $request->parent_phone,
                'house' => $request->house,
                'division' => $request->division,
                'parent' => $request->parent_status,
                'updated_at' => now(),
                'created_at' => now(),

            ]);
        }



    return back()->with('success', 'Student saved successfully!');


    } catch (Exception $e) {
        return back()->with('error', 'Error uploading passport');
    }
}
}

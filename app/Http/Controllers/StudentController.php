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
use App\Models\Psychomotor as Psychomotor;
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

public function storepsycho(Request $request)
{
    try {

    $idi = $request->idi;

    // ✅ Use studentid consistently
    $existing = DB::table('psychomotor')->where('studentid', $idi)->first();

    if ($existing) {

        $data = [];

        // Only update when input is NOT empty
        if ($request->punctuality !== null && $request->punctuality !== '') {
            $data['punctuality'] = $request->punctuality;
        }

        if ($request->leadership !== null && $request->leadership !== '') {
            $data['leadership'] = $request->leadership;
        }

        if ($request->demeanor !== null && $request->demeanor !== '') {
            $data['demeanor'] = $request->demeanor;
        }

        if ($request->honesty !== null && $request->honesty !== '') {
            $data['honesty'] = $request->honesty;
        }

        if ($request->friendliness !== null && $request->friendliness !== '') {
            $data['friendliness'] = $request->friendliness;
        }

        if ($request->obedience !== null && $request->obedience !== '') {
            $data['obedience'] = $request->obedience;
        }

        if ($request->cooperation !== null && $request->cooperation !== '') {
            $data['cooperation'] = $request->cooperation;
        }

        if ($request->selfcontrol !== null && $request->selfcontrol !== '') {
            $data['selfcontrol'] = $request->selfcontrol;
        }

        if ($request->attentiveness !== null && $request->attentiveness !== '') {
            $data['attentiveness'] = $request->attentiveness;
        }

        if ($request->initiative !== null && $request->initiative !== '') {
            $data['initiative'] = $request->initiative;
        }

        if ($request->organisation !== null && $request->organisation !== '') {
            $data['organisation'] = $request->organisation;
        }

        if ($request->perseverance !== null && $request->perseverance !== '') {
            $data['perseverance'] = $request->perseverance;
        }

        if ($request->fluency !== null && $request->fluency !== '') {
            $data['fluency'] = $request->fluency;
        }

        if ($request->sports !== null && $request->sports !== '') {
            $data['sports'] = $request->sports;
        }

        if ($request->cultural !== null && $request->cultural !== '') {
            $data['cultural'] = $request->cultural;
        }

        if ($request->technical !== null && $request->technical !== '') {
            $data['technical'] = $request->technical;
        }

        if ($request->labour !== null && $request->labour !== '') {
            $data['labour'] = $request->labour;
        }

        if ($request->attendance !== null && $request->attendance !== '') {
            $data['attendance'] = $request->attendance;
        }

        if ($request->neatness !== null && $request->neatness !== '') {
            $data['neatness'] = $request->neatness;
        }

        $data['updated_at'] = now();

        // ✅ Only update if something changed
        if (!empty($data)) {
            DB::table('psychomotor')
                ->where('studentid', $idi)
                ->update($data);
        }

    } else {

        // INSERT (fix spelling too)
        DB::table('psychomotor')->insert([
            'studentid' => $idi,
            'punctuality' => $request->punctuality,
            'cooperation' => $request->cooperation,
            'leadership' => $request->leadership,
            'demeanor' => $request->demeanor,
            'honesty' => $request->honesty,
            'friendliness' => $request->friendliness,
            'obedience' => $request->obedience,
            'selfcontrol' => $request->selfcontrol,
            'attentiveness' => $request->attentiveness,
            'initiative' => $request->initiative,          // ✅ fixed
            'organisation' => $request->organisation,
            'perseverance' => $request->perseverance,      // ✅ fixed
            'fluency' => $request->fluency,
            'sports' => $request->sports,
            'cultural' => $request->cultural,
            'technical' => $request->technical,
            'labour' => $request->labour,
            'attendance' => $request->attendance,
            'neatness' => $request->neatness,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }

    return back()->with('success', 'Record saved successfully!');

} catch (Exception $e) {
    return back()->with('error', 'Error saving record');
}
}


}

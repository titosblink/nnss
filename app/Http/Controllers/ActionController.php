<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

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

use App\Imports\StudentsImport;
use Maatwebsite\Excel\Facades\Excel;

use Exception;

class ActionController extends Controller
{


     public function students()
        {
            $Students = Students::all();
            $data = array('Students'=>$Students);
            return view('dashboard.students',$data);
        }

    public function users()
        {
            $Users = Users::all();
            $data = array('Users'=>$Users);
            return view('dashboard.users',$data);
        }

    public function changepassword()
        {

            return view('dashboard.changepassword');
        }

        public function addnewusers()
        {

            return view('dashboard.addusers');
        }

    public function changepword(Request $request)
    {
        try{
                // 2. Check if the current password matches the database

                if (!Hash::check($request->current_pword, Auth::user()->password)) {
                    return back()->with('error', 'The provided password does not match our records.');
                }else{
                    Auth::user()->update([
                        'password' => Hash::make($request->new_pword)
                    ]);
                    return back()->with('success', 'Password changed successfully!');
                }
        }catch(\Exception $exception){
            return redirect()
                ->back()
                ->with('error', 'Password not successfully changed');
        }
    }


    public function savenewusers(Request $request)
    {
        try{


            // Save to database
    Users::create([
        'name' => $request->fname,
        'email' => $request->email,
        'status' => $request->rights,
        'password' => Hash::make('password'),
    ]);

    return redirect()->back()->with('success', 'User added successfully!');

        }catch(Exception $exception){
            return redirect()
                ->back()
                ->with('error', 'Network Error');
        }
    }

public function resetpword($id)
    {
        try {

         $userresult = Users::findOrFail($id);

        $userresult->update([
            'password' => Hash::make('password')
        ]);


            // DB::table('property')->where('propcode', $id)->delete();
            return redirect()->back()->with('success', 'Password successfully reset');
        } catch (\Exception $exception) {
            return redirect()
                ->back()
                ->with('error', 'News not successfully deleted!');
        }
    }

    public function deluser($id)
    {
        try {

            DB::table('users')->where('id', $id)->delete();
            return redirect()->back()->with('success', 'Password successfully deleted');
        } catch (\Exception $exception) {
            return redirect()
                ->back()
                ->with('error', 'Network error');
        }
    }

     public function classes()
        {
            $Classes = Classes::all();
            $data = array('Classes'=>$Classes);
            return view('dashboard.classes',$data);
        }

        public function addclass()
        {

            return view('dashboard.addclass');
        }


    public function savenewclass(Request $request)
    {
        try{

    Classes::create([
        'name' => $request->cname,
    ]);

    return redirect('/classes')->with('success', 'Class added successfully!');
    // return redirect()->back()->with('success', 'Class added successfully!');

        }catch(Exception $exception){
            return redirect()
                ->back()
                ->with('error', 'Network Error');
        }
    }

     public function delclasses($id)
    {
        try {

            DB::table('classes')->where('id', $id)->delete();
            return redirect()->back()->with('success', 'Class successfully deleted');
        } catch (\Exception $exception) {
            return redirect()
                ->back()
                ->with('error', 'Network error');
        }
    }








    public function arms()
        {
            $Arms = Arms::all();
            $data = array('Arms'=>$Arms);
            return view('dashboard.arms',$data);
        }

        public function addarms()
        {

            return view('dashboard.addarms');
        }


    public function savenewarms(Request $request)
    {
        try{

    Arms::create([
        'name' => $request->cname,
    ]);

    return redirect('/arms')->with('success', 'Arm added successfully!');
    // return redirect()->back()->with('success', 'Class added successfully!');

        }catch(Exception $exception){
            return redirect()
                ->back()
                ->with('error', 'Network Error');
        }
    }

     public function delarms($id)
    {
        try {

            DB::table('arm')->where('id', $id)->delete();
            return redirect()->back()->with('success', 'Arm successfully deleted');
        } catch (\Exception $exception) {
            return redirect()
                ->back()
                ->with('error', 'Network error');
        }
    }

     public function deldivision($id)
    {
        try {

            DB::table('divisions')->where('id', $id)->delete();
            return redirect()->back()->with('success', 'Division successfully deleted');
        } catch (\Exception $exception) {
            return redirect()
                ->back()
                ->with('error', 'Network error');
        }
    }

    public function savenewdivision(Request $request)
    {
        try{

    Divisions::create([
        'name' => $request->cname,
    ]);

    return redirect('/division')->with('success', 'Division added successfully!');
    // return redirect()->back()->with('success', 'Class added successfully!');

        }catch(Exception $exception){
            return redirect()
                ->back()
                ->with('error', 'Network Error');
        }
    }

      public function division()
        {
            $Divisions = Divisions::all();
            $data = array('Divisions'=>$Divisions);
            return view('dashboard.division',$data);
        }

        public function adddivision()
        {
            return view('dashboard.adddivision');
        }





        public function delhouses($id)
    {
        try {

            DB::table('houses')->where('id', $id)->delete();
            return redirect()->back()->with('success', 'House successfully deleted');
        } catch (\Exception $exception) {
            return redirect()
                ->back()
                ->with('error', 'Network error');
        }
    }

    public function savenewhouses(Request $request)
    {
        try{

    Houses::create([
        'name' => $request->cname,
    ]);

    return redirect('/houses')->with('success', 'Houses added successfully!');
    // return redirect()->back()->with('success', 'Class added successfully!');

        }catch(Exception $exception){
            return redirect()
                ->back()
                ->with('error', 'Network Error');
        }
    }

      public function houses()
        {
            $Houses = Houses::all();
            $data = array('Houses'=>$Houses);
            return view('dashboard.houses',$data);
        }

        public function addhouses()
        {
            return view('dashboard.addhouses');
        }



        public function delsubjects($id)
    {
        try {

            DB::table('subjects')->where('id', $id)->delete();
            return redirect()->back()->with('success', 'Subjects successfully deleted');
        } catch (\Exception $exception) {
            return redirect()
                ->back()
                ->with('error', 'Network error');
        }
    }

    public function savenewsubjects(Request $request)
    {
        try{

    Subjects::create([
        'name' => $request->cname,
    ]);

    return redirect('/subjects')->with('success', 'Subjects added successfully!');
    // return redirect()->back()->with('success', 'Class added successfully!');

        }catch(\Exception $exception){
            return redirect()
                ->back()
                ->with('error', 'Network Error');
        }
    }

      public function subjects()
        {
            $Subjects = Subjects::all();
            $data = array('Subjects'=>$Subjects);
            return view('dashboard.subjects',$data);
        }

        public function addsubjects()
        {
            return view('dashboard.addsubjects');
        }


        public function addsubjtoclass($id)
    {
        try {

            $Subjects = Subjects::where('id', $id)->first();
            $name_of_subject = $Subjects->name;

            $Classes = Classes::all();

            $data = array('Subjects'=>$Subjects,'name_of_subject'=>$name_of_subject,'Classes'=>$Classes);
            return view('dashboard.subjtoclass',$data);
        } catch (Exception $exception) {
            return redirect()
                ->back()
                ->with('error', 'Network error');
        }
    }

    public function saveClasses(Request $request)
{
    $selected = $request->classes; // array of IDs
    $subjs = $request->subj; // array of IDs

    foreach ($selected as $classId) {
        DB::table('class_user')->insert([
            'class_id' => $classId,
            'subject' => $subjs,
            'user_id' => auth()->id(), // example
        ]);
    }

    return back()->with('success', 'Classes Assigned successfully');
}

public function addstudent()
        {
            $Classes = Classes::all();
            $Houses = Houses::all();
            $Divisions = Divisions::all();
            $data = array('Classes'=>$Classes,'Divisions'=>$Divisions, 'Houses'=>$Houses);
            return view('dashboard.addstudent',$data);
        }


public function savenewstudent(Request $request)
    {
        try{
            $existing = Students::where('studentid', $request->studentid)->first();
            if ($existing) {
            return redirect()
                ->back()
                ->with('error', 'Student ID already exists!');
        }
Students::create([
        'studentid' => $request->studentid,
        'surname' => $request->surname,
        'othername' => $request->othername,
        'parent' => $request->parent,
        'clas' => $request->clas,
        'gender' => $request->gender,
        'division' => $request->division,
        'house' => $request->house,
        'dob' => $request->dob,
        'states' => $request->states,
        'lga' => $request->lga,
        'place_of_birth' => $request->place_of_birth,
        'parent_address' => $request->parent_address,
        'parent_phone' => $request->parent_phone,
    ]);


    return redirect('/addstudent')->with('success', 'Student record is successfully created !');

        }catch(Exception $exception){
            return redirect()
                ->back()
                ->with('error', 'Network Error');
        }
    }
 public function uploadstudents()
        {

            return view('dashboard.uploadstudent');
        }



 public function delstudent($id)
    {
        try {

            DB::table('students')->where('id', $id)->delete();
            return redirect()->back()->with('success', 'Student record successfully deleted');
        } catch (\Exception $exception) {
            return redirect()
                ->back()
                ->with('error', 'Network error');
        }
    }

     public function viewstudent($id)
        {
            try{
            $Students = Students::where('id', $id)->first();
            $name_of_student = $Students->surname;
            $oname_of_student = $Students->othername;
            $fullname = $name_of_student." ".$oname_of_student;
            $ppt = $Students->passport;
            $studid =  $Students->studentid;
            $clas =  $Students->clas;

            $data = array('fullname'=>$fullname,
                         'studid'=>$studid,
                         'clas'=>$clas,
                         'id'=>$id,
                         'ppt'=>$ppt
                         );

            return view('dashboard.viewstudent',$data);

            } catch (\Exception $exception) {
            return redirect()
                ->back()
                ->with('error', 'Network error');
        }
    }


     public function uploadpassport($id)
        {
            try{
             $Students = Students::where('id', $id)->first();
            $name_of_student = $Students->surname;
            $oname_of_student = $Students->othername;
            $ppt = $Students->passport;
            $fullname = $name_of_student." ".$oname_of_student;

            $studid =  $Students->studentid;
            $clas =  $Students->clas;

            $data = array('fullname'=>$fullname,
                         'studid'=>$studid,
                         'clas'=>$clas,
                         'id'=>$id,
                         'ppt'=>$ppt
                         );

            return view('dashboard.uploadpassport',$data);

            } catch (Exception $exception) {
            return redirect()
                ->back()
                ->with('error', 'Network error');
        }
    }

    public function studentdata($id)
        {
            try{

            $Divisions = Divisions::all();
            $Houses = Houses::all();


            $Students = Students::where('id', $id)->first();
            $name_of_student = $Students->surname;
            $oname_of_student = $Students->othername;
            $ppt = $Students->passport;

            $fullname = $name_of_student." ".$oname_of_student;

            $studid =  $Students->studentid;
            $clas =  $Students->clas;

            $data = array('Students'=>$Students,
                        'fullname'=>$fullname,
                         'studid'=>$studid,
                         'clas'=>$clas,
                         'id'=>$id,
                         'ppt'=>$ppt,
                         'Houses'=>$Houses,
                         'Divisions'=>$Divisions,
                         );

            return view('dashboard.studentdata',$data);

            } catch (Exception $exception) {
            return redirect()
                ->back()
                ->with('error', 'Network error');
        }
    }



    public function psychometer($id)
        {
            try{

            $Divisions = Divisions::all();
            $Houses = Houses::all();


            $Students = Students::where('id', $id)->first();
            $name_of_student = $Students->surname;
            $oname_of_student = $Students->othername;
            $ppt = $Students->passport;

            $fullname = $name_of_student." ".$oname_of_student;

            $studid =  $Students->studentid;
            $clas =  $Students->clas;

            $data = array('Students'=>$Students,
                        'fullname'=>$fullname,
                         'studid'=>$studid,
                         'clas'=>$clas,
                         'id'=>$id,
                         'ppt'=>$ppt,
                         'Houses'=>$Houses,
                         'Divisions'=>$Divisions,
                         );

            return view('dashboard.psychometer',$data);

            } catch (Exception $exception) {
            return redirect()
                ->back()
                ->with('error', 'Network error');
        }
    }
}

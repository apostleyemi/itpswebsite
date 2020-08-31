<?php

namespace App\Http\Controllers;

use App\AcademicInfo;
use App\Questions;
use App\User;
use Validator,Redirect,Response,File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Image;
use Intervention\Image\Exception\NotReadableException;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {


          return view('home');

    }

    public  function adminHome(){

        $users= User::where('is_admin',0)->paginate(10);
        return view('adminHome', compact('users'));
    }

    public  function upDateBiodate(Request $request){

        $validatedData = $request->validate([
            'gender' => 'required',
            'state_birth' => 'required',
            'address' => 'address',
            'dob' => 'required',
        ]);

        $user=User::find(Auth::user()->id);
        $user->gender=$request->get('');
        $user->state_birth=$request->get('state_birth');
        $user->address=$request->get('address');
        $user->dob=$request->get('dob');
        $user->save();



    }
    public  function saveBiodata(Request $request){
      //  dd("it is working");
      $user=User::find(Auth::user()->id);
      $user->gender=$request->get('gender');
      $user->state_residence=$request->get('state_residence');
      $user->dob=$request->get('dob');
      $user->address=$request->get('address');
      $user->save();



        return response()->json(array('msg'=>"successfully saved"),200);
    }

    public function saveAcademic(Request $request){
       // dd("Academic Info Here");

      //  $user=User::find(Auth::user()->id);
        $acada=new AcademicInfo();

        $acada->institution=$request->get('institution');
        $acada->discipline=$request->get('discipline');
        $acada->duration=$request->get('duration');
        $acada->itstate=$request->get('itstate');
        $acada->itcity=$request->get('itcity');
        $acada->academic=$request->get('academic');
        $acada->user_id=Auth::user()->id;
        $acada->save();

        return response()->json(array('msg'=>"Academic information Successfully  saved"),200);
    }

    public function uploadDoc(Request $request){




        //upload image
        if( $passUpload = $request->file('passport')){
            $name=rand(100,500).'.'.time().'.'.$passUpload->getClientOriginalName();
            $passUpload->move(public_path('passports'),$name);
            $pass_data=$name;
        }

        //upload Letter


        if( $LetterUpload = $request->file('upload_letter')){
            $name=rand(100,500).'.'.time().'.'.$LetterUpload->getClientOriginalName();
            $LetterUpload->move(public_path('letters'),$name);
            $letter_data=$name;
        }
       //dd("uploaded");

        $db=AcademicInfo::find(Auth::user()->id);
        $db->letter=$letter_data;
        $db->passport=$pass_data;
        $db->save();

        $user=User::where('id', Auth::user()->id)
            ->update('form_submitted',1);

        return view('dashboard')->with("success", "All Data saved");



    }

    public  function fillform(){

        if(Auth::user()->form_submitted==0){
            return view('form');
        }
        else{
            return view('home')->with('statusmsg',"form Already filled");
        }
    }


    public  function  ViewApplication($id){

        $user=User::where('id','=',$id)->first();
        $user->academicInfo;
       // dd($user);
        return view('application-details', compact('user') );
//  dd($appl);

    }

}

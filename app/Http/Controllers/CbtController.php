<?php

namespace App\Http\Controllers;

use App\Answer;
use App\Questions;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Options;
use Symfony\Component\Console\Input\Input;
use function GuzzleHttp\Promise\all;

class CbtController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    //

    public  function  storeAnswer(Request $request){

        $data=$request->all();
        $user_id=Auth::user()->id;
            $data=$request->all();
            $data_value=$request->except('_token');

               $dt= $request->except('_token');

             //  dd($dt);
     //   dd(Auth::user()->id);
                  $check=Answer::where('user_id',Auth::user()->id)->first();
                  if($check==null) {
                      foreach ($dt as $key => $value) {

                          Answer::create(['selected_option' => $value, 'question_id' => $key, 'user_id' => $user_id]);
                      }
                      User::where('id', '=', Auth::user()->id)->update(['cbt_taken'=> 1]);
                      return redirect('home')->with('cbtstatus','Your CBT is Already submitted');
                  }
                  else{
                      return redirect('home')->with('cbtstatus','Failed! Your cannot retake the CBT ');
                  }






    }

    public function  takeCbt()
    {
        if(Auth::user()->pay_status==1){
            $ques=Questions::all()->random(4);
           // dd($ques->option->options);
          /*  $opts=$ques->options->where('quetion_id',$ques->id);*/
            $opts=Options::all();
           // dd($opts);
            return view('cbt', compact('opts', 'ques'));
        }
        return ;
    }

    public function  viewAnswer($id){

        $answers=Answer::where('user_id','=',$id)->get();
       // dd($answers);
       /*
        $answers->question;
        $answers->option;
        dd($answers);*/

       /* foreach ($answers as $ans):
           $ans->question;
            endforeach;*/

        return view('cbt-result', compact('answers'));

    }

    /* this function adds quetions */

  public  function  addQuestion(Request $request){
      //dd($request->all());

      $ques=$request->except('_token');
     // dd($ques);
      $i=0;

      $x=0;
      $y=0;
      $w=0;
      $z=0;
      $correct=0;
      foreach ($ques['question'] as  $que):

         $quesID= Questions::create(['question'=> $que])->id;
      if($ques['is_correct'][$i]==1){
                   $x=1;
               }
          if($ques['is_correct'][$i]==2){
              $y=1;
          }
          if($ques['is_correct'][$i]==3){
              $w=1;
          }

          if($ques['is_correct'][$i]==4){
              $z=1;
          }
              $option1 = Options::create(['options' => $ques['option_one'][$i], 'question_id' => $quesID, 'is_correct'=>$x]);
              $option2 = Options::create(['options' => $ques['option_two'][$i], 'question_id' => $quesID, 'is_correct'=>$y]);
              $option3 = Options::create(['options' => $ques['option_three'][$i], 'question_id' => $quesID, 'is_correct'=>$w]);
              $option4 = Options::create(['options' => $ques['option_four'][$i], 'question_id' => $quesID, 'is_correct'=>$z]);

                $i++;
          $x=0;
          $y=0;
          $w=0;
          $z=0;
          endforeach;

  }

  public  function viewQuestion(){
      $questions=Questions::all();
      return view('create-cbt', compact('questions'));
  }


}

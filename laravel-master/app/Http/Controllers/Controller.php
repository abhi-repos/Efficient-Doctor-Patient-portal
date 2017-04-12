<?php
namespace App\Http\Controllers;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use DB;
use View;
use App\doctor_information;
use App\patient_information;
use App\appointment_information;
use App\feedback_information;
use App\organ_information;
use App\article_information;
use Session;


class Controller extends BaseController
    {
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
     
        function loginEntry()
                {
                    return View::make('login');
                }

  
        function patient_register()
                {
                    return View::make('patient_register');
                }


/*
                {
                $users = DB::table('doctor_informations')->where('doctor_id', $pblm_id)->get();
                return View::make('page')
                    ->with('users',$users);
                }
*/





        function add_appointment()
                {
                    return View::make('add_appointment');
                }
        

        function view_doctor()
                {
                    return View::make('view_doctor');
                }
  
        function loginEntryCheck(Request $req) 
                {
                    $username=$req->input("username");
                    //creating Session
                    Session::put('username', $username);
                    $var=Session::get('username');
                    $password=$req->input("password");
                    $type=$req->input("user");
                    if($type=="patient")
                        $users = DB::table('patient_informations')->get();
                    else if($type=="doctor")
                        $users = DB::table('doctor_informations')->get();
                    else
                        $users = DB::table('admin_informations')->get();


                    foreach ($users as $user) 
                        {
                            
                            if($user->username==$username && $user->password==$password)
                                    {
                                    if($type=="admin")
                                  
                                          return View::make('admin')
                                                      ->with('article',article_information::all());
                                  
                                    else if($type=="doctor")
                                          return View::make('doctor')
                                                        ->with('article',article_information::all());
                                  
                                    else
                                          return View::make('patient')
                                                        ->with('article',article_information::all());
                                        }
                                   
                                    }

                                
                            
                        
                       return View::make('login');

                }   
        

  
        function patient_register_entry(Request $req)
                {
                    $username=$req->input("username");
                    $password=$req->input("password");
                    $contact_number=$req->input("contact_number");
                    $email=$req->input("email");
                    $address=$req->input("address");
                    
                    $data=array("username"=>$username,"password"=>$password,"contact_number"=>$contact_number,"email"=>$email,"address"=>$address);
                //inserting into Table
                    DB::table('patient_informations')->insert($data);

                    return View::make('login');
                }



        function do_check(Request $req)
           {

                   $speciality=$req->input("speciality");

                   $start=$req->input("start_date");
                    Session::put('start', $start);
                   $end=$req->input("end_date");
                    Session::put('end', $end);


                   $users = DB::table('doctor_informations')->where('speciality', $speciality)->get();
                  
    
                    return View::make('do_check')->with('users',$users)
                         ->with('appoint',appointment_information::all());
                }
  
        function doctor_register_entry(Request $req)
                {
                    $username=$req->input("username");
                    $password="abc";
                    $contact_number=$req->input("contact_number");
                    $qualification=$req->input("qualification");
                    $email=$req->input("email");
                    $address=$req->input("address");
                    $speciality=$req->input("speciality");
                    $fee=$req->input("Fees");
                    $data=array("username"=>$username,"password"=>$password,"contact_number"=>$contact_number,"email"=>$email,"address"=>$address,"qualification"=>$qualification,"speciality"=>$speciality,"Fees"=>$fee);
                //inserting into Table
                    DB::table('doctor_informations')->insert($data);

                    return View::make('doctor_register');
                }

 

        function add_user_student(Request $req)
                {
                    $username=$req->input("username");
                    $password="iiitg@123";
                    $data=array("username"=>$username,"password"=>$password);
                //inserting into Table
                    DB::table('user_students')->insert($data);
                }
        
      

        function add_user_admin(Request $req)
                {
                    $username=$req->input("username");
                    $password="iiitg@123";
                    $data=array("username"=>$username,"password"=>$password);
                //inserting into Table
                    DB::table('User_admins')->insert($data);
                }

        function add_problem(Request $req)
                {
                    $prlm_name=$req->input("prblm_name");
                    $prlm_setter=$req->input("prblm_setter");
                    $run=$req->input("Running_Time");
                    $memory=$req->input("Memory_usage");
                    $path1 = $req->file('def_file')->store('Problems');
                    $path2 = $req->file('in_file')->store('Input_cases');
                    $path3 = $req->file('out_file')->store('Output_cases');
                    $data=array("pblm_name"=>$prlm_name,
                    "pblm_setter"=>$prlm_setter,"run_time"=>$run,"mem_usage"=>$memory,"def_file"=>$path1,
                    "in_file"=>$path2,"out_file"=>$path3);
                        //Inserting into table
                    DB::table('practice_problems')->insert($data);

                }

function applyOrgan($id)
{
   $name=Session::get('username');
    DB::table('organ_informations')
            ->where('id', $id)
            ->update(['receiver' => $name]);
              return View::make('patient')
                    ->with('article',article_information::all());
}


        function bookDoctor($pblm_id)
           {

            $username=Session::get('username');
             $start=Session::get('start');
             $end=Session::get('end');
             $user = DB::table('doctor_informations')->where('doctor_id', $pblm_id)->first();

            
             $doctor=$user->username;       
             $data=array("start_time"=>$start,"end_time"=>$end,"patient_name"=>$username,
                "doctor_id"=>$doctor);
                //inserting into Table
            DB::table('appointment_informations')->insert($data);

            return View::make('patient')
                ->with('article',article_information::all());
           }     


        function display_patient_info()
           {
            return View::make('table_patient_detail')
                ->with('patient',patient_information::all());
           }    

//http://stackoverflow.com/questions/23073214/laravel-query-builder-where-max-id
//http://stackoverflow.com/questions/30220482/passing-data-from-controller-to-view-in-laravel


        function display_doctor_info()
           {
            return View::make('table_doctor_detail')
                ->with('doctor',doctor_information::all());
           }     



        function display_problem($pblm_id)
           {
            return "you selected $pblm_id";
           }     



        function pageDetail()
            {
              
              $username=Session::get('username');
              $users = DB::table('patient_informations')->where('username', $username)->get();
              $appoint = DB::table('appointment_informations')->where('patient_name', $username)->get();
              return View::make('pagePatient')->with('users',$users)
                  ->with('appoint',$appoint);
                

            }



function view_appointment_details()


           {
             $username=Session::get('username');
            $appoint = DB::table('appointment_informations')->where('patient_name', $username)->get();
            return View::make('view_appointment')
                  ->with('appoint',$appoint);
           }  


function View_doctor_appointment_details()


           {
             $username=Session::get('username');
             $appoint = DB::table('appointment_informations')->where('doctor_id', $username)->get();
             return View::make('View_doctor_appointment')
                  ->with('appoint',$appoint);
           }  

function view_all_appointment_details()
           {

            $appoint = DB::table('appointment_informations')->get();
            return View::make('view_all_appointment')
                  ->with('appoint',$appoint);
           }  


function patientFeedback()
           {

            $name = DB::table('doctor_informations')->pluck('username');
            return View::make('patientFeedback')
                  ->with('name',$name);
           }  

function Feedback_view()
           {

            $name = DB::table('feedback_informations')->get();
            return View::make('view_feedback')
                  ->with('name',$name);
           }  

function Add_Article()
           {
return View::make('add_Article');
           
           }  

function Donate_organ_entry(Request $req)
           {
           $name=Session::get('username');
           $blood=$req->input("Blood");
           $group = $req->input("Organ");
           $data=array("username"=>$name,"bloodGroup"=>$blood,"organ"=>$group);
                        //Inserting into table
           DB::table('organ_informations')->insert($data);
           return View::make('patient')
               ->with('article',article_information::all());
           }     

function  add_patient_feedback(Request $req)
           {
           $name=$req->input("doctor_name");
           $content=$req->input("content");
           $date = date('Y-m-d H:i:s');
           $data=array("doctorName"=>$name,"content"=>$content,"time"=>$date);
                        //Inserting into table
           DB::table('feedback_informations')->insert($data);
           return View::make('patient')
           ->with('article',article_information::all());
           }     

  


  function Add_Admin_Article(Request $req)
           {
           $name=$req->input("department");
           $topic=$req->input("topic");
           $content=$req->input("content");
           $date = date('Y-m-d H:i:s');
           $data=array("department"=>$name,"topic"=>$topic,"content"=>$content,"time"=>$date);
                        //Inserting into table
           DB::table('article_informations')->insert($data);
           return View::make('admin')
                  ->with('article',article_information::all());
           } 

    function doctor_profile_appoint($pblm_id)
    {
         $users = DB::table('doctor_informations')->where('doctor_id', $pblm_id)->get();
            return View::make('page')
                  ->with('users',$users);

    } 

 function treatment($appoint_id)
    {
         $users = DB::table('appointment_informations')->where('appointment_id', $appoint_id)->get();
            return View::make('treatment')
                  ->with('users',$users);

    } 

function view_doctor_profile()

        {
            $pblm_id=Session::get('username');
            $users = DB::table('doctor_informations')->where('username', $pblm_id)->get();
            return View::make('page_doctor')
                ->with('users',$users);
        }
	
function update(Request $req,$id)
    {
    $name=$req->input("content");
    DB::table('appointment_informations')
            ->where('appointment_id', $id)
            ->update(['medical_history' => $name]);
              return View::make('doctor_layout');
    }

    

    function checkDonor(Request $req)
    {
    $organ=$req->input("Organ");
    $blood=$req->input("Blood");
    $receiver=null;
    $matchThese = ['bloodGroup' => $blood, 'organ' => $organ,'receiver'=>$receiver];
    $users = DB::table('patient_informations')
            ->join('organ_informations', 'patient_informations.username', '=',
             'organ_informations.username')
            ->select('patient_informations.*','organ_informations.id')->where($matchThese)->get();
     return View::make('display_donor')
            ->with('users',$users);       

    /*$users= DB::table('organ_informations')->where($matchThese)->get();
    */
    }

    function Admin()
        {
          return View::make('admin')
                  ->with('article',article_information::all());
        }      

      function Doctor()
        {
          return View::make('doctor')
                  ->with('article',article_information::all());
        }      

        function Patient()
        {
          return View::make('patient')
                  ->with('article',article_information::all());
        }      


        function doctorUpdate($id)

        {
         
            $users = DB::table('doctor_informations')->where('doctor_id', $id)->get();
            return View::make('doctorUpdate')
                  ->with('users',$users);
        }


            function update_doctor_details(Request $req,$id)
            {       $username=$req->input("username");
                    $password=$req->input("password");
                    $contact_number=$req->input("contact_number");
                    $qualification=$req->input("qualification");
                    $email=$req->input("email");
                    $address=$req->input("address");
                    $speciality=$req->input("speciality");
                    $data=array("username"=>$username,"password"=>$password,"contact_number"=>$contact_number,"email"=>$email,"address"=>$address,"qualification"=>$qualification,"speciality"=>$speciality);
                    DB::table('doctor_informations')
                                ->where('doctor_id', $id)
                                ->update($data);
                    return View::make('doctor')
               ->with('article',article_information::all());
            }


            function deleteAppointment($id)
                {
                  DB::table('appointment_informations')->where('appointment_id', '=', $id)->delete();
                   return View::make('patient')
                                    ->with('article',article_information::all());

                }


}















<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\login_details;
use App\student_details;
use App\academic_details;
use App\achievement_details;
use App\applied_student;
use App\company_details;
use App\resume;
use App\event;
use App\statistics;
use App\internship_details;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;
class HomeController extends Controller
{
	public static function showLogin(Request $request)
	{
		return view('login');
	}
	public static function showStatistics(Request $request)
	{
		$user = statistics::all()->sortByDesc("total_students");
		//$user = DB::select('select * from statistics')->sortByDesc("total_students");
		//return $user;
		return view('statistics')->with('user',$user);
		//return view('statistics');
	}
	public static function showAdminLogin(Request $request)
	{
		return view('admin_login');
	}
	public static function showAdminHomepage(Request $request)
	{
		$username= $request->session()->get('username');
			if($username!= null)
			{
				if(DB::table('admin_login')->where('username',$username)->exists())
				{
						return view('admin_homepage');
				}
				else
				{
						return view('homepage');
				}
			}
			else
			return redirect()->route('homepage');
	}
	public static function showAdminStatistics(Request $request)
	{
		return view('admin_statistics');
	}

	public static function showEvents(Request $request)
	{
		$user = event::all()->sortByDesc("event_no");
		return view('events')->with('user',$user);
	}
	public static function showrecRuiterHomepage(Request $request)
	{
		$email= $request->session()->get('email');
		$x =  DB::table('company_details')->select('c_name')->where('email',$email)->get();
		$y=$x[0]->c_name;
			if($email!= null)
			{
				if(DB::table('company_details')->where('email',$email)->exists())
				{
					$user = DB::select(DB::raw("select applied_student.email,academic_details.avg_cgpa,login_details.branch,resume.resume_path from applied_student INNER JOIN login_details on login_details.email=applied_student.email INNER JOIN academic_details on academic_details.email = applied_student.email INNER JOIN resume on resume.email= applied_student.email where (c_name LIKE '%".$y."%') " ));
						return view('recruiter_homepage')->with('user',$user);
				}
				else
				{
						return view('homepage');
				}
			}
			else
			return redirect()->route('homepage');
	}
	public static function checkAdminLogin(Request $request)
	{
				$username= $request->input('username');
				$pass= $request->input('pass');
				//return $username;
				//return $pass;
				$user = DB::table('admin_login')->select('password')->where('username',$username)->get();
				//return $user;
				if($pass == $user[0]->password)
					{
							$request->session()->put('username',$username);
							return redirect()->route('admin_homepage');
					}
				else
				{
					$request->session()->flash('error','Invalid Username & Password');
					return redirect()->route('admin_login');
				}
	}
	public static function checkLogin(Request $request)
	{
		$email= $request->input('username');
		$pass= $request->input('pass');

		if($email!= null)
		{
			$user = DB::table('login_details')->select('acct_status','password')->where('email',$email)->get();
			if(DB::table('login_details')->where('email',$email)->exists())
			{
				if(Hash::check($pass, $user[0]->password) && $user[0]->acct_status ==1)
				{
					$request->session()->put('email',$email);
					return redirect()->route('student_details');
				}
				else
				{
					$request->session()->flash('error','Invalid Username & Password');
					return redirect()->route('login');
				}
			}
			else
			{
				$request->session()->flash('error','You have not registered, Register yourself here :-)');
				return redirect()->route('register');
			}
		}
		else
		{
			$request->session()->flash('error','Enter valid email id');
			return redirect()->route('login');
		}


	}
	public static function checkRecruiterLogin(Request $request)
	{
				$username= $request->input('username');
				$pass= $request->input('pass');
				$user = DB::table('company_details')->select('password')->where('email',$username)->get();
				//return $user;
				if(Hash::check($pass, $user[0]->password))
					{
							$request->session()->put('email',$username);
							return redirect()->route('recruiter_login');
					}
				else
				{
					$request->session()->flash('error','Invalid Username & Password');
					return redirect()->route('homepage');
				}
	}
	public static function showRegister(Request $request)
	{
		return view('register');
	}
	public static function logout(Request $request)
	{
		$request->session()->pull('email');
		return redirect()->route('homepage');
	}
	public static function showHomePage(Request $request)
	{
		return view('homepage');
	}
	public static function showContactPage(Request $request)
	{
		return view('contact_us');
	}
	public static function showPlacementPage(Request $request)
	{
		return view('placement_page');
	}
	public static function showTeamPage(Request $request)
	{
		return view('team_page');
	}
//added from placement 2
public static function selectStudentDetails(Request $request)
{

	$email= $request->session()->get('email');

//	return $email;
		if($email!= null)
		{

			if(isset($_POST['course'])){


				if($_POST['course']=="beFe"){

					if(DB::table('student_details')->where('email',$email)->exists())
					{
							$user = DB::table('student_details')->where('email',$email)->get();
							return view('student_details_BE')->with('user',$user);
					}
					else
					{
						$array_object =[['full_name'=>null,'mother_name'=>null,'alter_mail'=>null,'email'=>$email,'dob'=>null,'blood_group'=>null,'gender'=>null,'uid'=>null,'shift'=>null,'year_of_joining'=>null,'address_line_1'=>null,'address_line_2'=>null]];
						$user = json_decode(json_encode($array_object));
							return view('student_details_BE')->with('user',$user);
					}
				}
				else if($_POST['course']=="beDse"){
							if(DB::table('student_details')->where('email',$email)->exists())
							{
									$user = DB::table('student_details')->where('email',$email)->get();
									return view('student_details_DSE')->with('user',$user);
							}
							else
							{
								$array_object =[['full_name'=>null,'mother_name'=>null,'alter_mail'=>null,'email'=>$email,'dob'=>null,'blood_group'=>null,'gender'=>null,'uid'=>null,'shift'=>null,'year_of_joining'=>null,'address_line_1'=>null,'address_line_2'=>null]];
								$user = json_decode(json_encode($array_object));
									return view('student_details_DSE')->with('user',$user);
							}
				}
				else{
					if(DB::table('student_details')->where('email',$email)->exists())
					{
							$user = DB::table('student_details')->where('email',$email)->get();
							return view('student_details_MCA')->with('user',$user);
					}
					else
					{
						$array_object =[['full_name'=>null,'mother_name'=>null,'alter_mail'=>null,'email'=>$email,'dob'=>null,'blood_group'=>null,'gender'=>null,'uid'=>null,'shift'=>null,'year_of_joining'=>null,'address_line_1'=>null,'address_line_2'=>null]];
						$user = json_decode(json_encode($array_object));
							return view('student_details_MCA')->with('user',$user);
					}
				}

		}
		else return view("student_details");
	}
		else
		return redirect()->route('login');
}
	public static function showStudentDetails(Request $request)
	{
		$email= $request->session()->get('email');

			if($email!= null)
			{
				if(DB::table('student_details')->where('email',$email)->exists())
				{
						$user = DB::table('student_details')->where('email',$email)->get();
						//return $user;
						return view('student_details')->with('user',$user);
				}
				else
				{
					$array_object =[['first_name'=>null,'middle_name'=>null,'last_name'=>null,'mother_name'=>null,'alter_mail'=>null,'email'=>$email,'phone_personal'=>null,'phone_guardian'=>null,'phone_parent'=>null,'dob'=>null,'blood_group'=>null,'gender'=>null,'uid'=>null,'shift'=>null,'year_of_joining'=>null,'address_line_1'=>null,'address_line_2'=>null,'address_corres'=>null, 'student_details_completed'=>0]];
					$user = json_decode(json_encode($array_object));
						return view('student_details')->with('user',$user);
				}
			}
			else
			return redirect()->route('login');
	}
	public static function insertStudentDetails(Request $request)
	{
		$first_name = $request->input('first_name');
		$middle_name = $request->input('middle_name');
		$last_name = $request->input('last_name');
		$mother_name = $request->input('mother_name');
		$alter_mail = $request->input('alter_mail');
		$phone_personal = $request->input('phone_personal');
		$phone_guardian = $request->input('phone_guardian');
		$phone_parent = $request->input('phone_parent');
		$dob = $request->input('date');
		$blood_group = $request->input('blood_group');
		$gender = $request->input('gender');
		$uid = $request->input('adhar');
		$shift = $request->input('shift');
		$year_of_joining = $request->input('year_of_joining');
		$address_line_1 = $request->input('address_line_1');
		$address_line_2 = $request->input('address_line_2');
		$address_corres = $request->input('address_corres');

		$email = $request->session()->get('email');
		$stud_id = DB::table('login_details')->select('stud_id')->where('email',$email)->get();
		//return $stud_id[0]->stud_id;



		$student = new student_details;
		$student->stud_id = $stud_id[0]->stud_id;
		$student->first_name = $first_name;
		$student->middle_name = $middle_name;
		$student->last_name = $last_name;
		$student->email = $email;
		$student->mother_name = $mother_name;
		$student->alter_mail = $alter_mail;
		$student->phone_parent = $phone_parent;
		$student->phone_guardian = $phone_guardian;
		$student->phone_personal = $phone_personal;
		$student->dob = $dob;
		$student->blood_group = $blood_group;
		$student->gender = $gender;
		$student->uid = $uid;
		$student->shift = $shift;
		$student->year_of_joining = $year_of_joining;
		$student->address_line_1 =$address_line_1;
		$student->address_line_2 = $address_line_2;
		$student->address_corres = $address_corres;
		$student->student_details_completed = 1;
		$student->save();
		return redirect()->route('academic_details');
	}
	//from placement 2
	public static function selectAcademics(Request $request)
	{
		$email= $request->session()->get('email');
		//	return $email;
				if($email!= null){
					//transfer to views
					if(isset($_POST['CourseOption'])){
						$answer = $_POST['CourseOption'];
						if(isset($_POST['CourseOptionBE']) &&  $answer=="BE"){

					  			 $answer2=$_POST['CourseOptionBE'];



									if(DB::table('academic_details')->where('email',$email)->exists())
									{
											$user = DB::table('academic_details')->where('email',$email)->get();
											$type=$answer2;
											return view('academic_details_BE',compact("type"))->with('user',$user);
									}
									else
									{
										$array_object =[['email'=>$email,'sem1_cgpa'=>null,'sem2_cgpa'=>null,'sem3_cgpa'=>null,'sem4_cgpa'=>null,'sem5_cgpa'=>null,'sem6_cgpa'=>null,'avg_cgpa'=>null,'sem4_kt'=>null,'sem5_kt'=>null,'sem6_kt'=>null,'gap'=>null]];
										$user = json_decode(json_encode($array_object));
										$type=$answer2;
											return view('academic_details_BE',compact("type"))->with('user',$user);
									}

					}
					else if($answer=="BE" && isset($_POST['courseOptionBE'])==false)
							return back();
					else if($answer=="MCA") {

						if(DB::table('academic_details')->where('email',$email)->exists())
						{
								$user = DB::table('academic_details')->where('email',$email)->get();

								return view('academic_details_MCA')->with('user',$user);
						}
						else
						{
							$array_object =[['email'=>$email,'sem1_cgpa'=>null,'sem2_cgpa'=>null,'sem3_cgpa'=>null,'sem4_cgpa'=>null,'sem5_cgpa'=>null,'sem6_cgpa'=>null,'avg_cgpa'=>null,'sem4_kt'=>null,'sem5_kt'=>null,'sem6_kt'=>null,'gap'=>null]];
							$user = json_decode(json_encode($array_object));
								return view('academic_details_MCA')->with('user',$user);
						}
					}

					}




				}
				else
					return redirect()->route('login');
	}
	public static function showAcademicDetails(Request $request)
	{
			$email= $request->session()->get('email');
	//	return $email;
			if($email!= null)
			{
						if(DB::table('academic_details')->where('email',$email)->exists())
				{
						$user = DB::table('academic_details')->where('email',$email)->get();
						return view('academic_details')->with('user',$user);
				}
				else
				{
					$array_object =[['email'=>$email,'sem1_cgpa'=>null,'sem2_cgpa'=>null,'sem3_cgpa'=>null,'sem4_cgpa'=>null,'sem5_cgpa'=>null,'sem6_cgpa'=>null,'avg_cgpa'=>null,'sem4_kt'=>null,'sem5_kt'=>null,'sem6_kt'=>null,'gap'=>null]];
					$user = json_decode(json_encode($array_object));
						return view('academic_details')->with('user',$user);
				}
			}
		else
			return redirect()->route('login');
	}
	public static function insertAcademicDetails(Request $request)
	{
		$sem1_cgpa = $request->input('sem1_cgpa');
		$sem2_cgpa = $request->input('sem2_cgpa');
		$sem3_cgpa = $request->input('sem3_cgpa');
		$sem4_cgpa = $request->input('sem4_cgpa');
		$sem5_cgpa = $request->input('sem5_cgpa');
		$sem6_cgpa = $request->input('sem6_cgpa');
		$avg_cgpa = $request->input('avg_cgpa');
		$sem4_kt = $request->input('sem4_kt');
		$sem5_kt = $request->input('sem5_kt');
		$sem6_kt = $request->input('sem6_kt');
		$gap= $request->input('gap');
		if($sem4_kt == NULL)
			$sem4_kt = '0';
		if($sem5_kt == NULl)
			$sem5_kt = '0';
		if($sem6_kt == NULL)
			$sem6_kt = '0';
		if($gap == NULL)
			$gap = '0';
		$email = $request->session()->get('email');
		$student = new academic_details;
		$student->email = $email;
		$student->sem1_cgpa = $sem1_cgpa;
		$student->sem2_cgpa = $sem2_cgpa;
		$student->sem3_cgpa = $sem3_cgpa;
		$student->sem4_cgpa = $sem4_cgpa;
		$student->sem5_cgpa = $sem5_cgpa;
		$student->sem6_cgpa = $sem6_cgpa;
		$student->avg_cgpa = $avg_cgpa;
		$student->sem4_kt= $sem4_kt;
		$student->sem5_kt =$sem5_kt;
		$student->sem6_kt = $sem6_kt;
		$student->gap = $gap;
		$student->save();
		return redirect()->route('upload_resume');
	}

	public function showFinalDetails(Request $request)
	{
		return view('finaldetails');
	}

	public static function showAchievementDetails(Request $request)
	{
			$email= $request->session()->get('email');
	//	return $email;
			if($email!= null)
			{
				if(DB::table('achievement_details')->where('email',$email)->exists())
				{
						$user = DB::table('achievement_details')->where('email',$email)->get();
						return view('achievement_details')->with('user',$user);
				}
				else
				{
					$array_object =[['email'=>$email,'category'=>null,'level'=>null,'type'=>null,'description'=>null,'ach_year'=>null]];
					$user = json_decode(json_encode($array_object));
						return view('achievement_details')->with('user',$user);
				}
			}
		//return view('achievement_details');
		else
			return redirect()->route('login');
	}
		public static function insertAchievementDetails(Request $request)
	{
		$category = $request->input('category');
		$level = $request->input('level');
		$type = $request->input('type');
		$description = $request->input('description');
		$ach_year = $request->input('ach_year');
		$email = $request->session()->get('email');
		if(DB::table('achievement_details')->where('email',$email)->exists())
		{
		$student =  achievement_details::find('email');
			}
		else
			$student =new achievement_details;
		$student->email = $email;
		$student->category = $category;
		$student->level = $level;
		$student->type = $type;
		$student->ach_year = $ach_year;
		$student->description = $description;
		$student->save();
		return redirect()->route('student_details');
	}
	public static function showFinalPage(Request $request)
	{
		return view('final_page');
	}
	public static function checkRegister(Request $request)
	{
			$email = $request->input('username');
			//$mobile = $request->input('mobile');
			//$course = $request->input('course');
			$branch = $request->input('branch');
			$password = $request->input('password');
			$password = Hash::make($password);
			$cp  = $request->input('password_confirmation');
			$data = [];
			$data['email'] = $email;
			//$data['mobile'] = $mobile;
			//$data['course']  = $course;
			$data['branch'] = $branch;
			$data['password'] = $password;
			$request->session()->put('data',$data);
			if(DB::table('login_details')->where('email',$email)->exists())
			{
				$user = DB::table('login_details')->select('email_status')->where('email',$email)->get();
				if($user[0]->email_status== 0)
				{
					$send = 0;
					return view('emailVerify')->with('data',$data)->with('send',$send);
				}
				elseif ($user[0]->email_status == 1) {
					 $request->session()->flash('error','You are already Registered');
					return redirect()->route('login');
				}
			}
			else{
				if(Hash::check($cp, $password))
				{
						$login =  new login_details;
						$login->email = $email;
						//$login->course = $course;
						//$login->mobile = $mobile;
						$login->branch = $branch;
						$login->password = $password;
						$login->save();
						$send = 0;
						return view('emailVerify')->with('data',$data)->with('send',$send);
				}
				else
				{
					  $request->session()->flash('error','Password Entered did not match');
					  return redirect()->route('register');
				}
		}
	}
	public static function showAppliedCompanies(Request $request)
	{
		$email= $request->session()->get('email');
		if($email!= null)
			{
				$user = DB::select('select * from applied_student WHERE email = :email', ['email' => $email]);
						return view('applied_companies',['user'=>$user]);
				//if(DB::table('applied_student')->where('email',$email)->exists())
				//{
						//$user = DB::table('applied_student')->where('email',$email)->get();
						//return view('applied_companies')->with('user',$user);
				//}
				//else
				//{
					//$array_object =[['email'=>$email,'category'=>null,'level'=>null,'type'=>null,'description'=>null,'ach_year'=>null]];
					//$user = json_decode(json_encode($array_object));
				//		return view('applied_companies')->with('user',$user);
				//}
			}
			else
				return redirect()->route('login');
		return view('applied_companies');
	}
	  //public $otp;
  public static  function setotp()
    {
    $otp = mt_rand(1000, 9999);
    return $otp;
    }
    public static function verifyemail(Request $request)
    {
    	 $data1 = $request->session()->get('data');
    	 $email = $data1['email'];
    	 $user = DB::table('login_details')->select('email_otp')->where('email',$email)->get();
    	 $otp = $request->input('emailotp');
    	 if($user[0]->email_otp == $otp)
    	 {
    		DB::table('login_details')->where('email',$email)->update(['email_status'=>1]);
    		DB::table('login_details')->where('email',$email)->update(['acct_status'=>1]);
    	 		$request->session()->flash('error','Registration Process Complete');
    	 		$request->session()->pull('data');
    	 	return redirect()->route('login');
    	 }
    	 else
    	 {
    	 	$send =1;
    	 		$request->session()->flash('error','Otp is Wrong');
    	 		return view('emailVerify')->with('data',$data1)->with('send',$send);
    	 }
    }
    public static function generateHash()
    {
       $chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789abcdefghijklmnopqrstuvwxyz@$*+-=_!^";
       $size = strlen( $chars );
       $length=6;
       $str="";
       for( $i = 0; $i <$length; $i++ ) {
              $str .= $chars[ rand( 0, $size - 1 ) ];
            }
            return $str;
    }
    public static function sendForgotPassword(Request $request)
    {



    		$a = (new static)->generateHash();
    		$email =$request->input('username');
    		if($email!= null)
			{
				if(DB::table('login_details')->where('email',$email)->exists())
				{
					$data = array(
		      			'name' => $a
		    		);
					$password = Hash::make($a);
					DB::table('login_details')->where('email',$email)->update(['password'=>$password]);
					 Mail::send('forgotmail', $data, function ($message) use($email)
		    	  	{
				    	  $message->to($email, '')->subject('Email Verification');
				      	$message->from('2016.rinku.sahu@ves.ac.in', 'Placment');
				      });
					 $request->session()->flash('error','Reset Password Sent to Your mail');
					 return redirect()->route('login');
				}
				else
				{
					$request->session()->flash('error','You have not registered');
					return redirect()->route('forgetPassword');
				}
			}
			else
			{
				$request->session()->flash('error','Enter valid email id');
					return redirect()->route('forgetPassword');
			}


    }
    public static function company_apply($id,Request $request)
    {
    	$email= $request->session()->get('email');
		$user= DB::table('company_details')->select('c_name')->where('c_id',$id)->get();
		//$company1 = DB::table('applied_student')->select('c_name')->where('email',$email)->get();
		//return $user;
		/*$json_array  = json_decode($company1, true);
		 $elementCount  = count($json_array);
		//return $json_array;
		for($i=0; $i<$elementCount; $i++)
		{
			if($user == $json_array[$i])
			{
				return "hello";
				break;
			}
			else
			{
			}
			//return $json_array[$i];
		}*/
		if(DB::table('applied_student')->where('email',$email)->where('c_name',$user[0]->c_name)->exists())
		{
			$request->session()->flash('success','Already Applied');
			return redirect()->route('placement_apply');
		}
		else
		{
			$apply = new applied_student;
		$apply->email = $email;
		$apply->c_id = $id;
		$apply->c_name = $user[0]->c_name;
		$apply->save();
		$request->session()->flash('success','Applied');
    	return redirect()->route('placement_apply');
		}

    }
	public static function sendmail(Request $request)
	{
		$a = (new static)->setotp();
		$email = $request->input('username');
		 $data = array(
      			'name' => $a
    		);
		 $data1 = $request->session()->get('data');
		DB::table('login_details')->where('email',$email)->update(['email_otp'=>$a]);
		//return "hello";
		  Mail::send('mail', $data, function ($message) use($email)
    	  {
		    	  $message->to($email, '')->subject('Email Verification');
		      	$message->from('2016.rinku.sahu@ves.ac.in', 'Placment');
		      });
		  $send =1;
		  return view('emailVerify')->with('data',$data1)->with('send',$send);
		    //return "HTML Email Sent. Check your inbox.";
		   // return $data;
	}
	public static function showPlacementApply(Request $request)
	{
		$email= $request->session()->get('email');
		$use = DB::table('login_details')->select('branch')->where('email', $email)->get();
		$x=$use[0]->branch;
			if($email!= null)
			{
				if(DB::table('login_details')->where('email',$email)->exists())
				{
						$already = DB::table('applied_student')->where('email',$email)->get();
						$user = DB::table('company_details')-> where('for_dept', '=', $x)->get();
						//return $already;
						return view('placement_apply')->with('user',$user)->with('already',$already);
				}
				else
				{
					return redirect()->route('homepage');
				}
			}
			else
			return redirect()->route('homepage');
	}
	public static function showForgotPassword(Request $request)
	{
		return view('forgetPassword');
	}
	public static function insertAdminHomepage(Request $request)
	{
		$c_name = $request->input('c_name');
		$email = $request->input('email');
		$vacancies = $request->input('vacancies');
		$minPointer = $request->input('minPointer');
		$description = $request->input('description');
		$for_dept = $request->input('for_dept');
		$c_type = $request->input('c_type');
		$max_salary = $request->input('max_salary');
		$pass=$request->input('password');
		$password = Hash::make($pass);
		$intake=$request->input('intake');
		$data = array(
      			'username' => $email,
      			'password' => $pass
    		);
		  Mail::send('admin_mail', $data, function ($message) use($email)
    	  {
		    	$message->to($email, '')->subject('Registered for Campus Placement');
		      	$message->from('2017.gayatri.patil@ves.ac.in', 'VESIT Placment Incharge');
			  });
		  $data1 = array(
      			'c_name' => $c_name,
      			'vacancies' => $vacancies,
      			'intake' => $intake,
      			'minPointer' => $minPointer
    		);
		  if($for_dept =="CMPN")
		  {
		  	Mail::send('company_mail', $data1, function ($message) use($email)
    	  	{
		    	$message->to('2017.kunal.bathija@ves.ac.in', '')->subject('New company for campus placement');
		      	$message->from('placement@gmail.com', 'VESIT Placment Incharge');
			  });
		  }
		  elseif($for_dept == "IT")
		  {
		  	Mail::send('company_mail', $data1, function ($message) use($email)
    	  	{
		    	$message->to('2017.kunal.bathija@ves.ac.in', '')->subject('New company for campus placement');
		      	$message->from('placement@gmail.com', 'VESIT Placment Incharge');
			  });
		  }
		  elseif($for_dept == "MCA")
		  {
		  	Mail::send('company_mail', $data1, function ($message) use($email)
    	  	{
		    	$message->to('kunalbathija97@gmail.com', '')->subject('New company for campus placement');
		      	$message->from('placement@gmail.com', 'VESIT Placment Incharge');
			  });
		  }
		  elseif($for_dept == "ETRX")
		  {
		  	Mail::send('company_mail', $data1, function ($message) use($email)
    	  	{
		    	$message->to('kunalbathija97@gmail.com', '')->subject('New company for campus placement');
		      	$message->from('placement', 'VESIT Placment Incharge');
			  });
		  }
		  elseif($for_dept == "EXTC")
		  {
		  	Mail::send('company_mail', $data1, function ($message) use($email)
    	  	{
		    	$message->to('kunalbathija97@gmail.com', '')->subject('New company for campus placement');
		      	$message->from('placement', 'VESIT Placment Incharge');
			  });
		  }
		  elseif($for_dept == "INST")
		  {
		  	Mail::send('company_mail', $data1, function ($message) use($email)
    	  	{
		    	$message->to('kunalbathija97@gmail.com', '')->subject('New company for campus placement');
		      	$message->from('placement', 'VESIT Placment Incharge');
			  });
		  }
		$company = new company_details;
		$company->password=$password;
		$company->c_name=$c_name;
		$company->email = $email;
		$company->for_dept = $for_dept;
		$company->vacancies=$vacancies;
		$company->eligibility_creteria=$minPointer;
		$company->type=$c_type;
		$company->max_salary=$max_salary;
		$company->description=$description;
		$company->intake=$intake;
		$company->save();
		return redirect()->route('admin_homepage');
	}
	public static function insertEvent(Request $request)
	{
		$event_name = $request->input('event_name');
		$event_des = $request->input('event_des');
		$venue = $request->input('venue');
		$date = $request->input('date');
		$time = $request->input('time');
		$event= new event;
		$event->event_name=$event_name;
		$event->event_des=$event_des;
		$event->venue=$venue;
		$event->date = $date;
		$event->time=$time;
		$event->save();
		return redirect()->route('admin_homepage');
	}
	public static function showRules(Request $request){
		return view('rules');
	}
	public static function showRecruiters(Request $request){
		return view('recruiters');
	}
	public static function showUploadResume(Request $request)
	{
		$email = $request->session()->get('email');
		if($email!= null)
		{
			if(DB::table('resume')->where('email',$email)->exists())
				{

						$user = DB::table('resume')->where('email',$email)->get();
						//return $user[0]->photo_path;
						return view('upload_resume')->with('user',$user);
				}
			else
			{
				$array_object =[['email'=>$email,'is_resume'=>null,'resume_path'=>null,'photo_path'=>null,'is_photo'=>null]];
					$user = json_decode(json_encode($array_object));

				return view('upload_resume')->with('user',$user);
			}

		}
		else
		{
			return redirect()->route('login');
		}
	}


	public static function insertUploadResume(Request $request)
	{
		if($request->file('resume')==null){
			return redirect()->back()->withErrors(["Please choose a file first."]);
		}
		$email = $request->session()->get('email');
		$stud_id = DB::table('login_details')->select('stud_id')->where('email',$email)->get();
		$use = DB::table('login_details')->select('branch','email')->where('email', $email)->get();
		$destinationPath = $use[0]->branch.'/'.$use[0]->email;
		$extension = $request->file('resume')->getClientOriginalExtension();
        $filenametostore = 'Resume'.'.'.$extension;
        $path =  $request->file('resume')->storeAs($destinationPath, $filenametostore,'public_uploads');
         if($extension!="pdf"){
			return redirect()->back()->withErrors(["Upload in pdf format only.	"]);
		}
         $resume = new resume;
        if(DB::table('resume')->where('email', $email)->exists())
          {
           $resume  = resume::find($email);
          }
          else
          {
          	$resume->email=$email;
          }

        $resume->stud_id=$stud_id[0]->stud_id;
        $resume->branch=$use[0]->branch;
        $resume->is_resume='Yes';
        $resume->resume_path=$destinationPath.'/'.$filenametostore;
        $resume->save();
        return redirect()->back()->with('success', 'File uploaded successfully.');
	}

	public static function insertUploadPhoto(Request $request)
	{
		if($request->file('photo')==null){
			return redirect()->back()->withErrors(["Please choose a file first."]);
		}
		$email = $request->session()->get('email');
		$stud_id = DB::table('login_details')->select('stud_id')->where('email',$email)->get();
		$use = DB::table('login_details')->select('branch','email')->where('email', $email)->get();
		$destinationPath = $use[0]->branch.'/'.$use[0]->email;
		$extension = $request->file('photo')->getClientOriginalExtension();
        $filenametostore = 'Photo'.'.'.$extension;
        $path =  $request->file('photo')->storeAs($destinationPath, $filenametostore,'public_uploads');
        if($extension=="jpg" || $extension=="png" || $extension=="jpeg")
        {
					
         $resume = new resume;
	        if(DB::table('resume')->where('email', $email)->exists())
	          {
	           $resume  = resume::find($email);
	          }
	          else
	          {
	          	$resume->email=$email;
	          }

	          $resume->stud_id=$stud_id[0]->stud_id;
	        $resume->branch=$use[0]->branch;
	        $resume->is_photo='Yes';
	        $resume->photo_path=$destinationPath.'/'.$filenametostore;
	        $resume->save();
	        return redirect()->back()->with('success', 'File uploaded successfully.');
    	}
    	else{
    		return redirect()->back()->withErrors(["Upload in required format only.	"]);
    	}
	}
	public static function delete($id, Request $request)
    {
        $email = $request->session()->get('email');

        $column_name1='is_'.$id;
        $column_name2=$id.'_path';
        $resume = new resume;
        if(DB::table('resume')->where('email', $email)->exists())
          {
           DB::table('resume')->where('email', $email)->update([$column_name1 => null,$column_name2 => null]);
           return redirect()->route('upload_resume')->with('success', 'Deleted');
          }
          else
          {
           return redirect()->route('upload_resume');
          }

	}
	public static function 	updateStats(Request $request)
	{
		$branch= $request->input('branch');
		$total_students= $request->input('total_students');
		$applied_students= $request->input('applied_students');
		$placed_students= $request->input('placed_students');
		$for_higher_studies= $request->input('for_higher_studies');
		//return $applied_students;
		DB::table('statistics')->where('branch',$branch)->update(['total_students'=>$total_students]);
		DB::table('statistics')->where('branch',$branch)->update(['applied_students'=>$applied_students]);
		DB::table('statistics')->where('branch',$branch)->update(['placed_students'=>$placed_students]);
		DB::table('statistics')->where('branch',$branch)->update(['for_higher_studies'=>$for_higher_studies]);
		return redirect()->route('admin_homepage');
	}



public static function insertInternshipDetails(Request $request)
{
 // dd($request->all());
$email = $request->session()->get('email');
$Class=$request->input('Class');
$company=$request->input('company');
$startdate=$request->input('startdate');
$enddate=$request->input('enddate');
$Description=$request->input('Description');

if(DB::table('internship_details')->where('email',$email)->exists())
		{
		$student =  internship_details::find('email');
			}
		else
		$student =new internship_details;
		$student->email = $email;
		$student->Class = $Class;
		$student->company = $company;
		$student->startdate = $startdate;
		$student->enddate = $enddate;
		$student->Description = $Description;
		$student->save();
return redirect()->route('internship_details');
}


public static function showInternshipDetails(Request $request)
{
	return view('finalinternshipdetails');
	
}

}

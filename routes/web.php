<?php
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\studentcontroller;
use App\Http\Controllers\Student2Controller;
use App\Http\Controllers\ClothesController;
use Illuminate\Support\Facades\App;

// Route::get('/', function () {
//     return view('welcome');
// });    //view call

// Route::get('/', function () {
//     return "rohit";
// });  //simple call
 
// Route::get('/h1', function () {
//     return "rohit h1";
// });

// Route::get('/', function () {
//     return view('Student');
// }); // my name is rohit dikhega coz us student view m yhi likha hua h


// Route::get('/S2', function () {
//     return response()->json(['name' => 'rohit', 'age' => 21]);
// });  //response call
// Route::get('/{name}', function ($name) {
//     return "my name is " . $name;
// });  //parameter DYNAMIC call  
 

// Route::get('/{name}', function ($name) {
//     return view ('Student', ['name' => $name]);
// }); //parameter DYNAMIC call with view 

// Route::get('/{name}', function ($name) {
//     $class = "k23BA"; 
//     return view ('Student', ['name' => $name , 'class' => $class]);
// });  //parameter DYNAMIC call with view and multiple parameter 


// Route::get('/{name}', function ($name) {
//     $class = "k23BA"; 
//     return view ('Student', ['name' => $name , 'class' => $class]);
// })->where('name','[A-Za-z]+');
// //parameter DYNAMIC call with view and multiple parameter and regular expression,{NUMBER NAHI LEGGA,only alphabets}

// Route::get('/user/{id}',function($id){
//     return "user id is" .$id;
// }); //parameter DYNAMIC call with name and id

// Route::get('/user/{id}',function($id){
//     return "user id is" .$id;
// })->where('id','[0-9]+');
// // parameter DYNAMIC call with name and id and regular expression, {only number legga}

// Route::get('/student/{id}',function($id){
//     if(!ctype_digit($id)){
//         return "only integers are allowed";
//     }   
//     else{   
//     return "student id is" .$id;
//     }
// }); //parameter DYNAMIC call with name and id and regular expression, {only number legga} using ctype_digit function

// Route::get('/name/{id}',function($name){
//     if(!ctype_alpha($name)){
//         return "only alphabets are allowed";
//     }   
//     else{   
//     return "student name is".$name;
//     }
// }); //parameter DYNAMIC call with name and id and regular expression, {only alphabets legga} using ctype_alpha function 

// Route::get('/new/{id?}',function($id=null){
//         return "guest user";
// }); //kuch bhi na likhne par guest user aayega, optional parameter call 

// ////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// Route::get('/student1', function () {
//     [$name = "rohit",$rollno = 123, $class="10th"];
//     return view ('Student1',['n'=>$name,'r'=>$rollno,'c'=>$class]);
// }); //1st tareeka, value store krke and view call with variables(key value pair required during call,key ko view m likhna hai).

// Route::get("/student2", function () {
//     [$name = "mohit",$rollno = 456, $class="11th"];
//     return view('Student2')->with('n',$name)->with('r',$rollno)->with('c',$class);
// }); //2nd tareeka, value store krke and view call with variables using with chain method(key value pair required during call).

// Route::get('/student3', function () {
//     [$name = "pohit",$rollno = 789, $class="12th"];
//     return view('Student3',compact('name','rollno','class'));
// }); //3rd tareeka, value store krke and view call with variables using compact function.(only key is required to call)


// //boot ka code(providers->appserviceprovider.php):-(udhr class 10th set kr rkhi hai, usko access krne ke liye):-
// Route::get('/student4', function () {
//    [$name = "ROHAN",$rollno = 156];
//    return view('Student4',compact('name','rollno'));
//    //return view('Student4')->with('name',$name)->with('rollno',$rollno);
//    //return view('Student4',['name'=>$name,'rollno'=>$rollno]);
// });
// //global variable(class 10th) access krne ke liye, usko boot m declare krna hoga, uske baad har view m use kr skte hai, best tareeka hai global variable declare krne ka.

// Route::get('/studentlist', function () {
// [[$name1 = "rohit",$rollno1 = 123],[$name2 = "mohit",$rollno2 = 456],[$name3 = "pohit",$rollno3 = 789]];
// return view('StudentList',compact('name1','rollno1','name2','rollno2','name3','rollno3'));
// }); 

///////////////////16 tareek chutti krrli thi//////

//controller call of HomeController
//Route::get('/',[HomeController::class,'index']);
//  Route::get('/user',[HomeController::class,'user']); //middleware lga rkha hai
// Route::get('/userdynamic/{name}/{age}',[HomeController::class,'userdynamic']); //dynamic route - name aur age URL se aayega
// Route::get('/userdetailview',[HomeController::class,'userdetailview']);
// Route::post('/userdetails',[HomeController::class,'userdetails']); //request route - name aur age form se aayega, post method use krna hoga form m.

// //controller call of studentcontroller
// Route::get('/student/{id}',[studentcontroller::class,'Studentdetails']); //dynamic route - id URL se aayega, student details show krne ke liye.
// //data passing from controller to view, studentdetails view m student variable ko access krna hoga, uske liye compact function use krna hoga, compact function m student variable ka naam dena hoga, taki usko view m access kr skte hai.
// Route::get('/table/{num}',[studentcontroller::class,'Table']); //dynamic route - num URL se aayega, table show krne ke liye.


// Route::get('/', function () {
//     return "rohit";
// })->middleware('age.check'); //alias middleware call,http://127.0.0.1:8000/?age=20 , aalias is used for specific route.


// Route::prefix('2023/CSE/B.tech/3rd/K23BA')
//->group(function () {
//     Route::get('/studentattendance', function () {
//         return view('STUDENT.studentattendance');
//     });
//     Route::get('/studentfee', function () {
//         return view('STUDENT.studentfee');
//     });
//     Route::get('/studentmark', function () {
//         return view('STUDENT.studentmark');
//     }); //http://127.0.0.1:8000/2023/CSE/B.tech/3rd/K23BA/studentmark
// }); //route group, prefix use krke common URL ka part likh skte hai, uske baad har route m uska baaki part likhna hoga, route group m middleware bhi use kr skte hai, uske liye prefix ke baad middleware method use krna hoga.

// Route::prefix('2023/CSE/B.tech/3rd/K23BA') //same code but with CONTROLLER
// ->controller(Student2Controller::class)
// ->group(function () {
//         Route::get('/studentattendance', 'Studentattendance');
//         Route::get('/studentfee', 'Studentfee');
//         Route::get('/studentmark', 'Studentmark'); 
// }); //route group with controller, prefix use krke common URL ka part likh skte hai, uske baad har route m uska baaki part likhna hoga, route group m middleware bhi use kr skte hai, uske liye prefix ke baad middleware method use krna hoga, controller method use krke controller call kr skte hai, uske baad group function m routes define krne hote hai, aur unme controller ke function ka naam dena hota hai.

// Route::get('/clothes', [ClothesController::class, 'index']);
// Route::get('/clothes/{id}', [ClothesController::class, 'show']);



////////////////////// UNIT 4 ///////////////////////
// Route::get('/localization', function () {
//     return view('local');
// }); //localization view call, localization ke liye resources/lang m language folder bna kr usme language file bna kr usme key value pair bna kr use krna hota hai, uske baad view m us key ko call krna hota hai, taki wo value show kr skte hai, localization ke liye app.php m locale set krna hota hai, aur route m localization middleware use krna hota hai, taki wo locale ke hisab se language file ko access kr skte hai.

// Route::get('/local/{lang}', function ($lang){
//     App::setLocale($lang);
//     return view('local');
// }); //dynamic localization

// // email:-
// use App\Http\Controllers\EmailController;

// Route::get('/email', function () {
//     return view('EmailForm');
// }); //email form view call
// Route::post('/sendEmail', [EmailController::class, 'sendEmail']);



// use App\Http\Controllers\FileController;

// Route::get('/fileform', function () {
//     return view('Fileform');
// });
// Route::post('/uploadData', [FileController::class, 'uploadData']);
//////////////////////cookies.//////////////////////


// Route::get('/setcookie', function () {
//     return response('cookie created succssfully')->cookie('name', 'rohit', 60);
// }); //cookie set, 60 means cookie will expire in 60 minutes

// // it is encrypted so if we want to see what is there inside.
// Route::get('/getcookie', function (){
//     $value = request()->cookie('name');
//     return "cookie value is: " . $value;
// }); 

// //delete cookie
// Route::get('/deletecookie', function () {
//     return response('cookie deleted successfully')->cookie('name', null , -1);
// }); 

// //session cookie in form ////

// Route::get('/cookieform', function () {
//     return view('CookieForm');
// }); 
// Route::post('/login', function () {
//     return 'done';
// }); //normally ese display krwa skte hai, controller se next m kra rha hu:
// use App\Http\Controllers\SessionController;
// Route::post('/login', [SessionController::class, 'DataDisplay']);
Route::view('login', 'StudentForm1'); //student form view call
use  App\Http\Controllers\StudentForm1;
Route::post('/submit', [StudentForm1::class, 'StudentForm']); 
/////////////////////////////////UNIT 6////////////////////////////////////


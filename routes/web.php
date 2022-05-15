<?php

use Illuminate\Support\Facades\Route;


// ADMIN

use \App\Http\Controllers\api\admin\expense_ctAdController;
// TEACHER

use \App\Http\Controllers\api\LoginController;
use \App\Http\Controllers\api\teacher\MainController;
// STUDENT


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/', function () {
    return view('welcome');
});
// LOGIN
Route::get('/LOGIN/home', function () {
    return view('auth.index');
});



Route::get('/LOGIN/admin', function () {
    return view('auth.admin.index');
});

Route::get('/LOGIN/teacher', function () {
    return view('auth.teacher.index');
})->name('login.teacher.index');

Route::post('/LOGIN/teacher/store', [LoginController::class, "teacherstore"]);


Route::get('/LOGIN/student', function () {
    return view('auth.student.index');
});

Route::get('/LOGIN/forgotpassword', function () {
    return view('auth.forgot.index');
});

// ADMIN
Route::get('/admin/home', function () {
    return view('admin.index');
});
Route::get('/admin/admin', function () {
    return view('admin.admins.index');
});
Route::get('/admin/professional-groups', function () {
    return view('admin.professional-groups.index');
});
Route::get('/admin/permission-groups', function () {
    return view('admin.permission-groups.index');
});
Route::get('/admin/classs', function () {
    return view('admin.classs.index');
});
Route::get('/admin/feedbackAd', function () {
    return view('admin.feedbackAd.index');
});
Route::get('/admin/parentStudent', function () {
    return view('admin.parentStudent.index');
});
Route::get('/admin/students', function () {
    return view('admin.students.index');
});
Route::get('/admin/subjects', function () {
    return view('admin.subjects.index');
});
Route::get('/admin/teachers', function () {
    return view('admin.teachers.index');
});
Route::get('/admin/staff', function () {
    return view('admin.staff.index');
});
Route::get('/admin/expense', function () {
    return view('admin.expense.index');
});
Route::get('/admin/expense-ct', function () {
    return view('admin.expense-ct.index');
});
Route::get('/admin/revenue', function () {
    return view('admin.revenue.index');
});
Route::get('/admin/revenue-ct', function () {
    return view('admin.revenue-ct.index');
});
Route::get('/admin/ComingSoon', function () {
    return view('admin.ComingSoon');
});
Route::get('/admin/profileAd', function () {
    return view('admin.profileAd.index');
});

// TEACHER
Route::get('/teacher/home', function () {
    return view('teacher.index');
});



// STUDENT
Route::get('/student/home', function () {
    return view('student.index');
});
Route::get('/student/online-learning', function () {
    return view('student.online-learning.index');
});
Route::get('/student/list-study-program', function () {
    return view('student.list-study-program.index');
});
Route::get('/student/subject-details', function () {
    return view('student.subject-details.index');
});
Route::get('/student/exam-list', function () {
    return view('student.exam-list.index');
});
Route::get('/student/doing-test', function () {
    return view('student.doing-test.index');
});
Route::get('/student/test-results', function () {
    return view('student.doing-test.test-results');
});
Route::get('/student/learning-outcomes', function () {
    return view('student.learning-outcomes.index');
});
Route::get('/student/schedule', function () {
    return view('student.schedule.index');
});
Route::get('/student/finance', function () {
    return view('student.finance.index');
});
Route::get('/student/pay-tuition', function () {
    return view('student.pay-tuition.index');
});
Route::get('/student/evaluate', function () {
    return view('student.evaluate.index');
});
Route::get('/student/feedback', function () {
    return view('student.feedback.index');
});
Route::get('/student/account-settings', function () {
    return view('student.account-settings.index');
});

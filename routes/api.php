<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// ADMIN
use App\Http\Controllers\api\admin\HomeAdController;
use App\Http\Controllers\api\admin\AdminAdController;
use App\Http\Controllers\api\admin\ProfessionalGroupsAdController;
use App\Http\Controllers\api\admin\permissionGroupsAdController;
use App\Http\Controllers\api\admin\classsAdController;
use App\Http\Controllers\api\admin\feedbackAdController;
use App\Http\Controllers\api\admin\parentAdController;
use App\Http\Controllers\api\admin\studentsAdController;
use App\Http\Controllers\api\admin\subjectsAdController;
use App\Http\Controllers\api\admin\teachersAdController;
use App\Http\Controllers\api\admin\staffAdController;
use App\Http\Controllers\api\admin\expenseAdController;
use App\Http\Controllers\api\admin\expense_ctAdController;
use App\Http\Controllers\api\admin\revenueAdController;
use App\Http\Controllers\api\admin\revenue_ctAdController;

// TEACHER
use App\Http\Controllers\api\teacher\HomeTeController;

// STUDENT
use App\Http\Controllers\api\student\HomeStudentController;
use App\Http\Controllers\api\student\OnlineLearningController;
use App\Http\Controllers\api\student\ListStudyProgramController;
use App\Http\Controllers\api\student\SubjectDetailsController;
use App\Http\Controllers\api\student\LearningOutcomesController;
use App\Http\Controllers\api\student\FinanceController;
use App\Http\Controllers\api\student\PayTuitionController;
use App\Http\Controllers\api\student\EvaluateController;
use App\Http\Controllers\api\student\FeedbackController;
use App\Http\Controllers\api\student\ParentStudentController;
use App\Http\Controllers\api\student\StudentController;
use App\Http\Controllers\api\student\ExamListController;
use App\Http\Controllers\api\student\TestQuestionsController;
use App\Http\Controllers\api\student\DetailsAssignmentsController;
use App\Http\Controllers\api\student\QuestionsController;
use App\Http\Controllers\api\student\TestInfoController;
use App\Http\Controllers\api\student\ScheduleController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// ADMIN
Route::resource('home', HomeAdController::class);
Route::resource('admin', AdminAdController::class);
Route::resource('professional-groups', ProfessionalGroupsAdController::class);
Route::resource('permission-groups', permissionGroupsAdController::class);
Route::resource('classs', classsAdController::class);
Route::resource('feedbackAd', feedbackAdController::class);
Route::resource('parentStudent', parentAdController::class);
Route::resource('students', studentsAdController::class);
Route::resource('subjects', subjectsAdController::class);
Route::resource('teachers', teachersAdController::class);
Route::resource('staff', staffAdController::class);
Route::resource('expense', expenseAdController::class);
Route::get('expense-ct/{id}', [expense_ctAdController::class, 'indexexpense']);
Route::resource('expense-ct', expense_ctAdController::class);

Route::resource('revenue', revenueAdController::class);
Route::resource('revenue-ct', revenue_ctAdController::class);

// TEACHER
Route::resource('home-teacher', HomeTeController::class);

// STUDENT
Route::resource('home-student', HomeStudentController::class);
Route::resource('online-learning', OnlineLearningController::class);
Route::resource('list-study-program', ListStudyProgramController::class);
Route::resource('subject-details', SubjectDetailsController::class);
Route::resource('learning-outcomes', LearningOutcomesController::class);
Route::resource('finance', FinanceController::class);
Route::resource('pay-tuition', PayTuitionController::class);
Route::resource('evaluate', EvaluateController::class);
Route::resource('feedback', FeedbackController::class);
Route::resource('parent-student', ParentStudentController::class);
Route::resource('student', StudentController::class);
Route::resource('exam-list', ExamListController::class);
Route::resource('test-questions', TestQuestionsController::class);
Route::resource('details-assignments', DetailsAssignmentsController::class);
Route::resource('questions', QuestionsController::class);
Route::resource('test-info', TestInfoController::class);
Route::resource('schedule', ScheduleController::class);

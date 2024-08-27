<?php
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\QuanTriLoaiTinController;
use App\Http\Controllers\QuanTriTinController;
use App\Http\Controllers\QuanTriNguoiDungController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\VerifyEmailController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\TinController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\frontend\NewsController;
use App\Http\Controllers\frontend\AboutController;
use App\Http\Controllers\frontend\IndexController;
use App\Http\Controllers\frontend\ContactController;
// use App\Http\Controllers\Backend\CategoryController;
// use App\Http\Controllers\frontend\laterNewsController;
use App\Http\Controllers\frontend\BlogController;

Route::get('/test-email', function () {
    $details = [
        'name' => 'Test User',
        'email' => 'test@example.com',
        'subject' => 'Test Email',
        'message' => 'This is a test email.',
    ];

    Mail::to('quantmpd08630@fpt.edu.vn')->send(new ContactMail($details));

    return 'Email sent';
});
//News
Route::get('/', [IndexController::class, 'index'])->name('home');
Route::get('/category/{slug}', [NewsController::class, 'category'])->name('category');
Route::get('/single-post/{slug}', [NewsController::class, 'single_post']);
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');
// Route::get('/laterNews', [laterNewsController::class, 'index'])->name('laterNews');
Route::get('/blog', [BlogController::class, 'index'])->name('laterNews');
Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::post('/blog/comment', [BlogController::class, 'comment'])->name('blog.comment');
// Route cho trang tìm kiếm
Route::get('/search', [TinController::class, 'search']);

// Route cho admin layout
// Admin
Route::middleware('level')->group(function () {
    Route::get('admin', [AdminController::class, 'index'])->name('admin');
    Route::resource('admin/categories', QuanTriLoaiTinController::class);
    Route::resource('admin/news', QuanTriTinController::class);

    Route::resource('admin/users', QuanTriNguoiDungController::class);
    Route::resource('admin/comments', CommentController::class);
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


// Route cho admin với prefix và middleware auth
Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'Quantri']], function () {
    Route::get('/dstin', [AdminController::class, 'dstin']);
    Route::get('/dstinthemin', [AdminController::class, 'themtin']);
    Route::post('/dstin/themtinmoi', [AdminController::class, 'themtinmoi']);
    Route::get('/dstin/xoa/{id}', [AdminController::class, 'xoa']);
    Route::get('/dstin/capnhat/{id}', [AdminController::class, 'capnhat']);
    Route::post('/dstin/capnhat/{id}', [AdminController::class, 'capnhat']);
    Route::get('/dsloaitin', [AdminController::class, 'dsloaitin'])->name('dsloaitin');
    Route::get('/dsuser', [AdminController::class, 'dsuser'])->name('dsuser');
});

Route::group(['prefix' => 'user'], function () {
    Route::get('/featured-news', [NewsController::class, 'featured']);
    Route::get('/latest-news', [NewsController::class, 'latest']);
});

// Authentication routes
// Route::get('/register', [AdminController::class, 'create'])->middleware('guest');
// Route::post('/register', [RegisteredUserController::class, 'store'])->middleware('guest');
// Route::get('/login', [AuthenticatedSessionController::class, 'create'])->middleware('guest');
// Route::post('/login', [AuthenticatedSessionController::class, 'store'])->middleware('guest');
// Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->middleware('auth');

// Route::get('/forgot-password', [PasswordResetLinkController::class, 'create'])->middleware('guest');
// Route::post('/forgot-password', [PasswordResetLinkController::class, 'store'])->middleware('guest');
// Route::get('/reset-password/{token}', [NewPasswordController::class, 'create'])->middleware('guest');
// Route::post('/reset-password', [NewPasswordController::class, 'store'])->middleware('guest');

// Route::get('/verify-email', [EmailVerificationPromptController::class, '__invoke'])->middleware('auth');
// Route::get('/verify-email/{id}/{hash}', [VerifyEmailController::class, '__invoke'])->middleware(['auth', 'signed', 'throttle:6,1']);
// Route::post('/email-verification-notification', [EmailVerificationNotificationController::class, 'store'])->middleware(['auth', 'throttle:6,1']);

// Route::get('/confirm-password', [ConfirmablePasswordController::class, 'show'])->middleware('auth');
// Route::post('/confirm-password', [ConfirmablePasswordController::class, 'store'])->middleware('auth');

require __DIR__ . '/auth.php';

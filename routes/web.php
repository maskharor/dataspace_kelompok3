    <?php

    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\AuthController;
    use App\Http\Controllers\MateriController;
    use App\Http\Controllers\QuizController;

    /*
    |--------------------------------------------------------------------------
    | PUBLIC / GUEST
    |--------------------------------------------------------------------------
    */

    Route::get('/', function () {
        return view('welcome');
    })->name('home');

    /*
    |--------------------------------------------------------------------------
    | MATERI (BISA DILIHAT SEMUA)
    |--------------------------------------------------------------------------
    */

    Route::get('/materi', [MateriController::class, 'index'])
        ->name('materi.index');

    /*
    |--------------------------------------------------------------------------
    | GUEST ONLY
    |--------------------------------------------------------------------------
    */

    Route::middleware('guest')->group(function () {

        Route::get('/login', [AuthController::class, 'login'])
            ->name('login');

        Route::post('/login', [AuthController::class, 'loginProses'])
            ->name('login.proses');

        Route::get('/register', [AuthController::class, 'register'])
            ->name('register');

        Route::post('/register', [AuthController::class, 'registerProses'])
            ->name('register.proses');
    });

    /*
    |--------------------------------------------------------------------------
    | AUTH USER
    |--------------------------------------------------------------------------
    */

    Route::middleware('auth')->group(function () {

        //  Dashboard User
        Route::get('/dashboard', function () {
            return view('Users.dashboard');
        })->name('dashboard');

        // Detail materi
        Route::get('/materi/{id}', [MateriController::class, 'show'])
            ->name('materi.show');


        //Kuis  
        Route::get('/quiz/{modul}', [QuizController::class, 'index'])
        ->name('quiz');
        
        Route::post('/quiz/answer', [QuizController::class,'answer'])
            ->name('quiz.answer');

        Route::post('/quiz/next', [QuizController::class,'next'])
            ->name('quiz.next');

        Route::post('/quiz/finish', [QuizController::class, 'finish'])
            ->name('quiz.finish');

        Route::post('/logout', [AuthController::class, 'logout'])
            ->name('logout');

    });

    /*
    |--------------------------------------------------------------------------
    | ADMIN
    |--------------------------------------------------------------------------
    */

    Route::prefix('admin')->group(function () {

        Route::get('/dashboard', function () {
            return view('Admin.dashboard');
        })->name('admin.dashboard');

        Route::get('/modul', function () {
            return view('Admin.Modul');
        })->name('admin.modul');

        Route::get('/pengguna', function () {
            return view('Admin.pengguna');
        })->name('admin.pengguna');

        Route::get('/pengaturan', function () {
            return view('Admin.pengaturan');
        })->name('admin.pengaturan');

        Route::get('/kuis', function () {
            return view('Admin.kuis');
        })->name('admin.kuis');
    });

    Route::prefix('dosen')->group(function () {
        Route::get('/dashboard', function () {
            return view('Instructor.dashboard');
        })->name('Instructor.dashboard');
    });
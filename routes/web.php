    <?php

    use App\Http\Controllers\AuthController;
    use App\Http\Controllers\Admin\AdminDashboardController;
    use App\Http\Controllers\Admin\AdminModulController;
    use App\Http\Controllers\Admin\AdminPenggunaController;
    use App\Http\Controllers\Admin\AdminPengaturanController;
    use App\Http\Controllers\Instructor\DosenDashboardController;
    use App\Http\Controllers\Instructor\DosenModulController;
    use App\Http\Controllers\MateriController;
    use App\Http\Controllers\QuizController;
    use Illuminate\Support\Facades\Auth;
    use Illuminate\Support\Facades\Route;

    /*
    |--------------------------------------------------------------------------
    | PUBLIC
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

        //  Redirect Dashboard Berdasarkan Role
        Route::get('/dashboard', function () {

            $user = Auth::user();

            if ($user->role === 'admin') {
                return redirect()->route('admin.dashboard');
            }

            if ($user->role === 'dosen') {
                return redirect()->route('dosen.dashboard');
            }

            if ($user->role === 'mahasiswa') {
                return redirect()->route('materi.index');
            }

            return redirect()->route('home');
        })->name('dashboard');

        // Detail materi
        Route::get('/materi/{id}', [MateriController::class, 'show'])
            ->name('materi.show');


        //Kuis
        Route::get('/quiz/{modul}', [QuizController::class, 'index'])
            ->name('quiz');

        Route::post('/quiz/answer', [QuizController::class, 'answer'])
            ->name('quiz.answer');

        Route::post('/quiz/next', [QuizController::class, 'next'])
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
    Route::middleware(['auth', 'role:admin'])
        ->prefix('admin')
        ->name('admin.')
        ->group(function () {
            Route::get(
                '/dashboard',
                [AdminDashboardController::class, 'index']
            )->name('dashboard');

            /*
        |--------------------------------------------------------------------------
        | MODUL CRUD
        |--------------------------------------------------------------------------
        */
            Route::get(
                '/modul',
                [AdminModulController::class, 'index']
            )->name('modul');

            Route::post(
                '/modul',
                [AdminModulController::class, 'store']
            )->name('modul.store');

            Route::get(
                '/modul/{modul}',
                [AdminModulController::class, 'show']
            )->name('modul.show');

            Route::put(
                '/modul/{modul}',
                [AdminModulController::class, 'update']
            )->name('modul.update');

            Route::delete(
                '/modul/{modul}',
                [AdminModulController::class, 'destroy']
            )->name('modul.destroy');

            /*
        |--------------------------------------------------------------------------
        | PENGGUNA CRUD
        |--------------------------------------------------------------------------
        */
            Route::get(
                '/pengguna',
                [AdminPenggunaController::class, 'index']
            )->name('pengguna');

            Route::get(
                '/pengguna/{user}',
                [AdminPenggunaController::class, 'show']
            )->name('pengguna.show');

            Route::put(
                '/pengguna/{user}',
                [AdminPenggunaController::class, 'update']
            )->name('pengguna.update');

            Route::delete(
                '/pengguna/{user}',
                [AdminPenggunaController::class, 'destroy']
            )->name('pengguna.destroy');
            /*
        |--------------------------------------------------------------------------
        | PENGATURAN CRUD
        |--------------------------------------------------------------------------
        */
            Route::get(
                '/pengaturan',
                [AdminPengaturanController::class, 'index']
            )->name('pengaturan');

            Route::put(
                '/pengaturan/profile',
                [AdminPengaturanController::class, 'updateProfile']
            )->name('pengaturan.profile');

            Route::put(
                '/pengaturan/password',
                [AdminPengaturanController::class, 'updatePassword']
            )->name('pengaturan.password');

            Route::get('/kuis', function () {
                return view('Admin.kuis');
            })->name('kuis');
        });

    /*
    |--------------------------------------------------------------------------
    | DOSEN
    |--------------------------------------------------------------------------
    */
    Route::middleware(['auth', 'role:dosen'])
        ->prefix('dosen')
        ->name('dosen.')
        ->group(function () {

            Route::get(
                '/dashboard',
                [DosenDashboardController::class, 'index']
            )->name('dashboard');

            Route::get(
                '/modul/{modul}',
                [DosenModulController::class, 'show']
            )->name('modul.show');

            Route::put(
                '/modul/{modul}/review',
                [DosenModulController::class, 'review']
            )->name('modul.review');
        });

<?php

use App\Models\User;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Validation\ValidationException;

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
    Artisan::call('storage:link');
    return view('home', [
        'categories' => Category::All()
    ]);
});

Route::get('login',function () {
    if (Auth::check()){
        return redirect('categories');
    }

    return view('login');
});

Route::get('register', function() {
    return view('register', [
        'sub_categories' => SubCategory::All(),
    ]);
});

Route::get('categories', function() {
    return view('categories');
})->middleware('auth');

Route::get('category/{category}', function(Category $category) {
    return view('category', [
        'category' => $category,
        'users' => User::WhereRelation('sub_category', 'category_id', $category->id)->get(),
    ]);
});

Route::get('profile1', function() {
    return view('profile1', [
        'user' => Auth::user(),
        'sub_categories' => SubCategory::All(),
    ]);
})->middleware('auth');

Route::get('profile2/{user}', function (User $user) {
    return view('profile2', [
        'user' => $user,
    ]);
});

Route::post('login', function () {
    $attributes = request()->validate([
        'email' => 'required|email|max:255',
        'password' => 'required|max:255'
    ]);

    if (!auth()->attempt($attributes, request()->get('remember'))) {
        throw ValidationException::withMessages([
            'email' => 'Credentials are incorrect',
        ]);
    }

    session()->regenerate();
    return redirect('/categories');
});


Route::post('register', function () {
    $attributes = request()->validate([
        'name' => 'required|max:255',
        'email' =>'required|email|max:255',
        'password' => 'required|max:255',
        'sub_category_id' => 'required|numeric',
        'age' => 'required|numeric'
    ]);

    if( filter_var( $attributes['email'], FILTER_VALIDATE_EMAIL ) ) {
        $array = explode('@', $attributes['email']);
        $domain = array_pop($array);
    }

    if(strtolower($domain) != "poma.superate.org.sv"){
        return back()->with('NOPOMA', 'Only superate poma students can get registered');
    }

    $user = User::create($attributes);

    Auth::login($user);
    return redirect('/categories');
});

Route::post('profile', function () {
    $attributes = request()->validate([
        'phone' => 'required|numeric',
        'superate' => 'required|max:255',
        'timePracticing' => 'required|numeric',
        'about' => 'required|max:1000',
        'sub_category_id' =>'required|numeric'
    ]);

    $user = Auth::user();
    $user->phone = $attributes['phone'];
    $user->superate = $attributes['superate'];
    $user->timePracticing = $attributes['timePracticing'];
    $user->about = $attributes['about'];
    $user->sub_category_id = $attributes['sub_category_id'];

    $user->save();

    if (request()->hasFile('image')) {
        request()->file('image')->storeAs('profile pic', "$user->id.jpg", 'public');
    }

    if (request()->hasFile('talentIMG')) {
        $counter = 1;
        foreach (request()->file('talentIMG') as $image) {
            $image->storeAs('talent pic', "$user->id-$counter.jpg", 'public');
            $counter++;
            if ($counter >= 2) {
                break;
            }
        }
    }

    return redirect('categories');
});

Route::get('logout', function () {
    Auth::logout();
    return redirect('/');
});

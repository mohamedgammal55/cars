<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class AuthController extends Controller
{
    public function login(){
        if (Auth::guard('user')->check()){
            return redirect('profile');
        }
        else
            return view('site.login');
    }

    public function postLogin(request $request){
        $data = $request->validate([
            'email'   =>'required|exists:users',
            'password'=>'required'
        ],[
            'email.exists'      => 'البريد الالكتورني غير مسجل',
            'email.required'    => 'يجب ادخال البريد الالكتورني',
            'password.required' => 'يجب ادخال كلمة المرور'
        ]);
        $status = ($request->has('rememberMe')) ? 'true' : 'false';
        if (Auth::guard('user')->attempt($data,$status)){
            return response()->json([
                'status' => 200,
                'name'   => user()->user()->name
            ]);
        }
        return response()->json(405);
    }



    public function register(){
        return view('site.signup');
    }

    public function postRegister(request $request){
        $data = $request->validate([
            'name'    =>'required',
            'phone'   =>['required','unique:users,phone','regex:/^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/im'],
            'email'   =>'required|unique:users,email',
            'password'=>'required',
        ],[
            'email.unique'      => 'البريد الالكتورني مسجل من قبل',
            'email.required'    => 'يجب ادخال البريد الالكتورني',
            'phone.required'    => 'يجب ادخال الهاتف',
            'phone.regex'       => 'صيغة الهاتف غير صحيحة',
            'password.required' => 'يجب ادخال كلمة مرور',
            'name.required'     => 'يجب ادخال الاسم'
        ]);
        $user = User::create($data);
        if ($user){
            Auth::guard('user')->login($user);
            return response()->json([
                'status' => 200,
                'name'   => $data['name']
            ]);
        }
    }



    public function profile(){
            return view('site.profile');
    }

    public function logout(){
        user()->logout();
        toastr()->info('تم تسجيل الخروج');
        return redirect('login');
    }



    public function redirect($service){
        return Socialite::driver($service)->redirect();
    }

    public function callback($service){
        try {
            $user = Socialite::driver($service)->stateless()->user();
            $new_user = User::updateOrCreate([
                'email'    => $user->getEmail(),
            ],[
                'name'     => $user->getName(),
                'email'    => $user->getEmail(),
                'password' => Hash::make($user->getName().'@'.$user->getId())
            ]);
            Auth::guard('user')->login($new_user);
            if (Auth::guard('user')->check()){
                toastr()->success($user->getName().'مرحبا بك يا ');
                return redirect('profile');
            }
            toastr()->error('عذرا حدث خطأ ..');
            return redirect('login');
        } catch (\Throwable $th) {
            toastr()->error('عذرا حدث خطأ ..');
            return redirect('login');
        }
    }
}

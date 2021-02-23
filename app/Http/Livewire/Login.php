<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public $users, $email, $password, $name;

    public function render()
    {
        return view('livewire.login')
            ->layout('layouts.site');
    }

    public function login()
    {
        $validate = $this->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

//        dd($this->email, $this->password);

        if (Auth::attempt(['email' => $this->email, 'password' => $this->password])){
            session()->flash('message', 'login in');

            return redirect()->route('site.home');
        }else{
//            dd(2);
            session()->flash('error', 'wrong password of email address');
        }

//
    }

    public function register(){
        return redirect()->route('auth.register');
    }
}

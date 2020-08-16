<?php

namespace App\View\Components;

use Illuminate\Support\Facades\Auth;
use Illuminate\View\Component;

class LoginLink extends Component
{
    public $linkPath = '/login/okta';
    public $linkText = 'Log in with Okta';

    public function __construct()
    {
        if (Auth::check()) {
            $this->linkPath = '/home';
            $this->linkText = 'Your Home Page';
        }
    }

    // Template rendering
//    public function render()
//    {
//        return view('components.login-link');
//    }

    // Inline rendering
    public function render() {
        return <<<'blade'
          <a href="{{ url($linkPath) }}">{{ $linkText }}</a>
        blade;
    }

}

<?php

namespace App\View\Components;

use Illuminate\View\Component;

class LoginLink extends Component
{
    public $homeLinkText = 'Your home page';

    public $loginLinkText = 'Log in with Okta';

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.login-link');
    }
}

<?php

namespace App\Livewire\Layout;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class NavigationUser extends Component
{
    public function getIsLoggedInProperty()
    {
        return auth()->check();
    }

    public function getIsAdminProperty()
    {
        return $this->isLoggedIn && auth()->user()->roles == "admin";
    }
    public function logout()
    {
        Auth::logout();
        session()->invalidate();
        session()->regenerateToken();

        return redirect()->to('/');  // atau route yang Anda inginkan
    }
    public function render()
    {
        return view('livewire.layout.navigation-user');
    }
}

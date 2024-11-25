<?php

namespace App\Livewire\Layout;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class NavigationApp extends Component
{
    public function getIsLoggedInProperty()
    {
        return auth()->check();
    }

    public function getIsAdminProperty()
    {
        return auth()->check() && auth()->user()->roles == "admin";
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
        return view('livewire.layout.navigation-app');
    }
}

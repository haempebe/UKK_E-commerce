<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.pages')]
class Home extends Component
{
    public function getIsLoggedInProperty()
    {
        return auth()->check();
    }

    // Computed property untuk cek user id = 1
    public function getIsAdminProperty()
    {
        return auth()->check() && auth()->user()->id === 1;
    }
    public function render()
    {
        $user  = User::first();
        return view('pages.home', [
            'user' => $user,
        ]);
    }
}

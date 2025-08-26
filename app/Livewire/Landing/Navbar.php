<?php

namespace App\Livewire\Landing;

use Livewire\Component;

class Navbar extends Component
{
    public bool $open = false; // menú mobile

    public function toggle()
    {
        $this->open = ! $this->open;
    }

    public function close()
    {
        $this->open = false;
    }

    public function render()
    {
        return view('livewire.landing.navbar');
    }
}

<?php

namespace App\Livewire\Landing;

use Livewire\Component;

class PortfolioGrid extends Component
{
    public array $items = [];

    public function mount()
    {
        // Luego podés reemplazar por un Model (Project::latest()->take(6)->get())
        $this->items = [
            ['title'=>'Landing estudio creativo','img'=>'https://images.unsplash.com/photo-1521737604893-d14cc237f11d?q=80&w=1600&auto=format&fit=crop','url'=>'#'],
            ['title'=>'E‑commerce indumentaria','img'=>'https://images.unsplash.com/photo-1490111718993-d98654ce6cf7?q=80&w=1600&auto=format&fit=crop','url'=>'#'],
            ['title'=>'Restó & reservas','img'=>'https://images.unsplash.com/photo-1498654896293-37aacf113fd9?q=80&w=1600&auto=format&fit=crop','url'=>'#'],
            ['title'=>'Consultora tech','img'=>'https://images.unsplash.com/photo-1555066931-4365d14bab8c?q=80&w=1600&auto=format&fit=crop','url'=>'#'],
            ['title'=>'Fitness & coaching','img'=>'https://images.unsplash.com/photo-1457969414820-5fdd86fc0b02?q=80&w=1600&auto=format&fit=crop','url'=>'#'],
            ['title'=>'Arquitectura & renders','img'=>'https://images.unsplash.com/photo-1503387762-592deb58ef4e?q=80&w=1600&auto=format&fit=crop','url'=>'#'],
        ];
    }

    public function render()
    {
        return view('livewire.landing.portfolio-grid');
    }
}

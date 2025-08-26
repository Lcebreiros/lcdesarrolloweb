<?php

namespace App\Livewire\Landing;

use Livewire\Component;

class Services extends Component
{
    public array $cards = [];

    public function mount()
    {
        $this->cards = [
            ['title'=>'Sitios a medida','desc'=>'Landing y webs corporativas optimizadas con Tailwind + Laravel.','icon'=>'M3 6h18M3 12h18M3 18h18'],
            ['title'=>'Tiendas online','desc'=>'E‑commerce con pagos y facturación local.','icon'=>'M3 7h18M3 12h18M3 17h18'],
            ['title'=>'Hosting & dominio','desc'=>'Setup completo en tu hosting o nube (SSL, CDN, e‑mail).','icon'=>'M12 3v18m9-9H3'],
            ['title'=>'Asesorías gratis','desc'=>'Te guiamos para elegir lo que te conviene.','icon'=>'M13 16h-1v-4h-1m1-4h.01'],
        ];
    }

    public function render()
    {
        return view('livewire.landing.services');
    }
}

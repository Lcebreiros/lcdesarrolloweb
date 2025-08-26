<?php

namespace App\Livewire\Landing;

use Livewire\Attributes\On;
use Livewire\Component;

class Testimonials extends Component
{
    public array $items = [];
    public int $active = 0;

    public function mount()
    {
        $this->items = [
            ['name'=>'María G.','role'=>'Estudio de diseño','text'=>'Excelente experiencia. La web cargó rapidísimo y nos ayudó con SEO técnico.'],
            ['name'=>'Diego L.','role'=>'Tienda de ropa','text'=>'Integró pagos y facturación local. Escala perfecto en campañas.'],
            ['name'=>'Sol R.','role'=>'Nutrición & coaching','text'=>'Me acompañó en todo el proceso. El resultado es hermoso y vende.'],
        ];
    }

    public function next(){ $this->active = ($this->active + 1) % count($this->items); }
    public function prev(){ $this->active = ($this->active + count($this->items) - 1) % count($this->items); }

    #[On('tick')]
    public function tick(){ $this->next(); }

    public function render()
    {
        return view('livewire.landing.testimonials');
    }
}

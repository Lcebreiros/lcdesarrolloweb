<?php

namespace App\Livewire\Landing;

use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\Rule;
use Livewire\Attributes\Validate;
use Livewire\Component;

class ContactForm extends Component
{
    #[Validate('required|string|min:2|max:80')]
    public string $name = '';

    #[Validate('required|email:rfc,dns|max:120')]
    public string $email = '';

    #[Validate('nullable|string|max:120')]
    public string $budget = '';

    #[Validate('required|string|min:10|max:1000')]
    public string $message = '';

    public bool $sent = false;
    public string $hp_field = ''; // honeypot simple

    public function updated($property)
    {
        $this->validateOnly($property);
    }

    public function submit()
    {
        // Honeypot
        if ($this->hp_field !== '') return;

        $data = $this->validate();

        // ¡Ajustá el correo de destino!
        try {
            Mail::raw(
                "Nombre: {$data['name']}\nEmail: {$data['email']}\nPresupuesto: {$data['budget']}\n\nMensaje:\n{$data['message']}",
                function ($m) use ($data) {
                    $m->to('contacto@lcdesarrolloweb.com') // <-- CAMBIAR
                      ->subject('Nuevo contacto desde la web');
                }
            );
            $this->reset(['name','email','budget','message']);
            $this->sent = true;
        } catch (\Throwable $e) {
            $this->addError('email', 'No se pudo enviar el mensaje. Probá de nuevo en unos minutos.');
        }
    }

    public function render()
    {
        return view('livewire.landing.contact-form');
    }
}

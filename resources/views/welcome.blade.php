<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>LC desarrollo web — Sitios a medida & E‑commerce</title>
  @vite(['resources/css/app.css','resources/js/app.js'])
  @livewireStyles {{-- 👈 ESTO ES OBLIGATORIO --}}
  <link rel="preload" as="image" href="{{ asset('images/hero.webp') }}">

  <meta name="description" content="Desarrollo web a medida, tiendas online, hosting y asesorías gratuitas.">
</head>
<body class="antialiased bg-neutral-950 text-neutral-100 selection:bg-fuchsia-500 selection:text-white">
  <livewire:landing.navbar />
  <main>
    <livewire:landing.hero />
    <livewire:landing.services />
    <livewire:landing.portfolio-grid />
    <livewire:landing.testimonials />
    <livewire:landing.contact-form />
  </main>
  <x-landing.footer />
  
  @livewireScripts {{-- 👈 ESTO ES OBLIGATORIO --}}
</body>
</html>
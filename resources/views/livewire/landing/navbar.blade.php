<header id="site-header"
  class="sticky top-0 z-40 border-b border-white/10 backdrop-blur-lg transition-all bg-black/30">
  {{-- Scroll progress --}}
  <div class="pointer-events-none fixed left-0 top-0 z-50 h-0.5 w-full origin-left scale-x-0 bg-gradient-to-r from-violet-500 via-fuchsia-500 to-sky-500"
       id="scroll-progress"></div>

  <div class="mx-auto max-w-6xl px-4 py-4 sm:py-4 flex items-center justify-between">
    <div class="flex items-center gap-3">
      <div class="grid place-items-center h-9 w-9 rounded-xl bg-gradient-to-br from-violet-500 to-sky-500 shadow-lg shadow-violet-900/20">
        <span class="font-extrabold text-lg">LC</span>
      </div>
      <div>
        <p class="text-sm font-semibold text-white/90 leading-none">LC desarrollo web</p>
        <p class="text-xs text-white/50 hidden sm:block">Webs modernas, rápidas y a medida</p>
      </div>
    </div>

    {{-- Desktop nav --}}
    <nav class="hidden sm:flex items-center gap-6 text-sm">
      <a href="#servicios" class="hover:text-fuchsia-400 transition">Servicios</a>
      <a href="#portfolio" class="hover:text-fuchsia-400 transition">Portfolio</a>
      <a href="#contacto"  class="hover:text-fuchsia-400 transition">Contacto</a>
      <a href="#contacto" class="ml-2 rounded-full bg-gradient-to-r from-violet-600 via-fuchsia-600 to-sky-600 px-5 py-2 text-white shadow-lg shadow-fuchsia-900/30">
        Presupuesto
      </a>
    </nav>

    {{-- Mobile button --}}
    <button wire:click="toggle" class="sm:hidden">
      @if($open)
        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-width="1.5" d="M6 18L18 6M6 6l12 12"/></svg>
      @else
        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-width="1.5" d="M4 6h16M4 12h16M4 18h16"/></svg>
      @endif
    </button>
  </div>

  {{-- Mobile nav --}}
  <div class="sm:hidden border-t border-white/10 bg-black/80 backdrop-blur-xl @if(!$open) hidden @endif">
    <nav class="flex flex-col space-y-4 px-6 py-6 text-sm">
      <a href="#servicios" class="hover:text-fuchsia-400" wire:click="close">Servicios</a>
      <a href="#portfolio" class="hover:text-fuchsia-400" wire:click="close">Portfolio</a>
      <a href="#contacto"  class="hover:text-fuchsia-400" wire:click="close">Contacto</a>
      <a href="#contacto" class="rounded-full bg-gradient-to-r from-violet-600 via-fuchsia-600 to-sky-600 px-5 py-2 text-center" wire:click="close">
        Presupuesto
      </a>
    </nav>
  </div>
</header>

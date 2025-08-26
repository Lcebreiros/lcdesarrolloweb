<section class="relative overflow-hidden">
  {{-- Glows de fondo --}}
  <div class="absolute inset-0 -z-10 opacity-40">
    <div class="pointer-events-none absolute -top-40 left-1/2 h-[46rem] w-[46rem] -translate-x-1/2 rounded-full bg-fuchsia-500 blur-[140px]"></div>
    <div class="pointer-events-none absolute top-48 right-1/3 h-[32rem] w-[32rem] rounded-full bg-violet-700 blur-[140px]"></div>
    <div class="pointer-events-none absolute bottom-0 left-1/2 h-64 w-64 -translate-x-1/2 rounded-full bg-sky-500/30 blur-3xl"></div>
  </div>

  <div class="mx-auto max-w-6xl px-4 pb-20 pt-16">
    <div class="grid items-center gap-12 md:grid-cols-2">
      <div data-reveal class="opacity-0 translate-y-6 transition duration-700">
        <span class="inline-flex items-center gap-2 rounded-full border border-white/10 bg-white/5 px-3 py-1 text-xs">
          <span class="h-2 w-2 rounded-full bg-emerald-400"></span> Desarrollo web freelance
        </span>
        <h1 class="mt-5 text-4xl sm:text-5xl font-extrabold leading-tight">
          Impulso digital con <span class="bg-gradient-to-r from-violet-300 via-fuchsia-400 to-sky-400 bg-clip-text text-transparent">sitios de alto rendimiento</span>
        </h1>
        <p class="mt-4 max-w-xl text-white/70">Diseño a medida, velocidad, SEO técnico y conversión real. Todo en un solo lugar.</p>
        <div class="mt-6 flex flex-wrap items-center gap-3">
          <a href="#contacto" class="rounded-2xl bg-gradient-to-r from-violet-600 via-fuchsia-600 to-sky-600 px-6 py-3 text-sm font-semibold text-white shadow-lg shadow-fuchsia-900/30">
            Empezar ahora
          </a>
          <a href="#portfolio" class="rounded-2xl border border-white/20 bg-white/5 px-6 py-3 text-sm font-semibold text-white hover:bg-white/10">
            Ver trabajos
          </a>
        </div>
      </div>

      {{-- Marco tipo navegador + imagen (rellena sin cortes) --}}
      <div class="relative" data-reveal>
        <div class="absolute -inset-1 rounded-3xl bg-gradient-to-r from-fuchsia-500/30 via-violet-500/30 to-sky-500/30 blur-2xl"></div>
        <div class="relative overflow-hidden rounded-3xl border border-white/10 bg-white/5 shadow-2xl aspect-[16/10] flex flex-col">
          <div class="flex items-center gap-2 border-b border-white/10 bg-black/30 px-4 h-8 shrink-0">
            <span class="h-3 w-3 rounded-full bg-rose-500"></span>
            <span class="h-3 w-3 rounded-full bg-amber-400"></span>
            <span class="h-3 w-3 rounded-full bg-emerald-400"></span>
            <div class="ml-auto h-2 w-20 rounded bg-white/10"></div>
          </div>
          <div class="relative flex-1">
            <img src="{{ asset('images/hero.webp') }}" alt="Maqueta sitio web"
                 fetchpriority="high"
                 class="absolute inset-0 h-full w-full object-cover" />
            <div class="pointer-events-none absolute inset-0">
              <div class="absolute -right-8 -top-8 h-40 w-40 rounded-full bg-fuchsia-500/20 blur-2xl animate-pulse"></div>
              <div class="absolute -left-10 bottom-0 h-32 w-32 rounded-full bg-violet-500/20 blur-2xl animate-pulse [animation-duration:3s]"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  {{-- pequeño keyframe opcional --}}
  <style>@keyframes floatY{0%,100%{transform:translateY(0)}50%{transform:translateY(-8px)}}</style>
</section>

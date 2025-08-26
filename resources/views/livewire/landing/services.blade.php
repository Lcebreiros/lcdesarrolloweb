<section id="servicios" class="py-20 sm:py-24">
  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
    <div class="mb-10 sm:mb-14 text-center">
      <h2 class="text-3xl sm:text-4xl font-bold">Servicios</h2>
      <p class="mt-3 text-neutral-300">Todo lo que necesitás para lanzar y escalar tu presencia online.</p>
    </div>

    <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-4">
      @foreach ($cards as $c)
        <div class="rounded-2xl border border-white/10 bg-white/5 p-6 hover:bg-white/10 transition shadow-sm">
          <div class="inline-flex h-10 w-10 items-center justify-center rounded-xl bg-gradient-to-br from-violet-500 to-fuchsia-500 mb-4">
            <svg viewBox="0 0 24 24" stroke="white" fill="none" class="h-5 w-5">
              <path d="{{ $c['icon'] }}" stroke-width="1.5" stroke-linecap="round"/>
            </svg>
          </div>
          <h3 class="font-semibold">{{ $c['title'] }}</h3>
          <p class="mt-2 text-sm text-neutral-300">{{ $c['desc'] }}</p>
        </div>
      @endforeach
    </div>
  </div>
</section>

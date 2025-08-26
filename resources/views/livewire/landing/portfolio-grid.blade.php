<section id="portfolio" class="py-20 sm:py-24 border-y border-white/5 bg-neutral-950/60">
  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
    <div class="mb-10 sm:mb-14 flex items-end justify-between gap-4">
      <div>
        <h2 class="text-3xl sm:text-4xl font-bold">Portfolio</h2>
        <p class="mt-3 text-neutral-300">Algunas maquetas/demo para mostrar estilo y performance.</p>
      </div>
      <a href="#contacto" class="hidden sm:inline-flex rounded-xl px-4 py-2 bg-white/10 hover:bg-white/15">¿Querés ver más?</a>
    </div>

    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-5">
      @foreach ($items as $i)
        <a href="{{ $i['url'] }}" class="group relative overflow-hidden rounded-2xl border border-white/10 bg-white/5">
          <img src="{{ $i['img'] }}" alt="{{ $i['title'] }}" class="h-56 w-full object-cover transition duration-500 group-hover:scale-105" loading="lazy">
          <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/10 to-transparent"></div>
          <div class="absolute bottom-0 p-4">
            <h3 class="font-semibold">{{ $i['title'] }}</h3>
            <p class="text-xs text-neutral-300">Ver detalle →</p>
          </div>
        </a>
      @endforeach
    </div>
  </div>
</section>

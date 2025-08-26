<section id="opiniones" class="py-20 sm:py-24">
  <div class="mx-auto max-w-2xl px-4 sm:px-6 lg:px-8 text-center">
    <h2 class="text-3xl sm:text-4xl font-bold">Opiniones</h2>
    <p class="mt-3 text-neutral-300">Lo que dicen quienes ya lanzaron su web.</p>

    <div 
      x-data="{i: @entangle('active')}"
      x-init="setInterval(()=>{$wire.dispatch('tick')}, 5000)"
      class="mt-10 relative"
    >
      @foreach ($items as $index => $c)
        <div x-show="i === {{ $index }}" x-transition
             class="rounded-2xl border border-white/10 bg-white/5 p-6">
          <div class="flex items-center gap-3 justify-center">
            <img class="h-10 w-10 rounded-full" src="https://i.pravatar.cc/80?u={{ $c['name'] }}" alt="{{ $c['name'] }}">
            <div>
              <p class="font-semibold">{{ $c['name'] }}</p>
              <p class="text-xs text-neutral-400">{{ $c['role'] }}</p>
            </div>
          </div>
          <p class="mt-4 text-sm text-neutral-200">“{{ $c['text'] }}”</p>
        </div>
      @endforeach

      <div class="mt-6 flex justify-center gap-2">
        <button wire:click="prev" class="px-3 py-1 rounded-lg bg-white/10 hover:bg-white/15">‹</button>
        <button wire:click="next" class="px-3 py-1 rounded-lg bg-white/10 hover:bg-white/15">›</button>
      </div>
    </div>
  </div>
</section>

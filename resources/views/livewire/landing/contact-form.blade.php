<section id="contacto" class="py-20 sm:py-24">
  <div class="mx-auto max-w-4xl px-4 sm:px-6 lg:px-8">
    <div class="rounded-3xl border border-white/10 bg-gradient-to-br from-neutral-900 to-neutral-950 p-8 sm:p-10 text-center shadow-2xl">
      <h2 class="text-2xl sm:text-3xl font-bold">¿Listo para despegar?</h2>
      <p class="mt-3 text-neutral-300">Contame de tu proyecto y te respondo a la brevedad.</p>

      @if ($sent)
        <div class="mt-6 rounded-xl border border-emerald-500/30 bg-emerald-500/10 px-4 py-3 text-sm text-emerald-300">
          ¡Gracias! Tu mensaje fue enviado correctamente.
        </div>
      @endif

      <form wire:submit="submit" class="mt-8 grid grid-cols-1 sm:grid-cols-2 gap-4 text-left">
        {{-- Honeypot --}}
        <input type="text" wire:model="hp_field" class="hidden" tabindex="-1" autocomplete="off" />

        <div>
          <label class="text-sm text-neutral-300">Nombre</label>
          <input type="text" wire:model.live="name" class="mt-1 w-full rounded-xl bg-white/5 border border-white/10 px-3 py-2 focus:outline-none focus:ring-2 focus:ring-fuchsia-500">
          @error('name') <p class="mt-1 text-xs text-red-400">{{ $message }}</p> @enderror
        </div>

        <div>
          <label class="text-sm text-neutral-300">Email</label>
          <input type="email" wire:model.live="email" class="mt-1 w-full rounded-xl bg-white/5 border border-white/10 px-3 py-2 focus:outline-none focus:ring-2 focus:ring-fuchsia-500">
          @error('email') <p class="mt-1 text-xs text-red-400">{{ $message }}</p> @enderror
        </div>

        <div class="sm:col-span-2">
          <label class="text-sm text-neutral-300">Presupuesto (opcional)</label>
          <input type="text" wire:model.live="budget" placeholder="Ej: ARS 300.000 – 600.000" class="mt-1 w-full rounded-xl bg-white/5 border border-white/10 px-3 py-2 focus:outline-none focus:ring-2 focus:ring-fuchsia-500">
          @error('budget') <p class="mt-1 text-xs text-red-400">{{ $message }}</p> @enderror
        </div>

        <div class="sm:col-span-2">
          <label class="text-sm text-neutral-300">Mensaje</label>
          <textarea wire:model.live="message" rows="5" class="mt-1 w-full rounded-xl bg-white/5 border border-white/10 px-3 py-2 focus:outline-none focus:ring-2 focus:ring-fuchsia-500"></textarea>
          @error('message') <p class="mt-1 text-xs text-red-400">{{ $message }}</p> @enderror
        </div>

        <div class="sm:col-span-2">
          <button type="submit" wire:loading.attr="disabled"
                  class="w-full sm:w-auto inline-flex items-center justify-center gap-2 rounded-xl px-5 py-3 bg-gradient-to-r from-violet-500 to-fuchsia-500 hover:opacity-90">
            <span wire:loading.remove>Enviar mensaje</span>
            <span wire:loading>Enviando…</span>
          </button>
        </div>
      </form>

      <p class="mt-4 text-xs text-neutral-400">O si preferís: <a class="underline hover:text-fuchsia-300" href="mailto:contacto@lcdesarrolloweb.com">contacto@lcdesarrolloweb.com</a></p>
    </div>
  </div>
</section>

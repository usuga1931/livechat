<div>

    <div class="form-group">
        <label for="nombre">Nombre</label>
        <input type="text" class="form-control" id="nombre" wire:model="nombre">
        @error('nombre') <small class="text-danger">{{ $message }}</small> @enderror
    </div>


    <div class="form-group">
        <label for="mensaje">Mensaje</label>
        <input type="text" class="form-control" id="mensaje" wire:model="mensaje">
        @error('mensaje') <small class="text-danger">{{ $message }}</small> @enderror
    </div>

    <button class="btn btn-primary" wire:click="enviarMensaje">Enviar Mensaje</button>

    <div class="alert alert-success collapse mt-3" style="position: absolute" role="alert" id="avisoSuccess">Se ha enviado</div>

    <script>
        window.livewire.on('mensajeEnviado', function() {
            $('#avisoSuccess').fadeIn('slow');

            setTimeout(function() {
                $('#avisoSuccess').fadeOut('slow');
            }, 3000);
        });
    </script>

</div>

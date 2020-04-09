<div>
    <h5 class="mt-3">Lista de mensajes</h5>

    @foreach($mensajes as $mensaje)
    <li>{{ $mensaje['usuario'] }} - {{ $mensaje['mensaje'] }}</li>
    @endforeach

    <script>
        // Enable pusher logging - don't include this in production
        Pusher.logToConsole = true;

        var pusher = new Pusher('f8faa778938e047cbe13', {
            cluster: 'us2',
            forceTLS: true
        });

        var channel = pusher.subscribe('chat-channel');
        channel.bind('chat-event', function(data) {

            var dato = Object.values(data);

            var datos = {
                'usuario': dato[0],
                'mensaje': dato[1],
            };

            window.livewire.emit('mensajeRecibido', datos);
        });
    </script>
</div>

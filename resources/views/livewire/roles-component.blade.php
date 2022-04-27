<div>
    {{-- Nothing in the world is as soft and yielding as water. --}}
    @if(leerJson(Auth::user()->permisos, 'usuarios.roles') || Auth::user()->role == 1 || Auth::user()->role == 100)
        @include('dashboard.usuarios.roles')
    @endif
</div>

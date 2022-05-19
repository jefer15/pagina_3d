<div>
    {{-- @dump([$this->modal]) --}}
    <h1>Actualizar o guardar</h1>
    <input name="name" id="name" placeholder="nombre del banner" type="text" wire:model.defer='name'>
    <input name="description" id="description" placeholder="descripcion" type="textarea" wire:model.defer='description'>
    <input name="image" id="image" placeholder="imagen" type="file" wire:model='image'>
    <x-jet-dialog-modal wire:model="modal">
        <x-slot name="title">adadad</x-slot>
        <x-slot name="content">adada</x-slot>
        <x-slot name="footer">dadadada</x-slot>
    </x-jet-dialog-modal>
    <button type="button" wire:click='store'>Guardar</button>
    <h1>Listar</h1>
    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>nombre</th>
                <th>descripcion</th>
                <th>imagen</th>
                <th>acciones</th>
            </tr>
        </thead>
        <th>
            @foreach ($banners as $banner)
                <tr>
                    <td>{{ $banner->id }}</td>
                    <td>{{ $banner->name }}</td>
                    <td>{{ $banner->description }}</td>
                    <td>
                        <img src="storage/{{ $banner->image }}" alt="" width="50" height="50">
                    </td>
                    <td>
                        <div wire:click="delete({{ $banner->id }})">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                            </svg>
                        </div>
                        <div wire:click="edit({{ $banner->id }})">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                            </svg>
                        </div>
                    </td>
                </tr>
            @endforeach
        </th>
    </table>
</div>

<div>
    {{-- @dump([$banners,$organizations]) --}}
    
        <form >
            <input name="name" id="name" placeholder="nombre del banner" type="text" wire:model.defer='name'>
            <input name="description" id="description" placeholder="descripcion" type="textarea" wire:model.defer='description'>
            <input name="image" id="image" placeholder="imagen" type="file" wire:model='image'>
            <button type="button" wire:click='store'>Enviar</button>
        </form>

        <form >
            <input name="id" id="id" placeholder="id del banner" type="text" wire:model.defer='banner_id'>
            <button type="button" wire:click='delete'>Enviar</button>
        </form>
</div>
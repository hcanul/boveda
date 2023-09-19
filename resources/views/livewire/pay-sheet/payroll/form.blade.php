@include('common.modal.headModal')
<form class="space-y-6">
    <div class="grid grid-cols-1 gap-6 p-6 sm:grid-cols-2">
        <div>
            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nombres</label>
            <input type="text" wire:model='name' id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Nombres">
            @error('name')
                <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</span></p>
            @enderror
        </div>
        <div>
            <label for="lastname" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Apellidos</label>
            <input type="text" wire:model='lastname' id="lastname" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Apellidos">
            @error('lastname')
                <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</span></p>
            @enderror
        </div>
        <div>
            <label for="birthdate" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Fecha de Nacimiento</label>
            <input type="date" wire:model='birthdate' id="birthdate" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Fecha de Nacimiento">
            @error('birthdate')
                <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</span></p>
            @enderror
        </div>
        <div>
            <label for="gender" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Genero</label>
            <select id="gender" id="gender" wire:model='gender' class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option value="Elegir" selected>Elige una Opción</option>
                <option value="Masculino">Masculino</option>
                <option value="Femenino">Femenino</option>
                <option value="Otro">Otro</option>
            </select>
            @error('gender')
                <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</span></p>
            @enderror
        </div>
        <div>
            <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Núm. Telefono</label>
            <input type="tel" wire:model='phone' id="phone" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Núm. Telefono">
            @error('phone')
                <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</span></p>
            @enderror
        </div>
        <div>
            <label for="bio_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Núm. Identificador Bio</label>
            <input type="number" wire:model='bio_id' id="bio_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Núm. Identificador Bio">
            @error('bio_id')
                <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</span></p>
            @enderror
        </div>
        <div>
            <label for="numIne" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Núm. Identificación INE</label>
            <input type="number" wire:model='numIne' id="numIne" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Núm. Identificador Bio">
            @error('numIne')
                <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</span></p>
            @enderror
        </div>
        <div>
            <label for="direccion" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Direccion</label>
            <input type="text" wire:model='direccion' id="direccion" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Direccion">
            @error('direccion')
                <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</span></p>
            @enderror
        </div>
        <div>
            <label for="city_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Sucursales</label>
            <select id="city_id" id="city_id" wire:model='city_id' class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option value="Elegir" selected>Elige una Opción</option>
                @foreach ($sucursales as $item)
                    <option value="{{$item->id}}">{{$item->name}}</option>
                @endforeach
            </select>
            @error('city_id')
                <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</span></p>
            @enderror
        </div>
        <div>
            <label for="rfc" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">R. F. C.</label>
            <input type="text" wire:model='rfc' id="rfc" oninput="validarInput(this)" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="XXXX-123456-2U8">
            <pre id="resultado"></pre>
            @error('rfc')
                <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</span></p>
            @enderror
        </div>
        <div>
            <label for="imss" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Núm. Seg. Soc</label>
            <input type="text" wire:model='imss' id="imss" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Núm. Seg. Soc">
            @error('imss')
                <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</span></p>
            @enderror
        </div>
        <div>
            <label for="fechaIni" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Fecha de Ingreso</label>
            <input type="date" wire:model='fechaIni' id="fechaIni" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Fecha de Ingreso">
            @error('fechaIni')
                <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</span></p>
            @enderror
        </div>
        <div>
            <label for="departamento" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Departamento</label>
            <select id="departamento" id="departamento" wire:model='departamento' class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option value="Elegir" selected>Elige una Opción</option>
                <option value="ADMINISTRATIVO">ADMINISTRATIVO</option>
                <option value="COMERCIAL">COMERCIAL</option>
                <option value="INFORMATICA">INFORMATICA</option>
            </select>
            @error('departamento')
                <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</span></p>
            @enderror
        </div>
        <div>
            <label for="cargo" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Puesto</label>
            <select id="cargo" id="cargo" wire:model='cargo' class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option value="Elegir" selected>Elige una Opción</option>
                <option value="COORDINADOR">COORDINADOR</option>
                <option value="ADMINISTRADOR">ADMINISTRADOR</option>
                <option value="REGIONAL">REGIONAL</option>
                <option value="GERENTE">GERENTE</option>
                <option value="PROMOTOR">PROMOTOR</option>
                <option value="HUMANOS">HUMANOS</option>
            </select>
            @error('cargo')
                <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</span></p>
            @enderror
        </div>
        <div>
            <label for="activo" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Estado</label>
            <select id="activo" id="activo" wire:model='activo' class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option value="Elegir" selected>Elige una Opción</option>
                <option value="ACTIVO">Activo</option>
                <option value="BLOQUEADO">Bloqueado</option>
            </select>
            @error('activo')
                <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</span></p>
            @enderror
        </div>
    <div>
</form>
@include('common.modal.footerModal')

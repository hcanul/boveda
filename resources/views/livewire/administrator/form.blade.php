@include('common.modal.headModal')
<div>
    <form class="space-y-6">
        <div class="grid grid-cols-1 gap-6 p-6 sm:grid-cols-2">
            <div>
                <label for="city_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Seleccione una sucursal</label>
                <select id="city_id" wire:model='city_id' class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="Elegir" selected>Elige una opción</option>
                    @foreach ($sucursales as $sucursal)
                        <option value="{{$sucursal->id}}">{{$sucursal->name}}</option>
                    @endforeach
                </select>
                @error('city_id')
                    <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</span></p>
                @enderror
            </div>
            <div>
                <label for="employes_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Selecciona un Administrador</label>
                <select id="employes_id" wire:model='employes_id' class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="Elegir" selected>Elige una opción</option>
                    @foreach ($asesores2 as $asesor)
                        <option value="{{$asesor->id}}">{{$asesor->name}}</option>
                    @endforeach
                </select>
                @error('employes_id')
                    <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</span></p>
                @enderror
            </div>
            <div>
                <label for="asesores" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Cuantos Asesores?</label>
                <input type="number" wire:model='asesores' wire:keydown.enter="calcatego" id="asesores" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="0">
                @error('asesores')
                    <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</span></p>
                @enderror
            </div>
            <div>
                <label for="typesucursal" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tipo Sucursal</label>
                <input type="text" wire:model='typesucursal' id="typesucursal" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="0" disabled>
                @error('typesucursal')
                    <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</span></p>
                @enderror
            </div>
            <div>
                <label for="carterainicio" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Cartera inicial</label>
                <input type="number" wire:model='carterainicio' wire:keydown.enter="caltype" id="carterainicio" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="0">
                @error('carterainicio')
                    <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</span></p>
                @enderror
            </div>
            <div>
                <label for="category_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tipo Sucursal</label>
                <input type="text" wire:model='category_id' id="category_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" disabled>
                @error('category_id')
                    <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</span></p>
                @enderror
            </div>

            <div>
                <label for="clientesi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Clientes Inicial</label>
                <input type="number" wire:model='clientesi' id="clientesi" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="0">
                @error('clientesi')
                    <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</span></p>
                @enderror
            </div>
            <div>
                <label for="clientesf" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Clientes Final</label>
                <input type="number" wire:model='clientesf' wire:keydown.enter='diferencia' id="clientesf" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="0">
                @error('clientesf')
                    <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</span></p>
                @enderror
            </div>

            <div>
                <label for="diferenciaclientes" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Diferencia Clientes</label>
                <input type="number" wire:model='diferenciaclientes' id="diferenciaclientes" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" disabled>
                @error('diferenciaclientes')
                    <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</span></p>
                @enderror
            </div>
            <div>
                <label for="colocadoreal" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Colocado real</label>
                <input type="number" wire:model='colocadoreal' id="colocadoreal" wire:keydown.enter='coloca' class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="0">
                @error('colocadoreal')
                    <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</span></p>
                @enderror
            </div>
            <div>
                <label for="bonoclientes" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Bono Clientes</label>
                <input type="number" wire:model='bonoclientes' id="bonoclientes" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" disabled>
                @error('bonoclientes')
                    <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</span></p>
                @enderror
            </div>
            <div>
                <label for="bonoccolocacion" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Bono Colocación</label>
                <input type="number" wire:model='bonoccolocacion' id="bonoccolocacion" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" disabled>
                @error('bonoccolocacion')
                    <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</span></p>
                @enderror
            </div>
            <div>
                <label for="bonofina" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Bono Final</label>
                <input type="number" wire:model='bonofina' id="bonofina" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" disabled>
                @error('bonofina')
                    <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</span></p>
                @enderror
            </div>
        <div>
    </form>
</div>
@include('common.modal.footerModal')

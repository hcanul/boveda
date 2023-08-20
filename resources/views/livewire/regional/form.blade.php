@include('common.modal.headModal')
<div>
    <form class="space-y-6">
        <div class="grid grid-cols-1 gap-6 p-6 sm:grid-cols-3">
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
                <label for="employes_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Selecciona un Regional</label>
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
                <input type="text" wire:model='typesucursal' id="typesucursal" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" disabled>
                @error('typesucursal')
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
                <label for="carterainicio" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Cartera Inicio</label>
                <input type="text" wire:model='carterainicio' id="carterainicio" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="0">
                @error('carterainicio')
                    <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</span></p>
                @enderror
            </div>
            <div>
                <label for="srinicio" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">SR Inicio</label>
                <input type="number" wire:model='srinicio' id="srinicio" wire:keydown.enter='psr' class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="0">
                @error('srinicio')
                    <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</span></p>
                @enderror
            </div>
            <div>
                <label for="porsrinicio (Se Calcula)" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">% SR Inicio</label>
                <input type="text" wire:model='porsrinicio' id="porsrinicio" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" disabled>
                @error('porsrinicio')
                    <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</span></p>
                @enderror
            </div>

            <div>
                <label for="clientesf" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Clientes Final</label>
                <input type="number" wire:model='clientesf' id="clientesf" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="0">
                @error('clientesf')
                    <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</span></p>
                @enderror
            </div>
            <div>
                <label for="carterafinal" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Cartera Final</label>
                <input type="number" wire:model='carterafinal' id="carterafinal" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="0">
                @error('carterafinal')
                    <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</span></p>
                @enderror
            </div>
            <div>
                <label for="srfinal" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">SR Final</label>
                <input type="number" wire:model='srfinal' id="srfinal" wire:keydown.enter='srfinalcalculo' class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="0">
                @error('srfinal')
                    <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</span></p>
                @enderror
            </div>

            <div>
                <label for="porsrfinal" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">% SR Final</label>
                <input type="text" wire:model='porsrfinal' id="porsrfinal" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" disabled>
                @error('porsrfinal')
                    <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</span></p>
                @enderror
            </div>
            <div>
                <label for="category_adviser_id (Se Calcula)" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Categoria Asesor</label>
                <input type="text" wire:model='category_adviser_id' id="category_adviser_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" disabled>
                @error('category_adviser_id')
                    <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</span></p>
                @enderror
            </div>
            <div>
                <label for="metacoloca" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Meta Colocación</label>
                <input type="number" wire:model='metacoloca' id="metacoloca" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                @error('metacoloca')
                    <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</span></p>
                @enderror
            </div>
            <div>
                <label for="colocadoreal" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Colocado Real</label>
                <input type="number" wire:model='colocadoreal' id="colocadoreal" wire:keydown.enter='calculometa' class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                @error('colocadoreal')
                    <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</span></p>
                @enderror
            </div>
            <div>
                <label for="poralcancemetacoloca" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">% De Alcance De Meta De Colocación</label>
                <input type="text" wire:model='poralcancemetacoloca' id="poralcancemetacoloca" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" disabled>
                @error('poralcancemetacoloca')
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
                <label for="diferenciacartera" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Diferencia Cartera</label>
                <input type="number" wire:model='diferenciacartera' id="diferenciacartera" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" disabled>
                @error('diferenciacartera')
                    <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</span></p>
                @enderror
            </div>

            <div>
                <label for="bonoclientes" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Bono Clientes</label>
                <input type="number" wire:model='bonoclientes' id="bonoclientes" class="bg-green-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" disabled>
                @error('bonoclientes')
                    <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</span></p>
                @enderror
            </div>
            <div>
                <label for="bonoccolocacion" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Bono Colocación</label>
                <input type="number" wire:model='bonoccolocacion' id="bonoccolocacion" class="bg-green-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" disabled>
                @error('bonoccolocacion')
                    <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</span></p>
                @enderror
            </div>
            <div>
                <label for="bonoexcelencia" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Bono Excelencia</label>
                <input type="number" wire:model='bonoexcelencia' id="bonoexcelencia" class="bg-green-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" disabled>
                @error('bonoexcelencia')
                    <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</span></p>
                @enderror
            </div>
            <div>
                <label for="base" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Base</label>
                <input type="number" wire:model='base' id="base" class="bg-orange-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" disabled>
                @error('base')
                    <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</span></p>
                @enderror
            </div>
            <div>
                <label for="rmetac" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Reductor Meta Colocación</label>
                <input type="number" wire:model='rmetac' id="rmetac" class="bg-red-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" disabled>
                @error('rmetac')
                    <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</span></p>
                @enderror
            </div>
            <div>
                <label for="redsr" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Reductor Por SR</label>
                <input type="number" wire:model='redsr' id="redsr" class="bg-red-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" disabled>
                @error('redsr')
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

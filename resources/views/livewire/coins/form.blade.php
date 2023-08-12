@include('common.headerModal')
<form class="space-y-6">
    <div class="p-6 space-y-6">
        <label for="dinero" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Selecciona el tipo de Denominación</label>
        <select id="dinero" wire:model.lazy='type' class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            <option value="Elegir">Elije una opcion</option>
            <option value="Billete">Billete</option>
            <option value="Moneda">Moneda</option>
        </select>
        @error('type')
            <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</span></p>
        @enderror
    </div>
    <div class="p-6 space-y-6">
        <label for="valor-denomination" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ingresa el valor</label>
        <div class="relative">
            <div class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="1" x2="12" y2="23"></line><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg>
            </div>
            <input type="number" wire:model.lazy='value' id="valor-denomination" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" >
        </div>
        @error('value')
            <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</span></p>
        @enderror
    </div>
</form>
@include('common.footerModal')

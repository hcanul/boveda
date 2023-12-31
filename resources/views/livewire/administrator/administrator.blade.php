<div>
    <div class="flex items-center justify-between pb-4 bg-white ma-3 dark:bg-gray-900">
        <div class="justify-self-auto">
            @include('common.search')
        </div>
        <div class="justify-self-auto">
            <button data-modal-target="defaultModal" data-modal-toggle="defaultModal" class="relative inline-flex items-center justify-center p-0.5 mb-2 mr-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-purple-600 to-blue-500 group-hover:from-purple-600 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800" type="button">
                <span class="block relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                    Crear nuevo
                </span>
            </button>
        </div>
    </div>
    @if (session()->has('message'))
        <div  class="flex items-center p-4 mb-4 text-sm text-green-800 border border-green-300 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400 dark:border-green-800" role="alert">
            <svg class="flex-shrink-0 inline w-4 h-4 mr-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
            </svg>
            <span class="sr-only">Info</span>
            <div>
            <span class="font-medium">{{ session('message') }}</span>
            </div>
        </div>
    @endif
    @if (session()->has('delete'))
        <div class="flex items-center p-4 mb-4 text-sm text-red-800 border border-red-300 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400 dark:border-red-800" role="alert">
            <svg class="flex-shrink-0 inline w-4 h-4 mr-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
            </svg>
            <span class="sr-only">Info</span>
            <div>
            <span class="font-medium">{{ session('delete') }}</span>
            </div>
        </div>
    @endif
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        ID
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Sucursal
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Nombre Administrador
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Cant. Asesores
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Tipo Sucursal
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Categoria
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Cant. Clie. Ini
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Cartera Inicial
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Cant. Clie. Fin
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Cant. Coloc. Real
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Dif. Cli
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Bono Clientes
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Bono Colocación
                    </th>
                    <th scope="row" class="px-6 py-3">
                        Bono Final
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <td class="px-6 py-4">
                        {{$item->id}}
                    </td>
                    <td class="px-6 py-4">
                        {{$item->city->name}}
                    </td>
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{$item->employes->name}}
                    </th>
                    <td class="px-6 py-4">
                        {{$item->asesores}}
                    </td>
                    <td class="px-6 py-4">
                        {{$item->typesucursal}}
                    </td>
                    <td class="px-6 py-4">
                        {{$item->category->name}}
                    </td>
                    <td class="px-6 py-4">
                        {{$item->clientesi}}
                    </td>
                    <td class="px-6 py-4">
                        {{'$ ' . number_format($item->carterainicio)}}
                    </td>
                    <td class="px-6 py-4">
                        {{$item->clientesf}}
                    </td>
                    <td class="px-6 py-4">
                        {{'$ ' . number_format($item->colocadoreal)}}
                    </td>
                    <td class="px-6 py-4">
                        {{$item->diferenciaclientes}}
                    </td>
                    <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{'$ ' . number_format($item->bonoclientes, 2)}}
                    </td>
                    <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{'$ ' . number_format($item->bonoccolocacion, 2)}}
                    </td>
                    <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{'$ ' . number_format($item->bonofina, 2)}}
                    </td>
                    <td class="px-6 py-4">
                        <a href="javascript:void(0)" wire:click='Editar({{$item->id}})' data-modal-target="defaultModal" data-modal-toggle="defaultModal" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="16 3 21 8 8 21 3 21 3 16 16 3"></polygon></svg>
                        </a>
                        <a href="javascript:void(0)" onclick='Confirm({{$item->id}})' class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#5406a4" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    {{ $data->links()}}
    @include('livewire.administrator.form')
</div>
<script>
    function Confirm(id)
    {
        swal({
            title: 'CONFIRMAR',
            text: '¿CONFIRMAS ELIMINAR EL REGISTRO?',
            type: 'warning',
            showCancelButton: true,
            cancelBtuttonText: 'Cerrar',
            cancelButtonColor: '#fff',
            confirmButtonText: 'Aceptar',
            confirmButtonColor: '#3B3f5C',
            footer: '<strong>CreceImpulso</strong>'
        }).then( function (result){
            if (result.value){
                window.livewire.emit('deleteRow', id)
                swal.close()
            }
        })
    }

    document.addEventListener('DOMContentLoaded', function() {
        const defaultModal = document.getElementById('defaultModal');
        const erElements = document.querySelectorAll('.er');

        function hideModal() {
            defaultModal.style.display = 'none';
        }

        function showModal() {
            defaultModal.style.display = 'block';
        }

        function onItemAdded(msg) {
            hideModal();
        }

        function onItemUpdated(msg) {
            hideModal();
        }

        function onItemDeleted(msg) {
            // noty(msg); // Supongo que noty es una función definida en otro lugar de tu código
        }

        function onTypeSucursal( categor){
            document.getElementById('typesucursal').value = categor;
        }

        function onCategoSucursal(typesu){
            document.getElementById('category_id').value = typesu;
        }

        function onDiferenciaClientes(cant){
            document.getElementById('diferenciaclientes').value = cant[0];
            document.getElementById('bonoclientes').value = cant[1];
        }

        function onColocadoReal(coloca){
            document.getElementById('bonoccolocacion').value = coloca[0];
            document.getElementById('bonofina').value = coloca[1];
        }

        window.livewire.on('item-added', onItemAdded);
        window.livewire.on('item-updated', onItemUpdated);
        window.livewire.on('item-deleted', onItemDeleted);
        window.livewire.on('hide-modal', hideModal);
        window.livewire.on('show-modal', showModal);

        window.livewire.on('catego', onTypeSucursal);
        window.livewire.on('typesuc', onCategoSucursal);
        window.livewire.on('dife', onDiferenciaClientes);
        window.livewire.on('colocado', onColocadoReal);

    });

</script>

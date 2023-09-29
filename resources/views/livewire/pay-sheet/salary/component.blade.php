<div>
    <div class="pb-4 font-medium text-gray-900 whitespace-nowrap dark:text-white justify-self-auto">
        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">{{$componentName}} | {{$pageTitle}}</h3>
    </div>
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
    <div class="mb-4 border-b border-gray-200 dark:border-gray-700">
        <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="myTab" data-tabs-toggle="#myTabContent" role="tablist">
            <li class="mr-2" role="presentation">
                <button class="inline-flex items-center justify-center p-4 border-b-2 border-transparent rounded-t-lg hover:text-red-600 hover:border-gray-300 dark:hover:text-gray-300 group" id="carrillo-tab" data-tabs-target="#carrillo" type="button" role="tab" aria-controls="carrillo" aria-selected="false">
                    @include('layouts.themes.icons.carrillo')
                    CARRILLO
                </button>
            </li>
            <li class="mr-2" role="presentation">
                <button class="inline-flex items-center justify-center p-4 border-b-2 border-transparent rounded-t-lg hover:text-red-600 hover:border-gray-300 dark:hover:text-gray-300 group" id="morelos-tab" data-tabs-target="#morelos" type="button" role="tab" aria-controls="morelos" aria-selected="false">
                    @include('layouts.themes.icons.morelos')
                    MORELOS
                </button>
            </li>
            <li class="mr-2" role="presentation">
                <button class="inline-flex items-center justify-center p-4 border-b-2 border-transparent rounded-t-lg hover:text-red-600 hover:border-gray-300 dark:hover:text-gray-300 group" id="tulum-tab" data-tabs-target="#tulum" type="button" role="tab" aria-controls="tulum" aria-selected="false">
                    @include('layouts.themes.icons.tulum')
                    TULUM
                </button>
            </li>
            <li role="presentation">
                <button class="inline-flex items-center justify-center p-4 border-b-2 border-transparent rounded-t-lg hover:text-red-600 hover:border-gray-300 dark:hover:text-gray-300 group" id="playa-tab" data-tabs-target="#playa" type="button" role="tab" aria-controls="playa" aria-selected="false">
                    @include('layouts.themes.icons.playa')
                    PLAYA
                </button>
            </li>
            <li role="presentation">
                <button class="inline-flex items-center justify-center p-4 border-b-2 border-transparent rounded-t-lg hover:text-red-600 hover:border-gray-300 dark:hover:text-gray-300 group" id="playa2-tab" data-tabs-target="#playa2" type="button" role="tab" aria-controls="playa2" aria-selected="false">
                    @include('layouts.themes.icons.playa')
                    PLAYA 2
                </button>
            </li>
            <li role="presentation">
                <button class="inline-flex items-center justify-center p-4 border-b-2 border-transparent rounded-t-lg hover:text-red-600 hover:border-gray-300 dark:hover:text-gray-300 group" id="cancun-tab" data-tabs-target="#cancun" type="button" role="tab" aria-controls="cancun" aria-selected="false">
                    @include('layouts.themes.icons.cancun')
                    CANCUN
                </button>
            </li>
            <li role="presentation">
                <button class="inline-flex items-center justify-center p-4 border-b-2 border-transparent rounded-t-lg hover:text-red-600 hover:border-gray-300 dark:hover:text-gray-300 group" id="cancun2-tab" data-tabs-target="#cancun2" type="button" role="tab" aria-controls="cancun2" aria-selected="false">
                    @include('layouts.themes.icons.cancun')
                    CANCUN 2
                </button>
            </li>
        </ul>
    </div>
    <div id="myTabContent">
        <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="carrillo" role="tabpanel" aria-labelledby="carrillo-tab">
            @include('livewire.pay-sheet.salary.carrillo')
        </div>
        <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="morelos" role="tabpanel" aria-labelledby="morelos-tab">
            @include('livewire.pay-sheet.salary.morelos')
        </div>
        <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="tulum" role="tabpanel" aria-labelledby="tulum-tab">
            @include('livewire.pay-sheet.salary.tulum')
        </div>
        <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="playa" role="tabpanel" aria-labelledby="playa-tab">
            @include('livewire.pay-sheet.salary.playa')
        </div>
        <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="playa2" role="tabpanel" aria-labelledby="playa2-tab">
            @include('livewire.pay-sheet.salary.playa2')
        </div>
        <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="cancun" role="tabpanel" aria-labelledby="cancun-tab">
            @include('livewire.pay-sheet.salary.cancun')
        </div>
        <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="cancun2" role="tabpanel" aria-labelledby="cancun2-tab">
            @include('livewire.pay-sheet.salary.cancun2')
        </div>
    </div>

    @include('livewire.pay-sheet.salary.form')
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
            swal({
                title: 'Realizado',
                text: msg,
                type: 'success',
            });
        }

        function onItemUpdated(msg) {
            hideModal();
            swal({
                title: 'Atención',
                text: msg,
                type: 'warning',
            });
        }

        function onItemDeleted(msg) {
            swal({
                title: 'Atención',
                text: msg,
                type: 'warning',
            });
        }

        function onItemWatch(msg){
            swal({
                title: 'ERROR',
                text: msg,
                type: 'error',
            });
        }

        window.livewire.on('item-added', onItemAdded);
        window.livewire.on('item-updated', onItemUpdated);
        window.livewire.on('item-deleted', onItemDeleted);
        window.livewire.on('hide-modal', hideModal);
        window.livewire.on('show-modal', showModal);
        window.livewire.on('item-watch', onItemWatch);
    });

</script>

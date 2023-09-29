<div>
    <div class="pb-4 font-medium text-gray-900 whitespace-nowrap dark:text-white justify-self-auto">
        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">{{$componentName}} | {{$pageTitle}}</h3>
    </div>
    <div class="flex items-center justify-between pb-4 bg-white ma-3 dark:bg-gray-900">
        <div class="justify-self-auto">
            @include('common.search')
        </div>
        {{-- <div class="justify-self-auto">
            <button data-modal-target="defaultModal" data-modal-toggle="defaultModal" class="relative inline-flex items-center justify-center p-0.5 mb-2 mr-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-purple-600 to-blue-500 group-hover:from-purple-600 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800" type="button">
                <span class="block relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                    Crear nuevo
                </span>
            </button>
        </div> --}}
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
                        Núm. Periodo
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Fecha Inicial
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Fecha Final
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
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{$item->numperiodo}}
                    </th>
                    <td class="px-6 py-4">
                        {{$item->fechaini}}
                    </td>
                    <td class="px-6 py-4">
                        {{$item->fechafin}}
                    </td>
                    <td class="px-6 py-4">
                        <a href="javascript:void(0)" onclick='Editar({{$item->id}})' data-modal-target="defaultModal" data-modal-toggle="defaultModal" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                            @include('layouts.themes.icons.eye')
                        </a>
                        <a href="javascript:void(0)" onclick='Confirm({{$item->id}})' class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                            @include('layouts.themes.icons.printer')
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    {{ $data->links()}}
    @include('livewire.pay-sheet.payroll-print.form')
</div>
<script>
    function Confirm(id)
    {
        swal({
            title: 'CONFIRMAR',
            showClass: {
                popup: 'animate__animated animate__fadeInDown'
            },
            hideClass: {
                popup: 'animate__animated animate__fadeOutUp'
            },
            text: '¿CONFIRMAS IMPRIMIR EL REGISTRO?',
            type: 'question',
            input: 'select',
            inputOptions: {
                'carrillo': 'CARRILLO',
                'morelos': 'MORELOS',
                'tulum': 'TULUM',
                'playa': 'PLAYA',
                'playa2': 'PLAYA 2',
                'cancun': 'CANCUN',
                'cancun2': 'CANCUN 2'
            },
            backdrop: `
                rgba(0,0,123,0.4)`,
            inputPlaceholder: 'Selecciona una sucursal',
            showCancelButton: true,
            cancelBtuttonText: 'Cerrar',
            cancelButtonColor: '#fff',
            confirmButtonText: 'Aceptar',
            confirmButtonColor: '#3B3f5C',
            footer: '<strong>CreceImpulso</strong>'
        }).then( function (result){
            if (result.value === 'carrillo'){
                window.livewire.emit('CarrilloPrinter', id)
                swal.close()
            }else if(result.value === 'morelos'){
                window.livewire.emit('MorelosPrinter', id)
                swal.close()
            }else if(result.value === 'tulum'){
                window.livewire.emit('TulumPrinter', id)
                swal.close()
            }else if(result.value === 'playa'){
                window.livewire.emit('PlayaPrinter', id)
                swal.close()
            }else if(result.value === 'playa2'){
                window.livewire.emit('Playa2Printer', id)
                swal.close()
            }else if(result.value === 'cancun'){
                window.livewire.emit('CancunPrinter', id)
                swal.close()
            }else if(result.value === 'cancun2'){
                window.livewire.emit('Cancun2Printer', id)
                swal.close()
            }
        })
    }

    function Editar(id)
    {
        swal({
            title: 'VISTA',
            showClass: {
                popup: 'animate__animated animate__fadeInDown'
            },
            hideClass: {
                popup: 'animate__animated animate__fadeOutUp'
            },
            text: '¿CONFIRMAS VER EL REGISTRO?',
            type: 'question',
            input: 'select',
            inputOptions: {
                'carrillo': 'CARRILLO',
                'morelos': 'MORELOS',
                'tulum': 'TULUM',
                'playa': 'PLAYA',
                'playa2': 'PLAYA 2',
                'cancun': 'CANCUN',
                'cancun2': 'CANCUN 2'
            },
            backdrop: `
                rgba(0,0,123,0.4)`,
            inputPlaceholder: 'Selecciona una sucursal',
            showCancelButton: true,
            cancelBtuttonText: 'Cerrar',
            cancelButtonColor: '#fff',
            confirmButtonText: 'Aceptar',
            confirmButtonColor: '#3B3f5C',
            footer: '<strong>CreceImpulso</strong>'
        }).then( function (result){
            if (result.value === 'carrillo'){
                window.livewire.emit('CarrilloView', id)
                swal.close()
            }else if(result.value === 'morelos'){
                window.livewire.emit('MorelosView', id)
                swal.close()
            }else if(result.value === 'tulum'){
                window.livewire.emit('TulumView', id)
                swal.close()
            }else if(result.value === 'playa'){
                window.livewire.emit('PlayaView', id)
                swal.close()
            }else if(result.value === 'playa2'){
                window.livewire.emit('Playa2View', id)
                swal.close()
            }else if(result.value === 'cancun'){
                window.livewire.emit('CancunView', id)
                swal.close()
            }else if(result.value === 'cancun2'){
                window.livewire.emit('Cancun2View', id)
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
            // noty(msg);
        }

        function onItemUpdated(msg) {
            hideModal();
            // noty(msg); // Supongo que noty es una función definida en otro lugar de tu código
        }

        function onItemDeleted(msg) {
            // noty(msg); // Supongo que noty es una función definida en otro lugar de tu código
        }

        window.livewire.on('item-added', onItemAdded);
        window.livewire.on('item-updated', onItemUpdated);
        window.livewire.on('item-deleted', onItemDeleted);
        window.livewire.on('hide-modal', hideModal);
        window.livewire.on('show-modal', showModal);
    });

</script>

@include('common.headerModal')
<form class="space-y-6">
    <div class="items-start px-6 py-1">
        <select wire:model='operacion' class="block p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            <option value="Elegir">Elegir</option>
            <option value="-">( - ) Sustraer</option>
            <option value="+">( + ) Agregar</option>
        </select>
        @error('operacion')
            <p id="standard_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400"><span class="font-medium">{{$message}}</span></p>
        @enderror
    </div>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        #
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <div class="flex items-center">
                            Tipo
                        </div>
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <div class="flex items-center">
                            Valor
                        </div>
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <div class="flex items-center">
                            Cantidad
                        </div>
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <div class="flex items-center">
                            Total
                        </div>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($denominacion as $index=>$item)
                    <tr class="bg-white dark:bg-gray-800">
                        <th scope="row" class="px-6 py-4 ">
                            {{$index + 1}}
                        </th>
                        <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{$item->type}}
                        </td>
                        <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{$item->value}}
                        </td>
                        <td class="px-1 py-1">
                            <div class="relative mb-1">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#5406a4" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="1" x2="12" y2="23"></line><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg>
                                </div>
                                @if ($item->value == 0.5)
                                    <input type="number" id="{{$item->type . '-' . $item->value}}" wire:model.lazy='{{$item->type . '50c'}}' wire:keydown.enter="{{'f' . $item->type . '50c'}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                @else
                                    <input type="number" id="{{$item->type . '-' . $item->value}}" wire:model.lazy='{{$item->type . $item->value}}' wire:keydown.enter="{{'f' . $item->type . $item->value }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                @endif
                            </div>
                        </td>
                        <td class="px-1 py-2 pr-3">
                            <div class="relative mb-1">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#5406a4" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="1" x2="12" y2="23"></line><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg>
                                </div>
                                @if ($item->value == 0.5)
                                    <input type="text" id="{{'t' . $item->type . '-' . '50c'}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" disabled>
                                @else
                                    <input type="text" id="{{'t' . $item->type . '-' . $item->value}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" disabled>
                                @endif
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr class="font-semibold text-gray-900 dark:text-white">
                    <th scope="row" class="px-6 py-3 text-base">Total</th>
                    <td class="px-6 py-3"></td>
                    <td class="px-6 py-3"></td>
                    <td class="px-6 py-3"></td>
                    <td class="px-6 py-3 text-end">{{'$' . number_format($total)}}</td>
                </tr>
            </tfoot>
        </table>
    </div>
</form>
@include('common.footerModal')
<script>
    document.addEventListener('DOMContentLoaded', function(){
        window.livewire.on('tB1000', (fB1000)=>{
            let vB1000 = document.getElementById('tBillete-1000').value = fB1000;
        });
        window.livewire.on('tB500', (fB500)=>{
            let vB500 = document.getElementById('tBillete-500').value = fB500;
        });
        window.livewire.on('tB200', (fB200)=>{
            let vB200 = document.getElementById('tBillete-200').value = fB200;
        });
        window.livewire.on('tB100', (fB100)=>{
            let vB100 = document.getElementById('tBillete-100').value = fB100;
        });
        window.livewire.on('tB50', (fB50)=>{
            let vB50 = document.getElementById('tBillete-50').value = fB50;
        });
        window.livewire.on('tB20', (fB20)=>{
            let vB20 = document.getElementById('tBillete-20').value = fB20;
        });

        // Monedas
        window.livewire.on('tM20', (fM20)=>{
            let vM20 = document.getElementById('tMoneda-20').value = fM20;
        });
        window.livewire.on('tM10', (fM10)=>{
            let vM10 = document.getElementById('tMoneda-10').value = fM10;
        });
        window.livewire.on('tM5', (fM5)=>{
            let vM5 = document.getElementById('tMoneda-5').value = fM5;
        });
        window.livewire.on('tM2', (fM2)=>{
            let vM2 = document.getElementById('tMoneda-2').value = fM2;
        });
        window.livewire.on('tM1', (fM1)=>{
            let vM1 = document.getElementById('tMoneda-1').value = fM1;
        });
        window.livewire.on('tM50c', (fM50c)=>{
            let vM50c = document.getElementById('tMoneda-50c').value = fM50c;
        });
    });


</script>

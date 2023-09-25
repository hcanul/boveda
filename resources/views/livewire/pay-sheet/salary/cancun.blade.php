<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        ID
                    </th>
                    <th scope="col" class="px-6 py-3">
                        NOMBRE
                    </th>
                    <th scope="col" class="px-6 py-3">
                        PERIODO
                    </th>
                    <th scope="col" class="px-6 py-3">
                        SALARIO
                    </th>
                    <th scope="col" class="px-6 py-3">
                        PREVISION SOCIAL
                    </th>
                    <th scope="col" class="px-6 py-3">
                        SUBSIDIO
                    </th>
                    <th scope="col" class="px-6 py-3">
                        DESCUENTO
                    </th>
                    <th scope="col" class="px-6 py-3">
                        SEGURO SOCIAL
                    </th>
                    <th scope="col" class="px-6 py-3">
                        INFONAVIT
                    </th>
                    <th scope="col" class="px-6 py-3">
                        DIAS LABORADOS
                    </th>
                    <th scope="col" class="px-6 py-3">
                        ACCIONES
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cancun as $item)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4">
                            {{$item->id}}
                        </td>
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{$item->employ2->name}}
                        </th>
                        <td class="px-6 py-4">
                            {{$item->salaryperiod_id}}
                        </td>
                        <td class="px-6 py-4">
                            {{'$ ' . number_format($item->salario, 2)}}
                        </td>
                        <td class="px-6 py-4">
                            {{'$ ' . number_format($item->prevsoc, 2)}}
                        </td>
                        <td class="px-6 py-4">
                            {{'$ ' . number_format($item->subsidio, 2)}}
                        </td>
                        <td class="px-6 py-4">
                            {{'$ ' . number_format($item->descuento, 2)}}
                        </td>
                        <td class="px-6 py-4">
                            {{'$ ' . number_format($item->segsoc, 2)}}
                        </td>
                        <td class="px-6 py-4">
                            {{'$ ' . number_format($item->infonavit, 2)}}
                        </td>
                        <td class="px-6 py-4">
                            {{$item->workingdays}}
                        </td>
                        <td class="px-6 py-4">
                            <a href="javascript:void(0)" wire:click='Editar({{$item->id}})' data-modal-target="defaultModal" data-modal-toggle="defaultModal" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                @include('layouts.themes.icons.edit')
                            </a>
                            <a href="javascript:void(0)" onclick='Confirm({{$item->id}})' class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                @include('layouts.themes.icons.trash')
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    {{ $morelos->links()}}

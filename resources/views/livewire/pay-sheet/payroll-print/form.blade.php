@include('common.modal.headModal')
@if($vistaCarrillo)
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
                </tr>
            </thead>
            <tbody>
                @foreach ($vistaCarrillo as $item)
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
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endif

@if($vistaMorelos)
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
                </tr>
            </thead>
            <tbody>
                @foreach ($vistaMorelos as $item)
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
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endif

@if($vistaTulum)
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
                </tr>
            </thead>
            <tbody>
                @foreach ($vistaTulum as $item)
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
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endif

@if($vistaPlaya)
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
                </tr>
            </thead>
            <tbody>
                @foreach ($vistaPlaya as $item)
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
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endif

@if($vistaPlaya2)
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
                </tr>
            </thead>
            <tbody>
                @foreach ($vistaPlaya2 as $item)
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
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endif

@if($vistaCancun)
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
                </tr>
            </thead>
            <tbody>
                @foreach ($vistaCancun as $item)
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
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endif

@if($vistaCancun2)
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
                </tr>
            </thead>
            <tbody>
                @foreach ($vistaCancun2 as $item)
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
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endif

@include('common.modal.footerModal')

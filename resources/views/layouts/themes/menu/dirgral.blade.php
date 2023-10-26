<button aria-controls="dropdown-dirgral" data-collapse-toggle="dropdown-dirgral" type="button" class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
    @include('layouts.themes.icons.payroll')
    <span class="flex-1 ml-3 text-left whitespace-nowrap">Direccion Gral.</span>
    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
    </svg>
</button>
<ul id="dropdown-dirgral" class="hidden py-2 space-y-2">
    @role('superuser|nomina')
        <li>
            <a href="{{ route('indexNominaColab') }}" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
                @include('layouts.themes.icons.employee')
                <span class="flex-1 ml-3 whitespace-nowrap">Colaboradores</span>
            </a>
        </li>
        <li>
            <a href="{{ route('indexTableSalary') }}" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
                @include('layouts.themes.icons.table')
                <span class="flex-1 ml-3 whitespace-nowrap">Tabla Salarios</span>
            </a>
        </li>
        <li>
            <a href="{{ route('indexNominaPeriodos') }}" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
                @include('layouts.themes.icons.date')
                <span class="flex-1 ml-3 whitespace-nowrap">Periodos</span>
            </a>
        </li>
        <li>
            <a href="{{ route('indexCalculateSalary') }}" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
                @include('layouts.themes.icons.calculator')
                <span class="flex-1 ml-3 whitespace-nowrap">Cálculo Salarios</span>
            </a>
        </li>
        <li>
            <a href="{{ route('indexPtintedSalary') }}" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
                @include('layouts.themes.icons.printer')
                <span class="flex-1 ml-3 whitespace-nowrap">Imprimir Salarios</span>
            </a>
        </li>
    @endrole
</ul>

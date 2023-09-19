<button aria-controls="dropdown-nomina" data-collapse-toggle="dropdown-nomina" type="button" class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
    @include('layouts.themes.icons.payroll')
    <span class="flex-1 ml-3 text-left whitespace-nowrap">Nomina</span>
    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
    </svg>
</button>
<ul id="dropdown-nomina" class="hidden py-2 space-y-2">
    @can('ver todo')
        <li>
            <a href="{{ route('indexNominaColab') }}" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
                @include('layouts.themes.icons.employee')
                <span class="flex-1 ml-3 whitespace-nowrap">Colaboradores</span>
            </a>
        </li>
        {{-- <li>
            <a href="{{ route('indexNominaTableDefault') }}" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
                @include('layouts.themes.icons.table')
                <span class="flex-1 ml-3 whitespace-nowrap">Default Salario</span>
            </a>
        </li>
        <li>
            <a href="{{ route('indexNominaCaptura') }}" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
                @include('layouts.themes.icons.paysalary')
                <span class="flex-1 ml-3 whitespace-nowrap">Nueva Nomina</span>
            </a>
        </li> --}}
    @endcan
</ul>

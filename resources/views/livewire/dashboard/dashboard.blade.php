<div>
    @can('ver todo')
        <div class="grid grid-cols-2 gap-4 mb-4">
            <div class="flex items-center justify-center rounded">
                <p class="text-2xl text-gray-400 dark:text-gray-500">
                    <div class="block max-w-sm p-6 bg-orange-300 border border-gray-200 rounded-lg shadow hover:bg-orange-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Sucursal Carrillo</h5>
                        <p class="font-normal text-gray-700 dark:text-gray-400">Total Efectivo: {{$carrillo}}</p>
                    </div>
                </p>
            </div>
            <div class="flex items-center justify-center rounded">
                <p class="text-2xl text-gray-400 dark:text-gray-500">
                    <div class="block max-w-sm p-6 bg-blue-300 border border-gray-200 rounded-lg shadow hover:bg-blue-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Sucursal Morelos</h5>
                        <p class="font-normal text-gray-700 dark:text-gray-400">Total Efectivo: {{$morelos}}</p>
                    </div>
                </p>
            </div>
            <div class="flex items-center justify-center rounded">
                <p class="text-2xl text-gray-400 dark:text-gray-500">
                    <div class="block max-w-sm p-6 bg-red-300 border border-gray-200 rounded-lg shadow hover:bg-red-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Sucursal Tulum</h5>
                        <p class="font-normal text-gray-700 dark:text-gray-400">Total Efectivo: {{$tulum}}</p>
                    </div>
                </p>
            </div>
            <div class="flex items-center justify-center rounded">
                <p class="text-2xl text-gray-400 dark:text-gray-500">
                    <div class="block max-w-sm p-6 bg-purple-300 border border-gray-200 rounded-lg shadow hover:bg-purple-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Sucursal Playa1</h5>
                        <p class="font-normal text-gray-700 dark:text-gray-400">Total Efectivo: {{$playa1}}</p>
                    </div>
                </p>
            </div>
            <div class="flex items-center justify-center rounded">
                <p class="text-2xl text-gray-400 dark:text-gray-500">
                    <div class="block max-w-sm p-6 bg-indigo-600 border border-gray-200 rounded-lg shadow hover:bg-indigo-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Sucursal Playa2</h5>
                        <p class="font-normal text-gray-700 dark:text-gray-400">Total Efectivo: {{$playa2}}</p>
                    </div>
                </p>
            </div>
            {{-- <div class="flex items-center justify-center rounded">
                <p class="text-2xl text-gray-400 dark:text-gray-500">
                    <div href="#" class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Sucursal Carrillo</h5>
                        <p class="font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                    </div>
                </p>
            </div> --}}
        </div>
    @endcan

</div>

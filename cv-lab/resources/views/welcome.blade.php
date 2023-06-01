
    <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

<div
    class="relative flex items-top justify-center bg-gray-100 sm:items-center py-4 sm:pt-0">
    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
        <div class="mt-8 overflow-hidden">
            <div class="grid grid-cols-1 gap-3">
                <div class="p-6 border-t bg-white shadow border-gray-200 dark:border-gray-300 md:border-t-0 md:border-l w-full">
                    <div class="flex items-center">
                        <div class="ml-4 text-lg leading-7 font-semibold"><a class="text-gray-900">Mudrenok Sofia</a>
                        </div>
                    </div>
                    <div class="mt-2 ml-4 text-gray-600 dark:text-gray-400 text-sm"><a href="">Detailed →</a></div>
                </div>
                <div class="p-6 border-t bg-white shadow border-gray-200 dark:border-gray-300 md:border-t-0 md:border-l w-full">
                    <div class="flex items-center">
                        <div class="ml-4 text-lg leading-7 font-semibold"><a class="text-gray-900">CRUD</a>
                        </div>
                    </div>
                    <div class="mt-2 ml-4 text-gray-600 dark:text-gray-400 text-sm"><a href="{{URL::to('auto')}}">Detailed →</a></div>
                </div>
            </div>
        </div>

    </div>
</div>
</x-app-layout>

    @extends('layouts.main')

    @section('container')
    <h1 class="my-10 ml-60 text-3xl font-semibold text-white w-60">Employye List</h1>
    <form class="ml-60 flex gap-2 w-80" action="" method="POST">
        <input type="text" class="py-1 px-1 border-2 border-slate-400 rounded w-80" placeholder="Search Employee" name="search" id="search" autofocus>
        <button class="bg-slate-800 rounded py-1 px-1" type="submit" name="search"><i data-feather="search" class="text-white"></i></button>
    </form>
    <div class="w-full flex justify-center bg-fill">
    <div class="w-2/3 bg-gray-200 px-4 mx-10 rounded my-4">
        <ul role="list" class=" divide-white divide-y">
            <?php foreach ($data as $i => $item): ?>
            <li class="flex justify-between gap-x-6 py-5">
            <div class="flex min-w-0 gap-x-4">
                <div class=" mr-2 flex justify-center items-center">
                    <h1 class=" rounded px-3 py-1 text-white bg-emerald-700 text-2xl">{{ $i + 1 }}</h1>
                </div>
                <img class="h-16 w-16 flex-none rounded-full bg-gray-50" src="img/{{ $item["photo"] }}" alt="">
                <div class="min-w-0 flex-auto">
                <p class="text-m font-semibold leading-6 text-gray-900">{{ $item["name"] }}</p>
                <p class="mt-1 truncate text-sm leading-5 text-gray-500">{{ $item["email"] }}</p>
                <p class="mt-1 truncate text-sm leading-5 font-semibold text-lime-600">NIK: {{ $item["nik"] }}</p>
                </div>
            </div>
            <div class="hidden shrink-0 sm:flex sm:flex-col sm:items-end">
                <p class="text-sm leading-6 text-gray-900 font-semibold uppercase">{{ $item["division"] }}</p>
                <p class="mt-1 text-sm leading-5 text-gray-500">{{ $item["contact"] }}</p>
            </div>
        </li>
        <?php endforeach; ?>
        </ul>
    </div>
</div>  
    @endsection

    
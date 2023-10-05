<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Yumm!</title>
    @vite('resources/css/app.css')
</head>

<body>
    <div class="flex flex-col self-center divide-y divide-slate-100 w-full md:w-3/4 mx-auto">
        <nav class="py-4 px-6 text-sm font-medium">
            <ul class="flex justify-between">
                <li class="text-2xl">Snacks for you!</li>
                <li>
                    <form class="flex items-center">
                        <label for="simple-search" class="sr-only">Search</label>
                        <div class="relative w-full">
                            <input type="text" id="simple-search"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Search by name..." required>
                        </div>
                        <button type="submit"
                            class="p-2.5 ml-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                            </svg>
                            <span class="sr-only">Search</span>
                        </button>
                    </form>
                </li>
            </ul>
        </nav>

        @if ($snacks)
            <div class="divide-y divide-slate-100">
                @foreach ($snacks as $snack)
                    <article class="flex items-start space-x-6 p-6">
                        <img src="{{ $snack['image_url'] }}" alt="" width="100" height="90"
                            class="flex-none rounded-md bg-slate-100" />
                        <div class="min-w-0 relative flex-auto">
                            <h2 class="font-semibold text-slate-900 truncate pr-20">{{ $snack['name'] }}</h2>
                            <dl class="mt-2 flex flex-wrap text-sm leading-6 font-medium">
                                <div class="absolute top-0 right-0 flex items-center space-x-1">
                                    <dt class="sr-only">Brand</dt>
                                    <dd class="text-slate-500">{{ $snack['brand'] }}</dd>
                                </div>
                                <div class="flex-none w-full mb-2 font-normal">
                                    <dt class="sr-only">Description</dt>
                                    <dd class="px-1.5">{{ $snack['description'] }}</dd>
                                </div>
                                <div class="mr-2">
                                    <dt class="sr-only">Calories</dt>
                                    <dd class="px-1.5 ring-1 ring-slate-200 rounded">
                                        Calories : {{ $snack['calories'] }}
                                    </dd>
                                </div>

                                <div class="mr-2">
                                    <dt class="sr-only">Quantity</dt>
                                    <dd class="px-1.5 ring-1 ring-slate-200 rounded">
                                        Quantity: {{ $snack['quantity'] }}
                                    </dd>
                                </div>
                                @if ($snack['gluten_free'])
                                    <div class="mr-2">
                                        <dt class="sr-only">Gluten Free</dt>
                                        <dd class="px-1.5 ring-1 ring-slate-200 rounded mr-3">
                                            Gluten Free
                                        </dd>
                                    </div>
                                @endif
                                @if ($snack['refrigerated'])
                                    <div class="mr-2">
                                        <dt class="sr-only">Refrigerated</dt>
                                        <dd class="px-1.5 ring-1 ring-slate-200 rounded mr-3">
                                            Refrigerated
                                        </dd>
                                    </div>
                                @endif

                            </dl>
                        </div>
                    </article>
                @endforeach
            </div>
        @endif

    </div>

</body>

</html>

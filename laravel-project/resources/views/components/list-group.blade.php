<div>
    <ul class="max-w-xs flex flex-col">
        @foreach ($items as $item)
            <li class="inline-flex items-center gap-x-2 py-3 px-4 text-sm font-medium
                bg-white border text-gray-800 -mt-px first: rounded-t-lg first:mt-0
                last: rounded-b-lg dark:bg-gray-800 dark: border-gray-700 dark: text-white">   

                {{ $item }}
            </li>
        @endforeach
    </ul>
</div>
<x-layout>
    <h1 class="text-xl mb-5 font-bold">Student List</h1>
    <div class="overflow-x-auto">
        <table class="min-w-full divide-y-2 divide-gray-200">
            <thead class="ltr:text-left rtl:text-right">

                <tr class="*:font-medium *:text-gray-900">
                    <th class="px-3 py-2 whitespace-nowrap">Name</th>
                    <th class="px-3 py-2 whitespace-nowrap">Birthday</th>
                    <th class="px-3 py-2 whitespace-nowrap">Major</th>
                    <th class="px-3 py-2 whitespace-nowrap">Score</th>
                    <th class="px-3 py-2 whitespace-nowrap">Detail</th>
                </tr>
            </thead>

            <tbody class="divide-y divide-gray-200">
                @foreach ($data as $item)
                    <tr class="*:text-gray-900 *:first:font-medium">
                    <td class="px-3 py-2 whitespace-nowrap">{{$item['name']}}</td>
                    <td class="px-3 py-2 whitespace-nowrap">{{$item['birthday']}}</td>
                    <td class="px-3 py-2 whitespace-nowrap">{{$item['major']}}</td>
                    <td class="px-3 py-2 whitespace-nowrap">{{$item['score']}}</td>
                    <td class="px-3 py-2 whitespace-nowrap">
                        <a href="{{ route('siswa.show', {{ $item['id']}} }})" class="text-teal-500 font-bold hover:opacity-50">
                            View Details
                        </a>
                    </td>
                </tr>
                @endforeach
                

            </tbody>
        </table>
    </div>

    <div class="py-10">
        {{ $data->appends(request()->query())->links() }}
    </div>

    {{-- <div>
        
        <ul class="flex justify-center gap-1 text-gray-900">
            <li>
                <a
                href="#"
                class="grid size-8 place-content-center rounded border border-gray-200 transition-colors hover:bg-gray-50 rtl:rotate-180"
                aria-label="Previous page"
                >
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="size-4"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                >
                    <path
                    fill-rule="evenodd"
                    d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                    clip-rule="evenodd"
                    />
                </svg>
                </a>
            </li>

            <li>
                <a
                href="#"
                class="block size-8 rounded border border-gray-200 text-center text-sm/8 font-medium transition-colors hover:bg-gray-50"
                >
                1
                </a>
            </li>

            <li
                class="block size-8 rounded border border-indigo-600 bg-indigo-600 text-center text-sm/8 font-medium text-white"
            >
                2
            </li>

            <li>
                <a
                href="#"
                class="block size-8 rounded border border-gray-200 text-center text-sm/8 font-medium transition-colors hover:bg-gray-50"
                >
                3
                </a>
            </li>

            <li>
                <a
                href="#"
                class="block size-8 rounded border border-gray-200 text-center text-sm/8 font-medium transition-colors hover:bg-gray-50"
                >
                4
                </a>
            </li>

            <li>
                <a
                href="#"
                class="grid size-8 place-content-center rounded border border-gray-200 transition-colors hover:bg-gray-50 rtl:rotate-180"
                aria-label="Next page"
                >
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="size-4"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                >
                    <path
                    fill-rule="evenodd"
                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                    clip-rule="evenodd"
                    />
                </svg>
                </a>
            </li>
        </ul>

    </div> --}}

    <ul>
        
    </ul>
    <x-slot:footer>
        <strong>Student Page</strong>
    </x-slot:footer>
</x-layout>
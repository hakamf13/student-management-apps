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
                        <a href="/student/{{ $item['id'] }}" class="text-teal-500 font-bold hover:opacity-50">
                            View Details
                        </a>
                    </td>
                </tr>
                @endforeach
                

            </tbody>
        </table>
    </div>

    <ul>
        
    </ul>
    <x-slot:footer>
        <strong>Student Page</strong>
    </x-slot:footer>
</x-layout>
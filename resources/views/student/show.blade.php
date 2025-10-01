<x-layout>
    <div class="flow-root">
        <dl class="-my-3 divide-y divide-gray-200 text-sm">

            <div class="grid grid-cols-1 gap-1 py-3 sm:grid-cols-3 sm:gap-4">
                <dt class="font-medium text-gray-900">Name</dt>

                <dd class="text-gray-700 sm:col-span-2">{{ $student['name'] }}</dd>
            </div>

            <div class="grid grid-cols-1 gap-1 py-3 sm:grid-cols-3 sm:gap-4">
                <dt class="font-medium text-gray-900">Birthday</dt>

                <dd class="text-gray-700 sm:col-span-2">{{ $student['birthday'] }}</dd>
            </div>

            <div class="grid grid-cols-1 gap-1 py-3 sm:grid-cols-3 sm:gap-4">
                <dt class="font-medium text-gray-900">Major</dt>

                <dd class="text-gray-700 sm:col-span-2">{{ $student['major'] }}</dd>
            </div>

            <div class="grid grid-cols-1 gap-1 py-3 sm:grid-cols-3 sm:gap-4">
                <dt class="font-medium text-gray-900">Score</dt>

                <dd class="text-gray-700 sm:col-span-2">{{ $student['score'] }}</dd>
            </div>
        </dl>
    </div>

    <x-slot:footer>
        <strong>Student Detail Page</strong>
    </x-slot:footer>
</x-layout>
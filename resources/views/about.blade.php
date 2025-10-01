<x-layout>

    <h1>Hello form about View, I am {{ $name }}</h1>
    <p>Age {{ $age }}</p>
    @if ($age > 19)
        <h3>You have a legal cards</h3>
    @else
        <h3>You dont have a legal cards</h3>
    @endif

    <x-slot:footer>
        <strong>About Page</strong>
    </x-slot:footer>

</x-layout>

@foreach ($units as $unit)
    <h1>Unidade id: {{ $unit->id }}</h1>
    <h2>Unidade nome: {{ $unit->name }}</h2>
@endforeach

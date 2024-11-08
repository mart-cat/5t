<x-layout>
<h1>Оскорбительные</h1>
@foreach ( $bads as $bad)
<p>{{$bad->text}}</p>
@endforeach
</x-layout>
<x-layout>
<h1>Мои сообщения</h1>
@foreach ( $profiles as $profile)
<p>{{$profile->text}}</p>
@endforeach
</x-layout>
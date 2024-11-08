<x-layout>
<h1>Страница сообщений</h1>
@foreach ( $messegs as $messeg)
<p>{{$messeg->text}}</p>

@endforeach

<form action="{{route('messeges')}}" method="post">
@CSRF
<label>Сообщений</label>
<input type="text" name="text"></input>
<input type="submit" value="Отправить"/>
</from>
</x-layout>

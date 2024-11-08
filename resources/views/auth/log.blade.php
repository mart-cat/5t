<x-layout>
<h1>Авторизация</h1>
<form action="{{route('log')}}" method="post">
@CSRF
<label>Почта</label>
<input type="email" name="email"></input>
<label>Пароль</label>
<input type="password" name="password"></input>
<input type="submit" value="Отправить"/>
</from>
</x-layout>

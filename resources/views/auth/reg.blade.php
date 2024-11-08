<x-layout>
<h1>Регистрация</h1>
<form action="{{route('reg')}}" method="post">
@CSRF
<label>Имя</label>
<input type="text" name="name"></input>
<label>Почта</label>
<input type="email" name="email"></input>
<label>Пароль</label>
<input type="password" name="password"></input>
<input type="submit" value="Отправить"/>
</from>
</x-layout>



<form action="{{route('login')}}" method="post">
    {{csrf_field()}}
    <input type="text" name="email" required>
    <input type="text" name="password" required>

    <button type="submit" >Login</button>
</form>
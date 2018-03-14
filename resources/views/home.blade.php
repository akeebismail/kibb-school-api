

<form action="{{route('sessions.store')}}" method="post">
    {{csrf_field()}}
    <input name="name" required/>
    <input name="start_day" />

    <input name="end_day" />
    <button type="submit" >Create</button>
</form>
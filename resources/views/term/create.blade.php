<form action="{{route('terms.store')}}" method="post">
    {{csrf_field()}}
    <input name="name" />
    <input name="session_id" value="2" type="hidden">
    <input name="start_day" type="date">
    <input type="date" name="end_day">
    <button type="submit" >Submit</button>
</form>
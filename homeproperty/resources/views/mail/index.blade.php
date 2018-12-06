@if($errors -> any())
    @foreach( $errors->all() as $error)
        <li>{{$error}}</li>
    @endforeach
@endif


<form action="{{route('mail.store')}}" method="post">
   @csrf
    <input type="text"name="email">
    <input type="submit">
</form>
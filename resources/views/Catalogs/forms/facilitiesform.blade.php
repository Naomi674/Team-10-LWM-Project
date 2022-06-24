@extends('Components.layout')

@section('content')
<form action="/action_page.php">
    <label for="fname">First name:</label><br>
    <div class="column is-one-quarter pl-0 pt-1">
        <input type="text" id="fname" name="fname" value="John" class="input"><br>
    </div>
    <label for="lname">Last name:</label><br>
    <div class="column is-one-quarter pl-0 pt-1">
        <input type="text" id="lname" name="lname" value="Doe" class="input"><br>
    </div>
    <input type="submit" value="Submit" class="button is-primary">
</form>
@endsection

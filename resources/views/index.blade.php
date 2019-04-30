<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Caculator</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
<div class="container" style="width: 50%">
    <form action="{{route('caculate')}}" method="post">
        @csrf
        <h2 style="color:chocolate">Simple Caculator</h2>
        <input type="text" name="number_one" class="form-control">
        <br>
        <input type="text" name="number_two" class="form-control">
        <br><br>
        <button type="submit" name="addition" class="btn btn-info">Addition(+)</button>
        <button type="submit" name="subtraction" class="btn btn-info">Subtraction(-)</button>
        <button type="submit" name="multiplication" class="btn btn-info">Multiplication(x)</button>
        <button type="submit" name="division" class="btn btn-info">Division(/)</button>
    </form>
    <br>
    <div style="color:chocolate">
    @if(!empty(request('number_one')) && !empty(request('number_two')))
        Result : {{$result}}
    @endif
    </div>
</div>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</html>
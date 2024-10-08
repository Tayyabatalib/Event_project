<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Venue Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<style>
*{
    padding: 0;
    margin: 0;
    font-family: Arial, Helvetica, sans-serif;
}
.logIn_pg{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    padding: 40px;
    border-radius: 10px;
    background:rgba(128, 128, 128, 0.205);
}
h1{
    text-align: center;
    color: brown;
    text-shadow: 0 0 20px goldenrod;
}
.input_field{
    margin-top: 10%;
}
.input_field input{
    width: 90%;
    margin-bottom:20px;
    padding: 8px;
    outline: none;
    border: 1px solid white;
    border-radius: 12px;
}
.checkbox{
    font-size: 12px;
    font: bold;
}
.checkbox span{
    /* margin-left: 4%; */
    color: brown;
}
.btn{
    margin-top: 2%;
}
.btn button{
    /* width: 50%; */
    border: none;
    text-align: center;
    position: relative;
    left: 25%;
    padding: 10px;
    color: black;
    font-size: 15px;
    border-radius: 10%;
    background: linear-gradient(rgba(0, 0, 0, 0.466),rgba(165, 42, 42, 0.822));
    cursor: pointer;
}
.btn button:hover{
    background: linear-gradient(rgba(165, 42, 42, 0.822),rgba(0, 0, 0, 0.466));
    box-shadow: 1px 1px 10px goldenrod;
}

@media screen and (max-width:452px){
    .btn button{
      width: 60%;
      font-size: 12px;
      /* color: aliceblue; */
    }
}
@media screen and (max-width:401px){
   h1{
       font-size: 25px;
   }
}
</style>
</head>
<body>
    <form action="{{ route('venues.store') }}" method="POST">
        @csrf
        <div class="logIn_pg">
            <h1>Venue Form</h1>
            <div class="input_field">
                <input type="text" name="name" placeholder="Venue Name">
                <br>
                <input type="age" name="address" placeholder="Address">
            </div>

            <label for="event_id">Events</label>
            <select name="event_id" id="event_id" class="bordered rounded mb-4">
                @foreach ($events as $event)
                    <option value="{{ $event->id }}">{{ $event->name }}</option>
                @endforeach
            </select>

            <br>

            <div class="btn">
                <button type="submit">Submit</button>
            </div>
        </div>
    </form>

    <h3 class="mt-4 ms-4">Go Back <br> Index Page!!</h3>
    <a class="btn btn-primary ms-4" href="{{ route('venues.index') }}">Back TO List</a>
</body>
</html>
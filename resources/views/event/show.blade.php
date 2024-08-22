<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col mt-4">
                <h1>Event Detail</h1>
                <h3>users</h3>
                {{-- @if($event->users->isEmpty())
                    <p>No users found for this event.</p>
                @else
                    <ul>
                        @foreach($event->users as $user)
                            <li>
                                <strong>User Name:</strong> {{ $user->user_name }}<br>
                   
                                <strong>Email:</strong> {{ $user->email }}<br>
                              
                            </li>
                        @endforeach
                    </ul>
                @endif  --}}

            </div>
            <div class="row">
                <div class="col-10 mt-4">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Event Name</th>
                                <th>Description</th>
                                <th>Start Time</th>
                                <th>End Time</th>
                                <th>User Name/Email</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $event->id }}</td>
                                <td>{{ $event->name }}</td>
                                <td>{{ $event->description }}</td>
                                <td>{{ $event->start_time }}</td>
                                <td>{{ $event->end_time }}</td>
                                <td>
                                    @if($event->users->isEmpty())
                                       <p>No users found for this event.</p>
                                    @else
                                    <ul>
                                        @foreach($event->users as $user)
                                            <li>
                                                <strong>User Name:</strong> {{ $user->user_name }}<br>
                                   
                                                <strong>Email:</strong> {{ $user->email }}<br>
                                              
                                            </li>
                                        @endforeach
                                    </ul>
                                    @endif  
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <a class="btn btn-success" href="">Edit</a>
                    <a class="btn btn-primary" href="{{ route('events.index') }}">Back To List</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
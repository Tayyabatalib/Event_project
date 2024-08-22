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
                <h1>Single User Detail</h1>
            </div>

    {{-- @if($user->events->isEmpty())
    <p>No events found for this user.</p>
    @else
    <ul>
        @foreach($user->events as $event)
            <li>
                <strong>Event Name:</strong> {{ $event->name }}<br>
                <strong>Description:</strong> {{ $event->description }}
            </li>
        @endforeach
    </ul>
@endif --}}
            <div class="row">
                <div class="col mt-4">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Age</th>
                                <th>Email</th>
                                <th>Phone No</th>
                                <th>Address</th>
                                <th>Event</th>
                                <th>Venue</th>
                                <th>Ticket</th>
                            </tr>
                        </thead>
                        {{-- @dd($user) --}}
                        <tbody>
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->user_name }}</td>
                                    <td>{{ $user->age }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->phone_no }}</td>
                                    <td>{{ $user->address }}</td>
                                    <td>
                                        @if($user->events->isEmpty())
                                            <p>No events found for this user.</p>
                                        @else
                                        <ul>
                                           @foreach($user->events as $event)
                                           <li>
                                              <strong>Event id:</strong> {{ $event->id }}<br>
                                              <strong>Event Name:</strong> {{ $event->name }}<br>
                                           </li>
                                           @endforeach
                                        </ul>
                                        @endif
                                    </td>
                                    <td>
                                        @if($user->venues->isEmpty())
                                            <p>No venues found for this user.</p>
                                        @else
                                        <ul>
                                            @foreach ($user->venues as $venue)
                                            <li>
                                                <strong>Event id:</strong> {{ $venue->event_id }}<br>
                                                <strong>Venue Name:</strong> {{ $venue->name }}<br>
                                             </li>
                                            @endforeach
                                         </ul>
                                         @endif
                                    </td>
                                    <td>
                                        @if($user->tickets->isEmpty())
                                            <p>No tickets found for this user.</p>
                                        @else
                                        <ul>
                                            @foreach ($user->tickets as $ticket)
                                            <li>
                                                <strong>Event Id:</strong> {{ $ticket->event_id }}<br>
                                                <strong>Event type:</strong> {{ $ticket->type }}<br>
                                                <strong>Price:</strong> {{ $ticket->price }}
                                             </li>
                                            @endforeach
                                         </ul>
                                         @endif
                                    </td>
                                </tr>
                        </tbody>
                    </table>

                    <a class="btn btn-success" href="">Edit</a>
                    <a class="btn btn-primary" href="{{ route('users.index') }}">Back To List</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
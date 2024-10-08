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
                <h1>Venue Detail</h1>
            </div>
            <div class="row">
                <div class="col-8 mt-4">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Venue Name</th>
                                <th>Address</th>
                                <th>Event Id</th>
                                <th>Event Name/Description</th>
                            </tr>
                        </thead>
                        <tbody>
                                <tr>
                                    <td>{{ $venue->id }}</td>
                                    <td>{{ $venue->name }}</td>
                                    <td>{{ $venue->address }}</td>
                                    <td>{{ $venue->event_id }}</td>
                                    <td>
                                        @if ($venue->events->isEmpty())
                                            <p>No Event found on this venue</p>
                                        @else
                                            <ul>
                                                @foreach ($venue->events as $event)
                                                    <li><strong>Event Name:</strong>{{ $event->name }}</li>
                                                    <li><strong>Description:</strong>{{ $event->description }}</li>
                                                @endforeach
                                            </ul>
                                        @endif
                                    </td>
                                </tr>
                        </tbody>
                    </table>

                    <a class="btn btn-success" href="">Edit</a>
                    <a class="btn btn-primary" href="{{ route('venues.index') }}">Back To List</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
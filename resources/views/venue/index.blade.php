<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<style>
    .side_bar{
        background: black;
        color: white;
    }
    .side_bar h5{
        padding: 14px;
        border-radius: 10px;
        color: black;
        background: white;
    }
    .feature{
        padding: 10px;
        text-decoration:none;
        color: white;
        font-size: 15px;
        line-height: 3;
        margin-top: 10px;
        cursor: pointer;
    }
    .feature:hover{
        background: gray;
    }
    th{
        position: sticky;
        top: 0px;
    }
    .table-wrap{
        max-height: 400px;
        overflow-y: scroll;
    }
</style>
</head>
<body>

    <div class="container-fluid">
        <div class="row">
            <div class="col-2 side_bar" style="height: 100vh;">
                <h4 class="mt-4">Event Management</h4>
                <hr>
                <h5>Features</h5>
                <a href="{{ route('users.index') }}" class="feature">Users Registration</a>
                <br>
                <a href="{{ route('events.index') }}" class="feature">Event Selection</a>
                <br>
                <a href="{{ route('tickets.index') }}" class="feature">Event Ticketing</a>
                <br>
                <a href="{{ route('venues.index') }}" class="feature">Venue</a>
            </div>
            <div class="table_content col-8 m-4">
                <h1>Venue Detail</h1>
                <div class="row">
                    <div class="col-6">
                        <a class="btn btn-info mt-4" href="{{ route('venues.create') }}">Create New Venue</a>
                    </div>
                </div>

                <div class="row">
                    <div class="col-8 mt-3">
                        @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                        @endif
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col table-wrap">
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Venue Name</th>
                                    <th>Address</th>
                                    <th>Event Id</th>
                                    <th>View</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($venues as $venue)
                                    <tr>
                                        <td>{{ $venue->id }}</td>
                                        <td>{{ $venue->name }}</td>
                                        <td>{{ $venue->address }}</td>
                                        <td>{{ $venue->event_id }}</td>
                                        <td>
                                            <a href="{{ route('venues.show',$venue->id) }}" class="btn btn-warning">View</a>
                                        </td>
                                        <td>
                                            <a class="btn btn-success" href="">Edit</a>
                                        </td>
                                        <td>
                                            <form action="{{ route('venues.destroy',$venue->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger" type="submit">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
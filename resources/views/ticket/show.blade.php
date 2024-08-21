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
                <h1>Ticket Detail</h1>
            </div>
            <div class="row">
                <div class="col-6 mt-4">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Event Type</th>
                                <th>Price</th>
                                <th>Event Id</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $ticket->id }}</td>
                                <td>{{ $ticket->type }}</td>
                                <td>{{ $ticket->price }}</td>
                                <td>{{ $ticket->event_id }}</td>
                            </tr>
                        </tbody>
                    </table>

                    <a class="btn btn-success" href="">Edit</a>
                    <a class="btn btn-primary" href="{{ route('tickets.index') }}">Back To List</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
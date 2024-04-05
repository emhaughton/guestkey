<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"/>
        <link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
        <link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    </head>
    <body>
        
    <div class="container mt-5">
        <h2 class="mb-4">Reservation</h2>
        <table id="myTable" class="table table-bordered">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Checkin</th>
                    <th>Chekout</th>
                    <th>Listing</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>

    </body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
    <script type="text/javascript">
        $(function () {
            var table = $('#myTable').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('reservation.index') }}",
                columns: [
                    {data: 'first_name', name: 'first_name'},
                    {data: 'checkin', name: 'checkin'},
                    {data: 'chekout', name: 'chekout'},
                    {data: 'listing_id', name: 'listing_id'},
                    {data: 'action', name: 'action'},
                ]
            });
            });
    </script>
</html>
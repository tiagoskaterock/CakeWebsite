<!DOCTYPE html>
<html>

<head>
    <title>Cake PHP / Materialize CSS</title>
    <!-- Add Materialize CSS CDN link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Include jQuery and DataTables CSS and JS from a CDN -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

    <style type="text/css">
        body {
            font-size: 1rem;
        }
    </style>

</head>

<body>
    <div>
        <h1>Users</h1>
        <table id="myTable">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Username</th>
                    <th data-orderable="false"></th>
                    <th data-orderable="false"></th>
                    <th data-orderable="false"></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user): ?>
                    <tr>
                        <td><?= $user->name ?></td>
                        <td><?= $user->email ?></td>
                        <td><?= $user->username ?></td>

                        <td>
                            <button class="btn btn-xs material-symbols-outlined">
                            visibility
                            </button>
                        </td>

                        <td>
                            <button class="btn btn-xs material-symbols-outlined">
                            edit
                            </button>
                        </td>

                        <td>
                            <button class="btn btn-xs material-symbols-outlined">
                            delete
                            </button>
                        </td>
                    </tr>                    
                <?php endforeach ?>
            </tbody>
        </table>
    </div>

    <!-- Add Materialize JavaScript CDN link -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
    </script>
</body>

</html>

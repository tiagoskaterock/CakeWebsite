<?php use Cake\Routing\Router; ?>
<?= $this->Flash->render() ?>

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
        .message {
          padding: 16px;
          border-radius: 4px;
          margin-bottom: 16px;
          font-weight: bold;
          color: #fff;
        }

        .message.success {
          background-color: #4caf50;
        }

        .message.error {
          background-color: #f44336;
        }

        .message.warning {
          background-color: #ff9800;
        }

        .message.info {
          background-color: #2196f3;
        }
    </style>

</head>

<body>
    <div class="container">
        <h1>Users</h1>

        <a 
            class="btn"
            href="<?= Router::url('/users/add') ?>">
            New User
        </a>

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
                            <a href="#">
                                <button class="btn btn-xs material-symbols-outlined">
                                visibility
                                </button>                                
                            </a>
                        </td>

                        <td>
                            <a 
                                href="#"
                                title="Add user">
                                <button class="btn btn-xs material-symbols-outlined">
                                edit
                                </button>                                
                            </a>
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

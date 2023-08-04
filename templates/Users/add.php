<?php use Cake\Routing\Router; ?>
<?= $this->Flash->render() ?>

<!DOCTYPE html>
<html>

<head>
    <title>Cake PHP / Materialize CSS</title>
    <!-- Add Materialize CSS CDN link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

    <style type="text/css">
        body {
            font-size: 1rem;
        }
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
          color: white;
        }

        .message.warning {
          background-color: #ff9800;
        }

        .message.info {
          background-color: #2196f3;
        }
        .error {
          color: #f44336;
        }
    </style>

</head>

<body>
    <div class="container">
        <h1>Add User</h1>

        <?= $this->Form->create($user) ?>

				<?= $this->Form->control('name') ?>

				<?= $this->Form->control('email') ?>

				<?= $this->Form->control('username') ?>

				<?= $this->Form->control('password') ?>

				<button type="submit" class="btn">Save</button>

				<?= $this->Form->end ?>
        
    </div>

    <!-- Add Materialize JavaScript CDN link -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

</body>

</html>

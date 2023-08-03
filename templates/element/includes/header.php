<?php use Cake\Routing\Router; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>
    Cake Website | <?= isset($page_title) ? $page_title : null ?>    
  </title>

  <link rel="icon" type="image/x-icon" href="<?= $this->Url->image('assets/favicon.ico') ?>" />
  
  <link href="<?= $this->Url->css('styles') ?>" rel="stylesheet" />

  <style type="text/css">
    /* Custom CSS for Paginator */
    .paginator {
      display: flex;
      justify-content: center;
      margin-top: 20px;
    }

    .pagination {
      list-style: none;
      padding: 0;
      display: flex;
      align-items: center;
    }

    .pagination li {
      margin: 0 5px;
    }

    .pagination a,
    .pagination span {
      display: inline-block;
      padding: 5px 10px;
      text-decoration: none;
      color: #333;
      background-color: #f0f0f0;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    .pagination a:hover {
      background-color: #ddd;
    }

    .pagination .current {
      font-weight: bold;
      background-color: #007bff;
      color: #fff;
    }

    .pagination .disabled {
      pointer-events: none;
      opacity: 0.6;
    }
  </style>
</head>
<body>

  <!-- Responsive navbar-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="#!">Start Bootstrap</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

          <li class="nav-item">
            <a class="nav-link" href="<?= Router::url('/') ?>">
              Home
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#">
              About
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#">
              Contact
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?= Router::url('/posts') ?>">
              Blog
            </a>
          </li>

        </ul>
      </div>
    </div>
  </nav>
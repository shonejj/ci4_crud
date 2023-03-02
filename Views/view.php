<?php

$this->session = \Config\Services::session();

$uname = $this->session->get('logname');
$un = $uname['uname'];

?>
<html>

<head>
  <title>view</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <title>PHP Pagination Example</title>
  <style>
    .container {
      max-width: 1000px
    }

    .custom-select {
      max-width: 150px
    }

    .pagination-container {
      display: flex;
      justify-content: center;
    }

    .pagination-container a {
      margin: 0 5px;
    }






    /* Table */
    table {
      border-collapse: collapse;
      width: 100%;
    }

    table th,
    table td {
      padding: 8px;
      text-align: left;
      border-bottom: 1px solid #ddd;
    }

    table th {
      background-color: #f2f2f2;
      font-weight: bold;
    }

    .search-box {
      display: flex;
      align-items: center;
      width: 100%;
      max-width: 400px;
      margin: 0 auto;
      border: 1px solid #ccc;
      border-radius: 4px;
      overflow: hidden;
    }

    .search-box input[type="text"] {
      flex: 1;
      padding: 12px 20px;
      border: none;
      font-size: 16px;
      outline: none;
    }

    .search-box button {
      padding: 12px 20px;
      background-color: #4CAF50;
      color: white;
      border: none;
      border-radius: 0 4px 4px 0;
      cursor: pointer;
    }

    h1 {
      display: flex;
      justify-content: center;
      align-items: center;

    }


    button {
      color: #090909;
      padding: 0.7em 1.7em;
      font-size: 18px;
      border-radius: 0.5em;
      background: #e8e8e8;
      border: 1px solid #e8e8e8;
      transition: all .3s;
      box-shadow: 6px 6px 12px #c5c5c5,
        -6px -6px 12px #ffffff;
    }

    button:active {
      color: #666;
      box-shadow: inset 4px 4px 12px #c5c5c5,
        inset -4px -4px 12px #ffffff;
    }
  </style>
</head>

<body>

  <h2><a href="<?= base_url('/redirect4') ?>?param1=<?= $un ?>" class="button">back</a></h2>

  <h1>welcome
    <?php echo $un; ?>
  </h1>
  <form method="post" action="<?= base_url('search') ?>">
    <input type='text' class="search-box" placeholder="search" name="search" />
  </form>
  <table>
    <tr>
      <th>Title</th>
      <th>Description</th>
      <th>User Name</th>
      <th>post</th>
      <th>delete</th>
      <th>update</th>
    </tr>
    <?php foreach ($check as $value): ?>
      <tr>
        <td>
          <?= $value['title']; ?>
        </td>
        <td>
          <?= $value['discription']; ?>
        </td>
        <td>
          <?= $value['uname']; ?>
        </td>
        <td><img src="<?php echo 'public/upload/' . $value['file']; ?>" width="100px" height="100px"></td>

        <?php
        if ($value['uname'] == $un) {
          ?>
          <td><a href='/delete?id=<?php echo $value['id'] ?>'>delete</a></td>
          <td><a href='/redirect3?id=<?php echo $value['id'] ?>'>edit</a></td>

        <?php
        }
        ?>
        </td>
      </tr>
    <?php endforeach; ?>
  </table>

  <div class="pagination-container">

    <?php echo $pager->links(); ?>

  </div>
  <script>
    document.getElementById("backButton").addEventListener("click", function () {
      window.href.location = "<?= base_url('/readredirect') ?>";  
  
});
  </script>

</body>

</html>
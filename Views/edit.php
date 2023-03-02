<?php

$this->session = \Config\Services::session();

$uname = $this->session->get('logname');
$un = $uname['uname'];
$value = $check;

?>
<!DOCTYPE html>
<html>

<head>
  <title>edit</title>
  <style>
    .card {
      background-color: #f1f1f1;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
      transition: transform 0.3s;
      width: 80%;
      margin: 0 auto;
    }

    .card:hover {
      transform: translateY(-5px);
    }

    form {
      display: flex;
      flex-direction: column;
    }

    label {
      font-weight: bold;
      margin-top: 10px;
    }

    input[type="text"],
    textarea {
      border: none;
      border-radius: 5px;
      padding: 10px;
      margin-bottom: 20px;
      font-size: 16px;
    }

    input[type="submit"] {
      background-color: #34495e;
      color: white;
      border: none;
      border-radius: 5px;
      padding: 10px;
      cursor: pointer;
      font-size: 16px;
    }

    input[type="submit"]:hover {
      background-color: #95a5a6;
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
  <div class="card">
    <button id="backButton">Back</button>
    <h1>Update Data</h1>
    <img src="<?php echo "public/upload/" . $value['file']; ?>" width="1000px" height="500px">
    <form method="post" action="update?id=<?php echo $value['id'] ?>">
      <label for="title">Title</label>
      <input type="text" id="title" name="title" placeholder="<?= $value['title']; ?>"
        value="<?= $value['title']; ?>"><br>
      <label for="discription">Discription:</label>
      <textarea id="discription" name="discription"><?= $value['discription']; ?></textarea><br>

      <input type="submit" value="Update" name="update">
    </form>
  </div>
  <script>
    document.getElementById("backButton").addEventListener("click", function () {
      window.history.back();
    });
  </script>
</body>

</html>
<?php
$this->session = \Config\Services::session();
$uname = $this->session->get('logname');
$un = $uname['uname'];
?>
<!DOCTYPE html
  PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
  <title>admin home</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    form {

      max-width: 500px;
      margin: 0 auto;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      font-family: Arial, sans-serif;
      color: #333;
    }

    label {
      display: block;
      margin-bottom: 10px;
      font-weight: bold;
    }

    input[type="text"],
    textarea {
      padding: 10px;
      border: 2px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
      width: 100%;
      margin-bottom: 20px;
      font-size: 16px;
    }

    button[type="submit"] {
      background-color: #4CAF50;
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      font-size: 16px;
    }

    button[type="submit"]:hover {
      background-color: #45a049;
    }

    h1 {
      display: flex;
      justify-content: center;
      align-items: center;
    }

    h2 {
      display: flex;
      justify-content: center;
      align-items: center;
    }

    a {
      position: relative;
      color: #0077cc;
      text-decoration: none;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 10vh;
    }

    a::before {
      content: '';
      position: fixed;
      width: 100%;
      height: 1px;
      bottom: 0;
      left: 0;
      background-color: #0077cc;
      visibility: hidden;
      transform: scaleX(0);
      transition: all 0.2s ease-in-out 0s;

    }

    a:hover::before {
      visibility: visible;
      transform: scaleX(1);
    }

    /* Styles for the label */
    .label1 {
      display: block;
      /* Display the label as a block element */
      margin-bottom: 10px;
      /* Add some spacing below the label */
    }

    /* Styles for the button */
    .btn {
      display: inline-block;
      padding: 10px 20px;
      background-color: #4CAF50;
      color: white;
      font-size: 16px;
      border: none;
      cursor: pointer;
      position: relative;
      overflow: hidden;
      transition: all 0.3s;
    }

    /* Styles for the button's hover state */
    .btn:hover {
      background-color: #3e8e41;
    }

    /* Styles for the button's active state */
    .btn:active {
      background-color: #3e8e41;
      transform: scale(0.95);
    }

    /* Styles for the button's focus state */
    .btn:focus {
      outline: none;
      box-shadow: 0 0 0 3px rgba(0, 0, 0, 0.2);
    }

    /* Styles for the button's after element */
    .btn::after {
      content: "";
      position: absolute;
      background-color: rgba(255, 255, 255, 0.2);
      width: 100%;
      height: 100%;
      top: 0;
      left: 0;
      transform: scaleX(0);
      transform-origin: right;
      transition: transform 0.3s;
    }

    /* Styles for the button's after element when hovering */
    .btn:hover::after {
      transform: scaleX(1);
      transform-origin: left;
    }


    .align {
      position: fixed;
      top: 0;
      right: 0;
      text-align: right;
    }

    .left-div {
      float: left;
      width: 50%;
      height: 100vh;
      background-color: #eee;
    }

    .right-div {
      float: right;
      width: 50%;
      height: 100vh;
      background-color: #ddd;
    }

    .left-div-s {
      float: left;
      width: 50%;
    }
  </style>
</head>

<body>
  <div class="fix">
    <div class="align">
      <h3><a href="<?= base_url('/logout') ?>?param1=<?= $un ?>" class="button">logout</a></h3>
    </div>
    <h1>welcome
      <?php echo $un; ?>
    </h1>
    <div>
      <div class="left-div">
        <h2> upload post : </h2>
        <form action="<?= base_url('/upload1') ?>" method="post" enctype="multipart/form-data">
          <label for="title">Title:</label>
          <input type="text" id="title" name="title" required>
          <hr>
          </br>
          <label for="description">Description:</label>
          <textarea id="content" name="discription" rows="10" required></textarea>
          <hr>
          </br>
          <div class="left-div-s">
            <label for="category">Select a category:</label>
            <select id="category" name="category">
              <option value="news">News</option>
              <option value="events">Events</option>
              <option value="opinions">Opinions</option>
              <option value="reviews">Reviews</option>
              <option value="tutorials">Tutorials</option>
              <option value="others">others</option>
            </select>
            </br>
          </div>
          <label class="lable1" for="title">image:</label>
          <input class="btn" type="file" id="file" name="file">
          <hr>



          <button type="submit">Submit</button>
        </form>
      </div>
      <div class="right-div">
        <a href="<?= base_url('/view') ?>">view all </a>

        <img src="<?= base_url('1677503936_cac17593adc85032fb97.png') ?>" alt="Image" width="615px" height="500px">

      </div>
    </div>
  </div>
</body>

</html>
<html>
    <head>
        <title> registeration page </title>
        <style>
.form-box {
  max-width: 300px;
  background: #f1f7fe;
  overflow: hidden;
  border-radius: 16px;
  color: #010101;
}

.form {
  position: relative;
  display: flex;
  flex-direction: column;
  padding: 32px 24px 24px;
  gap: 16px;
  text-align: center;
}

/*Form text*/
.title {
  font-weight: bold;
  font-size: 1.6rem;
}

.subtitle {
  font-size: 1rem;
  color: #666;
}

/*Inputs box*/
.form-container {
  overflow: hidden;
  border-radius: 8px;
  background-color: #fff;
  margin: 1rem 0 .5rem;
  width: 100%;
}

.input {
  background: none;
  border: 0;
  outline: 0;
  height: 40px;
  width: 100%;
  border-bottom: 1px solid #eee;
  font-size: .9rem;
  padding: 8px 15px;
}

.form-section {
  padding: 16px;
  font-size: .85rem;
  background-color: #e0ecfb;
  box-shadow: rgb(0 0 0 / 8%) 0 -1px;
}

.form-section a {
  font-weight: bold;
  color: #0066ff;
  transition: color .3s ease;
}

.form-section a:hover {
  color: #005ce6;
  text-decoration: underline;
}

/*Button*/
.form button {
  background-color: #0066ff;
  color: #fff;
  border: 0;
  border-radius: 24px;
  padding: 10px 16px;
  font-size: 1rem;
  font-weight: 600;
  cursor: pointer;
  transition: background-color .3s ease;
}

.form button:hover {
  background-color: #005ce6;
}

/*center */

.container {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
}
.card {
  width: 400px; /* Set the width of the card */
  margin: 0 auto; /* Set the left and right margins to auto */
}



        </style>

</head>
<body>
  <div class="container ">
    <div class="card">
<div class="form-box">
<form class="form" action="<?= base_url('login') ?>"  method='post'>
    <span class="title">LOGIN </span>
    <span class="subtitle">Login with yor account details</span>
    <div class="form-container">
      <input type="text" class="input" placeholder="user Name" name="uname" />
			<input type="password" class="input" placeholder="Password" name="pswd" />
    </div>
    <input type="submit" class="button" value="login" >
</form>
<div class="form-section">
  <p>new user , create a account <a href="<?= base_url('redirect1') ?>">sign up</a> </p>
</div>
</div>
</div>
</div>
</body>
</html>
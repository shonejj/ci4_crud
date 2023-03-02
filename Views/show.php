<!-- <!DOCTYPE html>
<html>
<head>
    <title>trail</title>
    <style>
.card {
  border: .05rem solid black;
  height: 210px;
  width: 180px;
  overflow: hidden;
  position: relative;
}

.card:hover .img1 {
  transform: scale(1.5, 1.2) translate(5px, -30px) rotate(5deg);
}

.card:hover .img1::before {
  transition: transform 1s 0.4s;
  transform: translateX(400px) skewX(-10deg);
}

.card:hover .img2 {
  transform: translateY(120%);
}

.card .img {
  position: absolute;
  width: 100%;
  height: 50%;
  background: linear-gradient(180deg, rgb(65, 122, 255), rgb(23, 65, 193));
  background-size: 100% 200%;
  transition: 0.3s all;
}

.card .img1 {
  top: 0;
  right: 0;
  position: relative;
}

.card .img1::before {
  content: "";
  position: absolute;
  top: 0;
  left: -25px;
  height: 100%;
  width: 10px;
  transform: skewX(-10deg);
  background-image: linear-gradient(to right, rgb(32, 151, 248), rgba(255, 255, 255, 0.9));
}

.card .img2 {
  bottom: 0;
  right: 0;
  background-position: bottom center;
}

.card__content {
  margin-left: 1rem;
  margin-top: 1rem;
  transform: translateX(-130%);
  transition: .5s ease-in-out transform .3s;
  position: relative;
  z-index: -1;
}

.card__content span {
  display: block;
}

.card__content .name {
  font-weight: bold;
  font-size: 1.7rem;
}

.card__content .job {
  color: #B2B2B2;
}

.card:hover .card__content {
  transform: translateX(0);
}
        </style>
</head>
<body>

<div class="card">
    <div class="img img1"></div>
    <div class="img img2"></div>
    <div class="card__content">
        <span class="name">John Doe</span>
        <span class="job">Software engineer</span>
    </div>
</div>
</body>
</html>


 -->



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>student view</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

.flex-container {
  display: flex;
  flex-wrap: wrap;
  background-color: DodgerBlue;
  justify-content: space-between;
  align-items: center;
  padding:30px;
 
  
}
}

.flex-container  div {
  background-color: #f1f1f1;
  width: 100px;
  margin: 10px;
  text-align: center;
  line-height: 75px;
  font-size: 30px;
  border:dotted;
  
}


.flex
{
margin-top:20px;
display:flex;
column-gap:30px;
flex-wrap: wrap;
margin-left:20px;

}


.flexx
{
width:200px;
height:200px;
}


h1
{
color:#003366;
}
pr
{
color:#000000;
}

* {
  margin:0;
  padding:0;

}

.card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 40%;
}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.container {
  padding: 2px 16px;
  background-color:#CCCCCC
}

</style>
</head> 
<body>

<div class="bg">


<div class="flex">



<div>
    <div class="flexx">
    <h4><b>  echo $row['name'];  </b></h4> 
    <p>   echo $row['email'];  </p> 
	<p>   echo $row['gender'];  </p>
	<a href="payment.php?id= echo $row['id'];">edit</a>
	<a href="cart.php?id= echo $row['id'];?>&price=   echo $row['price'];?> " >delete</a>
	</br>
	 
	</div>
</div>


</div>

</div>
</body>
</html>

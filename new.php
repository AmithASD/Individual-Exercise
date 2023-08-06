<html>
<head>
<title>New</title>	
<style>
#first{position: fixed;
 color: white;

}

.logo{position: fixed;
	top: 20px;
	left: 60px;
	

}
.first{position: fixed;
		top: 5px;
		left: 450px;
		list-style-type: none;
		text-align: center;
		float: left;
}

li.a{float: left;

}
li a{display: block;
  color: white;
  font-size: 20px;
  text-align: center;
  margin: 25px;
  text-decoration: none;
	
}
li a:hover{
	color: sandybrown;
}
h1{color: white;
	position: relative;
	top: 100px;
	left: 550px;


}
#one{position: absolute;
	top: 250px;
	left: 200px;
	background: dimgray;
	width: 250px;
}
#two{position: absolute;
	top: 250px;
	left: 500px;
	background: dimgray;
	width: 250px;
}
#three{position: absolute;
	top: 250px;
	left: 800px;
	background: dimgray;
	width: 250px;
}
#four{position: absolute;
	top: 250px;
	left: 1100px;
	background: dimgray;
	width: 250px;
}
button{position: absolute;
	top: 5px;
	left: 200px;
	background: orange;

}
.new{position: relative;
	top: 15px;
	left: 60px;

}
.price{color: yellow;

}




.footer{position: absolute;
	top: 350px;
	left: 100px;
   margin-top: 0px;
   width: 150%;
   padding: 10px 15%;
   color: white;
   display: flex;
}
  .footer div{
   text-align: center;
}
.col-2{
   flex-grow: 0.3;
}
.col-4{
   flex-grow: 0.3;
}
.footer div h4{
font-weight : 300px;
margin-bottom: 30px;
letter-spacing: 1px;
}
.ptext{color: black;
	margin: 30px;

}
.col-2 a{display: block;
   text-decoration: none;
   color: white;
   margin-bottom: 10px;

}
.col-3 a{display: block;
   text-decoration: none;
   color: white;
   margin-bottom: 10px;

}

/*footer css*/

form input{
   width: 400px;
   height: 45px;
   border-radius: 4px;
   text-align: center;
   margin-top: 20px;
   margin-bottom: 40px;
   outline: none;
   border: none;
}
.Social-icons{margin-top: 30px;

}
.Social-icons i{
   font-size: 22px;
   margin: 10px;
   cursor: pointer;
}
#head{background-color: orange;
   width: 180%;
   height: 200px;
  margin: 80px 100px;

}
h5{margin-left:  80px;
   margin-top:  120px;
   font-size: 25px;

}
.Subcribe{position: absolute;
   top: 730px;
   left: 590px;
}
.subbutton{position: absolute;
	top: 18px;
	left: 405px;
	border: none;
  padding: 16px;
  background: dimgray;
  width:30%;
  color: black;
  font-family: 'TitilliumText22LRegular', Arial, sans-serif;
  font-weight:bold;
  font-size:100%;
  border-radius: 10px;
  text-decoration: none;
}

#five{position: absolute;
		top: 800px;

}
.section{position: absolute;
		top: -580px;
		left: -50px;

}
</style>

</head>	

<body bgcolor="black">
<div id="first">
	<img src="img/favicon.png" width="50px" height="50px">
	<p class="logo"><b>TUDOR </b></p>

	<ul class="first">
	<li class="a"><a href="home.php"> Home </a></li>
	<li class="a"><a href="new.php">New </a></li>
	<li class="a"><a href="product.php">Product </a></li>
	<li class="a"><a href="login.php">Login </a></li>
</ul>

</div>	

<h1>NEW ARRIVALS</h1>

<div id="one">
	<button>NEW</button>
	<img class="new" src="img/new1.png" width="130px" height="130px">
	<p class="name" align="center"> LONGINES ROSE</p>
	<p class="price" align="center"> LKR 85,000</p>

</div>

<div id="two">
	<button>NEW</button>
	<img class="new" src="img/new2.png" width="130px" height="130px">
	<p class="name" align="center"> JAZZMASTER</p>
	<p class="price" align="center"> LKR 155,000</p>

</div>

<div id="three">
	<button>NEW</button>
	<img class="new" src="img/new3.png" width="130px" height="130px">
	<p class="name" align="center"> DREYFUSS GOLD</p>
	<p class="price" align="center"> LKR 185,000</p>

</div>

<div id="four">
	<button>NEW</button>
	<img class="new" src="img/new4.png" width="130px" height="130px">
	<p class="name" align="center"> PORTUGUESE ROSE</p>
	<p class="price" align="center"> LKR 125,000</p>

</div>



<div id="five">
      <div id="head">
         
         <h5>Subcribe Our <br> Newsletter</h5>
         <p class="ptext">Don't miss out on your discounts.Subcribe to our email <br> newsletter to get the best offers.discounts,coupons,gifts <br> and much more.</p>

         <form class="section">
         
         <p class="Subcribe"><input type="email" placeholder="Enter your email" required><button class="subbutton">SUBSCRIBE</button></p>
         
         </form>
      </div>

   <div class="footer"> 
      
      <div class="col-1">
         <h4>Our information</h4>
         <p class="ptext1"> No 365,Liberty Plazza <br> Colombo 03 <br> Srilanka <br> 0112345655 </p>
      </div>

      <div class="col-2">
         <h4>About Us</h4>
         <p> <a href=""> Support Center</a></p>
         <p> <a href=""> Support Center</a></p>
         <p> <a href=""> Support Center</a></p>
      </div>

      <div class="col-3">
         <h4>Product</h4>
        <p> <a href=""> Support Center</a></p>
        <p> <a href=""> Support Center</a></p>
      </div>

      <div class="col-4">
         <h4>Social</h4>
         <div class="Social-icons">
        <i class="fa fa-facebook"></i>
        <i class="fa fa-twitter"></i>
        <i class="fa fa-instagram" style="font-size:48px;color:white;"></i>
        </div>
      </div>
</div>
</div>
</body>

</html>

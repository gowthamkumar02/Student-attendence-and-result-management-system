<html>
<head>
<style>
   .btn{
    padding: 0px 0px;
 width:270px;
 height:250px;
    border-radius: 20px;
    cursor: pointer;
    border:none;
    margin-top:auto;
    margin-left: 400px;
   }
   .btn1{
    width:270px;
 height:250px;
    padding: 0px 0px;
    border-radius: 20px;
    cursor: pointer;
    border:none;
    margin-top:auto;
    margin-left: 75px;
   }
  .stimg {
  border-radius: 50%;
  border:1px solid black;
  margin-left:40px;
  margin-top:20px;
  display: inline-block;
  vertical-align: top;
  float:left;
}
.stdt{
  display: inline-block;
  

}
.mdiv{
  border-radius:10px;
  background-image:url("https://images.pexels.com/photos/82256/pexels-photo-82256.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2");
  \\background:url("https://images.pexels.com/photos/696644/pexels-photo-696644.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2");
  background-size: contain;
  background-repeat:no-repeat;
  background-size: cover;
}
.det{
  float:right;
}
.brd{
  height: 260px;
  width: 1200px;
  border: none;
  border-radius: 10px;
  margin-left:100px;
  margin-right:100px;
  background-color:white;
  \\background:url("https://www.seekpng.com/png/detail/46-468911_orange-lines-png.png");
  //background:url("https://images.pexels.com/photos/1764702/pexels-photo-1764702.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2");
  background-repeat: no-repeat;
  background-size:contain;
  background-size:1200px 260px;
  box-shadow: 0 12px 16px 0 black, 0 17px 50px 0 rgba(0,0,0,0.19);
}
.brd:hover {
  box-shadow: 0 12px 16px 0 black, 0 17px 50px 0 rgba(0,0,0,0.19);
}
   .bimg {
    margin-top:10px;
  border-radius: 15px;
}
.topimg {
  border-radius: 5px;
}
   .btn:hover {
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
}
.btn1:hover {
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
}
.topm{
  background-color:black;
}
.dropbtn {
  background-color: white;
  color: black;
  padding: 8px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}
.dropbtn1 {
  background-color: white;
  color: black;
  padding: 8px;
  font-size: 16px;
  border: none;
  cursor: pointer;
  margin-left:1200px;
  margin-right:0px;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: black;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: white;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: green
}

.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown:hover .dropbtn {
  background-color: black;
}
.dropbtn:hover {
  background-color: green;
  color:black;
}
h1 {
			text-align: center;
			color: red;
			font-size: xx-large;
			font-family: 'Gill Sans', 'Gill Sans MT',
			' Calibri', 'Trebuchet MS', 'sans-serif';
 text-shadow: -1px 1px 0 white,
                          1px 1px 0 white,
                         1px -1px 0 white,
                        -1px -1px 0 white;
		}
        .bck{
  background-image:url("https://images.pexels.com/photos/1007025/pexels-photo-1007025.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2");
  background-size: contain;
  background-repeat:no-repeat;
  background-size: cover;
  height:600px;
}
</style>
</head>
<body>
 
<hr>
    <div class="dropdown">
  <button class="dropbtn"><img class="topimg"src="https://e7.pngegg.com/pngimages/784/1020/png-clipart-hamburger-button-computer-icons-menu-menu-black-bar.png"  width="50px" height="30px"></button>
  <div class="dropdown-content">
  <a href="adminpage.php">Upload Results</a>
  <a href="cse2.php">Upload Attendence</a>
  
  </div>

</div>
<button class="dropbtn"><img class="topimg"src="https://cdn-icons-png.flaticon.com/512/60/60817.png"  width="30px" height="30px"></button>

<button class="dropbtn1"><img class="topimg"src="https://www.citypng.com/public/uploads/preview/free-login-logout-black-icon-png-11641484336leezglmsx8.png"  width="30px" height="30px" onclick="window.location.href='adminlogin.php'"></button><hr>
<div class="bck">
    <br><br><br><br><br><br>
<button class="btn"><img class="bimg" src="https://cdn.vectorstock.com/i/1000x1000/49/06/online-student-webinar-or-e-learning-concept-vector-31924906.webp" width="200px" height="180px" onclick="window.location.href='adminpage.php'"><br><h2> Upload Results</h2></button>
<button class="btn1"><img class="bimg" src="https://www.timelabs.in/images/moduleBox/ATTENDANCE.png" width="200px" height="180px"onclick="window.location.href='cse2.php'"><br><h2> Upload Attendence </h2></button>
    </div>
</body>
    </html>
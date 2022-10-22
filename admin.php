<!DOCTYPE html>
<html lang="en" dir="ltr">
    
</html>

<head>
    <meta charset="utf-8">
    <title>FAT BOY KITCHEN</title>
    <link rel="stylesheet" href="css/admin.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">
</head>

<body>

    
    <!--navbar-->

    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.html" class="logo">FAT BOY KITCHEN<em></em></a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="index.html" class="active">Home</a></li>




                            <li class="main-button1"><a href="login.html">Log out</a></li>
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->





    <!--form-->
    <div class="add">
        <section id="applynow">
        <h1>Admin Panel</h1>
            <div class="leftBox">
              <div class="content">
                  
                <div class="box">
                  <a href="admin_add_category.html">
                    <button class="turquoise">Add Category</button>
                   </a>
                    <a href="admin_insert.php">
                      <button class="emerald">Insert New Food Item</button>
                    </a>   
                    <a href="admin_modify_item.php">
                      <button class="peterriver">Modify Food Item</button>
                    </a> 
                   
                      
                       
                    </a> 
                </div>
              </div>
          </section>

    </div>
 <!--end form-->



 
</body>

</html>


<style>
  
  /* 
---------------------------------------------
header
--------------------------------------------- 
*/
body{
    background: url("http://rybd.com/wp-content/uploads/2014/12/blue-polygon.png");
  } 

.background-header {
    background: rgba(250, 250, 250, 0.99) !important;
    height: 80px!important;
    position: fixed!important;
    top: 0px;
    left: 0px;
    right: 0px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.15)!important;
}

.background-header .logo,
.background-header .main-nav .nav li a {
    color: #232d39!important;
}

.background-header .main-nav .nav li:last-child a {
    color: #fff !important;
}

.background-header .main-nav .nav li:last-child a:hover {
    color: #fff!important;
}

.background-header .main-nav .nav li:hover a {
    color: #ed563b!important;
}

.background-header .nav li a.active {
    color: #ed563b!important;
}

.header-area {
    position: absolute;
    top: 0px;
    left: 0px;
    right: 0px;
    z-index: 100;
    height: 90px;
    background: rgb(1, 13, 65);
    -webkit-transition: all .5s ease 0s;
    -moz-transition: all .5s ease 0s;
    -o-transition: all .5s ease 0s;
    transition: all .5s ease 0s;
    position: fixed;
}

.header-area .main-nav {
    min-height: 90px;
    position: fixed;
}

.header-area .main-nav .logo {
    line-height: 80px;
    color: #fff;
    font-size: 32px;
    font-weight: 800;
    text-transform: uppercase;
    float: left;
    -webkit-transition: all 0.3s ease 0s;
    -moz-transition: all 0.3s ease 0s;
    -o-transition: all 0.3s ease 0s;
    transition: all 0.3s ease 0s;
}

.header-area .main-nav .logo em {
    font-style: normal;
    color: #ed563b;
    font-weight: 900;
}

.header-area .main-nav .nav {
    float: right;
    margin-top: 27px;
    margin-right: 0px;
    background-color: transparent;
    -webkit-transition: all 0.3s ease 0s;
    -moz-transition: all 0.3s ease 0s;
    -o-transition: all 0.3s ease 0s;
    transition: all 0.3s ease 0s;
    position: relative;
    z-index: 999;
    padding-left: 600px;
}

.header-area .main-nav .nav li {
    padding-left: 20px;
    padding-right: 20px;
}

.header-area .main-nav .nav li a {
    display: block;
    font-weight: 500;
    font-size: 13px;
    color: #7a7a7a;
    text-transform: uppercase;
    -webkit-transition: all 0.3s ease 0s;
    -moz-transition: all 0.3s ease 0s;
    -o-transition: all 0.3s ease 0s;
    transition: all 0.3s ease 0s;
    height: 40px;
    line-height: 40px;
    border: transparent;
    letter-spacing: 1px;
}

.header-area .main-nav .nav li a {
    color: #fff;
}

.header-area .main-nav .nav li:last-child a {
    display: inline-block;
    font-size: 13px;
    padding: 11px 17px;
    background-color: #ed563b;
    color: #fff;
    text-align: center;
    font-weight: 400;
    letter-spacing: 0px;
    text-transform: uppercase;
    transition: all .3s;
    height: auto;
    line-height: 20px;
}

.header-area .main-nav .nav li:last-child a:hover {
    background-color: #f9735b;
    opacity: 1;
}

.header-area .main-nav .nav li:hover a,
.header-area .main-nav .nav li a.active {
    color: #ed563b!important;
    opacity: 1;
}

.background-header .main-nav .nav li:hover a,
.background-header .main-nav .nav li a.active {
    color: #ed563b!important;
    opacity: 1;
}

.header-area .main-nav .menu-trigger {
    cursor: pointer;
    display: block;
    position: absolute;
    top: 23px;
    width: 32px;
    height: 40px;
    text-indent: -9999em;
    z-index: 99;
    right: 40px;
    display: none;
}

.header-area .main-nav .menu-trigger span,
.header-area .main-nav .menu-trigger span:before,
.header-area .main-nav .menu-trigger span:after {
    -moz-transition: all 0.4s;
    -o-transition: all 0.4s;
    -webkit-transition: all 0.4s;
    transition: all 0.4s;
    background-color: #1e1e1e;
    display: block;
    position: absolute;
    width: 30px;
    height: 2px;
    left: 0;
}

.background-header .main-nav .menu-trigger span,
.background-header .main-nav .menu-trigger span:before,
.background-header .main-nav .menu-trigger span:after {
    background-color: #1e1e1e;
}

.header-area .main-nav .menu-trigger span:before,
.header-area .main-nav .menu-trigger span:after {
    -moz-transition: all 0.4s;
    -o-transition: all 0.4s;
    -webkit-transition: all 0.4s;
    transition: all 0.4s;
    background-color: #1e1e1e;
    display: block;
    position: absolute;
    width: 30px;
    height: 2px;
    left: 0;
    width: 75%;
}

.background-header .main-nav .menu-trigger span:before,
.background-header .main-nav .menu-trigger span:after {
    background-color: #1e1e1e;
}

.header-area .main-nav .menu-trigger span:before,
.header-area .main-nav .menu-trigger span:after {
    content: "";
}

.header-area .main-nav .menu-trigger span {
    top: 16px;
}

.header-area .main-nav .menu-trigger span:before {
    -moz-transform-origin: 33% 100%;
    -ms-transform-origin: 33% 100%;
    -webkit-transform-origin: 33% 100%;
    transform-origin: 33% 100%;
    top: -10px;
    z-index: 10;
}

.header-area .main-nav .menu-trigger span:after {
    -moz-transform-origin: 33% 0;
    -ms-transform-origin: 33% 0;
    -webkit-transform-origin: 33% 0;
    transform-origin: 33% 0;
    top: 10px;
}

.header-area .main-nav .menu-trigger.active span,
.header-area .main-nav .menu-trigger.active span:before,
.header-area .main-nav .menu-trigger.active span:after {
    background-color: transparent;
    width: 100%;
}

.header-area .main-nav .menu-trigger.active span:before {
    -moz-transform: translateY(6px) translateX(1px) rotate(45deg);
    -ms-transform: translateY(6px) translateX(1px) rotate(45deg);
    -webkit-transform: translateY(6px) translateX(1px) rotate(45deg);
    transform: translateY(6px) translateX(1px) rotate(45deg);
    background-color: #1e1e1e;
}

.background-header .main-nav .menu-trigger.active span:before {
    background-color: #1e1e1e;
}

.header-area .main-nav .menu-trigger.active span:after {
    -moz-transform: translateY(-6px) translateX(1px) rotate(-45deg);
    -ms-transform: translateY(-6px) translateX(1px) rotate(-45deg);
    -webkit-transform: translateY(-6px) translateX(1px) rotate(-45deg);
    transform: translateY(-6px) translateX(1px) rotate(-45deg);
    background-color: #1e1e1e;
}

.background-header .main-nav .menu-trigger.active span:after {
    background-color: #1e1e1e;
}

.header-area.header-sticky {
    min-height: 80px;
}

.header-area.header-sticky .nav {
    margin-top: 20px !important;
}

.header-area.header-sticky .nav li a.active {
    color: #ed563b;
}

@media (max-width: 1200px) {
    .header-area .main-nav .nav li {
        padding-left: 12px;
        padding-right: 12px;
    }
    .header-area .main-nav:before {
        display: none;
    }
}

@media (max-width: 767px) {
    .header-area .main-nav .logo {
        color: #1e1e1e;
    }
    .header-area.header-sticky .nav li a:hover,
    .header-area.header-sticky .nav li a.active {
        color: #ed563b!important;
        opacity: 1;
    }
    .header-area {
        background-color: #f7f7f7;
        padding: 0px 15px;
        height: 80px;
        box-shadow: none;
        text-align: center;
    }
    .header-area .container {
        padding: 0px;
    }
    .header-area .logo {
        margin-left: 30px;
    }
    .header-area .menu-trigger {
        display: block !important;
    }
    .header-area .main-nav {
        overflow: hidden;
    }
    .header-area .main-nav .nav {
        float: none;
        width: 100%;
        display: none;
        -webkit-transition: all 0s ease 0s;
        -moz-transition: all 0s ease 0s;
        -o-transition: all 0s ease 0s;
        transition: all 0s ease 0s;
        margin-left: 0px;
    }
    .header-area .main-nav .nav li:first-child {
        border-top: 1px solid #eee;
    }
    .header-area .main-nav .nav li:last-child {
        width: 100%;
        background-color: #ed563b;
        color: #fff;
    }
    .header-area .main-nav .nav li:last-child a {
        background-color: #ed563b!important;
    }
    .header-area .main-nav .nav li:last-child a:hover,
    .header-area .main-nav .nav li:last-child:hover a {
        background-color: #ed563b!important;
        color: #fff!important;
    }
    .header-area.header-sticky .nav {
        margin-top: 80px !important;
    }
    .header-area .main-nav .nav li {
        width: 100%;
        background: #fff;
        border-bottom: 1px solid #eee;
        padding-left: 0px !important;
        padding-right: 0px !important;
    }
    .header-area .main-nav .nav li a {
        height: 50px !important;
        line-height: 50px !important;
        padding: 0px !important;
        border: none !important;
        background: #f7f7f7 !important;
        color: #232d39 !important;
    }
    .header-area .main-nav .nav li:last-child a {
        color: #fff!important;
    }
    .header-area .main-nav .nav li a:hover {
        background: #eee !important;
        color: #ed563b!important;
    }
    .header-area .main-nav .nav li.submenu ul {
        position: relative;
        visibility: inherit;
        opacity: 1;
        z-index: 1;
        transform: translateY(0%);
        transition-delay: 0s, 0s, 0.3s;
        top: 0px;
        width: 100%;
        box-shadow: none;
        height: 0px;
    }
    .header-area .main-nav .nav li.submenu ul li a {
        font-size: 12px;
        font-weight: 400;
    }
    .header-area .main-nav .nav li.submenu ul li a:hover:before {
        width: 0px;
    }
    .header-area .main-nav .nav li.submenu ul.active {
        height: auto !important;
    }
    .header-area .main-nav .nav li.submenu:after {
        color: #3B566E;
        right: 25px;
        font-size: 14px;
        top: 15px;
    }
    .header-area .main-nav .nav li.submenu:hover ul,
    .header-area .main-nav .nav li.submenu:focus ul {
        height: 0px;
    }
}

@media (min-width: 767px) {
    .header-area .main-nav .nav {
        display: flex !important;
    }
}

/*add*/

.add{
    padding-top: 250px;
}


/*end add*/


   /*applynow with btn start*/
  
   .leftBox {
    grid-area: main;
    padding: 20px;
    box-sizing: border-box;
    background-color: rgb(133, 133, 133);
  }
  h1{
      text-align:center;
      color:white;
      padding-bottom:25px;
  }
  #applynow .leftBox .content {
    color: #fff;
    background-color: rgb(12, 6, 45);
    padding: 150px;
    transition: 0.5s;
   
  }
  
  #applynow .leftBox .content:hover {
    background-color: black;
  }
  
  #applynow .leftBox .content h2 {
    margin: 0;
    padding: 0;
    font-size: 50px;
    text-transform: uppercase;
    color: rgb(255, 255, 255);
  }
  
  #applynow .leftBox .content p {
    margin: 10px 0 0;
    padding: 0;
  }
  #applynow .leftBox .box {
    margin-bottom: 50px;
	margin-left: 80px;
  }
  
  /**************************************/
  

  button {
	border-top: 0;
	cursor: pointer;
  }
  
  .turquoise {
	margin-right: 70px;
	width: 170px;
	height: 70px;
	background: #1abc9c;
	border-bottom: #16a085 3px solid;
	border-left: #16a085 1px solid;
	border-right: #16a085 1px solid;
	border-radius: 6px;
	text-align: center;
	color: white;
	padding: 10px;
	float: left;
	font-size: 16px;
	font-weight: 800;
  }
  
  .turquoise:hover {
	opacity: 0.8;
  }
  
  .turquoise:active {
	width: 170px;
	background: #18B495;
	border-bottom: #16a085 1px solid;
	border-left: #16a085 1px solid;
	border-right: #16a085 1px solid;
	border-radius: 6px;
	text-align: center;
	color: white;
	padding: 10px;
	margin-top: 3px;
	float: left;
  }
  
  .emerald {
	margin-right: 70px;
	width: 170px;
	height: 70px;
	background: #2ecc71;
	border-bottom: #27ae60 3px solid;
	border-left: #27ae60 1px solid;
	border-right: #27ae60 1px solid;
	border-radius: 6px;
	text-align: center;
	color: white;
	padding: 10px;
	float: left;
	font-size: 16px;
	font-weight: 800;
  }
  
  .emerald:hover {
	opacity: 0.8;
  }
  
  .emerald:active {
	
	width: 170px;
	background: #2BBB68;
	border-bottom: #27ae60 1px solid;
	border-left: #27ae60 1px solid;
	border-right: #27ae60 1px solid;
	border-radius: 6px;
	text-align: center;
	color: white;
	padding: 10px;
	margin-top: 3px;
	float: left;
  }
  
  .peterriver {
	margin-right: 70px;
	width: 170px;
	height: 70px;
	background: #3498db;
	border-bottom: #2980b9 3px solid;
	border-left: #2980b9 1px solid;
	border-right: #2980b9 1px solid;
	border-radius: 6px;
	text-align: center;
	color: white;
	padding: 10px;
	float: left;
	font-size: 16px;
	font-weight: 800;
  }
  
  .peterriver:hover {
	opacity: 0.8;
  }
  
  .peterriver:active {
	width: 170px;
	background: #2385C7;
	border-bottom: #2980b9 1px solid;
	border-left: #2980b9 1px solid;
	border-right: #2980b9 1px solid;
	border-radius: 6px;
	text-align: center;
	color: white;
	padding: 10px;
	margin-top: 3px;
	float: left;
  }
  
  .wetasphalt {
	margin-right: 70px;
	width: 170px;
	height: 70px;
	background: #34495e;
	border-bottom: #2c3e50 3px solid;
	border-left: #2c3e50 1px solid;
	border-right: #2c3e50 1px solid;
	border-radius: 6px;
	text-align: center;
	color: white;
	padding: 10px;
	float: left;
	font-size: 16px;
	font-weight: 800;
  }
  
  .wetasphalt:hover {
	opacity: 0.8;
  }
  
  .wetasphalt:active {
	width: 170px;
	background: #2D3F51;
	border-bottom: #2c3e50 1px solid;
	border-left: #2c3e50 1px solid;
	border-right: #2c3e50 1px solid;
	border-radius: 6px;
	text-align: center;
	color: white;
	padding: 10px;
	margin-top: 3px;
	float: left;
  }
  
  .sunflower {
	margin-right: 70px;
	width: 170px;
	height: 70px;
	background: #f1c40f;
	border-bottom: #f39c12 3px solid;
	border-left: #f39c12 1px solid;
	border-right: #f39c12 1px solid;
	border-radius: 6px;
	text-align: center;
	color: white;
	padding: 10px;
	float: left;
	font-size: 16px;
	font-weight: 800;
  }
  
  .sunflower:hover {
	opacity: 0.8;
  }
  
  .sunflower:active {
	width: 170px;
	background: #DAB10E;
	border-bottom: #f39c12 1px solid;
	border-left: #f39c12 1px solid;
	border-right: #f39c12 1px solid;
	border-radius: 6px;
	text-align: center;
	color: white;
	padding: 10px;
	margin-top: 3px;
	float: left;
  }
  
  /*applynow btn end*/


  
</style>

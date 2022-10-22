<!DOCTYPE html>
<html lang="en" dir="ltr">
    
</html>

<head>
    <meta charset="utf-8">
    <title>FAT BOY KITCHEN</title>
  
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
<div class="frm">

    <form method="POST" Action="admin_insert_item.php">

        <div class="form-row align-items-center">
            <div class="col-auto my-1">
                <label for="exampleInputName">Select Food category </label>
                <select class="custom-select mr-sm-2" name="Category" id="Category">
                        <option selected>Choose...</option>
                        <?php
                        $con=mysqli_connect("localhost","root","","example");
                        $qry="select Category_ID,Category_Name from food_category";
                        $run=mysqli_query($con,$qry);
                        while ($rows=mysqli_fetch_array($run))
                        {

                        echo "
                        <option value=".$rows['Category_ID'].">".$rows['Category_Name']."</option>";

                        }
                        ?>

                    </select>
            </div>
        </div>
        <div class="form-group">
            <label for="exampleInputName">Add Food Item </label>
            <input type="string" class="form-control" id="ItemName" name="ItemName" placeholder="New Food Item">

        </div>
        <div class="form-group">
            <label for="exampleInputName">Price</label>
            <input type="string" class="form-control" id="Price" name="Price" placeholder="Price">

        </div>
       
        
        <button type="submit" class="btn btn-primary"  name="submit" onclick="return validate();">Submit</button>
    </form>
</div>
<!--end form-->

<!--form validation-->
<script>
        function validate()
        {
            var a=document.getElementById("Category").value;
            var b=document.getElementById("ItemName").value;
            var c=document.getElementById("Price").value;
            

            if(a=="")
            {
                alert("select the category");
                return false;
            }
           else if(b=="")
            {
                alert("Enter Item Name");
                return false;
            }
            else if (c=="")
            {
                alert("Enter Item Price");
                return false;
            }
        }
    </script> 
<!--end form validation-->

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

/*frm*/
.frm{
    margin-top:150px;
}
#Price{
    height: 50px;
    width: 250px;
    margin-left: 100px;
}
#ItemName{
    height: 50px;
    width: 250px;
    margin-left: 100px;
}
.btn{
    margin-left: 640px;
    margin-top: 100px;
    height: 50px;
    width: 250px;
    background-color: black;
    font-size: 20px;
    font-weight: bold;
}
label{
    margin-left: 100px;
    margin-top:40px;
    color:white;
    font-size: 20px;
    font-weight: bold;
}
.custom-select {
    margin-left: 60px;
    height: 50px;
    width: 250px;
}

/*end frm*/

</style>
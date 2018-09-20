<?php
include 'condb.php';
?>
<style>
    @media only screen and (min-width: 992px){

    .headerbar {
        background: white;
        text-align: center;
        padding: 10px 0;
    }

    /* Style the navbar */

    /* The sticky class is added to the navbar with JS when it reaches its scroll position */
    .sticky {
        position: fixed;
        top: 0;
        width: 100%;
    }

    .sticky+.bgwhite {
        padding-top: 50px;
    }

    .navdatabar {
        margin: 0 auto;
    }

    .navdatabar>li {
        font-size: 16px;
        margin: 0 auto;
        padding: 11px 0;
        font-weight: 300;
        transition: 0.1s;
        

    }
    .logoDTB{
             padding:  10px 0;
         }
    .navbar-default .navbar-nav > li > a:hover{
        color:#6caadc;
/*        font-weight: 700;*/
        background-color: transparent;
    }
    .navbar-default .navbar-nav > li > a{
        text-decoration: none;
        padding: auto 20px;
        background-color: transparent;
    }
/*
    .navbar-default .navbar-nav > li.active > a{
        color:#6caadc;
        font-weight: 700;
        background-color: transparent;
    }
    .navbar-default .navbar-nav > li.active > a:hover{
        color:#6caadc;
        font-weight: 700;
        background-color: transparent;
    }
*/
    .navbar-default .navbar-nav > .open > a{
        color:#6caadc;
/*        font-weight: 700;*/
        background-color: transparent;
    }
    .navbar-default .navbar-nav > .open > a, .navbar-default .navbar-nav > .open > a:focus, .navbar-default .navbar-nav > .open > a:hover{
        color:#6caadc;
/*        font-weight: 700;*/
        background-color: transparent;
    }
    .dropdown-menu li {
        font-size: 14px;
    }

    li.dropdown {
/*        position: initial;*/
        
    }

    .dropdown-menu {
       
/*        width: 30%;*/
        background-color: #fff;
/*        padding:20px;*/
        left: 50%;
        right: auto;
    }
    .dropdown-menu-center {
}

    .dropdown-menu li a {
        padding: 10px 15px;
        font-weight: 600;
    }

    .multi-column-dropdown {
        list-style: none;
        margin: 0px;
        padding: 0px;
    }

    .multi-column-dropdown li a {
        display: block;
        clear: both;
        line-height: 1.428571429;
        color: #333;
        white-space: normal;
        transition: 0.3s; 
    }

    .multi-column-dropdown li a:hover {
        text-decoration: none;
        color: #fff;
        background-color: #1d2d59;
    }
     .logoDTB{
         padding:  10px 0;
     }
     .dropdown-color{
         background-color: #fff;
     }
    .navdatabar li > a{
        color:#555;
    }
    .navdatabar li > a:hover{
            color:#fff;
        }
    #topheader .navbar-nav li.active > a {
        color:#1d2d59;
        font-weight: 700;
        background-color: transparent;
        text-decoration-line: underline;
    }
    #topheader .navbar-nav li.active.line-link::after{
        content:'';
        display: block;
        width: 100%;
        height: 2px;
        background:#1d2d59;
        transition: width .3s;
    }
    .line-link{
        
    }
    #topheader .navbar-nav li.line-link::after{
        content:'';
        display: block;
        width: 0%;
        height: 2px;
        background:#6caadc;
        transition: width .3s;
    }
    #topheader .navbar-nav li.line-link:hover::after{
        width: 100%;
        transition: width .3s;
    }
        .navbar-db{
            max-height: 500px;
/*            border-bottom: 3px solid #444444;*/
        }
    }
</style>
<nav class="navbar navbar-default navbar-db">
     <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="index.php"><img class="logoDTB" src="images/LogoOriginal.png" width="200px"></a>
                </div>
</nav>
    <div id="topheader">
        <nav class="navbar navbar-default navbar-db navbar-fixed-top" style="z-index:999;">
            <div class="container-databar">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="index.php"><img class="logoDTB" src="images/LogoOriginal.png" width="200px"></a>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <!--        data-hover="dropdown"-->
                    <ul class="nav navbar-nav navbar-right navdatabar" data-hover="dropdown" data-animations="fadeInUp fadeInRight fadeInUp fadeInLeft">
                        <li class="line-link"><a href="aboutus.php">About us</a></li>
                        <li class="dropdown line-link">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Products <b class="caret"></b></a>
                            <ul class="dropdown-menu dropdown-menu-left multi-column columns-3 dropdown-color">
                                <div class="row">

                                    <div class="col-sm-12">
                                        <ul class="multi-column-dropdown">
                                            <?php
                                  $sql1 = "SELECT * FROM groups 
                                          ORDER BY  `Group_ID` ASC ";
                                  $query1 = $conn->query($sql1);
                                  while ($result1 = $query1->fetch_assoc()) {
                                  ?>
                                            <li><a href="product.php?group=<?=$result1['Group_Name']?>">
                                                    <?=$result1['Group_Name']?></a></li>
                                            <?php
                                    }
                                    ?>
                                        </ul>
                                    </div>
                                </div>
                            </ul>
                        </li>
                        <li class="line-link"><a href="service.php">Services</a></li>
                        <li class="line-link"><a href="customer.php">Customers</a></li>
                        <li class="line-link"><a href="partners.php">Partners</a></li>
                        <li class="line-link"><a href="contact.php">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
<script>
    $(function() {
        $('#topheader .navbar-nav a').each(function() {
            if ($(this).prop('href') == window.location.href) {
                $(this).addClass('active');
                $(this).parents('li').addClass('active');
            }
        });
    });
</script>
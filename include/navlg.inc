<style>
    .dropdown:hover .dropdown-menu {
        display: block;
        margin-top: 0;
        transition: 0.4s;
    }

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
        font-weight: 700;
        

    }
    .logoDTB{
             padding:  10px 0;
         }
    .navdatabar>li:hover {
        font-size: 18px;
        background: #eee;

    }
    .dropdown-menu li {
        font-size: 14px;
    }

    .dropdown {
        position: initial;
    }

    .dropdown-menu {
        width: 100%;
        background-color: #fff;
    }

    .dropdown-menu li a {
        padding: 10px 15px;
        font-weight: 300;
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
    }

    .multi-column-dropdown li a:hover {
        text-decoration: none;
        color: #262626;
        background-color: #eee;
    }
     .logoDTB{
         padding:  10px 0;
     }
     .dropdown-color{
         background-color: #fff;
     }
</style>


<nav class="navbar navbar-default navbar-db" style="z-index:999;">
  <div class="container">
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
        
            <ul class="nav navbar-nav navbar-right navdatabar">
               <li><a href="aboutus.php">About US</a></li>
                <li class="dropdown" style="position: initial;">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Products <b class="caret"></b></a>
                    <ul class="dropdown-menu multi-column columns-3 dropdown-color" style="width: 100%; padding:20px;">
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
                <li><a href="service.php">Services</a></li>
                <li><a href="customer.php">Customers</a></li>
                <li><a href="partners.php">Partners</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1,opera=1" />
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
        <title>TimeSpace</title>
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
         <link rel="stylesheet" href="<?= $this->url->getBaseUri();?>public/css/TimeSpace.css">
          <link href="<?= $this->url->getBaseUri();?>public/css/bootstrap.min.css" rel="stylesheet" />
         <link href="<?= $this->url->getBaseUri();?>public/css/now-ui-kit.css?v=1.1.0" rel="stylesheet" />
         <link href="<?= $this->url->getBaseUri();?>public/css/demo.css" rel="stylesheet" />
    </head>

<style>

    body{

        background-image:  url('<?= $this->url->getBaseUri(); ?>public/img/2.png');
        background-repeat:no-repeat;
        background-color:#d4edfc;
    }

</style>


    <body class="profile-page sidebar-collapse">
                   
 <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-dark fixed-top navbar-transparent" color-on-scroll="50" 
 style="margin-right:50px; margin-left:50px; border-radius:0px 0px 100px 100px;">

   <input id="heure" type="hidden" value="<?= date("H:i:s"); ?>">

 <img id="lune" src=" <?= $this->url->getBaseUri(); ?>public/img/soleil.png"  height="120"
         style="position:absolute; 
         margin-top:70px;
         right:-60px;
         top:0px;
         " />

            <div class="navbar-translate">
                <a class="navbar-brand" href="" rel="tooltip" title="Designed by TimeSpace Coded by Creative Team" data-placement="bottom" target="_blank">
                     <img src="<?= $this->url->getBaseUri();?>public/img/3.png" height="40">
                </a>
                <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar bar1"></span>
                    <span class="navbar-toggler-bar bar2"></span>
                    <span class="navbar-toggler-bar bar3"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse justify-content-end" id="navigation" data-nav-image="img/1.png">
                <ul class="navbar-nav">

 <li class="nav-item">
                                            <a class="nav-link" href="<?= $this->url->get("compte/event"); ?>">
                                                <i class="now-ui-icons sport_user-run"></i>
                                                <p>Events <span class="badge" style="background-color:orange; font-size:12px;">5</span></p>
                                            </a>
                                        </li>
             
           <li class="nav-item">
                                            <a class="nav-link" href="<?= $this->url->get("compte/actualite"); ?>">
                                                <i class="now-ui-icons objects_planet"></i>
                                                <p>Fil D'actualité <span class="badge" style="background-color:orange; font-size:12px;">45</span></p>
                                            </a>
                                        </li>

      <li class="nav-item">
                                            <a class="nav-link" href="<?= $this->url->get("compte/profil"); ?>">
                                                <i class="now-ui-icons users_circle-08"></i>
                                                <p>Profile</p>
                                            </a>
                                        </li>

 <li class="nav-item dropdown">
                                                <a href="#" class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown">
                                                    <i class="now-ui-icons loader_gear spin " style="font-size:20px;" aria-hidden="true"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                                    <a class="dropdown-header">User_Name</a>
                                                    <a class="dropdown-item" href="#">Confidentialité</a>
                                                    <a class="dropdown-item" href="#">Mise à jour</a>
                                                    <a class="dropdown-item" href="#">langue</a>
                                                    <div class="divider"></div>
                                                    <a class="dropdown-item" href="#">Déconnexion</a>
                                                </div>
                                            </li>

                                        <li class="nav-item">
                                            <a class="nav-link btn-transparent" data-toggle="modal" data-target="#myModal" href="#pablo" data-toggle="modal" data-target="#myModal1">
                                                <i class="now-ui-icons ui-1_bell-53"></i>
                                                <p>Notifications<span class="badge" style="background-color:orange; font-size:12px;" >8</span></p>
                                            </a>

                                        </li>

                                    <li class="nav-item">
                                            <a class="nav-link" href="#menu-toggle" id="menu-toggle">
                                                 <i class="now-ui-icons ui-2_chat-round"></i>
                                                <p>Messages</p>
                                            </a>
                                        </li>
                              
                                             
                                   

             <li class="nav-item">
          <form>     
                                <div class="input-group" style="">
                                    <input type="text" size="45" style=" border-radius:50px 10px 50px 10px;" class="form-control" placeholder="Recherche..." required>
             <button type="submit" class="btn btn-success  btn-sm" value="Go" style=" border-radius:20px 10px 20px 10px;"> <i class="now-ui-icons ui-1_zoom-bold"></i> </button>  
                                </div>
      </form>                     
                           </li>

                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->
    

 <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header justify-content-center">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                            <i class="now-ui-icons ui-1_simple-remove"></i>
                        </button>
                        <h6 class="title title-up" >Notifications</h6>
                    </div>
                    <div class="modal-body">
                        <p>
                            <a href="<?= $this->url->getBaseUri(); ?>" class="btn btn-primary col-md-12">
                              <img height="30px"  style="border-radius:10px 10px 10px 10px; " src="<?= $this->url->getBaseUri(); ?>public/img/social-event.jpg"  >     
                               Chasse au trésor sur l'événement "RED CUP"
                            </a>
                            <a href="<?= $this->url->getBaseUri(); ?>" class="btn btn-info col-md-12">
                              <img height="30px"  style="border-radius:10px 10px 10px 10px; " src="<?= $this->url->getBaseUri(); ?>public/img/4.jpg"  >     
                               Cadet Quenum a aimer votre publication
                            </a>
                            <a href="<?= $this->url->getBaseUri(); ?>" class="btn btn-info col-md-12">
                              <img height="30px"  style="border-radius:10px 10px 10px 10px; " src="<?= $this->url->getBaseUri(); ?>public/img/shoes.jpg" >     
                                 Il y a 10 ans vous avez perdu une dent
                            </a>
                            <a href="<?= $this->url->getBaseUri(); ?>" class="btn btn-info col-md-12">
                              <img height="30px"  style="border-radius:10px 10px 10px 10px; " src="<?= $this->url->getBaseUri(); ?>public/img/shoes.jpg" >     
                                 il ya 2 jours vous avez défini ce jour comme "BrazzersDay"
                            </a>
                            <a href="<?= $this->url->getBaseUri(); ?>" class="btn btn-info col-md-12">
                              <img height="30px"  style="border-radius:10px 10px 10px 10px; " src="<?= $this->url->getBaseUri(); ?>public/img/4.jpg" >     
                                 Cadet Quenum vous a ajouter à ses amis
                            </a>
                            <p class="text-center" style="color:white;"> <i class="now-ui-icons loader_refresh spin" style=" font-size: 30px; " width="200px" aria-hidden="true"></i></p>


                       </p>
                    </div>
                  
                </div>
            </div>
        </div>



     <div class="">
        
 <style>

body {
    overflow-x: hidden;
}

#wrapper {
    padding-left: 0;
    -webkit-transition: all 0.5s ease;
    -moz-transition: all 0.5s ease;
    -o-transition: all 0.5s ease;
    transition: all 0.5s ease;
}

#wrapper.toggled {
    padding-left: 250px;
}

#sidebar-wrapper {
    z-index: 1000;
    position: fixed;
    left: 250px;
    width: 0;
    height: 100%;
    margin-left: -250px;
    overflow-y: auto;
    background: #000;
    -webkit-transition: all 0.5s ease;
    -moz-transition: all 0.5s ease;
    -o-transition: all 0.5s ease;
    transition: all 0.5s ease;
}

#wrapper.toggled #sidebar-wrapper {
    width: 250px;
}

#page-content-wrapper {
    width: 100%;
    position: absolute;
    padding: 15px;
}

#wrapper.toggled #page-content-wrapper {
    position: absolute;
    margin-right: -250px;
}


/* Sidebar Styles */

.sidebar-nav {
    position: absolute;
    top: 0;
    width: 250px;
    margin: 0;
    padding: 0;
    list-style: none;
}

.sidebar-nav li {
    text-indent: 20px;
    line-height: 40px;
}

.sidebar-nav li a {
    display: block;
    text-decoration: none;
    color: #999999;
}

.sidebar-nav li a:hover {
    text-decoration: none;
    color: #fff;
    background: rgba(255, 255, 255, 0.2);
}

.sidebar-nav li a:active,
.sidebar-nav li a:focus {
    text-decoration: none;
}

.sidebar-nav > .sidebar-brand {
    height: 65px;
    font-size: 18px;
    line-height: 60px;
}

.sidebar-nav > .sidebar-brand a {
    color: #999999;
}

.sidebar-nav > .sidebar-brand a:hover {
    color: #fff;
    background: none;
}

@media(min-width:768px) {
    #wrapper {
        padding-left: 0;
    }
    #wrapper.toggled {
        padding-left: 250px;
    }
    #sidebar-wrapper {
        width: 0;
    }
    #wrapper.toggled #sidebar-wrapper {
        width: 250px;
    }
    #page-content-wrapper {
        padding: 20px;
        position: relative;
    }
    #wrapper.toggled #page-content-wrapper {
        position: relative;
        margin-right: 0;
    }
}

 </style>


   <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper" style="background-image:url('<?= $this->url->getBaseUri(); ?>public/img/b.jpg'); background-size:cover;" >
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                        
                    </a>
                </li>
                <li class="sidebar-brand">
                    <h7 style="color:white;">Discussion instantanée</h7>
                </li>
                <li>
                    <a href=" <?= $this->url->getBaseUri(); ?>profil/message ">Cadet Quenum <span class="badge" style="background-color:orange; font-size:12px;">4</span></a>
                </li>
  
               
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

    </div>

            <?= $this->getContent() ?>
        </div>
 
  <footer class="tab-content text-center">      
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

        <script src="<?= $this->url->getBaseUri();?>public/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="<?= $this->url->getBaseUri();?>public/js/core/popper.min.js" type="text/javascript"></script>
<script src="<?= $this->url->getBaseUri();?>public/js/core/bootstrap.min.js" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="<?= $this->url->getBaseUri();?>public/js/plugins/bootstrap-switch.js"></script>
<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="<?= $this->url->getBaseUri();?>public/js/plugins/nouislider.min.js" type="text/javascript"></script>
<!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
<script src="<?= $this->url->getBaseUri();?>public/js/plugins/bootstrap-datepicker.js" type="text/javascript"></script>

        <!-- Latest compiled and minified JavaScript -->
        <script src="<?= $this->url->getBaseUri();?>public/js/now-ui-kit.js?v=1.1.0" type="text/javascript"></script>
    <script src="<?= $this->url->getBaseUri();?>public/js/Sun_Lune.js" type="text/javascript">
      
     </script>   

 <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });

    </script>


 <p>&copy; 2017 TimeSpace, Inc.</p>
</footer>



</body>


</html>

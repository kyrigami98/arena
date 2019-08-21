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

        background-image:  url('<?= $this->url->getBaseUri(); ?>public/img/GEEK_acc.png');
        background-repeat:no-repeat;
		background-size:cover;
        
    }

</style>


    <body class="profile-page sidebar-collapse">
                   
    



     <div class="">
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



 <p>&copy; 2017 OTAKU Club, Inc.</p>
</footer>



</body>


</html>

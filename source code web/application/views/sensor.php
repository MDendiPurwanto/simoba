<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/sidebars/">
    <title>SIMOBA - SISTEM MONITORING BANJIR</title>

    <script type="text/javascript" src="jquery/jquery.min.js"></script>
    <!-- load otomatis / realtime -->
    <script type="text/javascript">
      
      $(document).ready( function() {
        setInterval( function() {
          $("#ceksuhu").load("<?php echo site_url('Welcome/ceksuhu/'); ?>");
          $("#cekkelembaban").load("<?php echo site_url('Welcome/cekkelembaban/'); ?>");
        }, 1000 );

      } );

    </script>

  </head>
  <body>
    <div class="container" style="text-align: center; margin-top: 50px">
    	<img src="<?php echo base_url(); ?>assets/codeigniter.png" style="width: 200px">
    	<h2>
    		Menampilkan Nilai Sensor Secara Realtime<br>
    		Pada Framework <b style="color: red">CodeIgniter</b>
    	</h2>

    	<div style="display: flex; justify-content: center;">
	    	<div class="card text-center" style="margin-top: 20px; width: 30%">
	    		<div class="card-header" style="background-color: red; color: white">
	    			<h2 style="font-weight: bold">Suhu</h2>
	    		</div>
	    		<div class="card-body">
	    			<h1><span id="ceksuhu">100</span></h1>
	    		</div>
	    	</div>

	    	<div class="card text-center" style="margin-top: 20px; width: 30%">
	    		<div class="card-header" style="background-color: red; color: white">
	    			<h2 style="font-weight: bold">Kelembaban</h2>
	    		</div>
	    		<div class="card-body">
	    			<h1><span id="cekkelembaban">65</span></h1>
	    		</div>
	    	</div>	
    	</div>

    	
    </div>
    

    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>

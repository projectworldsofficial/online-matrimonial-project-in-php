<?php include_once("includes/basic_includes.php");?>
<?php include_once("functions.php"); ?>
<?php if(isloggedin()){
 //do nothing stay here
} else{
   header("location:login.php");
}
 ?>
<?php
$id=$_SESSION['id'];
$result=search();
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Find Your Perfect Partner - Makemylove
 | Search-id :: Make My Love
</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Oswald:300,400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Ubuntu:300,400,500,700' rel='stylesheet' type='text/css'>
<!----font-Awesome----->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!----font-Awesome----->
<script>
$(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
            $(this).toggleClass('open');       
        }
    );
});
</script>
</head>
<body>
<!-- ============================  Navigation Start =========================== -->
 <?php include_once("includes/navigation.php");?>
<!-- ============================  Navigation End ============================ -->
<div class="grid_3">
  <div class="container">
   <div class="breadcrumb1">
     <ul>
        <a href="index.php"><i class="fa fa-home home_1"></i></a>
        <span class="divider">&nbsp;|&nbsp;</span>
        <li class="current-page">Search By Profile ID</li>
     </ul>
   </div>
   <div class="col-md-9 profile_left">
     <form>	
	  <div class="form_but1">
		<label class="col-sm-5 control-lable1" for="Prof id">Profile ID : </label>
		<div class="col-sm-7 form_radios">
		  <div class="input-group1">
	        <input type="text" value="" id="profid" name="profid" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}">
	        <input type="button" onclick="viewprofile();"  value="search">
          <script type="text/javascript">
            function viewprofile(){
              var profid=document.getElementById("profid").value;
              window.location.href="view_profile.php?id="+profid;
            }
          </script>
	      </div>
	    </div>
		<div class="clearfix"> </div>
	 </div>
    </form>
 <div class="paid_people">
   <h1>Profiles</h1>
   <div class="row_1">
<?php
  //only start display profiles if and only if search is triggered
  // if(isset($_POST['search'])){

  // //code to print matching profiles

  // // couloumn count

  // $c_count = '1';

  // while ($row = mysqli_fetch_assoc($result))
  //   {
  //     //getting photo for display
  //     $profid=$row['id'];
  //     $sql="SELECT * FROM photos WHERE cust_id=$profid";
  //     $result2=mysqlexec($sql);
  //     $photo=mysqli_fetch_assoc($result2);
  //     $pic=$photo['pic1'];
  //   // printing left side profile
      
  //   if ($c_count == '1')
  //     {
  //     echo "<div class=\"row_1\">"; //starting row
  //     echo "<div class=\"col-sm-6 paid_people-left\">"; //left statrted
  //     echo "<ul class=\"profile_item\">";
  //     echo "<a href=\"view_profile.php?id=$profid\">";
  //     echo "<li class=\"profile_item-img\"><img src=\"profile/". $profid."/".$pic ."\"" . "class=\"img-responsive\"" ;
  //     echo "alt=\"\"/></li>";
  //     echo "<li class=\"profile_item-desc\">";
  //     echo "<h4>" . $row['firstname'] . " " . $row['lastname'] . "</h4>";
  //     echo "<p>" . $row['age']. "Yrs," . $row['religion'] . "</p>";
  //     echo "<h5>" . "View Full Profile" . "</h5>";
  //     echo "</li>";
  //     echo "</a>";
  //     echo "</ul>";
  //     echo "</div>"; //left end
  //     $c_count++;
  //     }
  //     else
  //     {
  //     echo "<div class=\"col-sm-6\">"; //right statrted
      
  //     echo "</div>"; //right end

  //     // end of right side

      
  //     $c_count = '1';
  //     }
  //   } //loop end
  //   echo "</div>"; //row end
  // }//end of if
?>
	
  <div class="col-sm-6">
	 	
	   </div>
	   <div class="clearfix"> </div>
   </div>   
  </div>
</div>
<div class="col-md-3 match_right">
	<?php include_once("matchright.php");?>	
</div>
     <div class="clearfix"> </div>
  </div>
</div>


<?php include_once("footer.php");?>

<!-- FlexSlider -->
<link href="css/flexslider.css" rel='stylesheet' type='text/css' />
  <script defer src="js/jquery.flexslider.js"></script>
  <script type="text/javascript">
	$(function(){
	  SyntaxHighlighter.all();
	});
	$(window).load(function(){
	  $('.flexslider').flexslider({
		animation: "slide",
		start: function(slider){
		  $('body').removeClass('loading');
		}
	  });
	});
  </script>
<!-- FlexSlider -->
</body>
</html>	
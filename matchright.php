<!-- <div class="profile_search1">
	   <form>
		  <input type="text" class="m_1" name="ne" size="30" required="" placeholder="Enter Profile ID :">
		  <input type="submit" value="Go">
	   </form>
  </div> -->
  <section class="slider">
	 <h3>Happy Marriage</h3>
	 <div class="flexslider">
		<ul class="slides">
		  <li>
			<img src="images/s2.jpg" alt=""/>
			<h4>Jhon & Mary</h4>
			<p>It is a long established fact that a reader will be distracted by the readable</p>
		  </li>
		  <li>
			<img src="images/s1.jpg" alt=""/>
			<h4>Annie & Williams</h4>
			<p>It is a long established fact that a reader will be distracted by the readable</p>
		  </li>
		  <li>
			<img src="images/s3.jpg" alt=""/>
			<h4>Ram & Isha</h4>
			<p>It is a long established fact that a reader will be distracted by the readable</p>
		  </li>
	    </ul>
	  </div>
   </section>

   <div class="view_profile view_profile2">
        	<h3>View Recent Profiles</h3>
    <?php
     $sql="SELECT * FROM customer ORDER BY profilecreationdate DESC";
      $result=mysqlexec($sql);
      $count=1;
      while($row=mysqli_fetch_assoc($result)){
            $profid=$row['cust_id'];
          //getting photo
          $sql="SELECT * FROM photos WHERE cust_id=$profid";
          $result2=mysqlexec($sql);
          $photo=mysqli_fetch_assoc($result2);
          $pic=$photo['pic1'];
          echo "<ul class=\"profile_item\">";
            echo"<a href=\"view_profile.php?id={$profid}\">";
              echo "<li class=\"profile_item-img\"><img src=\"profile/". $profid."/".$pic ."\"" . "class=\"img-responsive\" alt=\"\"/></li>";
               echo "<li class=\"profile_item-desc\">";
                  echo "<h4>" . $row['firstname'] . " " . $row['lastname'] . "</h4>";
                  echo "<p>" . $row['age']. "Yrs," . $row['religion'] . "</p>";
                  echo "<h5>" . "View Full Profile" . "</h5>";
               echo "</li>";
      echo "</a>";
      echo "</ul>";
      $count++;
      }
     ?>
           
</div>
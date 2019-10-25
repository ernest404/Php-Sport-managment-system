

<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
</div>
   
 <!-- Home Articles -->
 
  <section id="home-articles" class="py-2">
    <div class="container">
        <h2>Editor Picks</h2>
        <div class="articles-container">
          <?php
$conn=mysqli_connect("localhost","root","","sportsdb");
 

//faching all other records in your db.
$all_news_sql = "SELECT * FROM tbl_match WHERE status = 'coming-up' ORDER by date ASC LIMIT 1"; 
$all_news_query = mysqli_query($conn,$all_news_sql); 
?>
          <?php while ($row = mysqli_fetch_assoc($all_news_query)): ?>
          <article class="card" style="max-height:500px; ">

            <div>
              <div class="category category-sports" style="font-size: 0.7em;"><?php echo $row['hometeam']?></div>
              
            </div>
          </article>
          <?php endwhile ?>
        </div>
      </div>
    </section>
          

  
</div
</body>
</html>
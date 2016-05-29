<div class='news'>
  <h1>Nyheter</h1>
    <?php
      $db = new Database();
      $news = $db->GetNews();
      for ($i=0; $i < count($news); $i++) {
        echo  "<div class='news-row'>
                <h2>" . $news[$i]['title'] . "</h2>
                <p>" . $news[$i]['message'] . "</p>
              </div>";
      }
     ?>
</div>

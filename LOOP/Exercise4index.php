<html>
  <head>
    <link rel="stylesheet" href="stylesheet.css" />
    <title>Codecademy Languages</title>
  </head>
  <body>
    <h1>Languages you can learn on Codecademy:</h1>
    <div class="wrapper">
      <ul>
        <?php
          $langs = array("JavaScript",
          "HTML/CSS", "PHP",
          "Python", "Ruby");
        
              echo $langs[0];
               echo $langs[1];
                echo $langs[3];
                 echo $langs[4];
        
        
          unset($lang);
        ?>
      </ul>
    </div>
  </body>
</html>
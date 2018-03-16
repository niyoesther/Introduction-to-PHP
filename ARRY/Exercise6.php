<html>
  <head>
    <title>Modifying Elements</title>
  </head>
  <body>
    <p>
      <?php
        $languages = array("HTML/CSS",
        "JavaScript", "PHP", "Python", "Ruby");
    
        $languages[1]="C++";
        
        echo $languages[1];
        
      ?>
    </p>
  </body>
</html>
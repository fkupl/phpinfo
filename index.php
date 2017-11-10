<?php
  echo "Script started at ";
  $objDateTime = new DateTime('NOW');
  echo $objDateTime->format('c');
  
  phpinfo(); 

  echo "<pre>";
  $contentsArray = file("./MOCK_DATA.csv");
  for($i=0;$i<1000;$i++)
  {
    foreach($contentsArray as $line)
    {
      echo $line;
    }
  }
  echo "</pre>";


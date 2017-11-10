<?php
  echo "Script started at ";
  $objDateTime = new DateTime('NOW');
  echo $objDateTime->format('c');
  
  phpinfo(); 

  echo 
  $contentsArray = file("./MOCK_DATA.csv");
  for($i=0;$i<1000;$i++)
  {
    foreach($contentsArray as $line)
    {
      echo $line;
    }
  }



<?php
  //echo "Script started at ";
  //$objDateTime = new DateTime('NOW');
  //echo $objDateTime->format('c');
  
  //phpinfo(); 

  echo "<pre>";
  $contentsArray = file("./MOCK_DATA.csv");
  for($i=0;$i<1;$i++)
  {
    $j=0;
    foreach($contentsArray as $line)
    {
      echo $line;
      if($j > 20)
        break;
      $j++;
    }
    break;
  }
  echo "</pre>";


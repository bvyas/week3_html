<?php
for($i=0; $i<100; $i++)
{  
  $toss = rand(0,1);
  if($toss == 0)
  {
    $description = "head";
  }
  else
  {
    $description = "tail";
  }
  echo $i;
?>
  <p>Throwing a coin. It's a <?= $description ?>.</p>

<?php
}  ?>
<?php
for($x=3; $x<=30; $x=$x+3)
{
 if($x< 30)
 {
 echo "$x-";
 }
 else 
  {
 
  }
}
?>
<?php
for($a=0; $a< 10; $a++)
 { 
   for($b=0; $b< 10; $b++)
      {
	     echo $a.$b.", "; 
      }
 }
  printf("\n"); 
?>
<!DOCTYPE html>
<html>
<body>
<table align="left" border="1" cellpadding="3" cellspacing="0">
<?php
for($i=1;$i<=6;$i++)
{
echo "<tr>";
for ($j=1;$j<=5;$j++)
  {
  echo "<td>$i * $j = ".$i*$j."</td>";
  }
  echo "</tr>";
  }
?>
</table>
</body>
</html>
<!DOCTYPE html>
     <html> 
     <head> 
  <title></title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  </head>
  <body> 
  <h3>Chess Board using Nested For Loop</h3>
   <table width="270px" cellspacing="0px" cellpadding="0px" border="1px">
   <!-- cell 270px wide (8 columns x 60px) -->
      <?php
      for($row=1;$row<=8;$row++)
	  {
          echo "<tr>";
          for($col=1;$col<=8;$col++)
		  {
          $total=$row+$col;
          if($total%2==0)
		  {
          echo "<td height=30px width=30px bgcolor=#FFFFFF></td>";
          }
		  else
		  {
          echo "<td height=30px width=30px bgcolor=#000000></td>";
          }
          }
          echo "</tr>";
    }
          ?>
  </table>
  </body>
  </html>


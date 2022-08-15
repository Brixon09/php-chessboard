<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>chessboard</title>
      <style>
         table{
         margin: 0px 480px;
         width: 400px;
         margin-top: 50px;
         border: 1px solid;
         position: absolute;
         }
         span{
         font-size: 40px;
         }
         hr{
         width: 600px;
         }
         h1{
         font-family: arial, sans-serif;
         font-weight: 700;
         text-align: center;
         }
         .num{
         margin: 107px 482px;
         font-weight: 650;
         color: black;
         position: absolute;
         writing-mode: vertical-lr;
         text-orientation: upright;
         letter-spacing: .6em;
         color: #F3F0D7;
         height: 360px;
         font-family: arial;
         font-size: 14px;
         }
         .num span{
         color: #789454;
         font-size: 14px;
         letter-spacing: .7em;
         }
         .let{
         margin: 430px 520px;
         font-weight: 650;
         color: black;
         position: absolute;
         text-orientation: upright;
         letter-spacing: 1.1em;
         color: #F3F0D7;
         width: 400px;
         height: 360px;
         font-family: arial;
         font-size: 15px;
         }
         .let span{
         color: #789454;
         font-size: 15px;
         letter-spacing: 1.6em;
         }
      </style>
   </head>
   <body>
      <h1><span>C</span>hess<span>B</span>oard</h1>
      <hr>
      <table cellspacing="0px" cellpadding="0px">
         <?php for ($row=1; $row<=8; $row++){
            echo "<tr>";
            for ($col = 1; $col<=8; $col++){
            $total=$row+$col;
            if($total%2 == 0){
            echo '<td style="width: 50px; height: 50px; background:
            
            #F3F0D7"></td>';
            }else{
            echo ' <td style="width: 50px; height: 50px; background:
            
            #789454"></td>';
            }
            }
            echo "</tr>";
            }
            ?>
      </table>
      <p class= "num">7 <span>6</span> 5 <span>4</span> 3 <span>2</span> 1</p>
      <p class="let">a <span>b</span> c <span>d</span> e <span>f</span> g </p>
   </body>
</html>
<?php
//setcookie("goodcookie","this is my good cookie",time()+365*24*60*60);
setcookie("goodcookie","this is my good cookie",time()+60);

echo "<HTML>
   <HEAD>
      <TITLE>Cookie HTML Example</TITLE>";


        if (!isset($_COOKIE['goodcookie']))
           { echo "<link rel = 'stylesheet' type = 'text/css' href = 'default.css' >" ;}
           
            else 
            { echo "<link rel = 'stylesheet' type = 'text/css' href = 'special.css' > ";}

 echo "  </HEAD>
   <BODY>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
   </BODY>
</HTML>";

            ?>




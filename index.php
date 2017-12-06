<!DOCTYPE html>
<html>
    <title>Home</title>
    
    <head>
        <script>
            function myFunction() {
                document.getElementById("optionDropdown").classList.toggle("show");
                }

            // Close the dropdown menu if the user clicks outside of it
            window.onclick = function(event) {
              if (!event.target.matches('.dropbtn')) {

                var dropdowns = document.getElementsByClassName("dropdownItems");
                var i;
                for (i = 0; i < dropdowns.length; i++) {
                  var openDropdown = dropdowns[i];
                  if (openDropdown.classList.contains('show')) {
                    openDropdown.classList.remove('show');
                  }
                }
              }
            }
        </script>
        
        <?php
            $servername = "sql303.epizy.com";
            $username = "epiz_20659268";
            $password = "Password";
            $dbname = "epiz_20659268_Final";
        ?>

    
    </head>
    
    <body>
       <h1>Welcome to the parking reservation system</h1>
        
        <h2>Begin by filling out the form below:</h2>
        <br>
        <form action = "$servername, $username, $password, $dbname" method="post" enctype="text/plain">
        Name:
        <input type="text">
        <br>
        Amount of time you're requesting:
        <input type="text">
        <br>
        License Plate #:
        <input type="text">
        <br>
        Parking Spot #:
        <input type="text">
        <br>
        <div class="dropdown items">
            <button onclick="myFunction()" class="dropbtn"><i class="fa fa-caret-down"></i>Parking Lots</button>
            <div id="optionDropdown" class="dropdownItems">
                <a href="#">V.A.G.</a>
                <a href="#">Example 2</a>
                <a href="#">Eaxmple 3</a>
            </div>
            
        </div>
            
        <input type="submit" value="Submit"></button>
        </form>
    </body>
</html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Shopping</title>
    <link rel="stylesheet" href="phase3.css">
    <script src="shopping.js"></script>
</head>
<body>
    <div id='navigationBar'>
        <a href='rules.html'>Rules</a>
        <a href='tutorials.html'>Tutorials</a>
        <a href='coursesnearby.html'>Courses Nearby</a>
        <a href='tournaments.php'>Tournaments</a>
        <a href='shopping.php'>Shopping</a>
        <a href='contactus.html'>Contact Us</a>
        <a href='login.html'>Login</a>
    </div>
    <div id='logo'>
        <a href='phase3.html'><img src = "logo.png" height="100px"></a>
    </div>
    <div class = "TextBox">
        <div style = "text-align: center">
          <h2>Shopping</h2>
        </div>
        <h3>We've put our heads together to create a careful curation of products that we highly recommend as enthusiasts of the sport. Fill out this easy questionaire to see what we recommend specifically for you.</h3>
        <form method = "post">
            <label for="productType">What are you looking for?</label>
            <select name="productType" id="productType">
              <option value="set">Disc Golf Set</option>
              <option value="bag">Bag</option>
              <option value="basket">Basket</option>
            </select>
            <br><br>

            <label for="quality">Do you wish to spend more for better quality?</label>
            <select name="quality" id="quality">
              <option value="yes">Yes</option>
              <option value="no">No</option>
            </select>
            <br><br>
            <?php
                $server = "spring-2021.cs.utexas.edu";
                $user = "cs329e_bulko_willc";
                $pwd = "Sultan+Baron&Glad";
                $dbName = "cs329e_bulko_willc";
                
                echo "<input type='button' value='Submit' onclick = \"ajaxFunction('$server','$user','$pwd','$dbName')\">";
            ?>
        </form>
    <div id='ajaxDiv'>
    </div>

    </div>
    <div id='footer'>
        <p>5/03/2021 by William Connell, Ian McIntosh</p>
    </div>

    <script>
    function ajaxFunction(server,user,pwd,dbName){
        var ajaxRequest;
        ajaxRequest = new XMLHttpRequest();
        
        // Create a function that will receive data sent from the server and will update
        // the div section in the same page.
        ajaxRequest.onreadystatechange = function(){
            if(ajaxRequest.readyState == 4){
                var ajaxDisplay = document.getElementById('ajaxDiv');
                ajaxDisplay.innerHTML = ajaxRequest.responseText;
            }
        }
        
        // Now get the productType and quality from user and pass it to server script.
        var productType = document.getElementById('productType').value;
        var quality = document.getElementById('quality').value;
        
        var queryString = "?productType=" + productType;
        
        queryString +=  "&productType=" + productType + "&quality=" + quality;
        
        ajaxRequest.open("GET", "shoppinghandler.php" + queryString, true);
        ajaxRequest.send();
    }
    </script>
</body>
</html>

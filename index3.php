<!DOCTYPE html>
<html>
  <body>

    <h2>Get data as JSON from a PHP file, and convert it into a JavaScript array.</h2>

    <p id="demo"></p>

    <script>

    var xmlhttp = new XMLHttpRequest();

    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            var myObj = JSON.parse(this.responseText);
            document.getElementById("demo").innerHTML = myObj['mem'];
        }
    };
    xmlhttp.open("GET", "conexion.php", true);
    xmlhttp.send();

    </script>

  </body>
</html>
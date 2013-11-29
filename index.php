<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Magic</title>
        <script type="text/javascript">
            function insert() {
//                text_value = document.getElementById('text').value;
//                alert(text_value);
                if (window.XMLHttpRequest) {
                    xmlhttp = new XMLHttpRequest();
                } else {
                    xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
                }
                
                xmlhttp.onreadystatechange = function() {
                    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                        document.getElementById('message').innerHTML = xmlhttp.responseText;
                    }
                }
                
                parameters = 'text='+document.getElementById('text').value;
                
                xmlhttp.open('POST', 'update.inc.php', true);
                xmlhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                xmlhttp.send(parameters);
            }
        </script>
    </head>
    <body>
        Insert: <input type="text" id="text" /> <input type="button" value="Submite" onclick="insert();" />
        <div id="message"></div>
    </body>
</html>

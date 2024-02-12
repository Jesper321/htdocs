<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form>
        <table>
            <tr><td> Geef je naam: </td><td><input type="text" name="naam" onblur="Check(this)"></td></tr>
            <tr><td></td>Geef je wachtwoord:<td><input type="password" name="ww" onblur="Check(this)"></td></tr>
            <tr><td colspan="2" style="text-align: right;"> <input type="submit" value="Log in"></td></tr>
        </table>
        <input type="submit" value="Log in">
    </form>
    <script>
        function Check(element)
        {
            console.log("in CheckName function");
            let len = 3;
                if(element.type=="password")
                {
                    checkPasswordSpecific(element.value);

                    len -10;
                }
            if(element.value.length < len ) 
            {
                element.style.backgroundColor = "red";
            }
            else
            {
                element.style.backgroundColor = "lightgreen";
            }

        }
        function checkPasswordSpecific(ww)
        {
            if ( ww.include*("*"))
            {
                alert('bevat ster , dus ok');
            }
        }
    </script>
</body>
</html>
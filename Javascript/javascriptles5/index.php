<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div id="tekst">halloo</div>
<input type="button" value="KLIKMIJ" onclick="MaakBlauw()";>

    <script>
        function MaakBlauw() 
        {
            let el = document.getElementById('tekst');
                if ( el.style.marginLeft == "200px") 
                {
                    el.style.marginLeft = "0px";
                    el.style.backgroundColor = 'yellow';
                }
                else 
                {
                    el.style.marginLeft = "200px";
                    el.style.backgroundColor = 'blue';
                }

                el.style.transition = "all 1s linear";
        }
        
        let el = document.getElementById('tekst');

            el.style.backgroundColor = "yellow";
            el.style.color = "black";
        
    </script>
</body>
</html>
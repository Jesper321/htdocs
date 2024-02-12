<!DOCTYPE html>
<html lang="en">
<head><style>
    body {
        background: linear-gradient(90deg, rgba(11,200,204,1) 0%, rgba(209,195,195,1) 82%);
    }
    .box2 {
        text-align: center;
        margin-top: 250px;
    }
</style>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Updating </title>
</head>
<body>
    
<?php
print_r($_POST);
// die;

include 'connect.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
}

$select = $conn->query("SELECT * FROM artist WHERE id=$id");
$row = $select->fetch();

if (isset($_POST['submit'])) {
    
    $name = $_POST['name'];
    $country = $_POST['country'];
    $jaartal = $_POST['jaartal'];

    $query = "UPDATE artist SET name = '".$name."',
                            country = '".$country."',
                            jaartal = '".$jaartal."'
                            WHERE id=$id";
// die($query);
    $stmt = $conn->prepare($query);

    $stmt->execute();

    header("location: index.php");
}
?>

<form method="post" class="box2">
    <input type="text" name="name" id="name" value="<?php echo $row['name']; ?>" onkeyup="checkInput(this)"><br>
    <input type="text" name="country" value="<?php echo $row['country']; ?>"><br>
    <input type="number" name="jaartal" value="<?php echo $row['jaartal']; ?>"><br>
    <input type="submit" name="submit" value="Updaten"><br>
</form>



<script>
        function checkInput(id) {
        let bVerstuur = false;

        let inp = document.getElementById(id);
        console.log("id = " + id);
        console.log("value = " + inp.value);
        if(id == "name" || id == "country") {
            if (inp.value.length >= 2) {
                inp.style.backgroundColor = "lightgreen";
                document.getElementById("verstuur").disabled = "";
                bVerstuur = true;
            }
        }
        

        return bVerstuur; 
    }

        function checkAll() {
            let bVerstuurAll = true;

            if (checkInput('name') == false) {
                    bVerstuurAll = false;
                } else {
                    bVerstuurAll = true;
            }
        }   if (checkInput('country') == false) {
                if (inp.value.length >= 2) {
                        inp.style.backgroundColor = "lightgreen";
                        document.getElementById("verstuur").disabled = "";
                        bVerstuurAll = false;
                    } else {
                    inp.style.backgroundColor = "red";
                    document.getElementById("verstuur").disabled = "disabled";
                    bVerstuur = false;
            }

            if (bVerstuurAll == true) {
                document.getElementById("verstuur").disable = "";
            } else {
                document.getElementById("verstuur").disable = "disabled";
            }
        }
    }
    </script>   
</body>
</html>
<?php
    if(isset($_GET['submit'])){
        $dateFrom = $_GET['dateFrom'];
        #echo $dateFrom;
        $dateTo = $_GET['dateTo'];
        #echo $dateTo;
        $query="SELECT * FROM spent WHERE date BETWEEN '$dateFrom' AND '$dateTo' ORDER BY date DESC";
        $conn = mysqli_connect("164.92.165.156","spent","123123","spent");
   
        $result = mysqli_query($conn,$query);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
	<title>Document</title>
</head>

<body>
    <div class="container-fluid">
        <form action="" method="GET">
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">От</label>
                <input type="date" class="form-control" id="formGroupExampleInput" name='dateFrom' required>
              </div>
              <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Сума</label>
                <input type="date" class="form-control" id="formGroupExampleInput" name='dateTo' required>
              </div>
              <button type="submit" name="submit" class="btn btn-success">Филтрирай</button>
              <a href="index.php"><button type="button" class="btn btn-danger">Назад</button></a>
        </form>
    </div>
    <div class="container">
        
            <?php
            if(isset($_GET['submit'])){
                echo "<table class='table'>
                <tr>
                    <th>ID</th>
                    <th>Дата</th>
                    <th>Описание</th>
                    <th>Сума</th>
                </tr>";
                while($row = mysqli_fetch_assoc($result)){
                    echo "<tr>";
                    echo "<td>".$row['id']."</td><td>".$row['date']."</td><td>".$row['description']."</td><td>".$row['amount']."</td>";
                    echo "</tr>";
                }
                echo "</table>";
            }
            
            ?>
        
    </div>
</body>

</html>
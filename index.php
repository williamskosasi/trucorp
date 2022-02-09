<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trucorp</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    $conn = mysqli_connect("172.19.0.3","root","inipassword","Trucorp");
    $prep = $conn->prepare("SELECT * FROM users");
    $prep->execute();
    $result = $prep->get_result();
    $totalUser = 0
    ?>
    <table>
    <tr class="colHead">
        <td>ID</td>
        <td>Nama</td>
        <td>Alamat</td>
        <td>Jabatan2</td>
    </tr>
    <?php
    while($data = $result->fetch_assoc()){
        ?>
            <tr>
                <td class="alignLeft"><?=$data['ID']?></td>
                <td class="alignLeft"><?=$data['Nama']?></td>
                <td class="alignLeft"><?=$data['Alamat']?></td>
                <td class="alignLeft"><?=$data['Jabatan']?></td>
            </tr>
        <?php
        $totalUser = $totalUser + 1;
    }
    ?>
    <br>
    </table>
    <?php
        echo "Total jumlah user = ";
        echo $totalUser;
    ?>
</body>
</html>

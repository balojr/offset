<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registered Users</title>
    <link rel="stylesheet" href="displaydatastyle.css">
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Password</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                include 'connect.php';

                $records = mysqli_query($conn, "SELECT * FROM project");

                while ($data = mysqli_fetch_array($records)){
            ?>
            <tr>
                <td><?php echo $data['user_id'] ?></td>
                <td><?php echo $data['username'] ?></td>
                <td><?php echo $data['passcode'] ?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    <?php mysqli_close($conn) ?>
    <a href="login.html">Back To Form</a>
    <select>
        <option value="">Go fuck yourself</option>
        <option value="">I fucked your wife</option>
        <option value="">Smoke weed</option>
        <option value="">Bluecheese</option>
    </select>
</body>
</html>
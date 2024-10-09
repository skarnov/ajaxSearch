<?php
$searchString = $_POST['searchString'];

if ($searchString) {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "db_arnov";

    $conn = new mysqli($servername, $username, $password, $dbname);

    $sql = "SELECT * FROM tbl_user WHERE user_name LIKE '%$searchString%'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            ?>
            <table style="width:50%; margin: -1% 20%; border: 1px solid black; box-shadow: 0px 0px 100px 10px lime;">
                <thead>
                    <tr>
                        <th style="border: 1px solid black;">ID</th>
                        <th style="border: 1px solid black;">Name</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td style="border: 1px solid black;"><?php echo $row["user_id"]; ?></td>
                        <td style="border: 1px solid black;"><?php echo $row["user_name"]; ?></td>
                    </tr>
                </tbody>
            </table>
            <?php
        }
    } else {
        echo "Not Found";
    }
    $conn->close();
}
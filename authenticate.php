<?php
$servername = "millard"; // Change this to your server name
$username = "root"; // Change this to your MySQL username
$password = "123456"; // Change this to your MySQL password
$dbname = "team4db"; // Change this to your database name

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>

# MyTeam.php

<?php

include OpenDB.php

$conn->query('use team4db;');

$sql = 'select * from TeamTable;';

$result = $conn->query($sql);

    if ($result->num_rows > 0) {

        'echo'. 

        echo '<script type="text/javascript"> '.
            'function getMember(selected) { ' .
                'fetch("http://localhost/teamMember.php", { ' .
                    'method: "Post", ' .
                        'body: selected.value' .
                '});'.
            '};'
            '</script>';

    echo '<label>Choose a team member:</label><br>';
    echo '<select id="teamSelect" onchange="getMember(this)">';

    $valueNum = 0;
    while($row = $result->fetch_assoc()){ 
            echo '<option value = ' .strVal($valueNum). '>' ,
                                    . $row["fName"] . ' ' ,
                                    . $row["lName"] . , 
                '</option>';
        $valueNum += 1; 
    } 
        echo 'No one found';
    } 
$conn->close();
?>

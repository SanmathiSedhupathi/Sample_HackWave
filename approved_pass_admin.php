<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Approved Pass</title>
    <link rel="stylesheet" href="approved_pass_style.css">
</head>
<body>
    <table class="content-table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Roll No</th>
            <th>Department</th>
            <th>Room No</th>
            <th>Reason</th>
            <th>Stud Phn</th>
            <th>Parent Phn</th>
            <th>Going</th>
            <th>Address</th>
            <th>Outgoing_date</th>
            <th>Outgoing_time</th>
            <th>Incoming_date</th>
            <th>Incoming_time</th>
            <th>HOD</th>
            <th>Hostel</th>
            <th>Status</th>
        </tr>
        </thead>
        <tbody>
        <?php
            // Database connection
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "gatepass";

            $conn = new mysqli($servername, $username, $password, $dbname);

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // SQL query to fetch data
            $sql = "SELECT id,full_name,roll_no,department,room_no,reason,student_phone,parent_phone,going,addres,outgoing_date,outgoing_time,incoming_date,incoming_time,Email,hostel,Process FROM pass_data";
            $result = $conn->query($sql);

            // Output data in table rows
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["id"] . "</td>";
                    echo "<td>" . $row["full_name"] . "</td>";
                    echo "<td>" . $row["roll_no"] . "</td>";
                    echo "<td>" . $row["department"] . "</td>";
                    
                    echo "<td>" . $row["room_no"] . "</td>";
                    echo "<td>" . $row["reason"] . "</td>";
                    echo "<td>" . $row["student_phone"] . "</td>";
                    echo "<td>" . $row["parent_phone"] . "</td>";
                    echo "<td>" . $row["going"] . "</td>";
                    echo "<td>" . $row["addres"] . "</td>";
                    echo "<td>" . $row["outgoing_date"] . "</td>";
                    echo "<td>" . $row["outgoing_time"] . "</td>";
                    echo "<td>" . $row["incoming_date"] . "</td>";
                    echo "<td>" . $row["incoming_time"] . "</td>";
                    echo "<td>" . $row["Email"] . "</td>";
                    echo "<td>" . $row["hostel"] . "</td>";
                    echo "<td>" . $row["Process"] . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='3'>No data found</td></tr>";
            }

            $conn->close();
        ?>
        </tbody>
      </table>
      
</body>
</html>
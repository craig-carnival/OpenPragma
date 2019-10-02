<?php
// details
$host = "localhost";
$username = "root";
$password = "";
$db = "opensource";

// opening a connection
$conn = mysqli_connect($host, $username, $password, $db);
//$conn = mysqli_connect($host, $username, $password);
if (!$conn) {
    // failure
    die(mysqli_error($conn));
}

//echo mysqli_get_client_info() . "<br>";
//echo mysqli_get_server_info($conn);

// creating a table
//$sql = "CREATE TABLE tester(id text, data text, date date);";

// altering a table
//$sql = "alter table tester add column num int";

// inserting values into the table
//$sql = "insert into tester(id, data, date, num) VALUES ('abc', 'data abc', curdate(), 12)";
//$sql = "insert into tester(id, data, date, num) VALUES ('def', 'data def', curdate(), 13)";
//$sql = "insert into tester(id, data, date, num) VALUES ('jhi', 'data jhi', curdate(), 14)";

// deleting values from the table
//$sql = "delete from tester where id='jhi'";

// updating values in the table
//$sql = "update tester set data='DATA DEF' where id='def'";

$sql = "select id, data from tester";
$result = mysqli_query($conn, $sql);
//echo mysqli_num_rows($result) . "<br>";
//echo mysqli_num_fields($result);

for ($i = 0; $i < mysqli_num_rows($result); $i++) {
    $row = mysqli_fetch_field($result);
//    print_r(mysqli_fetch_row($result));
//    echo $row[0] . " -- " . $row[1];
    echo "<br>";
//    print_r(mysqli_fetch_assoc($result));

//    field values
//    echo "Field name: " . $row->name . "<br />";
//    echo "Table name: " . $row->table . "<br />";
//    echo "Default value: " . $row->def . "<br />";
//    echo "Max length: " . $row->max_length . "<br />";
//    echo "Not NULL: " . $row->not_null . "<br />";
//    echo "Primary Key: " . $row->primary_key . "<br />";
//    echo "Unique Key: " . $row->unique_key . "<br />";
//    echo "Mutliple Key: " . $row->multiple_key . "<br />";
//    echo "Numeric Field: " . $row->numeric . "<br />";
//    echo "BLOB: " . $row->blob . "<br />";
//    echo "Field Type: " . $row->type . "<br />";
//    echo "Unsigned: " . $row->unsigned . "<br />";
//    echo "Zero-filled: " . $row->zerofill . "<br /><br />";

}

//if (mysqli_query($conn, $sql)) {
//    echo "Success";
//} else {
//    echo "Failure";
//}

//mysqli_commit($conn);

mysqli_close($conn);
// Please close the database connection after your program is over

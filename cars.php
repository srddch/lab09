<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Used Cars</title>
</head>
<body>
    <h1>Used Cars</h1>

    <?php
    require_once "settings.php";

    mysqli_report(MYSQLI_REPORT_OFF);
    $dbconn = @mysqli_connect($host, $user, $pwd, $sql_db);

    if ($dbconn) {
        $query = "SELECT * FROM cars";
        $result = mysqli_query($dbconn, $query);

        if ($result) {
            echo "<p>Query successful.</p>";
            echo "<p>Number of cars: "
                . mysqli_num_rows($result) . "</p>";

            mysqli_free_result($result);
        } else {
            echo "<p>Unable to run the query.</p>";
        }

        mysqli_close($dbconn);
    } else {
        echo "<p>Unable to connect to the db.</p>";
    }
    ?>
</body>
</html>
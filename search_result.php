<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Search Results</title>
</head>
<body>
    <h1>Search Results</h1>

    <?php
    require_once "settings.php";

    mysqli_report(MYSQLI_REPORT_OFF);
    $conn = @mysqli_connect($host, $user, $pwd, $sql_db);

    if ($conn) {
        if (isset($_GET['model'])) {
            $model = mysqli_real_escape_string(
                $conn,
                $_GET['model']
            );

            echo "<p>Search model: "
                . htmlspecialchars($_GET['model'], ENT_QUOTES, 'UTF-8')
                . "</p>";
        } else {
            echo "<p>Please enter a model to search.</p>";
        }

        mysqli_close($conn);
    } else {
        echo "<p>Unable to connect to the db.</p>";
    }
    ?>
</body>
</html>
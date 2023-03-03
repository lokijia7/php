<!DOCTYPE html>
<html>

<head>
    <title>Table with 100 Rows</title>
</head>

<body>
    <table border="1">
        <?php
        $row = 1;
        while ($row <= 100) {
            echo "<tr><td>Row $row</td></tr>";
            $row++;
        }
        ?>
    </table>
</body>

</html>
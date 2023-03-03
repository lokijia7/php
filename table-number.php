<!DOCTYPE html>
<html>

<head>

    <style>
        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 5px;
        }
    </style>
</head>

<body>
    <table>
        <thead>
            <tr>
                <th>Row</th>
                <th>Number</th>
            </tr>
        </thead>
        <tbody>
            <?php
            for ($i = 1; $i <= 100; $i++) {
                echo "<tr><td>Row $i</td><td>$i</td></tr>";
            }
            ?>
        </tbody>
    </table>
</body>

</html>
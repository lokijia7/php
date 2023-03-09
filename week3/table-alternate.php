<!DOCTYPE html>
<html>


<style>
    table {
        border-collapse: collapse;
        width: 100%;
        font-size: 14px;
    }

    table td,
    table th {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
    }

    table th {
        background-color: peachpuff;
    }

    table tr:nth-child(even) {
        background-color: peachpuff;
    }
</style>
</head>

<body>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <?php
            for ($i = 1; $i <= 100; $i++) {
                $name = 'User ' . $i;
                $email = 'user' . $i . '@example.com';
            ?>
                <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $name; ?></td>
                    <td><?php echo $email; ?></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</body>

</html>
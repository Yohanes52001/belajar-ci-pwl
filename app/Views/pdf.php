<!DOCTYPE html>
<html>
    <head>
        <title>Transactions</title>
        <style>
            table {
                width: 100%;
                border-collapse: collapse;
            }
            table, th, td {
                border: 1px solid black;
            }
            th, td {
                padding: 8px;
                text-align: left;
            }
        </style>
    </head>
    <body>

    <h1>Transactions</h1>

    <table>
        <tr>
            <th>ID</th>
            <th>User ID</th>
            <th>Product ID</th>
            <th>Quantity</th>
            <th>Total Price</th>
            <th>Status</th>
        </tr>
        <?php foreach ($transactions as $transaction): ?>
            <tr>
                <td><?= $transaction['id'] ?></td>
                <td><?= $transaction['user_id'] ?></td>
                <td><?= $transaction['product_id'] ?></td>
                <td><?= $transaction['quantity'] ?></td>
                <td><?= $transaction['total_price'] ?></td>
                <td><?= $transaction['status'] == 1 ? 'Completed' : 'Pending' ?></td>
            </tr>
        <?php endforeach; ?>
    </table>

    </body>
</html>

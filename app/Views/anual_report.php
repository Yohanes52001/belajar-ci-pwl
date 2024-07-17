<!DOCTYPE html>
<html>
<head>
    <title>Annual Report</title>
</head>
<body>

<h1>Annual Report</h1>

<h2>Transaksi Tahunan</h2>
<table border="1">
    <tr>
        <th>Tahun</th>
        <th>Jumlah Transaksi</th>
        <th>Total Income</th>
    </tr>
    <?php foreach ($annualTransactions as $transaction): ?>
        <tr>
            <td><?= $transaction['tahun'] ?></td>
            <td><?= $transaction['jumlah_transaksi'] ?></td>
            <td><?= $transaction['total_income'] ?></td>
        </tr>
    <?php endforeach; ?>
</table>

<h2>Transaksi Bulanan</h2>
<table border="1">
    <tr>
        <th>Tahun</th>
        <th>Bulan</th>
        <th>Jumlah Transaksi</th>
        <th>Total Income</th>
    </tr>
    <?php foreach ($monthlyTransactions as $transaction): ?>
        <tr>
            <td><?= $transaction['tahun'] ?></td>
            <td><?= $transaction['bulan'] ?></td>
            <td><?= $transaction['jumlah_transaksi'] ?></td>
            <td><?= $transaction['total_income'] ?></td>
        </tr>
    <?php endforeach; ?>
</table>

<h2>Users</h2>
<table border="1">
    <tr>
        <th>User ID</th>
        <th>Nama</th>
        <th>Email</th>
    </tr>
    <?php foreach ($users as $user): ?>
        <tr>
            <td><?= $user['id'] ?></td>
            <td><?= $user['nama'] ?></td>
            <td><?= $user['email'] ?></td>
        </tr>
    <?php endforeach; ?>
</table>

</body>
</html>

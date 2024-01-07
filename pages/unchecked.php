<?
include("./api/config.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Belum Dichecklist</title>
    <!-- Add your styles or Bootstrap link here -->
</head>
<body>
    <div class="container mt-5">
        <h1>Data Belum Dichecklist</h1>
        <table class="table">
            <thead>
                <tr>
                    <!-- Adjust the headers based on your table structure -->
                    <th>ID</th>
                    <th>Nama</th>
                    <!-- Add more headers as needed -->
                </tr>
            </thead>
            <tbody>
                <?php foreach ($uncheckedItems as $item): ?>
                    <tr>
                        <td><?php echo $item['id']; ?></td>
                        <td><?php echo $item['nama']; ?></td>
                        <!-- Add more columns as needed -->
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>

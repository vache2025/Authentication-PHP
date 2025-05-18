<?php
require '../includes/auth.php';
require '../config/db.php';
checkLogin();

$submissions = $pdo->query("SELECT * FROM submissions ORDER BY created_at DESC")->fetchAll();
?>

<h2>Submissions</h2>
<table border="1" cellpadding="5">
    <tr><th>Name</th><th>Email</th><th>Message</th><th>Time</th></tr>
    <?php foreach ($submissions as $s): ?>
    <tr>
        <td><?= htmlspecialchars($s['name']) ?></td>
        <td><?= htmlspecialchars($s['email']) ?></td>
        <td><?= htmlspecialchars($s['message']) ?></td>
        <td><?= $s['created_at'] ?></td>
    </tr>
    <?php endforeach; ?>
</table>
<a href="logout.php">Logout</a>

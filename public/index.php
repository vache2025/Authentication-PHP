<?php require '../config/db.php'; ?>

<form method="POST">
    <input name="name" placeholder="Your name" required>
    <input name="email" type="email" placeholder="Your email" required>
    <textarea name="message" placeholder="Message" required></textarea>
    <button type="submit">Submit</button>
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $stmt = $pdo->prepare("INSERT INTO submissions (name, email, message) VALUES (?, ?, ?)");
    $stmt->execute([
        $_POST['name'],
        $_POST['email'],
        $_POST['message']
    ]);
    echo "Thanks for submitting!";
}
?>

<?php include 'assets/include/header.php'; ?>
<?php include 'assets/include/menu.php'; ?>

<div class="content">
    <h1>Contact Us</h1>
    <form action="assets/scripts/form-handler.php" method="POST">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="message">Message:</label>
        <textarea id="message" name="message" required></textarea>

        <button type="submit">Send</button>
    </form>
</div>

<?php include 'assets/include/footer.php'; ?>
<?php include 'assets/include/header.php'; ?>
<?php include 'assets/include/menu.php'; ?>
<?php include 'assets/components/cards.php'; ?>

<div class="content">
    <span class="navigation">Processadores / INTEL</span>
    <h1>INTEL</h1>

    <div class="cards-container">
        <?php
        generateCard("INTEL CORE I9-12900KF", "INTEL CORE I9-12900KF, 16-CORE, 24-THREADS, 3.2GHZ (5.2GHZ TURBO), CACHE 30MB, LGA1700, BX8071512900KF", "assets/images/i912th.jpg", "#");
        generateCard("INTEL CORE I9-14900K", "INTEL CORE I9-14900K, 24-CORE, 32-THREADS, 3.2GHZ (5.8GHZ TURBO), CACHE 36MB, LGA1700, BX8071514900K", "assets/images/i914th.jpg", "#");
        generateCard("INTEL CORE I9-14900", "INTEL CORE I9-14900, 24-CORE, 32-THREADS, 3.6GHZ (5.8GHZ TURBO), CACHE 36MB, LGA1700, BX8071514900", "assets/images/i914th2.jpg", "#");
        ?>
    </div>
</div>

<?php include 'assets/include/footer.php'; ?>
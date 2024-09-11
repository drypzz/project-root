<?php include 'assets/include/header.php'; ?>
<?php include 'assets/include/menu.php'; ?>
<?php include 'assets/components/cards.php'; ?>

<div class="content">
    <span class="navigation">Placa de Vídeo / NVIDIA GeForce</span>
    <h1>NVIDIA GEFORCE</h1>

    <div class="cards-container">
        <?php
        generateCard("RTX 6000", "PNY GEFORCE RTX 6000 ADA GENERATION, 48GB, GDDR6, 384-BIT, VCNRTX6000ADA-PB", "assets/images/rtx6000.jpg", "#");
        generateCard("RTX 5000", "PNY QUADRO RTX 5000 ADA GENERATION, 32GB, GDDR6, 256-BIT, VCNRTX5000ADA-PB", "assets/images/rtx5000.jpg", "#");
        generateCard("RTX A5500", "PNY QUADRO RTX A5500, 24GB, GDDR6, 384-BIT, VCNRTXA5500-PB", "assets/images/rtxa5500.jpg", "#");
        ?>
    </div>
</div>

<?php include 'assets/include/footer.php'; ?>
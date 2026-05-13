<!DOCTYPE html>
<html>
<head>
    <title>Detail</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
</head>
<body>

<div class="detail-page">

    <div class="detail-card">

        <?php if($id == 1): ?>

            <img src="<?php echo e(asset('assets/images/ortus.jpg')); ?>">
            <h2>Ortuseight Vanquish</h2>
            <p>Sepatu ringan untuk kecepatan maksimal di lapangan.</p>

        <?php elseif($id == 2): ?>

            <img src="<?php echo e(asset('assets/images/ls.jpg')); ?>">
            <h2>Specs Lightspeed</h2>
            <p>Sepatu dengan grip kuat dan stabil saat bermain.</p>

        <?php elseif($id == 3): ?>

            <img src="<?php echo e(asset('assets/images/mills.webp')); ?>">
            <h2>Mills Flame 2.0 Pink</h2>
            <p>
                Sepatu futsal ringan, nyaman, dan cocok untuk permainan cepat.
                Sangat ideal untuk kontrol bola maksimal.
            </p>

        <?php elseif($id == 4): ?>

            <img src="<?php echo e(asset('assets/images/flame.webp')); ?>">
            <h2>Mills Flame 2.0 Blue</h2>
            <p>
                Sepatu ini menghadirkan desain modern yang menarik, cocok untuk meningkatkan performa di lapangan.
            </p>

        <?php elseif($id == 5): ?>

            <img src="<?php echo e(asset('assets/images/item.webp')); ?>">
            <h2>Mills Flame 2.0 Black</h2>
            <p>
                Sepatu ini populer karena keseimbangan antara daya tahan, gaya, dan harga terjangkau.
            </p>

        <?php elseif($id == 6): ?>

            <img src="<?php echo e(asset('assets/images/catalist.jpg')); ?>">
            <h2>Ortuseight catalist Hyperion IN</h2>
            <p>
               Sepatu ini memiliki upper sintetis yang tipis dan lembut, serta desain futuristik dengan outsole yang nyaman untuk tipe kaki lebar.
            </p>

         <?php elseif($id == 7): ?>

            <img src="<?php echo e(asset('assets/images/trident in.webp')); ?>">
            <h2>Ortuseight Trident IN</h2>
            <p>
                . Sepatu ini memiliki upper sintetis yang lembut, nyaman untuk kaki lebar, serta dilengkapi outsole rubber anti-selip bermotif camo yang stylish..
            </p>

        <?php elseif($id == 8): ?>

            <img src="<?php echo e(asset('assets/images/galactica.webp')); ?>">
            <h2>Specs Galactica Morph NV IN</h2>
            <p>
                . Sepatu ini menonjolkan grafis "bio morph" yang dinamis, material PU sintetik microfiber, serta teknologi outsole karet dengan midsole ringan.
            </p>

             <?php elseif($id == 9): ?>

            <img src="<?php echo e(asset('assets/images/speedblaze.webp')); ?>">
            <h2>Specs Speedblaze</h2>
            <p>
                Sepatu futsal ringan, nyaman, dan cocok untuk permainan cepat.
                Sangat ideal untuk kontrol bola maksimal.
            </p>
            

        <?php endif; ?>

        <br><br>

        <a href="/home" class="btn">Back</a>

    </div>

</div>

</body>
</html><?php /**PATH C:\laragon\www\rajo-sports\resources\views/detail.blade.php ENDPATH**/ ?>
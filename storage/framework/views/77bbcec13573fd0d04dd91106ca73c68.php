<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
</head>
<body>

<div class="home-page">

    <div class="topbar">

        <h1 style="color:red;">Home</h1>

       <a href="/profile">
    <img src="<?php echo e(asset('assets/images/rr.png')); ?>" class="profile-mini" alt="profile">
</a>

    </div>

    <div class="product-wrapper">

        <!-- PRODUCT 1 -->
        <a href="/detail/1" style="text-decoration:none;">
            <div class="product">
                <img src="<?php echo e(asset('assets/images/ortus.jpg')); ?>">
                <h3>Ortuseight Vanquish</h3>
            </div>
        </a>

        <!-- PRODUCT 2 -->
        <a href="/detail/2" style="text-decoration:none;">
            <div class="product">
                <img src="<?php echo e(asset('assets/images/ls.jpg')); ?>">
                <h3>Specs Lightspeed Reborn</h3>
            </div>
        </a>

        <!-- PRODUCT 3 -->
        <a href="/detail/3" style="text-decoration:none;">
            <div class="product">
               <img src="<?php echo e(asset('assets/images/mills.webp')); ?>">
                <h3>Mills Flame 2.0 Pink</h3>
            </div>
        </a>

        <!-- PRODUCT 4 -->
<a href="/detail/4" style="text-decoration:none;">
    <div class="product">
       <img src="<?php echo e(asset('assets/images/flame.webp')); ?>">
        <h3>Mills Flame 2.0 Blue</h3>
    </div>
</a>

<!-- PRODUCT 5 -->
<a href="/detail/5" style="text-decoration:none;">
    <div class="product">
       <img src="<?php echo e(asset('assets/images/item.webp')); ?>">
        <h3>Mills Flame 2.0 Black</h3>
    </div>
</a>

<!-- PRODUCT 6 -->
<a href="/detail/6" style="text-decoration:none;">
    <div class="product">
       <img src="<?php echo e(asset('assets/images/catalist.jpg')); ?>">
        <h3>Ortuseight catalist Hyperion IN</h3>
    </div>
</a>

<!-- PRODUCT 7 -->
<a href="/detail/7" style="text-decoration:none;">
    <div class="product">
       <img src="<?php echo e(asset('assets/images/trident in.webp')); ?>">
        <h3>Ortuseight Trident IN</h3>
    </div>
</a>

<!-- PRODUCT 8 -->
<a href="/detail/8" style="text-decoration:none;">
    <div class="product">
       <img src="<?php echo e(asset('assets/images/galactica.webp')); ?>">
        <h3>Specs Galactica Morph NV IN</h3>
    </div>
</a>

<!-- PRODUCT 9 -->
<a href="/detail/9" style="text-decoration:none;">
    <div class="product">
       <img src="<?php echo e(asset('assets/images/speedblaze.webp')); ?>">
        <h3>Specs Speedblaze</h3>
    </div>
</a>

    </div>

</div>

</body>
</html><?php /**PATH C:\laragon\www\rajo-sports\resources\views/home.blade.php ENDPATH**/ ?>
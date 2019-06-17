<?php
foreach ($tulisan as $tulis) : ?>
    <!-- Postingan baru -->
    <a href="<?php echo site_url('/post/'.$tulis['slug']); ?>">
        <h1 class="display-4 p-0"><?php echo $tulis['judul']; ?></h1>
    </a>
    <small class="text-italic">
        <span>ditulis oleh </span>
        <a href="#"><?php echo $tulis['author']; ?></a>
        <span> | </span>
        <span><?php echo $tulis['tanggal']; ?></span>
    </small>
    <img class="img-fluid d-block w-50 my-2" style="max-width: 30em;" src="<?php echo $tulis['gambar'];?>">
    <div class="text">
        <?php 
        $brief = word_limiter($tulis['isi'],50);
        echo $brief;
        ?>
    </div>
    <a href="<?php echo site_url('/post/'.$tulis['slug']); ?>" class="btn btn-outline-primary">Lanjut baca...</a>
    <hr>

<?php endforeach;?>
    <!-- Postingan baru -->
    <h1 class="display-4 p-0"><?php echo $post['judul']; ?></h1>
    <small class="text-italic">
        <span>ditulis oleh </span>
        <a href="#"><?php echo $post['author']; ?></a>
        <span> | </span>
        <span><?php echo $post['tanggal']; ?></span>
    </small>
    <img class="img-fluid d-block mx-auto w-50 my-2" src="<?php echo $post['gambar'];?>">
    <div class="text">
        <?php echo $post['isi'];?>
    </div>
    <a href="edit/<?php echo $post['slug'] ?>" class="btn btn-outline-primary float-right mx-2 my-3">Sunting</a>
    <?php 
    $atribut = array('id'=>'hapuspost');
    $hidden = array('linkgambar' => $post['gambar']);
    echo form_open('post/hapus/'.$post['postid'], $atribut, $hidden);
    ?>
        <input type="submit" class="btn btn-outline-danger float-right mx-2 my-3" value="Hapus">
    </form>
    <hr>
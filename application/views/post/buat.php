<?php 
echo validation_errors();
if(isset($error)) {print $error;}
?>

<div class="col-md-10 mx-auto">
    <div class="text col-md-12">
        <h1 class="text-center">Konten Anda</h1>
        <h3 class="text-center">Silahkan Ketik Disini</h3>
        <hr>
        <?php echo form_open('post/buat'); ?>
            <div class="form-group">
                <label for="judul">Judul</label>
                <input type="text" class="form-control" name="judul" id="judul" placeholder="Judul Artikel">
            </div>
            <div class="form-group">
                <label for="isiartikel">Isi artikel</label>
                <textarea class="form-control" name="isiartikel" id="editor" rows="4"></textarea>
            </div>
            <div class="form-group">
              <label for="kategori">Kategori</label>
              <input type="text" class="form-control" name="kategori" id="kategori" placeholder="Ketik Kategori">
            </div>
            <div class="form-group">
              <label for="author">Author</label>
              <input type="text" class="form-control" name="author" id="author" placeholder="ketik nama penulis">
            </div>
            <div class="form-group">
              <label for="linkgambar">Link Gambar</label>
              <input type="text" class="form-control" name="linkgambar" id="linkgambar" placeholder="tempel link gambar disini">
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-outline-putih px-2" value="Kirim" id="buatpost">
                <input type="reset" class="btn btn-outline-putih px-2" value="Ketik ulang form" id="resetbuatpost">
            </div>
        </form>
        <br>
    </div>
</div>
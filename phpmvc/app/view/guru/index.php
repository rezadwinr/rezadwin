<div class="container mt-4">
    <div class="row">
        <div class="col-lg-6">
            <?php Flasher::flash(); ?>
        </div>
    </div>
    <h2 class="text-primary">Data Guru</h2>
    <button type="button" class="btn btn-primary btn-sm mt-2" onclick="add()">Tambah Guru +</button>
    <div class="mt-3" style="width: 50%;">
        <ul class="list-group">
            <?php foreach ($data['guru'] as $i) : ?>
                <li class="list-group-item d-flex justify-content-between align-item-center">
                    <?= $i['nama']; ?>
                    <div class="float-end">
                        <a href="<?= BASE_URL; ?>/guru/detail/<?= $i['id']; ?>" onclick="tes(this)" data-id="<?= $i['id']; ?>" class="btn btn-primary btn-sm">Baca</a>
                        <button type="button" class="btn btn-success btn-sm" onclick="ubah_data(this)" data-id="ubah_<?= $i['id']; ?>">Ubah</button>
                        <a href="<?= BASE_URL; ?>/guru/hapus/<?= $i['id']; ?>" class="btn btn-danger btn-sm">Hapus</a>
                    </div>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>

    <!-- add guru -->
    <div class="add" id="add">
        <div class="content-add">
            <span class="close" onclick="cl()">&times;</span>
            <h4>Tambah Data Guru</h4>
            <form action="<?= BASE_URL; ?>/guru/tambah" method="POST" class="mt-3">
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" name="nama" id="nama" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                    <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
                        <option value="Laki - Laki">Laki - Laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="mapel" class="form-label">Mapel</label>
                    <input type="text" name="mapel" id="mapel" class="form-control">
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-success btn-sm">Tambah Guru</button>
                    <button type="button" class="btn btn-secondary btn-sm" onclick="cl()">Close</button>
                </div>
            </form>
        </div>
    </div>
    <!-- end add -->
    <!-- edit guru -->
    <?php foreach ($data['guru'] as $i) : ?>
        <div class="ubah" id="ubah_<?= $i['id']; ?>">
            <div class="content-ubah">
                <span class="close" onclick="cls(this)" data-ubh="ubah_<?= $i['id']; ?>">&times;</span>
                <h4>Tambah Data Guru</h4>
                <form action="<?= BASE_URL; ?>/guru/ubah" method="POST" class="mt-3">
                    <input type="hidden" name="id" id="id" value="<?= $i['id']; ?>">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" name="nama" id="nama" class="form-control" value="<?= $i['nama']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                        <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
                            <?php
                                if($i['jenis_kelamin'] == 'Laki - Laki'){
                                    echo '<option value="Laki - Laki" selected>Laki - Laki</option><option value="Perempuan">Perempuan</option>';
                                } else if($i['jenis_kelamin'] == 'Perempuan'){
                                    echo '<option value="Laki - Laki">Laki - Laki</option><option value="Perempuan" selected>Perempuan</option>';
                                } else {
                                    echo '<option value="Laki - Laki">Laki - Laki</option><option value="Perempuan">Perempuan</option>';
                                }
                            ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="mapel" class="form-label">Mapel</label>
                        <input type="text" name="mapel" id="mapel" class="form-control" value="<?= $i['mapel']; ?>">
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary btn-sm">Ubah Guru</button>
                        <button type="button" class="btn btn-secondary btn-sm" onclick="cls(this)" data-ubh="ubah_<?= $i['id']; ?>">Close</button>
                    </div>
                </form>
            </div>
        </div>
    <?php endforeach; ?>
    <!-- edit end -->
</div>
<script>
    function cls(obj){
        document.getElementById(obj.getAttribute('data-ubh')).style.display = 'none'
    }
    function ubah_data(obj){
        document.getElementById(obj.getAttribute('data-id')).style.display = 'block'
    }
    function cl(){
        document.getElementById('add').style.display = 'none'
    }
    function add(){
        document.getElementById('add').style.display = 'block'
    }
</script>
<style>
    .close:hover,
    .close:focus {
        color: #000;
        text-decoration: none;
        cursor: pointer;
    }
    .content-ubah{
        background-color: #fefefe;
        margin: auto;
        padding: 20px;
        border: 1px solid #888;
        width: 40%;
        border-radius: 7px;
    }
    .ubah{
        display: none;
        position: fixed;
        z-index: 1;
        padding-top: 100px;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgb(0,0,0);
        background-color: rgba(0,0,0,0.4);
    }
    .content-add{
        background-color: #fefefe;
        margin: auto;
        padding: 20px;
        border: 1px solid #888;
        width: 40%;
        border-radius: 7px;
    }
    .add{
        display: none;
        position: fixed;
        z-index: 1;
        padding-top: 100px;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgb(0,0,0);
        background-color: rgba(0,0,0,0.4);
    }
</style>
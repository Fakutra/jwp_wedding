<div class="content-wrapper">
    <div class="row">
        <div class="col-md-12 grid-margin">
            <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                    <h3 class="font-weight-bold">Manajemen Katalog</h3>
                    <h6 class="font-weight-normal mb-0">JeWePe Wedding Organizer</h6>
                </div>                    
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Tambah Data</h4>

                    <form action="<?= base_url('admin/Katalog/addData'); ?>" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="form-group">
                                    <label for="exampleInputName1">Nama Paket</label>
                                    <input type="text" class="form-control" id="exampleInputName1" name="package_name" placeholder="Paket Name" required>
                                </div>
                                <div class="form-group">
                                    <div class="editor-container">
                                        <label for="exampleAddress1">Deskripsi</label>
                                        <textarea class="form-control" name="description" id="editor" row="4"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>Gambar</label>
                                    <input type="file" name="image" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputName1">Harga (Rp)</label>
                                    <input type="text" class="form-control" id="exampleInputName1" name="price" placeholder="Harga" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleSelectStatusPublish">Status Publish</label>
                                    <select class="form-control" name="status_publish" id="exampleSelectStatusPublish">
                                        <option value="Y">Publish</option>
                                        <option value="N">Draft</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 text-right">
                            <a href="<?= base_url('admin/Katalog'); ?>" class="btn btn-secondary mr-2">Kembali</a>
                            <button type="submit" class="btn btn-primary mr-2">Tambah</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
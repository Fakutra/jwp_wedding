<div class="content-wrapper">
  <div class="row">
    <div class="col-md-12 grid-margin">
      <div class="row">
        <div class="col-12 col-xl-8 mb-4 mb-xl-0">
          <h3 class="font-weight-bold">Order Management</h3>
          <h6 class="font-weight-normal mb-0">JeWePe Wedding Organizer</h6>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <div class="row">
            <div class="col-lg-6">
              <h4 class="card-title">Order Data</h4>
            </div>
            <div class="col-lg-12">
              <?= $this->session->flashdata('message');; ?>
            </div>
          </div>

          <div class="table-responsive pt-3">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th class="text-center">No</th>
                  <th class="text-center">Image</th>
                  <th class="text-center">Package Name</th>
                  <th class="text-center">Customer's Name</th>
                  <th class="text-center">Customer Email</th>
                  <th class="text-center">Status Publish</th>
                  <th class="text-center"></th>
                </tr>
              </thead>
              <tbody>
              <?php 

              $no = 1;
              foreach ($getAllPesanan as $row) :
              ?>
                <tr>
                  <td class="text-center">
                    <?= $no++; ?>
                  </td>
                  <td class="text-center">
                    <a href="<?= base_url('assets/files/katalog/') . $row->image; ?>" target="_blank">
                      <img src="<?= base_url('assets/files/katalog/') . $row->image; ?>" class="img-fluid" style="border-radius: 10%;
                      width: 60px; height: 60px" alt="">
                    </a>
                  </td>
                  <td><?= $row->package_name; ?></td>
                  <td class="text-center"><?= $row->name; ?></td>
                  <td class="text-center"><?= $row->email; ?></td>
                  <td class="text-center">
                    <?php if ($row->status == 'requested') {
                      echo '<div class="badge badge-primary">Menunggu Konfirmasi </div>';
                    } else {
                      echo '<div class="badge badge-success">Pesanan Diterima </div>';
                    } ?>
                  </td>
                  <td class="text-center">
                    <?php if ($row->status == 'requested') { ?>
                      <a  class="btn btn-sm btn-info" href="<?= base_url('admin/Pesanan/updateStatus?status=approved&id=') . $row->order_id ?>"
                      title="Edit">Terima</a>
                    <?php } else { ?>
                      <a  class="btn btn-sm btn-warning" href="<?= base_url('admin/Pesanan/updateStatus?status=requested&id=') . $row->order_id ?>"
                      title="Edit">Batalkan</a>
                    <?php } ?>
                    <a  class="btn btn-sm btn-danger" href="<?= base_url('admin/Pesanan/delete?id=') . $row->order_id ?>" 
                    title="Hapus" onclick="if (!confirm('Apakah anda yakin akan menghapus Pesanan ini??')) {return false; }">Delete</a>
                    
                  </td>
                </tr>
              <?php endforeach; ?>
              
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
</div>
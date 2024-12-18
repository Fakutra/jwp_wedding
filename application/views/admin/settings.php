    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="row">
                    <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                        <h3 class="font-weight-bold">Settings Profile Website</h3>
                        <h6 class="font-weight-normal mb-0">JeWePe Wedding Organizer</h6>
                    </div>
                    <div class="col-12 col-xl-4">
                        <div class="justify-content-end d-flex">
                            <div class="dropdown flex-md-grow-1 flex-xl-grow-0">
                                <button class="btn btn-sm btn-light bg-white dropdown-toggle" type="button" id="dropdownMenuDate2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                    <i class="mdi mdi-calendar"></i> Today (10 Jan 2021)
                                </button>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuDate2">
                                <a class="dropdown-item" href="#">January - March</a>
                                <a class="dropdown-item" href="#">March - June</a>
                                <a class="dropdown-item" href="#">June - August</a>
                                <a class="dropdown-item" href="#">August - November</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Settings Profile Website</h4>

                  <?php $this->session->flashdata('message'); ?>

                  <form action="<?= base_url('admin/Settings/updateData'); ?>" method="post" enctype="multipart/form-data">
                    <input type="hidden" value="<?= $settings->id; ?>" name="id">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="exampleInputName1">Nama Website</label>
                                <input type="text" class="form-control" id="exampleInputName1" name="website_name" placeholder="Website Name" value="<?= $settings->website_name; ?>" required>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="exampleInputName1">Phone Number 1</label>
                                <input type="text" class="form-control" id="exampleInputName1" name="phone_number1" placeholder="Phone Number 1" value="<?= $settings->phone_number1; ?>" required>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="exampleInputName1">Phone Number 2</label>
                                <input type="text" class="form-control" id="exampleInputName1" name="phone_number2" placeholder="Phone Number 1" value="<?= $settings->phone_number2; ?>">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="exampleInputName1">Email 1</label>
                                <input type="text" class="form-control" id="exampleInputName1" name="email1" placeholder="Email 1" value="<?= $settings->email1; ?>" required>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="exampleInputName1">Email 2</label>
                                <input type="text" class="form-control" id="exampleInputName1" name="email2" placeholder="Email 1" value="<?= $settings->email2; ?>">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="exampleAdress1">Address</label>
                                <textarea class="form-control" id="exampleAdress1" name="address" rows="4"><?= $settings->address; ?></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleMaps1">Maps</label>
                                <textarea class="form-control" id="exampleMaps1" name="maps" rows="4"><?= $settings->maps; ?></textarea>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="exampleInputName1">Logo Website</label>
                                <input type="file" class="form-control" id="exampleInputName1" name="logo" placeholder="Logo Website" value="">
                            </div>
                            <div class="form-group">
                                <img src="<?= base_url('assets/files/').$settings->logo; ?>" class="img-thumbnail" style="max-width: 120px;" alt=""> 
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="exampleInputName1">Facebook</label>
                                <input type="text" class="form-control" id="exampleInputName1" name="facebook_url" placeholder="Facebook" value="<?= $settings->facebook_url; ?>" required>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="exampleInputName1">Instagram</label>
                                <input type="text" class="form-control" id="exampleInputName1" name="instagram_url" placeholder="Instagram" value="<?= $settings->instagram_url; ?>">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="exampleInputName1">Youtube</label>
                                <input type="text" class="form-control" id="exampleInputName1" name="youtube_url" placeholder="Youtube" value="<?= $settings->youtube_url; ?>">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="exampleHeaderBusinnessHour1">Header Businness Hour</label>
                                <textarea class="form-control" id="exampleHeaderBusinnessHour1" name="header_bussines_hour" rows="4"><?= $settings->header_bussines_hour; ?></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleTimeBusinnessHour1">Time Businness Hour</label>
                                <textarea class="form-control" id="exampleTimeBusinnessHour1" name="time_bussines_hour" rows="4"><?= $settings->time_bussines_hour; ?></textarea>
                            </div>
                        </div>
                        <div class="col-lg-12 text-right">
                            <button type="submit" class="btn btn-warning mr-2">Update</button>
                        </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
        </div>
    </div>
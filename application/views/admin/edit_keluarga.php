    <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="<?php echo base_url('admin') ?>">Dashboard</a>
        </li>
        <li class="breadcrumb-item">
          <a href="<?php echo base_url('admin/data-keluarga') ?>">Data Keluarga</a>
        </li>
        <li class="breadcrumb-item active">Edit Keluarga</li>
    </ol>

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.css.map">

     <div class="row">
        <div class="col-lg-12">
            <div class="card mb-3">
                <div class="card-header">
                    <h5>Edit Data Keluarga</h5>
                </div>
                <div class="card-body">
                    <?php echo $this->session->flashdata('msg') ?>

                    <?php echo form_open('admin/edit-keluarga/'. $data->nim) ?>
                    
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2">
                                <label for="nama">
                                    <b>Nama Ayah<span style="color: red;">*</span></b>
                                </label>
                            </div>
                            <div class="col-md-10">
                                <input required type="text" name="n_ayah" value="<?php echo $data->n_ayah ?>" class="form-control">
                            </div>
                        </div>    
                    </div>

                     <div class="form-group">
                        <div class="row">
                            <div class="col-md-2">
                                <label for="nama">
                                    <b>Nama Ibu<span style="color: red;">*</span></b>
                                </label>
                            </div>
                            <div class="col-md-10">
                                <input required type="text" name="n_ibu" value="<?php echo $data->n_ibu ?>" class="form-control">
                            </div>
                        </div>    
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2">
                                <label for="agama">
                                    <b>Agama Ayah<span style="color: red;">*</span></b>
                                </label>
                            </div>
                            <div class="col-md-10">
                                <input required type="text" name="agama_ayah" value="<?php echo $data->agama_ayah ?>" class="form-control">
                            </div>
                        </div>    
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2">
                                <label for="agama">
                                    <b>Agama Ibu<span style="color: red;">*</span></b>
                                </label>
                            </div>
                            <div class="col-md-10">
                                <input required type="text" name="agama_ibu" value="<?php echo $data->agama_ibu ?>" class="form-control">
                            </div>
                        </div>    
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2">
                                <label for="agama">
                                    <b>Pekerjaan Ayah<span style="color: red;">*</span></b>
                                </label>
                            </div>
                            <div class="col-md-10">
                                <input required type="text" name="pekerjaan_ayah" value="<?php echo $data->pekerjaan_ayah ?>" class="form-control">
                            </div>
                        </div>    
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2">
                                <label for="agama">
                                    <b>Pekerjaan Ibu<span style="color: red;">*</span></b>
                                </label>
                            </div>
                            <div class="col-md-10">
                                <input required type="text" name="pekerjaan_ibu" value="<?php echo $data->pekerjaan_ibu ?>" class="form-control">
                            </div>
                        </div>    
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2">
                                <label for="agama">
                                    <b>Usia Ayah<span style="color: red;">*</span></b>
                                </label>
                            </div>
                            <div class="col-md-10">
                                <input required type="number" name="usia_ayah" value="<?php echo $data->usia_ayah ?>" class="form-control">
                            </div>
                        </div>    
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2">
                                <label for="agama">
                                    <b>Usia Ibu<span style="color: red;">*</span></b>
                                </label>
                            </div>
                            <div class="col-md-10">
                                <input required type="number" name="usia_ibu" value="<?php echo $data->usia_ibu ?>" class="form-control">
                            </div>
                        </div>    
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2">
                                <label for="agama">
                                    <b>Jumlah Anak<span style="color: red;">*</span></b>
                                </label>
                            </div>
                            <div class="col-md-10">
                                <input required type="number" name="jumlah_anak" value="<?php echo $data->jumlah_anak ?>" class="form-control">
                            </div>
                        </div>    
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2">
                                <label for="agama">
                                    <b>Anak Ke<span style="color: red;">*</span></b>
                                </label>
                            </div>
                            <div class="col-md-10">
                                <input required type="number" name="anak_ke" value="<?php echo $data->anak_ke ?>" class="form-control">
                            </div>
                        </div>    
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2">
                                <label for="agama">
                                    <b>Penghasilan<span style="color: red;">*</span></b>
                                </label>
                            </div>
                            <div class="col-md-10">
                                <input required type="number" name="penghasilan" value="<?php echo $data->penghasilan ?>" class="form-control">
                            </div>
                        </div>    
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2">
                                <label for="agama">
                                    <b>Status Ayah<span style="color: red;">*</span></b>
                                </label>
                            </div>
                            <div class="col-md-10">
                                <input required type="text" name="status_ayah" value="<?php echo $data->status_ayah ?>" class="form-control">
                            </div>
                        </div>    
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2">
                                <label for="agama">
                                    <b>Status Ibu<span style="color: red;">*</span></b>
                                </label>
                            </div>
                            <div class="col-md-10">
                                <input required type="text" name="status_ibu" value="<?php echo $data->status_ibu ?>" class="form-control">
                            </div>
                        </div>    
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2">
                                <label for="agama">
                                    <b>Kepemilikan Rumah<span style="color: red;">*</span></b>
                                </label>
                            </div>
                            <div class="col-md-10">
                                <input required type="text" name="kepemilikan_rumah" value="<?php echo $data->kepemilikan_rumah ?>" class="form-control">
                            </div>
                        </div>    
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2">
                                <label for="agama">
                                    <b>Daya Listrik<span style="color: red;">*</span></b>
                                </label>
                            </div>
                            <div class="col-md-10">
                                <input required type="number" name="daya_listrik" value="<?php echo $data->daya_listrik ?>" class="form-control">
                            </div>
                        </div>    
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2">
                                <label for="agama">
                                    <b>Sumber Air<span style="color: red;">*</span></b>
                                </label>
                            </div>
                            <div class="col-md-10">
                                <input required type="text" name="sumber_air" value="<?php echo $data->sumber_air ?>" class="form-control">
                            </div>
                        </div>    
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2">
                                <label for="agama">
                                    <b>Saudara<span style="color: red;">*</span></b>
                                </label>
                            </div>
                            <div class="col-md-10">
                                <input required type="text" name="saudara" value="<?php echo $data->saudara ?>" class="form-control">
                            </div>
                        </div>    
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2">
                                <label for="agama">
                                    <b>Alamat Ayah<span style="color: red;">*</span></b>
                                </label>
                            </div>
                            <div class="col-md-10">
                                <textarea required name="alamat_ayah" class="form-control"><?php echo $data->alamat_ayah ?></textarea>                            
                            </div>
                        </div>    
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2">
                                <label for="agama">
                                    <b>Alamat Ibu<span style="color: red;">*</span></b>
                                </label>
                            </div>
                            <div class="col-md-10">
                                <textarea required name="alamat_ibu" class="form-control"><?php echo $data->alamat_ibu ?> </textarea>
                            </div>
                        </div>    
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="offset-md-2 col-md-10">
                                <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
                            </div>
                        </div>
                    </div>

                    <?php echo form_close() ?>

                    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.min.js"></script>
                    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/locales/bootstrap-datepicker.id.min.js"></script>

                    <script type="text/javascript">
                        $('input[name=tanggal_lahir]').datepicker({
                            format: 'yyyy-mm-dd',
                            language: 'id'
                        });
                    </script>      
                </div>
            </div>
        </div>
    </div>

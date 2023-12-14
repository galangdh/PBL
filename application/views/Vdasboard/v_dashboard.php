<title>Dashboard</title>
<div class="card">
    <div class="card-header">
        <h3>Dashboard</h3>
    </div>
    <div class="card-block table-border-style">
        <div class="main-body">
            <div class="page-wrapper">
                <!-- Page-body start -->
                <div class="page-body">
                    <div class="row">
                        <div class="col-xl-3 col-md-6">
                            <div class="card">
                                <div class="card-block">
                                    <div class="row align-items-center">
                                        <div class="col-8">
                                            <h4 class="text-c-purple"><?php echo $this->db->count_all('pegawai') ?></h4>
                                            <h6 class="text-muted m-b-0">Daftar Dosen</h6>
                                        </div>
                                        <div class="col-4 text-right">
                                            <i class="fa-solid fa-users f-28"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer bg-c-purple" >
                                    <div class="row align-items-center">
                                        <div class="col-9">
                                            <a class="text-white m-b-0" href="<?php echo base_url('Cdafdosen/c_dafdosen') ?>">Lihat Daftar</a>
                                        </div>
                                        <div class="col-3 text-right">
                                            <a class="text-white m-b-0" href="<?php echo base_url('Cdafdosen/c_dafdosen') ?>"><i class="fa-solid fa-arrow-right text-white f-20" ></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card">
                                <div class="card-block">
                                    <div class="row align-items-center">
                                        <div class="col-8">
                                           <h4 class="text-c-green"><?php echo $this->db->count_all('master_golongan') ?></h4>
                                           <h6 class="text-muted m-b-0">Daftar Golongan</h6>
                                        </div>
                                        <div class="col-4 text-right">
                                            <i class="fa-solid fa-user-tie f-28"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer bg-c-green">
                                    <div class="row align-items-center">
                                        <div class="col-9">
                                            <a class="text-white m-b-0" href="<?php echo base_url('Cmastergolongan/c_dafgol') ?>">Lihat Daftar</a>
                                        </div>
                                        <div class="col-3 text-right">
                                            <a class="text-white m-b-0" href="<?php echo base_url('Cmastergolongan/c_dafgol') ?>"><i class="fa-solid fa-arrow-right text-white f-20" ></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card">
                                <div class="card-block">
                                    <div class="row align-items-center">
                                        <div class="col-8">
                                            <h4 class="text-c-red"><?php echo $this->db->count_all('master_pendidikan') ?></h4>
                                           <h6 class="text-muted m-b-0">Daftar Pendidikan</h6>
                                        </div>
                                        <div class="col-4 text-right">
                                            <i class="fa-solid fa-user-graduate f-28"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer bg-c-red">
                                    <div class="row align-items-center">
                                        <div class="col-9">
                                            <a class="text-white m-b-0" href="<?php echo base_url('Cmasterpendidikan/c_tingpendidikan') ?>">Lihat Daftar</a>
                                        </div>
                                        <div class="col-3 text-right">
                                            <a class="text-white m-b-0" href="<?php echo base_url('Cmastergolongan/c_dafgol') ?>"><i class="fa-solid fa-arrow-right text-white f-20" ></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card">
                                <div class="card-block">
                                    <div class="row align-items-center">
                                        <div class="col-8">
                                            <h4 class="text-c-blue">500</h4>
                                            <h6 class="text-muted m-b-0">Downloads</h6>
                                        </div>
                                        <div class="col-4 text-right">
                                            <i class="fa fa-hand-o-down f-28"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer bg-c-blue">
                                    <div class="row align-items-center">
                                        <div class="col-9">
                                            <p class="text-white m-b-0">% change</p>
                                        </div>
                                        <div class="col-3 text-right">
                                            <i class="fa fa-line-chart text-white f-16"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                   </div>
                </div>
                <!-- Page-body end -->
            </div>
            <div id="styleSelector"> </div>
        </div>
    </div>
</div>
<!-- Facts Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="fact-item bg-light rounded text-center h-100 p-5">
                    <i class="fa fa-certificate fa-4x text-primary mb-4"></i>
                    <h5 class="mb-3">Years Experience</h5>
                    <h1 class="display-5 mb-0" data-toggle="counter-up">1234</h1>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="fact-item bg-light rounded text-center h-100 p-5">
                    <i class="fa fa-users-cog fa-4x text-primary mb-4"></i>
                    <h5 class="mb-3">Team Members</h5>
                    <h1 class="display-5 mb-0" data-toggle="counter-up">1234</h1>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="fact-item bg-light rounded text-center h-100 p-5">
                    <i class="fa fa-users fa-4x text-primary mb-4"></i>
                    <h5 class="mb-3">Satisfied Clients</h5>
                    <h1 class="display-5 mb-0" data-toggle="counter-up">1234</h1>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                <div class="fact-item bg-light rounded text-center h-100 p-5">
                    <i class="fa fa-check fa-4x text-primary mb-4"></i>
                    <h5 class="mb-3">Projects Done</h5>
                    <h1 class="display-5 mb-0" data-toggle="counter-up">1234</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Facts End -->


<!-- About Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="img-border">
                    <img class="img-fluid" src="<?php echo base_url(); ?>asset/foto_statis/<?php echo $gambar_about ?>" alt="">
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="h-100">
                    <h6 class="section-title bg-white text-start text-primary pe-3 " maxlength="10"><?php echo $judul_about ?></h6>
                    <!-- <h1 class="display-6 mb-4">#1 Digital Solution With <span class="text-primary">10 Years</span> Of Experience</h1> -->
                    <?php echo $isi_halaman_about ?>
                    <div class="d-flex align-items-center mb-4 pb-2">
                        <!-- <img class="flex-shrink-0 rounded-circle" src="img/team-1.jpg" alt="" style="width: 50px; height: 50px;"> -->
                        <div class="ps-4">
                            <h6>Jhon Doe</h6>
                            <small>SEO & Founder</small>
                        </div>
                    </div>
                    <a class="btn btn-primary rounded-pill py-3 px-5" href="<?php echo base_url(); ?>index.php/about">Read More</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->

<!-- Service Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h6 class="section-title bg-white text-center text-primary px-3">Services</h6>
            <h1 class="display-6 mb-4">We Focuse On Making The Best In All Sectors</h1>
        </div>
        <div class="row g-4">
            <?php $s = 1 ?>
            <?php foreach ($data_gallery as $row) : ?>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.<?php echo $s ?>s">
                    <a class="service-item d-block rounded text-center h-100 p-4" href="">
                        <img max-height="20" class="img-fluid rounded mb-4" src="<?php echo base_url(); ?>/asset/img_galeri/<?php echo $row['gbr_gallery']; ?>" alt="">
                        <h4 class="mb-0"><?php echo $row['jdl_gallery']; ?></h4>
                    </a>

                </div>
                <?php $s++ ?>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<!-- Service End -->


<!-- Feature Start -->
<!-- <div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="h-100">
                    <h6 class="section-title bg-white text-start text-primary pe-3">Why Choose Us</h6>
                    <h1 class="display-6 mb-4">Why People Trust Us? Learn About Us!</h1>
                    <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                    <div class="row g-4">
                        <div class="col-12">
                            <div class="skill">
                                <div class="d-flex justify-content-between">
                                    <p class="mb-2">Digital Marketing</p>
                                    <p class="mb-2">85%</p>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="skill">
                                <div class="d-flex justify-content-between">
                                    <p class="mb-2">SEO & Backlinks</p>
                                    <p class="mb-2">90%</p>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="skill">
                                <div class="d-flex justify-content-between">
                                    <p class="mb-2">Design & Development</p>
                                    <p class="mb-2">95%</p>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="img-border">
                    <img class="img-fluid" src="<?php echo base_url(); ?>template/<?php echo template(); ?>/new/img/feature.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</div> -->
<!-- Feature End -->


<!-- Project Start -->
<!-- <div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h6 class="section-title bg-white text-center text-primary px-3">Our Projects</h6>
            <h1 class="display-6 mb-4">Learn More About Our Complete Projects</h1>
        </div>
        <div class="owl-carousel project-carousel wow fadeInUp" data-wow-delay="0.1s">
            <div class="project-item border rounded h-100 p-4" data-dot="01">
                <div class="position-relative mb-4">
                    <img class="img-fluid rounded" src="im<?php echo base_url(); ?>template/<?php echo template(); ?>/new/g/project-1.jpg" alt="">
                    <a href="<?php echo base_url(); ?>template/<?php echo template(); ?>/new/img/project-1.jpg" data-lightbox="project"><i class="fa fa-eye fa-2x"></i></a>
                </div>
                <h6>UI / UX Design</h6>
                <span>Digital agency website design and development</span>
            </div>
            <div class="project-item border rounded h-100 p-4" data-dot="02">
                <div class="position-relative mb-4">
                    <img class="img-fluid rounded" src="img/project-2.jpg" alt="">
                    <a href="img/project-2.jpg" data-lightbox="project"><i class="fa fa-eye fa-2x"></i></a>
                </div>
                <h6>UI / UX Design</h6>
                <span>Digital agency website design and development</span>
            </div>
            <div class="project-item border rounded h-100 p-4" data-dot="03">
                <div class="position-relative mb-4">
                    <img class="img-fluid rounded" src="<?php echo base_url(); ?>template/<?php echo template(); ?>/new/img/project-3.jpg" alt="">
                    <a href="<?php echo base_url(); ?>template/<?php echo template(); ?>/new/img/project-2.jpg" data-lightbox="project"><i class="fa fa-eye fa-2x"></i></a>
                </div>
                <h6>UI / UX Design</h6>
                <span>Digital agency website design and development</span>
            </div>
            <div class="project-item border rounded h-100 p-4" data-dot="04">
                <div class="position-relative mb-4">
                    <img class="img-fluid rounded" src="<?php echo base_url(); ?>template/<?php echo template(); ?>/new/img/project-4.jpg" alt="">
                    <a href="<?php echo base_url(); ?>template/<?php echo template(); ?>/new/img/project-4.jpg" data-lightbox="project"><i class="fa fa-eye fa-2x"></i></a>
                </div>
                <h6>UI / UX Design</h6>
                <span>Digital agency website design and development</span>
            </div>
            <div class="project-item border rounded h-100 p-4" data-dot="05">
                <div class="position-relative mb-4">
                    <img class="img-fluid rounded" src="img/project-5.jpg" alt="">
                    <a href="img/project-5.jpg" data-lightbox="project"><i class="fa fa-eye fa-2x"></i></a>
                </div>
                <h6>UI / UX Design</h6>
                <span>Digital agency website design and development</span>
            </div>
            <div class="project-item border rounded h-100 p-4" data-dot="06">
                <div class="position-relative mb-4">
                    <img class="img-fluid rounded" src="<?php echo base_url(); ?>template/<?php echo template(); ?>/new/img/project-6.jpg" alt="">
                    <a href="<?php echo base_url(); ?>template/<?php echo template(); ?>/new/img/project-6.jpg" data-lightbox="project"><i class="fa fa-eye fa-2x"></i></a>
                </div>
                <h6>UI / UX Design</h6>
                <span>Digital agency website design and development</span>
            </div>
            <div class="project-item border rounded h-100 p-4" data-dot="07">
                <div class="position-relative mb-4">
                    <img class="img-fluid rounded" src="<?php echo base_url(); ?>template/<?php echo template(); ?>/new/img/project-7.jpg" alt="">
                    <a href="<?php echo base_url(); ?>template/<?php echo template(); ?>/new/img/project-7.jpg" data-lightbox="project"><i class="fa fa-eye fa-2x"></i></a>
                </div>
                <h6>UI / UX Design</h6>
                <span>Digital agency website design and development</span>
            </div>
            <div class="project-item border rounded h-100 p-4" data-dot="08">
                <div class="position-relative mb-4">
                    <img class="img-fluid rounded" src="<?php echo base_url(); ?>template/<?php echo template(); ?>/new/img/project-8.jpg" alt="">
                    <a href="<?php echo base_url(); ?>template/<?php echo template(); ?>/new/img/project-8.jpg" data-lightbox="project"><i class="fa fa-eye fa-2x"></i></a>
                </div>
                <h6>UI / UX Design</h6>
                <span>Digital agency website design and development</span>
            </div>
            <div class="project-item border rounded h-100 p-4" data-dot="09">
                <div class="position-relative mb-4">
                    <img class="img-fluid rounded" src="<?php echo base_url(); ?>template/<?php echo template(); ?>/new/img/project-9.jpg" alt="">
                    <a href="<?php echo base_url(); ?>template/<?php echo template(); ?>/new/img/project-9.jpg" data-lightbox="project"><i class="fa fa-eye fa-2x"></i></a>
                </div>
                <h6>UI / UX Design</h6>
                <span>Digital agency website design and development</span>
            </div>
            <div class="project-item border rounded h-100 p-4" data-dot="10">
                <div class="position-relative mb-4">
                    <img class="<?php echo base_url(); ?>template/<?php echo template(); ?>/new/img-fluid rounded" src="<?php echo base_url(); ?>template/<?php echo template(); ?>/new/img/project-10.jpg" alt="">
                    <a href="<?php echo base_url(); ?>template/<?php echo template(); ?>/new/img/project-10.jpg" data-lightbox="project"><i class="fa fa-eye fa-2x"></i></a>
                </div>
                <h6>UI / UX Design</h6>
                <span>Digital agency website design and development</span>
            </div>
        </div>
    </div>
</div> -->
<!-- Project End -->

<!-- Artikel  Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h6 class="section-title bg-white text-center text-primary px-3">Artikel</h6>
            <h1 class="display-6 mb-4">Learn More About Our Complete Projects</h1>
        </div>

        <div class="owl-carousel project-carousel wow fadeInUp" data-wow-delay="0.1s">
            <?php
            $no = 1;
            foreach ($data_artikel as $row) : ?>
                <div class="project-item border rounded h-100 p-4" data-dot="<?php echo $no++ ?>">
                    <div class="position-relative mb-4">
                        <img class="img-fluid rounded" src="<?php echo base_url(); ?>/asset/foto_berita/<?php echo $row['gambar']; ?>" alt="">
                        <a href="<?php echo base_url(); ?>/asset/foto_berita/<?php echo $row['gambar']; ?>" data-lightbox="project"><i class="fa fa-eye fa-2x"></i></a>
                    </div>
                    <h6><?php echo $row['judul'] ?></h6>
                    <!-- <span max-lenght="3"><?php echo $row['isi_berita'] ?></span> -->
                </div>
            <?php endforeach; ?>
            <!-- <div class="project-item border rounded h-100 p-4" data-dot="02">
                <div class="position-relative mb-4">
                    <img class="img-fluid rounded" src="img/project-2.jpg" alt="">
                    <a href="img/project-2.jpg" data-lightbox="project"><i class="fa fa-eye fa-2x"></i></a>
                </div>
                <h6>UI / UX Design</h6>
                <span>Digital agency website design and development</span>
            </div>
            <div class="project-item border rounded h-100 p-4" data-dot="03">
                <div class="position-relative mb-4">
                    <img class="img-fluid rounded" src="<?php echo base_url(); ?>template/<?php echo template(); ?>/new/img/project-3.jpg" alt="">
                    <a href="<?php echo base_url(); ?>template/<?php echo template(); ?>/new/img/project-2.jpg" data-lightbox="project"><i class="fa fa-eye fa-2x"></i></a>
                </div>
                <h6>UI / UX Design</h6>
                <span>Digital agency website design and development</span>
            </div>
            <div class="project-item border rounded h-100 p-4" data-dot="04">
                <div class="position-relative mb-4">
                    <img class="img-fluid rounded" src="<?php echo base_url(); ?>template/<?php echo template(); ?>/new/img/project-4.jpg" alt="">
                    <a href="<?php echo base_url(); ?>template/<?php echo template(); ?>/new/img/project-4.jpg" data-lightbox="project"><i class="fa fa-eye fa-2x"></i></a>
                </div>
                <h6>UI / UX Design</h6>
                <span>Digital agency website design and development</span>
            </div>
            <div class="project-item border rounded h-100 p-4" data-dot="05">
                <div class="position-relative mb-4">
                    <img class="img-fluid rounded" src="img/project-5.jpg" alt="">
                    <a href="img/project-5.jpg" data-lightbox="project"><i class="fa fa-eye fa-2x"></i></a>
                </div>
                <h6>UI / UX Design</h6>
                <span>Digital agency website design and development</span>
            </div>
            <div class="project-item border rounded h-100 p-4" data-dot="06">
                <div class="position-relative mb-4">
                    <img class="img-fluid rounded" src="<?php echo base_url(); ?>template/<?php echo template(); ?>/new/img/project-6.jpg" alt="">
                    <a href="<?php echo base_url(); ?>template/<?php echo template(); ?>/new/img/project-6.jpg" data-lightbox="project"><i class="fa fa-eye fa-2x"></i></a>
                </div>
                <h6>UI / UX Design</h6>
                <span>Digital agency website design and development</span>
            </div>
            <div class="project-item border rounded h-100 p-4" data-dot="07">
                <div class="position-relative mb-4">
                    <img class="img-fluid rounded" src="<?php echo base_url(); ?>template/<?php echo template(); ?>/new/img/project-7.jpg" alt="">
                    <a href="<?php echo base_url(); ?>template/<?php echo template(); ?>/new/img/project-7.jpg" data-lightbox="project"><i class="fa fa-eye fa-2x"></i></a>
                </div>
                <h6>UI / UX Design</h6>
                <span>Digital agency website design and development</span>
            </div>
            <div class="project-item border rounded h-100 p-4" data-dot="08">
                <div class="position-relative mb-4">
                    <img class="img-fluid rounded" src="<?php echo base_url(); ?>template/<?php echo template(); ?>/new/img/project-8.jpg" alt="">
                    <a href="<?php echo base_url(); ?>template/<?php echo template(); ?>/new/img/project-8.jpg" data-lightbox="project"><i class="fa fa-eye fa-2x"></i></a>
                </div>
                <h6>UI / UX Design</h6>
                <span>Digital agency website design and development</span>
            </div>
            <div class="project-item border rounded h-100 p-4" data-dot="09">
                <div class="position-relative mb-4">
                    <img class="img-fluid rounded" src="<?php echo base_url(); ?>template/<?php echo template(); ?>/new/img/project-9.jpg" alt="">
                    <a href="<?php echo base_url(); ?>template/<?php echo template(); ?>/new/img/project-9.jpg" data-lightbox="project"><i class="fa fa-eye fa-2x"></i></a>
                </div>
                <h6>UI / UX Design</h6>
                <span>Digital agency website design and development</span>
            </div>
            <div class="project-item border rounded h-100 p-4" data-dot="10">
                <div class="position-relative mb-4">
                    <img class="<?php echo base_url(); ?>template/<?php echo template(); ?>/new/img-fluid rounded" src="<?php echo base_url(); ?>template/<?php echo template(); ?>/new/img/project-10.jpg" alt="">
                    <a href="<?php echo base_url(); ?>template/<?php echo template(); ?>/new/img/project-10.jpg" data-lightbox="project"><i class="fa fa-eye fa-2x"></i></a>
                </div>
                <h6>UI / UX Design</h6>
                <span>Digital agency website design and development</span>
            </div> -->
        </div>
    </div>
</div>
<!-- Artikel End -->


<!-- Team Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h6 class="section-title bg-white text-center text-primary px-3">Our Team</h6>
            <h1 class="display-6 mb-4">We Are A Creative Team For Your Dream Project</h1>
        </div>
        <div class="row g-4">
            <?php foreach ($data_ourteam as $row) : ?>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item text-center p-4">
                        <img class="img-fluid border rounded-circle w-75 p-2 mb-4" src="<?php echo base_url(); ?>/asset/img_galeri/<?php echo $row['gbr_gallery']; ?>" alt="">
                        <div class="team-text">
                            <div class="team-title">
                                <h5><?php echo $row['jdl_gallery']; ?></h5>
                                <span><?php echo $row['keterangan']; ?></span>
                            </div>
                            <div class="team-social">
                                <a class="btn btn-square btn-primary rounded-circle" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-primary rounded-circle" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-primary rounded-circle" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<!-- Team End -->


<!-- Testimonial Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h6 class="section-title bg-white text-center text-primary px-3">Testimonial</h6>
            <h1 class="display-6 mb-4">What Our Clients Say!</h1>
        </div>

        <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
            <?php foreach ($data_testimonial as $row) : ?>
                <div class="testimonial-item bg-light rounded p-4">
                    <div class="d-flex align-items-center mb-4">
                        <img class="flex-shrink-0 rounded-circle border p-1" src="<?php echo base_url(); ?>/asset/img_galeri/<?php echo $row['gbr_gallery']; ?>" alt="">
                        <div class="ms-4">
                            <h5 class="mb-1">Client Name</h5>
                            <span>Profession</span>
                        </div>
                    </div>
                    <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                </div>
                <?php endforeach ?>)
        </div>
    </div>
</div>
<!-- Testimonial End -->
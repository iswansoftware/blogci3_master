<?php $gambar_slider = $this->model_utama->gambar_slider(0, 10);
$no = 0;
$noslide = 1;
$active = ' active';
?>

<!-- Carousel Start -->
<div class="container-fluid p-0 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <?php foreach ($gambar_slider->result_array() as $row) : ?>
                <?php if ($no == 0) {
                    $classactive = 'class="active"';
                    // $active = ' active';
                } else {
                    $classactive = '';
                    // $active = '';
                }
                // 
                ?>

                <button type="button" data-bs-target="#header-carousel" data-bs-slide-to="<?php echo $no++ ?>" <?php echo $classactive ?> aria-current="true" aria-label="Slide <?php echo $noslide++ ?>">
                    <img class="img-fluid" src="<?php echo base_url() ?>asset/img_galeri/<?php echo $row['gbr_gallery'] ?>" alt="Image">
                </button>
            <?php endforeach; ?>
        </div>
        <div class="carousel-inner">
            <?php foreach ($gambar_slider->result_array() as $row) : ?>
                <div class="carousel-item<?php echo $active ?>">
                    <img class="w-100" src="<?php echo base_url() ?>asset/img_galeri/<?php echo $row['gbr_gallery'] ?>" alt="Image">
                    <div class="carousel-caption">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-4 animated zoomIn"><?php echo $row['jdl_gallery'] ?></h4>
                            <h1 class="display-1 text-white mb-0 animated zoomIn"><?php echo $row['keterangan'] ?></h1>
                        </div>
                    </div>
                </div>
            <?php
                $active = '';
            endforeach;
            ?>

        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

</div>
<!-- Carousel End -->
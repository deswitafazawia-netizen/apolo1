<?= $this->extend('dashboard') ?>

<?= $this->section('content') ?>
    <div class="dashboard">
        <div class="background">
            <div></div>
            <img src="<?= base_url('assets/profesi-fotografer.jpg')?>" alt="">
        </div>
        <div class="item">
            <div class="deskripsi">
                <h1>The Artist Behind The Lens</h1>
                <p>Dengan pengalaman lebih dari 12 tahun, Julian Vane telah 
                mengembangkan keahlian dalam fotografi editorial dan arsitektur. 
                Gaya visualnya yang khas menonjolkan detail, keseimbangan komposisi, 
                serta kemampuan bercerita melalui gambar. Karya-karyanya telah mendapatkan 
                pengakuan dan dimuat di berbagai publikasi internasional bergengsi.</p>
                <p>Dengan pengalaman lebih dari 12 tahun, Julian Vane telah 
                mengembangkan keahlian dalam fotografi editorial dan arsitektur. 
                Gaya visualnya yang khas menonjolkan detail, keseimbangan komposisi, 
                serta kemampuan bercerita melalui gambar. Karya-karyanya telah mendapatkan 
                pengakuan dan dimuat di berbagai publikasi internasional bergengsi.</p>
                <span></span>
            </div>
            <div class="item-total">
                <hr>
                <div>
                    <p>EQUIPMENT</p>
                    <span>Phase One</span>
                </div>
                <hr>
            </div>
        </div>
        <div class="item-foto">
            <p>CURATED WORK</p>
            <h1>Portofolio Comonitas</h1>
            <div class="foto-comonitas">
                <img src="<?= base_url('assets/profesi-fotografer.jpg')?>" alt="">
                <img src="<?= base_url('assets/profesi-fotografer.jpg')?>" alt="">
                <img src="<?= base_url('assets/profesi-fotografer.jpg')?>" alt="">
                <img src="<?= base_url('assets/profesi-fotografer.jpg')?>" alt="">
                <img src="<?= base_url('assets/profesi-fotografer.jpg')?>" alt="">
            </div>
        </div>
        <div class="rating">
            <p>TESTIMONIALS</p>
            <h1>Client Stories</h1>
        </div>
    </div>
<?= $this->endSection() ?>
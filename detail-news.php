<?php include('comtop.php'); ?>
<?php include('header.php'); ?>

<div class="title-bg title-layout m-0">
    <div class="py-4 text-center">
        <h3 class="card-title">ข่าวสาร</h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php" class="breadcrumb-menu">หน้าหลัก</a></li>
                <li class="breadcrumb-item active" aria-current="page">ข่าวสาร</li>
            </ol>
        </nav>
    </div>
</div>

<div class="container p-xl-0 mt-40 mb-70">
    <div class="row mx-10">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 p-lg-0  px-md-4 mb-40">
            <h2>Lorem ipsum dolor sit amet consectetur.</h2>
            <p class="card-text">
                <small class="pr-4"><i class="fas fa-calendar"></i>&nbsp; &nbsp; 24 มกราคม 2566</small>
                <small><i class="fas fa-eye"></i>&nbsp; &nbsp; อ่านแล้ว <span>65</span> คน</small>
            </p>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 p-lg-0 px-md-4">
            <div class="row mx-0">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 p-0">
                    <div class="detail-img slideImgNews">
                        <img src="assets/images/search/search-9.png" class="card-img-top" alt="detail-img-1">
                    </div>
                    <div class="detail-img slideImgNews">
                        <img src="assets/images/search/search-10.png" class="card-img-top" alt="detail-img-2">
                    </div>
                    <div class="detail-img slideImgNews">
                        <img src="assets/images/search/search-1.png" class="card-img-top" alt="detail-img-3">
                    </div>
                    <div class="detail-img slideImgNews">
                        <img src="assets/images/search/search-2.jpg" class="card-img-top" alt="detail-img-4">
                    </div>
                    <div class="detail-img slideImgNews">
                        <img src="assets/images/search/search-3.jpg" class="card-img-top" alt="detail-img-5">
                    </div>
                    <div class="detail-img slideImgNews">
                        <img src="assets/images/search/search-6.jpg" class="card-img-top" alt="detail-img-6">
                    </div>
                </div>
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 p-0">
                    <div id="slide-banner" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators align-indicator">
                            <li data-target="#slide-banner" data-slide-to="0" class="active"></li>
                            <li data-target="#slide-banner" data-slide-to="1"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row p-0">
                                    <div class="row mx-0 mt-4">
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4 pl-0">
                                            <div class="thumbnail-img demo cursor">
                                                <img src="assets/images/search/search-9.png" onclick="currentSlide(1)"
                                                    class="card-img-top" alt="thumbnail-img-1">
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4 pl-0">
                                            <div class="thumbnail-img demo cursor">
                                                <img src="assets/images/search/search-10.png" onclick="currentSlide(2)"
                                                    class="card-img-top" alt="thumbnail-img-2">
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4 px-0">
                                            <div class="thumbnail-img demo cursor">
                                                <img src="assets/images/search/search-1.png" onclick="currentSlide(3)"
                                                    class="card-img-top" alt="thumbnail-img-3">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row p-0">
                                    <div class="row mx-0 mt-4">
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4 pl-0">
                                            <div class="thumbnail-img demo cursor">
                                                <img src="assets/images/search/search-2.jpg" onclick="currentSlide(4)"
                                                    class="card-img-top" alt="thumbnail-img-4">
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4 pl-0">
                                            <div class="thumbnail-img demo cursor">
                                                <img src="assets/images/search/search-3.jpg" onclick="currentSlide(5)"
                                                    class="card-img-top" alt="thumbnail-img-5">
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4 px-0">
                                            <div class="thumbnail-img demo cursor">
                                                <img src="assets/images/search/search-6.jpg" onclick="currentSlide(6)"
                                                    class="card-img-top" alt="thumbnail-img-6">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 pl-lg-5 pr-md-4">
            <h5 align="justify">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perspiciatis
                consequatur, fuga
                rerum atque facere tenetur quo rem porro aliquam debitis tempore blanditiis distinctio quae
                vitae,
                excepturi asperiores inventore consectetur officia quas iste qui aliquid amet ad exercitationem.
                At
                excepturi nobis doloremque quae voluptates enim vel eligendi nostrum veritatis odio minima
                recusandae,
                laudantium culpa eos. Unde asperiores culpa cupiditate natus sed.</h5>
        </div>
    </div>
</div>

<?php include('footer.php'); ?>
<?php include('combottom.php'); ?>

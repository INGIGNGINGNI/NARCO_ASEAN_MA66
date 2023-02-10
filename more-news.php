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
<!-- Search -->
<div class="container p-0 mt-40 mb-40">
    <form action="#" method="POST">
        <div class="row mx-0">
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12 pl-lg-0 pr-lg-1 pb-3">
                <label for="news-name" class="form-label">ชื่อข่าวสาร</label>
                <input type="text" name="news-name" id="news-name" class="form-control rounded-border"
                    placeholder="   ค้นหาข่าวสารที่คุณสนใจ">
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 pr-lg-1 pb-3">
                <label for="start-date" class="form-label">ตั้งแต่วันที่</label>
                <input type="date" name="start-date" id="start-date" class="form-control rounded-border">
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 pr-lg-1 pb-3">
                <label for="end-date" class="form-label">ถึงวันที่</label>
                <input type="date" name="end-date" id="end-date" class="form-control rounded-border">
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12 pr-lg-0 pb-3">
                <label for="news-group">หมวดหมู่</label>
                <select id="news-group" class="form-control rounded-border">
                    <option selected>หมวดหมู่ทั้งหมด</option>
                    <option>ข่าวประชาสัมพันธ์</option>
                    <option>ข่าวด่วน</option>
                    <option>ประมวลภาพกิจกรรม</option>
                </select>
            </div>
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm 12 col-12 pt-4 title-layout">
                <button type="submit" name="enter-search" class="btn btn-main">ค้นหา</button>
            </div>
        </div>
    </form>
</div>
<!-- end -->

<!-- Result's news of search -->
<div class="container p-0 mt-20 mb-40">
    <div class="row mx-0">
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 pl-lg-0 pl-3 pr-3 pb-3">
            <div class="row mx-0 shadow-main rounded-border">
                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 p-0">
                    <div class="card-image">
                        <img src="assets/images/search/search-9.png" class="card-img-top" alt="news-1">
                    </div>
                </div>
                <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12 p-xl-0">
                    <div class="card-body-news">
                        <a href="detail-news.php" class="news-name">
                            <h5 class="card-title mb-4">Lorem ipsum dolor sit amet consectetur.</h5>
                        </a>
                        <p class="card-text">
                            <small class="pr-4"><i class="fas fa-calendar"></i> 24 มกราคม 2566</small>
                            <small><i class="fas fa-eye"></i> 65</small>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 pl-lg-0 pl-3 pr-3 pb-3">
            <div class="row mx-0 shadow-main rounded-border">
                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 p-0">
                    <div class="card-image">
                        <img src="assets/images/search/search-10.png" class="card-img-top" alt="news-1">
                    </div>
                </div>
                <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12 p-xl-0">
                    <div class="card-body-news">
                        <a href="#" class="news-name">
                            <h5 class="card-title mb-4">Lorem ipsum dolor sit amet consectetur.</h5>
                        </a>
                        <p class="card-text">
                            <small class="pr-4"><i class="fas fa-calendar"></i> 24 มกราคม 2566</small>
                            <small><i class="fas fa-eye"></i> 65</small>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 pl-lg-0 pl-3 pr-3 pb-3">
            <div class="row mx-0 shadow-main rounded-border">
                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 p-0">
                    <div class="card-image">
                        <img src="assets/images/search/search-1.png" class="card-img-top" alt="news-1">
                    </div>
                </div>
                <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12 p-xl-0">
                    <div class="card-body-news">
                        <a href="#" class="news-name">
                            <h5 class="card-title mb-4">Lorem ipsum dolor sit amet consectetur.</h5>
                        </a>
                        <p class="card-text">
                            <small class="pr-4"><i class="fas fa-calendar"></i> 24 มกราคม 2566</small>
                            <small><i class="fas fa-eye"></i> 65</small>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 pl-lg-0 pl-3 pr-3 pb-3">
            <div class="row mx-0 shadow-main rounded-border">
                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 p-0">
                    <div class="card-image">
                        <img src="assets/images/search/search-2.jpg" class="card-img-top" alt="news-1">
                    </div>
                </div>
                <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12 p-xl-0">
                    <div class="card-body-news">
                        <a href="#" class="news-name">
                            <h5 class="card-title mb-4">Lorem ipsum dolor sit amet consectetur.</h5>
                        </a>
                        <p class="card-text">
                            <small class="pr-4"><i class="fas fa-calendar"></i> 24 มกราคม 2566</small>
                            <small><i class="fas fa-eye"></i> 65</small>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 pl-lg-0 pl-3 pr-3 pb-3">
            <div class="row mx-0 shadow-main rounded-border">
                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 p-0">
                    <div class="card-image">
                        <img src="assets/images/search/search-3.jpg" class="card-img-top" alt="news-1">
                    </div>
                </div>
                <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12 p-xl-0">
                    <div class="card-body-news">
                        <a href="#" class="news-name">
                            <h5 class="card-title mb-4">Lorem ipsum dolor sit amet consectetur.</h5>
                        </a>
                        <p class="card-text">
                            <small class="pr-4"><i class="fas fa-calendar"></i> 24 มกราคม 2566</small>
                            <small><i class="fas fa-eye"></i> 65</small>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 pl-lg-0 pl-3 pr-3 pb-3">
            <div class="row mx-0 shadow-main rounded-border">
                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 p-0">
                    <div class="card-image">
                        <img src="assets/images/search/search-4.jpg" class="card-img-top" alt="news-1">
                    </div>
                </div>
                <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12 p-xl-0">
                    <div class="card-body-news">
                        <a href="#" class="news-name">
                            <h5 class="card-title mb-4">Lorem ipsum dolor sit amet consectetur.</h5>
                        </a>
                        <p class="card-text">
                            <small class="pr-4"><i class="fas fa-calendar"></i> 24 มกราคม 2566</small>
                            <small><i class="fas fa-eye"></i> 65</small>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 pl-lg-0 pl-3 pr-3 pb-3">
            <div class="row mx-0 shadow-main rounded-border">
                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 p-0">
                    <div class="card-image">
                        <img src="assets/images/search/search-5.jpg" class="card-img-top" alt="news-1">
                    </div>
                </div>
                <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12 p-xl-0">
                    <div class="card-body-news">
                        <a href="#" class="news-name">
                            <h5 class="card-title mb-4">Lorem ipsum dolor sit amet consectetur.</h5>
                        </a>
                        <p class="card-text">
                            <small class="pr-4"><i class="fas fa-calendar"></i> 24 มกราคม 2566</small>
                            <small><i class="fas fa-eye"></i> 65</small>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 pl-lg-0 pl-3 pr-3 pb-3">
            <div class="row mx-0 shadow-main rounded-border">
                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 p-0">
                    <div class="card-image">
                        <img src="assets/images/search/search-6.jpg" class="card-img-top" alt="news-1">
                    </div>
                </div>
                <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12 p-xl-0">
                    <div class="card-body-news">
                        <a href="#" class="news-name">
                            <h5 class="card-title mb-4">Lorem ipsum dolor sit amet consectetur.</h5>
                        </a>
                        <p class="card-text">
                            <small class="pr-4"><i class="fas fa-calendar"></i> 24 มกราคม 2566</small>
                            <small><i class="fas fa-eye"></i> 65</small>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 pl-lg-0 pl-3 pr-3 pb-3">
            <div class="row mx-0 shadow-main rounded-border">
                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 p-0">
                    <div class="card-image">
                        <img src="assets/images/search/search-7.jpg" class="card-img-top" alt="news-1">
                    </div>
                </div>
                <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12 p-xl-0">
                    <div class="card-body-news">
                        <a href="#" class="news-name">
                            <h5 class="card-title mb-4">Lorem ipsum dolor sit amet consectetur.</h5>
                        </a>
                        <p class="card-text">
                            <small class="pr-4"><i class="fas fa-calendar"></i> 24 มกราคม 2566</small>
                            <small><i class="fas fa-eye"></i> 65</small>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 pl-lg-0 pl-3 pr-3 pb-3">
            <div class="row mx-0 shadow-main rounded-border">
                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 p-0">
                    <div class="card-image">
                        <img src="assets/images/search/search-8.jpg" class="card-img-top" alt="news-1">
                    </div>
                </div>
                <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12 p-xl-0">
                    <div class="card-body-news">
                        <a href="#" class="news-name">
                            <h5 class="card-title mb-4">Lorem ipsum dolor sit amet consectetur.</h5>
                        </a>
                        <p class="card-text">
                            <small class="pr-4"><i class="fas fa-calendar"></i> 24 มกราคม 2566</small>
                            <small><i class="fas fa-eye"></i> 65</small>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end -->

<!-- Paginations -->
<div class="container p-0 mb-40">
    <nav aria-label="Page navigation">
        <div class="row mx-0 title-layout">
            <ul class="pagination justify-content-center">
                <!-- <li class="page-item">
                    <a class="page-link" href="#">
                        &laquo; หน้าแรก</a>
                </li>
                <li class="page-item">
                    <span class="page-link">
                        &lsaquo; ก่อนหน้า</span>
                </li> -->
                <li class="page-item active" aria-current="page"><span class="page-link">1</span></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#">หน้าถัดไป &rsaquo; </a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#">หน้าสุดท้าย &raquo; </a>
                </li>
            </ul>
        </div>
    </nav>
</div>
<!-- end -->

<?php include('footer.php'); ?>
<?php include('combottom.php'); ?>
<?php
    include_once ('include/products-data.php');

    $slug = isset($_GET['product']) ? strtolower(trim($_GET['product'])) : '';
    if (!isset($products[$slug])) {
        header('Location: index.php#products');
        exit;
    }
    $p = $products[$slug];
    $e = function ($v) { return htmlspecialchars($v, ENT_QUOTES, 'UTF-8'); };

    $pageTitle = $p['name'] . ' - ' . $p['category'] . ' | Krishimax Agritech';
    $extraCss  = ['assets/css/product-details.css'];

    include_once ('elements/header.php');
?>

        <!-- Breadcrumb Section Start -->
        <section class="breadcrumb-wrapper bg-cover fix" style="background-image: url(assets/img/inner-page/breadcroumb.jpg);">
            <div class="shape-1 float-bob-y">
                <img src="assets/img/inner-page/shape-1.png" alt="img">
            </div>
            <div class="shape-2 float-bob-x">
                <img src="assets/img/inner-page/shape-2.png" alt="img">
            </div>
            <div class="container">
                <div class="page-heading">
                    <ul class="breadcrumb-list wow fadeInUp">
                        <li><a href="index.php">Home</a></li>
                        <li>//</li>
                        <li><a href="index.php#products">Products</a></li>
                        <li>//</li>
                        <li><?php echo $e($p['name']); ?></li>
                    </ul>
                    <h1 class="breadcrumb-title text-anim"><?php echo $e($p['name']); ?></h1>
                </div>
            </div>
        </section>

        <!-- Product Details Section Start -->
        <section class="pd-section section-padding">
            <div class="container">
                <div class="row g-5 align-items-start">

                    <!-- Product image -->
                    <div class="col-lg-5">
                        <div class="pd-gallery pd-<?php echo $e($p['type']); ?>">
                            <span class="pd-badge"><?php echo $e($p['category']); ?></span>
                            <div class="pd-image">
                                <img src="assets/img/products/<?php echo $e($slug); ?>-large.jpg" alt="<?php echo $e($p['name']); ?> - Krishimax Agritech">
                            </div>
                            <div class="pd-trust">
                                <span><i class="far fa-check"></i> Krishimax Quality</span>
                                <span><i class="far fa-check"></i> Genuine Krishimax Pack</span>
                                <span><i class="far fa-check"></i> Expert Support</span>
                            </div>
                        </div>
                    </div>

                    <!-- Product info -->
                    <div class="col-lg-7">
                        <div class="pd-info">
                            <span class="pd-brand">Krishimax Agritech LLP</span>
                            <h2 class="pd-title"><?php echo $e($p['name']); ?></h2>
                            <p class="pd-tagline"><?php echo $e($p['tagline']); ?></p>
                            <p class="pd-desc"><?php echo $e($p['description']); ?></p>

                            <div class="pd-specs">
                                <div class="pd-spec">
                                    <i class="<?php echo $e($p['icon']); ?>"></i>
                                    <div><small>Category</small><strong><?php echo $e($p['category']); ?></strong></div>
                                </div>
                                <div class="pd-spec">
                                    <i class="flaticon-leaf"></i>
                                    <div><small>Composition</small><strong><?php echo $e($p['composition']); ?></strong></div>
                                </div>
                                <div class="pd-spec">
                                    <i class="flaticon-box"></i>
                                    <div><small>Formulation</small><strong><?php echo $e($p['formulation']); ?></strong></div>
                                </div>
                                <div class="pd-spec">
                                    <i class="flaticon-harvest"></i>
                                    <div><small>Recommended Dosage</small><strong><?php echo $e($p['dosage']); ?></strong></div>
                                </div>
                            </div>

                            <div class="pd-packs">
                                <h5>Available Pack Sizes</h5>
                                <ul>
                                    <?php foreach ($p['packs'] as $pack) { ?>
                                    <li><?php echo $e($pack); ?></li>
                                    <?php } ?>
                                </ul>
                            </div>

                            <div class="pd-actions">
                                <a href="contact.php" class="theme-btn">Request a Quote <i class="far fa-arrow-right"></i></a>
                                <a href="contact.php" class="pd-btn-outline"><i class="fas fa-phone-alt"></i> Contact Sales</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Tabs -->
                <div class="pd-tabs">
                    <ul class="nav nav-tabs" id="pdTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="ov-tab" data-bs-toggle="tab" data-bs-target="#ov" type="button" role="tab">Overview</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="sp-tab" data-bs-toggle="tab" data-bs-target="#sp" type="button" role="tab">Specifications</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="us-tab" data-bs-toggle="tab" data-bs-target="#us" type="button" role="tab">Usage &amp; Safety</button>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="ov" role="tabpanel">
                            <h3>About <?php echo $e($p['name']); ?></h3>
                            <p><?php echo $e($p['description']); ?></p>
                            <ul class="pd-check">
                                <li><i class="far fa-check"></i> Product type: <?php echo $e($p['category']); ?></li>
                                <li><i class="far fa-check"></i> Composition: <?php echo $e($p['composition']); ?></li>
                                <li><i class="far fa-check"></i> Recommended dosage: <?php echo $e($p['dosage']); ?></li>
                                <li><i class="far fa-check"></i> Marketed by Krishimax Agritech LLP, Gandhinagar, Gujarat</li>
                            </ul>
                        </div>
                        <div class="tab-pane fade" id="sp" role="tabpanel">
                            <h3>Product Specifications</h3>
                            <div class="table-responsive">
                                <table class="pd-table">
                                    <tbody>
                                        <tr><th>Product Name</th><td><?php echo $e($p['name']); ?></td></tr>
                                        <tr><th>Category</th><td><?php echo $e($p['category']); ?></td></tr>
                                        <tr><th>Composition</th><td><?php echo $e($p['composition']); ?></td></tr>
                                        <tr><th>Formulation</th><td><?php echo $e($p['formulation']); ?></td></tr>
                                        <tr><th>Dosage</th><td><?php echo $e($p['dosage']); ?></td></tr>
                                        <tr><th>Pack Sizes</th><td><?php echo $e(implode(' | ', $p['packs'])); ?></td></tr>
                                        <tr><th>Brand</th><td>Krishimax Agritech LLP</td></tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="us" role="tabpanel">
                            <h3>Usage &amp; Safety</h3>
                            <p>Apply <?php echo $e($p['name']); ?> at <strong><?php echo $e($p['dosage']); ?></strong> as recommended in the Krishimax catalogue.</p>
                            <ul class="pd-check">
                                <li><i class="far fa-check"></i> Always read the label and leaflet on the pack before use.</li>
                                <li><i class="far fa-check"></i> Follow the crop, pest/disease and dose instructions given on the label.</li>
                                <li><i class="far fa-check"></i> Use protective clothing while handling and spraying.</li>
                                <li><i class="far fa-check"></i> Keep out of reach of children and store in a cool, dry place.</li>
                                <li><i class="far fa-check"></i> For crop-specific advice, consult your local agronomist or contact our team.</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Related products -->
                <div class="pd-related">
                    <div class="section-title text-center">
                        <span class="wow fadeInUp"><img src="assets/img/sub-title.svg" alt="img">More From Krishimax</span>
                        <h2 class="text-anim">Related Products</h2>
                    </div>
                    <div class="row g-4 mt-1">
                        <?php foreach ($products as $rs => $rp) { if ($rs === $slug) continue; ?>
                        <div class="col-xl col-lg-4 col-md-6 col-sm-6">
                            <a href="product-details.php?product=<?php echo $e($rs); ?>" class="pd-card pd-<?php echo $e($rp['type']); ?>">
                                <div class="pd-card-img"><img src="assets/img/products/<?php echo $e($rs); ?>-large.jpg" alt="<?php echo $e($rp['name']); ?>"></div>
                                <div class="pd-card-body">
                                    <small><?php echo $e($rp['category']); ?></small>
                                    <h4><?php echo $e($rp['name']); ?></h4>
                                    <span>View Details <i class="far fa-arrow-right"></i></span>
                                </div>
                            </a>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA -->
        <section class="pd-cta">
            <div class="container">
                <div class="pd-cta-box">
                    <div>
                        <h3>Need help choosing the right product?</h3>
                        <p>Talk to the Krishimax Agritech team for dosage, availability and dealer enquiries.</p>
                    </div>
                    <a href="contact.php" class="theme-btn">Contact Us <i class="far fa-arrow-right"></i></a>
                </div>
            </div>
        </section>

        <?php
            include_once ('elements/footer.php')
        ?>

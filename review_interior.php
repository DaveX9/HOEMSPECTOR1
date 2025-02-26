<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css"
        integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css">
    <link rel="stylesheet" href="/HOMESPECTOR/CSS/Review-home.css">
    <title>Header Design</title>
</head>

<body>
    <div class="content-box">
        <div class="content-box">
        <div class="header">
                <header class="top-bar">
                    <div class="container">
                        <!-- Social Icons -->
                        <div class="social-icons">
                            <a href="https://www.facebook.com/t.homeinspector/?locale=th_TH">
                                <img src="/HOMESPECTOR/icon/ICON/Fb.png" alt="Facebook">
                            </a>
                            <a href="https://www.instagram.com/t.homeinspector/">
                                <img src="/HOMESPECTOR/icon/ICON/IG.png" alt="Instagram">
                            </a>
                            <a href="https://page.line.me/t.home?openQrModal=true">
                                <img src="/HOMESPECTOR/icon/ICON/line.png" alt="Line">
                            </a>
                            <a href="tel:082-045-6165">
                                <img src="/HOMESPECTOR/icon/ICON/phone.png" alt="Phone">
                            </a>
                        </div>
                        <!-- Logo -->
                        <div class="logo">
                            <a href="/HOMESPECTOR/Homepage/index.html">
                                <img src="/HOMESPECTOR/img/s1.png" alt="T. Home Inspector Logo">
                            </a>
                        </div>

                        <div class="actions">
                            <!-- Language Switcher -->
                            <div class="language-switcher">
                                <a href="?lang=th" class="lang-link">
                                    <img src="/HOMESPECTOR/icon/ICON/thai.png" alt="Thai" title="ภาษาไทย">
                                </a>
                                <a href="?lang=en" class="lang-link">
                                    <img src="/HOMESPECTOR/icon/ICON/eng.png" alt="English" title="English">
                                </a>
                            </div>

                            <!-- Search Icon -->
                            <i id="search-icon" class="fas fa-search"></i>
                            <div id="search-bar" class="search-bar">
                                <input type="text" placeholder="Search..." />
                                <button onclick="searchFunction()">Search</button>
                            </div>
                            <!-- Hamburger Icon -->
                            <i id="hamburger-icon" class="fas fa-bars hamburger-icon" onclick="toggleMenu()"></i>
                        </div>
                </header>
                <nav class="nav-links" id="nav-links">
                    <ul>
                        <li><a href="/HOMESPECTOR/Homepage/index.html" data-translate="nav.home">หน้าหลัก</a>
                        </li>
                        <li><a href="/HOMESPECTOR/Homepage/service.html" data-translate="nav.services">บริการ</a></li>
                        <li><a href="/HOMESPECTOR/Homepage/promotion.html" data-translate="nav.promotion">สิทธิพิเศษ</a>
                        </li>
                        <li><a href="/HOMESPECTOR/Homepage/projects_media.html" data-translate="nav.projects">ผลงาน</a>
                        </li>

                        <!-- Dropdown Menu -->
                        <li class="dropdown">
                            <a href="#" class="menu-item" data-translate="nav.aboutUs">
                                เกี่ยวกับเรา <span class="dropdown-icon"><i class="fa-solid fa-caret-down"></i></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="/HOMESPECTOR/Homepage/ourstory.html"
                                        data-translate="nav.ourStory">ประวัติของเรา</a>
                                </li>
                                <li><a href="/HOMESPECTOR/Homepage/ourteam.html"
                                        data-translate="nav.ourTeam">ทีมงานของเรา</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="menu-item" data-translate="nav.service">
                                บริการเสริม <span class="dropdown-icon"><i class="fa-solid fa-caret-down"></i></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="/HOMESPECTOR/Homepage/app-inspector.html"
                                        data-translate="nav.app-inspector">ตรวจบ้านเอง</a>
                                </li>
                                <li><a href="cal-electric.html" data-translate="nav.cal-electric">คำนวณไฟฟ้า</a>
                                </li>
                                <li><a href="checklist.html" data-translate="nav.checklist">เทียบสเปกบ้าน</a>
                                </li>
                            </ul>
                        </li>
                        <li><a href="/HOMESPECTOR/Homepage/articles.html" data-translate="nav.articles">บทความ</a></li>
                        <li><a href="/HOMESPECTOR/Homepage/Review-home.html"
                                data-translate="nav.reviewHome">รีวิวบ้าน</a></li>
                        <li><a href="/HOMESPECTOR/Homepage/review_interior.php"
                                data-translate="nav.reviewInterior">บริการตกแต่งภายใน</a></li>
                        <li><a href="/HOMESPECTOR/Homepage/joinwithus.php" data-translate="nav.joinUs">รวมงานกับเรา</a>
                        </li>
                        <li><a href="/HOMESPECTOR/Homepage/Contactus.php" data-translate="nav.contact">ติดต่อเรา</a>
                        </li>
                    </ul>
                </nav>
                <!-- Fullscreen Navigation -->
                <div id="fullscreen-menu" class="fullscreen-menu">
                    <!-- Close Icon -->
                    <i id="close-icon" class="fas fa-times"></i>
                    <header class="top-bar">
                        <div class="container">
                            <!-- Social Icons -->
                            <div class="social-icons">
                                <a href="https://www.facebook.com/t.homeinspector/?locale=th_TH">
                                    <img src="/HOMESPECTOR/icon/ICON/Fb.png" alt="Facebook">
                                </a>
                                <a href="https://www.instagram.com/t.homeinspector/">
                                    <img src="/HOMESPECTOR/icon/ICON/IG.png" alt="Instagram">
                                </a>
                                <a href="https://page.line.me/t.home?openQrModal=true">
                                    <img src="/HOMESPECTOR/icon/ICON/line.png" alt="Line">
                                </a>
                                <a href="tel:082-045-6165">
                                    <img src="/HOMESPECTOR/icon/ICON/phone.png" alt="Phone">
                                </a>
                            </div>

                            <!-- Logo -->
                            <div class="logo">
                                <a href="/HOMESPECTOR/Homepage/index.html">
                                    <img src="/HOMESPECTOR/img/s1.png" alt="T. Home Inspector Logo">
                                </a>
                            </div>

                            <!-- Actions -->
                            <div class="actions">
                                <!-- Language Switcher -->
                                <div class="language-switcher">
                                    <a href="?lang=th" class="lang-link">
                                        <img src="/HOMESPECTOR/icon/ICON/thai.png" alt="Thai" title="ภาษาไทย">
                                    </a>
                                    <a href="?lang=en" class="lang-link">
                                        <img src="/HOMESPECTOR/icon/ICON/eng.png" alt="English" title="English">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </header>
                    <!-- Navigation Content -->
                    <div class="menu-content">
                        <!-- Topics Section -->
                        <div class="menu-section">
                            <h3>Navigation</h3>
                            <ul>
                                <li><a href="/HOMESPECTOR/Homepage/index.html" data-translate="nav.home">หน้าหลัก</a>
                                </li>
                                <li><a href="/HOMESPECTOR/Homepage/service.html"
                                        data-translate="nav.services">บริการ</a></li>
                                <li><a href="/HOMESPECTOR/Homepage/promotion.html"
                                        data-translate="nav.promotion">สิทธิพิเศษ</a></li>
                                <li><a href="/HOMESPECTOR/Homepage/projects_media.html"
                                        data-translate="nav.projects">ผลงาน</a></li>

                                <!-- Dropdown Menu -->
                                <li class="dropdown1">
                                    <a href="#" class="menu-item1" data-translate="nav.aboutUs">
                                        เกี่ยวกับเรา <span class="dropdown-icon1"><i
                                                class="fa-solid fa-caret-down"></i></span>
                                    </a>
                                    <ul class="dropdown-menu1">
                                        <li><a href="/HOMESPECTOR/Homepage/ourstory.html"
                                                data-translate="nav.ourStory">ประวัติของเรา</a>
                                        </li>
                                        <li><a href="/HOMESPECTOR/Homepage/ourteam.html"
                                                data-translate="nav.ourTeam">ทีมงานของเรา</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="menu-item" data-translate="nav.service">
                                        บริการเสริม <span class="dropdown-icon"><i
                                                class="fa-solid fa-caret-down"></i></span>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="/HOMESPECTOR/Homepage/app-inspector.html"
                                                data-translate="nav.app-inspector">ตรวจบ้านเอง</a>
                                        </li>
                                        <li><a href="cal-electric.html" data-translate="nav.cal-electric">คำนวณไฟฟ้า</a>
                                        </li>
                                        <li><a href="checklist.html" data-translate="nav.checklist">เทียบสเปกบ้าน</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="/HOMESPECTOR/Homepage/articles.html"
                                        data-translate="nav.articles">บทความ</a></li>
                                <li><a href="/HOMESPECTOR/Homepage/Review-home.html"
                                        data-translate="nav.reviewHome">รีวิวบ้าน</a></li>
                                <li><a href="/HOMESPECTOR/Homepage/review_interior.php"
                                        data-translate="nav.reviewInterior">บริการตกแต่งภายใน</a></li>
                                <li><a href="/HOMESPECTOR/Homepage/joinwithus.php"
                                        data-translate="nav.joinUs">รวมงานกับเรา</a></li>
                                <li><a href="/HOMESPECTOR/Homepage/Contactus.php"
                                        data-translate="nav.contact">ติดต่อเรา</a></li>
                            </ul>
                        </div>

                        <!-- Series & Podcast Section -->
                        <div class="menu-section">
                            <h3>Content/Articles</h3>
                            <ul>
                                <li><a href="#">รายการทั้งหมด</a></li>
                                <li><a href="#">มนุษย์ต่างวัย Talk</a></li>
                                <li><a href="#">บพุทธ์ที่โครฟ</a></li>
                                <li><a href="#">Life Long Investing</a></li>
                                <li><a href="#">มนุษย์ต่างวัย Podcast</a></li>
                                <li><a href="#">ชีวิตชีวา 2</a></li>
                                <li><a href="#">The O Idol</a></li>
                                <li><a href="#">มนุษย์ต่างวัย Talk</a></li>
                            </ul>
                        </div>

                        <!-- Other Sections -->
                        <div class="menu-section">
                            <h3><a href="/HOMESPECTOR/Homepage/Contactus.php" class="menu-link">Contact</a></h3>
                            <h3><a href="/HOMESPECTOR/Homepage/projects_media.html" class="menu-link">Projects</a></h3>
                            <h3><a href="/HOMESPECTOR/Homepage/joinwithus.php" class="menu-link">joinwithus</a></h3>
                        </div>
                    </div>
                </div>
            </div>

            <!-- line -->
            <div class="contact-container1">
                <a href="tel:02-454-2043" class="contact-item1" data-aos="fade-up-left">
                    <div class="icon">
                        <i class="fa-solid fa-phone"></i>
                    </div>
                    <span>โทร 02-454-2043</span>
                </a>
                <a href="https://line.me/R/ti/p/@t.home" target="_blank" class="contact-item1" data-aos="fade-up-right">
                    <div class="icon">
                        <i class="fa-brands fa-line" style="color: #00a347;"></i>
                    </div>
                    <span>@t.home</span>
                </a>
            </div>
            <div class="review-page" data-aos="fade-up">
                <h1>ผลงานออกแบบตกแต่งภายใน</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. <br>
                    Neque consequatur corrupti ipsum laudantium,<br>
                </p>
                <hr>
                <br>
                <h1>เลือกตามสไตล์การออกแบบ</h1>
                <br>
                <div class="categories" data-aos="fade-up" data-aos-duration="1500">
                    <button class="category-btn active" data-category="all">All</button>
                    <button class="category-btn" data-category="Modern">Modern</button>
                    <button class="category-btn" data-category="Modern Luxury">Modern Luxury</button>
                    <button class="category-btn" data-category="Modern Classic">Modern Classic</button>
                </div>


                <div class="review-cards">
                    <a href="/HOMESPECTOR/Homepage/after_review_interior1.html" class="card" data-category="Modern">
                        <img src="/HOMESPECTOR/img/after_review/interrior-bg1.jpg" alt="House Review 1">
                        <p>Bangkok Boulevard Ramintra109</p>
                    </a>
                    <a href="/HOMESPECTOR/Homepage/after_review_interior2.html" class="card" data-category="Modern">
                        <img src="/HOMESPECTOR/img/after_review/interrior-bg2.jpg" alt="House Review 1">
                        <p>Nantawan Pinklao</p>
                    </a>
                    <a href="/HOMESPECTOR/Homepage/after_review_interior3.html" class="card" data-category="Modern">
                        <img src="/HOMESPECTOR/img/after_review/interrior-bg3.jpg" alt="House Review 2">
                        <p>Veritz Sathupradit34</p>
                    </a>
                    <a href="/HOMESPECTOR/Homepage/after_review_interior4.html" class="card"
                        data-category="Modern Luxury">
                        <img src="/HOMESPECTOR/img/after_review/interrior-bg4.jpg" alt="House Review 3">
                        <p>CHAIYAPRUEK Bangna km 15</p>
                    </a>
                    <a href="/HOMESPECTOR/Homepage/after_review_interior5.html" class="card"
                        data-category="Modern Luxury">
                        <img src="/HOMESPECTOR/img/after_review/interrior-bg5.jpg" alt="House Review 5">
                        <p>Grand Bangkok boulevard Krungthepkreetra</p>
                    </a>
                    <a href="/HOMESPECTOR/Homepage/after_review_interior6.html" class="card"
                        data-category="Modern Luxury">
                        <img src="/HOMESPECTOR/img/after_review/interrior-bg6.jpg" alt="House Review 6">
                        <p>S'RIN Ratchapruek-Sai1</p>
                    </a>
                    <a href="/HOMESPECTOR/Homepage/after_review_interior7.html" class="card"
                        data-category="Modern Classic">
                        <img src="/HOMESPECTOR/img/after_review/interrior-bg7.jpg" alt="House Review 7">
                        <p>MANTANA Barom-thaweewattana</p>
                    </a>
                    <a href="/HOMESPECTOR/Homepage/after_review_interior8.html" class="card"
                        data-category="Modern Classic">
                        <img src="/HOMESPECTOR/img/after_review/interrior-bg8.jpg" alt="House Review 8">
                        <p>Prinn Sathorn-ratchapruek</p>
                    </a>
                    <a href="/HOMESPECTOR/Homepage/after_review_interior9.html" class="card"
                        data-category="Modern Classic">
                        <img src="/HOMESPECTOR/img/after_review/interrior-bg9.jpg" alt="House Review 9">
                        <p>THE CITY Pinklao-sirinthorn</p>
                    </a>
                </div>
            </div>
            <div class="video-carousel" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                <button class="prev" onclick="moveSlide(-1)">&#10094;</button>
                <div class="video-wrapper" id="videoSlider">
                    <div class="video-item">
                        <iframe src="https://www.youtube.com/embed/V5cP06m2dqM?si=kIWEI0rr26nbiy9W" allowfullscreen></iframe>
                    </div>
                    <div class="video-item">
                        <iframe src="https://www.youtube.com/embed/XiE60iwh4B8?si=2nUsa6ov1Us4sGQQ" allowfullscreen></iframe>
                    </div>
                    <div class="video-item">
                        <iframe src="https://www.youtube.com/embed/BLk85ITjFA0?si=chO07-lAlwg6q39h" allowfullscreen></iframe>
                    </div>
                    <div class="video-item">
                        <iframe src="https://www.youtube.com/embed/JV3YbNgw_Uw?si=T--TiY3b7p2_3fFq" allowfullscreen></iframe>
                    </div>
                    <div class="video-item">
                        <iframe src="https://www.youtube.com/embed/M-nLhplc-mc?si=Q4eYZIiDOL1wbzH9" allowfullscreen></iframe>
                    </div>
                    <div class="video-item">
                        <iframe src="https://www.youtube.com/embed/m_lOwlSrFng?si=akO-BDY7yZnghdR5" allowfullscreen></iframe>
                    </div>
                </div>
                <button class="next" onclick="moveSlide(1)">&#10095;</button>
            </div> 

            <?php
                try {
                    $pdo = new PDO('mysql:host=localhost;dbname=homespector', 'root', '');
                    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                    // Fetch company details
                    $stmt = $pdo->prepare("SELECT * FROM contact_info LIMIT 1");
                    $stmt->execute();
                    $contact = $stmt->fetch(PDO::FETCH_ASSOC);
                } catch (PDOException $e) {
                    die("Database error: " . $e->getMessage());
                }
            ?>
            <div class="contact-container" data-aos="fade-up-right">
                <div class="contact-info">
                    <h2><?php echo htmlspecialchars($contact['company_name']); ?></h2>
                    <p><strong><?php echo htmlspecialchars($contact['address']); ?></strong></p>

                    <a href="https://maps.app.goo.gl/wqofxUPRpDrbbRmv5" target="_blank" class="get-direction-btn"
                        data-translate="get-direction">
                        Get Direction
                    </a>
                    <!-- Map container -->
                    <div class="map-container">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3876.382748942745!2d100.41417899999999!3d13.6952533!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e2bd6191c4dc0f%3A0x525332376dd66d01!2z4Lia4Lij4Li04Lip4Lix4LiXIOC4lS7guIjguKPguLHguKrguIrguLHguKIg4Liq4Liy4LiB4Lil4LiB4LmI4Lit4Liq4Lij4LmJ4Liy4LiHIOC4iOC4s-C4geC4seC4lA!5e0!3m2!1sth!2sth!4v1733535737301!5m2!1sth!2sth"
                            width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>

                    <p><i class="fa-solid fa-phone"></i> : 
                        <a href="tel:<?php echo htmlspecialchars($contact['phone']); ?>">
                            <?php echo htmlspecialchars($contact['phone']); ?>
                        </a>
                    </p>
                    <p><i class="fa-solid fa-envelope"></i> : 
                        <a href="mailto:<?php echo htmlspecialchars($contact['email']); ?>">
                            <?php echo htmlspecialchars($contact['email']); ?>
                        </a>
                    </p>

                    <!-- Social Media (Not Editable) -->
                    <div class="social-icons">
                        <a href="https://www.facebook.com/t.homeinspector/?locale=th_TH">
                            <img src="/HOMESPECTOR/icon/ICON/Fb.png" alt="Facebook">
                        </a>
                        <a href="https://www.instagram.com/t.homeinspector/">
                            <img src="/HOMESPECTOR/icon/ICON/IG.png" alt="Instagram">
                        </a>
                        <a href="https://page.line.me/t.home?openQrModal=true">
                            <img src="/HOMESPECTOR/icon/ICON/line.png" alt="Line">
                        </a>
                        <a href="tel:082-045-6165">
                            <img src="/HOMESPECTOR/icon/ICON/phone.png" alt="Phone">
                        </a>
                    </div>
                </div>

                <!-- Contact Form (Not Editable) -->
                <div class="contact-form" data-aos="fade-up-left">
                    <h2>CONTACT US</h2>
                    <form action="/HomeSpector/backend/process-form.php" method="POST">
                        <label for="name">Name:</label>
                        <input type="text" id="name" name="name" required>

                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" required>

                        <label for="message">Message:</label>
                        <textarea id="message" name="message" required></textarea>

                        <button type="submit">Submit</button>
                    </form>
                </div>
            </div>
            
            <footer class="footer">
                <div class="footer-container">
                    <!-- Left Section: Social Media & Branding -->
                    <div class="footer-left">
                        <!-- <h2>HomeInspector</h2> -->
                        <img src="/HOMESPECTOR/img/footer_logo.png" alt="HomeInspector Logo" class="footer-logo">
                        <div class="social-icons">
                            <a href="https://www.facebook.com/t.homeinspector/" target="_blank"><img src="/HOMESPECTOR/icon/ICON/Fb.png" alt="Facebook"></a>
                            <a href="https://www.instagram.com/t.homeinspector/" target="_blank"><img src="/HOMESPECTOR/icon/ICON/IG.png" alt="Instagram"></a>
                            <a href="https://page.line.me/t.home?openQrModal=true" target="_blank"><img src="/HOMESPECTOR/icon/ICON/line.png" alt="Line"></a>
                            <a href="https://www.tiktok.com/@thomeinspector" target="_blank"><img src="/HOMESPECTOR/icon/ICON/Tiktok.png" alt="TikTok"></a>
                            <a href="https://www.youtube.com/channel/UC1BPUCVPBW4-ml7MrxQWjug" target="_blank"><img src="/HOMESPECTOR/icon/ICON/YB.png" alt="YouTube"></a>
                        </div>
                    </div>

                    <!-- Center Section: Company -->
                    <div class="footer-center">
                        <h2>เกี่ยวกับเรา <span class="toggle-icon">+</span></h2>
                        <ul>
                            <li><a href="/HOMESPECTOR/Homepage/ourstory.html">ประวัติของเรา</a></li>
                            <li><a href="/HOMESPECTOR/Homepage/ourteam.html">ทีมงานของเรา</a></li>
                        </ul>
                    </div>

                    <!-- Right Section: Our Services -->
                    <div class="footer-right">
                        <h2>บริการของเรา <span class="toggle-icon">+</span></h2>
                        <ul>
                            <li><a href="/HOMESPECTOR/Homepage/Hinspector.html">ต.ตรวจบ้าน</a></li>
                            <li><a href="/HOMESPECTOR/Homepage/Hinterior.html">ต.ตงแต่ง</a></li>
                            <li><a href="/HOMESPECTOR/Homepage/Hconstruction.html">ต.เติม</a></li>
                            <li><a href="/HOMESPECTOR/Homepage/Hbulter.html">H.Bulter</a></li>
                            <li><a href="/HOMESPECTOR/Homepage/cal-electric.html">ตรวจสอบระบบไฟฟ้า</a></li>
                            <li><a href="/HOMESPECTOR/Homepage/app-inspector.html">ตรวจบ้านเอง</a></li>
                            <li><a href="/HOMESPECTOR/Homepage/checklist.html">เทียบสเปกบ้าน</a></li>
                        </ul>
                    </div>

                    <!-- Extra Section: Customer Help -->
                    <div class="footer-help">
                        <h2>ช่วยเหลือ <span class="toggle-icon">+</span></h2>
                        <ul>
                            <li><a href="/HOMESPECTOR/Homepage/index.html#faq">คำถามที่พบบ่อย (FAQ)</a></li>
                            <li><a href="/HOMESPECTOR/Homepage/joinwithus.php">รวมงานกับเรา</a></li>
                            <li><a href="/HOMESPECTOR/Homepage/promotion.html">โปรโมชั่น</a></li>
                            <li><a href="/HOMESPECTOR/Homepage/Contactus.php">ติดต่อเรา</a></li>
                        </ul>
                    </div>

                    <!-- Payment Logos -->
                    <div class="footer-payment">
                        <h2>ชำระเงินด้วย</h2>
                        <div class="payment-logos">
                            <img src="/HOMESPECTOR/img/visacard.png" alt="Visa">
                            <img src="/HOMESPECTOR/img/Mastercard.webp" alt="MasterCard">
                        </div>
                    </div>
                </div>

                <!-- Footer Bottom -->
                <div class="footer-bottom">
                    <p>© 2024 HomeInspector. All Rights Reserved.</p>
                </div>
            </footer>

        </div>
    </div>


    <script src="/HOMESPECTOR/JS/Toggle_Navbar.js"></script>
    <script src="/HOMESPECTOR/JS/review_zoom.js"></script>
    <script src="/HOMESPECTOR/JS/filter.js"></script>
    <script src="/HOMESPECTOR/JS/upload_date.js"></script>
    <script src="/HOMESPECTOR/JS/dropdown.js"></script>
    <script src="/HOMESPECTOR/JS/footer.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script src="/HOMESPECTOR/JS/search_ham.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <!-- video slider js -->
    <script>
        let currentIndex = 0;
        const videos = document.querySelectorAll(".video-item");
        const totalVideos = videos.length;
        const videoSlider = document.getElementById("videoSlider");

        function moveSlide(direction) {
            currentIndex += direction;

            if (currentIndex < 0) {
                currentIndex = totalVideos - 1;
            } else if (currentIndex >= totalVideos) {
                currentIndex = 0;
            }

            const offset = -currentIndex * 100 + "%";
            videoSlider.style.transform = "translateX(" + offset + ")";
        }
    </script>

</body>

</html>
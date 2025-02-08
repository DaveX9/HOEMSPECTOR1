<?php include 'header.php'; ?>
<?php include 'nav.php'; ?>

<div class="form-container">
    <h1>Manage Services, Banner, and Carousel</h1>

    <!-- Services Section -->
    <form id="services-form">
        <h2>Services Details</h2>
        <div class="form-group">
            <label for="service-title">Service Title:</label>
            <input type="text" id="service-title" name="service_title" value="ต. ตรวจบ้าน รับตรวจรับบ้านและคอนโดก่อนโอนกรรมสิทธิ์" />
        </div>
        <div class="form-group">
            <label for="service-description">Description:</label>
            <textarea id="service-description" name="service_description">ทำไมต้องเลือกเรา "ตรวจจริง เห็นกับตา ไปพร้อมลูกค้า" ตรวจบ้านและคอนโดโดยใช้อุปกรณ์จริง (ไม่ได้ตรวจสอบด้วยตาเปล่า) และเทคโนโลยีที่ทันสมัย</textarea>
        </div>
        <h2>Contact Information</h2>
        <div class="form-group">
            <label for="contact-admin">Admin Contact:</label>
            <input type="text" id="contact-admin" name="contact_admin" value="082-045-6165, 02-301-0283" />
        </div>
        <div class="form-group">
            <label for="contact-thep">Thep Contact:</label>
            <input type="text" id="contact-thep" name="contact_thep" value="082-669-9666" />
        </div>
        <div class="form-group">
            <label for="contact-mes">Mes Contact:</label>
            <input type="text" id="contact-mes" name="contact_mes" value="086-500-0019" />
        </div>
    </form>

    <!-- Banner Section -->
    <form id="banner-form" enctype="multipart/form-data">
        <h2>Service Banner</h2>
        <div class="form-group">
            <label for="banner-upload">Banner Image:</label>
            <img src="/HOMESPECTOR1/img/ourservice.png" alt="Service Banner" id="banner-preview" style="max-width: 300px;" />
            <input type="file" id="banner-upload" name="banner_image" accept="image/*" />
        </div>
    </form>

    <!-- Carousel Section -->
    <form id="carousel-form" enctype="multipart/form-data">
        <h2>Carousel Images</h2>
        <div id="carousel-images">
            <div class="form-group">
                <label>Slide 1:</label>
                <img src="/HOMESPECTOR1/img/servicecharge1.png" alt="Slide 1" style="max-width: 200px;" />
                <input type="file" name="carousel_images[]" accept="image/*" />
            </div>
            <div class="form-group">
                <label>Slide 2:</label>
                <img src="/HOMESPECTOR1/img/servicecharge2.png" alt="Slide 2" style="max-width: 200px;" />
                <input type="file" name="carousel_images[]" accept="image/*" />
            </div>
            <div class="form-group">
                <label>Slide 3:</label>
                <img src="/HOMESPECTOR1/img/servicecharge3.png" alt="Slide 3" style="max-width: 200px;" />
                <input type="file" name="carousel_images[]" accept="image/*" />
            </div>
            <div class="form-group">
                <label>Slide 4:</label>
                <img src="/HOMESPECTOR1/img/servicecharge4.png" alt="Slide 4" style="max-width: 200px;" />
                <input type="file" name="carousel_images[]" accept="image/*" />
            </div>
        </div>
        <button type="button" id="add-slide-btn">Add New Slide</button>
    </form>

    <div class="button-container">
        <button type="submit" id="save-btn" class="save-btn">Save Changes</button>
        <button type="button" class="cancel-btn" onclick="window.location.reload();">Cancel</button>
    </div>
</div>

<script>
    document.getElementById('add-slide-btn').addEventListener('click', function () {
    const carouselContainer = document.getElementById('carousel-images');
    const newSlideIndex = carouselContainer.children.length + 1;

    const newSlideHTML = `
        <div class="form-group">
            <label>Slide ${newSlideIndex}:</label>
            <input type="file" name="carousel_images[]" accept="image/*" />
        </div>
    `;

    carouselContainer.insertAdjacentHTML('beforeend', newSlideHTML);
    });

    document.getElementById('save-btn').addEventListener('click', function (e) {
        e.preventDefault();

        const servicesFormData = new FormData(document.getElementById('services-form'));
        const bannerFormData = new FormData(document.getElementById('banner-form'));
        const carouselFormData = new FormData(document.getElementById('carousel-form'));

        // Combine all form data
        for (const [key, value] of bannerFormData.entries()) {
            servicesFormData.append(key, value);
        }
        for (const [key, value] of carouselFormData.entries()) {
            servicesFormData.append(key, value);
        }

        fetch('save-service4.php', {
            method: 'POST',
            body: servicesFormData,
        })
            .then((response) => response.json())
            .then((data) => {
                alert(data.message);
            })
            .catch((error) => {
                console.error('Error saving data:', error);
                alert('Failed to save changes.');
            });
    });

</script>


<?php include 'footer.php'; ?>

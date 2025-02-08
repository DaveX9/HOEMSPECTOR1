<?php include 'header.php'; ?>
<?php include 'nav.php'; ?>
<div class="form-container">
    <h1>Manage Contact Information & Carousel</h1>

    <!-- Contact Information Section -->
    <form id="contact-form">
        <h2>Contact Information</h2>
        <div class="form-group">
            <label for="company-name">Company Name:</label>
            <input type="text" id="company-name" name="company_name" value="ต. ตรวจบ้าน รับตรวจรับบ้านและคอนโดก่อนโอนกรรมสิทธิ์" />
        </div>
        <div class="form-group">
            <label for="description">Description:</label>
            <textarea id="description" name="description">ทำไมต้องเลือกเรา "ตรวจจริง เห็นกับตา ไปพร้อมลูกค้า" ตรวจบ้านและคอนโดโดยใช้อุปกรณ์จริง (ไม่ได้ตรวจสอบด้วยตาเปล่า) และเทคโนโลยีที่ทันสมัย</textarea>
        </div>
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
        <div class="form-group">
            <label for="address">Address:</label>
            <textarea id="address" name="address">2043 Soi Kanchanaphisek 008, Bangkae, Bangkae Bangkok 10160 Thailand</textarea>
        </div>
        <div class="form-group">
            <label for="facebook-link">Facebook Link:</label>
            <input type="url" id="facebook-link" name="facebook_link" value="https://www.facebook.com/t.homeinspector/?locale=th_TH" />
        </div>
        <div class="form-group">
            <label for="instagram-link">Instagram Link:</label>
            <input type="url" id="instagram-link" name="instagram_link" value="https://www.instagram.com/t.homeinspector/" />
        </div>
        <div class="form-group">
            <label for="line-link">Line Link:</label>
            <input type="url" id="line-link" name="line_link" value="https://page.line.me/t.home?openQrModal=true" />
        </div>
    </form>

    <!-- Carousel Section -->
    <form id="carousel-form" enctype="multipart/form-data">
        <h2>Carousel Images</h2>
        <div id="carousel-images">
            <!-- Existing Images -->
            <div class="form-group">
                <label>Slide 1:</label>
                <img src="/HOMESPECTOR/img/servicecharge1.png" alt="Slide 1" style="max-width: 200px;" />
                <input type="file" name="carousel_images[]" accept="image/*" />
            </div>
            <div class="form-group">
                <label>Slide 2:</label>
                <img src="/HOMESPECTOR/img/servicecharge2.png" alt="Slide 2" style="max-width: 200px;" />
                <input type="file" name="carousel_images[]" accept="image/*" />
            </div>
            <div class="form-group">
                <label>Slide 3:</label>
                <img src="/HOMESPECTOR/img/servicecharge3.png" alt="Slide 3" style="max-width: 200px;" />
                <input type="file" name="carousel_images[]" accept="image/*" />
            </div>
            <div class="form-group">
                <label>Slide 4:</label>
                <img src="/HOMESPECTOR/img/servicecharge4.png" alt="Slide 4" style="max-width: 200px;" />
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

        // Collect form data
        const contactFormData = new FormData(document.getElementById('contact-form'));
        const carouselFormData = new FormData(document.getElementById('carousel-form'));

        // Combine both form data
        for (const [key, value] of carouselFormData.entries()) {
            contactFormData.append(key, value);
        }

        // Send the data to the backend
        fetch('save-service.php', {
            method: 'POST',
            body: contactFormData,
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

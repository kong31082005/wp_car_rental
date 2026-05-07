<?php
get_header();
?>

<style>
.car-detail-page {
  max-width: 1420px;
  margin: 0 auto;
  padding: 32px 24px 80px;
  color: #0f172a;
}

.car-back {
  display: inline-block;
  margin-bottom: 22px;
  color: #16a34a;
  font-weight: 700;
  text-decoration: none;
}

.car-gallery {
  display: grid;
  grid-template-columns: minmax(0, 1fr) 480px;
  gap: 22px;
  margin-bottom: 46px;
}

.car-gallery-main img {
  width: 100%;
  height: 520px;
  object-fit: cover;
  border-radius: 20px;
  display: block;
}

.car-gallery-thumbs {
  display: flex;
  flex-direction: column;
  gap: 22px;
}

.car-gallery-thumbs img {
  width: 100%;
  height: 249px;
  object-fit: cover;
  border-radius: 18px;
  cursor: pointer;
  display: block;
  transition: .2s;
}

.car-gallery-thumbs img:hover {
  opacity: .82;
}

.car-detail-layout {
  display: grid;
  grid-template-columns: minmax(0, 1fr) 480px;
  gap: 36px;
  align-items: start;
}

.car-detail-left h1 {
  font-size: 42px;
  font-weight: 900;
  margin: 0 0 14px;
}

.car-detail-meta {
  display: flex;
  gap: 18px;
  flex-wrap: wrap;
  font-size: 17px;
  margin-bottom: 22px;
  color: #334155;
}

.car-detail-tags {
  display: flex;
  gap: 12px;
  margin-bottom: 58px;
}

.car-detail-tags span {
  border: 1px solid #e5e7eb;
  padding: 12px 20px;
  border-radius: 999px;
  font-weight: 700;
  background: #fff;
}

.car-detail-left h2 {
  font-size: 26px;
  font-weight: 900;
  margin: 32px 0 24px;
}

.car-features {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 26px;
}

.car-features span {
  color: #22c55e;
  font-size: 26px;
}

.car-features p {
  color: #64748b;
  margin: 14px 0 8px;
}

.car-features strong {
  font-size: 20px;
}

.car-detail-left hr {
  border: none;
  border-top: 1px solid #e5e7eb;
  margin: 34px 0;
}

.car-description {
  font-size: 17px;
  line-height: 1.8;
  color: #334155;
}

.car-amenities {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 24px 50px;
  font-size: 17px;
  font-weight: 600;
}

.car-policy-box {
  background: #fff7f2;
  border-left: 6px solid #f97316;
  padding: 22px 26px;
  border-radius: 16px;
  display: grid;
  gap: 14px;
}

.car-location-detail {
  font-size: 18px;
}

.car-owner {
  display: grid;
  grid-template-columns: 80px 1.5fr 1fr 1fr 1fr;
  gap: 18px;
  align-items: center;
}

.owner-avatar {
  width: 72px;
  height: 72px;
  background: #22c55e;
  color: white;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 32px;
  font-weight: 900;
  text-transform: uppercase;
}

.car-booking-box {
  position: static;
  align-self: start;
}

.insurance-box {
  background: #ecfdf5;
  border: 1px solid #86efac;
  border-radius: 18px;
  padding: 22px;
  margin-bottom: 18px;
  color: #166534;
}

.insurance-box strong {
  font-size: 20px;
}

.price-box {
  background: #f8fafc;
  border: 1px solid #dbe3ec;
  border-radius: 24px;
  padding: 28px;
  box-shadow: 0 18px 50px rgba(15, 23, 42, .08);
}

.car-price strong {
  font-size: 38px;
  font-weight: 900;
}

.car-price span {
  font-size: 20px;
  color: #64748b;
  font-weight: 700;
}

.time-box {
  display: grid;
  grid-template-columns: 1fr 1fr;
  border: 1px solid #dbe3ec;
  border-radius: 14px;
  overflow: hidden;
  margin: 28px 0;
  background: white;
}

.time-box div {
  padding: 18px;
}

.time-box div:first-child {
  border-right: 1px solid #dbe3ec;
}

.time-box p {
  margin: 0 0 8px;
  color: #64748b;
  font-weight: 700;
}

.pickup-option {
  background: white;
  border: 1px solid #dbe3ec;
  border-radius: 14px;
  padding: 18px;
  margin: 14px 0;
}

.pickup-option.active {
  background: #ecfdf5;
  border-color: #86efac;
}

.pickup-option span {
  float: right;
  color: #22c55e;
  font-weight: 900;
}

.voucher-box {
  display: grid;
  grid-template-columns: 1fr 110px;
  gap: 12px;
  margin-bottom: 20px;
}

.voucher-box input {
  border: 1px solid #dbe3ec;
  border-radius: 14px;
  padding: 16px;
}

.voucher-box button,
.rent-btn {
  border: none;
  background: #22c55e;
  color: white;
  border-radius: 14px;
  font-weight: 900;
  cursor: pointer;
}

.price-summary {
  border-top: 1px solid #e5e7eb;
  margin-top: 20px;
  padding-top: 18px;
}

.price-summary div {
  display: flex;
  justify-content: space-between;
  padding: 12px 0;
}

.price-summary .total {
  font-size: 22px;
  font-weight: 900;
}

.rent-btn {
  width: 100%;
  padding: 18px;
  margin-top: 18px;
  font-size: 20px;
}

@media (max-width: 1024px) {
  .car-gallery,
  .car-detail-layout {
    grid-template-columns: 1fr;
  }

  .car-gallery-main img {
    height: 420px;
  }

  .car-gallery-thumbs {
    flex-direction: row;
  }

  .car-gallery-thumbs img {
    height: 180px;
  }

  .car-features,
  .car-amenities {
    grid-template-columns: repeat(2, 1fr);
  }

  .car-owner {
    grid-template-columns: 80px 1fr;
  }
}

@media (max-width: 767px) {
  .car-detail-page {
    padding: 20px 14px 60px;
  }

  .car-gallery-main img,
  .car-gallery-thumbs img {
    height: 220px;
  }

  .car-gallery-thumbs {
    flex-direction: column;
  }

  .car-detail-left h1 {
    font-size: 32px;
  }

  .car-features,
  .car-amenities {
    grid-template-columns: 1fr;
  }
}
</style>

<?php
while (have_posts()) : the_post();

$brand_map = [
    'toyota' => 'Toyota',
    'honda' => 'Honda',
    'hyundai' => 'Hyundai',
    'lamborghini' => 'Lamborghini',
    'kia' => 'Kia',
    'mazda' => 'Mazda',
    'mitsubishi' => 'Mitsubishi',
    'ford' => 'Ford',
    'vinfast' => 'VinFast',
    'mercedes' => 'Mercedes-Benz',
    'bmw' => 'BMW',
    'audi' => 'Audi',
    'lexus' => 'Lexus',
    'nissan' => 'Nissan'
];

$transmission_map = [
    'automatic' => 'Số tự động',
    'manual' => 'Số sàn'
];

$fuel_map = [
    'gasoline' => 'Xăng',
    'diesel' => 'Dầu',
    'electric' => 'Điện',
    'hybrid' => 'Hybrid'
];

$brand = get_field('brand');
$model = get_field('model');
$year = get_field('year');
$price = (int) get_field('price');

$car_name = ($brand_map[$brand] ?? $brand) . ' ' . $model . ' ' . $year;

$image_front = get_field('image_front');
$image_back = get_field('image_back');
$image_interior = get_field('image_interior');

$author_id = get_the_author_meta('ID');
$author_name = get_the_author();
$author_initial = mb_substr($author_name, 0, 1);
?>

<main class="car-detail-page">

  <a class="car-back" href="javascript:history.back()">← Quay lại</a>

  <section class="car-gallery">
    <div class="car-gallery-main">
      <img id="mainCarImage" src="<?php echo esc_url($image_front); ?>" alt="<?php echo esc_attr($car_name); ?>">
    </div>

    <div class="car-gallery-thumbs">
      <img src="<?php echo esc_url($image_back); ?>" onclick="changeCarImage(this)" alt="">
      <img src="<?php echo esc_url($image_interior); ?>" onclick="changeCarImage(this)" alt="">
    </div>
  </section>

  <section class="car-detail-layout">

    <div class="car-detail-left">

      <div class="car-detail-header">

            <h1><?php echo esc_html($car_name); ?></h1>

            <div class="detail-action-buttons">
                <?php echo kongcars_favorite_button(get_the_ID()); ?>
            </div>

      </div>

      <div class="car-detail-meta">
        <span>⭐ <?php echo esc_html(get_field('rating')); ?></span>
        <span>🚗 <?php echo esc_html(get_field('trips')); ?> chuyến</span>
        <span>📍 <?php echo esc_html(get_field('location')); ?></span>
      </div>

      <div class="car-detail-tags">
        <?php if (get_field('mortgage')) : ?>
          <span>🛡 Miễn thế chấp</span>
        <?php endif; ?>

        <?php if (get_field('delivery')) : ?>
          <span>📍 Giao xe tận nơi</span>
        <?php endif; ?>
      </div>

      <h2>Đặc điểm</h2>

      <div class="car-features">
        <div>
          <span>⚙</span>
          <p>Truyền động</p>
          <strong><?php echo esc_html($transmission_map[get_field('transmission')] ?? get_field('transmission')); ?></strong>
        </div>

        <div>
          <span>👥</span>
          <p>Số ghế</p>
          <strong><?php echo esc_html(get_field('seats')); ?> chỗ</strong>
        </div>

        <div>
          <span>⛽</span>
          <p>Nhiên liệu</p>
          <strong><?php echo esc_html($fuel_map[get_field('fuel')] ?? get_field('fuel')); ?></strong>
        </div>

        <div>
          <span>💳</span>
          <p>Mức tiêu hao</p>
          <strong>7 L/100km</strong>
        </div>
      </div>

      <hr>

      <h2>Mô tả</h2>
      <div class="car-description">
        <?php the_content(); ?>
      </div>

      <hr>

      <h2>Các tiện nghi khác</h2>

      <div class="car-amenities">
        <span>🧭 Bản đồ</span>
        <span>📷 Camera 360</span>
        <span>📷 Camera cập lề</span>
        <span>📷 Camera lùi</span>
        <span>🛞 Cảm biến lốp</span>
        <span>⚠️ Cảm biến va chạm</span>
        <span>⏱ Cảnh báo tốc độ</span>
        <span>🛞 Lốp dự phòng</span>
        <span>🖥 Màn hình DVD</span>
        <span>💳 ETC</span>
      </div>

      <hr>

      <h2>Giấy tờ thuê xe</h2>

      <div class="car-policy-box">
        <p>Chọn 1 trong 2 hình thức</p>
        <strong>📄 GPLX đối chiếu & Passport giữ lại</strong>
        <strong>🪪 GPLX đối chiếu & CCCD đối chiếu VNeID</strong>
      </div>

      <hr>

      <h2>Tài sản thế chấp</h2>

      <div class="car-policy-box">
        <p>Không yêu cầu khách thuê thế chấp tiền mặt hoặc xe máy.</p>
      </div>

      <hr>

      <h2>Vị trí xe</h2>
      <p class="car-location-detail">📍 <?php echo esc_html(get_field('location')); ?></p>

      <hr>

      <h2>Chủ xe</h2>

      <div class="car-owner">
        <div class="owner-avatar"><?php echo esc_html($author_initial); ?></div>
        <div>
          <h3><?php echo esc_html($author_name); ?></h3>
          <p>⭐ 5.0 · 🚗 43 chuyến</p>
        </div>
        <div>
          <p>Tỉ lệ phản hồi</p>
          <strong>100%</strong>
        </div>
        <div>
          <p>Phản hồi trong</p>
          <strong>5 phút</strong>
        </div>
        <div>
          <p>Tỉ lệ đồng ý</p>
          <strong>100%</strong>
        </div>
      </div>

    </div>

    <aside class="car-booking-box">

      <div class="insurance-box">
        <strong>Bảo hiểm thuê xe</strong>
        <p>Chuyến đi được áp dụng bảo hiểm thuê xe cơ bản. Khách thuê sẽ được hỗ trợ trong các trường hợp đủ điều kiện.</p>
      </div>

      <div class="price-box">
        <div class="car-price">
          <strong><?php echo number_format($price, 0, ',', '.'); ?>đ</strong>
          <span>/ngày</span>
        </div>

        <div class="time-box">
          <div>
            <p>Nhận xe</p>
            <strong>Chọn thời gian</strong>
          </div>
          <div>
            <p>Trả xe</p>
            <strong>Chọn thời gian</strong>
          </div>
        </div>

        <h3>Địa điểm giao nhận xe</h3>

        <div class="pickup-option active">
          <strong>Tôi tự đến lấy xe</strong>
          <span>Miễn phí</span>
          <p><?php echo esc_html(get_field('location')); ?></p>
        </div>

        <div class="pickup-option">
          <strong>Tôi muốn được giao xe tận nơi</strong>
        </div>

        <h3>Mã khuyến mãi</h3>

        <div class="voucher-box">
          <input type="text" placeholder="Nhập mã khuyến mãi">
          <button>Áp dụng</button>
        </div>

        <div class="price-summary">
          <div><span>Đơn giá thuê</span><strong><?php echo number_format($price, 0, ',', '.'); ?>đ/ngày</strong></div>
          <div><span>Số ngày thuê</span><strong>1 ngày</strong></div>
          <div><span>Tạm tính</span><strong><?php echo number_format($price, 0, ',', '.'); ?>đ</strong></div>
          <div><span>Chương trình giảm giá</span><strong>0đ</strong></div>
          <div><span>Mã khuyến mãi</span><strong>0đ</strong></div>
          <div class="total"><span>Thành tiền</span><strong><?php echo number_format($price, 0, ',', '.'); ?>đ</strong></div>
        </div>

        <button class="rent-btn">⚡ CHỌN THUÊ</button>
      </div>

    </aside>

  </section>

</main>

<script>
function changeCarImage(el) {
  document.getElementById('mainCarImage').src = el.src;
}
</script>

<?php
endwhile;
get_footer();
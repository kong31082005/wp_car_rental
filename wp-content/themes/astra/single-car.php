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

.car-detail-header {
  position: relative;
  padding-right: 90px;
}

.car-detail-left h1 {
  font-size: 42px;
  font-weight: 900;
  margin: 0 0 14px;
}

.detail-action-buttons {
  position: absolute;
  top: 0;
  right: 0;
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

.price-box h3 {
  margin-top: 30px;
  margin-bottom: 14px;
  font-size: 24px;
  font-weight: 900;
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

.booking-time-list {
  display: grid;
  gap: 14px;
  margin: 28px 0;
}

.booking-time-row {
  background: white;
  border: 1px solid #dbe3ec;
  border-radius: 16px;
  padding: 16px;
}

.booking-time-row label {
  display: block;
  color: #64748b;
  font-weight: 800;
  margin-bottom: 10px;
}

.booking-time-row input {
  width: 100%;
  border: none;
  outline: none !important;
  box-shadow: none !important;
  background: transparent;
  color: #0f172a;
  font-size: 17px;
  font-weight: 900;
}

.booking-time-row:focus-within {
  border-color: #86efac;
  box-shadow: 0 0 0 3px rgba(34,197,94,.12);
}

.pickup-option {
  background: white;
  border: 1px solid #dbe3ec;
  border-radius: 14px;
  padding: 18px;
  margin: 14px 0;
  cursor: pointer;
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

.delivery-address-box {
  display: none;
  margin: 14px 0;
}

.delivery-address-box input,
.personal-voucher-box input {
  width: 100%;
  border: 1px solid #dbe3ec;
  border-radius: 16px;
  padding: 16px;
  outline: none !important;
  box-shadow: none !important;
}

.delivery-address-box input:focus,
.personal-voucher-box input:focus {
  border-color: #86efac !important;
  box-shadow: 0 0 0 3px rgba(34,197,94,.12) !important;
}

.promo-select-wrap {
  position: relative;
  margin-bottom: 22px;
}

.promo-select-btn {
  width: 100%;
  min-height: 64px;

  display: flex;
  align-items: center;
  justify-content: space-between;

  padding: 18px 22px;

  border: 1px solid #dbe3ec !important;
  border-radius: 18px !important;

  background: #ffffff !important;
  color: #0f172a !important;

  font-size: 18px;
  font-weight: 800;

  cursor: pointer;

  outline: none !important;
  box-shadow: none !important;
}

.promo-select-btn strong {
  color: #0f172a !important;
}

.promo-select-btn span {
  color: #64748b !important;
  font-size: 18px;
}

.promo-select-btn:hover,
.promo-select-btn:focus,
.promo-select-btn:active {
  background: #ffffff !important;
  color: #0f172a !important;
  border-color: #22c55e !important;
  box-shadow: 0 0 0 4px rgba(34,197,94,.12) !important;
}

.promo-select-wrap {
  position: relative;
  margin-bottom: 26px;
}

.promo-menu {
  display: none;
  position: absolute;
  left: 0;
  right: 0;
  top: calc(100% + 8px);
  z-index: 50;
  background: #fff;
  border: 1px solid #dbe3ec;
  border-radius: 16px;
  box-shadow: 0 18px 40px rgba(15, 23, 42, .12);
  overflow: hidden;
  max-height: 260px;
  overflow-y: auto;
}

.promo-menu.active {
  display: block;
}

.promo-item {
  padding: 15px 16px;
  cursor: pointer;
  border-bottom: 1px solid #eef2f7;
}

.promo-item:last-child {
  border-bottom: none;
}

.promo-item:hover {
  background: #ecfdf5;
}

.promo-item strong {
  display: block;
  color: #16a34a;
  font-weight: 900;
}

.promo-item span {
  display: block;
  color: #64748b;
  margin-top: 5px;
}

#promoMessage {
  font-weight: 800;
  margin: -6px 0 28px;
}

.personal-voucher-box {
  display: grid;
  grid-template-columns: 1fr 128px;
  gap: 14px;
  align-items: stretch;
  margin-bottom: 10px;
}

.personal-voucher-box input {
  height: 56px;
}

.personal-voucher-box button {
  height: 56px;
  border: none;
  border-radius: 16px;
  background: #22c55e;
  color: white;
  font-size: 16px;
  line-height: 1.1;
  font-weight: 900;
  cursor: pointer;
  transition: .2s ease;
}

.personal-voucher-box button:hover {
  background: #16a34a;
  transform: translateY(-1px);
}

#voucherMessage {
  font-weight: 800;
  margin-bottom: 18px;
}

.price-summary {
  border-top: 1px solid #e5e7eb;
  margin-top: 22px;
  padding-top: 18px;
}

.price-summary div {
  display: flex;
  justify-content: space-between;
  padding: 12px 0;
  gap: 18px;
}

.price-summary .total {
  font-size: 22px;
  font-weight: 900;
}

.rent-btn,
.rent-btn:hover,
.rent-btn:focus,
.rent-btn:active {
  width: 100%;
  padding: 18px;
  margin-top: 18px;
  font-size: 20px;
  border: none !important;
  background: #22c55e !important;
  color: white !important;
  border-radius: 14px;
  font-weight: 900;
  cursor: pointer;
  outline: none !important;
  box-shadow: 0 12px 24px rgba(34,197,94,.24) !important;
}

.rent-btn:hover {
  background: #16a34a !important;
}

.booking-time-row.error {
  border-color: #ef4444 !important;
  background: #fff1f2;
}

.booking-time-error {
  display: none;
  margin: -8px 0 22px;
  color: #e11d48;
  font-weight: 800;
  line-height: 1.5;
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

  .personal-voucher-box {
    grid-template-columns: 1fr;
  }

  .personal-voucher-box button {
    width: 100%;
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

$author_name = get_the_author();
$author_initial = mb_substr($author_name, 0, 1);

function kc_normalize_datetime_local_detail($value) {
    if (!$value) return '';
    $timestamp = strtotime(sanitize_text_field($value));
    return $timestamp ? date('Y-m-d\TH:i', $timestamp) : '';
}

$pickup_raw = $_GET['pickup'] ?? $_GET['pickup_time'] ?? $_GET['start'] ?? $_GET['start_time'] ?? '';
$return_raw = $_GET['return'] ?? $_GET['return_time'] ?? $_GET['end'] ?? $_GET['end_time'] ?? '';

$pickup_value = kc_normalize_datetime_local_detail($pickup_raw);
$return_value = kc_normalize_datetime_local_detail($return_raw);

$public_coupons = get_posts([
    'post_type' => 'shop_coupon',
    'posts_per_page' => -1,
    'post_status' => 'publish',
    'meta_query' => [
        [
            'key' => 'voucher_type',
            'value' => 'public',
            'compare' => '='
        ]
    ]
]);

$public_coupon_data = [];

foreach ($public_coupons as $coupon) {
    $code = strtoupper($coupon->post_title);
    $amount = (float) get_post_meta($coupon->ID, 'coupon_amount', true);
    $type = get_post_meta($coupon->ID, 'discount_type', true);

    $public_coupon_data[$code] = [
        'code' => $code,
        'amount' => $amount,
        'type' => $type
    ];
}

$personal_coupon_data = [];

if (is_user_logged_in()) {
    $redeemed = get_user_meta(get_current_user_id(), 'redeemed_vouchers', true);
    if (!is_array($redeemed)) $redeemed = [];

    foreach ($redeemed as $item) {
        if (empty($item['code'])) continue;
        if (!empty($item['used'])) continue;

        $code = strtoupper($item['code']);
        $coupon_post = get_page_by_title($code, OBJECT, 'shop_coupon');

        if (!$coupon_post) continue;

        $amount = (float) get_post_meta($coupon_post->ID, 'coupon_amount', true);
        $type = get_post_meta($coupon_post->ID, 'discount_type', true);

        $personal_coupon_data[$code] = [
            'code' => $code,
            'amount' => $amount,
            'type' => $type
        ];
    }
}
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
          <?php
          if (function_exists('kongcars_favorite_button')) {
              echo kongcars_favorite_button(get_the_ID());
          }
          ?>
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

      <div class="price-box" id="bookingBox" data-price="<?php echo esc_attr($price); ?>">

        <div class="car-price">
          <strong><?php echo number_format($price, 0, ',', '.'); ?>đ</strong>
          <span>/ngày</span>
        </div>

        <div class="booking-time-list">
          <div class="booking-time-row">
            <label for="pickupTime">Nhận xe</label>
            <input type="datetime-local" id="pickupTime" value="<?php echo esc_attr($pickup_value); ?>">
          </div>

          <div class="booking-time-row">
            <label for="returnTime">Trả xe</label>
            <input type="datetime-local" id="returnTime" value="<?php echo esc_attr($return_value); ?>">
          </div>
        </div>
        <div class="booking-time-error" id="bookingTimeError"></div>
        <h3>Địa điểm giao nhận xe</h3>

        <div class="pickup-option active" data-type="self">
          <strong>Tôi tự đến lấy xe</strong>
          <span>Miễn phí</span>
          <p><?php echo esc_html(get_field('location')); ?></p>
        </div>

        <div class="pickup-option" data-type="delivery">
          <strong>Tôi muốn được giao xe tận nơi</strong>
          <span>+50.000đ</span>
        </div>

        <div class="delivery-address-box" id="deliveryAddressBox">
          <input type="text" id="deliveryAddress" placeholder="Nhập địa chỉ giao xe">
        </div>

        <h3>Chương trình khuyến mãi</h3>

        <div class="promo-select-wrap">
          <button type="button" class="promo-select-btn" id="promoSelectBtn">
            <strong id="selectedPromoText">Chọn chương trình khuyến mãi</strong>
            <span>⌄</span>
          </button>

          <div class="promo-menu" id="promoMenu">
            <div class="promo-item" data-code="">
              <strong>Không dùng khuyến mãi</strong>
              <span>Không áp dụng chương trình công khai</span>
            </div>

            <?php if (!empty($public_coupons)) : ?>
              <?php foreach ($public_coupons as $coupon) :
                $coupon_id = $coupon->ID;
                $code = strtoupper($coupon->post_title);
                $amount = get_post_meta($coupon_id, 'coupon_amount', true);
                $discount_type = get_post_meta($coupon_id, 'discount_type', true);

                $label = $discount_type === 'percent'
                  ? 'Giảm ' . $amount . '%'
                  : 'Giảm ' . number_format((int)$amount, 0, ',', '.') . 'đ';
              ?>
                <div class="promo-item" data-code="<?php echo esc_attr($code); ?>">
                  <strong><?php echo esc_html($code); ?></strong>
                  <span><?php echo esc_html($label); ?></span>
                </div>
              <?php endforeach; ?>
            <?php endif; ?>
          </div>
        </div>

        <div id="promoMessage"></div>

        <h3>Mã khuyến mãi</h3>

        <div class="personal-voucher-box">
          <input type="text" id="personalCouponCode" placeholder="Nhập mã voucher đã đổi bằng điểm">
          <button type="button" id="applyPersonalCoupon">Áp dụng</button>
        </div>

        <div id="voucherMessage"></div>

        <div class="price-summary">
          <div><span>Đơn giá thuê</span><strong id="dailyPriceText"><?php echo number_format($price, 0, ',', '.'); ?>đ/ngày</strong></div>
          <div><span>Số ngày thuê</span><strong id="rentalDaysText">1 ngày</strong></div>
          <div><span>Tạm tính</span><strong id="subtotalText"><?php echo number_format($price, 0, ',', '.'); ?>đ</strong></div>
          <div><span>Phí giao xe</span><strong id="deliveryFeeText">0đ</strong></div>
          <div><span>Chương trình khuyến mãi</span><strong id="publicDiscountText">0đ</strong></div>
          <div><span>Mã khuyến mãi</span><strong id="personalDiscountText">0đ</strong></div>
          <div class="total"><span>Thành tiền</span><strong id="totalText"><?php echo number_format($price, 0, ',', '.'); ?>đ</strong></div>
        </div>

        <button class="rent-btn" id="rentBtn">⚡ CHỌN THUÊ</button>
      </div>

    </aside>

  </section>

</main>

<script>
const PUBLIC_COUPONS = <?php echo wp_json_encode($public_coupon_data); ?>;
const PERSONAL_COUPONS = <?php echo wp_json_encode($personal_coupon_data); ?>;

function changeCarImage(el) {
  document.getElementById('mainCarImage').src = el.src;
}

function formatMoney(number) {
  return new Intl.NumberFormat('vi-VN').format(Math.max(0, Math.round(number))) + 'đ';
}

function setMinDateTime() {
  const now = new Date();
  now.setMinutes(now.getMinutes() - now.getTimezoneOffset());
  const minDateTime = now.toISOString().slice(0, 16);

  document.getElementById('pickupTime').min = minDateTime;
  document.getElementById('returnTime').min = minDateTime;
}

function validateRentalTime(showAlert = false) {
  const pickupEl = document.getElementById('pickupTime');
  const returnEl = document.getElementById('returnTime');
  const errorEl = document.getElementById('bookingTimeError');

  const pickup = pickupEl.value;
  const returned = returnEl.value;

  pickupEl.closest('.booking-time-row').classList.remove('error');
  returnEl.closest('.booking-time-row').classList.remove('error');

  errorEl.style.display = 'none';
  errorEl.textContent = '';

  function showError(message, targetEl) {
    if (targetEl) {
      targetEl.closest('.booking-time-row').classList.add('error');
    }

    errorEl.textContent = message;
    errorEl.style.display = 'block';

    if (showAlert) alert(message);

    return false;
  }

  if (!pickup || !returned) {
    return showError('Vui lòng chọn đầy đủ thời gian nhận xe và trả xe.', !pickup ? pickupEl : returnEl);
  }

  const start = new Date(pickup);
  const end = new Date(returned);
  const now = new Date();

  if (start.getTime() < now.getTime()) {
    return showError('Thời gian nhận xe không được nhỏ hơn thời gian hiện tại.', pickupEl);
  }

  if (end.getTime() <= start.getTime()) {
    return showError('Thời gian trả xe phải sau thời gian nhận xe.', returnEl);
  }

  const diffHours = (end.getTime() - start.getTime()) / (1000 * 60 * 60);

  if (diffHours < 24) {
    return showError('Thời gian thuê tối thiểu là 1 ngày.', returnEl);
  }

  if (diffHours > 24 * 30) {
    return showError('Thời gian thuê tối đa là 30 ngày.', returnEl);
  }

  return true;
}

function getRentalDays() {
  const pickup = document.getElementById('pickupTime').value;
  const returned = document.getElementById('returnTime').value;

  if (!pickup || !returned) return 1;

  const start = new Date(pickup);
  const end = new Date(returned);

  if (isNaN(start.getTime()) || isNaN(end.getTime()) || end <= start) return 1;

  const diffMs = end - start;
  const oneDay = 24 * 60 * 60 * 1000;

  return Math.max(1, Math.ceil(diffMs / oneDay));
}

function getDiscountAmount(coupon, subtotal) {
  if (!coupon) return 0;

  if (coupon.type === 'percent') {
    return subtotal * Number(coupon.amount) / 100;
  }

  return Number(coupon.amount || 0);
}

let selectedPickupType = 'self';
let selectedPublicCoupon = null;
let selectedPersonalCoupon = null;

function calculatePrice() {
  const box = document.getElementById('bookingBox');
  const price = Number(box.dataset.price || 0);
  const days = getRentalDays();
  const subtotal = price * days;
  const deliveryFee = selectedPickupType === 'delivery' ? 50000 : 0;

  const publicDiscount = getDiscountAmount(selectedPublicCoupon, subtotal);
  const personalDiscount = getDiscountAmount(selectedPersonalCoupon, subtotal);
  const total = Math.max(0, subtotal + deliveryFee - publicDiscount - personalDiscount);

  document.getElementById('rentalDaysText').textContent = days + ' ngày';
  document.getElementById('subtotalText').textContent = formatMoney(subtotal);
  document.getElementById('deliveryFeeText').textContent = formatMoney(deliveryFee);
  document.getElementById('publicDiscountText').textContent = publicDiscount > 0 ? '-' + formatMoney(publicDiscount) : '0đ';
  document.getElementById('personalDiscountText').textContent = personalDiscount > 0 ? '-' + formatMoney(personalDiscount) : '0đ';
  document.getElementById('totalText').textContent = formatMoney(total);
}

document.querySelectorAll('.pickup-option').forEach(option => {
  option.addEventListener('click', function () {
    document.querySelectorAll('.pickup-option').forEach(el => el.classList.remove('active'));
    this.classList.add('active');

    selectedPickupType = this.dataset.type;

    document.getElementById('deliveryAddressBox').style.display =
      selectedPickupType === 'delivery' ? 'block' : 'none';

    calculatePrice();
  });
});

document.getElementById('pickupTime').addEventListener('change', function () {
  validateRentalTime(false);
  calculatePrice();
});

document.getElementById('returnTime').addEventListener('change', function () {
  validateRentalTime(false);
  calculatePrice();
});

document.getElementById('promoSelectBtn').addEventListener('click', function () {
  document.getElementById('promoMenu').classList.toggle('active');
});

document.querySelectorAll('.promo-item').forEach(item => {
  item.addEventListener('click', function () {
    const code = this.dataset.code;
    const message = document.getElementById('promoMessage');

    document.getElementById('promoMenu').classList.remove('active');

    if (!code) {
      selectedPublicCoupon = null;
      document.getElementById('selectedPromoText').textContent = 'Chọn chương trình khuyến mãi';
      message.textContent = '';
      calculatePrice();
      return;
    }

    selectedPublicCoupon = PUBLIC_COUPONS[code] || null;
    document.getElementById('selectedPromoText').textContent = code;
    message.textContent = 'Đã chọn chương trình: ' + code;
    message.style.color = '#16a34a';

    calculatePrice();
  });
});

document.addEventListener('click', function (e) {
  const wrap = document.querySelector('.promo-select-wrap');
  if (wrap && !wrap.contains(e.target)) {
    document.getElementById('promoMenu').classList.remove('active');
  }
});

document.getElementById('applyPersonalCoupon').addEventListener('click', function () {
  const code = document.getElementById('personalCouponCode').value.trim().toUpperCase();
  const message = document.getElementById('voucherMessage');

  selectedPersonalCoupon = null;

  if (!code) {
    message.textContent = 'Vui lòng nhập mã voucher đã đổi bằng điểm.';
    message.style.color = '#e11d48';
    calculatePrice();
    return;
  }

  if (!PERSONAL_COUPONS[code]) {
    message.textContent = 'Mã voucher cá nhân không hợp lệ hoặc không thuộc tài khoản của bạn.';
    message.style.color = '#e11d48';
    calculatePrice();
    return;
  }

  selectedPersonalCoupon = PERSONAL_COUPONS[code];
  message.textContent = 'Áp dụng mã cá nhân thành công: ' + code;
  message.style.color = '#16a34a';

  calculatePrice();
});

document.getElementById('rentBtn').addEventListener('click', function () {
  const deliveryAddress = document.getElementById('deliveryAddress').value.trim();

  if (!validateRentalTime(true)) return;

  if (selectedPickupType === 'delivery' && !deliveryAddress) {
    alert('Vui lòng nhập địa chỉ giao xe.');
    return;
  }

  if (selectedPersonalCoupon) {
    fetch('<?php echo admin_url('admin-ajax.php'); ?>', {
      method: 'POST',
      headers: {'Content-Type': 'application/x-www-form-urlencoded'},
      body: new URLSearchParams({
        action: 'kc_mark_voucher_used',
        code: selectedPersonalCoupon.code
      })
    })
    .then(res => res.json())
    .then(data => {
      if (!data.success) {
        alert(data.data.message);
        return;
      }

      alert('Thuê xe thành công.');
      location.reload();
    });

    return;
  }

  alert('Thuê xe thành công.');
  location.reload();
});

setMinDateTime();
calculatePrice();
</script>

<?php
endwhile;
get_footer();
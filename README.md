# 🚗 KONG CARS - DỊCH VỤ CHO THUÊ XE TỰ LÁI
## 🌐 Đồ án môn học: Xây dựng Website trên nền tảng Mã nguồn mở (WordPress)

Hệ thống **Kong Cars** là nền tảng thương mại dịch vụ chuyên biệt cho thuê xe tự lái, được xây dựng trên nền tảng WordPress nâng cao. Dự án tập trung vào việc tự động hóa quy trình vận hành từ tìm kiếm, đặt lịch đến xác lập hợp đồng điện tử và thanh toán trực tuyến VietQR.

---

## 👥 Danh sách thành viên & Phân công nhiệm vụ

| STT | Họ và tên | MSSV | Phân công nhiệm vụ cụ thể |
|-----|-----------|------|--------------------|
| 1 | **Nguyễn Văn Công** | 23810310128 | **Nhóm trưởng**: Thiết lập kiến trúc hệ thống; Cấu hình CPT UI & ACF; Viết mã PHP tùy chỉnh qua Code Snippets (Tính tiền, tích điểm, đổi voucher, xác thực email, yêu thích xe); Quản trị Database; Thiết kế UI/UX bằng Elementor & UAE; Xây dựng Banner Smart Slider 3; Cấu hình hệ thống Email SMTP; Thiết lập cộng đồng tin tức và tương tác người dùng.  |
| 2 | **Vũ Trường Giang** | 23810310117 | **Thành viên**: Quản trị nội dung xe; Viết mã PHP tùy chỉnh qua Code Snippets (logic hợp đồng, booking, thanh toán); Tích hợp cổng PayOS; Chức năng tìm kiếm xe, Đăng nhập, Đăng ký, Hợp đồng điện tử PDF; Thiết kế UI/UX bằng Elementor & UAE. |

---

## 🔗 Thông tin dự án
* **Link Website Online:** [https://kongcars.infinityfreeapp.com/]
* **Link Video Demo:** [Xem Video Thuyết Minh Tại Đây][https://drive.google.com/drive/folders/14kjW7e0CReFendRDWB2mkh_Q3Zaev7d3?usp=sharing]

---

## 🔐 Tài khoản Demo
* **Trang quản trị:** [https://kongcars.infinityfreeapp.com/wp-admin]
* **Tài khoản Admin:** `nguyenvancong2005vp@gmail.com (cong)` / **Mật khẩu:** `@Cong31082005`
* **Khách hàng:** Có thể đăng ký tài khoản mới trực tiếp trên website.

---

## 🛠 Công nghệ sử dụng
Hệ thống tận dụng hệ sinh thái WordPress kết hợp với các kỹ thuật tùy biến mã nguồn:
* **CMS:** WordPress 6.x.
* **Page Builder:** Elementor Pro & Ultimate Addons for Elementor (UAE).
* **Data Structure:** CPT UI (Cars) & Advanced Custom Fields (ACF).
* **E-Commerce:** WooCommerce.
* **Custom Logic:** Code Snippets (PHP/JS/Shortcodes) xử lý nghiệp vụ riêng biệt.
* **Thanh toán:** PayOS API (VietQR động).
* **Hệ thống bổ trợ:** WP Mail SMTP, Smart Slider 3, PDF Invoices.

---

## 🎨 UI / Demo

| Chức năng | Mô tả | Link |
| :--- | :--- | :--- |
| **Trang chủ (Home)** | Giao diện chính với Banner Slider và Tìm kiếm xe | [Xem](./images_demo/home-ui.png) |
| **Giới thiệu KongCars** | Thông tin chi tiết về thương hiệu và dịch vụ | [Xem](./images_demo/Kongcars.png) |
| **Đăng nhập / Đăng ký** | Giao diện truy cập hệ thống dành cho người dùng | [Xem](./images_demo/login.png) |
| **Danh sách xe** | Hiển thị danh mục xe cho thuê kèm bộ lọc | [Xem](./images_demo/list-car.png) |
| **Chi tiết xe** | Thông tin kỹ thuật chi tiết của từng loại xe | [Xem](./images_demo/cardetail.png) |
| **Yêu thích xe** | Danh sách các dòng xe khách hàng đã lưu | [Xem](./images_demo/likecar.png) |
| **Thanh toán QR** | Giao diện quét mã thanh toán VietQR PayOS | [Xem](./images_demo/payment.png) |
| **Hợp đồng điện tử** | Mẫu điều khoản hợp đồng thuê xe điện tử | [Xem](./images_demo/constract.png) |
| **Lịch sử đơn hàng** | Quản lý danh sách các chuyến xe đã đặt | [Xem](./images_demo/history.png) |
| **Vòng quay may mắn** | Tính năng Gamification nhận quà tặng | [Xem](./images_demo/spin.png) |
| **Kho Voucher** | Danh sách các mã giảm giá hiện có trên hệ thống | [Xem](./images_demo/voucher.png) |
| **Voucher cá nhân** | Các mã giảm giá người dùng đã đổi hoặc sở hữu | [Xem](./images_demo/voucherpersonal.png) |
| **Lịch sử tích điểm** | Chi tiết quá trình cộng/trừ điểm thưởng (Reward Points) | [Xem](./images_demo/historypoint.png) |
| **Đăng bài cộng đồng** | Giao diện viết bài chia sẻ kinh nghiệm và tương tác | [Xem](./images_demo/newpost.png) |

---

## 🚀 Chức năng chính

### 1. Dành cho Khách hàng (Customer)
* **Tìm kiếm & Gợi ý:** Tìm xe thông minh theo địa điểm, thời gian và lọc chi tiết theo hãng xe, hộp số (ACF). Gợi ý các dòng xe nổi bật tại trang chủ.
* **Đặt xe & Hợp đồng:** Quy trình Booking khép kín. Khách hàng thực hiện ký xác nhận **Hợp đồng điện tử** trực tuyến trước khi thanh toán.
* **Thanh toán VietQR:** Tích hợp cổng PayOS sinh mã QR động. Hệ thống tự động xác nhận đơn thành công ngay khi tiền về tài khoản (Webhook).
* **Hệ sinh thái Loyalty & Gamification:** * Tự động tích điểm thưởng dựa trên giá trị đơn thuê xe.
    * Sử dụng điểm để tham gia **Vòng quay may mắn** hoặc đổi lấy **Voucher** cá nhân.
* **Quản lý hành trình:** Theo dõi lịch sử đơn hàng, trạng thái chuyến đi và quản lý danh sách xe yêu thích.
* **Cộng đồng:** Đăng bài chia sẻ trải nghiệm, tương tác thả tim và bình luận bài viết.

### 2. Dành cho Quản trị viên (Admin)
* **Quản trị kho xe:** Cấu hình thông số kỹ thuật (ACF) và trạng thái xe (Sẵn sàng/Đang thuê).
* **Quản lý giao dịch:** Theo dõi đơn hàng, doanh thu và trạng thái thanh toán từ PayOS.
* **Cấu hình Marketing:** Quản lý Voucher và tỷ lệ trúng thưởng của Vòng quay may mắn.
* **Hệ thống Email & PDF:** Tự động gửi Email xác nhận đính kèm hợp đồng PDF cho khách hàng.

---

## 📥 Hướng dẫn cài đặt & Chạy Project

### 1. Yêu cầu hệ thống
* Localhost: XAMPP, Laragon hoặc Local WP (PHP 7.4+, MySQL 5.7+).

### 2. Các bước cài đặt
1.  **Tải mã nguồn:** `git clone <link-repo-cua-ban>`
2.  **Thiết lập:** Coppy thư mục vào `htdocs/wp-carrental/`.
3.  **Database:** Tạo DB trống trên phpMyAdmin và Import file `.sql` từ thư mục `database/`.
4.  **Cấu hình:** Cập nhật thông tin `wp-config.php` để kết nối Database.
5.  **Hình ảnh Demo:** Các ảnh minh họa được lưu tại `htdocs/wp-carrental/images_demo/`.

---
**© 2026 Kong Cars Team - Đồ án môn Web Nâng Cao.**

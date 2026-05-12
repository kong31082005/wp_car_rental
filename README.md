# 🚗 KONG CARS - DỊCH VỤ CHO THUÊ XE TỰ LÁI
## 🌐 Đồ án môn học: Xây dựng Website trên nền tảng Mã nguồn mở (WordPress)

Hệ thống **Kong Cars** là nền tảng thương mại dịch vụ chuyên biệt cho thuê xe tự lái, được xây dựng trên nền tảng WordPress nâng cao. Dự án tập trung vào việc tự động hóa quy trình vận hành từ tìm kiếm, đặt lịch đến xác lập hợp đồng điện tử và thanh toán trực tuyến VietQR.

---

## 🔗 Thông tin dự án
* **Link Website Online:** [https://kongcars.id.vn](https://kongcars.id.vn)
* **Link Video Demo:** [Xem Video Thuyết Minh Tại Đây](https://your-youtube-link.com)

---

## 🔐 Tài khoản Demo
* **Trang quản trị:** `https://kongcars.id.vn/wp-admin`
* **Tài khoản:** `nguyenvancong2005vp@gmail.com (cong)` / **Mật khẩu:** `@Cong31082005`

---

## 👥 Danh sách thành viên & Phân công nhiệm vụ

| STT | Họ và tên | MSSV | Phân công nhiệm vụ cụ thể |
|-----|-----------|------|--------------------|
| 1 | **Nguyễn Văn Công** | 23810310128 | **Nhóm trưởng**: Thiết lập kiến trúc hệ thống; Cấu hình CPT UI & ACF; Viết mã PHP tùy chỉnh qua Code Snippets (Tính tiền, tích điểm, đổi voucher, xác thực email, yêu thích xe); Quản trị Database; Thiết kế UI/UX bằng Elementor & UAE; Xây dựng Banner Smart Slider 3; Cấu hình hệ thống Email SMTP; Thiết lập cộng đồng tin tức và tương tác người dùng.  |
| 2 | **Vũ Trường Giang** | 23810310117 | **Thành viên**: Quản trị nội dung xe; Viết mã PHP tùy chỉnh qua Code Snippets (logic hợp đồng, booking, thanh toán); Tích hợp cổng PayOS; Chức năng tìm kiếm xe, Đăng nhập, Đăng ký, Hợp đồng điện tử PDF; Thiết kế UI/UX bằng Elementor & UAE. |

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
|----------|------|------|
| **Trang chủ (Home)** | Giao diện chính với Banner Slider, Form nhập trường tìm kiếm và Danh sách xe | [Xem](./images_demo/home-ui.png) |
| **Danh sách xe** | Hiển thị danh mục xe kèm bộ lọc thông minh | [Xem](./images_demo/archive-ui.png) |
| **Chi tiết xe** | Thông tin kỹ thuật lấy từ trường ACF | [Xem](./images_demo/single-ui.png) |
| **Thanh toán QR** | Giao diện quét mã VietQR động từ PayOS | [Xem](./images_demo/payment-ui.png) |
| **Hợp đồng PDF** | Mẫu hợp đồng điện tử gửi qua Email khách hàng | [Xem](./images_demo/contract-ui.png) |
| **Quà tặng/Voucher** | Giao diện đổi thưởng và lịch sử điểm thưởng | [Xem](./images_demo/reward-ui.png) |
| **Cộng đồng** | Trang tin tức, hệ thống tương tác thả tim/bình luận | [Xem](./images_demo/news-ui.png) |
| **Quản trị Admin** | Giao diện quản lý CPT, Đơn hàng và Snippets | [Xem](./images_demo/admin-ui.png) |

---

## 🚀 Chức năng chính

### 1. Dành cho Khách hàng (Customer)
* **Tìm kiếm & Lọc:** Tìm xe theo địa điểm, thời gian và các tiêu chí ACF (loại xe, hãng xe).
* **Đặt xe & Thanh toán:** Quy trình đặt xe tích hợp xác nhận điều khoản hợp đồng và thanh toán QR Code tự động.
* **Hệ sinh thái Loyalty:** Tích điểm thưởng sau mỗi chuyến đi, đổi voucher giảm giá và tham gia vòng quay may mắn.
* **Cộng đồng:** Đăng bài chia sẻ trải nghiệm, thả tim và bình luận tương tác.

### 2. Dành cho Quản trị viên (Admin)
* **Quản lý xe:** Thêm mới, chỉnh sửa thông số kỹ thuật xe qua giao diện ACF.
* **Quản lý đơn hàng:** Theo dõi luồng booking và trạng thái thanh toán tự động qua Webhook.

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

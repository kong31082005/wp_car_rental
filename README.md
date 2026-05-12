# 🚗 KONG CARS - DỊCH VỤ CHO THUÊ XE TỰ LÁI KONGCARS
## 🌐 Đồ án môn học: Xây dựng Website trên nền tảng Mã nguồn mở (WordPress)

Hệ thống được xây dựng trên nền tảng **WordPress Nâng Cao**, kết hợp giữa các công cụ xây dựng giao diện chuyên nghiệp và các đoạn mã tùy chỉnh (Custom Logic) để giải quyết bài toán thực tế trong lĩnh vực vận tải số. Dự án hỗ trợ quy trình đặt xe khép kín, xác lập hợp đồng điện tử và tự động hóa thanh toán trực tuyến.

---

## 🔗 Demo & Hosting
* **Website URL:** [(https://kongcars.infinityfreeapp.com/)]
* **Tài khoản Admin:** `nguyenvancong2005vp@gmail.com` / `@Cong31082005`

---

## 👥 Thành viên thực hiện

| STT | Họ và tên | Mã sinh viên | Vai trò |
|-----|-----------|--------------|---------|
| 1 | **Nguyễn Văn Công** | 23810310128 | Nhóm trưởng |
| 2 | **Vũ Trường Giang** | 23810310117 | Thành viên |

---

## 📌 Tổng quan dự án

### 🎯 Mục tiêu đề tài
- Làm chủ hệ quản trị nội dung **WordPress** và hệ sinh thái Plugin.
- Sử dụng **CPT UI & ACF** để cấu trúc hóa dữ liệu ngành thuê xe.
- Tùy biến nghiệp vụ sâu bằng **Code Snippets** (PHP/JS) thay vì chỉ dùng Plugin có sẵn.
- Tích hợp hệ thống thanh toán tự động qua cổng **PayOS** (VietQR).

### 👥 Vai trò người dùng (Actor)
* **Khách hàng (Customer):** Tìm kiếm xe, yêu thích xe, đặt lịch, hợp đồng điện tử, thanh toán, tích điểm đổi voucher và đăng tin tức, đăng nhập, đăng ký, xác thực email.
* **Quản trị viên (Admin):** Quản lý kho xe (CPT), điều phối đơn hàng (WooCommerce), quản trị nội dung và giám sát hệ thống tích điểm.

---

## 🛠 Công nghệ & Plugin sử dụng

| Thành phần | Công nghệ / Plugin |
|-----------|-----------|
| **Core System** | WordPress 6.x (PHP & MySQL) |
| **Giao diện** | Elementor Pro, Astra Theme, Smart Slider 3 |
| **Dữ liệu tùy chỉnh** | CPT UI (Cars), Advanced Custom Fields (ACF) |
| **Thương mại điện tử** | WooCommerce |
| **Logic & Nghiệp vụ** | Code Snippets (Custom Shortcodes, Reward Logic) |
| **Thanh toán** | PayOS (VietQR Integration) |
| **Hệ thống Email** | WP Mail SMTP (Gmail API) |
| **Tiện ích** | PDF Invoices (Export Hợp đồng), Ultimate Addons (UAE) |

---

## 🧱 Quy trình xử lý nghiệp vụ (Workflow)

1.  **Quản trị dữ liệu:** Admin dùng **CPT UI** tạo loại bài viết "Cars" và **ACF** để nhập thông số (Giá, hộp số, nhiên liệu).
2.  **Xử lý Logic:** Các đoạn mã trong **Code Snippets** tính toán tổng tiền dựa trên ngày thuê và đóng gói thành **Shortcode** để hiển thị lên UI.
3.  **Hành trình khách hàng:** Khách hàng chọn xe $\rightarrow$ Ký xác nhận điều khoản (Modal) $\rightarrow$ Thanh toán qua QR PayOS.
4.  **Hậu mãi:** Hệ thống tự động xác nhận đơn hàng, gửi **Email xác nhận** đính kèm **Hợp đồng PDF** và cộng điểm thưởng vào tài khoản khách hàng.

---

## 🚀 Các chức năng tiêu biểu

### 🛡️ Nghiệp vụ lõi (Custom Logic)
* **Hợp đồng điện tử:** Tự động tạo bản hợp đồng có giá trị đối chiếu (PDF) ngay khi đơn hàng hoàn tất.
* **Thanh toán tự động:** Webhook từ PayOS tự động chuyển trạng thái đơn hàng sang "Processing" khi khách quét QR thành công.
* **Reward System:** Hệ thống tích điểm, quay thưởng và đổi Voucher được viết bằng mã tùy chỉnh qua Shortcode.

### 🎁 Trải nghiệm người dùng
* **Search & Filter:** Tìm kiếm xe theo thời gian thực dựa trên các trường dữ liệu tùy biến (ACF).
* **Social Hub:** Tính năng tin tức cho phép người dùng "thả tim" và bình luận tương tác.
* **Yêu thích:** Lưu trữ danh sách xe khách hàng quan tâm vào Wishlist cá nhân.

---

## 📥 Hướng dẫn cài đặt & Chạy Local

### 1. Yêu cầu hệ thống
* Web Server (XAMPP/Laragon) hỗ trợ PHP 7.4+ và MySQL.
* WordPress phiên bản mới nhất.

### 2. Triển khai
1. Copy thư mục source vào `htdocs`.
2. Import cơ sở dữ liệu từ file `.sql` kèm theo.
3. Cấu hình file `wp-config.php` để kết nối Database.
4. Truy cập `/wp-admin` để quản lý các tính năng qua Plugin và Code Snippets.

---

## 🧭 Hướng phát triển
- Tích hợp bản đồ GPS theo dõi vị trí xe.
- Phát triển hệ thống đa ngôn ngữ cho khách du lịch nước ngoài.
- Nâng cấp tính năng ký số trực tiếp trên màn hình cảm ứng khi ký hợp đồng.

---
**© 2026 Nhóm 8 - Đồ án WordPress Nâng Cao.**

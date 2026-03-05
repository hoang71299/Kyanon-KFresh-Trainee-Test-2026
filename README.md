1. Cách chạy file PHP này
   -Tạo thư mục dự án vào C:\laragon\www
   -tao file vao code vào thu mục mới vào tạo
   -mở laragon bấm start để khởi động apache
   -để chạy php thì vào trình duyệt gõ localhost/tên_thư_mục_mới_tạo/tên_file_moi_tạo.php
2. Mô tả \n
   -Tạo class Product
   +Khai báo các thuộc tính của sản phẩm gồm: id, name, price, category.
   +Viết constructor để khởi tạo giá trị ban đầu cho các thuộc tính.

   -Tạo Getter và Setter
   +Getter dùng để lấy giá trị của thuộc tính (getId(), getName(), getPrice(), getCategory()).
   +Setter dùng để cập nhật giá trị cho thuộc tính (setId(), setName(), setPrice(), setCategory()).

   -Tạo danh sách sản phẩm
   +Tạo một mảng $products chứa 5 đối tượng Product với các thông tin khác nhau.

   -Viết hàm lọc sản phẩm theo danh mục
   +Hàm filterProductsByCategory($products, $categoryName)
   +Duyệt qua mảng sản phẩm.
   +Nếu category của sản phẩm trùng với $categoryName thì thêm vào mảng kết quả.

   -Viết hàm giảm giá sản phẩm
   +Hàm applyDiscount($products, $percent) dùng để giảm giá sản phẩm theo phần trăm.

   +Giá mới = price \* (1 - percent/100).

   -Hiển thị kết quả

   +Dùng print_r() để in ra danh sách sản phẩm sau khi lọc và sau khi giảm giá.

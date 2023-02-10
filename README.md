1. Chương 1:
- Section 1: Tìm hiểu về biến và ví dụ điển hình trong php
- Section 2: Các hàm mặc định của PHP và cách sử dụng
- Section 3: Sự khác nhau giữa các loại biến trong PHP
- Section 4: Toán tử tính toán trong PHP
- Section 5: Toán tử gán trong PHP
- Section 6: Toán tử so sánh trong PHP
- Section 7: Toán tử tăng giảm trong PHP
- Section 8: Toán tử logic trong PHP
- Section 9: Chia điều kiện bằng switch case
- Section 10: Thực hiện tạo máy tính bằng PHP
- Section 11: Bài toán hiển thị thứ trong tuần bằng PHP
2. Chương 2:
- Section 1: Vòng lặp while trong PHP
- Section 2: Vòng lặp do while trong PHP
- Section 3: Vòng lặp for trong PHP
- Section 4: Vòng lặp foreach trong PHP
- Section 5: Sử dụng function trong PHP
- Section 6: Include file trong PHP
3. Chương 3:
- Section 1: Phạm vi hoạt động của biến
- Section 2: Sử dụng biến super global
- Section 3: Tìm hiểu về $GET và $POST, phân biệt sự khác nhau
- Section 4: Tìm hiểu và phân biệt Cookie và Session trong PHP
4. Chương 4:
* Lập trình hướng đối tượng
- Class & Object (1-n)

4.1. Section 1: Cơ chế (phạm vi truy cập của một thuộc tính, phương thức) hay đóng gói
- Thuộc tính là gì?
    + Thông tin tính chất của đối tượng
    + Biến được khai báo trong class và có kèm theo cơ chế
    Ex: public $name
- Cơ chế là gì?
    + Là phạm vi truy cập của một thuộc tính, phương thức gồm:
        public: cho phép truy cập ở mọi nơi (từ ngoài class, trong class, class mà kế thừa)
        protected: cho phép truy cập ở (trong class, class mà kế thừa)
        private: cho phép truy cập ở (trong class)
- Phương thức: là hàm được khai báo trong class có kèm theo cơ chế

4.2. Section 2: Kế thừa
- Cho phép class con (class kế thừa) sử dụng lại toàn bộ các thuộc tính và phương thức của lớp cha. Những thuộc tính và phương thức đó phải mang cơ chế public hoặc protected
- Để kế thừa ta dùng từ khóa "extends"
- Cú pháp: class A extends class B {}

4.3. Section 3: Đa hình (Overide)

4.4. Section 4: Hằng số trong OOP
- const TÊN_HẰNG = value

4.5. Section 5: Thuộc tính tĩnh và phương thức tĩnh
- Thuộc tính, phương thức tĩnh: Biến, hàm được khai báo trong class kèm theo từ khóa "static"
- Cách truy cập
+ Bên ngoài class: ClassName::ThuocTinhName, ClassName::PhuongThucName
+ Bên trong class: self::ThuocTinhName, self::PhuongThucName
- Ưu điểm: truy cập không cần tạo đối tượng, giống như hằng

4.6. Section 6: final
- Chống ghi đè dữ liệu và kế thừa

4.7. Section 7: clone
- Tạo ra đối tượng mới từ đối tượng có sẵn và khi có thay đổi sẽ không làm ảnh hưởng đến đối tượng cũ

4.8. Section 8: __construct(), __destruct()
- __construct(): hàm khởi tạo chạy ngay khi có đối tượng được khởi tạo từ class. Nó chạy trước tất cả các method
- __construct(): hàm khởi tạo chạy ngay khi có đối tượng được khởi tạo từ class. Nó chạy sau tất cả các method

4.9. Section 9: __constructor() có tham số truyền vào

4.10. Section 10: Trừu tượng (Abstract)
- Một class abstract có phương thức trừu tượng, những class khác kế thừa class abstract đó sẽ phải định nghĩa lại những phương thức abstract có trong class abstract đó

4.11. Section 11: interface
- Bản chất của interface là kế thừa, tạo ra các tính năng và chúng ta có thể sử dụng ở bất kỳ class nào
- Khai báo: interface interfaceName() { các function }

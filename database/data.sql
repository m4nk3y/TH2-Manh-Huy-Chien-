INSERT INTO users (username, password, role)
VALUES ('admin', '123456', 1),
('chien','123456',1),
('manh','123456',1),
('huy','123456',1),
('broduct','123456',0),
('duc','123456',0),
('duckduck2311','123456',0);

INSERT INTO categories (name)
VALUES
('Tuyển sinh'),
('65 Năm'),
('Thông tin việc làm'),
('Đảm bảo chất lượng'),
('Tạp chí'),
('TLU Mail'),
('Lịch công tác');

INSERT INTO `news` (`id`, `title`, `content`, `image`, `created_at`, `category_id`) VALUES
(2, 'Tuyển sinh năm 2024', 'Thông tin chi tiết về kỳ tuyển sinh năm 2024\r\n\r\nTrường Đại học [Tên trường] trân trọng thông báo về kỳ tuyển sinh đại học năm 2024. Năm nay, nhà trường tuyển sinh đa dạng các ngành học như [liệt kê các ngành], đáp ứng nhu cầu của xã hội và xu hướng phát triển của thị trường lao động.\r\n\r\nĐối tượng tuyển sinh: Sinh viên tốt nghiệp THPT, sinh viên đã tốt nghiệp các trường cao đẳng, trung cấp chuyên nghiệp,...\r\n\r\nHình thức tuyển sinh: Nhà trường xét tuyển đa dạng hình thức, bao gồm xét tuyển dựa trên kết quả học tập THPT, xét tuyển dựa trên kết quả thi đánh giá năng lực và xét tuyển thẳng đối với các đối tượng ưu tiên.\r\n\r\nHọc bổng: Nhà trường dành nhiều loại học bổng giá trị cho sinh viên có thành tích học tập xuất sắc, sinh viên có hoàn cảnh khó khăn.\r\n\r\nQuyền lợi của sinh viên: Sinh viên được học tập trong môi trường hiện đại, được tham gia các hoạt tin ngoại khóa phong phú, có cơ hội thực tập tại các doanh nghiệp lớn.\r\n\r\nThời gian và địa điểm đăng ký: Thí sinh có thể đăng ký trực tuyến hoặc trực tiếp tại phòng tuyển sinh của trường từ ngày [ngày bắt đầu] đến ngày [ngày kết thúc].\r\n\r\nLiên hệ:\r\nPhòng Tuyển sinh\r\nĐiện thoại: [số điện thoại]\r\nEmail: [địa chỉ email]\r\n\r\nMọi thông tin chi tiết, thí sinh vui lòng truy cập website của trường hoặc liên hệ trực tiếp với phòng tuyển sinh.', 'assets/images/doquyen.jpg', '2024-12-05 23:29:07', 1),
(3, 'AI phát triển nhanh chóng, tạo ra cơ hội và thách thức mới', 'Công nghệ trí tuệ nhân tạo (AI) đang thay đổi cách chúng ta làm việc, học tập và sống. Các công ty công nghệ lớn đã đầu tư hàng tỷ USD vào nghiên cứu AI, trong khi các chuyên gia cảnh báo về rủi ro tiềm ẩn nếu không có quy định rõ ràng.', 'https://example.com/images/ai-development.jpg', '2024-12-06 10:00:00', 1),
(4, 'Đội tuyển Việt Nam giành chiến thắng tại giải bóng đá Đông Nam Á', 'Với chiến thắng 3-1 trước Thái Lan, đội tuyển bóng đá Việt Nam đã giành ngôi vô địch AFF Cup 2024. Đây là một dấu mốc quan trọng trong lịch sử bóng đá Việt Nam.', 'https://example.com/images/vietnam-football.jpg', '2024-12-05 20:00:00', 2),
(5, 'NASA công bố hình ảnh mới từ kính viễn vọng James Webb', 'Những hình ảnh mới nhất từ kính viễn vọng James Webb đã tiết lộ nhiều bí ẩn về vũ trụ, bao gồm các hành tinh ngoài hệ Mặt Trời và các thiên hà xa xôi.', 'https://example.com/images/james-webb.jpg', '2024-12-04 15:30:00', 3),
(6, 'Kinh tế toàn cầu đối mặt với nguy cơ suy thoái vào năm 2025', 'Các chuyên gia kinh tế cảnh báo rằng lãi suất cao và căng thẳng thương mại có thể đẩy nền kinh tế toàn cầu vào một cuộc suy thoái trong năm tới.', 'https://example.com/images/global-economy.jpg', '2024-12-06 09:00:00', 4),
(7, 'Công nghệ xe tự hành đạt bước tiến mới tại châu Âu', 'Các thử nghiệm mới nhất tại Đức đã chứng minh xe tự hành có thể hoạt động an toàn trên đường phố đông đúc, đánh dấu bước tiến lớn cho ngành công nghiệp ô tô.', 'https://example.com/images/self-driving-car.jpg', '2024-12-03 08:45:00', 1),
(8, 'Sách giáo khoa mới gây tranh cãi trong giới học thuật', 'Bộ sách giáo khoa mới được áp dụng tại nhiều trường học đã gặp phải sự phản đối từ giáo viên và phụ huynh vì nội dung thiếu tính thực tiễn.', 'https://example.com/images/textbook.jpg', '2024-12-05 14:00:00', 5),
(9, 'Đà Nẵng lọt top 10 thành phố đáng sống nhất thế giới', 'Đà Nẵng đã được một tạp chí uy tín bình chọn là một trong những thành phố đáng sống nhất thế giới nhờ cảnh quan đẹp và chất lượng sống cao.', 'https://example.com/images/da-nang.jpg', '2024-12-01 19:20:00', 2),
(10, 'Apple công bố dòng sản phẩm iPhone 16 Pro', 'Apple vừa chính thức ra mắt iPhone 16 Pro với nhiều cải tiến về camera, hiệu năng và thời lượng pin, dự kiến sẽ tạo nên cơn sốt trên thị trường.', 'https://example.com/images/iphone16.jpg', '2024-12-06 11:15:00', 3),
(11, 'Chương trình khuyến mãi mùa lễ hội tăng mạnh doanh số bán lẻ', 'Các cửa hàng bán lẻ trên toàn quốc đang ghi nhận mức tăng doanh số kỷ lục nhờ các chương trình khuyến mãi lớn dịp Giáng Sinh và Năm Mới.', 'https://example.com/images/holiday-sales.jpg', '2024-12-06 18:30:00', 4),
(12, 'Khám phá công viên quốc gia mới ở Tây Bắc Việt Nam', 'Một công viên quốc gia mới vừa được khai trương tại khu vực Tây Bắc Việt Nam, thu hút du khách bởi vẻ đẹp thiên nhiên hoang sơ và đa dạng sinh học.', 'https://example.com/images/national-park.jpg', '2024-12-02 09:00:00', 5),
(13, 'Huy', 'hihi', '1733474436_1733416054_8258825532.png', '2024-12-06 15:40:36', 1);
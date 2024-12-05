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

INSERT INTO news (title, content, image, created_at, category_id)
VALUES
('Tuyển sinh năm 2024', 'Thông tin chi tiết về kỳ tuyển sinh năm 2024

Trường Đại học [Tên trường] trân trọng thông báo về kỳ tuyển sinh đại học năm 2024. Năm nay, nhà trường tuyển sinh đa dạng các ngành học như [liệt kê các ngành], đáp ứng nhu cầu của xã hội và xu hướng phát triển của thị trường lao động.

Đối tượng tuyển sinh: Sinh viên tốt nghiệp THPT, sinh viên đã tốt nghiệp các trường cao đẳng, trung cấp chuyên nghiệp,...

Hình thức tuyển sinh: Nhà trường xét tuyển đa dạng hình thức, bao gồm xét tuyển dựa trên kết quả học tập THPT, xét tuyển dựa trên kết quả thi đánh giá năng lực và xét tuyển thẳng đối với các đối tượng ưu tiên.

Học bổng: Nhà trường dành nhiều loại học bổng giá trị cho sinh viên có thành tích học tập xuất sắc, sinh viên có hoàn cảnh khó khăn.

Quyền lợi của sinh viên: Sinh viên được học tập trong môi trường hiện đại, được tham gia các hoạt động ngoại khóa phong phú, có cơ hội thực tập tại các doanh nghiệp lớn.

Thời gian và địa điểm đăng ký: Thí sinh có thể đăng ký trực tuyến hoặc trực tiếp tại phòng tuyển sinh của trường từ ngày [ngày bắt đầu] đến ngày [ngày kết thúc].

Liên hệ:
Phòng Tuyển sinh
Điện thoại: [số điện thoại]
Email: [địa chỉ email]

Mọi thông tin chi tiết, thí sinh vui lòng truy cập website của trường hoặc liên hệ trực tiếp với phòng tuyển sinh.', 'tuyensinh2024.jpg', NOW(), 1),
('Kỷ niệm 65 năm thành lập trường', 'Các hoạt động kỷ niệm 65 năm (tiếp theo):

Tri ân các thế hệ:

Tổ chức lễ gặp mặt, giao lưu giữa các thế hệ thầy cô, sinh viên.
Khởi xướng các cuộc thi ảnh, video kể về kỷ niệm gắn liền với nhà trường.
Thành lập quỹ hỗ trợ sinh viên khó khăn mang tên các thế hệ đi trước.
Hoạt động văn hóa nghệ thuật:

Tổ chức đêm văn nghệ đặc biệt với sự tham gia của các ca sĩ, diễn viên nổi tiếng.
Triển lãm ảnh, tranh vẽ về lịch sử hình thành và phát triển của nhà trường.
Biểu diễn thời trang tái hiện lại trang phục của các thế hệ sinh viên qua các thời kỳ.
Hoạt động thể thao:

Tổ chức giải thể thao đa dạng như bóng đá, bóng chuyền, cầu lông,... dành cho cán bộ, giảng viên và sinh viên.
Tổ chức cuộc thi chạy việt dã vòng quanh trường.
Hoạt động xã hội:

Tổ chức các hoạt động tình nguyện như: hiến máu nhân đạo, làm sạch môi trường, hỗ trợ cộng đồng.
Tổ chức các buổi tọa đàm về các vấn đề xã hội, chia sẻ kinh nghiệm sống.
Hoạt động khoa học:

Tổ chức hội thảo khoa học, giới thiệu những thành tựu nghiên cứu của các nhà khoa học trong trường.
Triển lãm các sản phẩm sáng tạo của sinh viên.
Để bài viết thêm hấp dẫn, bạn có thể:

Sử dụng hình ảnh: Chèn thêm các hình ảnh về các hoạt động kỷ niệm để minh họa sinh động.
Sử dụng ngôn ngữ sinh động: Sử dụng các từ ngữ giàu cảm xúc, miêu tả chân thực để truyền tải không khí của buổi lễ.
Tạo sự tương tác: Khuyến khích độc giả chia sẻ kỷ niệm của mình về nhà trường.
Ví dụ:

Các hoạt động kỷ niệm 65 năm:

Trong không khí trang trọng và ấm áp, nhà trường đã tổ chức nhiều hoạt động kỷ niệm đáng nhớ. Đêm văn nghệ "65 năm rực rỡ" đã để lại nhiều ấn tượng sâu sắc với các tiết mục đặc sắc, tái hiện lại những dấu ấn lịch sử của nhà trường. Bên cạnh đó, cuộc thi "Kỷ niệm đẹp nhất" đã thu hút hàng trăm tác phẩm dự thi, cho thấy tình cảm sâu nặng mà các thế hệ sinh viên dành cho mái trường. Đặc biệt, hoạt động hiến máu nhân đạo đã thu hút sự tham gia nhiệt tình của cán bộ, giảng viên và sinh viên, thể hiện tinh thần tương thân tương ái của cộng đồng nhà trường.', '65nam.jpg', NOW(), 2),
('Cơ hội việc làm hấp dẫn', 'Tuyệt vời! Để phần "Tuyển dụng các vị trí..." trở nên hấp dẫn và thu hút ứng viên hơn, chúng ta có thể bổ sung thêm những thông tin chi tiết sau:

Tuyển dụng các vị trí... (tiếp theo):

Liệt kê cụ thể các vị trí:

Ngành CNTT: Lập trình viên, Kỹ sư phần mềm, Chuyên viên an ninh mạng, Chuyên viên phân tích dữ liệu,...
Ngành kinh doanh: Nhân viên kinh doanh, Chuyên viên marketing, Trưởng nhóm bán hàng,...
Ngành tài chính - kế toán: Kế toán, Kiểm toán viên, Chuyên viên tài chính,...
Các ngành khác: (Tùy theo đặc thù của công ty)
Yêu cầu công việc:

Trình độ: Tốt nghiệp đại học/cao đẳng chuyên ngành liên quan.
Kinh nghiệm: Ưu tiên ứng viên có kinh nghiệm làm việc ít nhất 1-2 năm.
Kỹ năng: Kỹ năng giao tiếp, làm việc nhóm, giải quyết vấn đề, sử dụng thành thạo tin học văn phòng,...
Khả năng: Khả năng học hỏi nhanh, thích nghi với môi trường làm việc mới, chịu được áp lực cao,...
Quyền lợi:

Lương thưởng: Lương cạnh tranh, thưởng lễ tết, thưởng theo hiệu quả công việc.
Chế độ đãi ngộ: BHXH, BHYT, BHTN đầy đủ, khám sức khỏe định kỳ, các hoạt động vui chơi giải trí.
Cơ hội thăng tiến: Có cơ hội được đào tạo, nâng cao năng lực và thăng tiến trong công việc.
Môi trường làm việc: Môi trường làm việc chuyên nghiệp, năng động, thân thiện.
Cách thức ứng tuyển:

Gửi CV: Gửi CV qua địa chỉ email [địa chỉ email].
Nộp hồ sơ trực tiếp: Nộp hồ sơ trực tiếp tại văn phòng công ty.
Đăng ký trực tuyến: Đăng ký trực tuyến qua website của công ty.
Ví dụ:

Tuyển dụng các vị trí:

Công ty [Tên công ty] đang tìm kiếm các ứng viên tài năng cho các vị trí sau:

Lập trình viên: Thành thạo các ngôn ngữ lập trình Java, Python, .NET,... Có kinh nghiệm phát triển ứng dụng web, mobile.
Nhân viên kinh doanh: Có kỹ năng giao tiếp tốt, đam mê kinh doanh, khả năng làm việc độc lập và theo nhóm.
Quyền lợi:

Lương thưởng hấp dẫn, cạnh tranh với thị trường.
Môi trường làm việc chuyên nghiệp, năng động, nhiều cơ hội thăng tiến.
Được tham gia các khóa đào tạo nâng cao nghiệp vụ.', NOW(), 3),
('Chứng chỉ chất lượng quốc tế', 'Trường đạt được chứng chỉ... (tiếp theo):

Chứng chỉ cụ thể:

Chứng chỉ chất lượng giáo dục: ISO 9001, AUN-QA, AACSB (cho các trường kinh doanh).
Chứng chỉ về môi trường: ISO 14001.
Chứng chỉ về công nghệ thông tin: ISO/IEC 27001.
Chứng chỉ về năng lượng: EDGE.
Các chứng chỉ khác: (Tùy thuộc vào lĩnh vực hoạt động của trường)
Ý nghĩa của chứng chỉ:

Khẳng định chất lượng: Chứng tỏ trường đã đạt được các tiêu chuẩn chất lượng quốc tế, đảm bảo chất lượng đào tạo.
Nâng cao uy tín: Tăng cường uy tín của trường trong và ngoài nước, thu hút nhiều sinh viên hơn.
Mở rộng hợp tác: Tạo điều kiện cho trường hợp tác với các trường đại học, tổ chức quốc tế khác.
Cải thiện môi trường học tập: Đảm bảo môi trường học tập hiện đại, thân thiện với môi trường.
Quá trình đạt được chứng chỉ:

Đầu tư cơ sở vật chất: Nâng cấp cơ sở vật chất, trang thiết bị hiện đại.
Đào tạo cán bộ: Tổ chức các khóa đào tạo nâng cao năng lực cho cán bộ, giảng viên.
Xây dựng hệ thống quản lý chất lượng: Xây dựng và triển khai hệ thống quản lý chất lượng theo tiêu chuẩn quốc tế.
Đánh giá và cải tiến: Thực hiện đánh giá thường xuyên để phát hiện và khắc phục những tồn tại, yếu kém.
Ví dụ:

Trường đạt được chứng chỉ ISO 9001:

Trường [Tên trường] tự hào là một trong những trường đại học đầu tiên tại Việt Nam đạt chứng chỉ ISO 9001 về hệ thống quản lý chất lượng. Chứng chỉ này khẳng định trường đã xây dựng và vận hành một hệ thống quản lý chất lượng hiệu quả, đảm bảo chất lượng đào tạo từ khâu tuyển sinh đến tốt nghiệp. Để đạt được chứng chỉ này, nhà trường đã đầu tư mạnh mẽ vào cơ sở vật chất, trang thiết bị hiện đại, đồng thời nâng cao năng lực cho đội ngũ cán bộ, giảng viên.

Để bài viết thêm hấp dẫn, bạn có thể:

Sử dụng hình ảnh: Chèn thêm hình ảnh về buổi lễ trao chứng chỉ, các hoạt động đánh giá chất lượng.
Sử dụng ngôn ngữ chuyên nghiệp: Sử dụng các thuật ngữ chuyên ngành để thể hiện tính chính xác của thông tin.
Nhấn mạnh lợi ích: Nhấn mạnh những lợi ích mà sinh viên và nhà trường nhận được khi đạt được chứng chỉ.', 'chungchi.jpg', NOW(), 4),
('Số mới nhất của tạp chí trường', 'Tuyệt vời! Để phần "Đọc báo để cập nhật tin tức..." trở nên hấp dẫn và đầy đủ hơn, chúng ta có thể bổ sung thêm những thông tin sau:

Đọc báo để cập nhật tin tức... (tiếp theo):

Tầm quan trọng của việc đọc báo:

Mở rộng kiến thức: Giúp bạn cập nhật những kiến thức mới nhất về các lĩnh vực khác nhau trong xã hội, từ chính trị, kinh tế, xã hội, văn hóa đến khoa học, công nghệ.
Nâng cao khả năng tư duy: Đọc báo giúp bạn rèn luyện khả năng tư duy phản biện, phân tích thông tin và đưa ra những đánh giá khách quan.
Cập nhật xu hướng: Giúp bạn nắm bắt những xu hướng mới nhất, những vấn đề đang được xã hội quan tâm.
Kết nối với cộng đồng: Đọc báo giúp bạn hiểu rõ hơn về những vấn đề mà cộng đồng đang đối mặt và tham gia vào các hoạt động xã hội.
Cách chọn báo để đọc:

Lựa chọn báo phù hợp: Nên chọn những tờ báo uy tín, có nội dung chính xác và đa dạng.
Đọc nhiều nguồn tin: Không nên chỉ đọc một tờ báo mà nên tham khảo nhiều nguồn tin khác nhau để có cái nhìn đa chiều về một vấn đề.
Lựa chọn chuyên mục phù hợp: Tùy theo sở thích và nhu cầu của mình, bạn có thể chọn đọc các chuyên mục như chính trị, kinh tế, xã hội, văn hóa, thể thao,...
Những lợi ích khác khi đọc báo:

Cải thiện vốn từ: Đọc báo giúp bạn làm giàu vốn từ vựng và ngữ pháp.
Giảm stress: Đọc báo là một cách thư giãn hiệu quả, giúp bạn giảm căng thẳng và mệt mỏi.
Nâng cao khả năng viết: Đọc báo thường xuyên giúp bạn rèn luyện khả năng viết lách, diễn đạt ý tưởng một cách rõ ràng và mạch lạc.
Ví dụ:

Đọc báo để cập nhật tin tức...

Đọc báo là một thói quen tốt giúp chúng ta cập nhật thông tin một cách nhanh chóng và chính xác. Bên cạnh việc cung cấp những tin tức nóng hổi trong ngày, việc đọc báo còn giúp chúng ta mở rộng kiến thức, nâng cao khả năng tư duy và hiểu biết sâu sắc hơn về xã hội. Để tận dụng tối đa lợi ích của việc đọc báo, bạn nên chọn những tờ báo uy tín, đa dạng về nội dung và phù hợp với sở thích của mình.

Để bài viết thêm hấp dẫn, bạn có thể:

Sử dụng hình ảnh: Chèn thêm hình ảnh về các tờ báo, người đang đọc báo hoặc những sự kiện được nhắc đến trong bài báo.
Sử dụng ngôn ngữ sinh động: Sử dụng những từ ngữ giàu cảm xúc, ví dụ, so sánh để làm cho bài viết trở nên hấp dẫn hơn.
Đưa ra lời khuyên: Đưa ra những lời khuyên hữu ích cho người đọc, như cách chọn báo, cách đọc báo hiệu quả.', 'tapchi.jpg', NOW(), 5),
('Email mới nhất từ trường', 'Thông báo quan trọng gửi đến sinh viên... (tiếp theo):

Thông tin chi tiết về sự kiện:

Sự kiện gì: Cuộc thi, hội thảo, hội chợ việc làm, chương trình ngoại khóa, ...
Thời gian: Ngày, giờ diễn ra sự kiện.
Địa điểm: Nơi tổ chức sự kiện.
Đối tượng tham gia: Tất cả sinh viên, sinh viên theo chuyên ngành, ...
Hình thức đăng ký: Cách thức đăng ký tham gia (trực tuyến, trực tiếp, qua email,...)
Lợi ích khi tham gia:

Mở rộng kiến thức: Học hỏi thêm nhiều điều mới mẻ, bổ ích.
Phát triển kỹ năng: Rèn luyện các kỹ năng mềm, kỹ năng chuyên môn.
Cơ hội giao lưu: Giao lưu với các bạn cùng trường, các chuyên gia, doanh nghiệp.
Giải thưởng hấp dẫn: Cơ hội nhận được các phần thưởng giá trị.
Yêu cầu đối với người tham gia:

Hồ sơ đăng ký: Những giấy tờ cần thiết khi đăng ký.
Thời hạn đăng ký: Hạn cuối cùng để đăng ký.
Lưu ý: Những điều cần lưu ý khi tham gia.
Thông tin liên hệ:

Bộ phận liên hệ: Ban tổ chức, phòng ban phụ trách.
Số điện thoại: Số điện thoại liên hệ để giải đáp thắc mắc.
Email: Địa chỉ email để gửi hồ sơ đăng ký.
Ví dụ:

Thông báo quan trọng gửi đến sinh viên:

Kính gửi toàn thể sinh viên trường [Tên trường],

Nhằm tạo cơ hội cho sinh viên được giao lưu, học hỏi và trải nghiệm, trường [Tên trường] trân trọng thông báo về cuộc thi "Sáng tạo khởi nghiệp" năm 2024.

Thời gian: 8h00 ngày 15/11/2024

Địa điểm: Hội trường A, nhà B

Đối tượng: Tất cả sinh viên đang theo học tại trường.

Nội dung: Cuộc thi là sân chơi dành cho các bạn sinh viên có ý tưởng kinh doanh sáng tạo.

Giải thưởng:

Giải Nhất: 10.000.000 VNĐ
Giải Nhì: 5.000.000 VNĐ
Giải Ba: 3.000.000 VNĐ
Cách thức đăng ký:
Vui lòng gửi hồ sơ đăng ký về địa chỉ email: [Địa chỉ email] trước ngày 10/11/2024.

Mọi chi tiết xin liên hệ:
Ban tổ chức cuộc thi
Điện thoại: đạt 09

Kính mời các bạn sinh viên tham gia!', 'email.png', NOW(), 6),
('Lịch sự kiện tháng 11', 'Các sự kiện diễn ra trong tháng 11...

Tháng 11 không chỉ là thời điểm tiết trời chuyển mình mà còn là tháng của nhiều sự kiện quan trọng, từ những ngày lễ truyền thống đến các hoạt động văn hóa, xã hội.

Ngày Pháp luật Việt Nam (9/11): Đây là dịp để toàn dân nâng cao ý thức về pháp luật, tôn trọng pháp luật và xây dựng một xã hội công bằng, dân chủ, văn minh.

Ngày Pháp luật Việt Nam

Ngày thành lập Mặt trận Tổ quốc Việt Nam (18/11): Sự kiện này đánh dấu một cột mốc quan trọng trong lịch sử đấu tranh cách mạng của dân tộc, thể hiện tinh thần đoàn kết, thống nhất của nhân dân Việt Nam.

Mặt trận Tổ quốc Việt Nam

Ngày Nhà giáo Việt Nam (20/11): Đây là ngày để chúng ta bày tỏ lòng biết ơn sâu sắc đối với những người thầy, người cô đã tận tình dạy dỗ, truyền đạt kiến thức và đạo đức cho thế hệ trẻ.
Mở trong cửa sổ mới

Ngày Nhà giáo Việt Nam

Lễ Tạ ơn (23/11): Mặc dù không phải là ngày lễ truyền thống của Việt Nam nhưng Lễ Tạ ơn đang dần trở nên phổ biến, đặc biệt trong giới trẻ. Đây là dịp để mọi người sum họp gia đình, bày tỏ lòng biết ơn đối với những điều tốt đẹp trong cuộc sống.
Lễ Tạ ơn

Bên cạnh những ngày lễ truyền thống, tháng 11 còn diễn ra nhiều hoạt động văn hóa, xã hội khác như:

Các sự kiện văn hóa nghệ thuật: Triển lãm tranh, biểu diễn nghệ thuật, các lễ hội âm nhạc,...
Các hoạt động thể thao: Giải đấu thể thao, chạy bộ vì cộng đồng,...
Các hoạt động xã hội: Hiến máu nhân đạo, làm sạch môi trường,...
Tháng 11 là một tháng sôi động với nhiều hoạt động ý nghĩa. Hãy cùng nhau tham gia và trải nghiệm những điều thú vị trong tháng này nhé!', 'lichcongtac.png', NOW(), 7);


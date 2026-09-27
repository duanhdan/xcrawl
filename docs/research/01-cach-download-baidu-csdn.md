# Nghiên cứu: Cách download file từ Pan Baidu (百度网盘) và CSDN (download.csdn.net) khi ở nước ngoài / không có tài khoản Trung Quốc

*Ngày nghiên cứu: 27/09/2026. Mọi số liệu đều ghi nguồn; mục nào chưa kiểm chứng được ghi rõ "(chưa xác minh)".*

---

## 0. Tóm tắt điều hành (TL;DR)

- **Pan Baidu (pan.baidu.com)** là "Google Drive của Trung Quốc", nhưng: (a) đăng ký bằng SĐT nước ngoài rất bất ổn, (b) tài khoản free bị bóp băng thông nặng (đo thực tế 03/2025: **96–170 KB/s** free vs **7–10 MB/s** SVIP), (c) file lớn/thư mục bắt buộc dùng client chính thức, (d) mua SVIP cần thanh toán Alipay/WeChat và thường cần tài khoản Baidu "sạch".
- **Giá SVIP chính thức (niêm yết 2025–2026):** ~30 CNY/tháng (liên tục), 40 CNY/tháng lẻ, **298 CNY/năm** niêm yết; khuyến mãi phổ biến **18–19 CNY tháng đầu**, **188–197 CNY/năm** (nguồn befun.ink cập nhật 17/06/2025 và Zhihu). Sina đưa tin 06/2025: năm SVIP "nguyên giá 358, giảm còn 166" (chưa fetch được toàn văn).
- **Công cụ bên thứ 3:** PanDownload chết từ 04/2020 (tác giả bị bắt, thu lợi >300.000 CNY, khung phạt tới 7 năm tù); KinhDown ngừng dịch vụ Baidu từ 02/2023; hệ sinh thái script Tampermonkey/parse web hiện "hỏng–vá–hỏng", tỉ lệ parse thành công chỉ ~60–80% theo bài Zhihu 2026; BaiduPCS-Go (v4.0.2, 08/2026) **tuyên bố rõ không tăng tốc quá client chính thức**. AList bị bán 06/2025 → cộng đồng fork **OpenList**; driver Baidu của OpenList ghi "Crack API dường như không còn dùng được".
- **CSDN:** tài nguyên chia 3 loại: 积分 (điểm), **VIP专享** (chỉ hội viên), **付费** (mua lẻ, VIP giảm giá). VIP năm niêm yết **300 CNY**, gói tháng 98 CNY/30 lượt, năm 400 lượt, tối đa **20 lượt/ngày** (mall.csdn.net/vip). Thanh toán chỉ WeChat/Alipay.
- **Người nước ngoài:** từ 2023 Alipay/WeChat Pay cho bind thẻ Visa/MC/JCB…; miễn phí ≤200 CNY, **3% phí** khi >200 CNY; giới hạn $5.000/giao dịch, $50.000/năm (guide 05/2026). Nhưng thanh toán in-app cho dịch vụ nội địa như Baidu/CSDN **không được xác nhận chính thức** là luôn thành công.
- **Dịch vụ leech/tải hộ** là con đường thực dụng nhất cho người ngoài TQ: giá tham khảo **$0.79–0.99 cho GB đầu + $0.33–0.49/GB tiếp theo** (baidufast.com, fastdown.io), VN: **30.000đ/link ≤200MB** hoặc 20.000đ/100MB (dichvuchina.vn).

---

## 1. Pan Baidu (百度网盘 / pan.baidu.com)

### 1.1 Bối cảnh nhanh
- Ra mắt 03/2012 (tên cũ Baidu Cloud/Baidu Yun, đổi lại Baidu Netdisk 2016). Từng tặng 2 TB miễn phí vĩnh viễn (08/2013). Năm 2022 bị USTR liệt vào "Notorious Markets" về vi phạm bản quyền. Nguồn: https://en.wikipedia.org/wiki/Baidu_Netdisk
- Chính sách 21/01/2021: tài khoản >365 ngày không đăng nhập bị hạ dung lượng free từ 2 TB xuống 100 GB. Nguồn: https://www.landian.news/archives/83737.html
- Phiên bản hải ngoại của Baidu là **TeraBox** (trước là Dubox, do C Popin – công ty con tại Nhật của Baidu vận hành), 1 TB miễn phí, **chặn IP Trung Quốc đại lục** – ngược với Baidu Netdisk. TeraBox **không** mở được link pan.baidu.com; hai hệ thống tách biệt. Nguồn: https://pandayoo.com/post/baidus-cloud-storage-service-dubox-changed-its-name-to-terabox/ ; https://www.51sec.org/2021/05/27/free-1tb-cloud-storage-terabox/

### 1.2 Đăng ký tài khoản khi ở nước ngoài

**Thực tế mâu thuẫn giữa các nguồn – cần nói thẳng với người đọc:**

| Nguồn | Kết luận |
|---|---|
| marketingtochina.com (2026) | passport.baidu.com → chọn "Overseas" → chọn quốc gia, nhập số không có "+" → nhận SMS 6 số. "Không cần SIM Trung Quốc". Nếu SMS không tới: dùng số ảo Thái/Indo/Việt qua SMS-Man, GrizzlySMS. Baidu **chặn khi IP và quốc gia SĐT không khớp** → tắt VPN khi đăng ký; tài khoản bị flag phải nộp ID + selfie, xử lý 3–5 ngày làm việc. https://marketingtochina.com/register-baidu-account-outside-china/ |
| hongkiat.com | Thêm `?reg&overseas=1` vào https://passport.baidu.com/v2/ để hiện form quốc tế; form nhận mã quốc gia của 156 nước. https://www.hongkiat.com/blog/register-baidu-account-oversea/ |
| sekkeidigitalgroup.com | "Mã quốc gia có trong danh sách không bảo đảm SMS tới hay qua được kiểm tra an ninh". https://sekkeidigitalgroup.com/how-to-register-a-baidu-account-outside-china/ |
| eyun.baidu.com (trang kiến thức Baidu Enterprise Netdisk, 2025) | "百度云盘目前不支持使用海外手机号直接注册账号" – khuyên nhờ người thân trong nước đăng ký bằng SĐT +86, hoặc dùng bản doanh nghiệp. https://eyun.baidu.com/content/530829/ |
| extrabux.com (2025, hướng dẫn cho SĐT Mỹ) | Web chính không nhận số nước ngoài; workaround: đăng ký qua **app loa Xiaodu (小度音箱)** hoặc **Baidu Intelligent Cloud** (trang tiếng Anh cho chọn US/Canada/Singapore/Japan…), Google Voice được; **SĐT các nước EU không đăng ký được**; sau khi có tài khoản nên bind email (Yahoo được, Gmail/Hotmail không) để đăng nhập sau này. https://www.extrabux.com/chs/guide/7254269 |

**Kết luận thực tế cho bài viết:** đăng ký bằng SĐT quốc tế *có thể* làm được nhưng thất bại thường xuyên (không nhận SMS, "手机号码格式不正确", bị flag an ninh, bị yêu cầu xác minh khi đăng nhập từ vị trí mới). Người dùng Việt hay đi đường vòng: số ảo, nhờ người có +86, hoặc mua/thuê tài khoản (taikhoanpre.com, dichvuchina.vn – xem mục 1.8). Lưu ý tài khoản mua sẵn có rủi ro bị thu hồi.

- Vấn đề đăng nhập từ nước ngoài: hệ thống phát hiện thiết bị/vị trí lạ sẽ đòi xác minh thêm; server đặt tại đại lục nên độ trễ cao. Nguồn: https://eyun.baidu.com/content/531153/ ; https://eyun.baidu.com/content/530813/
- pan.baidu.com **không chặn IP nước ngoài theo chính sách**; lỗi truy cập thường là do định tuyến ISP (ví dụ Verizon–China Unicom). Nguồn: https://community.verizon.com/t5/Fios-Internet-and-High-Speed/routing-issue-no-route-for-pan-baidu-com-182-61-200-x-on-VZ/td-p/1817989

### 1.3 Link chia sẻ và mã trích xuất (提取码)
- Link dạng `https://pan.baidu.com/s/1xxxx` kèm **提取码 4 ký tự** (đôi khi nhúng `?pwd=xxxx`). Người chia sẻ chọn hiệu lực **1 ngày / 7 ngày / 30 ngày / vĩnh viễn**; mặc định 7 ngày; hết hạn hoặc bị người chia sẻ hủy thì link chết. Nguồn: https://eyun.baidu.com/content/54189/ ; https://eyun.baidu.com/content/218915/
- Quy trình chuẩn: mở link → nhập 提取码 → **"保存到网盘" (lưu về netdisk của mình)** → tải từ netdisk bằng client. Do đó gần như **bắt buộc có tài khoản** để tải file dung lượng lớn.

### 1.4 Giới hạn tải qua web và bắt buộc client
- Web chỉ cho tải trực tiếp file nhỏ (ngưỡng phổ biến được nêu là ~100 MB, không có tài liệu chính thức; nguồn tổng hợp 2025 nêu "file >~100MB phải dùng client, web không tải được thư mục") – **ghi là ngưỡng tham khảo, chưa xác minh chính thức**. Nguồn: https://blog.csdn.net/2501_93741739/article/details/153971086 (snippet), https://jingyan.baidu.com/article/ff42efa9d523e4c19e220218.html (2017, script Tampermonkey vượt ngưỡng 4 GB trên web)
- Bài Zhihu/mydrivers 2025 phê phán xu hướng "tải file phải cài app": lý do thương mại (thu thập dữ liệu, push). Nguồn: https://news.mydrivers.com/1/1080/1080109.htm
- Giới hạn dung lượng file đơn khi **upload**: free 4 GB (PC client), SVIP 20 GB. Nguồn: https://eyun.baidu.com/content/168287/ ; https://zhidao.baidu.com/question/2081177265905144148.html

### 1.5 Tốc độ thực tế free vs SVIP
- **Đo thực tế 31/03/2025 (Tencent News / Sina, test 8 netdisk, mạng 100 Mbps, file 1,03 GB, tài khoản mới):** Baidu free **96–170 KB/s (~2 giờ)**, SVIP **7–10 MB/s (~1 phút)**. CSKH Baidu giải thích băng thông mua từ nhà mạng "ưu tiên SVIP, phần còn lại chia đều cho người dùng thường". So sánh: Quark free 650–700 KB/s, SVIP 11 MB/s; 115 free 140–150 KB/s. Nguồn: https://news.qq.com/rain/a/20250331A07BX200 ; https://finance.sina.com.cn/jjxw/2025-03-31/doc-inerpuqk8199305.shtml
- Các dịch vụ leech quốc tế mô tả free "50 KB/s" (baidufast.com) hay "100–500 KB/s" (erranium) – con số cũ hơn, dùng để tham khảo.
- Ngay cả SVIP đôi khi không chạy full băng thông; Baidu có cơ chế phạt "tài khoản đen" khi tải ồ ạt (giảm còn ~10 KB/s vài ngày). Nguồn: https://post.smzdm.com/p/al32k07e/ ; https://blog.csdn.net/bigcarp/article/details/130104601 ; https://github.com/qjfoidnh/BaiduPCS-Go/issues/30
- Tính năng chính thức miễn phí: client có "thử tốc độ SVIP 30 giây" và chế độ P2P share acceleration (Settings → Transfer) – hiệu quả hạn chế. Nguồn: https://www.wangdu.site/software/tools/948.html
- **百度网盘青春版 (Youth Edition)**: ra 12/2021 theo yêu cầu MIIT, "không giới hạn tốc độ" nhưng chỉ 10 GB, **không mở/lưu link chia sẻ**, chỉ tải file của chính mình → vô dụng để lấy file người khác chia sẻ. Bản web ra 04/2024. Nguồn: https://www.36kr.com/p/1586050883440009 ; https://51.ruyo.net/18709.html

### 1.6 Giá VIP / SVIP chính thức (CNY)

| Gói | Niêm yết | Khuyến mãi thường thấy (2025–2026) | Nguồn |
|---|---|---|---|
| SVIP liên tục tháng | 30 | 18 (mới) / 19 (cũ) | https://www.befun.ink/detail/319.html (cập nhật 17/06/2025); https://zhuanlan.zhihu.com/p/664807768 |
| SVIP tháng mua lẻ | 40 | – | Zhihu (trên) |
| SVIP liên tục quý | 88 | 48 / 51 | befun.ink |
| SVIP liên tục năm | 298 | 188 / 197; sinh viên 148; nạp thẳng 178/197 | befun.ink; Zhihu p/664807768 |
| Sinh viên tháng | – | 8,8 (VIP) / 13 (SVIP) | befun.ink |
| Sina 03/06/2025 | "SVIP năm nguyên giá 358, hiện 166" | – | https://finance.sina.com.cn/tech/roll/2025-06-03/doc-ineyutxc1332542.shtml (tiêu đề; toàn văn chưa fetch được – **chưa xác minh**) |

- Trang mua chính thức: https://pan.baidu.com/buy/center (nội dung render bằng JS, không đọc được từ ngoài; giá thay đổi theo chiến dịch – bài viết nên ghi "tham khảo tại thời điểm viết").
- Cảnh báo: "1元VIP" trên Taobao/Pinduoduo (0,3–1 CNY/24h) thực chất là **thuê tài khoản chung**, không phải nâng cấp tài khoản của bạn. Nguồn: https://www.runningcheese.com/baiduyun (19/02/2025)
- Kênh bán thẻ SVIP cho người nước ngoài: 94lives.com và tương tự (giá không kiểm chứng). Nguồn: https://m.94lives.com/en/Tabs/goodsDetail?spuId=678

### 1.7 Client chính thức
- Windows/macOS/Linux/Android/iOS; bản Windows trên winget "Baidu.BaiduNetdisk" 8.7.x (2025). Nguồn: https://github.com/microsoft/winget-pkgs/pull/419347
- Điều khoản dịch vụ hạn chế truy cập từ client không chính thức; công cụ CLI bên thứ ba có thể kích hoạt risk control. Nguồn: https://www.x-cmd.com/install/baidunetdisk/
- 2026: Baidu Netdisk ra "bdpan-storage" Agent Skill chính thức cho Claude Code/Cursor… (upload/download/transfer qua ngôn ngữ tự nhiên) – vẫn cần tài khoản/đăng nhập. Nguồn: https://github.com/baidu-netdisk/bdpan-storage

### 1.8 Các cách phổ biến và trạng thái hiện tại (09/2026)

| Cách | Trạng thái | Ghi chú / rủi ro | Nguồn |
|---|---|---|---|
| **Mua SVIP chính thức** | Hoạt động | Cần tài khoản Baidu + thanh toán Alipay/WeChat; hiệu quả nhất, nhưng người nước ngoài vướng đăng ký/thanh toán | mục 1.6 |
| **PanDownload** | **Chết 04/2020** | Tác giả Thái (蔡某萌) bị công an Giang Tô bắt 15/04/2020, thu lợi >300.000 CNY, tội "cung cấp chương trình xâm nhập hệ thống máy tính", khung tối đa 7 năm; kết quả xét xử cuối cùng **không tìm thấy nguồn công khai đáng tin – chưa xác minh** | https://www.163.com/dy/article/GJF9PUM00546O1NB.html ; https://cloud.tencent.com/developer/article/1615779 |
| **SpeedPan, Proxyee-Down, YunDownload, Pan-Light, BND2…** | Chết | Dừng sau vụ PanDownload | https://www.ghxi.com/rjhj02.html |
| **KinhDown / 极下 JiXia** | **Ngừng dịch vụ Baidu 02/2023**, hoàn tiền; trước đó 5 CNY/tháng | Có tin đồn chủ bị bắt; trang chủ vẫn còn, một số dịch vụ parse khác | https://kinhdown.kinh.cc/?Type=JX ; https://hostloc.com/thread-1141329-1-1.html |
| **BaiduPCS-Go** (qjfoidnh) | Còn cập nhật – v4.0.2 (21/08/2026) | README: **"không cung cấp tăng tốc vượt client chính thức"**; non-VIP nên đặt max_parallel=1, nếu không "bị hạn tốc, tài khoản gần 0 KB/s trên mọi client vài giờ đến vài ngày"; login bằng cookie/BDUSS | https://github.com/qjfoidnh/BaiduPCS-Go |
| **BaiduPCS-Rust (komorebiCarry)** | Có, đa luồng | Chưa kiểm chứng tốc độ | https://www.wangdu.site/software/tools/948.html |
| **AList → OpenList** | AList bị bán cho công ty ở Quý Châu 06/2025, cộng đồng fork OpenList | Driver Baidu: "API chính thức ổn định nhưng chậm với file lớn, phải đổi UA; SVIP mới nhanh"; "Crack API dường như không còn dùng được"; cảnh báo tự chịu rủi ro | https://news.qq.com/rain/a/20250616A08NIZ00 ; https://doc.oplist.org/guide/drivers/baidu |
| **Tampermonkey script + IDM/aria2/Motrix** (网盘直链下载助手, LinkSwift, RatDownloader, HD2A, EX-BaiduPan-Explorer, 文武PanDownload script) | "hỏng → vá → hỏng" liên tục; bài Zhihu 2026: tỉ lệ thành công **60–80%**, file >5 GB hay 403/kẹt | Cần UA `netdisk`/`pan.baidu.com`, IDM ≤4 luồng; tải ồ ạt bị đánh dấu "黑号" | https://zhuanlan.zhihu.com/p/2012530808729120854 (snippet) ; https://www.iplaysoft.com/wang-pan-zhu-shou.html ; https://github.com/danielaniq28/EX-BaiduPan-Explorer |
| **Web parse "công ích" (公益解析)** | Có nhưng bất ổn, quota ~15 lượt/ngày, thường ≤3 GB | Đổi tên miền liên tục, nhiều site chết | https://www.runningcheese.com/baiduyun ; https://www.wangdu.site/software/tools/948.html |
| **"1元VIP" / thuê tài khoản** | Hoạt động | Tài khoản chung, có thể bị khoá bất cứ lúc nào | runningcheese |
| **Dịch vụ leech/debrid quốc tế** | Hoạt động | Không cần tài khoản, thanh toán thẻ/PayPal/crypto – xem 1.9 | – |

**Rủi ro khoá/hạn tốc tài khoản:** Baidu ghi nhận tài khoản tải nhiều trong thời gian ngắn → hạn tốc ~10 KB/s, tự phục hồi sau vài ngày đến ~1 tuần hoặc mua hội viên; điều khoản cấm client không chính thức. Nguồn: https://blog.csdn.net/wjh2622075127/article/details/88086942 ; https://github.com/qjfoidnh/BaiduPCS-Go

**Rủi ro pháp lý cho người làm tool ở TQ:** ngoài PanDownload, án lệ "cung cấp chương trình xâm nhập/điều khiển trái phép hệ thống thông tin máy tính" (Điều 285 Hình luật) được áp dụng rộng. Nguồn: https://www.court.gov.cn/zixun/xiangqing/449641.html ; https://blog.csdn.net/weixin_46538743/article/details/105601839

### 1.9 Dịch vụ leech / tải hộ (không cần tài khoản)

| Dịch vụ | Miễn phí | Giá | Thanh toán | Cách giao | Nguồn |
|---|---|---|---|---|---|
| baidufast.com | ≤150 MB, 1 link/ngày | $0.79 GB đầu, +$0.49/GB; trần $4.80 (≤50 GB), $9.80 (≤150 GB), $14.80 (≤300 GB) | PayPal, Visa/MC/Amex, Apple/Google Pay, USDT | Link trực tiếp 3–10 ngày, ~1 phút/GB | https://baidufast.com/ |
| fastdown.io | – | $0.99 GB đầu, +$0.33/GB | "phương thức ưa thích" | Google Drive, giữ 3 ngày, qua email | https://fastdown.io/ |
| baidu.erranium.com | Có bản free giới hạn | Gói subscription "tiết kiệm tới 73%" (giá cụ thể không nêu) | Thẻ, PayPal, crypto | Email 1–4 giờ | https://baidu.erranium.com/tutorials/baidu-pan |
| baidulinkdownloader.com | ≤50 MB (Baidu, Quark) | Premium không công bố | – | Hỗ trợ Baidu, Quark, Weiyun, 123Pan, **CSDN**, Lanzou, Xunlei, Alipan, 189… | https://baidulinkdownloader.com/ |
| baidudownloader.com | – | "$0.99 chuyển link Baidu → Google Drive"; "tải CSDN không cần tài khoản $0.01" (giá hiển thị trên cửa hàng, chưa rõ đơn vị tính) | – | Google Drive | https://baidudownloader.com/ |
| dichvuchina.vn (VN) | – | 30.000đ/link ≤200 MB (15.000đ thành viên); >200 MB: 20.000đ/100 MB (10.000đ thành viên); giảm 30% từ 10 link; có cho thuê tài khoản Baidu/123Pan | Zalo/chuyển khoản | – | https://dichvuchina.vn/dichvuchina-nhan-tai-ho-cac-tap-tin-cua-baidu-pan-123pan/ |
| fastviet.vn (VN) | Liệt kê site parse imwcr.cn, wp.nanmu.cool, baidu.kinh.cc | – | – | Hướng dẫn dùng IDM/Motrix; các site parse này **không còn ổn định** (unanswered.io: Motrix+imwcr "ngừng hoạt động tin cậy từ 2025") | https://fastviet.vn/cach-tai-link-baidu-toc-do-cao-khong-can-tai-khoan ; https://unanswered.io/guide/how-to-download-files-from-baidu-without-account |
| taikhoanpre.com (VN) | – | Bán tài khoản Baidu, CSDN, 123pan, Quark, PikPak, TeraBox | – | – | https://taikhoanpre.com/ |

Mã nguồn mở tự dựng leecher: https://github.com/xyb/baidupcsleecher (async downloader cho link chia sẻ Baidu) – hữu ích khi mô tả "cách dịch vụ leech hoạt động" (tài khoản SVIP + server ở TQ/HK + re-host).

---

## 2. CSDN download (download.csdn.net)

### 2.1 Cơ chế: 积分 (điểm tải) – C币 – VIP – 付费资源
- Ba loại tài nguyên: **积分资源** (tốn điểm), **VIP专享资源** (chỉ VIP tải), **付费资源** (mua lẻ bằng tiền, VIP được giảm giá, VIP *không* được tải miễn phí). Nguồn: https://ask.csdn.net/questions/7912258 ; https://blog.csdn.net/aabbwoshishei/article/details/144894099
- Kiếm 积分 miễn phí: bind SĐT +50 điểm; upload tài nguyên được người khác tải (điểm = lượt tải × điểm đặt, trần 100); đánh giá tài nguyên đã tải được hoàn điểm; nhiệm vụ hàng ngày. 2025 CSDN tách "博客积分" và "下载积分", có hệ số tín nhiệm 0,8–1,5×. Nguồn: https://blog.csdn.net/molangmolang/article/details/136055721 ; https://bbs.csdn.net/weixin_28559803/article/details/100183035
- **C币** là tiền ảo mua bằng tiền thật, dùng mua khoá học/tài nguyên; **余额 (số dư)** nạp 1:1 CNY, nạp tối thiểu 100 CNY, tối đa 5.000 CNY; số dư không mua trực tiếp lượt tải, chỉ mua VIP/C币/chuyên mục. Nguồn: https://mall.csdn.net/vip
- Phí quy đổi C币 ↔ 积分 cụ thể: **chưa xác minh** (trang blog liên quan trả 521).

### 2.2 Giá VIP CSDN (từ https://mall.csdn.net/vip, fetch 27/09/2026)

| Gói | Giá | Lượt tải | Ghi chú |
|---|---|---|---|
| VIP tháng | **98 CNY** | 30 | tặng gói thuật toán 10 CNY |
| VIP liên tục tháng | **88 CNY/tháng** | – | tự gia hạn |
| VIP năm (15 tháng, kèm quà) | **24,83 CNY/tháng** (~372 CNY) | 400 | "tặng thẻ VIP năm trị giá 656" |
| Super VIP năm | **32,33 CNY/tháng** (~388 CNY) | 400 | 5000+ video, 1000+ chuyên mục |
| Thẻ 2 năm | **20,33 CNY/tháng** (~488 CNY) | 800 | |
| VIP năm (trang sản phẩm cũ) | nguyên giá **300 CNY** | 600 | https://mall.csdn.net/product/1492 |

- Giới hạn: **tối đa 20 lượt/ngày**; lượt tải còn dư **mất khi hết hạn**; VIP đã mua không hoàn tiền; gia hạn trong thời hạn giảm 20%. Nguồn: https://mall.csdn.net/vip
- Lưu ý số lượt tải năm dao động 400–600 tuỳ chiến dịch (nguồn cũ ghi 600, trang hiện tại ghi 400).

### 2.3 Cách người ngoài TQ tải CSDN
1. **Đăng ký CSDN**: cho phép đăng ký bằng email/SĐT, nhưng thanh toán VIP chỉ **WeChat Pay / Alipay** (trang mall). Người nước ngoài có Alipay quốc tế bind thẻ *có thể* trả (chưa xác minh với CSDN cụ thể).
2. **Mua VIP/C币 qua trung gian**: z2u.com liệt kê CSDN C币/VIP/số dư, thanh toán PayPal/Visa…; hiện danh sách trống (không có seller) → không tin cậy. Nguồn: https://www.z2u.com/csdn/Top-Up-2-16628
3. **Dịch vụ tải hộ**: baidulinkdownloader.com hỗ trợ CSDN; baidudownloader.com bán "tải CSDN không cần tài khoản"; dịch vụ VN (taikhoanpre.com bán tài khoản CSDN). Diễn đàn quốc tế (EEVblog) có người nhờ tải hộ tài liệu CSDN. Nguồn: https://www.eevblog.com/forum/buysellwanted/download-from-csdn-(chinese-software-and-doc-)/
4. **Công cụ mã nguồn mở "免积分下载"**: bigintpro/csdn_downloader, Mrlimuyu/CSDN-VIP (bỏ mask bài VIP) – vi phạm điều khoản, dễ bị khoá, thường sớm chết. Nguồn: https://github.com/bigintpro/csdn_downloader ; https://github.com/Mrlimuyu/CSDN-VIP
5. Mẹo hợp pháp: nhiều tài nguyên CSDN là re-upload từ GitHub/PyPI/trang chính hãng → tìm nguồn gốc trước khi trả tiền. Nguồn: https://blog.csdn.net/annyhong/article/details/144212721

---

## 3. Vấn đề chung

### 3.1 Thanh toán Alipay / WeChat Pay cho người nước ngoài
- Từ 2023 cả hai cho bind thẻ quốc tế bằng hộ chiếu, không cần tài khoản ngân hàng TQ. Thẻ: Visa, Mastercard, JCB, Diners, Discover (Alipay), Amex (Alipay International). Nguồn: https://ltl-school.com/alipay-for-foreigners/ ; https://realchinatrip.com/blogs/payments-apps/... (10/05/2026)
- Phí: **0% ≤200 CNY/giao dịch, 3% >200 CNY** (thẻ UnionPay quốc tế miễn); giới hạn **$5.000/giao dịch, $50.000/năm** (một số nguồn ghi 5.000 CNY/giao dịch – **chưa thống nhất**). Nguồn: https://realchinatrip.com/... ; https://chinawithease.com/payment/
- Điểm mù: các guide tập trung QR tại cửa hàng/Taobao; **không có xác nhận chính thức** rằng ví bind thẻ nước ngoài thanh toán được mọi dịch vụ in-app (Baidu SVIP, CSDN VIP). Thực tế cộng đồng: thường được với Alipay, WeChat Pay hay lỗi hơn – ghi là kinh nghiệm, không phải quy tắc.
- Cách thay thế: nhờ người ở TQ nạp, mua thẻ qua marketplace (94lives, z2u), hoặc dùng dịch vụ leech nhận PayPal/thẻ/crypto.

### 3.2 VPN / IP Trung Quốc
- Baidu **không** yêu cầu IP TQ để tải; VPN vào TQ chủ yếu giúp khi lỗi định tuyến hoặc để "khớp" vị trí với SĐT. Ngược lại, **đăng ký bằng SĐT nước ngoài mà bật VPN TQ dễ bị flag** (IP không khớp quốc gia). Nguồn: marketingtochina.com
- Tốc độ từ VN/EU/US tới server Baidu thường thấp hơn nội địa kể cả SVIP (độ trễ xuyên biên giới) – dịch vụ leech đặt server ở TQ/HK/SG rồi re-host là cách hiệu quả hơn.

### 3.3 Rủi ro pháp lý / bản quyền (nhắc nhẹ)
- Tòa Trung Quốc từng phán Baidu Netdisk **liên đới vi phạm bản quyền** vì không chặn file vi phạm; Baidu Netdisk nằm trong danh sách Notorious Markets của USTR 2022. Nguồn: https://www.lexology.com/library/detail.aspx?g=8b979860-87e5-49da-9906-861e542f6d72 ; Wikipedia
- Công cụ vượt giới hạn tốc độ bị coi là "xâm nhập hệ thống máy tính" tại TQ (PanDownload); người dùng cuối ngoài TQ chủ yếu chịu rủi ro **khoá tài khoản** và **vi phạm điều khoản**, không phải hình sự – nhưng nội dung tải về vẫn phải tôn trọng bản quyền.
- Website leech nên có disclaimer: chỉ tải file người dùng có quyền truy cập; không lưu trữ lâu dài; tuân thủ DMCA.

---

## 4. Gợi ý outline bài viết SEO

**Keyword chính (EN):** `download from baidu pan without account`, `baidu pan download outside china`, `baidu netdisk download speed limit`, `pan.baidu.com downloader`, `baidu link generator`, `csdn download without account`, `csdn vip download`
**Keyword chính (VI):** `tải file baidu không cần tài khoản`, `cách tải pan baidu tốc độ cao`, `tải file baidu ở việt nam`, `tải tài liệu csdn`, `mua svip baidu`, `leech link baidu`
**Long-tail:** `baidu pan extraction code 提取码 là gì`, `baidu svip price 2026`, `csdn 积分 là gì`, `alipay foreign card baidu vip`, `pandownload alternative 2026`

**H1:** How to Download from Pan Baidu & CSDN Outside China (2026 Guide) / Cách tải file Pan Baidu & CSDN từ nước ngoài (cập nhật 2026)

- H2: Why downloading from Baidu Pan is hard outside China (SĐT +86, 100 KB/s, phải cài client)
- H2: Understanding a Baidu share link (link + 提取码, hạn 1/7/30 ngày/vĩnh viễn)
- H2: Option 1 – Register a Baidu account with an international phone (bước, lỗi thường gặp, EU không được, đừng bật VPN)
- H2: Option 2 – Buy Baidu SVIP (bảng giá 18/48/188 CNY, tốc độ 7–10 MB/s, cách thanh toán cho người nước ngoài)
- H2: Option 3 – Third-party tools: what still works in 2026 (PanDownload/KinhDown chết; BaiduPCS-Go không tăng tốc; script Tampermonkey 60–80%; OpenList; rủi ro khoá)
- H2: Option 4 – Use a leech / premium link generator (không cần tài khoản, bảng giá $/GB, so sánh)
- H2: How to download from CSDN (积分 vs VIP专享 vs 付费; VIP 98 CNY/tháng, 20 lượt/ngày; tải hộ)
- H2: Paying with Alipay/WeChat as a foreigner (0%/3%, giới hạn)
- H2: Legal & safety notes (bản quyền, ToS, không dùng tool crack với tài khoản chính)
- H2: FAQ

**FAQ gợi ý:**
1. Tải file Baidu không cần tài khoản được không? → Có, qua dịch vụ leech; web Baidu chỉ cho tải file rất nhỏ.
2. Tại sao tốc độ chỉ 100 KB/s? → Free bị bóp băng thông, đo 96–170 KB/s (03/2025).
3. SVIP Baidu giá bao nhiêu? → Niêm yết 30 CNY/tháng, 298 CNY/năm; khuyến mãi 18 CNY tháng đầu, ~188 CNY/năm.
4. PanDownload còn dùng được không? → Không, chết từ 04/2020; KinhDown ngừng 02/2023.
5. BaiduPCS-Go có tăng tốc không? → Không; tác giả nói rõ chỉ ngang client chính thức.
6. 提取码 là gì? → Mã 4 ký tự đi kèm link chia sẻ.
7. CSDN "VIP专享" là gì? → Tài nguyên chỉ hội viên tải; 积分 không dùng được.
8. Người nước ngoài mua CSDN VIP thế nào? → Chỉ WeChat/Alipay; dùng Alipay bind thẻ hoặc dịch vụ tải hộ.
9. Có cần VPN Trung Quốc không? → Không bắt buộc; có thể gây flag khi đăng ký.
10. Dùng tool bên thứ ba có bị khoá tài khoản không? → Có thể bị hạn tốc/khoá; dùng tài khoản phụ.
11. TeraBox có mở được link pan.baidu.com không? → Không.
12. Tải thư mục Baidu từ web được không? → Không; cần client hoặc dịch vụ leech.

---

## 5. Danh sách nguồn chính
- Tốc độ thực đo 2025: https://news.qq.com/rain/a/20250331A07BX200
- Giá SVIP: https://www.befun.ink/detail/319.html ; https://zhuanlan.zhihu.com/p/664807768 ; https://finance.sina.com.cn/tech/roll/2025-06-03/doc-ineyutxc1332542.shtml
- Đăng ký nước ngoài: https://marketingtochina.com/register-baidu-account-outside-china/ ; https://www.hongkiat.com/blog/register-baidu-account-oversea/ ; https://www.extrabux.com/chs/guide/7254269 ; https://eyun.baidu.com/content/530829/
- Link/提取码/hạn: https://eyun.baidu.com/content/54189/ ; https://eyun.baidu.com/content/168287/
- Công cụ bên thứ ba: https://github.com/qjfoidnh/BaiduPCS-Go ; https://doc.oplist.org/guide/drivers/baidu ; https://news.qq.com/rain/a/20250616A08NIZ00 ; https://kinhdown.kinh.cc/?Type=JX ; https://www.ghxi.com/rjhj02.html ; https://www.runningcheese.com/baiduyun ; https://www.wangdu.site/software/tools/948.html ; https://zhuanlan.zhihu.com/p/2012530808729120854
- PanDownload: https://www.163.com/dy/article/GJF9PUM00546O1NB.html ; https://cloud.tencent.com/developer/article/1615779
- Leech: https://baidufast.com/ ; https://fastdown.io/ ; https://baidu.erranium.com/tutorials/baidu-pan ; https://baidulinkdownloader.com/ ; https://dichvuchina.vn/dichvuchina-nhan-tai-ho-cac-tap-tin-cua-baidu-pan-123pan/
- CSDN: https://mall.csdn.net/vip ; https://mall.csdn.net/product/1492 ; https://ask.csdn.net/questions/7912258 ; https://blog.csdn.net/molangmolang/article/details/136055721
- Thanh toán: https://realchinatrip.com/blogs/payments-apps/how-to-use-alipay-and-wechat-pay-for-foreigners-setup-limits-comparison-table ; https://ltl-school.com/alipay-for-foreigners/
- Pháp lý: https://www.lexology.com/library/detail.aspx?g=8b979860-87e5-49da-9906-861e542f6d72 ; https://en.wikipedia.org/wiki/Baidu_Netdisk

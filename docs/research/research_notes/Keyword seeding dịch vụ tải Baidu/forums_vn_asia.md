# Danh bạ diễn đàn / cộng đồng VN & châu Á bàn về tải Baidu Pan / CSDN / host TQ (tính đến 27/10/2026)

*Phương pháp: WebSearch (toán tử `site:` gần như không hoạt động trên chỉ mục này nên dùng truy vấn thường) + gọi thẳng trang tìm kiếm nội bộ của diễn đàn bằng curl (PTT, Naver 지식iN, dcinside, Yahoo!知恵袋, Pantip, Daynhauhoc API, sov2ex/V2EX, Bahamut, 52pojie, 5ch subback). Bị chặn 403/Cloudflare: voz.vn, arca.live, theqoo, Dcard, LIHKG, Mobile01, Lowyat, MMO4ME, taphoammo, note.com, Tieba, Bilibili API, Facebook. Với các site bị chặn, dữ liệu lấy từ snippet tìm kiếm và ghi rõ. Không có số thành viên nhóm Facebook nào được xác minh. Thread trước 2024 đánh dấu **[lịch sử]**.*

## 1. Việt Nam: diễn đàn, nhóm FB, Zalo, TikTok, YouTube

### Takeaway
VOZ là nơi có nhu cầu "nhờ tải hộ Baidu" lớn và liên tục nhất VN (nhiều thread dài 28–40+ trang, có thread mới 02/2026). Nhu cầu trả tiền thật đang đi qua shop (taikhoanpre, itcuaban, dichvuchina, gian hàng taphoammo) và YouTube tiếng Việt (Panbaidu Team 18.2K sub). Tinhte, Daynhauhoc và Vietnamitx chủ yếu là thread cũ, ít hoạt động. Facebook, Zalo và TikTok không xác minh được do bị chặn hoặc không có chỉ mục.

### Nhật ký 3 vòng (cho toàn bộ file)
- **Vòng 1 (khám phá rộng):** `site:` thất bại trên mọi domain (voz, dcinside, chiebukuro, pantip, kaskus). DuckDuckGo/Bing chặn bot. Chuyển sang dò endpoint tìm kiếm nội bộ của 27 site: 15 site trả 200, 12 site bị 403. Phát hiện mới so với tài liệu 04: **PTT Free_box** (yêu cầu hằng tháng, có thưởng P幣), **Naver 지식iN** (2.192 kết quả "바이두 다운", baidufast đang seed có công khai là chủ site), **dcinside 바이두 마이너 갤러리**, **Yahoo!知恵袋** (Q&A 2020–2026), V2EX (chợ đại nạp SVIP cũ).
- **Vòng 2 (xác minh URL/ngày và mở rộng theo link):** lấy ngày đăng chính xác cho PTT (giải mã timestamp trong URL), Naver KIN, chiebukuro, Bahamut, dcinside, 52pojie, Vietnamitx. Mở rộng VOZ qua snippet: thread 920891 (≥36 trang), 1076520 (≥39–40 trang), 1066838, 1043564, 1071687. Đọc nội quy PTT Free_box.
- **Vòng 3 (đào sâu top 10):** nội quy (PTT, VOZ theo tài liệu 04, 52pojie), số sub YouTube VN (curl trực tiếp), bài bán dịch vụ trên dcinside (KakaoTalk open chat), sự hiện diện của đối thủ (baidufast trên Naver và arca, baidudownloader trên Lowyat-like forum, shop VN trên taphoammo/YouTube), 5ch không còn thread Baidu đang hoạt động.

### Cited Findings
**VOZ (voz.vn)** (bị 403 khi fetch, dữ liệu lấy từ snippet tìm kiếm)
- Thread "Giúp em download file pan baidu" mở đầu 02/2026. Một thành viên hỏi tải file, người khác chỉ sang thread cũ. Tài liệu 04 ghi thread này có 2 reply và có gợi ý baidufast — [VOZ 1205910](https://voz.vn/t/giup-em-download-file-pan-baidu.1205910/)
- "Nhờ download file từ Pan Baidu" (box thảo luận) có ít nhất 36 trang. Thành viên dán link kèm mã trích xuất cho phim, phần mềm, ROM, dataset (2–19GB), người khác tải rồi up lại MEGA/Drive. Snippet cho biết bài ở trang được lấy mẫu khoảng đầu 2024 — [VOZ 920891 p.28](https://voz.vn/t/nho-download-file-tu-pan-baidu.920891/page-28); [mirror voz.party p.36](https://voz.party/d/696993-nho-download-file-tu-pan-baidu?page=36)
- "[Hỗ trợ] Get tài nguyên trên Pan Baidu free" có ≥39 trang. Chủ thớt có tài khoản không giới hạn, get link miễn phí qua Google Drive, giới hạn <3GB rồi nâng lên 6GB. Ở trang 39, một thành viên giới thiệu các trang tải hộ bên thứ ba với mức miễn phí khoảng 100MB — [VOZ 1076520](https://voz.vn/t/ho-tro-get-tai-nguyen-tren-pan-baidu-free.1076520/); [p.39](https://voz.vn/t/ho-tro-get-tai-nguyen-tren-pan-baidu-free.1076520/page-39)
- Các thread khác: "Bác nào cần download từ Pan Baidu thì bình luận nhé" — [VOZ 1066838](https://voz.vn/t/bac-nao-can-download-tu-pan-baidu-thi-binh-luan-nhe.1066838/); "Các thím ai có tài khoản Baidu tải giúp em firmware này cho router" — [VOZ 1071687](https://voz.vn/t/cac-thim-ai-co-tai-khoan-baidu-tai-giup-em-firmware-nay-cho-router-voi-a.1071687/); "Bác nào tải hộ em file từ pan.baidu.com" [lịch sử] — [VOZ 135934](https://voz.vn/t/bac-nao-tai-ho-em-file-tu-pan-baidu-com-voi-a.135934/)
- **Tín hiệu giá:** thread "Cần thuê tài khoản BaiDu". Theo snippet, một thành viên thuê 7 ngày giá 35k, một người khác được báo giá 150k cho 100GB kèm up lên Drive/Dropbox — [VOZ 1043564](https://voz.vn/t/can-thue-tai-khoan-baidu.1043564/)
- Mẹo tháng 01/2026 trong thread VOZ: "reg nick ở trang Baidu Cloud Login rồi chuyển sang pan.baidu.com là tải đc" (theo snippet search, không rõ thread cụ thể) — [VOZ 1205910](https://voz.vn/t/giup-em-download-file-pan-baidu.1205910/)
- Bối cảnh: 03/2025 VOZ yêu cầu tài khoản hoạt động xác minh số CCCD — [Wikipedia VOZ](https://en.wikipedia.org/wiki/VOZ_(forum))
- Nội quy (theo tài liệu 04, chưa đọc lại được do 403): cấm quảng cáo ngoài box Rao vặt, được trả lời hỗ trợ — [04-offpage-community.md](../../seo/04-offpage-community.md)

**Vietnamitx**
- Thread "Hỗ trợ tải file Pan Baidu tốc độ cao, không cần tài khoản, trả link Drive tự động", bài #1 ngày 14/09/2022, 15 trang. Request cuối của thành viên là 31/10/2024, admin "VNiTX News" trả lời lần cuối 15/05/2026. Link bị ẩn với khách ("You must be registered for see links"). Thread gần như ngủ đông — [Vietnamitx 564 p.15](https://vietnamitx.com/t/ho-tro-tai-file-pan-baidu-toc-do-cao-khong-can-tai-khoan-tra-link-drive-tu-dong.564/page-15)

**Tinhte, Daynhauhoc, vn-z, chiase**
- Daynhauhoc (Discourse API): chỉ 1 topic đúng chủ đề, "Làm sao để download tài liệu từ trang download.csdn.net" (29/06/2018, 3 post) [lịch sử]. Tìm "baidu" không ra thread tải file nào — [daynhauhoc 70107](https://daynhauhoc.com/t/lam-sao-de-download-tai-lieu-tu-trang-download-csdn-net/70107)
- Tinhte: trang tìm kiếm render bằng JS nên không trích được. Tài liệu 04 có 3 thread (tải pan.baidu không cần client; nhờ tải sách CSDN; hỗ trợ download tài liệu miễn phí), chưa tái xác minh ngày — [Tinhte 2669956](https://tinhte.vn/thread/tai-file-tu-link-pan-baidu-com-khong-can-baidu-client.2669956/); [Tinhte 2866966](https://tinhte.vn/thread/ai-giup-em-tai-sach-tu-trang-csdn-net.2866966/)
- vn-z.vn: thread "Pan Baidu Downloader – Tải Baidu không cần tài khoản" ghi phần mềm bị Baidu cấm từ 06/2024 — [vn-z 56955](https://vn-z.vn/threads/pan-baidu-downloader-tai-baidu-khong-can-tai-khoan.56955/); chiase.org có guide cũ — [chiase 2345](https://chiase.org/threads/huong-dan-download-file-baidu-tai-file-tren-pan-baidu-nhanh-nhat.2345/)

**Sàn MMO / shop**
- taphoammo.net có gian hàng "Tải file baidu (Pan Baidu) thuê tài khoản svip" (snippet: khoảng 180.000đ, gói 1–3 tháng, get link <2GB) và "Tải Pan Baidu không cần tài khoản" — [taphoammo 744106](https://taphoammo.net/gian-hang/tai-file-baidu-pan-baidu-thue-tai-khoan-svip_744106); [taphoammo 744826](https://taphoammo.net/gian-hang/tai-pan-baidu-khong-can-tai-khoan_744826)
- taikhoanpre: SVIP 1 tháng 69.000–149.000đ, nạp SVIP 149.000–860.000đ — [taikhoanpre SVIP](https://taikhoanpre.com/san-pham/tai-khoan-svip-baidu_4.html); itcuaban: tải hộ 5k/GB (tối thiểu 10k), tạo tài khoản và nâng SVIP 100.000–340.000đ — [itcuaban](https://itcuaban.com/sp/dich-vu-tao-tai-khoan-baidu-va-nang-cap-svip/)
- MMO4ME bị 403, không xác minh được thread nào.

**YouTube VN** (curl trực tiếp trang kênh ngày 27/10/2026)
- "Tài Khoản Baidu – Panbaidu Team": 18.2K sub, 15 video — [@taikhoanbaidu1](https://www.youtube.com/@taikhoanbaidu1)
- "Hieu IT" (itcuaban): 2.19K sub, 35 video — [@HieuIT](https://www.youtube.com/@HieuIT)
- "MTechStill": 4 sub, 18 video. Tài liệu 04 ghi kênh này có loạt video "Tải file quark baidu chỉ từ 5k" — [@MTechStill](https://www.youtube.com/@MTechStill)
- "Baidu Link Downloader" (đối thủ quốc tế, có bản dịch video sang tiếng Việt): 30 sub, 15 video — [@BaiduLinkDownloader](https://www.youtube.com/@BaiduLinkDownloader)
- Kênh 5 Phút, video "BAIDU DOWNLOADER 2024" (11/2024) — [YouTube yTLgv8U2w40](https://www.youtube.com/watch?v=yTLgv8U2w40)

**Facebook / Zalo / TikTok**
- Nhóm FB từ tài liệu 04 (chưa xác minh số thành viên vì Facebook chặn fetch): VOZ.VN – Công nghệ & Kỹ thuật, Nhà Trung, Hội Du học sinh VN tại TQ, Học tiếng Trung mỗi ngày, Bomber VNG. Fanpage đối thủ "Dịch vụ download trên Pan Baidu" — [FB dichvupanbaidu](https://www.facebook.com/dichvupanbaidu); fanpage itcuaban (snippet: khoảng 474 like) — [FB itcuaban.vn](https://www.facebook.com/itcuaban.vn/)
- Zalo không có danh mục nhóm công khai. Nhóm học tiếng Trung được rải link qua Threads — [Threads hannguthanhhoa](https://www.threads.com/@hannguthanhhoa/post/DXofxZGEv-C/link-nh%C3%B3m-zalo-h%E1%BB%8Dc-ti%E1%BA%BFng-trung-httpszalomegzvlqnmzcosferzbsudou); [zalo.st blog](https://www.zalo.st/blog/823933432713285.html)
- TikTok: có trang discover "Cách Tải File Baidu" (theo tài liệu 04) và trang EN "How to Download Pan Baidu" (phần lớn video tiếng Tây Ban Nha) — [TikTok discover](https://www.tiktok.com/discover/how-to-download-pan-baidu). Không tìm được creator VN chuyên chủ đề này.

### Inferences
- VOZ có văn hóa "tải hộ miễn phí": người giúp tự nguyện, file lớn được up lại Drive/MEGA. Muốn tham gia trung thực thì trả lời đúng kỹ thuật, ghi rõ mình là đơn vị cung cấp dịch vụ, cho tải miễn phí một dung lượng nhỏ, không spam link ở mọi thread. Bài quảng cáo phải đăng ở box Rao vặt.
- Người VN sẵn sàng trả mức thấp (35k/7 ngày, 5k/GB, 150k/100GB), nhạy giá, thích Zalo/Drive. YouTube là kênh chuyển đổi mạnh nhất (Panbaidu Team, 18.2K sub, gần như chắc chắn dẫn traffic về shop).
- Tinhte, Daynhauhoc và Vietnamitx hợp để đăng một bài hướng dẫn chất lượng (SEO dài hạn) hơn là nơi có lưu lượng request.

### Gaps
- Không xác minh được số thành viên và nội quy nhóm FB/Zalo (Facebook chặn, Zalo không có chỉ mục). Không lấy được số reply/ngày chính xác các trang VOZ (403). Không xác minh được danh sách hashtag và creator TikTok VN. Không xác minh được thread MMO4ME.

## 2. Hàn Quốc: dcinside, arca.live, theqoo, Ruliweb, Clien, Naver

### Takeaway
Naver 지식iN là kênh Hàn sôi động nhất: 2.192 kết quả cho "바이두 다운", nhiều câu hỏi năm 2026 kiểu "ai tải hộ, gửi qua email". baidufast đã vào trả lời, có công khai "제가 운영하는 사이트" và gắn `utm_source=naver`. dcinside có minor gallery riêng cho Baidu, trong đó có người bán dịch vụ tải trả phí qua KakaoTalk.

### Cited Findings
- Naver 지식iN: tìm "바이두 다운" ra 2.192 kết quả (curl 27/10/2026) — [kin.naver.com search](https://kin.naver.com/search/list.naver?query=%EB%B0%94%EC%9D%B4%EB%91%90+%EB%8B%A4%EC%9A%B4%EB%A1%9C%EB%93%9C)
- "바이두 파일 다운로드 도와주실 분 계신가요" (23/07/2026). Câu trả lời của baidufast: "VRM 같은 작은 파일이면 무료… 제가 운영하는 곳이라… https://baidufast.com/ko?utm_source=naver". Có một câu trả lời khác để lại email lạ — [KIN 494399187](https://kin.naver.com/qna/detail.naver?dirId=10607&docId=494399187)
- "바이두 다운로드를 해야되는데 회원가입이 안되서요" (22/04/2026): người hỏi dán link pan.baidu và email, nhờ tải rồi gửi qua mail. baidufast trả lời tương tự, có ghi "(제가 운영하는 사이트예요)" — [KIN 493072796](https://kin.naver.com/qna/detail.naver?dirId=10607&docId=493072796)
- Các câu hỏi khác: 05/05/2026 — [KIN 493158783](https://kin.naver.com/qna/detail.naver?dirId=10607&docId=493158783); 11/08/2025 — [KIN 487905558](https://kin.naver.com/qna/detail.naver?dirId=110805&docId=487905558); 24/08/2024 — [KIN 474369931](https://kin.naver.com/qna/detail.naver?dirId=11080504&docId=474369931); 30/03/2024, có công ty du lịch "중국자유여행 투어친구" nhận tải hộ qua email — [KIN 467123793](https://kin.naver.com/qna/detail.naver?dirId=9020102&docId=467123793)
- dcinside "바이두 마이너 갤러리" (id=baidu). Bài gần nhất 05/09/2026. Chủ đề lặp lại: đăng ký bị chặn (03/2026, 06/2026), nhờ tải 500MB (18/10/2025), "바이두 대리다운로드 도와줄사람" (12/04/2025), "svip한달 충전해줄테니 계정 빌려줄 사람" (04/06/2025). Bài "**바이두 다운로드 유료**" (22/03/2026) chỉ có link KakaoTalk open chat, tức người bán dịch vụ trả phí — [dcinside baidu gallery](https://gall.dcinside.com/mgallery/board/lists/?id=baidu); [bài 713](https://gall.dcinside.com/mgallery/board/view/?id=baidu&no=713); [bài 646](https://gall.dcinside.com/mgallery/board/view/?id=baidu&no=646)
- Ngoài ra có gallery "바이두 티에바ⓜ" (id=baidu_tieba) — [dcinside search](https://search.dcinside.com/combine/q/.EB.B0.94.EC.9D.B4.EB.91.90)
- arca.live (403): bài "바이두 로그인 없이 모드 다운받는 법 알아옴" ở kênh Tullius (mod Skyrim), giới thiệu pan.naifei.cc và baidufast.com — [arca tullius 8949614](https://arca.live/b/tullius/8949614)
- Blog Hàn chuyên về Baidu (singingdalong.blogspot), có bài 01/2024 và 08/2024 — [singingdalong 2024/08](https://singingdalong.blogspot.com/2024/08/Baidu-NetDisk-download-without-speed-limit.html)
- Ruliweb và Clien: trang tìm kiếm chỉ ra tin tức về công ty Baidu, không có thread tải file — [Ruliweb search](https://bbs.ruliweb.com/search?q=%EB%B0%94%EC%9D%B4%EB%91%90). theqoo bị 403.

### Inferences
- Người Hàn thường cần file nhỏ (VRM/MMD, mod game) và thoải mái gửi email cho người lạ. Mô hình "miễn phí file nhỏ, trả phí file lớn" của baidufast trên KIN là mẫu tham gia trung thực có thể theo: trả lời đúng câu hỏi, công khai là chủ site, có UTM để đo. Tuy vậy, 지식iN có thể coi đây là quảng cáo nếu lặp lại nhiều; cần đọc chính sách 지식iN (chưa xác minh).
- arca.live (kênh mod game) và dcinside là nơi có người dùng game. Không nên đăng bài bán hàng (gallery có manager), chỉ trả lời hỗ trợ.

### Gaps
- Chưa đọc được quy định quảng cáo của 지식iN và nội quy gallery dcinside. arca và theqoo bị 403. Naver Cafe không truy cập được (yêu cầu đăng nhập). Search engine từ chối truy vấn có từ "MMD 대리 다운로드 유료" vì lý do bản quyền.

## 3. Nhật Bản: Yahoo!知恵袋, 5ch, Qiita/Zenn, note, nicovideo/MMD

### Takeaway
Yahoo!知恵袋 có dòng câu hỏi đều đặn 2020–2026 (không đăng ký được vì +86, bị xác minh liên tục, muốn trả tiền để tăng tốc). 5ch hiện không còn thread Baidu đang chạy, nhưng có thread lớn cho người mua tài khoản premium host nước ngoài. Qiita, Zenn và note không cho kết quả.

### Cited Findings
- 知恵袋 "百度网盘というサイトでファイルをDLしたいのですが認証ばかりでDLできません" (16/08/2026, 1 câu trả lời) — [q12330599452](https://detail.chiebukuro.yahoo.co.jp/qa/question_detail/q12330599452)
- "百度网盘でファイルダウンロードしたいのですが、どうしてもアカウントがつくれません" (23/08/2024) — [q14302991394](https://detail.chiebukuro.yahoo.co.jp/qa/question_detail/q14302991394)
- "国番号が＋86で固定されていて登録できません" (10/10/2023) [lịch sử] — [q13287293738](https://detail.chiebukuro.yahoo.co.jp/qa/question_detail/q13287293738); "中国の電話番号がなければ登録できませんか" (15/06/2023) [lịch sử] — [q13281493658](https://detail.chiebukuro.yahoo.co.jp/qa/question_detail/q13281493658)
- "百度网盘で課金してダウンロード速度を上げるには" (07/01/2022) [lịch sử]: người Nhật chủ động muốn trả tiền — [q12255041172](https://detail.chiebukuro.yahoo.co.jp/qa/question_detail/q12255041172); người dùng SVIP với số điện thoại Nhật (12/11/2020) [lịch sử] — [q12234368067](https://detail.chiebukuro.yahoo.co.jp/qa/question_detail/q12234368067)
- 5ch download板: thread "【Baidu】百度総合スレッド【規制】 Part.12" (2019, đã đầy 1000 post) [lịch sử] — [5ch 1554375858](https://lavender.5ch.net/test/read.cgi/download/1554375858/l50). Danh sách thread đang chạy ngày 27/10/2026 không có thread Baidu, nhưng có "海外アップローダー総合★248" (283 post) và "【プレ垢志願者】海外アップローダー★25垢目" (993 post) — [5ch download subback](https://lavender.5ch.io/download/subback.html)
- Qiita (search "百度") và Zenn (search "baidu"): không trích được bài nào (trang render bằng JS). note.com API bị 403.

### Inferences
- Thread "プレ垢志願者" (người muốn mua tài khoản premium) trên 5ch cho thấy người Nhật quen trả tiền cho host nước ngoài. Tuy nhiên 5ch kỵ quảng cáo, nên cách hợp lý hơn là trả lời trên 知恵袋 (câu hỏi mới mỗi vài tháng) hoặc viết bài note/Qiita thật sự hữu ích (vd. lỗi 認証, +86).
- Nhu cầu ở Nhật tập trung vào tài nguyên MMD/game. Không xác minh được cộng đồng nicovideo.

### Gaps
- nicovideo/MMD, Qiita/Zenn/note: không có dữ liệu xác minh. Chưa đọc quy định 知恵袋 về câu trả lời có tính quảng cáo.

## 4. Indonesia / Malaysia: Kaskus, Lowyat, Facebook, Telegram

### Takeaway
Không tìm thấy thread Kaskus hoặc Lowyat nào còn hoạt động. Dữ liệu chỉ có thread cũ [lịch sử] và kênh Telegram nhỏ của đối thủ. Indonesia/Malaysia hiện là thị trường "nội dung" (blog/YouTube bằng bahasa) hơn là diễn đàn.

### Cited Findings
- Lowyat "HELP Baidu Cloud" (2016) [lịch sử]: trả lời rằng có thể chọn mã +60 khi đăng ký — [Lowyat 3884109](https://forum.lowyat.net/topic/3884109)
- Kaskus: tài liệu 04 có thread năm 2018, 0 reply, đã khóa [lịch sử]. Lần này tìm nội bộ không trích được kết quả nào — [04-offpage-community.md](../../seo/04-offpage-community.md)
- Blog Indonesia "Pan Baidu Downloader…" (08/2018) [lịch sử] — [blogjeems](https://blogjeems.blogspot.com/2018/08/pan-baidu-downloader-download-file-dari.html)
- Telegram: kênh "Baidu downloader" @baidudownloade (snippet: 341 subscriber); nhóm mời "tải Baidu miễn phí" chưa xác minh — [t.me/baidudownloade](https://t.me/baidudownloade); [t.me invite](https://t.me/+PuWxqRHqLfk2NDE0). Bot mã nguồn mở baiduwp-bot — [GitHub](https://github.com/yuantuo666/baiduwp-bot)
- Các diễn đàn quốc tế khác (GSM-Forum, RageZone, PC Flier) được dùng để seed baidudownloader.com kèm coupon — [GSM-Forum](https://forum.gsmhosting.com/vbb/f906/easiest-way-download-files-baidu-pan-baidu-com-full-speed-2253506/); [RageZone](https://forum.ragezone.com/threads/easy-download-pan-baidu-oktober-2020.1191891/)

### Inferences
- Indonesia/Malaysia: ưu tiên Telegram (nhóm hỗ trợ của chính brand) và video YouTube bằng bahasa. Theo tài liệu 04, đối thủ baidulinkdownloader đã dịch video sang tiếng Indonesia. Kaskus FJB chỉ đáng thử nếu có lời chào bán rõ ràng và minh bạch.

### Gaps
- Lowyat bị 403, Kaskus search không trích được. Không xác minh được nhóm FB Indonesia/Malaysia nào.

## 5. Thái Lan: Pantip

### Takeaway
Pantip có câu hỏi về việc không đăng ký được Baidu ID bằng số nước ngoài, nhưng không thấy thread "tải hộ" hay mua bán. Nhu cầu nhỏ, chủ yếu từ người học tiếng Trung và người đi du lịch TQ.

### Cited Findings
- "ตอนนี้เว็บ passport.baidu ไม่รับสมัครเบอร์ต่างประเทศแล้วหรอ" (web Baidu không nhận số nước ngoài nữa?) — [Pantip 43880069](https://pantip.com/topic/43880069); "สมัคร id baidu ไม่มีเบอร์จีน ใครมีวิธีไหม" — [Pantip 43323629](https://pantip.com/topic/43323629); "หัดภาษาจีนอยู่ครับ" — [Pantip 43810870](https://pantip.com/topic/43810870). Cả ba lấy từ trang tìm kiếm Pantip ngày 27/10/2026; trang chi tiết trả về 302 nên không lấy được ngày đăng chính xác. ID topic thuộc dải 43–44 triệu, tức là bài gần đây.

### Inferences
- Ở Thái, cách tiếp cận phù hợp là trả lời các câu "đăng ký Baidu không có số TQ", kèm hướng dẫn và có ghi rõ mình là nhà cung cấp. Ngoài ra nên làm nội dung tiếng Thái (theo tài liệu 04, Similarweb ghi TH nằm trong top quốc gia của baidulinkdownloader).

### Gaps
- Không lấy được ngày đăng và nội quy Pantip (trang chi tiết bị 302).

## 6. Đài Loan / Hồng Kông: PTT, Dcard, LIHKG, Mobile01, Bahamut

### Takeaway
**PTT Free_box là cộng đồng sôi động và rõ ràng nhất châu Á cho nhu cầu "tải hộ Baidu":** khoảng 1–3 bài "[徵求] 百度網盤分流至GD/MEGA" mỗi tháng, liên tục từ 2025 đến 26/10/2026, kèm thưởng P幣 (vd. 700P cho 520MB). Bahamut có câu hỏi về đăng ký tài khoản (2022–2024). LIHKG có người được khuyên dùng dịch vụ "代購下載".

### Cited Findings
- PTT Free_box, bài mới nhất "[徵求] 夸克或百度網盤轉MG" (26/10/2026 UTC): "檔案大小：約520MB / 報酬：700P / 自己用百度網盤下載…老是出現驗證錯誤" — [PTT M.1793031046](https://www.ptt.cc/bbs/Free_box/M.1793031046.A.A15.html)
- Chuỗi bài "[徵求] 百度網盤分流至GD" đã giải mã ngày: 01/10/2026, 15/09/2026, 30/08/2026, 25/04/2026, 20/04/2026, 29/03/2026, 15/02/2026, 18/01/2026, 21/12/2025, 12/10/2025, 24/09/2025, 14/08/2025, 18/07/2025, 08/06/2025… (phần lớn có ghi "已徵得" = đã có người nhận) — [PTT Free_box search 百度](https://www.ptt.cc/bbs/Free_box/search?q=%E7%99%BE%E5%BA%A6); [M.1790854144 (01/10/2026)](https://www.ptt.cc/bbs/Free_box/M.1790854144.A.104.html)
- Nội quy Free_box (2008): cấm "偷渡廣告文" (quảng cáo lén), vi phạm là ban luôn; cấm bài không liên quan. Có bài ghim "[公告] 免空帳號買賣置底文" (10/03/2019) cho phép mua bán tài khoản host trong phần đẩy bài, người mua tự chịu rủi ro. Có bài ghim "黑名單專區" cho tranh chấp 徵求分流 — [PTT 版規](https://www.ptt.cc/bbs/Free_box/M.1215206840.A.63F.html); [PTT 帳號買賣置底](https://www.ptt.cc/bbs/Free_box/M.1552230218.A.46D.html)
- Bahamut 電腦應用綜合討論: "我的百度帳號沒辦法註冊" (29/08/2024), "百度網盤無法註冊（已解決）" (27/05/2024), "百度網盤沒辦法註冊" (10/12/2022) [lịch sử], "百度網盤" (05/02/2022) [lịch sử] — [Bahamut 651077](https://forum.gamer.com.tw/C.php?bsn=60030&snA=651077); [645586](https://forum.gamer.com.tw/C.php?bsn=60030&snA=645586); [615082](https://forum.gamer.com.tw/C.php?bsn=60030&snA=615082)
- Mobile01: người dùng mua tài nguyên thiết kế, người bán cấp tài khoản Baidu để tải, lo IP Đài Loan bị chặn — [Mobile01 6861101](https://www.mobile01.com/topicdetail.php?f=494&t=6861101)
- LIHKG thread 淘寶/京東/拼多多 (trang 11): có người hỏi về trình tải không cần đăng nhập và được khuyên dùng dịch vụ 代購下載 (theo snippet tìm kiếm, vì LIHKG bị 403) — [LIHKG 3787651 p.11](https://lihkg.com/thread/3787651/page/11)
- iT邦幫忙 (diễn đàn dev Đài Loan): "沒百度帳號，想下載百度檔案" — [ithelp 10193866](https://ithelp.ithome.com.tw/questions/10193866)
- Dcard: API bị 403, không tìm thấy thread.

### Inferences
- PTT Free_box là nơi duy nhất có "giá" công khai (P幣) và nhu cầu đều đặn. Tuy nhiên nội quy cấm quảng cáo nên không đăng bài chào hàng. Cách tham gia trung thực: (a) dùng tài khoản thật của nhân viên để nhận 徵求 như một thành viên bình thường, không chèn link; (b) nếu muốn bán thì chỉ đẩy bài trong bài ghim mua bán tài khoản, có công khai. Rủi ro bị coi là 偷渡廣告 rất cao.
- Người dùng Đài Loan quen "chuyển sang GD/MEGA". Một tính năng "trả về Google Drive/MEGA" sẽ khớp đúng ngôn ngữ của họ.

### Gaps
- Dcard, LIHKG, Mobile01 bị chặn fetch. Không có số liệu thành viên.

## 7. Cộng đồng tiếng Trung (52pojie, V2EX, Zhihu, Bilibili, Tieba): nói gì về 代下载 trả phí

### Takeaway
Trong cộng đồng tiếng Trung, đại nạp SVIP và 代下 là chuyện bình thường, nhưng bị coi là rủi ro: Zhihu cảnh báo bị lừa trên Taobao/闲鱼, 52pojie cấm giao dịch thương mại. Đây là nơi tham khảo cơ chế (giá 1 tệ/2GB, mô hình tải bằng tài khoản SVIP rồi chuyển file), không phải nơi để seed.

### Cited Findings
- V2EX: chợ đại nạp SVIP cũ [lịch sử], vd. "百度网盘超级年费代充 135 一年" (30/04/2018), "百度网盘超级 vip 好价，15/月" (09/02/2019, 70 reply). Gần đây hơn có "代开百度网盘 svip" (14/05/2024, 0 reply) — [V2EX 451082](https://www.v2ex.com/t/451082); [V2EX 533584](https://www.v2ex.com/t/533584); [V2EX 1040793](https://www.v2ex.com/t/1040793)
- 52pojie: trang chủ ghi cấm đăng nội dung có thể xâm phạm thương mại. Nhiều chữ ký thành viên có câu "禁止留联系方式，禁止任何商业交易", nhưng đó là chữ ký, không phải văn bản luật diễn đàn. Có các thread nhờ tải trong 『悬赏问答区』 (hỏi đáp có thưởng): "代下github和百度网盘", "百度网盘" (15/08/2026, dán link pan kèm mã) — [52pojie 1857858](https://www.52pojie.cn/thread-1857858-1-1.html); [52pojie 2123150](https://www.52pojie.cn/thread-2123150-1-1.html); [52pojie forum](https://www.52pojie.cn/forum.php)
- Zhihu: "大家有在淘宝买百度网盘被坑的经历么？", có câu trả lời cho rằng giá thấp hơn chính hãng nhiều thì thường là lừa. Một câu hỏi khác về nguồn gốc mã kích hoạt SVIP giá rẻ trên Taobao/闲鱼 — [Zhihu 644868998](https://www.zhihu.com/question/644868998); [Zhihu 327822927](https://www.zhihu.com/question/327822927)
- Mô tả mô hình 代下载: dùng tài khoản 超级会员 tải rồi gửi qua QQ hoặc trạm trung chuyển, giá ví dụ 2GB = 1 tệ (trang cũ) — [haibianshibei](https://www.haibianshibei.com/1767.html); NodeSeek "踩坑分享：百度网盘下载" khuyên tránh mua 下载券 — [NodeSeek 759720](https://www.nodeseek.com/post-759720-1)
- Bilibili: nhiều video 2026 dạng "百度网盘不限速" (vd. "2026最新网盘不限速小方法", "2026年最新百度网盘不限速下载教程，速度快至100+m/s") — [BV1STjp69EcQ](https://www.bilibili.com/video/BV1STjp69EcQ/); [BV19PvZBBE62](https://www.bilibili.com/video/BV19PvZBBE62/)
- Tieba: bị 403, không có dữ liệu.

### Inferences
- Giá tham chiếu trong nội địa TQ cực thấp (khoảng 1 tệ/2GB, SVIP khoảng 15 tệ/tháng), nên dịch vụ cho người ngoài TQ không thể cạnh tranh về giá với người dùng TQ. Giá trị của dịch vụ nằm ở chỗ không cần tài khoản, không cần +86 và có thanh toán quốc tế. 52pojie chỉ dùng làm nguồn tham khảo, tuyệt đối không quảng cáo.

### Gaps
- Chưa đọc được văn bản 总版规 của 52pojie (bị reset kết nối) và Tieba.

## 8. Đối thủ xuất hiện ở đâu (dichvuchina, itcuaban, taikhoanpre, baidulinkdownloader /vi, erranium, baidufast)

### Takeaway
Shop VN (itcuaban, taikhoanpre, dichvuchina) hầu như không xuất hiện trong diễn đàn. Họ sống bằng site riêng, YouTube, fanpage FB, Zalo và taphoammo. Đối thủ quốc tế baidufast là bên seed chủ động nhất ở châu Á (Naver 지식iN tiếng Hàn có UTM, arca.live, được nhắc trên VOZ). Erranium và baidulinkdownloader hiện diện chủ yếu qua gist/YouTube/HF, không thấy trong diễn đàn châu Á đã quét.

### Cited Findings
- baidufast: trả lời trên Naver KIN có công khai và có `utm_source=naver` (04/2026, 07/2026) — [KIN 494399187](https://kin.naver.com/qna/detail.naver?dirId=10607&docId=494399187); được giới thiệu trên arca Tullius — [arca 8949614](https://arca.live/b/tullius/8949614); được gợi ý trong thread VOZ 02/2026 (theo tài liệu 04) — [VOZ 1205910](https://voz.vn/t/giup-em-download-file-pan-baidu.1205910/); trang chủ ghi miễn phí dưới 150MB — [baidufast.com](https://baidufast.com/)
- dichvuchina.vn: bài nhận tải hộ Baidu Pan và 123pan — [dichvuchina](https://dichvuchina.vn/dichvuchina-nhan-tai-ho-cac-tap-tin-cua-baidu-pan-123pan/)
- itcuaban: fanpage FB, YouTube Hieu IT 2.19K sub — [FB itcuaban.vn](https://www.facebook.com/itcuaban.vn/); [@HieuIT](https://www.youtube.com/@HieuIT)
- taikhoanpre: theo tài liệu 02 "rất có thể" là chủ kênh Panbaidu Team (18.2K sub), chưa xác minh — [@taikhoanbaidu1](https://www.youtube.com/@taikhoanbaidu1)
- baidulinkdownloader /vi xếp hạng cho truy vấn tiếng Việt "tải không cần tài khoản" — [baidulinkdownloader.com/vi](https://baidulinkdownloader.com/vi)
- Erranium: chỉ thấy trang của chính họ và công cụ kiểm tra URL, không thấy trong diễn đàn châu Á — [baidu.erranium.com](https://baidu.erranium.com/)
- baidudownloader.com được seed trên GSM-Forum, RageZone, PC Flier — [PC Flier](https://www.pcflier.com/thread-780-1-1.html)
- Người bán cá nhân: dcinside "바이두 다운로드 유료" (KakaoTalk, 03/2026) — [dcinside 713](https://gall.dcinside.com/mgallery/board/view/?id=baidu&no=713); gian hàng taphoammo — [taphoammo 744106](https://taphoammo.net/gian-hang/tai-file-baidu-pan-baidu-thue-tai-khoan-svip_744106)

### Inferences
- Ở VN, không đối thủ nào "sở hữu" một thread hỗ trợ trên VOZ. Một tài khoản thương hiệu minh bạch, giải quyết request trong thread 920891/1076520 (miễn phí dưới ngưỡng nhỏ) có thể chiếm vị trí đó, với điều kiện tuân thủ nội quy VOZ.
- Hàn Quốc là nơi đối thủ đã đi trước (baidufast trên KIN). Muốn vào phải tạo khác biệt bằng chất lượng câu trả lời bằng tiếng Hàn.

### Gaps
- Không xác minh được dichvuchina/taikhoanpre có trong nhóm FB nào. Không quét được VOZ để đếm số lần đối thủ được nhắc.

## 9. Cộng đồng nào sẵn sàng trả tiền nhất

### Takeaway
Bằng chứng trả tiền rõ nhất: (1) **PTT Free_box** (thưởng P幣, 1–3 bài/tháng, 2025–10/2026); (2) **VOZ** (thuê 35k/7 ngày, 150k/100GB, thread hàng chục trang); (3) **Naver 지식iN và dcinside** (có người bán trả phí, người hỏi sẵn sàng gửi email); (4) Nhật (知恵袋 hỏi cách trả tiền tăng tốc, 5ch có thread mua tài khoản premium). Nội địa TQ có mức giá thấp nhất và không phải mục tiêu.

### Cited Findings
- PTT: "報酬：700P" cho 520MB (26/10/2026) — [PTT M.1793031046](https://www.ptt.cc/bbs/Free_box/M.1793031046.A.A15.html)
- VOZ: thuê 7 ngày 35k; 100GB giá 150k (snippet) — [VOZ 1043564](https://voz.vn/t/can-thue-tai-khoan-baidu.1043564/)
- Shop VN: SVIP 69–149k/tháng — [taikhoanpre](https://taikhoanpre.com/san-pham/tai-khoan-svip-baidu_4.html); 5k/GB — [itcuaban](https://itcuaban.com/sp/dich-vu-tao-tai-khoan-baidu-va-nang-cap-svip/)
- dcinside: "svip한달 충전해줄테니 계정 빌려줄 사람" (sẵn sàng tự trả SVIP, 04/06/2025); "바이두 다운로드 유료" — [dcinside baidu gallery](https://gall.dcinside.com/mgallery/board/lists/?id=baidu)
- Nhật: "課金してダウンロード速度を上げるには" [lịch sử 2022] — [q12255041172](https://detail.chiebukuro.yahoo.co.jp/qa/question_detail/q12255041172); 5ch "【プレ垢志願者】海外アップローダー★25垢目" (993 post) — [5ch subback](https://lavender.5ch.io/download/subback.html)
- TQ: khoảng 1 tệ/2GB, SVIP khoảng 15 tệ/tháng [lịch sử 2019] — [haibianshibei](https://www.haibianshibei.com/1767.html); [V2EX 533584](https://www.v2ex.com/t/533584)

### Inferences
- **Top 10 nơi nên ưu tiên (đã đào sâu ở vòng 3):** 1) VOZ thread 920891/1076520; 2) PTT Free_box; 3) Naver 지식iN; 4) dcinside 바이두 갤러리; 5) YouTube VN (hợp tác hoặc làm kênh riêng); 6) Yahoo!知恵袋; 7) arca.live kênh mod (Tullius v.v.); 8) taphoammo (gian hàng minh bạch); 9) Bahamut 電腦應用綜合討論; 10) Tinhte (bài hướng dẫn dài).
- Theo phán đoán của tôi, sức mua tính theo tiền tệ cao nhất có lẽ ở Hàn, Nhật và Đài Loan (thu nhập cao, quen trả tiền cho host premium), còn VN có khối lượng lớn nhất nhưng giá thấp. Đây là suy luận, không có dữ liệu doanh thu.
- Nguyên tắc tham gia trung thực chung: tài khoản thật đứng tên thương hiệu; câu trả lời phải giải quyết được vấn đề ngay cả khi người đọc không dùng dịch vụ; công khai "tôi vận hành dịch vụ X"; miễn phí cho file nhỏ; không tạo tài khoản ảo hay tự hỏi tự trả lời; không đăng ở nơi nội quy cấm quảng cáo (PTT, 52pojie, r/Piracy); không giúp tải nội dung vi phạm bản quyền (mod/MMD trả phí).

### Gaps
- Không có dữ liệu chuyển đổi hay doanh thu theo quốc gia. Không đo được sức mua thực trong nhóm FB/Zalo VN.

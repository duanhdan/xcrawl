# SEO-01 – Keyword research & chiến lược content cho brand tải hộ Pan Baidu / CSDN (và các host Trung Quốc)

*Ngày: 28/09/2026. Phạm vi: organic search (Google là chính; Bing/YouTube/Naver/Yahoo JP là phụ). Toàn bộ white-hat.*

**Cách đọc ước lượng trong tài liệu này (quan trọng):** không có công cụ Ahrefs/Semrush/GSC trong phiên này. Volume và độ khó là **ước lượng định tính** dựa trên: (a) Google Autocomplete (endpoint `suggestqueries.google.com`, gọi theo `hl`/`gl` từng thị trường, 28/09/2026), (b) thành phần SERP thực tế qua WebSearch, (c) mật độ thread hỏi đáp trên forum (VOZ, HF Forums, itch.io, dcinside, theqoo, Yahoo!知恵袋, GitHub issues), (d) số nhà cung cấp đang trả tiền/đầu tư content cho từ khóa đó (tín hiệu thương mại). Thang volume: **XS** (<100/tháng), **S** (100–500), **M** (500–2.000), **L** (2.000–10.000), **XL** (>10.000). Thang độ khó (KD): **Dễ / Vừa / Khó** theo loại trang đang rank (forum/gist/blog nhỏ = Dễ; tool page có brand + backlink = Vừa; Wikipedia/tenorshare/multcloud = Khó ở vị trí đó nhưng dễ vượt bằng nội dung tốt hơn). Khi có số liệu thật từ GSC/Ahrefs sau 4–8 tuần vận hành, cập nhật lại bảng.

---

## 0. Tóm tắt điều hành

1. **Thị trường EN là lớn nhất và đang bị "gist/forum spam" của đối thủ chiếm SERP** (gist GitHub, HF Forums, itch.io, caimogu, tek-tips… đều là bài PR của baidufast/erranium/baidudl/baidudownloader). Google vẫn xếp các gist này top 3–5 cho "how to download from pan.baidu without account" → **rào cản nội dung rất thấp**; một bài pillar 2.500–3.500 từ có số liệu đo thật + tool page có free tier sẽ vượt được trong 2–4 tháng.
2. **Cụm từ khóa lõi EN** (ước lượng L–XL gộp): `download from baidu without account`, `baidu pan downloader (online)`, `pan baidu download link generator`, `baidu netdisk download`, `how to download from baidu pan`. Modifier lặp lại trong autocomplete: *without account / without login / without client / without app / without phone number / free / online / 2025 / 2026 / reddit / github / tampermonkey / extension / apk*.
3. **Cụm CSDN gần như bỏ trống ở EN/VI**: autocomplete chỉ có `csdn downloader (online/github)`, `csdn download without account`, `download csdn net`, VI `tải file csdn`, `mua tài khoản csdn`. Đối thủ chỉ có 1 product page (baidudownloader.com), 1 landing (baidudl.com/sc/…), 1 câu hỏi Quora, vài repo GitHub tiếng Trung. **Đây là cụm dễ chiếm #1 nhất.**
4. **Tiếng Việt**: từ khóa rõ ràng và có intent thương mại (`tải file baidu không cần tài khoản`, `tải hộ file baidu`, `tải hộ pan baidu`, `thuê tài khoản baidu`, `mua svip baidu`, `tải file csdn`). SERP là blog cũ (2018–2023, makerlab, fastviet, itcuaban, hocdohoacaptoc, sieuthuthuat, queenmobile) với hướng dẫn "thêm wp vào link" **đã chết** → cơ hội "bài cập nhật 2026 duy nhất còn đúng".
5. **Thị trường phụ đáng làm ngay** (có nhu cầu thật, có autocomplete/forum): **Hàn Quốc** (MMD/mod/K-fandom: dcinside, arca.live, theqoo, "바이두 다운로드 하는법/안됨/속도"), **Nhật** (Yahoo!知恵袋, Qiita, "baidu ダウンロード 遅い/アカウントなし"), **Indonesia** (autocomplete EN-hoá: "download pan baidu without account", "cara download pan baidu"), **Tây Ban Nha / Bồ Đào Nha** ("descargar de baidu sin cuenta 2025", "como baixar arquivos do baidu"), **Nga/Thái/Malaysia** ở mức nhỏ. **Ả Rập**: autocomplete toàn "baidu browser/spark/wifi" → không có nhu cầu Pan → bỏ.
6. **Điểm khác biệt duy nhất mà đối thủ không chứng minh được**: chúng tôi có SVIP/VIP thật. Content E-E-A-T = **speed-test công khai có timestamp hàng tuần**, video màn hình không cắt, trang "status" thời gian thực, case study theo file thật (dataset, mod, firmware). Không ai trong nhóm đối thủ làm điều này một cách hệ thống (baidufast chỉ ghi "19 MB/s"/"39 MB/s" trong bài PR).
7. **Cấu trúc đề xuất**: 5 pillar (Baidu Pan, CSDN, "Chinese cloud hosts" hub, Lỗi/Troubleshooting, Tài khoản & SVIP) + ~60 cluster page + programmatic pages theo **host × ngôn ngữ × use-case × lỗi**. Lịch 90 ngày: 48 bài viết + 12 video dài + 24 Shorts + 6 tài sản (bảng so sánh, infographic, speed-test dashboard).

---

## 1. Keyword universe theo cụm và intent

Ký hiệu intent: **T** = transactional (muốn dùng dịch vụ/tool ngay), **I** = informational (tìm cách/giải thích), **N** = navigational (tìm brand/site cụ thể), **C** = commercial investigation (so sánh, review, giá).

### 1.1 Thị trường tiếng Anh (toàn cầu)

#### Cụm A – "Download without account/login/client" (lõi, T/I)

| Từ khóa | Intent | Volume (ước) | KD (ước) | Tín hiệu |
|---|---|---|---|---|
| how to download from baidu without account | I→T | L | Vừa | Autocomplete gợi ý ngay ở "how to download from baidu"; SERP: hovatek forum (2017), gist erraz1, steemit, multcloud, baidulinkdownloader (home + resource), erranium, robots.net, tenorshare |
| download from baidu without account 2025 / 2026 | I→T | M | Dễ | Autocomplete có cả "2025" và "2026" → người dùng biết hướng dẫn cũ đã chết |
| pan.baidu.com download without account (free) | T | M–L | Vừa | Autocomplete cho seed `pan.baidu.com` (hl=vi/en) |
| baidu pan download without login | T | M | Vừa | Autocomplete |
| download from baidu without client / without app | I→T | M | Dễ | Autocomplete; nỗi đau "bắt cài client" |
| download from baidu cloud without account | I→T | M | Vừa | Autocomplete cho "baidu cloud" |
| baidu without phone number / baidu pan without phone number | I | S–M | Dễ | Autocomplete; nhu cầu "không có SĐT +86" |
| download pan baidu files without account | T | S–M | Vừa | Autocomplete (id/th/en) |
| how to download from pan baidu without account github / reddit | I | S | Dễ | Người dùng tìm nguồn "cộng đồng" – có thể chiếm bằng repo/README + trả lời Reddit thật |

#### Cụm B – "Downloader / link generator / tool" (T, giá trị chuyển đổi cao nhất)

| Từ khóa | Intent | Volume | KD | Tín hiệu |
|---|---|---|---|---|
| baidu pan downloader / pan baidu downloader | T | L | Vừa–Khó | Top: tenorshare (bài listicle), erranium, baidulinkdownloader, baidudl, baidudownloader, gist |
| baidu pan downloader online / pan baidu downloader online | T | M–L | Vừa | Autocomplete ở en/id/ms/th/vi |
| pan baidu download link generator free / baidu pan link generator | T | M | Vừa | Autocomplete; SERP: chinabaiduseo, gizdev, xdarom (bài cũ), erranium, baidudownloader |
| baidu pan direct link generator / direct link / direct download | T | S–M | Vừa | Autocomplete (ms/th/pt) |
| baidu link downloader / baidu pan link downloader | T/N | M | Vừa | Trùng brand baidulinkdownloader.com |
| baidu downloader (free / online / github / extension / script / apk / 2026) | T | L (nhưng nhiễu với "Baidu Browser/app") | Vừa | Autocomplete; cần disambiguation trong content |
| baidu netdisk downloader | T | M | Vừa | Autocomplete |
| baidu cloud downloader (free/online/github) | T | M | Vừa | Autocomplete |
| pan baidu downloader tampermonkey / extension / chrome extension | I→T | S–M | Dễ | Người dùng kỹ thuật; bài "tại sao script hỏng, dùng gì thay" |
| pan baidu downloader apk / android | T | S | Dễ | Autocomplete id/en |
| pandownload / pandownload web / pandownload online / pandownload alternative | I→T | M | Dễ | Autocomplete; PanDownload chết 2020 nhưng brand vẫn được tìm |
| baidu leech / baidu leecher / baidu link leecher | T | S | Dễ | Autocomplete; thuật ngữ cộng đồng debrid/VN |
| chinese cloud downloader / chinese cloud storage download | T | S | Dễ | Autocomplete ("ultimate chinese cloud storage downloader" = tagline của baidulinkdownloader) |
| baidu pan to google drive / transfer pan.baidu.com link to google drive | T | S–M | Dễ | Autocomplete có cả câu dài; cách giao hàng của fastdown/baidudownloader |
| baidu pan jdownloader / aria2 / idm | I | S | Dễ | Kỹ thuật; ta có thể cung cấp API/direct link tương thích |

#### Cụm C – Tốc độ, giới hạn, lỗi (I, cực kỳ dễ, nhiều long-tail cho programmatic)

| Từ khóa | Intent | Volume | KD |
|---|---|---|---|
| baidu netdisk slow download / baidu pan download speed / baidu pan speed up | I | S–M | Dễ |
| baidu netdisk speed limit / bypass baidu download speed limit | I | S | Dễ (GitHub issue BaiduExporter đang rank) |
| baidu pan download stuck / 403 / "file does not exist" / "link expired" / "extraction code error" / "分享已失效" | I | XS–S mỗi cụm, cộng dồn M | Dễ (không có trang EN nào chuyên) |
| baidu pan extraction code (提取码) what is / where to enter | I | S | Dễ |
| baidu pan large file / folder download / download folder without client | I | S | Dễ |
| baidu pan mac / linux download | I | S | Dễ |
| is pan baidu safe / what is pan baidu | I | M | Vừa (Wikipedia) – làm bài "What is Pan Baidu" để lấy featured snippet |

#### Cụm D – Tài khoản, SVIP, giá (I/C)

| Từ khóa | Intent | Volume | KD |
|---|---|---|---|
| pan baidu register / sign up / account / how to register / baidu pan overseas | I | M–L | Vừa–Khó (hongkiat, marketingtochina, sekkei, infinityfolder, Quora) |
| baidu svip / baidu svip price / baidu svip account / baidu svip paypal / pan baidu premium account | C/T | S–M | Dễ |
| baidu netdisk international / baidu netdisk english | I/N | M | Vừa |
| baidu pan account reddit | I | S | Dễ |

#### Cụm E – CSDN (T/I, gần như trống)

| Từ khóa | Intent | Volume | KD |
|---|---|---|---|
| csdn downloader / csdn downloader online / csdn file downloader | T | S–M | Dễ (SERP: gist, greasyfork script cho *blog*, app store – lệch intent) |
| csdn download without account | T | S | Dễ (baidudl landing, baidudownloader product, Quora) |
| download csdn net / download.csdn.net | N→T | S–M | Dễ |
| csdn download free / csdn points / csdn vip / csdn 积分 | I | XS–S | Dễ |
| csdn 1 click downloader | T | XS | Dễ (Greasyfork) |

#### Cụm F – Host Trung Quốc khác (mở rộng, T)

Từ autocomplete: `quark pan download (online / without login / reddit / github)`, `pan quark downloader free`, `123pan downloader (online / without account / github)`, `weiyun download without account/login`, `xunlei download without account`, `aliyundrive download without account`, `baidu wenku downloader (online) / baidu wenku free download / wenku baidu com download pdf`, `lanzou download` (rất nhỏ), `115 netdisk download` (không có autocomplete). Quark và 123pan là hai host có tín hiệu mạnh nhất sau Baidu (123pan bắt buộc login từ 26/11/2025 theo chinacloudguide → nhu cầu tăng).

#### Cụm G – Use-case / vertical (I→T, long-tail cho pSEO)

Tín hiệu forum cho thấy 6 nhóm người dùng: (1) **AI/ML researcher** – dataset/checkpoint chỉ có link Baidu (HF Forums thread 160296 và 180125; GitHub issues LoD-Loc #21, PDDA #3, ATR-UMOD #5); (2) **game modder** – Monster Hunter Wilds, Stellar Blade (caimogu), MMD/Live2D (dcinside), Skyrim (arca.live tullius), itch.io asset; (3) **firmware/driver/router** (VOZ thread 1071687); (4) **anime/fansub/K-pop fandom** (theqoo japan/arashi); (5) **sinh viên/kỹ sư** cần tài liệu CSDN/Wenku; (6) **người học tiếng Trung** (chinese-forums). Từ khóa ví dụ: `download dataset from baidu pan`, `baidu pan mirror google drive`, `download mod from baidu pan`, `mhw mod baidu`, `mmd model baidu download`, `router firmware baidu link`, `stm32 datasheet csdn download`.

### 1.2 Thị trường tiếng Việt

| Từ khóa | Intent | Volume | KD | Ghi chú |
|---|---|---|---|---|
| tải file baidu / tải file pan baidu / tải pan baidu | T/I | L | Vừa | Autocomplete đầu bảng; SERP là blog VN 2018–2023 |
| tải file baidu không cần tài khoản / tải file từ baidu không cần tài khoản / tải pan baidu không cần tài khoản | I→T | M–L | Dễ–Vừa | SERP: makerlab.vn, itcuaban, queenmobile, fastviet, hocdohoacaptoc, sieuthuthuat, 2 video YouTube, baidulinkdownloader/vi – hầu hết hướng dẫn "thêm wp"/"oneleaf.icu" đã chết |
| tải file baidu 2025 | I | S | Dễ | Người dùng biết bài cũ hỏng |
| tải hộ file baidu / tải hộ pan baidu / tải hộ baidu | T | S–M | Dễ | Autocomplete có cả 3 biến thể → intent thuê dịch vụ rõ; SERP: dichvuchina.vn, taikhoanpre, itcuaban |
| cách tải file pan baidu / cách tải pan baidu / tải link pan baidu | I | M | Dễ | |
| leech baidu / leech link baidu / leech pan baidu | T | S | Dễ | Thuật ngữ quen của dân leech VN; baidudownloader.com đã nhồi từ này |
| tài khoản baidu / tạo tài khoản baidu (2025, bằng số điện thoại việt nam) / mua tài khoản baidu / thuê tài khoản baidu / share tài khoản baidu / tài khoản baidu free | I/T | L (gộp) | Vừa | Cụm lớn nhất VI; SERP: taikhoanpre, itcuaban, facebook, muacash |
| svip baidu / mua svip baidu / tài khoản svip baidu / baidu svip paypal | T/C | S–M | Dễ | |
| baidu netdisk là gì / baidu pan là gì | I | S | Dễ | |
| tải file csdn / tài khoản csdn / mua tài khoản csdn / tạo tài khoản csdn / csdn là gì | T/I | S | Dễ | SERP: daynhauhoc, tinhte, code24h, taikhoanpre, itcuaban – không ai có bài chuẩn |
| baidu wenku / baidu wenku downloader / baidu wenku download | T | S | Dễ | Autocomplete VI trả về EN → chưa có content VI |
| tải file 123pan / 123pan / tải file quark / tải file trên pan quark | T | S | Dễ | Autocomplete có; itcuaban/taikhoanpre đã bán |
| aliyundrive downloader / aliyundrive download without account | T | XS–S | Dễ | |
| tải game trung quốc / tải mod / tải capcut trung quốc mod | I | L nhưng lệch intent | – | Chỉ dùng làm bài phụ trợ (hướng dẫn tải mod/game từ link Baidu) |

Lưu ý VI: `dịch vụ tải hộ` bị nhiễu ("xe tải", "cứu hộ") → không dùng làm keyword chính; dùng `tải hộ file baidu`.

### 1.3 Thị trường phụ (ưu tiên theo tín hiệu)

| Thị trường | Từ khóa nổi bật (autocomplete/forum) | Nhu cầu chính | Ưu tiên |
|---|---|---|---|
| **Hàn Quốc** (ko/kr) | 바이두 다운로드 하는법 / 안됨 / 실패 / 제한 / 속도 디시; 바이두 클라우드 다운로드 방법 / 파일 다운로드 / 가입; 바이두 넷디스크 설치 없이 / 가입없이 / 속도; 바이두 계정 없이 다운 | MMD/Live2D model, game mod, K-pop/J-pop fandom (theqoo, dcinside, arca.live, coolenjoy, namu.wiki) | **Cao** – autocomplete Hàn rất giàu, SERP là forum + namu.wiki, erranium/baidulinkdownloader đã có trang /ko |
| **Nhật** (ja/jp) | baidu ダウンロード方法 / 遅い / アカウントなし / 登録なし; 百度网盘 ダウンロード方法 / 遅い; pan baidu com ダウンロード方法 | Anime/doujin, dataset (Qiita), Yahoo!知恵袋 hỏi nhiều về tốc độ & an toàn; có dịch vụ tải hộ nội địa (500 yên/≤500MB theo locotabi) | **Cao** |
| **Indonesia** (id) | download baidu pan without account / pan baidu download free / cara download pan baidu / cara download file dari pan baidu / baidu netdisk mod apk / pan baidu downloader android | Game mod, APK, anime; người dùng tìm bằng EN lẫn ID | **Trung bình–Cao** (tiếng Anh phủ được 60%, cần 3–5 bài ID) |
| **Tây Ban Nha / LatAm** (es) | descargar de baidu sin cuenta (2025) / descargar de pan baidu sin cuenta | Mod, anime | Trung bình |
| **Brazil** (pt) | como baixar arquivos do baidu / baidu pan direct download / link downloader | Mod, anime (YouTube PT có video 2026) | Trung bình |
| **Nga** (ru) | baidu скачать файл / baidu netdisk скачать / csdn скачать; qna.habr hỏi | Kỹ thuật, CSDN | Thấp–Trung bình |
| **Thái** (th) | download baidu pan without account / วิธีโหลดไฟล์จาก baidu | Anime/game | Thấp–Trung bình (EN phủ được) |
| **Malaysia** (ms) | baidu pan direct link generator / cara download pan baidu | – | Thấp (EN phủ) |
| **Tiếng Trung (hải ngoại / Đài Loan)** | 百度网盘 海外 下载 / 国外手机号 注册 / 不限速 / 免积分下载 csdn | Hoa kiều, du học sinh | Trung bình – nhưng cạnh tranh với site TQ rất khó; chỉ làm 3–4 bài zh-TW |
| **Ả Rập** | Toàn "تحميل بايدو براوزر/سبارك/واي فاي" | Không có nhu cầu Pan | **Bỏ** |

---

## 2. Phân tích SERP 20 từ khóa chủ lực (28/09/2026, WebSearch, kết quả US-centric; cần kiểm tra lại bằng trình duyệt ẩn danh theo từng geo)

| # | Từ khóa | Ai đang rank (top ~8) | Loại nội dung | Điểm yếu có thể vượt |
|---|---|---|---|---|
| 1 | how to download from baidu without account | hovatek.com (forum 2017), gist erraz1, steemit, multcloud tutorial, baidulinkdownloader (home + /resources), baidu.erranium.com, robots.net, tenorshare | Forum cũ, gist PR, blog affiliate, tool page | Hướng dẫn cũ (JDownloader/IDM/"wp" trick) **không còn chạy**; gist không có E-E-A-T; tool page mỏng. → Bài 2026 có video + speed test + bảng "cách nào còn sống" |
| 2 | baidu pan downloader online | gist erraz1, multcloud, tek-tips thread 2025, Wikipedia, baidulinkdownloader, erranium, baidudownloader, baidudl | Gist, tool page, thread | Không trang nào có **tool ngay trên page + free tier rõ + giá minh bạch + speed proof**. Tek-tips/gist là PR |
| 3 | pan baidu download link generator free | gist, chinabaiduseo (blog SEO agency), gizdev (2020), xdarom (2023), erranium, baidulinkdownloader, baidudownloader, repo baidudl-1 | Blog lỗi thời | Nội dung cũ, tool đã chết; ta làm "link generator" thật với kết quả tức thì |
| 4 | download from baidu without account 2026 | HF Forums (PR baidufast), gist gonelove31, gist erraz1, 2 video YouTube 2026, multcloud, baidulinkdownloader, erranium | Forum PR, YouTube | Không có site nào giữ "changelog what works in 2026" → làm trang cập nhật hàng tháng |
| 5 | csdn downloader | gist pyremudune (PR), greasyfork "CSDN 1-Click Downloader" (chỉ export blog!), Google Play/App Store CSDN app, GitHub issue, alibabacloud, softonic | Lệch intent hoàn toàn | **Trống**: làm tool page + guide "CSDN 积分/VIP专享/付费 là gì" |
| 6 | csdn download without account | gist BaiduDownloader, YouTube, GitHub MELCHIOR-1, baidudl.com/sc/…, baidudownloader product, Quora, ilvruan | Landing mỏng | Chưa có bài giải thích cơ chế điểm + ảnh chụp + giá theo file |
| 7 | baidu netdisk slow download speed outside China fix | starhub community, GitHub issue BaiduExporter, alibabacloud topic, 51quickfox (VPN), inf.news | Forum/hỗ trợ ISP | Không ai có **số đo**; ta có biểu đồ free vs SVIP vs dịch vụ |
| 8 | baidu pan without phone number / register outside china | hongkiat, marketingtochina, sekkeidigitalgroup, chinese-forums, infinityfolder, Quora | Blog marketing agency (bias quảng cáo Baidu Ads) | Không nói tới Pan/tải file; ta làm "register vs skip registration" |
| 9 | baidu svip price / account | (ít trang EN) taikhoanpre, itcuaban (VI), Zhihu/befun (ZH) | Sản phẩm VN, blog TQ | Bài EN "Baidu SVIP price 2026 + how foreigners pay + cost per GB vs service" chưa tồn tại |
| 10 | tải file baidu không cần tài khoản | makerlab.vn, YouTube ×2, itcuaban blog, queenmobile, baidulinkdownloader/vi, fastviet, hocdohoacaptoc, sieuthuthuat | Blog VN cũ | Đều dạy "thêm wp/oneleaf/imwcr" đã chết → bài "Cập nhật 2026: cách nào còn chạy" + tool |
| 11 | tải hộ file baidu | dichvuchina.vn, taikhoanpre, itcuaban, dichvuchina.com, tinhte thread | Trang sản phẩm thủ công (Zalo) | Không có tự động, không có giá theo GB rõ, không nhận VietQR tự động |
| 12 | tài khoản baidu / thuê tài khoản baidu | taikhoanpre, itcuaban, facebook page, muacash | Trang bán acc | Bài so sánh "thuê SVIP vs tải hộ: cái nào rẻ hơn theo GB" chưa có |
| 13 | tải file csdn | daynhauhoc (Q&A), taikhoanpre, itcuaban, tinhte, code24h | Q&A cũ | Trống hoàn toàn về hướng dẫn chuẩn |
| 14 | baidu wenku downloader online | GitHub WenkuBaiduDL, PyPI wenku, YouTube, chinese-forums, scribd, duyhieu (VN) | Repo cũ | Không có dịch vụ EN niêm yết giá; cơ hội ngách |
| 15 | quark pan download without account / 123pan | itch.io (PR baidufast), gist, caimogu ×2 (PR erranium), baidulinkdownloader, erranium/quark-pan, chinacloudguide, quarkdownloader.com | Forum PR + tool | Chưa có so sánh 3 host + lý do 123pan khoá guest 11/2025 |
| 16 | pandownload alternative 2026 | 51cto, sohu, similarweb, Zhihu, 3dmgame (bản "phục sinh" – nguy hiểm), xiaoz.org | Blog TQ | Bài EN/VI "PanDownload chết, các bản 'phục sinh' là malware?, dùng gì" – dễ rank + an toàn người dùng |
| 17 | download dataset from baidu pan (research) | HF Forums ×2, GitHub issues, HF docs | Forum | Bài chuyên cho researcher: "Baidu-only dataset? 3 options + mirror etiquette" + CTA |
| 18 | 바이두 다운로드 하는법 / 계정 없이 | theqoo ×2, coolenjoy, namu.wiki, erranium/ko, baidulinkdownloader/ko, dcinside ×2, arca.live | Forum Hàn + trang dịch máy | Trang /ko của đối thủ là dịch máy; bài Hàn bản địa với ảnh chụp và ví dụ MMD/mod sẽ thắng |
| 19 | 百度网盘 ダウンロード方法 遅い | aliyun dev (ZH), Yahoo!知恵袋 ×2, multcloud/jp, blog 2018, apollomaniacs, koshishirai, Qiita | Q&A + blog cũ | Không có tool page JP có giá yên; làm bài JP + FAQ 知恵袋-style |
| 20 | baidu pan reddit | Không có thread Reddit rank; Wikipedia, tenorshare, itch.io | – | Reddit gần như trống → tham gia trả lời thật (r/DataHoarder, r/Piracy megathread không được, chọn r/Chinese, r/learnmachinelearning, r/gamemods, r/MMD) với disclosure rõ ràng |

**Kết luận SERP**: (1) hơn nửa SERP EN là **gist/forum PR do đối thủ tạo** – Google chấp nhận vì không có gì tốt hơn; (2) không đối thủ nào có trang **speed proof**, **status**, **changelog**, **error-code library**, **pricing calculator có schema**; (3) tenorshare/multcloud (DR cao) rank nhờ domain, nội dung mỏng, không có tool – có thể vượt bằng bài sâu + tool + video; (4) baidulinkdownloader và erranium là hai đối thủ SEO nghiêm túc nhất (đa ngôn ngữ /vi /ko /ru /es /pt /id, có resource/tutorial hub) → chuẩn tối thiểu phải đạt.

---

## 3. Chiến lược content

### 3.1 Kiến trúc pillar + cluster (hub-and-spoke)

**Nguyên tắc:** mỗi pillar là trang dài (2.500–4.000 từ) trả lời toàn bộ câu hỏi của cụm, link xuống 8–15 cluster page; cluster link ngược lên pillar và chéo nhau; tool page (chuyển đổi) được link từ mọi bài bằng CTA ngữ cảnh ("Paste your pan.baidu.com link → get file, free under X MB").

| Pillar (URL gợi ý) | Từ khóa chính | Cluster pages (ví dụ) |
|---|---|---|
| **P1 `/baidu-pan-download`** – "How to Download from Baidu Pan (pan.baidu.com) Without an Account – 2026 Guide" | how to download from baidu without account; baidu pan download | without client/app; without phone number; on Mac/Linux/Android/iPhone; folder & large file; extraction code là gì; link expired/file not found; speed limit thật sự bao nhiêu; PanDownload & script alternatives 2026; Tampermonkey scripts: why they break; register overseas vs skip; SVIP price & how to pay; Baidu → Google Drive; jDownloader/aria2/IDM |
| **P2 `/csdn-download`** – "How to Download from CSDN (download.csdn.net) Without Points, VIP or a Chinese Account" | csdn downloader; csdn download without account | 积分/C币/VIP专享/付费资源 giải thích; CSDN VIP price 2026; blog-only downloader vs file downloader (giải thích nhầm lẫn greasyfork); tải nhiều file; Quora-style FAQ; vertical: STM32/FPGA/MATLAB code from CSDN |
| **P3 `/chinese-cloud-downloader`** – hub "Download from any Chinese cloud (Baidu, Quark, 123pan, Aliyun, Weiyun, Xunlei, Lanzou, 115, Wenku)" | chinese cloud downloader | 1 trang/host (xem pSEO), bảng so sánh host (giới hạn guest, tốc độ, login policy, ngày thay đổi chính sách) |
| **P4 `/baidu-pan-errors`** – "Baidu Pan Error & Message Library (Chinese → English)" | baidu pan error / 分享已失效 / 文件不存在 | 1 trang/lỗi (xem pSEO) |
| **P5 `/baidu-account-svip`** – "Baidu Account & SVIP: register, price, pay from abroad, or skip it entirely" | pan baidu register; baidu svip | overseas registration 2026; virtual number risks; SVIP vs VIP; monthly vs yearly; Alipay/WeChat for foreigners; account bans/limits (黑号); cost per GB comparison |

Trang **thương mại** đứng ngoài pillar nhưng là đích CTA: `/` (tool), `/pricing` (calculator theo GB + schema `Product`/`Offer`), `/speed-test` (E-E-A-T), `/status`, `/compare/*` (so sánh với từng đối thủ – trung thực, có bảng cập nhật ngày), `/for/researchers`, `/for/modders`, `/for/students`.

### 3.2 Programmatic SEO (pSEO) – chỉ làm khi mỗi trang có dữ liệu riêng thật; không nhân bản text

**Chiều 1 – Host (10–15 trang):** `/download/{host}` với host ∈ {baidu-pan, quark-pan, 123pan, aliyundrive/alipan, weiyun, xunlei, lanzou, 115, uc-drive, feemoo, ctfile, baidu-wenku, csdn, doc88, book118}. Dữ liệu riêng: chính sách guest hiện tại, giới hạn file, tốc độ đo được, ảnh chụp giao diện có chú thích tiếng Anh, "last verified" date, giá dịch vụ, FAQ riêng. Baidudl và erranium đã làm dạng này → ta phải hơn ở **speed data + last-verified + status**.

**Chiều 2 – Lỗi/thông báo (15–25 trang):** `/baidu-pan-errors/{slug}`: 分享的文件已经被取消了 / 链接已失效 / 啊哦，你来晚了 / 文件不存在 / 提取码错误 / 此链接分享内容可能因为涉及侵权… / 由于网络环境… / 下载失败 / 客户端下载 required / 403 khi dùng IDM / "0 KB/s" 黑号 / 验证手机 / 海外无法注册… Mỗi trang: ảnh chụp thông báo gốc, dịch, nguyên nhân, "can a fetcher help? yes/no" (trung thực: link đã bị xoá thì không ai tải được), CTA phù hợp.

**Chiều 3 – Ngôn ngữ (hreflang):** en (x-default), vi, ko, ja, id, es, pt-BR, ru, th, zh-TW. Không dịch máy toàn site; ưu tiên dịch **tool page + pricing + pillar P1 + 3 cluster top** cho mỗi ngôn ngữ, rồi mở rộng theo GSC. Mỗi ngôn ngữ cần 1 trang "use case bản địa" (Hàn: MMD/mod; Nhật: 同人/dataset; ID: game mod/APK; VI: firmware/tài liệu/khoá học).

**Chiều 4 – Use case / "how to download X from baidu" (20–40 trang):** `/guides/download-{topic}-from-baidu-pan` với topic có tín hiệu thật: ML datasets & checkpoints; game mods (MHW, Stellar Blade, Skyrim, Genshin/HSR mods); MMD/Live2D models; Unity/Unreal assets; router firmware & drivers; STM32/ESP32/FPGA sample code (CSDN); Chinese textbooks/PDF (Wenku); fonts; anime/drama subtitles; LoRA/Stable Diffusion models (Civitai-style Chinese mirrors); CAD/3D print files. Mỗi trang cần ví dụ link thật (public, hợp pháp), ảnh, lưu ý bản quyền, FAQ riêng.

**Chiều 5 – So sánh (8–12 trang):** `/compare/{brand}-alternative` cho baidufast, baidudl, baidulinkdownloader, erranium, fastdown, multcloud, terabox (giải thích không liên quan), pandownload; và `/vs/` ta-vs-họ bằng bảng cập nhật giá theo ngày, trung thực, có nguồn. Không nói xấu, chỉ so số.

**Kiểm soát chất lượng pSEO:** mỗi trang ≥ 400 từ riêng + ≥ 1 dữ liệu độc quyền (speed, ảnh, ngày verify); `noindex` trang chưa đủ dữ liệu; sitemap riêng; internal link tự động (host ↔ lỗi ↔ use case).

### 3.3 Content chứng minh "SVIP thật" (E-E-A-T)

1. **Trang `/speed-test` công khai, cập nhật tự động hàng tuần**: cùng 1 file test (vd 2 GB, 10 GB) tải bằng (a) tài khoản free, (b) SVIP client, (c) dịch vụ của ta → thời gian, MB/s, ảnh chụp có timestamp, hash file. Xuất biểu đồ + CSV tải về. Đây là tài sản được trích dẫn (linkable asset) và là bằng chứng "chúng tôi không đi qua bên thứ ba".
2. **Video màn hình không cắt** (YouTube, 3–6 phút): dán link → nhận file, hiển thị đồng hồ và trang SVIP status của tài khoản (che thông tin nhạy cảm). Một video/host, làm lại mỗi quý vì Google/YouTube ưu tiên "2026".
3. **Case study theo file thật**: "20 GB MHW mod pack in 9 min", "12 GB ML dataset for a lab in Germany", "CSDN VIP-only STM32 project for a student in Hanoi" – có ảnh, thời gian, chi phí; xin phép khách ẩn danh.
4. **Trang `/status`** (uptime, hàng đợi, số GB đã xử lý hôm nay, tài khoản SVIP còn hạn – hiển thị ngày hết hạn SVIP) + `/changelog` ("Baidu changed X on date Y; what still works").
5. **Trang tác giả/đội ngũ** có tên thật, kinh nghiệm, ảnh; bài viết ký tên; ngày cập nhật hiển thị; nguồn trích dẫn ra ngoài (Baidu help, CSDN help, Zhihu, GitHub) – Google đánh giá "experience" qua chi tiết chỉ người làm thật mới biết (mã lỗi, giới hạn 黑号, quota CSDN 20 lượt/ngày…).
6. **Minh bạch giới hạn**: bài "What we can't download" (link đã xoá, file vi phạm bị Baidu chặn, private folder) – tăng niềm tin và giảm ticket.
7. **Review thật**: chỉ thu review qua email sau đơn thành công (Trustpilot/Google Business), không mua/không tự viết.

### 3.4 Lịch biên tập 90 ngày (48 bài + tài sản; EN trừ khi ghi khác)

Quy ước: **T/I/C/N** = intent; định dạng: Tool = trang công cụ, Pillar, Guide, pSEO, Compare, Asset, VI/KO/JA = bản ngôn ngữ.

**Tháng 1 (tuần 1–4): nền móng + cụm lõi EN/VI**

| Tuần | Bài | Keyword chính | Intent | Định dạng |
|---|---|---|---|---|
| 1 | Trang chủ/Tool "Baidu Pan Downloader – paste link, free under X MB" | baidu pan downloader online | T | Tool + FAQ schema |
| 1 | `/pricing` + calculator | baidu download service price / per GB | C | Tool |
| 1 | P1 pillar: How to download from Baidu Pan without an account (2026) | how to download from baidu without account | I→T | Pillar 3.500 từ + video |
| 1 | `/speed-test` (đợt đo đầu tiên) | baidu pan download speed / svip speed | I | Asset |
| 2 | Download from Baidu without the client/app (why Baidu forces the client) | download from baidu without client | I | Guide |
| 2 | Baidu Pan extraction code (提取码): what it is, where to enter, common errors | baidu pan extraction code | I | Guide |
| 2 | VI: Cách tải file Pan Baidu không cần tài khoản (cập nhật 2026 – cách nào còn chạy) | tải file baidu không cần tài khoản | I→T | Pillar VI + tool VI |
| 2 | VI: Trang tải hộ + bảng giá VND, VietQR/Momo | tải hộ file baidu / tải hộ pan baidu | T | Tool VI |
| 3 | P2 pillar: CSDN download without points/VIP/account | csdn downloader | I→T | Pillar + tool CSDN |
| 3 | CSDN 积分, C币, VIP专享, 付费资源 explained (+ VIP price 2026) | csdn points / csdn vip | I | Guide |
| 3 | Baidu Netdisk slow? Real numbers: free vs SVIP vs fetcher (with charts) | baidu netdisk slow download | I | Guide + data |
| 3 | PanDownload is dead: 2026 alternatives (and why "revived" builds are risky) | pandownload alternative | I | Guide |
| 4 | Tampermonkey/"直链助手" scripts in 2026: why they break, success rate, safe use | pan baidu downloader tampermonkey | I | Guide |
| 4 | Register a Baidu account outside China (2026) – or skip it | pan baidu register / baidu without phone number | I | Guide (P5 seed) |
| 4 | VI: Tải file CSDN: 积分 là gì, VIP专享, cách tải không cần tài khoản | tải file csdn | I→T | Guide VI |
| 4 | `/status` + `/changelog` | – | N | Asset |

**Tháng 2 (tuần 5–8): hub host + lỗi + so sánh + KO/JA**

| Tuần | Bài | Keyword | Intent | Định dạng |
|---|---|---|---|---|
| 5 | P3 hub: Download from any Chinese cloud – host comparison table | chinese cloud downloader | T/C | Pillar + bảng |
| 5 | pSEO host: Quark Pan | quark pan download without login | T | pSEO |
| 5 | pSEO host: 123pan (login required since 26/11/2025) | 123pan downloader | T | pSEO |
| 5 | pSEO host: Baidu Wenku | baidu wenku downloader online | T | pSEO |
| 6 | P4 error library (index) + 8 trang lỗi đầu tiên | baidu pan link expired / file does not exist | I | pSEO |
| 6 | Baidu SVIP price 2026: monthly/yearly, promos, how foreigners pay, cost per GB vs fetcher | baidu svip price | C | Guide |
| 6 | KO: 바이두 계정 없이 다운로드하는 법 (2026) + tool /ko | 바이두 다운로드 하는법 | I→T | Pillar KO |
| 6 | JA: 百度网盘からアカウントなしでダウンロードする方法 (2026) + tool /ja | baidu ダウンロード方法 | I→T | Pillar JA |
| 7 | Compare: BaiduFast vs BAIDUDL vs Erranium vs BaiduLinkDownloader vs us (giá/GB, free tier, thanh toán, tốc độ đo) | best baidu pan downloader | C | Compare |
| 7 | Guide for researchers: Baidu-only datasets & checkpoints | download dataset from baidu pan | I→T | Use-case |
| 7 | Guide for modders: MHW/Stellar Blade/Skyrim mods on Baidu/Quark | download mod from baidu pan | I→T | Use-case |
| 7 | VI: Thuê tài khoản SVIP Baidu hay tải hộ – tính theo GB cái nào rẻ hơn | thuê tài khoản baidu / mua svip baidu | C | Guide VI |
| 8 | Baidu Pan → Google Drive / direct link: delivery options explained | baidu pan to google drive | I | Guide |
| 8 | Download Baidu Pan folders & >4 GB files without the client | baidu pan folder download | I | Guide |
| 8 | pSEO host: Aliyun/Alipan, Weiyun, Xunlei (3 trang) | aliyundrive download without account… | T | pSEO |
| 8 | KO use-case: MMD/Live2D 모델 바이두 다운로드 | mmd 바이두 | I→T | Use-case KO |

**Tháng 3 (tuần 9–13): mở rộng ngôn ngữ, use case, tài sản link-bait**

| Tuần | Bài | Keyword | Intent | Định dạng |
|---|---|---|---|---|
| 9 | ID: Cara download dari Pan Baidu tanpa akun (2026) + tool /id | cara download pan baidu | I→T | Pillar ID |
| 9 | ES: Cómo descargar de Baidu Pan sin cuenta (2026) | descargar de baidu sin cuenta | I→T | Pillar ES |
| 9 | PT-BR: Como baixar arquivos do Baidu Pan sem conta (2026) | como baixar arquivos do baidu | I→T | Pillar PT |
| 9 | 8 trang lỗi tiếp theo (P4) | … | I | pSEO |
| 10 | "State of Baidu Pan for overseas users 2026" – báo cáo số liệu (speed, chính sách, giá) – link-bait | baidu pan overseas | I | Asset/report |
| 10 | Is Pan Baidu safe? What is Pan Baidu? (snippet-targeted) | is pan baidu safe / what is pan baidu | I | Guide |
| 10 | Baidu account limits & "黑号": why free accounts drop to 0 KB/s | baidu pan 0 kb/s | I | Guide |
| 10 | VI: Tải tài liệu Baidu Wenku / Doc88 / book118 | baidu wenku | T | Guide VI |
| 11 | Use-case: firmware/drivers/router ROMs on Baidu | router firmware baidu | I→T | Use-case |
| 11 | Use-case: Chinese textbooks & PDFs (Wenku) for learners | baidu wenku pdf download | I→T | Use-case |
| 11 | JA use-case: dataset/同人 + Yahoo!知恵袋-style FAQ | 百度网盘 ダウンロード 遅い | I | Guide JA |
| 11 | RU: Как скачать с Baidu Pan без аккаунта (2026) | baidu скачать файл | I→T | Pillar RU |
| 12 | jDownloader/aria2/IDM with our direct links (API docs) | baidu pan jdownloader | I | Docs |
| 12 | Compare: Baidu SVIP vs renting an account vs a fetcher – legal/safety/cost | baidu svip account | C | Compare |
| 12 | TH + zh-TW pillar (rút gọn) | download baidu pan without account (th) / 百度网盘 海外 下载 | I→T | Pillar |
| 13 | Cập nhật speed-test quý, refresh P1/P2 với "Last verified", tổng hợp GSC → kế hoạch 90 ngày tiếp | – | – | Maintenance |

### 3.5 Phân phối & backlink white-hat

- **Trả lời thật** trên nơi người dùng đang hỏi (HF Forums, GitHub issues "mirror request", itch.io, VOZ, dcinside/arca.live, Yahoo!知恵袋, Reddit r/DataHoarder r/learnmachinelearning r/MMD r/Genshin_Mods…): nêu đủ lựa chọn (đăng ký, SVIP, script, dịch vụ) và **công khai là nhân viên**. Không tạo gist/thread giả mạo người dùng như đối thủ (rủi ro bị Google/GitHub dọn dẹp và mất uy tín).
- **Digital PR**: báo cáo "State of Baidu Pan 2026" gửi cho blog AI/ML, blog modding, trang tin tech VN (Tinhte, GenK) và JP/KO.
- **Open-source**: SDK/CLI nhỏ (paste link → API) trên GitHub với README có link về docs; giúp chiếm autocomplete "github".
- **Đối tác**: cross-link với premiumdownloader.net (dofollow ở bài blog liên quan, không phải banner sponsored), baidudownloader.com (bài so sánh chung).
- **Cộng đồng researcher**: đề nghị tác giả repo thêm dòng "International users: see X" trong README (chỉ khi họ đồng ý).

---

## 4. Content đa định dạng

### 4.1 YouTube (kênh EN + playlist VI/KO/JA phụ đề)
- **Tutorial dài (5–8 phút, 1/tuần)**: "How to download from pan.baidu.com without an account (2026, works today)", "Download CSDN files without points", "Quark/123pan without +86", "Baidu Pan slow? free vs SVIP vs fetcher speed test", "PanDownload alternatives 2026". Tiêu đề chứa năm; mô tả có timestamp, link tool, FAQ; ghim comment "last verified".
- **Speed test live/không cắt (1/tháng)**: tải 10 GB thật, hiển thị đồng hồ.
- **Case study (1/tháng)**: theo use case (dataset, mod, firmware).
- YouTube là SERP thứ hai cho từ khóa này (Google hiển thị video carousel cho "how to download from baidu 2026"); các video đối thủ (BAIDUDL, erranium) là screencast thô 2–3 phút → dễ vượt bằng chất lượng.

### 4.2 Shorts / TikTok / Reels (2/tuần, 20–45 giây)
- "Link pan.baidu.com không mở được? 3 lý do", "提取码 là gì", "Tải 20 GB Baidu trong 9 phút", "Baidu free 96 KB/s vs SVIP 10 MB/s", "CSDN VIP专享 nghĩa là gì", "123pan giờ bắt login – làm sao", "Script Tampermonkey hỏng – vì sao". Mỗi Short dẫn về guide tương ứng (link in bio/comment). Làm 3 bản ngôn ngữ (EN/VI/KO) từ 1 footage.

### 4.3 Infographic (embed trong pillar, cho phép reuse có ghi nguồn → backlink)
- "Anatomy of a Baidu share link" (URL + 提取码 + hạn 1/7/30 ngày/vĩnh viễn).
- "Why Baidu Pan is slow abroad" (throttle, client, IP).
- "Chinese cloud hosts guest policy map 2026" (host × giới hạn × ngày đổi chính sách).
- "Cost per GB: SVIP vs rent account vs fetchers" (cập nhật quý).
- "CSDN download types: 积分 / C币 / VIP专享 / 付费".

### 4.4 Bảng so sánh (HTML table có schema, cập nhật ngày, nguồn từng ô)
- Dịch vụ tải hộ (ta, baidufast, baidudl, erranium, baidulinkdownloader, fastdown, baidudownloader, dichvuchina, itcuaban, taikhoanpre): free tier, giá GB đầu, GB thêm, trần, host, giao hàng, thời gian giữ file, thanh toán, hỗ trợ.
- Host Trung Quốc: guest download?, giới hạn size web, cần client?, tốc độ free, SVIP giá.
- Cách tải Baidu 2026: đăng ký / SVIP / script / OpenList / BaiduPCS-Go / fetcher – "còn chạy?", rủi ro, chi phí, kỹ năng cần.
- Số liệu lấy từ docs/research/02 (giá đối thủ) – cập nhật lại trước khi publish.

### 4.5 Tài sản tương tác
- Calculator "How much will my link cost?" (dán link → size → giá, so với SVIP tháng).
- "Baidu error decoder": dán thông báo tiếng Trung → giải thích + có tải được không.
- Live speed-test dashboard (CSV public).

---

## 5. Kỹ thuật SEO tối thiểu & đo lường

- Domain: 1 domain chính, thư mục ngôn ngữ `/vi/`, `/ko/`… với hreflang; tránh subdomain mỗi ngôn ngữ.
- Schema: `SoftwareApplication`/`WebApplication` cho tool, `Product`+`Offer` cho pricing, `FAQPage`, `HowTo` (nếu còn được hiển thị), `Article` với `author`, `dateModified`.
- Core Web Vitals: tool page phải nhẹ (đối thủ dùng WordPress WooCommerce nặng).
- Theo dõi: GSC theo ngôn ngữ; sự kiện "paste link", "free download", "paid conversion" theo landing page; ranking 25 từ khóa chủ lực hàng tuần; tỉ lệ bài/video có "last verified" < 90 ngày.
- Mục tiêu 90 ngày (ước): top 10 cho ≥ 10/25 từ khóa EN lõi, top 3 cho ≥ 6 từ khóa VI, top 5 cho 3–4 từ khóa CSDN; 5.000–15.000 organic session/tháng vào cuối tháng 3 (ước lượng thô từ quy mô SERP hiện tại; điều chỉnh khi có GSC).

## 6. Rủi ro & ranh giới white-hat

- Không tạo gist/forum thread giả mạo người dùng (đối thủ đang làm); mọi post cộng đồng ghi rõ liên hệ với dịch vụ.
- Không review giả, không cloaking, không doorway page trùng nội dung; pSEO chỉ với dữ liệu riêng.
- Nội dung phải nhắc bản quyền và ToS (Baidu/CSDN) và "chỉ tải file bạn có quyền tải"; không hướng dẫn crack client.
- Chuẩn bị bài thay thế nếu Baidu/CSDN đổi chính sách (changelog giúp giữ traffic).

---

## 7. Nguồn đã dùng

Google Autocomplete (28/09/2026, `suggestqueries.google.com`, các cặp hl/gl: en/us, vi/vn, id/id, ms/my, th/th, ko/kr, ja/jp, ru/ru, es/es, pt/br, ar/sa, zh-TW/tw).

Research nội bộ: `/home/user/xcrawl/docs/research/01-cach-download-baidu-csdn.md`, `02-bang-gia-dich-vu-leech.md`, `03-baidudownloader-com.md`.

SERP/đối thủ/forum:
- https://discuss.huggingface.co/t/how-to-download-from-baidu-pan-pan-baidu-com-without-a-chinese-account-2026-notes-for-datasets-a-free-fetcher/180125
- https://discuss.huggingface.co/t/can-someone-with-a-chinese-baidu-netdisk-account-help-me-download-this-dataset/160296
- https://gist.github.com/gonelove31/7f055e2cf31532d082d602f6d0b53ded ; https://gist.github.com/erraz1/97ac8ef2b9f629c8c0620d79b0795749 ; https://gist.github.com/BaiduDownloader/de3732904045d9f78e9ab8e6c7f1b608 ; https://gist.github.com/pyremudune/47324898698381697caee765a0a95e11 ; https://gist.github.com/myheart111/c7240ff6bc6ec0265e93ad20869a03a7
- https://itch.io/t/7000435/free-tool-download-baidu-pan-quark-pan-123pan-share-links-without-a-chinese-account-mods-assets-packs ; https://itch.io/t/3669553/not-being-to-download-the-newest-version-in-baidu
- https://www.caimogu.org/post/16388.html ; https://www.caimogu.org/post/16263.html
- https://www.tek-tips.com/threads/how-to-download-from-pan-baidu-without-registration-in-2025.1835647/
- https://baidufast.com/ ; https://baidudl.com/ ; https://blog.baidudl.com/ ; https://baidudl.com/sc/download-files-from-csdn ; https://baidu.erranium.com/ ; https://baidu.erranium.com/tutorials/baidu-pan ; https://baidu.erranium.com/tutorials/quark-pan ; https://baidulinkdownloader.com/ ; https://baidulinkdownloader.com/resources/baidu/how-to-download-from-baidu-without-account ; https://baidulinkdownloader.com/vi ; https://baidulinkdownloader.com/ko ; https://fastdown.io/ ; https://baidudownloader.com/ ; https://baidudownloader.com/product/download-items-from-csdn-net/ ; https://quarkdownloader.com/ ; https://chinacloudguide.com/guides/download-baidu-pan-outside-china
- https://www.multcloud.com/tutorials/how-to-download-from-pan-baidu-1003.html ; https://www.multcloud.com/jp/tutorials/how-to-download-from-pan-baidu-1027.html ; https://www.tenorshare.com/knowledge/pan-baidu-downloader.html ; https://www.hovatek.com/forum/thread-20892.html ; https://robots.net/how-to-guide/how-to-download-from-baidu-without-account/ ; https://www.gizdev.com/download-files-from-pan-baidu-using-link-generator/ ; https://xdarom.com/how-to-download-files-from-pan-baidu-com/ ; https://www.chinabaiduseo.com/baidu-link-generator-the-key-to-unrestricted-baidu-downloads/
- Đăng ký/SVIP: https://www.hongkiat.com/blog/register-baidu-account-oversea/ ; https://marketingtochina.com/register-baidu-account-outside-china/ ; https://sekkeidigitalgroup.com/how-to-register-a-baidu-account-outside-china/ ; https://www.chinese-forums.com/forums/topic/59998-registering-a-baidu-account-from-overseas/ ; https://eyun.baidu.com/content/531542/ ; https://baiduwangpan.cc/ (bài 2026 về đăng ký hải ngoại)
- Tốc độ/lỗi: https://github.com/acgotaku/BaiduExporter/issues/415 ; https://community.starhub.com/conversations/internet-connectivity/slow-loading-speed-to-baidu-netdisk/5f23bdd79e66e65604e97ba7 ; https://developer.aliyun.com/article/1674461 ; https://koshishirai.com/en/baidu-download-error/ ; https://en.xiaoz.org/post/10793 ; https://en.xiaoz.org/post/13384
- PanDownload/script 2026: https://www.sohu.com/a/999289189_122439397 ; https://zhuanlan.zhihu.com/p/2014139563753354855 ; https://soft.3dmgame.com/down/366655.html (bản "phục sinh" – cảnh báo) ; https://www.similarweb.com/website/pandownload.com/competitors/
- CSDN: https://greasyfork.org/en/scripts/495557-csdn-1-click-downloader ; https://github.com/MELCHIOR-1/CSDN_Downloader ; https://github.com/DreamerLS1994/csdndownload ; https://www.quora.com/How-do-I-download-anything-from-csdn-net-without-account ; https://daynhauhoc.com/t/lam-sao-de-download-tai-lieu-tu-trang-download-csdn-net/70107 ; https://tinhte.vn/thread/ai-giup-em-tai-sach-tu-trang-csdn-net.2866966/
- Wenku: https://github.com/kovleventer/WenkuBaiduDL ; https://pypi.org/project/wenku/ ; https://www.chinese-forums.com/forums/topic/60298-tool-for-dowloading-baidu-weku-docin-etc/ ; https://duyhieu.com/product/wenku-downloader-download-from-wenku-baidu-com-without-account/
- Dataset/GitHub mirror requests: https://github.com/VictorZoo/LoD-Loc/issues/21 ; https://github.com/YanZhang-zy/PDDA/issues/3 ; https://github.com/supercpy/ATR-UMOD/issues/5
- Việt Nam: https://www.makerlab.vn/cach-tai-file-tu-baidu-khong-can-tai-khoan/ ; https://itcuaban.com/2-cach-download-tu-baidu-cloud-toc-do-cao-khong-can-tai-khoan/ ; https://fastviet.vn/cach-tai-link-baidu-toc-do-cao-khong-can-tai-khoan ; https://queenmobile.net/cach-tai-file-tu-pan-baidu-com-ma-khong-can-dang-nhap.html ; https://hocdohoacaptoc.com/tai-file-tren-pan-baidu/ ; https://sieuthuthuat.com/cach-tai-file-tu-pan-baidu-com.html ; https://dichvuchina.vn/dichvuchina-nhan-tai-ho-cac-tap-tin-cua-baidu-pan-123pan/ ; https://taikhoanpre.com/san-pham/tai-file-baidu-pan-quark-123pan-khong-can-tai-khoan_25.html ; https://taikhoanpre.com/san-pham/tai-khoan-svip-baidu_4.html ; https://itcuaban.com/sp/tai-khoan-baidu-netdisk-svip/ ; https://voz.vn/t/ho-tro-get-tai-nguyen-tren-pan-baidu-free.1076520/page-21 ; https://voz.vn/t/cac-thim-ai-co-tai-khoan-baidu-tai-giup-em-firmware-nay-cho-router-voi-a.1071687/ ; https://voz.vn/t/giup-em-download-file-pan-baidu.1205910/ ; https://tinhte.vn/thread/tai-file-tu-link-pan-baidu-com-khong-can-baidu-client.2669956/ ; https://www.youtube.com/watch?v=POGVbjNOKf4 ; https://www.youtube.com/watch?v=yTLgv8U2w40
- Hàn: https://theqoo.net/japan/1567943252 ; https://theqoo.net/arashi/250269801 ; https://coolenjoy.net/bbs/37/4102 ; https://namu.wiki/w/바이두윈 ; https://m.dcinside.com/board/dcmmd/8310 ; https://m.dcinside.com/board/dcmmd/19227 ; https://arca.live/b/tullius/8949614 ; https://singingdalong.blogspot.com/2020/08/Baidu-non-login-download.html
- Nhật: https://locotabi.jp/china/q/82356 ; https://detail.chiebukuro.yahoo.co.jp/qa/question_detail/q12276831532 ; https://detail.chiebukuro.yahoo.co.jp/qa/question_detail/q12255041172 ; https://qiita.com/h1day/items/644abedee107313f8af6 ; https://servercan.net/blog/2022/07/ ; https://www.apollomaniacs.com/ipod/howto_wechatpay_baiduyun_tool.htm
- Indonesia/ES/PT/RU: https://blogjeems.blogspot.com/2018/08/pan-baidu-downloader-download-file-dari.html ; https://baidulinkdownloader.com/id ; https://baidulinkdownloader.com/es ; https://baidulinkdownloader.com/pt ; https://baidulinkdownloader.com/ru ; https://www.youtube.com/watch?v=3o14U30ji6U ; https://tehnografi.com/ (RU) ; https://qna.habr.com/q/1250644
- YouTube EN: https://www.youtube.com/watch?v=p2tfqwhwO2w ; https://www.youtube.com/watch?v=Aeu_f-N4JFE ; https://www.youtube.com/watch?v=dVMjm0Sjkws ; https://www.youtube.com/watch?v=OezceQIgQ6w ; https://www.youtube.com/watch?v=hi3BnrVq77A ; https://www.youtube.com/watch?v=76NVPDUVVlU

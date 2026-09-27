# Nghiên cứu sâu: baidudownloader.com (đối tác banner của premiumdownloader.net)

Ngày khảo sát: 27/09/2026. Phương pháp: curl trực tiếp HTML (qua Cloudflare), WP REST API (`/wp-json`), WooCommerce Store API, RDAP (Verisign), Telegram preview, WebSearch/WebFetch. Những gì **không xác minh được** ghi rõ ở từng mục.

---

## 0. Tóm tắt nhanh

- **baidudownloader.com** là một shop **WordPress + WooCommerce** rất tối giản (3 "sản phẩm"), bán dịch vụ **leech thủ công/bán tự động từ pan.baidu.com sang Google Drive** ($0.99/1GB đầu, $0.5/GB tiếp) và **tải file từ download.csdn.net** (giá theo link). Không có gói tháng, không có GB pack, không có API công khai, không có trang blog/FAQ/pricing/how-it-works riêng (đều 404).
- Tự nhận là "iBuild software team", dùng **tài khoản Baidu SVIP của từng "worker"** + Google Drive để trung chuyển; giao hàng "vài phút đến vài giờ", tối đa 6 giờ khi quá tải; link GD sống 5 ngày.
- Domain đăng ký **04/07/2022** (Internet.bs), DNS/CDN Cloudflare, gia hạn tới 2029. Hỗ trợ qua Gmail + Telegram group **@BaiduDownloader_Help (955 thành viên)**.
- Quan hệ với premiumdownloader.net: **banner 980×120 trên trang chủ premiumdownloader.net** trỏ về `baidudownloader.com/?utm_source=premiumdownloader.net&utm_medium=banner` với `rel="nofollow sponsored"` (tức là quảng cáo trả phí/đối tác, không phải backlink SEO). **Không** thấy banner ngược lại trên baidudownloader.com.

---

## 1. Sản phẩm & quy trình

### 1.1. Sản phẩm (từ WooCommerce Store API `https://baidudownloader.com/wp-json/wc/store/v1/products`)

| ID | Tên sản phẩm | Giá niêm yết | Rating | URL |
|---|---|---|---|---|
| 12 | Transfer pan.baidu.com link to Google drive link service | $0.99 (1GB đầu), $0.5/GB tiếp | 4.96/5 (25 review) | https://baidudownloader.com/product/transfer-pan-baidu-com-link-to-googgle-drive-link/ |
| 11559 | Download items from CSDN.net without account | $0.01 (giá thật tính theo link) | 5.00/5 (2 review) | https://baidudownloader.com/product/download-items-from-csdn-net/ |
| 52844 | Bonus Item ("tip" cho team) | $5.00 | – | https://baidudownloader.com/product/bonus-item/ |

Danh mục duy nhất: "Download services". Tags: download, get link, google drive, max speed, pan.baidu.com, vip, without account, csdn.

**Host hỗ trợ: chỉ 2** — `pan.baidu.com` (file + folder, có/không mật khẩu 提取码) và `download.csdn.net` ("any CSDN.net link type"). Không hỗ trợ Quark, 123Pan, Weiyun, Xunlei, Lanzou... (khác với đối thủ baidulinkdownloader.com – xem mục 6).

### 1.2. Quy trình người dùng (nguyên văn trang sản phẩm Baidu)

1. Dán link pan.baidu.com + mật khẩu (nếu có). Hơn 10 link → liên hệ support để gộp thành 1 link.
2. Bấm **"Calculate Price"** → JS `link_checker.js` POST `surl`, `pwd`, `g-recaptcha-response` (và `uk`, `shareid` nếu có) tới **`/link_checker.php`** (CSDN: `/csdn_link_checker.php`). Server trả `size_text`, `round_qty`, `price`, `fileName` → điền quantity WooCommerce theo số GB (làm tròn).
3. Bấm "Buy Now" → checkout WooCommerce, nhập email (khuyến nghị Gmail) → thanh toán.
4. Nhận **email chứa link Google Drive** "usually in a few minutes to a few hours depending on the size". Cảnh báo: "orders will be delayed for a maximum of 6 hours. Please do not make an order if you cannot wait."
5. **Link sống 5 ngày** rồi bị xóa khỏi tài khoản GD của họ.

Trang thank-you (`/thank-you/`): "We are currently gathering and transferring data and will email you with a link in a few minutes to hours."

### 1.3. Tốc độ / giới hạn
- Không công bố tốc độ/giới hạn dung lượng. Review khách: "More than 500GB in a day" (06/2022), "folder > 100 GB, 1000 files ... 30 minutes" (01/2023), "1.6gb ... $1.3" (05/2023), "took a couple of hours" (04/2026).
- Review 29/07/2026: "Google said your file is infected with a virus. and finally given a backup link" → có cơ chế link dự phòng khi GD chặn virus.
- Cập nhật 10-May-2026 (Baidu) và 10-Aug-2026 (CSDN): **thêm reCAPTCHA v2** vì "some guys stole our API and then abused requests" → họ từng bị bên khác gọi trộm endpoint `link_checker.php`.

### 1.4. Các trang khác
- `/policy/` – chính sách (xem mục 5). `/how-to-pay-with-card/` – hướng dẫn PayPal guest checkout. `/downloader/` – bản sao trang sản phẩm Baidu. `/my-account/orders/`.
- **404**: `/pricing`, `/faq`, `/blog`, `/how-it-works`, `/contact`, `/terms`. WP REST `posts` trả `[]` → **không có bài blog nào**. Danh sách pages (`/wp-json/wp/v2/pages`): Shop (home), Cart, Checkout, My account, Policy (07/2022), Thank You (07/2022), Downloader (08/2022), How To Pay With Card (04/2024).

---

## 2. Bảng giá & thanh toán

| Dịch vụ | Giá | Đơn vị | Ghi chú |
|---|---|---|---|
| Baidu → Google Drive | **$0.99 cho 1GB đầu, $0.50 mỗi GB tiếp theo** | USD, pay-per-order theo dung lượng | Tính tự động qua link checker; làm tròn GB |
| CSDN download | "Prices depend on the input link" | USD | Niêm yết $0.01 làm placeholder |
| Bonus/tip | $5 | USD | tùy tâm |

- **Không có gói thuê bao, không GB pack, không tài khoản trả trước, không trial chính thức trên site.** Tuy nhiên nhiều nguồn ngoài (gist GitHub, kết quả tìm kiếm) nhắc mã **`FREEDOWNLOAD1GB`** cho file ≤1GB miễn phí và "Telegram group cung cấp tải miễn phí link Baidu dưới 4GB" — **chưa xác minh** mã còn hoạt động (không kiểm tra checkout). Nguồn: https://gist.github.com/qapovo/8ce21d7df7386a820b83b454f8fdc111
- **Thanh toán**: Policy ghi "PayPal or Stripe" (SSL). Trang "How To Pay With Card": PayPal Guest Checkout cho thẻ. Không thấy crypto. (Không xác nhận được Stripe có thực sự bật ở checkout hay không.)
- **Refund**: "strict no refund policy" (sản phẩm số coi như "used" sau khi tải/mở). Nếu không nhận link → email kèm mã giao dịch.

---

## 3. Kỹ thuật (suy luận từ HTML/JS/headers)

**Stack website**
- WordPress 7.1.1 + WooCommerce 11.0.1 + Site Kit by Google 1.187.0 (meta generator). Theme **`mts_schema`** (MyThemeShop "Schema"). Plugins nhìn thấy: `woo-extra-product-options` (THWEPOF – tạo field URL/Password/link_size), `woocommerce-notification` (popup "ai đó vừa mua" + âm thanh `cool.mp3` – social proof giả lập), WooCommerce Blocks checkout, `sourcebuster` (order attribution – nên UTM `utm_source=premiumdownloader.net` **được ghi vào đơn hàng** → họ đo được doanh thu từ banner của bạn).
- CDN/DNS: **Cloudflare** (`server: cloudflare`, NS `joselyn/major.ns.cloudflare.com`), HSTS preload, X-Frame-Options SAMEORIGIN. Email obfuscation của Cloudflare (`data-cfemail`).
- Tracking: Google Analytics 4 **`G-8VG0JH7ZFL`**; reCAPTCHA v2 sitekey `6LfgxwYhAAAAAI47cjLSAuD4959tkvyjouOIgx-g`.
- Fonts: Roboto Slab / Raleway (Google Fonts). `xmlrpc.php` còn mở, `wp-json` mở (lộ danh sách pages/products – rủi ro bảo mật nhẹ).
- Endpoint custom: `/link_checker.php`, `/csdn_link_checker.php` (PHP thuần đặt cạnh WP). Trong JS có dòng comment `// url :"http://pan.baidudownloader.net/link_checker.php"` → từng có backend riêng ở **`pan.baidudownloader.net`** (hiện không truy cập được qua proxy – 502; **chưa xác minh** domain còn sống).

**Cách họ leech (tự khai trên trang sản phẩm, mục "Why are we not free?")**
- "We must pay for the Super VIP Baidu account. **Each worker buys their SVIP account** to be ready when they have a job transfer." → mô hình **pool worker người thật, mỗi worker giữ 1 tài khoản SVIP**, không phải cheat/hack Baidu.
- "We must pay for the human and system monitoring to download the item from Baidu Pan and re-upload it to Google Drive." → **bán thủ công**: người/máy tải về rồi upload lại GD, không phải direct-link generator. Điều này giải thích SLA "vài phút đến vài giờ / tối đa 6h".
- "We must pay for a Google Drive account."
- Link checker tự động lấy metadata (size, tên file, uk/shareid) → có tích hợp API share của Baidu ở bước báo giá, còn transfer chắc bán tự động.
- **Không có API công khai, không reseller/affiliate program** được đề cập.

---

## 4. Marketing & SEO

- **Title trang chủ**: "Download link VIP pan baidu China – Download pan.baidu.com link, pan.baidu.com download link generator". **Không có meta description** (chỉ meta generator). Site name: "Download link VIP pan baidu China".
- **Keyword stuffing lộ liễu** ở cuối mô tả sản phẩm ("Featured keywords to find us"): pan.baidu.com downloader tutorial, Baidu Pan download, get link free download 1gb, download multiple files from pan.baidu.com, VIP baidupan, pan baidu link generator, pan baidu jdownloader, **kinh baidu, Tài khoản Baidu, Tải Baidu, Leech pan Baidu, Baidu leech**, Motrix, Wenku baidu download, Baidu Netdisk, Download Baidu file without account 2023... → có từ khóa **tiếng Việt** ("Tài khoản Baidu", "Tải Baidu", "kinh baidu") — gợi ý đội ngũ/thị trường có yếu tố Việt Nam (**suy luận, chưa xác minh**). CSDN: "download.csdn.net как скачать" (tiếng Nga), "csdn free integral download tool".
- **Ngôn ngữ site**: chỉ tiếng Anh. Không có đa ngôn ngữ, không blog, không FAQ → SEO gần như chỉ dựa vào title + product description + reviews WooCommerce (schema rating) + backlink.
- **Kênh ngoài** (theo gist + search): Telegram `t.me/BaiduDownloader_Help` (xác minh: "BaiduDownloader.com Chat Support", **955 members, 45 online**, mô tả "Official website: https://baidudownloader.com/"); trang thank-you còn dẫn `t.me/BaiduDownloader` (chưa xác minh tồn tại). Tumblr `tumblr.com/baidudownloader` (bị 429/không tải được), YouTube "Baidu Link Downloader" channel `UCwvEcKpaWy6iBQt05S18C7Q` (không lấy được nội dung), Reddit `r/Baidudownloaderdotcom` (không truy cập được JSON) — **tồn tại theo gist nhưng nội dung chưa xác minh**. Gist GitHub của user `qapovo` là bài PR "How to download from Pan.Baidu.com without account" quảng bá mã FREEDOWNLOAD1GB.
- **Backlink/đối tác**:
  - premiumdownloader.net: banner `<a class="pd-promo-banner" href="https://baidudownloader.com/?utm_source=premiumdownloader.net&utm_medium=banner" target="_blank" rel="noopener nofollow sponsored"><img src="/wp-content/uploads/2024/01/baidudownloader.png" width="980" height="120" alt="BaiduDownloader.com — download from Pan.Baidu.com & CSDN.net">` — ảnh upload **01/2024** → hợp tác banner tồn tại từ ~01/2024. `nofollow sponsored` → không truyền SEO juice; là placement quảng cáo.
  - **Chiều ngược lại: baidudownloader.com KHÔNG có link/banner nào tới premiumdownloader.net** (đã grep toàn bộ href trang chủ/product/policy). Chỉ có link ra ngoài: gmpg.org, fonts.googleapis, t.me.
- **Social proof**: 25 review WooCommerce (2022–07/2026, đa số "verified owner"), Trustpilot **3.7/5 với 1 review** (profile unclaimed, https://www.trustpilot.com/review/baidudownloader.com), plugin thông báo mua hàng giả lập.
- **Affiliate/reseller program**: không có.

---

## 5. Thông tin doanh nghiệp

| Mục | Dữ liệu | Nguồn |
|---|---|---|
| Domain | baidudownloader.com, đăng ký **2022-07-04**, hết hạn 2029-07-04, cập nhật 2026-07-09 | RDAP Verisign https://rdap.verisign.com/com/v1/domain/baidudownloader.com |
| Registrar | Internet Domain Service BS Corp (Internet.bs, IANA 2487) – registrar rẻ, WHOIS ẩn | RDAP |
| NS | Cloudflare (joselyn/major) | RDAP |
| Tự xưng | "We are the iBuild software team. This is a utility tool that transfers links only. We do not keep, store, re-production any item... We are man-middle leeching/transferring data between PanBaidu to Google Drive" | https://baidudownloader.com/policy/ |
| Email | **getbaidupan@gmail.com** (product/policy), **baidudownloader.com@gmail.com** (thank-you, gist) – giải mã từ Cloudflare cfemail | HTML |
| Telegram | https://t.me/BaiduDownloader_Help (955 thành viên) | Telegram preview |
| Trustpilot | 3.7/5, 1 review (Achraf, Morocco, 03/06/2026, 5 sao), "Location: United States" (unclaimed) | Trustpilot |
| Reddit/BHW | Không tìm thấy thread review trên Reddit/BlackHatWorld qua WebSearch; chỉ có gist quảng bá | WebSearch |
| Pháp nhân/địa chỉ | **Không có** (không tên công ty, không địa chỉ, không ToS chính thức ngoài trang Policy ngắn) | – |

So sánh premiumdownloader.net (đối tác của bạn/nơi đặt banner): domain đăng ký 2023-03-30 (Cloudflare Registrar), WordPress + WooCommerce, theme GeneratePress (child `pd-generate`), GA4 `G-Z3WGQ593BT`, thanh toán Cryptomus + PayPal + ví balance (bonus +10%/+15%/+20% từ $10/$20/$50), 155+ host, Telegram @premiumdownloader_official / @premiumdownloader_discussion / bot @premiumdownloadernet_bot, email support@premiumdownloader.net. Lưu ý: trang `/contact-us/` của premiumdownloader.net đang **hiển thị shortcode Flatsome thô** (`[section ...][row ...]`) – theme không còn là Flatsome nên shortcode không render (lỗi hiển thị nên sửa).

---

## 6. Đánh giá: mạnh / yếu / cơ hội

### Điểm mạnh
1. Niche rõ, ít đối thủ tiếng Anh; title khớp intent "pan.baidu.com download link generator".
2. Giá rất thấp, không cần tài khoản, chấp nhận folder lớn (100GB+), giao sang Google Drive (tiện cho người dùng quốc tế).
3. Uy tín tích lũy 4 năm: 25 review WooCommerce 5 sao trải dài 2022→2026, Telegram 955 thành viên, mô tả minh bạch "vì sao không free".
4. Chi phí vận hành thấp (WordPress rẻ, worker giữ SVIP).

### Điểm yếu
1. Thủ công → SLA mơ hồ ("vài phút đến vài giờ", tối đa 6h); không có tracking đơn real-time.
2. Chỉ 2 host; đối thủ **baidulinkdownloader.com** hỗ trợ Baidu, Quark, Weiyun, 123Pan, CSDN, Feimayun, Lanzou, Xunlei, Alipan, 189 Cloud, free ≤50MB, live chat, đa ngôn ngữ (có `/vi`), 149 review Trustpilot 94% 5 sao (https://www.trustpilot.com/review/www.baidulinkdownloader.com).
3. SEO yếu: không meta description, không blog, keyword stuffing, không đa ngôn ngữ, Trustpilot chỉ 1 review.
4. Không có API, affiliate, gói trả trước → khó reseller; đã từng bị "stole our API" → nhạy cảm với việc mở API.
5. Thanh toán chỉ PayPal/(Stripe?) — không crypto; thiếu pháp nhân, ToS sơ sài; link GD chỉ sống 5 ngày.
6. UX: trang chủ là trang Shop mặc định, không có landing giải thích; `xmlrpc`/`wp-json` mở.

### Cơ hội hợp tác với premiumdownloader.net (chúng tôi)
1. **Cross-banner hai chiều**: hiện chỉ có chiều premiumdownloader.net → baidudownloader.com. Đề nghị họ đặt banner "Need Rapidgator/K2S/Nitroflare? premiumdownloader.net" ở sidebar/product page (theme Schema có sidebar) + link trong Telegram group 955 người. Đo bằng UTM (họ đã dùng sourcebuster nên có thể trao đổi số liệu chuyển đổi).
2. **Chia host thay vì cạnh tranh**: chúng tôi không làm host Trung Quốc, họ không làm host phương Tây → đề xuất chuyển hướng lẫn nhau khi link checker phát hiện host không hỗ trợ (ví dụ: link pan.baidu dán vào premiumdownloader.net → hiển thị CTA sang baidudownloader.com kèm UTM; ngược lại link rapidgator ở site họ → sang chúng tôi).
3. **Affiliate/rev-share**: họ chưa có chương trình; có thể đề xuất mã coupon riêng (`PREMIUMDL`) để đo, hoặc rev-share theo đơn có `utm_source` (WooCommerce Order Attribution đã ghi sẵn).
4. **API reseller**: khả năng thấp ngay lập tức vì quy trình thủ công + họ vừa bị lạm dụng endpoint. Nếu muốn, đề xuất webhook/email-order đơn giản: chúng tôi thu tiền (crypto – họ không có), gửi đơn qua API riêng có key, họ trả link GD. Điểm bán: chúng tôi mở kênh **crypto** và **ví balance** mà họ thiếu.
5. **Mở rộng host chung**: nếu chúng tôi/họ thêm Quark, 123Pan, Xunlei sẽ chặn được baidulinkdownloader.com; có thể chia: họ giữ Baidu/CSDN, chúng tôi thêm hoặc reseller từ họ.
6. **Cải thiện cho đối tác** (điểm để "học hỏi" ngược): họ nên có meta description, FAQ schema, Trustpilot claim; chúng tôi nên sửa trang contact-us bị lỗi shortcode.

### Gợi ý content chung
- Bài hướng dẫn song hành: "How to download from pan.baidu.com without a Chinese phone number (2026)" (blog premiumdownloader.net, CTA sang họ) ↔ "Best premium link generator for Rapidgator/K2S 2026" (nếu họ mở blog, CTA sang chúng tôi).
- So sánh "Baidu SVIP vs. transfer service: cost per GB" và "CSDN 积分 là gì, cách tải không cần tài khoản".
- Phiên bản **tiếng Việt** (từ khóa "tải baidu không cần tài khoản", "leech pan baidu") — thị trường VN đang được itcuaban.com, fastviet.vn, tinhte.vn phủ, và họ đã stuffing từ khóa Việt.
- Telegram cross-post: bài pin trong @BaiduDownloader_Help giới thiệu @premiumdownloader_official và ngược lại.
- Bảng "supported Chinese hosts" chung + trang status link.

---

## 7. Danh sách nguồn
- https://baidudownloader.com/ (title, generator, links, GA4)
- https://baidudownloader.com/product/transfer-pan-baidu-com-link-to-googgle-drive-link/ (giá, quy trình, "Why are we not free", keywords, 25 reviews)
- https://baidudownloader.com/product/download-items-from-csdn-net/
- https://baidudownloader.com/product/bonus-item/
- https://baidudownloader.com/policy/ ; https://baidudownloader.com/how-to-pay-with-card/ ; https://baidudownloader.com/thank-you/ ; https://baidudownloader.com/downloader/
- https://baidudownloader.com/link_checker.js?v=1312240716 (endpoint /link_checker.php, /csdn_link_checker.php, pan.baidudownloader.net)
- https://baidudownloader.com/wp-json/wp/v2/pages ; /wp-json/wp/v2/posts (rỗng) ; /wp-json/wc/store/v1/products ; /robots.txt ; /wp-sitemap.xml
- https://rdap.verisign.com/com/v1/domain/baidudownloader.com ; https://rdap.verisign.com/net/v1/domain/premiumdownloader.net
- https://t.me/BaiduDownloader_Help (955 members)
- https://www.trustpilot.com/review/baidudownloader.com
- https://premiumdownloader.net/ ; /about-us/ ; /contact-us/ ; /terms-of-service/ (banner, stack, thanh toán)
- https://gist.github.com/qapovo/8ce21d7df7386a820b83b454f8fdc111 (FREEDOWNLOAD1GB, kênh social)
- https://www.baidulinkdownloader.com/ ; https://www.trustpilot.com/review/www.baidulinkdownloader.com (đối thủ)
- Không xác minh được: Tumblr (429), YouTube channel nội dung, Reddit r/Baidudownloaderdotcom, pan.baidudownloader.net (502 qua proxy), Stripe có bật thật hay không, mã FREEDOWNLOAD1GB còn hiệu lực, lưu lượng truy cập/Alexa-Similarweb (không tra).

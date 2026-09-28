# SEO-02 – Competitor teardown: SEO & marketing của các dịch vụ tải hộ Pan Baidu / CSDN / host Trung Quốc

*Ngày khảo sát: 28/09/2026. Phương pháp: curl trực tiếp HTML + robots.txt + sitemap.xml của từng domain, RDAP (Verisign) cho ngày đăng ký, Similarweb/ScamAdviser trang public, Trustpilot, YouTube (parse `ytInitialData`), Telegram preview (t.me), GitHub Gist, WebSearch (proxy Google) và Bing. Số liệu nào không lấy được ghi rõ **"chưa xác minh"**. Bổ sung cho `docs/research/02-bang-gia-dich-vu-leech.md` (giá) và `03-baidudownloader-com.md` (deep-dive baidudownloader.com) – không lặp lại phần giá đã có ở đó.*

**Giới hạn cần biết trước khi đọc:**
- Không có Ahrefs/Semrush. Traffic là **ước lượng Similarweb bản free** (chỉ tin cậy tương đối với site >5k visit/tháng; site nhỏ hơn thường hiện "- -"). Vị trí từ khoá Google chỉ suy ra gián tiếp từ kết quả WebSearch/Bing (không phải SERP Google thật, không có vị trí chính xác).
- Google PageSpeed API không chạy được (không có API key); tốc độ chỉ có TTFB/size đo bằng curl.
- Reddit chặn crawler nên chỉ có 1 thread cũ (r/Piracy `auhyxk`) nhìn thấy qua Bing – không đọc được nội dung.

---

## 0. TL;DR (10 dòng)

1. Thị trường quốc tế đang có **3 "tay chơi SEO nghiêm túc"**: **baidudl.com** (762 URL, 22 ngôn ngữ, blog Ghost riêng, trang so sánh đối thủ, wiki, roadmap, changelog, guarantee), **baidu.erranium.com** (210 URL, 21 ngôn ngữ, schema đầy đủ nhất, tutorial theo *nguồn nội dung* như Caimogu/TapTap/Xiaohongshu, referral program, Trustpilot 4.5/82 review) và **baidufast.com** (mới 04/09/2026 nhưng đã 128 URL, 12 ngôn ngữ, trang "for researchers", link checker miễn phí, gist + itch.io + HF forum seeding rất năng nổ).
2. **baidulinkdownloader.com** thắng ở **mảng review + YouTube đa ngôn ngữ** (Trustpilot 4.7/149, kênh YT 15 video dịch sang VI/ID/PT/DE/IT) và là site có organic search cao nhất trong nhóm theo Similarweb (66% organic, ~33k visit/tháng, top nước: KR, JP, VN, TH, ID).
3. Traffic (Similarweb, độ tin cậy trung bình): baidulinkdownloader ~33k/tháng; erranium ~20k/3 tháng (US 36%, **VN 21%**); premiumdownloader.net ~23k/3 tháng; baidudl rank 2.4M (giảm 79% MoM); quarkdownloader rank 1.49M (TH 39%, VN 28%); VN: taikhoanpre rank VN #30k, itcuaban #74k, dichvuchina ~5.8k/tháng. **Tất cả đều là site nhỏ** (<50k/tháng) – rào cản gia nhập thấp.
4. Kênh kéo traffic thật sự đang dùng: (a) **GitHub Gist "how to download from pan.baidu without account"** (gist erraz1: 80 sao, hàng chục comment; gist myheart111 của BaiduFast; gist BaiduDownloader 8 sao) – rank rất tốt trên Google/Bing; (b) **seeding forum** (HuggingFace Discuss, Tek-Tips, XDA, itch.io, caimogu.org, Quora Space); (c) **YouTube** (video 26k–52k view của baidudownloader.com; kênh VN "Tài Khoản Baidu – Panbaidu Team" 18.2k sub, video 40k view sau 3 tuần); (d) **Telegram** (nhóm @BaiduDownloader_Help 957 thành viên); (e) directory nhỏ (startuplist.ing), Medium, bài "best baidu pan downloader" của tenorshare/robots.net/unanswered.io/gizdev.
5. Không ai (trừ erranium & fast-download.org) có **affiliate/referral công khai**; không ai có **blog tiếng Việt chuyên sâu** ngoài các shop VN (itcuaban, taikhoanpre) vốn SEO yếu; không ai làm **CSDN landing page tiếng Việt** tử tế; không ai có **API/doc cho developer** và **trang "dataset/paper" bằng tiếng Trung-Anh** ngoài baidufast (mới).
6. Điểm yếu chung: giá per-GB khó hiểu, giao hàng "vài phút tới vài giờ" (thủ công), free tier hẹp (20–150MB), review bị nghi mua (erranium), site tải chậm (baidudl HTML 500KB), hreflang thiếu ở vài site, 3 site trông giống nhau (erranium có 2 domain clone baidulinksdownloader.com + baidulinkdownload.com).
7. Cơ hội chưa ai chiếm: từ khoá tiếng Việt "tải file baidu / quark / 123pan / csdn" bằng **tool tự động** (VN hiện chỉ có shop bán tài khoản + tải thủ công qua Zalo), keyword **theo nguồn nội dung** (Civitai/HF model weights, GitHub README dataset, caimogu mod, sysin, 3DMGAME, CG资源, sách PDF/EPUB), keyword **theo lỗi** ("baidu link expired / 链接不存在", "extraction code", "group share"), keyword **CSDN** (rất ít đối thủ: chỉ baidudl, erranium, baidudownloader.com, 2 shop VN), ngôn ngữ **JP/KR/TH/ID** (đang có nhu cầu theo Similarweb nhưng nội dung dịch máy), kênh **Reddit/Discord/Bilibili/Zhihu tiếng Trung cho Hoa kiều**.

---

## 1. Bảng so sánh tổng quan

| Site | Đăng ký domain (RDAP) | Stack / host | URL trong sitemap | Ngôn ngữ (hreflang) | Schema (ld+json) | Blog/guide | Free tier | Trust signals | Traffic (Similarweb, tin cậy) | Kênh ngoài site |
|---|---|---|---|---|---|---|---|---|---|---|
| **baidufast.com** | 04/09/2026 (mới 3 tuần!) | SPA tĩnh sau Cloudflare, Turnstile, Whop + PayPal + NOWPayments | **128** (12 locale × ~10 trang + 11 blog EN) | en, id, th, vi, es, pt-BR, de, pl, ko, ja, fr, nl + x-default | WebApplication, FAQPage, VideoObject, AggregateRating(4.8/49), Organization, Offer | `/guides/*` 4 bài, `/blog/*` 11 bài, `/for-researchers`, `/baidu-link-checker`, `/huong-dan-tai-file-baidu` (VI) | ≤150MB, 1 link/ngày, "code of the day" trên Telegram | Counter "1.696 file / 9.812 GB", 49 review on-site, popup "How did you find us?", nút Trustpilot | Không có dữ liệu (quá mới) | Telegram 43 thành viên, YT @BaidudownloadFast 5 sub/8 video, IG, X, Gist myheart111 (3 sao), itch.io, HF Discuss, caimogu |
| **baidudl.com** (cũ baidudl.cloud, đổi 01/04/2026) | 27/06/2024 | Next.js trên Vercel, GA4, Stripe/PayPal, **HTML trang chủ 502KB** | **762** (≈35 trang × 22 locale) | en, es-419, th, … (22) | Không có ld+json trên home | `/blog` 15 bài, `blog.baidudl.com` (Ghost) 18 bài, `/wiki/*` 12 host, `/sc/download-files-from-*` 13 landing theo host, `/tutorials/*`, `/comparisons/baidudl-vs-{erranium,baidudownloader}`, `/roadmap`, `/changelog-public`, `/guaranteed-delivery` | Không | "10.000+ links • 100TB+ • since 2023", testimonial, price-match, guarantee hoàn tiền 24h/5 ngày | Rank 2.41M, giảm 79% MoM; top nước ID/MX/BR; direct 40% (tin cậy thấp) | Medium @baidudl, X @baidudl, YT @BAIDUDL 21 sub/14 video (video Quark 10.7k view), startuplist.ing (289 view), quarkdownloader.com (cùng chủ – xem §2.9) |
| **baidu.erranium.com** | 28/03/2022 (erranium.com) | Next.js trên nginx (Contabo, Pháp), Tidio chat, Paddle | **210** (≈10 trang × 21 locale) | en, ja, es, fr, de, it, vi, hi, pl, ru, uk, ko, … + x-default | **Nhiều nhất**: SoftwareApplication, Service, OfferCatalog, AggregateRating, FAQPage, BreadcrumbList, Organization, WebSite/SearchAction | `/tutorials/{baidu-pan,quark-pan,123pan,weiyun,alipan,csdn,taptap,xiaohongshu,caimogu}` | "<20MB có thể free" (pricing-policy), bản cũ nói ≤1GB | Trustpilot **4.5/82** (90% 5★, có review tố "ép đánh giá 5★ trước khi giao"), ScamAdviser "very likely safe" | ~20.1k/3 tháng, giảm 44% MoM; **US 36%, VN 21%, JP 7%**; direct 37%; keyword: "baidu erranium", "baidu downloader", "pan.quark download bypass" | Discord, Telegram @baiduerranium, X @erraniumtech, FB/IG/LinkedIn/YT @baiduerranium (YT "Erra Erranium" video 9k view), **referral program** (/referrals, 2.5 credit bonus), gist erraz1 (80★), 2 domain clone |
| **baidulinkdownloader.com** | 18/03/2025 | Next.js sau Cloudflare, Tidio, **IntaSend** (cổng thanh toán Kenya) | **68** (22 locale × 3) | 22 locale (zh-Hans, pl, de, it, es, fr, pt, ja, ko, tr, vi, ru, th, ar, id, hi, ms, ur, tl, he…) | Không có ld+json | `/resources/{baidu,quark}/how-to-…` 2 bài × 22 ngôn ngữ | ≤50MB (Baidu/Quark), tính theo tổng size link | **Trustpilot 4.7/149** (86 review 12 tháng), "99.9% success", "avg 5 mins", live chat 24/7 | **~33k/tháng**, rank 781k (từ 590k), giảm 26% MoM; **organic 66%**; KR 14%, JP 12%, VN 12%, TH 11%, ID 8%; keyword "baidu downloader", "pan baidu downloader", "baidu 登録せずにダウンロード", "바이두 다운로드" | YT @BaiduLinkDownloader 29 sub/15 video (video chính 6.8k + 5.7k view, có bản VI/ID/PT/DE/IT), GitHub org rỗng |
| **fastdown.io** | chưa xác minh (.io không có RDAP Verisign) | WordPress 6.6 + WooCommerce + Yoast, nginx Ubuntu, **AdSense** | 16 (7 post, 6 page, 3 product) | en-US only (URL `/theo-doi-don-hang-cua-ban/` lộ chủ VN) | Product + AggregateRating(5.0/34) + Review + Organization + Breadcrumb | 7 bài (Black Friday coupon, "top sites to get pan.baidu link", plugin WP…) | Không | 34 review WooCommerce (11/2024–01/2026) | Không có số; BR 100% desktop (mẫu quá nhỏ); keyword lạ "extmatrix link generator", "baidu downloader script" | Telegram @fastdownio, FB fastdown.io, Google Doc hướng dẫn |
| **baidudownloader.com** | 04/07/2022 | WP 7.1 + WooCommerce, Cloudflare, reCAPTCHA | ~8 page + 3 product | en-US | WebSite/Breadcrumb (không FAQ/Product) | Không blog | Mã FREEDOWNLOAD1GB (chưa xác minh) / "free <4GB qua Telegram" | 25 review WooCommerce 4.96 | Similarweb: giảm **91%** MoM, direct 41%, 4 keyword (toàn brand); ~1.5 phút/visit | **Telegram 957 thành viên**, YT 26k + 11.5k view, gist 8★, banner trên premiumdownloader.net (nofollow sponsored), Reddit community (chưa xác minh) |
| **baidudownloaderfree.com** | 06/08/2026 | WP 7.1 trên Apache/PHP 8.3 (VPS), reCAPTCHA | 14 (6 post, 8 page) | en-US | Organization, WebSite | 5 bài (extraction code, IDM, why slow, folder limits) | **Free hoàn toàn ≤100 file/5GiB**, xuất `links.txt` cho IDM | Không có review; văn bản nội bộ lộ "CD2", "R2", "not yet" | Không có data | Không thấy kênh nào |
| **premiumdownloader.net** | chưa xác minh | WP + WooCommerce + Yoast, Cloudflare, AdSense, Cryptomus | 124 post + 29 page (rất nhiều "how to download from <host>") | en-US | FAQPage, Organization, Breadcrumb | ~60 bài (best premium link generators 2026, is-debrid-legal, crypto guides) | Không rõ | robots.txt **mời GPTBot/ClaudeBot** (AI SEO) | ~23.4k/3 tháng, rank 895k, +50% MoM, US/IN/FR, direct 67% | Banner → baidudownloader.com, Telegram |
| **premiumdownloader.io** | chưa xác minh | Next.js, Cloudflare, Turnstile, Discord | **460** (programmatic `/free-premium-link-generator/<host>` cho 454 host, có `/baidu`, `/123pan`) | en | SoftwareApplication, AggregateRating(4.8/2.849), Offer | Blog | "free limit theo host" | 2.849 review (on-site, chưa xác minh) | Chưa lấy được | Discord |
| **quarkdownloader.com** (cùng nhóm baidudl – cùng Vercel, cùng testimonial style, blog Ghost, "100TB+ by 2,000+ users") | 13/10/2025 | Next.js Vercel | 144 (16 locale × 9) | ja, kr, vn, es, tr, de, fr, hi, id, it… | – | help/ + blog.quarkdownloader.com 12 bài (nhiều bài "vs baidudl", "beware fake free downloaders") | Không | – | Rank 1.49M; **TH 39%, VN 28%, US 13%, ID 9%, PH 8%**; keyword "pan.quark 가입 방법", "pan quark downloader free" | YT BAIDUDL video Quark 10.7k view |
| **dichvuchina.vn / .com** | .com chưa xác minh | .vn: WP 7.1 + Woo + Rank Math; .com: shop Bootstrap tự code | .vn: 50 post + 24 page; .com: 75 URL | vi | Article, Person, Place, WebSite | 1 bài về tải hộ Baidu (07/2024, 1.052 view) | Không | "since 2022", "+200 khách", Zalo/Telegram bot/WeChat/hotline | ~5.8k/tháng, rank VN #47.9k, keyword chính là "mua tài khoản douyin" (Baidu không phải trọng tâm) | Zalo, Telegram @Dichvu_KSCK, FB MinhDungLsn, mạng site chị em (chinaservices.net, khosicuakhau.com, langsonshop.com) |
| **itcuaban.com** | 10/08/2021 | WP 6.5 + Woo + Rank Math, Cloudflare, FB Pixel | 93 post + 13 product | vi | Organization, WebSite | 8 bài liên quan Baidu (bài "2 cách download… không cần tài khoản" 06/2021, có comment) | 500MB quota (tool đã **tạm ngưng**, chuyển sang thuê SVIP) | 4.92/13 review (Pan Baidu Downloader), 4.88/8 (CSDN tool), hoàn tiền 15 ngày | Rank VN #74k, keyword "baidu netdisk", "baidu downloader theo lượt" | YT **Hieu IT 2.18k sub** (video 22.8k view, 5 năm), Zalo, Telegram, FB |
| **taikhoanpre.com** | 17/02/2024 | PHP 8.1 tự code (hcdn), không sitemap (0 URL) | ~20 sản phẩm + ~10 blog | vi | Organization, WebSite | Blog ngắn ("Cách tải file baidu nhanh") | Không | Review 4.0/1; "giao ngay" | Rank VN **#30k**, 7 trang/visit, 6 phút/visit (rất cao → khách quen), keyword "thuê số trung quốc", "thuê sim trung quốc" | FB /taikhoanbaidu, Zalo; **rất có thể là chủ kênh YT "Tài Khoản Baidu – Panbaidu Team" (@taikhoanbaidu1, 18.2k sub, 15 video, video mới 40.5k view/3 tuần)** – chưa xác minh 100% |

Các site liên quan phát hiện thêm:
- **fast-download.org / docs.fast-download.org** – "Fast Downloader", kênh YT "Fast Downloader" (video 3.5k + 2.8k view), có **Referral Reward Program**, docs kiểu VitePress. Chưa fetch được giá (trang chủ chỉ có title).
- **baidulinkdownload.com** & **baidulinksdownloader.com** – 2 domain vệ tinh của Erranium (1 trang landing "BaiduDownloaders Guide" nhúng YT + 1 bản clone y hệt baidu.erranium.com) → chiến thuật **domain khớp từ khoá + clone** để chiếm thêm slot SERP "baidu link downloader".
- **baidudownloader.pro** – hiện redirect/hiển thị landing **TorBox** (debrid) – TorBox đang mua domain khớp từ khoá Baidu.
- **bravedown.com** – chỉ tải video haokan.baidu.com, không phải đối thủ.
- Bài "listicle" bên thứ ba đang chiếm SERP: tenorshare.com (cập nhật 28/09/2026, đề xuất baidulinkdownloader + erranium), robots.net (09/2023, link erranium + multcloud), unanswered.io (link erranium + baidulinkdownloader), gizdev.com (02/2022, link erranium + baidulinkdownloader + kinhdown), multcloud.com (04/2026, chỉ quảng cáo MultCloud), dfc-studio.com, droidwin.com.

---

## 2. Teardown từng đối thủ

### 2.1 baidufast.com – "SEO/growth playbook mới nhất" (đáng học nhất về tốc độ thực thi)

**On-page**
- Title: `Baidu Pan Download — free under 150MB, no account needed | BaiduFast`; H1: `Download Baidu Pan, Quark and 123pan files from anywhere`; meta desc nêu rõ USP "see the exact size, get a direct link in minutes. Free under 150MB, no signup".
- URL sạch: `/guides/download-from-baidu-without-account`, `/guides/why-is-baidu-pan-so-slow`, `/guides/pandownload-alternatives`, `/guides/how-to-download-from-quark-pan`, `/quark-download`, `/123pan-download`, `/pricing`, `/for-researchers`, `/baidu-link-checker`, `/huong-dan-tai-file-baidu`. Locale dạng `/id/`, `/th/`, `/vi/`… có hreflang + x-default đầy đủ (chỉ site này và erranium làm đúng).
- Blog 11 bài nhắm **long-tail theo nguồn nội dung**: `download-caimogu-mods-baidu-pan-without-chinese-account`, `download-sysin-files-without-baidu-account`, `firewall-lab-images-baidu-pan`, `chess-pgn-database-baidu-pan`, `download-from-123pan-outside-china-2026`, `quark-pan-downloader-services-compared-2026`, `baidu-pan-downloader-comparison-2026` (so sánh chính họ $0.98 vs baidudownloader $0.99 vs erranium $2 vs baidulinkdownloader $3 cho 1GB, có "test case 13.230 file").
- Schema: WebApplication + FAQPage + VideoObject + AggregateRating + Organization + Offer. "Last updated 28 September 2026" hiển thị trên trang.
- robots.txt chỉ `Allow: /$` và `/huong-dan-tai-file-baidu`, chặn `/download/`, `/api/` – nhưng sitemap vẫn liệt kê 128 URL (mâu thuẫn nhỏ, có thể robots cũ).

**Funnel**
- Paste link → "Check size & price" (step 1 không tải gì) → hiện giá **trước** khi trả → PayPal/Whop card/USDT → link trực tiếp hoặc Google Drive; file ZIP có mật khẩu để né quét virus.
- Free: ≤150MB, 1/ngày; "Free code of the day" ghim trong Telegram (ép join Telegram); "Launch offer: share baidufast.com anywhere + nhắn Telegram → fetch big file free (limited daily slots)" = **share-to-unlock** thủ công.
- Sau khi tải: popup "Rate this download" + "Rate us on Trustpilot" + **"How did you find us? Google / YouTube / Reddit / GitHub / Facebook-IG / Telegram / A friend"** (họ đang đo kênh) + "Buy us a coffee".
- Trang **/for-researchers**: nhắm ML engineer/lab cần dataset/checkpoint từ paper & GitHub README, ví dụ "20GB checkpoint = $4.80", "48GB ready in minutes".
- Giá có **trần** ($4.80/50GB, $9.80/150GB, $19.80/300GB, $29.80/500GB, $49.80/1TB) hiển thị kiểu gạch giá cũ "$24.98 → $4.80" – anchor pricing.

**Off-site (3 tuần đã làm)**
- Gist `myheart111/c7240ff…` "How to download from pan.baidu.com, pan.quark.cn and 123pan without an account (2026)" – có bảng tốc độ đo (Baidu ~19MB/s, Quark 36, 123pan 39), UTM `?utm_source=gist`, 3★/6 revision, trả lời comment xin link.
- itch.io General Discussion (đăng "2 days ago" bởi gonelove31), HuggingFace Discuss (gonelove + happylife01 khen nhau – bị nhìn ra là seeding), caimogu.org, YouTube 8 video (view 40–250, tiêu đề chứa đủ keyword "PanDownload Alternative, 50 GB for $4.80"), IG @baidudownloadfast, X @baidufast.
- Telegram @BaiduFast_Support mới 43 thành viên.

**Điểm yếu**: domain 3 tuần tuổi (Google sandbox), Telegram/YT chưa có khán giả, seeding bị lộ (nhiều nick khen liên tiếp), dựa Whop/PayPal, đo tốc độ tự công bố; VN page không có giá VND, không có thanh toán nội địa.

### 2.2 baidudl.com – "SaaS chuẩn chỉ": nhiều trang nhất, nhưng SEO kỹ thuật kém

- Title: `BAIDUDL - Download from Pan Baidu, Pan Quark, 123Pan & More`; H1: `Download from Chinese Cloud Storage Services`. Không ld+json. HTML trang chủ **502KB** (Next.js RSC payload nhúng i18n 22 ngôn ngữ) → LCP chắc chắn kém trên mobile (chưa đo được).
- Kiến trúc nội dung (đáng copy): `/sc/download-files-from-{baidu,quark,123pan,alipan,xunlei,weiyun,csdn,lanzou,feemoo,115cloud,139yun,cloud189,uc-drive}` (13 landing theo host, template: About host → How downloads work → Save → Plans → FAQ → Reviews), `/wiki/<host>` (12 trang giải thích host), `/tutorials/how-to-*`, `/comparisons/baidudl-vs-baidu-erranium` & `-vs-baidudownloader` (bảng giá 50GB: $4.99 vs $22.59 vs $25.49), `/blog` 15 bài kiểu news ("123pan limits non-VIP bandwidth", "Alipan targets over-quota users", "PromptPay now available for Thai users"), `/roadmap`, `/changelog-public`, `/guaranteed-delivery` (hoàn tiền nếu không giao trong 24h/5 ngày), `/accounts` (bán tài khoản Alipan $29.99/$39.99 – sold out), `/announcements/2025-06-13`, blog phụ `blog.baidudl.com` (Ghost, 18 bài "How to download files from {Feemoo, 115yun, Quqi, Feiji pan, 139 yun, Xunlei, Feimaoyun…}" + bài lạ "set up QQ mail in Outlook").
- Trust: "10,000+ links • 100TB+ • since 2023", price-match, testimonial carousel, "Dylan White" làm founder trên startuplist.ing & Medium.
- Dashboard có **Referrals** (chuỗi i18n "referralCopiedMessage") → có chương trình giới thiệu nhưng không quảng bá công khai (chưa xác minh điều khoản).
- Kênh: Medium @baidudl + @baidudlcloud, X @baidudl, YT @BAIDUDL (21 sub, 14 video; video "How to Download from Pan Quark" 10.7k view), startuplist.ing (289 view, mã SM15/MS15/BS15 -15%).
- Similarweb: rank 2.41M, **giảm 78,8% MoM**, top nước ID/MX/BR (lạ – có thể traffic từ quảng cáo/seeding), keyword "download from xunlei pan", "pan quark downloader free". Direct 40% → phần lớn là khách quen/subscription.
- **Chuyển domain baidudl.cloud → baidudl.com ngày 01/04/2026** ("dễ nhớ hơn") – có thể giải thích sụt organic.
- Điểm yếu: không free tier (rào cản thử), mô hình subscription theo năm ($69–299) khó bán cho khách "1 lần", không schema, trang nặng, nội dung 22 ngôn ngữ dịch máy, blog Ghost tách subdomain (loãng authority).

### 2.3 baidu.erranium.com – "SEO kỹ thuật tốt nhất + tutorial theo nguồn nội dung + review farm"

- Title `How to Download from Baidu Without Account - Baidu Erranium` (title = keyword câu hỏi), H1 `How To Download From Baidu, Quark, 123 Pan, CSDN Without Account?`. Schema **đầy đủ nhất nhóm** (SoftwareApplication + Service + OfferCatalog/AggregateOffer + AggregateRating + FAQPage + Breadcrumb + Organization/ContactPoint + WebSite/SearchAction).
- 21 locale có hreflang chuẩn (x-default). Tutorials theo host **và theo nguồn**: `/tutorials/{baidu-pan,quark-pan,123pan,weiyun,alipan,csdn,taptap,xiaohongshu,caimogu}` – TapTap (game TQ), Xiaohongshu (video không watermark), Caimogu (mod game) là 3 keyword cụm "nguồn nội dung" mà người phương Tây gặp link Baidu.
- Funnel: bắt **đăng ký tài khoản** (email tạm cũng được) → bcoin/credits → giao qua Google Drive/direct; **Referral Program** (`/referrals`, bonus 2.5 credit khi dùng mã) ; menu có "Buy Baidu Account", "Payment to China" (đa dạng hoá doanh thu); Tidio live chat 24/7 (được khen trong review).
- Giá đắt nhất nhóm ($2.99 GB đầu + $0.40/GB; host khác $3.99 + $0.45; "khác" $5.99 flat) → bị baidudl & baidufast dùng làm "kẻ xấu" trong bảng so sánh.
- Trustpilot 4.5/82 (78 review trong 12 tháng; 1 review tố "yêu cầu 5 sao trước khi giao file"; công ty không trả lời review xấu). ScamAdviser: domain 4 năm, server Contabo (Pháp), cảnh báo "bị iframe bởi site khác" (chính là 2 domain clone).
- Off-site mạnh nhất về **backlink tự nhiên**: gist erraz1 (80★, 8 fork, comment liên tục tới 28/09/2026), tek-tips.com (bài tự seeding 10/2025 kèm PDF), XDA, HF Discuss (Truak gợi ý 06/2025; user tải 170GB thành công), caimogu.org 2 bài (Monster Hunter Wilds / Stellar Blade mods, 11/2025), Quora Space "How to download files from Baidu/Quark without acc", robots.net, gizdev, unanswered.io, tenorshare listicle, YouTube "Erra Erranium" (video 9k view EN + bản FR 313 view).
- Similarweb: 20.1k visit/3 tháng, giảm 44% MoM, **VN 20,8%** (thị trường VN đang tìm dịch vụ EN), bounce 25%, 6.7 trang/visit (dashboard).
- Điểm yếu: giá cao, bắt đăng ký, review bị nghi, không có "free code"/counter, 2 domain clone dễ bị Google phạt duplicate.

### 2.4 baidulinkdownloader.com – "Review + video đa ngôn ngữ"

- Title/H1 = keyword câu hỏi `How To Download From Baidu Without Account – Ultimate Chinese Cloud Storage Downloader`. 22 locale (có `/vi` dịch khá tự nhiên, `/zh`, `/ur`, `/tl`, `/he`…), hreflang có. Nội dung mỗi locale chỉ 3 trang (home, resources, 1 bài) → **68 URL** nhưng thin content.
- Trust: **Trustpilot 4.7/149** (nhiều nhất nhóm; 93% 5★; khen live chat; 3% 1★ về chờ 6h+/file hỏng; công ty trả lời ~40% review xấu), "99.9% success rate", "avg 5 mins", "4.8/5" hiển thị trên hero.
- Funnel: paste → dashboard (bắt đăng ký `/en/auth/register`) → free ≤50MB tính theo **tổng size link** (không free file lẻ trong folder) → premium. Thanh toán qua **IntaSend** (Kenya) + PayPal/card → gợi ý chủ ở Đông Phi (chưa xác minh).
- YouTube @BaiduLinkDownloader: 15 video, 29 sub, nhưng video "How To Download From pan.Baidu Without Account 2026" 6.8k view, "How to Download from Baidu or Quark for Free (2026 Guide)" 5.7k, "Easily download from Chinese clouds" 917; **dịch video sang VI ("Cách Tải Tệp Baidu Netdisk Không Cần Tài Khoản (2026)" 529 view), ID (392), PT (282), DE/IT (29)**. Đây là kênh YT có view tốt nhất trong nhóm thương mại.
- Similarweb: ~33k/tháng, rank 781k (đang tụt từ 590k), organic **66%** (cao nhất), Gen-AI là nguồn thứ 3 (!), KR/JP/VN/TH/ID; keyword JP/KR bản địa xuất hiện.
- Điểm yếu: content mỏng (2 bài), không schema, không blog, pricing không công khai (trang pricing 500 – theo research 02), phụ thuộc live chat.

### 2.5 fastdown.io – WooCommerce nhỏ, chủ VN, kiếm thêm bằng AdSense

- Title `Download pan.baidu.com link VIP`, meta nhồi keyword ("Download link VIP pan baidu China Download pan.baidu.com link, pan.baidu.com download link generator, download max speed, no account needed, top service") – **copy nguyên văn title/meta của baidudownloader.com** → cùng "trường phái" hoặc cùng chủ (chưa xác minh).
- 34 review Woo 5.0 (11/2024–01/2026), Telegram @fastdownio, FB, Google Doc hướng dẫn, AdSense trên trang bán hàng (giảm trust), blog 7 bài trong đó "Top sites to get pan.baidu.com link" (0daydown, CSDN) = content hướng người tìm **nguồn** rồi bán tải.
- Sản phẩm thứ 2 "Premium link generator" (host quốc tế) → phân tán.

### 2.6 baidudownloader.com – (đã có file 03) tóm tắt góc SEO/marketing

- Site gần như **không có SEO** (H1 "Shop", không blog, không FAQ schema) nhưng vẫn là brand được nhắc nhiều nhờ **Telegram 957 thành viên**, YouTube (26.2k view video Baidu 4 năm, 11.5k view video CSDN), gist (8★), banner trả phí trên premiumdownloader.net (`rel=nofollow sponsored`, có UTM), Reddit community (gist ghi, chưa xác minh). Similarweb: giảm 91% MoM, top keyword toàn brand → sống bằng khách cũ + Telegram.

### 2.7 baidudownloaderfree.com – "free hoàn toàn" (đối thủ nguy hiểm nếu họ sống được)

- Đăng ký 06/08/2026, WP trên VPS Apache, 5 bài blog rất đúng long-tail: `download-baidu-netdisk-without-account`, `baidu-extraction-code-tiquma`, `download-baidu-files-with-idm`, `why-baidu-netdisk-slow-outside-china`, `baidu-share-folder-size-limits`. Free ≤100 file/5GiB, xuất `links.txt` cho IDM, link 48h, R2 storage.
- Không review, không kênh, văn bản còn lộ ghi chú nội bộ ("we do not promise that until we measure on paid CD2") → dự án cá nhân/thử nghiệm. Không có traffic data.

### 2.8 premiumdownloader.net / .io – hai site debrid "chỉ cho ta thấy mô hình programmatic + AI-SEO"

- `.net`: 124 bài kiểu "how to download from <host>", "is debrid legal", "best premium link generators 2026", guides mua crypto P2P (Binance/OKX/Bybit) – chuẩn bị cho khách trả bằng crypto; robots.txt **mời đích danh GPTBot/OAI-SearchBot/ClaudeBot** (tối ưu cho AI search). 23.4k/3 tháng, +50% MoM, direct 67%. Không hỗ trợ Baidu → đẩy sang baidudownloader.com bằng banner.
- `.io`: 460 URL programmatic `/free-premium-link-generator/<host>` (454 host, gồm `/baidu`, `/123pan`), AggregateRating 4.8/2.849 on-site, $0.05/100MB, thanh toán QRIS/BTC/USDT/PayPal/Payoneer, Discord. Trang `/baidu` nói "a Baidu account is required to view or download any files" → hỗ trợ Baidu **mập mờ**.

### 2.9 quarkdownloader.com (cùng nhóm baidudl – chưa xác minh 100% nhưng: cùng Vercel, cùng câu "100TB+ mirrored", blog Ghost, bài "QuarkDownloader vs BAIDUDL", video Quark đăng trên kênh BAIDUDL)

- Chiến thuật **1 domain/1 host**: domain khớp chính xác "quark downloader", 16 locale, giá $0.99 + $0.30/GB (rẻ hơn baidudl để bắt phân khúc pay-per-file), blog 12 bài toàn tiêu đề "Is there a free Pan Quark downloader?", "Beware of fake free Quark downloaders", "Why does PanQ require a Chinese phone number?", "Free vs paid Quark downloaders" = **chiếm intent "free"** rồi thuyết phục trả phí. Similarweb rank 1.49M, TH 39% / VN 28%.

### 2.10 Nhóm Việt Nam: dichvuchina.vn/.com, itcuaban.com, taikhoanpre.com (+ kênh YT "Tài Khoản Baidu – Panbaidu Team", MTechStill, Kênh 5 Phút, Hieu IT)

- **Không site VN nào là "tool"**: đều là shop bán tài khoản (Baidu SVIP, 123pan, Quark, CSDN key, 115, Terabox, PikPak, ExpressVPN, SIM/OTP TQ) + tải hộ thủ công qua Zalo. Giá tải hộ: dichvuchina 30k/link <1GB (bậc 1/2/3/4 đơn vị tới 12GB), 20k/100MB; itcuaban 5k/GB (min 10k) nhưng **tool đã tạm ngưng**; taikhoanpre "theo dung lượng", 1 review 4.0 "xử lý đơn hơi chậm".
- SEO: dichvuchina.vn keyword chính là Douyin/Alipay/WeChat (Baidu chỉ 1 bài 07/2024); itcuaban rank cho "baidu netdisk", "baidu downloader theo lượt", bài 2021 vẫn có comment; taikhoanpre **không có sitemap**, nhưng engagement rất cao (7 trang, 6 phút/visit) và rank VN #30k → khách quen, có thể được nuôi bởi YouTube.
- **YouTube tiếng Việt là kênh mạnh nhất VN**: "Tài Khoản Baidu – Panbaidu Team" (@taikhoanbaidu1) 18.2k sub, 15 video, video "Hướng dẫn cách tải file baidu trên máy tính và điện thoại 2026" **40.507 view trong 3 tuần**; "Kênh 5 Phút" – "BAIDU DOWNLOADER 2024" 16.5k view; "Hieu IT" (itcuaban) 22.8k view (5 năm) + video CSDN 5.7k; "Tải file baidu" 8.2k; **MTechStill** đăng 4 video trong 2 tháng "Tải file quark baidu chỉ từ 5k" (124–459 view) – đối thủ VN mới, bán qua YouTube.
- Forum VN có thread: vn-z.vn (2 thread), tinhte.vn (2 thread), chiase.org, daynhauhoc.com (CSDN), code24h.com – hầu hết cũ, chưa có dịch vụ nào chiếm.
- Bài "cách tải file baidu không cần tài khoản" của các blog VN (fastviet.vn 2022, queenmobile.net 09/2026, hocdohoacaptoc.com, dtvc.edu.vn CSDN 2023) **không link tới dịch vụ nào** → chỗ trống để xin đặt link/guest post.

---

## 3. Ai đang xuất hiện cho từ khoá nào (quan sát SERP, không phải vị trí chính xác)

| Truy vấn | Xuất hiện (theo WebSearch/Bing, thứ tự ≈) | Ghi chú |
|---|---|---|
| `download baidu pan without account` / `how to download from baidu without account` | gist BaiduDownloader, gist erraz1 (erranium), multcloud, tumblr cũ, **baidu.erranium.com**, **baidulinkdownloader.com** (home + /resources), robots.net, tenorshare, unanswered.io, reddit r/Piracy (2019) | Google kết quả trang 1 gần như toàn gist + 2 dịch vụ + listicle. |
| `baidu pan downloader` | GitHub dotennin/baidu-pan-downloader, archive.org, gist erraz1, wiki, **baidulinkdownloader**, **erranium**, **baidudownloader.com**, **baidudl** | 4 dịch vụ cùng lên. |
| `baidu downloader` | Trustpilot của baidulinkdownloader, YouTube channel Baidu Link Downloader, gist erraz1, erranium, baidulinkdownloader, uptodown, tenorshare | Trustpilot + YouTube chiếm 2 slot → "SERP real estate" bằng tài sản ngoài site. |
| `csdn downloader` / `download csdn without account` | gist pyremudune, gist BaiduDownloader, scribd (PDF do baidudownloader.com upload), YouTube baidudownloader.com (11.5k), Quora, **baidudl.com/sc/download-files-from-csdn**, **baidudownloader.com/product/…**, ilvruan.com, greasyfork script | Ít đối thủ nhất; scribd + gist + YouTube của 1 brand chiếm 4 slot. |
| `quark pan downloader` / `123pan download` | gist myheart111 (baidufast), itch.io (baidufast), caimogu (erranium), **quarkdownloader.com**, erranium, baidulinkdownloader | baidufast đang chiếm bằng gist/itch trong vài ngày. |
| `tải baidu` | fptshop, dienmaycholon, tiengtrung.vn, welog… (toàn bài "Baidu là gì / tải app Baidu") | Intent lệch: "tải baidu" = tải app; keyword đúng là "tải file baidu", "tải file pan baidu". |
| `tải file baidu` / `cách tải file baidu không cần tài khoản` | YouTube Kênh 5 Phút, YouTube Hieu IT, queenmobile.net, **itcuaban.com**, **taikhoanpre.com/blog**, **baidulinkdownloader.com/vi**, fastviet.vn, vn-z.vn, hocdohoacaptoc.com, dichvuchina.vn, taikhoanpre product, dichvuchina.com product | Không có tool tự động tiếng Việt nào; baidulinkdownloader /vi là site nước ngoài duy nhất lọt. |
| `tải file csdn` | daynhauhoc, YouTube Panbaidu Team, taikhoanpre CSDN key, itcuaban CSDN tool, code24h, dtvc.edu.vn, tinhte | Chỉ shop VN bán key. |
| YouTube `download baidu pan without account` | BaiduFast (3 video mới), TheChinaGuy, Guide Glimpse, Baidu Link Downloader (6.8k), Kênh 5 Phút (16.5k), baidudownloader.com (26.2k), BAIDUDL Quark (10.7k), Fast Downloader (3.5k), Erra Erranium (9k) | YouTube search trả video VN cho query EN → cơ hội video song ngữ. |

Từ khoá thấy trong Similarweb (đang thực sự mang traffic): "baidu downloader", "pan baidu downloader", "baidu link downloader", "baidu downloader free", "pan quark downloader free", "pan.quark download bypass", "download from xunlei pan", "baidu 登録 せずにダウンロード", "바이두 다운로드", "pan.quark 가입 방법", "baidu netdisk", "baidu downloader theo lượt" (VN), "thuê sim trung quốc" (VN). Volume cụ thể: **chưa xác minh** (không có tool).

---

## 4. Backlink / nguồn giới thiệu nhìn thấy được (theo kênh)

| Kênh | Ai dùng | Bằng chứng | Bài học |
|---|---|---|---|
| **GitHub Gist** (rank như blog, DA cao) | erranium (erraz1: 80★, 8 fork, comment tới 28/09/2026), baidufast (myheart111, 3★), baidudownloader.com (BaiduDownloader: 8★; + gist qapovo, pivud tiếng Trung, pyremudune CSDN), Bing còn index gist sznmyuka | Gist có cấu trúc: Intro → Steps → Speed table → Pricing → Comparison → Deprecated methods → FAQ → Disclaimer, kèm UTM, trả lời comment xin tải hộ (mỗi comment = social proof) | Tạo 3–5 gist (EN/VI/ZH, theo host & theo CSDN) và nuôi comment. |
| **Forum Q&A** | erranium: tek-tips (10/2025), XDA, HF Discuss (06/2025), caimogu.org ×2 (11/2025), Quora Space; baidufast: HF Discuss (09/2026), itch.io (09/2026); baidudownloader: Quora answer | Thread HF "Can someone with a Chinese Baidu NetDisk account help me download this dataset?" là mẫu intent lý tưởng (dataset) | Theo dõi thread mới trên HF/GitHub issues "pan.baidu.com link" và trả lời thật (không multi-nick). |
| **YouTube** | Tất cả, nhưng view thật chỉ có: baidudownloader.com (26.2k, 11.5k), Panbaidu Team VN (40.5k mới, 18.2k sub), Kênh 5 Phút (16.5k), Hieu IT (22.8k), BAIDUDL (10.7k), Erra Erranium (9k), Baidu Link Downloader (6.8k, 5.7k, + bản dịch) | Video "2026" tiêu đề keyword; baidulinkdownloader dịch 1 video ra 5 ngôn ngữ | Video song ngữ VI/EN + bản JP/KR/TH/ID dịch AI. |
| **Telegram** | baidudownloader.com group 957 thành viên (kênh giữ khách + "free <4GB"), channel @baidudownloade 381 sub (dịch vụ ẩn danh @Lioer), baidufast 43, fastdown, itcuaban, dichvuchina bot | Telegram vừa là support vừa là "free code of the day" (baidufast) | Bot Telegram + kênh VN riêng. |
| **Trustpilot/ScamAdviser** | baidulinkdownloader 149 review, erranium 82, baidufast mới mở (nút /evaluate), erranium ScamAdviser | Trustpilot chiếm slot SERP "baidu downloader" | Mở Trustpilot ngày 1, xin review ngay sau giao file. |
| **Directory / PR nhỏ** | baidudl: startuplist.ing (289 view, mã giảm giá), Medium ×2 tài khoản, X | – | Product Hunt/BetaList/AlternativeTo (chưa ai có – kiểm tra thấy không có kết quả). |
| **Listicle bên thứ 3** | tenorshare (28/09/2026), robots.net, unanswered.io, gizdev, dfc-studio, droidwin, multcloud | tenorshare/robots.net link erranium & baidulinkdownloader → có thể là outreach hoặc AI-written | Outreach xin thêm/ thay link ở 6 bài này + các blog VN không link ai. |
| **Banner trả phí** | premiumdownloader.net → baidudownloader.com (nofollow sponsored, UTM) | – | Mua banner trên debrid/leech site khác (LinkSnappy, neodebrid…) cho keyword Baidu họ không phục vụ. |
| **Domain vệ tinh/clone** | erranium: baidulinkdownload.com, baidulinksdownloader.com; TorBox: baidudownloader.pro; baidudl → quarkdownloader.com | Exact-match domain + clone | Chỉ nên làm exact-match **có nội dung riêng** (kiểu quarkdownloader), tránh clone. |
| **Affiliate/Referral** | erranium (2.5 credit bonus), baidudl (dashboard Referrals, không public), fast-download.org (Referral Reward Program Agreement) | Không ai có affiliate % công khai cho blogger/YouTuber | Ra affiliate 20–30% công khai → thu hút chính các blog VN/EN đang không link ai. |
| **Reddit** | Chỉ thấy thread r/Piracy 2019 và tuyên bố "Reddit community" của baidudownloader.com (chưa xác minh) | Reddit chặn crawler; baidufast có checkbox "Reddit" trong survey → họ đang thử | Gần như trống. |

---

## 5. Ước lượng traffic (tổng hợp, kèm độ tin cậy)

| Site | Similarweb (public, 08–09/2026) | Độ tin cậy | Tín hiệu khác |
|---|---|---|---|
| baidulinkdownloader.com | ~33k visit/tháng, rank 781k, organic 66%, bounce 35%, 56s | Trung bình | Trustpilot 86 review/12 tháng ≈ 7/tháng; Tranco "low" |
| baidu.erranium.com | 20.1k/3 tháng (~6–7k/tháng), −44% MoM, bounce 25%, 3'28" | Trung bình | 78 review/12 tháng; gist 80★ |
| premiumdownloader.net | 23.4k/3 tháng, rank 895k, +50% | Trung bình | – |
| baidudl.com | rank 2.41M, −79% MoM, 26s/visit | Thấp (đổi domain 04/2026) | "10.000+ links since 2023" tự khai |
| quarkdownloader.com | rank 1.49M, −2% | Thấp | "2.000+ users" tự khai |
| dichvuchina.vn | ~5.8k/tháng, VN #47.9k, −67% | Thấp | 1.052 view bài Baidu |
| taikhoanpre.com | VN #30k, 7 trang/visit, 6'02" | Thấp–TB | YT 18.2k sub (nếu đúng chủ) |
| itcuaban.com | VN #74k | Thấp | YT 2.18k sub |
| baidudownloader.com | −91% MoM, 4.8 trang, 1'33" | Thấp | Telegram 957 |
| baidufast.com, fastdown.io, baidudownloaderfree.com, premiumdownloader.io | Không có/không đủ dữ liệu | – | baidufast tự khai 1.696 file/9.8TB (3 tuần) |

Kết luận: **toàn ngách ≈ vài chục nghìn visit/tháng cộng lại** ở phía EN; VN thêm vài chục nghìn nữa nhưng phân tán qua YouTube/Zalo. Nhu cầu thật (HF, itch, caimogu, forum) tồn tại nhưng chưa được gom về 1 brand lớn nào.

---

## 6. So sánh funnel chuyển đổi

| | baidufast | baidudl | erranium | baidulinkdownloader | baidudownloader.com | VN shops |
|---|---|---|---|---|---|---|
| Bước 1 | Paste link, **thấy size+giá không cần đăng ký** | Chọn plan → đăng ký (bắt buộc với subscription) | Paste → **đăng ký** (email tạm OK) | Paste → dashboard/đăng ký | Paste → "Calculate price" (reCAPTCHA) → Woo checkout | Nhắn Zalo/đặt hàng Woo, chuyển khoản |
| Free tier | 150MB/ngày + code Telegram + share-to-unlock | Không | <20MB (chính sách) | 50MB tổng link | mã 1GB (chưa xác minh) / Telegram <4GB | itcuaban 500MB (đã ngưng) |
| Trình bày giá | Per-GB + **trần** + gạch giá cũ, ví dụ cụ thể | 3 tier năm/tháng/1 lần + bảng "vs đối thủ" ngay trang chủ | Ẩn sau login, chỉ có pricing-policy text | Không công khai | $0.99 + $0.5/GB trên product | VND theo bậc/GB |
| Thanh toán | PayPal, Whop card/Apple/Google Pay, USDT | Stripe/PayPal, PromptPay (TH) | Paddle | IntaSend, PayPal | PayPal guest/Stripe | Bank VN, USDT, PayPal (dichvuchina) |
| Giao hàng | Direct link/Google Drive, ZIP có pass, 10 ngày | Email + dashboard, 7 ngày, guarantee 24h | Google Drive/direct, "minutes" | "avg 5 mins", live chat | Email link GD, tối đa 6h, 5 ngày | Zalo/GD |
| Sau bán | Rate + Trustpilot + survey kênh + coffee | Referral (ẩn), roadmap/changelog | Referral 2.5 credit, ép review (bị tố) | Xin review Trustpilot | Bonus item $5 "tip" | – |
| Trust | 49 review on-site, counter | "10k links/100TB", guarantee, price-match | Trustpilot 4.5, schema rating | Trustpilot 4.7/149, 99.9% | 25 review Woo, Telegram 957 | Review Woo, hotline, "since 2022" |

---

## 7. Top 10 chiến thuật đáng copy

1. **"Check size & price trước, không cần tài khoản"** (baidufast) – bước 1 chỉ đọc metadata, hiện giá minh bạch → giảm bounce, tạo micro-commitment. Kết hợp **link checker miễn phí** như một tool riêng (rank cho "baidu link check / link expired").
2. **Landing theo host + wiki theo host** (baidudl `/sc/download-files-from-<host>` + `/wiki/<host>`) và **tutorial theo nguồn nội dung** (erranium `/tutorials/{caimogu,taptap,xiaohongshu}`, baidufast blog caimogu/sysin/chess-pgn/firewall-lab) – mỗi trang 800–1.400 từ, FAQ schema, CTA lặp 2 lần.
3. **Trang so sánh đối thủ có tên thật** (`/comparisons/x-vs-y`, `blog/…-comparison-2026`) – chiếm keyword "<đối thủ> alternative" và "best baidu pan downloader"; kèm test thực tế (baidufast: folder 13.230 file).
4. **Gist GitHub có cấu trúc + UTM + trả lời comment** (erraz1 80★ là backlink/SERP asset mạnh nhất ngách) – làm bản EN, VI, ZH và bản riêng CSDN/Quark/123pan.
5. **Video YouTube keyword-first, 1 video dịch nhiều ngôn ngữ** (baidulinkdownloader), tiêu đề chứa giá/USP ("50 GB for $4.80", "Free under 150MB"), và **kênh tiếng Việt** (Panbaidu Team 40k view/3 tuần chứng minh nhu cầu VN lớn hơn EN).
6. **Trust stack ngày 1**: Trustpilot + AggregateRating schema + counter "file/GB đã xử lý" + review on-site có ngày + "verified download" + guarantee giao hàng (baidudl 24h) + refund policy riêng trang.
7. **Free tier có điều kiện lan truyền**: "code of the day" trong Telegram, share-to-unlock, referral credit (erranium) – biến free thành kênh acquisition, không phải chi phí.
8. **Đa ngôn ngữ đúng kỹ thuật** (hreflang + x-default, URL `/vi/`, `/ja/`, `/ko/`, `/th/`, `/id/`) vì Similarweb cho thấy KR/JP/VN/TH/ID là 5 nước đầu của baidulinkdownloader và TH/VN của quarkdownloader – nhưng **dịch người thật cho VI** (lợi thế của ta), AI cho phần còn lại.
9. **Post-purchase survey "How did you find us?"** (baidufast) và UTM ở mọi kênh (gist, banner) – đo kênh từ ngày đầu.
10. **Roadmap / changelog / announcements công khai + blog "news" về host TQ** (baidudl: "123pan giới hạn băng thông non-VIP", "Alipan siết dung lượng") – nội dung rẻ, rank cho tên host, thể hiện "đang sống".

Bonus: robots.txt mời AI crawler (premiumdownloader.net) và programmatic page cho từng host (premiumdownloader.io 454 trang) – áp dụng cho ~15 host TQ + ~20 nguồn nội dung là đủ.

---

## 8. Điểm yếu của đối thủ để vượt

1. **Giao hàng thủ công/chậm** ("vài phút tới vài giờ", tối đa 6h, review 1★ chờ 6h+, taikhoanpre "hơi chậm") → ta có SVIP/VIP riêng + pipeline tự động: cam kết **SLA phút** hiển thị đồng hồ đếm trên trang, và đo thật.
2. **Giá per-GB khó hiểu + đắt** (erranium $2.99 GB đầu; baidudl bắt subscription) → giá phẳng theo bậc + trần + **VND** cho VN (chưa ai niêm yết VND ngoài shop thủ công) + thanh toán **MoMo/VietQR/ZaloPay** (chưa ai có).
3. **Free tier hẹp** (20–150MB) và **bắt đăng ký** (erranium, baidulinkdownloader, baidudl) → free ≤ 300–500MB không đăng ký (baidudownloaderfree đang thử 5GiB) hoặc free CSDN 1 file/ngày.
4. **CSDN bị bỏ rơi**: chỉ baidudl (landing template), erranium (tutorial), baidudownloader.com (product), 2 shop VN bán key. Không ai giải thích 积分/VIP专享/付费 và giá theo loại → ta có VIP CSDN riêng, làm **CSDN landing EN+VI+ZH + calculator giá theo link** như baidudownloader nhưng tự động.
5. **Review đáng ngờ** (erranium bị tố ép 5★, seeding HF nhiều nick của baidufast) → ta minh bạch: review có link đơn hàng, không ép; đăng "status page" tỷ lệ thành công.
6. **Kỹ thuật**: baidudl HTML 500KB, không schema; baidulinkdownloader/baidudl thin content 22 ngôn ngữ dịch máy; erranium clone domain; baidufast robots chặn gần hết; VN shops không sitemap (taikhoanpre) → site tĩnh nhẹ + schema + nội dung locale thật.
7. **Không ai làm cho developer/researcher đúng nghĩa** ngoài 1 trang của baidufast: không API, không CLI, không "paste GitHub README link" → API key + CLI + tích hợp (HF dataset card, Colab snippet) là blue ocean.
8. **Không affiliate công khai** → chương trình affiliate cho YouTuber VN (MTechStill, Kênh 5 Phút…) và blog listicle EN.
9. **Kênh VN chỉ Zalo/YouTube, không tool** → tool web tiếng Việt tự động là khác biệt tuyệt đối tại VN.
10. **Domain ngành đang biến động** (baidudl đổi domain, baidudownloader −91%, erranium −44%, baidulinkdownloader −26%) → thị phần đang trống để chiếm bằng content bền + brand.

---

## 9. Cơ hội keyword / kênh chưa ai chiếm

**Keyword tiếng Việt (chưa có tool tự động nào rank):**
- "tải file baidu không cần tài khoản", "tải file pan baidu tốc độ cao", "tải file quark không cần tài khoản", "tải file 123pan", "tải file csdn không cần tài khoản", "tải hộ baidu", "leech baidu", "link baidu tốc độ chậm", "mã trích xuất baidu (提取码) là gì", "baidu netdisk lỗi tải", "tải folder baidu về google drive", "mua tài liệu taobao nhận link baidu" (dichvuchina đã chỉ ra insight: khách VN mua đồ số trên Taobao nhận link Baidu/123pan).
- Lưu ý: "tải baidu" trần = intent tải app → tránh; dùng "tải file baidu".

**Keyword EN long-tail theo nguồn nội dung (baidufast/erranium mới chạm 5–6 nguồn):**
- "download <X> from baidu pan": Civitai/LoRA/Stable Diffusion checkpoint, HuggingFace dataset mirror, GitHub README "百度网盘 link", ModelScope, 3DMGAME/ali213 game, CG textures, Bilibili course, Zhihu 资料, Wenku/Doc88 (itcuaban bán Wenku downloader → nhu cầu có), Genshin/HSR mods (GameBanana), MMD models, sách EPUB/PDF, phim/sub (rủi ro DMCA → tránh).
- Keyword theo lỗi/trạng thái: "baidu pan link expired / 链接不存在", "baidu group share can't transfer", "baidu extraction code invalid", "pan.baidu.com 页面不存在", "baidu netdisk 50 KB/s", "why baidu pan slow outside china" (baidufast + baidudownloaderfree mới có 1 bài mỗi).
- Keyword so sánh/alternative: "pandownload alternative 2026", "kinhdown alternative", "baidudl alternative", "erranium alternative", "baidu pan vs terabox", "multcloud baidu not working".
- CSDN: "csdn download without points", "csdn vip资源 download", "csdn 积分 downloader", "csdn 付费资源 mua hộ".

**Ngôn ngữ/thị trường:** JP ("baidu 登録せずにダウンロード", "百度网盘 ダウンロード 海外"), KR ("바이두 다운로드 계정 없이", "pan.quark 가입 방법"), TH, ID ("cara download baidu pan tanpa akun"), **ZH cho Hoa kiều/du học sinh** ("海外 百度网盘 下载 无账号", "留学生 百度网盘 限速") – đối thủ chỉ dịch máy, không ai viết ZH thật.

**Kênh trống:** Reddit (r/DataHoarder, r/StableDiffusion, r/GenshinImpact mods, r/LocalLLaMA – nơi link Baidu xuất hiện), Discord server game-mod/AI, GitHub Issues ("pan.baidu.com" trong README – trả lời kèm link mirror), Bilibili/Zhihu (ZH), Product Hunt/AlternativeTo (chưa ai list), Facebook Group VN (Taobao/1688 order, đồ hoạ, kiến trúc – khách mua tài liệu nhận link Baidu), TikTok VN (chưa thấy đối thủ), affiliate cho YouTuber VN, guest post trên 6 blog VN + 6 listicle EN đang không link dịch vụ nào.

---

## 10. Nguồn

Trang đối thủ (fetch 28/09/2026): https://baidufast.com/ · https://baidufast.com/sitemap.xml · https://baidufast.com/pricing · https://baidufast.com/for-researchers · https://baidufast.com/blog/baidu-pan-downloader-comparison-2026 · https://baidufast.com/guides/pandownload-alternatives · https://baidufast.com/huong-dan-tai-file-baidu · https://baidudl.com/ · https://baidudl.com/sitemap-0.xml · https://baidudl.com/pricing · https://baidudl.com/comparisons/baidudl-vs-baidu-erranium · https://baidudl.com/guaranteed-delivery · https://baidudl.com/blog/we-are-moving-to-a-new-domain · https://baidudl.com/blog/is-baidudl-a-safe-and-legit-service · https://baidudl.com/sc/download-files-from-csdn · https://baidudl.com/accounts · https://blog.baidudl.com/sitemap-posts.xml · https://baidu.erranium.com/ · https://baidu.erranium.com/sitemap.xml · https://baidu.erranium.com/pricing-policy · https://baidu.erranium.com/tutorials/xiaohongshu · https://baidu.erranium.com/tutorials/csdn · https://baidulinkdownloader.com/ · https://baidulinkdownloader.com/sitemap.xml · https://baidulinkdownloader.com/vi · https://baidulinkdownloader.com/resources/baidu/how-to-download-from-baidu-without-account · https://fastdown.io/ (+ sitemap_index, product page, blog "top sites") · https://baidudownloader.com/ (+ wp-sitemap) · https://baidudownloaderfree.com/ (+ wp-sitemap) · https://premiumdownloader.net/ (+ sitemaps, robots.txt) · https://premiumdownloader.io/ (+ sitemap, /free-premium-link-generator/baidu) · https://quarkdownloader.com/ · https://quarkdownloader.com/pricing · https://blog.quarkdownloader.com/best-pan-quark-downloader-in-2025-full-comparison-guide/ · https://dichvuchina.vn/ (+ sitemaps, bài tải hộ 07/2024) · https://dichvuchina.com/product/tai-file-pan-baidu-theo-gb · https://itcuaban.com/ (+ sitemaps, /sp/pan-baidu-downloader-tai-khong-can-tai-khoan/, /sp/cong-cu-tai-xuong-du-lieu-tu-csdn-net/) · https://taikhoanpre.com/ (+ sản phẩm tải file, CSDN key, blog) · https://baidulinkdownload.com/ · https://baidulinksdownloader.com/ · https://docs.fast-download.org/guide/introduction.html · https://baidudownloader.pro/

Bên thứ ba: Similarweb public pages cho baidudownloader.com, baidu.erranium.com, baidulinkdownloader.com, baidudl.com, quarkdownloader.com, fastdown.io, premiumdownloader.net, dichvuchina.vn, taikhoanpre.com, itcuaban.com · https://www.trustpilot.com/review/baidu.erranium.com · https://www.trustpilot.com/review/www.baidulinkdownloader.com · https://www.scamadviser.com/check-website/baidulinkdownloader.com · https://www.scamadviser.com/check-website/baidu.erranium.com · RDAP: https://rdap.verisign.com/com/v1/domain/{baidufast.com,baidudl.com,baidulinkdownloader.com,baidudownloaderfree.com,erranium.com,taikhoanpre.com,itcuaban.com,quarkdownloader.com} · https://gist.github.com/erraz1/97ac8ef2b9f629c8c0620d79b0795749 · https://gist.github.com/myheart111/c7240ff6bc6ec0265e93ad20869a03a7 · https://gist.github.com/BaiduDownloader/de3732904045d9f78e9ab8e6c7f1b608 · https://discuss.huggingface.co/t/can-someone-with-a-chinese-baidu-netdisk-account-help-me-download-this-dataset/160296 · https://www.tek-tips.com/threads/how-to-download-from-pan-baidu-without-registration-in-2025.1835647/ · https://itch.io/t/7000435/… · https://www.caimogu.org/post/16388.html · https://startuplist.ing/p/mtnesm · https://t.me/BaiduDownloader_Help · https://t.me/BaiduFast_Support · https://t.me/baidudownloade · https://www.tenorshare.com/knowledge/pan-baidu-downloader.html · https://robots.net/how-to-guide/how-to-download-from-baidu-without-account/ · https://unanswered.io/guide/how-to-download-files-from-baidu-without-account · https://www.gizdev.com/download-files-from-pan-baidu-using-link-generator/ · https://www.multcloud.com/tutorials/how-to-download-from-pan-baidu-1003.html · YouTube search/channel data (ytInitialData) cho @BaiduLinkDownloader, @BAIDUDL, @BaidudownloadFast, @taikhoanbaidu1, @hieuit và các video ID nêu trong §2/§3 · https://medium.com/@baidudl (qua kết quả tìm kiếm; trang 403) · https://www.youtube.com/c/KaitoZ/playlists (Panbaidu Team) · https://www.letsplayindex.com/channels/265745-… (thống kê kênh Panbaidu Team – chưa xác minh).

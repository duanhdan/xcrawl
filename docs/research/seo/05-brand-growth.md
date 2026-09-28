# 05 – Chiến lược Brand + Growth Marketing (ngoài SEO thuần) cho dịch vụ tải Pan Baidu / CSDN

*Ngày lập: 28/09/2026. Dựa trên research 01–03 trong `docs/research/` (bảng giá đối thủ, khoảng trống thị trường, phân tích baidudownloader.com) + tra cứu web mới. Mọi số liệu có nguồn; chỗ nào không kiểm được ghi rõ "chưa xác minh". Chỉ đề xuất cách làm white-hat.*

---

## 0. Tóm tắt điều hành

- **Định vị:** "Tải file host Trung Quốc **tức thì**, không cần tài khoản – chạy trên SVIP thật, trả tiền theo GB, có free tier." Đối thủ hiện tại hoặc **chậm/thủ công** (BaiduDownloader trễ tối đa 6 h, BAIDUDL "vài giờ"), hoặc **không có CSDN/free tier/thanh toán địa phương** (xem 02 §3). USP cốt lõi: *tự động tức thì + đa host + rẻ hơn 20–40 % + VietQR/Momo/PayPal/USDT + 8–10 ngôn ngữ*.
- **Tên/domain:** không dùng "Baidu"/"CSDN" trong tên thương hiệu (rủi ro nhãn hiệu, phụ thuộc 1 host); tên ngắn, gợi "pan"/"fetch"/"bridge". Ứng viên: **PanFetch, GetPan, PanBridge, Sinofetch, Fetchly** (chưa xác minh tình trạng domain – xem §1.3).
- **Freemium + PLG:** free 200 MB/link, 3 link/ngày không cần tài khoản; đăng ký = +500 MB/ngày; referral "mời bạn – cả hai nhận 1 GB" khi bạn mua lần đầu (mô hình TorBox/Real-Debrid nhưng tính bằng GB); điểm thưởng 1 điểm/USD → đổi GB. Giá: PAYG **0,69 USD GB đầu + 0,39 USD/GB**, trần 3,99 USD (≤50 GB); gói tháng 3,99 / 7,99 / 14,99 USD; VN **8k VND/GB, tối thiểu 10k**, gói 100 GB 149k.
- **Kênh growth theo thứ tự ROI:** (1) Telegram bot (+ Telegram Ads chỉ cho phép landing là bot/kênh → khớp), (2) trả lời "free fetch" trên Hugging Face/GitHub issues/Reddit/VOZ/arca.live (cách BaiduFast đang làm, có bằng chứng hiệu quả), (3) Chrome extension "companion" (ít cạnh tranh trong CWS nhưng phải tránh điều khoản "circumvent login"), (4) API/white-label cho reseller (premiumdownloader.net/.io, TorBox đang tắt Baidu, shop VN đang "hết hàng"), (5) Discord bot cho cộng đồng mod game/AI.
- **Paid:** Google Ads rủi ro trung bình (chính sách Copyrights: "unauthorized sites or software that … provide access to copyrighted content"); Reddit Ads khả thi (min 5 USD/ngày); Telegram Ads khả thi và hợp nhất với bot (CPM sàn 0,1 TON, vào qua Adsgram 10 USDT/ngày + cọc 500 USDT hoặc reseller 1.000–5.000 EUR). Ngân sách paid ≤ 15 % tổng.
- **Thị trường ưu tiên:** T1 = Việt Nam + tiếng Anh toàn cầu (AI/ML researcher, dev, modder); T2 = Indonesia, Hàn Quốc, Nhật; T3 = Nga, Malaysia/Thái, Brazil/Tây Ban Nha. Bằng chứng định tính trong §6 (Google Trends cần chạy tay – §6.3).
- **Pháp lý:** định vị "cầu nối kỹ thuật, không lưu trữ >72 h, không index, DMCA agent, người dùng cam kết có quyền truy cập"; pháp nhân ngoài TQ (SG/US LLC) để có Stripe/PayPal; không dùng logo/tên Baidu; tính chi phí khoá tài khoản SVIP vào giá.
- **Roadmap 6 tháng:** M1 MVP web + bot; M2 thanh toán địa phương + referral; M3 extension + đa ngôn ngữ; M4 API reseller + Discord; M5 paid test; M6 tối ưu retention. **Ngân sách ~6–9k USD/6 tháng**, KPI M6: 30k visit/tháng, 3k user bot, 500 khách trả phí, MRR 3–5k USD.

---

## 1. Định vị brand, tên & domain, USP

### 1.1 Bối cảnh cạnh tranh (rút từ 02)

| Đối thủ | Điểm yếu để ta đánh vào |
|---|---|
| BaiduFast (0,79→0,98 USD GB đầu + 0,48/GB; free 150 MB; 11 ngôn ngữ; 1.696 file/9.812 GB đã giao) | Không CSDN, Quark beta, chưa có referral/API/extension, không có gói tháng. Nguồn: https://baidufast.com/ |
| BAIDUDL (từ 1,99 USD/link; gói năm 69–299 USD; "10.000+ link, 100 TB+") | Giao "trong vài giờ", file nhỏ đắt, không free tier, không API/bot. Nguồn: https://baidudl.com/ |
| BaiduDownloader.com (0,99 + 0,5 USD/GB, GD delivery, trễ tới 6 h) | Thủ công (worker + SVIP cá nhân), chỉ EN, không blog, chỉ PayPal/card. Nguồn: research 03 |
| BaiduLinkDownloader (11 host, free 50 MB, có /vi /ko /ja /ru) | Giá ẩn, pricing lỗi, không bot/API. Nguồn: https://baidulinkdownloader.com/ |
| Shop VN (DichvuChina 10–50k VND/GB; ITcuaBan tool sập; Taikhoanpre "hết hàng") | Thủ công qua Zalo, không tự động, không Momo/VietQR tự động. Nguồn: research 02 §2.3 |

→ **Khoảng trống định vị**: *"Instant + automated + local payment + multi-host + honest pricing"*. Không ai trong nhóm quốc tế có cả bot Telegram giao dịch, API reseller lẫn gói tháng kiểu debrid; không ai ở VN có tự động hoá.

### 1.2 Tuyên bố định vị (positioning statement)

> Dành cho **nhà nghiên cứu, kỹ sư, modder, fan phim/anime và người học tiếng Trung ở ngoài Trung Quốc** cần lấy file từ Pan Baidu, CSDN, Quark, 123pan… mà không có SĐT +86 hay tài khoản SVIP, **[Brand]** là dịch vụ tải hộ **tự động, trả link trong vài phút**, chạy trên tài khoản SVIP/VIP thật, giá theo GB rẻ nhất phân khúc, nhận thanh toán nội địa (VietQR/Momo, PayPal, thẻ, USDT) và **không lưu trữ file của bạn quá 72 giờ**.

**Trụ cột thông điệp (message pillars)** – mỗi trụ cột phải có bằng chứng đo được trên landing:
1. **Instant** – "Link sẵn sàng trung bình < 3 phút cho file < 5 GB" (đo thật, hiển thị counter). Đối thủ: "vài giờ".
2. **Real SVIP speed** – "~20 MB/s từ Baidu, không throttle 100 KB/s" (BaiduFast công bố 19 MB/s; free Baidu đo 53–170 KB/s – research 01).
3. **Free first** – 200 MB free/link, 3 link/ngày, không cần đăng ký (cao hơn BaiduFast 150 MB, BaiduLinkDownloader 50 MB).
4. **Multi-host, one wallet** – Baidu + CSDN ngày 1; Quark/123pan/Alipan/Lanzou theo roadmap.
5. **Pay your way** – VietQR/Momo, PayPal, Visa/MC, USDT; giá niêm yết VND/USD/IDR/KRW.
6. **Privacy by design** – không index, không thư viện link công khai, tự xoá sau 72 h, DMCA.

**Tone of voice:** kỹ thuật – thẳng – minh bạch (giống BaiduFast/TorBox), tránh giọng "leech/crack". Từ khoá thương hiệu nên dùng: *fetch, bridge, transfer, mirror*; tránh: *leech, crack, bypass, hack*.

### 1.3 Gợi ý tên & domain (CHƯA XÁC MINH tình trạng đăng ký)

Nguyên tắc: (a) không chứa "baidu"/"csdn" (nhãn hiệu của Baidu Inc./CSDN; đối thủ dùng nhiều nên cũng khó nổi bật); (b) ≤ 8 ký tự, dễ phát âm ở VN/ID/KR/JP; (c) có .com hoặc .io + .vn; (d) không trùng đối thủ đã có: *pandafetch.click* (đã tồn tại – https://www.pandafetch.click/), *getpandl.com* (khác ngành), *PanGet* (tool khoa học PANGAEA).

| Ứng viên | Ý nghĩa | Tín hiệu từ search (không thay thế WHOIS) |
|---|---|---|
| **panfetch.com / .io** | pan + fetch | Không thấy site nào tên này trong kết quả search → *có vẻ trống, chưa xác minh* |
| **getpan.io** | "lấy file từ pan" | Không thấy kết quả trực tiếp → chưa xác minh |
| **panbridge.com** | cầu nối pan ↔ thế giới | Không thấy kết quả → chưa xác minh |
| **sinofetch.com** | fetch từ host TQ (đa host) | Không thấy kết quả → chưa xác minh |
| **panleech.com** | rõ nghĩa nhưng "leech" tiêu cực | Không thấy kết quả; **không khuyến nghị** vì tone |
| **fetchpan.com** | biến thể | Không thấy kết quả → chưa xác minh |

Khuyến nghị: chọn 1 tên chính (.com) + mua .io/.vn/.app phòng thủ, đăng ký social handle đồng bộ (t.me/<brand>_bot, @brand trên X/GitHub/YouTube). Kiểm tra bằng WHOIS/RDAP + USPTO/WIPO trước khi mua. Nguồn tham chiếu search domain: kết quả WebSearch ngày 28/09/2026 (không có hit cho các tên trên).

### 1.4 Bộ USP dựa trên việc có SVIP thật

| USP | Bằng chứng cần trưng trên site | Đối thủ có? |
|---|---|---|
| Tự động tức thì (queue → worker SVIP → R2/direct link) | Counter "thời gian giao trung bình 24 h qua", status page | BaiduFast (≈1 phút/GB) có; BaiduDownloader/BAIDUDL không |
| Tốc độ | Video test tải 10 GB; speedtest bằng aria2/IDM | BaiduFast có video |
| Free tier 200 MB, 3 link/ngày, không đăng ký | Ô paste ngay đầu trang | 150 MB (BaiduFast), 50 MB (BLD) |
| Đa host (Baidu + CSDN ngày 1) | Bảng host + trạng thái từng host (live) | BAIDUDL/BLD nhiều host, không CSDN tự động |
| Thanh toán địa phương | VietQR động (payOS/SePay), Momo, PayPal, thẻ, USDT | Không ai có VietQR tự động |
| Đa ngôn ngữ (EN, VI, ID, KO, JA, RU, TH, ES, PT, ZH) | Hreflang + UI dịch + support FAQ | BaiduFast 11 ngôn ngữ; BLD 4 |
| Không lưu trữ >72 h, DMCA | Trang Legal + DMCA agent | Erranium có ToS tương tự |

---

## 2. Freemium / Product-led growth

### 2.1 Free tier

| Trạng thái | Quota | Điều kiện |
|---|---|---|
| Khách (không đăng ký) | ≤ **200 MB/link**, **3 link/ngày** | Cloudflare Turnstile + giới hạn theo IP + fingerprint; link sống 24 h |
| Đăng ký (email xác thực) | ≤ 200 MB/link, **tổng 500 MB/ngày** + 1 GB "welcome credit" dùng cho file lớn | Chặn email dùng một lần; 1 tài khoản/thiết bị |
| Referral | +1 GB cho **cả hai** khi người được mời **mua lần đầu** (không thưởng khi chỉ đăng ký) | Cap 50 GB thưởng/tháng/người |
| Điểm thưởng | 1 điểm / 1 USD chi tiêu (hoặc 25k VND); 100 điểm = 10 GB | Điểm hết hạn 12 tháng |

Lý do "thưởng khi mua, không thưởng khi đăng ký": TorBox chỉ cộng 7 ngày × số tháng cho referrer/referee khi có **giao dịch trả phí đầu tiên**, loại trừ voucher/gift card ([TorBox Help](https://support.torbox.app/en/articles/9875657-how-does-the-torbox-referral-system-work)); Real-Debrid cộng 5 ngày + 50 điểm fidelity mỗi referral, 1.000 điểm = 30 ngày ([affiliatejoin](https://www.affiliatejoin.com/real-debrid-affiliate-program)). Cả ngành debrid không trả hoa hồng tiền mặt → dùng GB/ngày làm "tiền tệ" là chuẩn ngành, chống farm tài khoản.

### 2.2 Bảng giá đề xuất (tâm lý giá: charm pricing, anchor, 3 bậc, decoy)

Nguyên tắc: 3 bậc chuyển đổi ~1,4× so với 2 bậc, ≥4 bậc giảm; giá .99/.49 nâng đơn vị bán ~24 % trung bình; bậc "decoy" đẩy 10–30 điểm % sang bậc mục tiêu ([Schematic](https://schematichq.com/blog/saas-pricing-psychology), [Mida](https://www.mida.so/blog/psychological-pricing), [Monetizely](https://www.getmonetizely.com/articles/why-does-99-work-better-than-100-the-psychology-behind-charm-pricing-in-saas)).

**A. Pay-as-you-go (không tài khoản cũng mua được)**

| Mốc | Đề xuất | So với đối thủ |
|---|---|---|
| GB đầu | **0,69 USD** | BaiduFast 0,98 (mới tăng), BaiduDownloader/Fastdown 0,99 |
| Mỗi GB thêm | **0,39 USD** | 0,48 / 0,50 / 0,33 (Fastdown) |
| Trần ≤50 GB | **3,99 USD** | BaiduFast 4,80; BAIDUDL 4,99 |
| Trần ≤150 GB | **8,99 USD** | BaiduFast 9,80 |
| Trần ≤500 GB | **24,99 USD** | BaiduFast 49,80 cho 1 TB |
| CSDN | **0,49 USD/file**, gói 5 file 1,99 USD; tài liệu 付费 = giá gốc + 30 % | BAIDUDL 1,99/link; TQ 1,98 CNY |
| Wenku/Doc88 (giai đoạn 2) | 0,99 USD/tài liệu | Gần như không ai niêm yết |

**B. Gói tháng (anchor = Pro, mục tiêu bán = Plus)**

| Gói | Giá | Quota | Ghi chú |
|---|---|---|---|
| Lite (decoy) | 3,99 USD | 60 GB/tháng, 10 link/ngày | Cạnh tranh mức "3 USD" TorBox nếu họ bật lại Baidu |
| **Plus** (highlight) | **7,99 USD** | 250 GB/tháng, 30 link/ngày, ưu tiên hàng đợi, giữ link 10 ngày | Mục tiêu 60 % người mua |
| Pro | 14,99 USD | 700 GB/tháng, API key, 3 link song song, giữ 30 ngày | Anchor + reseller nhỏ |
| Năm | –20 % | | Referral ×12 như TorBox |

**C. Việt Nam (niêm yết VND, VietQR/Momo tự động)**

| Mục | Giá |
|---|---|
| Theo GB | **8.000 VND/GB**, tối thiểu 10.000 VND (DichvuChina 10–50k/GB; ITcuaBan thủ công 5k/GB nhưng tối thiểu 10k) |
| Gói 100 GB | 149.000 VND (≈1.490 VND/GB, ngang ITcuaBan tool cũ 75–79k/100 GB nhưng tự động) |
| Gói 500 GB | 499.000 VND |
| CSDN | 10.000 VND/file; 5 file 39.000 VND (Taikhoanpre 20k/key, ITcuaBan 15k) |
| Gói tháng Plus | 149.000 VND/tháng |

**D. Kiểm tra biên lợi nhuận (ước lượng, chưa xác minh chi phí băng thông thực tế)**
- SVIP Baidu ≈ 188–298 CNY/năm (research 01) ≈ 0,07–0,11 USD/ngày/tài khoản; CSDN VIP năm ≈ 372–388 CNY, 400 lượt (≈ 0,13 USD/lượt vốn → bán 0,49 USD OK).
- Chi phí biến đổi chủ yếu là **băng thông egress** từ VPS HK/SG (thường 0,01–0,05 USD/GB tuỳ nhà cung cấp; Cloudflare R2 egress 0) → ở 0,39 USD/GB biên >80 %; gói Plus 7,99 USD/250 GB vẫn dương nếu người dùng dùng hết (fair-use ~40 % thực dùng là bình thường ở debrid).
- Rủi ro chi phí ẩn: **khoá tài khoản SVIP** (tính dự phòng 20–30 % tài khoản/quý) và **hạn mức tải/ngày** của Baidu cho từng tài khoản (chưa có số công khai – theo dõi thực nghiệm).

### 2.3 Chống lạm dụng free tier (chi phí SVIP + băng thông)

1. **Không đăng ký = giới hạn theo (IP + fingerprint + Turnstile)**; ≤3 link/ngày; chặn ASN datacenter/VPN cho free tier (proxy detection), cho phép khi đăng ký.
2. **Đăng ký = email xác thực**, chặn domain email dùng một lần, giới hạn 3 tài khoản/IP/ngày, "progressive friction" (yêu cầu SĐT/thanh toán 1 USD khi tài khoản chạm quota trong 24 h đầu). Đây là bộ thực hành chuẩn: rate limit 3 signup/IP/ngày + theo dõi account chạm free limit trong 24 h + fingerprint thiết bị ([DEV](https://dev.to/dami14_14/how-to-prevent-free-trial-abuse-in-saas-when-rate-limits-are-not-enough-20ho), [Fingerprint](https://fingerprint.com/blog/free-trial-abuse/), [UserCheck](https://www.usercheck.com/guides/how-to-prevent-free-trial-abuse)).
3. **Cache theo share-link hash**: cùng link Baidu đã tải trong 72 h → phục vụ từ R2, không tốn SVIP. Phần lớn file "hot" (dataset, mod) lặp lại nhiều → free tier gần như 0 chi phí.
4. **Free pool riêng**: free tier chạy trên pool SVIP tách biệt, hàng đợi thấp hơn (ETA 5–15 phút), link sống 24 h; paid pool ưu tiên.
5. **Fair-use gói tháng**: 3 link song song, ≤ 100 GB/ngày, không chia sẻ tài khoản (khoá theo fingerprint > 3 thiết bị).
6. **Không cho free tier với folder** (folder = nhiều request API → tốn SVIP quota).
7. reCAPTCHA/Turnstile trên "calculate price" – BaiduDownloader từng bị "ăn trộm API" link checker (research 03 §1.3).

### 2.4 Vòng PLG

Paste link → thấy giá + ETA ngay (không cần đăng nhập) → free nếu <200 MB → link tải → **màn hình "share/referral"** ("mời bạn, cả hai nhận 1 GB") → email link sẵn sàng + nhắc hết hạn → dashboard "GB balance" → gói tháng khi ≥3 đơn/tháng (trigger email "bạn đã chi 6 USD tháng này, Plus 7,99 USD rẻ hơn").

---

## 3. Kênh phân phối & sản phẩm phụ

### 3.1 Telegram bot (ưu tiên số 1)

- Bằng chứng nhu cầu: baidudownloader.com có group hỗ trợ **955 thành viên** (research 03); BaiduFast dùng @baidufast_bot cho support; có mã nguồn mở bot Baidu (baiduwp-bot – cần BDUSS SVIP) và họ nhà "mirror-leech-telegram-bot" với hàng chục fork còn cập nhật 2026 ([GitHub](https://github.com/anasty17/mirror-leech-telegram-bot)) → người dùng ngách đã quen "gửi link cho bot".
- Sản phẩm: `/start` → dán link → bot trả ETA/giá → free hoặc thanh toán qua **web checkout** (link ra ngoài) → bot gửi link tải + nút "chia sẻ bot" (referral). Inline mode để dùng trong group; lệnh `/balance`, `/history`.
- **Thanh toán trong Telegram (Stars)**: tiện nhưng mất ~30 % (Apple/Google) trên mobile; Telegram chỉ bù nếu tái đầu tư vào Telegram Ads ([Merge](https://merge.rocks/blog/telegram-mini-apps-2026-monetization-guide-how-to-earn-from-telegram-mini-apps), [Telegram](https://core.telegram.org/bots/payments-stars)). → Dùng Stars chỉ cho gói nhỏ (≤3 USD) và để Telegram Ads "miễn phí"; gói lớn dẫn về web (PayPal/VietQR/USDT).
- Growth: bot là landing bắt buộc của Telegram Ads (§4.3); kênh @brand_news công bố host mới/uptime; group VN riêng (thay Zalo).
- Rủi ro: Telegram có thể khoá bot khi bị report bản quyền → áp dụng cùng chính sách DMCA, không lưu file trong Telegram cloud (chỉ trả link).

### 3.2 Discord bot

- Cộng đồng mục tiêu: server mod Genshin/Honkai (GIMI, GameBanana), MMD/DeviantArt, AI/ML (HF Discord), fansub. Slash command `/fetch <link>` trả link tải; free tier như web; mua GB qua web.
- Policy: Discord cấm monetize "other people's intellectual property" và bắt bot bán tính năng trả phí phải hỗ trợ Premium Apps với giá không cao hơn kênh khác ([Discord Monetization Policy](https://support.discord.com/hc/en-us/articles/10575066024983-Monetization-Policy), [Developer Policy](https://support-dev.discord.com/hc/en-us/articles/8563934450327-Discord-Developer-Policy)) → **không bán trong Discord**, bot chỉ là giao diện cho tài khoản web (liên kết tài khoản OAuth). Có Unauthorized Copyright Access Policy → bot phải có `/report` và ToS.
- Kỳ vọng: kênh nhỏ hơn Telegram nhưng CAC ≈ 0 nếu được admin server thêm bot; ưu tiên M4.

### 3.3 Browser extension (Chrome Web Store là "công cụ tìm kiếm" riêng)

**Hiện trạng CWS (28/09/2026):** rất ít extension sống về Baidu download: BaiduPan-Explorer (GitHub luochenzhimu, có bản CWS id `lncbhecjekffklnelbeninpnacopebcp`, cần tài khoản người dùng), "baidu netdisk" `kafofhjdbakcjcfpghofmdgahdjgemha` **đã bị gỡ**, "Baidu Direct Link" (không liên quan, 128 lượt tải, cập nhật 2019) ([crx4chrome](https://www.crx4chrome.com/extensions/cikciklbnelammeloomjncglcjpmojfd/), [chrome-stats](https://chrome-stats.com/d/kafofhjdbakcjcfpghofmdgahdjgemha)). → Từ khoá "baidu download" gần như bỏ trống trong CWS.

**Policy phải tuân thủ** ([CWS Program Policies](https://developer.chrome.com/docs/webstore/program-policies/policies), [cập nhật 2026, hiệu lực 01/08/2026](https://developer.chrome.com/blog/cws-policy-updates-2026)):
- "Do not facilitate unauthorized access to content on websites, such as circumventing paywalls or login restrictions."
- "Do not encourage, facilitate, or enable the unauthorized access, download, or streaming of copyrighted content or media."
- Single purpose; không keyword spam (>5 lần lặp); affiliate link phải minh bạch; video downloader bị "restricted from feature".

**Cách định vị an toàn:** extension là **"companion"** – (1) trên trang pan.baidu.com/s/… thêm nút "Send to [Brand]" (gửi link + 提取码 sang tài khoản của người dùng trên web), (2) kiểm tra link còn sống/kích thước (như "baidu-link-tester"), (3) quản lý lịch sử tải. Không tự tải, không inject cookie, không "bypass". Mô tả nêu rõ "for files you have the right to access". Xin **verified publisher** + nộp **Featured badge** (yêu cầu tính năng cốt lõi không cần trả phí → free tier đáp ứng) ([Discovery](https://developer.chrome.com/docs/webstore/discovery), [Extension.Ninja](https://www.extension.ninja/blog/post/how-to-get-established-publisher-badge-chrome-web-store/)). Rủi ro còn lại: reviewer coi "gửi link sang dịch vụ tải hộ" là circumvent login → chuẩn bị bản Firefox/Edge Add-ons dự phòng (chưa kiểm tra policy Firefox – chưa xác minh).

### 3.4 App / PWA

- **PWA** với Web Share Target (Android: "Share link → [Brand]"), push notification "link sẵn sàng", cài được từ Chrome/Safari. Không cần store, không phí 30 %.
- iOS Shortcut (paste từ clipboard) + Android app wrapper (TWA) chỉ khi có >20 % traffic mobile. **Không** nộp App Store sớm (Apple thường từ chối app "downloader" – kinh nghiệm cộng đồng, chưa xác minh chính sách mới nhất).

### 3.5 API cho reseller / đối tác / white-label

Bằng chứng nhu cầu: premiumdownloader.net **không có host TQ** và phải mua banner của baidudownloader.com (`rel="nofollow sponsored"`, research 03 §4); premiumdownloader.io 0,50 USD/GB không có Baidu; TorBox liệt kê Baidu/123pan/Terabox `status:false`; shop VN "tải hộ hết hàng" (Taikhoanpre) / "tool tạm ngưng" (ITcuaBan) (research 02).

| Sản phẩm | Nội dung | Giá đề xuất |
|---|---|---|
| **REST API** (`POST /v1/fetch`, webhook, `GET /v1/status`) | Prepaid credits, API key, rate limit theo gói | Sỉ **0,25 USD/GB** khi nạp ≥100 USD; 0,20 USD/GB ≥500 USD |
| **Reseller vouchers** (kiểu AllDebrid/Real-Debrid resellers) | Mã nạp GB bán lại tại VN/ID/KR | Chiết khấu 30 % |
| **White-label** | Subdomain + logo riêng, checkout của họ, ta xử lý backend | Phí 49 USD/tháng + giá sỉ |
| **Plugin** | jDownloader/aria2 JSON, Motrix, OpenList/AList "driver" (community) | Miễn phí (growth) |

Danh sách tiếp cận ưu tiên: premiumdownloader.net/.io (đề nghị thay banner bằng tích hợp API + rev-share), TorBox (đề nghị làm backend Baidu – họ đang tắt), DichvuChina/Taikhoanpre/ITcuaBan (voucher VN), các site hướng dẫn (gizdev.com, tek-tips thread, gist GitHub) cho affiliate GB-based (không tiền mặt để tránh vấn đề thuế/ban đầu).

### 3.6 Kênh cộng đồng "free fetch" (CAC ≈ 0, bằng chứng mạnh nhất)

BaiduFast đang tăng trưởng bằng cách đăng bài hướng dẫn trên **Hugging Face Forums** + gist GitHub + itch.io và **mời "drop link, tôi fetch miễn phí"** – có người dùng phản hồi đã tải 20 GB trong ~10 phút với "vài đô" ([HF thread 180125](https://discuss.huggingface.co/t/how-to-download-from-baidu-pan-pan-baidu-com-without-a-chinese-account-2026-notes-for-datasets-a-free-fetcher/180125); các thread liên quan [180705](https://discuss.huggingface.co/t/how-to-download-pan-baidu-com-or-quark-pan-weights-without-a-chinese-account/180705), [180744](https://discuss.huggingface.co/t/123pan-123-weights-datasets-now-need-a-chinese-login-how-to-download-them-without-one-2026/180744), [160296](https://discuss.huggingface.co/t/can-someone-with-a-chinese-baidu-netdisk-account-help-me-download-this-dataset/160296)). GitHub issues của repo nghiên cứu xin mirror ngoài Baidu cũng nhiều ([BR-Gen #15](https://github.com/clpbc/BR-Gen/issues/15), [LoD-Loc #21](https://github.com/VictorZoo/LoD-Loc/issues/21)).

Cách làm white-hat: tài khoản thật, khai rõ là người của dịch vụ, chỉ trả lời khi có câu hỏi, mirror dataset lên HF (được phép theo license) kèm credit; VN: VOZ thread "hỗ trợ get tài nguyên Baidu free" 170k view (research 02); Hàn: theqoo/arca.live/coolenjoy; Nhật: Yahoo!知恵袋; Indonesia: Tumblr/Facebook group. Mỗi tuần 5–10 câu trả lời chất lượng, có free fetch thật.

---

## 4. Paid acquisition (nhẹ) – khả thi hay không

| Kênh | Quy tắc liên quan | Khả thi? | Đề xuất |
|---|---|---|---|
| **Google Ads** | Chính sách Copyrights: "Unauthorized sites or software that capture, copy, or provide access to copyrighted content are not allowed"; khi có khiếu nại → ad bị disapprove, muốn khôi phục phải nộp DMCA counter-notification, tái phạm bị terminate ([Google Ads Copyrights](https://support.google.com/adspolicy/answer/6018015?hl=en)). Chính sách "Enabling dishonest behavior" không nêu downloader ([policy](https://support.google.com/adspolicy/answer/6016086?hl=en)). | **Trung bình – rủi ro** | Chỉ chạy Search cho từ khoá brand + "download dataset from baidu pan", landing nhấn "your own files / research data", 5–10 USD/ngày, 1 tài khoản duy nhất, dừng ngay nếu disapprove (không tạo tài khoản khác – vi phạm Circumventing systems). |
| **Reddit Ads** | Min 5 USD/ngày/campaign, không min lifetime; hiệu quả cần 50–100 USD/ngày ([Stackmatix](https://www.stackmatix.com/blog/reddit-ads-minimum-spend), [97th Floor](https://97thfloor.com/articles/reddit-advertising-guide-2026/)) | **Khả thi** | Target r/MachineLearning, r/DataHoarder, r/GenshinImpactMods? (kiểm tra rule sub), r/Chinese_learning; 150–300 USD test; nội dung dạng "how-to". |
| **Telegram Ads** | CPM sàn 0,1 TON (~0,5 USD); EN ~2–2,5 TON; landing **bắt buộc là bot/kênh**, không website; vào qua Adsgram 10 USDT/ngày + cọc 500 USDT hoặc reseller 1.000–5.000 EUR; cấm chính trị/cờ bạc…; targeting theo kênh/chủ đề ([Adsgram](https://adsgram.ai/blog/adsgram/telegram-ads-the-complete-guide-to-formats-costs-and-launching-your-first-campaign), [InviteMember](https://blog.invitemember.com/telegram-ads-in-2026-setup-costs-and-requirements/), [Daily Intel](https://dailyintelservice.com/markets/telegram-ads-platform-rules-minimums-and-real-cpms)) | **Khả thi nhất** vì ta có bot | 300–500 EUR test trên kênh fansub/anime/AI tiếng Indo, Việt, Hàn; đo cost per bot start; tái đầu tư Stars → Ads để giảm phí. |
| **Banner/sponsor ngách** | premiumdownloader.net bán banner 980×120 (baidudownloader đang mua) | Khả thi | Thương lượng 50–150 USD/tháng, hoặc đổi bằng API. |
| **Meta/TikTok** | Khả năng bị từ chối cao (dịch vụ "download") – chưa xác minh | Không ưu tiên | Bỏ qua 6 tháng đầu. |

Tổng paid ≤ 1.000 USD trong 6 tháng đầu; chỉ scale kênh có CAC < 1/3 LTV (ước LTV ≈ 25–40 USD/khách trả phí, chưa xác minh).

---

## 5. Email/retention, CRO landing, trust, status, support

### 5.1 Email & retention
- Transactional: "link sẵn sàng" (kèm nút referral), "link hết hạn sau 24 h", "GB balance còn X".
- Onboarding 3 email: cách dùng bot/extension → host hỗ trợ → mời bạn.
- Recovery: đã "calculate price" nhưng chưa trả (24 h), giỏ bỏ dở.
- Upsell: chi ≥ 6 USD/tháng → gợi ý Plus; hết GB gói → top-up 1 chạm.
- Win-back: 45 ngày không dùng → 2 GB free.
- Công cụ: Resend/Postmark (giá thấp), Brevo cho VN. Tần suất ≤ 2 marketing email/tháng.
- Retention ngoài email: Telegram/Discord notification, lịch sử tải + "re-fetch" 1 chạm (cache).

### 5.2 CRO landing page (học từ BaiduFast + sửa điểm yếu đối thủ)
1. **Above the fold**: ô paste link + 提取码, nút "Get link" → hiện **giá + ETA + free/không** ngay (không đăng nhập).
2. Dòng tin cậy ngay dưới: "X file / Y TB đã giao · trung bình Z phút · 4,8★ (n)". Chỉ dùng số thật (đối thủ dùng plugin "ai đó vừa mua" giả – research 03; tránh).
3. 3 bước hình ảnh; video 60 s tải file 5 GB.
4. Bảng giá 3 bậc + calculator.
5. Bảng so sánh với BaiduFast/BAIDUDL/BaiduDownloader (đúng số, có ngày).
6. Host được hỗ trợ + trạng thái live (xanh/đỏ).
7. Review (Trustpilot widget) + FAQ (từ research 01 §4).
8. Footer: Legal/DMCA/Status/Contact/Company.
- A/B test: free 150 vs 200 MB; giá GB đầu 0,69 vs 0,79; hiển thị VND theo geo.
- Mobile-first (VN/ID chủ yếu mobile).

### 5.3 Trust signals
- **Trustpilot** free plan: 50 lời mời review/tháng, widget miễn phí ([Trustpilot](https://help.trustpilot.com/s/article/Use-Trustpilot-for-free?language=en_US)) – baidudownloader.com chỉ có 1 review 3,7★ (research 03) → dễ vượt.
- **Status page**: Instatus free (15 monitor, 200 subscriber) hoặc Better Stack free (10 monitor, 1 status page) ([openstatus so sánh](https://www.openstatus.dev/guides/how-openstatus-compares-to-other-status-page-tools), [Better Stack](https://betterstack.com/community/comparisons/free-status-page-tools/)); hiển thị uptime từng host (Baidu/CSDN/Quark) – đối thủ không ai làm.
- Trang "How it works & why not free" (giống BaiduDownloader nhưng trung thực hơn), trang công ty (pháp nhân, địa chỉ), chính sách hoàn tiền rõ ("không giao được trong 24 h → hoàn 100 %" – ngược với "no refund" của BaiduDownloader/Duy Hieu).
- Changelog + roadmap công khai (BAIDUDL có), GitHub org với plugin mã nguồn mở (aria2/jDownloader).

### 5.4 Support đa ngôn ngữ
- Kênh: Telegram (EN/VI/ID), Zalo OA (VN), email; Crisp/Chatwoot với FAQ đã dịch (AI dịch + người sửa); SLA phản hồi < 2 h giờ VN; macro cho 10 lỗi phổ biến (link chết, 提取码 sai, folder quá lớn, CSDN 付费).
- Ngôn ngữ ưu tiên UI: EN, VI, ID, KO, JA, RU, TH, ES, PT-BR, ZH-TW.

---

## 6. Thị trường ưu tiên theo quốc gia

### 6.1 Bằng chứng nhu cầu ngoài Trung Quốc (định tính, 2025–2026)

| Thị trường | Bằng chứng | Phân khúc |
|---|---|---|
| **Toàn cầu tiếng Anh (US/EU/Ấn Độ/Hàn…)** | ≥4 thread Hugging Face 2025–26 về tải weights/dataset từ Baidu/123pan; GitHub issues xin mirror; tek-tips thread 2025 ([tek-tips](https://www.tek-tips.com/threads/how-to-download-from-pan-baidu-without-registration-in-2025.1835647/)); EEVblog nhờ tải CSDN (research 01) | AI/ML researcher, kỹ sư điện tử/embedded (datasheet, firmware trên CSDN), modder |
| **Việt Nam** | VOZ thread 756 trả lời/170k view; ≥5 shop VN (research 02); từ khoá tiếng Việt trong SEO của baidudownloader.com (research 03) | Sinh viên/kỹ sư, người học tiếng Trung, phim/drama TQ, tài liệu Wenku |
| **Hàn Quốc** | theqoo, arca.live ("바이두 로그인 없이 모드 다운"), coolenjoy, namu.wiki có mục "바이두윈"; BLD/Erranium có bản /ko ([theqoo](https://theqoo.net/japan/1567943252), [arca.live](https://arca.live/b/tullius/8949614), [coolenjoy](https://coolenjoy.net/bbs/37/4102)) | Mod game (Skyrim/Genshin), MMD, fan cosplay |
| **Nhật Bản** | Yahoo!知恵袋, locotabi, X post "中華メーカーは百度网盘でファイルをUP" (firmware/driver của hãng TQ), blog servercan/koshishirai; BLD /ja ([chiebukuro](https://detail.chiebukuro.yahoo.co.jp/qa/question_detail/q11220578246), [X](https://x.com/jinko69/status/1917478160670888252), [locotabi](https://locotabi.jp/china/q/82356)) | Người mua thiết bị TQ (driver/firmware), otaku (MMD), doanh nghiệp |
| **Indonesia** | Tutorial Tumblr "Cara Download File Pan.Baidu … dengan IDM"; BaiduFast có UI Indonesia + Thái; AnimeXin (donghua sub Indo) ([Tumblr](https://www.tumblr.com/aonodreamland/107282707988/tutorial-cara-download-file-panbaidu-yun-baidu)) | Fan donghua/drama, mod game, sinh viên |
| **Nga** | BLD /ru; keyword tiếng Nga "download.csdn.net как скачать" trong SEO của baidudownloader.com (research 03) | Kỹ sư, phần mềm/tài liệu kỹ thuật |
| **Malaysia/Thái/Đài Loan/HK** | Suy luận từ cộng đồng Hoa ngữ + BaiduFast có tiếng Thái – chưa có bằng chứng trực tiếp | Cộng đồng gốc Hoa, drama |

Baidu chính thức mở đăng ký bằng SĐT nước ngoài trên mobile từ 22/09/2025 (nhắm Hoa kiều/du học sinh) ([Webull](https://www.webull.com/news/13554437950866432)) → làm giảm một phần "không đăng ký được" nhưng **không giải quyết throttle/SVIP** – thông điệp nên chuyển từ "không có tài khoản" sang "không cần SVIP, không cần client".

### 6.2 Xếp hạng ưu tiên (đề xuất)

| Bậc | Thị trường | Lý do | Ngôn ngữ / thanh toán |
|---|---|---|---|
| T1 | Việt Nam | Lợi thế sân nhà, đối thủ thủ công, VietQR/Momo tự động là USP độc quyền | VI; VietQR (payOS miễn phí giao dịch từ 23/01/2026 – [payOS](https://payos.vn/); SePay free 50 giao dịch/tháng, Startup 120k VND/tháng – [SePay](https://sepay.vn/bang-gia.html)), Momo |
| T1 | Tiếng Anh toàn cầu | AI/dev/modder trả USD, ít nhạy giá, hiện diện ở HF/GitHub/Reddit | EN; PayPal, thẻ, USDT |
| T2 | Indonesia | Dân số lớn, BaiduFast đã chọn ID/TH → nhu cầu thật; cạnh tranh thấp | ID; QRIS (premiumdownloader.io đã nhận QRIS), USDT |
| T2 | Hàn Quốc, Nhật | Sức mua cao, cộng đồng mod/otaku, đối thủ chỉ dịch máy | KO/JA; thẻ, PayPal |
| T3 | Nga, Malaysia/Thái, Brazil/LatAm, Tây Ban Nha | Có tín hiệu nhưng yếu; theo dõi qua Search Console | RU/TH/ES/PT; USDT |

### 6.3 Việc cần làm để có số định lượng (chưa làm được trong phiên này)
- Chạy Google Trends thủ công cho "pan.baidu.com", "baidu pan download", "百度网盘 下载", "csdn download" với Interest by region 12 tháng, ghi ảnh chụp vào docs. (WebSearch không trả về dữ liệu Trends.)
- Similarweb/Semrush cho baidufast.com, baidudl.com, baidudownloader.com, baidulinkdownloader.com → top 5 quốc gia (trang [Similarweb baidudownloader.com](https://www.similarweb.com/website/baidudownloader.com/) tồn tại nhưng không fetch được dữ liệu).
- Sau launch: Search Console + GA4 theo quốc gia/ngôn ngữ, quyết định thứ tự dịch tiếp.

---

## 7. Rủi ro pháp lý / thương hiệu & định vị an toàn

| Rủi ro | Mức | Giảm thiểu |
|---|---|---|
| **Bản quyền nội dung người dùng tải** (Baidu Netdisk từng bị toà TQ phán liên đới; nằm trong USTR Notorious Markets 2022 – research 01) | Cao (ảnh hưởng thanh toán, ads, hosting) | ToS kiểu Erranium: người dùng cam kết "có mọi quyền/giấy phép cần thiết", dịch vụ "không host, store, inspect, distribute", chỉ là trung gian kỹ thuật ([Erranium ToS](https://baidu.erranium.com/terms)); **không** thư viện/search link công khai; xoá sau 24–72 h; DMCA agent đăng ký tại US Copyright Office; hash-blocklist file bị khiếu nại; chấm dứt tài khoản tái phạm (điều kiện safe harbor §512 – [CRS](https://www.congress.gov/crs-product/IF11478)). |
| **Vi phạm ToS Baidu / khoá tài khoản SVIP**; tiền lệ PanDownload bị xử hình sự ở TQ (thu lợi >300k CNY) – research 01 | Trung bình (vận hành) / thấp (hình sự, nếu pháp nhân & server ngoài TQ) | Pháp nhân SG/US/HK, server HK/SG/JP, không có nhân sự/tài sản ở đại lục; dùng client/API chính thức với tài khoản SVIP mua hợp lệ (không crack tốc độ, không "解析" API lậu); pool tài khoản luân phiên, dự phòng 20–30 %/quý; không quảng cáo "bypass"/"crack". Third-party client "may trigger risk control / account ban" ([x-cmd](https://www.x-cmd.com/install/baidunetdisk/)). |
| **Nhãn hiệu**: tên chứa "Baidu"/"CSDN", logo giống | Trung bình | Tên brand trung lập; nhắc "Baidu Pan", "CSDN" chỉ ở dạng mô tả (nominative use), disclaimer "không liên kết với Baidu Inc./CSDN"; không dùng logo của họ. |
| **Thanh toán bị khoá** (PayPal VN chỉ nhận cross-border, không domestic – [VALO](https://valovietnam.com/blog/does-paypal-work-in-vietnam), [doola](https://www.doola.com/blog/which-countries-can-fully-use-paypal/); Lemon Squeezy cấm "services" – [LS docs](https://docs.lemonsqueezy.com/help/getting-started/prohibited-products); Stripe không hỗ trợ VN) | Cao | Pháp nhân SG/US LLC (Stripe Atlas) + PayPal business nước ngoài; VietQR qua payOS/SePay cho VND; USDT qua NOWPayments (0,3–0,5 %) / Cryptomus (0,4–2 %) ([NOWPayments](https://nowpayments.io/blog/nowpayments-vs-cryptomus)); mô tả sản phẩm cho processor: "file transfer/bandwidth service for user-authorized files". Tách hoá đơn theo GB, không theo tên file. |
| **Chargeback/refund** | Thấp–trung bình | Chính sách hoàn tiền rõ khi không giao được; log giao hàng; 3-D Secure. |
| **Ads/Store bị từ chối** (Google Ads Copyrights; CWS "circumvent login") | Trung bình | §4, §3.3; không dùng tài khoản phụ để né. |
| **Baidu thay đổi API/đóng SVIP cho tài khoản nước ngoài** | Trung bình | Đa host để giảm phụ thuộc; theo dõi OpenList/BaiduPCS-Go; status page minh bạch. |
| **Đối thủ hạ giá về 0** (baidudownloaderfree.com 5 GiB free) | Trung bình | Cạnh tranh bằng tốc độ, độ tin cậy, CSDN, gói tháng, API – không bằng free vô hạn. |

Thông điệp an toàn nên in trên landing/FAQ: *"[Brand] chỉ chuyển tiếp file mà bạn có quyền truy cập (dataset nghiên cứu, firmware, tài liệu bạn đã mua, file của chính bạn). Chúng tôi không lưu trữ quá 72 giờ, không index, không chia sẻ link công khai, và gỡ ngay khi có yêu cầu hợp lệ."*

---

## 8. Roadmap 6 tháng, KPI, ngân sách

### 8.1 Roadmap

| Tháng | Sản phẩm | Growth | Mốc |
|---|---|---|---|
| **M1** | Web MVP: paste → giá/ETA → Baidu + CSDN, free 200 MB, R2 direct link, PayPal + USDT; ToS/DMCA/Status page; brand + domain + social handles | 10 bài SEO nền (từ outline research 01), 3 thread "free fetch" HF/VOZ/arca | 100 free fetch/ngày, 20 đơn trả phí đầu |
| **M2** | Telegram bot (free + web checkout), VietQR/Momo (payOS), tài khoản + referral + điểm, Trustpilot | Group VN, kênh Telegram, review đầu tiên ≥ 20 | 500 user bot, 100 khách trả phí |
| **M3** | i18n 6 ngôn ngữ (EN/VI/ID/KO/JA/RU), Chrome extension companion (nộp CWS), gói tháng 3 bậc | Câu trả lời cộng đồng 40/tháng, gist/GitHub plugin aria2/jDownloader | 10k visit/tháng, 200 khách trả phí |
| **M4** | API v1 + prepaid credits + reseller vouchers; Discord bot; Quark/123pan | Chào 5 reseller (premiumdownloader.net/.io, TorBox, 2 shop VN); Telegram Ads test 300 EUR | 2 reseller ký, 1.500 user bot |
| **M5** | PWA + share target; email lifecycle; hash-blocklist; Alipan/Lanzou | Reddit Ads 150–300 USD test; Google Ads brand 5 USD/ngày (theo dõi policy) | 20k visit, 350 khách trả phí |
| **M6** | Tối ưu retention (win-back, upsell), white-label beta, Wenku thử nghiệm | Case study "tải dataset 100 GB", tổng kết CAC/LTV, chọn T2 để mở rộng | 30k visit, 3k user bot, 500 khách trả phí, MRR 3–5k USD |

### 8.2 KPI theo dõi hàng tuần
- Acquisition: visit theo quốc gia/kênh; bot start; extension install; % traffic không phải SEO (mục tiêu ≥ 40 % ở M6).
- Activation: % paste → link thành công (mục tiêu ≥ 85 %); thời gian giao trung vị (< 3 phút file < 5 GB).
- Revenue: khách trả phí mới, ARPPU (mục tiêu 8–12 USD), MRR, tỷ lệ gói tháng/PAYG.
- Referral: K-factor (mục tiêu 0,2–0,3), % đơn có mã referral.
- Retention: khách quay lại 30 ngày (≥ 35 %), churn gói tháng (< 10 %/tháng).
- Trust/ops: uptime từng host (≥ 99 %), tỷ lệ refund (< 2 %), số tài khoản SVIP bị khoá/tháng, review Trustpilot (≥ 4,6★, ≥ 100 review ở M6).
- Chi phí: chi phí/GB thực (< 0,08 USD), CAC theo kênh (< 5 USD), CAC/LTV < 1/3.

### 8.3 Ngân sách ước lượng 6 tháng (USD, chưa tính lương; chưa xác minh giá thực tế)

| Hạng mục | Ước tính |
|---|---|
| Domain (.com/.io/.vn) + logo/brand kit | 200–400 |
| Pháp nhân SG/US + đăng ký DMCA agent | 500–1.500 (Stripe Atlas ~500; DMCA agent 6) |
| Hạ tầng: 2–3 VPS HK/SG (băng thông), R2, Cloudflare, monitoring | 150–400/tháng → 900–2.400 |
| Tài khoản SVIP Baidu ×6–10 (188–298 CNY/năm) + CSDN VIP ×2 (~380 CNY) + dự phòng khoá | 500–900 |
| Dịch nội dung/UI 6 ngôn ngữ (AI + hiệu đính người) | 500–1.000 |
| Telegram Ads test | 300–500 |
| Reddit Ads + Google Ads brand | 300–450 |
| Banner/sponsor ngách | 0–450 |
| Công cụ: Instatus/Better Stack free, Trustpilot free, Crisp/Chatwoot free–100, email 50–100 | 100–300 |
| Referral/credit free (chi phí băng thông của GB tặng) | 200–400 |
| **Tổng** | **≈ 3.500–8.300 USD** (thực dụng: 6–9k gồm dự phòng) |

---

## 9. Nguồn chính đã dùng

- Research nội bộ: `docs/research/01-cach-download-baidu-csdn.md`, `02-bang-gia-dich-vu-leech.md`, `03-baidudownloader-com.md`.
- Đối thủ: https://baidufast.com/ ; https://baidudl.com/ ; https://baidulinkdownloader.com/ ; https://baidu.erranium.com/terms ; https://www.pandafetch.click/
- Cộng đồng/nhu cầu: https://discuss.huggingface.co/t/how-to-download-from-baidu-pan-pan-baidu-com-without-a-chinese-account-2026-notes-for-datasets-a-free-fetcher/180125 ; https://discuss.huggingface.co/t/how-to-download-pan-baidu-com-or-quark-pan-weights-without-a-chinese-account/180705 ; https://discuss.huggingface.co/t/123pan-123-weights-datasets-now-need-a-chinese-login-how-to-download-them-without-one-2026/180744 ; https://github.com/clpbc/BR-Gen/issues/15 ; https://www.tek-tips.com/threads/how-to-download-from-pan-baidu-without-registration-in-2025.1835647/ ; https://theqoo.net/japan/1567943252 ; https://arca.live/b/tullius/8949614 ; https://coolenjoy.net/bbs/37/4102 ; https://detail.chiebukuro.yahoo.co.jp/qa/question_detail/q11220578246 ; https://x.com/jinko69/status/1917478160670888252 ; https://www.tumblr.com/aonodreamland/107282707988/tutorial-cara-download-file-panbaidu-yun-baidu ; https://www.webull.com/news/13554437950866432
- Referral/pricing: https://support.torbox.app/en/articles/9875657-how-does-the-torbox-referral-system-work ; https://www.affiliatejoin.com/real-debrid-affiliate-program ; https://real-debrid.com/resellers ; https://alldebrid.com/resellers ; https://schematichq.com/blog/saas-pricing-psychology ; https://www.mida.so/blog/psychological-pricing
- Chống lạm dụng: https://dev.to/dami14_14/how-to-prevent-free-trial-abuse-in-saas-when-rate-limits-are-not-enough-20ho ; https://fingerprint.com/blog/free-trial-abuse/ ; https://www.usercheck.com/guides/how-to-prevent-free-trial-abuse
- Kênh: https://github.com/yuantuo666/baiduwp-bot ; https://github.com/anasty17/mirror-leech-telegram-bot ; https://core.telegram.org/bots/payments-stars ; https://merge.rocks/blog/telegram-mini-apps-2026-monetization-guide-how-to-earn-from-telegram-mini-apps ; https://support.discord.com/hc/en-us/articles/10575066024983-Monetization-Policy ; https://support-dev.discord.com/hc/en-us/articles/8563934450327-Discord-Developer-Policy ; https://developer.chrome.com/docs/webstore/program-policies/policies ; https://developer.chrome.com/blog/cws-policy-updates-2026 ; https://developer.chrome.com/docs/webstore/discovery ; https://github.com/luochenzhimu/BaiduPan-Explorer ; https://chrome-stats.com/d/kafofhjdbakcjcfpghofmdgahdjgemha ; https://www.crx4chrome.com/extensions/cikciklbnelammeloomjncglcjpmojfd/
- Paid: https://support.google.com/adspolicy/answer/6018015?hl=en ; https://support.google.com/adspolicy/answer/6016086?hl=en ; https://www.stackmatix.com/blog/reddit-ads-minimum-spend ; https://97thfloor.com/articles/reddit-advertising-guide-2026/ ; https://adsgram.ai/blog/adsgram/telegram-ads-the-complete-guide-to-formats-costs-and-launching-your-first-campaign ; https://blog.invitemember.com/telegram-ads-in-2026-setup-costs-and-requirements/ ; https://dailyintelservice.com/markets/telegram-ads-platform-rules-minimums-and-real-cpms
- Trust/ops: https://help.trustpilot.com/s/article/Use-Trustpilot-for-free?language=en_US ; https://www.openstatus.dev/guides/how-openstatus-compares-to-other-status-page-tools ; https://betterstack.com/community/comparisons/free-status-page-tools/
- Thanh toán: https://payos.vn/ ; https://sepay.vn/bang-gia.html ; https://developer.sepay.vn/en ; https://nowpayments.io/blog/nowpayments-vs-cryptomus ; https://valovietnam.com/blog/does-paypal-work-in-vietnam ; https://www.doola.com/blog/which-countries-can-fully-use-paypal/ ; https://docs.lemonsqueezy.com/help/getting-started/prohibited-products
- Pháp lý: https://www.congress.gov/crs-product/IF11478 ; https://www.lexology.com/library/detail.aspx?g=8b979860-87e5-49da-9906-861e542f6d72 ; https://www.x-cmd.com/install/baidunetdisk/

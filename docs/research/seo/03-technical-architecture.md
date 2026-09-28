# SEO-03 — Kế hoạch Technical SEO, Kiến trúc site & Product-led SEO cho brand tải file host Trung Quốc (Baidu Pan + CSDN)

Ngày: 28/09/2026. Phạm vi: kiến trúc URL, đa ngôn ngữ, free tools làm lead magnet, on-page/schema, Core Web Vitals, programmatic SEO an toàn, quản trị rủi ro (DMCA / deindex / payment / Cloudflare), GEO/AI search, checklist triển khai Laravel.
Kế thừa: `docs/research/01-cach-download-baidu-csdn.md` (keyword + FAQ), `02-bang-gia-dich-vu-leech.md` (giá, free tier), `03-baidudownloader-com.md` (đối thủ). Không sửa code repo.

> Ghi chú về codebase hiện tại: `/home/user/xcrawl` là Laravel **5.6 / PHP 7.1**, jQuery 2 + Vue 2, Laravel Mix 2, không có route public ngoài `/` và auth; là tool crawl nội bộ (workspaces/sources/targets/rules/posts/links). Nó **không** phải nền tảng phù hợp để build site SEO công khai — xem mục 7 (đề xuất dựng app Laravel 12 mới, tách riêng, có thể tái dùng model/logic crawl nếu cần).

---

## 0. Tóm tắt điều hành

1. **Kiến trúc**: 1 domain, subfolder ngôn ngữ (`/vi/`, `/id/`…; `en` ở root hoặc `/en/`), hreflang 2 chiều + `x-default`. Hub = trang tool chính; spoke = landing theo host (`/baidu-pan-downloader`, `/csdn-downloader`), cluster hướng dẫn/FAQ, pricing, status, free tools.
2. **Product-led SEO**: 4–5 free tool nhỏ dùng SVIP sẵn có (Baidu Link Checker, 提取码 helper, CSDN preview, tốc độ Baidu theo quốc gia, đổi link Baidu ↔ định dạng aria2/IDM). Mỗi tool là 1 URL riêng, có nội dung giải thích thật, là nơi hút backlink + email/Telegram lead.
3. **On-page**: SoftwareApplication/WebApplication + Offer cho trang tool; Organization + Product/Offer cho pricing; **FAQPage và HowTo đã mất rich result từ 2023** (chỉ giữ FAQ trong HTML, không kỳ vọng rich snippet); **AggregateRating không được tự đánh giá chính mình** trên trang Organization; review snippet cho SoftwareApplication chỉ khi có review thật hiển thị trên trang.
4. **Programmatic SEO**: chỉ scale theo trục có dữ liệu thật (host × ngôn ngữ, lỗi/ mã lỗi Baidu, so sánh dịch vụ, glossary). Tuyệt đối **không** tạo trang cho từng link chia sẻ / từng file — vừa thin content vừa là mồi DMCA.
5. **Rủi ro**: Google có tín hiệu hạ hạng site-wide khi nhận "lượng lớn" yêu cầu gỡ bản quyền hợp lệ; Stripe/Lemon Squeezy cấm "facilitate infringement"; Cloudflare H1/2025 đã xử lý ~54k DMCA và terminate 21k account. Giải pháp: không host/index file, `noindex` mọi trang có tham số link, DMCA agent + trang policy, log & xử lý trong 24h, không dùng từ "leech/crack/bypass" trên trang public.
6. **GEO**: Google tuyên bố **không cần llms.txt, không cần schema đặc biệt, không cần chunking**; điều kiện duy nhất là trang được index & có snippet. Chiến lược = câu trả lời trực tiếp ở đầu mục + dữ liệu gốc (benchmark tốc độ, bảng giá cập nhật) + brand mention trên Reddit/GitHub/StackOverflow/Zhihu/VOZ. llms.txt vẫn làm (chi phí ~0) cho ChatGPT/Perplexity/agent.
7. **Laravel**: Laravel 12 + Blade SSR (không cần Inertia SSR cho trang marketing) + `spatie/laravel-sitemap`, `spatie/schema-org`, `mcamara/laravel-localization`, `spatie/laravel-responsecache`, Vite, Cloudflare cache HTML cho trang public, Octane tuỳ chọn.

---

## 1. Kiến trúc site & URL

### 1.1 Nguyên tắc
- **Một domain thương hiệu** (không ccTLD), ngôn ngữ = **subfolder**. Google không suy ra target từ URL; phải khai báo bằng hreflang 2 chiều, mỗi trang liệt kê cả chính nó, có `x-default` ([Google – Localized versions](https://developers.google.com/search/docs/specialty/international/localized-versions)).
- URL ngắn, ASCII, kebab-case, **không** tham số trong URL public. Mọi URL có tham số link (`?url=pan.baidu.com/s/…`) → `noindex` + canonical về trang tool gốc.
- Trang "final destination", không doorway: mỗi landing theo host phải có nội dung riêng (giới hạn thực tế của host đó, lỗi hay gặp, tốc độ đo thật, giá) chứ không chỉ đổi tên host ([Spam policies – Doorway abuse](https://developers.google.com/search/docs/essentials/spam-policies)).

### 1.2 Cây URL đề xuất (English root, các ngôn ngữ prefix)

```
/                                  Home = tool chính (paste link → check → tải). H1 chứa brand + "Baidu Pan & CSDN downloader"
/baidu-pan-downloader              Landing host Baidu (spoke #1, keyword "pan.baidu.com downloader", "baidu netdisk download without account")
/csdn-downloader                   Landing host CSDN ("csdn download without account", "download.csdn.net free")
/quark-downloader, /123pan-downloader, /aliyundrive-downloader   (giai đoạn 2, chỉ khi thực sự hỗ trợ)
/pricing                           Bảng giá + FAQ giá + Product/Offer schema
/free                              Trang free tier (điều kiện, giới hạn, "why not fully free")
/tools/                            Hub free tools (mục 2)
/tools/baidu-link-checker
/tools/baidu-extraction-code       (提取码 helper)
/tools/csdn-resource-preview
/tools/baidu-speed-test
/tools/baidu-link-converter        (Baidu share → aria2/IDM/wget list; batch dedupe)
/guides/                           Hub hướng dẫn (evergreen, cập nhật năm)
/guides/download-from-baidu-pan-outside-china
/guides/baidu-pan-speed-limit
/guides/baidu-svip-price
/guides/csdn-points-vip-explained
/guides/register-baidu-account-abroad
/guides/pandownload-alternatives
/compare/                          So sánh (baidudl, baidufast, baidudownloader, torbox…) — dữ liệu từ research 02
/compare/<brand>-vs-<competitor>
/errors/                           Tra cứu lỗi Baidu/CSDN (errno -62, -21, 105, "文件已被删除", CSDN 积分不足…) — programmatic có kiểm soát
/faq                               FAQ tổng (HTML, không kỳ vọng rich result)
/blog/                             Tin/cập nhật (thay đổi API Baidu, giá, changelog)
/status                            Trạng thái hệ thống (uptime, queue, tốc độ trung bình 24h theo host) — noindex hoặc index tuỳ (nên index: là USP tin cậy)
/changelog, /roadmap
/legal/terms, /legal/privacy, /legal/refund, /legal/copyright (DMCA policy + form), /legal/acceptable-use
/app/…                             Dashboard người dùng → noindex, chặn trong robots
/api/…                             noindex, disallow
```

Ngôn ngữ: `/vi/…`, `/id/…`, `/th/…`, `/ko/…`, `/ja/…`, `/es/…`, `/pt/…` (pt-BR), `/ru/…`, `/ar/…` (RTL), `/zh-hant/…` (HK/TW/Đông Nam Á Hoa kiều — thị trường thực có nhu cầu), cân nhắc `/ms/`, `/tr/`, `/hi/`. **Slug dịch theo ngôn ngữ** (`/vi/tai-file-baidu`) tốt cho CTR nhưng tăng độ phức tạp; giai đoạn 1 giữ slug tiếng Anh + prefix, giai đoạn 2 dịch slug cho 3 ngôn ngữ traffic cao nhất.

### 1.3 Thứ tự ưu tiên ngôn ngữ (theo research 01–03)
1. **en** (toàn cầu, thị trường đối thủ chính), 2. **vi** (nhu cầu lớn, đối thủ yếu/thủ công), 3. **id**, 4. **th**, 5. **ko/ja** (nhu cầu tải tài liệu, game, mod), 6. **es/pt-BR/ru** (cộng đồng leech/debrid), 7. **ar**, 8. **zh-Hant**. Chỉ mở ngôn ngữ khi có người review bản dịch; MT thuần không review là vi phạm scaled-content/auto-generated ([Spam policies](https://developers.google.com/search/docs/essentials/spam-policies)).

### 1.4 Internal linking
- **Hub-and-spoke**: Home ↔ host landings ↔ guides cùng host ↔ tools cùng host. Mỗi guide có CTA về tool đúng host (không về home).
- Global nav ≤ 7 mục: Tool, Baidu, CSDN, Free tools, Pricing, Guides, Status. Footer: legal, languages, compare, changelog.
- Breadcrumb (BreadcrumbList schema) trên mọi trang cấp ≥2.
- "Related tools" và "Related guides" theo taxonomy `host` + `topic` (lưu trong DB, không hard-code).
- Sitemap HTML `/sitemap` cho người dùng + XML cho bot (mục 3.5).
- Pagination blog/guides: `rel=next/prev` không còn được Google dùng, nhưng vẫn cần link rõ ràng tới trang 2..n; canonical tự trỏ từng trang; không noindex trang phân trang.

### 1.5 Status page như tài sản SEO
Đối thủ ẩn tốc độ thật; `/status` với biểu đồ tốc độ trung bình theo host + số job/ngày (dữ liệu thật từ queue) là điểm **first-hand data** mà core update 2025–2026 ưu tiên ([Search Engine Land – core updates](https://searchengineland.com/library/platforms/google/google-algorithm-updates/core-update), [SERoundtable May 2026](https://www.seroundtable.com/google-may-2026-core-update-done-41435.html)). Dùng cùng dữ liệu cho trang guide "Baidu speed limit" (cập nhật tự động hằng tháng).

---

## 2. Free tools làm lead magnet / linkbait

Nguyên tắc chọn: (a) làm được ngay với SVIP đang có + endpoint share của Baidu; (b) không trả file về (chỉ metadata) → rủi ro pháp lý thấp; (c) có nhu cầu tìm kiếm rõ; (d) ép nhu cầu "tải" sang tool trả phí/free tier tự nhiên.

| Ưu tiên | Tool | Cách làm với SVIP sẵn có | Keyword mục tiêu | Lead/CTA | Rủi ro / lưu ý |
|---|---|---|---|---|---|
| P0 | **Baidu Link Checker** (`/tools/baidu-link-checker`) | Dùng share endpoints (`shorturlinfo`/`share/verify`/`wxlist`) với cookie BDUSS SVIP để đọc: còn sống?, cần mã?, tên file, size, số file, ngày chia sẻ. Tháng 9/2026 Baidu siết truy cập ẩn danh (`share/verify` trả -62 khi không có cookie) → **phải chạy bằng tài khoản SVIP phía server**, có pool + rate limit ([AList baidu_share driver](https://alistgo.com/guide/drivers/baidu_share.html), [gist erraz1](https://gist.github.com/erraz1/97ac8ef2b9f629c8c0620d79b0795749)) | "baidu link checker", "baidu pan link dead", "check baidu share link", "pan.baidu.com 链接失效" | Kết quả → nút "Download this (X GB) — estimate $Y / free ≤200 MB" | Kết quả **không index**; cache 24h theo surl; log để chống abuse |
| P0 | **提取码 helper** (`/tools/baidu-extraction-code`) | Parse text dán vào (Zhihu/Bilibili/Telegram format "链接: … 提取码: xxxx"), tách link + mã, tự tạo URL `?pwd=`; giải thích 提取码 là gì; kiểm tra mã đúng bằng `share/verify` | "baidu extraction code", "提取码 là gì", "baidu pan password", "how to enter baidu pan code" | Giống trên | Rất dễ, thuần client + 1 call verify; là trang giải thích tốt cho GEO |
| P0 | **CSDN Resource Preview** (`/tools/csdn-resource-preview`) | Với link `download.csdn.net/download/...`, dùng tài khoản CSDN VIP đọc tên, size, loại (积分 / VIP专享 / 付费), số điểm cần, mô tả, ảnh preview; báo giá ngay | "csdn download without account", "csdn vip 专享 download", "csdn 积分 free" | "Buy this file for $0.49" | Không hiển thị nội dung file; chỉ metadata public trên trang CSDN |
| P1 | **Baidu Speed Test by country** (`/tools/baidu-speed-test`) | Không đo từ client (không khả thi); dùng dữ liệu benchmark của chính hạ tầng: tốc độ free vs SVIP đo từ N vùng (VN, ID, US, EU, JP) chạy cron hằng tuần → biểu đồ + bảng. Cho phép user "test file của bạn" = gửi link → server đo throughput 30s (thực chất là job nhỏ). | "baidu pan slow", "baidu netdisk speed limit", "baidu download speed 100kb/s" | "Skip the limit" | Là **dữ liệu gốc** → linkbait mạnh nhất trong nhóm; dễ được AI trích dẫn |
| P1 | **Baidu link converter / batch** (`/tools/baidu-link-converter`) | Chuẩn hoá nhiều link, khử trùng lặp, thêm `pwd`, xuất `.txt` cho IDM/aria2/jDownloader (định dạng link chia sẻ, **không** direct link) | "baidu pan batch download", "baidu link list idm" | Free tier | Đừng xuất direct link SVIP → đó là sản phẩm trả phí + rủi ro khoá account |
| P2 | **Baidu SVIP price tracker** (`/guides/baidu-svip-price` có widget) | Cron scrape giá niêm yết + khuyến mãi; bảng CNY/USD/VND | "baidu svip price", "mua svip baidu" | So sánh với giá dịch vụ | Nội dung thật, cập nhật; đúng kiểu trang core update ưu tiên |
| P2 | **Error code lookup** (`/errors/baidu-{code}`) | Bảng mã lỗi share/API + cách xử lý | "baidu pan errno -62", "百度网盘 -21" | Link checker | Programmatic có giới hạn (≤ 40 trang, mỗi trang có giải thích + ảnh) |
| P3 | Converter (zip → xem list file, rar → zip…) | Không ưu tiên: không liên quan SVIP, tốn băng thông | – | – | Bỏ trong 12 tháng đầu |

Cơ chế lead: kết quả tool yêu cầu **không** đăng nhập (tối đa hoá share), nhưng "lưu lịch sử / thông báo khi link sống lại / nhận link tải" cần email hoặc Telegram login. Mỗi tool có: mô tả 300–600 từ giải thích cách hoạt động + giới hạn, ảnh chụp thực, embed code/badge "Checked with <brand>" (linkbait), API public read-only rate-limited (dev cộng đồng backlink từ GitHub).

Nguồn về free tool là link magnet: [Skale – SaaS link building 2026](https://skale.so/saas-seo/link-building/), [Ranking Raccoon – free backlinks](https://www.rankingraccoon.com/blog/post/free-backlinks).

---

## 3. On-page & kỹ thuật

### 3.1 Title / meta template

| Loại trang | `<title>` (≤ 60 ký tự) | Meta description (≤ 155) |
|---|---|---|
| Home | `{Brand} – Baidu Pan & CSDN Downloader, No Account Needed` | `Paste a pan.baidu.com or CSDN link, get a fast direct download. Free up to {free_mb} MB, no Chinese phone number, no VIP. {speed} MB/s average today.` |
| Host landing | `{Host} Downloader Without Account (2026) – {Brand}` | Giới hạn host + số liệu tốc độ + giá từ |
| Free tool | `{Tool name} – Free Baidu Pan {function} – {Brand}` | Mô tả 1 câu + "no signup" |
| Guide | `{H1} ({Year} Guide) – {Brand}` | Câu trả lời trực tiếp cho câu hỏi chính |
| Pricing | `Pricing – From ${min}/GB, Free Tier Included – {Brand}` | Bảng gói + phương thức thanh toán |
| Compare | `{Brand} vs {Competitor}: Price, Speed, Hosts (2026)` | 3 điểm khác biệt |
| Error | `Baidu Pan Error {code}: Meaning & Fix – {Brand}` | Giải thích 1 câu |

Quy tắc: số liệu động (`{speed}`, `{free_mb}`, năm) lấy từ config/DB, render server-side; không nhồi từ "leech", "crack", "bypass", "hack" vào title/meta (tín hiệu xấu cho reviewer thủ công và payment processor).

### 3.2 Schema (JSON-LD) — cái gì dùng, cái gì không

| Trang | Schema | Ghi chú guideline |
|---|---|---|
| Mọi trang | `Organization` (+ `sameAs` GitHub/X/Telegram/Trustpilot), `WebSite` (không cần SearchAction), `BreadcrumbList` | Không gắn `aggregateRating` vào Organization của chính mình: bị coi là **self-serving review**, có thể nhận manual action về structured data ([Google – Review snippet guidelines](https://developers.google.com/search/docs/appearance/structured-data/review-snippet), [SD policies](https://developers.google.com/search/docs/appearance/structured-data/sd-policies)) |
| Home / host landing / tools | `SoftwareApplication` (co-type `WebApplication`), `applicationCategory: UtilitiesApplication`, `operatingSystem: Web`, `offers.price: 0` cho free tier + `priceCurrency` | Bắt buộc `name`, `offers.price`, và **một trong** `aggregateRating`/`review`. Chỉ đưa rating nếu rating thật hiển thị trên trang (widget reviews của user thật hoặc import Trustpilot có thể nhìn thấy) ([Google – SoftwareApplication](https://developers.google.com/search/docs/appearance/structured-data/software-app)). Nếu chưa có review thật → bỏ rating, chấp nhận không có rich result |
| Pricing | `Product` với nhiều `Offer` (`priceSpecification`, `UnitPriceSpecification` cho $/GB) hoặc `OfferCatalog` | Product snippet cho dịch vụ số không có "merchant listing"; giữ đúng giá hiển thị, tránh mismatch |
| Guides | `Article`/`TechArticle` + `author` (Person có trang `/author/…`), `dateModified` thật | Author thật + credential là tín hiệu core update 2026 ưu tiên |
| FAQ | `FAQPage` **chỉ còn rich result cho site chính phủ/y tế** từ 08/2023 → vẫn có thể gắn (không hại) nhưng đừng đầu tư; nội dung FAQ phải hiển thị trên HTML ([Google blog 08/2023](https://developers.google.com/search/blog/2023/08/howto-faq-changes), [FAQPage docs](https://developers.google.com/search/docs/appearance/structured-data/faqpage)) |
| HowTo | **Đã ngừng hiển thị** (09/2023) → không dùng; viết hướng dẫn bằng heading `<h2>Step 1…` + ảnh |
| Status | `Dataset` cho bảng tốc độ (tuỳ chọn) | Giúp AI/Google hiểu là dữ liệu gốc |
| Video hướng dẫn | `VideoObject` | Có thumbnail, transcript |

Validate bằng Rich Results Test + Schema Markup Validator; theo dõi mục "Enhancements" trong Search Console.

### 3.3 Core Web Vitals
- Ngưỡng hiện hành (web.dev): LCP ≤ 2.5 s, INP ≤ 200 ms, CLS ≤ 0.1, đo ở p75 ([web.dev/vitals](https://web.dev/articles/vitals)). Một số bài 2026 nói LCP "Good" hạ xuống 2.0 s — **chưa thấy trong tài liệu chính thức**, coi 2.0 s là mục tiêu nội bộ.
- Trang tool: input + nút phải tương tác được ngay → HTML/CSS render server, JS tối thiểu (Alpine.js hoặc vanilla ~10 KB), không Vue/React SPA cho trang public. Kết quả check/ tải trả về qua `fetch` + polling/SSE, không reload.
- Ảnh: `<img width height>` + `loading=lazy` ngoài viewport, AVIF/WebP, hero ≤ 60 KB; font: 1 family, `font-display: swap`, self-host.
- Không ads bên thứ ba trên trang tool (CLS + tín hiệu chất lượng + AdSense không thích downloader).
- Đo: CrUX (Search Console CWV report) + Lighthouse CI trong GitHub Actions; budget: JS ≤ 80 KB gz cho trang public.

### 3.4 SSR / rendering cho Laravel
- Trang marketing/tool/guide: **Blade SSR thuần** (HTML hoàn chỉnh, không phụ thuộc JS) → Google, Bing, Perplexity/ChatGPT crawler đọc được ngay (GEO guide nhấn "server-rendered, semantic HTML").
- Dashboard `/app`: Inertia + Vue 3 (hoặc Livewire) — không cần SSR vì noindex.
- Cache: `spatie/laravel-responsecache` (hoặc Cloudflare "Cache Everything" + `Cache-Tag` purge) cho trang public; dữ liệu động (tốc độ, giá) nhúng khi render + ETag; TTL 5–15 phút.
- Không dùng dynamic rendering/cloaking: cùng HTML cho bot và người.

### 3.5 Sitemap, robots, canonical, hreflang
- `sitemap.xml` index → `sitemap-pages-{locale}.xml`, `sitemap-guides-{locale}.xml`, `sitemap-tools.xml`, `sitemap-errors.xml`, mỗi `<url>` kèm `<xhtml:link rel=alternate hreflang>` tất cả ngôn ngữ + `x-default`; `<lastmod>` thật (từ `updated_at`). Không đưa trang có tham số, `/app`, `/api`.
- `robots.txt`:
  ```
  User-agent: *
  Disallow: /app/
  Disallow: /api/
  Disallow: /*?url=
  Disallow: /*?link=
  Disallow: /download/        # trang giao file (signed URL) không bao giờ index
  Allow: /
  Sitemap: https://{domain}/sitemap.xml
  ```
  Cho phép GPTBot, ClaudeBot, PerplexityBot, Google-Extended (muốn được trích dẫn thì không chặn); chặn bot scrape rác bằng Cloudflare Bot Fight thay vì robots.
- Canonical tự trỏ trên mọi trang; với hreflang, **mỗi ngôn ngữ canonical về chính nó**, không về bản EN.
- `X-Robots-Tag: noindex` header cho response API/JSON/signed download.
- `hreflang` cả trong `<head>` lẫn sitemap (2 kênh, cùng dữ liệu, sinh từ 1 hàm).

### 3.6 Khác
- HTTPS, HSTS, HTTP/2–3 (Cloudflare), `Content-Language`.
- 404 có gợi ý tool; 410 cho trang bỏ hẳn; redirect 301 khi đổi slug (bảng redirect trong DB).
- OpenGraph/Twitter card có ảnh động (Blade → ảnh OG sinh sẵn theo trang).
- Theo dõi log crawl (Cloudflare Logpush hoặc `Log` middleware) để phát hiện bot lãng phí crawl budget vào `?url=`.

---

## 4. Programmatic SEO an toàn

Google phạt theo **ý định và giá trị**, không theo cách tạo: "generating many pages with little to no unique value primarily to manipulate ranking" = scaled content abuse; doorway = trang tạo để bắt truy vấn rồi đẩy đi ([Spam policies](https://developers.google.com/search/docs/essentials/spam-policies), [Patrick Stox – scaled content abuse](https://patrickstox.com/programmatic-seo/risks/scaled-content-abuse/)).

| Trục | Cho phép? | Điều kiện để không thin |
|---|---|---|
| Host × ngôn ngữ (`/vi/baidu-pan-downloader`) | Có | Mỗi trang: đoạn giới hạn host, số liệu tốc độ từ vùng của ngôn ngữ đó, giá bằng tiền tệ địa phương + kênh thanh toán địa phương (VietQR/Momo cho vi), FAQ địa phương, người review bản dịch |
| Mã lỗi (`/errors/…`) | Có, ≤ 50 trang | Giải thích + nguyên nhân + fix + ảnh; gộp mã hiếm vào 1 trang tổng |
| So sánh đối thủ (`/compare/…`) | Có, ≤ 15 trang | Dữ liệu giá/host/tốc độ đo thật, ngày cập nhật, trung thực (đối thủ hơn ở đâu) |
| Glossary (提取码, SVIP, 积分, C币, 秒传…) | Có, 1 trang/thuật ngữ hoặc 1 trang gộp | ≥ 300 từ thật, ví dụ, ảnh |
| "Download {tên file/game/course} from Baidu" | **Không** | Là mồi DMCA + thin + tương đương index link tải |
| Trang cho từng link share / từng resource CSDN | **Không** | Như trên; kết quả tool luôn noindex |
| Trang thành phố/quốc gia ("baidu downloader for Vietnam") | Chỉ khi có dữ liệu riêng | Tốc độ đo tại quốc gia + thanh toán địa phương; nếu không → 1 trang ngôn ngữ là đủ |
| Blog AI sinh hàng loạt | **Không** | Core updates 12/2025–05/2026 đánh mạnh AI content không chuyên môn ([Momentic – May 2026](https://momenticmarketing.com/google-updates/may-2026-core-update)) |

Quy trình: template + dữ liệu có cấu trúc trong DB, nhưng mỗi trang xuất bản qua bước review người; theo dõi "Crawled – currently not indexed" trong GSC như chỉ báo thin; gộp/xoá trang < 50 lượt xem/quý.

---

## 5. Rủi ro & giảm thiểu

### 5.1 Bản đồ rủi ro
| Rủi ro | Cơ chế | Mức | Nguồn |
|---|---|---|---|
| **Copyright demotion site-wide** | "When we receive a significant volume of valid copyright removal requests involving a given site, we are able to use that to demote other content from the site" (tín hiệu Pirate 2012, vẫn trong spam policies). Áp dụng theo URL bị báo → nếu ta không có URL nào chứa/ dẫn tới file thì không có gì để báo. | Trung bình | [Spam policies](https://developers.google.com/search/docs/essentials/spam-policies), [SEL – Pirate update](https://searchengineland.com/dmca-requests-now-used-in-googles-ranking-algorithm-130118) |
| DMCA giả / abuse nhắm vào trang guide | Lumen > 75 triệu notice, có chiến dịch lạm dụng gỡ trang thật; GSC không báo hết → phải theo dõi Lumen | Thấp–TB | [SEJ – fake DMCA](https://www.searchenginejournal.com/fake-dmca-complaints-keep-erasing-real-pages-from-google-what-to-watch-for/581299/), [Google Transparency FAQ](https://support.google.com/transparencyreport/answer/7347743?hl=en) |
| Tiền lệ downloader: youtube-dl (RIAA DMCA 1201), Y2mate + 11 site bị IFPI đóng 10/2025 (VN!) | Stream-ripping nhạc/video có bản quyền, truy vấn "download {bài hát}" | Khác bản chất: Baidu/CSDN là **file do người dùng chia sẻ**, tool là "premium link generator" như debrid. Nhưng cùng loại tấn công nếu ta quảng bá tải nội dung cụ thể | [EFF](https://www.eff.org/deeplinks/2020/11/riaa-abuses-dmca-take-down-popular-tool-downloading-online-video), [IFPI – Y2mate](https://www.ifpi.org/ifpi-shuts-down-y2mate-com-and-11-other-major-stream-ripping-sites-in-landmark-action-in-vietnam/) |
| Payment processor | Stripe cấm "products or services that directly infringe or facilitate infringement"; Lemon Squeezy cấm sản phẩm không có license | Cao (mất doanh thu ngay) | [Stripe restricted](https://stripe.com/legal/restricted-businesses), [Lemon Squeezy prohibited](https://docs.lemonsqueezy.com/help/getting-started/prohibited-products) |
| Cloudflare / hosting | CF H1/2025: ~125k báo cáo DMCA, action ~54k, terminate 21k account hosted; CF thua kiện NXB Nhật 2025 | Trung bình | [CF Transparency H1 2025](https://cf-assets.www.cloudflare.com/slt3lc6tev37/5DiewkfYlBVgef9zHC00ib/42d5fadccefce6be832b0d7cdfe7d26c/1H_2025_Cloudflare-s_Transparency_Report_Abuse_V3.pdf), [Redpoints](https://www.redpoints.com/blog/cloudflare-dmca-takedown/) |
| AdSense/Ads | Google từng gỡ AdSense cả site vì bài về YouTube downloader | Cao nếu định chạy ads | [windowsread.me](https://windowsread.me/p/best-youtube-downloaders) |
| Tài khoản SVIP/CSDN bị khoá, Baidu siết API (verify -62 từ 9/2026) | Vận hành | Cao | research 01 |
| Pháp lý TQ (PanDownload: tác giả bị bắt) | Chỉ với người/pháp nhân ở TQ | Thấp nếu không có hiện diện TQ | research 01 |

### 5.2 Biện pháp (thiết kế "không có gì để gỡ")
1. **Không host, không index, không liệt kê file**: file trung chuyển lưu tạm object storage (R2/B2) ≤ 48–72 h, URL ký số hết hạn, `noindex` + `Disallow`, không có trang danh sách "recent downloads/popular files" công khai. Không hiển thị tên file trong URL/title bất kỳ trang index nào.
2. **Kết quả tool = metadata, không chứa nội dung**: link checker chỉ trả tên/size; không cache tên file vào trang tĩnh; không tạo trang theo link.
3. **Định vị thương hiệu** là "cloud transfer / premium link generator cho file của bạn" (giống debrid/MultCloud), không phải "tải lậu": copy tránh "leech/crack/bypass/free VIP hack"; ToS yêu cầu người dùng có quyền với file; Acceptable Use cấm nội dung bản quyền/ trái phép.
4. **Trang `/legal/copyright`**: DMCA designated agent (đăng ký với US Copyright Office nếu có pháp nhân US; nếu không, vẫn ghi rõ email agent + form), quy trình 24h: xoá file tạm, chặn hash/surl vào blocklist, ghi log; counter-notice; repeat-infringer policy (khoá tài khoản sau N lần) — đây cũng là yêu cầu để giữ safe harbor và là thứ Stripe/CF reviewer tìm.
5. **Blocklist chủ động**: hash/surl bị báo + từ khoá (tên phim/album/phần mềm crack phổ biến) từ chối xử lý; tích hợp danh sách hash từ notice cũ.
6. **Theo dõi**: GSC "Copyright removals" (nếu xuất hiện) + tìm domain trên Lumen mỗi tuần (cron + cảnh báo Slack/Telegram); phản hồi counter-notice trong 48h khi bị báo sai ([Zeo – DMCA & SEO](https://zeo.org/resources/blog/what-to-do-with-dmca-notices-in-seo-efforts)).
7. **Thanh toán**: đa kênh — Paddle/Lemon Squeezy (MoR, mô tả là "cloud file transfer service"), PayPal, crypto (USDT), VietQR/Momo (VN) qua cổng địa phương; tách pháp nhân/ tài khoản, giữ chargeback < 0.5%; không ghi "Baidu" trong tên merchant.
8. **Hạ tầng**: Cloudflare cho site marketing (rủi ro thấp vì không có file), origin file ở nhà cung cấp riêng, tách domain phục vụ file (`dl-cdn.{brand}.net` không liên kết từ HTML index) → nếu domain file bị báo thì domain SEO không dính.
9. **Không chạy AdSense**; kiếm tiền bằng subscription/ PAYG.
10. **Tách rủi ro Google**: không tạo trang mục tiêu truy vấn tên tác phẩm; không mua link/ PBN; không đặt nội dung bên thứ ba (site reputation abuse — vẫn áp dụng ngoài EEA sau cập nhật 08/2026 ([Google blog 08/2026](https://developers.google.com/search/blog/2026/08/update-site-reputation-policy))).
11. **Kế hoạch dự phòng deindex**: brand + email list + Telegram + GitHub (CLI/API client) là kênh không phụ thuộc Google; giữ tỉ lệ traffic organic < 60% sau năm 1.

---

## 6. GEO / AI search (ChatGPT, Perplexity, Google AI Overviews/AI Mode)

Google (guide 05/2026, cập nhật 07/2026): "no additional requirements", "You don't need to create new machine readable files, AI text files, markup, or Markdown", "no requirement to break your content into tiny pieces", "structured data isn't required"; điều kiện duy nhất: trang được index và đủ điều kiện hiển thị snippet; theo dõi bằng **Generative AI performance report** trong GSC (toàn cầu từ 08/2026, chỉ impressions/pages/countries, không có click/query) ([Google – AI features](https://developers.google.com/search/docs/appearance/ai-features), [Google – AI optimization guide](https://developers.google.com/search/docs/fundamentals/ai-optimization-guide), [GSC gen-AI report](https://developers.google.com/search/blog/2026/06/gen-ai-performance-reports)). 62% citation AI Overviews đến từ trang ngoài top-10 → cơ hội cho site mới ([PrimeAIcenter](https://primeaicenter.com/google-ai-optimization-guide/)).

Việc cần làm:
1. **Answer-first**: mỗi H2 mở bằng 1–2 câu trả lời trực tiếp (định nghĩa, con số, năm), rồi mới chi tiết; bảng cho số liệu (giá, tốc độ, giới hạn); mỗi trang trả lời 1 câu hỏi chính rõ ràng trong title/H1.
2. **Dữ liệu gốc có thể trích dẫn**: benchmark tốc độ hằng tháng, bảng giá SVIP/CSDN cập nhật, thống kê "% link Baidu chết sau 30 ngày" từ link checker (ẩn danh, tổng hợp) → thứ LLM thích trích vì không ai khác có. Ghi rõ phương pháp + ngày.
3. **Entity/brand**: `Organization` schema đầy đủ + `sameAs`; trang About có người thật; đăng ký Wikidata (khi đủ notability), Crunchbase, G2/Capterra/AlternativeTo/Product Hunt, GitHub org với CLI/SDK open-source (dev cộng đồng là nguồn mention mạnh nhất cho ChatGPT/Perplexity).
4. **Brand mentions nơi LLM lấy dữ liệu**: Reddit (r/DataHoarder, r/Piracy tránh — chọn r/chinalife, r/learnchinese, r/DataHoarder), StackOverflow/SuperUser (câu hỏi kỹ thuật thật), GitHub issues của BaiduPCS-Go/OpenList (trả lời hữu ích), VOZ/tinhte (VN), Zhihu (zh), Quora. Không spam; 1 mention có ngữ cảnh > 20 link.
5. **Không chặn crawler AI**: cho phép GPTBot, OAI-SearchBot, ClaudeBot, PerplexityBot, Google-Extended, Bingbot (ChatGPT search dùng Bing index → **Bing Webmaster Tools + IndexNow** bắt buộc).
6. **llms.txt / llms-full.txt**: chi phí ~0, Google bỏ qua nhưng agent/doc tool và một số crawler đọc; làm 1 file liệt kê tool, guide, pricing, API doc kèm mô tả 1 dòng ([llmpulse guide](https://llmpulse.ai/blog/llms-txt-guide/), [GEOly evidence](https://www.geoly.ai/blog/does-llms-txt-work)).
7. **API doc public** (`/docs/api`) dạng OpenAPI + ví dụ curl: LLM hay trích dẫn doc kỹ thuật; đồng thời tạo kênh B2B (dev tích hợp, jDownloader plugin).
8. **Đo**: GSC Generative AI report; Perplexity/ChatGPT prompt test hằng tháng với 20 câu hỏi mục tiêu ("how to download from baidu pan without account", "csdn download without vip"…), ghi lại brand có được nêu không.

---

## 7. Checklist triển khai cho Laravel

### 7.1 Quyết định nền tảng
- Codebase hiện tại (Laravel 5.6, PHP 7.1, jQuery 2, Mix 2) đã EOL nhiều năm; nâng cấp thẳng 5.6 → 12 tốn hơn dựng mới. **Đề xuất**: app mới `Laravel 12 + PHP 8.3/8.4`, tái dùng logic crawl/queue từ xcrawl nếu cần dưới dạng package nội bộ ([Laravel upgrade guide](https://laravel.com/docs/11.x/upgrade), [acquaintsoft – 5.x→12](https://acquaintsoft.com/blog/laravel-version-upgrade)).
- Frontend public: Blade + Tailwind + Alpine.js (Vite). Dashboard: Livewire 3 hoặc Inertia v3 + Vue 3 (noindex).
- Queue: Redis + Horizon; storage tạm: Cloudflare R2/Backblaze B2 (S3 driver); DB: MySQL/Postgres.

### 7.2 Packages
| Nhu cầu | Package | Ghi chú |
|---|---|---|
| Locale prefix + hreflang | `mcamara/laravel-localization` | Route group `localize`, `LaravelLocalization::getLocalizedURL()` để sinh `<link rel=alternate hreflang>`; hoặc `codezero-be/laravel-localized-routes` nếu muốn slug dịch ([mcamara](https://github.com/mcamara/laravel-localization)) |
| Meta/OG/JSON-LD | `artesaos/seotools` hoặc `ralphjsmit/laravel-seo` / `rankbeam/laravel-seo` | Chọn 1; `ralphjsmit` có model-based SEO + sitemap; `rankbeam` có canonical/crawler controls ([artesaos](https://github.com/artesaos/seotools), [ralphjsmit](https://github.com/ralphjsmit/laravel-seo), [rankbeam](https://github.com/rankbeam/laravel-seo)) |
| Schema.org typed | `spatie/schema-org` | Sinh `SoftwareApplication`, `Product`, `Organization`, `BreadcrumbList` |
| Sitemap | `spatie/laravel-sitemap` | Sinh theo Sitemapable models + cron hằng ngày; thêm `alternates` hreflang; sitemap index ([spatie/laravel-sitemap](https://github.com/spatie/laravel-sitemap)) |
| Full-page cache | `spatie/laravel-responsecache` v8 (flexible caching) | Bỏ qua khi user đăng nhập / có query `url=` ([responsecache](https://spatie.be/docs/laravel-responsecache/v8/introduction)) |
| Bản dịch quản lý | `spatie/laravel-translatable` (content DB) + JSON lang files (UI); pipeline: MT draft → review người → publish flag | |
| Redirect | `spatie/laravel-missing-page-redirector` | Bảng 301 |
| Hình OG | `spatie/browsershot` hoặc dịch vụ ảnh | Sinh ảnh OG theo trang |
| Feed/IndexNow | `spatie/laravel-feed` + job gọi IndexNow API (Bing) khi publish | |
| Rate limit/abuse | `RateLimiter` Laravel + Cloudflare Turnstile trên tool | |
| Health/status | `spatie/laravel-health` + trang `/status` tự viết (số liệu từ Horizon metrics) | |
| Test SEO | Lighthouse CI (GitHub Actions), `unlighthouse` quét toàn site | |

### 7.3 Cấu hình cụ thể
- `config/app.php`: `locale=en`, `fallback_locale=en`; `config/laravellocalization.php`: `supportedLocales` = en, vi, id, th, ko, ja, es, pt, ru, ar, zh-Hant; `hideDefaultLocaleInURL=true`; `useAcceptLanguageHeader=false` (không auto-redirect theo header — Googlebot crawl từ US; dùng banner gợi ý ngôn ngữ thay vì redirect).
- Middleware `SeoHeaders`: `X-Robots-Tag: noindex, nofollow` cho `/app/*`, `/api/*`, `/download/*`, mọi request có `url|link` query; `Link: <canonical>; rel="canonical"` cho file.
- Layout Blade `layouts/public.blade.php`: `@stack('jsonld')`, `@yield('title')`, `@yield('meta')`, hreflang loop, canonical = `URL::current()` không query, `lang` + `dir="rtl"` cho ar.
- Component `<x-seo.software-app :page="$page" />` render JSON-LD từ `spatie/schema-org`; rating chỉ render khi `$page->reviews_count > 0 && visible`.
- Route: `Route::group(['prefix' => LaravelLocalization::setLocale(), 'middleware' => ['localize','localeSessionRedirect','localizationRedirect','localeViewPath']], …)`; route trong `/tools/*` trả JSON kết quả qua `POST /api/tools/...` (không GET có tham số để tránh bị index).
- Sitemap cron: `php artisan sitemap:generate` hằng đêm, ping Google (đã ngừng ping endpoint từ 2023 → chỉ khai báo trong robots + GSC) và gửi IndexNow cho Bing.
- Cache: Cloudflare Page Rule/Cache Rule "cache HTML" cho `/`, `/*-downloader`, `/guides/*`, `/tools/*` (bỏ qua khi có cookie session), `Cache-Tag` theo route để purge khi publish.
- Vite: `@vite` với preload; CSS critical inline cho above-the-fold trang tool; `defer` mọi script; không jQuery.
- Ảnh: `spatie/laravel-image-optimizer` hoặc Cloudflare Images/Polish; `<picture>` AVIF/WebP.
- Logging DMCA: model `CopyrightNotice` (source, urls, hash, status, received_at, resolved_at), job `PurgeReportedFiles`, blocklist bảng `blocked_hashes`/`blocked_surls`; admin xem tại `/app/admin/notices`.
- Monitoring: GSC (Performance, CWV, Enhancements, Generative AI report), Bing WMT, Cloudflare Analytics, Plausible/Umami (không GA nếu nhắm EU), cron kiểm tra Lumen.

### 7.4 Lộ trình
| Tuần | Việc |
|---|---|
| 1–2 | Dựng Laravel 12 skeleton, layout public, localization, SEO components, robots/sitemap, CI Lighthouse |
| 3–4 | Home tool + `/baidu-pan-downloader` + `/csdn-downloader` + pricing + legal (EN), Link Checker + 提取码 helper |
| 5–6 | 6 guides EN lõi (từ outline research 01), status page, CSDN preview tool, Bing/GSC/IndexNow |
| 7–8 | vi + id (review người), compare pages, speed benchmark cron + trang speed test |
| 9–12 | th/ko/ja, error pages, API docs + GitHub CLI, llms.txt, chiến dịch mention (Reddit/GitHub/VOZ), đo GEO lần 1 |

---

## 8. Nguồn chính
- Google Search Central: [Spam policies](https://developers.google.com/search/docs/essentials/spam-policies) · [AI features](https://developers.google.com/search/docs/appearance/ai-features) · [AI optimization guide](https://developers.google.com/search/docs/fundamentals/ai-optimization-guide) · [Gen-AI performance report](https://developers.google.com/search/blog/2026/06/gen-ai-performance-reports) · [Site reputation policy 08/2026](https://developers.google.com/search/blog/2026/08/update-site-reputation-policy) · [Site reputation 11/2024](https://developers.google.com/search/blog/2024/11/site-reputation-abuse) · [HowTo/FAQ changes 08/2023](https://developers.google.com/search/blog/2023/08/howto-faq-changes) · [FAQPage](https://developers.google.com/search/docs/appearance/structured-data/faqpage) · [SoftwareApplication](https://developers.google.com/search/docs/appearance/structured-data/software-app) · [Review snippet](https://developers.google.com/search/docs/appearance/structured-data/review-snippet) · [SD policies](https://developers.google.com/search/docs/appearance/structured-data/sd-policies) · [Localized versions / hreflang](https://developers.google.com/search/docs/specialty/international/localized-versions) · [Copyright removal FAQ](https://support.google.com/transparencyreport/answer/7347743?hl=en)
- Core updates 2026: [SERoundtable May 2026](https://www.seroundtable.com/google-may-2026-core-update-done-41435.html) · [Momentic](https://momenticmarketing.com/google-updates/may-2026-core-update) · [Search Engine Land library](https://searchengineland.com/library/platforms/google/google-algorithm-updates/core-update) · [seo-kreativ March 2026 spam update](https://www.seo-kreativ.de/en/blog/google-march-2026-spam-update/)
- Programmatic/scaled content: [Patrick Stox](https://patrickstox.com/programmatic-seo/risks/scaled-content-abuse/) · [Heroic Rankings 2026](https://heroicrankings.com/seo/content-creation/programmatic-seo/) · [Growth Engineer](https://growthengineer.ai/blog/programmatic-seo-google-penalty)
- DMCA/downloader: [SEL Pirate update](https://searchengineland.com/dmca-requests-now-used-in-googles-ranking-algorithm-130118) · [SEJ fake DMCA](https://www.searchenginejournal.com/fake-dmca-complaints-keep-erasing-real-pages-from-google-what-to-watch-for/581299/) · [Zeo](https://zeo.org/resources/blog/what-to-do-with-dmca-notices-in-seo-efforts) · [EFF youtube-dl](https://www.eff.org/deeplinks/2020/11/riaa-abuses-dmca-take-down-popular-tool-downloading-online-video) · [IFPI Y2mate](https://www.ifpi.org/ifpi-shuts-down-y2mate-com-and-11-other-major-stream-ripping-sites-in-landmark-action-in-vietnam/) · [TorrentFreak](https://torrentfreak.com/y2mate-com-among-a-dozen-youtube-rippers-shut-down-by-ifpi-251015/) · [Lumen](https://en.wikipedia.org/wiki/Lumen_(website))
- Payment/CDN: [Stripe restricted businesses](https://stripe.com/legal/restricted-businesses) · [Lemon Squeezy prohibited](https://docs.lemonsqueezy.com/help/getting-started/prohibited-products) · [Cloudflare abuse approach](https://www.cloudflare.com/trust-hub/abuse-approach/) · [CF transparency H1 2025](https://cf-assets.www.cloudflare.com/slt3lc6tev37/5DiewkfYlBVgef9zHC00ib/42d5fadccefce6be832b0d7cdfe7d26c/1H_2025_Cloudflare-s_Transparency_Report_Abuse_V3.pdf)
- GEO/llms.txt: [llmpulse](https://llmpulse.ai/blog/llms-txt-guide/) · [GEOly](https://www.geoly.ai/blog/does-llms-txt-work) · [PrimeAIcenter](https://primeaicenter.com/google-ai-optimization-guide/) · [Semrush](https://www.semrush.com/blog/google-publishes-generative-ai-search-guide/)
- CWV: [web.dev/vitals](https://web.dev/articles/vitals) · [corewebvitals.io](https://www.corewebvitals.io/core-web-vitals)
- Baidu share API: [AList baidu_share](https://alistgo.com/guide/drivers/baidu_share.html) · [gist erraz1](https://gist.github.com/erraz1/97ac8ef2b9f629c8c0620d79b0795749)
- Đối thủ: [baidudl.com](https://baidudl.com/) (pricing/tutorials/blog/roadmap/changelog structure) · research nội bộ 01–03
- Laravel: [mcamara/laravel-localization](https://github.com/mcamara/laravel-localization) · [spatie/laravel-sitemap](https://github.com/spatie/laravel-sitemap) · [spatie/laravel-responsecache](https://spatie.be/docs/laravel-responsecache/v8/introduction) · [artesaos/seotools](https://github.com/artesaos/seotools) · [ralphjsmit/laravel-seo](https://github.com/ralphjsmit/laravel-seo) · [rankbeam/laravel-seo](https://github.com/rankbeam/laravel-seo) · [Laravel upgrade](https://laravel.com/docs/11.x/upgrade) · [Inertia v3](https://dev.to/hafiz619/inertiajs-v3-is-out-the-upgrade-guide-every-laravel-developer-actually-needs-419b)

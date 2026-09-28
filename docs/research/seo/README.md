# SEO & Marketing – Kế hoạch tổng hợp (09/2026)

Giả định: brand có sẵn SVIP Baidu + VIP CSDN → tự tải, tự động, tức thì. Volume/traffic là ước lượng (không có Ahrefs/Semrush); các mục "chưa xác minh" ghi rõ trong từng file.

| File | Nội dung |
|---|---|
| [01-keyword-content.md](01-keyword-content.md) | Keyword universe EN/VI/KO/JA/ID…, phân tích SERP 20 KW, pillar/cluster, pSEO, lịch 48 bài/90 ngày |
| [02-competitor-teardown.md](02-competitor-teardown.md) | Mổ xẻ SEO baidudl, erranium, baidufast, baidulinkdownloader, VN shops; top 10 chiến thuật copy |
| [03-technical-architecture.md](03-technical-architecture.md) | Kiến trúc URL + hreflang, free tools, schema, CWV, rủi ro DMCA, GEO/AI search, checklist Laravel |
| [04-offpage-community.md](04-offpage-community.md) | Nơi có nhu cầu thật (GitHub issues, HF, gist, forum mod, VOZ…), link building, affiliate, Trustpilot, KPI 90 ngày |
| [05-brand-growth.md](05-brand-growth.md) | Định vị, tên/domain, freemium, bảng giá, Telegram bot/extension/API, paid, roadmap 6 tháng |

## Kết luận chính

1. **Ngách nhỏ nhưng yếu**: cả ngách EN chỉ vài chục nghìn visit/tháng; đối thủ giao thủ công (vài giờ), site nặng, content dịch máy, review đáng ngờ. VN chưa có tool tự động nào.
2. **USP**: tức thì + tự động (SVIP thật), free tier (≤200MB), CSDN (bị bỏ rơi), thanh toán VietQR/Momo/USDT/PayPal, gói tháng, API.
3. **Keyword ưu tiên**: EN "download baidu without account/…", "baidu downloader/link generator", CSDN downloader, long-tail lỗi/提取码/use-case (dataset AI, game mod); VI "tải file baidu/csdn không cần tài khoản", "tải hộ pan baidu", "thuê svip baidu" (tránh "tải baidu" = intent tải app).
4. **Site**: 1 domain, subfolder ngôn ngữ (en, vi → ko, ja, id → es, pt, ru, th), landing theo host, /tools (link checker, 提取码 helper, CSDN preview), /errors, /compare, /speed-test, /status, /changelog. Không tạo trang theo từng file; noindex mọi URL chứa link.
5. **Linkbait/E-E-A-T**: "Baidu Netdisk Speed Index" đo hằng tuần nhiều quốc gia (free vs SVIP), video không cắt, status hiển thị SVIP.
6. **Off-page**: hỗ trợ thật có disclosure trên GitHub issues/HF/gist/itch.io/VOZ/forum mod; directory (AlternativeTo, SaaSHub, Product Hunt); YouTube VI + EN; affiliate 25% + 10% recurring; partnership với premiumdownloader.net / baidudownloader.com (API sỉ).
7. **Kênh growth**: Telegram bot #1, Chrome extension "companion", API/white-label; paid chỉ Telegram/Reddit Ads (Google Ads rủi ro chính sách bản quyền).
8. **Rủi ro**: DMCA → demote site-wide, payment processor. Không host/index file, link ký hết hạn, trang DMCA + xử lý 24h, tránh từ leech/crack/bypass, không dùng tên/logo Baidu trong brand.
9. **KPI**: 90 ngày ~5–15k organic session/tháng, 40–60 referring domains; 6 tháng ~30k visit, 500 khách trả phí, MRR 3–5k USD, ngân sách ~6–9k USD.

## Việc cần chạy tay
- WHOIS domain ứng viên (panfetch, getpan, panbridge, sinofetch), Google Trends theo quốc gia, volume thật trên Ahrefs/Semrush/GSC, thread Reddit (bị chặn crawler).

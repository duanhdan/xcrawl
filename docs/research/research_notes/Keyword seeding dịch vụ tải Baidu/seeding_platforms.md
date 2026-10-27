# Nền tảng seeding nội dung (white-hat) cho dịch vụ tải file Baidu Pan / CSDN / host Trung Quốc

*Ngày nghiên cứu: 27/10/2026. Điểm xuất phát: `/home/user/xcrawl/docs/research/seo/04-offpage-community.md` và `seo/02-competitor-teardown.md` (khảo sát 28/09/2026). Bản này kiểm tra lại số liệu sau ~1 tháng, đo trực tiếp thuộc tính `rel` của link trên từng nền tảng (curl HTML), lấy số liệu thread HF qua Discourse JSON, lấy view YouTube qua `ytInitialData` của trang tìm kiếm, và trích nguyên văn chính sách.*

**Giới hạn phương pháp (đọc trước):**
- WebSearch là một search proxy (US), **không phải SERP Google thật**. Toán tử `site:` gần như bị bỏ qua (truy vấn `site:medium.com`, `site:quora.com` không trả về trang Medium/Quora nào). Vì vậy "đang rank trang 1" ở đây nghĩa là "xuất hiện trong top kết quả của search proxy". Vị trí Google chính xác cần kiểm tra thủ công (ẩn danh, `gl=us`, `hl=en` / `gl=vn`).
- Quora, Super User/Stack Exchange, Medium, GBAtemp, Product Hunt, Disboard, Telemetr đều chặn crawler (Cloudflare "Just a moment…" hoặc 403). Những chỗ đó ghi rõ là chưa xác minh.
- `gh api` trong phiên này chỉ đọc được các repo đã gắn, nên số liệu gist lấy bằng cách scrape HTML công khai.
- Không có Ahrefs/Semrush, nên không có volume hay vị trí từ khoá.

---

## 1. Đánh giá từng nền tảng: giá trị SEO, độ hợp đối tượng, chính sách, rủi ro, công sức, ví dụ đối thủ

### Takeaway
Gần như mọi nền tảng UGC đều gắn `nofollow`/`ugc` cho link ra ngoài (đã đo: GitHub Gist, HF Forum, itch.io). Giá trị thật của chúng là **chiếm chỗ trên SERP và kéo traffic giới thiệu**, không phải PageRank. Các nơi có thể cho link dofollow là blog tự quản (Dev.to theo mẫu đo được, WordPress.com, Substack, Hashnode, Blogger), nhưng Dev.to cấm rõ nội dung "chủ yếu để quảng bá hoặc tạo backlink". Mới nhất (10/2026): **HF đã đóng/xoá loạt thread seeding của BaiduFast** và **tài khoản GitHub seeding `gonelove31` đã biến mất (404)**. Các nền tảng này đang siết, nên mô hình "seed hàng loạt" của đối thủ có rủi ro thật.

### Cited Findings

**Thuộc tính link đo trực tiếp (curl, 27/10/2026)**
- GitHub Gist: toàn bộ 40 link ra ngoài trên gist erraz1 đều `rel="nofollow"`. — [gist erraz1](https://gist.github.com/erraz1/97ac8ef2b9f629c8c0620d79b0795749)
- Hugging Face Forums (Discourse): link ra ngoài mang `rel="noopener nofollow ugc"`. — [HF thread 180705](https://discuss.huggingface.co/t/how-to-download-pan-baidu-com-or-quark-pan-weights-without-a-chinese-account/180705)
- itch.io community: link `http://baidufast.com` do BaiduFast trả lời trong thread của người dùng mang `rel="nofollow noopener"`. — [itch.io thread Beast Habitat](https://itch.io/t/3669553/not-being-to-download-the-newest-version-in-baidu)
- Dev.to: bài mẫu có 18 link ra ngoài `rel="noopener noreferrer"` và không có nofollow, tức là dofollow trong mẫu này. — [bài Dev.to](https://dev.to/shreyvijayvargiya/saas-directories-in-2026-the-complete-submission-playbook-2ic6). Dev.to có thể đổi theo độ tin cậy của tài khoản; mới đo trên 1 mẫu.
- WordPress.com (subdomain mẫu) và Substack (bài trên domain riêng) đều có link ra ngoài không gắn rel, nhưng mẫu nhỏ (1–3 link). — [wordpressdotcom.wordpress.com](https://wordpressdotcom.wordpress.com/), [Lenny's Newsletter (Substack)](https://www.lennysnewsletter.com/p/how-to-get-your-first-100-users)
- Google: link `nofollow`/`sponsored`/`ugc` "will generally not be followed", nhưng trang đích "may still be crawled" nếu Google tìm thấy qua đường khác. `ugc` được khuyến nghị cho "comments and forum posts". — [Google: Qualify outbound links](https://developers.google.com/search/docs/crawling-indexing/qualify-outbound-links)

**GitHub (Gist, repo/README, issue, awesome-list)**
- Chính sách: AUP cấm "bulk distribution of promotions and advertising", "automated excessive bulk activity and coordinated inauthentic activity", "inauthentic interactions, such as fake accounts", "rank abuse, such as automated starring". Mục Advertising: "We do not generally prohibit use of GitHub for advertising… You may not advertise in other Users' Accounts, such as by posting monetized or excessive bulk content in issues." — [GitHub Acceptable Use Policies](https://docs.github.com/en/site-policy/acceptable-use-policies/github-acceptable-use-policies)
- Gist erraz1 (đẩy baidu.erranium.com): 81 sao, 9 fork, 21 revision, comment mới nhất 27/10/2026 (người dùng xin tải hộ link Baidu). Link không có UTM. Gist **không công bố quan hệ** với erranium (disclaimer chỉ ghi "at your own responsibility"). — [gist erraz1](https://gist.github.com/erraz1/97ac8ef2b9f629c8c0620d79b0795749)
- Gist myheart111 (BaiduFast): **25 sao** (28/09/2026 mới có 3), trang hiển thị ≥30 comment, comment mới nhất 25/10/2026, link có `utm_source=gist`. — [gist myheart111](https://gist.github.com/myheart111/c7240ff6bc6ec0265e93ad20869a03a7). Số sao lúc 28/09 lấy từ seo/02-competitor-teardown.md.
- Gist dreamer2908 "Register a Baidu account to download stuff???": 46 sao, comment mới nhất 27/10/2026. Đây là gist cộng đồng, không phải của đối thủ. — [gist dreamer2908](https://gist.github.com/dreamer2908/f8fb9fd043a0d16e21dbbd5d5ffb84f1)
- Gist BaiduDownloader (baidudownloader.com): 8 sao, comment mới nhất 16/09/2026. — [gist BaiduDownloader](https://gist.github.com/BaiduDownloader/de3732904045d9f78e9ab8e6c7f1b608)
- **Gist `gonelove31/24688770…` và cả trang hồ sơ `gist.github.com/gonelove31` hiện trả HTTP 404.** Hồ sơ này từng được ghi nhận là gist BaiduFast còn sống ngày 25/09/2026. — [gonelove31 (404)](https://gist.github.com/gonelove31), [seo/04 ghi nhận trước đó](/home/user/xcrawl/docs/research/seo/04-offpage-community.md)
- Issue của người dùng cần giúp (trích từ seo/04): PaddleOCR #899 "Unable to download files from pan.baidu.com", LoD-Loc #21 xin mirror dataset, v.v. — [PaddleOCR #899](https://github.com/PaddlePaddle/PaddleOCR/issues/899), [LoD-Loc #21](https://github.com/VictorZoo/LoD-Loc/issues/21)

**Hugging Face (Forum, thảo luận dataset/model)**
- Guidelines của diễn đàn: "Don't post spam or otherwise vandalize the forum… avoid even the appearance of any of these things." — [HF Forum Guidelines](https://discuss.huggingface.co/guidelines)
- Thread 180125 "How to download from Baidu Pan… 2026 notes for datasets + a free fetcher" do gonelove (BaiduFast) đăng 08/09/2026: 1.828 view, 3 post (toàn bộ của chính gonelove), 4 like. Log hệ thống: `visible.disabled` (bị ẩn) ngày 08/09, `visible.enabled` ngày 09/09, `autoclosed` ngày 13/10/2026. Bài có câu "I built one of those", tức là có công bố quan hệ một phần. — [HF 180125](https://discuss.huggingface.co/t/how-to-download-from-baidu-pan-pan-baidu-com-without-a-chinese-account-2026-notes-for-datasets-a-free-fetcher/180125) (dữ liệu từ `/t/180125.json`)
- Thread 180705 (gonelove, 24/09/2026): 1.075 view, 6 post. Gonelove tự "bump" 3 lần (25/09, 07/10, 12/10), có 2 người dùng thật xin tải hộ. **Moderator staff `adamm-hf` đóng thread ngày 18/10/2026.** Không thấy câu công bố quan hệ với baidufast. — [HF 180705](https://discuss.huggingface.co/t/how-to-download-pan-baidu-com-or-quark-pan-weights-without-a-chinese-account/180705)
- Thread 180744 "123pan weights/datasets now need a Chinese login…" (2026) vẫn hiện trong kết quả tìm kiếm nhưng `/t/180744.json` hiện **trả 404**, tức là đã bị xoá hoặc ẩn. — [HF 180744](https://discuss.huggingface.co/t/123pan-123-weights-datasets-now-need-a-chinese-login-how-to-download-them-without-one-2026/180744)
- Thread hữu cơ 160296 "Can someone with a Chinese Baidu NetDisk account help me download this dataset?" (22/06/2025): 1.080 view, 6 like, **cũng bị adamm-hf đóng ngày 25/10/2026**. — [HF 160296](https://discuss.huggingface.co/t/can-someone-with-a-chinese-baidu-netdisk-account-help-me-download-this-dataset/160296)

**YouTube (video dài + Shorts)** — số liệu từ trang tìm kiếm YouTube, 27/10/2026
- Truy vấn "how to download from baidu without account": Baidu Link Downloader "How To Download From pan.Baidu Without Account 2026" 7.100 view (1 năm); BaiduDownloader[.]com 26.226 view (4 năm); BaiduFast hai video 380 và 527 view (1 tháng); "PanDownloader" 476 view (3 tuần); video cũ của MAJOR TUTORIALS 125.836 view (10 năm) và HRDFX 132.340 view (7 năm) vẫn đứng đầu. — [YouTube search](https://www.youtube.com/results?search_query=how+to+download+from+baidu+without+account), [video Aeu_f-N4JFE](https://www.youtube.com/watch?v=Aeu_f-N4JFE), [video p2tfqwhwO2w](https://www.youtube.com/watch?v=p2tfqwhwO2w), [video YjzQhfdcwxA](https://www.youtube.com/watch?v=YjzQhfdcwxA)
- Truy vấn CSDN: BaiduDownloader[.]com "Download from CSDN.net without account" 11.600 view; Erra Erranium "New Method: … Baidu, Quark, 123Pan, CSDN" 9.237 view; Hieu IT 5.753 view; PcFix 12.815 view. — [YouTube search CSDN](https://www.youtube.com/results?search_query=csdn+download+without+points), [video 3dG4Lfuj4r4](https://www.youtube.com/watch?v=3dG4Lfuj4r4), [video lWEmsm7jWn8](https://www.youtube.com/watch?v=lWEmsm7jWn8)
- Truy vấn "cách tải file baidu": "Tài Khoản Baidu – Panbaidu Team" 40.965 view (1 tháng; lần đo 28/09 là 40.507, gần như đứng yên); Kênh 5 Phút 17.194; Hieu IT 22.975; Baidu Link Downloader bản tiếng Việt 800 view; MTechStill 638 và 159. — [YouTube search VN](https://www.youtube.com/results?search_query=c%C3%A1ch+t%E1%BA%A3i+file+baidu), [video jP5veIHFwUs](https://www.youtube.com/watch?v=jP5veIHFwUs)
- Chính sách spam: cấm "Content created solely to drive users off of YouTube to external sites", "Using high-volume, repetitive, or deceptive comments… to drive traffic", "offering rewards in exchange for likes, views, or subscribers", "flood community spaces with inorganic promotion". — [YouTube Spam, deceptive practices & scams](https://support.google.com/youtube/answer/2801973)
- Chính sách link ngoài: cấm link tới nguồn cung cấp "unauthorized access to audio content, audiovisual content, video games, software, or streaming services" và link tới "websites or apps that install malware or unwanted software". — [YouTube External links policy](https://support.google.com/youtube/answer/9054257)

**Stack Exchange (Super User)**
- "If you mention your product, website, etc. in your question or answer… you must disclose your affiliation in your post." Thêm nữa: "Don't talk about your product / website / book / job too much." Cộng đồng "tends to vote down overt self-promotion and flag it as spam." — [Stack Overflow Help: How to not be a spammer](https://stackoverflow.com/help/promotion). Đây là quy tắc chung toàn mạng SE; trang Super User chặn fetch.

**Dev.to**
- Điều khoản: "Users must make a good-faith effort to share content that is on-topic, of high-quality, and is not designed primarily for the purposes of promotion or creating backlinks. Posts must contain substantial content — they may not merely reference an external link… If a post contains affiliate links, that fact must be clearly disclosed." — [DEV Terms](https://dev.to/terms)

**Quora (câu trả lời + Spaces)**
- Không lấy được văn bản chính sách (help.quora.com chặn 403/Cloudflare). Nguồn thứ cấp: Social Media Today (cũ) viết Quora đã bỏ chính sách "no self-promotional answers"; Infidigit (agency) báo câu trả lời có link thường bị collapse hoặc xoá. — [Social Media Today](https://www.socialmediatoday.com/content/why-quora-new-twitter), [Infidigit](https://www.infidigit.com/blog/quora-answers-collapsed-and-deleted)
- Footprint đối thủ (từ seo/04): Quora Space `howtodownloadfilesfrombaiduquarkwithoutacc.quora.com` (erranium) và các câu hỏi đang rank như "How do I download Baidu documents in the US". — [Quora Space](https://howtodownloadfilesfrombaiduquarkwithoutacc.quora.com/), [Quora Q](https://www.quora.com/How-do-I-download-Baidu-documents-in-the-US)

**Product Hunt / directory**
- Founder baidudl ("Dylan", @dylan87) đã launch 2 sản phẩm: **baidudl** (02/2024) và **Quark Downloader** (10/2025). Trang hồ sơ này xuất hiện trong kết quả cho "how to download from baidu pan without account 2026". — [Product Hunt @dylan87](https://www.producthunt.com/@dylan87)
- AlternativeTo / SaaSHub: search proxy không trả về trang listing nào cho "baidu downloader". Trang AlternativeTo bị chặn fetch, nên chưa xác minh được đối thủ nào đã có listing.

**Newsletter / blog nền tảng (Medium, Substack, Beehiiv, Hashnode, Blogger)**
- QuarkDownloader (cùng nhóm baidudl) có bài trên Beehiiv (17/10/2025), link về quarkdownloader.com và baidudl.cloud. Bài này rank cho "how to download from baidu pan without account 2026". — [quarkdownloader.beehiiv.com](https://quarkdownloader.beehiiv.com/p/how-to-download-files-from-pan-quark-no-account-required-pan-quark-downloader)
- Medium: baidudl có tài khoản @baidudl và @baidudlcloud (theo seo/02). Truy vấn Medium không trả về bài nào trong top, và policy.medium.com chặn fetch. — [seo/02](/home/user/xcrawl/docs/research/seo/02-competitor-teardown.md)

**Telegram** (đếm trực tiếp trên t.me, 27/10/2026)
- @BaiduDownloader_Help: 960 thành viên (71 online); @baidudownloade: 391 subscriber; @BaiduFast_Support: 125 thành viên (28/09 mới 43); @baiduerranium: 4 subscriber. — [t.me/BaiduDownloader_Help](https://t.me/BaiduDownloader_Help), [t.me/baidudownloade](https://t.me/baidudownloade), [t.me/BaiduFast_Support](https://t.me/BaiduFast_Support), [t.me/baiduerranium](https://t.me/baiduerranium)

**itch.io**
- BaiduFast trả lời thread của người dùng game "Beast Habitat" (người dùng không tải được bản mới trên Baidu), kèm link nofollow tới baidufast.com. — [itch.io 3669553](https://itch.io/t/3669553/not-being-to-download-the-newest-version-in-baidu)

**Forum khác đang rank (vòng 2 phát hiện)**
- Hovatek thread 49038 "How to download from pan baidu" (2025) và thread 20892 (tutorial 2017, đã ghi "no longer works") đều có mặt trong top kết quả. — [Hovatek 49038](https://www.hovatek.com/forum/thread-49038.html), [Hovatek 20892](https://www.hovatek.com/forum/printthread.php?tid=20892)
- Forum D5Render "Assets from D5Render Chinese forum" (người dùng gặp link Baidu cho asset 3D). — [D5Render forum](https://forum.d5render.com/t/assets-from-d5render-chinese-forum/56045)
- rclone forum "How to download from Baidu". — [rclone forum](https://forum.rclone.org/t/how-to-download-from-baidu/54326)
- Fiverr seller có gig liên quan tải Baidu (xuất hiện trong truy vấn tiếng Việt). — [Fiverr alexdz11](https://www.fiverr.com/alexdz11)

### Bảng tổng hợp theo nền tảng

Chú thích: **XM** = đã xác minh trong nghiên cứu này; **KXM** = chưa xác minh trực tiếp (kiến thức chung, cần kiểm tra lại); "Rủi ro" là rủi ro bị khoá tài khoản hoặc xoá nội dung khi làm white-hat (có disclosure, 1 tài khoản thật).

| Nền tảng | Link (dofollow?) | Đang rank cho từ khoá Baidu/CSDN? | Hợp đối tượng | Chính sách self-promo (trích) | Rủi ro | Công sức | Đối thủ / ví dụ đang có mặt |
|---|---|---|---|---|---|---|---|
| **GitHub Gist** | nofollow (XM) | Có: gist erraz1, dreamer2908, BaiduDownloader, qapovo, myheart111 nằm trong top cho "download baidu without account" và "csdn download" (XM qua search proxy + seo/02) | Rất cao (dev, ML, người dùng EN) | AUP: cấm "bulk distribution of promotions", "fake accounts", "automated starring" | TB. Tài khoản seed gonelove31 đã bị 404 | Thấp (1–2 giờ/gist, sau đó nuôi comment) | erraz1 (81★), myheart111 (25★), BaiduDownloader (8★), qapovo, pivud (bản tiếng Trung) |
| **GitHub repo + README** | nofollow trong README (KXM, cùng cơ chế render với Gist) nhưng là trang riêng có thể rank | Repo tool (dotennin/baidu-pan-downloader) rank cho "baidu pan downloader" (theo seo/02) | Rất cao | Như trên; quảng cáo trên repo của chính mình được phép | Thấp | Cao (cần tool thật) | Chưa đối thủ nào có repo tool thật (baidulinkdownloader chỉ có org rỗng, theo seo/02) |
| **GitHub Issues** | nofollow | Issue PaddleOCR #899 rank (seo/04) | Rất cao (researcher cần dataset) | "You may not advertise in other Users' Accounts, such as by posting monetized or excessive bulk content in issues" | **Cao** nếu comment hàng loạt | TB | Chưa thấy đối thủ spam issue một cách công khai |
| **Awesome-lists** | nofollow, nhưng uy tín cao | KXM | Trung bình | Phụ thuộc maintainer (PR review) | Thấp | TB | Chưa thấy |
| **Hugging Face Forum** | nofollow ugc (XM) | Có: 3 thread của gonelove nằm top cho "how to download from baidu pan without account 2026" (XM) | Rất cao (ML) | "Don't post spam… avoid even the appearance" | **Cao (10/2026)**: mod đóng 180705 và 160296, xoá 180744 | Thấp | BaiduFast (gonelove), trước đó erranium/baidulinkdownloader được nhắc trong thread 160296 |
| **HF dataset/model discussions** | nofollow (KXM) | KXM | Rất cao | Như trên + quyền của chủ repo | TB | TB | Chưa thấy |
| **YouTube dài** | Link mô tả là nofollow và đi qua redirect (KXM); video tự rank trên Google và YouTube | Có: video cũ trên 100k view + video đối thủ 7k–26k (XM) | Cao (EN + VN) | Cấm "solely to drive users off of YouTube"; cấm link tới "unauthorized access to… software" | TB (cẩn thận nội dung lậu) | Cao | Baidu Link Downloader, BaiduDownloader[.]com, Erra Erranium, BaiduFast, BAIDUDL, Fast Downloader, Panbaidu Team VN |
| **YouTube Shorts** | Như trên | KXM (không thấy Shorts trong top) | Trung bình | Như trên | TB | TB | Chưa thấy |
| **TikTok** | Không có link trong caption (KXM) | Có trang discover "Cách Tải File Baidu" (seo/04) | TB (VN, sinh viên) | KXM | TB | TB | Chưa thấy creator chuyên (seo/04) |
| **Instagram Reels** | Link chỉ ở bio (KXM) | Không thấy | Thấp | KXM | Thấp | TB | BaiduFast có IG @baidudownloadfast (seo/02) |
| **Medium** | nofollow ugc (KXM, policy chặn fetch) | Không thấy bài nào trong top | TB | KXM (không fetch được Medium Rules) | TB | Thấp | baidudl (@baidudl, @baidudlcloud) |
| **Dev.to** | Dofollow trong mẫu đo (XM, 1 mẫu) | Không thấy | TB (dev) | "not designed primarily for the purposes of promotion or creating backlinks"; phải disclose affiliate | TB | TB | Chưa thấy |
| **Hashnode** | Blog Hashnode/domain riêng, KXM | Không thấy | TB | KXM | Thấp | TB | Chưa thấy |
| **Substack / Beehiiv** | Dofollow trong mẫu (XM, nhỏ) | Có: bài Beehiiv của QuarkDownloader rank (XM) | Thấp–TB | KXM | Thấp | TB | quarkdownloader.beehiiv.com |
| **Blogger / WordPress.com** | WP.com dofollow trong mẫu (XM nhỏ); Blogger KXM | Không thấy | Thấp | Google spam policy (site reputation abuse không áp dụng cho subdomain tự quản) | Thấp nhưng giá trị thấp | TB | Tumblr/blog cũ (seo/02: "tumblr cũ" rank) |
| **Quora (answer + Space)** | nofollow (KXM) | Có, theo seo/04; vòng này search proxy không trả về Quora | Cao (người dùng EN phổ thông) | Không lấy được văn bản gốc; thực tế câu trả lời có link dễ bị collapse | TB | Thấp–TB | Quora Space của erranium; justpaul "tải free 1 file" |
| **Super User / SE** | nofollow (KXM) | Không thấy (seo/04) | TB | "you must disclose your affiliation" | **Cao** nếu nhắc brand nhiều | TB | Không ai |
| **Telegram** (channel, group, bot, directory) | Không có giá trị SEO (t.me/s có index nhưng KXM) | Không | Rất cao cho support/giữ khách | KXM | Thấp | TB | BaiduDownloader_Help 960, baidudownloade 391, BaiduFast_Support 125 |
| **Discord / Disboard** | Không có giá trị SEO | Không | TB (mod game) | Disboard chặn fetch, KXM | Thấp | TB | Erranium có Discord (seo/02) |
| **Pinterest** | nofollow (KXM) | Không | Thấp | Trang help chỉ mô tả "misleading links" là spam | Thấp | Thấp | Không |
| **SlideShare / Scribd** | KXM | Có: PDF Scribd của baidudownloader.com rank cho "csdn downloader" (seo/02) | Thấp–TB | KXM | TB | Thấp | baidudownloader.com |
| **Tumblr** | KXM | Tumblr cũ có rank (seo/02) | Thấp | KXM | Thấp | Thấp | Bài cũ (aonodreamland, theo seo/04) |
| **X/Twitter** | nofollow, qua t.co (KXM) | Không | Thấp | KXM | Thấp | Thấp | @baidudl, @baidufast, @erraniumtech |
| **Facebook page/group** | nofollow (KXM) | Không (FB chặn crawler) | **Cao ở VN** | Rule từng group | TB | TB | FB "Dịch vụ download trên Pan Baidu", erranium FB |
| **LinkedIn** | KXM | Không | Thấp | KXM | Thấp | Thấp | erranium LinkedIn |
| **Product Hunt** | KXM | Hồ sơ maker xuất hiện trong kết quả (XM) | TB (tech) | KXM (chặn fetch) | Thấp | TB | baidudl (02/2024), Quark Downloader (10/2025) |
| **AlternativeTo / SaaSHub** | KXM | Không thấy | TB | KXM | Thấp | Thấp | Chưa xác minh |
| **itch.io** | nofollow (XM) | itch.io thread của BaiduFast rank cho "quark pan downloader" (seo/02) | TB (game, mod) | KXM | TB | Thấp | BaiduFast trả lời thread người dùng |
| **Notion public / Google Sites** | KXM | Không thấy | Thấp | KXM | Thấp | Thấp | Không thấy (fastdown.io dùng Google Doc, theo seo/02) |

### Inferences
- Vì hầu hết link UGC là nofollow/ugc, KPI cho seeding nên là **chiếm chỗ trên SERP + referral + brand search**, không phải số backlink. Backlink dofollow thật nên đến từ README của repo nghiên cứu (mirror dataset), báo chí/digital PR, và blog tự quản có nội dung riêng.
- Hai sự kiện độc lập trong 10/2026 cho thấy các nền tảng đang phát hiện mô hình seed của BaiduFast: HF đóng/xoá thread, GitHub gỡ hoặc khoá tài khoản `gonelove31`. Mô hình này gồm nhiều nick, tự bump, không công bố quan hệ, comment "drop your link below". Không nên sao chép mô hình đó.
- Thread "xin tải hộ" kiểu 160296 cũng bị đóng. HF có thể đang coi cả chủ đề "tải hộ Baidu" là ngoài phạm vi, nên ngay cả câu trả lời white-hat trên HF Forum cũng phải tập trung vào kỹ thuật/mirror hợp pháp.
- Gist vẫn là tài sản bền nhất: erraz1 sống từ trước 2025, vẫn có comment mỗi ngày. myheart111 tăng 3→25 sao trong 1 tháng (chưa rõ sao tự nhiên hay không).

### Gaps
- Chưa xác minh được rel của Medium, Quora, LinkedIn, Pinterest, Tumblr, Hashnode, Blogger, Notion, Google Sites, Product Hunt, AlternativeTo, SaaSHub vì các trang này chặn crawler hoặc thiếu trang mẫu. Cần kiểm tra thủ công bằng DevTools.
- Không lấy được văn bản gốc chính sách Quora, Medium Rules, Disboard, Product Hunt, Pinterest Community Guidelines.
- Không biết lý do chính xác `gonelove31` bị 404 (GitHub tự khoá hay người dùng tự xoá).
- Không có dữ liệu view cho TikTok, Instagram, Facebook.

---

## 2. Những trang nền tảng nào đang lên trang 1 cho các từ khoá mục tiêu?

### Takeaway
Theo search proxy (không phải Google thật), với từ khoá EN "how to download from baidu pan without account (2026)" thì **HF Forum (3 thread của BaiduFast), Hovatek, Beehiiv (QuarkDownloader), hồ sơ Product Hunt của baidudl, robots.net** chiếm top. Gist và YouTube vẫn là kênh có tuổi đời dài nhất. "csdn download without points" bị CSDN BBS (tiếng Trung) và gist qapovo chiếm. "tải file baidu không cần tài khoản" bị bài "tải app Baidu" (dienmaycholon) và video YouTube VN chiếm.

### Cited Findings
- "how to download from baidu pan without account 2026": top gồm HF 180125, HF 180744, HF 180705, Hovatek 49038, forum D5Render, quarkdownloader.beehiiv.com, Product Hunt @dylan87, Hovatek 20892. — [HF 180125](https://discuss.huggingface.co/t/how-to-download-from-baidu-pan-pan-baidu-com-without-a-chinese-account-2026-notes-for-datasets-a-free-fetcher/180125), [Hovatek 49038](https://www.hovatek.com/forum/thread-49038.html), [Beehiiv](https://quarkdownloader.beehiiv.com/p/how-to-download-files-from-pan-quark-no-account-required-pan-quark-downloader), [Product Hunt](https://www.producthunt.com/@dylan87)
- Truy vấn kiểu "baidudl download pan baidu without account" có thêm robots.net how-to-guide. — [robots.net](https://robots.net/how-to-guide/how-to-download-from-baidu-without-account/)
- `site:gist.github.com baidu download without account`: trả về hồ sơ gist xuhyw (oneleaf), qapovo (BaiduDownloader), gist script cũ rxbit, sdykae. — [gist qapovo](https://gist.github.com/qapovo), [gist xuhyw](https://gist.github.com/xuhyw), [gist rxbit](https://gist.github.com/rxbit/755cd8b57e5006afff32)
- "csdn download without points": bbs.csdn.net (3 topic), jdownloads forum, gist qapovo, bài Tencent Cloud, PyPI csdncommenter. — [bbs.csdn.net/topics/391885771](https://bbs.csdn.net/topics/391885771), [gist qapovo](https://gist.github.com/qapovo)
- "tải file baidu không cần tài khoản": dienmaycholon (2 bài "cách tải và tạo tài khoản Baidu"), gist xuhyw, en.xiaoz.org. — [dienmaycholon](https://dienmaycholon.com/kien-thuc/cach-tai-va-tao-tai-khoan-baidu)
- seo/02 (28/09/2026) ghi nhận SERP "tải file baidu" có YouTube Kênh 5 Phút, Hieu IT, itcuaban, taikhoanpre, baidulinkdownloader /vi. Còn "download baidu pan without account" có gist BaiduDownloader, gist erraz1, erranium, baidulinkdownloader, robots.net, tenorshare. — [seo/02](/home/user/xcrawl/docs/research/seo/02-competitor-teardown.md)
- Trên YouTube, kết quả đầu cho truy vấn EN vẫn là video 7–10 năm tuổi trên 100k view. Đối thủ 2026 ở mức 380–7.100 view. — [YouTube search](https://www.youtube.com/results?search_query=how+to+download+from+baidu+without+account)

### Nhật ký 3 vòng (mỗi vòng bổ sung gì)
- **Vòng 1 (khảo sát rộng):** đọc seo/02 và seo/04, chạy 8 truy vấn SERP (EN/CSDN/VN, `site:` gist/medium/quora, directory). Phát hiện mới so với 09/2026: HF Forum trở thành nơi chiếm top EN (3 thread BaiduFast); Beehiiv và Product Hunt là footprint của nhóm baidudl/QuarkDownloader; toán tử `site:` không dùng được trên search proxy.
- **Vòng 2 (kiểm chứng footprint):** curl đo rel trên 7 nền tảng; Discourse JSON cho số liệu HF; scrape gist (sao, comment, UTM); scrape YouTube search (view theo từ khoá EN/CSDN/VN); đếm Telegram. Phát hiện: **HF đóng/xoá thread (18–25/10/2026)**, **gonelove31 404**, myheart111 3→25★, BaiduFast_Support 43→125, Panbaidu Team gần như không tăng view.
- **Vòng 3 (đào sâu top 5: GitHub, HF, YouTube, Stack Exchange/Quora, Dev.to/blog + chính sách Google):** trích nguyên văn GitHub AUP, YouTube Spam + External links, SE "How to not be a spammer", Dev.to Terms, HF Guidelines, Google spam policies, rel qualifying, site reputation abuse (11/2024) và bản cập nhật 28/08/2026 về EEA.

### Inferences
- SERP EN đang biến động: mảng HF chiếm top có thể sớm mất thứ hạng hoặc rơi khỏi index vì thread đã đóng hoặc xoá. Đây là cửa sổ để có một tài sản "canonical" bền (gist + trang guide trên site + video).
- Từ khoá VN "tải file baidu" có intent hỗn hợp (tải app hay tải file); YouTube là kênh chiếm chỗ hiệu quả nhất ở VN.
- CSDN gần như bỏ ngỏ trên các nền tảng EN: chỉ có gist qapovo và video BaiduDownloader[.]com/Erranium.

### Gaps
- Không có SERP Google thật (vị trí, AI Overview, video carousel). Cần kiểm tra thủ công cho các truy vấn: "how to download from baidu", "baidu pan download without account", "csdn download without points", "tải file baidu", "tải file csdn".
- Không kiểm được Reddit (bị chặn từ đợt trước).

---

## 3. Định dạng nội dung hiệu quả nhất trên từng nền tảng

### Takeaway
Định dạng thắng là **tutorial có cấu trúc + cập nhật thường xuyên + mời người dùng hỏi trong comment** (gist), **video walkthrough tiêu đề chứa đúng câu hỏi + năm** (YouTube), và **câu trả lời Q&A nêu đủ các cách, có disclosure** (SE/Quora/HF). Kiểu bài "thread quảng cáo một chiều" (itch.io, HF tự bump) có ít tương tác thật và hiện đang bị mod xử lý.

### Cited Findings
- Gist erraz1: một file Markdown gồm intro, cập nhật 2025, các bước, "Method 2 (No Longer Works)", disclaimer, ví dụ `wget`, tag từ khoá; 21 revision; comment xin tải hộ là social proof liên tục. — [gist erraz1](https://gist.github.com/erraz1/97ac8ef2b9f629c8c0620d79b0795749)
- Gist BaiduFast có UTM `utm_source=gist` và bảng tốc độ đo (theo seo/02), đạt 25★ trong khoảng 1 tháng. — [gist myheart111](https://gist.github.com/myheart111/c7240ff6bc6ec0265e93ad20869a03a7)
- Tiêu đề YouTube thắng đều chứa "without account" + năm, hoặc USP giá ("Free under 150MB"). Bản dịch tiếng Việt của Baidu Link Downloader được 800 view, thua xa kênh VN gốc (40.965). — [YouTube search VN](https://www.youtube.com/results?search_query=c%C3%A1ch+t%E1%BA%A3i+file+baidu)
- HF: bài "notes for datasets" có 1.828 view nhưng 0 reply từ người khác; thread "help me download" hữu cơ (160296) có 6 like và nhiều người thật tham gia. — [HF 180125](https://discuss.huggingface.co/t/how-to-download-from-baidu-pan-pan-baidu-com-without-a-chinese-account-2026-notes-for-datasets-a-free-fetcher/180125), [HF 160296](https://discuss.huggingface.co/t/can-someone-with-a-chinese-baidu-netdisk-account-help-me-download-this-dataset/160296)
- Dev.to yêu cầu "substantial content", không được chỉ dẫn link ra ngoài. — [DEV Terms](https://dev.to/terms)

### Inferences
- **Gist/README:** "Every way to download from Baidu Pan in 2026" với bảng so sánh trung thực (client chính thức, SVIP, BaiduPCS-Go/OpenList, nhờ uploader mirror, dịch vụ tải hộ kể cả đối thủ), phần "đã chết" (PanDownload, KinhDown), FAQ, link `?utm_source=gist&utm_medium=referral`, ghi rõ "Disclosure: I run X". Cập nhật hàng tháng (số revision tăng là tín hiệu "đang sống").
- **Repo tool thật** (CLI kiểm tra link Baidu còn sống / size / mã trích xuất): lý do chính đáng để xuất hiện trong issue.
- **YouTube:** video 3–6 phút có người nói, chapter, quay thật (speed test free/SVIP/dịch vụ). Shorts 30–45s cắt từ video dài. Mô tả có link guide trên site (không link thẳng trang thanh toán), có disclosure.
- **SE/Quora/HF:** trả lời câu hỏi có sẵn; 80% nội dung là cách tự làm; nhắc brand một dòng có disclosure.
- **Telegram/Discord:** kênh support và "free fetch nhỏ", không có giá trị SEO.
- **Directory (Product Hunt/AlternativeTo/SaaSHub):** launch một sản phẩm free thật (link checker) thay vì trang bán hàng.

### Gaps
- Không có dữ liệu CTR/conversion theo nền tảng của đối thủ (chỉ biết BaiduFast có survey "How did you find us?", theo seo/02).

---

## 4. Chính sách liên quan: Google spam policies và chính sách từng nền tảng

### Takeaway
Theo Google, link spam bao gồm "forum comments with optimized links" và "low-quality directory… links". Site reputation abuse (11/2024) áp dụng cho nội dung bên thứ ba "regardless of whether there is first-party involvement". Từ 30/08/2026, manual action theo chính sách này có hiệu lực khác nhau trong và ngoài EEA. Các nền tảng đều cho phép quảng bá ở mức vừa phải nếu có disclosure, nhưng cấm bulk, nhiều nick và comment lặp lại.

### Cited Findings
- Link spam: "creating links to or from a site primarily for the purpose of manipulating search rankings". Ví dụ: "Forum comments with optimized links in the post or signature", "Low-quality directory or bookmark site links", "Widely distributed links in the footers or templates". — [Google Spam Policies](https://developers.google.com/search/docs/essentials/spam-policies)
- User-generated spam: "Spammy posts on forum threads", "Comment spam on blogs". Mua/bán link không vi phạm "as long as they are qualified with a rel="nofollow" or rel="sponsored"". — [Google Spam Policies](https://developers.google.com/search/docs/essentials/spam-policies)
- Site reputation abuse (19/11/2024): "using third-party content on a site in an attempt to exploit the site's ranking signals is a violation of this policy — regardless of whether there is first-party involvement or oversight of the content". FAQ: bên thứ ba gồm "users of that site, freelancers, white-label services"; "having third-party content alone is not a violation". — [Google Search Central Blog 11/2024](https://developers.google.com/search/blog/2024/11/site-reputation-abuse)
- Cập nhật 28/08/2026: từ 30/08, manual action theo site reputation policy "will directly affect search results" cho người dùng ngoài EEA. Trong EEA "the impact of the manual action won't apply" (phần bị ảnh hưởng có thể được tách để rank độc lập). — [Update to the Site Reputation Policy](https://developers.google.com/search/blog/2026/08/update-site-reputation-policy)
- `rel="ugc"` cho "comments and forum posts", `rel="sponsored"` cho "advertisements or paid placements". — [Qualify outbound links](https://developers.google.com/search/docs/crawling-indexing/qualify-outbound-links)
- GitHub AUP, YouTube Spam/External links, SE promotion, Dev.to Terms, HF Guidelines: trích ở mục 1. — [GitHub AUP](https://docs.github.com/en/site-policy/acceptable-use-policies/github-acceptable-use-policies), [YouTube Spam](https://support.google.com/youtube/answer/2801973), [YouTube External links](https://support.google.com/youtube/answer/9054257), [SE promotion](https://stackoverflow.com/help/promotion), [DEV Terms](https://dev.to/terms), [HF Guidelines](https://discuss.huggingface.co/guidelines)

### Inferences
- Bài guest post hoặc listicle trả tiền trên site uy tín ngoài ngách (kiểu robots.net, tenorshare) có rủi ro site reputation abuse **cho site chủ**. Với brand, nên ưu tiên bài biên tập thật, link có `rel=sponsored` nếu trả tiền.
- Nội dung tự đăng trên subdomain nền tảng (gist, Medium, Beehiiv) không phải "site reputation abuse" theo định nghĩa (đây là UGC của chính tài khoản), nhưng vẫn thuộc diện "user-generated spam" nếu đăng hàng loạt hoặc rỗng nội dung.
- Rủi ro riêng của ngách: YouTube cấm link tới nguồn "unauthorized access to… software". Video chỉ nên demo tải file người dùng có quyền (dataset công khai, tài liệu của chính họ), tránh demo game/phim lậu.

### Gaps
- Chưa trích được nguyên văn chính sách Quora, Medium, Pinterest, TikTok, Facebook Groups, Disboard.

---

## 5. Kế hoạch seeding ưu tiên (tier 1/2/3), nhịp đăng, disclosure

### Takeaway
Tier 1 = GitHub (gist canonical + repo tool + trả lời issue chọn lọc), YouTube EN/VI, guide trên site + Telegram support. Tier 2 = Quora/SE/HF chỉ trả lời câu hỏi có sẵn, Dev.to/Hashnode bài kỹ thuật, Product Hunt/AlternativeTo/SaaSHub, Facebook group VN. Tier 3 = TikTok/Reels/Shorts, Medium/Substack, Scribd/SlideShare, itch.io, Pinterest/Tumblr/X/LinkedIn/Notion/Google Sites (chủ yếu để giữ chỗ brand).

### Cited Findings (căn cứ cho xếp hạng)
- Gist bền và tăng tương tác (erraz1 có comment hàng ngày; myheart111 3→25★). — [gist erraz1](https://gist.github.com/erraz1/97ac8ef2b9f629c8c0620d79b0795749), [gist myheart111](https://gist.github.com/myheart111/c7240ff6bc6ec0265e93ad20869a03a7)
- YouTube có view lớn nhất ngách (26k, 11,6k, 41k VN). — [YouTube search](https://www.youtube.com/results?search_query=how+to+download+from+baidu+without+account)
- HF đang đóng thread chủ đề này, nên hạ xuống Tier 2 và chỉ dùng có điều kiện. — [HF 180705](https://discuss.huggingface.co/t/how-to-download-pan-baidu-com-or-quark-pan-weights-without-a-chinese-account/180705)
- Telegram là nơi đối thủ giữ khách (960 / 391 / 125). — [t.me/BaiduDownloader_Help](https://t.me/BaiduDownloader_Help)
- Product Hunt đã được baidudl dùng 2 lần. — [Product Hunt @dylan87](https://www.producthunt.com/@dylan87)

### Inferences — Kế hoạch đề xuất

**Tier 1 (bắt đầu tuần 1, chiếm ~60% công sức)**
| Hạng mục | Nhịp | Ghi chú |
|---|---|---|
| Gist canonical EN + VI + ZH (Baidu), 1 gist CSDN, 1 gist Quark/123pan, từ 1 tài khoản GitHub của brand/founder | Tạo 5 gist trong tháng 1; cập nhật mỗi tháng (log thay đổi); trả lời comment trong 24h | Disclosure ở đầu gist; UTM; bảng so sánh có cả đối thủ |
| Repo tool mã nguồn mở (link checker CLI / GitHub Action), README kỹ | 1 release/tháng | Lý do chính đáng để trả lời issue |
| Trả lời GitHub issue "pan.baidu.com" | Tối đa 3–5 issue/tuần, mỗi câu viết riêng; ưu tiên đề nghị **mirror dataset có license** cho maintainer | Không copy-paste; theo dõi bằng search `"pan.baidu.com" is:issue is:open` |
| YouTube EN + VI | 1 video dài/tuần (luân phiên EN/VI) + 2 Shorts/tuần | Có người nói, demo trên file hợp pháp, disclosure trong mô tả, không comment spam |
| Telegram support + bot | Hàng ngày | Không có giá trị SEO; dùng để giữ khách và lấy review |

**Tier 2 (từ tuần 3, ~30%)**
| Hạng mục | Nhịp | Ghi chú |
|---|---|---|
| Quora: trả lời câu hỏi đang rank + 1 Space | 2 câu trả lời/tuần; 1 bài Space/tuần | 1 tài khoản founder; câu đầu "I run X" |
| Super User / SE | Chỉ khi có câu hỏi phù hợp (≈1–2/tháng) | Câu trả lời kỹ thuật; brand tối đa 1 dòng có disclosure |
| HF Forum / dataset discussions | Chỉ trả lời thread người khác hỏi, đề xuất mirror lên HF Hub; **không mở thread quảng cáo** | Mod đã đóng thread tháng 10/2026 |
| Dev.to / Hashnode | 2 bài/tháng (kỹ thuật: "why Baidu Pan throttles", "mirror Chinese datasets to HF") | Nội dung đầy đủ, disclosure affiliate |
| Product Hunt (launch tool free), AlternativeTo, SaaSHub | 1 lần mỗi nơi, tháng 2 | Listing thật, không vote giả |
| Facebook group VN (du học, tiếng Trung, Việt hoá game), VOZ/Tinhte | 2–3 trả lời/tuần; xin admin cho đăng 1 bài hướng dẫn | Theo rule từng group |

**Tier 3 (giữ chỗ / thử nghiệm, ~10%)**
- TikTok VN / Reels: tái sử dụng Shorts, 2–3 clip/tuần nếu tháng 1 có tín hiệu.
- Medium / Substack / Beehiiv: đăng lại bài canonical với `rel=canonical` về site (nếu nền tảng hỗ trợ), 1 bài/tháng.
- Scribd/SlideShare: 1 PDF "CSDN download guide" (đối thủ đang rank bằng cách này).
- itch.io / CaiMoGu: chỉ trả lời thread người dùng hỏi.
- X, LinkedIn, Pinterest, Tumblr, Notion public page, Google Sites: tạo hồ sơ brand để giữ tên, không đầu tư nội dung.
- Discord: server support chung với Telegram; chỉ đăng Disboard nếu có cộng đồng thật.

**Quy tắc disclosure và an toàn (áp dụng mọi tier)**
- 1 người, 1 tài khoản thật, tên nhất quán với brand; không nick phụ để khen, không tự bump, không mua sao/upvote/view.
- Câu disclosure chuẩn: EN "Disclosure: I work on X, a paid service; free options are listed first." / VI "Mình là người làm dịch vụ X (trả phí); các cách miễn phí nằm ở trên."
- Mọi link có UTM theo nền tảng; link trả phí (banner, bài tài trợ) gắn `rel="sponsored"`.
- Không demo hoặc gợi ý tải nội dung vi phạm bản quyền (YouTube External links policy).
- Ghi log mọi bài đăng (URL, ngày, tài khoản) để chứng minh khi bị report.

### Gaps
- Chưa có baseline traffic theo kênh của chính brand. Cần chạy 4–6 tuần với UTM rồi phân bổ lại tier.
- Chưa có số liệu về hiệu quả TikTok/Reels trong ngách (không có creator để đối chiếu).

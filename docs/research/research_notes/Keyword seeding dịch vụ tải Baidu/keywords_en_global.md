# Keyword map tiếng Anh (toàn cầu) cho dịch vụ tải Baidu Pan / CSDN / host Trung Quốc (27/10/2026)

*Cách làm: 3 vòng. Lấy **601 truy vấn autocomplete** qua Google (`suggestqueries.google.com/complete/search?client=firefox&hl=en&gl=us&q=…`) và Bing (`api.bing.com/osjson.aspx?query=…`) cùng ngày 27/10/2026, gồm 110 seed ở vòng 1, 381 truy vấn ở vòng 2 (234 alphabet soup cho 9 seed lõi cộng 147 truy vấn modifier/use-case/lỗi) và 110 truy vấn deep-dive ở vòng 3. Được **1.790 gợi ý Google không trùng**, khoảng 1.461 gợi ý có chứa tên host (vẫn lẫn nhiễu như cổ phiếu Baidu hay "quark" là phô mai). Thêm 16 lượt kiểm tra SERP bằng WebSearch (proxy, kết quả US) và 1 lượt fetch thread HF. Dữ liệu thô nằm ở scratchpad: `/tmp/claude-0/-home-user-xcrawl/858050d9-4cee-52f7-9429-eab92fb1247e/scratchpad/r1.jsonl`, `r2.jsonl`, `r3.jsonl`, `all_google_relevant.txt`.*

***Không có công cụ đo volume thật** (Ahrefs, Semrush, GSC, Keyword Planner) và Google Trends không gọi được. Mọi cột "Demand" và "KD" đều là **ước lượng định tính**, suy từ các tín hiệu sau:*
- *(a) số gợi ý Google trả về cho seed. 0 gợi ý nghĩa là volume rất thấp hoặc bằng 0. 10 gợi ý nghĩa là có nhu cầu.*
- *(b) vị trí của gợi ý trong danh sách autocomplete.*
- *(c) cụm từ có xuất hiện lại khi đổi seed hay không.*
- *(d) loại trang đang rank.*

*Thang đo dùng chung với SEO-01: XS dưới 100/tháng, S 100–500, M 500–2k, L 2k–10k, XL trên 10k. Ký hiệu intent: T = transactional, C = commercial, I = informational, N = navigational. Bing tự chèn gợi ý chung chung khi không khớp, ví dụ URL `pan.baidu.com/s/…` hay "baidu browser download". Vì vậy Bing chỉ được dùng làm tín hiệu phụ.*

---

## 1. Từ khoá transactional lõi và long-tail ("baidu downloader", "link generator", "without account")

### Takeaway
Nhu cầu EN tập trung vào 4 "đầu" từ khoá: **baidu (pan/netdisk/cloud) downloader**, **download from baidu without account/login/client/app**, **pan baidu download link generator / direct link**, và **how to download from (pan) baidu**. Các modifier lặp lại mạnh nhất là *online, free, github, reddit, apk, extension/tampermonkey, script, telegram/bot, 2025/2026*. Có một nhóm modifier mang **ý định mua rõ** và chưa ai nhắm: *service, coupon, cheap, helper, bot telegram, parser/extractor/leech, bypass download*. Đây là các long-tail chuyển đổi cao mà hiện chưa trang nào tối ưu.

### Cited Findings
**Đầu từ khoá và gợi ý autocomplete (Google en-US, 27/10/2026):**
- Seed `baidu downloader` có đủ 10 gợi ý Google: *free, github, online, 2026, script, apk, extension, online free, telegram*. Bing thêm *reddit, 2025, baidu link downloader*. "2026" đã lên vị trí #5, cho thấy người dùng chủ động tìm hướng dẫn còn sống — [Google AC](https://suggestqueries.google.com/complete/search?client=firefox&hl=en&gl=us&q=baidu%20downloader); [Bing AC](https://api.bing.com/osjson.aspx?query=baidu%20downloader)
- Seed `baidu pan downloader` và `pan baidu downloader` gợi ý *online, github, online free, tampermonkey, extension, apk, chrome extension, 2024, file downloader*. Bing thêm *free, website, reddit*. Cụm **"pan baidu downloader website"** (Bing) cho thấy người dùng đang tìm một *website*, không phải phần mềm — [Google AC](https://suggestqueries.google.com/complete/search?client=firefox&hl=en&gl=us&q=pan%20baidu%20downloader); [Bing AC](https://api.bing.com/osjson.aspx?query=baidu%20pan%20downloader)
- Seed `download from baidu without` cho 10 gợi ý: *without client, without account 2025, without app, without login, without client reddit, without account reddit, cloud without account, pan baidu without client, pan baidu without account 2025*, và cụm dài "download without baidu network disk client" — [Google AC](https://suggestqueries.google.com/complete/search?client=firefox&hl=en&gl=us&q=download%20from%20baidu%20without)
- Seed `how to download from baidu` cho các gợi ý *…without account, …cloud without account, …cloud, …without client, …pan, **…without account 2026**, …netdisk* — [Google AC](https://suggestqueries.google.com/complete/search?client=firefox&hl=en&gl=us&q=how%20to%20download%20from%20baidu)
- Seed `how to download baidu pan` cho long-tail: *how to download pan baidu files, from pan baidu reddit, without account github, free, without account reddit, without account free, without app, 2025, "how to download files from pan baidu com without login"* — [Google AC](https://suggestqueries.google.com/complete/search?client=firefox&hl=en&gl=us&q=how%20to%20download%20baidu%20pan)
- Seed `baidu download link generator` chỉ cho *baidu direct download link generator, pan baidu download link generator (free)*, rồi lẫn sang "what is baidu search engine". Kết luận: cụm generator hẹp, chỉ khoảng S–M — [Google AC](https://suggestqueries.google.com/complete/search?client=firefox&hl=en&gl=us&q=baidu%20download%20link%20generator)
- Seed `baidu pan link` cho *link generator, direct link generator, direct link, pan baidu link converter, pan baidu get link, baidu pan url* — [Google AC](https://suggestqueries.google.com/complete/search?client=firefox&hl=en&gl=us&q=baidu%20pan%20link)

**Long-tail mới tìm được qua alphabet soup (vòng 2) với 2 seed `baidu downloader` và `pan baidu`, chưa có trong SEO-01:**
- **baidu downloader coupon, baidu downloader cheap, baidu downloader service, baidu downloader bot telegram, baidu download assistant, baidu direct downloader, baidu download manager, baidu downloader tool, baidu downloader windows/linux/pc** — [Google AC soup "baidu downloader c"](https://suggestqueries.google.com/complete/search?client=firefox&hl=en&gl=us&q=baidu%20downloader%20c)
- **pan baidu bypass download, pan baidu extractor, pan baidu parser, pan baidu leech, pan baidu link converter, pan baidu motrix, pan baidu greasyfork, pan baidu telegram, pan baidu download service** — [Google AC soup "pan baidu b"](https://suggestqueries.google.com/complete/search?client=firefox&hl=en&gl=us&q=pan%20baidu%20b); [AC "pan baidu p"](https://suggestqueries.google.com/complete/search?client=firefox&hl=en&gl=us&q=pan%20baidu%20p)
- `baidu cloud downloader` gợi ý *free, github, reddit, online, download without account, windows, **download service**, pc, file downloader* — [Google AC](https://suggestqueries.google.com/complete/search?client=firefox&hl=en&gl=us&q=baidu%20cloud%20downloader)
- Các biến thể theo cách gọi khác của Baidu Pan đều có autocomplete: *baidu yun download, baidu yunpan download, baidu wangpan downloader, baidu disk download (without account), baidu drive download without login*. Người dùng EN dùng ít nhất 7 tên gọi cho cùng một dịch vụ: pan baidu, baidu pan, netdisk, cloud, yun/yunpan, wangpan, disk/drive — [AC "baidu wangpan"](https://suggestqueries.google.com/complete/search?client=firefox&hl=en&gl=us&q=baidu%20wangpan); [AC "baidu disk"](https://suggestqueries.google.com/complete/search?client=firefox&hl=en&gl=us&q=baidu%20disk); [AC "baidu drive"](https://suggestqueries.google.com/complete/search?client=firefox&hl=en&gl=us&q=baidu%20drive)

**Câu hỏi bắt đầu bằng how / why / can / is:**
- "is" → *is baidu pan safe, is pan baidu legit, is pan baidu free, is baidu netdisk client safe / a virus / malware* — [AC "is baidu pan"](https://suggestqueries.google.com/complete/search?client=firefox&hl=en&gl=us&q=is%20baidu%20pan); [AC "is baidu netdisk"](https://suggestqueries.google.com/complete/search?client=firefox&hl=en&gl=us&q=is%20baidu%20netdisk)
- "can" → *can i use baidu outside of china, can i use baidu in usa / australia / india*. Cụm này không thấy gợi ý về tải file — [AC "can i use baidu"](https://suggestqueries.google.com/complete/search?client=firefox&hl=en&gl=us&q=can%20i%20use%20baidu)
- "why" → bị nhiễu hoàn toàn bởi cổ phiếu Baidu ("why is baidu stock down"). Có *why can't i download baidu* nhưng ý định không rõ — [AC "why is baidu"](https://suggestqueries.google.com/complete/search?client=firefox&hl=en&gl=us&q=why%20is%20baidu)
- Seed `baidu outside china` cho 9 gợi ý: *baidu account outside china (reddit), baidu netdisk outside china, register baidu outside china, does baidu work outside china…* — [AC](https://suggestqueries.google.com/complete/search?client=firefox&hl=en&gl=us&q=baidu%20outside%20china)

**Tần suất modifier trên 1.461 gợi ý liên quan (đếm thô, có lẫn nhiễu, script trong scratchpad):** account 103, free 64, apk 56, english 44, without account 40, online 36, register 30, reddit 28, github 23, mac 22, windows 21, outside china 17, phone number 17, without login 13, safe 11, svip 10, speed 10, link generator 9, 2025 8, without client 8, bot 8, telegram 7, extension 6, service 5, tampermonkey 5, 2026 3.

### Inferences
**Bảng cụm transactional lõi EN** (demand/KD là ước lượng):

| Cụm | Từ khoá đại diện | Intent | Demand (ước) | KD (ước) | Ghi chú |
|---|---|---|---|---|---|
| A. Downloader | baidu downloader; baidu pan downloader (online/free); pan baidu downloader; baidu netdisk downloader; baidu cloud downloader | T | L (gộp L–XL) | Vừa–Khó | Đầu từ khoá lớn nhất. Nhiễu với Baidu Browser/IME/Maps nên title phải nói rõ "Baidu Pan / Netdisk file downloader" |
| B. Without account | download from baidu without account (2025/2026, reddit); without login/client/app; pan.baidu.com download without account | I→T | L | Vừa | "2026" và "reddit" là tín hiệu muốn nội dung còn mới và có người thật kiểm chứng |
| C. Link generator / direct link | pan baidu download link generator (free); baidu direct (download) link generator; link converter; get link | T | M | Vừa (SERP rác) | Đặt tên tính năng ra mắt đúng chữ "Direct Link Generator" |
| D. How-to | how to download from (pan) baidu / baidu cloud / netdisk; how to download files from pan baidu com without login | I | L | Vừa | Hợp với pillar guide |
| E. Ý định mua (mới) | baidu downloader service / cheap / coupon; baidu cloud download service; pan baidu download service; baidu download assistant/helper | T/C | XS–S mỗi cụm | **Dễ** | Hầu như không có trang nào tối ưu. Nên đặt vào trang pricing / coupon / so sánh |
| F. Kênh | baidu downloader telegram / bot telegram; pan baidu telegram | T/N | S | Dễ | Nếu có bot Telegram thì làm landing riêng `/telegram-bot` |
| G. Kỹ thuật | tampermonkey / greasyfork / extension / chrome extension / script / github / motrix / idm / aria2 / parser / extractor | I→T | S–M | Dễ | Bài "Vì sao script không chạy nữa + phương án thay thế" (đổi người dùng tự làm sang dịch vụ) |
| H. Theo nền tảng | baidu netdisk download mac / linux / ubuntu / windows / apk / mod apk | I/N | M | Vừa | Ý định chủ yếu là tải *client chính thức*. Chỉ nên làm trang hỗ trợ "cách tải không cần client trên Mac/Linux" |

- Long-tail "service / cheap / coupon / bot telegram / helper" gần như không đối thủ nào nhắm trong title. Ở 16 SERP đã kiểm tra, không thấy trang nào có title chứa các từ này. Đây là lối vào "money" dễ nhất.
- Gom 7 tên gọi (yun, wangpan, disk, drive, cloud, netdisk, pan) vào một trang canonical, rồi dùng H2/FAQ để phủ các biến thể. Không nên tách thành nhiều trang mỏng.

### Gaps
- Không có volume tuyệt đối, cũng không có xu hướng theo tháng (Google Trends không truy cập được qua proxy). Cần Keyword Planner hoặc Ahrefs để xác nhận L hay XL.
- Autocomplete chỉ lấy từ gl=us. Chưa lấy theo geo IN/ID/PH, nơi nhiều người tìm bằng tiếng Anh.

### Nhật ký 3 vòng (phần chung)
- **Vòng 1 (110 seed rộng):** xác nhận lại các cụm A–D của SEO-01. Phát hiện cụm "telegram/bot" và "website". Thấy Google trả 0 gợi ý cho các seed lỗi (`baidu link expired`, `baidu pan slow`, `baidu pan extraction code`, `baidu pan alternative`, `pandownload alternative`). Phát hiện Terabox có volume lớn nhưng intent tách riêng.
- **Vòng 2 (234 alphabet soup + 147 modifier/use-case/lỗi):** thêm khoảng 60 long-tail mới, gồm coupon, cheap, service, bypass, extractor, parser, leech, motrix, `baidu netdisk mcp`, `download dataset from baidu`, `csdn paywall`, `unlock csdn article`, `csdn without login`, `csdn dataset`, `pan quark cn download without account reddit`, `123pan direct link generator`, `ctfile premium downloader`, `cloud 189 cn downloader`, `pan xunlei downloader free`, `real debrid pan baidu`. Đối chiếu SERP cho 10 từ khoá.
- **Vòng 3 (110 truy vấn deep-dive):** đào sâu CSDN, dataset, Quark/123pan, Terabox, lỗi, brand/đối thủ, mod và tài liệu. Kết quả chính: phần lớn seed theo use-case trả 0 gợi ý, nghĩa là volume nằm ở đuôi dài/zero-volume (xem mục 3). Cụm Quark EN mạnh hơn dự kiến. Brand đối thủ có rất ít autocomplete.

---

## 2. Từ khoá lỗi / vấn đề (tốc độ, 提取码, link hết hạn, đăng ký SĐT, "not working outside China")

### Takeaway
Theo autocomplete, nhóm lỗi trong tiếng Anh **rất yếu về volume**. Google trả **0 gợi ý** cho *baidu link expired, baidu file does not exist, baidu share cancelled, baidu pan error, baidu pan code, baidu pan extract code, baidu pan stuck, baidu pan large file, baidu pan folder download, baidu netdisk not working*. Hai mảng thực sự có volume là **tài khoản / số điện thoại** (khoảng M–L) và **tốc độ** (khoảng S–M). Các trang lỗi vẫn đáng làm vì là zero-volume long-tail, đóng vai trò support và hỗ trợ E-E-A-T, nhưng không nên kỳ vọng traffic.

### Cited Findings
- **Tài khoản / SĐT**, nhóm có volume rõ nhất:
  - Seed `baidu without account` cho *baidu account without chinese phone number, baidu account without phone number, create baidu account without china number / without phone number*.
  - Seed `baidu phone number` cho *baidu phone number format is incorrect, baidu mobile number format is incorrect, baidu foreign phone number, baidu register phone number*.
  - Seed `how to create baidu account` cho *outside china, without phone number, without china number, outside china 2025, overseas, pan baidu account, netdisk account*.
  - Nguồn: [AC "baidu without account"](https://suggestqueries.google.com/complete/search?client=firefox&hl=en&gl=us&q=baidu%20without%20account); [AC "baidu phone number"](https://suggestqueries.google.com/complete/search?client=firefox&hl=en&gl=us&q=baidu%20phone%20number); [AC "how to create baidu account"](https://suggestqueries.google.com/complete/search?client=firefox&hl=en&gl=us&q=how%20to%20create%20baidu%20account)
- `how to register baidu` cho *…account outside china, in singapore, in malaysia, without chinese number, baidu cloud*. Có tín hiệu theo địa lý SG/MY — [AC](https://suggestqueries.google.com/complete/search?client=firefox&hl=en&gl=us&q=how%20to%20register%20baidu)
- `baidu verification code` cho *baidu verification code signature error, baidu not sending verification code, sign up baidu without phone number* — [AC](https://suggestqueries.google.com/complete/search?client=firefox&hl=en&gl=us&q=baidu%20verification%20code)
- Top SERP cho truy vấn tài khoản là bài của hongkiat và calilio (bán số ảo): [hongkiat](https://www.hongkiat.com/blog/register-baidu-account-oversea/); [calilio](https://www.calilio.com/blogs/baidu-account-without-chinese-phone-number)
- **Tốc độ:**
  - `baidu download speed` cho *baidu download speed slow, pan baidu download speed, baidu svip download speed, baidu drive download speed*.
  - `baidu netdisk speed` cho *speed limit, fast download*.
  - `baidu netdisk slow` cho *baidu netdisk slow download*.
  - Riêng `baidu pan slow`, `baidu pan speed limit`, `baidu 100kb/s` có 0 gợi ý Google.
  - Nguồn: [AC "baidu download speed"](https://suggestqueries.google.com/complete/search?client=firefox&hl=en&gl=us&q=baidu%20download%20speed); [AC "baidu netdisk speed"](https://suggestqueries.google.com/complete/search?client=firefox&hl=en&gl=us&q=baidu%20netdisk%20speed)
- Mức tốc độ tài khoản free mà đối thủ hay nêu là "roughly 50-100 KB/s" (bài của operator baidufast trên HF, chưa kiểm chứng) — [HF 180705](https://discuss.huggingface.co/t/how-to-download-pan-baidu-com-or-quark-pan-weights-without-a-chinese-account/180705)
- **提取码 / extraction code:**
  - Seed EN có 0 gợi ý.
  - Seed tiếng Trung `提取码` có gợi ý *提取码 意味* (tiếng Nhật), *提取码 뜻* (tiếng Hàn). Bing thêm *提取码 英文, 提取码错误, 提取码百度网盘在哪里*. Người nước ngoài gõ thẳng chữ Hán để hỏi nghĩa, nên trang "提取码 meaning / what is 提取码" có thể bắt được truy vấn đa ngữ.
  - `pan baidu password` có tồn tại như một gợi ý. Người dùng EN gọi 提取码 là **"password"** chứ không phải "extraction code".
  - Nguồn: [AC "提取码"](https://suggestqueries.google.com/complete/search?client=firefox&hl=en&gl=us&q=%E6%8F%90%E5%8F%96%E7%A0%81); [Bing "提取码"](https://api.bing.com/osjson.aspx?query=%E6%8F%90%E5%8F%96%E7%A0%81); [AC "baidu pan password"](https://suggestqueries.google.com/complete/search?client=firefox&hl=en&gl=us&q=baidu%20pan%20password)
- `baidu error` cho *baidu login error, baidu system error, baidu error 9999* — [AC](https://suggestqueries.google.com/complete/search?client=firefox&hl=en&gl=us&q=baidu%20error)
- **Bản quốc tế / tiếng Anh**, nhóm có volume M:
  - `baidu netdisk english` cho *english version, english download, english apk, client english*.
  - Soup cho *baidu netdisk international (version / download), overseas version, global, change language*.
  - Nguồn: [AC "baidu netdisk english"](https://suggestqueries.google.com/complete/search?client=firefox&hl=en&gl=us&q=baidu%20netdisk%20english); [AC soup "baidu netdisk i"](https://suggestqueries.google.com/complete/search?client=firefox&hl=en&gl=us&q=baidu%20netdisk%20i)
- **An toàn / malware:** *is baidu netdisk a virus / malware, baidu netdisk host.exe, how to uninstall baidu netdisk (mac/ubuntu), remove baidu netdisk* — [AC soup "baidu netdisk h"](https://suggestqueries.google.com/complete/search?client=firefox&hl=en&gl=us&q=baidu%20netdisk%20h); [AC "is baidu netdisk"](https://suggestqueries.google.com/complete/search?client=firefox&hl=en&gl=us&q=is%20baidu%20netdisk)
- SERP "is pan baidu safe" hiện chỉ có review chung về Baidu app/browser (joindeleteme, Citizen Lab), không có bài nào nói riêng về Netdisk — [joindeleteme](https://joindeleteme.com/is-site-safe/is-baidu-safe/); [Citizen Lab/UofT](https://www.utoronto.ca/news/citizen-lab-researchers-find-privacy-problems-popular-baidu-browser)

### Inferences
| Cụm lỗi | Từ khoá dùng trên trang | Demand (ước) | KD | Định dạng đề xuất |
|---|---|---|---|---|
| Đăng ký / SĐT | baidu account without chinese phone number; how to create baidu account outside china (2026); baidu phone number format is incorrect; baidu not sending verification code | M–L | Vừa (hongkiat, calilio) | Bài "Register vs skip registration". Bắt được người đang kẹt bước đăng ký rồi chuyển sang dịch vụ |
| Bản tiếng Anh / quốc tế | baidu netdisk english version / international version / change language | M | Vừa | Hướng dẫn + ảnh chụp có dịch nhãn UI |
| Tốc độ | baidu download speed slow; baidu svip download speed; baidu netdisk speed limit / fast download | S–M | Dễ | Trang benchmark có số đo thật |
| An toàn | is baidu netdisk safe / a virus / malware; baidu netdisk host.exe; uninstall baidu netdisk mac | S–M | Dễ (SERP không đúng chủ đề) | Bài "Is Baidu Netdisk safe?" kèm phương án "không cần cài client" |
| Mật khẩu / 提取码 | pan baidu password; 提取码 meaning / 英文; 提取码错误 | S (đa ngữ) | Dễ | Mục glossary. Title dùng "password (提取码)" |
| Link chết / lỗi | link expired, file does not exist, share cancelled, error 9999 | XS mỗi cụm (0 autocomplete) | Dễ | Một trang "Baidu error code library" duy nhất, không làm pSEO riêng từng lỗi |

- SEO-01 xếp cụm lỗi vào "nhiều long-tail cho programmatic". Dữ liệu vòng 1–3 cho thấy EN gần như **không có volume ở các seed lỗi cụ thể**. Nên gộp thành 1–2 trang thay vì pSEO hàng loạt, để tránh tạo thin content.

### Gaps
- Không đo được truy vấn chứa chuỗi lỗi chính xác người dùng dán vào (ví dụ "啊哦，你来晚了，分享的文件已经被取消了"). Cần GSC sau khi chạy.
- Chưa xác minh SERP thật cho "baidu phone number format is incorrect".

---

## 3. Từ khoá theo use-case (dataset AI, game mod, firmware, 3D, sample pack, paper, Wenku, CSDN)

### Takeaway
Theo autocomplete EN, **gần như mọi seed use-case đều là zero-volume**: *baidu pan dataset, model weights baidu, pretrained model baidu, monster hunter wilds mods baidu, stellar blade mod baidu, mmd model download baidu, baidu firmware, baidu 3d model, sample pack baidu, vst baidu, baidu book download* đều cho 0 gợi ý. Những cụm còn sống: **download dataset/data from baidu** (S), **caimogu** (zzz mods, how to get points, download), **baidu wenku** (downloader, free download, wenku baidu com download pdf, M), **cnki download** (free, github, pdf), và **CSDN** (unlock csdn article, csdn paywall, download from csdn without account, wenku csdn net). Use-case nên làm thành **landing theo nguồn nội dung**, phân phối qua forum (HF, GitHub issue, Reddit). Không nên kỳ vọng traffic từ Google.

### Cited Findings
- **Dataset:**
  - Soup cho `download dataset from baidu` và `download data from baidu`.
  - `dataset baidu` cho *baidu dataset (download)*.
  - Các seed `baidu pan dataset`, `weights baidu pan`, `huggingface baidu pan`, `model weights baidu` cho 0 gợi ý.
  - Nguồn: [AC soup "download from baidu d"](https://suggestqueries.google.com/complete/search?client=firefox&hl=en&gl=us&q=download%20from%20baidu%20d); [AC "dataset baidu"](https://suggestqueries.google.com/complete/search?client=firefox&hl=en&gl=us&q=dataset%20baidu)
- SERP "download dataset from baidu pan outside china" bị **HF Discuss chiếm**:
  - 3 thread năm 2026 của operator baidufast: 180125 (1.828 view), 180705 (24/09/2026), 180744 (123pan).
  - Thread cũ 160296.
  - Grand-challenge forum (Camelyon có mirror Google Drive).
  - Nguồn: [HF 180125](https://discuss.huggingface.co/t/how-to-download-from-baidu-pan-pan-baidu-com-without-a-chinese-account-2026-notes-for-datasets-a-free-fetcher/180125); [HF 180705](https://discuss.huggingface.co/t/how-to-download-pan-baidu-com-or-quark-pan-weights-without-a-chinese-account/180705); [HF 180744](https://discuss.huggingface.co/t/123pan-123-weights-datasets-now-need-a-chinese-login-how-to-download-them-without-one-2026/180744); [grand-challenge](https://grand-challenge.org/forums/forum/general-548/topic/how-to-download-the-data-from-baidu-pan-1402)
- Thread HF 180705 được đăng 24/09/2026. Ngày 12/10 người đăng cập nhật thêm "preview folder, fetch selected files, ClamAV scan". Đã có người dùng thật nhờ tải link Quark và Baidu ngay trong thread — [HF 180705](https://discuss.huggingface.co/t/how-to-download-pan-baidu-com-or-quark-pan-weights-without-a-chinese-account/180705)
- **Game mod:**
  - `caimogu` cho *caimogu zzz mods, caimogu how to get points*.
  - `caimogu download` cho *caimogu free download*. Bing thêm *caimogu downloader, how to get points on caimogu*.
  - `3dm mods` cho *3dm skyrim mods, 3dm genshin mods folder, gta5 mods 3dm, 3dm game mods*.
  - `nexus mods chinese` cho *nexus mods china, nexusmods chinese official site/mods/forum* (Bing).
  - `mmd baidu` có gợi ý "baidu mmd", nhưng `mmd model download baidu` cho 0.
  - Nguồn: [AC "caimogu"](https://suggestqueries.google.com/complete/search?client=firefox&hl=en&gl=us&q=caimogu); [AC "3dm mods"](https://suggestqueries.google.com/complete/search?client=firefox&hl=en&gl=us&q=3dm%20mods); [Bing "nexus mods chinese"](https://api.bing.com/osjson.aspx?query=nexus%20mods%20chinese)
- Comment trên itch.io mô tả người dùng bị kẹt vì site mod yêu cầu Weibo/QQ, mà không có SĐT TQ thì không tạo được. Đây là pain point thật nhưng là truy vấn dài, không có volume — [itch.io](https://itch.io/profile/kasabian192)
- **Wenku:**
  - `baidu wenku` cho *english, downloader, free download, genflow, apk, app, ppt, wenku baidu com download pdf, wenku baidu downloader online*.
  - Bing có thêm *baidu wenku vip*.
  - Bing lặp lại nhiều cụm "baidu wenku x download / faqs / pricing / review". Đây có vẻ là sản phẩm hoặc nhãn "Wenku X", chưa xác minh.
  - Nguồn: [AC "baidu wenku"](https://suggestqueries.google.com/complete/search?client=firefox&hl=en&gl=us&q=baidu%20wenku); [Bing "baidu wenku free download"](https://api.bing.com/osjson.aspx?query=baidu%20wenku%20free%20download)
- SERP "baidu wenku downloader online": PyPI `wenku` (chỉ tải được phần preview, PPT/PDF thành ảnh), sourceforge baiduwp-php, AUR baiduwenku-bin, sagedatum, các gist spam. **Không có dịch vụ EN niêm yết giá** — [PyPI wenku](https://pypi.org/project/wenku); [sagedatum](https://sagedatum.com/blogs/apps/how-do-i-download-files-from-baidu-wenku)
- **Paper:** `cnki download` cho *cnki download free, cnki download github, cnki pdf download*. Bing thêm *cnki downloader*. `baidu papers` chỉ có "baidu research papers". `baidu scholar download` cho 0 — [AC "cnki download"](https://suggestqueries.google.com/complete/search?client=firefox&hl=en&gl=us&q=cnki%20download)
- **CSDN:**
  - `unlock csdn` cho **unlock csdn article**. `csdn article` cũng cho *unlock csdn article*.
  - `download from csdn` cho *download from csdn net, download from csdn without account, free download from csdn*.
  - Soup `csdn` cho **csdn paywall, csdn without login, csdn downloader online / github, csdn file downloader, csdn dataset, csdn english (version), csdn greasyfork, csdn tampermonkey, csdn extension, wenku csdn net, csdn vip, csdn reader**.
  - Nhiễu rất nhiều: CSDN trùng tên trường học ở Québec, CSDN Maroc, mã y khoa.
  - Nguồn: [AC "unlock csdn"](https://suggestqueries.google.com/complete/search?client=firefox&hl=en&gl=us&q=unlock%20csdn); [AC "download from csdn"](https://suggestqueries.google.com/complete/search?client=firefox&hl=en&gl=us&q=download%20from%20csdn); [AC soup "csdn p"](https://suggestqueries.google.com/complete/search?client=firefox&hl=en&gl=us&q=csdn%20p)
- SERP "csdn download without account": thread forum OpenWrt về MT7623A datasheet (đúng intent: người dùng cần file CSDN, khó đăng ký, chỉ đăng nhập được bằng WeChat), nhiều userscript Greasyfork (chỉ copy code trên blog), và tenorshare. **Không có trang dịch vụ CSDN nào top** — [OpenWrt forum](https://forum.openwrt.org/t/mt7623a-datasheet/42049); [greasyfork 431391](https://greasyfork.org/pt-BR/scripts/431391-csdn-code/code)
- SERP "csdn paywall unlock download": toàn userscript "Fuck CSDN Code" (bỏ chặn copy code) và addon paywall dành cho site khác. **Không có trang nào giải quyết việc tải file CSDN** — [greasyfork](https://greasyfork.org/mr/scripts/431391-csdn-code/code)
- **Firmware / ROM / 3D / sample pack / VST / anime / music / font:** mọi seed dạng "baidu + X" đều cho 0 gợi ý Google (`baidu firmware`, `baidu 3d model`, `sample pack baidu`, `vst baidu`, `baidu pan anime`, `baidu pan music`, `baidu pan font`). Riêng `baidu rom` có gợi ý nhưng là ROM điện thoại Baidu — [AC "baidu firmware"](https://suggestqueries.google.com/complete/search?client=firefox&hl=en&gl=us&q=baidu%20firmware)
- **AI agent:** soup trả về **"baidu netdisk mcp"** (Model Context Protocol). Cũng có listing skill "quark download" trên skills.sh / skills.cat (yêu cầu đăng nhập Quark). Đây là cụm mới nổi cho các agent tự tải từ host TQ — [AC soup "baidu netdisk m"](https://suggestqueries.google.com/complete/search?client=firefox&hl=en&gl=us&q=baidu%20netdisk%20m); [skills.sh quark-download](https://skills.sh/psylch/media-master/quark-download)

### Inferences
| Use-case | Từ khoá thật có autocomplete | Demand | KD | Đề xuất |
|---|---|---|---|---|
| CSDN file | unlock csdn article; csdn paywall; download from csdn (net / without account / free); csdn downloader online / github; csdn file downloader; csdn without login | S–M gộp | **Dễ (trống)** | Landing `/csdn-downloader` + bài "CSDN paywall/VIP/积分 explained". Nói rõ ranh giới: chỉ tải tài nguyên người dùng có quyền/đã trả phí qua tài khoản của dịch vụ, không "crack" |
| Baidu Wenku | baidu wenku downloader (online); baidu wenku free download; wenku baidu com download pdf; baidu wenku vip; baidu wenku ppt | M | Dễ | Landing Wenku có giá theo tài liệu |
| Dataset/weights | download dataset from baidu; download data from baidu; baidu dataset download | S | Dễ, nhưng HF đang bị competitor seeding | Trang `/for-researchers`. Hướng dẫn "ask for mirror first" (giữ đạo đức). Trả lời thật trên HF/GitHub issue |
| Paper | cnki download (free / pdf / github); cnki downloader | S | Vừa | Chỉ làm nếu dịch vụ có hỗ trợ CNKI. Nếu không thì bỏ |
| Game mod | caimogu (zzz mods / points / download); 3dm mods; nexus mods chinese | S | Dễ | Bài theo nguồn: "Download Caimogu/3DM mods without Chinese account". Gắn tên game vào H2 (ZZZ, Genshin, MH Wilds, Stellar Blade) để bắt long-tail |
| AI agent / MCP | baidu netdisk mcp | XS (mới nổi) | Dễ | Khi có API, làm trang doc "API / MCP server for Baidu & Quark downloads". Đi trước xu hướng |
| Firmware / 3D / sample / VST / MMD | không có autocomplete | XS | – | Chỉ dùng làm ví dụ trong bài, FAQ, case study. Không làm trang riêng |

### Gaps
- Không đo được volume trên YouTube/Reddit, nơi phần lớn use-case mod và MMD được tìm kiếm.
- Chưa xác minh "Baidu Wenku X" là gì (chỉ thấy trong gợi ý Bing).

---

## 4. Từ khoá host khác (Quark, 123pan, Aliyun, Lanzou, 115, ctfile, Tianyi, Xunlei, Weiyun) và Terabox

### Takeaway
Sau Baidu, **Quark là host có nhu cầu EN mạnh nhất**: hơn 26 long-tail như *pan quark cn download without account (free/reddit), pan quark downloader (online/free/reddit/github), how to download from quark…*. **123pan** xếp thứ hai (downloader, download without account, direct link generator, apk, account free, webdav). Tiếp theo là nhóm nhỏ nhưng có autocomplete: **ctfile downloader / premium downloader / online / github**, **cloud 189 cn downloader**, **xunlei download without account / pan xunlei downloader free**, **weiyun download without login**, **aliyundrive download without account / alipan downloader**. **Lanzou và 115** gần như không có volume EN (chỉ thấy người dán URL hoặc tên bị nhầm sang "lanzhou noodles"). **Terabox** có volume rất lớn nhưng là **từ khoá nhầm lẫn**: intent là tải video Terabox (bot Telegram, player), không liên quan đến người cần tải từ Baidu Pan.

### Cited Findings
- **Quark:**
  - `pan quark` cho *downloader, app, cn, download without account, apk, downloader online, login, account, register*.
  - `quark pan downloader` cho *pan quark downloader online / reddit / github / online free / free reddit, pan quark cn downloader free, pan quark link downloader, pan.quark video downloader*.
  - `how to download from quark` cho 9 biến thể *without account / cn / drive / pan / reddit*.
  - `quark vs baidu` cho **pan quark vs pan baidu**.
  - Nguồn: [AC "pan quark"](https://suggestqueries.google.com/complete/search?client=firefox&hl=en&gl=us&q=pan%20quark); [AC "quark pan downloader"](https://suggestqueries.google.com/complete/search?client=firefox&hl=en&gl=us&q=quark%20pan%20downloader); [AC "how to download from quark"](https://suggestqueries.google.com/complete/search?client=firefox&hl=en&gl=us&q=how%20to%20download%20from%20quark); [AC "quark vs baidu"](https://suggestqueries.google.com/complete/search?client=firefox&hl=en&gl=us&q=quark%20vs%20baidu)
- Seed "quark" bị nhiễu nặng bởi phô mai quark, phần mềm QuarkXPress và Quark Expeditions, nên từ khoá phải luôn có "pan quark" hoặc "pan.quark.cn" — [AC "quark pan"](https://suggestqueries.google.com/complete/search?client=firefox&hl=en&gl=us&q=quark%20pan)
- SERP "pan quark cn download without account": HF 180705 (baidufast), quarkdownloader.beehiiv.com (newsletter beehiiv của QuarkDownloader dùng làm vệ tinh SEO), HF 180744, producthunt profile, skills.sh/skills.cat, tenorshare — [quarkdownloader beehiiv](https://quarkdownloader.beehiiv.com/p/how-to-download-files-from-pan-quark-no-account-required-pan-quark-downloader); [producthunt](https://www.producthunt.com/@dylan87)
- **123pan:**
  - Soup cho *123pan downloader (github/online), 123pan direct link generator, 123pan file downloader, 123pan download without account, download from 123pan without account, 123pan account free / free account, 123pan api, alist 123pan, 123pan webdav, is 123pan safe, 123pan reddit, akun 123pan* (tiếng Indonesia).
  - Seed "123 pan" có dấu cách bị nhiễu hoàn toàn.
  - Nguồn: [AC soup "123pan d"](https://suggestqueries.google.com/complete/search?client=firefox&hl=en&gl=us&q=123pan%20d); [AC "123 pan"](https://suggestqueries.google.com/complete/search?client=firefox&hl=en&gl=us&q=123%20pan)
- Thread HF 180744 khẳng định 123pan bỏ tải guest từ 26/11/2025 và đăng ký cần SĐT +86. Đây là tuyên bố của người bán dịch vụ, chưa có nguồn chính thức. Đối thủ dùng mốc này làm hook nội dung — [HF 180744](https://discuss.huggingface.co/t/123pan-123-weights-datasets-now-need-a-chinese-login-how-to-download-them-without-one-2026/180744)
- Tài liệu AList cho biết direct link của 123 Open cần quyền open platform trả phí — [AList 123 Open](https://alistgo.com/guide/drivers/123_open.html)
- **ctfile:** `ctfile` cho *ctfile login, ctfile downloader, **ctfile premium downloader**, ctfile apk*. `ctfile download` cho *downloader online, downloader github, client download, **ctfile fast download***. SERP: app store ctfile (rating 1.0–1.2), repo `ctfile-downloader` (4 sao, cần tài khoản premium), thread techenclave về multi-host — [AC "ctfile download"](https://suggestqueries.google.com/complete/search?client=firefox&hl=en&gl=us&q=ctfile%20download); [Apple App Store CTFile](https://apps.apple.com/app/id1383153118); [techenclave](https://techenclave.com/t/which-multi-host-provider-downloader-do-you-prefer/219663?page=2)
- **Tianyi / 189:** `cloud.189.cn` cho *cloud 189 cn downloader, cloud 189 cn register*. `189 cloud` cho *cloud 189 downloader, cloud 189 apk*. `tianyi cloud download` cho 0 (người dùng dùng chữ "cloud 189" chứ không dùng "tianyi") — [AC "189 cloud"](https://suggestqueries.google.com/complete/search?client=firefox&hl=en&gl=us&q=189%20cloud)
- **Xunlei:** `xunlei download` cho *without account, for windows 10, engine, manager, apk, ios, mac*. `xunlei pan` cho *xunlei pan download, pan xunlei downloader free, pan xunlei account / register / apk*. Phần lớn là intent tải phần mềm Thunder — [AC "xunlei download"](https://suggestqueries.google.com/complete/search?client=firefox&hl=en&gl=us&q=xunlei%20download); [AC "xunlei pan"](https://suggestqueries.google.com/complete/search?client=firefox&hl=en&gl=us&q=xunlei%20pan)
- **Weiyun:** `weiyun download` cho *without login, without account, share weiyun download, tencent weiyun download* — [AC](https://suggestqueries.google.com/complete/search?client=firefox&hl=en&gl=us&q=weiyun%20download)
- **Aliyun / Alipan:** `aliyun drive` cho *price, apk, downloader, app, english, international*. `aliyundrive download` cho *aliyundrive downloader, aliyundrive download without account*. `alipan download` cho *alipan downloader*. Seed `alipan` đơn lẻ bị nhiễu — [AC "aliyun drive"](https://suggestqueries.google.com/complete/search?client=firefox&hl=en&gl=us&q=aliyun%20drive); [AC "aliyundrive download"](https://suggestqueries.google.com/complete/search?client=firefox&hl=en&gl=us&q=aliyundrive%20download)
- **Lanzou:** Google sửa thành "lanzhou (noodles)". Bing chỉ ra các domain mirror *lanzoux, lanzoui, lanzouw, lanzouq, lanzout, lanzoum* và URL dán vào. `lanzou download` chỉ cho "lanzhou downloader" — [AC "lanzou"](https://suggestqueries.google.com/complete/search?client=firefox&hl=en&gl=us&q=lanzou); [Bing "lanzou"](https://api.bing.com/osjson.aspx?query=lanzou)
- **115:** Seed EN `115 netdisk`, `115 download`, `115.com` cho toàn kết quả không liên quan (Firefox 115, địa chỉ nhà). Chỉ seed tiếng Trung `115 网盘` có gợi ý (资源搜索, api, 分享…) — [AC "115 网盘"](https://suggestqueries.google.com/complete/search?client=firefox&hl=en&gl=us&q=115%20%E7%BD%91%E7%9B%98)
- **Terabox:**
  - `terabox downloader` cho *online, online free, free, reddit, bot telegram, bot, link, file, fast, pro*.
  - `how to download from terabox` cho 9 biến thể *without app / login / account / faster / to phone*.
  - `is terabox baidu` cho *is terabox owned by baidu*.
  - Nguồn: [AC "terabox downloader"](https://suggestqueries.google.com/complete/search?client=firefox&hl=en&gl=us&q=terabox%20downloader); [AC "how to download from terabox"](https://suggestqueries.google.com/complete/search?client=firefox&hl=en&gl=us&q=how%20to%20download%20from%20terabox); [AC "is terabox baidu"](https://suggestqueries.google.com/complete/search?client=firefox&hl=en&gl=us&q=is%20terabox%20baidu)
- Terabox (trước đây là Dubox) do Flextech Inc. vận hành, công ty này được mô tả là công ty con của Baidu. Nguồn ở đây là review hoặc blog thứ cấp, chưa đối chiếu với tài liệu chính thức của công ty — [51sec blog](https://blog.51sec.org/2021/05/free-1tb-cloud-storage-terabox.html); [tecnoblog community](https://tecnoblog.net/comunidade/t/podemos-confiar-no-terabox/83114?tl=en)
- SERP "is terabox owned by baidu" có nhiều trang spam/parasite về "terabox links" trên subdomain bị chiếm quyền (cert.tma.uz, gcoos-mdv.gcoos.org), cho thấy chủ đề Terabox nhiều rác — [cert.tma.uz](https://cert.tma.uz/raw-makeovers-mt-034/terabox-links.html)

### Inferences
| Host | Từ khoá chính (EN) | Demand (ước) | KD | Ưu tiên |
|---|---|---|---|---|
| Quark | pan quark downloader (online/free); pan quark cn download without account (free/reddit); how to download from pan quark; pan quark vs pan baidu | M–L | Vừa (quarkdownloader, baidufast, erranium) | **Cao**. Landing `/quark-downloader` + so sánh "Pan Quark vs Pan Baidu" (chưa ai làm) |
| 123pan | 123pan downloader (online/github); 123pan download without account; 123pan direct link generator; 123pan account free | S–M | Dễ | **Cao**. Có hook "login bắt buộc từ 11/2025" |
| ctfile | ctfile downloader (online/github); ctfile premium downloader; ctfile fast download | S | Dễ | Trung bình. Ngách debrid, cạnh tranh với cocoleech/premium link generator |
| Tianyi/189 | cloud 189 cn downloader; cloud 189 downloader | XS–S | Dễ | Thấp–TB (trang host trong hub) |
| Xunlei | pan xunlei downloader free; xunlei download without account | XS–S | Dễ | Thấp |
| Weiyun | weiyun download without login / account | XS–S | Dễ | Thấp |
| Aliyun/Alipan | aliyundrive downloader; aliyundrive download without account; alipan downloader | XS–S | Dễ | Thấp |
| Lanzou | (chỉ domain mirror) | XS | – | Chỉ cần nhận diện URL lanzou*, không làm content riêng |
| 115 | (chỉ tiếng Trung) | XS (EN) | – | Bỏ ở EN |
| Terabox | terabox downloader (online/bot telegram); how to download from terabox… | XL (riêng) | Khó / nhiều spam | **Không nhắm**. Chỉ làm 1 FAQ "Is TeraBox the same as Baidu Netdisk?" để chặn nhầm lẫn và gom traffic "terabox vs baidu" (hiện gần như 0 gợi ý) |

- Một trang "Chinese cloud storage downloader" kiểu hub vẫn có tín hiệu: *chinese cloud storage download, ultimate chinese cloud storage downloader (tagline đối thủ), download from chinese cloud storage services*. Nên làm hub này để link xuống từng host — [AC "chinese cloud storage"](https://suggestqueries.google.com/complete/search?client=firefox&hl=en&gl=us&q=chinese%20cloud%20storage)

### Gaps
- Chưa có số liệu volume chính xác cho Quark so với 123pan. Thứ hạng giữa hai host chỉ suy từ số gợi ý.
- Chưa xác minh chính thức việc 123pan bắt login từ 26/11/2025 (chỉ có nguồn từ người bán).

---

## 5. SERP hiện tại cho ~20 từ khoá chủ lực và điểm yếu

### Takeaway
SERP EN tháng 10/2026 gồm 4 loại trang: (1) **thread HF Discuss do baidufast seeding**, mới từ 09–10/2026 nhưng đã top cho nhóm dataset, Quark và 123pan; (2) **listicle DR cao mà mỏng** (tenorshare, mspoweruser, multcloud); (3) **trang parasite/spam trên subdomain bị chiếm quyền** (scanner-api.axiory.com, captain.super.downes.ca, edx.ipeindia.org, cert.tma.uz, emailveritas URL-checker) với nội dung AI kiểu "Baidu Download Link Generator GitHub A Deep Dive"; (4) **userscript Greasyfork / GitHub** cho cụm kỹ thuật và CSDN. Ở top **không có trang dịch vụ nào có tool ngay trên trang, giá minh bạch và bằng chứng tốc độ**. Chất lượng SERP thấp như vậy nghĩa là rào cản nội dung thấp.

### Cited Findings
| # | Từ khoá | Đang rank (WebSearch US, 27/10/2026) | Điểm yếu |
|---|---|---|---|
| 1 | baidu downloader online | gist xuhyw (PR), mspoweruser "Best Baidu Downloader" (403 khi fetch; WebSearch tóm tắt là về Video DownloadHelper, tức tải *video*), picbackman và multcloud (tải video từ Baidu browser), captain.super.downes.ca (spam), edx.ipeindia.org (spam), emailveritas (URL-checker baiduerranium) — [gist](https://gist.github.com/xuhyw); [mspoweruser](https://mspoweruser.com/baidu-downloader); [multcloud](https://www.multcloud.com/tutorials/how-to-download-video-from-baidu-browser-0121-gc.html) | Lệch intent (video thay vì file Pan), spam. Trang tool thật có thể vượt |
| 2 | pan baidu download link generator free | HF 180125, tenorshare, scanner-api.axiory.com (spam), en.xiaoz.org (PanDownload 2018), greasyfork 483464, chat.mistral.ai share (!), emailveritas, cycookery (spam) — [tenorshare](https://www.tenorshare.com/knowledge/pan-baidu-downloader.html); [xiaoz](https://en.xiaoz.org/post/10793); [greasyfork](https://greasyfork.org/scripts/483464) | Một trang share chat AI cũng rank được, cho thấy SERP đói nội dung |
| 3 | baidu link downloader review legit | Trustpilot erranium, mspoweruser, malwaretips (baidu.com), axiory spam, emailveritas — [Trustpilot erranium](https://at.trustpilot.com/review/baidu.erranium.com) | Không có review độc lập nào. Có cơ hội làm "honest comparison" kèm test thật |
| 4 | download dataset from baidu pan outside china | HF 180744, producthunt @dylan87, grand-challenge, HF 180705, quarkdownloader.beehiiv, camelyon17, HF 180125, HF 160296, hyper.ai — [HF 160296](https://discuss.huggingface.co/t/can-someone-with-a-chinese-baidu-netdisk-account-help-me-download-this-dataset/160296) | Đối thủ chiếm bằng forum PR. Trang riêng có E-E-A-T (case study theo paper) sẽ bền hơn |
| 5 | pan quark cn download without account | HF 180705, quarkdownloader beehiiv, HF 180744, producthunt, skills.cat/skills.sh, HF 180125, tenorshare | Không có trang so sánh. Không có trang chính chủ nào của dịch vụ Quark top 3 |
| 6 | 123pan downloader online without account | HF 180744, HF 180705, quarkdownloader beehiiv, AList docs, xiaoz 2018, telstra subdomain spam ("IDM Cant Download from 123pan"), proteantech (nhầm PAN card Ấn Độ) — [AList](https://alistgo.com/guide/drivers/123_open.html) | Gần như trống |
| 7 | csdn download without account | OpenWrt forum, Chrome webstore (copy code), greasyfork ×4, Firefox addon, tenorshare — [OpenWrt](https://forum.openwrt.org/t/mt7623a-datasheet/42049) | **Trống** về dịch vụ |
| 8 | csdn paywall unlock download | gnuzilla, greasyfork "Fuck CSDN Code" ×7, addon Unlock, wordpress plugin | **Trống**, intent chưa được đáp ứng |
| 9 | baidu wenku downloader online | PyPI wenku, sourceforge baiduwp-php, winget, sagedatum, mergeek, gist xuhyw/qapovo, AUR, downes spam — [PyPI](https://pypi.org/project/wenku) | Không có dịch vụ trả phí EN |
| 10 | kinhdown baidu | gitcode.csdn.net, jb51 (ZH), tin cổ phiếu Baidu, Wikipedia — [jb51](https://www.jb51.net/softs/845886.html) | Không có trang EN. Brand có volume rất nhỏ |
| 11 | ctfile downloader premium | Apple App Store ×2, ecosyste.ms, GitHub topic, mwm.ai, techenclave, cocoleech docs — [cocoleech](https://cocoleech.helpscoutdocs.com/article/13-premium-service) | Không có trang dịch vụ ctfile EN nào |
| 12 | baidu svip price paypal foreigner | HelloTalk FAQ ×6 (không liên quan), apollomaniacs (JP), ithome (298 tệ/năm, khuyến mãi 189 tệ), paymentsdive — [ithome](https://www.ithome.com/0/955/699.htm); [apollomaniacs](https://www.apollomaniacs.com/ipod/howto_wechatpay_baiduyun.htm) | **Không có bài EN nào**. Làm "Baidu SVIP price 2026 for foreigners vs per-GB service" |
| 13 | is pan baidu safe | joindeleteme, itechguides, emailveritas, tenorshare, Citizen Lab, offseq, depscope — [joindeleteme](https://joindeleteme.com/is-site-safe/is-baidu-safe/) | Không có bài nào riêng về Netdisk |
| 14 | caimogu download without chinese phone number | appinchina, spam, hongkiat, itch.io comment, calilio | Không có trang nào nói về Caimogu |
| 15 | is terabox owned by baidu | spam subdomain, tecnoblog, logicity, urlert, 51sec | Nhiều spam. Có thể chiếm featured snippet bằng một FAQ ngắn |
| 16–20 | how to download from baidu without account; baidu pan downloader online; download from baidu without account 2026; pandownload alternative 2026; baidu netdisk slow fix | Đã kiểm tra ở SEO-01 (28/09/2026): hovatek 2017, gist erraz1, steemit, multcloud, baidulinkdownloader, erranium, robots.net, tenorshare, HF PR, 51cto/sohu/zhihu. Không kiểm tra lại ở vòng này — [SEO-01 nội bộ](../../seo/01-keyword-content.md) | (như SEO-01) |

- SERP ngày 27/10 có thêm vệ tinh SEO kiểu mới của đối thủ: **newsletter beehiiv** (quarkdownloader.beehiiv.com) và **profile Product Hunt** (@dylan87). Cả hai đều rank cho cụm Quark/dataset — [beehiiv](https://quarkdownloader.beehiiv.com/p/how-to-download-files-from-pan-quark-no-account-required-pan-quark-downloader); [producthunt](https://www.producthunt.com/@dylan87)
- Bài trên HF tự nêu giá BaiduFast cho 123pan: dưới 150 MB miễn phí, sau đó "$0.79 first GB + $0.49/GB" (theo tóm tắt của WebSearch về HF 180744; chưa đối chiếu trên trang giá) — [HF 180744](https://discuss.huggingface.co/t/123pan-123-weights-datasets-now-need-a-chinese-login-how-to-download-them-without-one-2026/180744)

### Inferences
- Cách thắng SERP: trang tool + guide trên domain chính, có ngày cập nhật, video, benchmark và FAQ schema. Song song đó, trả lời thật trên HF/GitHub/Reddit với disclosure rõ ràng (white-hat), không tạo thread PR giả.
- Các trang parasite (axiory, downes, telstra subdomain) có thể bị Google xử lý trong các đợt cập nhật spam. Vì vậy thứ hạng của chúng không ổn định và vị trí đó sẽ mở ra cho nội dung thật.
- Ba từ khoá có điểm yếu SERP lớn nhất so với giá trị thương mại: **csdn download without account / unlock csdn article**, **123pan downloader**, **baidu svip price (foreigner)**.

### Gaps
- WebSearch không phải SERP Google thật (không có vị trí chính xác, không có PAA, không có related searches). PAA và related searches **chưa thu thập được** vì không có trình duyệt hay SERP API.
- mspoweruser trả 403, nên chưa đọc được nội dung chính xác.
- Chưa kiểm tra lại SERP #16–20 trong phiên này.

---

## 6. Từ khoá brand / đối thủ (navigational) và cơ hội trang so sánh / alternative

### Takeaway
Brand đối thủ có **volume EN rất thấp**. Chỉ **erranium** có cụm autocomplete rõ: *baidu erranium free / account / github / credits / delete account / coupon / reddit*, *pan baidu erranium*, *is baidu erranium free*. Tiếp theo là **baidu link downloader** (free / safe / review / reddit, trùng với generic keyword). Hai brand **baidudl** (*baidudl legit, chrome, extension*) và **kinhdown** (*kinhdown pro, kinhdown baidu cloud*) chỉ có vài gợi ý. **pandownload** còn sống như brand cũ (*pandownload web / online / 2025 / 2026 / plus / apk / exe / github / v4*). Các seed **"pandownload alternative", "erranium alternative", "best baidu downloader", "baidu pan downloader review"** đều cho 0 gợi ý Google. Trang "alternative/vs" vì vậy có giá trị chuyển đổi chứ không có giá trị traffic.

### Cited Findings
- `baidu erranium` cho *free, account, github, credits, delete account, "https baidu erranium com", pan baidu erranium*. Bing thêm *coupon, reddit*. `erranium` cho *erranium baidu downloader* — [AC "baidu erranium"](https://suggestqueries.google.com/complete/search?client=firefox&hl=en&gl=us&q=baidu%20erranium); [Bing](https://api.bing.com/osjson.aspx?query=baidu%20erranium)
- `baidu link downloader` cho *free, safe, review, baidu com downloader, visit baidu link downloader, baidu download link generator*. Seed `baidulinkdownloader` viết liền cho 0 trên Google — [AC "baidu link downloader"](https://suggestqueries.google.com/complete/search?client=firefox&hl=en&gl=us&q=baidu%20link%20downloader)
- `baidudl` cho *baidudl legit* (Google), *baidudl chrome, baidudl extension* (Bing). `is baidudl` cho 0 — [AC "baidudl"](https://suggestqueries.google.com/complete/search?client=firefox&hl=en&gl=us&q=baidudl); [Bing](https://api.bing.com/osjson.aspx?query=baidudl)
- `baidufast` bị Google sửa thành "baidu fast/faster" (Baidu PC Faster), nghĩa là brand chưa có volume — [AC](https://suggestqueries.google.com/complete/search?client=firefox&hl=en&gl=us&q=baidufast)
- `baidudownloader` / `baidudownloader com` cho 0 trên Google — [AC](https://suggestqueries.google.com/complete/search?client=firefox&hl=en&gl=us&q=baidudownloader)
- `kinhdown` cho 0 trên Google. Bing có *kinhdown pro*. `baidu kinh` cho **kinhdown baidu cloud**. KinhDown là công cụ hoặc site parse (baidu.kinh.cc) gửi link qua email để tải bằng IDM. Nguồn chủ yếu tiếng Trung — [AC "baidu kinh"](https://suggestqueries.google.com/complete/search?client=firefox&hl=en&gl=us&q=baidu%20kinh); [jb51](https://www.jb51.net/softs/845886.html)
- `pandownload` cho *pan download, pandownload baidu, pandownloader, pandownload web, pan download online, pandownload 2025, pandownload net, pandownload plus, pandownload apk, pandownload exe*. Bing thêm *2026, github, v4*. `pandownload alternative` / `replacement` / `alternative to pandownload` cho 0 — [AC "pandownload"](https://suggestqueries.google.com/complete/search?client=firefox&hl=en&gl=us&q=pandownload); [Bing](https://api.bing.com/osjson.aspx?query=pandownload)
- Debrid: `real debrid baidu` cho **real debrid pan baidu**. `alldebrid baidu`, `torbox baidu`, `debrid baidu` cho 0. SEO-02 ghi nhận TorBox đã mua domain baidudownloader.pro — [AC "real debrid baidu"](https://suggestqueries.google.com/complete/search?client=firefox&hl=en&gl=us&q=real%20debrid%20baidu); [SEO-02 nội bộ](../../seo/02-competitor-teardown.md)
- Công cụ mã nguồn mở có volume navigational lớn hơn brand thương mại:
  - `baidupcs` cho 9 gợi ý (*baidupcs-go (github/download/linux/web/docker/login/mac), baidupcs-py, baidupcs rust*).
  - `baiduexporter` cho *github, zip, 下载, chrome*.
  - `rclone baidu` cho *rclone baidu pan, rclone baiduyun, rclone baidunetdisk*.
  - Nguồn: [AC "baidupcs"](https://suggestqueries.google.com/complete/search?client=firefox&hl=en&gl=us&q=baidupcs); [AC "baiduexporter"](https://suggestqueries.google.com/complete/search?client=firefox&hl=en&gl=us&q=baiduexporter); [AC "rclone baidu"](https://suggestqueries.google.com/complete/search?client=firefox&hl=en&gl=us&q=rclone%20baidu)

### Inferences
| Loại trang | Từ khoá | Demand | Ghi chú |
|---|---|---|---|
| "X vs Y" / review đối thủ | baidu erranium (free/credits/coupon/reddit); baidu link downloader (safe/review/reddit); baidudl legit | XS–S mỗi brand | Trang so sánh trung thực có bảng giá, test thật và ngày cập nhật. Không bôi nhọ, chỉ dùng thông tin công khai. Baidudl đã có `/comparisons/baidudl-vs-erranium` (SEO-02), nên phải làm tốt hơn |
| PanDownload legacy | pandownload (web/online/2025/2026/apk/exe/github/plus) | S–M | Bài "PanDownload in 2026: dead, risky clones, what works now". Đáp đúng truy vấn brand cũ (generic "alternative" có 0 gợi ý) |
| Công cụ OSS | baidupcs-go, baiduexporter, rclone baidu pan, bypy, alist baidu | S–M gộp | Bài "BaiduPCS-Go / rclone vẫn cần tài khoản + SVIP để nhanh → khi nào nên dùng dịch vụ". Nhắm người dùng kỹ thuật |
| Debrid | real debrid pan baidu | XS | Một FAQ "Does Real-Debrid support Baidu Pan?" |
| KinhDown | kinhdown pro; kinhdown baidu cloud | XS | Gộp vào bài alternatives |

- Brand của chính mình: vì brand đối thủ có rất ít volume, nên đặt tên brand **khác hẳn** generic keyword, và để các trang dịch vụ tự rank bằng nội dung. Domain khớp từ khoá (baidulinkdownloader) chỉ giúp được phần nào: "baidu link downloader" có autocomplete, nhưng nó cũng là generic keyword nên đối thủ khác tranh được.

### Gaps
- Không có số liệu brand search thật (cần Ahrefs hoặc Keyword Planner).
- Chưa kiểm tra SERP cho "baidu erranium coupon" và "baidudl legit".

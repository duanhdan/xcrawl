# 04 – Off-page SEO, Link building & Community marketing (white-hat) cho brand tải file Baidu/CSDN

*Nghiên cứu ngày 28/09/2026. Công cụ: WebSearch + WebFetch. Reddit chặn fetch trực tiếp (old.reddit.com/*.json bị chặn, search `site:reddit.com` không trả kết quả), nên phần Reddit ghi rõ "cần kiểm tra thủ công" ở những chỗ không xác minh được URL. Mọi số liệu khác đều có nguồn. Nguyên tắc xuyên suốt: không spam, không tài khoản giả, không review giả, không PBN, không mua link dofollow.*

---

## 0. TL;DR

1. **Nhu cầu thật, phân tán, không có "nhà" chung.** Người cần tải Baidu/CSDN không tụ ở 1 subreddit mà xuất hiện ở: GitHub Issues của repo AI/dataset (rất nhiều), Hugging Face Forums, itch.io/GameBanana/CaiMoGu (mod game), GBAtemp/XDA (ROM/firmware), LoversLab (mod Skyrim), Quora, VOZ/Tinhte/Vietnamitx (VN), Kaskus (ID). Reddit có subreddit chuyên r/BaiduHelper (nhỏ, do 1 cá nhân điều hành).
2. **Đối thủ đã "chiếm" các điểm chạm rẻ tiền:** BaiduFast, Erranium, BAIDUDL, BaiduLinkDownloader đang rải gist GitHub, bình luận HF forum, thread itch.io, post CaiMoGu, kênh YouTube tự làm. Cách này hiệu quả ngắn hạn nhưng mỏng; **khoảng trống là nội dung thật sự có giá trị** (guide kỹ thuật cho researcher, mirror dataset hợp pháp, dữ liệu tốc độ đo thực, video hướng dẫn chất lượng).
3. **Backlink tốt nhất có thể kiếm hợp lệ:** (a) GitHub README/Issues của repo nghiên cứu (link "mirror/guide" khi maintainer chấp nhận), (b) directories DA cao (AlternativeTo, SaaSHub, Product Hunt, Capterra/G2 nếu hợp danh mục), (c) digital PR bằng **nghiên cứu gốc** "tốc độ Baidu free vs SVIP theo quốc gia", (d) HARO-like (Qwoted, Featured, Source of Sources), (e) partnership chéo có `rel=sponsored` với premiumdownloader.net/baidudownloader.com/debrid/VPN/du học.
4. **Affiliate ngành:** debrid lớn (Real-Debrid, AllDebrid, Premiumize) chỉ thưởng ngày/điểm, không tiền mặt; dịch vụ nhỏ hơn trả **20–30% first sale + 10–20% recurring** (Deepbrid 30%/20%, LinkSnappy 30%/10%); host file trả 5% referral (NitroFlare). Đề xuất: 25% lần đầu + 10% recurring 12 tháng, cookie 60–90 ngày.
5. **Review:** Trustpilot cấm incentive, cấm chọn lọc khách vui, phải mời "mọi khách cùng một cách, cùng thời điểm" → tự động mời sau khi giao file 24–48h.
6. **KPI 90 ngày (đề xuất):** 40–60 referring domains hợp lệ, 25+ review Trustpilot thật (≥4.5), 10 video YouTube, 1 nghiên cứu gốc, 15 GitHub issue/HF thread được hỗ trợ có link, 3 partnership chéo, 20 affiliate hoạt động.

---

## 1. Reddit

### 1.1. Hiện trạng (những gì xác minh được)

| Subreddit | Liên quan | Quy định self-promo (nguồn) | Ghi chú |
|---|---|---|---|
| **r/BaiduHelper** | Subreddit chuyên nhận link Baidu để tải hộ, do user `_Stalwart_` điều hành; được giới thiệu trên CaiMoGu (mục Zenless Zone Zero Mods, cập nhật 10/10/2024). Nguồn: https://www.caimogu.org/post/4625.html | Chưa xem được rules (Reddit chặn fetch) | Đây là đối thủ/đồng minh tiềm năng nhất: cộng đồng nhỏ nhưng đúng nhu cầu. Không "cướp" thread; đề nghị hợp tác với mod (mục 1.3). |
| **r/Piracy** (~640k+ members) | Chủ đề file host/leech xuất hiện thường xuyên | Rule: "No self-promoting, selling, trading, or asking for content downloads/invites to sites…" (nguồn: https://seedboxgui.de/guides/reddit-piracy-community/). Có megathread/wiki. | **Không đăng gì về brand.** Chỉ có thể trả lời câu hỏi kỹ thuật thuần túy, không link. Thực tế nên bỏ qua. |
| **r/DataHoarder** | Dataset lớn, mirror, tool tải; rất nhiều người hỏi về pan.baidu | Wiki rules yêu cầu on-topic, cấm tech support cơ bản; không thấy rule cấm hẳn self-promo nhưng mods rất gắt với "advertising". Nguồn: redship.io tổng hợp rule chung 90/10 (https://redship.io/blog/reddit-self-promotion-rules) | Vào bằng nội dung **tool/guide/benchmark** (ví dụ script so sánh tốc độ), không bằng dịch vụ. |
| **r/China, r/chinalife, r/Chinese, r/ChineseLanguage** | Người nước ngoài sống/học TQ hỏi cách đăng ký Baidu, tải tài liệu | Không xác minh được rule cụ thể (fetch bị chặn) | Cần đọc sidebar thủ công trước khi tham gia. |
| Game mod: **r/GenshinImpact / r/Genshin_Impact_Leaks, r/WutheringWaves, r/HonkaiStarRail, r/VRchat, r/MMD, r/SkyrimMods, r/StellarBlade, r/MonsterHunter** | Mod TQ đăng trên CaiMoGu/9damao/3DM → link Baidu/123pan/Quark | Không xác minh được | Chủ đề xuất hiện rõ ở CaiMoGu (mục 2.4) hơn là Reddit. |
| Học thuật: **r/MachineLearning, r/computervision, r/datasets, r/LanguageTechnology** | Dataset nghiên cứu TQ host trên Baidu | r/MachineLearning cấm self-promo trừ thread tuần | Xem GitHub/HF (mục 2.3) – hiệu quả hơn Reddit. |
| **r/software, r/techsupport** | Hỏi tool tải | r/techsupport cấm quảng cáo | Bỏ qua. |

**Thread cũ đang rank Google:** với các truy vấn "reddit how to download from baidu pan without account", Google/Bing (qua WebSearch) **không trả về thread Reddit nào trong top**; trang chiếm top là baidulinkdownloader.com, tenorshare.com, HF forum, gist GitHub, itch.io. Nghĩa là: (a) Reddit không phải nơi Google đang đẩy cho từ khoá này, (b) cơ hội "chiếm" SERP nằm ở **gist/HF/forum** hơn là Reddit. Nguồn tìm kiếm: kết quả WebSearch ngày 28/09/2026 cho các truy vấn ở trên.

### 1.2. Danh sách cần kiểm tra thủ công (không fetch được)

Dùng `reddit.com/search?q=pan.baidu.com`, `q=baidu netdisk download`, `q=csdn download`, sắp xếp "Top – All time" và ghi lại 20 thread có score cao nhất + subreddit + năm. Nên dùng tài khoản thật, tuổi >3 tháng, karma >200 trước khi bình luận. Công cụ tra rule nhanh: https://rednudge.com/tools/subreddit-rules-checker, https://www.redditgrowthdb.com/guides/reddit-self-promotion-rules.

### 1.3. Cách tham gia hợp lệ

- **Quy tắc 90/10** (90% đóng góp không liên quan brand). Bình luận trả lời đúng câu hỏi, nêu **đủ lựa chọn** (client chính thức + SVIP, BaiduPCS-Go, dịch vụ tải hộ nói chung), chỉ nhắc brand khi được hỏi hoặc trong profile/flair. Không dùng nhiều tài khoản.
- **r/BaiduHelper:** nhắn mod đề nghị (1) tài trợ băng thông tải free cho request ≤200 MB, (2) viết wiki "How to download from Baidu 2026" có cả phần tool free, (3) flair "verified service" nếu mod chấp nhận. Nếu mod từ chối → tôn trọng.
- **AMA/Case study** ở r/DataHoarder chỉ khi có dữ liệu gốc (mục 5.2) – đăng dưới dạng "I measured Baidu Netdisk download speed from 12 countries" kèm phương pháp + CSV public trên GitHub; nhắc brand ở cuối, minh bạch.
- Thời điểm phù hợp để nhắc brand: người hỏi đã nêu rõ "no Chinese phone number / large file / need Google Drive mirror" và không ai trả lời trong 24h.

---

## 2. Quora, Stack Exchange, GitHub, Forum, Discord/Telegram

### 2.1. Quora (đang rank tốt cho truy vấn tiếng Anh)

| URL | Ghi chú |
|---|---|
| https://www.quora.com/How-do-I-download-Baidu-documents-in-the-US | Câu hỏi cốt lõi, trả lời cũ → cơ hội viết câu trả lời 2026 đầy đủ |
| https://www.quora.com/How-can-I-download-from-Baidu-large-files | Chủ đề "file lớn" = đúng phân khúc trả tiền |
| https://www.quora.com/Why-do-I-need-a-Baidu-account-to-download-something | Giải thích cơ chế → dẫn tới lựa chọn |
| https://www.quora.com/How-do-I-use-Baidus-smartphone-apps-without-a-Chinese-cellphone-number | Khung "no Chinese phone number" |
| https://howtodownloadfilesfrombaiduquarkwithoutacc.quora.com/ | Quora Space do đối thủ tạo (mô hình tham khảo: brand tự tạo Space) |
| https://justpaul.quora.com/I-will-download-one-file-for-free-from-Baidu-disk-up-to-1-GB-in-size-who-the-first-person-to-repost-this-message | Mẫu "tải free 1 file" – hình thức mồi hợp lệ nếu minh bạch |

Cách làm: 1 tài khoản thật đứng tên founder; câu trả lời 400–700 từ, liệt kê 4–5 cách (kể cả cách không cần dịch vụ), có ảnh chụp, disclose "I run X". Tạo 1 Quora Space riêng "Downloading from Chinese cloud drives" đăng 1 bài/tuần. Quora link là nofollow nhưng traffic referral tốt.

### 2.2. Stack Exchange

Search `site:superuser.com download baidu pan` không có kết quả nổi bật → **khoảng trống**: có thể tự đặt câu hỏi canonical dạng Q&A tự trả lời trên Super User ("How to download a large pan.baidu.com share outside China without the official client?") theo đúng quy tắc SE (câu hỏi thật, câu trả lời kỹ thuật, disclosure affiliation khi nhắc dịch vụ). SE rất gắt với quảng cáo – chỉ nhắc brand trong 1 dòng có disclosure, hoặc không nhắc mà để trong profile.

### 2.3. GitHub & Hugging Face (điểm chạm tốt nhất cho phân khúc học thuật/AI)

**Issue mẫu người dùng đang kêu cứu (mở, có thể trả lời):**

| Repo/Issue | Nội dung |
|---|---|
| https://github.com/VictorZoo/LoD-Loc/issues/21 | "Request for an alternative dataset download mirror" – nêu rõ khó tạo tài khoản ngoài TQ, file lớn cần client |
| https://github.com/PaddlePaddle/PaddleOCR/issues/899 | "Unable to download files from pan.baidu.com" – repo lớn (PaddleOCR), issue rank Google |
| https://github.com/brightmart/text_classification/issues/31 | Dataset trên pan.baidu |
| https://github.com/17x-osborn/UAV-SCD/issues/1 | Không truy cập được từ Thổ Nhĩ Kỳ |
| https://github.com/supercpy/ATR-UMOD/issues/5 | Xin mirror Google Drive/HF |
| https://github.com/taozh2017/HiNet/issues/4 | Xin link GD/Baidu cho BraTS |
| https://github.com/InfraRecon7/IR275K/issues/1 , https://github.com/yuxieHarrison/GSO-Net/issues/1 , https://github.com/Jushl/SSVM/issues/1 | Loạt issue "Release on Hugging Face" / "Dataset download issues" |
| https://github.com/sdvcrx/pan-baidu-download/issues/32 | "Can't download files from Baidu anymore" – tool chết, người dùng tìm thay thế |
| https://github.com/topics/baidu-netdisk | Topic page – nơi tìm repo tool liên quan |

**Gist đang rank & là "chiến trường" của đối thủ** (đều là dạng guide + mời "post your link in comments"):
- https://gist.github.com/erraz1/97ac8ef2b9f629c8c0620d79b0795749 – 80 stars, 8 forks, ~25+ comment, comment mới tới 28/09/2026; đẩy baidu.erranium.com.
- https://gist.github.com/dreamer2908/f8fb9fd043a0d16e21dbbd5d5ffb84f1 – "Register a Baidu account to download stuff???" – gist cũ nhiều comment, rank tốt.
- https://gist.github.com/BaiduDownloader/de3732904045d9f78e9ab8e6c7f1b608 và https://gist.github.com/hifandfd/7b0c725bfbac2dac39bc35970d543c99 – của đối tác baidudownloader.com.
- https://gist.github.com/gonelove31/24688770004d5f83eeba99cbd20773e6 , https://gist.github.com/gonelove31/7f055e2cf31532d082d602f6d0b53ded , https://gist.github.com/myheart111/c7240ff6bc6ec0265e93ad20869a03a7 – BaiduFast (cập nhật 25/09/2026).
- https://gist.github.com/qapovo/8ce21d7df7386a820b83b454f8fdc111 , https://gist.github.com/dozernz/c351be842e6564c7f8c91a720bfee538 , https://gist.github.com/pivud/f8cd524f3ce7d4a581637241e52647c5 (bản tiếng Trung).

**Hugging Face Forums:** https://discuss.huggingface.co/t/can-someone-with-a-chinese-baidu-netdisk-account-help-me-download-this-dataset/160296 – đăng 22/06/2025, 11 reply, trong đó erranium (170 GB), baidufast (20 GB/10 phút), baidulinkdownloader đều được nhắc → thread này là "SERP asset" cho truy vấn "baidu netdisk dataset download".

**Cách tham gia hợp lệ trên GitHub/HF (khác đối thủ):**
1. **Không** spam comment giống nhau vào hàng loạt issue (GitHub coi là spam, tài khoản có thể bị flag).
2. Làm **1 repo tool mã nguồn mở thật** (ví dụ CLI kiểm tra link Baidu còn sống/size/mật khẩu, hoặc script `baidu-mirror` tải qua API của brand), có README kỹ, license MIT; đây là backlink dofollow từ github.com + là lý do chính đáng để trả lời issue: "we open-sourced a checker; if you need a mirror, our service can fetch it – disclosure: I work there".
3. **Chương trình "Dataset Mirror for Researchers":** tải hộ miễn phí dataset public ≤20 GB cho repo có ≥100 stars, đăng lại lên Hugging Face/Zenodo (theo license dataset), rồi comment vào issue kèm link mirror. Maintainer thường ghi credit vào README → **backlink tự nhiên từ repo nghiên cứu** (loại link giá trị nhất trong ngách này). Ràng buộc: chỉ mirror dataset có license cho phép redistribute; hỏi maintainer trước.
4. Viết 1 gist "canonical" của brand nhưng **có thêm giá trị**: bảng so sánh tất cả cách (client, SVIP, BaiduPCS-Go/OpenList, dịch vụ tải hộ – kể cả đối thủ) + FAQ; cập nhật hàng tháng; ghi rõ affiliation.
5. Theo dõi issue mới bằng GitHub search `"pan.baidu.com" is:issue is:open created:>2026-09-01` (làm hàng tuần).

### 2.4. Forum (quốc tế)

| Forum | Thread/nơi cụ thể | Quy định & cách tham gia |
|---|---|---|
| **itch.io – General Discussion** | https://itch.io/t/7000435/... (BaiduFast đăng 26/09/2026, 0 reply); https://itch.io/t/3669553/not-being-to-download-the-newest-version-in-baidu (người dùng hỏi) | Cộng đồng indie/mod; cho phép giới thiệu tool nếu hữu ích, nhưng thread tự quảng cáo dễ bị lơ (0 reply). Tốt hơn: trả lời thread của người hỏi. |
| **CaiMoGu (caimogu.org)** – cộng đồng mod game TQ (MH Wilds, ZZZ, Stellar Blade, MH Rise…) | https://www.caimogu.org/post/16388.html (03/11/2025, Erranium), https://www.caimogu.org/post/16465.html , https://www.caimogu.org/post/504.html , https://www.caimogu.org/post/4625.html (r/BaiduHelper), tag: https://www.caimogu.org/topic/detail.html?kw=Download+baidu+link | Circle rule "off-topic sẽ bị xoá" nhưng các post guide vẫn tồn tại. Người nước ngoài đến CaiMoGu để lấy mod → link Baidu/123pan. Nên viết guide song ngữ "How to download mods from CaiMoGu/3DM/9damao" (Erranium đã có: https://baidu.erranium.com/tutorials/caimogu). |
| **GBAtemp** | https://gbatemp.net/threads/need-help-to-download-baidu-file.539316/ (thread hỏi giúp, có reply gợi ý baidulinkdownloader) | Forum ROM/homebrew, rule cấm quảng cáo thương mại; chỉ trả lời khi có người hỏi, disclose. |
| **XDA Forums** | https://xdaforums.com/t/help-unable-to-download-a-file-from-baidu-need-mirror-help.2701256/ | Firmware/ROM TQ (Xiaomi, MTK) hay ở Baidu; XDA cấm self-promo ngoài mục dành riêng. |
| **LoversLab** | Thread "9damao and Baidu Download Request Thread" (được nhắc trong kết quả tìm kiếm; cần đăng nhập để xem, chưa xác minh URL) | Mod Skyrim/Fallout TQ từ 9damao (yêu cầu tài khoản TQ). Đây là nhóm sẵn sàng trả tiền; LoversLab cấm quảng cáo nhưng cho phép "request thread" → có thể hỗ trợ trong thread hiện có. |
| **Hovatek** | https://www.hovatek.com/forum/thread-20892.html "How to Download From Baidu Without an Account" | Forum firmware Android châu Phi/Á – đăng guide dạng tutorial được chấp nhận. |
| **residentevilmodding.boards.net** | https://residentevilmodding.boards.net/thread/11017/help-download-3dmgames-mod | Mod RE từ 3DM. |
| **Steam Community discussions** | Game có mod TQ (Stellar Blade, Wuthering Waves, Desktop Mate, Sonic Racing) | Rule Steam cấm link ngoài thương mại; chỉ hướng dẫn kỹ thuật. |
| **Kaskus (Indonesia)** | https://www.kaskus.co.id/thread/5a671b529e7404e96e8b4567/... (2018, 0 reply, đã khoá) | Cần nội dung mới bằng tiếng Indonesia; Kaskus có "Forum Jual Beli" cho dịch vụ. Tumblr/Medium ID cũng có guide cũ (aonodreamland, athariqramadhan). |
| **MHH / Mobilism / BlackHatWorld** | Không tìm thấy thread Baidu cụ thể | Chỉ để tham khảo mô hình "leech service" & giá; **không dùng để marketing** (vi phạm white-hat, rủi ro brand). |
| **CGPeers/CGPersia** | cgpersia.com có bài đăng asset ArtStation (link host) | Là site chia sẻ lậu – **không tham gia**; chỉ ghi nhận nhu cầu 3D/CG (nhiều asset TQ trên Baidu). Nơi hợp lệ thay thế: BlenderArtists, Polycount (hỏi đáp kỹ thuật, không quảng cáo). |

### 2.5. Discord / Telegram

- Telegram **@BaiduDownloader_Help** – nhóm hỗ trợ của baidudownloader.com, 955 thành viên (theo research 03).
- Telegram **@baidudownloade** ("Baidu downloader 📥") – 381 subscriber, bán tải hộ $10/≤5 GB, chỉ PayPal, có "invite 2 friends → unlimited" (https://t.me/s/baidudownloade, https://telemetr.io/en/channels/1972429112-baidudownloade).
- Telegram nhóm **tele.vnitx.com** của Vietnamitx (mục 3).
- Discord: không tìm thấy server công khai chuyên Baidu; nhu cầu nằm trong server mod game (GameBanana/XXMI, VRChat avatar, MMD) – tham gia với vai trò người giúp, không quảng cáo.
- Đề xuất: mở **Discord server + Telegram group của brand** làm kênh support (yêu cầu "free fetch ≤200 MB" xử lý ở đó), và xin đặt link support trong wiki r/BaiduHelper nếu mod đồng ý.

---

## 3. Việt Nam: Facebook / Zalo / TikTok / Forum

### 3.1. Forum & thread đang rank

| Nơi | URL | Ghi chú |
|---|---|---|
| **VOZ** | https://voz.vn/t/giup-em-download-file-pan-baidu.1205910/ (05/02/2026, 2 reply, gợi ý baidufast) ; https://voz.vn/t/tao-tai-khoan-csdn-net-sao-vay-cac-bac.192017/ ; https://voz.vn/t/tong-hop-viet-hoa-cho-game-black-myth-wukong.1002181/ ; https://voz.vn/t/tale-of-immortal-quy-coc-bat-hoang-...510120/ | VOZ cấm quảng cáo ngoài box "Rao vặt"; bình luận hỗ trợ được, để chữ ký/profile. Box game "Tu tiên"/Việt hoá game TQ là ngách nóng. |
| **Tinhte** | https://tinhte.vn/thread/tai-file-tu-link-pan-baidu-com-khong-can-baidu-client.2669956/ ; https://tinhte.vn/thread/ai-giup-em-tai-sach-tu-trang-csdn-net.2866966/ ; https://tinhte.vn/thread/ho-tro-download-tat-ca-cac-tai-lieu-tren-mang-mien-phi-cho-thanh-vien-tinhte-vn.2450214/ | Tinhte cho đăng bài hướng dẫn (thread "Viết bởi" thành viên) → đăng guide 2026 chất lượng. |
| **Vietnamitx** | https://vietnamitx.com/t/ho-tro-tai-file-pan-baidu-toc-do-cao-khong-can-tai-khoan-tra-link-drive-tu-dong.564/ (15 trang, 195+ post, 4–6/2023, admin chuyển sang Telegram tele.vnitx.com; forum 8.482 thành viên) | Bằng chứng nhu cầu VN rất thật (hàng trăm request kèm mật khẩu). Mô hình "trả link Drive tự động" chính là sản phẩm của chúng ta. |
| **Dạy Nhau Học** | https://daynhauhoc.com/t/lam-sao-de-download-tai-lieu-tu-trang-download-csdn-net/70107 (2018, chưa có lời giải) | Dev VN cần CSDN → trả lời thread cũ (Discourse cho phép). |
| **chiase.org, sieuthuthuat.com, ngovang.com, fastviet.vn, hocdohoacaptoc.com, itcuaban.com, taikhoanpre.com** | Các bài "cách tải file pan.baidu" đang rank Google VN | Ứng viên **guest post / cập nhật bài cũ** (đa số bài 2018–2021 đã lỗi thời) và broken-link building. |
| **Dịch vụ VN hiện có** | dichvuchina.vn (tải hộ), taphoammo.net (thuê SVIP), duyhieu.com (SVIP + CSDN), FB page "Dịch vụ download trên Pan Baidu" https://www.facebook.com/dichvupanbaidu | Đối thủ nội địa; cũng là đối tác reseller tiềm năng. |

### 3.2. Facebook groups (đối tượng)

- **VOZ.VN – Công nghệ & Kỹ thuật** (group FB): https://www.facebook.com/groups/voz.congnghe/posts/1135882957211968/ – hỏi cách đăng ký CSDN.
- **Nhà Trung (học tiếng Trung)**: https://www.facebook.com/groups/nhatrung/posts/1118541209457196/ – "Các trang web tải tài liệu, sách tiếng Trung miễn phí".
- **Du học TQ**: Hội Du học sinh & du lịch TQ https://www.facebook.com/groups/HoiDuHocSinhVietNamTaiTrungQuoc/ ; Hội săn học bổng https://www.facebook.com/groups/sanhocbongduhoctrungquoc/ ; Hội tự apply https://www.facebook.com/groups/hocbongtrungquoc.net/ ; page Riba.vn, Vimiss (danh sách thêm: https://ybox.vn/ky-nang/cong-cu-hoi-nhom-du-hoc-...).
- **Học tiếng Trung**: https://www.facebook.com/groups/hoctiengtrungquocmoingay/ ; page Sách học tiếng Trung Đài Loan, Hiệu sách Mạn Mạn.
- **Dịch/convert truyện**: cộng đồng editor tập trung ở WordPress/forum (dembuon.vn threads https://dembuon.vn/threads/huong-dan-edit-cach-lay-convert-raw-truyen-chu.83850/ , https://dembuon.vn/threads/cach-lay-raw-trung-cua-editor-dich-gia.60143/ ; hoinhieuchu, ngontinhgroup) – raw/txt thường trên Baidu.
- **Game TQ**: Bomber VNG group (https://m.facebook.com/groups/bombervng.official/posts/1131180974803344/ "cách tải game bản Trung"), nhóm Việt hoá game (Hội Game Á Châu…), VOZ box game.
- **Đồ hoạ/CG**: hocdohoacaptoc.com có bài tải Baidu – nhóm FB "Tài nguyên đồ hoạ", "3D Max/SketchUp Việt Nam" (asset TQ trên Baidu rất nhiều).
- Chưa xác minh được số thành viên (Facebook chặn fetch). Quy tắc chung: đọc rule group; đa số cấm bán hàng nhưng cho phép trả lời hỗ trợ; xin admin đăng 1 bài hướng dẫn có disclosure hoặc tài trợ "tải free cho thành viên" thay vì post quảng cáo.

### 3.3. Zalo / TikTok

- **Zalo:** không có index công khai; cách hợp lệ là tạo Zalo OA của brand (kênh CSKH) và xin vào nhóm Zalo của trung tâm tiếng Trung/du học qua đối tác (mục 5.5).
- **TikTok VN:** hashtag/discover đã có: https://www.tiktok.com/discover/c%C3%A1ch-t%E1%BA%A3i-file-baidu ("Cách Tải File Baidu"), "Đổi app Baidu sang tiếng Việt". Nội dung ngắn 30–60s "3 cách tải file Baidu 2026 không cần tài khoản" + "tải tài liệu CSDN cho sinh viên IT" là khoảng trống (chưa thấy creator chuyên). Lưu ý xu hướng 12/2025: Telegram vượt Zalo top tải app VN (https://kevesko.vn/20251230/...) → ưu tiên Telegram cho support.

---

## 4. YouTube

### 4.1. Video hiện có (title/kênh xác minh qua oEmbed; **lượt xem/năm không lấy được** do YouTube chặn fetch – cần kiểm tra thủ công)

| Video | Kênh | Nhận xét |
|---|---|---|
| "How to Download from Baidu or Quark for Free (2026 Guide)" https://www.youtube.com/watch?v=PS118tpnsdw | Baidu Link Downloader (https://www.youtube.com/@BaiduLinkDownloader) | Đối thủ có kênh riêng, nhiều video |
| "How To Download From pan.Baidu Without Account 2026" https://www.youtube.com/watch?v=Aeu_f-N4JFE | Baidu Link Downloader | |
| "How to download from pan.baidu.com without account 2026 \| free download in description" https://www.youtube.com/watch?v=p2tfqwhwO2w | BaiduDownloader[.]com (đối tác) | |
| "How to Download from Pan Baidu (no account required) \| BAIDUDL" https://www.youtube.com/watch?v=dVMjm0Sjkws | BAIDUDL | |
| "How to download Baidu file without account? … Fast Downloader" https://www.youtube.com/watch?v=lJ1sMaUDs2o | Fast Downloader (fastdown.io) | |
| "BAIDU DOWNLOADER 2024 – Giải pháp tải file không cần đăng ký tài khoản Baidu" https://www.youtube.com/watch?v=yTLgv8U2w40 | Kênh 5 Phút (VN, 11/2024) | Video VN gần nhất |
| "Tải file từ Baidu cloud tốc độ cao không cần tài khoản" https://www.youtube.com/watch?v=POGVbjNOKf4 | (VN, 06/2021, phương pháp cũ) | Lỗi thời |

### 4.2. Khoảng trống & ý tưởng kênh

- Hầu hết video là **demo dịch vụ của chính brand** (1–3 phút, screen-record, không có người nói). Chưa có: (1) video **so sánh khách quan** 5 dịch vụ tải hộ (giá/tốc độ/thời gian giao), (2) **CSDN** gần như không có video tiếng Anh, (3) video cho ngách: "download Genshin/WuWa mods from CaiMoGu", "download Chinese datasets for ML research", "get Skyrim mods from 9damao", "tải raw truyện/tài liệu CSDN cho sinh viên", (4) video tiếng Indonesia/Thái/Tây Ban Nha (Baidu links phổ biến trong cộng đồng anime/MMD Nam Mỹ & ĐNÁ).
- Kênh đề xuất: 2 kênh (EN + VI). Lịch 1 video/tuần + 2 Shorts/tuần. Mỗi video có chapter, mô tả chứa link guide trên site (traffic + brand search). Video "speed test Baidu free vs SVIP vs our service" quay thật, đăng kèm dữ liệu nghiên cứu (mục 5.2).
- Nhúng video vào bài blog tương ứng (rich result), và đăng lại bản cắt lên TikTok/Reels/Bilibili (Bilibili cho người TQ ở nước ngoài).

---

## 5. Link building (white-hat)

### 5.1. Directories / listing (theo thứ tự ưu tiên)

| Nền tảng | Vì sao | Nguồn/hướng dẫn |
|---|---|---|
| **AlternativeTo** | Đã có trang "Baidu alternatives", "Premium Link Generator alternatives" (https://alternativeto.net/software/premiumlinkgenerator-com/); list brand như "alternative to PanDownload / BaiduPCS-Go / KinhDown" → hưởng traffic của tool đã chết | https://alternativeto.net |
| **SaaSHub** | Free, duyệt thủ công, xuất hiện trong "alternatives" của tool liên quan | https://www.effortlessbacklinks.com/directory/saashub |
| **Product Hunt** | Launch day spike; cần sản phẩm có UI/free tier rõ ràng (ví dụ "Baidu link checker – free") | https://dev.to/shreyvijayvargiya/saas-directories-in-2026-the-complete-submission-playbook-2ic6 |
| **Capterra / G2** | Miễn phí; G2 chỉ có tác dụng khi ≥10 review verified; danh mục "File Transfer / Download Manager" | https://wheretosubmit.org/guides/g2-submission-guide |
| **Crunchbase** | Tín hiệu doanh nghiệp thật | |
| **Trustpilot** | Vừa là review vừa là listing DA cao (mục 7) | |
| **GitHub** (repo tool + gist), **Hugging Face** (org page + dataset mirrors), **Docker Hub** (image CLI) | Backlink kỹ thuật, đúng đối tượng | https://github.com/topics/baidu-netdisk |
| **LeechListing** (danh sách premium link generator) https://www.leechlisting.com/ | Cộng đồng leech theo dõi list này; xin được liệt kê nếu hỗ trợ host | |
| Danh sách 100+ nơi launch | https://guillaumeduhan.medium.com/100-free-platforms-to-launch-your-saas-product-in-2026-3288e1868879 ; https://thestacc.com/blog/app-directory-submission-sites/ | Chọn 20–30 có DA >40, tránh farm |

### 5.2. Digital PR bằng nghiên cứu gốc

- **Ý tưởng chủ đạo: "Baidu Netdisk Speed Index 2026"** – đo tốc độ tải cùng 1 file 1 GB từ 12–15 quốc gia (VPS: US, DE, SG, VN, ID, BR, JP, KR, IN, TR, AU, GB) với 3 cấu hình: free web, free client, SVIP; lặp 3 khung giờ; công bố CSV + phương pháp + biểu đồ. Số liệu sơ bộ đã có (research 01: free 96–170 KB/s vs SVIP 7–10 MB/s; iNEWS từng đưa tin "33 MB/s" bằng tool https://inf.news/en/tech/816ce6a51aacf55fd717ce969de6438e.html). Phần "tính ra thời gian tải 50 GB dataset = X ngày" là hook báo chí/researcher.
- Câu chuyện phụ: (a) "Bao nhiêu % paper CVPR/ICCV 2025 host dataset trên Baidu?" (crawl GitHub README của paper – dữ liệu có thể kiểm chứng, rất hợp Hacker News/r/MachineLearning), (b) "Chi phí thật của SVIP cho người nước ngoài: phí 3% Alipay + trần…" (từ research 01), (c) "Sau khi PanDownload/KinhDown chết, 10 tool nào còn sống?" (kiểm tra thực tế hàng quý).
- Vì sao hiệu quả: digital PR là phương pháp #1 theo 34% SEO; campaign trung bình 42 referring domains; data study có DR trung bình ~61 (https://www.reporteroutreach.com/blog/digital-pr-statistics , https://outreachfrog.com/blog/digital-pr-for-backlinks-2026-data-stories , https://www.rebootonline.com/digital-pr-statistics/).
- Pitch tới: TorrentFreak, Rest of World, SixthTone/TechNode (tech TQ), The Register, blog Hugging Face community, Papers with Code, VN: Genk, Tinhte, VnExpress Số hoá.

### 5.3. Guest post & cập nhật bài cũ (đúng luật site-reputation-abuse)

- Google từ 11/2024 và Spam Update 08/2025 xử lý "site reputation abuse" theo thuật toán; guest post chỉ an toàn khi **đúng chủ đề site chủ và có biên tập** (https://developers.google.com/search/blog/2024/11/site-reputation-abuse , https://pressbay.net/en/blog/guest-posts-after-google-s-site-reputation-abuse-policy-safe-publishing-rules-for-2026/). Link trả tiền phải `rel=sponsored/nofollow` (https://developers.google.com/search/docs/essentials/spam-policies).
- Mục tiêu guest post: blog du học TQ (Riba.vn, Vimiss), trung tâm tiếng Trung (tiengtrung.vn, tiengtrung.com, chinemaster.com đã có bài Baidu), blog dev VN (viblo.asia, daynhauhoc), blog AI/ML (Towards Data Science – khó, HF blog community), blog mod game (GameBanana articles, 3DM guides EN), blog Indonesia (blogjeems, medium ID).
- **Cập nhật bài cũ ("content refresh outreach"):** gửi email cho chủ các bài 2018–2021 (ngovang.com, lak1s, belajaryuk1, aonodreamland, gizdev, multcloud, tenorshare) đề nghị cung cấp phần "cập nhật 2026" + số liệu tốc độ; đổi lại được trích dẫn có link.

### 5.4. Broken link building

- Tool đã chết là mỏ vàng: **PanDownload** (chết 04/2020), **baidu.kinh.cc**, **KinhDown**, **BaiduPan-Explorer** extension, các userscript Tampermonkey. Dùng Ahrefs/Semrush: `Backlinks → pandownload.net / kinh.cc / pandownload.link` → liệt kê trang còn trỏ tới → đề nghị thay bằng guide của brand (không ép thay bằng trang bán hàng; thay bằng trang "PanDownload is dead – what works in 2026"). Hướng dẫn quy trình: https://ahrefs.com/blog/broken-link-building , https://respona.com/blog/ahrefs-broken-link-building/ . Tỷ lệ phản hồi 2026 thấp hơn xưa nhưng chất lượng cao (https://lagrowthmachine.com/broken-link-building-guide/).
- Cả GitHub: repo tool chết (sdvcrx/pan-baidu-download issue #32, yang123vc/baidudl-1, PanDownload-Fix) → PR thêm dòng "Status: no longer works, see alternatives" nếu maintainer chấp nhận.

### 5.5. HARO-like

- HARO/Connectively đóng 12/2024, mở lại 04/2025 nhưng chất lượng thấp; thay thế: **Qwoted** (30k journalist), **Featured** (roundup cho Fortune/Fast Company), **Source of Sources** (Peter Shankman, 3 email/ngày), **SourceBottle** (AU/UK), **Help a B2B Writer**, **ProfNet** (https://www.prezly.com/academy/the-best-haro-alternatives , https://everything-pr.com/haro-earned-media-placements). Chủ đề trả lời: cloud storage TQ, làm việc với đối tác TQ, nghiên cứu AI với dữ liệu TQ, du học TQ.

### 5.6. Partnership chéo

| Đối tác | Hình thức | Lưu ý |
|---|---|---|
| **premiumdownloader.net** (đã có banner) & **baidudownloader.com** | Banner chéo `rel="sponsored"` (đúng như đang làm), bài "compare/partner" có disclosure, chia sẻ kênh Telegram support, bundle "Baidu + 155 host" | Banner sponsored **không** truyền PageRank; giá trị là traffic/brand. Cân nhắc bài blog biên tập chéo (dofollow hợp lệ nếu là bài thật). BAIDUDL đã làm trang "vs BaiduDownloader" (https://baidudl.com/comparisons/baidudl-vs-baidudownloader) → nên có trang so sánh của mình, trung thực. |
| Debrid/leech (Deepbrid, LinkSnappy, Leechall, AllDebrid…) | Affiliate 2 chiều: họ không hỗ trợ Baidu/CSDN → giới thiệu chéo | Debrid lớn (RD/AllDebrid/Premiumize) không có affiliate tiền mặt → chỉ "resource page" |
| VPN (Astrill, LetsVPN, ExpressVPN) | Bài "Baidu chậm dù có VPN – vì sao" + affiliate VPN | Chỉ hợp lệ khi có disclosure |
| Du học/tiếng Trung VN (Riba, Vimiss, tiengtrung.vn, Hanka, Chinemaster, Prep) | Mã giảm giá cho học viên, bài hướng dẫn tải giáo trình HSK/sách trên Baidu | Nhóm Zalo qua đối tác |
| Dịch thuật/mua hộ hàng TQ (dichvuchina.vn, nhaphangqt.com) | Reseller/white-label | |
| Cộng đồng mod (GameBanana creators, XXMI/CaiMoGu translator) | Tài trợ tải free cho modder chuyển host sang GD | Modder ghi credit trong mô tả mod |
| Researcher/lab | "Dataset mirror grant" (mục 2.3) | Backlink từ README/paper page |

---

## 6. Affiliate / referral program

### 6.1. Chuẩn ngành (xác minh)

| Dịch vụ | Cấu trúc | Nguồn |
|---|---|---|
| Real-Debrid | +5 ngày premium + 50 fidelity points/người đăng ký (1.000 điểm = 30 ngày) – không tiền mặt | https://real-debrid.com/affiliate (trang chặn fetch; số liệu từ https://refer.guide/r/real-debrid , https://forum.diggz1.me/viewtopic.php?t=673) |
| AllDebrid | Điểm/ngày miễn phí khi người được giới thiệu mua gói 90 ngày | https://referraldrop.com/en/drop/alldebrid |
| Premiumize | 15 ngày premium cho cả hai bên nếu mua trong 30 ngày | https://invitation.codes/premiumize.me |
| **Deepbrid** | **30% lần mua đầu + 20% recurring**, cookie 90 ngày, tag vĩnh viễn, min payout $20, trả ngày 7 hàng tháng (PayPal/BTC/wire), cấm spam & trademark bidding | https://www.deepbrid.com/affiliates |
| **LinkSnappy** | 30% người mới + 10% recurring (tiền mặt) | tổng hợp WebSearch (koditips/troypoint) – chưa fetch trực tiếp |
| NitroFlare (file host) | 70% PPS+rebill cho uploader + $5/1.000 download; **referral 5%**; min $100; phí PayPal 3% | https://nitroflares.com/affiliate-program/ |
| 4K Download (phần mềm) | 50% commission | https://www.4kdownload.com/affiliate/8 |
| Telegram @baidudownloade | "Mời 2 bạn → tải không giới hạn 1 link" | https://t.me/s/baidudownloade |
| Benchmark chung SaaS | 20–30% recurring phổ biến; dịch vụ digital 30–50% one-time | https://tapfiliate.com/blog/affiliate-commission-rates/ , https://www.shopify.com/blog/affiliate-commission |

### 6.2. Đề xuất cho brand

- **Affiliate (creator/blogger/modder):** 25% đơn đầu + 10% recurring trong 12 tháng; cookie 60 ngày; min payout $20 (PayPal/USDT/chuyển khoản VN); dashboard minh bạch; cấm: trademark bidding, spam forum/Reddit, coupon site giả, self-referral. Cung cấp asset: banner, video mẫu, link checker embed.
- **Referral (khách):** cả hai bên +1 GB credit khi người mới thanh toán ≥$3 (kiểu Premiumize) – mạnh với sinh viên/du học sinh.
- **Reseller/white-label** cho dịch vụ VN/ID (dichvuchina, taphoammo sellers, Kaskus FJB): giá sỉ −30%.
- **Modder/dataset mirror program**: credit tải miễn phí đổi lấy dòng credit + link trong mô tả mod/README (không bắt buộc – tránh bị xem là link scheme; để tự nguyện).
- Nền tảng: Rewardful/Tapfiliate/FirstPromoter hoặc tự xây; chú ý thuế và điều khoản cấm quảng bá nội dung vi phạm bản quyền.

---

## 7. Review & uy tín

- **Trustpilot – Guidelines for Businesses (06/2026):** cấm mọi incentive (giảm giá, mã, quay thưởng, hoàn tiền), cấm "chỉ mời người có trải nghiệm tốt" hoặc đặt trigger mời ở giai đoạn chỉ khách hài lòng mới tới; phải mời **mọi khách cùng cách, cùng điểm trong hành trình**, 1 lời mời/1 trải nghiệm, sau khi khách đã dùng dịch vụ; khuyến khích trả lời review; vi phạm → khoá tính năng, Consumer Warning. Nguồn: https://corporate.trustpilot.com/legal/for-businesses/guidelines-for-businesses/jun-2026 , https://help.trustpilot.com/s/article/Quick-guide-to-Trustpilot-s-Guidelines-for-Businesses , https://loyaltysurf.io/blog/trustpilot-review-incentives/.
- **Quy trình hợp lệ:** email/Telegram tự động 24–48h sau khi giao link (mọi đơn, kể cả đơn lỗi) → "Rate your experience" → link Trustpilot (AFS/BCC invitation để được badge "verified"). Không tách luồng vui/buồn. Trả lời 100% review ≤48h, review xấu: xin lỗi + hoàn tiền công khai.
- **Tránh:** review chéo với đối tác (baidudownloader.com có 25 review WooCommerce nội bộ – không copy sang Trustpilot), mua review, nhân viên tự review.
- Bổ sung: Google Business Profile (nếu có pháp nhân), G2/Capterra review (chỉ verified qua LinkedIn), Sitejabber, ScamAdviser (kiểm tra điểm domain sớm – domain mới thường bị điểm thấp; công bố thông tin công ty/WHOIS/địa chỉ để cải thiện), Reddit/HF mentions tự nhiên.
- Reputation monitoring: Google Alerts + Brand24/Mention cho tên brand, "scam", "legit".

---

## 8. Kế hoạch hành động 90 ngày & KPI

### Tháng 1 (ngày 1–30): Nền tảng + điểm chạm có sẵn
1. Hoàn thiện trang guide canonical (EN/VI): "Download from Baidu/CSDN 2026 – every method", "PanDownload alternatives", "CaiMoGu/9damao mod guide", "Dataset on Baidu? mirror guide". Trang "Compare: us vs BaiduFast/Erranium/BAIDUDL/BaiduDownloader" trung thực.
2. Lập tài khoản thật: GitHub org (+1 repo CLI checker), HF org, Quora (founder), Reddit (nuôi 90/10), Discord/Telegram brand, Trustpilot, Zalo OA, TikTok/YouTube (EN+VI).
3. Submit 25 directory (AlternativeTo, SaaSHub, Crunchbase, Capterra, G2, LeechListing, …). 
4. Bật luồng mời review tự động (Trustpilot AFS). 
5. Trả lời 10 GitHub issue/HF thread + 4 câu Quora + 3 thread VOZ/Tinhte/daynhauhoc, có disclosure.
6. Bắt đầu đo dữ liệu "Speed Index" (VPS 12 nước, 3 khung giờ, 4 tuần).
- **KPI T1:** 15 referring domains mới; 8 review Trustpilot; 4 video; 500 visit referral; 100 thành viên Telegram/Discord.

### Tháng 2 (31–60): Nội dung & PR
1. Publish **Baidu Netdisk Speed Index 2026** (trang + CSV GitHub + video) → pitch 60 nhà báo/blogger (Qwoted/Featured/SoS song song), 20 blogger VN/ID.
2. Product Hunt launch của tool free (link checker / free ≤200 MB fetch).
3. Broken link outreach: 100 trang trỏ tới PanDownload/kinh.cc/KinhDown.
4. Guest post/content refresh: 6 bài (2 du học/tiếng Trung, 2 dev/AI, 1 mod game, 1 ID).
5. Khởi động affiliate program (Deepbrid-style) + tuyển 20 creator (YouTube mod game, blog du học, TikTok VN).
6. Dataset Mirror Program: 5 dataset đầu tiên (xin phép maintainer, upload HF).
- **KPI T2:** +25 referring domains (≥5 DR 50+); 1 bài báo/blog lớn; 10 review Trustpilot (tổng ≥18, ≥4.5★); 8 video; 10 affiliate active; 1.500 visit referral.

### Tháng 3 (61–90): Mở rộng & tối ưu
1. Đề xuất hợp tác r/BaiduHelper + itch.io/CaiMoGu guide song ngữ; AMA r/DataHoarder dựa trên dữ liệu (nếu mod đồng ý).
2. Partnership chéo ký 3 hợp đồng (premiumdownloader.net nâng lên bài biên tập, 1 VPN, 1 trung tâm tiếng Trung/du học), reseller VN/ID.
3. Chuỗi video ngách (Genshin/WuWa mod, Skyrim 9damao, dataset ML, CSDN cho sinh viên IT VN), 2 Shorts/tuần.
4. Báo cáo quý: phân tích link (Ahrefs), disavow nếu có link rác tự đến, đo brand search (GSC) và share of voice trên HF/GitHub.
- **KPI T3 (luỹ kế 90 ngày):** 40–60 referring domains hợp lệ (≥10 DR 50+); 25+ review Trustpilot ≥4.5★; 12 video, 1 kênh ≥500 sub; 15 issue/thread hỗ trợ có link; 3 partnership; 20 affiliate active đóng góp ≥10% doanh thu; brand search tăng ≥3x so với tháng 1; 4.000 visit/tháng từ referral + social.

### Rào chắn tuân thủ (áp dụng mọi hoạt động)
- Một người – một tài khoản; luôn disclose affiliation; không mua link dofollow; link trả tiền/banner = `rel=sponsored`; không PBN; không review incentive; không mirror nội dung có bản quyền/không license; tôn trọng quyết định mod; lưu log outreach để chứng minh khi cần.

---

## Phụ lục: nguồn chính
- Nghiên cứu nội bộ: /home/user/xcrawl/docs/research/01…03.
- HF thread: https://discuss.huggingface.co/t/can-someone-with-a-chinese-baidu-netdisk-account-help-me-download-this-dataset/160296
- Gist erraz1: https://gist.github.com/erraz1/97ac8ef2b9f629c8c0620d79b0795749
- CaiMoGu r/BaiduHelper: https://www.caimogu.org/post/4625.html ; Erranium guide: https://www.caimogu.org/post/16388.html
- itch.io BaiduFast: https://itch.io/t/7000435/...
- Vietnamitx thread: https://vietnamitx.com/t/...564/page-13 ; VOZ: https://voz.vn/t/giup-em-download-file-pan-baidu.1205910/
- r/Piracy rule: https://seedboxgui.de/guides/reddit-piracy-community/ ; Reddit self-promo: https://redship.io/blog/reddit-self-promotion-rules
- Trustpilot: https://corporate.trustpilot.com/legal/for-businesses/guidelines-for-businesses/jun-2026
- Affiliate: https://www.deepbrid.com/affiliates ; https://nitroflares.com/affiliate-program/ ; https://refer.guide/r/real-debrid
- HARO alternatives: https://www.prezly.com/academy/the-best-haro-alternatives
- Google policy: https://developers.google.com/search/blog/2024/11/site-reputation-abuse ; https://developers.google.com/search/docs/essentials/spam-policies
- Directories: https://dev.to/shreyvijayvargiya/saas-directories-in-2026-the-complete-submission-playbook-2ic6
- Digital PR stats: https://www.reporteroutreach.com/blog/digital-pr-statistics

# Cộng đồng quốc tế (tiếng Anh/phương Tây) bàn về tải Baidu Pan / CSDN / host Trung Quốc: danh bạ đã xác minh

*Ngày nghiên cứu: 27/10/2026. Thread trước 2024 được đánh dấu **[lịch sử]**. Chỉ liệt kê URL thực sự thấy trong kết quả công cụ (search, fetch, API). Điểm xuất phát là `docs/research/seo/04-offpage-community.md` (28/09/2026); ghi chú này kiểm chứng lại và bổ sung.*

**Phương pháp và giới hạn (quan trọng khi đọc số liệu):**
- **Reddit:** reddit.com và old.reddit.com chặn cả WebFetch lẫn curl. `site:reddit.com` trên WebSearch không trả về trang Reddit nào. Các mirror Redlib (redlib.hbubli.cc, redlib.belloworld.it, r.datuan.dev) đều đang bảo trì hoặc trả 502. Dữ liệu Reddit trong ghi chú này lấy từ **Pullpush API** (bản lưu trữ Reddit, có dữ liệu tới ~13/10/2026), qua khoảng 20 truy vấn. Sau đó Pullpush trả HTTP 429 kèm thông báo *"This website does not provide free scraping resources for agents"*, nên tôi **dừng dùng** để tôn trọng điều khoản. Hệ quả: (a) mỗi truy vấn chỉ trả 100 kết quả mới nhất, nên mọi con số đếm là **cận dưới**; (b) **không đọc được rules/sidebar của subreddit nào trực tiếp**, nên rule self-promo chỉ có từ nguồn thứ cấp hoặc suy ra từ hành vi mod quan sát được; (c) số subscriber lấy từ trường `subreddit_subscribers` mà Pullpush ghi lại lúc scrape.
- **GitHub:** `gh api search/issues` và MCP `search_issues` bị chặn ở session này, vì session chỉ được dùng repo đã cấu hình. Danh sách issue lấy qua WebSearch, ngày tạo lấy từ snippet.
- **Forum chặn bot:** GBAtemp, XDA và LoversLab trả 403 (Cloudflare). VideoHelp trả 503. Hovatek, D5Render, CaiMoGu, itch.io, HF Discuss và Stack Exchange đọc được.

---

## Câu hỏi 1: Subreddit nào có thread về tải Baidu/CSDN? Quy mô, hoạt động, rule self-promo

### Takeaway
Reddit là nơi có **nhu cầu dày đặc nhất và mới nhất** (hàng chục request mỗi tuần trong tháng 9 và 10/2026). Nhưng phần "chuyên Baidu" đã bị **các nhà cung cấp dịch vụ chiếm**: r/BaiduHelper và r/BaiduDownloader do cùng một người (u/_Stalwart_) điều hành, người này tải free dưới 1 GB và tính phí phần còn lại; r/BaiduLinksFree đẩy sang Erranium; r/baidudownload gắn với BAIDUDL. Ngoài cụm này, nhu cầu nằm rải rác ở r/DataHoarder (một thread "hub" rất sống), r/datasets, r/DHExchange, r/China, r/Chinese, r/AskChina, r/chinalife, r/computervision và các sub ngách (procreatebrushes, flightsim_pirate, QuestPiracy, warcraft3, PokemonROMhacks, VocaTorrent, mikumikudance…). Nhiều sub được đề bài gợi ý (r/MonsterHunterMods, r/StellarBlade, r/StableDiffusion, r/emulation, r/Roms, r/audioengineering, r/3Dmodeling) **không có tín hiệu nào** trong mẫu Pullpush thu được.

### Cited Findings

**A. Cụm subreddit chuyên Baidu (đều là kênh của nhà cung cấp hoặc người tải hộ)**

| Subreddit | Subscriber (Pullpush) | Hoạt động quan sát được | Ai điều hành và mô hình | Thread mẫu (ngày) |
|---|---|---|---|---|
| **r/BaiduDownloader** | ~3.036 | ≥100 bài khớp "baidu" từ 22/05/2024 tới 10/10/2026. Có megathread hằng tháng "Post your requests here!" | u/_Stalwart_ xin quyền mod qua r/redditrequest ngày 13/11/2025 ([post](https://www.reddit.com/r/redditrequest/comments/1ow7dfa/rbaidudownloader/)). Mod team có xóa comment vì "harassment" (06/2026) | [Post your requests here (15/12/2025, 30 comment)](https://www.reddit.com/r/BaiduDownloader/comments/1pngilc/post_your_requests_here/); [megathread 10/2026 với request ngày 08–10/10/2026](https://www.reddit.com/r/BaiduDownloader/comments/1wxj0fq/post_your_requests_here/); [What should you know about Baidu Downloader? (29/11/2025)](https://www.reddit.com/r/BaiduDownloader/comments/1p9konu/what_should_you_know_about_baidu_downloader/) |
| **r/BaiduHelper** | ~1.912 | ≥100 bài trong khoảng 28/05 tới 09/10/2026, tức **≥ khoảng 20 bài/tháng** | u/_Stalwart_: "I can help with files below 1GB for free and my prices are really cheap for any…" ([comment r/DataHoarder 26/05/2026](https://www.reddit.com/r/DataHoarder/comments/1tny2aa/is_there_a_way_to_download_from_pan_baidu_without/onxs7z8/)). Được giới thiệu trên CaiMoGu ([post 4625](https://www.caimogu.org/post/4625.html), cập nhật 10/10/2024) | [Help downloading a Baidu Pan file from Europe (09/10/2026)](https://www.reddit.com/r/BaiduHelper/comments/1x1sq8e/help_downloading_a_baidu_pan_file_from_europe/); [need help for a mod (03/10/2026)](https://www.reddit.com/r/BaiduHelper/comments/1wwrgal/need_help_for_a_mod/); request trả tiền: "[REQUEST] Need a 38 GB Baidu file mirrored to my Google Drive (Willing to compensate)" (28/03/2026) |
| **r/BaiduLinksFree** | ~829 | ≥100 bài từ khoảng 09/2025 tới 11/10/2026, có ngày 3+ request | u/Icy_Selection_55 trả file nhỏ kèm câu "If you'd like to support my work…". File lớn hoặc link Weiyun/Xunlei/123pan thì trả lời "Please use baidu erranium" (06–07/2026) | [download request (11/10/2026)](https://www.reddit.com/r/BaiduLinksFree/comments/1x316x8/download_request/); [ví dụ đẩy Erranium (02/07/2026)](https://www.reddit.com/r/BaiduLinksFree/comments/1uldjrw/download_request/ov3u30n/) |
| **r/baidudownload** | ~706 | Hoạt động từ 2020, bài gần nhất trong mẫu 07/2025, comment tới 12/2025. **Đang nguội** | 66/113 kết quả chứa "baidudl" nằm ở sub này, nên gắn với BAIDUDL | [Request (26/07/2025)](https://www.reddit.com/r/baidudownload/comments/1m9h5pb/request/) |
| Sub nhỏ hoặc "ma" của nhà cung cấp | không rõ | 1–7 bài | r/Baidudownloaderdotcom (baidudownloader.com), r/baiduerranium_com, r/PanBaiduDownloader **[lịch sử, 2022–2023]**, r/CSDNofBaiduDownloader **[lịch sử, 2023]**, r/GetlinkBaidu (04/2026), r/BaiduHelperFREE (06/2025, bán $3/link), r/BaiduHelpFree (29/09/2026), r/BaiduDownloadAnything (tạo 05/10/2026), r/Baidu_Master (04/2025) | [Baidudownloaderdotcom (17/03/2026)](https://www.reddit.com/r/Baidudownloaderdotcom/comments/1rvtahe/having_trouble_downloading_baidu_ill_help_you_get/); [BaiduHelpFree guide 2026](https://www.reddit.com/r/BaiduHelpFree/comments/1wt6tqd/how_to_download_from_baidu_pan_quark_and_123pan/); [BaiduDownloadAnything welcome](https://www.reddit.com/r/BaiduDownloadAnything/comments/1wy8kbz/welcome_to_rbaidudownloadanything_introduce/); [baiduerranium_com](https://www.reddit.com/r/baiduerranium_com/comments/1l5y616/how_to_download_from_panbaidu_using_baidu_erranium/) |

- Tranh chấp quyền mod: r/BaiduLinkDownloader bị Reddit cấm vì không có mod và có người xin lại ngày 07/04/2025 ([post](https://www.reddit.com/r/redditrequest/comments/1jtfjja/request_rbaidulinkdownloader_that_is_banned_for/)). r/baidudl bị đánh dấu spam và có người xin lại ngày 06/10/2024 ([post](https://www.reddit.com/r/redditrequest/comments/1fxjliv/requesting_rbaidudl_by_no_posts_being_filled_it/)).

**B. Subreddit đại chúng có thread thật (nhu cầu tự nhiên)**

| Subreddit | Quy mô | Thread mẫu (ngày) | Use-case | Rule self-promo |
|---|---|---|---|---|
| **r/DataHoarder** | ~794k thành viên ([GummySearch](https://gummysearch.com/r/DataHoarder)) | **Thread hub** "How to download from pan.baidu.com without an…" ([link](https://www.reddit.com/r/DataHoarder/comments/1mi7nip/how_to_download_from_panbaiducom_without_an/)): tạo khoảng 08/2025, **vẫn nhận comment tới 09/10/2026**, khoảng 15 request kèm mật khẩu chỉ trong 16/09 tới 09/10/2026. Có người cần "over 100 gigs" (09/10/2026). Khác: [need help downloading from pan baidu (28/07/2026)](https://www.reddit.com/r/DataHoarder/comments/1v9dlj6/need_help_downloading_from_pan_baidu/); ["Помогите скачать… Готов заплатить" (10/01/2026, sẵn sàng trả tiền)](https://www.reddit.com/r/DataHoarder/comments/1q9cwr0/помогите_скачать_файл_с_baidu_netdisk_готов/); [Is there a way to download from pan baidu without… (05/2026)](https://www.reddit.com/r/DataHoarder/comments/1tny2aa/is_there_a_way_to_download_from_pan_baidu_without/) | Lưu trữ video, phần mềm, mod, dataset | Không đọc được rule. GummySearch ghi có bài self-promo về deal ổ cứng trong các chủ đề phổ biến. Thread hub là nơi đối thủ comment nhiều nhất (Câu hỏi 5) |
| **r/datasets** | n/a | [CLRS Dataset, Baidu cần SĐT TQ (09/10/2026)](https://www.reddit.com/r/datasets/comments/1x1l9le/looking_for_access_to_the_clrs_dataset_baidu/); [research dataset trên Baidu (22/04/2026, đăng lặp 3 lần)](https://www.reddit.com/r/datasets/comments/1ssgtpa/need_help_accessing_a_research_dataset_hosted_on/) | Nhà nghiên cứu | Không xác minh được |
| **r/DHExchange** | n/a | [[Request] small files from Baidu, cannot register without +86 (19/09/2026)](https://www.reddit.com/r/DHExchange/comments/1wkp8lk/request_need_help_downloading_some_small_files/); [Japanese movie 2012 (26/03/2026)](https://www.reddit.com/r/DHExchange/comments/1s4ff72/help_downloading_a_baidu_netdisk_file_japanese/) | Trao đổi dữ liệu, dùng tag [Request] | Không xác minh được |
| **r/China** | lớn | [how to download from csdn.net for free (05/07/2026)](https://www.reddit.com/r/China/comments/1uo1w1v/how_to_download_from_csdnnet_for_free/); [Baidu Netdisk Localization Patcher EN/VI (12/07/2026)](https://www.reddit.com/r/China/comments/1uu4u7k/baidu_netdisk_localization_patcher_english_and/). AutoModerator **giữ bài chờ duyệt** ("If you're not seeing it appear… your post is under review", 09/2026) | CSDN, firmware | Bài mới bị kiểm duyệt trước, rule cụ thể chưa xác minh |
| **r/Chinese / r/AskAChinese** | n/a | [[Request] file from CSDN or Chinafix, no Chinese phone number (27/09/2026)](https://www.reddit.com/r/Chinese/comments/1wrw4fz/request_need_help_downloading_a_file_from_csdn_or/) (cùng người đăng chéo [r/AskAChinese](https://www.reddit.com/r/AskAChinese/comments/1wrvmur/request_need_help_downloading_a_file_from_csdn_or/)); [Baidu Netdisk SMS Help (31/07/2025)](https://www.reddit.com/r/Chinese/comments/1me9jxr/baidu_netdisk_sms_help/) | CSDN, Chinafix (sửa điện thoại) | Không xác minh được |
| **r/AskChina** | n/a | [Help with Grabbing Download from Baidu Netdisk (16/01/2026, 6 comment)](https://www.reddit.com/r/AskChina/comments/1qe6lce/help_with_grabbing_download_from_baidu_netdisk/); [Baidu netdisk download help (01/03/2026)](https://www.reddit.com/r/AskChina/comments/1rhiqai/baidu_netdisk_download_help/) | Phổ thông | Không xác minh được |
| **r/chinalife** | n/a | [Is there a way to download files from pan.baidu (2024, nhiều comment gợi ý dịch vụ tới 08/2025)](https://www.reddit.com/r/chinalife/comments/1f102n9/is_there_a_way_to_download_files_from_panbaidu/n89hjb0/); [6GB 123pan (11/2024)](https://www.reddit.com/r/chinalife/comments/1gsv1ja/6gb_need_help_to_download_file_from_123pan/m21m55o/); Baidu chính chủ đăng [Baidu Netdisk Global — feedback (04/06/2026)](https://www.reddit.com/r/chinalife/comments/1twi0yn/baidu_netdisk_global_wed_love_your_honest_feedback/) | Expat | Không xác minh được |
| **r/computervision, r/deeplearning, r/pytorch** | n/a | [Need help downloading Baidu Netdisk files for two research papers (04/12/2025)](https://www.reddit.com/r/computervision/comments/1pdyfby/need_help_downloading_baidu_netdisk_files_for_two/); [model checkpoints from Baidu Disk (02/08/2024, đăng chéo 3 sub)](https://www.reddit.com/r/pytorch/comments/1ei81xm/help_needed_with_downloading_model_checkpoints/) | Nghiên cứu ML | r/MachineLearning có thread self-promotion định kỳ do mod tổ chức (03/2025), yêu cầu ghi rõ giá ([mirror](https://nyc1.lr.ggtyler.dev/r/MachineLearning/comments/1j1hc0o/d_selfpromotion_thread)). **Không thấy thread Baidu nào ở r/MachineLearning** trong mẫu |
| **r/LocalLLaMA** | lớn | Chỉ 2 hit, một comment 08/07/2025 dẫn link tool tải. Không có thread chủ đề | LLM weights | "Limit Self Promotion" theo hướng dẫn 1/10 ([wiki mirror](https://r.datuan.dev/r/LocalLLaMA/wiki/index)). Rule 4 Self Promotion cập nhật 05/2026 ([snapshot](https://reddit.sentinel-team.org/posts/1t1a3j7/snapshots/2026-05-02T03%3A06%3A21.60641Z)) |
| **r/scihub** | n/a | [research datasets stuck on Baidu (02/07/2026)](https://www.reddit.com/r/scihub/comments/1ultxsi/anyone_able_to_help_me_download_some_research/) | Nghiên cứu | Không xác minh được |
| **r/Piracy** | ~640k (theo tài liệu 04) | Ít: [Downloading Chinese Torrents (27/07/2026)](https://www.reddit.com/r/Piracy/comments/1v895qu/downloading_chinese_torrents_for_movies_and_tv/); comment 2023 chỉ người hỏi sang r/BaiduDownloader **[lịch sử]** ([link](https://www.reddit.com/r/Piracy/comments/1162yqe/downloading_from_baidu/j95on98/)) | Phim, game | Cấm self-promote/bán (tài liệu 04, dẫn seedboxgui.de) |
| **r/slavelabour** | n/a | [[OFFER] Baidu Pan download service, $15 (19/03/2026)](https://www.reddit.com/r/slavelabour/comments/1rxmz2w/offer_baidu_pan_download_service_download_any/) | Chợ dịch vụ nhỏ | Có khoảng 12 rule, **cấm piracy**, cấm công ty dùng sub ([Vice](https://www.vice.com/en/article/make-money-online-reddit/)); wiki cảnh báo ban vĩnh viễn ngay lần đầu ([wiki mirror](https://redlib.belloworld.it/r/Slavelabour/wiki/index)) |
| **r/techsupport, r/software** | lớn | [RGB software Soyo B760M (20/09/2026)](https://www.reddit.com/r/techsupport/comments/1wlrixb/how_do_i_download_rgb_control_software_for_the/); r/software có comment của _Stalwart_ (17/02/2026) | Driver, phần mềm mainboard TQ | Thường cấm quảng cáo (tài liệu 04) |

**C. Sub ngách: nhu cầu thật, tần suất thấp**
- **Hardware/firmware:** r/MechanicalKeyboards ([Leobog Hi86 firmware, 09/08/2026](https://www.reddit.com/r/MechanicalKeyboards/comments/1vjgm64/leobog_hi86_firmware_unable_to_download_from_baidu/)), r/UsbCHardware (firmware tester trên Baidu, 08–11/2025), r/soldering (10/2025), r/embedded, r/FPGA, r/OrangePI, r/esp32 (08/10/2026).
- **Game/mod:** r/warcraft3 (mod Storm Tide host Baidu, 02 và 09/2026), r/PokemonROMhacks ([Chinese hack Pokemon Mercury, 09/10/2026](https://www.reddit.com/r/PokemonROMhacks/comments/1x1cj80/chinese_hack_pokemon_mercury_133_another_fresh/)), r/kof ([KOF XV announcer mod Baidu problem, 06/09/2026](https://www.reddit.com/r/kof/comments/1w8qh0y/king_of_fighters_xv_announcer_mod_baidu_problem/)), r/Gta5Modding (09/2026), r/Silksong (11/2025), r/QuestPiracy, r/flightsim_pirate (máy bay crack từ fsxorg.cn trên Baidu, 2025–2026), r/WutheringWaves (comment _Stalwart_ 02/2026). r/skyrimmods chỉ có dữ liệu **[lịch sử, 2018–2019]**.
- **Nghệ thuật/creator:** r/procreatebrushes: mua brush trên RedNote xong nhận link Baidu/Quark (08–09/2026, [ví dụ](https://www.reddit.com/r/procreatebrushes/comments/1vkekhw/how_to_buy_brushes_on_rednote/p2uomgy/)). r/mikumikudance ([motion request, 10/09/2026](https://www.reddit.com/r/mikumikudance/comments/1wc5sri/does_anyone_have_this_motion_summertime/)). r/VocaTorrent (Vocaloid voicebank, [07/2026](https://www.reddit.com/r/VocaTorrent/comments/1v8yh15/anybody_help_me_download_this_baidu_link/)). r/koreader (plugin trên Baidu, 09/2026).
- **Phim/truyện:** r/BLShortDramas (08/2026), r/JDorama (2025), r/yuri_manga (09/2026).
- **Sub được hỏi nhưng không có tín hiệu trong mẫu:** r/MonsterHunterMods, r/StellarBlade, r/StableDiffusion, r/emulation, r/Roms, r/PiratedGames, r/audioengineering, r/3Dmodeling, r/MMD. Truy vấn theo từng sub bị chặn 429 trước khi tới các sub này, nên đây là **"chưa xác minh được"**, không phải "không có".

### Inferences
- Trên Reddit, **lối vào "chính thống" (r/BaiduHelper, r/BaiduDownloader) do một đối thủ cá nhân kiểm soát**. Đề xuất ở tài liệu 04 (xin mod r/BaiduHelper đặt link hoặc tài trợ) gần như chắc chắn xung đột lợi ích, nên kỳ vọng thấp.
- Tài sản Reddit giá trị nhất cho thương hiệu mới là **thread hub r/DataHoarder 1mi7nip** (rank Google, comment liên tục) và các bài request ở r/datasets, r/DHExchange, r/AskChina. Chỉ nên trả lời bằng nội dung hướng dẫn đầy đủ, kèm disclosure.
- Việc lập sub riêng (mô hình mọi đối thủ đang làm) rẻ nhưng dễ bị coi là spam. Cụm r/BaiduLinkDownloader và r/baidudl từng bị ban hoặc đánh spam là bằng chứng.

---

## Câu hỏi 2: Forum và nền tảng ngoài Reddit

### Takeaway
Ngoài Reddit, ba kênh **sống và đọc được** là: **GitHub Issues của repo AI/dataset** (liên tục có issue mới năm 2026, người hỏi là nhà nghiên cứu); **Hugging Face Discuss** (thread Baidu 2026 đạt 1.000–1.800 view, nhưng hiện bị BaiduFast chiếm và có dấu hiệu bị mod dọn); và **cộng đồng mod/asset** (itch.io, CaiMoGu, D5Render). Các forum lớn như GBAtemp, XDA, LoversLab chặn bot nên không kiểm chứng được thread mới. Stack Exchange gần như trống. 4PDA, MyDigitalLife, VideoHelp, Doom9, ResetEra, Tek-Tips và ResearchGate **không tìm thấy thread liên quan** qua search.

### Cited Findings

**Hugging Face Discuss** (Discourse; đọc qua `search.json` và `/t/{id}.json`)

| Thread | Ngày tạo | View / post | Ghi chú |
|---|---|---|---|
| [How to download from Baidu Pan… — 2026 notes for datasets + a free fetcher](https://discuss.huggingface.co/t/how-to-download-from-baidu-pan-pan-baidu-com-without-a-chinese-account-2026-notes-for-datasets-a-free-fetcher/180125) | 08/09/2026 | **1.829 view**, 3 post | Tác giả `gonelove` (BaiduFast), cập nhật 12/10/2026 (quét ClamAV, xem danh sách file). Tự động khóa ngày 13/10/2026 |
| [How to download pan.baidu.com or Quark Pan weights without a Chinese account](https://discuss.huggingface.co/t/how-to-download-pan-baidu-com-or-quark-pan-weights-without-a-chinese-account/180705) | 24/09/2026 | **1.076 view**, 6 post | `gonelove`, link baidufast.com. Người dùng thật xin tải link Quark (12/10/2026) và Baidu (18/10/2026). Có post trống của `adamm-hf` (18/10/2026) |
| [Can someone with a Chinese Baidu NetDisk account help me download this dataset?](https://discuss.huggingface.co/t/can-someone-with-a-chinese-baidu-netdisk-account-help-me-download-this-dataset/160296) | 22/06/2025 | 1.080 view, **còn 5 post** | Tài liệu 04 ghi 11 reply, có erranium, baidufast, baidulinkdownloader. Nay chỉ còn post của người hỏi (UBCv2, "service require payment for big files, anyway I got them finally"), một request Quark (23/10/2026) và post trống `adamm-hf` (25/10/2026) |
| Thread 180744 "123pan weights/datasets now need a Chinese login…(2026)" | 2026 | **404 Not Found** | Có trong kết quả search nhưng đã bị gỡ |
- Một dataset HF quảng bá dịch vụ: [gonelove/baidu-pan-download-guide](https://huggingface.co/datasets/gonelove/baidu-pan-download-guide).

**GitHub Issues (repo AI/dataset xin mirror ngoài Baidu)**: lấy qua WebSearch, ngày theo snippet
- [YanZhang-zy/PDDA #3](https://github.com/YanZhang-zy/PDDA/issues/3): "Request for Google Drive / OneDrive mirror for pretrained checkpoints". Checkpoint trên Baidu cần SVIP hoặc SĐT TQ (09/2026).
- [01-seven/Dttr-_project #1](https://github.com/01-seven/Dttr-_project/issues/1): "trained weights via Google Drive / Hugging Face (Baidu Pan not accessible)" (10/2026).
- [JJGU2291/MM-UAV-Benchmark #7](https://github.com/JJGU2291/MM-UAV-Benchmark/issues/7): Baidu cần client desktop (06/2026).
- [UM-Research-Ng/UMOD-dataset #3](https://github.com/UM-Research-Ng/UMOD-dataset/issues/3): xin thay thế Baidu (07/2026).
- [yanliji/FineFS-dataset #4](https://github.com/yanliji/FineFS-dataset/issues/4): Google Drive chết, không đăng ký được Baidu (03/2025).
- **[lịch sử]** [zju3dv/PVO #17](https://github.com/zju3dv/PVO/issues/17), [cshizhe/hgr_v2t #16](https://github.com/cshizhe/hgr_v2t/issues/16), [JingchunCheng/All-Age-Faces-Dataset #1](https://github.com/JingchunCheng/All-Age-Faces-Dataset/issues/1), cùng danh sách trong tài liệu 04 (LoD-Loc #21, PaddleOCR #899, UAV-SCD #1, ATR-UMOD #5, HiNet #4…).
- README/model card phổ biến kiểu "Google Drive + Baidu Pan (mật khẩu)", ví dụ [CoNR](https://huggingface.co/spaces/nev/CoNR/commit/74238f2776d6ca60564ea428a8cdb04506d41b7c), [XLS-R-SLS](https://huggingface.co/sukhdeveyash/XLS-R-SLS-Deepfake-Detection/commit/045fce76cf953b2ea7f2e02b1a117838698a2b56). Cộng đồng tự làm mirror HF, ví dụ [RIFE-Models](https://huggingface.co/anon0077/RIFE-Models).

**Mod, asset, game**
- **itch.io:** [Not being to download the newest version In Baidu (Beast Habitat)](https://itch.io/t/3669553/not-being-to-download-the-newest-version-in-baidu), tạo 14/04/2024, 12 reply. Người dùng chia sẻ OneDrive không chính thức. **BaiduFast necropost khoảng 33 ngày trước ngày fetch (khoảng cuối 09/2026)** để quảng bá baidufast.com.
- **CaiMoGu (caimogu.org):** [r/BaiduHelper - Subreddit for downloading from Baidu (ZZZ Mods)](https://www.caimogu.org/post/4625.html) (cập nhật 10/10/2024, tác giả "Four Ayes"). Circle quy định "off-topic or meaningless replies will be deleted". CaiMoGu có cơ chế "Gold" (1 Gold = 1 USD) để mua tải attachment, tức người dùng **đã quen trả tiền vi mô**. [New Method: Downloading from baidu, quark, 123 pan without an account](https://www.caimogu.org/post/16388.html) (Erranium, 03/11/2025 theo tài liệu 04) vẫn sống.
- **D5Render Forum (Discourse, phần mềm render kiến trúc):** [Assets from D5Render Chinese forum 资源分享](https://forum.d5render.com/t/assets-from-d5render-chinese-forum/56045) (11–23/04/2025, 14 post). Kiến trúc sư không đăng ký được Baidu ("requires a Chinese phone number"). Một người mua SVIP qua AliPay để tải. Người hỏi xin mod mirror Google Drive. **Chưa có đối thủ nào xuất hiện.**
- **Nexus Mods forums:** chỉ có thread chung về lỗi tải và chặn ISP. Comment trên mod Helldivers 2 kể BiliBili dẫn sang Baidu và bị ép dùng app ([nexusmods posts](https://www.nexusmods.com/helldivers2/mods/9286?tab=posts)).
- **Steam Community:** thread Baidu chủ yếu **[lịch sử]** ([2016](https://steamcommunity.com/app/465520/discussions/0/154643214752581578)).
- **residentevilmodding.boards.net:** [help download 3dmgames mod](https://residentevilmodding.boards.net/thread/11017/help-download-3dmgames-mod) (HTTP 202, không đọc được nội dung).

**Firmware/Android**
- **Hovatek:** [How to download from pan baidu (thread-49038)](https://www.hovatek.com/forum/thread-49038.html), 10/01/2025, user sandy_22 đăng 5 post (lặp): GitHub tools "deprecated", IDM/JDownloader không chạy, "third party download service" (không nêu tên) là cách duy nhất, xin tool mã nguồn mở. Footer cảnh báo không trả tiền cho người không được ủy quyền. [How to Download From Baidu Without an Account (thread-20892)](https://www.hovatek.com/forum/thread-20892.html) **[lịch sử]**, có ghi chú "the methods below no longer works".
- **XDA:** [help-unable-to-download-a-file-from-baidu-need-mirror-help.2701256](https://xdaforums.com/t/help-unable-to-download-a-file-from-baidu-need-mirror-help.2701256/) **[lịch sử, ID cũ]**, trả 403.
- **GBAtemp:** [need-help-to-download-baidu-file.539316](https://gbatemp.net/threads/need-help-to-download-baidu-file.539316/) **[lịch sử, ID cũ]**, trả 403.
- **4PDA, MyDigitalLife, GSM firmware forums khác:** search không trả thread Baidu nào. Chưa xác minh.

**Q&A / học thuật**
- **Stack Exchange** (API): Super User chỉ có [Unable to download a file from baidu website](https://superuser.com/questions/1500620/unable-to-download-a-file-from-baidu-website) **[lịch sử, 09/11/2019]**, 4.754 view, **0 câu trả lời**. Chinese.SE, Software Recs, Android.SE và Stack Overflow không có câu hỏi tải Baidu Pan (chỉ ECharts, trình duyệt Baidu…).
- **Quora:** xem tài liệu 04 (6 URL). Không kiểm chứng lại vòng này.
- **ResearchGate, VideoHelp, Doom9, ResetEra, Tek-Tips, CGPeers-like:** không tìm thấy thread liên quan qua search. VideoHelp search trả 503.

### Inferences
- **HF Discuss có mod gỡ bài quảng cáo dịch vụ.** Thread 160296 từ 11 xuống 5 post, thread 180744 bị 404, và có post trống của `adamm-hf` (nhân viên HF) xuất hiện sau các lượt quảng cáo. Đây là suy luận từ quan sát, chưa có xác nhận chính thức. Tham gia HF chỉ an toàn khi trả lời câu hỏi cụ thể của người khác, không tự mở thread quảng bá.
- GitHub Issues vẫn là điểm chạm học thuật tốt nhất, và đến nay **chưa thấy đối thủ comment trong các issue 2026 nêu trên** (dù tài liệu 04 thấy gist của họ). Lưu ý: chưa đọc được comment do API bị chặn.
- D5Render và các forum phần mềm 3D/kiến trúc là **khoảng trống chưa có đối thủ**, với người dùng chuyên nghiệp sẵn sàng trả SVIP.

---

## Câu hỏi 3: Discord và Telegram công khai

### Takeaway
Không tìm thấy Discord server công khai nào chuyên tải Baidu qua search. Telegram có các kênh nhỏ của nhà cung cấp (tài liệu 04: @BaiduDownloader_Help khoảng 955 thành viên, @baidudownloade 381 subscriber). Nhu cầu thực sự nằm trong Discord của cộng đồng mod game TQ, nhưng invite không index được nên không xác minh được.

### Cited Findings
- Search "discord server baidu downloader" chỉ trả server mod game TQ không liên quan (ví dụ [Bad Piggies Tieba Discord](https://discord.com/servers/bad-piggies-mod-leading-edge-701019016445296641), "over 30,000 BP fans"). Không thấy server chuyên Baidu.
- Search Telegram không trả kênh Baidu nào mới. Dữ liệu Telegram (@BaiduDownloader_Help, @baidudownloade bán $10/≤5 GB qua PayPal, [t.me/s/baidudownloade](https://t.me/s/baidudownloade)) lấy từ tài liệu 04, chưa kiểm chứng lại.
- Có người dùng phản ánh Discord bị chặn ở TQ ([Space Engineers support](https://support.keenswh.com/spaceengineers/pc/topic/53170-this-is-a-complaint)), nên nhóm mod TQ dùng Tieba/QQ là chính và Discord là cầu nối với người nước ngoài.

### Inferences
- Discord/Telegram phù hợp làm **kênh support của chính thương hiệu**, không phải kênh tìm khách. Tìm khách nên qua các thread công khai có index (Reddit, GitHub, HF, forum).

---

## Câu hỏi 4: Cộng đồng nào có ý định thương mại cao (sẵn sàng trả tiền) và cộng đồng nào chỉ xin free?

### Takeaway
Ý định trả tiền cao nhất ở: (1) **nhà nghiên cứu/ML** cần dataset hoặc checkpoint lớn (GitHub, HF, r/datasets, r/computervision); (2) **chuyên gia 3D/kiến trúc/creator** (D5Render, r/procreatebrushes); (3) **người cần file rất lớn** trên r/DataHoarder và r/BaiduHelper ("38 GB… willing to compensate", "over 100 gigs", "Готов заплатить"). Các sub chuyên Baidu và sub piracy đa số xin file nhỏ miễn phí.

### Cited Findings
- r/BaiduHelper: "[REQUEST] Need a 38 GB Baidu file mirrored to my Google Drive (Willing to compensate)" (28/03/2026). r/DataHoarder: "Готов заплатить" ([10/01/2026](https://www.reddit.com/r/DataHoarder/comments/1q9cwr0/помогите_скачать_файл_с_baidu_netdisk_готов/)); "over 100 gigs" ([09/10/2026](https://www.reddit.com/r/DataHoarder/comments/1mi7nip/how_to_download_from_panbaiducom_without_an/pev1qx4/)); "paid 4 dollars on Baidudl (hope it isn't a scam)" ([26/05/2026](https://www.reddit.com/r/DataHoarder/comments/1tny2aa/is_there_a_way_to_download_from_pan_baidu_without/oo2ms39/)).
- HF: người hỏi UBCv2 nói dịch vụ "require payment for big files, anyway I got them finally" ([160296](https://discuss.huggingface.co/t/can-someone-with-a-chinese-baidu-netdisk-account-help-me-download-this-dataset/160296)).
- D5Render: một người dùng mua SVIP qua AliPay để tải asset ([thread](https://forum.d5render.com/t/assets-from-d5render-chinese-forum/56045)).
- r/procreatebrushes: người đã **trả tiền mua brush trên RedNote** nhưng kẹt ở khâu tải Baidu/Quark ([08/2026](https://www.reddit.com/r/procreatebrushes/comments/1vkekhw/how_to_buy_brushes_on_rednote/p2uomgy/)).
- r/flightsim_pirate: có người chào "1gb=1usd" ([07/2025](https://www.reddit.com/r/flightsim_pirate/comments/1ly4xul/fenix_a319a320a321_v230553_is_out_on_chinese/n2xkzcu/)). Nội dung là phần mềm crack, nên **loại khỏi danh sách tiếp cận**.
- Mức giá quan sát được: _Stalwart_ free <1 GB và "really cheap" phía trên; r/slavelabour $15/file ([03/2026](https://www.reddit.com/r/slavelabour/comments/1rxmz2w/offer_baidu_pan_download_service_download_any/)); r/BaiduHelperFREE $3/link (06/2025); BAIDUDL $4 (theo người dùng); baidulinkdownloader free <50 MB sau 6 giờ chờ ([05/2026](https://www.reddit.com/r/DataHoarder/comments/1mi7nip/how_to_download_from_panbaiducom_without_an/oo5989f/)).
- Ý định thấp: r/BaiduLinksFree có người "dont have any payment method for erranium" (29/03/2026). Phần lớn request ở các sub chuyên Baidu là file nhỏ (mod, APK, shimeji), kèm lời xin "sorry to bother".

### Inferences
- Bảng xếp hạng ý định trả tiền (suy luận): GitHub/HF/r/datasets (dataset lớn, có ngân sách lab) > D5Render/creator 3D > r/DataHoarder (file lớn) > r/BaiduHelper/BaiduDownloader (người dùng đã quen mô hình free nhỏ, trả phí lớn) > r/China/Chinese/AskChina (CSDN, file nhỏ) > sub piracy/mod (free, rủi ro bản quyền).
- Giá thị trường cá nhân rất thấp ($3–15 mỗi file). Thương hiệu cần cạnh tranh bằng độ tin cậy (quét virus, file lớn, Google Drive/HF mirror, hóa đơn), không bằng giá.

---

## Câu hỏi 5: Đối thủ (baidufast, baidudl, erranium, baidulinkdownloader, baidudownloader) đang xuất hiện ở đâu?

### Takeaway
Cả năm đối thủ đều seeding trên Reddit. Erranium dựa vào **r/BaiduLinksFree** (người tải hộ free chuyển file lớn sang Erranium). BAIDUDL dựa vào r/baidudownload, thêm comment trực tiếp ở r/chinalife, r/aliyundrive, r/DHExchange. BaiduLinkDownloader và BaiduDownloader dùng **tài khoản "người dùng hài lòng"** comment ở r/DataHoarder, r/chinalife, r/Wechat, r/QuestPiracy (có cả bình luận tiếng Thái và tiếng Nga). BaiduFast **không xuất hiện trên Reddit** trong mẫu, mà tập trung vào HF Discuss, itch.io, gist và dataset HF. Đây là cách quảng cáo mỏng, dễ bị mod gỡ.

### Cited Findings
- **Erranium:** 76 hit, trong đó 36 ở r/BaiduLinksFree và 16 ở r/BaiduDownloader. Ví dụ u/Icy_Selection_55 viết "The link you shared is too big for a free download. Please use baidu erranium" ([02/07/2026](https://www.reddit.com/r/BaiduLinksFree/comments/1uldjrw/download_request/ov3u30n/)). Có sub riêng [r/baiduerranium_com](https://www.reddit.com/r/baiduerranium_com/comments/1l5y616/how_to_download_from_panbaidu_using_baidu_erranium/) (06/2025). Có câu hỏi kiểu "¿Has probado Baidu Erranium?" ở [r/QuestPiracy (03/2025)](https://www.reddit.com/r/QuestPiracy/comments/10icpdn/downloading_from_panbaidu/mhvvw13/). CaiMoGu [16388](https://www.caimogu.org/post/16388.html).
- **BAIDUDL:** tài khoản u/BaiduDL comment "Feel free to try our service—no account or Chinese phone number needed!" ([r/chinalife 14/12/2024](https://www.reddit.com/r/chinalife/comments/1gsv1ja/6gb_need_help_to_download_file_from_123pan/m21m55o/)), r/aliyundrive (05/2025), r/DHExchange (01/2025). Có thông báo "False Claims and Impersonation of BAIDUDL" ([13/06/2025](https://www.reddit.com/r/u_BaiduDL/comments/1ladl5o/notice_false_claims_and_impersonation_of_baidudl/)), tức có tranh chấp mạo danh. Người dùng hỏi "Is this website legit?" ([r/BaiduDownloader 10/2024](https://www.reddit.com/r/BaiduDownloader/comments/1fasjec/help_on_downloading_this_one_need_it_for_a_project/lqpc030/)).
- **BaiduLinkDownloader:** u/Mean_Leopard5377 đăng cùng nội dung ở [r/DataHoarder (15/09/2025)](https://www.reddit.com/r/DataHoarder/comments/1mi7nip/how_to_download_from_panbaiducom_without_an/nec6lde/), [r/Wechat (19/10/2025)](https://www.reddit.com/r/Wechat/comments/1o2gkbm/can_you_help_me_download_file_from_pan_baidu/nkaoz3z/), và bản tiếng Thái ở [r/QuestPiracy](https://www.reddit.com/r/QuestPiracy/comments/10icpdn/downloading_from_panbaidu/nkao3vv/) và r/BaiduDownloader cùng ngày, **dấu hiệu astroturf**. u/baidu_master (tiếng Nga, 05/2025) và u/Front_Cut1554 ([r/DataHoarder 17/09/2025](https://www.reddit.com/r/DataHoarder/comments/1mi7nip/how_to_download_from_panbaiducom_without_an/neqxgj6/)) cũng đẩy cùng dịch vụ. r/chinalife có 13 hit, ví dụ [08/2025](https://www.reddit.com/r/chinalife/comments/1f102n9/is_there_a_way_to_download_files_from_panbaidu/n89hjb0/). Sub r/Baidu_Master do u/baidu_linkdownloader lập (04/2025).
- **BaiduDownloader.com:** tài khoản u/BaiduDownloader comment ở r/DataHoarder ([10/10/2025](https://www.reddit.com/r/DataHoarder/comments/1mi7nip/how_to_download_from_panbaiducom_without_an/), 12/2025, 01/2026). Có sub [r/Baidudownloaderdotcom](https://www.reddit.com/r/Baidudownloaderdotcom/comments/1rvtahe/having_trouble_downloading_baidu_ill_help_you_get/) (03/2026), sub cũ r/PanBaiduDownloader và r/CSDNofBaiduDownloader **[lịch sử]**. Có comment ở r/Chinese về CSDN **[lịch sử, 03/2023]**.
- **BaiduFast:** 0 hit trên Reddit. Có mặt ở HF ([180125](https://discuss.huggingface.co/t/how-to-download-from-baidu-pan-pan-baidu-com-without-a-chinese-account-2026-notes-for-datasets-a-free-fetcher/180125), [180705](https://discuss.huggingface.co/t/how-to-download-pan-baidu-com-or-quark-pan-weights-without-a-chinese-account/180705)), [dataset HF](https://huggingface.co/datasets/gonelove/baidu-pan-download-guide), [itch.io](https://itch.io/t/3669553/not-being-to-download-the-newest-version-in-baidu) (khoảng 09/2026), cùng các gist trong tài liệu 04.
- **Người tải hộ cá nhân (đối thủ gián tiếp):** u/_Stalwart_ rải comment ở r/DataHoarder, r/software, r/research, r/warcraft3, r/WutheringWaves, r/AskChina, r/keyboards, r/Wechat (02–06/2026), luôn dẫn về hai sub của mình.

### Inferences
- Mô hình đối thủ là "tạo sub, dùng tài khoản phụ, comment rải". Đây chính là hành vi Reddit coi là spam hoặc vote manipulation. Lợi thế khác biệt của thương hiệu white-hat: **một tài khoản danh tính thật, disclosure rõ, câu trả lời so sánh mọi lựa chọn (kể cả free)**.
- Thread hub r/DataHoarder 1mi7nip là nơi 3 đối thủ cùng xuất hiện. Người đọc ở đó đã thấy quảng cáo lộ liễu, nên một câu trả lời kỹ thuật đầy đủ (giới hạn, rủi ro, cách tự làm, khi nào nên dùng dịch vụ) sẽ nổi bật.

---

## Câu hỏi 6: Top 10 cộng đồng, cách tham gia trung thực, và nhật ký 3 vòng

### Takeaway
Top 10 (xếp theo hoạt động × ý định trả tiền × khả năng tham gia hợp lệ): (1) GitHub Issues repo AI/dataset, (2) r/DataHoarder (thread hub), (3) Hugging Face Discuss, (4) r/datasets + r/computervision, (5) r/BaiduHelper/r/BaiduDownloader (chỉ quan sát, vì là sub của đối thủ), (6) r/DHExchange, (7) r/AskChina + r/Chinese + r/China (CSDN), (8) D5Render và forum 3D/kiến trúc, (9) CaiMoGu + itch.io (mod), (10) r/procreatebrushes và các sub hardware/firmware ngách.

### Cited Findings

| # | Cộng đồng | Hoạt động (gần nhất) | Use-case | Rule đã biết | Đối thủ có mặt | Cách tham gia trung thực |
|---|---|---|---|---|---|---|
| 1 | GitHub Issues | Issue mới 06–10/2026 (PDDA, Dttr, MM-UAV, UMOD) | Dataset, checkpoint | Spam comment hàng loạt bị flag (tài liệu 04) | Gist (tài liệu 04), chưa thấy trong issue 2026 | Chỉ trả lời issue thật, đề xuất mirror HF/Zenodo **khi license cho phép và maintainer đồng ý**, ghi rõ "I work at X" |
| 2 | r/DataHoarder | Thread hub có comment tới 09/10/2026 | File lớn, lưu trữ | Không xác minh được rule | BaiduDownloader, BaiduLinkDownloader, BAIDUDL, _Stalwart_ | Một tài khoản thật, câu trả lời hướng dẫn đầy đủ, disclosure; không trả lời từng link bằng quảng cáo |
| 3 | HF Discuss | 1.000–1.800 view/thread, 10/2026 | Weights, dataset | Có dấu hiệu mod gỡ bài quảng cáo | BaiduFast (chiếm), erranium/BLD (đã bị gỡ) | Không mở thread quảng bá; trả lời câu hỏi cụ thể; ưu tiên tự đăng mirror dataset hợp lệ lên HF |
| 4 | r/datasets, r/computervision | 04–10/2026 | Nghiên cứu | Không xác minh được | Không thấy | Như trên; nhắc nhóm có thể nhờ tác giả mirror |
| 5 | r/BaiduHelper / r/BaiduDownloader | Khoảng 20+ bài/tháng | Mọi loại file | Mod là đối thủ (_Stalwart_), có xóa comment | Chính mod | Chỉ quan sát nhu cầu; không quảng cáo (xung đột lợi ích, rủi ro ban) |
| 6 | r/DHExchange | 03–10/2026 | Trao đổi dữ liệu | Dùng tag [Request] | BAIDUDL, Erranium (rải rác) | Trả lời kỹ thuật; không chào bán |
| 7 | r/AskChina, r/Chinese, r/China | 01–09/2026; r/China duyệt bài trước | CSDN, Chinafix, Baidu | AutoModerator giữ bài | baidudownloader (2023) | Hướng dẫn CSDN hợp lệ (mua điểm, VIP); nhắc dịch vụ chỉ khi được hỏi |
| 8 | D5Render (và forum 3D tương tự) | 04/2025 | Asset 3D | Discourse, chưa đọc rule | Không | Xin mod/staff cho đăng hướng dẫn; đề nghị D5 staff mirror chính thức |
| 9 | CaiMoGu + itch.io | itch necropost 09/2026; CaiMoGu 2024–2025 | Mod game | CaiMoGu xóa reply off-topic | Erranium, BaiduFast | Viết hướng dẫn tải mod song ngữ có giá trị thật; không necropost thread cũ |
| 10 | r/procreatebrushes, hardware/firmware subs | 08–10/2026 | Brush mua từ RedNote; firmware | Không xác minh được | Không | Trả lời từng câu hỏi; nội dung "firmware chính hãng trên Baidu, cách lấy" |

**Nhật ký 3 vòng:**
- **Vòng 1 (khám phá rộng):** WebSearch với `site:reddit.com` không trả trang Reddit nào. Phát hiện Pullpush API hoạt động; 6 truy vấn từ khóa cho ra bản đồ khoảng 80 subreddit. Phát hiện mới so với tài liệu 04: các sub r/BaiduDownloader, r/BaiduLinksFree, r/baidudownload, r/Baidudownloaderdotcom, r/BaiduHelpFree, r/BaiduDownloadAnything; nhu cầu ở r/datasets, r/DHExchange, r/AskChina, r/procreatebrushes, r/scihub, r/flightsim_pirate và các sub firmware. Thêm 3 thread HF 2026 qua search.
- **Vòng 2 (kiểm chứng và mở rộng):** truy vấn tên 5 đối thủ trên Pullpush để lấy URL comment có ngày; kiểm chứng _Stalwart_ là mod của cả hai sub (r/redditrequest 11/2025). Đọc HF qua API, phát hiện post bị gỡ và thread 404. Đọc Hovatek, D5Render, CaiMoGu 4625, itch.io 3669553 (BaiduFast necropost). Truy vấn Stack Exchange API (gần như trống). Có thêm các GitHub issue 2026 qua WebSearch. GBAtemp, XDA, LoversLab trả 403.
- **Vòng 3 (deep-dive top 10):** phân tích thread hub r/DataHoarder (request theo ngày, đối thủ, tín hiệu trả tiền), tín hiệu trả tiền trong các sub Baidu, lịch sử hoạt động của _Stalwart_. Thử đọc rules subreddit qua Reddit và ba mirror Redlib nhưng đều thất bại. Rule LocalLLaMA, MachineLearning và slavelabour lấy từ nguồn thứ cấp. Pullpush trả 429 và cấm agent scraping, nên dừng thu thập Reddit.

**Chưa xác minh được (cần kiểm tra thủ công bằng trình duyệt có đăng nhập):** rules và sidebar của mọi subreddit (đặc biệt r/DataHoarder, r/datasets, r/DHExchange, r/BaiduHelper); thread LoversLab "9damao/Baidu request"; GBAtemp, XDA thread mới; số thành viên Discord/Telegram; comment trong các GitHub issue 2026; có hay không thread Baidu ở r/MonsterHunterMods, r/StellarBlade, r/StableDiffusion, r/emulation, r/Roms, r/3Dmodeling, r/audioengineering.

### Inferences
- Nguyên tắc tham gia white-hat rút ra từ bằng chứng: (1) một tài khoản danh tính thật, có lịch sử đóng góp không liên quan thương hiệu (tối thiểu 90/10); (2) luôn nêu lựa chọn free hoặc chính chủ trước (nhờ tác giả mirror, SVIP chính thức, Baidu Netdisk Global, bản patch tiếng Anh); (3) disclosure "I run/work at X" ngay trong câu trả lời; (4) không lập sub hay tài khoản phụ, không necropost thread cũ; (5) với nội dung bản quyền (crack, phim, game lậu ở r/flightsim_pirate, r/QuestPiracy, r/Piracy) thì **không tham gia**.
- Cơ hội nội dung ít cạnh tranh nhất: câu hỏi Super User canonical (chỉ có một câu từ 2019, 0 trả lời); forum 3D/kiến trúc (D5Render); hướng dẫn "brush/asset mua trên RedNote nhưng nhận link Baidu/Quark".

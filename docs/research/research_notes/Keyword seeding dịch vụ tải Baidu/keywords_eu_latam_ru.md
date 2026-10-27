# Bối cảnh từ khóa ES / PT-BR / RU / TR / AR / FR / DE / PL / IT cho dịch vụ tải Baidu Pan, CSDN và các host Trung Quốc

*Ngày thu thập: 27/10/2026. Công cụ: Google Autocomplete (`https://suggestqueries.google.com/complete/search?client=firefox&hl=XX&gl=YY&q=...`), Yandex Suggest (`https://suggest.yandex.ru/suggest-ff.cgi?part=...&uil=ru`), WebSearch (**chỉ trả kết quả US**, nên không xem được SERP địa phương thật), WebFetch/curl tới trang đối thủ. Không có Ahrefs/Semrush/GSC, nên mọi mức volume là **ước lượng định tính**, theo cùng thang với `seo/01-keyword-content.md`: XS <100, S 100–500, M 500–2.000, L 2.000–10.000 lượt/tháng. Raw autocomplete lưu ở scratchpad phiên (r1/r2/r3.txt) và được trích nguyên văn dưới đây.*

Nguồn autocomplete dưới đây ghi tắt là [AC hl/gl] = `https://suggestqueries.google.com/complete/search?client=firefox&hl={hl}&gl={gl}&q={query}`, gọi ngày 27/10/2026. [YS] = `https://suggest.yandex.ru/suggest-ff.cgi?part={query}&uil=ru`.

---

## 1. Thị trường nào có nhu cầu thật, và người dùng gõ cụm từ gì (bằng tiếng bản địa)?

### Takeaway
Chỉ **tiếng Tây Ban Nha** và **tiếng Nga** cho autocomplete bản địa rõ intent "tải file từ Baidu Pan". **PT-BR** có tín hiệu yếu: một cụm đuôi dài duy nhất. **TR, AR, FR, DE, PL, IT gần như bằng 0 ở tiếng bản địa**: người dùng các thị trường này gõ tiếng Anh ("baidu pan downloader", "baidu pan download without login"), còn cụm bản địa có chữ "baidu" thì toàn là Baidu Browser / CarLife / Maps / WiFi Hotspot.

### Cited Findings

**Tiếng Tây Ban Nha (es/es, es/mx, es/ar, es/co): tín hiệu mạnh nhất trong nhóm**
- Seed "descargar de baidu" trả về, theo thứ tự: `descargar de baidu sin cuenta`, `descargar de baidu`, `descargar de baidu sin cuenta 2025`, `descargar de pan baidu`, `descargar de pan baidu sin cuenta`, sau đó mới tới nhiễu (`descargar baidu wifi hotspot`, `baidu pc faster`). Kết quả giống hệt ở es/es và es/mx. — [AC es/es; es/mx]
- `descargar archivos de baidu sin cuenta`, `descargar archivos de baidu`, `descargar archivos de pan baidu`. — [AC es/mx]
- Seed "baidu sin cuenta" (es/ar) tự hoàn thành thành 3 cụm "descargar … sin cuenta": người Argentina gõ cùng cụm từ. — [AC es/ar]
- `como descargar de pan baidu` (có và không dấu), `descargar de pan baidu sin cuenta`. — [AC es/mx, seed "cómo descargar de pan baidu"]
- Cụm phụ về tài khoản: `registrarse en baidu desde españa`, `como registrarse en baidu sin telefono`. — [AC es/mx]
- Host khác: `descargar de pan quark`, `descargar archivos de quark` (seed "descargar de quark"). — [AC es/mx]
- **Không có** autocomplete cho `descargar csdn`, `firmware baidu`, `donghua baidu`, `baidu pan mods`. — [AC es/es; es/mx]
- So sánh: `descargar de mega sin limites 2026` có 10 gợi ý, nghĩa là người dùng LatAm đã quen khái niệm "bỏ giới hạn host". Đây là thói quen hành vi; không chứng minh được volume Baidu. — [AC es/mx]

**Tiếng Nga (ru/ru, Google + Yandex): tín hiệu thật nhưng nhỏ**
- Google: `скачать с байду`, `скачать файл с байду`; seed "baidu скачать" → `baidu скачать без регистрации`, `baidu скачать файл`; seed "pan baidu скачать" → `pan.baidu скачать`. — [AC ru/ru]
- Google seed "baidu netdisk" (ru) → `baidu netdisk регистрация`, `baidu netdisk скачать`, `baidu netdisk download without client`. — [AC ru/ru]
- Google seed "как зарегистрироваться в baidu" → `… из россии`, `… без китайского номера`, `… на baidu 2025`. Cụm đăng ký tài khoản lớn hơn cụm tải. — [AC ru/ru]
- Google: `как скачать с csdn net` (seed "скачать с csdn"); `csdn скачать`. Tín hiệu CSDN **duy nhất** trong 9 ngôn ngữ. — [AC ru/ru]
- Google trả rỗng cho `скачать с baidu`, `как скачать с baidu`, `байду облако`, `прошивка baidu`, `скачать с 123pan`. — [AC ru/ru]
- **Yandex** cho nhiều hơn Google: `скачать с baidu без регистрации`, `как скачать файлы с baidu pan`, `как скачать файл с baidu`, `baidu netdisk как зарегистрироваться`, `baidu netdisk на русском`, `baidu netdisk что это`, `baidu netdisk downloader`. — [YS]
- Nhiễu RU: `байду рут`, `baidu carlife`, `baidu translate`; Yandex còn nhầm "байду" thành "Badoo" (`скачать баду`). — [AC ru/ru]; [YS]

**Tiếng Bồ Đào Nha – Brazil (pt/br): yếu**
- Seed "baixar do baidu" → chỉ `como baixar do baidu` liên quan, còn lại là `baixar baidu browser / pc faster / antivirus / spark`. — [AC pt/br]
- `como baixar arquivos do baidu` (gợi ý duy nhất cho seed "baixar arquivos baidu"). — [AC pt/br]
- **Rỗng**: `baidu sem conta`, `baixar csdn`, `baixar do pan baidu`, `firmware baidu`, `como baixar do pan quark`. — [AC pt/br]
- Người dùng BR dùng tiếng Anh nhiều: seed "baidu download" (pt/br) → `baidu download link generator`, `baidu download bypass`, `baidu downloader script tampermonkey`, `baidu downloader online`; seed "baidu netdisk" → `baidu netdisk mod apk`, `baidu netdisk outside china`. — [AC pt/br]

**Tiếng Thổ Nhĩ Kỳ (tr/tr)**
- `baidu indir` → toàn `baidu türkçe indir / browser / keyboard / apk / arama motoru indir`. `baidu dosya indirme`, `pan baidu indirme` và `baidu netdisk nasıl` đều rỗng. — [AC tr/tr]
- Seed "baidu pan" (tr) cho cụm EN: `baidu pan direct download`, `baidu pan download helper`, `baidu pan downloader online`. — [AC tr/tr]

**Tiếng Ả Rập (ar/sa, ar/eg)**
- `تحميل من بايدو` → chỉ có `بايدو كار لايف / سبارك / براوزر / واي فاي`. `تحميل ملفات بايدو` và `بايدو بان` rỗng. Seed `بايدو نت ديسك` tự chuyển sang EN (`baidu netdisk download / apk / mac`). Kết quả này khớp kết luận "Bỏ" của tài liệu SEO-01. — [AC ar/sa; ar/eg]

**Tiếng Pháp (fr/fr)**
- `télécharger baidu` / `télécharger sur baidu` → toàn browser / maps / carlife / wifi hotspot. `baidu sans compte` rỗng. Seed `télécharger pan baidu` bị Google trả **toàn bộ bằng tiếng Anh** (`download pan baidu files without account`, `download pan baidu without account free`, `how to download from pan baidu reddit`). Như vậy người Pháp tìm bằng tiếng Anh. — [AC fr/fr]
- `comment créer un compte baidu`, cùng các gợi ý EN `create baidu account without phone number/outside china`. — [AC fr/fr]

**Tiếng Đức (de/de)**
- `baidu herunterladen` → chỉ có chính nó và `baidu maps herunterladen`. `baidu download ohne`, `von baidu herunterladen` và `baidu netdisk ohne` rỗng. — [AC de/de]
- Seed "baidu pan download" (de) cho danh sách EN dài nhất: `baidu pan download without login`, `… without client`, `baidu pan downloader online free`, `baidu pan download linux`, `pan baidu download no account`, `pan baidu download without app`. Seed "baidu netdisk" (de) → `baidu netdisk svip`, `baidu netdisk pricing`. — [AC de/de]

**Tiếng Ba Lan (pl/pl) và tiếng Ý (it/it)**
- PL: `baidu pobieranie`, `jak pobrać z baidu`, `baidu netdisk jak` đều rỗng. Seed "pan baidu" → EN (`pan baidu download without client`, `pan baidu register`). — [AC pl/pl]
- IT: `scaricare da baidu`, `come scaricare da baidu`, `creare account baidu` rỗng. `scaricare baidu` → chỉ có `baidu maps`. Seed "pan baidu" → EN (`pan baidu free download`, `pan baidu download without client`). — [AC it/it]

**Bảng tóm tắt tín hiệu bản địa**

| Ngôn ngữ | Cụm bản địa có intent tải Pan (autocomplete) | Volume bản địa (ước lượng) | Người dùng có gõ EN không |
|---|---|---|---|
| ES | 8–10 cụm ("descargar de (pan) baidu sin cuenta (2025)", "descargar archivos de baidu…", "como descargar de pan baidu") | S–M (gộp) | Có |
| RU | 6–8 cụm (Google + Yandex: "скачать (файл) с байду", "baidu скачать без регистрации", "как скачать файлы с baidu pan", "как скачать с csdn net") | S (gộp), riêng cụm đăng ký ~S | Có |
| PT-BR | 2 cụm ("como baixar do baidu", "como baixar arquivos do baidu") | XS–S | Có, nhiều |
| TR | 0 | XS | Có |
| AR | 0 | XS | Có (ít) |
| FR | 1 cụm về tài khoản ("comment créer un compte baidu") | XS | Có |
| DE | 0 | XS | Có (danh sách EN dài nhất) |
| PL | 0 | XS | Có |
| IT | 0 | XS | Có |

### Inferences
- Autocomplete ES vẫn hiện "sin cuenta 2025" chứ chưa có "2026" (EN đã có "2026", theo SEO-01). Điều này gợi ý volume ES nhỏ hơn EN khoảng một bậc, nhưng nhu cầu ổn định nhiều năm.
- Ở FR/DE/PL/IT/TR, Google phục vụ gợi ý tiếng Anh cho cả seed bản địa. Một trang EN tốt, cộng hreflang `x-default`, đã phủ phần lớn nhu cầu; bản dịch bản địa khó có volume riêng đủ bù chi phí.
- Ở RU, cụm "đăng ký Baidu từ Nga / không cần số Trung Quốc" có vẻ lớn hơn cụm "tải". Nội dung RU nên bắt đầu bằng "регистрация vs не регистрироваться" rồi mới dẫn sang tool.

### Gaps
- Không có volume tuyệt đối (thiếu Ahrefs/Semrush/Keyword Planner/Wordstat). Yandex Wordstat cần đăng nhập nên không lấy được.
- Autocomplete có ngưỡng ẩn: cụm rỗng không có nghĩa volume = 0, chỉ là dưới ngưỡng hiển thị.

---

## 2. Use-case nào tạo ra nhu cầu ở từng thị trường?

### Takeaway
Bằng chứng use-case **bản địa** rất mỏng. Tín hiệu rõ nhất: **RU = kỹ thuật/phần cứng** (bo mạch mua trên AliExpress, firmware, qna.habr) cộng CSDN. **ES/PT = chưa xác định được** use-case qua forum. Các tín hiệu quốc tế bằng tiếng Anh (AI dataset/weights, firmware module 4G, mod game) chắc chắn có người dùng từ các nước này tham gia, nhưng họ hỏi bằng tiếng Anh.

### Cited Findings
- RU: một người dùng mua bo mạch phát triển trên AliExpress, tài liệu/firmware chỉ có trên pan.baidu, đăng ký thì không nhận được SMS: "Файлообменник pan.baidu как скачать? … купил отладочную плату на али; Зарегистрировать не дает, смс с кодом не приходит". — [qna.habr.com/q/530967](https://qna.habr.com/q/530967)
- RU: một thread hỏi file sharing với Trung Quốc. Có người nói không tìm được cách đăng ký hợp pháp, các dịch vụ SMS trung gian là "жульё", và cách tải qua trung gian thì "так себе". — [qna.habr.com/q/1250644](https://qna.habr.com/q/1250644)
- RU: trên Habr có người dùng (Gagat) chào dịch vụ tải pan.Baidu trả phí qua Telegram và website. Bình luận sau đó báo site không còn hoạt động. Nghĩa là **thị trường RU đã có cầu trả tiền nhưng thiếu nhà cung cấp ổn định**. — [qna.habr.com/user/Gagat/answers](https://qna.habr.com/user/Gagat/answers); [comments](https://qna.habr.com/user/Gagat/comments)
- RU: người dùng nhờ "ai có thể lấy file pan.baidu.com/s/… rồi upload lên file host" để lấy firmware, và được trả lời "Перепаковал и залил на мегу". Đây là mô hình "tải hộ" thủ công. — [qna.habr.com/q/652627](https://qna.habr.com/q/652627) (trích qua tóm tắt WebSearch; chưa mở trực tiếp)
- RU: bài cũ trên Habr "Китайские терабайты…" (về dung lượng Baidu miễn phí) cho thấy cộng đồng tech RU biết Baidu Pan từ lâu. — [habr.com/en/sandbox/76482](https://habr.com/en/sandbox/76482)
- Quốc tế (EN, firmware/GSM-adjacent): người dùng diễn đàn Quectel không tải được firmware module 4G từ link Baidu, vì đăng ký báo "không hoạt động từ nước ngoài" và máy công ty chặn client Baidu. — [forums.quectel.com/t/ep06-e-mini-pcie-firmware-request/12223](https://forums.quectel.com/t/ep06-e-mini-pcie-firmware-request/12223); [forums.quectel.com/t/rm502q-gl-firmware/36663](https://forums.quectel.com/t/rm502q-gl-firmware/36663)
- Quốc tế: Hovatek (forum sửa điện thoại/flash ROM, Nigeria) có thread firmware tablet Teclast chỉ có link Baidu, và moderator dẫn sang thread hướng dẫn tải Baidu. — [hovatek.com/forum/thread-25916.html](https://www.hovatek.com/forum/thread-25916.html); [hovatek.com/forum/thread-49038.html](https://www.hovatek.com/forum/thread-49038.html)
- Quốc tế (AI): thread HF Forums 2026 về weights/dataset trên pan.baidu, Quark, 123pan (123pan bắt buộc login). — [HF 180705](https://discuss.huggingface.co/t/how-to-download-pan-baidu-com-or-quark-pan-weights-without-a-chinese-account/180705); [HF 180744](https://discuss.huggingface.co/t/123pan-123-weights-datasets-now-need-a-chinese-login-how-to-download-them-without-one-2026/180744)
- Quốc tế (3D/asset): forum D5Render có thread chia sẻ asset từ forum Trung Quốc và nhắc tới việc tải pan.baidu không cần tài khoản. — [forum.d5render.com/t/assets-from-d5render-chinese-forum/56045](https://forum.d5render.com/t/assets-from-d5render-chinese-forum/56045)
- Autocomplete gợi ý use-case ở BR/TR: `baidu netdisk mod apk` (pt/br, tr/tr), tức là quan tâm bản mod của app hơn là file; `baidu cloud magnet assistant plugin` (pt/br). — [AC pt/br; tr/tr]
- Tìm forum ES (BandaAncha, ElOtroLado) về "baidu enlace no puedo descargar" chỉ ra thread firmware/mod cũ **không liên quan Baidu**. — [WebSearch, ví dụ elotrolado.net](https://www.elotrolado.net/hilo_firmwares-downgrades-versiones-pandora_458768_s100)
- Tìm "4pda pan.baidu" không ra thread 4PDA nào được index liên quan tới Baidu Pan. (WebSearch US-only không index tốt 4PDA, nên đây là giới hạn công cụ chứ không phải bằng chứng phủ định.) — [WebSearch 27/10/2026]

### Inferences
- RU: use-case khả dĩ nhất là **dev board / phần cứng AliExpress, firmware (thiết bị Trung Quốc, có thể cả đầu Android ô tô), tài liệu CSDN cho kỹ sư**. Persona: kỹ thuật, quen trả tiền cho dịch vụ trung gian, nhưng nghi ngờ lừa đảo. Cần chứng minh độ tin cậy bằng speed-test, status, cổng thanh toán được người RU dùng (lưu ý hạn chế thanh toán quốc tế với Nga; cần kiểm tra lại phía billing).
- ES/LatAm: hành vi "descargar de mega sin límites" cho thấy persona tiêu dùng nội dung (game, anime, mod). Use-case Baidu nhiều khả năng là mod/asset game và anime/donghua, nhưng **chưa có bằng chứng trực tiếp**. Nên kiểm tra thêm bằng thread Discord/Reddit tiếng Tây Ban Nha.
- GSM/firmware (Hovatek, Quectel) chủ yếu bằng tiếng Anh, kể cả người dùng châu Phi/Trung Đông/Thổ. Đây là lý do nên làm trang EN `/guides/download-firmware-from-baidu-pan` thay vì dịch sang AR/TR.

### Gaps
- Không xác minh được 4PDA, các forum GSM tiếng Ả Rập/Thổ (vd. gsmhosting, forum Thổ "gsmturkey"…) hay forum Brazil (Clube do Hardware, Adrenaline), do WebSearch chỉ có index US và không trả các thread đó.
- Không có dữ liệu Discord/Telegram (nơi cộng đồng mod/anime ES/PT hoạt động chính).

---

## 3. Cái gì đang rank trong các SERP đó?

### Takeaway
Ở cả 9 ngôn ngữ, **đối thủ đã localize sẵn**: baidulinkdownloader có trang cho **cả 9 ngôn ngữ (es, pt, ru, tr, fr, de, it, pl, ar)**, erranium có es/pt/ru/de/fr, baidudl có es/ru, baidufast có es/ru. Phần còn lại của SERP (theo index US) là multcloud (có bản PT), HF Forums (bài PR), xiaoz.org, Hovatek, qna.habr. Không thấy blog bản địa chất lượng hay video bản địa nổi bật.

### Cited Findings
- Kiểm tra bằng curl ngày 27/10/2026 (HTTP 200 + `<title>`):
  - baidulinkdownloader.com/es "Cómo descargar desde Baidu sin cuenta", /pt "Como baixar do Baidu sem conta", /ru "Как скачать с Baidu без аккаунта", /tr "Hesap olmadan Baidu'dan nasıl indirilir", /fr "Comment télécharger depuis Baidu sans compte", /de "Wie man von Baidu ohne Konto herunterlädt", /it "Come scaricare da Baidu senza account", /pl "Jak pobrać z Baidu bez konta", /ar "كيفية التحميل من Baidu بدون حساب". — [baidulinkdownloader.com/es](https://baidulinkdownloader.com/es) (và các đường dẫn tương ứng)
  - baidu.erranium.com/es, /pt, /ru, /de, /fr: "…de Baidu, Quark, 123 Pan y CSDN sin cuenta". — [baidu.erranium.com/es](https://baidu.erranium.com/es)
  - baidudl.com/es, /ru có trang; **/pt trả 404**. — [baidudl.com/es](https://baidudl.com/es); [baidudl.com/ru](https://baidudl.com/ru)
  - baidufast.com/es "Descargar de Baidu Pan — gratis hasta 150MB, sin cuenta", /ru "Скачать с Baidu Pan — бесплатно до 150MB, без аккаунта". — [baidufast.com/es](https://baidufast.com/es); [baidufast.com/ru](https://baidufast.com/ru)
- Trang ES của baidulinkdownloader chỉ localize một phần: còn sót tiếng Anh ở "Why Choose Our Service", footer "Services/All rights reserved". — [WebFetch baidulinkdownloader.com/es](https://baidulinkdownloader.com/es)
- SERP "como baixar arquivos do baidu pan" (index US): multcloud PT (2 URL + trang support), quarkdownloader (beehiiv, PR), xiaoz.org, HF Forums 180705, multcloud JP. Bài multcloud PT hướng tới **người đã có tài khoản**, không giải quyết intent "sem conta". — [multcloud.com/pt/tutorials/como-baixar-do-pan-baidu-1003-tc.html](https://www.multcloud.com/pt/tutorials/como-baixar-do-pan-baidu-1003-tc.html)
- SERP "descargar de baidu sin cuenta 2026" (index US): gần như không có trang ES liên quan. Kết quả gồm trang cổ phiếu Baidu, forum D5Render, spam "百度网盘不限速破解版" trên domain bị hack (alularv.imexhs.com), HF Forums 180125. — [WebSearch 27/10/2026](https://discuss.huggingface.co/t/how-to-download-from-baidu-pan-pan-baidu-com-without-a-chinese-account-2026-notes-for-datasets-a-free-fetcher/180125)
- SERP "как скачать файлы с baidu pan без регистрации" (index US): qna.habr q/530967, xiaoz.org (2016), HF 180705, cnx-software (2015, BaiduExporter), forum.rclone.org (OpenList/WebDAV), HF 180125. — [qna.habr.com/q/530967](https://qna.habr.com/q/530967); [forum.rclone.org/t/how-to-download-from-baidu/54326](https://forum.rclone.org/t/how-to-download-from-baidu/54326)
- SERP "baidu pan indirme nasıl yapılır" (index US): không có trang TR nào. Gồm pypi pyBaiduPan, xiaoz.org, HF, Hovatek thread 49038. — [hovatek.com/forum/thread-49038.html](https://www.hovatek.com/forum/thread-49038.html)
- Hovatek thread 2017 (rank EN và ES): ghi chú đã cập nhật rằng các cách không cần tài khoản không còn chạy. — [hovatek.com/forum/printthread.php?tid=20892](https://www.hovatek.com/forum/printthread.php?tid=20892)
- titikey.com/es (bài ngày 21/7/2026, site bán license IDM) nói IDM không tự tải Baidu được và khuyên dùng script Tampermonkey. Đây là một trong số ít trang ES "tươi". — [titikey.com/es/article/tihfq8-j1228](https://www.titikey.com/es/article/tihfq8-j1228)
- Không tìm thấy video YouTube ES/PT nổi bật qua WebSearch. SEO-01 trước đó ghi nhận một video PT 2026 (youtube.com/watch?v=3o14U30ji6U). — [SEO-01](/home/user/xcrawl/docs/research/seo/01-keyword-content.md)

### Inferences
- SERP bản địa thật (google.es/.com.mx/.ru, Yandex) **chưa được quan sát**. Dựa trên index US và việc 4 đối thủ đều có trang /es /ru, khả năng cao top 10 ES/RU là trang đối thủ + multcloud + YouTube + forum. Độ khó **Dễ–Vừa**: các trang đối thủ là landing ngắn, localize chưa trọn.
- Cạnh tranh RU có điểm riêng: Yandex có thể ưu tiên trang có tín hiệu địa phương (habr, 4PDA, Pikabu). Một bài trả lời thật trên qna.habr hoặc Pikabu, có disclosure rõ ràng, có thể giá trị hơn trang tool đơn thuần.
- Với TR/FR/DE/PL/IT/AR, đối thủ (baidulinkdownloader) đã có trang, nhưng không có autocomplete bản địa để đẩy traffic. Các trang đó nhiều khả năng gần như không có traffic. Việc ta không làm các ngôn ngữ này không tạo ra thua thiệt đáng kể.

### Gaps
- Cần kiểm tra SERP địa phương bằng trình duyệt ẩn danh + VPN theo geo (ES/MX/AR/BR/RU) và Yandex.ru. Phiên này không làm được vì WebSearch chỉ trả kết quả US.
- Không đo được thứ hạng thực của các trang /es /ru của đối thủ.

---

## 4. Xếp hạng cơ hội (nhu cầu × độ yếu cạnh tranh) và khuyến nghị localize

### Takeaway
**Localize trước: ES (một bản dùng chung cho Tây Ban Nha và LatAm). Tiếp theo: RU (kèm nội dung CSDN và đăng ký). PT-BR: làm bản rút gọn (tool + 1 pillar), vì chi phí thấp khi đã có ES. Bỏ: TR, AR, FR, DE, PL, IT**, để trang EN phủ.

### Cited Findings
(Dựa trên các phát hiện ở mục 1–3; điểm số là **ước lượng** của người nghiên cứu.)

| Hạng | Thị trường | Nhu cầu bản địa (1–5) | Độ yếu cạnh tranh (1–5, 5 = rất yếu) | Cơ hội | Khuyến nghị |
|---|---|---|---|---|---|
| 1 | **ES (es-ES + LatAm)** | 4: nhiều cụm "sin cuenta", có ở es/es, es/mx, es/ar | 3: 4 đối thủ có /es nhưng là landing mỏng, SERP chủ yếu là spam/PR | **Cao nhất** | Localize đầy đủ: tool + pricing + pillar "Cómo descargar de Baidu Pan sin cuenta (2026)" + Quark + đăng ký |
| 2 | **RU** | 3: Google + Yandex, có CSDN và đăng ký | 3: đối thủ có /ru; SERP là qna.habr và bài cũ; có tiền lệ dịch vụ trả phí đã chết | **Trung bình–Cao** | Localize tool + pillar + "регистрация в Baidu из России vs без регистрации" + "как скачать с csdn"; tham gia qna.habr có disclosure. Kiểm tra trước khả năng thanh toán |
| 3 | **PT-BR** | 2: chỉ "como baixar (arquivos) do baidu"; BR gõ EN nhiều | 4: baidudl /pt 404; SERP là multcloud (sai intent) | **Trung bình–Thấp** | Bản rút gọn: tool + 1 pillar; làm sau ES (tận dụng cấu trúc) |
| 4 | TR | 1 | (không có SERP bản địa) | Thấp | Bỏ, EN phủ |
| 5 | DE | 1 (bản địa); EN rất giàu | – | Thấp | Bỏ; tối ưu trang EN cho "without login/without client/linux" |
| 6 | FR | 1 | – | Thấp | Bỏ (có thể thêm 1 FAQ "créer un compte baidu" sau) |
| 7 | PL / IT | 0 | – | Rất thấp | Bỏ |
| 8 | AR | 0: chỉ browser/carlife | – | Rất thấp | Bỏ (xác nhận lại SEO-01) |

#### Nhật ký 3 vòng nghiên cứu (mỗi vòng thêm được gì)
- **Vòng 1 – khám phá rộng (39 lần gọi autocomplete, 9 ngôn ngữ):** xác định ngay ES và RU có cụm bản địa, PT-BR chỉ 1–2 cụm, còn TR/AR/FR/DE/PL/IT rỗng hoặc toàn nhiễu (browser, carlife, maps, wifi). Phát hiện seed "baidu pan" trả gợi ý EN như nhau ở mọi geo. — [AC, r1]
- **Vòng 2 – xác minh và mở rộng (41 autocomplete + 7 Yandex + 6 WebSearch):** Yandex thêm các cụm RU mà Google không có ("скачать с baidu без регистрации", "как скачать файлы с baidu pan", "baidu netdisk как зарегистрироваться"). Google FR trả gợi ý EN cho seed bản địa; DE có danh sách EN dài nhất. ES có thêm Quark; RU có thêm CSDN. SERP (index US) cho thấy hầu như không có nội dung bản địa ES/TR, còn RU chỉ có qna.habr. — [AC, r2]; [YS]
- **Vòng 3 – deep-dive ES/RU/PT (30 autocomplete use-case/tài khoản + 6 WebSearch + kiểm tra 19 URL đối thủ):** phát hiện quan trọng nhất là **đối thủ đã localize 9/9 ngôn ngữ** (baidulinkdownloader), nên lợi thế "người đi đầu" không còn; cạnh tranh phải bằng chất lượng. RU: thêm use-case dev board/firmware AliExpress, tiền lệ dịch vụ trả phí qua Telegram (đã chết), cụm "зарегистрироваться в baidu из россии / без китайского номера". ES: thêm cụm "registrarse en baidu sin telefono". Use-case ES/PT vẫn chưa xác minh được. — [AC, r3]; [qna.habr.com/q/530967](https://qna.habr.com/q/530967); [qna.habr.com/user/Gagat/answers](https://qna.habr.com/user/Gagat/answers)

#### Cụm từ khóa đề xuất cho các thị trường làm

**ES (một trang es dùng chung, hreflang es + es-419 nếu cần):**
- Chính: `descargar de baidu sin cuenta`, `descargar de pan baidu sin cuenta`, `descargar archivos de baidu (sin cuenta)`, `como descargar de pan baidu`
- Biến thể năm: `descargar de baidu sin cuenta 2026` (autocomplete hiện mới có 2025, nên trang có "2026" sẽ đón trước)
- Phụ: `descargar de pan quark`, `registrarse en baidu sin telefono`, `registrarse en baidu desde españa`
- Không có tín hiệu: CSDN tiếng Tây Ban Nha (không làm riêng)

**RU:**
- Chính: `скачать с байду`, `скачать файл с байду`, `baidu скачать без регистрации`, `как скачать файлы с baidu pan` (Yandex), `pan.baidu скачать`
- Đăng ký: `как зарегистрироваться в baidu из россии`, `… без китайского номера`, `baidu netdisk регистрация`, `baidu netdisk как зарегистрироваться`, `baidu netdisk что это`
- CSDN: `как скачать с csdn net`, `csdn скачать`
- Tránh: `байду рут`, `baidu carlife`; cẩn thận Yandex nhầm sang "Badoo"

**PT-BR (rút gọn):** `como baixar do baidu`, `como baixar arquivos do baidu`, kèm các cụm EN người BR gõ: `baidu download link generator`, `baidu netdisk outside china`.

### Inferences
- Lợi thế khác biệt (SVIP thật, speed-test công khai) áp dụng được cho ES/RU với chi phí dịch thấp: dịch tool page, pricing, 1 pillar, 2–3 cluster. Không cần pSEO bản địa cho tới khi GSC cho thấy traffic.
- Volume ES/RU mỗi thị trường ước tính chỉ bằng khoảng 5–15% EN (dựa trên số cụm autocomplete và việc chưa có biến thể "2026"). Đây là thị trường phụ: đáng làm vì cạnh tranh mỏng, nhưng không nên ưu tiên hơn EN/VI/KO/JA trong SEO-01.
- Thứ tự gợi ý trong lịch SEO-01: ES ở tuần 9 (giữ nguyên), RU nâng lên cùng đợt với ES nếu thanh toán khả thi, PT-BR làm sau.

### Gaps
- Chưa có volume thật. Cần Keyword Planner (ES/MX/AR/BR) và Yandex Wordstat (RU) để xác nhận thứ hạng ES > RU > PT.
- Chưa kiểm tra khả năng thanh toán và ràng buộc pháp lý khi phục vụ khách hàng ở Nga (ngoài phạm vi SEO, nhưng ảnh hưởng trực tiếp tới quyết định localize RU).
- Use-case ES/PT chưa được xác minh qua forum/Discord bản địa.

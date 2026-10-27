# Bản đồ từ khóa bản địa châu Á (VI, KO, JA, ID, TH, MS, zh-TW/HK) cho dịch vụ tải hộ Baidu Pan / CSDN / host Trung Quốc

*Ngày thu thập: 27/10/2026. Người viết: researcher (subagent). Xây trên `seo/01-keyword-content.md` (28/09/2026) và `seo/02-competitor-teardown.md`, có kiểm chứng lại và đào sâu hơn.*

**Phương pháp và giới hạn (đọc trước):**
- **Autocomplete Google**: gọi endpoint `https://suggestqueries.google.com/complete/search?client=firefox&hl=<lang>&gl=<geo>&q=<seed>` cho khoảng 200 seed, ngày 27/10/2026. Cặp hl/gl: vi/vn, ko/kr, ja/jp, id/id, th/th, ms/my, zh-TW/tw, zh-HK/hk. Dữ liệu thô nằm trong scratchpad của phiên này và không được commit.
- **Autocomplete Bing**: `https://api.bing.com/osjson.aspx?query=<seed>&mkt=<vi-VN|ko-KR|ja-JP|zh-TW|zh-HK|id-ID|th-TH>`, dùng để đối chiếu chéo.
- **Naver** (`ac.search.naver.com`) chỉ trả về 1 gợi ý. **Yahoo! JAPAN** API đòi appid nên không lấy được.
- **SERP thật theo từng quốc gia không lấy được**: DuckDuckGo trả 202 (challenge), Bing trả trang JS. WebSearch của phiên này chỉ chạy ở US. Vì vậy, nhận định về thành phần SERP dựa trên: (a) WebSearch (US), (b) mục SERP trong file 01/02, (c) kiểm tra trực tiếp trang đối thủ (hreflang, title, sitemap, schema date) bằng curl.
- **Volume đều là ƯỚC LƯỢNG TƯƠNG ĐỐI.** Không có Ahrefs, Semrush, Keyword Planner hay GSC. Thang tương đối trong file này:
  - ★★★★★ = autocomplete sâu và nhiều biến thể, có modifier năm 2026, modifier cộng đồng (디시/ptt/voz) và modifier thương mại.
  - ★ = gần như không có gợi ý bản địa.
- "Autocomplete có" nghĩa là có người gõ đủ nhiều để Google gợi ý. Nó **không** cho ra con số volume.

---

## 1. Bản đồ từ khóa theo từng ngôn ngữ (cụm, intent, cách gõ thật, nhu cầu tương đối)

### Takeaway
Cả 7 ngôn ngữ đều có người tìm cách tải từ Baidu Pan. Chỉ **VI, KO và zh-TW/HK** có cụm từ khóa bản địa vừa sâu vừa mang intent thương mại rõ (tải hộ / 대행 / 代下載 / mua–thuê–구매–購買 SVIP). **JA** có intent rõ nhưng hẹp hơn. **ID, TH, MS** chủ yếu gõ tiếng Anh pha tiếng bản địa, phần bản địa thuần rất mỏng.

### Cited Findings

#### 1.1 Tiếng Việt (vi/vn) – nhu cầu tương đối ★★★★★

Autocomplete Google hl=vi&gl=vn, ngày 27/10/2026 ([endpoint](https://suggestqueries.google.com/complete/search?client=firefox&hl=vi&gl=vn&q=t%E1%BA%A3i%20file%20baidu)):

| Cụm | Truy vấn thật (autocomplete trả về) | Intent | Nhu cầu tương đối (ước lượng) |
|---|---|---|---|
| A. Tải file không cần tài khoản | `tải file baidu không cần tài khoản`, `tải file từ baidu không cần tài khoản`, `tải pan baidu không cần tài khoản`, `tải baidu không cần tài khoản`, `tải file baidu 2025`, `tải file baidu voz`, `tải file pan baidu`, `tải link pan baidu`, `cách tải file baidu`, `hướng dẫn tải file trên baidu`, `cách tải file trên pan baidu`, `cách tải file từ pan baidu` | I→T | ★★★★★ (gợi ý số 1 cho seed "tải file baidu"; Bing vi-VN xác nhận cùng thứ tự) |
| B. Tải hộ (thuê dịch vụ) | `tải hộ baidu`, `tải hộ pan baidu`, `tải hộ file baidu` (seed "tải hộ file" chỉ ra đúng 1 gợi ý là "tải hộ file baidu") | T (thương mại) | ★★★ |
| C. Tài khoản / SVIP | `tài khoản baidu`, `tài khoản baidu free`, `mua tài khoản baidu`, `mua tài khoản pan baidu`, `thuê tài khoản baidu`, `thuê tài khoản baidu netdisk`, `cho thuê tài khoản baidu`, `share tài khoản baidu`, `tạo tài khoản baidu 2025/2026`, `tạo tài khoản baidu bằng số điện thoại việt nam`, `tạo tài khoản baidu bằng gmail`, `mua svip baidu`, `tài khoản svip baidu`, `svip pan baidu`, `baidu svip paypal`, `baidu svip price` | T/C + I | ★★★★ (cụm lớn nhất về số biến thể) |
| D. Get link / leech | `get link pan baidu`, `get link pan baidu 2026`, `get link pan baidu 2025`, `leech baidu`, `leech pan baidu`, `leech file baidu`, `download link pan baidu` | T | ★★★ ("get link pan baidu 2026" mới xuất hiện so với file 01) |
| E. CSDN | `tải file csdn`, `tài khoản csdn`, `mua tài khoản csdn`, `tạo tài khoản csdn`, `csdn là gì` | T/I | ★★ |
| F. Wenku / tài liệu | `tải tài liệu trên baidu`, `cách tải tài liệu trên baidu`. Seed `baidu wenku` chỉ ra gợi ý tiếng Anh: `baidu wenku downloader`, `baidu wenku free download`, `wenku baidu com download pdf` | T/I | ★★ (có intent, chưa có cách gõ VI chuẩn) |
| G. Host khác | `tải file quark`, `tải file trên quark`, `tải file 123pan`. Ra gợi ý tiếng Anh: `quark pan downloader`, `123pan downloader`, `123pan free account`. **Không có gợi ý nào** cho `tải file lanzou` hay `tải file aliyun` | T | ★★ Quark/123pan; ★ Lanzou/Aliyun |
| H. Tiếng Anh do người VN gõ | `pan baidu downloader (online)`, `pan baidu download link generator`, `pan baidu com download without account free`, `baidu downloader 2026`, `baidu link downloader` | T | ★★★★ (người VN gõ cả tiếng Anh) |
| Nhiễu (intent tải app) | `tải baidu`, `tải baidu về máy tính`, `tải baidu translate`, `tải baidu map`, `tải baidu apk`, `tải baidu về điện thoại` | App/Nav | Loại bỏ, chỉ giữ nhánh "tải baidu không cần tài khoản" |

- **Truy vấn trong đề bài không có autocomplete** (có thể có người gõ nhưng không đủ ngưỡng để Google gợi ý): `thuê tài khoản svip baidu`, `mua tài khoản svip baidu`, `tải tài liệu baidu wenku`, `cách tải file từ pan.baidu.com`, `baidu tải chậm`, `tải file baidu tốc độ cao`, `mã trích xuất baidu`, `dịch vụ tải file baidu`, `tải file baidu trên điện thoại`, `tải file baidu bằng idm`, `tải file quark không cần tài khoản` — [Google autocomplete hl=vi](https://suggestqueries.google.com/complete/search?client=firefox&hl=vi&gl=vn&q=baidu%20t%E1%BA%A3i%20ch%E1%BA%ADm)
- Bing vi-VN xác nhận cụm A: `tải file baidu | tải file baidu không cần tài khoản | tải file từ baidu | cách tải file từ baidu không cần tài khoản`. Seed "tải hộ" trên Bing bị nhiễu hoàn toàn ("tải hộp quà", "tải bộ office") — [Bing osjson vi-VN](https://api.bing.com/osjson.aspx?query=t%E1%BA%A3i%20file%20baidu&mkt=vi-VN)
- Seed "csdn" ở VN lẫn với nhiễu xổ số/thể thao ("xsmn", "csdn trực tiếp", "csdn aoe"). Chỉ dùng cụm "tải file csdn" / "tài khoản csdn" — [Google autocomplete](https://suggestqueries.google.com/complete/search?client=firefox&hl=vi&gl=vn&q=csdn)

#### 1.2 Tiếng Hàn (ko/kr) – nhu cầu tương đối ★★★★★

Autocomplete Google hl=ko&gl=kr ([endpoint](https://suggestqueries.google.com/complete/search?client=firefox&hl=ko&gl=kr&q=%EB%B0%94%EC%9D%B4%EB%91%90%20%EB%8B%A4%EC%9A%B4%EB%A1%9C%EB%93%9C)):

| Cụm | Truy vấn thật | Intent | Nhu cầu tương đối |
|---|---|---|---|
| A. Tải không cần đăng ký/đăng nhập | `바이두 회원가입 없이 다운`, `바이두 회원가입 없이 다운 2026`, `바이두 회원가입 없이 다운 디시`, `바이두 회원가입 없이 다운 크롬`, `바이두 계정 없이 다운`, `바이두 넷디스크 설치 없이`, `바이두 넷디스크 설치없이 다운로드`, `바이두 넷디스크 가입없이`, `바이두 클라우드 가입없이 다운로드`, `바이두 클라우드 비 로그인 다운로드`. Bing ko-KR thêm `바이두 다운로드 로그인 없이` | I→T | ★★★★★ (có modifier năm 2026) |
| B. **Tải hộ (대행)** | `바이두 다운로드 대행` (gợi ý thứ 4 cho seed "바이두 다운로드") | **T thương mại rõ** | ★★★ |
| C. Lỗi/tốc độ | `바이두 다운로드 속도 디시`, `바이두 다운로드 안됨`, `바이두 다운로드 실패`, `바이두 다운 안됨`, `바이두 클라우드 속도`. Bing: `바이두 다운로드 가속` | I (đau → T) | ★★★★ (Naver cũng chỉ gợi ý "바이두 다운로드 속도") |
| D. Cách làm | `바이두 클라우드 다운로드 방법`, `바이두 파일 다운로드 방법`, `모바일 바이두 다운로드 방법`, `바이두 넷디스크 사용법`, `바이두 링크 다운로드`, `바이두 공유 링크`, `판바이두 다운` | I | ★★★★ |
| E. Đăng ký (đau) | `바이두 회원가입 막힘`, `바이두 회원가입 가상번호`, `바이두 가입 안됨`, `바이두 가입 요청 이 너무 많습니다`, `바이두 가입 더쿠`, `바이두 가입 2026`, `바이두 계정 만들기 2026`, `바이두 계정 동결` | I (đau → T) | ★★★★ |
| F. SVIP/thanh toán/mua tài khoản | `바이두 svip 결제`, `바이두 svip 구매`, `바이두 svip 결제 방법`, `바이두 svip 쿠폰`, `바이두 svip vip 차이`, `바이두 svip 속도`, `바이두 넷디스크 결제`, `바이두 계정 구매` | C/T | ★★★ |
| G. Quark/123 | `쿼크 다운로드 (방법)`, `쿼크 클라우드 다운로드/가입/디시`, `쿼크 드라이브 다운로드/가입/사용법`, `중국 쿼크 가입`, `123 클라우드 가입`, `중국 123 클라우드` | I/T | ★★ |
| Không có gợi ý | `csdn 다운로드`, `바이두 원쿠`, `알리 클라우드 다운로드`. `바이두 문고` chỉ có chính nó | – | ★ (CSDN/Wenku gần như không có nhu cầu ở KR) |

- Modifier cộng đồng xuất hiện dày (`디시` = dcinside, `더쿠` = theqoo) — [Google autocomplete ko](https://suggestqueries.google.com/complete/search?client=firefox&hl=ko&gl=kr&q=%EB%B0%94%EC%9D%B4%EB%91%90%20%ED%9A%8C%EC%9B%90%EA%B0%80%EC%9E%85)
- Từ thường dùng cho dịch vụ là **바이두 클라우드** và **바이두 넷디스크**. "판바이두" (pan baidu phiên âm) ít hơn nhiều — cùng nguồn.

#### 1.3 Tiếng Nhật (ja/jp) – nhu cầu tương đối ★★★★

| Cụm | Truy vấn thật | Intent | Nhu cầu |
|---|---|---|---|
| A. Không tài khoản/đăng ký | `baidu ダウンロード アカウントなし`, `baidu ダウンロード 登録 なし`, `baidu 登録 せずにダウンロード`, `baidu ログインなし ダウンロード`, `アカウント無しで百度 baidu pan から ダウンロード`, `百度网盘 登録なし`. Bing ja-JP thêm `百度网盘登録なしダウンロード (2024)` | I→T | ★★★★ |
| B. Cách làm | `baidu ダウンロード方法`, `百度网盘 ダウンロード方法`, `百度 网 盘 ダウンロード 方法`, `pan baidu ダウンロード方法`, `baidu pan から ダウンロード`, `百度网盘 ファイル ダウンロード` | I | ★★★★ |
| C. Chậm | `baidu ダウンロード 遅い`, `百度网盘 ダウンロード 遅い` | I | ★★★ |
| D. **Tải hộ (代行)** | `baidu ダウンロード 代行` (seed "baidu 代行" chỉ ra đúng gợi ý này) | **T** | ★★ |
| E. Đăng ký/an toàn | `baidu 登録 日本`, `baidu 登録 危険`, `baidu 登録 電話番号`, `百度网盘 日本 登録できない`, `百度 网盘 日本 登録 2025`, `baidu netdisk 安全 性`, `百度网盘 安全验证 空白 win10/win11` | I | ★★★ |
| F. Quark/123 | `夸克网盘 ダウンロード/登録/日本 登録/使い方`, `pan.quark ダウンロード`, `123pan ダウンロード` | I/T | ★★ (seed "quark drive" bị nhiễu bởi từ khóa Pokémon) |
| Không có | `百度网盘 svip`, `百度网盘 代行`, `百度网盘 海外`, `csdn ダウンロード`. `百度文库` chỉ có `百度文库 とは / 日本语` | – | ★ |

- Nguồn: [Google autocomplete ja](https://suggestqueries.google.com/complete/search?client=firefox&hl=ja&gl=jp&q=baidu%20%E3%83%80%E3%82%A6%E3%83%B3%E3%83%AD%E3%83%BC%E3%83%89) và [Bing ja-JP](https://api.bing.com/osjson.aspx?query=%E7%99%BE%E5%BA%A6%E7%BD%91%E7%9B%98%20%E3%83%80%E3%82%A6%E3%83%B3%E3%83%AD%E3%83%BC%E3%83%89&mkt=ja-JP).
- Người Nhật gõ **百度网盘 (giản thể)** nhiều hơn 百度網盤: seed `百度網盤 ダウンロード` chỉ trả về chính nó.
- Bằng chứng nhu cầu tải hộ có trả tiền ở Nhật: một job trên Lancers năm 2020 thuê người có tài khoản Baidu tải file từ 百度パン, với lý do không đăng ký được tài khoản Baidu mới từ Nhật — [Lancers](https://www.lancers.jp/work/detail/3200728). Dữ liệu này cũ (2020).

#### 1.4 Tiếng Trung phồn thể – Đài Loan / Hồng Kông (zh-TW/tw, zh-HK/hk) – nhu cầu tương đối ★★★★★ (sâu bất ngờ)

| Cụm | Truy vấn thật | Intent | Nhu cầu |
|---|---|---|---|
| A. Tải xuống (theo địa phương/cộng đồng) | `百度網盤 下載 台灣`, `百度網盤 下載 香港`, `百度網盤 下載 ptt`, `百度網盤 下載 dcard`, `百度網盤 下載 蝦皮`, `百度 下載 檔案`, `百度 下載 教學`, `百度 下載 免安裝 ptt`, `百度雲盤 下載 台灣` | I/T | ★★★★★ |
| B. Không đăng nhập / không cài app | Bing zh-TW: `百度網盤 下載 免登入`, `百度網盤 下載器`, `百度網盤 下載速度`, `百度網盤下載加速`. Bing zh-HK: `百度網盤 免登入下載`, `百度網盤 免安裝`, `百度網盤直接下載`. Google: `百度網盤 免安裝教學`, `百度網盤 免安裝ptt`, `百度網盤 直接下載 ptt`, `百度網盤 加速 台灣`, `123雲盤免登入` | T | ★★★★ (Bing có, Google có biến thể 免安裝/直接下載) |
| C. **Thương mại: mua/thanh toán/đặt hộ** | `百度網盤 台灣購買`, `百度網盤 台灣 付款`, `百度網盤 vip 台灣`, `百度網盤 svip 台灣/香港/ptt`, `百度網盤 超級會員 台灣/香港`, `百度網盤 會員 香港/ptt`, `百度 網 盤 代 下載`, `百度網盤 下載 蝦皮` (蝦皮 = Shopee: người dùng tìm người bán dịch vụ trên Shopee) | **T/C** | ★★★ |
| D. Đăng ký (đau rất lớn) | `百度網盤 台灣註冊 (ptt)`, `百度網盤 註冊 台灣/香港/dcard`, `百度網盤 台灣可以用嗎`, `百度網盤 台灣手機`, `百度雲盤台灣封鎖`, `阿里雲盤台灣註冊2026`, `阿里雲盤手機號碼格式不正確`, `123雲盤台灣如何註冊`, `123雲盤海外註冊`, `夸克網盤台灣手機號`, `藍奏雲海外註冊` | I (đau → T) | ★★★★★ |
| E. Lỗi | `百度網盤 下載 驗證碼簽名錯誤`, `藍奏雲下載不了`, `藍奏雲打不開`, `夸克 下載限制`, `夸克 下載 很 慢` | I | ★★★ |
| F. Host khác (cụm rộng nhất trong 7 ngôn ngữ) | `夸克網盤 台灣/下載/下載教學/台灣下載/台灣註冊/台灣ptt`, `夸克 下載 免安裝/加速/器/連結`, `123雲盤 解析/直鏈/帳號台灣`, `阿里雲盤 下載台灣/ptt`, `藍奏雲 台灣下載/直鏈/ios` | I/T | ★★★★ |
| G. CSDN/Wenku | `csdn 下載`, `csdn 文章 下載`, `csdn 免費 下載`, `百度文庫 台灣`, `百度文庫下載 台灣` | T | ★★ |

- Nguồn: [Google autocomplete zh-TW](https://suggestqueries.google.com/complete/search?client=firefox&hl=zh-TW&gl=tw&q=%E7%99%BE%E5%BA%A6%E7%B6%B2%E7%9B%A4%20%E4%B8%8B%E8%BC%89), [Bing zh-TW](https://api.bing.com/osjson.aspx?query=%E7%99%BE%E5%BA%A6%E7%B6%B2%E7%9B%A4%20%E4%B8%8B%E8%BC%89&mkt=zh-TW), [Bing zh-HK](https://api.bing.com/osjson.aspx?query=%E7%99%BE%E5%BA%A6%E7%B6%B2%E7%9B%A4&mkt=zh-HK). Google zh-HK trả về gần như cùng danh sách với zh-TW (chỉ đổi 台灣↔香港 lên đầu), nên **một bộ nội dung phồn thể có thể phục vụ cả hai thị trường**, kèm biến thể theo địa danh.
- Không có autocomplete: `百度網盤 免登入` (trên Google), `百度網盤 限速`, `百度雲 下載`, `百度網盤 解析`, `csdn 免積分`, `百度文庫 下載`.
- Bối cảnh "chặn IP Đài Loan": bài trên mrmad.com.tw (27/11/2018) ghi rằng mở link Baidu Pan từ IP Đài Loan báo "所訪問的頁面不存在" (trang không tồn tại) dù file vẫn còn, do Baidu chặn IP Đài Loan; cách vượt là dùng VPN, script và FDM (~800 KB/s khi không có VIP) — [mrmad](https://mrmad.com.tw/buidu-pan-blocks-404-taiwan). Một thread iT邦 năm 2020 mô tả cùng hiện tượng — [ithelp.ithome.com.tw](https://ithelp.ithome.com.tw/questions/10197253). **Chưa xác minh được tình trạng năm 2026.** Tuy vậy, autocomplete `百度雲盤台灣封鎖` vẫn còn.

#### 1.5 Tiếng Indonesia (id/id) – nhu cầu tương đối ★★★ (phần lớn gõ bằng tiếng Anh)

- Gợi ý bản địa: `cara download di pan baidu`, `cara download pan baidu`, `cara download file dari baidu`, `cara download file dari pan baidu`, `cara daftar pan baidu`, `akun pan baidu`. Thương mại: **`jual akun baidu`, `beli akun baidu`, `akun baidu gratis`** — [Google autocomplete id](https://suggestqueries.google.com/complete/search?client=firefox&hl=id&gl=id&q=akun%20baidu)
- Gợi ý tiếng Anh chiếm đa số: `pan baidu downloader (online/android)`, `pan baidu free download`, `baidu netdisk mod apk`, `download baidu file without app`, `download baidu file online`. Seed `cara download baidu` lẫn nhiễu app (`baidu translate`, `baidu keyboard`) — cùng nguồn.
- **Không có autocomplete** cho: `cara download di baidu tanpa akun`, `download baidu tanpa akun`, `jasa download baidu`, `akun svip baidu`, `cara download file csdn`, `cara download quark`, `download baidu lambat` — cùng nguồn. Bing id-ID trả về rỗng.

#### 1.6 Tiếng Thái (th/th) – nhu cầu tương đối ★★–★★★

- Gợi ý bản địa: `โหลด ไฟล์ baidu`, `โหลด ไฟล์ pan baidu`, `วิธีโหลดไฟล์จาก baidu`, `วิธีโหลด pan baidu`, `โหลด ไฟล์ จาก baidu`. Thương mại: **`รับ โหลด ไฟล์ baidu`, `รับ โหลด baidu`** (รับโหลด = "nhận tải hộ", tức dịch vụ) — [Google autocomplete th](https://suggestqueries.google.com/complete/search?client=firefox&hl=th&gl=th&q=%E0%B9%82%E0%B8%AB%E0%B8%A5%E0%B8%94%E0%B9%84%E0%B8%9F%E0%B8%A5%E0%B9%8C%20baidu)
- Đau ở bước đăng ký: `สมัคร baidu ไม่มีเบอร์จีน`, `สมัคร baidu 2024 ไม่มี เบอร์ จีน`, `สมัครbaidu ไม่ได้`, `สมัคร baidu netdisk/cloud`, `baidu netdisk คือ` — cùng nguồn.
- Nhiễu mạnh: `โหลด baidu` → translate/browser/wifi hotspot/maps/keyboard. `quark` → vật lý, font chữ, Quark VPN. `csdn` → lịch trường học (csdnb) — cùng nguồn.
- Tiếng Anh: `download file baidu free`, `download baidu file without app`, `baidu pan direct link generator` — cùng nguồn.

#### 1.7 Tiếng Mã Lai (ms/my) – nhu cầu tương đối ★

- **Gần như không có gợi ý bản địa**: `cara muat turun baidu`, `muat turun baidu`, `cara download pan baidu tanpa akaun` đều rỗng. `akaun baidu` bị nhiễu thành "buka akaun baiduri" (tên một ngân hàng Brunei). Người dùng gõ tiếng Anh (`baidu pan download without login`, `baidu pan overseas`, `baidu pan direct link generator`) hoặc gõ giống tiếng Indonesia (`cara download pan baidu`) — [Google autocomplete ms/my](https://suggestqueries.google.com/complete/search?client=firefox&hl=ms&gl=my&q=baidu%20pan)

### Inferences
- Thứ tự nhu cầu bản địa (ước lượng định tính dựa trên độ sâu autocomplete, modifier 2026, modifier cộng đồng và modifier thương mại): **VI ≈ KO ≈ zh-TW/HK > JA > ID > TH > MS**.
- Cách gõ "không đăng nhập" khác nhau theo ngôn ngữ, nên H1/title phải dùng đúng cụm bản địa:
  - VI: "không cần tài khoản"
  - KO: "회원가입 없이" hoặc "계정 없이" ("로그인 없이" là phụ)
  - JA: "アカウントなし" và "登録なし"
  - zh-TW: "免登入" và "免安裝"
  - TH: "ไม่ต้องสมัคร". Autocomplete không trả về cụm này, nên đây mới là giả định.
- Từ chỉ dịch vụ tải hộ: VI "tải hộ", KO "대행", JA "代行", zh-TW "代下載", TH "รับโหลด". Cả 5 ngôn ngữ đều có ít nhất 1 autocomplete loại này, tức là **có intent trả tiền thật**.

### Gaps
- Không có volume tuyệt đối (thiếu Keyword Planner/Ahrefs). Nên chạy Keyword Planner theo từng geo trước khi chốt ưu tiên.
- Không lấy được autocomplete Naver đầy đủ (chỉ 1 gợi ý) và Yahoo! JAPAN (cần appid), trong khi đây là hai engine quan trọng ở KR/JP.
- Chưa có autocomplete YouTube theo từng ngôn ngữ.

---

## 2. Thị trường nào có tín hiệu nhu cầu và intent thương mại mạnh nhất? Thị trường nào chỉ là nhiễu (intent app/browser)?

### Takeaway
Intent thương mại mạnh nhất nằm ở **Việt Nam (tải hộ, thuê/mua tài khoản, mua svip), Hàn Quốc (다운로드 대행, svip 구매/결제, 계정 구매) và Đài Loan/HK (台灣購買, 付款, 代下載, 蝦皮)**. Nhật có "代行" nhưng hẹp. Ở **Malaysia, và phần lớn seed của Thái/Indonesia**, nhiễu app/browser/keyboard chiếm đa số.

### Cited Findings
- VN: 3 biến thể "tải hộ … baidu", cùng cụm thuê/mua/cho thuê tài khoản và "mua svip baidu" đều có autocomplete — [Google autocomplete vi](https://suggestqueries.google.com/complete/search?client=firefox&hl=vi&gl=vn&q=t%C3%A0i%20kho%E1%BA%A3n%20baidu). Đã có shop VN bán tải hộ: dichvuchina 30k/link <1GB, itcuaban 5k/GB (tool tạm ngưng), taikhoanpre — theo [file 02 §2.10](../../seo/02-competitor-teardown.md).
- KR: `바이두 다운로드 대행`, `바이두 svip 구매/결제/결제 방법/쿠폰`, `바이두 계정 구매` — [Google autocomplete ko](https://suggestqueries.google.com/complete/search?client=firefox&hl=ko&gl=kr&q=%EB%B0%94%EC%9D%B4%EB%91%90%20svip)
- TW/HK: `百度網盤 台灣購買`, `百度網盤 台灣 付款`, `百度 網 盤 代 下載`, `百度網盤 下載 蝦皮`, `百度網盤 超級會員 台灣/香港` — [Google autocomplete zh-TW](https://suggestqueries.google.com/complete/search?client=firefox&hl=zh-TW&gl=tw&q=%E7%99%BE%E5%BA%A6%E7%B6%B2%E7%9B%A4%20%E5%8F%B0%E7%81%A3)
- JP: `baidu ダウンロード 代行`, `baidu 登録 危険`. Đã có người thuê tải hộ trên Lancers (2020) — [Lancers](https://www.lancers.jp/work/detail/3200728)
- TH: `รับ โหลด ไฟล์ baidu` (dịch vụ) có autocomplete, nhưng seed gốc `โหลด baidu` và `ดาวน์โหลด baidu` toàn là browser/translate/wifi/maps — [Google autocomplete th](https://suggestqueries.google.com/complete/search?client=firefox&hl=th&gl=th&q=%E0%B9%82%E0%B8%AB%E0%B8%A5%E0%B8%94%20baidu)
- ID: thương mại chỉ nằm ở tài khoản (`jual/beli akun baidu`). Seed `cara download baidu` lẫn translate/keyboard — [Google autocomplete id](https://suggestqueries.google.com/complete/search?client=firefox&hl=id&gl=id&q=cara%20download%20baidu)
- MS: không có gợi ý bản địa liên quan. `download baidu` → keyboard/browser/maps — [Google autocomplete ms](https://suggestqueries.google.com/complete/search?client=firefox&hl=ms&gl=my&q=download%20baidu)
- VI: seed trần `tải baidu` → về máy tính/translate/apk/map/điện thoại (intent app) — [Google autocomplete vi](https://suggestqueries.google.com/complete/search?client=firefox&hl=vi&gl=vn&q=t%E1%BA%A3i%20baidu)
- Similarweb (theo file 02) cho thấy baidulinkdownloader.com có traffic từ KR/JP/VN/TH/ID và đang nhận keyword bản địa "baidu 登録 せずにダウンロード", "바이두 다운로드", "pan.quark 가입 방법" — [file 02 §2.4, §3](../../seo/02-competitor-teardown.md)

### Inferences
- **Nhiễu cần loại khi làm keyword map** (danh sách phủ định):
  - VI: "tải baidu" trần, "baidu translate/map", "xsmn/csdn trực tiếp"
  - TH: "baidu browser/wifi hotspot", "quark vpn/font", "csdnb"
  - ID/MS: "baidu keyboard/translate", "baiduri"
  - KO: "쿼크에이아이"
  - JA: "quark drive" (Pokémon), "baidu ime"
- Đài Loan/HK có lớp đau riêng: số +886/+852 không đăng ký được, IP Đài Loan bị chặn (đã xác nhận năm 2018–2020, năm 2026 chưa xác minh). Nhóm này lại đọc được tiếng Trung, nên dễ hiểu mã trích xuất (提取码) và giao diện. Người dùng TW/HK là khách "biết Baidu nhưng bị chặn", rất hợp với dịch vụ tải hộ.

### Gaps
- Không đo được tỷ lệ chuyển đổi hay khả năng chi trả theo thị trường.
- Chưa kiểm chứng trực tiếp listing "百度網盤 代下載" trên Shopee TW (WebSearch chỉ trả về tin tức về Shopee) và listing "바이두 다운로드 대행" trên Kmong (không tìm thấy). Cần kiểm tra bằng trình duyệt.

---

## 3. SERP từng ngôn ngữ có gì (blog, forum, YouTube, trang bản địa của đối thủ)? Nội dung cũ/yếu đến đâu?

### Takeaway
Ở cả 7 ngôn ngữ, SERP gồm 3 loại:
- **Blog/forum cũ**: VI 2018–2023, TW mrmad 2018, JP MultCloud 2025, KO jab-guyver 01/2026.
- **Spam/parasite page** tiếng Anh: captain.super.downes.ca, scanner-api.axiory.com, alularv.imexhs.com.
- **Trang bản địa máy dịch của 4–5 đối thủ quốc tế**. Đối thủ đáng gờm nhất hiện tại là **baidufast.com**: guide bản địa cập nhật ngày 27/10/2026 ở VI/KO/JA/ZH/ID/TH. Dù vậy, title của họ dùng "Baidu Pan" Latin, không dùng cụm bản địa (바이두 클라우드, 百度网盘, tải hộ, 代下載).

### Cited Findings

**Đối thủ bản địa hoá (kiểm tra trực tiếp ngày 27/10/2026):**

| Đối thủ | Locale (hreflang) | Độ sâu mỗi locale | Title VI/KO/JA/zh | Ghi chú |
|---|---|---|---|---|
| baidufast.com | ar, cs, de, en, es, fr, id, it, ja, ko, nl, pl, pt-BR, ru, th, tr, vi, zh-Hant | 11 URL/locale trong sitemap: guides (không tài khoản, tại sao chậm, PanDownload alternatives, Quark), các trang quark/123pan/xunlei/uc/csdn, pricing. Homepage ~45–50k ký tự | VI: "Tải Baidu Pan — miễn phí dưới 150MB, không cần tài khoản"; guide VI "Cách tải file Baidu Pan không cần tài khoản (Hướng dẫn 2026)", datePublished 2026-08-27, **dateModified 2026-10-27**; KO "계정 없이 Baidu Pan에서 다운로드하는 방법 (2026 가이드)"; JA "アカウントなしで Baidu Pan からダウンロードする方法（2026年版ガイド）"; ZH "如何不用帳號下載百度網盤（2026 教學）" | **Lỗi**: hreflang zh-Hant trỏ tới /zh-Hant nhưng trả 404; nội dung phồn thể thật lại nằm ở /zh/. Trang /vi/csdn-download: "Tải CSDN — download.csdn.net không cần điểm", ngày 2026-10-24 |
| baidudl.com | de, en, es-419, fr, hi, id, it, ja, ko, ms, nl, pl, pt-BR, ru, th, tr, uk, vi, x-default, **zh-TW** | 40 URL/locale (800 URL tổng): /sc/ cho 15 host (baidu, quark, 123pan, alipan, lanzou, csdn, weiyun, xunlei, 115, 139, cloud189, feemoo, guangyapan, uc), /wiki/, /tutorials/, /comparisons/, /accounts | Slug tiếng Anh. VI CSDN: "CSDN Downloader - Tải tài nguyên CSDN mà không cần điểm hoặc tài khoản"; KO "Baidu Drive 다운로더 - …"; zh-TW "Baidu Drive 下載器 - …" | Không thấy schema date; title là bản dịch từ tiếng Anh |
| baidulinkdownloader.com | 22 locale, gồm vi, ko, ja, id, th, ms, zh-Hans (không có zh-TW) | 68 URL tổng ≈ 3 URL/locale | VI "Cách tải xuống từ Baidu mà không cần tài khoản"; KO "계정 없이 Baidu에서 다운로드하는 방법"; JA "アカウント不要でBaiduからダウンロードする方法"; MS "Cara Muat Turun Dari Baidu Tanpa Akaun" | Thin content: JA ~2.8k ký tự, TH ~4.3k |
| baidu.erranium.com | vi, ko, ja… (không có id/th/ms/zh-TW) | Homepage mỏng: VI ~3.9k ký tự, KO ~2.5k, JA ~2.6k | VI "Cách tải từ Baidu, Quark, 123 Pan và CSDN mà không cần tài khoản" | |
| quarkdownloader.com | vi, ko, ja, id, th… | – | – | Cùng nhóm baidudl (theo file 02) |

Nguồn: kiểm tra trực tiếp [baidufast.com/vi](https://baidufast.com/vi), [baidufast.com/sitemap.xml](https://baidufast.com/sitemap.xml), [baidufast.com/vi/guides/download-from-baidu-without-account](https://baidufast.com/vi/guides/download-from-baidu-without-account), [baidufast.com/zh-Hant](https://baidufast.com/zh-Hant) (404), [baidudl.com/sitemap-0.xml](https://baidudl.com/sitemap-0.xml), [baidudl.com/vi/sc/download-files-from-csdn](https://baidudl.com/vi/sc/download-files-from-csdn), [baidulinkdownloader.com/sitemap.xml](https://baidulinkdownloader.com/sitemap.xml), [baidu.erranium.com/vi](https://baidu.erranium.com/vi).

**SERP quan sát theo ngôn ngữ (WebSearch chạy ở US nên không phản ánh đúng SERP địa phương):**
- **VI** `tải file baidu không cần tài khoản 2026`: thread HF Forums của baidufast ("2026 notes… free fetcher"), dienmaycholon (bài "cách tải và tạo tài khoản baidu", intent app), hovatek (cũ), cùng các trang spam như alularv.imexhs.com ("百度网盘不限速破解版") và captain.super.downes.ca — [HF thread](https://discuss.huggingface.co/t/how-to-download-from-baidu-pan-pan-baidu-com-without-a-chinese-account-2026-notes-for-datasets-a-free-fetcher/180125), [dienmaycholon](https://dienmaycholon.com/kien-thuc/cach-tai-va-tao-tai-khoan-baidu). File 01/02 ghi nhận SERP VI là blog 2018–2023 (makerlab, fastviet 2022, itcuaban 2021, hocdohoacaptoc, sieuthuthuat), queenmobile 09/2026, YouTube (Kênh 5 Phút 16.5k view, Hieu IT, Panbaidu Team 40.5k view/3 tuần) và baidulinkdownloader/vi — [file 02 §2.10, §3](../../seo/02-competitor-teardown.md)
- **VI Wenku** `cách tải file baidu wenku tài liệu trung quốc`: không có bài VI nào liên quan; kết quả là Aspose, Google Docs và một mirror baiduwp-php — [sourceforge baiduwp-php](https://www.sourceforge.net/mirror/baiduwp-php). Đây là **SERP trống**.
- **KO** `바이두 회원가입 없이 다운 2026`: blog jab-guyver.co.kr (đăng 01/01/2026) rank. Bài này chỉ bàn đăng ký, xác thực số điện thoại, số ảo, giới hạn tốc độ, 提取码 và dịch vụ chuyển cloud; **không nhắc tới dịch vụ tải hộ (대행)** — [jab-guyver](https://jab-guyver.co.kr/453). Còn `바이두 다운로드 대행` thì không có kết quả tiếng Hàn liên quan, chỉ ra Wikipedia và trang spam — [WebSearch](https://captain.super.downes.ca/?p=17555)
- **JA** `baidu ダウンロード アカウントなし 2026` và `百度网盘 ダウンロード 遅い 知恵袋`: MultCloud JP tutorial (cập nhật 05/2025, cần tài khoản MultCloud), apollomaniacs.com (hướng dẫn cũ: thanh toán WeChat Pay cho SVIP, giá cũ 269 tệ/năm), các trang emailveritas cho baiduerranium và spam — [MultCloud JP](https://www.multcloud.com/jp/tutorials/how-to-download-from-pan-baidu-1027.html), [apollomaniacs](https://www.apollomaniacs.com/ipod/howto_wechatpay_baiduyun_tool.htm)
- **zh-TW** `百度網盤 下載 免登入 台灣`: mrmad.com.tw (2018), iT邦 (2020), clay-atlas (2021), techbang (dubox), imobie.com/tw (bài "2026 實測：百度 下載 台灣全攻略" và "百度網盤台灣註冊教學"; URL trả 404 khi fetch nên chưa xác nhận được nội dung) — [mrmad](https://mrmad.com.tw/buidu-pan-blocks-404-taiwan), [ithelp](https://ithelp.ithome.com.tw/questions/10202905), [imobie tw (404 khi fetch)](https://www.imobie.com/tw/location-change/baidu-download-taiwan-bypass-limits.htm)
- **ID** `cara download pan baidu tanpa akun`: không có trang tiếng Indonesia nào; kết quả là xiaoz.org (2018), PyPI, 3 thread HF Forums năm 2026 (baidufast/123pan/Quark), hovatek — [HF 123pan thread](https://discuss.huggingface.co/t/123pan-123-weights-datasets-now-need-a-chinese-login-how-to-download-them-without-one-2026/180744)
- **TH** `วิธีโหลดไฟล์จาก baidu pan ไม่ต้องสมัคร`: không có trang tiếng Thái nào; kết quả là các thread HF, quarkdownloader.beehiiv.com, xiaoz.org — [beehiiv quarkdownloader](https://quarkdownloader.beehiiv.com/p/how-to-download-files-from-pan-quark-no-account-required-pan-quark-downloader)
- Giá SVIP chính thức (để tham chiếu khi làm nội dung "thuê svip"): niên phí 298 tệ, khuyến mãi 189 tệ cho 14 tháng hoặc 158 tệ cho sinh viên — [ithome 955699](https://www.ithome.com/0/955/699.htm), [ithome 812861](https://www.ithome.com/0/812/861.htm)

### Inferences
- Ở KO/JA/zh-TW, title đối thủ dùng "Baidu Pan" hoặc "Baidu Drive" (chữ Latin) thay vì 바이두 클라우드/넷디스크, 百度网盘 (JA gõ giản thể) hay 百度網盤 (TW). Khớp ngữ nghĩa với truy vấn thật vì thế yếu. **Trang nào dùng đúng cụm bản địa trong title/H1 có lợi thế rõ.**
- Lỗi hreflang zh-Hant 404 của baidufast cùng việc baidulinkdownloader/erranium không có zh-TW cho thấy **zh-TW/HK đang được phủ kém nhất**. baidudl có zh-TW nhưng là trang dịch slug tiếng Anh.
- Không đối thủ nào có trang bản địa cho intent "tải hộ / 대행 / 代行 / 代下載 / รับโหลด". Tất cả định vị là "tool tự phục vụ".
- SERP bị spam/parasite page chiếm chỗ là dấu hiệu Google thiếu nội dung tốt cho các truy vấn này. Rào cản để lọt top là thấp.

### Gaps
- **Chưa có SERP Google theo đúng geo** (Hàn/Nhật/Đài/Việt) vì bị chặn khi scrape. Nên kiểm tra thủ công bằng trình duyệt ẩn danh + VPN theo nước, hoặc dùng một SERP API (ví dụ DataForSEO/SerpApi) trước khi chốt.
- Chưa kiểm tra SERP Naver (blog/cafe/지식iN) và Yahoo! JAPAN (知恵袋). Có khả năng đây là nơi rank chính ở KR/JP.
- Chưa có thứ hạng YouTube theo từng ngôn ngữ ngoài VI (VI đã có trong file 02).

---

## 4. Cụm từ khóa bản địa nào đang bị bỏ trống và nên làm trước?

### Takeaway
Ba thị trường nên đào sâu trước: **(1) Việt Nam, (2) Hàn Quốc, (3) Đài Loan/HK (phồn thể)**. Ở mỗi thị trường, nên làm trước cụm **"tải hộ/대행/代下載 + thuê–mua SVIP"**: đối thủ quốc tế không ai phủ, mà đây lại là intent trả tiền. Song song đó, làm cụm **"không cần tài khoản" bằng cụm bản địa chuẩn**. Nhật là ưu tiên 4. ID/TH chỉ cần 1–2 trang mỗi ngôn ngữ. MS dùng trang EN.

### Cited Findings (Vòng 3 – đào sâu)

**Việt Nam:**
- Autocomplete mới so với 28/09: `get link pan baidu 2026`, `tạo tài khoản baidu 2026`, `baidu downloader 2026`, `cho thuê tài khoản baidu`, `thuê tài khoản baidu netdisk`, `tạo tài khoản baidu bằng gmail` — [Google autocomplete vi](https://suggestqueries.google.com/complete/search?client=firefox&hl=vi&gl=vn&q=link%20pan%20baidu)
- Đối thủ quốc tế có trang VI (baidufast guide cập nhật 27/10/2026; baidudl 40 URL VI) nhưng **không trang nào nhắm "tải hộ", "get link", "leech", "thuê/mua svip"**. Trang /vi/accounts của baidudl thực tế bán "Mua Tài khoản Aliyun Drive" — [baidudl.com/vi/accounts](https://baidudl.com/vi/accounts). Shop VN (dichvuchina/itcuaban/taikhoanpre) bán thủ công qua Zalo và không có tool — [file 02 §2.10](../../seo/02-competitor-teardown.md)

**Hàn Quốc:**
- Cụm "회원가입 없이 다운 (2026/디시/크롬)", "다운로드 대행", "svip 구매/결제 방법", "가입 막힘/가상번호/요청이 너무 많습니다" — [Google autocomplete ko](https://suggestqueries.google.com/complete/search?client=firefox&hl=ko&gl=kr&q=%EB%B0%94%EC%9D%B4%EB%91%90%20%EA%B0%80%EC%9E%85)
- Bài KO đang rank (jab-guyver 01/2026) không có giải pháp tải hộ — [jab-guyver](https://jab-guyver.co.kr/453). Đối thủ KO dùng "Baidu Pan 다운로드" / "계정 없이 Baidu에서" — [baidufast.com/ko](https://baidufast.com/ko), [baidulinkdownloader.com/ko](https://baidulinkdownloader.com/ko)

**Đài Loan/HK:**
- Cụm theo địa danh + cộng đồng (`台灣/香港/ptt/dcard/蝦皮`), cụm mua bán (`台灣購買/付款/超級會員 台灣`), cụm đăng ký cho 5 host (百度/夸克/123/阿里/藍奏), cụm lỗi (`驗證碼簽名錯誤`, `藍奏雲下載不了`) — [Google autocomplete zh-TW](https://suggestqueries.google.com/complete/search?client=firefox&hl=zh-TW&gl=tw&q=%E5%A4%B8%E5%85%8B%E7%B6%B2%E7%9B%A4)
- baidufast /zh-Hant 404 — [baidufast.com/zh-Hant](https://baidufast.com/zh-Hant). baidulinkdownloader chỉ có zh-Hans — [baidulinkdownloader.com/vi (hreflang)](https://baidulinkdownloader.com/vi)

**Nhật:**
- `baidu ダウンロード 代行`, `baidu 登録 せずにダウンロード`, `百度网盘 日本 登録できない`, `baidu 登録 危険` — [Google autocomplete ja](https://suggestqueries.google.com/complete/search?client=firefox&hl=ja&gl=jp&q=baidu%20%E7%99%BB%E9%8C%B2)

### Inferences – Danh sách trang đề xuất theo ưu tiên (ước lượng, chưa có volume thật)

**Ưu tiên 1 – Việt Nam (6–8 trang)**
1. `/vi/tai-ho-file-baidu`: H1 "Tải hộ file Baidu (Pan Baidu) – nhận link, trả file tốc độ SVIP". Gom `tải hộ baidu`, `tải hộ pan baidu`, `tải hộ file baidu`, `leech baidu`, `get link pan baidu 2026`. Bảng giá theo GB bằng VNĐ, so với giá shop VN (30k/link, 5k/GB) và giá SVIP chính thức (298 tệ/năm).
2. `/vi/tai-file-baidu-khong-can-tai-khoan`: cập nhật theo tháng, nói thẳng các mẹo "thêm wp"/oneleaf đã chết.
3. `/vi/thue-tai-khoan-svip-baidu`: gom `thuê tài khoản baidu (netdisk)`, `mua svip baidu`, `mua tài khoản pan baidu`, `share tài khoản baidu`, `tài khoản baidu free`. Góc nội dung: "thuê vs mua vs tải hộ – cách nào rẻ hơn". Chỉ làm white-hat: không chia sẻ tài khoản trái ToS; bán dịch vụ tải hộ thay cho bán tài khoản.
4. `/vi/tao-tai-khoan-baidu-2026` (số điện thoại VN, gmail). Đây là trang informational, lấy traffic người đang bị tắc rồi chuyển sang tải hộ.
5. `/vi/tai-file-csdn`: gom `tải file csdn`, `mua tài khoản csdn`.
6. `/vi/tai-tai-lieu-baidu-wenku`: SERP trống hoàn toàn, nên lấy cả `baidu wenku downloader` / `wenku baidu com download pdf`.
7. `/vi/tai-file-quark`, `/vi/tai-file-123pan`.

**Ưu tiên 2 – Hàn Quốc (5–6 trang)**
1. `바이두 다운로드 대행`: trang dịch vụ (không đối thủ nào có).
2. `바이두 회원가입 없이 다운 (2026)`: H1 dùng "바이두 클라우드/넷디스크", không dùng "Baidu Pan".
3. `바이두 다운로드 속도 / 안됨 / 실패`: troubleshooting.
4. `바이두 svip 결제 방법 / 구매 / vip 차이`: comparison, kết luận "chỉ cần tải vài file → dùng 대행".
5. `바이두 회원가입 막힘 / 가상번호 / 요청이 너무 많습니다`: chuyển người bị tắc ở bước đăng ký sang dịch vụ.
6. `쿼크 클라우드 다운로드 / 가입`.

Phân phối: dcinside, theqoo và arca.live (autocomplete có "디시"/"더쿠") — chỉ trả lời có giá trị, white-hat. Thêm Naver Blog.

**Ưu tiên 3 – Đài Loan/HK phồn thể (5–6 trang; dùng chung TW/HK, có hreflang zh-TW và zh-HK)**
1. `百度網盤 代下載 / 免登入下載`: trang dịch vụ.
2. `百度網盤 台灣 (下載/註冊/可以用嗎/封鎖)`: một pillar "dùng Baidu ở Đài Loan/HK", có mục đăng ký +886/+852 và lỗi 404.
3. `百度網盤 超級會員 台灣 / 付款 / 購買`: giải thích cách thanh toán SVIP từ TW/HK và lựa chọn thay thế là tải hộ.
4. `夸克網盤 台灣 下載 / 註冊`: cụm Quark ở TW rất sâu.
5. `123雲盤 / 阿里雲盤 / 藍奏雲 台灣 下載 (解析/直鏈/免登入)`.
6. `百度網盤 下載 驗證碼簽名錯誤`: trang lỗi.

Phân phối: PTT, Dcard (autocomplete có "ptt"/"dcard").

**Ưu tiên 4 – Nhật (3–4 trang):** `baidu ダウンロード 代行`, `百度网盘 ダウンロード アカウントなし/登録なし`, `baidu ダウンロード 遅い`, `百度网盘 日本 登録できない / baidu 登録 危険`. Trong title dùng 百度网盘 (giản thể) kèm Baidu.

**Ưu tiên 5:**
- ID: 2 trang, `cara download file dari pan baidu` và `jual/beli akun baidu` → chuyển sang dịch vụ tải hộ.
- TH: 2 trang, `รับโหลดไฟล์ baidu` và `วิธีโหลดไฟล์จาก baidu / สมัคร baidu ไม่มีเบอร์จีน`.
- MS: không làm trang riêng, dùng trang EN và trang ID.

**Nguyên tắc chung:**
- Title/H1 phải dùng cụm bản địa có autocomplete, không dịch máy từ EN.
- Mỗi trang cần dữ liệu thật: speed-test có timestamp, giá bằng tiền địa phương, ảnh chụp lỗi bằng giao diện ngôn ngữ đó.
- Đối thủ (baidufast) cập nhật dateModified hằng ngày, nên phải có lịch cập nhật thực chất, không chỉ đổi ngày.

### Gaps
- Chưa có volume để ước tính traffic hay doanh thu theo từng trang.
- Chưa kiểm định độ khó backlink của từng SERP địa phương.
- Chưa xác minh khả năng thanh toán ở từng nước (VNĐ qua chuyển khoản/MoMo, KRW qua Toss/KakaoPay, TWD qua 街口/LINE Pay) và rủi ro pháp lý khi quảng cáo "tải hộ" nội dung có bản quyền. Cần ghi rõ chỉ phục vụ file mà người dùng có quyền tải.

---

## 5. Mỗi vòng nghiên cứu đã bổ sung gì?

### Takeaway
Vòng 1 xác lập cụm cơ bản cho 7 ngôn ngữ. Vòng 2 đối chiếu bằng Bing, Naver và kiểm tra trực tiếp đối thủ, từ đó phát hiện zh-TW mạnh bất ngờ và đối thủ dùng sai cụm bản địa. Vòng 3 đào sâu VI/KO/zh-TW (và JA) để ra danh sách trang ưu tiên.

### Cited Findings
- **Vòng 1 (khám phá rộng, Google autocomplete ~140 seed):**
  - VI: xác nhận lại cụm A/B/C/E của file 01, kèm danh sách truy vấn trong đề bài **không** có autocomplete (thuê/mua tài khoản svip, baidu tải chậm, wenku tiếng Việt…).
  - KO: phát hiện mới `바이두 다운로드 대행` và `바이두 회원가입 없이 다운 2026`.
  - JA: `baidu ダウンロード 代行`.
  - TH: `รับ โหลด ไฟล์ baidu`.
  - ID: `jual/beli akun baidu`.
  - zh-TW/HK: cụm rất sâu (台灣/香港/ptt/dcard/蝦皮/購買/付款).
  - MS: gần như rỗng.
  - Nguồn: [Google autocomplete](https://suggestqueries.google.com/complete/search?client=firefox&hl=ko&gl=kr&q=%EB%B0%94%EC%9D%B4%EB%91%90%20%EB%8B%A4%EC%9A%B4%EB%A1%9C%EB%93%9C)
- **Vòng 2 (đối chiếu + SERP + đối thủ):**
  - Bing xác nhận `百度網盤 下載 免登入` (zh-TW), `百度網盤 免登入下載` (zh-HK), `바이두 다운로드 로그인 없이`, `百度网盘登録なしダウンロード`. Naver chỉ trả "바이두 다운로드 속도". Yahoo JP cần appid. Scrape SERP địa phương thất bại.
  - WebSearch cho thấy SERP các ngôn ngữ bị chiếm bởi thread HF của baidufast, spam/parasite page và blog cũ.
  - Kiểm tra hreflang/sitemap/title của 6 đối thủ, phát hiện: baidufast cập nhật guide bản địa hằng ngày; baidufast zh-Hant 404; baidudl có 40 URL/locale; title KO/JA dùng "Baidu Pan" Latin.
  - Nguồn: [Bing zh-TW](https://api.bing.com/osjson.aspx?query=%E7%99%BE%E5%BA%A6%E7%B6%B2%E7%9B%A4%20%E4%B8%8B%E8%BC%89&mkt=zh-TW), [baidufast sitemap](https://baidufast.com/sitemap.xml), [baidudl sitemap](https://baidudl.com/sitemap-0.xml)
- **Vòng 3 (đào sâu VI, KO, zh-TW + JA, ~100 seed mở rộng):**
  - VI: `get link pan baidu 2026`, `cho thuê tài khoản baidu`, `tạo tài khoản baidu 2026/bằng gmail`.
  - KO: `바이두 클라우드 비 로그인 다운로드`, `바이두 가입 요청 이 너무 많습니다`, `바이두 계정 구매/동결`, `쿼크 클라우드/드라이브 가입`.
  - zh-TW: `百度網盤 台灣購買/付款`, `百度 網 盤 代 下載`, `百度網盤 驗證碼簽名錯誤`, cụm 夸克/123/阿里/藍奏 theo 台灣.
  - JA: `百度网盘 日本 登録できない`, `baidu netdisk 安全 性`.
  - Đọc SERP jab-guyver (KO 01/2026) và mrmad (TW 2018). Xác nhận chặn IP Đài Loan (dữ liệu 2018–2020).
  - Nguồn: [Google autocomplete zh-TW](https://suggestqueries.google.com/complete/search?client=firefox&hl=zh-TW&gl=tw&q=%E7%99%BE%E5%BA%A6%E7%B6%B2%E7%9B%A4%20%E5%8F%B0%E7%81%A3), [jab-guyver](https://jab-guyver.co.kr/453), [mrmad](https://mrmad.com.tw/buidu-pan-blocks-404-taiwan)

### Inferences
- So với file 01 (28/09), thay đổi lớn nhất là: (a) **zh-TW/HK nên nâng từ "Trung bình – chỉ 3–4 bài" lên ưu tiên 3**, do cụm thương mại và host-khác rất sâu, đối thủ lại phủ kém; (b) **baidufast đã bản địa hoá mạnh trong tháng 08–10/2026**, nên lợi thế "chưa ai làm VI/KO/JA" của file 01 đã thu hẹp. Khoảng trống còn lại nằm ở cụm "tải hộ/대행/代下載" và ở việc dùng đúng cụm bản địa.

### Gaps
- Mỗi vòng chỉ dùng autocomplete và kiểm tra on-page. Chưa có dữ liệu volume, CTR hay thứ hạng địa phương thật. Bước tiếp theo nên chạy Keyword Planner hoặc Ahrefs theo 7 geo và một SERP API theo geo để xác nhận.

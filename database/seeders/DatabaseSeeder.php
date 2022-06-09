<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        

        DB::table('roles')->insert(
            [
                [
                    'name' => 'admin'

                ],
                [
                    'name' => 'user'

                ]
            ]
        );

        DB::table('users')->insert(
            [
                [
                    'role_id' => '1',
                    'name' => 'Quynh Anh',
                    'email' => 'quynhanh@gmail.com',
                    'password' => '$2a$12$TT06mqmUDbx.ntjw6aulo.n22yXKjcGFS/qPmSShR.eh6cv9fEJw.'
                ],
                [
                    'role_id' => '2',
                    'name' => 'Phu Nhan',
                    'email' => 'phunhan@gmail.com',
                    'password' => '$2a$12$TT06mqmUDbx.ntjw6aulo.n22yXKjcGFS/qPmSShR.eh6cv9fEJw.'
                ]
            ]
        );

        DB::table('protypes')->insert(
            [
                [
                    'name' => 'Phone'
                ],
                [
                    'name' => 'Laptop'
                ],
                [
                    'name' => 'Air-Conditioner'
                ],
                [
                    'name' => 'TV'
                ],
                [
                    'name' => 'Speaker'
                ]
            ]
        );
        DB::table('manufactures')->insert(
            [
                [
                    'name' => 'Sam Sung'
                ],
                [
                    'name' => 'Iphone'
                ],
                [
                    'name' => 'Macbook'
                ],
                [
                    'name' => 'LG'
                ],
                [
                    'name' => 'AQUA'
                ]
            ]
        );
        DB::table('products')->insert(
            [
                [
                    'name' => 'Điện thoại SamSung Galayxy 22 Ultra 5G 128GB',
                    'manu_id' => '1',
                    'type_id' => '1',
                    'price' => '30990000',
                    'image' => 'samsung-galaxy-s22-ultra-1-1.jpg',
                    'description' => 'Công nghệ màn hình: Dynamic AMOLED 2X
                        Độ phân giải: 2K+ (1440 x 3088 Pixels)
                        Màn hình rộng: 6.8" - Tần số quét 120 Hz
                        Độ sáng tối đa: 1750 nits
                        Mặt kính cảm ứng: Kính cường lực Corning Gorilla Glass Victus+',
                    'feature' => '1',
                    'sale' => '0'
                ],
                [
                    'name' => 'Điện thoại Samsung Galaxy Note 20',
                    'manu_id' => '1',
                    'type_id' => '1',
                    'price' => '15990000',
                    'image' => 'samsung-galaxy-note-20-xanh-la-1-org.jpg',
                    'description' => 'Công nghệ màn hình: Super AMOLED Plus
                        Độ phân giải: Full HD+ (1080 x 2400 Pixels)
                        Màn hình rộng: 6.7" - Tần số quét 60 Hz
                        Độ sáng tối đa: 1050 nits
                        Mặt kính cảm ứng: Kính cường lực Corning Gorilla Glass 5',
                    'feature' => '0',
                    'sale' => '0'
                ],
                [
                    'name' => 'Điện thoại iPhone 13 Pro Max 128GB ',
                    'manu_id' => '2',
                    'type_id' => '1',
                    'price' => '33490000',
                    'image' => 'iphone-13-pro-xanh-xa-1.jpg',
                    'description' => 'Công nghệ màn hình: OLED
                        Độ phân giải: 1284 x 2778 Pixels
                        Màn hình rộng: 6.7" - Tần số quét 120 Hz
                        Độ sáng tối đa: 1200 nits
                        Mặt kính cảm ứng: Kính cường lực Ceramic Shield',
                    'feature' => '1',
                    'sale' => '0'
                ],
                [
                    'name' => 'Điện thoại iPhone 11 64GB',
                    'manu_id' => '2',
                    'type_id' => '1',
                    'price' => '13790000',
                    'image' => 'iphone-11-do-1-1-1-org.jpg',
                    'description' => 'Công nghệ màn hình: OLED
                        Độ phân giải: 1284 x 2778 Pixels
                        Màn hình rộng: 6.7" - Tần số quét 120 Hz
                        Độ sáng tối đa: 1200 nits
                        Mặt kính cảm ứng: Kính cường lực Ceramic Shield',
                    'feature' => '1',
                    'sale' => '0'
                ],
                [
                    'name' => 'Điện thoại Samsung Galaxy A52 128GB',
                    'manu_id' => '1',
                    'type_id' => '1',
                    'price' => '13790000',
                    'image' => 'samsung-galaxy-a52-xanh-duong-1-org.jpg',
                    'description' => 'Công nghệ màn hình: Super AMOLED
                        Độ phân giải: Full HD+ (1080 x 2400 Pixels)
                        Màn hình rộng: 6.5" - Tần số quét 90 Hz
                        Độ sáng tối đa: 800 nits
                        Mặt kính cảm ứng: Kính cường lực',
                    'feature' => '1',
                    'sale' => '0'
                ],
                [
                    'name' => 'Laptop Apple MacBook Pro M1 2020/16GB/256GB (Z11B000CT) ',
                    'manu_id' => '3',
                    'type_id' => '2',
                    'price' => '37490000',
                    'image' => 'apple-macbook-pro-m1-2020-z11b000ct-1-org.jpg',
                    'description' => 'Công nghệ CPU: Apple M1
                        Số nhân: 8
                        Số luồng: Hãng không công bố
                        Tốc độ CPU: Hãng không công bố
                        Tốc độ tối đa: Hãng không công bố
                        Bộ nhớ đệm:  Hãng không công bố',
                    'feature' => '1',
                    'sale' => '0'
                ],
                [
                    'name' => 'Laptop MacBook Pro 14 M1 Max 2021 10-core CPU/32GB/1TB SSD/32-core GPU (Z15H)',
                    'manu_id' => '3',
                    'type_id' => '2',
                    'price' => '84900000',
                    'image' => 'macbook-pro-14-m1-max-2021-xam-1.jpg',
                    'description' => 'Công nghệ CPU: Apple M1 Max
                        Số nhân: 10
                        Số luồng: Hãng không công bố
                        Tốc độ CPU: 400GB/s memory bandwidth
                        Tốc độ tối đa: Hãng không công bố
                        Bộ nhớ đệm: Hãng không công bố',
                    'feature' => '0',
                    'sale' => '0'
                ],
                [
                    'name' => 'Laptop LG Gram 17 2021 i7 1165G7/16GB/512GB/Win10 (17Z90P-G.AH76A5)',
                    'manu_id' => '4',
                    'type_id' => '2',
                    'price' => '45890000',
                    'image' => 'lg-gram-17-i7-17z90pgah76a511-org.jpg',
                    'description' => 'Công nghệ CPU: Intel Core i7 Tiger Lake - 1165G7
                        Số nhân: 4
                        Số luồng: 8
                        Tốc độ CPU: 2.80 GHz
                        Tốc độ tối đa: Turbo Boost 4.7 GHz
                        Bộ nhớ đệm: 12 MB',
                    'feature' => '0',
                    'sale' => '0'
                ],
                [
                    'name' => 'Laptop LG Gram 17 2021 i7 1165G7/16GB/1TB SSD/Win10 (17Z90P-G.AH78A5)',
                    'manu_id' => '4',
                    'type_id' => '2',
                    'price' => '47890000',
                    'image' => 'lg-gram-17-i7-17z90pgah78a5-01.jpg',
                    'description' => 'Công nghệ CPU: Intel Core i7 Tiger Lake - 1165G7
                        Số nhân: 4
                        Số luồng: 8
                        Tốc độ CPU: 2.80 GHz
                        Tốc độ tối đa: Turbo Boost 4.7 GHz
                        Bộ nhớ đệm: 12 MB',
                    'feature' => '0',
                    'sale' => '0'
                ],
                [
                    'name' => 'Laptop Apple MacBook Air M1 2020 8GB/256GB/7-core GPU (MGN63SA/A) ',
                    'manu_id' => '3',
                    'type_id' => '2',
                    'price' => '25990000',
                    'image' => 'macbook-air-m1-2020-silver-01-org.jpg',
                    'description' => 'Công nghệ CPU: Apple M1
                        Số nhân: 8
                        Số luồng: Hãng không công bố
                        Tốc độ CPU: Hãng không công bố
                        Tốc độ tối đa: Hãng không công bố
                        Bộ nhớ đệm: Hãng không công bố',
                    'feature' => '0',
                    'sale' => '0'
                ],
                [
                    'name' => 'Máy lạnh LG Inverter 1.5 HP V13ENH1',
                    'manu_id' => '4',
                    'type_id' => '3',
                    'price' => '11290000',
                    'image' => 'lg-v13enh1-1-1-org.jpg',
                    'description' => 'Loại máy: Máy lạnh 1 chiều (chỉ làm lạnh)
                        Inverter: Máy lạnh Inverter
                        Công suất làm lạnh: 1.5 HP - 11.200 BTU
                        Phạm vi làm lạnh hiệu quả: Từ 15 - 20m² (từ 40 đến 60 m³)
                        Công suất sưởi ấm: Không có sưởi ấm
                        Lọc bụi, kháng khuẩn, khử mùi: Màng lọc sơ cấp
                        Công nghệ tiết kiệm điện: Dual inverterEnergy Ctrl - Kiểm soát năng lượng chủ động 4 mức',
                    'feature' => '0',
                    'sale' => '0'
                ],
                [
                    'name' => 'Máy lạnh LG Inverter 2 HP V18API1',
                    'manu_id' => '4',
                    'type_id' => '3',
                    'price' => '21290000',
                    'image' => 'lg-v18api1-1-1-org.jpg',
                    'description' => 'Loại máy: Máy lạnh 1 chiều (chỉ làm lạnh)
                    Inverter: Máy lạnh Inverter
                    Công suất làm lạnh: 2 HP - 18.000 BTU
                    Phạm vi làm lạnh hiệu quả: Từ 20 - 30m² (từ 60 đến 80m³)
                    Công suất sưởi ấm: Không có sưởi ấm
                    Lọc bụi, kháng khuẩn, khử mùi: Màng lọc dị ứng, Màng lọc sơ cấp
                    Công nghệ tiết kiệm điện: Dual inverterEnergy Ctrl - Kiểm soát năng lượng chủ động 4 mức',
                    'feature' => '0',
                    'sale' => '0'
                ],
                [
                    'name' => 'Máy lạnh Aqua Inverter 1 HP AQA-KCRV10TR',
                    'manu_id' => '5',
                    'type_id' => '3',
                    'price' => '8990000',
                    'image' => 'laqua-inverter-1-hp-aqa-kcrv10tr-2-1.jpg',
                    'description' => 'Loại máy: Máy lạnh 1 chiều (chỉ làm lạnh)
                    Inverter: Máy lạnh Inverter
                    Công suất làm lạnh: 1 HP - 9.200 BTU
                    Phạm vi làm lạnh hiệu quả: Dưới 15m² (từ 30 đến 45m³)
                    Công suất sưởi ấm: Không có sưởi ấm
                    Lọc bụi, kháng khuẩn, khử mùi: Không có
                    Công nghệ tiết kiệm điện: PID Inverter',
                    'feature' => '0',
                    'sale' => '0'
                ],
                [
                    'name' => 'Máy lạnh Aqua Inverter 2 HP AQA-KCRV18TK',
                    'manu_id' => '5',
                    'type_id' => '3',
                    'price' => '16790000',
                    'image' => 'aqua-aqa-kcrv18tk-1-org.jpg',
                    'description' => 'Loại máy: Máy lạnh 1 chiều (chỉ làm lạnh)
                    Inverter: Máy lạnh Inverter
                    Công suất làm lạnh: 2 HP - 17.400 BTU
                    Phạm vi làm lạnh hiệu quả: Từ 20 - 30m² (từ 60 đến 80m³)
                    Công suất sưởi ấm: Không có sưởi ấm
                    Lọc bụi, kháng khuẩn, khử mùi: Tấm lọc bảo vệ đa năng công nghệ 3M
                    Công nghệ tiết kiệm điện: PID Inverter',
                    'feature' => '0',
                    'sale' => '0'
                ],
                [
                    'name' => 'Máy lạnh Samsung Inverter 1.5 HP AR13TYHYCWKNSV ',
                    'manu_id' => '1',
                    'type_id' => '3',
                    'price' => '10410000',
                    'image' => 'samsung-ar13tyhycwknsv-1-1-org.jpg',
                    'description' => 'Loại máy: Máy lạnh 1 chiều (chỉ làm lạnh)
                    Inverter: Máy lạnh Inverter
                    Công suất làm lạnh: 1.5 HP - 12.000 BTU
                    Phạm vi làm lạnh hiệu quả: Từ 15 - 20m² (từ 40 đến 60 m³)
                    Công suất sưởi ấm: Không có sưởi ấm
                    Lọc bụi, kháng khuẩn, khử mùi: TBộ lọc thô Easy Filter

                    Bộ lọc Tri Care Filter lọc bụi, chống nấm mốc, kháng khuẩn
                    
                    Màng lọc kháng khuẩn Ag+',
                    'feature' => '0',
                    'sale' => '0'
                ],
                [
                    'name' => 'Smart Tivi Samsung 4K Crystal UHD 55 Inch UA55AU9000',
                    'manu_id' => '1',
                    'type_id' => '4',
                    'price' => '18400000',
                    'image' => 'led-4k-samsung-ua55au9000-3-1.jpg',
                    'description' => 'Loại tivi: Smart Tivi
                    Kích cỡ màn hình: 55 inch
                    Độ phân giải: K (Ultra HD)
                    Loại màn hình: LED viền (Edge LED), VA LCD',
                    'feature' => '0',
                    'sale' => '0'
                ],
                [
                    'name' => 'Smart Tivi QLED 4K 50 inch Samsung QA50Q65A',
                    'manu_id' => '1',
                    'type_id' => '4',
                    'price' => '21900000',
                    'image' => 'qled-4k-samsung-qa50q65a-2.jpg',
                    'description' => 'Loại tivi: Smart Tivi QLED
                    Kích cỡ màn hình: 50 inch
                    Độ phân giải: 4K (Ultra HD)
                    Loại màn hình: LED viền kết hợp Dual LED, VA LCD',
                    'feature' => '0',
                    'sale' => '0'
                ],
                [
                    'name' => 'Smart Tivi NanoCell LG 4K 55 inch 55NANO86TPA',
                    'manu_id' => '4',
                    'type_id' => '4',
                    'price' => '17900000',
                    'image' => 'dz-1-org.jpg',
                    'description' => 'Loại tivi: Smart TV NanoCell
                    Kích cỡ màn hình: 55 inch
                    Độ phân giải: 4K (Ultra HD)
                    Loại màn hình: LED viền (Edge LED), IPS LCD',
                    'feature' => '0',
                    'sale' => '0'
                ],
                [
                    'name' => 'Android Tivi AQUA 4K 43 inch LE43AQT6600UG',
                    'manu_id' => '5',
                    'type_id' => '4',
                    'price' => '9490000',
                    'image' => 'led-aqua-le43aqt6600ug-1-org.jpg',
                    'description' => 'Loại tivi: Android Tivi
                    Kích cỡ màn hình: 43 inch
                    Độ phân giải: 4K (Ultra HD)
                    Loại màn hình: LED nền (Direct LED), VA LCD',
                    'feature' => '0',
                    'sale' => '0'
                ],
                [
                    'name' => 'Android Tivi AQUA 4K 55 inch LE55AQTS6UG',
                    'manu_id' => '5',
                    'type_id' => '4',
                    'price' => '14990000',
                    'image' => 'android-aqua-4k-55-inch-le55aqts6ug-1.jpg',
                    'description' => 'Loại tivi: Android Tivi QLED
                    Kích cỡ màn hình: 55 inch
                    Độ phân giải: 4K (Ultra HD)
                    Loại màn hình: LED nền (Direct LED), VA LCD',
                    'feature' => '0',
                    'sale' => '0'
                ],
                [
                    'name' => 'Loa Bluetooth Karaoke LG OL45 220W',
                    'manu_id' => '4',
                    'type_id' => '5',
                    'price' => '2590000',
                    'image' => 'loa-karaoke-lg-ol45-1-3-org.jpg',
                    'description' => 'Loại sản phẩm: Loa bluetooth
                    Số lượng kênh: Hãng không công bố
                    Tổng công suất: 220 W
                    Nguồn: Cắm điện dùng
                    Số đường tiếng của loa: Hãng không công bố',
                    'feature' => '0',
                    'sale' => '0'
                ],
                [
                    'name' => 'Loa thanh soundbar LG SN5R',
                    'manu_id' => '4',
                    'type_id' => '5',
                    'price' => '3890000',
                    'image' => 'loa-thanh-lg-sn5r-1-1-org.jpg',
                    'description' => 'Loại sản phẩm: Loa thanh (soundbar)
                    Số lượng kênh: 4.1 kênh
                    Tổng công suất: 520 W
                    Nguồn: Cắm điện dùng
                    Số đường tiếng của loa: Hãng không công bố',
                    'feature' => '0',
                    'sale' => '0'
                ],
                [
                    'name' => 'Loa Tháp Samsung MX-T70/XV',
                    'manu_id' => '1',
                    'type_id' => '5',
                    'price' => '8290000',
                    'image' => 'samsung-mx-t70-xv-1-1-org.jpg',
                    'description' => 'Loại sản phẩm: Loa kéo
                    Số lượng kênh: Hãng không công bố
                    Tổng công suất: 1500 W
                    Nguồn: Cắm điện dùng
                    Số đường tiếng của loa: Hãng không công bố',
                    'feature' => '0',
                    'sale' => '0'
                ],
                [
                    'name' => 'Loa thanh Samsung HW-K350',
                    'manu_id' => '1',
                    'type_id' => '5',
                    'price' => '3000000',
                    'image' => 'dan-loa-dvd-samsung-hw-k350-2-org.jpg',
                    'description' => 'Loại sản phẩm: Loa thanh (soundbar)
                    Số lượng kênh: 2.1 kênh
                    Tổng công suất: 150 W
                    Nguồn: Cắm điện dùng
                    Công nghệ âm thanh: Dolby DigitalDTS Digital Surround',
                    'feature' => '0',
                    'sale' => '0'
                ],
                [
                    'name' => 'Loa thanh Samsung HW-Q700A',
                    'manu_id' => '1',
                    'type_id' => '5',
                    'price' => '9490000',
                    'image' => 'thanh-samsung-hw-q700a-3-2.jpg',
                    'description' => 'Loại sản phẩm: Loa thanh (soundbar)
                    Số lượng kênh: 3.1.2 kênh
                    Tổng công suất: 330 W
                    Nguồn: Cắm điện dùng
                    Công nghệ âm thanh: 
                    Acoustic Beam tạo âm thanh vòm ảo         
                    Adaptive Sound 
                    Công nghệ Q-Symphony
                    Công nghệ âm thanh chuẩn Dolby Atmos/DTS:X 
                    SpaceFit Sound   
                    Surround Sound Expansion 
                    Truyền tải nội dung HDR10+ qua cổng 4K Pass-Through
                    Tối ưu âm thanh chơi Game với chế độ Game Mode Pro',
                    'feature' => '0',
                    'sale' => '0'
                ]
            ]
        );
    }
}

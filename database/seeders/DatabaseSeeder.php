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
                    'name' => '??i???n tho???i SamSung Galayxy 22 Ultra 5G 128GB',
                    'manu_id' => '1',
                    'type_id' => '1',
                    'price' => '30990000',
                    'image' => 'samsung-galaxy-s22-ultra-1-1.jpg',
                    'description' => 'C??ng ngh??? m??n h??nh: Dynamic AMOLED 2X
                        ????? ph??n gi???i: 2K+ (1440 x 3088 Pixels)
                        M??n h??nh r???ng: 6.8" - T???n s??? qu??t 120 Hz
                        ????? s??ng t???i ??a: 1750 nits
                        M???t k??nh c???m ???ng: K??nh c?????ng l???c Corning Gorilla Glass Victus+',
                    'feature' => '1',
                    'sale' => '0'
                ],
                [
                    'name' => '??i???n tho???i Samsung Galaxy Note 20',
                    'manu_id' => '1',
                    'type_id' => '1',
                    'price' => '15990000',
                    'image' => 'samsung-galaxy-note-20-xanh-la-1-org.jpg',
                    'description' => 'C??ng ngh??? m??n h??nh: Super AMOLED Plus
                        ????? ph??n gi???i: Full HD+ (1080 x 2400 Pixels)
                        M??n h??nh r???ng: 6.7" - T???n s??? qu??t 60 Hz
                        ????? s??ng t???i ??a: 1050 nits
                        M???t k??nh c???m ???ng: K??nh c?????ng l???c Corning Gorilla Glass 5',
                    'feature' => '0',
                    'sale' => '0'
                ],
                [
                    'name' => '??i???n tho???i iPhone 13 Pro Max 128GB ',
                    'manu_id' => '2',
                    'type_id' => '1',
                    'price' => '33490000',
                    'image' => 'iphone-13-pro-xanh-xa-1.jpg',
                    'description' => 'C??ng ngh??? m??n h??nh: OLED
                        ????? ph??n gi???i: 1284 x 2778 Pixels
                        M??n h??nh r???ng: 6.7" - T???n s??? qu??t 120 Hz
                        ????? s??ng t???i ??a: 1200 nits
                        M???t k??nh c???m ???ng: K??nh c?????ng l???c Ceramic Shield',
                    'feature' => '1',
                    'sale' => '0'
                ],
                [
                    'name' => '??i???n tho???i iPhone 11 64GB',
                    'manu_id' => '2',
                    'type_id' => '1',
                    'price' => '13790000',
                    'image' => 'iphone-11-do-1-1-1-org.jpg',
                    'description' => 'C??ng ngh??? m??n h??nh: OLED
                        ????? ph??n gi???i: 1284 x 2778 Pixels
                        M??n h??nh r???ng: 6.7" - T???n s??? qu??t 120 Hz
                        ????? s??ng t???i ??a: 1200 nits
                        M???t k??nh c???m ???ng: K??nh c?????ng l???c Ceramic Shield',
                    'feature' => '1',
                    'sale' => '0'
                ],
                [
                    'name' => '??i???n tho???i Samsung Galaxy A52 128GB',
                    'manu_id' => '1',
                    'type_id' => '1',
                    'price' => '13790000',
                    'image' => 'samsung-galaxy-a52-xanh-duong-1-org.jpg',
                    'description' => 'C??ng ngh??? m??n h??nh: Super AMOLED
                        ????? ph??n gi???i: Full HD+ (1080 x 2400 Pixels)
                        M??n h??nh r???ng: 6.5" - T???n s??? qu??t 90 Hz
                        ????? s??ng t???i ??a: 800 nits
                        M???t k??nh c???m ???ng: K??nh c?????ng l???c',
                    'feature' => '1',
                    'sale' => '0'
                ],
                [
                    'name' => 'Laptop Apple MacBook Pro M1 2020/16GB/256GB (Z11B000CT) ',
                    'manu_id' => '3',
                    'type_id' => '2',
                    'price' => '37490000',
                    'image' => 'apple-macbook-pro-m1-2020-z11b000ct-1-org.jpg',
                    'description' => 'C??ng ngh??? CPU: Apple M1
                        S??? nh??n: 8
                        S??? lu???ng: H??ng kh??ng c??ng b???
                        T???c ????? CPU: H??ng kh??ng c??ng b???
                        T???c ????? t???i ??a: H??ng kh??ng c??ng b???
                        B??? nh??? ?????m:  H??ng kh??ng c??ng b???',
                    'feature' => '1',
                    'sale' => '0'
                ],
                [
                    'name' => 'Laptop MacBook Pro 14 M1 Max 2021 10-core CPU/32GB/1TB SSD/32-core GPU (Z15H)',
                    'manu_id' => '3',
                    'type_id' => '2',
                    'price' => '84900000',
                    'image' => 'macbook-pro-14-m1-max-2021-xam-1.jpg',
                    'description' => 'C??ng ngh??? CPU: Apple M1 Max
                        S??? nh??n: 10
                        S??? lu???ng: H??ng kh??ng c??ng b???
                        T???c ????? CPU: 400GB/s memory bandwidth
                        T???c ????? t???i ??a: H??ng kh??ng c??ng b???
                        B??? nh??? ?????m: H??ng kh??ng c??ng b???',
                    'feature' => '0',
                    'sale' => '0'
                ],
                [
                    'name' => 'Laptop LG Gram 17 2021 i7 1165G7/16GB/512GB/Win10 (17Z90P-G.AH76A5)',
                    'manu_id' => '4',
                    'type_id' => '2',
                    'price' => '45890000',
                    'image' => 'lg-gram-17-i7-17z90pgah76a511-org.jpg',
                    'description' => 'C??ng ngh??? CPU: Intel Core i7 Tiger Lake - 1165G7
                        S??? nh??n: 4
                        S??? lu???ng: 8
                        T???c ????? CPU: 2.80 GHz
                        T???c ????? t???i ??a: Turbo Boost 4.7 GHz
                        B??? nh??? ?????m: 12 MB',
                    'feature' => '0',
                    'sale' => '0'
                ],
                [
                    'name' => 'Laptop LG Gram 17 2021 i7 1165G7/16GB/1TB SSD/Win10 (17Z90P-G.AH78A5)',
                    'manu_id' => '4',
                    'type_id' => '2',
                    'price' => '47890000',
                    'image' => 'lg-gram-17-i7-17z90pgah78a5-01.jpg',
                    'description' => 'C??ng ngh??? CPU: Intel Core i7 Tiger Lake - 1165G7
                        S??? nh??n: 4
                        S??? lu???ng: 8
                        T???c ????? CPU: 2.80 GHz
                        T???c ????? t???i ??a: Turbo Boost 4.7 GHz
                        B??? nh??? ?????m: 12 MB',
                    'feature' => '0',
                    'sale' => '0'
                ],
                [
                    'name' => 'Laptop Apple MacBook Air M1 2020 8GB/256GB/7-core GPU (MGN63SA/A) ',
                    'manu_id' => '3',
                    'type_id' => '2',
                    'price' => '25990000',
                    'image' => 'macbook-air-m1-2020-silver-01-org.jpg',
                    'description' => 'C??ng ngh??? CPU: Apple M1
                        S??? nh??n: 8
                        S??? lu???ng: H??ng kh??ng c??ng b???
                        T???c ????? CPU: H??ng kh??ng c??ng b???
                        T???c ????? t???i ??a: H??ng kh??ng c??ng b???
                        B??? nh??? ?????m: H??ng kh??ng c??ng b???',
                    'feature' => '0',
                    'sale' => '0'
                ],
                [
                    'name' => 'M??y l???nh LG Inverter 1.5 HP V13ENH1',
                    'manu_id' => '4',
                    'type_id' => '3',
                    'price' => '11290000',
                    'image' => 'lg-v13enh1-1-1-org.jpg',
                    'description' => 'Lo???i m??y: M??y l???nh 1 chi???u (ch??? l??m l???nh)
                        Inverter: M??y l???nh Inverter
                        C??ng su???t l??m l???nh: 1.5 HP - 11.200 BTU
                        Ph???m vi l??m l???nh hi???u qu???: T??? 15 - 20m?? (t??? 40 ?????n 60 m??)
                        C??ng su???t s?????i ???m: Kh??ng c?? s?????i ???m
                        L???c b???i, kh??ng khu???n, kh??? m??i: M??ng l???c s?? c???p
                        C??ng ngh??? ti???t ki???m ??i???n: Dual inverterEnergy Ctrl - Ki???m so??t n??ng l?????ng ch??? ?????ng 4 m???c',
                    'feature' => '0',
                    'sale' => '0'
                ],
                [
                    'name' => 'M??y l???nh LG Inverter 2 HP V18API1',
                    'manu_id' => '4',
                    'type_id' => '3',
                    'price' => '21290000',
                    'image' => 'lg-v18api1-1-1-org.jpg',
                    'description' => 'Lo???i m??y: M??y l???nh 1 chi???u (ch??? l??m l???nh)
                    Inverter: M??y l???nh Inverter
                    C??ng su???t l??m l???nh: 2 HP - 18.000 BTU
                    Ph???m vi l??m l???nh hi???u qu???: T??? 20 - 30m?? (t??? 60 ?????n 80m??)
                    C??ng su???t s?????i ???m: Kh??ng c?? s?????i ???m
                    L???c b???i, kh??ng khu???n, kh??? m??i: M??ng l???c d??? ???ng, M??ng l???c s?? c???p
                    C??ng ngh??? ti???t ki???m ??i???n: Dual inverterEnergy Ctrl - Ki???m so??t n??ng l?????ng ch??? ?????ng 4 m???c',
                    'feature' => '0',
                    'sale' => '0'
                ],
                [
                    'name' => 'M??y l???nh Aqua Inverter 1 HP AQA-KCRV10TR',
                    'manu_id' => '5',
                    'type_id' => '3',
                    'price' => '8990000',
                    'image' => 'laqua-inverter-1-hp-aqa-kcrv10tr-2-1.jpg',
                    'description' => 'Lo???i m??y: M??y l???nh 1 chi???u (ch??? l??m l???nh)
                    Inverter: M??y l???nh Inverter
                    C??ng su???t l??m l???nh: 1 HP - 9.200 BTU
                    Ph???m vi l??m l???nh hi???u qu???: D?????i 15m?? (t??? 30 ?????n 45m??)
                    C??ng su???t s?????i ???m: Kh??ng c?? s?????i ???m
                    L???c b???i, kh??ng khu???n, kh??? m??i: Kh??ng c??
                    C??ng ngh??? ti???t ki???m ??i???n: PID Inverter',
                    'feature' => '0',
                    'sale' => '0'
                ],
                [
                    'name' => 'M??y l???nh Aqua Inverter 2 HP AQA-KCRV18TK',
                    'manu_id' => '5',
                    'type_id' => '3',
                    'price' => '16790000',
                    'image' => 'aqua-aqa-kcrv18tk-1-org.jpg',
                    'description' => 'Lo???i m??y: M??y l???nh 1 chi???u (ch??? l??m l???nh)
                    Inverter: M??y l???nh Inverter
                    C??ng su???t l??m l???nh: 2 HP - 17.400 BTU
                    Ph???m vi l??m l???nh hi???u qu???: T??? 20 - 30m?? (t??? 60 ?????n 80m??)
                    C??ng su???t s?????i ???m: Kh??ng c?? s?????i ???m
                    L???c b???i, kh??ng khu???n, kh??? m??i: T???m l???c b???o v??? ??a n??ng c??ng ngh??? 3M
                    C??ng ngh??? ti???t ki???m ??i???n: PID Inverter',
                    'feature' => '0',
                    'sale' => '0'
                ],
                [
                    'name' => 'M??y l???nh Samsung Inverter 1.5 HP AR13TYHYCWKNSV ',
                    'manu_id' => '1',
                    'type_id' => '3',
                    'price' => '10410000',
                    'image' => 'samsung-ar13tyhycwknsv-1-1-org.jpg',
                    'description' => 'Lo???i m??y: M??y l???nh 1 chi???u (ch??? l??m l???nh)
                    Inverter: M??y l???nh Inverter
                    C??ng su???t l??m l???nh: 1.5 HP - 12.000 BTU
                    Ph???m vi l??m l???nh hi???u qu???: T??? 15 - 20m?? (t??? 40 ?????n 60 m??)
                    C??ng su???t s?????i ???m: Kh??ng c?? s?????i ???m
                    L???c b???i, kh??ng khu???n, kh??? m??i: TB??? l???c th?? Easy Filter

                    B??? l???c Tri Care Filter l???c b???i, ch???ng n???m m???c, kh??ng khu???n
                    
                    M??ng l???c kh??ng khu???n Ag+',
                    'feature' => '0',
                    'sale' => '0'
                ],
                [
                    'name' => 'Smart Tivi Samsung 4K Crystal UHD 55 Inch UA55AU9000',
                    'manu_id' => '1',
                    'type_id' => '4',
                    'price' => '18400000',
                    'image' => 'led-4k-samsung-ua55au9000-3-1.jpg',
                    'description' => 'Lo???i tivi: Smart Tivi
                    K??ch c??? m??n h??nh: 55 inch
                    ????? ph??n gi???i: K (Ultra HD)
                    Lo???i m??n h??nh: LED vi???n (Edge LED), VA LCD',
                    'feature' => '0',
                    'sale' => '0'
                ],
                [
                    'name' => 'Smart Tivi QLED 4K 50 inch Samsung QA50Q65A',
                    'manu_id' => '1',
                    'type_id' => '4',
                    'price' => '21900000',
                    'image' => 'qled-4k-samsung-qa50q65a-2.jpg',
                    'description' => 'Lo???i tivi: Smart Tivi QLED
                    K??ch c??? m??n h??nh: 50 inch
                    ????? ph??n gi???i: 4K (Ultra HD)
                    Lo???i m??n h??nh: LED vi???n k???t h???p Dual LED, VA LCD',
                    'feature' => '0',
                    'sale' => '0'
                ],
                [
                    'name' => 'Smart Tivi NanoCell LG 4K 55 inch 55NANO86TPA',
                    'manu_id' => '4',
                    'type_id' => '4',
                    'price' => '17900000',
                    'image' => 'dz-1-org.jpg',
                    'description' => 'Lo???i tivi: Smart TV NanoCell
                    K??ch c??? m??n h??nh: 55 inch
                    ????? ph??n gi???i: 4K (Ultra HD)
                    Lo???i m??n h??nh: LED vi???n (Edge LED), IPS LCD',
                    'feature' => '0',
                    'sale' => '0'
                ],
                [
                    'name' => 'Android Tivi AQUA 4K 43 inch LE43AQT6600UG',
                    'manu_id' => '5',
                    'type_id' => '4',
                    'price' => '9490000',
                    'image' => 'led-aqua-le43aqt6600ug-1-org.jpg',
                    'description' => 'Lo???i tivi: Android Tivi
                    K??ch c??? m??n h??nh: 43 inch
                    ????? ph??n gi???i: 4K (Ultra HD)
                    Lo???i m??n h??nh: LED n???n (Direct LED), VA LCD',
                    'feature' => '0',
                    'sale' => '0'
                ],
                [
                    'name' => 'Android Tivi AQUA 4K 55 inch LE55AQTS6UG',
                    'manu_id' => '5',
                    'type_id' => '4',
                    'price' => '14990000',
                    'image' => 'android-aqua-4k-55-inch-le55aqts6ug-1.jpg',
                    'description' => 'Lo???i tivi: Android Tivi QLED
                    K??ch c??? m??n h??nh: 55 inch
                    ????? ph??n gi???i: 4K (Ultra HD)
                    Lo???i m??n h??nh: LED n???n (Direct LED), VA LCD',
                    'feature' => '0',
                    'sale' => '0'
                ],
                [
                    'name' => 'Loa Bluetooth Karaoke LG OL45 220W',
                    'manu_id' => '4',
                    'type_id' => '5',
                    'price' => '2590000',
                    'image' => 'loa-karaoke-lg-ol45-1-3-org.jpg',
                    'description' => 'Lo???i s???n ph???m: Loa bluetooth
                    S??? l?????ng k??nh: H??ng kh??ng c??ng b???
                    T???ng c??ng su???t: 220 W
                    Ngu???n: C???m ??i???n d??ng
                    S??? ???????ng ti???ng c???a loa: H??ng kh??ng c??ng b???',
                    'feature' => '0',
                    'sale' => '0'
                ],
                [
                    'name' => 'Loa thanh soundbar LG SN5R',
                    'manu_id' => '4',
                    'type_id' => '5',
                    'price' => '3890000',
                    'image' => 'loa-thanh-lg-sn5r-1-1-org.jpg',
                    'description' => 'Lo???i s???n ph???m: Loa thanh (soundbar)
                    S??? l?????ng k??nh: 4.1 k??nh
                    T???ng c??ng su???t: 520 W
                    Ngu???n: C???m ??i???n d??ng
                    S??? ???????ng ti???ng c???a loa: H??ng kh??ng c??ng b???',
                    'feature' => '0',
                    'sale' => '0'
                ],
                [
                    'name' => 'Loa Th??p Samsung MX-T70/XV',
                    'manu_id' => '1',
                    'type_id' => '5',
                    'price' => '8290000',
                    'image' => 'samsung-mx-t70-xv-1-1-org.jpg',
                    'description' => 'Lo???i s???n ph???m: Loa k??o
                    S??? l?????ng k??nh: H??ng kh??ng c??ng b???
                    T???ng c??ng su???t: 1500 W
                    Ngu???n: C???m ??i???n d??ng
                    S??? ???????ng ti???ng c???a loa: H??ng kh??ng c??ng b???',
                    'feature' => '0',
                    'sale' => '0'
                ],
                [
                    'name' => 'Loa thanh Samsung HW-K350',
                    'manu_id' => '1',
                    'type_id' => '5',
                    'price' => '3000000',
                    'image' => 'dan-loa-dvd-samsung-hw-k350-2-org.jpg',
                    'description' => 'Lo???i s???n ph???m: Loa thanh (soundbar)
                    S??? l?????ng k??nh: 2.1 k??nh
                    T???ng c??ng su???t: 150 W
                    Ngu???n: C???m ??i???n d??ng
                    C??ng ngh??? ??m thanh: Dolby DigitalDTS Digital Surround',
                    'feature' => '0',
                    'sale' => '0'
                ],
                [
                    'name' => 'Loa thanh Samsung HW-Q700A',
                    'manu_id' => '1',
                    'type_id' => '5',
                    'price' => '9490000',
                    'image' => 'thanh-samsung-hw-q700a-3-2.jpg',
                    'description' => 'Lo???i s???n ph???m: Loa thanh (soundbar)
                    S??? l?????ng k??nh: 3.1.2 k??nh
                    T???ng c??ng su???t: 330 W
                    Ngu???n: C???m ??i???n d??ng
                    C??ng ngh??? ??m thanh: 
                    Acoustic Beam t???o ??m thanh v??m ???o         
                    Adaptive Sound 
                    C??ng ngh??? Q-Symphony
                    C??ng ngh??? ??m thanh chu???n Dolby Atmos/DTS:X 
                    SpaceFit Sound   
                    Surround Sound Expansion 
                    Truy???n t???i n???i dung HDR10+ qua c???ng 4K Pass-Through
                    T???i ??u ??m thanh ch??i Game v???i ch??? ????? Game Mode Pro',
                    'feature' => '0',
                    'sale' => '0'
                ]
            ]
        );
    }
}

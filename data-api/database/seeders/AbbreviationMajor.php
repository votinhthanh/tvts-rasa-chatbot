<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AbbreviationMajor extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('abbreviations_majors')->delete();

        \DB::table('abbreviations_majors')->insert(array
            (
                0 =>
                    array (
                        'id' => 1,
                        'name' => 'Giáo dục tiểu học',
                        'major_id' => 184
                    ),
                1 =>
                    array (
                        'id' => 2,
                        'name' => 'gdth',
                        'major_id' => 184
                    ),
                2 =>
                    array (
                        'id' => 3,
                        'name' => 'giao duc tieu hoc',
                        'major_id' => 184
                    ),
                3 =>
                    array (
                        'id' => 4,
                        'name' => 'giao duc th',
                        'major_id' => 184
                    ),
                4 =>
                    array (
                        'id' => 5,
                        'name' => 'gd tỉu học',
                        'major_id' => 184
                    ),
                5 =>
                    array (
                        'id' => 6,
                        'name' => 'giao duc tiu hoc',
                        'major_id' => 184
                    ),
                6 =>
                    array (
                        'id' => 7,
                        'name' => 'giao duc tiu hc',
                        'major_id' => 184
                    ),
                7 =>
                    array (
                        'id' => 8,
                        'name' => 'Giáo dục công dân',
                        'major_id' => 185
                    ),
                8 =>
                    array (
                        'id' => 9,
                        'name' => 'giao duc cd',
                        'major_id' => 185
                    ),
                9 =>
                    array (
                        'id' => 10,
                        'name' => 'gd công dân',
                        'major_id' => 185
                    ),
                10 =>
                    array (
                        'id' => 11,
                        'name' => 'giáo dục cdân',
                        'major_id' => 185
                    ),
                11 =>
                    array (
                        'id' => 12,
                        'name' => 'giao duc côg dân',
                        'major_id' => 185
                    ),
                12 =>
                    array (
                        'id' => 13,
                        'name' => 'gdcd',
                        'major_id' => 185
                    ),
                13 =>
                    array (
                        'id' => 14,
                        'name' => 'Giáo dục thể chất',
                        'major_id' => 186
                    ),
                14 =>
                    array (
                        'id' => 15,
                        'name' => 'giao duc tchat',
                        'major_id' => 186
                    ),
                15 =>
                    array (
                        'id' => 16,
                        'name' => 'giao duc tc',
                        'major_id' => 186
                    ),
                16 =>
                    array (
                        'id' => 17,
                        'name' => 'gdtc',
                        'major_id' => 186
                    ),
                17 =>
                    array (
                        'id' => 18,
                        'name' => 'gd thể chất',
                        'major_id' => 186
                    ),
                18 =>
                    array (
                        'id' => 19,
                        'name' => 'gduc thể chất',
                        'major_id' => 186
                    ),
                19 =>
                    array (
                        'id' => 20,
                        'name' => 'Sư phạm Toán học',
                        'major_id' => 187
                    ),
                20 =>
                    array (
                        'id' => 21,
                        'name' => 'Sư phạm th',
                        'major_id' => 187
                    ),
                21 =>
                    array (
                        'id' => 22,
                        'name' => 'Sư phạm toán hc',
                        'major_id' => 187
                    ),
                22 =>
                    array (
                        'id' => 23,
                        'name' => 'Spth',
                        'major_id' => 187
                    ),
                23 =>
                    array (
                        'id' => 24,
                        'name' => 'Sp toán học',
                        'major_id' => 187
                    ),
                24 =>
                    array (
                        'id' => 25,
                        'name' => 'Sư phạm tón học',
                        'major_id' => 187
                    ),
                25 =>
                    array (
                        'id' => 26,
                        'name' => 'Sư phạm Tin học',
                        'major_id' => 188
                    ),
                26 =>
                    array (
                        'id' => 27,
                        'name' => 'Sp Tin học',
                        'major_id' => 188
                    ),
                27 =>
                    array (
                        'id' => 28,
                        'name' => 'Sư phạm Tin hc',
                        'major_id' => 188
                    ),
                28 =>
                    array (
                        'id' => 29,
                        'name' => 'Spthọc',
                        'major_id' => 188
                    ),
                29 =>
                    array (
                        'id' => 30,
                        'name' => 'Sư phạm tin',
                        'major_id' => 188
                    ),
                30 =>
                    array (
                        'id' => 31,
                        'name' => 'Sư phạm Vật lý',
                        'major_id' => 189
                    ),
                31 =>
                    array (
                        'id' => 32,
                        'name' => 'Sư phạm Vl',
                        'major_id' => 189
                    ),
                32 =>
                    array (
                        'id' => 33,
                        'name' => 'Sp Vật lý',
                        'major_id' => 189
                    ),
                33 =>
                    array (
                        'id' => 34,
                        'name' => 'Spvl',
                        'major_id' => 189
                    ),
                34 =>
                    array (
                        'id' => 35,
                        'name' => 'Sư phạm Vlý',
                        'major_id' => 189
                    ),
                35 =>
                    array (
                        'id' => 36,
                        'name' => 'Sư phạm Vật lí',
                        'major_id' => 189
                    ),
                36 =>
                    array (
                        'id' => 37,
                        'name' => 'Sư phạm Hóa học',
                        'major_id' => 190
                    ),
                37 =>
                    array (
                        'id' => 38,
                        'name' => 'Sư phạm Hhọc',
                        'major_id' => 190
                    ),
                38 =>
                    array (
                        'id' => 39,
                        'name' => 'Sp Hóa học',
                        'major_id' => 190
                    ),
                39 =>
                    array (
                        'id' => 40,
                        'name' => 'Sphh',
                        'major_id' => 190
                    ),
                40 =>
                    array (
                        'id' => 41,
                        'name' => 'Spham Hhọc',
                        'major_id' => 190
                    ),
                41 =>
                    array (
                        'id' => 42,
                        'name' => 'Sư phạm Sinh học',
                        'major_id' => 191
                    ),
                42 =>
                    array (
                        'id' => 43,
                        'name' => 'Sư phạm Shọc',
                        'major_id' => 191
                    ),
                43 =>
                    array (
                        'id' => 44,
                        'name' => 'Sphạm Sinh học',
                        'major_id' => 191
                    ),
                44 =>
                    array (
                        'id' => 45,
                        'name' => 'Sp Sinh học',
                        'major_id' => 191
                    ),
                45 =>
                    array (
                        'id' => 46,
                        'name' => 'Sp Shọc',
                        'major_id' => 191
                    ),
                46 =>
                    array (
                        'id' => 47,
                        'name' => 'Spsh',
                        'major_id' => 191
                    ),
                47 =>
                    array (
                        'id' => 48,
                        'name' => 'Sư phạm Ngữ văn',
                        'major_id' => 192
                    ),
                48 =>
                    array (
                        'id' => 49,
                        'name' => 'Sư phạm Nvăn',
                        'major_id' => 192
                    ),
                49 =>
                    array (
                        'id' => 50,
                        'name' => 'Sphạm Nvăn',
                        'major_id' => 192
                    ),
                50 =>
                    array (
                        'id' => 51,
                        'name' => 'Sp Ngữ văn',
                        'major_id' => 192
                    ),
                51 =>
                    array (
                        'id' => 52,
                        'name' => 'Spnv',
                        'major_id' => 192
                    ),
                52 =>
                    array (
                        'id' => 53,
                        'name' => 'Sp Nvăn',
                        'major_id' => 192
                    ),
                53 =>
                    array (
                        'id' => 54,
                        'name' => 'Sư phạm Lịch sử',
                        'major_id' => 193
                    ),
                54 =>
                    array (
                        'id' => 55,
                        'name' => 'Sư phạm Lsử',
                        'major_id' => 193
                    ),
                55 =>
                    array (
                        'id' => 56,
                        'name' => 'Sphạm Lsử',
                        'major_id' => 193
                    ),
                56 =>
                    array (
                        'id' => 57,
                        'name' => 'Sp Lsử',
                        'major_id' => 193
                    ),
                57 =>
                    array (
                        'id' => 58,
                        'name' => 'Sp Lịch sử',
                        'major_id' => 193
                    ),
                58 =>
                    array (
                        'id' => 59,
                        'name' => 'Spls',
                        'major_id' => 193
                    ),
                59 =>
                    array (
                        'id' => 60,
                        'name' => 'Sphạm Địa lý',
                        'major_id' => 194
                    ),
                60 =>
                    array (
                        'id' => 61,
                        'name' => 'Sư phạm Đlý',
                        'major_id' => 194
                    ),
                61 =>
                    array (
                        'id' => 62,
                        'name' => 'Sphạm Đlý',
                        'major_id' => 194
                    ),
                62 =>
                    array (
                        'id' => 63,
                        'name' => 'Sp Địa lý',
                        'major_id' => 194
                    ),
                63 =>
                    array (
                        'id' => 64,
                        'name' => 'Sư phạm Địa lí',
                        'major_id' => 194
                    ),
                64 =>
                    array (
                        'id' => 65,
                        'name' => 'Spdl',
                        'major_id' => 194
                    ),
                65 =>
                    array (
                        'id' => 66,
                        'name' => 'Sư phạm Tiếng Anh',
                        'major_id' => 195
                    ),
                66 =>
                    array (
                        'id' => 67,
                        'name' => 'Sphạm Tiếng Anh',
                        'major_id' => 195
                    ),
                67 =>
                    array (
                        'id' => 68,
                        'name' => 'Sư phạm TAnh',
                        'major_id' => 195
                    ),
                68 =>
                    array (
                        'id' => 69,
                        'name' => 'Sphạm TAnh',
                        'major_id' => 195
                    ),
                69 =>
                    array (
                        'id' => 70,
                        'name' => 'Sp Tiếng Anh',
                        'major_id' => 195
                    ),
                70 =>
                    array (
                        'id' => 71,
                        'name' => 'Spta',
                        'major_id' => 195
                    ),
                71 =>
                    array (
                        'id' => 72,
                        'name' => 'Sư phạm Tiếng Pháp',
                        'major_id' => 196
                    ),
                72 =>
                    array (
                        'id' => 73,
                        'name' => 'Sphạm TPháp',
                        'major_id' => 196
                    ),
                73 =>
                    array (
                        'id' => 74,
                        'name' => 'Sphạm Tiếng Pháp',
                        'major_id' => 196
                    ),
                74 =>
                    array (
                        'id' => 75,
                        'name' => 'Sư phạm TPháp',
                        'major_id' => 196
                    ),
                75 =>
                    array (
                        'id' => 76,
                        'name' => 'Sp Tiếng Pháp',
                        'major_id' => 196
                    ),
                76 =>
                    array (
                        'id' => 77,
                        'name' => 'Sptp',
                        'major_id' => 196
                    ),
                77 =>
                    array (
                        'id' => 78,
                        'name' => 'Công nghệ kỹ thuật hóa học',
                        'major_id' => 197
                    ),
                78 =>
                    array (
                        'id' => 79,
                        'name' => 'Cnghệ kỹ thuật hóa học',
                        'major_id' => 197
                    ),
                79 =>
                    array (
                        'id' => 80,
                        'name' => 'Công nghệ kt hóa học',
                        'major_id' => 197
                    ),
                80 =>
                    array (
                        'id' => 81,
                        'name' => 'Cnkt hóa học',
                        'major_id' => 197
                    ),
                81 =>
                    array (
                        'id' => 82,
                        'name' => 'Công nghệ kỹ thuật hh',
                        'major_id' => 197
                    ),
                82 =>
                    array (
                        'id' => 83,
                        'name' => 'cnkthh',
                        'major_id' => 197
                    ),
                83 =>
                    array (
                        'id' => 84,
                        'name' => 'Kỹ thuật vật liệu',
                        'major_id' => 198
                    ),
                84 =>
                    array (
                        'id' => 85,
                        'name' => 'Kt vật liệu',
                        'major_id' => 198
                    ),
                85 =>
                    array (
                        'id' => 86,
                        'name' => 'Kt vliệu',
                        'major_id' => 198
                    ),
                86 =>
                    array (
                        'id' => 87,
                        'name' => 'Kt vật lịu',
                        'major_id' => 198
                    ),
                87 =>
                    array (
                        'id' => 88,
                        'name' => 'Ktvl',
                        'major_id' => 198
                    ),
                88 =>
                    array (
                        'id' => 89,
                        'name' => 'Kthuật vật liệu',
                        'major_id' => 198
                    ),
                89 =>
                    array (
                        'id' => 90,
                        'name' => 'Quản lý công nghiệp',
                        'major_id' => 199
                    ),
                90 =>
                    array (
                        'id' => 91,
                        'name' => 'Qlý công nghiệp',
                        'major_id' => 199
                    ),
                91 =>
                    array (
                        'id' => 92,
                        'name' => 'Quản lý cnghiệp',
                        'major_id' => 199
                    ),
                92 =>
                    array (
                        'id' => 93,
                        'name' => 'Qlý cnghiệp',
                        'major_id' => 199
                    ),
                93 =>
                    array (
                        'id' => 94,
                        'name' => 'Quản lí công nghiệp',
                        'major_id' => 199
                    ),
                94 =>
                    array (
                        'id' => 95,
                        'name' => 'Qlcn',
                        'major_id' => 199
                    ),
                95 =>
                    array (
                        'id' => 96,
                        'name' => 'Kỹ thuật cơ khí',
                        'major_id' => 200
                    ),
                96 =>
                    array (
                        'id' => 97,
                        'name' => 'Kthuật cơ khí',
                        'major_id' => 200
                    ),
                97 =>
                    array (
                        'id' => 98,
                        'name' => 'Kỹ thuật ckhí',
                        'major_id' => 200
                    ),
                98 =>
                    array (
                        'id' => 99,
                        'name' => 'Kthuật ckhí',
                        'major_id' => 200
                    ),
                99 =>
                    array (
                        'id' => 100,
                        'name' => 'Kĩ thuật cơ khí',
                        'major_id' => 200
                    ),
                100 =>
                    array (
                        'id' => 101,
                        'name' => 'Ktck',
                        'major_id' => 200
                    ),
                101 =>
                    array (
                        'id' => 102,
                        'name' => 'Kỹ thuật cơ điện tử',
                        'major_id' => 201
                    ),
                102 =>
                    array (
                        'id' => 103,
                        'name' => 'Kthuật cơ điện tử',
                        'major_id' => 201
                    ),
                103 =>
                    array (
                        'id' => 104,
                        'name' => 'Kỹ thuật cơ đtử',
                        'major_id' => 201
                    ),
                104 =>
                    array (
                        'id' => 105,
                        'name' => 'Kĩ thuật cơ điện tử',
                        'major_id' => 201
                    ),
                105 =>
                    array (
                        'id' => 106,
                        'name' => 'Kthuật cơ đtử',
                        'major_id' => 201
                    ),
                106 =>
                    array (
                        'id' => 107,
                        'name' => 'Ktcdt',
                        'major_id' => 201
                    ),
                107 =>
                    array (
                        'id' => 108,
                        'name' => 'Kỹ thuật điều khiển và tự động hóa',
                        'major_id' => 202
                    ),
                108 =>
                    array (
                        'id' => 109,
                        'name' => 'Kĩ thuật điều khiển và tự động hóa',
                        'major_id' => 202
                    ),
                109 =>
                    array (
                        'id' => 110,
                        'name' => 'Kthuật điều khiển và tự động hóa',
                        'major_id' => 202
                    ),
                110 =>
                    array (
                        'id' => 111,
                        'name' => 'Kỹ thuật đkhiển và tự động hóa',
                        'major_id' => 202
                    ),
                111 =>
                    array (
                        'id' => 112,
                        'name' => 'Kỹ thuật điều khiển và tđộng hóa',
                        'major_id' => 202
                    ),
                112 =>
                    array (
                        'id' => 113,
                        'name' => 'Ktdkvtdh',
                        'major_id' => 202
                    ),
                113 =>
                    array (
                        'id' => 114,
                        'name' => 'Kỹ thuật điện tử - viễn thông',
                        'major_id' => 203
                    ),
                114 =>
                    array (
                        'id' => 115,
                        'name' => 'Kĩ thuật điện tử - viễn thông',
                        'major_id' => 203
                    ),
                115 =>
                    array (
                        'id' => 116,
                        'name' => 'Kthuật điện tử - viễn thông',
                        'major_id' => 203
                    ),
                116 =>
                    array (
                        'id' => 117,
                        'name' => 'Kỹ thuật đtử - viễn thông',
                        'major_id' => 203
                    ),
                117 =>
                    array (
                        'id' => 118,
                        'name' => 'Kỹ thuật điện tử - vthông',
                        'major_id' => 203
                    ),
                118 =>
                    array (
                        'id' => 119,
                        'name' => 'ktdtvt',
                        'major_id' => 203
                    ),
                119 =>
                    array (
                        'id' => 120,
                        'name' => 'Kỹ thuật điện',
                        'major_id' => 204
                    ),
                120 =>
                    array (
                        'id' => 121,
                        'name' => 'Kthuật điện',
                        'major_id' => 204
                    ),
                121 =>
                    array (
                        'id' => 122,
                        'name' => 'Kĩ thuật điện',
                        'major_id' => 204
                    ),
                122 =>
                    array (
                        'id' => 123,
                        'name' => 'Ktd',
                        'major_id' => 204
                    ),
                123 =>
                    array (
                        'id' => 124,
                        'name' => 'Kt điện',
                        'major_id' => 204
                    ),
                124 =>
                    array (
                        'id' => 125,
                        'name' => 'Kĩ thực điện',
                        'major_id' => 204
                    ),
                125 =>
                    array (
                        'id' => 126,
                        'name' => 'Kỹ thuật xây dựng',
                        'major_id' => 205
                    ),
                126 =>
                    array (
                        'id' => 127,
                        'name' => 'Kthuật xây dựng',
                        'major_id' => 205
                    ),
                127 =>
                    array (
                        'id' => 128,
                        'name' => 'Kỹ thuật xdựng',
                        'major_id' => 205
                    ),
                128 =>
                    array (
                        'id' => 129,
                        'name' => 'Kĩ thuật xây dựng',
                        'major_id' => 205
                    ),
                129 =>
                    array (
                        'id' => 130,
                        'name' => 'Kt xây dựng',
                        'major_id' => 205
                    ),
                130 =>
                    array (
                        'id' => 131,
                        'name' => 'Ktxd',
                        'major_id' => 205
                    ),
                131 =>
                    array (
                        'id' => 132,
                        'name' => 'Kỹ thuật xây dựng công trình thủy',
                        'major_id' => 206
                    ),
                132 =>
                    array (
                        'id' => 133,
                        'name' => 'Kthuật xây dựng công trình thủy',
                        'major_id' => 206
                    ),
                133 =>
                    array (
                        'id' => 134,
                        'name' => 'Ktxd công trình thủy',
                        'major_id' => 206
                    ),
                134 =>
                    array (
                        'id' => 135,
                        'name' => 'Kt xdựng công trình thủy',
                        'major_id' => 206
                    ),
                135 =>
                    array (
                        'id' => 136,
                        'name' => 'Kt xây dựng công trình thủy',
                        'major_id' => 206
                    ),
                136 =>
                    array (
                        'id' => 137,
                        'name' => 'Ktxdctt',
                        'major_id' => 206
                    ),
                137 =>
                    array (
                        'id' => 138,
                        'name' => 'Kỹ thuật xây dựng công trình giao thông',
                        'major_id' => 207
                    ),
                138 =>
                    array (
                        'id' => 139,
                        'name' => 'Kthuật xây dựng công trình giao thông',
                        'major_id' => 207
                    ),
                139 =>
                    array (
                        'id' => 140,
                        'name' => 'Ktxd công trình giao thông',
                        'major_id' => 207
                    ),
                140 =>
                    array (
                        'id' => 141,
                        'name' => 'Kỹ thuật xây dựng công trình gthông',
                        'major_id' => 207
                    ),
                141 =>
                    array (
                        'id' => 142,
                        'name' => 'Kỹ thuật xd công trình giao thông',
                        'major_id' => 207
                    ),
                142 =>
                    array (
                        'id' => 143,
                        'name' => 'Ktxdctgt',
                        'major_id' => 207
                    ),
                143 =>
                    array (
                        'id' => 144,
                        'name' => 'Khoa học máy tính',
                        'major_id' => 208
                    ),
                144 =>
                    array (
                        'id' => 145,
                        'name' => 'Khọc máy tính',
                        'major_id' => 208
                    ),
                145 =>
                    array (
                        'id' => 146,
                        'name' => 'Khoa học mtính',
                        'major_id' => 208
                    ),
                146 =>
                    array (
                        'id' => 147,
                        'name' => 'Khoa học mt',
                        'major_id' => 208
                    ),
                147 =>
                    array (
                        'id' => 148,
                        'name' => 'Kh máy tính',
                        'major_id' => 208
                    ),
                148 =>
                    array (
                        'id' => 149,
                        'name' => 'Khmt',
                        'major_id' => 208
                    ),
                149 =>
                    array (
                        'id' => 150,
                        'name' => 'Kỹ thuật máy tính',
                        'major_id' => 209
                    ),
                150 =>
                    array (
                        'id' => 151,
                        'name' => 'Kthuật máy tính',
                        'major_id' => 209
                    ),
                151 =>
                    array (
                        'id' => 152,
                        'name' => 'Kỹ thuật mtính',
                        'major_id' => 209
                    ),
                152 =>
                    array (
                        'id' => 153,
                        'name' => 'Kỹ thuật mt',
                        'major_id' => 209
                    ),
                153 =>
                    array (
                        'id' => 154,
                        'name' => 'Kthuật mtính',
                        'major_id' => 209
                    ),
                154 =>
                    array (
                        'id' => 155,
                        'name' => 'Ktmt',
                        'major_id' => 209
                    ),
                155 =>
                    array (
                        'id' => 156,
                        'name' => 'Mạng máy tính và truyền thông dữ liệu',
                        'major_id' => 210
                    ),
                156 =>
                    array (
                        'id' => 157,
                        'name' => 'Mạng mt và truyền thông dữ liệu',
                        'major_id' => 210
                    ),
                157 =>
                    array (
                        'id' => 158,
                        'name' => 'Mạng máy tính và ttdl',
                        'major_id' => 210
                    ),
                158 =>
                    array (
                        'id' => 159,
                        'name' => 'Mạng mtính và tt dữ liệu',
                        'major_id' => 210
                    ),
                159 =>
                    array (
                        'id' => 160,
                        'name' => 'Mmtvttdl',
                        'major_id' => 210
                    ),
                160 =>
                    array (
                        'id' => 161,
                        'name' => 'Kỹ thuật phần mềm',
                        'major_id' => 211
                    ),
                161 =>
                    array (
                        'id' => 162,
                        'name' => 'Kĩ thuật phần mềm',
                        'major_id' => 211
                    ),
                162 =>
                    array (
                        'id' => 163,
                        'name' => 'Kthuật phần mềm',
                        'major_id' => 211
                    ),
                163 =>
                    array (
                        'id' => 164,
                        'name' => 'Kỹ thuật pmềm',
                        'major_id' => 211
                    ),
                164 =>
                    array (
                        'id' => 165,
                        'name' => 'Kt phần mềm',
                        'major_id' => 211
                    ),
                165 =>
                    array (
                        'id' => 166,
                        'name' => 'Ktpm',
                        'major_id' => 211
                    ),
                166 =>
                    array (
                        'id' => 167,
                        'name' => 'Hệ thống thông tin',
                        'major_id' => 212
                    ),
                167 =>
                    array (
                        'id' => 168,
                        'name' => 'Hthống thông tin',
                        'major_id' => 212
                    ),
                168 =>
                    array (
                        'id' => 169,
                        'name' => 'Hệ thống ttin',
                        'major_id' => 212
                    ),
                169 =>
                    array (
                        'id' => 170,
                        'name' => 'Hthống ttin',
                        'major_id' => 212
                    ),
                170 =>
                    array (
                        'id' => 171,
                        'name' => 'Ht thông tin',
                        'major_id' => 212
                    ),
                171 =>
                    array (
                        'id' => 172,
                        'name' => 'httt',
                        'major_id' => 212
                    ),
                172 =>
                    array (
                        'id' => 173,
                        'name' => 'Công nghệ thông tin',
                        'major_id' => 213
                    ),
                173 =>
                    array (
                        'id' => 174,
                        'name' => 'Cnghệ thông tin',
                        'major_id' => 213
                    ),
                174 =>
                    array (
                        'id' => 175,
                        'name' => 'Công nghệ ttin',
                        'major_id' => 213
                    ),
                175 =>
                    array (
                        'id' => 176,
                        'name' => 'Cn thông tin',
                        'major_id' => 213
                    ),
                176 =>
                    array (
                        'id' => 177,
                        'name' => 'Cnghệ tt',
                        'major_id' => 213
                    ),
                177 =>
                    array (
                        'id' => 178,
                        'name' => 'Cntt',
                        'major_id' => 213
                    ),
                178 =>
                    array (
                        'id' => 179,
                        'name' => 'Công nghệ thông tin - học tại khu Hòa An',
                        'major_id' => 214
                    ),
                179 =>
                    array (
                        'id' => 180,
                        'name' => 'Cnghệ thông tin - học tại khu Hòa An',
                        'major_id' => 214
                    ),
                180 =>
                    array (
                        'id' => 181,
                        'name' => 'Công nghệ ttin - học tại khu Hòa An',
                        'major_id' => 214
                    ),
                181 =>
                    array (
                        'id' => 182,
                        'name' => 'Cntt - hc tại khu Hòa An',
                        'major_id' => 214
                    ),
                182 =>
                    array (
                        'id' => 183,
                        'name' => 'Công nghệ thông tin - học tại khu HA',
                        'major_id' => 214
                    ),
                183 =>
                    array (
                        'id' => 184,
                        'name' => 'Cntt - học tại khu Hòa An',
                        'major_id' => 214
                    ),
                184 =>
                    array (
                        'id' => 185,
                        'name' => 'Kế toán',
                        'major_id' => 215
                    ),
                185 =>
                    array (
                        'id' => 186,
                        'name' => 'Ktoán',
                        'major_id' => 215
                    ),
                186 =>
                    array (
                        'id' => 187,
                        'name' => 'Kt',
                        'major_id' => 215
                    ),
                187 =>
                    array (
                        'id' => 188,
                        'name' => 'Kiểm toán',
                        'major_id' => 216
                    ),
                188 =>
                    array (
                        'id' => 189,
                        'name' => 'Kỉm toán',
                        'major_id' => 216
                    ),
                189 =>
                    array (
                        'id' => 190,
                        'name' => 'Kiểm tón',
                        'major_id' => 216
                    ),
                190 =>
                    array (
                        'id' => 191,
                        'name' => 'Tài chính - Ngân hàng',
                        'major_id' => 217
                    ),
                191 =>
                    array (
                        'id' => 192,
                        'name' => 'Tchính - Ngân hàng',
                        'major_id' => 217
                    ),
                192 =>
                    array (
                        'id' => 193,
                        'name' => 'Tài chính - Nhàng',
                        'major_id' => 217
                    ),
                193 =>
                    array (
                        'id' => 194,
                        'name' => 'Tchính - Nhàng',
                        'major_id' => 217
                    ),
                194 =>
                    array (
                        'id' => 195,
                        'name' => 'Tc - Ngân hàng',
                        'major_id' => 217
                    ),
                195 =>
                    array (
                        'id' => 196,
                        'name' => 'Tcnh',
                        'major_id' => 217
                    ),
                196 =>
                    array (
                        'id' => 197,
                        'name' => 'Quản trị kinh doanh',
                        'major_id' => 218
                    ),
                197 =>
                    array (
                        'id' => 198,
                        'name' => 'Qtrị kinh doanh',
                        'major_id' => 218
                    ),
                198 =>
                    array (
                        'id' => 199,
                        'name' => 'Quản trị kdoanh',
                        'major_id' => 218
                    ),
                199 =>
                    array (
                        'id' => 200,
                        'name' => 'Qt kinh doanh',
                        'major_id' => 218
                    ),
                200 =>
                    array (
                        'id' => 201,
                        'name' => 'Quản trị kd',
                        'major_id' => 218
                    ),
                201 =>
                    array (
                        'id' => 202,
                        'name' => 'Qtkd',
                        'major_id' => 218
                    ),
                202 =>
                    array (
                        'id' => 203,
                        'name' => 'Quản trị kinh doanh - học tại khu Hòa An',
                        'major_id' => 219
                    ),
                203 =>
                    array (
                        'id' => 204,
                        'name' => 'Qtrị kinh doanh - học tại khu Hòa An',
                        'major_id' => 219
                    ),
                204 =>
                    array (
                        'id' => 205,
                        'name' => 'Quản trị kdoanh - học tại khu Hòa An',
                        'major_id' => 219
                    ),
                205 =>
                    array (
                        'id' => 206,
                        'name' => 'Quản trị kinh doanh - học tại khu HA',
                        'major_id' => 219
                    ),
                206 =>
                    array (
                        'id' => 207,
                        'name' => 'Qtkd - hc tại khu Hòa An',
                        'major_id' => 219
                    ),
                207 =>
                    array (
                        'id' => 208,
                        'name' => 'Quản trị kinh doanh - hc tại khu HA',
                        'major_id' => 219
                    ),
                208 =>
                    array (
                        'id' => 209,
                        'name' => 'Qtrị dịch vụ du lịch và lữ hành',
                        'major_id' => 220
                    ),
                209 =>
                    array (
                        'id' => 210,
                        'name' => 'Quản trị dvụ du lịch và lữ hành',
                        'major_id' => 220
                    ),
                210 =>
                    array (
                        'id' => 211,
                        'name' => 'Quản trị dịch vụ dlịch và lữ hành',
                        'major_id' => 220
                    ),
                211 =>
                    array (
                        'id' => 212,
                        'name' => 'Qtdv du lịch và lữ hành',
                        'major_id' => 220
                    ),
                212 =>
                    array (
                        'id' => 213,
                        'name' => 'Quản trị dịch vụ du lịch và lữ hành',
                        'major_id' => 220
                    ),
                213 =>
                    array (
                        'id' => 214,
                        'name' => 'Qtdvdlvlh',
                        'major_id' => 220
                    ),
                214 =>
                    array (
                        'id' => 215,
                        'name' => 'Marketing',
                        'major_id' => 221
                    ),
                215 =>
                    array (
                        'id' => 216,
                        'name' => 'Mkt',
                        'major_id' => 221
                    ),
                216 =>
                    array (
                        'id' => 217,
                        'name' => 'Kinh doanh thương mại',
                        'major_id' => 222
                    ),
                217 =>
                    array (
                        'id' => 218,
                        'name' => 'Kdoanh thương mại',
                        'major_id' => 222
                    ),
                218 =>
                    array (
                        'id' => 219,
                        'name' => 'Kinh doanh tmại',
                        'major_id' => 222
                    ),
                219 =>
                    array (
                        'id' => 220,
                        'name' => 'Kdoanh tmại',
                        'major_id' => 222
                    ),
                220 =>
                    array (
                        'id' => 221,
                        'name' => 'Kd thương mại',
                        'major_id' => 222
                    ),
                221 =>
                    array (
                        'id' => 222,
                        'name' => 'Kd tmại',
                        'major_id' => 222
                    ),
                222 =>
                    array (
                        'id' => 223,
                        'name' => 'Kdtm',
                        'major_id' => 222
                    ),
                223 =>
                    array (
                        'id' => 224,
                        'name' => 'Kinh doanh quốc tế',
                        'major_id' => 223
                    ),
                224 =>
                    array (
                        'id' => 225,
                        'name' => 'Kdoanh quốc tế',
                        'major_id' => 223
                    ),
                225 =>
                    array (
                        'id' => 226,
                        'name' => 'Kinh doanh qtế',
                        'major_id' => 223
                    ),
                226 =>
                    array (
                        'id' => 227,
                        'name' => 'Kdoanh qtế',
                        'major_id' => 223
                    ),
                227 =>
                    array (
                        'id' => 228,
                        'name' => 'Kd quốc tế',
                        'major_id' => 223
                    ),
                228 =>
                    array (
                        'id' => 229,
                        'name' => 'Kdqt',
                        'major_id' => 223
                    ),
                229 =>
                    array (
                        'id' => 230,
                        'name' => 'Kinh doanh nông nghiệp - học tại khu Hòa An',
                        'major_id' => 224
                    ),
                230 =>
                    array (
                        'id' => 231,
                        'name' => 'Kdoanh nông nghiệp - học tại khu Hòa An',
                        'major_id' => 224
                    ),
                231 =>
                    array (
                        'id' => 232,
                        'name' => 'Kdoanh nnghiệp - học tại khu Hòa An',
                        'major_id' => 224
                    ),
                232 =>
                    array (
                        'id' => 233,
                        'name' => 'Kdnn - học tại khu Hòa An',
                        'major_id' => 224
                    ),
                233 =>
                    array (
                        'id' => 234,
                        'name' => 'Kdoanh nn - học tại khu Hòa An',
                        'major_id' => 224
                    ),
                234 =>
                    array (
                        'id' => 235,
                        'name' => 'Kd nông nghiệp - học tại khu Hòa An',
                        'major_id' => 224
                    ),
                235 =>
                    array (
                        'id' => 236,
                        'name' => 'Kinh tế',
                        'major_id' => 225
                    ),
                236 =>
                    array (
                        'id' => 237,
                        'name' => 'Ktế',
                        'major_id' => 225
                    ),
                237 =>
                    array (
                        'id' => 238,
                        'name' => 'Kinh tế nông nghiệp',
                        'major_id' => 226
                    ),
                238 =>
                    array (
                        'id' => 239,
                        'name' => 'Ktế nông nghiệp',
                        'major_id' => 226
                    ),
                239 =>
                    array (
                        'id' => 240,
                        'name' => 'Kinh tế nnghiệp',
                        'major_id' => 226
                    ),
                240 =>
                    array (
                        'id' => 241,
                        'name' => 'Kt nông nghiệp',
                        'major_id' => 226
                    ),
                241 =>
                    array (
                        'id' => 242,
                        'name' => 'Ktế nnghiệp',
                        'major_id' => 226
                    ),
                242 =>
                    array (
                        'id' => 243,
                        'name' => 'Ktnn',
                        'major_id' => 226
                    ),
                243 =>
                    array (
                        'id' => 244,
                        'name' => 'Kinh tế nông nghiệp - học tại khu Hòa An',
                        'major_id' => 227
                    ),
                244 =>
                    array (
                        'id' => 245,
                        'name' => 'Ktế nông nghiệp - học tại khu Hòa An',
                        'major_id' => 227
                    ),
                245 =>
                    array (
                        'id' => 246,
                        'name' => 'Kinh tế nnghiệp - học tại khu Hòa An',
                        'major_id' => 227
                    ),
                246 =>
                    array (
                        'id' => 247,
                        'name' => 'Kinh tế nông nghiệp - hc tại khu Hòa An',
                        'major_id' => 227
                    ),
                247 =>
                    array (
                        'id' => 248,
                        'name' => 'Kt nông nghiệp - học tại khu Hòa An',
                        'major_id' => 227
                    ),
                248 =>
                    array (
                        'id' => 249,
                        'name' => 'Ktnn - học tại khu Hòa An',
                        'major_id' => 227
                    ),
                249 =>
                    array (
                        'id' => 250,
                        'name' => 'Kinh tế tài nguyên thiên nhiên',
                        'major_id' => 228
                    ),
                250 =>
                    array (
                        'id' => 251,
                        'name' => 'Ktế tài nguyên thiên nhiên',
                        'major_id' => 228
                    ),
                251 =>
                    array (
                        'id' => 252,
                        'name' => 'Kt tài nguyên thiên nhiên',
                        'major_id' => 228
                    ),
                252 =>
                    array (
                        'id' => 253,
                        'name' => 'Kinh tế tntn',
                        'major_id' => 228
                    ),
                253 =>
                    array (
                        'id' => 254,
                        'name' => 'Ktế tntn',
                        'major_id' => 228
                    ),
                254 =>
                    array (
                        'id' => 255,
                        'name' => 'Kttntn',
                        'major_id' => 228
                    ),
                255 =>
                    array (
                        'id' => 256,
                        'name' => 'Luật',
                        'major_id' => 229
                    ),
                256 =>
                    array (
                        'id' => 257,
                        'name' => 'L',
                        'major_id' => 229
                    ),
                257 =>
                    array (
                        'id' => 258,
                        'name' => 'Luật (chuyên ngành LHC) - hc tại khu HA',
                        'major_id' => 230
                    ),
                258 =>
                    array (
                        'id' => 259,
                        'name' => 'Luật (chuyên ngành Luật Hành chính) - học tại khu Hòa An',
                        'major_id' => 230
                    ),
                259 =>
                    array (
                        'id' => 260,
                        'name' => 'Luật (cn Luật Hành chính) - học tại khu Hòa An',
                        'major_id' => 230
                    ),
                260 =>
                    array (
                        'id' => 261,
                        'name' => 'Luật (chuyên ngành Luật Hchính) - học tại khu Hòa An',
                        'major_id' => 230
                    ),
                261 =>
                    array (
                        'id' => 262,
                        'name' => 'Luật (cn Luật Hành chính) - học tại khu Hòa An',
                        'major_id' => 230
                    ),
                262 =>
                    array (
                        'id' => 263,
                        'name' => 'Luật (chuyên ngành Luật Hành chín) - học tại khu Hòa An',
                        'major_id' => 230
                    ),
                263 =>
                    array (
                        'id' => 264,
                        'name' => 'Luật (chuyên ngành LHC) - học tại khu Hòa An',
                        'major_id' => 230
                    ),
                264 =>
                    array (
                        'id' => 265,
                        'name' => 'Cnghệ thực phẩm',
                        'major_id' => 231
                    ),
                265 =>
                    array (
                        'id' => 266,
                        'name' => 'Công nghệ tphẩm',
                        'major_id' => 231
                    ),
                266 =>
                    array (
                        'id' => 267,
                        'name' => 'Cn thực phẩm',
                        'major_id' => 231
                    ),
                267 =>
                    array (
                        'id' => 268,
                        'name' => 'Công nghệ thực phẩm',
                        'major_id' => 231
                    ),
                268 =>
                    array (
                        'id' => 269,
                        'name' => 'Cnghệ tp',
                        'major_id' => 231
                    ),
                269 =>
                    array (
                        'id' => 270,
                        'name' => 'Cntp',
                        'major_id' => 231
                    ),
                270 =>
                    array (
                        'id' => 271,
                        'name' => 'Công nghệ chế biến thủy sản',
                        'major_id' => 232
                    ),
                271 =>
                    array (
                        'id' => 272,
                        'name' => 'Cnghệ chế biến thủy sản',
                        'major_id' => 232
                    ),
                272 =>
                    array (
                        'id' => 273,
                        'name' => 'Công nghệ chế biến tsản',
                        'major_id' => 232
                    ),
                273 =>
                    array (
                        'id' => 274,
                        'name' => 'Công nghệ cbiến thủy sản',
                        'major_id' => 232
                    ),
                274 =>
                    array (
                        'id' => 275,
                        'name' => 'Cn chế biến thủy sản',
                        'major_id' => 232
                    ),
                275 =>
                    array (
                        'id' => 276,
                        'name' => 'Cncbts',
                        'major_id' => 232
                    ),
                276 =>
                    array (
                        'id' => 277,
                        'name' => 'Cnghệ sau thu hoạch',
                        'major_id' => 233
                    ),
                277 =>
                    array (
                        'id' => 278,
                        'name' => 'Công nghệ sau thoạch',
                        'major_id' => 233
                    ),
                278 =>
                    array (
                        'id' => 279,
                        'name' => 'Cnghệ sau thu hoạch',
                        'major_id' => 233
                    ),
                279 =>
                    array (
                        'id' => 280,
                        'name' => 'Cn sau thoạch',
                        'major_id' => 233
                    ),
                280 =>
                    array (
                        'id' => 281,
                        'name' => 'Công nghệ sau thu hoạch',
                        'major_id' => 233
                    ),
                281 =>
                    array (
                        'id' => 282,
                        'name' => 'Cnsth',
                        'major_id' => 233
                    ),
                282 =>
                    array (
                        'id' => 283,
                        'name' => 'Chăn nuôi',
                        'major_id' => 234
                    ),
                283 =>
                    array (
                        'id' => 284,
                        'name' => 'Cnuôi',
                        'major_id' => 234
                    ),
                284 =>
                    array (
                        'id' => 285,
                        'name' => 'Chăn nui',
                        'major_id' => 234
                    ),
                285 =>
                    array (
                        'id' => 286,
                        'name' => 'Cn',
                        'major_id' => 234
                    ),
                286 =>
                    array (
                        'id' => 287,
                        'name' => 'Thú y',
                        'major_id' => 235
                    ),
                287 =>
                    array (
                        'id' => 288,
                        'name' => 'Thú i',
                        'major_id' => 235
                    ),
                288 =>
                    array (
                        'id' => 289,
                        'name' => 'Ty',
                        'major_id' => 235
                    ),
                289 =>
                    array (
                        'id' => 290,
                        'name' => 'Khoa học cây trồng',
                        'major_id' => 236
                    ),
                290 =>
                    array (
                        'id' => 291,
                        'name' => 'Khọc cây trồng',
                        'major_id' => 236
                    ),
                291 =>
                    array (
                        'id' => 292,
                        'name' => 'Khoa học ctrồng',
                        'major_id' => 236
                    ),
                292 =>
                    array (
                        'id' => 293,
                        'name' => 'Khọc ctrồng',
                        'major_id' => 236
                    ),
                293 =>
                    array (
                        'id' => 294,
                        'name' => 'Kh cây trồng',
                        'major_id' => 236
                    ),
                294 =>
                    array (
                        'id' => 295,
                        'name' => 'Khct',
                        'major_id' => 236
                    ),
                295 =>
                    array (
                        'id' => 296,
                        'name' => 'Nông học',
                        'major_id' => 237
                    ),
                296 =>
                    array (
                        'id' => 297,
                        'name' => 'Nông hc',
                        'major_id' => 237
                    ),
                297 =>
                    array (
                        'id' => 298,
                        'name' => 'Nôg hc',
                        'major_id' => 237
                    ),
                298 =>
                    array (
                        'id' => 299,
                        'name' => 'Bảo vệ thực vật',
                        'major_id' => 238
                    ),
                299 =>
                    array (
                        'id' => 300,
                        'name' => 'Bvệ thực vật',
                        'major_id' => 238
                    ),
                300 =>
                    array (
                        'id' => 301,
                        'name' => 'Bảo vệ tvật',
                        'major_id' => 238
                    ),
                301 =>
                    array (
                        'id' => 302,
                        'name' => 'Bv thực vật',
                        'major_id' => 238
                    ),
                302 =>
                    array (
                        'id' => 303,
                        'name' => 'Bvtv',
                        'major_id' => 238
                    ),
                303 =>
                    array (
                        'id' => 304,
                        'name' => 'Khoa học môi trường',
                        'major_id' => 239
                    ),
                304 =>
                    array (
                        'id' => 305,
                        'name' => 'Kh môi trường',
                        'major_id' => 239
                    ),
                305 =>
                    array (
                        'id' => 306,
                        'name' => 'Khoa học mtrường',
                        'major_id' => 239
                    ),
                306 =>
                    array (
                        'id' => 307,
                        'name' => 'Kh mtrường',
                        'major_id' => 239
                    ),
                307 =>
                    array (
                        'id' => 308,
                        'name' => 'Khoa hc môi trường',
                        'major_id' => 239
                    ),
                308 =>
                    array (
                        'id' => 309,
                        'name' => 'Khmt',
                        'major_id' => 239
                    ),
                309 =>
                    array (
                        'id' => 310,
                        'name' => 'Quản lý tài nguyên và môi trường',
                        'major_id' => 240
                    ),
                310 =>
                    array (
                        'id' => 311,
                        'name' => 'Qlý tài nguyên và môi trường',
                        'major_id' => 240
                    ),
                311 =>
                    array (
                        'id' => 312,
                        'name' => 'Quản lí tài nguyên và môi trường',
                        'major_id' => 240
                    ),
                312 =>
                    array (
                        'id' => 313,
                        'name' => 'Quản lý tnguyên và môi trường',
                        'major_id' => 240
                    ),
                313 =>
                    array (
                        'id' => 314,
                        'name' => 'Quản lý tài nguyên và mtrường',
                        'major_id' => 240
                    ),
                314 =>
                    array (
                        'id' => 315,
                        'name' => 'Qltnvmt',
                        'major_id' => 240
                    ),
                315 =>
                    array (
                        'id' => 316,
                        'name' => 'Kỹ thuật môi trường',
                        'major_id' => 241
                    ),
                316 =>
                    array (
                        'id' => 317,
                        'name' => 'Kthuật môi trường',
                        'major_id' => 241
                    ),
                317 =>
                    array (
                        'id' => 318,
                        'name' => 'Kỹ thuật mtrường',
                        'major_id' => 241
                    ),
                318 =>
                    array (
                        'id' => 319,
                        'name' => 'Kthuật mtrường',
                        'major_id' => 241
                    ),
                319 =>
                    array (
                        'id' => 320,
                        'name' => 'Kĩ thuật môi trường',
                        'major_id' => 241
                    ),
                320 =>
                    array (
                        'id' => 321,
                        'name' => 'Ktmt',
                        'major_id' => 241
                    ),
                321 =>
                    array (
                        'id' => 322,
                        'name' => 'Quản lý đất đai',
                        'major_id' => 242
                    ),
                322 =>
                    array (
                        'id' => 323,
                        'name' => 'Qlý đất đai',
                        'major_id' => 242
                    ),
                323 =>
                    array (
                        'id' => 324,
                        'name' => 'Quản lý đđai',
                        'major_id' => 242
                    ),
                324 =>
                    array (
                        'id' => 325,
                        'name' => 'Quản lí đất đai',
                        'major_id' => 242
                    ),
                324 =>
                    array (
                        'id' => 326,
                        'name' => 'Qlí đất đai',
                        'major_id' => 242
                    ),
                326 =>
                    array (
                        'id' => 327,
                        'name' => 'Qldd',
                        'major_id' => 242
                    ),
                327 =>
                    array (
                        'id' => 328,
                        'name' => 'Công nghệ rau hoa quả và cảnh quan',
                        'major_id' => 243
                    ),
                328 =>
                    array (
                        'id' => 329,
                        'name' => 'Cnghệ rau hoa quả và cảnh quan',
                        'major_id' => 243
                    ),
                329 =>
                    array (
                        'id' => 330,
                        'name' => 'Cn rau hoa quả và cảnh quan',
                        'major_id' => 243
                    ),
                330 =>
                    array (
                        'id' => 331,
                        'name' => 'Cnrhqvcq',
                        'major_id' => 243
                    ),
                331 =>
                    array (
                        'id' => 332,
                        'name' => 'Khoa học đất',
                        'major_id' => 244
                    ),
                332 =>
                    array (
                        'id' => 333,
                        'name' => 'Kh đất',
                        'major_id' => 244
                    ),
                333 =>
                    array (
                        'id' => 334,
                        'name' => 'Khoa hc đất',
                        'major_id' => 244
                    ),
                334 =>
                    array (
                        'id' => 335,
                        'name' => 'Khd',
                        'major_id' => 244
                    ),
                335 =>
                    array (
                        'id' => 336,
                        'name' => 'Nuôi trồng thủy sản',
                        'major_id' => 245
                    ),
                336 =>
                    array (
                        'id' => 337,
                        'name' => 'Nuôi trồng tsản',
                        'major_id' => 245
                    ),
                337 =>
                    array (
                        'id' => 338,
                        'name' => 'Ntrồng thủy sản',
                        'major_id' => 245
                    ),
                338 =>
                    array (
                        'id' => 339,
                        'name' => 'Nt thủy sản',
                        'major_id' => 245
                    ),
                339 =>
                    array (
                        'id' => 340,
                        'name' => 'Nt tsản',
                        'major_id' => 245
                    ),
                340 =>
                    array (
                        'id' => 341,
                        'name' => 'Ntts',
                        'major_id' => 245
                    ),
                341 =>
                    array (
                        'id' => 342,
                        'name' => 'Bệnh học thủy sản',
                        'major_id' => 246
                    ),
                342 =>
                    array (
                        'id' => 343,
                        'name' => 'Bệnh hc thủy sản',
                        'major_id' => 246
                    ),
                343 =>
                    array (
                        'id' => 344,
                        'name' => 'Bệnh học tsản',
                        'major_id' => 246
                    ),
                344 =>
                    array (
                        'id' => 345,
                        'name' => 'Bhts',
                        'major_id' => 246
                    ),
                345 =>
                    array (
                        'id' => 346,
                        'name' => 'Quản lý thủy sản',
                        'major_id' => 247
                    ),
                346 =>
                    array (
                        'id' => 347,
                        'name' => 'Qlý thủy sản',
                        'major_id' => 247
                    ),
                347 =>
                    array (
                        'id' => 348,
                        'name' => 'Quản lí thủy sản',
                        'major_id' => 247
                    ),
                348 =>
                    array (
                        'id' => 349,
                        'name' => 'Qlí thủy sản',
                        'major_id' => 247
                    ),
                349 =>
                    array (
                        'id' => 350,
                        'name' => 'Quản lý tsản',
                        'major_id' => 247
                    ),
                350 =>
                    array (
                        'id' => 351,
                        'name' => 'Qlts',
                        'major_id' => 247
                    ),
                351 =>
                    array (
                        'id' => 352,
                        'name' => 'Toán ứng dụng',
                        'major_id' => 248
                    ),
                352 =>
                    array (
                        'id' => 353,
                        'name' => 'Toán ud',
                        'major_id' => 248
                    ),
                353 =>
                    array (
                        'id' => 354,
                        'name' => 'Tón ứng dụng',
                        'major_id' => 248
                    ),
                354 =>
                    array (
                        'id' => 355,
                        'name' => 'TUD',
                        'major_id' => 248
                    ),
                355 =>
                    array (
                        'id' => 356,
                        'name' => 'Vật lý kỹ thuật',
                        'major_id' => 249
                    ),
                356 =>
                    array (
                        'id' => 357,
                        'name' => 'Vlý kỹ thuật',
                        'major_id' => 249
                    ),
                357 =>
                    array (
                        'id' => 358,
                        'name' => 'Vật lý kthuật',
                        'major_id' => 249
                    ),
                358 =>
                    array (
                        'id' => 359,
                        'name' => 'Vật lí kỹ thuật',
                        'major_id' => 249
                    ),
                359 =>
                    array (
                        'id' => 360,
                        'name' => 'Vl kỹ thuật',
                        'major_id' => 249
                    ),
                360 =>
                    array (
                        'id' => 361,
                        'name' => 'Vật lý kt',
                        'major_id' => 249
                    ),
                361 =>
                    array (
                        'id' => 362,
                        'name' => 'Vlkt',
                        'major_id' => 249
                    ),
                364 =>
                    array (
                        'id' => 365,
                        'name' => 'Hóa dược',
                        'major_id' => 251
                    ),
                365 =>
                    array (
                        'id' => 366,
                        'name' => 'Hd',
                        'major_id' => 251
                    ),
                366 =>
                    array (
                        'id' => 367,
                        'name' => 'Sinh học',
                        'major_id' => 252
                    ),
                367 =>
                    array (
                        'id' => 368,
                        'name' => 'Sih học',
                        'major_id' => 252
                    ),
                368 =>
                    array (
                        'id' => 369,
                        'name' => 'Sinh hc',
                        'major_id' => 252
                    ),
                369 =>
                    array (
                        'id' => 370,
                        'name' => 'Shọc',
                        'major_id' => 252
                    ),
                370 =>
                    array (
                        'id' => 371,
                        'name' => 'Sh',
                        'major_id' => 252
                    ),
                371 =>
                    array (
                        'id' => 372,
                        'name' => 'Sinh học ứng dụng',
                        'major_id' => 253
                    ),
                372 =>
                    array (
                        'id' => 373,
                        'name' => 'Sinh hc ứng dụng',
                        'major_id' => 253
                    ),
                373 =>
                    array (
                        'id' => 374,
                        'name' => 'Sinh học UD',
                        'major_id' => 253
                    ),
                374 =>
                    array (
                        'id' => 375,
                        'name' => 'Shọc ứng dụng',
                        'major_id' => 253
                    ),
                375 =>
                    array (
                        'id' => 376,
                        'name' => 'Sinh hc UD',
                        'major_id' => 253
                    ),
                376 =>
                    array (
                        'id' => 377,
                        'name' => 'Shud',
                        'major_id' => 253
                    ),
                377 =>
                    array (
                        'id' => 378,
                        'name' => 'Công nghệ sinh học',
                        'major_id' => 254
                    ),
                378 =>
                    array (
                        'id' => 379,
                        'name' => 'Cnghệ sinh học',
                        'major_id' => 254
                    ),
                379 =>
                    array (
                        'id' => 380,
                        'name' => 'Công nghệ shọc',
                        'major_id' => 254
                    ),
                380 =>
                    array (
                        'id' => 381,
                        'name' => 'Cn sinh học',
                        'major_id' => 254
                    ),
                381 =>
                    array (
                        'id' => 382,
                        'name' => 'Cn shọc',
                        'major_id' => 254
                    ),
                382 =>
                    array (
                        'id' => 383,
                        'name' => 'Công nghệ sinh hc',
                        'major_id' => 254
                    ),
                383 =>
                    array (
                        'id' => 384,
                        'name' => 'Cnsh',
                        'major_id' => 254
                    ),
                384 =>
                    array (
                        'id' => 385,
                        'name' => 'Văn học',
                        'major_id' => 255
                    ),
                385 =>
                    array (
                        'id' => 386,
                        'name' => 'Văn hc',
                        'major_id' => 255
                    ),
                386 =>
                    array (
                        'id' => 387,
                        'name' => 'Vhọc',
                        'major_id' => 255
                    ),
                387 =>
                    array (
                        'id' => 388,
                        'name' => 'Vh',
                        'major_id' => 255
                    ),
                388 =>
                    array (
                        'id' => 389,
                        'name' => 'Việt Nam học',
                        'major_id' => 256
                    ),
                389 =>
                    array (
                        'id' => 390,
                        'name' => 'VNam hc',
                        'major_id' => 256
                    ),
                390 =>
                    array (
                        'id' => 391,
                        'name' => 'VNam học',
                        'major_id' => 256
                    ),
                391 =>
                    array (
                        'id' => 392,
                        'name' => 'Việt Nam hc',
                        'major_id' => 256
                    ),
                392 =>
                    array (
                        'id' => 393,
                        'name' => 'Vnh',
                        'major_id' => 256
                    ),
                393 =>
                    array (
                        'id' => 394,
                        'name' => 'Việt nam học - học tại khu Hòa An',
                        'major_id' => 257
                    ),
                394 =>
                    array (
                        'id' => 395,
                        'name' => 'Vnam học - học tại khu Hòa An',
                        'major_id' => 257
                    ),
                395 =>
                    array (
                        'id' => 396,
                        'name' => 'Vnam hc - học tại khu Hòa An',
                        'major_id' => 257
                    ),
                396 =>
                    array (
                        'id' => 397,
                        'name' => 'Việt nam hc - học tại khu Hòa An',
                        'major_id' => 257
                    ),
                397 =>
                    array (
                        'id' => 398,
                        'name' => 'Việt nam học - hc tại khu Hòa An',
                        'major_id' => 257
                    ),
                398 =>
                    array (
                        'id' => 399,
                        'name' => 'Việt nam học - học tại khu HA',
                        'major_id' => 257
                    ),
                399 =>
                    array (
                        'id' => 400,
                        'name' => 'Vnh - học tại khu Hòa An',
                        'major_id' => 257
                    ),
                400 =>
                    array (
                        'id' => 401,
                        'name' => 'Ngôn ngữ Anh',
                        'major_id' => 258
                    ),
                401 =>
                    array (
                        'id' => 402,
                        'name' => 'Nngữ Anh',
                        'major_id' => 258
                    ),
                402 =>
                    array (
                        'id' => 403,
                        'name' => 'Nn Anh',
                        'major_id' => 258
                    ),
                403 =>
                    array (
                        'id' => 404,
                        'name' => 'Nna',
                        'major_id' => 258
                    ),
                404 =>
                    array (
                        'id' => 405,
                        'name' => 'Nngữ Anh - học tại Khu Hòa An',
                        'major_id' => 259
                    ),
                405 =>
                    array (
                        'id' => 406,
                        'name' => 'Ngôn ngữ Anh - học tại Khu Hòa An',
                        'major_id' => 259
                    ),
                406 =>
                    array (
                        'id' => 407,
                        'name' => 'Nna - học tại Khu Hòa An',
                        'major_id' => 259
                    ),
                407 =>
                    array (
                        'id' => 408,
                        'name' => 'Ngôn ngữ Anh - hc tại Khu Hòa An',
                        'major_id' => 259
                    ),
                408 =>
                    array (
                        'id' => 409,
                        'name' => 'Ngôn ngữ Anh - học tại Khu HA',
                        'major_id' => 259
                    ),
                409 =>
                    array (
                        'id' => 410,
                        'name' => 'Ngôn ngữ pháp',
                        'major_id' => 260
                    ),
                410 =>
                    array (
                        'id' => 411,
                        'name' => 'Nngữ pháp',
                        'major_id' => 260
                    ),
                411 =>
                    array (
                        'id' => 412,
                        'name' => 'Nn pháp',
                        'major_id' => 260
                    ),
                412 =>
                    array (
                        'id' => 413,
                        'name' => 'Nnp',
                        'major_id' => 260
                    ),
                413 =>
                    array (
                        'id' => 414,
                        'name' => 'Thông tin - thư viện',
                        'major_id' => 261
                    ),
                414 =>
                    array (
                        'id' => 415,
                        'name' => 'Ttin - thư viện',
                        'major_id' => 261
                    ),
                415 =>
                    array (
                        'id' => 416,
                        'name' => 'Thông tin - tviện',
                        'major_id' => 261
                    ),
                416 =>
                    array (
                        'id' => 417,
                        'name' => 'Tt - thư viện',
                        'major_id' => 261
                    ),
                417 =>
                    array (
                        'id' => 418,
                        'name' => 'Ttin - tviện',
                        'major_id' => 261
                    ),
                418 =>
                    array (
                        'id' => 419,
                        'name' => 'Tttv',
                        'major_id' => 261
                    ),
                419 =>
                    array (
                        'id' => 420,
                        'name' => 'Triết học',
                        'major_id' => 262
                    ),
                20 =>
                    array (
                        'id' => 421,
                        'name' => 'Triết hc',
                        'major_id' => 262
                    ),
                421 =>
                    array (
                        'id' => 422,
                        'name' => 'Th',
                        'major_id' => 262
                    ),
                422 =>
                    array (
                        'id' => 423,
                        'name' => 'Chính trị học',
                        'major_id' => 263
                    ),
                423 =>
                    array (
                        'id' => 424,
                        'name' => 'Ctrị học',
                        'major_id' => 263
                    ),
                424 =>
                    array (
                        'id' => 425,
                        'name' => 'Chính trị hc',
                        'major_id' => 263
                    ),
                425 =>
                    array (
                        'id' => 426,
                        'name' => 'Ct học',
                        'major_id' => 263
                    ),
                426 =>
                    array (
                        'id' => 427,
                        'name' => 'Cth',
                        'major_id' => 263
                    ),
                427 =>
                    array (
                        'id' => 428,
                        'name' => 'Xã hội học',
                        'major_id' => 264
                    ),
                428 =>
                    array (
                        'id' => 429,
                        'name' => 'Xhội học',
                        'major_id' => 264
                    ),
                429 =>
                    array (
                        'id' => 430,
                        'name' => 'Xã hội hc',
                        'major_id' => 264
                    ),
                430 =>
                    array (
                        'id' => 431,
                        'name' => 'Xh học',
                        'major_id' => 264
                    ),
                431 =>
                    array (
                        'id' => 432,
                        'name' => 'Xhh',
                        'major_id' => 264
                    )
            )
        );
    }
}

<?php

declare(strict_types=1);

return [
    'accepted'             => ':Attribute ни қабул қилишингиз керак.',
    'accepted_if'          => ':Other :value bo\'lsa, :attribute qabul qilinishi kerak.',
    'active_url'           => ':Attribute га нотўғри URL киритилди.',
    'after'                => ':Attribute да сана :date дан кейин бўлиши керак.',
    'after_or_equal'       => ':Attribute да сана :date га тенг ёки ундан кейин бўлиши керак.',
    'alpha'                => ':Attribute фақат ҳарфларни қабул қилиши мумкин.',
    'alpha_dash'           => ':Attribute фақат ҳарфлар, сонлар ва чизиқчаларни қабул қилиши мумкин.',
    'alpha_num'            => ':Attribute фақат ҳарфлар ва сонларни қабул қилиши мумкин.',
    'array'                => ':Attribute қатордан иборат бўлиши керак.',
    'ascii'                => ':Attribute faqat bitta baytli alfanumerik belgilar va belgilarni o\'z ichiga olishi kerak.',
    'before'               => ':Attribute да сана :date гача бўлиши керак.',
    'before_or_equal'      => ':Attribute да сана :date га тенг ёки ундан олдин бўлиши керак.',
    'between'              => [
        'array'   => ':Attribute даги элементлар сони :min ва :max орасида бўлиши керак.',
        'file'    => ':Attribute даги файлнинг ҳажми :min ва :max килобайт орасида бўлиши керак.',
        'numeric' => ':Attribute нинг қиймати :min ва :max орасида бўлиши керак.',
        'string'  => ':Attribute даги белгилар сони :min ва :max орасида бўлиши керак.',
    ],
    'boolean'              => ':Attribute майдони фақат мантиқий қийматни қабул қилади.',
    'can'                  => ':Attribute-maydonda ruxsat etilmagan qiymat mavjud.',
    'confirmed'            => ':Attribute тасдиқлангани билан мос келмади.',
    'current_password'     => 'Parol noto\'g\'ri.',
    'date'                 => ':Attribute сана эмас.',
    'date_equals'          => ':Attribute сана :date га тенг бўлиши керак.',
    'date_format'          => ':Attribute майдони :format форматга мос келмади.',
    'decimal'              => ':Attribute sonida :decimal kasr bo\'lishi kerak.',
    'declined'             => ':Attribute rad etilishi kerak.',
    'declined_if'          => ':Other :value bo\'lsa, :attribute rad etilishi kerak.',
    'different'            => ':Attribute ва :other майдонлари фарқли бўлиши керак.',
    'digits'               => ':Attribute :digits рақамдан иборат бўлиши керак.',
    'digits_between'       => ':Attribute узунлиги :min ва :max орасида бўлиши керак.',
    'dimensions'           => ':Attribute нотўғри тасвир ўлчамларга эга.',
    'distinct'             => ':Attribute майдони такрорланувчи қийматлардан иборат.',
    'doesnt_end_with'      => ':Attribute soni quyidagilardan biri bilan tugamasligi mumkin: :values.',
    'doesnt_start_with'    => ':Attribute quyidagidan biri bilan boshlanmasligi mumkin: :values.',
    'email'                => ':Attribute ҳақиқий электрон почта манзили бўлиши керак.',
    'ends_with'            => ':Attribute қуйидаги қийматларнинг бири билан тугаши керак: :values.',
    'enum'                 => 'Tanlangan :attribute yaroqsiz.',
    'exists'               => ':Attribute учун танланган қиймат нотўғри.',
    'extensions'           => ':attribute maydoni quyidagi kengaytmalardan biriga ega bo\'lishi kerak: :values.',
    'file'                 => ':Attribute файл бўлиши керак.',
    'filled'               => ':Attribute майдони тўлдирилиши шарт.',
    'gt'                   => [
        'array'   => ':Attribute даги элементлар сони :value дан катта бўлиши керак.',
        'file'    => ':Attribute файл ҳажми :value килобайтдан катта бўлиши керак.',
        'numeric' => ':Attribute майдони :value дан катта бўлиши керак.',
        'string'  => ':Attribute даги белгилар сони :value дан катта бўлиши керак.',
    ],
    'gte'                  => [
        'array'   => ':Attribute даги элементлар сони :value дан катта ёки тенг бўлиши керак.',
        'file'    => ':Attribute файл ҳажми :value килобайтдан катта ёки тенг бўлиши керак.',
        'numeric' => ':Attribute майдони :value дан катта ёки тенг бўлиши керак.',
        'string'  => ':Attribute даги белгилар сони :value дан катта ёки тенг бўлиши керак.',
    ],
    'hex_color'            => ':attribute maydoni yaroqli oʻn oltilik rang boʻlishi kerak.',
    'image'                => ':Attribute майдони тасвир (расм) бўлиши керак.',
    'in'                   => ':Attribute учун танланган қиймат хато.',
    'in_array'             => ':Attribute майдонининг қиймати :other да мавжуд эмас.',
    'integer'              => ':Attribute бутун сон бўлиши керак.',
    'ip'                   => ':Attribute ҳақиқий IP манзил бўлиши керак.',
    'ipv4'                 => ':Attribute ҳақиқий IPv4 манзил бўлиши керак.',
    'ipv6'                 => ':Attribute ҳақиқий IPv6 манзил бўлиши керак.',
    'json'                 => ':Attribute JSON қатори бўлиши керак.',
    'lowercase'            => ':Attribute kichik harf bo\'lishi kerak.',
    'lt'                   => [
        'array'   => ':Attribute даги элементлар сони :value дан кичик бўлиши керак.',
        'file'    => ':Attribute даги файл ҳажми :value килобайтдан кичик бўлиши керак.',
        'numeric' => ':Attribute майдони :value дан кичик бўлиши керак.',
        'string'  => ':Attribute даги белгилар сони :value дан кичик бўлиши керак.',
    ],
    'lte'                  => [
        'array'   => ':Attribute даги элементлар сони :value дан кичик ёки тенг бўлиши керак.',
        'file'    => ':Attribute файл ҳажми :value килобайтдан кичик ёки тенг бўлиши керак.',
        'numeric' => ':Attribute майдони :value дан кичик ёки тенг бўлиши керак.',
        'string'  => ':Attribute даги белгилар сони :value дан кичик ёки тенг бўлиши керак.',
    ],
    'mac_address'          => ':Attribute haqiqiy MAC manzili bo\'lishi kerak.',
    'max'                  => [
        'array'   => ':Attribute нинг элементлар сони :max тадан ошмаслиги керак.',
        'file'    => ':Attribute даги файлнинг ҳажми :max килобайтдан ошмаслиги керак.',
        'numeric' => ':Attribute нинг қиймати :max дан ошмаслиги керак.',
        'string'  => ':Attribute нинг белгилар сони :max тадан ошмаслиги керак.',
    ],
    'max_digits'           => ':Attribute raqami :max tadan oshmasligi kerak.',
    'mimes'                => ':Attribute даги файл қуйидаги турлардан бири бўлиши керак: :values.',
    'mimetypes'            => ':Attribute даги файл қуйидаги турлардан бири бўлиши керак: :values.',
    'min'                  => [
        'array'   => ':Attribute даги элементлар сони :min тадан кам бўлмаслиги керак.',
        'file'    => ':Attribute даги файлнинг ҳажми :min килобайтдан кам бўлмаслиги керак.',
        'numeric' => ':Attribute нинг қиймати :min дан кам бўлмаслиги керак.',
        'string'  => ':Attribute даги белгилар сони :min тадан кам бўлмаслиги керак.',
    ],
    'min_digits'           => ':Attribute kamida :min ta raqamdan iborat bo\'lishi kerak.',
    'missing'              => ':Attribute ta maydon yetishmasligi kerak.',
    'missing_if'           => ':Other :value bo\'lsa, :attribute maydoni yo\'qolishi kerak.',
    'missing_unless'       => 'Agar :other :value bo\'lmasa, :attribute maydoni yo\'qolishi kerak.',
    'missing_with'         => ':Values mavjud bo\'lganda :attribute maydoni etishmayotgan bo\'lishi kerak.',
    'missing_with_all'     => ':Values ta bo\'lsa, :attribute ta maydon yo\'qolishi kerak.',
    'multiple_of'          => ':Attribute bir nechta :value bo\'lishi kerak',
    'not_in'               => ':Attribute учун танланган қиймат хато.',
    'not_regex'            => ':Attribute учун танланган формат хато.',
    'numeric'              => ':Attribute майдони сон бўлиши керак.',
    'password'             => [
        'letters'       => ':Attribute kamida bitta harfdan iborat bo\'lishi kerak.',
        'mixed'         => ':Attribute kamida bitta katta va bitta kichik harfdan iborat bo\'lishi kerak.',
        'numbers'       => ':Attribute kamida bitta raqamni o\'z ichiga olishi kerak.',
        'symbols'       => ':Attribute kamida bitta belgidan iborat bo\'lishi kerak.',
        'uncompromised' => 'Berilgan :attribute ma\'lumotlar sizib chiqishida paydo bo\'ldi. Iltimos, boshqa :attribute ni tanlang.',
    ],
    'present'              => ':Attribute майдони кўрсатилиши керак.',
    'present_if'           => ':other :value bo\'lsa, :attribute maydoni mavjud bo\'lishi kerak.',
    'present_unless'       => ':other :value bo\'lmasa, :attribute maydoni mavjud bo\'lishi kerak.',
    'present_with'         => ':values mavjud bo\'lganda :attribute maydoni mavjud bo\'lishi kerak.',
    'present_with_all'     => ':values mavjud bo\'lganda :attribute maydoni mavjud bo\'lishi kerak.',
    'prohibited'           => ':Attribute maydon taqiqlanadi.',
    'prohibited_if'        => ':Attribute maydoni :other :value bo\'lganda taqiqlanadi.',
    'prohibited_unless'    => ':Attribute da :other bo\'lmasa :values maydon taqiqlanadi.',
    'prohibits'            => ':Attribute maydoni :other ning hozir bo\'lishini taqiqlaydi.',
    'regex'                => ':Attribute майдони хато форматда.',
    'required'             => ':Attribute майдони тўлдирилиши шарт.',
    'required_array_keys'  => ':Attribute maydonida quyidagilar bo\'lishi kerak: :values.',
    'required_if'          => ':Other майдони :value га тенг бўлса, :attribute майдони тўлдирилиши шарт.',
    'required_if_accepted' => ':Other qabul qilinganda :attribute maydoni talab qilinadi.',
    'required_unless'      => ':Other майдони :values га тенг бўлмаса, :attribute майдони тўлдирилиши шарт.',
    'required_with'        => ':Values кўрсатилган бўлса, :attribute майдони тўлдирилиши шарт.',
    'required_with_all'    => ':Values кўрсатилган бўлса, :attribute майдони тўлдирилиши шарт.',
    'required_without'     => ':Values кўрсатилмаган бўлса, :attribute майдони тўлдирилиши шарт.',
    'required_without_all' => ':Values лардан ҳеч бири кўрсатилмаган бўлса, :attribute майдони тўлдирилиши шарт.',
    'same'                 => ':Attribute нинг қиймати :other билан бир хил бўлиши керак.',
    'size'                 => [
        'array'   => ':Attribute даги элементлар сони :size га тенг бўлиши керак.',
        'file'    => ':Attribute даги файлнинг ҳажми :size килобайтга тенг бўлиши керак.',
        'numeric' => ':Attribute қиймати :size га тенг бўлиши керак.',
        'string'  => ':Attribute даги белгилар сони :size га тенг бўлиши керак.',
    ],
    'starts_with'          => ':Attribute қуйидаги қийматлардан бири билан бошланиши керак: :values.',
    'string'               => ':Attribute қатор бўлиши керак.',
    'timezone'             => ':Attribute нинг қиймати мавжуд вақт минтақаси бўлиши керак.',
    'ulid'                 => ':Attribute haqiqiy ULID bo\'lishi kerak.',
    'unique'               => ':Attribute майдонининг бундай қиймати мавжуд. Илтимос бошқа қиймат киритинг.',
    'uploaded'             => ':Attribute ни юклаш муваффақиятли амалга ошмади.',
    'uppercase'            => ':Attribute katta harf bo\'lishi kerak.',
    'url'                  => ':Attribute нотўғри форматга эга.',
    'uuid'                 => ':Attribute тўғри UUID қийматга эга бўлиши керак.',
    'attributes'           => [
        'address'                  => 'manzil',
        'affiliate_url'            => 'filialning URL manzili',
        'age'                      => 'yoshi',
        'amount'                   => 'miqdori',
        'announcement'             => 'e\'lon',
        'area'                     => 'hudud',
        'audience_prize'           => 'tomoshabinlar mukofoti',
        'available'                => 'mavjud',
        'birthday'                 => 'tug\'ilgan kun',
        'body'                     => 'tanasi',
        'city'                     => 'shahar',
        'compilation'              => 'jamlama',
        'concept'                  => 'tushuncha',
        'conditions'               => 'sharoitlar',
        'content'                  => 'mazmuni',
        'country'                  => 'mamlakat',
        'cover'                    => 'qopqoq',
        'created_at'               => 'da yaratilgan',
        'creator'                  => 'yaratuvchi',
        'currency'                 => 'valyuta',
        'current_password'         => 'Joriy parol',
        'customer'                 => 'mijoz',
        'date'                     => 'sana',
        'date_of_birth'            => 'tug\'ilgan kuni',
        'dates'                    => 'sanalar',
        'day'                      => 'kun',
        'deleted_at'               => 'da o\'chirildi',
        'description'              => 'tavsifi',
        'display_type'             => 'ko\'rsatish turi',
        'district'                 => 'tuman',
        'duration'                 => 'davomiyligi',
        'email'                    => 'elektron pochta',
        'excerpt'                  => 'parcha',
        'filter'                   => 'filtr',
        'finished_at'              => 'da tugadi',
        'first_name'               => 'ism',
        'gender'                   => 'jins',
        'grand_prize'              => 'bosh mukofot',
        'group'                    => 'guruh',
        'hour'                     => 'soat',
        'image'                    => 'tasvir',
        'image_desktop'            => 'ish stoli tasviri',
        'image_main'               => 'asosiy tasvir',
        'image_mobile'             => 'mobil rasm',
        'images'                   => 'tasvirlar',
        'is_audience_winner'       => 'tomoshabinlar g\'olibi',
        'is_hidden'                => 'yashiringan',
        'is_subscribed'            => 'obuna bo\'ladi',
        'is_visible'               => 'ko‘rinib turadi',
        'is_winner'                => 'g\'olib hisoblanadi',
        'items'                    => 'buyumlar',
        'key'                      => 'kalit',
        'last_name'                => 'familiya',
        'lesson'                   => 'dars',
        'line_address_1'           => 'qator manzili 1',
        'line_address_2'           => '2-qator manzili',
        'login'                    => 'tizimga kirish',
        'message'                  => 'xabar',
        'middle_name'              => 'otasini ismi',
        'minute'                   => 'daqiqa',
        'mobile'                   => 'mobil',
        'month'                    => 'oy',
        'name'                     => 'nomi',
        'national_code'            => 'milliy kod',
        'number'                   => 'raqam',
        'password'                 => 'parol',
        'password_confirmation'    => 'parolni tasdiqlash',
        'phone'                    => 'telefon',
        'photo'                    => 'fotosurat',
        'portfolio'                => 'portfel',
        'postal_code'              => 'Pochta kodi',
        'preview'                  => 'oldindan ko\'rish',
        'price'                    => 'narx',
        'product_id'               => 'mahsulot identifikatori',
        'product_uid'              => 'mahsulot UID',
        'product_uuid'             => 'mahsulot UUID',
        'promo_code'               => 'kupon kodi',
        'province'                 => 'viloyat',
        'quantity'                 => 'miqdori',
        'reason'                   => 'sabab',
        'recaptcha_response_field' => 'recaptcha javob maydoni',
        'referee'                  => 'hakam',
        'referees'                 => 'hakamlar',
        'reject_reason'            => 'sababni rad qilish',
        'remember'                 => 'eslab qoling',
        'restored_at'              => 'da qayta tiklandi',
        'result_text_under_image'  => 'rasm ostidagi natija matni',
        'role'                     => 'roli',
        'rule'                     => 'qoida',
        'rules'                    => 'qoidalar',
        'second'                   => 'ikkinchi',
        'sex'                      => 'jinsiy aloqa',
        'shipment'                 => 'jo\'natish',
        'short_text'               => 'qisqa matn',
        'size'                     => 'hajmi',
        'skills'                   => 'ko\'nikmalar',
        'slug'                     => 'shilimshiq',
        'specialization'           => 'mutaxassislik',
        'started_at'               => 'da boshlangan',
        'state'                    => 'davlat',
        'status'                   => 'holat',
        'street'                   => 'ko\'cha',
        'student'                  => 'talaba',
        'subject'                  => 'Mavzu',
        'tag'                      => 'teg',
        'tags'                     => 'teglar',
        'teacher'                  => 'o\'qituvchi',
        'terms'                    => 'shartlari',
        'test_description'         => 'test tavsifi',
        'test_locale'              => 'test lokali',
        'test_name'                => 'test nomi',
        'text'                     => 'matn',
        'time'                     => 'vaqt',
        'title'                    => 'sarlavha',
        'type'                     => 'turi',
        'updated_at'               => 'yangilangan',
        'user'                     => 'foydalanuvchi',
        'username'                 => 'foydalanuvchi nomi',
        'value'                    => 'qiymat',
        'year'                     => 'yil',
    ],
];
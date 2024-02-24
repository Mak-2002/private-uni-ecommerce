<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\ImageLink;
use App\Models\OfferProduct;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //? --> Normal Products

        // Create products
        $products = [
            [
                'name' => 'بن الحموي كلاسيك مع هال',
                'price' => 1400,
                'off' => null,
                'about' => 'منتجات مختارة لأفضل تجربة شرب.',
                'category' => 'القهوة والشاي',
                'quantity' => 50,
                'people_served' => 4,
            ],
            [
                'name' => 'شاي كامبو كلاسيك',
                'price' => 23100,
                'off' => null,
                'about' => 'منتجات مختارة لأفضل تجربة شرب.',
                'category' => 'القهوة والشاي',
                'quantity' => 50,
                'people_served' => 3,
            ],
            [
                'name' => 'بيتيفور',
                'price' => 27000,
                'off' => null,
                'about' => 'أشهى الحلويات للمناسبات الخاصة واليومية.',
                'category' => 'الحلويات',
                'quantity' => 50,
                'people_served' => 5,
            ],
            [
                'name' => 'كوكيز',
                'price' => 27900,
                'off' => 22878,
                'about' => 'أشهى الحلويات للمناسبات الخاصة واليومية.',
                'category' => 'الشوكولا',
                'quantity' => 50,
                'people_served' => 1,
            ],
            [
                'name' => 'كيك فهدة',
                'price' => 10200,
                'off' => null,
                'about' => 'أشهى الحلويات للمناسبات الخاصة واليومية.',
                'category' => 'الحلويات',
                'quantity' => 50,
                'people_served' => 4,
            ],
            [
                'name' => 'كيكة',
                'price' => 39900,
                'off' => null,
                'about' => 'أشهى الحلويات للمناسبات الخاصة واليومية.',
                'category' => 'الحلويات',
                'quantity' => 50,
                'people_served' => 6,
            ],
            [
                'name' => 'برازق السلطان',
                'price' => 11200,
                'off' => null,
                'about' => 'أشهى الحلويات للمناسبات الخاصة واليومية.',
                'category' => 'الحلويات',
                'quantity' => 50,
                'people_served' => 8,
            ],
            [
                'name' => 'بسكويت أليتا',
                'price' => 38500,
                'off' => 21945,
                'about' => 'أشهى الحلويات للمناسبات الخاصة واليومية.',
                'category' => 'الحلويات',
                'quantity' => 50,
                'people_served' => 6,
            ],
            [
                'name' => 'بسكويت بريك بارز',
                'price' => 37500,
                'off' => null,
                'about' => 'أشهى الحلويات للمناسبات الخاصة واليومية.',
                'category' => 'الحلويات',
                'quantity' => 50,
                'people_served' => 4,
            ],
            [
                'name' => 'بسكويت رولانا',
                'price' => 4200,
                'off' => 2730,
                'about' => 'أشهى الحلويات للمناسبات الخاصة واليومية.',
                'category' => 'الحلويات',
                'quantity' => 50,
                'people_served' => 9,
            ],
            [
                'name' => 'بسكويت ليفيل',
                'price' => 8500,
                'off' => 6630,
                'about' => 'أشهى الحلويات للمناسبات الخاصة واليومية.',
                'category' => 'الحلويات',
                'quantity' => 50,
                'people_served' => 10,
            ],
            [
                'name' => 'تونا توليدو',
                'price' => 37400,
                'off' => 22440,
                'about' => 'جودة عالية وطعم لا يقاوم.',
                'category' => 'المعلبات',
                'quantity' => 50,
                'people_served' => 3,
            ],
            [
                'name' => 'حمص مسلوق الشيف نديم',
                'price' => 15200,
                'off' => 12920,
                'about' => 'جودة عالية وطعم لا يقاوم.',
                'category' => 'المعلبات',
                'quantity' => 50,
                'people_served' => 6,
            ],
            [
                'name' => 'جبنة سبرينغ بالقشطة',
                'price' => 6600,
                'off' => null,
                'about' => 'طعم الطبيعة في كل قطعة.',
                'category' => 'الألبان والأجبان',
                'quantity' => 50,
                'people_served' => 6,
            ],
            [
                'name' => 'جبنة نيو بارك',
                'price' => 35900,
                'off' => 21181,
                'about' => 'طعم الطبيعة في كل قطعة.',
                'category' => 'الألبان والأجبان',
                'quantity' => 50,
                'people_served' => 10,
            ],
            [
                'name' => 'جنبة أصابع',
                'price' => 10700,
                'off' => null,
                'about' => 'طعم الطبيعة في كل قطعة.',
                'category' => 'الألبان والأجبان',
                'quantity' => 50,
                'people_served' => 2,
            ],
            [
                'name' => 'حليب هوا الشام 1 ليتر',
                'price' => 25000,
                'off' => null,
                'about' => 'طعم الطبيعة في كل قطعة.',
                'category' => 'الألبان والأجبان',
                'quantity' => 50,
                'people_served' => 8,
            ],
            [
                'name' => 'لانشون الدرة دجاج',
                'price' => 27400,
                'off' => null,
                'about' => 'طعم الطبيعة في كل قطعة.',
                'category' => 'المعلبات',
                'quantity' => 50,
                'people_served' => 5,
            ],
            [
                'name' => 'جوز غير مقشر',
                'price' => 3700,
                'off' => 2849,
                'about' => 'مكسرات محمصة بعناية لضمان أفضل طعم.',
                'category' => 'المحمصة',
                'quantity' => 50,
                'people_served' => 5,
            ],
            [
                'name' => 'فستق عزبدة',
                'price' => 19800,
                'off' => 10692,
                'about' => 'مكسرات محمصة بعناية لضمان أفضل طعم.',
                'category' => 'المحمصة',
                'quantity' => 50,
                'people_served' => 3,
            ],
            [
                'name' => 'خلطة اسكالوب الدجاج من الدرة',
                'price' => 38000,
                'off' => null,
                'about' => 'لحوم طازجة ومختارة بعناية.',
                'category' => 'البهارات',
                'quantity' => 50,
                'people_served' => 1,
            ],
            [
                'name' => 'صدر دجاج',
                'price' => 21000,
                'off' => 15120,
                'about' => 'لحوم طازجة ومختارة بعناية.',
                'category' => 'اللحوم',
                'quantity' => 50,
                'people_served' => 5,
            ],
            [
                'name' => 'شاورما دجاج',
                'price' => 37300,
                'off' => 28348,
                'about' => 'لحوم طازجة ومختارة بعناية.',
                'category' => 'اللحوم',
                'quantity' => 50,
                'people_served' => 6,
            ],
            [
                'name' => 'لحم بقر',
                'price' => 3600,
                'off' => 1800,
                'about' => 'لحوم طازجة ومختارة بعناية.',
                'category' => 'اللحوم',
                'quantity' => 50,
                'people_served' => 3,
            ],
            [
                'name' => 'خبز سياحي شمسين',
                'price' => 27000,
                'off' => null,
                'about' => 'خبز يومي طازج ومعجنات شهية.',
                'category' => 'الخبز والمعجنات',
                'quantity' => 50,
                'people_served' => 9,
            ],
            [
                'name' => 'خبز شعير تنور زمان',
                'price' => 17400,
                'off' => 15486,
                'about' => 'خبز يومي طازج ومعجنات شهية.',
                'category' => 'الخبز والمعجنات',
                'quantity' => 50,
                'people_served' => 2,
            ],
            [
                'name' => 'خبز شوفان تنور زمان',
                'price' => 16400,
                'off' => null,
                'about' => 'خبز يومي طازج ومعجنات شهية.',
                'category' => 'الخبز والمعجنات',
                'quantity' => 50,
                'people_served' => 8,
            ],
            [
                'name' => 'خبز نخالة تنور زمان',
                'price' => 23500,
                'off' => null,
                'about' => 'خبز يومي طازج ومعجنات شهية.',
                'category' => 'الخبز والمعجنات',
                'quantity' => 50,
                'people_served' => 4,
            ],
            [
                'name' => 'خرمى',
                'price' => 21500,
                'off' => null,
                'about' => 'خضروات طازجة وصحية.',
                'category' => 'الخضروات',
                'quantity' => 50,
                'people_served' => 7,
            ],
            [
                'name' => 'خس',
                'price' => 16500,
                'off' => 12870,
                'about' => 'خضروات طازجة وصحية.',
                'category' => 'الخضروات',
                'quantity' => 50,
                'people_served' => 6,
            ],
            [
                'name' => 'خيار',
                'price' => 9600,
                'off' => 8256,
                'about' => 'خضروات طازجة وصحية.',
                'category' => 'الخضروات',
                'quantity' => 50,
                'people_served' => 7,
            ],
            [
                'name' => 'رمان',
                'price' => 38100,
                'off' => 19812,
                'about' => 'خضروات طازجة وصحية.',
                'category' => 'الخضروات',
                'quantity' => 50,
                'people_served' => 5,
            ],
            [
                'name' => 'طماطم كرزية',
                'price' => 24600,
                'off' => null,
                'about' => 'خضروات طازجة وصحية.',
                'category' => 'الخضروات',
                'quantity' => 50,
                'people_served' => 4,
            ],
            [
                'name' => 'قرنبيط',
                'price' => 28600,
                'off' => 17446,
                'about' => 'خضروات طازجة وصحية.',
                'category' => 'الخضروات',
                'quantity' => 50,
                'people_served' => 2,
            ],
            [
                'name' => 'ملفوف أحمر',
                'price' => 29300,
                'off' => null,
                'about' => 'خضروات طازجة وصحية.',
                'category' => 'الخضروات',
                'quantity' => 50,
                'people_served' => 5,
            ],
            [
                'name' => 'خلطة الدجاج المشوي من الدرة',
                'price' => 20800,
                'off' => null,
                'about' => 'أجود أنواع البهارات لإضافة النكهة لأطباقك.',
                'category' => 'البهارات',
                'quantity' => 50,
                'people_served' => 10,
            ],
            [
                'name' => 'خميرة من سولو',
                'price' => 29900,
                'off' => 23023,
                'about' => 'أجود أنواع البهارات لإضافة النكهة لأطباقك.',
                'category' => 'البهارات',
                'quantity' => 50,
                'people_served' => 8,
            ],
            [
                'name' => 'عصفر من سولو',
                'price' => 25100,
                'off' => null,
                'about' => 'أجود أنواع البهارات لإضافة النكهة لأطباقك.',
                'category' => 'البهارات',
                'quantity' => 50,
                'people_served' => 1,
            ],
            [
                'name' => 'فلفل أسود حب من سولو',
                'price' => 21600,
                'off' => 19224,
                'about' => 'أجود أنواع البهارات لإضافة النكهة لأطباقك.',
                'category' => 'البهارات',
                'quantity' => 50,
                'people_served' => 8,
            ],
            [
                'name' => 'زيت دوار الشمس الزهرة',
                'price' => 35500,
                'off' => 20235,
                'about' => 'زيوت نقية وسمن طبيعي لوجبات أكثر صحة.',
                'category' => 'الزيت والسمن',
                'quantity' => 50,
                'people_served' => 3,
            ],
            [
                'name' => 'زيت زيتون الولائم 2 ليتر',
                'price' => 22800,
                'off' => null,
                'about' => 'زيوت نقية وسمن طبيعي لوجبات أكثر صحة.',
                'category' => 'الزيت والسمن',
                'quantity' => 50,
                'people_served' => 8,
            ],
            [
                'name' => 'سمن البوادي البقري',
                'price' => 14200,
                'off' => null,
                'about' => 'زيوت نقية وسمن طبيعي لوجبات أكثر صحة.',
                'category' => 'الزيت والسمن',
                'quantity' => 50,
                'people_served' => 2,
            ],
            [
                'name' => 'سمن عسال الورد البقري',
                'price' => 34500,
                'off' => 23460,
                'about' => 'زيوت نقية وسمن طبيعي لوجبات أكثر صحة.',
                'category' => 'الزيت والسمن',
                'quantity' => 50,
                'people_served' => 3,
            ],
            [
                'name' => 'سائل جلي برافو',
                'price' => 9900,
                'off' => 6534,
                'about' => 'نظافة لامعة لبيتك وملابسك.',
                'category' => 'المنظفات',
                'quantity' => 50,
                'people_served' => 9,
            ],
            [
                'name' => 'سائل جلي فلو',
                'price' => 15500,
                'off' => null,
                'about' => 'نظافة لامعة لبيتك وملابسك.',
                'category' => 'المنظفات',
                'quantity' => 50,
                'people_served' => 7,
            ],
            [
                'name' => 'معقم تول',
                'price' => 6600,
                'off' => null,
                'about' => 'نظافة لامعة لبيتك وملابسك.',
                'category' => 'المنظفات',
                'quantity' => 50,
                'people_served' => 2,
            ],
            [
                'name' => 'ملمع بلاط بوفالو',
                'price' => 27500,
                'off' => null,
                'about' => 'نظافة لامعة لبيتك وملابسك.',
                'category' => 'المنظفات',
                'quantity' => 50,
                'people_served' => 6,
            ],
            [
                'name' => 'ملمع زجاج ليتس كلين',
                'price' => 18900,
                'off' => 16065,
                'about' => 'نظافة لامعة لبيتك وملابسك.',
                'category' => 'المنظفات',
                'quantity' => 50,
                'people_served' => 8,
            ],
            [
                'name' => 'سكاكين',
                'price' => 10500,
                'off' => 5880,
                'about' => 'كل ما تحتاجه لمنزل مرتب ومنظم.',
                'category' => 'أدوات المنزل',
                'quantity' => 50,
                'people_served' => 8,
            ],
            [
                'name' => 'قطاعة بيتزا',
                'price' => 24900,
                'off' => 15189,
                'about' => 'كل ما تحتاجه لمنزل مرتب ومنظم.',
                'category' => 'أدوات المنزل',
                'quantity' => 50,
                'people_served' => 10,
            ],
            [
                'name' => 'شعالة فحم إلكترونية',
                'price' => 2600,
                'off' => null,
                'about' => 'كل ما تحتاجه لمنزل مرتب ومنظم.',
                'category' => 'أدوات المنزل',
                'quantity' => 50,
                'people_served' => 3,
            ],
            [
                'name' => 'ضوء فلاش',
                'price' => 38300,
                'off' => null,
                'about' => 'كل ما تحتاجه لمنزل مرتب ومنظم.',
                'category' => 'أدوات المنزل',
                'quantity' => 50,
                'people_served' => 10,
            ],
            [
                'name' => 'ميزان خضروات',
                'price' => 32500,
                'off' => 26975,
                'about' => 'كل ما تحتاجه لمنزل مرتب ومنظم.',
                'category' => 'أدوات المنزل',
                'quantity' => 50,
                'people_served' => 7,
            ],
            [
                'name' => 'عصير برتقال فروتي',
                'price' => 1100,
                'off' => 748,
                'about' => 'عصائر طبيعية ومياه نقية لترطيب يومك.',
                'category' => 'العصائر والمياه',
                'quantity' => 50,
                'people_served' => 6,
            ],
            [
                'name' => 'عصير مانغو فروتي 1 ليتر',
                'price' => 25100,
                'off' => null,
                'about' => 'عصائر طبيعية ومياه نقية لترطيب يومك.',
                'category' => 'العصائر والمياه',
                'quantity' => 50,
                'people_served' => 10,
            ],
            [
                'name' => 'مياه فيجة صغيرة',
                'price' => 26100,
                'off' => null,
                'about' => 'عصائر طبيعية ومياه نقية لترطيب يومك.',
                'category' => 'العصائر والمياه',
                'quantity' => 50,
                'people_served' => 10,
            ],
            [
                'name' => 'مشروب غازي سامبيرو أناناس',
                'price' => 24900,
                'off' => null,
                'about' => 'عصائر طبيعية ومياه نقية لترطيب يومك.',
                'category' => 'العصائر والمياه',
                'quantity' => 50,
                'people_served' => 6,
            ],
            [
                'name' => 'مشروب غازي سينالكو',
                'price' => 36500,
                'off' => 23725,
                'about' => 'عصائر طبيعية ومياه نقية لترطيب يومك.',
                'category' => 'العصائر والمياه',
                'quantity' => 50,
                'people_served' => 8,
            ],
            [
                'name' => 'رول محارم المطبخ القطة',
                'price' => 31600,
                'off' => 24332,
                'about' => 'نعومة وامتصاص عالي لراحتك.',
                'category' => 'المناديل',
                'quantity' => 50,
                'people_served' => 9,
            ],
            [
                'name' => 'محارم كومفورت',
                'price' => 11900,
                'off' => 8568,
                'about' => 'نعومة وامتصاص عالي لراحتك.',
                'category' => 'المناديل',
                'quantity' => 50,
                'people_served' => 6,
            ],
            [
                'name' => 'محارم ليلي',
                'price' => 26200,
                'off' => 22008,
                'about' => 'نعومة وامتصاص عالي لراحتك.',
                'category' => 'المناديل',
                'quantity' => 50,
                'people_served' => 9,
            ],
            [
                'name' => 'ورق تنشيف ليلي',
                'price' => 34500,
                'off' => null,
                'about' => 'نعومة وامتصاص عالي لراحتك.',
                'category' => 'المناديل',
                'quantity' => 50,
                'people_served' => 7,
            ],
            [
                'name' => 'ذرة حب سيدي هشام',
                'price' => 33600,
                'off' => 25200,
                'about' => 'حبوب كاملة لوجبة صحية ومغذية.',
                'category' => 'الحبوب',
                'quantity' => 50,
                'people_served' => 1,
            ],
            [
                'name' => 'عدس مشروش سيدي هشام',
                'price' => 39600,
                'off' => null,
                'about' => 'حبوب كاملة لوجبة صحية ومغذية.',
                'category' => 'الحبوب',
                'quantity' => 50,
                'people_served' => 7,
            ],
            [
                'name' => 'شاحن بطاية سريع',
                'price' => 7500,
                'off' => null,
                'about' => 'أحدث الأدوات الكهربائية لتسهيل حياتك.',
                'category' => 'الأدوات الكهربائية',
                'quantity' => 50,
                'people_served' => 3,
            ],
            [
                'name' => 'مصففة شعر برو فايتال',
                'price' => 22400,
                'off' => null,
                'about' => 'أحدث الأدوات الكهربائية لتسهيل حياتك.',
                'category' => 'الأدوات الكهربائية',
                'quantity' => 50,
                'people_served' => 10,
            ],
            [
                'name' => 'سيتي كريمير',
                'price' => 24300,
                'off' => null,
                'about' => 'منتجات متنوعة لكل احتياجاتك.',
                'category' => 'الألبان والأجبان',
                // Dairy and Cheese
                'quantity' => 50,
                'people_served' => 6,
            ],
            [
                'name' => 'صودا ماندرين',
                'price' => 35700,
                'off' => 22491,
                'about' => 'منتجات متنوعة لكل احتياجاتك.',
                'category' => 'العصائر والمياه',
                // Juices and Water
                'quantity' => 50,
                'people_served' => 4,
            ],
            [
                'name' => 'علبة زيت',
                'price' => 16400,
                'off' => null,
                'about' => 'منتجات متنوعة لكل احتياجاتك.',
                'category' => 'الزيت والسمن',
                // Oils and Ghee
                'quantity' => 50,
                'people_served' => 10,
            ],
            [
                'name' => 'فاصوليا حب الشيف نديم',
                'price' => 31000,
                'off' => null,
                'about' => 'منتجات متنوعة لكل احتياجاتك.',
                'category' => 'الحبوب',
                // Grains
                'quantity' => 50,
                'people_served' => 2,
            ],
            [
                'name' => 'لوز مدخن',
                'price' => 38000,
                'off' => null,
                'about' => 'منتجات متنوعة لكل احتياجاتك.',
                'category' => 'المحمصة',
                // Roastery
                'quantity' => 50,
                'people_served' => 7,
            ],
            [
                'name' => 'ماغ سمايلي فيس',
                'price' => 32400,
                'off' => 20412,
                'about' => 'منتجات متنوعة لكل احتياجاتك.',
                'category' => 'الحلويات',
                // Sweets
                'quantity' => 50,
                'people_served' => 4,
            ],
            [
                'name' => 'ماغ',
                'price' => 6800,
                'off' => null,
                'about' => 'منتجات متنوعة لكل احتياجاتك.',
                'category' => 'الحلويات',
                // Sweets
                'quantity' => 50,
                'people_served' => 3,
            ],
            [
                'name' => 'ماكسي كيك',
                'price' => 25000,
                'off' => null,
                'about' => 'منتجات متنوعة لكل احتياجاتك.',
                'category' => 'الحلويات',
                // Sweets
                'quantity' => 50,
                'people_served' => 3,
            ],
            [
                'name' => 'متة تاراغواي',
                'price' => 4000,
                'off' => null,
                'about' => 'منتجات متنوعة لكل احتياجاتك.',
                'category' => 'القهوة والشاي',
                // Coffee and Tea
                'quantity' => 50,
                'people_served' => 1,
            ],
            [
                'name' => 'موزات مشفاية',
                'price' => 8000,
                'off' => 6000,
                'about' => 'منتجات متنوعة لكل احتياجاتك.',
                'category' => 'اللحوم',
                // Meat
                'quantity' => 50,
                'people_served' => 8,
            ],
            [
                'name' => '3 ب 1 ألترا فريش',
                'price' => 14700,
                'off' => 7350,
                'about' => 'منتجات متنوعة لكل احتياجاتك.',
                'category' => 'المنظفات',
                // Cleaning Supplies
                'quantity' => 50,
                'people_served' => 3,
            ],

        ];
        Product::insert($products);

        // Create image links
        $imageLinks = [
            [
                'product_id' => 1,
                'link' => 'بن الحموي كلاسيك مع هال.png'
            ],
            [
                'product_id' => 2,
                'link' => 'شاي كامبو كلاسيك.png'
            ],
            [
                'product_id' => 3,
                'link' => 'بيتيفور.png'
            ],
            [
                'product_id' => 4,
                'link' => 'كوكيز.png'
            ],
            [
                'product_id' => 5,
                'link' => 'كيك فهدة.png'
            ],
            [
                'product_id' => 6,
                'link' => 'كيكة.png'
            ],
            [
                'product_id' => 7,
                'link' => 'برازق السلطان.png'
            ],
            [
                'product_id' => 8,
                'link' => 'بسكويت أليتا.png'
            ],
            [
                'product_id' => 9,
                'link' => 'بسكويت بريك بارز.png'
            ],
            [
                'product_id' => 10,
                'link' => 'بسكويت رولانا.png'
            ],
            [
                'product_id' => 11,
                'link' => 'بسكويت ليفيل.png'
            ],
            [
                'product_id' => 12,
                'link' => 'تونا توليدو.png'
            ],
            [
                'product_id' => 13,
                'link' => 'حمص مسلوق الشيف نديم.png'
            ],
            [
                'product_id' => 14,
                'link' => 'جبنة سبرينغ بالقشطة.png'
            ],
            [
                'product_id' => 15,
                'link' => 'جبنة نيو بارك.png'
            ],
            [
                'product_id' => 16,
                'link' => 'جنبة أصابع.png'
            ],
            [
                'product_id' => 17,
                'link' => 'حليب هوا الشام 1 ليتر.png'
            ],
            [
                'product_id' => 18,
                'link' => 'لانشون الدرة دجاج.png'
            ],
            [
                'product_id' => 19,
                'link' => 'جوز غير مقشر.png'
            ],
            [
                'product_id' => 20,
                'link' => 'فستق عزبدة.png'
            ],
            [
                'product_id' => 21,
                'link' => 'خاطة اسكالوب الدجاج من الدرة.png'
            ],
            [
                'product_id' => 22,
                'link' => 'صدر دجاج.png'
            ],
            [
                'product_id' => 23,
                'link' => 'شاورما دجاج.png'
            ],
            [
                'product_id' => 24,
                'link' => 'لحم بقر.png'
            ],
            [
                'product_id' => 25,
                'link' => 'خبز سياحي شمسين.png'
            ],
            [
                'product_id' => 26,
                'link' => 'خبز شعير تنور زمان.png'
            ],
            [
                'product_id' => 27,
                'link' => 'خبز شوفان تنور زمان.png'
            ],
            [
                'product_id' => 28,
                'link' => 'خبز نخالة تنور زمان.png'
            ],
            [
                'product_id' => 29,
                'link' => 'خرمى.png'
            ],
            [
                'product_id' => 30,
                'link' => 'خس.png'
            ],
            [
                'product_id' => 31,
                'link' => 'خيار.png'
            ],
            [
                'product_id' => 32,
                'link' => 'رمان.png'
            ],
            [
                'product_id' => 33,
                'link' => 'طماطم كرزية.png'
            ],
            [
                'product_id' => 34,
                'link' => 'قرنبيط.png'
            ],
            [
                'product_id' => 35,
                'link' => 'ملفوف أحمر.png'
            ],
            [
                'product_id' => 36,
                'link' => 'خلطة الدجاج المشوي من الدرة.png'
            ],
            [
                'product_id' => 37,
                'link' => 'خميرة من سولو.png'
            ],
            [
                'product_id' => 38,
                'link' => 'عصفر من سولو.png'
            ],
            [
                'product_id' => 39,
                'link' => 'فلفل أسود حب من سولو.png'
            ],
            [
                'product_id' => 40,
                'link' => 'زيت دوار الشمس الزهرة.png'
            ],
            [
                'product_id' => 41,
                'link' => 'زيت زيتون الولائم 2 ليتر.png'
            ],
            [
                'product_id' => 42,
                'link' => 'سمن البوادي البقري.png'
            ],
            [
                'product_id' => 43,
                'link' => 'سمن عسال الورد البقري.png'
            ],
            [
                'product_id' => 44,
                'link' => 'سائل جلي برافو.png'
            ],
            [
                'product_id' => 45,
                'link' => 'سائل جلي فلو.png'
            ],
            [
                'product_id' => 46,
                'link' => 'معقم تول.png'
            ],
            [
                'product_id' => 47,
                'link' => 'ملمع بلاط بوفالو.png'
            ],
            [
                'product_id' => 48,
                'link' => 'ملمع زجاج ليتس كلين.png'
            ],
            [
                'product_id' => 49,
                'link' => 'سكاكين.png'
            ],
            [
                'product_id' => 50,
                'link' => 'قطاعة بيتزا.png'
            ],
            [
                'product_id' => 51,
                'link' => 'شعالة فحم إلكترونية.png'
            ],
            [
                'product_id' => 52,
                'link' => 'ضوء فلاش.png'
            ],
            [
                'product_id' => 53,
                'link' => 'ميزان خضروات.png'
            ],
            [
                'product_id' => 54,
                'link' => 'عصير برتقال فروتي.png'
            ],
            [
                'product_id' => 55,
                'link' => 'عصير مانغو فروتي 1 ليتر.png'
            ],
            [
                'product_id' => 56,
                'link' => 'مياه فيجة صغيرة.png'
            ],
            [
                'product_id' => 57,
                'link' => 'مشروب غازي سامبيرو أناناس.png'
            ],
            [
                'product_id' => 58,
                'link' => 'مشروب غازي سينالكو.png'
            ],
            [
                'product_id' => 59,
                'link' => 'رول محارم المطبخ القطة.png'
            ],
            [
                'product_id' => 60,
                'link' => 'محارم كومفورت.png'
            ],
            [
                'product_id' => 61,
                'link' => 'محارم ليلي.png'
            ],
            [
                'product_id' => 62,
                'link' => 'ورق تنشيف ليلي.png'
            ],
            [
                'product_id' => 63,
                'link' => 'ذرة حب سيدي هشام.png'
            ],
            [
                'product_id' => 64,
                'link' => 'عدس مشروش سيدي هشام.png'
            ],
            [
                'product_id' => 65,
                'link' => 'شاحن بطاية سريع.png'
            ],
            [
                'product_id' => 66,
                'link' => 'مصففة شعر برو فايتال.png'
            ],
            [
                'product_id' => 67,
                'link' => 'سيتي كريمير.png'
            ],
            [
                'product_id' => 68,
                'link' => 'صودا ماندرين.png'
            ],
            [
                'product_id' => 69,
                'link' => 'علبة زيت.png'
            ],
            [
                'product_id' => 70,
                'link' => 'فاصوليا حب الشيف نديم.png'
            ],
            [
                'product_id' => 71,
                'link' => 'لوز مدخن.png'
            ],
            [
                'product_id' => 72,
                'link' => 'ماغ سمايلي فيس.png'
            ],
            [
                'product_id' => 73,
                'link' => 'ماغ.png'
            ],
            [
                'product_id' => 74,
                'link' => 'ماكسي كيك.png'
            ],
            [
                'product_id' => 75,
                'link' => 'متة تاراغواي.png'
            ],
            [
                'product_id' => 76,
                'link' => 'موزات مشفاية.png'
            ],
            [
                'product_id' => 77,
                'link' => '3 ب 1 ألترا فريش.png'
            ],
        ];
        ImageLink::insert($imageLinks);

        //? --> Offers
        // Product::factory(3)->create()->each(function ($product) {
        //     $subProducts = Product::inRandomOrder()->whereBetween('id', [1, 10])->take(3)->get();
        //     foreach ($subProducts as $subProduct) {
        //         OfferProduct::create([
        //             'offer_id' => $product->id,
        //             'sub_product_id' => $subProduct->id,
        //         ]);
        //     }
        // });
    }
}

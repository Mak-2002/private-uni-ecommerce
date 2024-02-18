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
                'price' => 1000,
                'off' => 900,
                'about' => 'منتجات مختارة لأفضل تجربة شرب.',
                'category' => 'القهوة والشاي',
                'quantity' => 50,
                'people_served' => 2,
            ],
            [
                'name' => 'شاي كامبو كلاسيك',
                'price' => 1000,
                'off' => 900,
                'about' => 'منتجات مختارة لأفضل تجربة شرب.',
                'category' => 'القهوة والشاي',
                'quantity' => 50,
                'people_served' => 2,
            ],
            [
                'name' => 'بيتيفور',
                'price' => 1000,
                'off' => 900,
                'about' => 'أشهى الحلويات للمناسبات الخاصة واليومية.',
                'category' => 'الحلويات',
                'quantity' => 50,
                'people_served' => 2,
            ],
            [
                'name' => 'كوكيز',
                'price' => 1000,
                'off' => 900,
                'about' => 'أشهى الحلويات للمناسبات الخاصة واليومية.',
                'category' => 'الحلويات',
                'quantity' => 50,
                'people_served' => 2,
            ],
            [
                'name' => 'كيك فهدة',
                'price' => 1000,
                'off' => 900,
                'about' => 'أشهى الحلويات للمناسبات الخاصة واليومية.',
                'category' => 'الحلويات',
                'quantity' => 50,
                'people_served' => 2,
            ],
            [
                'name' => 'كيكة',
                'price' => 1000,
                'off' => 900,
                'about' => 'أشهى الحلويات للمناسبات الخاصة واليومية.',
                'category' => 'الحلويات',
                'quantity' => 50,
                'people_served' => 2,
            ],
            [
                'name' => 'برازق السلطان',
                'price' => 1000,
                'off' => 900,
                'about' => 'أشهى الحلويات للمناسبات الخاصة واليومية.',
                'category' => 'الحلويات',
                'quantity' => 50,
                'people_served' => 2,
            ],
            [
                'name' => 'بسكويت أليتا',
                'price' => 1000,
                'off' => 900,
                'about' => 'أشهى الحلويات للمناسبات الخاصة واليومية.',
                'category' => 'الحلويات',
                'quantity' => 50,
                'people_served' => 2,
            ],
            [
                'name' => 'بسكويت بريك بارز',
                'price' => 1000,
                'off' => 900,
                'about' => 'أشهى الحلويات للمناسبات الخاصة واليومية.',
                'category' => 'الحلويات',
                'quantity' => 50,
                'people_served' => 2,
            ],
            [
                'name' => 'بسكويت رولانا',
                'price' => 1000,
                'off' => 900,
                'about' => 'أشهى الحلويات للمناسبات الخاصة واليومية.',
                'category' => 'الحلويات',
                'quantity' => 50,
                'people_served' => 2,
            ],
            [
                'name' => 'بسكويت ليفيل',
                'price' => 1000,
                'off' => 900,
                'about' => 'أشهى الحلويات للمناسبات الخاصة واليومية.',
                'category' => 'الحلويات',
                'quantity' => 50,
                'people_served' => 2,
            ],
            [
                'name' => 'تونا توليدو',
                'price' => 1000,
                'off' => 900,
                'about' => 'جودة عالية وطعم لا يقاوم.',
                'category' => 'المعلبات',
                'quantity' => 50,
                'people_served' => 2,
            ],
            [
                'name' => 'حمص مسلوق الشيف نديم',
                'price' => 1000,
                'off' => 900,
                'about' => 'جودة عالية وطعم لا يقاوم.',
                'category' => 'المعلبات',
                'quantity' => 50,
                'people_served' => 2,
            ],
            [
                'name' => 'جبنة سبرينغ بالقشطة',
                'price' => 1000,
                'off' => 900,
                'about' => 'طعم الطبيعة في كل قطعة.',
                'category' => 'الألبان والأجبان',
                'quantity' => 50,
                'people_served' => 2,
            ],
            [
                'name' => 'جبنة نيو بارك',
                'price' => 1000,
                'off' => 900,
                'about' => 'طعم الطبيعة في كل قطعة.',
                'category' => 'الألبان والأجبان',
                'quantity' => 50,
                'people_served' => 2,
            ],
            [
                'name' => 'جنبة أصابع',
                'price' => 1000,
                'off' => 900,
                'about' => 'طعم الطبيعة في كل قطعة.',
                'category' => 'الألبان والأجبان',
                'quantity' => 50,
                'people_served' => 2,
            ],
            [
                'name' => 'حليب هوا الشام 1 ليتر',
                'price' => 1000,
                'off' => 900,
                'about' => 'طعم الطبيعة في كل قطعة.',
                'category' => 'الألبان والأجبان',
                'quantity' => 50,
                'people_served' => 2,
            ],
            [
                'name' => 'لانشون الدرة دجاج',
                'price' => 1000,
                'off' => 900,
                'about' => 'طعم الطبيعة في كل قطعة.',
                'category' => 'الألبان والأجبان',
                'quantity' => 50,
                'people_served' => 2,
            ],
            [
                'name' => 'جوز غير مقشر',
                'price' => 1000,
                'off' => 900,
                'about' => 'مكسرات محمصة بعناية لضمان أفضل طعم.',
                'category' => 'المحمصة',
                'quantity' => 50,
                'people_served' => 2,
            ],
            [
                'name' => 'فستق عزبدة',
                'price' => 1000,
                'off' => 900,
                'about' => 'مكسرات محمصة بعناية لضمان أفضل طعم.',
                'category' => 'المحمصة',
                'quantity' => 50,
                'people_served' => 2,
            ],
            [
                'name' => 'خاطة اسكالوب الدجاج من الدرة',
                'price' => 1000,
                'off' => 900,
                'about' => 'لحوم طازجة ومختارة بعناية.',
                'category' => 'اللحوم',
                'quantity' => 50,
                'people_served' => 2,
            ],
            [
                'name' => 'صدر دجاج',
                'price' => 1000,
                'off' => 900,
                'about' => 'لحوم طازجة ومختارة بعناية.',
                'category' => 'اللحوم',
                'quantity' => 50,
                'people_served' => 2,
            ],
            [
                'name' => 'شاورما دجاج',
                'price' => 1000,
                'off' => 900,
                'about' => 'لحوم طازجة ومختارة بعناية.',
                'category' => 'اللحوم',
                'quantity' => 50,
                'people_served' => 2,
            ],
            [
                'name' => 'لحم بقر',
                'price' => 1000,
                'off' => 900,
                'about' => 'لحوم طازجة ومختارة بعناية.',
                'category' => 'اللحوم',
                'quantity' => 50,
                'people_served' => 2,
            ],
            [
                'name' => 'خبز سياحي شمسين',
                'price' => 1000,
                'off' => 900,
                'about' => 'خبز يومي طازج ومعجنات شهية.',
                'category' => 'الخبز والمعجنات',
                'quantity' => 50,
                'people_served' => 2,
            ],
            [
                'name' => 'خبز شعير تنور زمان',
                'price' => 1000,
                'off' => 900,
                'about' => 'خبز يومي طازج ومعجنات شهية.',
                'category' => 'الخبز والمعجنات',
                'quantity' => 50,
                'people_served' => 2,
            ],
            [
                'name' => 'خبز شوفان تنور زمان',
                'price' => 1000,
                'off' => 900,
                'about' => 'خبز يومي طازج ومعجنات شهية.',
                'category' => 'الخبز والمعجنات',
                'quantity' => 50,
                'people_served' => 2,
            ],
            [
                'name' => 'خبز نخالة تنور زمان',
                'price' => 1000,
                'off' => 900,
                'about' => 'خبز يومي طازج ومعجنات شهية.',
                'category' => 'الخبز والمعجنات',
                'quantity' => 50,
                'people_served' => 2,
            ],
            [
                'name' => 'خرمى',
                'price' => 1000,
                'off' => 900,
                'about' => 'خضروات طازجة وصحية.',
                'category' => 'الخضروات',
                'quantity' => 50,
                'people_served' => 2,
            ],
            [
                'name' => 'خس',
                'price' => 1000,
                'off' => 900,
                'about' => 'خضروات طازجة وصحية.',
                'category' => 'الخضروات',
                'quantity' => 50,
                'people_served' => 2,
            ],
            [
                'name' => 'خيار',
                'price' => 1000,
                'off' => 900,
                'about' => 'خضروات طازجة وصحية.',
                'category' => 'الخضروات',
                'quantity' => 50,
                'people_served' => 2,
            ],
            [
                'name' => 'رمان',
                'price' => 1000,
                'off' => 900,
                'about' => 'خضروات طازجة وصحية.',
                'category' => 'الخضروات',
                'quantity' => 50,
                'people_served' => 2,
            ],
            [
                'name' => 'طماطم كرزية',
                'price' => 1000,
                'off' => 900,
                'about' => 'خضروات طازجة وصحية.',
                'category' => 'الخضروات',
                'quantity' => 50,
                'people_served' => 2,
            ],
            [
                'name' => 'قرنبيط',
                'price' => 1000,
                'off' => 900,
                'about' => 'خضروات طازجة وصحية.',
                'category' => 'الخضروات',
                'quantity' => 50,
                'people_served' => 2,
            ],
            [
                'name' => 'ملفوف أحمر',
                'price' => 1000,
                'off' => 900,
                'about' => 'خضروات طازجة وصحية.',
                'category' => 'الخضروات',
                'quantity' => 50,
                'people_served' => 2,
            ],
            [
                'name' => 'خلطة الدجاج المشوي من الدرة',
                'price' => 1000,
                'off' => 900,
                'about' => 'أجود أنواع البهارات لإضافة النكهة لأطباقك.',
                'category' => 'البهارات',
                'quantity' => 50,
                'people_served' => 2,
            ],
            [
                'name' => 'خميرة من سولو',
                'price' => 1000,
                'off' => 900,
                'about' => 'أجود أنواع البهارات لإضافة النكهة لأطباقك.',
                'category' => 'البهارات',
                'quantity' => 50,
                'people_served' => 2,
            ],
            [
                'name' => 'عصفر من سولو',
                'price' => 1000,
                'off' => 900,
                'about' => 'أجود أنواع البهارات لإضافة النكهة لأطباقك.',
                'category' => 'البهارات',
                'quantity' => 50,
                'people_served' => 2,
            ],
            [
                'name' => 'فلفل أسود حب من سولو',
                'price' => 1000,
                'off' => 900,
                'about' => 'أجود أنواع البهارات لإضافة النكهة لأطباقك.',
                'category' => 'البهارات',
                'quantity' => 50,
                'people_served' => 2,
            ],
            [
                'name' => 'زيت دوار الشمس الزهرة',
                'price' => 1000,
                'off' => 900,
                'about' => 'زيوت نقية وسمن طبيعي لوجبات أكثر صحة.',
                'category' => 'الزيت والسمن',
                'quantity' => 50,
                'people_served' => 2,
            ],
            [
                'name' => 'زيت زيتون الولائم 2 ليتر',
                'price' => 1000,
                'off' => 900,
                'about' => 'زيوت نقية وسمن طبيعي لوجبات أكثر صحة.',
                'category' => 'الزيت والسمن',
                'quantity' => 50,
                'people_served' => 2,
            ],
            [
                'name' => 'سمن البوادي البقري',
                'price' => 1000,
                'off' => 900,
                'about' => 'زيوت نقية وسمن طبيعي لوجبات أكثر صحة.',
                'category' => 'الزيت والسمن',
                'quantity' => 50,
                'people_served' => 2,
            ],
            [
                'name' => 'سمن عسال الورد البقري',
                'price' => 1000,
                'off' => 900,
                'about' => 'زيوت نقية وسمن طبيعي لوجبات أكثر صحة.',
                'category' => 'الزيت والسمن',
                'quantity' => 50,
                'people_served' => 2,
            ],
            [
                'name' => 'سائل جلي برافو',
                'price' => 1000,
                'off' => 900,
                'about' => 'نظافة لامعة لبيتك وملابسك.',
                'category' => 'المنظفات',
                'quantity' => 50,
                'people_served' => 2,
            ],
            [
                'name' => 'سائل جلي فلو',
                'price' => 1000,
                'off' => 900,
                'about' => 'نظافة لامعة لبيتك وملابسك.',
                'category' => 'المنظفات',
                'quantity' => 50,
                'people_served' => 2,
            ],
            [
                'name' => 'معقم تول',
                'price' => 1000,
                'off' => 900,
                'about' => 'نظافة لامعة لبيتك وملابسك.',
                'category' => 'المنظفات',
                'quantity' => 50,
                'people_served' => 2,
            ],
            [
                'name' => 'ملمع بلاط بوفالو',
                'price' => 1000,
                'off' => 900,
                'about' => 'نظافة لامعة لبيتك وملابسك.',
                'category' => 'المنظفات',
                'quantity' => 50,
                'people_served' => 2,
            ],
            [
                'name' => 'ملمع زجاج ليتس كلين',
                'price' => 1000,
                'off' => 900,
                'about' => 'نظافة لامعة لبيتك وملابسك.',
                'category' => 'المنظفات',
                'quantity' => 50,
                'people_served' => 2,
            ],
            [
                'name' => 'سكاكين',
                'price' => 1000,
                'off' => 900,
                'about' => 'كل ما تحتاجه لمنزل مرتب ومنظم.',
                'category' => 'أدوات المنزل',
                'quantity' => 50,
                'people_served' => 2,
            ],
            [
                'name' => 'قطاعة بيتزا',
                'price' => 1000,
                'off' => 900,
                'about' => 'كل ما تحتاجه لمنزل مرتب ومنظم.',
                'category' => 'أدوات المنزل',
                'quantity' => 50,
                'people_served' => 2,
            ],
            [
                'name' => 'شعالة فحم إلكترونية',
                'price' => 1000,
                'off' => 900,
                'about' => 'كل ما تحتاجه لمنزل مرتب ومنظم.',
                'category' => 'أدوات المنزل',
                'quantity' => 50,
                'people_served' => 2,
            ],
            [
                'name' => 'ضوء فلاش',
                'price' => 1000,
                'off' => 900,
                'about' => 'كل ما تحتاجه لمنزل مرتب ومنظم.',
                'category' => 'أدوات المنزل',
                'quantity' => 50,
                'people_served' => 2,
            ],
            [
                'name' => 'ميزان خضروات',
                'price' => 1000,
                'off' => 900,
                'about' => 'كل ما تحتاجه لمنزل مرتب ومنظم.',
                'category' => 'أدوات المنزل',
                'quantity' => 50,
                'people_served' => 2,
            ],
            [
                'name' => 'عصير برتقال فروتي',
                'price' => 1000,
                'off' => 900,
                'about' => 'عصائر طبيعية ومياه نقية لترطيب يومك.',
                'category' => 'العصائر والمياه',
                'quantity' => 50,
                'people_served' => 2,
            ],
            [
                'name' => 'عصير مانغو فروتي 1 ليتر',
                'price' => 1000,
                'off' => 900,
                'about' => 'عصائر طبيعية ومياه نقية لترطيب يومك.',
                'category' => 'العصائر والمياه',
                'quantity' => 50,
                'people_served' => 2,
            ],
            [
                'name' => 'مياه فيجة صغيرة',
                'price' => 1000,
                'off' => 900,
                'about' => 'عصائر طبيعية ومياه نقية لترطيب يومك.',
                'category' => 'العصائر والمياه',
                'quantity' => 50,
                'people_served' => 2,
            ],
            [
                'name' => 'مشروب غازي سامبيرو أناناس',
                'price' => 1000,
                'off' => 900,
                'about' => 'عصائر طبيعية ومياه نقية لترطيب يومك.',
                'category' => 'العصائر والمياه',
                'quantity' => 50,
                'people_served' => 2,
            ],
            [
                'name' => 'مشروب غازي سينالكو',
                'price' => 1000,
                'off' => 900,
                'about' => 'عصائر طبيعية ومياه نقية لترطيب يومك.',
                'category' => 'العصائر والمياه',
                'quantity' => 50,
                'people_served' => 2,
            ],
            [
                'name' => 'رول محارم المطبخ القطة',
                'price' => 1000,
                'off' => 900,
                'about' => 'نعومة وامتصاص عالي لراحتك.',
                'category' => 'المناديل',
                'quantity' => 50,
                'people_served' => 2,
            ],
            [
                'name' => 'محارم كومفورت',
                'price' => 1000,
                'off' => 900,
                'about' => 'نعومة وامتصاص عالي لراحتك.',
                'category' => 'المناديل',
                'quantity' => 50,
                'people_served' => 2,
            ],
            [
                'name' => 'محارم ليلي',
                'price' => 1000,
                'off' => 900,
                'about' => 'نعومة وامتصاص عالي لراحتك.',
                'category' => 'المناديل',
                'quantity' => 50,
                'people_served' => 2,
            ],
            [
                'name' => 'ورق تنشيف ليلي',
                'price' => 1000,
                'off' => 900,
                'about' => 'نعومة وامتصاص عالي لراحتك.',
                'category' => 'المناديل',
                'quantity' => 50,
                'people_served' => 2,
            ],
            [
                'name' => 'ذرة حب سيدي هشام',
                'price' => 1000,
                'off' => 900,
                'about' => 'حبوب كاملة لوجبة صحية ومغذية.',
                'category' => 'الحبوب',
                'quantity' => 50,
                'people_served' => 2,
            ],
            [
                'name' => 'عدس مشروش سيدي هشام',
                'price' => 1000,
                'off' => 900,
                'about' => 'حبوب كاملة لوجبة صحية ومغذية.',
                'category' => 'الحبوب',
                'quantity' => 50,
                'people_served' => 2,
            ],
            [
                'name' => 'شاحن بطاية سريع',
                'price' => 1000,
                'off' => 900,
                'about' => 'أحدث الأدوات الكهربائية لتسهيل حياتك.',
                'category' => 'الأدوات الكهربائية',
                'quantity' => 50,
                'people_served' => 2,
            ],
            [
                'name' => 'مصففة شعر برو فايتال',
                'price' => 1000,
                'off' => 900,
                'about' => 'أحدث الأدوات الكهربائية لتسهيل حياتك.',
                'category' => 'الأدوات الكهربائية',
                'quantity' => 50,
                'people_served' => 2,
            ],
            [
                'name' => 'سيتي كريمير',
                'price' => 1000,
                'off' => 900,
                'about' => 'منتجات متنوعة لكل احتياجاتك.',
                'category' => 'الألبان والأجبان',
                // Dairy and Cheese
                'quantity' => 50,
                'people_served' => 2,
            ],
            [
                'name' => 'صودا ماندرين',
                'price' => 1000,
                'off' => 900,
                'about' => 'منتجات متنوعة لكل احتياجاتك.',
                'category' => 'العصائر والمياه',
                // Juices and Water
                'quantity' => 50,
                'people_served' => 2,
            ],
            [
                'name' => 'علبة زيت',
                'price' => 1000,
                'off' => 900,
                'about' => 'منتجات متنوعة لكل احتياجاتك.',
                'category' => 'الزيت والسمن',
                // Oils and Ghee
                'quantity' => 50,
                'people_served' => 2,
            ],
            [
                'name' => 'فاصوليا حب الشيف نديم',
                'price' => 1000,
                'off' => 900,
                'about' => 'منتجات متنوعة لكل احتياجاتك.',
                'category' => 'الحبوب',
                // Grains
                'quantity' => 50,
                'people_served' => 2,
            ],
            [
                'name' => 'لوز مدخن',
                'price' => 1000,
                'off' => 900,
                'about' => 'منتجات متنوعة لكل احتياجاتك.',
                'category' => 'المحمصة',
                // Roastery
                'quantity' => 50,
                'people_served' => 2,
            ],
            [
                'name' => 'ماغ سمايلي فيس',
                'price' => 1000,
                'off' => 900,
                'about' => 'منتجات متنوعة لكل احتياجاتك.',
                'category' => 'الحلويات',
                // Sweets
                'quantity' => 50,
                'people_served' => 2,
            ],
            [
                'name' => 'ماغ',
                'price' => 1000,
                'off' => 900,
                'about' => 'منتجات متنوعة لكل احتياجاتك.',
                'category' => 'الحلويات',
                // Sweets
                'quantity' => 50,
                'people_served' => 2,
            ],
            [
                'name' => 'ماكسي كيك',
                'price' => 1000,
                'off' => 900,
                'about' => 'منتجات متنوعة لكل احتياجاتك.',
                'category' => 'الحلويات',
                // Sweets
                'quantity' => 50,
                'people_served' => 2,
            ],
            [
                'name' => 'متة تاراغواي',
                'price' => 1000,
                'off' => 900,
                'about' => 'منتجات متنوعة لكل احتياجاتك.',
                'category' => 'القهوة والشاي',
                // Coffee and Tea
                'quantity' => 50,
                'people_served' => 2,
            ],
            [
                'name' => 'موزات مشفاية',
                'price' => 1000,
                'off' => 900,
                'about' => 'منتجات متنوعة لكل احتياجاتك.',
                'category' => 'اللحوم',
                // Meat
                'quantity' => 50,
                'people_served' => 2,
            ],
            [
                'name' => '3 ب 1 ألترا فريش',
                'price' => 1000,
                'off' => 900,
                'about' => 'منتجات متنوعة لكل احتياجاتك.',
                'category' => 'المنظفات',
                // Cleaning Supplies
                'quantity' => 50,
                'people_served' => 2,
            ],

        ];
        Product::insert($products);

        // Create image links


        $imageLinks = [
            [
                'product_id' => 1,
                'link' => asset('images/بن الحموي كلاسيك مع هال.png')
            ],
            [
                'product_id' => 2,
                'link' => asset('images/شاي كامبو كلاسيك.png')
            ],
            [
                'product_id' => 3,
                'link' => asset('images/بيتيفور.png')
            ],
            [
                'product_id' => 4,
                'link' => asset('images/كوكيز.png')
            ],
            [
                'product_id' => 5,
                'link' => asset('images/كيك فهدة.png')
            ],
            [
                'product_id' => 6,
                'link' => asset('images/كيكة.png')
            ],
            [
                'product_id' => 7,
                'link' => asset('images/برازق السلان.png')
            ],
            [
                'product_id' => 8,
                'link' => asset('images/بسكويت أليتا.png')
            ],
            [
                'product_id' => 9,
                'link' => asset('images/بسكويت بريك بارز.png')
            ],
            [
                'product_id' => 10,
                'link' => asset('images/بسكويت رولانا.png')
            ],
            [
                'product_id' => 11,
                'link' => asset('images/بسكويت ليفيل.png')
            ],
            [
                'product_id' => 12,
                'link' => asset('images/تونا توليدو.png')
            ],
            [
                'product_id' => 13,
                'link' => asset('images/حمص مسلوق الشيف نديم.png')
            ],
            [
                'product_id' => 14,
                'link' => asset('images/جبنة سبرينغ بالقشطة.png')
            ],
            [
                'product_id' => 15,
                'link' => asset('images/جبنة نيو بارك.png')
            ],
            [
                'product_id' => 16,
                'link' => asset('images/جنبة أصابع.png')
            ],
            [
                'product_id' => 17,
                'link' => asset('images/حليب هوا الشام 1 ليتر.png')
            ],
            [
                'product_id' => 18,
                'link' => asset('images/لانشون الدرة دجاج.png')
            ],
            [
                'product_id' => 19,
                'link' => asset('images/جوز غير مقشر.png')
            ],
            [
                'product_id' => 20,
                'link' => asset('images/فستق عزبدة.png')
            ],
            [
                'product_id' => 21,
                'link' => asset('images/خاطة اسكالوب الدجاج من الدرة.png')
            ],
            [
                'product_id' => 22,
                'link' => asset('images/صدر دجاج.png')
            ],
            [
                'product_id' => 23,
                'link' => asset('images/شاورما دجاج.png')
            ],
            [
                'product_id' => 24,
                'link' => asset('images/لحم بقر.png')
            ],
            [
                'product_id' => 25,
                'link' => asset('images/خبز سياحي شمسين.png')
            ],
            [
                'product_id' => 26,
                'link' => asset('images/خبز شعير تنور زمان.png')
            ],
            [
                'product_id' => 27,
                'link' => asset('images/خبز شوفان تنور زمان.png')
            ],
            [
                'product_id' => 28,
                'link' => asset('images/خبز نخالة تنور زمان.png')
            ],
            [
                'product_id' => 29,
                'link' => asset('images/خرمى.png')
            ],
            [
                'product_id' => 30,
                'link' => asset('images/خس.png')
            ],
            [
                'product_id' => 31,
                'link' => asset('images/خيار.png')
            ],
            [
                'product_id' => 32,
                'link' => asset('images/رمان.png')
            ],
            [
                'product_id' => 33,
                'link' => asset('images/طماطم كرزية.png')
            ],
            [
                'product_id' => 34,
                'link' => asset('images/قرنبيط.png')
            ],
            [
                'product_id' => 35,
                'link' => asset('images/ملفوف أحمر.png')
            ],
            [
                'product_id' => 36,
                'link' => asset('images/خلطة الدجاج المشوي من الدرة.png')
            ],
            [
                'product_id' => 37,
                'link' => asset('images/خميرة من سولو.png')
            ],
            [
                'product_id' => 38,
                'link' => asset('images/عصفر من سولو.png')
            ],
            [
                'product_id' => 39,
                'link' => asset('images/فلفل أسود حب من سولو.png')
            ],
            [
                'product_id' => 40,
                'link' => asset('images/زيت دوار الشمس الزهرة.png')
            ],
            [
                'product_id' => 41,
                'link' => asset('images/زيت زيتون الولائم 2 ليتر.png')
            ],
            [
                'product_id' => 42,
                'link' => asset('images/سمن البوادي البقري.png')
            ],
            [
                'product_id' => 43,
                'link' => asset('images/سمن عسال الورد البقري.png')
            ],
            [
                'product_id' => 44,
                'link' => asset('images/سائل جلي برافو.png')
            ],
            [
                'product_id' => 45,
                'link' => asset('images/سائل جلي فلو.png')
            ],
            [
                'product_id' => 46,
                'link' => asset('images/معقم تول.png')
            ],
            [
                'product_id' => 47,
                'link' => asset('images/ملمع بلاط بوفالو.png')
            ],
            [
                'product_id' => 48,
                'link' => asset('images/ملمع زجاج ليتس كلين.png')
            ],
            [
                'product_id' => 49,
                'link' => asset('images/سكاكين.png')
            ],
            [
                'product_id' => 50,
                'link' => asset('images/قطاعة بيتزا.png')
            ],
            [
                'product_id' => 51,
                'link' => asset('images/شعالة فحم إلكترونية.png')
            ],
            [
                'product_id' => 52,
                'link' => asset('images/ضوء فلاش.png')
            ],
            [
                'product_id' => 53,
                'link' => asset('images/ميزان خضروات.png')
            ],
            [
                'product_id' => 54,
                'link' => asset('images/عصير برتقال فروتي.png')
            ],
            [
                'product_id' => 55,
                'link' => asset('images/عصير مانغو فروتي 1 ليتر.png')
            ],
            [
                'product_id' => 56,
                'link' => asset('images/مياه فيجة صغيرة.png')
            ],
            [
                'product_id' => 57,
                'link' => asset('images/مشروب غازي سامبيرو أناناس.png')
            ],
            [
                'product_id' => 58,
                'link' => asset('images/مشروب غازي سينالكو.png')
            ],
            [
                'product_id' => 59,
                'link' => asset('images/رول محارم المطبخ القطة.png')
            ],
            [
                'product_id' => 60,
                'link' => asset('images/محارم كومفورت.png')
            ],
            [
                'product_id' => 61,
                'link' => asset('images/محارم ليلي.png')
            ],
            [
                'product_id' => 62,
                'link' => asset('images/ورق تنشيف ليلي.png')
            ],
            [
                'product_id' => 63,
                'link' => asset('images/ذرة حب سيدي هشام.png')
            ],
            [
                'product_id' => 64,
                'link' => asset('images/عدس مشروش سيدي هشام.png')
            ],
            [
                'product_id' => 65,
                'link' => asset('images/شاحن بطاية سريع.png')
            ],
            [
                'product_id' => 66,
                'link' => asset('images/مصففة شعر برو فايتال.png')
            ],
            [
                'product_id' => 67,
                'link' => asset('images/سيتي كريمير.png')
            ],
            [
                'product_id' => 68,
                'link' => asset('images/صودا ماندرين.png')
            ],
            [
                'product_id' => 69,
                'link' => asset('images/علبة زيت.png')
            ],
            [
                'product_id' => 70,
                'link' => asset('images/فاصوليا حب الشيف نديم.png')
            ],
            [
                'product_id' => 71,
                'link' => asset('images/لوز مدخن.png')
            ],
            [
                'product_id' => 72,
                'link' => asset('images/ماغ سمايلي فيس.png')
            ],
            [
                'product_id' => 73,
                'link' => asset('images/ماغ.png')
            ],
            [
                'product_id' => 74,
                'link' => asset('images/ماكسي كيك.png')
            ],
            [
                'product_id' => 75,
                'link' => asset('images/متة تاراغواي.png')
            ],
            [
                'product_id' => 76,
                'link' => asset('images/موزات مشفاية.png')
            ],
            [
                'product_id' => 77,
                'link' => asset('images/3 ب 1 ألترا فريش.png')
            ],
        ];
        ImageLink::insert($imageLinks);

        //? --> Offers
        Product::factory(3)->create()->each(function ($product) {
            $subProducts = Product::inRandomOrder()->whereBetween('id', [1, 10])->take(3)->get();
            foreach ($subProducts as $subProduct) {
                OfferProduct::create([
                    'offer_id' => $product->id,
                    'sub_product_id' => $subProduct->id,
                ]);
            }
        });
    }
}

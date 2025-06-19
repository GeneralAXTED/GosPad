GosPad - Oddiy va Tezkor Qidiruv Tizimi
GosPad - bu PHP va MySQL asosida ishlab chiqilgan oddiy qidiruv tizimi bo'lib, so'zlarni va ularning izohlarini saqlash, qidirish va boshqarish imkonini beradi. Admin paneli orqali so'zlarni qo'shish, tahrirlash va o'chirish mumkin.
Xususiyatlar

Qidiruv: So'zlar va izohlarni tezkor qidirish, real vaqtda takliflar (suggestions).
Admin Paneli: So'zlarni boshqarish (qo'shish, tahrirlash, ommaviy o'chirish), qidiruv va saralash.
Mobil Moslashuvchanlik: To'liq responsiv dizayn, mobil qurilmalarda qulay foydalanish.
Xavfsizlik: XSS va CSRF hujumlaridan himoya, input validatsiyasi.
CKEditor: Izohlar uchun boy matn muharriri.

O'rnatish
Talablar

PHP 7.4 yoki undan yuqori
MySQL 5.7 yoki undan yuqori
Composer
Web server (Apache/Nginx)

O'rnatish qadamlari

Repozitoriyani klonlash:
git clone [https://github.com/your-username/gospad.git](https://github.com/GeneralAXTED/GosPad.git)
cd gospad


Bog'liqliklarni o'rnatish:
composer install


Ma'lumotlar bazasini sozlash:

sql/database.sql faylini MySQL-da ishlatib, ma'lumotlar bazasini yarating.
config/db.php faylida ma'lumotlar bazasi sozlamalarini kiriting:define('DB_HOST', 'localhost');
define('DB_USER', 'your_username');
define('DB_PASS', 'your_password');
define('DB_NAME', 'gospad');




Admin hisobini yaratish:

sql/database.sql faylidagi admins jadvalliga foydalanuvchi qo'shing.
Parolni hash qilish uchun PHP'da quyidagi kodni ishlatishingiz mumkin:echo password_hash('your_password', PASSWORD_BCRYPT);




Loyihani ishga tushirish:

Web serveringizni sozlang (masalan, Apache uchun loyiha ildizini /var/www/gospad ga yo'naltiring).
Brauzerda http://your-domain.com yoki http://localhost/gospad manziliga o'ting.



Foydalanish

Bosh sahifa (index.php): So'zlarni qidirish va izohlarni ko'rish.
Admin Panel (admin.php):
Kirish uchun login.php orqali admin hisobiga kiring.
So'zlarni qo'shish, tahrirlash, ommaviy o'chirish va qidirish.


Chiqish: Navbar orqali "Chiqish" tugmasini bosing.

Loyiha tuzilmasi
gospad/

├── config/

│   └── db.php            # Ma'lumotlar bazasi sozlamalari

├── includes/

│   ├── header.php        # Umumiy sarlavha

│   ├── navbar.php        # Navigatsiya paneli

│   └── footer.php        # Umumiy footer

├── sql/

│   └── database.sql      # Ma'lumotlar bazasi tuzilmasi

├── vendor/               # Composer bog'liqliklari

├── .gitignore            # Repozitoriyga qo'shilmaydigan fayllar

├── composer.json         # Bog'liqliklar

├── LICENSE               # MIT litsenziyasi

├── README.md             # Loyiha haqida ma'lumot

├── admin.php             # Admin paneli

├── index.php             # Bosh sahifa

└── suggestions.php       # Qidiruv takliflari uchun


Ishlatilgan texnologiyalar

PHP: Server tarafi logikasi.
MySQL: Ma'lumotlar bazasi.
Tailwind CSS: Responsiv dizayn.
CKEditor: Boy matn muharriri.
voku/anti-xss: XSS hujumlaridan himoya.

Litsenziya
Bu loyiha MIT Litsenziyasi ostida tarqatiladi.
Aloqa
Savollar yoki takliflar uchun: info@gospad.uz

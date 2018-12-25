<?php
include "header.php";
$medisine = array(
	'آ.اس.آ',
	'آپروتینین',
	'آتراکوریوم',
	'آتروپین',
	'آتورواستاتین',
	'آتروپین',
	'آتنولول',
	'آزاتیوپرین',
	'آزیترومایسین',
	'آسیکلوویر',
	'آستمیزول',
	'آکاربوز',
	'آلبندازول',
	'آلبومین (سرم)',
	'آلپرازولام',
	'آلتادین',
	'آلفنتانیل',
	'آلندرونیت',
	'آلوپورینول',
	'هیدروکسید آلومینیوم',
	'آلیوم اس',
	'آلیکوم سی',
	'آمانتادین',
	'آمپی سیلین',
	'آمفوتریسین بی',
	'آملودیپین',
	'آمودیاکین',
	'آموکسی سیلین',
	'آمی تریپتیلین',
	'آمیل نیتریت',
	'آمیلوراید',
	'آمینوگلوتتیمید',
	'آمینوفیلین',
	'آمیودارون',
	'آمیکاسین',
	'آنتوسیانوزید آ',
	'آنتوم',
	'آنتی هیستامین دکونژستانت',
	'آنژیو پارس',
	'او آر اس',
	'ائوزین',
	'ابی دوکسیم',
	'اپی نفرین',
	'اتامبوتول',
	'اتاکریدین لاکتات',
	'اتر',
	'اتوسوکزوماید',
	'اتیلن اکساید',
	'اتینیل استرادیول',
	'اچ‌دی',
	'ارگوتامین',
	'اریترومایسین',
	'ازتیمایب',
	'اسپرزه',
	'اسپیرامایسین',
	'اسپیرونولاکتون',
	'اسپکتینومایسین',
	'استازولامید',
	'استامینوفن',
	'استرادیول',
	'استرپتوزوسین',
	'استرپتومایسین',
	'استرپتوکیناز',
	'استروژن کونژوگه',
	'استیل سالیسیلیک اسید',
	'استیل سیستئین',
	'استیل کولین کلراید',
	'اسمولول',
	'اسید استاریک',
	'اسید بوریک',
	'اسید تری کلرواستیک اسید',
	'اسید سالسیلیک',
	'اسید سیتریک',
	'اسید لاکتیک',
	'اشک مصنوعی',
	'افدرین',
	'افلوکساسین',
	'اکالیپتوس',
	'اکترئتید',
	'اکسازپام',
	'اکساندرولون',
	'اکسپکتورانت',
	'اکسی بوتینین کلراید',
	'اکسی تتراسایکلین',
	'اکسی توسین',
	'اکسی متالون',
	'اکسیژن',
	'اکی هرب',
	'الانزاپین',
	'ال‌دی',
	'الکل',
	'امپرازول',
	'امتین',
	'امگا تری',
	'انالاپریل',
	'اندانسترون',
	'انسولین',
	'انفلوران',
	'انوکسولون',
	'اورسودوکسی کولیک',
	'اوره',
	'اوروکیناز',
	'ایبوپروفن',
	'ایپراتروپیوم بروماید',
	'ایپکاک',
	'ایتراکونازول',
	'ایزوپروپیل الکل',
	'ایزوپروترنول',
	'ایزوترتینوئین',
	'ایزوسورباید دی نیترات',
	'ایزوفلوران',
	'ایزونیازید',
	'ایزوکاربوکسازید',
	'ایزوکسوپرین',
	'ایمونو گلوبولین',
	'ایمی پرامین',
	'اینترفرون بتا',
	'ایندواستاتین',
	'ایندوسیانین',
	'ایندومتاسین',
	'ب ب کلد',
	'ب کمپلکس',
	'باکلوفن',
	'بتامتازون',
	'بتانیکول کلراید',
	'بتاهیستین',
	'بتاکسولول',
	'براکس',
	'برم هگزین',
	'بروموکریپتین',
	'برن',
	'برونکوتیدی',
	'بریمونیدین',
	'برین زولامید',
	'بزاق مصنوعی',
	'بزافیبرات',
	'بلادونا ارگوتامین پ ب',
	'بلادونا پ ب',
	'بنزوئیل بنزوات',
	'بنزوئیل پروکساید',
	'بنزوئیک اسید',
	'بنزوکائین',
	'بنزیدامین',
	'بوپرنورفین',
	'بوپروپیون',
	'بوسپیرون',
	'بی پیریدین',
	'بیزاکودیل',
	'بیسموت ساب سیترات',
	'بکلومتازون',
	'پابا',
	'پاپاورین',
	'پاراتورمون',
	'پارافین',
	'پارامومایسین',
	'پامیدرونات',
	'پانکراتین',
	'پانکورونیوم',
	'پاکلیتاکسل',
	'پپونن',
	'پتیدین',
	'پرازوسین',
	'پرازیکوانتل',
	'پرالیدوکسیم',
	'پردنیزولون',
	'پرسیکا',
	'پرفوران',
	'پرفنازین',
	'پرمترین',
	'پروپاراکائین',
	'پروپاستامول',
	'پروپافنون',
	'پروپافول',
	'پروپامیدین',
	'پروپانتلین',
	'پروپانیدید',
	'پروپرانولول',
	'پروپیل تیواوراسیل',
	'پروتامین',
	'پروتیرلین',
	'پروتیونامید',
	'پروژسترون',
	'پروستاتان',
	'پروستاگلاندین',
	'پرومتازین',
	'پروکاربازین',
	'پروکاینامید',
	'پریلوکائین',
	'پریماکوئین',
	'پریمیدون',
	'پسودوافدرین',
	'پلانتاژل',
	'پلی میکسین',
	'پلی‌اتیلن گلیکول',
	'پنتازوسین',
	'پنتاگاسترین',
	'پنتامیدین',
	'پنتوکسی فیلین',
	'پنی سیلامین',
	'پنی سیلین',
	'پودوفیلین',
	'پوویدون آیوداین',
	'پی پرازین',
	'پیاسکلیدین',
	'پیپراسیلین',
	'پیجیوم آفریکانوم',
	'پیرازینامید',
	'پیراستام',
	'پیرانتل',
	'پیروینیوم',
	'پیروکسیکام',
	'پیریتیون زینک',
	'پیریدوستیگمین',
	'پیریلامین مالئات',
	'پیریمتامین',
	'پیلوکارپین',
	'پیموزاید',
	'تئوفیلین',
	'تادافیل',
	'تارتاریک',
	'تالودوماید',
	'تامسولوسین',
	'تاموکسیفن',
	'تانامیگرن',
	'تاکرین',
	'تترابنازین',
	'تتراسایکلین',
	'تتراکائین',
	'تتراکوزاکترین',
	'ترازودون',
	'ترازوسین',
	'ترامادول',
	'ترانیل سیپرامین',
	'ترانکزامیک اسید',
	'ترانکیوال',
	'تربوتالین',
	'تربینافین',
	'ترتینوئین',
	'ترفنادین',
	'تروپیسترون',
	'تروپیکامید',
	'ترولامین سالیسیلات',
	'تری فلوپرازین',
	'تری فلوریدین',
	'تری متافان',
	'تری هگزیفنیدیل',
	'تری کلابندازول',
	'تری کلروکربن',
	'تریامترن اچ',
	'تریامسینولون',
	'تریپتورلین',
	'تریپل سولفا',
	'تری متوپریم',
	'تریمیپرامین',
	'تستوسترون',
	'تلیترومایسین',
	'تنیپوساید',
	'توبرامایسین',
	'توبرکولین',
	'توپیرامات',
	'توسیان',
	'توسیگل',
	'تولازامید',
	'تولازولین',
	'تولمتین',
	'توکاینید',
	'تی اتیل پرازین',
	'تیابندازول',
	'تیروتروپین',
	'تیلاکتاز',
	'تیمولول',
	'تیمیان',
	'تیوپنتال سدیم',
	'تیوتپا',
	'تیوتیکسین',
	'تیوریدازین',
	'تیوگوانین',
	'تیکلوپیدین',
	'جم فیبروزیل',
	'جنتامایسین',
	'جینسینگ',
	'جین سین',
	'جینکوگل',
	'جمسیتابین',
	'داپسون',
	'داپوکستین',
	'داکاربازین',
	'داکتینومایسین',
	'داکسی سایکلین',
	'داکلیزاماب',
	'دانازول',
	'دانترولین سدیم',
	'دانوروبیسین',
	'دایجستیو',
	'دایمتیکون',
	'دروپردیول',
	'درگلیس',
	'دزوکسی کورتیکوسترون',
	'دسموپرسین',
	'دسیپرامین',
	'دفروکسامین مسیلات',
	'دفریپرون',
	'دکسپانتنول',
	'دکستران',
	'دکسترومتورفان',
	'دکسکلرفنیرامین',
	'دگزامتازون',
	'دگزامفتامین',
	'دوپامین',
	'دورزلامید',
	'دوکساپرام',
	'دوکسپین',
	'دوکسورابیسین',
	'دونپزیل',
	'دی آمینو پیریدین',
	'دی اتیل بسترول',
	'دی اتیل کاربامازین',
	'دی پیریدامول',
	'دی سیکلومین',
	'دی هیدروارگوتامین',
	'دی هیدروتاچیسترول',
	'دی هیدروامتین',
	'دیازوکساید',
	'دیازپام',
	'دیپی وفرین',
	'دیترانول',
	'دیدروژسترون',
	'دیزوپرامید',
	'دیفتریا آنتی توکسین',
	'دیفتریا توکساید',
	'دیفن هیدرامین',
	'دیفنوکسیلات',
	'دیکلوفناک',
	'دیگوکسین',
	'دیل سان',
	'دیلتیازیم',
	'دیلوکسانید',
	'دیمرکاپرول',
	'دیمن هیدرینات',
	'دینسترول',
	'رازین',
	'رالوکسیفن',
	'رانیتیدین',
	'رزماری',
	'رزورسینول',
	'رزرپین',
	'رگلیس',
	'رمی فنتالین',
	'روغن کبد ماهی',
	'روغن کرچک',
	'رها',
	'ریباویرین',
	'ریتالین',
	'ریتودرین',
	'ریسپریدون',
	'ریفامپین',
	'ریلوزول',
	'ریواستیگمین',
	'زافیر لوکاست',
	'زغال فعال',
	'زیدوودین',
	'زینتوما',
	'زینک اکسید',
	'زاديتن قرص -كتوتيفن',
	'سالبوتامول',
	'سالمترول',
	'سایمتیدین',
	'سایمتیکون',
	'ستریمید - سی',
	'ستیریزین',
	'ستیل پیریدینیوم',
	'سرترالین',
	'سرماخوردگی کودکان',
	'سرماخوردگی بزرگسالان',
	'سفازولین',
	'سفالکسین',
	'سفپیم',
	'سفتازیدیم',
	'سفتریاکسون',
	'سفتی زوکسیم',
	'سفوتاکسیم',
	'سفوروکسیم',
	'سفیکسیم',
	'سلژیلین',
	'سلکوکسیب',
	'سنکل',
	'سوتالول',
	'سودوافدرین',
	'سوربیتول',
	'سوکرالفیت',
	'سوکسینیل کولین',
	'سولفاسالازین',
	'سولفاستامید',
	'سولفونامید',
	'سوماتریپتان',
	'سیالیس',
	'سیپروترون',
	'سیپروفلوکساسین',
	'سیپروهپتادین',
	'سیتالوپرام',
	'سیتی کولین',
	'سیزاپراید',
	'سیکلوسپورین',
	'سیکلوفسفامید',
	'سیلدنافیل',
	'سیلور سولفادیازین',
	'سیمواستاتین',
	'سیناریزین',
	'شیرافزا',
	'فاموتیدین',
	'فروس سولفات',
	'فروفولیک - فولیکوفر - ففول',
	'فس فسترول',
	'فلکاینید',
	'فلوئوسینولون',
	'فلوپنتیکسول',
	'فلوتامید',
	'فلوتیکازون',
	'فلودارابین',
	'فلودروکورتیزون',
	'فلورازپام',
	'فلوراید',
	'فلورسین سدیم',
	'فلوروراسیل',
	'فلورومتولون',
	'فلوسیتوزین',
	'فلوفنازین',
	'فلوکستین',
	'فلوکونازول',
	'فلومازنیل',
	'فلوواستاتین',
	'فلووکسامین',
	'فنازوپیریدین',
	'فنتانیل',
	'فنتولامین',
	'فنفلورامین',
	'فنوباربیتال',
	'فنوکسی بنزامین',
	'فنول',
	'فنی توئین',
	'فنیل افرین',
	'فورازولیدون',
	'فوروزماید',
	'فوزیدیک اسید',
	'فولیک اسید',
	'فیتوکلد',
	'فیناستراید',
	'فیبرینوژن',
	'فیبرینولیزین',
	'فیزوستیگمین',
	'فیلگراستیم',
	'کراتاگل',
	'کالندیت ای',
	'کاپتوپریل',
	'کاپرئومایسین',
	'کاراوی میکسچر',
	'کارباکول',
	'کاربامازپین',
	'کاربامید پروکساید',
	'کاربنی سیلین',
	'کاربوپلاتین',
	'کاربی مازول',
	'کارموستین',
	'کارمیناتیف',
	'کارمینت',
	'کارنی تین',
	'کارودیلول',
	'کالامین دی',
	'کالاندولا',
	'کامفر',
	'کامیل',
	'کانامایسین',
	'کپسیتابین',
	'کپسیکوم',
	'کتامین',
	'کتوتیفن',
	'کتوکونازول',
	'کدئین فسفات',
	'کراتاگوس',
	'کرچک (کاستورایل)',
	'کروتامیتون',
	'کرومولین سدیم',
	'کلاریترومایسین',
	'کلد استاپ',
	'کلرامفنیکل',
	'کلرپروپامید',
	'کلرپرومازین',
	'کلردیازپوکساید',
	'کلرفنیرآمین',
	'کلرور سدیم',
	'کلروکسیلنول',
	'کلروکین',
	'کلرهگزیدین',
	'کلستیرامین',
	'کلسی تریول',
	'کلسی تونین',
	'کلسیم',
	'کلسیم دی',
	'کلسیم گلوکونات',
	'کلسی پوتریول',
	'کلشی سین',
	'کلماستین',
	'کلوبازام',
	'کلوبتازول',
	'کلوبوتینول',
	'کلوپیدوگرل',
	'کلوتریمازول',
	'کلوزاپین',
	'کلوفازیمین',
	'کلوفیبرات',
	'کلوگزاسیلین',
	'کلومیپرامین',
	'کلومیفن سیترات',
	'کلونازپام',
	'کلونیدین',
	'کلیدینیوم سی',
	'کولیستین سولفات',
	'کلیندامایسین',
	'کنتراسپتیو',
	'کوآموکسی کلاو',
	'کوتریموکسازول',
	'کیناکرین',
	'کینیدین',
	'کینین',
	'کول تار',
	'گاباپنتین',
	'گادودیامید',
	'گارسین',
	'گارلت',
	'گارلیک',
	'گارلی کاپ',
	'گاسترولیت',
	'گاسترولان',
	'گامابنزن هگزاکلراید',
	'گانسیکلویر',
	'گایافنزین',
	'گرانیسترون',
	'گریپ واتر',
	'گریزئوفولوین',
	'گلوتار آلدئید',
	'گلوکزامین',
	'گلوکاگون',
	'گلی بن کلامید',
	'گلیسرین فنیکه',
	'گلی پیزید',
	'گلیسین',
	'گلیسیرین',
	'گلی کلازید',
	'گنادورلین',
	'لاتانوپروست',
	'لاکتوز',
	'لاکتولوز',
	'لاموتریژین',
	'لامیوودین',
	'لانولین',
	'لاینسترونل',
	'لوامیزول',
	'لوپرامید',
	'لوراتادین',
	'لورازپام',
	'لوزارتان',
	'لوموستین',
	'لووتیروکسین',
	'لوودوپا',
	'لووستاتین',
	'لوونورژسترول',
	'لیتیوم کربنات',
	'لیدوکائین',
	'لیورگل',
	'لیزینوپریل',
	'لیکوفار',
	'لیندان',
	'لوکوورین',
	'ماپروتیلین',
	'مبندازول',
	'مترونیدازول',
	'متفورمین',
	'متوپرولول',
	'متوتروکسات',
	'متوکاربامول',
	'متوکلوپرامید',
	'متیل ارگونوین',
	'متیل پردنیزولون',
	'متیل تستوسترون',
	'متیل دوپا',
	'متیل سالیسیلات',
	'متیل فنیدات',
	'متیل سلولز',
	'متی مازول',
	'متیلن بلو',
	'متنامین مندلات',
	'مجسترول',
	'مدروکسی پروژسترون',
	'مرفین',
	'مرکاپتوپورین',
	'مسالازین',
	'مسنا',
	'مفنامیک اسید',
	'مفناید',
	'مکسیلیتین',
	'مکوئینول',
	'مگلومین',
	'ملفالان',
	'ملیسان',
	'منتازین',
	'منتول',
	'منستروگل',
	'منوتروپین',
	'منیزیوم هیدروکساید',
	'مانیتول',
	'منیزیوم',
	'موپیروسین',
	'موکلوبماید',
	'مولتی ویتامین',
	'مولگراموستیم',
	'مونته لوکاست',
	'مونوبنزون',
	'میترامایسین',
	'میتوتان',
	'میتوکسانترون',
	'میتومایسین',
	'میدازولام',
	'میرتوپلکس',
	'میلرینون',
	'میکونازول',
	'مینوکسیدیل',
	'نئوستیگمین',
	'نئومایسین',
	'ناپروکسن',
	'ناتامایسین',
	'نافسیلین سدیم',
	'نالتروکسان',
	'نالوکسان',
	'نالیدیکسیک اسید',
	'ناندرلون',
	'نفازولین',
	'نوراگل',
	'نوراپی نفرین',
	'نورتریپتیلین',
	'نیاسین آمید',
	'نیتروفورازون',
	'نیتروگلیسرین',
	'نیترازپام',
	'نیتروپروساید سدیم',
	'نیتروز اکساید',
	'نیتروژن موستارد',
	'نیتروفورانتوئین',
	'نیستاتین',
	'نیفیدیپین',
	'نیکلوزاماید',
	'نیکوتین',
	'نیکوتین آمید',
	'نیمودیپین',
	'وارفارین',
	'وازلین',
	'وازوپرسین',
	'والپروات سدیم',
	'والزارتان',
	'وانکومایسین',
	'وراپامیل',
	'وکرونیوم',
	'ویتاگنوس',
	'ویتامین آ',
	'ویتامین ب ۱',
	'ویتامین ب ۱۲',
	'ویتامین ب ۶',
	'ویتامین ب کمپلکس',
	'ویتامین ث',
	'ویتامین د',
	'ویتامین کا',
	'ویتامین ای',
	'ویدارابین',
	'وینبلاستین',
	'ویندسین',
	'وینکریستین',
	'هاش سی جی',
	'هالوپریدول',
	'هالوتان',
	'هپارین',
	'هماتروپین',
	'هماتینیک',
	'هیدرالازین',
	'هیدروکسی زین',
	'هیدروکسی کلروکین',
	'هیدروکلرتیازید',
	'هیدروکورتیزون',
	'هیدروکینون',
	'هیوسین',
	'هیدروکسید آلومینیوم',
	'هیوسین',
	'ید',
	'یدوکینول',
	'یدیکسانول',
	'یوهمبین',
	'ياسمين',
	'يدوكسوريدين قطره چشمي');

	// foreach ($medisine as $key){
	// 	$insert = "INSERT INTO medisine (title) VALUES ('".$key."')";
	// 	mysqli_query(connection(), $insert);
	// }


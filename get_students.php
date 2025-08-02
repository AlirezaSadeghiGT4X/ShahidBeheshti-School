<?php
date_default_timezone_set('Asia/Tehran');
$hour = date('H');
$minute = date('i');
$day = date('N');

$code = $_GET['code'];
$students = [];
$studentsList701 = ['صالح ابوترابی', 'محمد آمارلو', 'محمدپارسا پیرانی', 'امیرصدرا پهلوان', 'ابوالفضل جوریان', 'محمدجواد جوریان', 'امیرشهریار حسینی', 'سید علی‌اصغر حسینی', 'امیررضا خسروی', 'ابوالفضل خواجوئی', 'رامتین رحیمیان نیشابوری', 'سید یونس رضوی', 'محمد‌حسین سعادتی', 'محمدطاها سهیلی راد', 'سینا شاداب‌زاده', 'آبتین شگفته', 'سید مهدیار علم پرور', 'صالح علیشاهی', 'محمدیاسین فرهمندمهر', 'امیرعلی ماروسی', 'امیرعباس محبوبی نیا', 'محمدمعین محمدی', 'آرش معدنچی', 'پارسا نقابی', 'امیرعلی نوکاریزی', 'حسین نیرآبادی', 'امیرعلی نیرآبادی', 'امیر یوسف‌ نژاد محمدیه'];
$studentsList702 = ['امیرمحمد اسفندی','حسین آهوئی','محمدصالح پیرگزی','سینا جعفری','کسرا جندقی','سید امیررضا حسینی','محمدمتین حکاک','حسام دهنوخلجی','عرفان رزمخواه','سید امیریحیی رضوی','محمدامین زاهدی','محمدحسین سعادتی','یاسین سلطانی','سید روح الاامین سید موسوی','کیان شمس آبادی','داریوش صادقی','حسین ضمیری','محمدمعین عدالتیان طوسی','کوروش غلام پورزو','محمدحسین فتح آبادی','فرهام فولادی','امیرعلی قبیدیان','پارسا گل ماهی','پارسا لکزیان','فرزاد مستعلی','آراد منتظریان','سورنا ولوی','محمدجواد همت آبادی'];
$studentsList801 = ['حسن اقبالی','امیرمحمد امامی نژاد','امیرعلی امینی','کوروش اندیشمند','امیرعلی باغیشنی','محسن بذرگری','ایلیا تاتاری','راستین تلافیان','امیرعباس توزنده جانی','محمدطاها توزنده جانی','پارسا جعفری','سید محمد حسینی','محمد خادریان','امیرحسین خیرآبادی','علی خیرآبادی','فرزین زارع','امیررضا سعادتی','سروش سوسنی','محمد شامحمدی','علیرضا صادقی','برنا صادقی اول','سجاد طایر','طاها فخریان','پژمان لکزیان','محمد محمدی','داریوش معتمدی','سید حسین میرشجاع عنبرانی','مهرداد نجفی','محمدصدرا نصرآبادی','نیما نصرآبادی','امین نقدبیشی','فرهاد هوایی'];
$studentsList802 = ['امیرحسین احمدی نیا','امیررضا احمدی نیا','رضا آبکار','علیرضا بوجانی','امیرعلی حسین آبادی','سید ابوالفضل حسینی','سید امیرعلی حسینی راد','سید عماد حسینی فدروی','پارسا خوش لحجه مقدم','کیارش دادپور','امین علی رودی','پرهام زروندی','امیرعلی سعیدی نژاد','امیرحسین سلیمانی','بهنام سلیمانی','پارسا سلیمانی','امیرعلی سوقندی','سید آریا سیدآبادی','محمدشایان شهرآبادی','علی شورورزی','امیرعلی شیرازی','سبحان صدیقی','احمد عمارلو','میثم عین آبادی','محمدمهدی لطفی','محمدصالح مرشدلو','آرمین مسعودی فر','سید مهدی موسوی','مسیح میان بندی','امیرصدرا میرزابیاتی','الیار میرشکاری','حسین نویدمهر'];
$studentsList901 = ['امیرعباس اسعدی','آرش اکبری','آریان امینیان مقدم','مهرداد بیاتی','محمدرضا بوژمهرانی','ایلیا تاجیک','محمدصدرا حسامی','یاشار حسن زاده','پارسا حسین پور','رضا ده باشیان','صدرا دهنوی','محمد رباطی','سروش سپهری نیا','محمدمهدی سلامی','سید آرتین سیدین','متین صفایی فر','شایان عادلی','علیرضا عارفخانی','سجاد عجمی اول','امیررضا عربخانی','پرهام فولادی ثابت','یاسین قبدیان','علیرضا کرد','سپهر کیوان نژاد','احمدرضا محسن آبادی','حسین مصدق نیشابوری','امیرحسام منظوری'];
$studentsList902 = ['سروش اعتمادی فرد','امیرعلی امید','امین برزنونی','شایان پیرانی','امیرعلی توحیدی مقدم','سپهر حسنی','سید طاها حسینی','سید یوسف حسینی','احمدرضا حکیمی','امیر سلیمانی','امیرمحمد سیدآبادی','امیرمحمد شورابی','آرشام صالحی','عرفان عربخانی','امیرمهدی غلامی','هومن فخارزاده','محمدمهدی فرجامی تبار','آرمین فرح نیا','سینا فروزش','آرین لطفی','سید صالح موذن تولائی','پارسا ملک زاده','نیما ملک زاده','سید متین موسوی','حسین مولائی شرق','امیرحسین نیک پی','احمدرضا هراتی'];
$timeRanges = [
    ['code' => '101', 'day' => 6, 'start' => [7, 0], 'end' => [9, 0], 'students' => $studentsList701],
    ['code' => '201', 'day' => 6, 'start' => [7, 0], 'end' => [9, 0], 'students' => $studentsList701],
    ['code' => '1', 'day' => 6, 'start' => [9, 1], 'end' => [10, 40], 'students' => $studentsList701],
    ['code' => '3', 'day' => 6, 'start' => [10, 41], 'end' => [12, 20], 'students' => $studentsList701],
    ['code' => '4', 'day' => 7, 'start' => [7, 0], 'end' => [9, 0], 'students' => $studentsList701],
    ['code' => '5', 'day' => 7, 'start' => [9, 1], 'end' => [10, 40], 'students' => $studentsList701],
    ['code' => '6', 'day' => 7, 'start' => [10, 41], 'end' => [12, 20], 'students' => $studentsList701],
    ['code' => '7', 'day' => 7, 'start' => [12, 21], 'end' => [14, 00], 'students' => $studentsList701],
    ['code' => '2', 'day' => 1, 'start' => [7, 0], 'end' => [9, 0], 'students' => $studentsList701],
    ['code' => '8', 'day' => 1, 'start' => [9, 1], 'end' => [10, 40], 'students' => $studentsList701],
    ['code' => '9', 'day' => 1, 'start' => [10, 41], 'end' => [12, 20], 'students' => $studentsList701],
    ['code' => '1', 'day' => 1, 'start' => [12, 21], 'end' => [14, 00], 'students' => $studentsList701],
    ['code' => '10', 'day' => 2, 'start' => [7, 0], 'end' => [9, 0], 'students' => $studentsList701],
    ['code' => '5', 'day' => 2, 'start' => [9, 1], 'end' => [10, 40], 'students' => $studentsList701],
    ['code' => '8', 'day' => 2, 'start' => [10, 41], 'end' => [12, 20], 'students' => $studentsList701],
    ['code' => '5', 'day' => 2, 'start' => [12, 21], 'end' => [14, 00], 'students' => $studentsList701],
    ['code' => '8', 'day' => 3, 'start' => [7, 0], 'end' => [9, 0], 'students' => $studentsList701],
    ['code' => '11', 'day' => 3, 'start' => [9, 1], 'end' => [10, 40], 'students' => $studentsList701],
    ['code' => '12', 'day' => 3, 'start' => [10, 41], 'end' => [12, 20], 'students' => $studentsList701],
    ['code' => '13', 'day' => 3, 'start' => [12, 21], 'end' => [14, 00], 'students' => $studentsList701],
    ['code' => '101', 'day' => 6, 'start' => [7, 0], 'end' => [9, 0], 'students' => $studentsList702],
    ['code' => '201', 'day' => 6, 'start' => [7, 0], 'end' => [9, 0], 'students' => $studentsList702],
    ['code' => '9', 'day' => 6, 'start' => [9, 1], 'end' => [10, 40], 'students' => $studentsList702],
    ['code' => '1', 'day' => 6, 'start' => [10, 41], 'end' => [12, 20], 'students' => $studentsList702],
    ['code' => '3', 'day' => 6, 'start' => [12, 21], 'end' => [14, 00], 'students' => $studentsList702],
    ['code' => '5', 'day' => 7, 'start' => [7, 0], 'end' => [9, 0], 'students' => $studentsList702],
    ['code' => '12', 'day' => 7, 'start' => [9, 1], 'end' => [10, 40], 'students' => $studentsList702],
    ['code' => '8', 'day' => 7, 'start' => [10, 41], 'end' => [12, 20], 'students' => $studentsList702],
    ['code' => '4', 'day' => 7, 'start' => [12, 21], 'end' => [14, 00], 'students' => $studentsList702],
    ['code' => '6', 'day' => 1, 'start' => [7, 0], 'end' => [9, 0], 'students' => $studentsList702],
    ['code' => '2', 'day' => 1, 'start' => [9, 1], 'end' => [10, 40], 'students' => $studentsList702],
    ['code' => '1', 'day' => 1, 'start' => [10, 41], 'end' => [12, 20], 'students' => $studentsList702],
    ['code' => '10', 'day' => 1, 'start' => [12, 21], 'end' => [14, 00], 'students' => $studentsList702],
    ['code' => '5', 'day' => 2, 'start' => [7, 0], 'end' => [9, 0], 'students' => $studentsList702],
    ['code' => '8', 'day' => 2, 'start' => [9, 1], 'end' => [10, 40], 'students' => $studentsList702],
    ['code' => '5', 'day' => 2, 'start' => [10, 41], 'end' => [12, 20], 'students' => $studentsList702],
    ['code' => '14', 'day' => 3, 'start' => [7, 0], 'end' => [9, 0], 'students' => $studentsList702],
    ['code' => '8', 'day' => 3, 'start' => [9, 1], 'end' => [10, 40], 'students' => $studentsList702],
    ['code' => '13', 'day' => 3, 'start' => [10, 41], 'end' => [12, 20], 'students' => $studentsList702],
    ['code' => '11', 'day' => 3, 'start' => [12, 21], 'end' => [14, 00], 'students' => $studentsList702],
    ['code' => '15', 'day' => 6, 'start' => [7, 0], 'end' => [9, 0], 'students' => $studentsList801],
    ['code' => '7', 'day' => 6, 'start' => [9, 1], 'end' => [10, 40], 'students' => $studentsList801],
    ['code' => '9', 'day' => 6, 'start' => [10, 41], 'end' => [12, 20], 'students' => $studentsList801],
    ['code' => '15', 'day' => 6, 'start' => [12, 21], 'end' => [14, 00], 'students' => $studentsList801],
    ['code' => '8', 'day' => 7, 'start' => [7, 0], 'end' => [9, 0], 'students' => $studentsList801],
    ['code' => '4', 'day' => 7, 'start' => [9, 1], 'end' => [10, 40], 'students' => $studentsList801],
    ['code' => '12', 'day' => 7, 'start' => [10, 41], 'end' => [12, 20], 'students' => $studentsList801],
    ['code' => '11', 'day' => 7, 'start' => [12, 21], 'end' => [14, 00], 'students' => $studentsList801],
    ['code' => '16', 'day' => 1, 'start' => [7, 0], 'end' => [9, 0], 'students' => $studentsList801],
    ['code' => '10', 'day' => 1, 'start' => [9, 1], 'end' => [10, 40], 'students' => $studentsList801],
    ['code' => '17', 'day' => 1, 'start' => [10, 41], 'end' => [12, 20], 'students' => $studentsList801],
    ['code' => '8', 'day' => 1, 'start' => [12, 21], 'end' => [14, 00], 'students' => $studentsList801],
    ['code' => '8', 'day' => 2, 'start' => [7, 0], 'end' => [9, 0], 'students' => $studentsList801],
    ['code' => '15', 'day' => 2, 'start' => [9, 1], 'end' => [10, 40], 'students' => $studentsList801],
    ['code' => '18', 'day' => 2, 'start' => [10, 41], 'end' => [12, 20], 'students' => $studentsList801],
    ['code' => '6', 'day' => 2, 'start' => [12, 21], 'end' => [14, 00], 'students' => $studentsList801],
    ['code' => '16', 'day' => 3, 'start' => [7, 0], 'end' => [9, 0], 'students' => $studentsList801],
    ['code' => '13', 'day' => 3, 'start' => [9, 1], 'end' => [10, 40], 'students' => $studentsList801],
    ['code' => '16', 'day' => 3, 'start' => [10, 41], 'end' => [12, 20], 'students' => $studentsList801],
    ['code' => '18', 'day' => 3, 'start' => [12, 21], 'end' => [14, 00], 'students' => $studentsList801],
    ['code' => '9', 'day' => 6, 'start' => [7, 0], 'end' => [9, 0], 'students' => $studentsList802],
    ['code' => '15', 'day' => 6, 'start' => [9, 1], 'end' => [10, 40], 'students' => $studentsList802],
    ['code' => '7', 'day' => 6, 'start' => [10, 41], 'end' => [12, 20], 'students' => $studentsList802],
    ['code' => '12', 'day' => 6, 'start' => [12, 21], 'end' => [14, 00], 'students' => $studentsList802],
    ['code' => '6', 'day' => 7, 'start' => [7, 0], 'end' => [9, 0], 'students' => $studentsList802],
    ['code' => '8', 'day' => 7, 'start' => [9, 1], 'end' => [10, 40], 'students' => $studentsList802],
    ['code' => '11', 'day' => 7, 'start' => [10, 41], 'end' => [12, 20], 'students' => $studentsList802],
    ['code' => '8', 'day' => 1, 'start' => [7, 0], 'end' => [9, 0], 'students' => $studentsList802],
    ['code' => '16', 'day' => 1, 'start' => [9, 1], 'end' => [10, 40], 'students' => $studentsList802],
    ['code' => '10', 'day' => 1, 'start' => [10, 41], 'end' => [12, 20], 'students' => $studentsList802],
    ['code' => '17', 'day' => 1, 'start' => [12, 21], 'end' => [14, 00], 'students' => $studentsList802],
    ['code' => '152', 'day' => 2, 'start' => [7, 0], 'end' => [9, 0], 'students' => $studentsList802],
    ['code' => '182', 'day' => 2, 'start' => [7, 0], 'end' => [9, 0], 'students' => $studentsList802],
    ['code' => '4', 'day' => 2, 'start' => [9, 1], 'end' => [10, 40], 'students' => $studentsList802],
    ['code' => '15', 'day' => 2, 'start' => [10, 41], 'end' => [12, 20], 'students' => $studentsList802],
    ['code' => '8', 'day' => 2, 'start' => [12, 21], 'end' => [14, 00], 'students' => $studentsList802],
    ['code' => '13', 'day' => 3, 'start' => [7, 0], 'end' => [9, 0], 'students' => $studentsList802],
    ['code' => '16', 'day' => 3, 'start' => [9, 1], 'end' => [10, 40], 'students' => $studentsList802],
    ['code' => '18', 'day' => 3, 'start' => [10, 41], 'end' => [12, 20], 'students' => $studentsList802],
    ['code' => '16', 'day' => 3, 'start' => [12, 21], 'end' => [14, 00], 'students' => $studentsList802],
    ['code' => '3', 'day' => 6, 'start' => [7, 0], 'end' => [9, 0], 'students' => $studentsList901],
    ['code' => '19', 'day' => 6, 'start' => [9, 1], 'end' => [10, 40], 'students' => $studentsList901],
    ['code' => '19', 'day' => 6, 'start' => [10, 41], 'end' => [12, 20], 'students' => $studentsList901],
    ['code' => '15', 'day' => 6, 'start' => [12, 21], 'end' => [14, 00], 'students' => $studentsList901],
    ['code' => '15', 'day' => 7, 'start' => [7, 0], 'end' => [9, 0], 'students' => $studentsList901],
    ['code' => '7', 'day' => 7, 'start' => [9, 1], 'end' => [10, 40], 'students' => $studentsList901],
    ['code' => '20', 'day' => 7, 'start' => [10, 41], 'end' => [12, 20], 'students' => $studentsList901],
    ['code' => '12', 'day' => 7, 'start' => [12, 21], 'end' => [14, 00], 'students' => $studentsList901],
    ['code' => '9', 'day' => 1, 'start' => [7, 0], 'end' => [9, 0], 'students' => $studentsList901],
    ['code' => '19', 'day' => 1, 'start' => [9, 1], 'end' => [10, 40], 'students' => $studentsList901],
    ['code' => '8', 'day' => 1, 'start' => [10, 41], 'end' => [12, 20], 'students' => $studentsList901],
    ['code' => '13', 'day' => 1, 'start' => [12, 21], 'end' => [14, 00], 'students' => $studentsList901],
    ['code' => '4', 'day' => 2, 'start' => [7, 0], 'end' => [9, 0], 'students' => $studentsList901],
    ['code' => '18', 'day' => 2, 'start' => [9, 1], 'end' => [10, 40], 'students' => $studentsList901],
    ['code' => '10', 'day' => 2, 'start' => [10, 41], 'end' => [12, 20], 'students' => $studentsList901],
    ['code' => '15', 'day' => 2, 'start' => [12, 21], 'end' => [14, 00], 'students' => $studentsList901],
    ['code' => '11', 'day' => 3, 'start' => [7, 0], 'end' => [9, 0], 'students' => $studentsList901],
    ['code' => '21', 'day' => 3, 'start' => [9, 1], 'end' => [10, 40], 'students' => $studentsList901],
    ['code' => '21', 'day' => 3, 'start' => [10, 41], 'end' => [12, 20], 'students' => $studentsList901],
    ['code' => '18', 'day' => 3, 'start' => [12, 21], 'end' => [14, 00], 'students' => $studentsList901],
    ['code' => '19', 'day' => 6, 'start' => [7, 0], 'end' => [9, 0], 'students' => $studentsList902],
    ['code' => '3', 'day' => 6, 'start' => [9, 1], 'end' => [10, 40], 'students' => $studentsList902],
    ['code' => '15', 'day' => 6, 'start' => [10, 41], 'end' => [12, 20], 'students' => $studentsList902],
    ['code' => '19', 'day' => 6, 'start' => [12, 21], 'end' => [14, 00], 'students' => $studentsList902],
    ['code' => '12', 'day' => 7, 'start' => [7, 0], 'end' => [9, 0], 'students' => $studentsList902],
    ['code' => '15', 'day' => 7, 'start' => [9, 1], 'end' => [10, 40], 'students' => $studentsList902],
    ['code' => '4', 'day' => 7, 'start' => [10, 41], 'end' => [12, 20], 'students' => $studentsList902],
    ['code' => '8', 'day' => 7, 'start' => [12, 21], 'end' => [14, 00], 'students' => $studentsList902],
    ['code' => '19', 'day' => 1, 'start' => [7, 0], 'end' => [9, 0], 'students' => $studentsList902],
    ['code' => '9', 'day' => 1, 'start' => [9, 1], 'end' => [10, 40], 'students' => $studentsList902],
    ['code' => '13', 'day' => 1, 'start' => [10, 41], 'end' => [12, 20], 'students' => $studentsList902],
    ['code' => '20', 'day' => 1, 'start' => [12, 21], 'end' => [14, 00], 'students' => $studentsList902],
    ['code' => '153', 'day' => 2, 'start' => [7, 0], 'end' => [9, 0], 'students' => $studentsList902],
    ['code' => '183', 'day' => 2, 'start' => [7, 0], 'end' => [9, 0], 'students' => $studentsList902],
    ['code' => '10', 'day' => 2, 'start' => [9, 1], 'end' => [10, 40], 'students' => $studentsList902],
    ['code' => '14', 'day' => 2, 'start' => [10, 41], 'end' => [12, 20], 'students' => $studentsList902],
    ['code' => '21', 'day' => 3, 'start' => [7, 0], 'end' => [9, 0], 'students' => $studentsList902],
    ['code' => '18', 'day' => 3, 'start' => [9, 1], 'end' => [10, 40], 'students' => $studentsList902],
    ['code' => '11', 'day' => 3, 'start' => [10, 41], 'end' => [12, 20], 'students' => $studentsList902],
    ['code' => '21', 'day' => 3, 'start' => [12, 21], 'end' => [14, 00], 'students' => $studentsList902],
    ['code' => '21', 'day' => 6, 'start' => [00, 21], 'end' => [14, 00], 'students' => $studentsList802]
];

function checkTimeRange($start, $end) {
    global $hour, $minute;
    $currentTime = $hour * 60 + $minute;
    $startMinutes = $start[0] * 60 + $start[1];
    $endMinutes = $end[0] * 60 + $end[1];
    return ($currentTime >= $startMinutes && $currentTime <= $endMinutes);
}

foreach ($timeRanges as $timeRange) {
    if ($code == $timeRange['code'] && $day == $timeRange['day'] && checkTimeRange($timeRange['start'], $timeRange['end'])) {
        $students = $timeRange['students'];
        break;
    }
}

echo json_encode($students);
?>

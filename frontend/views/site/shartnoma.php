<?php

$qr = (new \Da\QrCode\QrCode('https://qabul.alfraganusuniversity.uz/site/shartnoma?key='.$items['auth_key']))->setSize(100, 100)
    ->setMargin(10)
    ->useForegroundColor(0, 0, 0);
$img = $qr->writeDataUri();
$summa_kon = $items['contract_summa'];
if ($items['ball'] < 56.7){
    $summa_kon = $items['contract_summa']*1.5;
}
?>
<table style="width: 100%; border-collapse: collapse; font-family: 'Times New Roman'">
    <tr >
        <td colspan="2" style="text-align: center;padding-bottom: 10px">
            <div><b><?=$items['mvdir']?>|<?=$items['sh_raqam']?>-Sonli bakalavriat bo‘yicha kadr tayyorlash uchun ikki tomonlama shartnoma</b></div>
        </td>
    </tr>
    <tr>
        <td style="padding: 10px 0px"><p>Toshkent sh.</p></td>
        <td style="text-align: right"><p><?=$items['end_date'];?></p></td>
    </tr>
    <tr>
        <td colspan="2" style="padding-bottom: 10px">
            <div><b> “ALFRAGANUS UNIVERSITY” </b> nodavlat oliy ta’lim tashkiloti, keyingi o‘rinlarda “Universitet” deb
                ataluvchi nomidan buyruq asosida ish yurituvchi Universitetning moliyaviy ishlar bo‘yicha prorektori
                Yuldashev Yakub Sabirovich bir tomondan,
            </div>
        </td>
    </tr>

    <tr>
        <td colspan="2">
            <div><b><?= $items['fname'] . ' ' . $items['lname'] . ' ' . $items['mname'] ?></b>  nodavlat oliy ta’lim tashkiloti, keyingi o‘rinlarda “Universitet” deb
                ataluvchi nomidan buyruq asosida ish yurituvchi Universitetning moliyaviy ishlar bo‘yicha prorektori
                Yuldashev Yakub Sabirovich bir tomondan,
            </div>
        </td>
    </tr>
    <tr>
        <td colspan="2" style="text-align: center">
            <div>
                <div style="text-align: center"><b>I. Shartnoma predmeti</b> <br></div>
            </div>
        </td>
    </tr>
    <tr>
        <td colspan="2">
            <div> &nbsp;&nbsp;&nbsp;&nbsp; 1.1. Mazkur shartnomaga muvofiq Universitet Talabani quyida ko'rsatilgan
                ta’lim yo‘nalishi va ta'lim
                shakli bo‘yicha oliy ta’limning davlat ta’lim standartlari asosida tasdiqlangan o‘quv reja va o‘quv
                dasturlari asosida o‘qitish majburiyatini oladi.
            </div>
        </td>
    </tr>
    <tr>
        <td colspan="2" style="border:1px solid #000;width: 100%">
            <div>
                <div class="row" style="width: 100%;">
                    <table style="width: 100%">
                        <tr>
                            <td style="width: 20%">
                                <div class="col-md-6">Ta'lim yo'nalishi:</div>
                            </td>
                            <td style="width: 80%">
                                <div class="col-md-6"><b><?=$items['mvdir'].' '.$items['dir_name'] ?></b></div>
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 20%">
                                <div class="col-md-6">Ta'lim shakli: :</div>
                            </td>
                            <td style="width: 80%">
                                <div class="col-md-6"><b><?= $items['emode_name']  ?></b></div>
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 20%">
                                <div class="col-md-6">O'qish muddati:</div>
                            </td>
                            <td style="width: 80%">
                                <div class="col-md-6"><b><?= $items['year']  ?> YIL</b></div>
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 20%">
                                <div class="col-md-6">O'quv kursi:</div>
                            </td>
                            <td style="width: 80%">
                                <div class="col-md-6"><b>1 kurs</b></div>
                            </td>
                        </tr>

                    </table>
                </div>
            </div>
        </td>
    </tr>
    <tr>
        <td colspan="2">
            <div>
                <div>
                    &nbsp;&nbsp;&nbsp;&nbsp; Talaba esa Universitet tomonidan belgilangan tartib-qoidalarga rioya qilgan
                    holda ta’lim olish va ta’lim
                    olganlik uchun haq to‘lash majburiyatini oladi.
                </div>
                <div>
                    &nbsp;&nbsp;&nbsp;&nbsp; 1.2. Universitetda shartnoma asosida o‘qitishning to‘lovi (keyingi
                    o‘rinlarda – shartnoma to‘lovi)
                    miqdori ta’lim yo‘nalishi, ta’lim shakli kunduzgi, kechki va sirtqi, o‘qishni ko‘chirish bilan
                    bog‘liq
                    fanlarning farqini o‘qitish hamda to‘plagan ballidan kelib chiqib, har bir o‘quv yili uchun alohida
                </div>
            </div>
        </td>
    </tr>
    <tr>
        <td colspan="2" style="text-align: center">
            <b>II. Tomonlarning huquq va majburiyatlari</b>
        </td>
    </tr>
    <tr>
        <td colspan="2">
            <div >
                &nbsp;&nbsp;&nbsp;&nbsp;2.1. Universitetning huquqlari: <br>
                &nbsp;&nbsp;&nbsp;&nbsp;Talabadan shartnoma majburiyatlari bajarilishini, shu jumladan Universitetning
                ichki tartib-qoidalariga
                rioya qilishni, dars mashg‘ulotlarida muntazam qatnashishni, shartnoma to‘lovini o‘z vaqtida to‘lashni
                talab qilish, Talaba shartnoma to‘lovini amalga oshirganidan so‘ng o‘qishga qabul qilish; <br>
                &nbsp;&nbsp;&nbsp;&nbsp;Universitetning ichki tartib-qoidalariga rioya qilmagan yoki shartnoma to‘lovini
                o‘z vaqtida amalga
                oshirmagan Talabani ogohlantirmasdan talabalar safidan chiqarish yoki tegishli kursda qoldirish; <br>
                &nbsp;&nbsp;&nbsp;&nbsp;Talaba Universitetning ichki tartib-qoidalarini qo‘pol ravishda buzgan, xususan
                huquqbuzarlik sodir
                etgan hollarda shartnomani bir tomonlama bekor qilish;
                mehnatga haq to‘lashning eng kam miqdori yoki bazaviy hisoblash miqdori o‘zgarganda, shartnoma to‘lovi
                miqdorini o‘zgartirish; <br>
                shartnoma to‘lovi muddatlarini uzaytirish
            </div>
            <div>
                &nbsp;&nbsp;&nbsp;&nbsp;2.2. Universitetning majburiyatlari: <br>
                &nbsp;&nbsp;&nbsp;&nbsp;Talabani o‘qitish uchun texnika va yong‘in xavfsizligi, sanitariya qoidalari,
                normalari va gigiyena
                normativlariga muvofiq zarur shart-sharoitlarni yaratib berish; <br>
                &nbsp;&nbsp;&nbsp;&nbsp;Talabaning qonunchilik hujjatlarida belgilangan huquq va manfaatlarini himoya
                qilish;
                <br>
                &nbsp;&nbsp;&nbsp;&nbsp;Talabaga oliy ta’limning davlat ta’lim standarti asosida yuqori darajada ta’lim
                berish;
                <br>
                bakalavriat uchun mo‘ljallangan o‘quv reja va dasturlarda belgilangan fanlarni o‘zlashtirgan,
                imtihonlardan muvaffaqiyatli o‘tib, Universitetni tamomlagan Talabaga oliy ma’lumot to‘g‘risida hujjat
                (diplom) berish. <br>
                &nbsp;&nbsp;&nbsp;&nbsp;2.3. Talabaning huquqlari: <br>
                &nbsp;&nbsp;&nbsp;&nbsp;Universitetdan shartnoma majburiyatlari bajarilishini talab qilish;
                oliy ta’limning davlat ta’lim standarti asosida tasdiqlangan o‘quv reja va dasturlarga muvofiq ta’lim
                olish;
                <br>
                &nbsp;&nbsp;&nbsp;&nbsp;Universitetning moddiy-texnik bazasidan, jumladan, laboratoriya jihozlari,
                asbob-uskunalar, axborotresurs markazi va Wi-Fi hududidan bepul foydalanish;
                <br>
                &nbsp;&nbsp;&nbsp;&nbsp;Universitetning ta’lim jarayonlarini yaxshilashga doir takliflar berish. <br>

            </div>
            <div>
                &nbsp;&nbsp;&nbsp;&nbsp;2.4. Talabaning majburiyatlari: <br>
                shartnoma to‘lovini mazkur shartnomada belgilangan muddatlarda to‘lash; <br>
                &nbsp;&nbsp;&nbsp;&nbsp;Universitet ustavi va ichki tartib-qoidalariga qat’iy rioya qilish; <br>
                &nbsp;&nbsp;&nbsp;&nbsp;Dars mashg‘ulotlariga uzrli sabablarsiz muntazam qatnashish; <br>
                &nbsp;&nbsp;&nbsp;&nbsp; Ta’lim olish jarayonida o‘z bilim darajasini muntazam oshirib borish; <br>
                &nbsp;&nbsp;&nbsp;&nbsp; Boshqa oliy ta’lim tashkilotidan, jumladan xorijiy oliy ta’lim tashkilotidan o‘qishini ko‘chirish uchun universitetdan shartnoma olgan talabalar hujjatlari to’liq holda 60 kun ichida Universitetga olib kelishlari; <br>
                &nbsp;&nbsp;&nbsp;&nbsp;O‘zining xatti-harakatlari, OAV va ijtimoiy tarmoqlardagi chiqishlari bilan
                Universitetning ishchanlik
                <br>
                obro‘si va manfaatlariga putur yetkazishdan tiyilish
            </div>
        </td>
    </tr>
    <tr>
        <td colspan="2" style="text-align: center;padding: 15px">
            <div>
                <b>III. To‘lov miqdorlari va muddatlari</b>
            </div>
        </td>
    </tr>
    <tr>
        <td colspan="2">
            <div>
                &nbsp;&nbsp;&nbsp;&nbsp;3.1 <b></b> o‘quv yilining Universitet bakalavriat <b> I-KURS</b> bosqichi uchun
                shartnomaning 1.1 bandida
                ko‘rsatilgan ta’lim yo‘nalishi va ta’lim shakliga Talaba tomonidan to‘lanishi lozim bo‘lgan
                shartnoma to‘lovi miqdori:
            </div>
        </td>
    </tr>
    <tr>
        <td colspan="2" style="text-align: center">
            <div style="text-align: center">
                <b>
                <?=number_format($summa_kon,0,'',' ').' ('.num2str_uz($summa_kon).')'?>
                </b>
            </div>
        </td>
    </tr>
    <tr>
        <td colspan="2" style="padding: 10px">
            <div>
                &nbsp;&nbsp;&nbsp;&nbsp;3.2. Talaba tomonidan mazkur shartnoma 3.1-bandida ko‘rsatilgan shartnoma
                to‘lovining kamida 50%
                <b>2023-yil 28-fevralgacha</b> ichida to‘langan taqdirda, qolgan qismi <b> 2023-yil 1-mayga</b> qadar
                to‘lanishi shart.
                Talaba tomonidan shartnoma to‘lovining 100 foizi shartnoma olingan muddatdan boshlab 10 ish kuni
                ichida to‘langan taqdirda, jami shartnoma to‘lovining 10 foizi <b><?php $foiz = $summa_kon*0.1; echo number_format($foiz,0,'',' ') ?> so'm </b> miqdorida
                chegirma taqdim etiladi va chegirma hisobga olingan holda shartnoma to‘lovi miqdori
            </div>
        </td>
    </tr>
    <tr>
        <td colspan="2" style="text-align: center;padding: 10px">
            <div style="text-align: center">
                <b>
                <?php $summa_f =  $summa_kon-($summa_kon*0.1).' ('.num2str_uz($summa_kon).')'; echo number_format($summa_f,0,'',' ') ?> so'mni tashkil etadi
                </b>
            </div>
        </td>
    </tr>
    <tr>
        <td colspan="2">
            <div>
                &nbsp;&nbsp;&nbsp;&nbsp;3.3. Talaba tomonidan shartnoma to‘lovini to‘lashda shartnomaning tartib raqami
                va sanasi, familiyasi,
                ismi va sharifi hamda o‘quv kursi to‘lov topshiriqnomasida to‘liq ko‘rsatiladi. <br>
                &nbsp;&nbsp;&nbsp;&nbsp;3.4. Talaba tegishli fanlar bo‘yicha akademik qarzdorlikni qayta topshirish
                sharti bilan keyingi kurs
                (semestr)ga o‘tkazilgan taqdirda, keyingi semestr uchun shartnoma to‘lovi Talaba tomonidan akademik
                qarzdorlik topshirilgunga qadar amalga oshiriladi. <br>
                &nbsp;&nbsp;&nbsp;&nbsp;3.5. Universitet ichki-tartib qoidalariga rioya qilmaganligi (bir semestr
                davomida 36 akademik soat
                dars qoldirganligi yoki ma’lumoti haqidagi hujjatning asl nusxasini Universitetga o‘z vaqtida taqdim
                etmaganligi) sababli talabalar safidan chiqarilgan Talaba tomonidan to‘langan shartnoma to‘lovi qaytarib
                berilmaydi. <br>
                Boshqa oliy ta’lim tashkilotidan, jumladan xorijiy oliy ta’lim tashkilotidan o‘qishini ko‘chirish uchun murojaat qilgan hamda Universitetga o‘qishga qabul qilingan Talabaning soxta hujjatlardan foydalanganligi, o‘qishni ko‘chirish bilan bog‘liq hujjatlarida yolg‘on va haqqoniy bo‘lmagan ma’lumotlar mavjudligi aniqlansa yoki hujjatlar belgilangan muddatda Universitetga taqdim etilmasa, Talaba Universitet talabalari safidan chiqariladi, bunda Talaba tomonidan amalga oshirilgan shartnoma to‘lovi qaytarib berilmaydi. <br>
                &nbsp;&nbsp;&nbsp;&nbsp;3.6. Talaba tomonidan to'lov amalga oshirilgandan so'ng o'qimasligini yoki o'qishni davom ettirmasligini bildirib murojat qilgan taqdirda, Universitetning Talabaga ta'lim berish bilan bog'liq barcha xarajatlari kontrakt summasidan ushlab qolinadi, biroq ushlab qolingan summa jami kontrakt summasining 10 foizidan kam bo'lmasligi kerak.

            </div>
        </td>
    </tr>
    <tr>
        <td colspan="2" style="text-align: center;padding: 10px 0px">
            <div style="text-align: center">
                <b>
                    IV. Shartnomani bekor qilish
                </b>
            </div>
        </td>
    </tr>
    <tr>
        <td colspan="2">
            <div style="text-align: center">
                &nbsp;&nbsp;&nbsp;&nbsp;4.1. Shartnoma quyidagi hollarda bekor qilinadi: <br>
                &nbsp;&nbsp;&nbsp;&nbsp;Tomonlarning o‘zaro roziligi bilan; <br>
                &nbsp;&nbsp;&nbsp;&nbsp;Universitetning tashabbusiga ko‘ra Talaba talabalar safidan chiqarilganda; <br>

                &nbsp;&nbsp;&nbsp;&nbsp; Talaba tomonidan shartnoma to‘lovi mazkur shartnomada belgilangan muddatlarda
                va miqdorlarda
                amalga oshirilmasa; <br>
                &nbsp;&nbsp;&nbsp;&nbsp; Talabaning tashabbusiga ko‘ra Talaba yozma murojaat qilganda; <br>
                &nbsp;&nbsp;&nbsp;&nbsp; Qonunchilik hujjatlarida belgilangan boshqa hollarda; <br>
                &nbsp;&nbsp;&nbsp;&nbsp; 4.2. Talaba tomonidan shartnoma to‘lovi mazkur shartnomaning 3.2-bandi birinchi
                xatboshida
                belgilangan muddatlarda amalga oshirilmasa, Universitet Talabani ogohlantirmasdan talabalar safidan
                chiqarishga yoki kursdan-kursga qoldirishga haqli. <br>
                &nbsp;&nbsp;&nbsp;&nbsp; Boshqa hollarda Tomonlardan biri shartnoma shartlariga amal qilmaganda,
                ikkinchi Tomon
                shartnomani bekor qilish haqida kamida 5 kun oldin ogohlantirgan holda shartnomani bir tomonlama bekor
                qilishi mumkin <br>

            </div>
        </td>
    </tr>
    <tr>
        <td colspan="2" style="text-align: center;">
            <div style="text-align: center">
                <b>
                    V. Fors-major holatlari
                </b>
            </div>
        </td>
    </tr>
    <tr>
        <td colspan="2">
            <div style="text-align: center">
                &nbsp;&nbsp;&nbsp;&nbsp; 5.1. Ushbu shartnomaga asosan majburiyatlarning bajarilmasligi holatlari yengib
                bo‘lmas kuchlar
                natijasida vujudga kelganda fors-major holatlari deb hisoblanadi, bunda Tomonlar o‘z majburiyatlarini
                bajarishdan qisman yoki to‘liq ozod bo‘ladilar.
                <br>
                &nbsp;&nbsp;&nbsp;&nbsp; 5.2. Fors-major holatlariga Tomonlarning irodasi va faoliyatiga bog‘liq
                bo‘lmagan tabiat hodisalari
                (pandemiya, zilzila, ko‘chki, bo‘ron, qurg‘oqchilik va boshqalar) yoki ijtimoiy-iqtisodiy holatlar
                (urush
                holati, qamal, davlat manfaatlarini ko‘zlab import va eksportni taqiqlash va hokazo) sababli yuzaga
                keladigan sharoitlarda Tomonlarga qabul qilingan majburiyatlarni bajarish imkonini bermaydigan
                favqulodda, oldini olib bo‘lmaydigan va kutilmagan holatlar kiradi. <br>
                &nbsp;&nbsp;&nbsp;&nbsp; 5.3. Tomonlardan qaysi biriga majburiyatlarni fors-major holatlari sababli
                bajarmaslik ma’lum bo‘lsa,
                darhol ikkinchi Tomonga 10 kun ichida majburiyatni bajarmaslik sabablari haqida dalillar bilan xabar
                berishi lozim. <br>
                &nbsp;&nbsp;&nbsp;&nbsp;5.4. Shartnomaga asosan majburiyatlarni ijro etish muddati fors-major holatlari
                davom etish muddatiga
                qadar uzaytiriladi. Agar fors-major ta’siri 30 kundan ortiq vaqt davom etsa, Tomonlar o‘zaro kelishuvga
                binoan shartnomani bekor qilishlari mumkin.

            </div>
        </td>
    </tr>
    <tr>
        <td colspan="2" style="text-align: center">
            <div style="text-align: center">
                <b>
                    VI. Nizolarni hal qilish tartibi
                </b>
            </div>
        </td>
    </tr>
    <tr>
        <td colspan="2">
            <div style="text-align: center">
                &nbsp;&nbsp;&nbsp;&nbsp;6.1. Tomonlar o‘rtasida ushbu shartnoma bo‘yicha nizolar va kelishmovchiliklar
                ular o‘rtasida
                muzokara o‘tkazish yo‘li bilan hal qilinadi. <br>
                &nbsp;&nbsp;&nbsp;&nbsp;6.2. Agar nizo va kelishmovchiliklarni muzokaralar yo‘li bilan hal qilib
                bo‘lmasa, taalluqlilik bo‘yicha
                Universitet joylashgan hududdagi sudga murojaat qilinadi.

            </div>
        </td>
    </tr>
    <tr>
        <td colspan="2" style="text-align: center">
            <div style="text-align: center">
                <b>
                    VII. Yakuniy qoidalar
                </b>
            </div>
        </td>
    </tr>
    <tr>
        <td colspan="2">
            <div style="text-align: center">
                &nbsp;&nbsp;&nbsp;&nbsp;7.1. Talaba shartnoma shartlaridan norozi bo‘lgan taqdirda, Universitetga
                shartnoma olingan kundan
                boshlab 15 kun ichida murojaat qilishi lozim, mazkur muddat tugagach shartnoma shartlari bo'yicha
                etirozlar qabul qilinmaydi. <br>
                &nbsp;&nbsp;&nbsp;&nbsp;7.2. O‘zbekiston Respublikasi Prezidentining tegishli farmoniga muvofiq mehnatga
                haq to‘lashning eng
                kam miqdori yoki bazaviy hisoblash miqdori o‘zgarganda, shartnoma to‘lovi miqdori Universitet
                ta’sischilari qaroriga muvofiq navbatdagi semestr boshidan oshiriladi. <br>
                &nbsp;&nbsp;&nbsp;&nbsp;7.3. Mazkur shartnoma Tomonlar imzolagan paytdan e’tiboran kuchga kiradi hamda
                2023-yil 1-iyulga
                qadar amal qiladi. Shartnomaning amal qilish muddati tugaganligi qarzdor Tomonni o‘z zimmasidagi
                majburiyatlarni bajarishdan ozod qilmaydi. <br>
                &nbsp;&nbsp;&nbsp;&nbsp;7.4. Тomonlar shartnoma majburiyatlarini bajarmagan taqdirda, qonunchilikda
                belgilangan tartibda
                javobgar bo‘ladilar. <br>
                &nbsp;&nbsp;&nbsp;&nbsp;7.5. Ushbu shartnoma har ikki Tomon uchun bittadan ikki nusxada davlat tilida
                tuzilgan bo‘lib, har ikki
                nusxa bir xil yuridik kuchga ega. <br>

            </div>
        </td>
    </tr>
    <tr>
        <td colspan="2" style="text-align: center;padding: 10px">
            <div style="text-align: center">
                <b>
                    VIII. Tomonlarning rekvizitlari
                </b>
            </div>
        </td>
    </tr>
</table>
<table style="width: 100%; border-collapse: collapse">
    <tr>
        <td style="width: 50%">
            <div><b>“ALFRAGANUS UNIVERSITY” nodavlat oliy ta’lim tashkiloti</b></div>
            <p>
                 <div><b>Tel: +998781227557</b></div>
            </p>
        </td>
        <td style="width: 50%">
            <div><b>TALABA: <br>
            <?= $items['fname'] . ' ' . $items['lname'] . ' ' . $items['mname'] ?>
            </b></div>
            <p>
            <div><b>Pasport ma’lumotlari: <?=$items['pasport']?></b></div>
            </p>
            <p>
            <div><b>JSHSHIR: <?=$items['imie']?></b></div>
            </p>
            <p>
            <div><b>Telefon raqam: +998 <?=Yii::$app->user->identity->username?></b></div>
            </p>
            <p>
        </td>
    </tr>
    <tr>
        <td style="padding: 10px">
            M.O‘.
        </td>
        <td style="padding: 10px">
        Talaba: <?= $items['fname'] . ' ' . $items['lname'] . ' ' . $items['mname'] ?>
        </td>
    </tr>
    <tr>
        <td style="padding: 10px">
            Prorektor&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Y. Yuldashev
        </td>
    </tr>
    <tr>
        <td style="text-align:center" colspan="2">
            <img src="<?=$img?>" width="100px">
        </td>
    </tr>
</table>
<div>
<table style="width: 100%;border-collapse: collapse;" border="1">
    <tr>
        <td width="80%" style="vertical-align:center;padding:10px">
            <div>
                <div style="text-align:right; width: 100%;" align="right"><b>INVOYS RAQAMI:  <?=$items['invoice']?></b></div>
                <div>
                    <b>KONTRAKT TO’LOV MIQDORI:  <?=number_format($summa_kon,0,'',' ').' ('.num2str_uz($summa_kon).')'?> so’m</b> <br>
                </div>
                <div>
                To’lovni amalga oshirish usullari: <br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Yuridik shaxslar va bank kassalari orqali. Bunda To’lov maqsadida - Invoys raqam. JSHSHIR. Talabaning IFSH tartibida yozilgan bo’lishi talab etiladi <br>

                </div>
                <br>
                <div style="border:2px solid red;">
                    <span style="padding: 10px"><?=$items['invoice']?>|<?=$items['imie']?>. <?= $items['fname'] . ' ' . $items['lname'] . ' ' . $items['mname'] ?></span>
                </div>
                <br>
                <div style="padding: 10px;color:red;">
                    <small>To’lov maqsadi belgilangan tartibda to’ldirilmagan taqdirda to’lovni qabul qilishga doir muammolar kelib chiqishi mumkin. Shu sababli to’lov qilish jarayonida to’lov maqsadini belgilangan tartibda ko’rsatilishi shart!</small>
                </div>
                <br>
                <div>
                <small>= = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = </small>
                </div>
                <br>
                <div style="color:aqua">
                    <b>To’lovlarni amalgi oshirish uchun Universitetning bank hisob ma’lumotlari:</b>
                </div>
                <br>
                <div>
                    <table style="width:100%; border-collapse: collapse;" border="1">
                        <tr>
                            <td><b>Qabul qiluvchi tashkilot nomi: </b></td>
                            <td><b>“ALFRAGANUS UNIVERSITY” MCHJ</b></td>
                        </tr>
                        <tr>
                            <td><b>Hisob raqami: </b></td>
                            <td><b>20208000505551165001</b></td>
                        </tr>
                        <tr>
                            <td><b>Bank kodi (MFO):</b></td>
                            <td><b>00837 </b></td>
                        </tr>
                        <tr>
                            <td><b>Bank nomi: </b></td>
                            <td><b>“Ipoteka-bank” Yunusobod filiali </b></td>
                        </tr>
                        <tr>
                            <td><b>STIR  (INN):</b></td>
                            <td><b>309738309 </b></td>
                        </tr>
                        <tr>
                            <td><b>IFUT (OKED):</b></td>
                            <td><b>85420 </b></td>
                        </tr>
                    </table>
                </div>
            </div>
        </td>
        <td width="20%" style="padding:10px;">
            <div>
                <img src="/img/android-chrome-512x512.png" width="150px" alt="">
            </div>
            <div>
            Jami kontrakt to’lov miqdori:  <?=number_format($summa_kon,0,'',' ');?> so’m bo’lim Talaba to’lovni 2 qismga bo’lib to’lashi mumkin.
            </div>
            <br>
            <br>
            <br>
            <br>
            <div><b>Sana:<?=$items['end_date'];?></b></div>
        </td>
    </tr>
</table>
</div>
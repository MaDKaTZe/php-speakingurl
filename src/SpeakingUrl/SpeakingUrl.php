<?php
/**
 * Copyright (c) 2018 Todor Petrov <tpetrov92@gmail.com>
 *
 * Licensed under BSD 3-clause license.
 *
 * For the full copyright and license information, please view the LICENSE file that was distributed with the source.
 */

namespace SpeakingUrl;


class SpeakingUrl
{
    static private $charMap = [
        // latin
        'À'    => 'A',
        'Á'    => 'A',
        'Â'    => 'A',
        'Ã'    => 'A',
        'Ä'    => 'Ae',
        'Å'    => 'A',
        'Æ'    => 'AE',
        'Ç'    => 'C',
        'È'    => 'E',
        'É'    => 'E',
        'Ê'    => 'E',
        'Ë'    => 'E',
        'Ì'    => 'I',
        'Í'    => 'I',
        'Î'    => 'I',
        'Ï'    => 'I',
        'Ð'    => 'D',
        'Ñ'    => 'N',
        'Ò'    => 'O',
        'Ó'    => 'O',
        'Ô'    => 'O',
        'Õ'    => 'O',
        'Ö'    => 'Oe',
        'Ő'    => 'O',
        'Ø'    => 'O',
        'Ù'    => 'U',
        'Ú'    => 'U',
        'Û'    => 'U',
        'Ü'    => 'Ue',
        'Ű'    => 'U',
        'Ý'    => 'Y',
        'Þ'    => 'TH',
        'ß'    => 'ss',
        'à'    => 'a',
        'á'    => 'a',
        'â'    => 'a',
        'ã'    => 'a',
        'ä'    => 'ae',
        'å'    => 'a',
        'æ'    => 'ae',
        'ç'    => 'c',
        'è'    => 'e',
        'é'    => 'e',
        'ê'    => 'e',
        'ë'    => 'e',
        'ì'    => 'i',
        'í'    => 'i',
        'î'    => 'i',
        'ï'    => 'i',
        'ð'    => 'd',
        'ñ'    => 'n',
        'ò'    => 'o',
        'ó'    => 'o',
        'ô'    => 'o',
        'õ'    => 'o',
        'ö'    => 'oe',
        'ő'    => 'o',
        'ø'    => 'o',
        'ù'    => 'u',
        'ú'    => 'u',
        'û'    => 'u',
        'ü'    => 'ue',
        'ű'    => 'u',
        'ý'    => 'y',
        'þ'    => 'th',
        'ÿ'    => 'y',
        'ẞ'    => 'SS',

        // language specific

        // Arabic
        'ا'    => 'a',
        'أ'    => 'a',
        'إ'    => 'i',
        'آ'    => 'aa',
        'ؤ'    => 'u',
        'ئ'    => 'e',
        'ء'    => 'a',
        'ب'    => 'b',
        'ت'    => 't',
        'ث'    => 'th',
        'ج'    => 'j',
        'ح'    => 'h',
        'خ'    => 'kh',
        'د'    => 'd',
        'ذ'    => 'th',
        'ر'    => 'r',
        'ز'    => 'z',
        'س'    => 's',
        'ش'    => 'sh',
        'ص'    => 's',
        'ض'    => 'dh',
        'ط'    => 't',
        'ظ'    => 'z',
        'ع'    => 'a',
        'غ'    => 'gh',
        'ف'    => 'f',
        'ق'    => 'q',
        'ك'    => 'k',
        'ل'    => 'l',
        'م'    => 'm',
        'ن'    => 'n',
        'ه'    => 'h',
        'و'    => 'w',
        'ي'    => 'y',
        'ى'    => 'a',
        'ة'    => 'h',
        'ﻻ'    => 'la',
        'ﻷ'    => 'laa',
        'ﻹ'    => 'lai',
        'ﻵ'    => 'laa',

        // Persian additional characters than Arabic
        'گ'    => 'g',
        'چ'    => 'ch',
        'پ'    => 'p',
        'ژ'    => 'zh',
        'ک'    => 'k',
        'ی'    => 'y',

        // Arabic diactrics
        'َ'    => 'a',
        'ً'    => 'an',
        'ِ'    => 'e',
        'ٍ'    => 'en',
        'ُ'    => 'u',
        'ٌ'    => 'on',
        'ْ'    => '',

        // Arabic numbers
        '٠'    => '0',
        '١'    => '1',
        '٢'    => '2',
        '٣'    => '3',
        '٤'    => '4',
        '٥'    => '5',
        '٦'    => '6',
        '٧'    => '7',
        '٨'    => '8',
        '٩'    => '9',

        // Persian numbers
        '۰'    => '0',
        '۱'    => '1',
        '۲'    => '2',
        '۳'    => '3',
        '۴'    => '4',
        '۵'    => '5',
        '۶'    => '6',
        '۷'    => '7',
        '۸'    => '8',
        '۹'    => '9',

        // Burmese consonants
        'က'    => 'k',
        'ခ'    => 'kh',
        'ဂ'    => 'g',
        'ဃ'    => 'ga',
        'င'    => 'ng',
        'စ'    => 's',
        'ဆ'    => 'sa',
        'ဇ'    => 'z',
        'စျ'   => 'za',
        'ည'    => 'ny',
        'ဋ'    => 't',
        'ဌ'    => 'ta',
        'ဍ'    => 'd',
        'ဎ'    => 'da',
        'ဏ'    => 'na',
        'တ'    => 't',
        'ထ'    => 'ta',
        'ဒ'    => 'd',
        'ဓ'    => 'da',
        'န'    => 'n',
        'ပ'    => 'p',
        'ဖ'    => 'pa',
        'ဗ'    => 'b',
        'ဘ'    => 'ba',
        'မ'    => 'm',
        'ယ'    => 'y',
        'ရ'    => 'ya',
        'လ'    => 'l',
        'ဝ'    => 'w',
        'သ'    => 'th',
        'ဟ'    => 'h',
        'ဠ'    => 'la',
        'အ'    => 'a',
        // consonant character combos
        'ြ'    => 'y',
        'ျ'    => 'ya',
        'ွ'    => 'w',
        'ြွ'   => 'yw',
        'ျွ'   => 'ywa',
        'ှ'    => 'h',
        // independent vowels
        'ဧ'    => 'e',
        '၏'    => '-e',
        'ဣ'    => 'i',
        'ဤ'    => '-i',
        'ဉ'    => 'u',
        'ဦ'    => '-u',
        'ဩ'    => 'aw',
        'သြော' => 'aw',
        'ဪ'    => 'aw',
        // numbers
        '၀'    => '0',
        '၁'    => '1',
        '၂'    => '2',
        '၃'    => '3',
        '၄'    => '4',
        '၅'    => '5',
        '၆'    => '6',
        '၇'    => '7',
        '၈'    => '8',
        '၉'    => '9',
        // virama and tone marks which are silent in transliteration
        '္'    => '',
        '့'    => '',
        'း'    => '',

        // Czech
        'č'    => 'c',
        'ď'    => 'd',
        'ě'    => 'e',
        'ň'    => 'n',
        'ř'    => 'r',
        'š'    => 's',
        'ť'    => 't',
        'ů'    => 'u',
        'ž'    => 'z',
        'Č'    => 'C',
        'Ď'    => 'D',
        'Ě'    => 'E',
        'Ň'    => 'N',
        'Ř'    => 'R',
        'Š'    => 'S',
        'Ť'    => 'T',
        'Ů'    => 'U',
        'Ž'    => 'Z',

        // Dhivehi
        'ހ'    => 'h',
        'ށ'    => 'sh',
        'ނ'    => 'n',
        'ރ'    => 'r',
        'ބ'    => 'b',
        'ޅ'    => 'lh',
        'ކ'    => 'k',
        'އ'    => 'a',
        'ވ'    => 'v',
        'މ'    => 'm',
        'ފ'    => 'f',
        'ދ'    => 'dh',
        'ތ'    => 'th',
        'ލ'    => 'l',
        'ގ'    => 'g',
        'ޏ'    => 'gn',
        'ސ'    => 's',
        'ޑ'    => 'd',
        'ޒ'    => 'z',
        'ޓ'    => 't',
        'ޔ'    => 'y',
        'ޕ'    => 'p',
        'ޖ'    => 'j',
        'ޗ'    => 'ch',
        'ޘ'    => 'tt',
        'ޙ'    => 'hh',
        'ޚ'    => 'kh',
        'ޛ'    => 'th',
        'ޜ'    => 'z',
        'ޝ'    => 'sh',
        'ޞ'    => 's',
        'ޟ'    => 'd',
        'ޠ'    => 't',
        'ޡ'    => 'z',
        'ޢ'    => 'a',
        'ޣ'    => 'gh',
        'ޤ'    => 'q',
        'ޥ'    => 'w',
        'ަ'    => 'a',
        'ާ'    => 'aa',
        'ި'    => 'i',
        'ީ'    => 'ee',
        'ު'    => 'u',
        'ޫ'    => 'oo',
        'ެ'    => 'e',
        'ޭ'    => 'ey',
        'ޮ'    => 'o',
        'ޯ'    => 'oa',
        'ް'    => '',

        // Georgian https =>//en.wikipedia.org/wiki/Romanization_of_Georgian
        // National system (2002)
        'ა'    => 'a',
        'ბ'    => 'b',
        'გ'    => 'g',
        'დ'    => 'd',
        'ე'    => 'e',
        'ვ'    => 'v',
        'ზ'    => 'z',
        'თ'    => 't',
        'ი'    => 'i',
        'კ'    => 'k',
        'ლ'    => 'l',
        'მ'    => 'm',
        'ნ'    => 'n',
        'ო'    => 'o',
        'პ'    => 'p',
        'ჟ'    => 'zh',
        'რ'    => 'r',
        'ს'    => 's',
        'ტ'    => 't',
        'უ'    => 'u',
        'ფ'    => 'p',
        'ქ'    => 'k',
        'ღ'    => 'gh',
        'ყ'    => 'q',
        'შ'    => 'sh',
        'ჩ'    => 'ch',
        'ც'    => 'ts',
        'ძ'    => 'dz',
        'წ'    => 'ts',
        'ჭ'    => 'ch',
        'ხ'    => 'kh',
        'ჯ'    => 'j',
        'ჰ'    => 'h',

        // Greek
        'α'    => 'a',
        'β'    => 'v',
        'γ'    => 'g',
        'δ'    => 'd',
        'ε'    => 'e',
        'ζ'    => 'z',
        'η'    => 'i',
        'θ'    => 'th',
        'ι'    => 'i',
        'κ'    => 'k',
        'λ'    => 'l',
        'μ'    => 'm',
        'ν'    => 'n',
        'ξ'    => 'ks',
        'ο'    => 'o',
        'π'    => 'p',
        'ρ'    => 'r',
        'σ'    => 's',
        'τ'    => 't',
        'υ'    => 'y',
        'φ'    => 'f',
        'χ'    => 'x',
        'ψ'    => 'ps',
        'ω'    => 'o',
        'ά'    => 'a',
        'έ'    => 'e',
        'ί'    => 'i',
        'ό'    => 'o',
        'ύ'    => 'y',
        'ή'    => 'i',
        'ώ'    => 'o',
        'ς'    => 's',
        'ϊ'    => 'i',
        'ΰ'    => 'y',
        'ϋ'    => 'y',
        'ΐ'    => 'i',
        'Α'    => 'A',
        'Β'    => 'B',
        'Γ'    => 'G',
        'Δ'    => 'D',
        'Ε'    => 'E',
        'Ζ'    => 'Z',
        'Η'    => 'I',
        'Θ'    => 'TH',
        'Ι'    => 'I',
        'Κ'    => 'K',
        'Λ'    => 'L',
        'Μ'    => 'M',
        'Ν'    => 'N',
        'Ξ'    => 'KS',
        'Ο'    => 'O',
        'Π'    => 'P',
        'Ρ'    => 'R',
        'Σ'    => 'S',
        'Τ'    => 'T',
        'Υ'    => 'Y',
        'Φ'    => 'F',
        'Χ'    => 'X',
        'Ψ'    => 'PS',
        'Ω'    => 'O',
        'Ά'    => 'A',
        'Έ'    => 'E',
        'Ί'    => 'I',
        'Ό'    => 'O',
        'Ύ'    => 'Y',
        'Ή'    => 'I',
        'Ώ'    => 'O',
        'Ϊ'    => 'I',
        'Ϋ'    => 'Y',

        // Latvian
        'ā'    => 'a',
        // 'č' => 'c', // duplicate
        'ē'    => 'e',
        'ģ'    => 'g',
        'ī'    => 'i',
        'ķ'    => 'k',
        'ļ'    => 'l',
        'ņ'    => 'n',
        // 'š' => 's', // duplicate
        'ū'    => 'u',
        // 'ž' => 'z', // duplicate
        'Ā'    => 'A',
        // 'Č' => 'C', // duplicate
        'Ē'    => 'E',
        'Ģ'    => 'G',
        'Ī'    => 'I',
        'Ķ'    => 'k',
        'Ļ'    => 'L',
        'Ņ'    => 'N',
        // 'Š' => 'S', // duplicate
        'Ū'    => 'U',
        // 'Ž' => 'Z', // duplicate

        // Macedonian
        'Ќ'    => 'Kj',
        'ќ'    => 'kj',
        'Љ'    => 'Lj',
        'љ'    => 'lj',
        'Њ'    => 'Nj',
        'њ'    => 'nj',
        'Тс'   => 'Ts',
        'тс'   => 'ts',

        // Polish
        'ą'    => 'a',
        'ć'    => 'c',
        'ę'    => 'e',
        'ł'    => 'l',
        'ń'    => 'n',
        // 'ó' => 'o', // duplicate
        'ś'    => 's',
        'ź'    => 'z',
        'ż'    => 'z',
        'Ą'    => 'A',
        'Ć'    => 'C',
        'Ę'    => 'E',
        'Ł'    => 'L',
        'Ń'    => 'N',
        'Ś'    => 'S',
        'Ź'    => 'Z',
        'Ż'    => 'Z',

        // Ukranian
        'Є'    => 'Ye',
        'І'    => 'I',
        'Ї'    => 'Yi',
        'Ґ'    => 'G',
        'є'    => 'ye',
        'і'    => 'i',
        'ї'    => 'yi',
        'ґ'    => 'g',

        // Romanian
        'ă'    => 'a',
        'Ă'    => 'A',
        'ș'    => 's',
        'Ș'    => 'S',
        // 'ş' => 's', // duplicate
        // 'Ş' => 'S', // duplicate
        'ț'    => 't',
        'Ț'    => 'T',
        'ţ'    => 't',
        'Ţ'    => 'T',

        // Russian https =>//en.wikipedia.org/wiki/Romanization_of_Russian
        // ICAO

        'а' => 'a',
        'б' => 'b',
        'в' => 'v',
        'г' => 'g',
        'д' => 'd',
        'е' => 'e',
        'ё' => 'yo',
        'ж' => 'zh',
        'з' => 'z',
        'и' => 'i',
        'й' => 'i',
        'к' => 'k',
        'л' => 'l',
        'м' => 'm',
        'н' => 'n',
        'о' => 'o',
        'п' => 'p',
        'р' => 'r',
        'с' => 's',
        'т' => 't',
        'у' => 'u',
        'ф' => 'f',
        'х' => 'kh',
        'ц' => 'c',
        'ч' => 'ch',
        'ш' => 'sh',
        'щ' => 'sh',
        'ъ' => '',
        'ы' => 'y',
        'ь' => '',
        'э' => 'e',
        'ю' => 'yu',
        'я' => 'ya',
        'А' => 'A',
        'Б' => 'B',
        'В' => 'V',
        'Г' => 'G',
        'Д' => 'D',
        'Е' => 'E',
        'Ё' => 'Yo',
        'Ж' => 'Zh',
        'З' => 'Z',
        'И' => 'I',
        'Й' => 'I',
        'К' => 'K',
        'Л' => 'L',
        'М' => 'M',
        'Н' => 'N',
        'О' => 'O',
        'П' => 'P',
        'Р' => 'R',
        'С' => 'S',
        'Т' => 'T',
        'У' => 'U',
        'Ф' => 'F',
        'Х' => 'Kh',
        'Ц' => 'C',
        'Ч' => 'Ch',
        'Ш' => 'Sh',
        'Щ' => 'Sh',
        'Ъ' => '',
        'Ы' => 'Y',
        'Ь' => '',
        'Э' => 'E',
        'Ю' => 'Yu',
        'Я' => 'Ya',

        // Serbian
        'ђ' => 'dj',
        'ј' => 'j',
        // 'љ' => 'lj',  // duplicate
        // 'њ' => 'nj', // duplicate
        'ћ' => 'c',
        'џ' => 'dz',
        'Ђ' => 'Dj',
        'Ј' => 'j',
        // 'Љ' => 'Lj', // duplicate
        // 'Њ' => 'Nj', // duplicate
        'Ћ' => 'C',
        'Џ' => 'Dz',

        // Slovak
        'ľ' => 'l',
        'ĺ' => 'l',
        'ŕ' => 'r',
        'Ľ' => 'L',
        'Ĺ' => 'L',
        'Ŕ' => 'R',

        // Turkish
        'ş' => 's',
        'Ş' => 'S',
        'ı' => 'i',
        'İ' => 'I',
        // 'ç' => 'c', // duplicate
        // 'Ç' => 'C', // duplicate
        // 'ü' => 'u', // duplicate, see langCharMap
        // 'Ü' => 'U', // duplicate, see langCharMap
        // 'ö' => 'o', // duplicate, see langCharMap
        // 'Ö' => 'O', // duplicate, see langCharMap
        'ğ' => 'g',
        'Ğ' => 'G',

        // Vietnamese
        'ả' => 'a',
        'Ả' => 'A',
        'ẳ' => 'a',
        'Ẳ' => 'A',
        'ẩ' => 'a',
        'Ẩ' => 'A',
        'đ' => 'd',
        'Đ' => 'D',
        'ẹ' => 'e',
        'Ẹ' => 'E',
        'ẽ' => 'e',
        'Ẽ' => 'E',
        'ẻ' => 'e',
        'Ẻ' => 'E',
        'ế' => 'e',
        'Ế' => 'E',
        'ề' => 'e',
        'Ề' => 'E',
        'ệ' => 'e',
        'Ệ' => 'E',
        'ễ' => 'e',
        'Ễ' => 'E',
        'ể' => 'e',
        'Ể' => 'E',
        'ỏ' => 'o',
        'ọ' => 'o',
        'Ọ' => 'o',
        'ố' => 'o',
        'Ố' => 'O',
        'ồ' => 'o',
        'Ồ' => 'O',
        'ổ' => 'o',
        'Ổ' => 'O',
        'ộ' => 'o',
        'Ộ' => 'O',
        'ỗ' => 'o',
        'Ỗ' => 'O',
        'ơ' => 'o',
        'Ơ' => 'O',
        'ớ' => 'o',
        'Ớ' => 'O',
        'ờ' => 'o',
        'Ờ' => 'O',
        'ợ' => 'o',
        'Ợ' => 'O',
        'ỡ' => 'o',
        'Ỡ' => 'O',
        'Ở' => 'o',
        'ở' => 'o',
        'ị' => 'i',
        'Ị' => 'I',
        'ĩ' => 'i',
        'Ĩ' => 'I',
        'ỉ' => 'i',
        'Ỉ' => 'i',
        'ủ' => 'u',
        'Ủ' => 'U',
        'ụ' => 'u',
        'Ụ' => 'U',
        'ũ' => 'u',
        'Ũ' => 'U',
        'ư' => 'u',
        'Ư' => 'U',
        'ứ' => 'u',
        'Ứ' => 'U',
        'ừ' => 'u',
        'Ừ' => 'U',
        'ự' => 'u',
        'Ự' => 'U',
        'ữ' => 'u',
        'Ữ' => 'U',
        'ử' => 'u',
        'Ử' => 'ư',
        'ỷ' => 'y',
        'Ỷ' => 'y',
        'ỳ' => 'y',
        'Ỳ' => 'Y',
        'ỵ' => 'y',
        'Ỵ' => 'Y',
        'ỹ' => 'y',
        'Ỹ' => 'Y',
        'ạ' => 'a',
        'Ạ' => 'A',
        'ấ' => 'a',
        'Ấ' => 'A',
        'ầ' => 'a',
        'Ầ' => 'A',
        'ậ' => 'a',
        'Ậ' => 'A',
        'ẫ' => 'a',
        'Ẫ' => 'A',
        // 'ă' => 'a', // duplicate
        // 'Ă' => 'A', // duplicate
        'ắ' => 'a',
        'Ắ' => 'A',
        'ằ' => 'a',
        'Ằ' => 'A',
        'ặ' => 'a',
        'Ặ' => 'A',
        'ẵ' => 'a',
        'Ẵ' => 'A',
        '⓪' => '0',
        '①' => '1',
        '②' => '2',
        '③' => '3',
        '④' => '4',
        '⑤' => '5',
        '⑥' => '6',
        '⑦' => '7',
        '⑧' => '8',
        '⑨' => '9',
        '⑩' => '10',
        '⑪' => '11',
        '⑫' => '12',
        '⑬' => '13',
        '⑭' => '14',
        '⑮' => '15',
        '⑯' => '16',
        '⑰' => '17',
        '⑱' => '18',
        '⑲' => '18',
        '⑳' => '18',

        '⓵' => '1',
        '⓶' => '2',
        '⓷' => '3',
        '⓸' => '4',
        '⓹' => '5',
        '⓺' => '6',
        '⓻' => '7',
        '⓼' => '8',
        '⓽' => '9',
        '⓾' => '10',

        '⓿' => '0',
        '⓫' => '11',
        '⓬' => '12',
        '⓭' => '13',
        '⓮' => '14',
        '⓯' => '15',
        '⓰' => '16',
        '⓱' => '17',
        '⓲' => '18',
        '⓳' => '19',
        '⓴' => '20',

        'Ⓐ' => 'A',
        'Ⓑ' => 'B',
        'Ⓒ' => 'C',
        'Ⓓ' => 'D',
        'Ⓔ' => 'E',
        'Ⓕ' => 'F',
        'Ⓖ' => 'G',
        'Ⓗ' => 'H',
        'Ⓘ' => 'I',
        'Ⓙ' => 'J',
        'Ⓚ' => 'K',
        'Ⓛ' => 'L',
        'Ⓜ' => 'M',
        'Ⓝ' => 'N',
        'Ⓞ' => 'O',
        'Ⓟ' => 'P',
        'Ⓠ' => 'Q',
        'Ⓡ' => 'R',
        'Ⓢ' => 'S',
        'Ⓣ' => 'T',
        'Ⓤ' => 'U',
        'Ⓥ' => 'V',
        'Ⓦ' => 'W',
        'Ⓧ' => 'X',
        'Ⓨ' => 'Y',
        'Ⓩ' => 'Z',

        'ⓐ'   => 'a',
        'ⓑ'   => 'b',
        'ⓒ'   => 'c',
        'ⓓ'   => 'd',
        'ⓔ'   => 'e',
        'ⓕ'   => 'f',
        'ⓖ'   => 'g',
        'ⓗ'   => 'h',
        'ⓘ'   => 'i',
        'ⓙ'   => 'j',
        'ⓚ'   => 'k',
        'ⓛ'   => 'l',
        'ⓜ'   => 'm',
        'ⓝ'   => 'n',
        'ⓞ'   => 'o',
        'ⓟ'   => 'p',
        'ⓠ'   => 'q',
        'ⓡ'   => 'r',
        'ⓢ'   => 's',
        'ⓣ'   => 't',
        'ⓤ'   => 'u',
        'ⓦ'   => 'v',
        'ⓥ'   => 'w',
        'ⓧ'   => 'x',
        'ⓨ'   => 'y',
        'ⓩ'   => 'z',

        // symbols
        '“'   => '\'',
        '”'   => '\'',
        '‘'   => '\'',
        '’'   => '\'',
        '∂'   => 'd',
        'ƒ'   => 'f',
        '™'   => '(TM)',
        '©'   => '(C)',
        'œ'   => 'oe',
        'Œ'   => 'OE',
        '®'   => '(R)',
        '†'   => '+',
        '℠'   => '(SM)',
        '…'   => '...',
        '˚'   => 'o',
        'º'   => 'o',
        'ª'   => 'a',
        '•'   => '*',
        '၊'   => ',',
        '။'   => '.',

        // currency
        '$'   => 'USD',
        '€'   => 'EUR',
        '₢'   => 'BRN',
        '₣'   => 'FRF',
        '£'   => 'GBP',
        '₤'   => 'ITL',
        '₦'   => 'NGN',
        '₧'   => 'ESP',
        '₩'   => 'KRW',
        '₪'   => 'ILS',
        '₫'   => 'VND',
        '₭'   => 'LAK',
        '₮'   => 'MNT',
        '₯'   => 'GRD',
        '₱'   => 'ARS',
        '₲'   => 'PYG',
        '₳'   => 'ARA',
        '₴'   => 'UAH',
        '₵'   => 'GHS',
        '¢'   => 'cent',
        '¥'   => 'CNY',
        '元'   => 'CNY',
        '円'   => 'YEN',
        '﷼'   => 'IRR',
        '₠'   => 'EWE',
        '฿'   => 'THB',
        '₨'   => 'INR',
        '₹'   => 'INR',
        '₰'   => 'PF',
        '₺'   => 'TRY',
        '؋'   => 'AFN',
        '₼'   => 'AZN',
        'лв'  => 'BGN',
        '៛'   => 'KHR',
        '₡'   => 'CRC',
        '₸'   => 'KZT',
        'ден' => 'MKD',
        'zł'  => 'PLN',
        '₽'   => 'RUB',
        '₾'   => 'GEL'
    ];

    static private $lookAheadChars = [
        // burmese
        '်',
        // Dhivehi
        'ް'
    ];

    static private $diatricMap = [
        // Burmese
        // dependent vowels
        'ာ'     => 'a',
        'ါ'     => 'a',
        'ေ'     => 'e',
        'ဲ'     => 'e',
        'ိ'     => 'i',
        'ီ'     => 'i',
        'ို'    => 'o',
        'ု'     => 'u',
        'ူ'     => 'u',
        'ေါင်'  => 'aung',
        'ော'    => 'aw',
        'ော်'   => 'aw',
        'ေါ'    => 'aw',
        'ေါ်'   => 'aw',
        '်'     => '်', // this is special case but the character will be converted to latin in the code
        'က်'    => 'et',
        'ိုက်'  => 'aik',
        'ောက်'  => 'auk',
        'င်'    => 'in',
        'ိုင်'  => 'aing',
        'ောင်'  => 'aung',
        'စ်'    => 'it',
        'ည်'    => 'i',
        'တ်'    => 'at',
        'ိတ်'   => 'eik',
        'ုတ်'   => 'ok',
        'ွတ်'   => 'ut',
        'ေတ်'   => 'it',
        'ဒ်'    => 'd',
        'ိုဒ်'  => 'ok',
        'ုဒ်'   => 'ait',
        'န်'    => 'an',
        'ာန်'   => 'an',
        'ိန်'   => 'ein',
        'ုန်'   => 'on',
        'ွန်'   => 'un',
        'ပ်'    => 'at',
        'ိပ်'   => 'eik',
        'ုပ်'   => 'ok',
        'ွပ်'   => 'ut',
        'န်ုပ်' => 'nub',
        'မ်'    => 'an',
        'ိမ်'   => 'ein',
        'ုမ်'   => 'on',
        'ွမ်'   => 'un',
        'ယ်'    => 'e',
        'ိုလ်'  => 'ol',
        'ဉ်'    => 'in',
        'ံ'     => 'an',
        'ိံ'    => 'ein',
        'ုံ'    => 'on',

        // Dhivehi
        'ައް'   => 'ah',
        'ަށް'   => 'ah'
    ];

    static private $langCharMap = [
        'en' => [], // default language

        'az' => [ // Azerbaijani
                  'ç' => 'c',
                  'ə' => 'e',
                  'ğ' => 'g',
                  'ı' => 'i',
                  'ö' => 'o',
                  'ş' => 's',
                  'ü' => 'u',
                  'Ç' => 'C',
                  'Ə' => 'E',
                  'Ğ' => 'G',
                  'İ' => 'I',
                  'Ö' => 'O',
                  'Ş' => 'S',
                  'Ü' => 'U'
        ],

        'cs' => [ // Czech
                  'č' => 'c',
                  'ď' => 'd',
                  'ě' => 'e',
                  'ň' => 'n',
                  'ř' => 'r',
                  'š' => 's',
                  'ť' => 't',
                  'ů' => 'u',
                  'ž' => 'z',
                  'Č' => 'C',
                  'Ď' => 'D',
                  'Ě' => 'E',
                  'Ň' => 'N',
                  'Ř' => 'R',
                  'Š' => 'S',
                  'Ť' => 'T',
                  'Ů' => 'U',
                  'Ž' => 'Z'
        ],

        'fi' => [ // Finnish
                  // 'å' => 'a', duplicate see charMap/latin
                  // 'Å' => 'A', duplicate see charMap/latin
                  'ä' => 'a', // ok
                  'Ä' => 'A', // ok
                  'ö' => 'o', // ok
                  'Ö' => 'O' // ok
        ],

        'hu' => [ // Hungarian
                  'ä' => 'a', // ok
                  'Ä' => 'A', // ok
                  // 'á' => 'a', duplicate see charMap/latin
                  // 'Á' => 'A', duplicate see charMap/latin
                  'ö' => 'o', // ok
                  'Ö' => 'O', // ok
                  // 'ő' => 'o', duplicate see charMap/latin
                  // 'Ő' => 'O', duplicate see charMap/latin
                  'ü' => 'u',
                  'Ü' => 'U',
                  'ű' => 'u',
                  'Ű' => 'U'
        ],

        'lt' => [ // Lithuanian
                  'ą' => 'a',
                  'č' => 'c',
                  'ę' => 'e',
                  'ė' => 'e',
                  'į' => 'i',
                  'š' => 's',
                  'ų' => 'u',
                  'ū' => 'u',
                  'ž' => 'z',
                  'Ą' => 'A',
                  'Č' => 'C',
                  'Ę' => 'E',
                  'Ė' => 'E',
                  'Į' => 'I',
                  'Š' => 'S',
                  'Ų' => 'U',
                  'Ū' => 'U'
        ],

        'lv' => [ // Latvian
                  'ā' => 'a',
                  'č' => 'c',
                  'ē' => 'e',
                  'ģ' => 'g',
                  'ī' => 'i',
                  'ķ' => 'k',
                  'ļ' => 'l',
                  'ņ' => 'n',
                  'š' => 's',
                  'ū' => 'u',
                  'ž' => 'z',
                  'Ā' => 'A',
                  'Č' => 'C',
                  'Ē' => 'E',
                  'Ģ' => 'G',
                  'Ī' => 'i',
                  'Ķ' => 'k',
                  'Ļ' => 'L',
                  'Ņ' => 'N',
                  'Š' => 'S',
                  'Ū' => 'u',
                  'Ž' => 'Z'
        ],

        'pl' => [ // Polish
                  'ą' => 'a',
                  'ć' => 'c',
                  'ę' => 'e',
                  'ł' => 'l',
                  'ń' => 'n',
                  'ó' => 'o',
                  'ś' => 's',
                  'ź' => 'z',
                  'ż' => 'z',
                  'Ą' => 'A',
                  'Ć' => 'C',
                  'Ę' => 'e',
                  'Ł' => 'L',
                  'Ń' => 'N',
                  'Ó' => 'O',
                  'Ś' => 'S',
                  'Ź' => 'Z',
                  'Ż' => 'Z'
        ],

        'sv' => [ // Swedish
                  // 'å' => 'a', duplicate see charMap/latin
                  // 'Å' => 'A', duplicate see charMap/latin
                  'ä' => 'a', // ok
                  'Ä' => 'A', // ok
                  'ö' => 'o', // ok
                  'Ö' => 'O' // ok
        ],

        'sk' => [ // Slovak
                  'ä' => 'a',
                  'Ä' => 'A'
        ],

        'sr' => [ // Serbian
                  'љ' => 'lj',
                  'њ' => 'nj',
                  'Љ' => 'Lj',
                  'Њ' => 'Nj',
                  'đ' => 'dj',
                  'Đ' => 'Dj'
        ],

        'tr' => [ // Turkish
                  'Ü' => 'U',
                  'Ö' => 'O',
                  'ü' => 'u',
                  'ö' => 'o'
        ]
    ];

    static private $symbolMap = [
        'ar' => [
            '∆' => 'delta',
            '∞' => 'la-nihaya',
            '♥' => 'hob',
            '&' => 'wa',
            '|' => 'aw',
            '<' => 'aqal-men',
            '>' => 'akbar-men',
            '∑' => 'majmou',
            '¤' => 'omla'
        ],

        'az' => [],

        'ca' => [
            '∆' => 'delta',
            '∞' => 'infinit',
            '♥' => 'amor',
            '&' => 'i',
            '|' => 'o',
            '<' => 'menys que',
            '>' => 'mes que',
            '∑' => 'suma dels',
            '¤' => 'moneda'
        ],

        'cs' => [
            '∆' => 'delta',
            '∞' => 'nekonecno',
            '♥' => 'laska',
            '&' => 'a',
            '|' => 'nebo',
            '<' => 'mensi nez',
            '>' => 'vetsi nez',
            '∑' => 'soucet',
            '¤' => 'mena'
        ],

        'de' => [
            '∆' => 'delta',
            '∞' => 'unendlich',
            '♥' => 'Liebe',
            '&' => 'und',
            '|' => 'oder',
            '<' => 'kleiner als',
            '>' => 'groesser als',
            '∑' => 'Summe von',
            '¤' => 'Waehrung'
        ],

        'dv' => [
            '∆' => 'delta',
            '∞' => 'kolunulaa',
            '♥' => 'loabi',
            '&' => 'aai',
            '|' => 'noonee',
            '<' => 'ah vure kuda',
            '>' => 'ah vure bodu',
            '∑' => 'jumula',
            '¤' => 'faisaa'
        ],

        'en' => [
            '∆' => 'delta',
            '∞' => 'infinity',
            '♥' => 'love',
            '&' => 'and',
            '|' => 'or',
            '<' => 'less than',
            '>' => 'greater than',
            '∑' => 'sum',
            '¤' => 'currency'
        ],

        'es' => [
            '∆' => 'delta',
            '∞' => 'infinito',
            '♥' => 'amor',
            '&' => 'y',
            '|' => 'u',
            '<' => 'menos que',
            '>' => 'mas que',
            '∑' => 'suma de los',
            '¤' => 'moneda'
        ],

        'fa' => [
            '∆' => 'delta',
            '∞' => 'bi-nahayat',
            '♥' => 'eshgh',
            '&' => 'va',
            '|' => 'ya',
            '<' => 'kamtar-az',
            '>' => 'bishtar-az',
            '∑' => 'majmooe',
            '¤' => 'vahed'
        ],

        'fi' => [
            '∆' => 'delta',
            '∞' => 'aarettomyys',
            '♥' => 'rakkaus',
            '&' => 'ja',
            '|' => 'tai',
            '<' => 'pienempi kuin',
            '>' => 'suurempi kuin',
            '∑' => 'summa',
            '¤' => 'valuutta'
        ],

        'fr' => [
            '∆' => 'delta',
            '∞' => 'infiniment',
            '♥' => 'Amour',
            '&' => 'et',
            '|' => 'ou',
            '<' => 'moins que',
            '>' => 'superieure a',
            '∑' => 'somme des',
            '¤' => 'monnaie'
        ],

        'ge' => [
            '∆' => 'delta',
            '∞' => 'usasruloba',
            '♥' => 'siqvaruli',
            '&' => 'da',
            '|' => 'an',
            '<' => 'naklebi',
            '>' => 'meti',
            '∑' => 'jami',
            '¤' => 'valuta'
        ],

        'gr' => [],

        'hu' => [
            '∆' => 'delta',
            '∞' => 'vegtelen',
            '♥' => 'szerelem',
            '&' => 'es',
            '|' => 'vagy',
            '<' => 'kisebb mint',
            '>' => 'nagyobb mint',
            '∑' => 'szumma',
            '¤' => 'penznem'
        ],

        'it' => [
            '∆' => 'delta',
            '∞' => 'infinito',
            '♥' => 'amore',
            '&' => 'e',
            '|' => 'o',
            '<' => 'minore di',
            '>' => 'maggiore di',
            '∑' => 'somma',
            '¤' => 'moneta'
        ],

        'lt' => [
            '∆' => 'delta',
            '∞' => 'begalybe',
            '♥' => 'meile',
            '&' => 'ir',
            '|' => 'ar',
            '<' => 'maziau nei',
            '>' => 'daugiau nei',
            '∑' => 'suma',
            '¤' => 'valiuta'
        ],

        'lv' => [
            '∆' => 'delta',
            '∞' => 'bezgaliba',
            '♥' => 'milestiba',
            '&' => 'un',
            '|' => 'vai',
            '<' => 'mazak neka',
            '>' => 'lielaks neka',
            '∑' => 'summa',
            '¤' => 'valuta'
        ],

        'my' => [
            '∆' => 'kwahkhyaet',
            '∞' => 'asaonasme',
            '♥' => 'akhyait',
            '&' => 'nhin',
            '|' => 'tho',
            '<' => 'ngethaw',
            '>' => 'kyithaw',
            '∑' => 'paungld',
            '¤' => 'ngwekye'
        ],

        'mk' => [],

        'nl' => [
            '∆' => 'delta',
            '∞' => 'oneindig',
            '♥' => 'liefde',
            '&' => 'en',
            '|' => 'of',
            '<' => 'kleiner dan',
            '>' => 'groter dan',
            '∑' => 'som',
            '¤' => 'valuta'
        ],

        'pl' => [
            '∆' => 'delta',
            '∞' => 'nieskonczonosc',
            '♥' => 'milosc',
            '&' => 'i',
            '|' => 'lub',
            '<' => 'mniejsze niz',
            '>' => 'wieksze niz',
            '∑' => 'suma',
            '¤' => 'waluta'
        ],

        'pt' => [
            '∆' => 'delta',
            '∞' => 'infinito',
            '♥' => 'amor',
            '&' => 'e',
            '|' => 'ou',
            '<' => 'menor que',
            '>' => 'maior que',
            '∑' => 'soma',
            '¤' => 'moeda'
        ],

        'ro' => [
            '∆' => 'delta',
            '∞' => 'infinit',
            '♥' => 'dragoste',
            '&' => 'si',
            '|' => 'sau',
            '<' => 'mai mic ca',
            '>' => 'mai mare ca',
            '∑' => 'suma',
            '¤' => 'valuta'
        ],

        'ru' => [
            '∆' => 'delta',
            '∞' => 'beskonechno',
            '♥' => 'lubov',
            '&' => 'i',
            '|' => 'ili',
            '<' => 'menshe',
            '>' => 'bolshe',
            '∑' => 'summa',
            '¤' => 'valjuta'
        ],

        'sk' => [
            '∆' => 'delta',
            '∞' => 'nekonecno',
            '♥' => 'laska',
            '&' => 'a',
            '|' => 'alebo',
            '<' => 'menej ako',
            '>' => 'viac ako',
            '∑' => 'sucet',
            '¤' => 'mena'
        ],

        'sr' => [],

        'tr' => [
            '∆' => 'delta',
            '∞' => 'sonsuzluk',
            '♥' => 'ask',
            '&' => 've',
            '|' => 'veya',
            '<' => 'kucuktur',
            '>' => 'buyuktur',
            '∑' => 'toplam',
            '¤' => 'para birimi'
        ],

        'uk' => [
            '∆' => 'delta',
            '∞' => 'bezkinechnist',
            '♥' => 'lubov',
            '&' => 'i',
            '|' => 'abo',
            '<' => 'menshe',
            '>' => 'bilshe',
            '∑' => 'suma',
            '¤' => 'valjuta'
        ],

        'vn' => [
            '∆' => 'delta',
            '∞' => 'vo cuc',
            '♥' => 'yeu',
            '&' => 'va',
            '|' => 'hoac',
            '<' => 'nho hon',
            '>' => 'lon hon',
            '∑' => 'tong',
            '¤' => 'tien te'
        ]
    ];

    static private $uricChars = [';', '?', ':', '@', '&', '=', '+', '$', ',', '/'];

    static private $uricNoSlashChars = [';', '?', ':', '@', '&', '=', '+', '$', ','];

    static private $markChars = ['.', '!', '~', '*', '\'', '(', ')'];

    static private $defaultOpts = [
        'separator'    => '-',
        'lang'         => 'en',
        'symbols'      => true,
        'maintainCase' => false,
        'titleCase'    => false,
        'truncate'     => 0,
        'uric'         => false,
        'uricNoSlash'  => false,
        'mark'         => false,
        'custom'       => []
    ];

    /**
     * Makes a pretty looking URL. For more information about supported options,
     * please refer to <a href="https://pid.github.io/speakingurl/">SpeakingURL documentation</a>
     *
     * @param string $input
     * @param array $options
     * @return string
     */
    static public function getSlug(string $input, array $options = []): string
    {
        if (mb_strlen($input) === 0) {
            return '';
        }

        $parsedOptions = self::parseOptions($options);

        $allowedChars = '';
        $result = '';
        $convertSymbols = $parsedOptions['lang'] === false || $parsedOptions['symbols'] === false ? false : true;
        $customReplacements = $parsedOptions['custom'];
        $separator = (string) $parsedOptions['separator'];
        $truncate = (int) $parsedOptions['truncate'];
        $maintainCase = $parsedOptions['maintainCase'];
        $titleCase = $parsedOptions['titleCase'];
        $uricFlag = $parsedOptions['uric'];
        $uricNoSlashFlag = $parsedOptions['uricNoSlash'];
        $diatricString = '';

        if ($parsedOptions['uric']) {
            $allowedChars += implode('', self::$uricChars);
        }

        if ($parsedOptions['uricNoSlash']) {
            $allowedChars += implode('', self::$uricNoSlashChars);
        }

        if ($parsedOptions['mark']) {
            $allowedChars += implode('', self::$markChars);
        }

        if ($parsedOptions['lang'] && isset(self::$symbolMap[$parsedOptions['lang']]) && $convertSymbols) {
            $symbolsMap = self::$symbolMap[$parsedOptions['lang']];
        } else {
            if ($convertSymbols) {
                $symbolsMap = self::$symbolMap['en'];
            } else {
                $symbolsMap = [];
            }
        }

        if ($parsedOptions['lang'] && isset(self::$langCharMap[$parsedOptions['lang']])) {
            $langCharsMap = self::$langCharMap[$parsedOptions['lang']];
        } else {
            if (is_bool($parsedOptions['lang'])) {
                $langCharsMap = [];
            } else {
                $langCharsMap = self::$langCharMap['en'];
            }
        }

        if ($parsedOptions['titleCase'] && isset($parsedOptions['omitTitleCaseChars'])) {
            foreach ($parsedOptions['omitTitleCaseChars'] as $char) {
                $customReplacements[$char] = $char;
            }
        }

        if (self::isHashMap($parsedOptions['custom']) === false) {
            foreach ($parsedOptions['custom'] as $char) {
                $customReplacements[$char] = $char;
            }
        }

        foreach ($customReplacements as $char => $replacement) {
            if (mb_strlen($char) > 1) {
                $expr = '/\\b' . self::escapeChars($char) . '\\b/';
            } else {
                $expr = '/' . self::escapeChars($char) . '/';
            }

            $input = preg_replace($expr, $replacement, $input);
        }

        $allowedChars .= $separator;
        $allowedChars = self::escapeChars($allowedChars);

        $input = trim($input, "\x20");
        $inputLength = mb_strlen($input);

        $lastCharWasSymbol = false;
        $lastCharWasDiatric = false;

        for ($offset = 0; $offset < $inputLength; $offset++) {
            $char = mb_substr($input, $offset, 1);

            if (self::isReplacedCustomChar($char, $customReplacements)) {
                $lastCharWasSymbol = false;
            } else if (isset($langCharsMap[$char])) {
                if ($lastCharWasSymbol && self::isAlphaNum($langCharsMap[$char])) {
                    $char = ' ' . $langCharsMap[$char];
                } else {
                    $char = $langCharsMap[$char];
                }

                $lastCharWasSymbol = false;
            } else if (isset(self::$charMap[$char])) {
                if ($offset + 1 < 1 && isset(self::$lookAheadChars[mb_substr($input, $offset + 1, 1)])) {
                    $diatricString += $char;
                    $char = '';
                } else if ($lastCharWasDiatric === true) {
                    $char = self::$diatricMap[$diatricString] + self::$charMap[$char];
                    $diatricString = '';
                } else {
                    if ($lastCharWasSymbol && self::isAlphaNum($langCharsMap[$char])) {
                        $char = ' ' . self::$charMap[$char];
                    } else {
                        $char = self::$charMap[$char];
                    }
                }

                $lastCharWasDiatric = false;
                $lastCharWasSymbol = false;
            } else if (isset(self::$diatricMap[$char])) {
                $diatricString += $char;
                $char = '';

                if ($offset === $inputLength - 1) {
                    $char = self::$diatricMap[$diatricString];
                }

                $lastCharWasDiatric = true;
            } else if (isset($symbolsMap[$char]) && self::isNotUricChar($char, $uricFlag, $uricNoSlashFlag)) {
                if ($lastCharWasSymbol || self::isAlphaNum($result[mb_strlen($result) - 1])) {
                    $char = $separator . $symbolsMap[$char];
                } else {
                    $char = $symbolsMap[$char];
                }


                $char .= isset($input[$offset + 1]) && self::isAlphaNum(mb_substr($input, $offset + 1, 1)) ? $separator : '';

                $lastCharWasSymbol = true;
            } else {
                if ($lastCharWasDiatric) {
                    $char = self::$diatricMap[$diatricString] . $char;
                    $diatricString = '';
                    $lastCharWasDiatric = false;
                } else if ($lastCharWasSymbol && (self::isAlphaNum($char) || self::isAlphaNum($result[mb_strlen($result) - 1]))) {
                    $char = ' ' . $char;
                }

                $lastCharWasSymbol = false;
            }

            $result .= preg_replace('/[^\\w\\s' . $allowedChars . '_-]/', $separator, $char);
        }

        if ($parsedOptions['titleCase']) {
            $result = preg_replace_callback('/(\w)(\S*)/', function ($matches) use ($customReplacements) {
                $char = mb_strtoupper($matches[1]) . (mb_strlen($matches[2]) > 0 ? $matches[2] : '');

                if (isset($customReplacements[mb_strtolower($char)])) {
                    return mb_strtolower($char);
                }

                return $char;
            }, $result);
        }

        $result = preg_replace('/\s+/', $separator, $result);
        $result = preg_replace('/\\' . $separator . '+/', $separator, $result);
        $result = preg_replace('(^\\' . $separator . '+|\\' . $separator . '+$)', '', $result);

        if ($truncate && mb_strlen($result) > $truncate) {
            $lucky = $result[$truncate] === $separator;
            $result = mb_substr($result, 0, $truncate);

            if (!$lucky) {
                $result = mb_substr($result, 0, mb_strrpos($result, $separator));
            }
        }

        if (!$maintainCase && !$titleCase) {
            $result = mb_strtolower($result);
        }

        return $result;
    }

    /**
     * Returns if the char is not an uric one.
     *
     * @param string $char
     * @param bool $uricFlag
     * @param bool $uricNoSlashFlag
     * @return bool
     */
    static private function isNotUricChar(string $char, bool $uricFlag, bool $uricNoSlashFlag): bool
    {
        return !($uricFlag && isset(self::$uricChars[$char])) && !($uricNoSlashFlag && isset(self::$uricNoSlashChars[$char]));
    }

    /**
     * Returns if the input is consisted only of alpha-numeric characters.
     *
     * @param string $input
     * @return bool
     */
    static private function isAlphaNum(string $input): bool
    {
        return preg_match('/[A-Za-z0-9]/', $input) > 0;
    }

    /**
     * Returns if the char is already replaced char from the custom list.
     *
     * @param string $char
     * @param array $customReplacements
     * @return bool
     */
    static private function isReplacedCustomChar($char, $customReplacements)
    {
        foreach ($customReplacements as $replacement) {
            if ($replacement === $char) {
                return true;
            }
        }

        return false;
    }

    /**
     * Parse input options.
     *
     * @param array $options
     * @return array
     */
    static private function parseOptions(array $options): array
    {
        $parsed = [
            'separator'    => $options['separator'] ?? self::$defaultOpts['separator'],
            'lang'         => $options['lang'] ?? self::$defaultOpts['lang'],
            'symbols'      => $options['symbols'] ?? self::$defaultOpts['symbols'],
            'maintainCase' => $options['maintainCase'] ?? self::$defaultOpts['maintainCase'],
            'truncate'     => $options['truncate'] ?? self::$defaultOpts['truncate'],
            'uric'         => $options['uric'] ?? self::$defaultOpts['uric'],
            'uricNoSlash'  => $options['uricNoSlash'] ?? self::$defaultOpts['uricNoSlash'],
            'mark'         => $options['mark'] ?? self::$defaultOpts['mark'],
            'custom'       => $options['custom'] ?? self::$defaultOpts['custom']
        ];

        if (isset($options['titleCase'])) {
            $parsed['titleCase'] = true;

            if (is_array($options['titleCase'])) {
                $parsed['omitTitleCaseChars'] = $options['titleCase'];
            }
        } else {
            $parsed['titleCase'] = self::$defaultOpts['titleCase'];
        }

        return $parsed;
    }

    /**
     * Returns if at least one of the input keys is not an integer.
     *
     * @param array $input
     * @return bool
     */
    static private function isHashMap(array $input): bool
    {
        $keys = array_keys($input);
        $length = count($input);

        for ($idx = 0; $idx < $length; $idx++) {
            if (!is_int($keys[$idx])) {
                return true;
            }
        }

        return false;
    }

    /**
     * Escape special characters.
     *
     * @param string $input
     * @return string
     */
    static private function escapeChars(string $input)
    {
        return preg_replace('/[-\\^$*+?.()|[\]{}\/]/', '\\$&', $input);
    }
}

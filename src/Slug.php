<?php
namespace Alik\Araslug;

class Slug{

    /**
     * @param string $title
     * @return string
     */
    public function make($title)
    {
        $lts = array(
            "ا" => "a",
            "أ" => "a",
            "إ" => "a",
            "ب" => "b",
            "ت" => "th",
            "ث" => "e",
            "ج" => "g",
            "ح" => "h",
            "خ" => "kh",
            "د" => "d",
            "ذ" => "th",
            "ر" => "r",
            "ز" => "z",
            "س" => "s",
            "ش" => "sh",
            "ص" => "ss",
            "ض" => "d",
            "ط" => "t",
            "ظ" => "za",
            "ع" => "a`",
            "غ" => "g",
            "ف" => "f",
            "ق" => "k",
            "ك" => "k",
            "ل" => "l",
            "م" => "m",
            "ن" => "n",
            "و" => "o",
            "ي" => "y",
            "ئ" => "ae",
            "ء" => "a`",
            "ى" => "a",
            "_" => "_",
            "," => "",
            ":" => "",
            "<" => "",
            ">" => "",
            "!" => ""
        );

        foreach ($lts as $ara => $eng)  {
            $title = mb_eregi_replace($ara, $eng, $title);
        }
        $title = mb_strtolower($title);
        $title = str_replace(' ', '-', $title);

        return $title;
    }
}
<?php

namespace FTC56\EditorBundle\Parser;

class Parser
{
    public function parser($text)
    {
        if (!preg_match('#~~no-bbcode#i', $text)) {
            $text = htmlspecialchars($text);
            $text = $this->bbcode($text);
        }

        $smiley = new Smiley();
        $text   = $smiley->smiley($text);
        $text   = $this->info($text);

        return $text;
    }

    private function bbcode($text)
    {
        $pattern = array('#\[b\](.+)\[\/b\]#isU', '#\[i\](.+)\[\/i\]#isU', '#\[u\](.+)\[\/u\]#isU',
                                '#\[strike\](.+)\[\/strike\]#isU', '#\[left\](.+)\[\/left\]#isU',
                                '#\[center\](.+)\[\/center\]#isU', '#\[right\](.+)\[\/right\]#isU',
                                '#\[justify\](.+)\[\/justify\]#isU', '#\[hr\]#', '#\[quote\](.+)\[\/quote\]#isU',
                                '#\[quote="(.+)"\](.+)\[\/quote\]#isU', '#\[list(=1)?](.+)[/list]#isU',
                                '#\[\*\]\s?(.*?)\n#is', '#\[table\](.+)\[/table\]#isU', '#\[tr\](.+)\[\/tr\]#isU',
                                '#\[td\](.+)\[\/td\]#isU', '#\[code\](.+)\[\/code\]#isU', '#\[hide\](.+)\[\/hide\]#isU',
                                '#\[img\](.+)\[\/img\]#iU', '#\[img\(([0-9]+)px,([0-9]+)px\)\](.+)\[\/img\]#iU',
                                '#\[url\](.+)\[\/url\]#iU', '#\[url=(.+)\](.+)\[\/url\]#iU',
                                '#\[color=(([a-z]+)|(\#[a-f0-9]{3,6}))\](.+)\[\/color\]#isU',
                                '#\[size=([0-9]+)\](.+)\[\/size\]#isU', '#\[font=(.+)\](.+)\[/font\]#isU',
                                '#\[sub\](.+)\[\/sub\]#isU', '#\[sup\](.+)\[\/sup\]#isU'
        );
        $replace = array('<strong>$1</strong>', '<em>$1</em>',
                                '<span style="text-decoration:underline;">$1</span>',
                                '<span style="text-decoration:line-through;">$1</span>',
                                '<div style="text-align:left;">$1</div>', '<div style="text-align:center;">$1</div>',
                                '<div style="text-align:right;">$1</div>', '<div style="text-align:justify;">$1</div>',
                                '<hr />', '<blockquote><p>$1</p></blockquote>',
                                '<blockquote cite="$1"><p>$2</p></blockquote>', '<ul>$2</ul>', '<li>$1</li>',
                                '<table>$1</table>', '<tr>$1</tr>', '<td>$1</td>', '<code>$1</code>',
                                '<span style="display:none;">$1</span>', '<img src="$1" alt="$1" />',
                                '<img src="$3" style="width:$1px; height:$2px;" alt="$1" />', '<a href="$1">$1</a>',
                                '<a href="$1">$2</a>', '<span style="color:$1;">$4</span>',
                                '<span style="font-size:$1px;">$2</span>', '<span style="font-family:$1;">$2</span>',
                                '<sub>$1</sub>', '<sup>$1</sup>'
        );
        // '#\[spoiler(="(.+)")?\](.+)\[\/spoiler\]#isU',
        // '#\[scroll\](.+)\[\/scroll\]#isU',
        // '#\[updown\](.+)\[\/updown\]#isU',
        // '#\[wow\](.+)\[\/wow\]#isU',
        // '#\[rand\](.+)\[\/rand\]#isU',

        $text = preg_replace($pattern, $replace, $text);

        // Paragraphes
        $text = str_replace('\r', '', $text);
        $text = "<p>" . preg_replace("/(\n){2,}/", "</p><p>", $text) . "</p>";

        return $text;
    }

    private function info($text)
    {
        $pattern = array('#~~no-bbcode#');
        $replace = array('');

        $text = preg_replace($pattern, $replace, $text);

        return $text;
    }
}

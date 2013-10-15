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
        $pattern = array(
            '#\[b\](.+)\[\/b\]#isU' => '<strong>$1</strong>',
            '#\[i\](.+)\[\/i\]#isU' => '<em>$1</em>',
            '#\[u\](.+)\[\/u\]#isU' => '<span style="text-decoration:underline;">$1</span>',
            '#\[strike\](.+)\[\/strike\]#isU' => '<span style="text-decoration:line-through;">$1</span>',
            '#\[left\](.+)\[\/left\]#isU' => '<div style="text-align:left;">$1</div>',
            '#\[center\](.+)\[\/center\]#isU' => '<div style="text-align:center;">$1</div>',
            '#\[right\](.+)\[\/right\]#isU' => '<div style="text-align:right;">$1</div>',
            '#\[justify\](.+)\[\/justify\]#isU' => '<div style="text-align:justify;">$1</div>',
            '#\[hr\]#' => '<hr />',
            '#\[quote\](.+)\[\/quote\]#isU' => '<blockquote><p>$1</p></blockquote>',
            '#\[quote="(.+)"\](.+)\[\/quote\]#isU' => '<blockquote cite="$1"><p>$2</p></blockquote>',
            '#\[list(=1)?](.+)[/list]#isU' => '<ul>$2</ul>',
            '#\[\*\]\s?(.*?)\n#is' => '<li>$1</li>',
            '#\[table\](.+)\[/table\]#isU' => '<table>$1</table>',
            '#\[tr\](.+)\[\/tr\]#isU' => '<tr>$1</tr>',
            '#\[td\](.+)\[\/td\]#isU' => '<td>$1</td>',
            '#\[code\](.+)\[\/code\]#isU' => '<code>$1</code>',
            '#\[hide\](.+)\[\/hide\]#isU' => '<span style="display:none;">$1</span>',
            '#\[img\](.+)\[\/img\]#iU' => '<img src="$1" alt="$1" />',
            '#\[img\(([0-9]+)px,([0-9]+)px\)\](.+)\[\/img\]#iU' => '<img src="$3" style="width:$1px; height:$2px;" alt="$1" />',
            '#\[url\](.+)\[\/url\]#iU' => '<a href="$1">$1</a>',
            '#\[url=(.+)\](.+)\[\/url\]#iU' => '<a href="$1">$2</a>',
            '#\[color=(([a-z]+)|(\#[a-f0-9]{3,6}))\](.+)\[\/color\]#isU' => '<span style="color:$1;">$4</span>',
            '#\[size=([0-9]+)\](.+)\[\/size\]#isU' => '<span style="font-size:$1px;">$2</span>',
            '#\[font=(.+)\](.+)\[/font\]#isU' => '<span style="font-family:$1;">$2</span>',
            '#\[sub\](.+)\[\/sub\]#isU' => '<sub>$1</sub>',
        );

        // '#\[spoiler(="(.+)")?\](.+)\[\/spoiler\]#isU',
        // '#\[scroll\](.+)\[\/scroll\]#isU',
        // '#\[updown\](.+)\[\/updown\]#isU',
        // '#\[wow\](.+)\[\/wow\]#isU',
        // '#\[rand\](.+)\[\/rand\]#isU',

        // Paragraphes
        $text = "<p>" . preg_replace('#\R+#', "</p><p>", $text) . "</p>";

        $text = preg_replace(array_keys($pattern), array_values($pattern), $text);

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

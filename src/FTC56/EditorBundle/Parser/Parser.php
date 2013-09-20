<?php

namespace FTC56\EditorBundle\Parser;

class Parser
{

    public function parser($text)
    {
        if (preg_match('#~~no-bbcode#i',$text) == false)
        {
            $text = $this->bbcode($text);
        }
        if (preg_match('#~~markdown#i',$text))
        {
            $text = $this->markdown($text);
        }

        $text = $this->parse($text);

        return $text;
    }

    private function bbcode($text)
    {
        $bbcodesPattern = array(
        '#\[b\](.+)\[\/b\]#isU',
        '#\[i\](.+)\[\/i\]#isU',
        '#\[u\](.+)\[\/u\]#isU',
        '#\[strike\](.+)\[\/strike\]#isU',
        '#\[left\](.+)\[\/left\]#isU',
        '#\[center\](.+)\[\/center\]#isU',
        '#\[right\](.+)\[\/right\]#isU',
        '#\[justify\](.+)\[\/justify\]#isU',
        '#\[hr\]#',
        '#\[quote\](.+)\[\/quote\]#isU',
        '#\[quote="(.+)"\](.+)\[\/quote\]#isU',
        '#\[code\](.+)\[\/code\]#isU',
        '#\[hide\](.+)\[\/hide\]#isU',
        '#\[img\](.+)\[\/img\]#iU',
        '#\[img\(([0-9]+)px,([0-9]+)px\)\](.+)\[\/img\]#iU',
        '#\[url\](.+)\[\/url\]#iU',
        '#\[url=(.+)\](.+)\[\/url\]#iU',
        '#\[size=([0-9]+)\](.+)\[\/size\]#isU',
        '#\[font=(.+)\](.+)\[/font\]#isU',
        '#\[sub\](.+)\[\/sub\]#isU',
        '#\[sup\](.+)\[\/sup\]#isU',
        '#\\n#'
    );
        $bbcodesReplace = array(
        '<strong>$1</strong>',
        '<em>$1</em>',
        '<span style="text-decoration:underline;">$1</span>',
        '<span style="text-decoration:line-through;">$1</span>',
        '<div style="text-align:left;">$1</div>',
        '<div style="text-align:center;">$1</div>',
        '<div style="text-align:right;">$1</div>',
        '<div style="text-align:justify;">$1</div>',
        '<hr />',
        '<blockquote><p>$1</p></blockquote>',
        '<blockquote cite="$1"><p>$2</p></blockquote>',
        '<code>$1</code>',
        '<span style="display:none;">$1</span>',
        '<img src="$1" />',
        '<img src="$3" style="width:$1px; height:$2px;" />',
        '<a href="$1">$1</a>',
        '<a href="$1">$2</a>',
        '<span style="font-size:$1px;">$2</span>',
        '<span style="font-family:$1;">$2</span>',
        '<sub>$1</sub>',
        '<sup>$1</sup>',
        '<br />'
    );
        // '#\[list\]\[*\]\[/list\]#isU',
        // '#\[list=1\]\[*\]\[/list\]#isU',
        // '#\[spoiler(="(.+)")?\](.+)\[\/spoiler\]#isU',
        // '#\[table\]\[tr][td][/td][/tr][/table\]#isU',
        // '#\[color=(([a-z]+)|(\#[a-f0-9]{3,6}))\](.+)\[\/color\]#isU',
        // '#\[scroll\](.+)\[\/scroll\]#isU',
        // '#\[updown\](.+)\[\/updown\]#isU',
        // '#\[wow\](.+)\[\/wow\]#isU',
        // '#\[rand\](.+)\[\/rand\]#isU',

        $text = preg_replace($bbcodesPattern, $bbcodesReplace, $text);

        return $text;
    }

    private function markdown($text)
    {
        $markdownPattern = array();
        $markdownReplace = array();

        $text = preg_replace($markdownPattern, $markdownReplace, $text);

        return $text;
    }

    private function parse($text)
    {
        $pattern = array('#~~no-bbcode#');
        $replace = array('');

        $text = preg_replace($pattern, $replace, $text);

        return $text;
    }
}

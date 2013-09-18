<?php

namespace FTC56\EditorBundle\Parser;

class Parser
{
    private $bbcode = array(
        '#\[b\](.+)\[\/b\]#isU' => '<strong>$1</strong>',
        '#\[i\](.+)\[\/i\]#isU' => '<em>$1</em>',
        '#\[u\](.+)\[\/u\]#isU' => '<span style="text-decoration:underline;">$1</span>',
        '#\[strike\](.+)\[\/strike\]#isU' => '<span style="text-decoration:line-through;">$1</strike>',
        '#\[left\](.+)\[\/left\]#isU' => '<span style="text-align:left;">$1</span>',
        '#\[center\](.+)\[\/center\]#isU' => '<span style="text-align:center;">$1</span>',
        '#\[right\](.+)\[\/right\]#isU' => '<span style="text-align:right;">$1</span>',
        '#\[justify\](.+)\[\/justify\]#isU' => '<span style="text-align:justify;">$1</span>',
        // '#\[list\]\[*\]\[/list\]#isU',
        // '#\[list=1\]\[*\]\[/list\]#isU',
        '#\[hr\]#' => '<hr />',
        '#\[quote\](.+)\[\/quote\]#isU' => '<blockquote>$1</blockquote>',
        // '#\[quote(="(.+)")?\](.+)\[\/quote\]#isU',
        '#\[code\](.+)\[\/code\]#isU' => '<code>$1</code>',
        // '#\[spoiler(="(.+)")?\](.+)\[\/spoiler\]#isU',
        '#\[hide\](.+)\[\/hide\]#isU' => '<span style="display:none;">$1</span>',
        // '#\[table\]\[tr][td][/td][/tr][/table\]#isU',
        '#\[img\](.+)\[\/img\]#iU' => '<img src="$1" />',
        '#\[img\(([0-9]+)px,([0-9]+)px\)\](.+)\[\/img\]#iU' => '<img src="$3" style="width:$1px; height:$2px;" />',
        '#\[url\](.+)\[\/url\]#iU' => '<a href="$1">$1</a>',
        '#\[url=(.+)\](.+)\[\/url\]#iU' => '<a href="$1">$2</a>',
        '#\[size=([0-9]+)\](.+)\[\/size\]#isU' => '<span style="font-size:$1px;">$2</span>',
        '#\[color=(([a-z]+)|(\#[a-f0-9]{3,6}))\](.+)\[\/color\]#isU',
        '#\[font=(.+)\](.+)\[/font\]#isU' => '<span style="font-family:$1;">$2</span>',
        '#\[sub\](.+)\[\/sub\]#isU' => '<sub>$1</sub>',
        '#\[sup\](.+)\[\/sup\]#isU' => '<sup>$1</sup>',
        // '#\[scroll\](.+)\[\/scroll\]#isU',
        // '#\[updown\](.+)\[\/updown\]#isU',
        // '#\[wow\](.+)\[\/wow\]#isU',
        // '#\[rand\](.+)\[\/rand\]#isU',
        '#\\n#' => '<br />'
    );

    public function parseText($text)
    {
        $text = $this->bbcode($text);
    }

    private function bbcode($text)
    {


        return $text;
    }
}
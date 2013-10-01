// ----------------------------------------------------------------------------
// markItUp!
// ----------------------------------------------------------------------------
// Copyright (C) 2008 Jay Salvat
// http://markitup.jaysalvat.com/
// ----------------------------------------------------------------------------
// BBCode tags example
// http://en.wikipedia.org/wiki/Bbcode
// ----------------------------------------------------------------------------
// Feel free to add more tags
// ----------------------------------------------------------------------------
mySettings = {
	previewParserPath:	'', // path to your BBCode parser
	markupSet: [
		{name:'Bold', key:'B', openWith:'[b]', closeWith:'[/b]'},
		{name:'Italic', key:'I', openWith:'[i]', closeWith:'[/i]'},
		{name:'Underline', key:'U', openWith:'[u]', closeWith:'[/u]'},
		{name:'Strike', openWith:'[strike]', closeWith:'[/strike]'},
		{separator:'---------------' },
		{name:'Left', openWith:'[left]', closeWith:'[/left]'},
		{name:'Center', openWith:'[center]', closeWith:'[/center]'},
		{name:'Right', openWith:'[right]', closeWith:'[/right]'},
		{name:'Justify', openWith:'[justify]', closeWith:'[/justify]'},
		{separator:'---------------' },
		{name:'Picture', key:'P', replaceWith:'[img][![Url]!][/img]'},
		{name:'Link', key:'L', openWith:'[url=[![Url]!]]', closeWith:'[/url]', placeHolder:'Your text to link here...'},
		{separator:'---------------' },
		{name:'Size', key:'S', openWith:'[size=[![Text size]!]]', closeWith:'[/size]',
		dropMenu :[
			{name:'Very Big', openWith:'[size=24]', closeWith:'[/size]' },
			{name:'Big', openWith:'[size=18]', closeWith:'[/size]' },
			{name:'Normal', openWith:'[size=12]', closeWith:'[/size]' },
			{name:'Small', openWith:'[size=9]', closeWith:'[/size]' },
			{name:'Very Small', openWith:'[size=2]', closeWith:'[/size]' }
		]},
		{name:'Color', openWith:'[color=[![Text color]!]]', closeWith:'[/color]'},
		{name:'Font', openWith:'[font=[![Text font]!]]', className:'[/font]',
		dropMenu:[
			{name:'Arial', openWith:'[font=Arial]', closeWith:'[/font]' },
			{name:'Arial Black', openWith:'[font=Arial Black]', closeWith:'[/font]' },
			{name:'Comic Sans MS', openWith:'[font=Comic Sans MS]', closeWith:'[/font]' },
			{name:'Courier New', openWith:'[font=Courier New]', closeWith:'[/font]' },
			{name:'Georgia', openWith:'[font=Georgia]', closeWith:'[/font]' },
			{name:'Impact', openWith:'[font=Impact]', closeWith:'[/font]' },
			{name:'Sans-serif', openWith:'[font=Sans-serif]', closeWith:'[/font]' },
			{name:'Serif', openWith:'[font=Serif]', closeWith:'[/font]' },
			{name:'Time New Roman', openWith:'[font=Time New Roman]', closeWith:'[/font]' },
			{name:'Trebuchet MS', openWith:'[font=Trebuchet MS]', closeWith:'[/font]' },
			{name:'Verdana', openWith:'[font=Verdana]', closeWith:'[/font]' },
		]},
		{separator:'---------------' },
		{name:'Bulleted list', openWith:'[list]\n', closeWith:'\n[/list]'},
//		{name:'Numeric list', openWith:'[list=[![Starting number]!]]\n', closeWith:'\n[/list]'},
		{name:'List item', openWith:'[*] '},
		{separator:'---------------' },
		{name:'Quotes', openWith:'[quote]', closeWith:'[/quote]'},
		{name:'Code', openWith:'[code]', closeWith:'[/code]'},
		//{name:'Hide', openWith:'[hide]', closeWith:'[/hide]'},
		{separator:'---------------' },
		{name:'Clean', className:"clean", replaceWith:function(markitup) { return markitup.selection.replace(/\[(.*?)\]/g, "") } },
		//{name:'Preview', className:"preview", call:'preview' }
	]
}
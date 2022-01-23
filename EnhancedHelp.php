<?php
/*
An enhanced Help page, written exclusively for LearnNa'vi.org

Author: Tìtstewan
http://www.learnnavi.org/

CC BY-NC-SA 4.0 http://creativecommons.org/licenses/by-nc-sa/4.0/
2022 January, 2022

Updated for SMF 2.1.x

Add following code in /Themes/default/Help.template.php
!!! DO NOT forget to globalize the variable $sourcedir first !!!

// This will call the little custom function - ta Titstewan
require_once($sourcedir . '/EnhancedHelp.php');
enhanced_help();

----
The text strings for translations are in /Themes/default/languages/Modifications.english(-utf8).php
*/
if (!defined('SMF'))
	die('Hacking attempt...');

// This is a rather HUGE function with tons of $txt variables...
// However, this thing is written modulary, especially the BB code part for adding or changing BB codes.
function enhanced_help()
{
	global $txt, $settings, $context;

	echo '
			<div class="cat_bar">
				<h3 class="catbg">', $txt['ln_main_title'], '</h3>
			</div>
			<div id="help_container">
				<div id="helpmain">
				<p>', $txt['ln_main_text1'], '</p>
				<p>', $txt['ln_main_text2'], '</p>
				<p>', $txt['ln_group_page'], '</p>
				</div>
			</div>
			<div class="cat_bar">
				<h3 class="catbg">', $txt['ln_bbc_help'], '</h3>
			</div>
			<div id="help_container">
				<div id="helpmain">
					<p>', $txt['ln_bbc_main'], '</p>
					<p>', $txt['ln_bbc_main2'], '</p>
					<dl style="margin-bottom: 25px;">
						<dt style="float: left;">
							<ul>
								<li><a href="#ln_help_1" class="new_win">', $txt['ln_bbc_1'], '</a></li>
								<li><a href="#ln_help_2" class="new_win">', $txt['ln_bbc_2'], '</a></li>
								<li><a href="#ln_help_3" class="new_win">', $txt['ln_bbc_3'], '</a></li>
								<li><a href="#ln_help_4" class="new_win">', $txt['ln_bbc_4'], '</a></li>
								<li><a href="#ln_help_5" class="new_win">', $txt['ln_bbc_5'], '</a></li>
								<li><a href="#ln_help_6" class="new_win">', $txt['ln_bbc_6'], '</a></li>
								<li><a href="#ln_help_7" class="new_win">', $txt['ln_bbc_7'], '</a></li>
								<li><a href="#ln_help_8" class="new_win">', $txt['ln_bbc_8'], '</a></li>
								<li><a href="#ln_help_9" class="new_win">', $txt['ln_bbc_9'], '</a></li>
								<li><a href="#ln_help_10" class="new_win">', $txt['ln_bbc_10'], '</a></li>
							</ul>
						</dt>
						<dd style="float: left;">
							<ul>
								<li><a href="#ln_help_11" class="new_win">', $txt['ln_bbc_11'], '</a></li>
								<li><a href="#ln_help_12" class="new_win">', $txt['ln_bbc_12'], '</a></li>
								<li><a href="#ln_help_13" class="new_win">', $txt['ln_bbc_13'], '</a></li>
								<li><a href="#ln_help_14" class="new_win">', $txt['ln_bbc_14'], '</a></li>
								<li><a href="#ln_help_15" class="new_win">', $txt['ln_bbc_15'], '</a></li>
								<li><a href="#ln_help_16" class="new_win">', $txt['ln_bbc_16'], '</a></li>
								<li><a href="#ln_help_17" class="new_win">', $txt['ln_bbc_17'], '</a></li>
								<li><a href="#ln_help_18" class="new_win">', $txt['ln_bbc_18'], '</a></li>
								<li><a href="#ln_help_19" class="new_win">', $txt['ln_bbc_19'], '</a></li>
							</ul>
						</dd>
					</dl>
					<div style="margin: 2px 0 2px 0;">
						<div class="title_bar"><h4 id="ln_help_1" class="titlebg">', $txt['ln_bbc_1'], '</h4></div>
						<fieldset>
							<legend>', $txt['ln_bbc_syn'], '</legend>
							[b]', $txt['ln_bbc_tex'], '[/b]<br>
							[i]', $txt['ln_bbc_tex'], '[/i]<br>
							[u]', $txt['ln_bbc_tex'], '[/u]<br>
							[s]', $txt['ln_bbc_tex'], '[/s]
						</fieldset>
						<fieldset>
							<legend>', $txt['ln_bbc_exa'], '</legend>
							[b]', $txt['ln_bbc_b'], '[/b]<br>
							[i]', $txt['ln_bbc_i'], '[/i]<br>
							[u]', $txt['ln_bbc_u'], '[/u]<br>
							[s]', $txt['ln_bbc_s'], '[/s]
						</fieldset>
						<fieldset>
							<legend>', $txt['ln_bbc_out'], '</legend>
							<strong>', $txt['ln_bbc_b'], '</strong><br>
							<em>', $txt['ln_bbc_i'], '</em><br>
							<span class="bbc_u">', $txt['ln_bbc_u'], '</span><br>
							<del>', $txt['ln_bbc_s'], '</del>
						</fieldset>
					</div>
					<div style="margin: 2px 0 2px 0;">
						<div class="title_bar"><h4 id="ln_help_2" class="titlebg">', $txt['ln_bbc_2'], '</h4></div>
						<fieldset>
							<legend>', $txt['ln_bbc_syn'], '</legend>
							[color=', $txt['ln_bbc_opt'], ']', $txt['ln_bbc_tex'], '[/color]
						</fieldset>
						<fieldset>
							<legend>', $txt['ln_bbc_exa'], '</legend>
							[color=blue]', $txt['ln_bbc_ean'], '[/color]<br>
							[color=#0000ff]', $txt['ln_bbc_ean'], '[/color]<br>
							[color=#00f]', $txt['ln_bbc_ean'], '[/color]<br>
							[color=transparent]', $txt['ln_bbc_trans'], '[/color]
						</fieldset>
						<fieldset>
							<legend>', $txt['ln_bbc_out'], '</legend>
							<span style="color: blue;">', $txt['ln_bbc_ean'], '</span><br>
							<span style="color: #0000ff;">', $txt['ln_bbc_ean'], '</span><br>
							<span style="color: #00f;">', $txt['ln_bbc_ean'], '</span><br>
							<span style="color: transparent;">', $txt['ln_bbc_trans'], '</style>
						</fieldset>
						<fieldset>
							<legend>', $txt['ln_bbc_col_spec'], '</legend>
							[black]', $txt['ln_bbc_tex'], '[/black]&nbsp;&nbsp;-&nbsp;&nbsp;<span style="color: black;">', $txt['ln_bbc_tex'], '</span><br>
							[blue]', $txt['ln_bbc_tex'], '[/blue]&nbsp;&nbsp;-&nbsp;&nbsp;<span style="color: blue;">', $txt['ln_bbc_tex'], '</span><br>
							[red]', $txt['ln_bbc_tex'], '[/red]&nbsp;&nbsp;-&nbsp;&nbsp;<span style="color: red;">', $txt['ln_bbc_tex'], '</span><br>
							[white]', $txt['ln_bbc_tex'], '[/white]&nbsp;&nbsp;-&nbsp;&nbsp;<span style="color: white;">', $txt['ln_bbc_tex'], '</span>
						</fieldset>
					</div>
					<div style="margin: 2px 0 2px 0;">
						<div class="title_bar"><h4 id="ln_help_3" class="titlebg">', $txt['ln_bbc_3'], '</h4></div>
						<fieldset>
							<legend>', $txt['ln_bbc_syn'], '</legend>
							[size=', $txt['ln_bbc_opt'], ']', $txt['ln_bbc_tex'], '[/size]
						</fieldset>
						<fieldset>
							<legend>', $txt['ln_bbc_exa'], '</legend>
							[size=14pt]', $txt['ln_bbc_big'], '[/size]<br>
							[size=20px]', $txt['ln_bbc_big'], '[/size]
						</fieldset>
						<fieldset>
							<legend>', $txt['ln_bbc_out'], '</legend>
							<span style="font-size: 14pt;" class="bbc_size">', $txt['ln_bbc_big'], '</span><br>
							<span style="font-size: 20px;" class="bbc_size">', $txt['ln_bbc_big'], '</span>
						</fieldset>
					</div>
					<div style="margin: 2px 0 2px 0;">
						<div class="title_bar"><h4 id="ln_help_4" class="titlebg">', $txt['ln_bbc_4'], '</h4></div>
						<fieldset>
							<legend>', $txt['ln_bbc_syn'], '</legend>
							[font=', $txt['ln_bbc_opt'], ']', $txt['ln_bbc_tex'], '[/font]<br>
							', $txt['ln_bbc_font_info'], '
						</fieldset>
						<fieldset>
							<legend>', $txt['ln_bbc_exa'], '</legend>
							[font=courier]', $txt['ln_bbc_font'], '[/font]
						</fieldset>
						<fieldset>
							<legend>', $txt['ln_bbc_out'], '</legend>
							<span style="font-family: courier;" class="bbc_font">', $txt['ln_bbc_font'], '</span>
						</fieldset>
					</div>
					<div style="margin: 2px 0 2px 0;">
						<div class="title_bar"><h4 id="ln_help_5" class="titlebg">', $txt['ln_bbc_5'], '</h4></div>
						<fieldset>
							<legend>', $txt['ln_bbc_syn'], '</legend>
							[left]', $txt['ln_bbc_tex'], '[/left]<br>
							[center]', $txt['ln_bbc_tex'], '[/center]<br>
							[right]', $txt['ln_bbc_tex'], '[/right]
						</fieldset>
						<fieldset>
							<legend>', $txt['ln_bbc_exa'], '</legend>
							[left]', $txt['ln_bbc_left'], '[/left]<br>
							[center]', $txt['ln_bbc_center'], '[/center]<br>
							[right]', $txt['ln_bbc_right'], '[/right]
						</fieldset>
						<fieldset>
							<legend>', $txt['ln_bbc_out'], '</legend>
							<div style="text-align: left;">', $txt['ln_bbc_left'], '</div>
							<div align="center">', $txt['ln_bbc_center'], '</div>
							<div style="text-align: right;">', $txt['ln_bbc_right'], '</div>
						</fieldset>
					</div>
					<div style="margin: 2px 0 2px 0;">
						<div class="title_bar"><h4 id="ln_help_6" class="titlebg">', $txt['ln_bbc_6'], '</h4></div>
						<fieldset>
							<legend>', $txt['ln_bbc_syn'], '</legend>
							[url]', $txt['ln_bbc_tex'], '[/url]<br>
							[url=', $txt['ln_bbc_lin'], ']', $txt['ln_bbc_tex'], '[/url]<br>
							<br>
							', $txt['ln_bbc_iurl'], '<br>
							[iurl]', $txt['ln_bbc_tex'], '[/iurl]<br>
							[iurl=', $txt['ln_bbc_lin2'], ']', $txt['ln_bbc_tex'], '[/iurl]<br>
							[anchor=', $txt['ln_bbc_anchor'], ']', $txt['ln_bbc_anchor2'], '[/anchor]
						</fieldset>
						<fieldset>
							<legend>', $txt['ln_bbc_exa'], '</legend>
							[url]', $txt['ln_bbc_ln_link'], '[/url]<br>
							[url=', $txt['ln_bbc_ln_link'], ']', $txt['ln_bbc_ln_text'], '[/url]<br>
							<br>
							[iurl]', $txt['ln_bbc_ln_link'], '[/iurl]<br>
							[iurl=', $txt['ln_bbc_ln_link'], ']', $txt['ln_bbc_tex'], '[/iurl]<br>
							[iurl=#msg1234]', $txt['ln_bbc_tex'], '[/iurl]<br>
							[anchor=msg1234]', $txt['ln_bbc_tex'], '[/anchor]
						</fieldset>
						<fieldset>
							<legend>', $txt['ln_bbc_out'], '</legend>
							<a href="', $txt['ln_bbc_ln_link'], '" class="bbc_link" target="_blank">', $txt['ln_bbc_ln_link'], '</a><br>
							<a href="', $txt['ln_bbc_ln_link'], '" class="bbc_link" target="_blank">', $txt['ln_bbc_ln_text'], '</a><br>
							<br>
							<a href="', $txt['ln_bbc_ln_link'], '" class="bbc_link">', $txt['ln_bbc_ln_link'], '</a><br>
							<a href="', $txt['ln_bbc_ln_link'], '" class="bbc_link">', $txt['ln_bbc_tex'], '</a><br>
							<a href="#post_msg1234" class="bbc_link">Text</a><br>
							<span id="post_msg1234">Text</span>
						</fieldset>
					</div>
					<div style="margin: 2px 0 2px 0;">
						<div class="title_bar"><h4 id="ln_help_7" class="titlebg">', $txt['ln_bbc_7'], '</h4></div>
						<fieldset>
							<legend>', $txt['ln_bbc_syn'], '</legend>
							[email]', $txt['ln_bbc_email'], '[/email]<br>
							[email=', $txt['ln_bbc_email'], ']', $txt['ln_bbc_tex'], '[/email]
						</fieldset>
						<fieldset>
							<legend>', $txt['ln_bbc_exa'], '</legend>
							[email]example@example.com[/email]<br>
							[email=example@example.com]', $txt['ln_bbc_email_text'], '[/email]
						</fieldset>
						<fieldset>
							<legend>', $txt['ln_bbc_out'], '</legend>
							<a href="mailto:example@example.com" class="bbc_email">example@example.com</a><br>
							<a href="mailto:example@example.com" class="bbc_email">', $txt['ln_bbc_email_text'], '</a>
						</fieldset>
					</div>
					<div style="margin: 2px 0 2px 0;">
						<div class="title_bar"><h4 id="ln_help_8" class="titlebg">', $txt['ln_bbc_8'], '</h4></div>
						<fieldset>
							<legend>', $txt['ln_bbc_syn'], '</legend>
							[table] ... [/table] ', $txt['ln_bbc_table1'], '<br>
							[tr] ... [/tr] ', $txt['ln_bbc_table2'], '<br>
							[td] ... [/td] ', $txt['ln_bbc_table3'], '<br>
							<br>
							', $txt['ln_bbc_table4'], '<br>
							<br>
							[table]<br>
							[tr][td] ... [/td][td] ... [/td][/tr]<br>
							[tr][td] ... [/td][td] ... [/td][/tr]<br>
							[/table]
						</fieldset>
						<fieldset>
							<legend>', $txt['ln_bbc_exa'], '</legend>
							[table]<br>
							[tr][td]1[/td][td]A[/td][/tr]<br>
							[tr][td]10[/td][td]B[/td][/tr]<br>
							[tr][td]100[/td][td]C[/td][/tr]<br>
							[/table]
						</fieldset>
						<fieldset>
							<legend>', $txt['ln_bbc_out'], '</legend>
							<table class="bbc_table"><tbody><tr><td>1</td><td>A</td></tr><tr><td>10</td><td>B</td></tr><tr><td>100</td><td>C</td></tr></tbody></table>
						</fieldset>
					</div>
					<div style="margin: 2px 0 2px 0;">
						<div class="title_bar"><h4 id="ln_help_9" class="titlebg">', $txt['ln_bbc_9'], '</h4></div>
						<fieldset>
							<legend>', $txt['ln_bbc_syn'], '</legend>
							[spoiler]', $txt['ln_bbc_tex'], '[/spoiler]<br>
							[spoiler=', $txt['ln_bbc_tex'], ']', $txt['ln_bbc_tex'], '[/spoiler]
						</fieldset>
						<fieldset>
							<legend>', $txt['ln_bbc_exa'], '</legend>
							[spoiler]', $txt['ln_bbc_spoiler'], '[/spoiler]<br>
							[spoiler=', $txt['ln_bbc_tex'], ']', $txt['ln_bbc_spoiler'], '[/spoiler]
						</fieldset>
						<fieldset>
							<legend>', $txt['ln_bbc_out'], '</legend>
							<div class="spoiler"><div class="spoilerheader"><a href="javascript:void(0)" onclick="n = this.parentNode.parentNode.lastChild; if(n.style.display == \'none\') { n.style.display = \'block\';} else {n.style.display = \'none\';} return false;">Spoiler</a></div><div class="spoilerbody" style="display: none;">', $txt['ln_bbc_spoiler'], '</div></div>
							<div class="spoiler"><div class="spoilerheader"><a href="javascript:void(0)" onclick="n = this.parentNode.parentNode.lastChild; if(n.style.display == \'none\') {n.style.display = \'block\';} else {n.style.display = \'none\';} return false;">Spoiler: ', $txt['ln_bbc_tex'], '</a></div><div class="spoilerbody" style="display: none;">', $txt['ln_bbc_spoiler'], '</div></div>
						</fieldset>
					</div>
					<div style="margin: 2px 0 2px 0;">
						<div class="title_bar"><h4 id="ln_help_10" class="titlebg">', $txt['ln_bbc_10'], '</h4></div>
						<fieldset>
							<legend>', $txt['ln_bbc_syn'], '</legend>
							[desc=', $txt['ln_bbc_desc'], ']', $txt['ln_bbc_desc'], '[/desc]
						</fieldset>
						<fieldset>
							<legend>', $txt['ln_bbc_exa'], '</legend>
							[desc=', $txt['ln_bbc_desc2'], ']', $txt['ln_bbc_desc1'], '[/desc]
						</fieldset>
						<fieldset>
							<legend>', $txt['ln_bbc_out'], '</legend>
							<span class="hotspot" onmouseover="tooltip.show(\'Hello!\');" onmouseout="tooltip.hide();">Kaltxì!</span>
						</fieldset>
					</div>
					<div style="margin: 2px 0 2px 0;">
						<div class="title_bar"><h4 id="ln_help_11" class="titlebg">', $txt['ln_bbc_11'], '</h4></div>
						<fieldset>
							<legend>', $txt['ln_bbc_syn'], '</legend>
							[list]<br>
							[li]', $txt['ln_bbc_tex'], '[/li]<br>
							[li]', $txt['ln_bbc_tex'], '[/li]<br>
							[/list]<br>
							<br>
							[list type=', $txt['ln_bbc_opt'], ']<br>
							', $txt['ln_bbc_li_1'], 'disc, circle, square, decimal, lower-roman, upper-roman, lower-alpha, upper-alpha<br>
							<br>
							[', $txt['ln_bbc_opt'], ']...[/li]<br>
							', $txt['ln_bbc_li_2'], '[o], [O], [*], [@], [+], [x], [#]<br>
						</fieldset>
						<fieldset>
							<legend>', $txt['ln_bbc_exa'], '</legend>
							<div style="float: left;">
							[list]<br>
							[li]...[/li]<br>
							[/list]<br>
							[list type=circle]<br>
							[li]...[/li]<br>
							[/list]<br>
							[list type=square]<br>
							[li]...[/li]<br>
							[/list]<br>
							[list type=decimal]<br>
							[li]...[/li]<br>
							[/list]<br>
							[list type=lower-roman]<br>
							[li]...[/li]<br>
							[/list]<br>
							[list type=upper-roman]<br>
							[li]...[/li]<br>
							[/list]<br>
							[list type=lower-alpha]<br>
							[li]...[/li]<br>
							[/list]<br>
							[list type=upper-alpha]<br>
							[li]...[/li]<br>
							[/list]
							</div>
							<div style="float: left; padding-left: 20%;">
							[list]<br>
							[o]...[/li]<br>
							[/list]<br>
							[list]<br>
							[o]...[/li]<br>
							[/list]<br>
							[list]<br>
							[*]...[/li]<br>
							[/list]<br>
							[list]<br>
							[@]...[/li]<br>
							[/list]<br>
							[list]<br>
							[+]...[/li]<br>
							[/list]<br>
							[list]<br>
							[x]...[/li]<br>
							[/list]<br>
							[list]<br>
							[+]...[/li]<br>
							[/list]<br>
							</div>
							<div style="float: left; padding-left: 20%;">
							[list]<br>
							[li]1[/li]<br>
							[li]2<br>
							[list]<br>
							[li]a[/li]<br>
							[li]b<br>
							[list]<br>
							[li]x[/li]<br>
							[li]y[/li]<br>
							[/list]<br>
							[/li]<br>
							[li]3[/li]<br>
							[/list]<br>
							[/li]<br>
							[li]4[/li]<br>
							[/list]
							</div>
						</fieldset>
						<fieldset>
							<legend>', $txt['ln_bbc_out'], '</legend>
							<div style="float: left;">
								<ul class="bbc_list"><li>...</li></ul><ul class="bbc_list"><li style="list-style-type: circle !important;">...</li></ul><ul class="bbc_list"><li style="list-style-type: square !important;">...</li></ul><ul class="bbc_list"><li style="list-style-type: decimal !important;">...</li></ul><ul class="bbc_list"><li style="list-style-type: lower-roman !important;">...</li></ul><ul class="bbc_list"><li style="list-style-type: upper-roman !important;">...</li></ul><ul class="bbc_list"><li style="list-style-type: lower-alpha !important;">...</li></ul><ul class="bbc_list"><li style="list-style-type: upper-alpha !important;">...</li></ul>
							</div>
							<div style="float: left; padding-left: 20%;">
								<ul class="bbc_list"><li style="list-style-type: circle !important;">...</li></ul><ul class="bbc_list"><li style="list-style-type: circle !important;">...</li></ul><ul class="bbc_list"><li style="list-style-type: disc !important;">...</li></ul><ul class="bbc_list"><li style="list-style-type: disc !important;">...</li></ul><ul class="bbc_list"><li style="list-style-type: square !important;">...</li></ul><ul class="bbc_list"><li style="list-style-type: square !important;">...</li></ul><ul class="bbc_list"><li style="list-style-type: square !important;">...</li></ul>
							</div>
							<div style="float: left; padding-left: 20%;">
								<ul class="bbc_list"><li>1</li><li>2<br><ul class="bbc_list"><li>a</li><li>b<br><ul class="bbc_list"><li>x</li><li>y</li></ul></li><li>3</li></ul></li><li>4</li></ul>
							</div>
						</fieldset>
					</div>
					<div style="margin: 2px 0 2px 0;">
						<div class="title_bar"><h4 id="ln_help_12" class="titlebg">', $txt['ln_bbc_12'], '</h4></div>
						<fieldset>
							<legend>', $txt['ln_bbc_syn'], '</legend>
							[img]', $txt['ln_bbc_img'], '[/img]<br>
							<br>
							', $txt['ln_bbc_img_opt'], '<br>
							[img width=X height=Y]', $txt['ln_bbc_img'], '[/img]<br>
							[img width=X height=Y alt=', $txt['ln_bbc_tex'], ']', $txt['ln_bbc_img'], '[/img]
						</fieldset>
						<fieldset>
							<legend>', $txt['ln_bbc_exa'], '</legend>
							[img]', $settings['images_url'], '/', $context['theme_variant_url'], 'construction.png[/img]<br>
							[img width=100 height=50]', $settings['images_url'], '/', $context['theme_variant_url'], 'construction.png[/img]<br>
							[img width=150 height=100 alt=', $txt['ln_bbc_tex'], ']', $settings['images_url'], '/', $context['theme_variant_url'], 'construction.png[/img]
						</fieldset>
						<fieldset>
							<legend>', $txt['ln_bbc_out'], '</legend>
							<img src="', $settings['images_url'], '/', $context['theme_variant_url'], 'construction.png" alt="" class="bbc_img">
							<br>
							<img src="', $settings['images_url'], '/', $context['theme_variant_url'], 'construction.png" alt="" class="bbc_img resized" width="100" height="50">
							<br>
							<img src="', $settings['images_url'], '/', $context['theme_variant_url'], 'construction.png" alt="', $txt['ln_bbc_tex'], '" class="bbc_img resized" width="150" height="100">
						</fieldset>
					</div>
					<div style="margin: 2px 0 2px 0;">
						<div class="title_bar"><h4 id="ln_help_13" class="titlebg">', $txt['ln_bbc_13'], '</h4></div>
						<fieldset>
							<legend>', $txt['ln_bbc_syn'], '</legend>
							[quote]', $txt['ln_bbc_qtext'], '[/quote]<br>
							[quote author=', $txt['ln_bbc_qauth'], ']', $txt['ln_bbc_qtext'], '[/quote]
						</fieldset>
						<fieldset>
							<legend>', $txt['ln_bbc_exa'], '</legend>
							[quote]', $txt['ln_bbc_qtext'], '[/quote]<br>
							[quote author=', $txt['ln_bbc_qauth'], ']', $txt['ln_bbc_qtext'], '[/quote]
						</fieldset>
						<fieldset>
							<legend>', $txt['ln_bbc_out'], '</legend>
							<blockquote class="bbc_standard_quote"><cite>Quote</cite>Quoted post</blockquote><blockquote class="bbc_standard_quote"><cite>Quote from: Author</cite>Quoted post</blockquote>
						</fieldset>
					</div>
					<div style="margin: 2px 0 2px 0;">
						<div class="title_bar"><h4 id="ln_help_14" class="titlebg">', $txt['ln_bbc_14'], '</h4></div>
						<fieldset>
							<legend>', $txt['ln_bbc_syn'], '</legend>
							[code]', $txt['ln_bbc_tex'], '[/code]<br>
							[code=', $txt['ln_bbc_13'], ']', $txt['ln_bbc_tex'], '[/code]
						</fieldset>
						<fieldset>
							<legend>', $txt['ln_bbc_exa'], '</legend>
							[code]alert("Hello world!");[/code]<br>
							[code=html]alert(Hello world!);[/code]
						</fieldset>
						<fieldset>
							<legend>', $txt['ln_bbc_out'], '</legend>
							<div class="codeheader"><span class="code floatleft">Code</span> <a class="codeoperation smf_select_text">Select</a> <a class="codeoperation smf_expand_code hidden" data-shrink-txt="Shrink" data-expand-txt="Expand">Expand</a></div><code class="bbc_code">alert("Hello world!");</code><div class="codeheader"><span class="code floatleft">Code</span> (html) <a class="codeoperation smf_select_text">Select</a> <a class="codeoperation smf_expand_code hidden" data-shrink-txt="Shrink" data-expand-txt="Expand">Expand</a></div><code class="bbc_code">alert(Hello world!);</code>
						</fieldset>
					</div>
					<div style="margin: 2px 0 2px 0;">
						<div class="title_bar"><h4 id="ln_help_15" class="titlebg">', $txt['ln_bbc_15'], '</h4></div>
						<fieldset>
							<legend>', $txt['ln_bbc_syn'], '</legend>
							[php]', $txt['ln_bbc_15'], '[/php]
						</fieldset>
						<fieldset>
							<legend>', $txt['ln_bbc_exa'], '</legend>
							[php]&lt;?php<br>echo \'Hello World!\';<br>?&gt;[/php]
						</fieldset>
						<fieldset>
							<legend>', $txt['ln_bbc_out'], '</legend>
							<span class="phpcode"><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br></span>
							<span style="color: #007700">echo&nbsp;</span><span style="color: #DD0000">\'Hello&nbsp;World!\'</span><span style="color: #007700">;<br>
							</span><span style="color: #0000BB">?&gt;</span></span></span>
						</fieldset>
					</div>
					<div style="margin: 2px 0 2px 0;">
						<div class="title_bar"><h4 id="ln_help_16" class="titlebg">', $txt['ln_bbc_16'], '</h4></div>
						<fieldset>
							<legend>', $txt['ln_bbc_syn'], '</legend>
							[sup]', $txt['ln_bbc_tex'], '[/sup]<br>
							[sub]', $txt['ln_bbc_tex'], '[/sub]
						</fieldset>
						<fieldset>
							<legend>', $txt['ln_bbc_exa'], '</legend>
							', $txt['ln_bbc_tex'], '[sup]', $txt['ln_bbc_sup'], '[/sup]<br>
							', $txt['ln_bbc_tex'], '[sub]', $txt['ln_bbc_sub'], '[/sub]
						</fieldset>
						<fieldset>
							<legend>', $txt['ln_bbc_out'], '</legend>
							', $txt['ln_bbc_tex'], '<sup>', $txt['ln_bbc_sup'], '</sup><br>
							', $txt['ln_bbc_tex'], '<sub>', $txt['ln_bbc_sub'], '</sub>
						</fieldset>
					</div>
					<div style="margin: 2px 0 2px 0;">
						<div class="title_bar"><h4 id="ln_help_17" class="titlebg">', $txt['ln_bbc_17'], '</h4></div>
						<fieldset>
							<legend>', $txt['ln_bbc_syn'], '</legend>
							', $txt['ln_bbc_rtl'], '<br>
							[rtl][/rtl]<br>
							<br>
							', $txt['ln_bbc_ltr'], '<br>
							[ltr][/ltr]
						</fieldset>
						<fieldset>
							<legend>', $txt['ln_bbc_exa'], '</legend>
							[rtl]', $txt['ln_bbc_rtl1'], '[/rtl]<br>
							[ltr]', $txt['ln_bbc_ltr2'], '[/ltr]
						</fieldset>
						<fieldset>
							<legend>', $txt['ln_bbc_out'], '</legend>
							<bdo dir="rtl">Right-to-Left!</bdo><br>
							<bdo dir="ltr">Right-to-Left!</bdo>
						</fieldset>
					</div>
					<div style="margin: 2px 0 2px 0;">
						<div class="title_bar"><h4 id="ln_help_18" class="titlebg">', $txt['ln_bbc_18'], '</h4></div>
						<fieldset>
							<legend>', $txt['ln_bbc_syn'], '</legend>
							', $txt['ln_bbc_ac_ab'], '<br>
							[abbr=', $txt['ln_bbc_tex'], ']', $txt['ln_bbc_abb'], '[/abbr]<br>
							[abbr=', $txt['ln_bbc_tex'], ']', $txt['ln_bbc_acr'], '[/abbr]
						</fieldset>
						<fieldset>
							<legend>', $txt['ln_bbc_exa'], '</legend>
							[abbr=exempli gratia]eg[/abbr]<br>
							[abbr=Simple Machines Forum]SMF[/abbr]
						</fieldset>
						<fieldset>
							<legend>', $txt['ln_bbc_out'], '</legend>
							<abbr title="exempli gratia">eg</abbr><br>
							<abbr title="Simple Machines Forum">SMF</abbr>
						</fieldset>
					</div>
					<div style="margin: 2px 0 2px 0;">
						<div class="title_bar"><h4 id="ln_help_19" class="titlebg">', $txt['ln_bbc_19'], '</h4></div>
						<fieldset>
							<legend>', $txt['ln_bbc_syn'], '</legend>
							[audio]', $txt['ln_bbc_audio'], '[/audio]<br>
							[audio=', $txt['ln_bbc_audio'], ']', $txt['ln_bbc_tex'], '[/audio]
							<hr />
							[justify]', $txt['ln_bbc_ln_link'], '[/justify]<br>
							<hr />
							[pre]', $txt['ln_bbc_tex'], '[/pre]
							<hr />
							[tt]', $txt['ln_bbc_tex'], '[/tt]
							<hr />
							[nobbc]', $txt['ln_bbc_nobbc'], '[/nobbc]
							<hr />
							', $txt['ln_bbc_time'], '<br>
							[time]1132812640[/time]
						</fieldset>
					</div>
					<div align="center">
					<div class="title_bar" style="margin-bottom: 15px;"><h4 class="titlebg" style="color: transparent;">Kaltxì ulte seysonìltsan! Ngal rolun faylì\'ut aketsuktse\'a.</h4></div>
					Created by <a href="http://forum.learnnavi.org/index.php?action=profile;u=10322">Tìtstewan</a>
					</div>
				</div>
			</div>';
}
?>
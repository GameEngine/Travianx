<?php

#################################################################################
##              -= YOU MAY NOT REMOVE OR CHANGE THIS NOTICE =-                 ##
## --------------------------------------------------------------------------- ##
##  Filename       anmelden.php                                                 ##
##  Developed by:  Dzoki                                                       ##
##  License:       TravianX Project                                            ##
##  Copyright:     TravianX (c) 2010-2011. All rights reserved.                ##
##                                                                             ##
#################################################################################

include('GameEngine/Account.php');
include('Templates/header.tpl');
?>
<div id="mid">
<?php include("Templates/menu.tpl"); ?>
<div id="content"  class="signup">

<h1><img src="img/x.gif" class="anmelden" alt="register for the game"></h1>
<h5><img src="img/x.gif" class="img_u05" alt="registration"/></h5>

<p><?php echo BEFORE_REGISTER; ?></p>

<form name="snd" method="post" action="anmelden.php">
<input type="hidden" name="ft" value="a1" />

<table cellpadding="1" cellspacing="1" id="sign_input">
	<tbody>
		<tr class="top">
			<th><?php echo NICKNAME; ?></td>
			<td><input class="text" type="text" name="name" value="<?php echo $form->getValue('name'); ?>" maxlength="15" />
			<span class="error"><?php echo $form->getError('name'); ?></span>
			</td>
		</tr>
		<tr>
			<th><?php echo EMAIL; ?></th>
			<td>
				<input class="text" type="text" name="email" value="<?php echo $form->getValue('email'); ?>" maxlength="40" />
				<span class="error"><?php echo $form->getError('email'); ?></span>
				</td>
			</tr>
		<tr class="btm">
			<th><?php echo PASSWORD; ?></th>
			<td>
				<input class="text" type="password" name="pw" value="<?php echo $form->getValue('pw'); ?>" maxlength="20" />
				<span class="error"><?php echo $form->getError('pw'); ?></span>
			</td>
		</tr>
	</tbody>
</table>

<table cellpadding="1" cellspacing="1" id="sign_select">
	<tbody>
		<tr class="top">
			<th><img src="img/x.gif" class="img_u06" alt="choose tribe"></th>
			<th colspan="2"><img src="img/x.gif" class="img_u07" alt="starting position"></th>
		</tr>
		<tr>
			<td class="nat"><label><input class="radio" type="radio" name="vid" value="1" <?php echo $form->getRadio('vid',1); ?>>&nbsp;<?php echo ROMANS; ?></label></td>
			&nbsp;<td class="pos1"><label><input class="radio" type="radio" name="kid" value="0" checked>&nbsp;<?php echo RANDOM; ?></label></td>
			<td class="pos2">&nbsp;</td>
		</tr>		
		<tr>
			<td><label><input class="radio" type="radio" name="vid" value="2" <?php echo $form->getRadio('vid',2); ?>>&nbsp;<?php echo TEUTONS; ?></label></td>
			<td><label><input class="radio" type="radio" name="kid" value="1" <?php echo $form->getRadio('kid',1); ?>>&nbsp;<?php echo NW; ?> <b>(-|+)</b>&nbsp;</label></td>
			<td><label><input class="radio" type="radio" name="kid" value="2" <?php echo $form->getRadio('kid',2); ?>>&nbsp;<?php echo NE; ?> <b>(+|+)</b></label></td>
		</tr>		
		<tr class="btm">
			<td><label><input class="radio" type="radio" name="vid" value="3" <?php echo $form->getRadio('vid',3); ?>>&nbsp;<?php echo GAULS; ?></label></td>
			<td><label><input class="radio" type="radio" name="kid" value="3" <?php echo $form->getRadio('kid',3); ?>>&nbsp;<?php echo SW; ?> <b>(-|-)</b></label></td>
			<td><label><input class="radio" type="radio" name="kid" value="4" <?php echo $form->getRadio('kid',4); ?>>&nbsp;<?php echo SE; ?> <b>(+|-)</b></label></td>
		</tr>
	</tbody>
</table>

<ul class="important">
<?php
echo $form->getError('tribe');
echo $form->getError('agree');
?>
		</ul>

<p>
		<input class="check" type="checkbox" name="agb" value="1" <?php echo $form->getRadio('agb',1); ?>/><?php echo ACCEPT_RULES; ?></p>

<p class="btn">
	<input type="image" value="anmelden" name="s1" id="btn_signup" class="dynamic_img" src="img/x.gif" alt="register"/>
</p>
</form>

<p class="info"><?php echo ONE_PER_SERVER; ?></p>
</div>
<div id="side_info" class="outgame">
<?php
if(NEWSBOX1) { include("Templates/News/newsbox1.tpl"); }
if(NEWSBOX2) { include("Templates/News/newsbox2.tpl"); }
if(NEWSBOX3) { include("Templates/News/newsbox3.tpl"); }
?>
			</div>

<div class="clear"></div>
			</div>
<?php
include("Templates/footer.tpl");
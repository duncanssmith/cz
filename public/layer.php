<!-- BEGIN FLOATING LAYER CODE //-->
<div id="theLayer" style="position:absolute;width:250px;left:40;top:150;visibility:hidden;z-Index:104;">
	<!-- 0 -->
<!--<table border="0" width="400" background="<?php echo $layerImg;?>" cellspacing="0" cellpadding="12">-->
<table border="0" width="400" cellspacing="0" cellpadding="12">
<tr>

<td width="100%">
	<!-- 00 -->
  <table border="0" width="100%" cellspacing="0" cellpadding="0" height="36">
  <tr>
  <td id="titleBar" width="100%">
  <ilayer width="100%" onSelectStart="return false;">

  <layer width="100%" onMouseover="isHot=true;if (isN4) ddN4(theLayer)" onMouseout="isHot=false">
 <!--<a href="#" onClick="hideMe(); return false" class="menuButton"><?php echo $thisPageTitle;?></a>-->

  </layer>
  </ilayer>
  <p class="instructions">move </p>
  </td>
  <td valign="top">
  <div class="menuBar">
  <a href="#" onClick="hideMe();return false" class="menuButton">X</a>
  

  </div>
  <p class="instructions">close</p>
  </td>

  </tr>
  <tr>

  <td width="100%" bgcolor="<?php echo $c4;?>" style="padding:4px" colspan="2">
	  <!-- PLACE YOUR CONTENT HERE //-->  
	  <?php echo $thisPageText;?>
<!-- END OF CONTENT AREA //-->
  </td>

  </tr>
  </table> 
	<!-- 00 -->
</td>
</tr>

	<!-- 0 -->
</table>
</div>
<!-- END FLOATING LAYER CODE //--> 


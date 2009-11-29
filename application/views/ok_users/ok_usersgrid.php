<?
   $this->load->helper('url');
   $modify_url = site_url('ok_users/modify/');
   $delete_url = site_url('ok_users/delete/');
   $add_url    = site_url('ok_users/add/');

?>
<style>
   /* NOTE: These are example styles to use. You can modift the styles as you
    * NOTE: ...please and intergrate into your entire site.
    */

   .tbl_headercell tbody .tbl_headercell_dataRollOver{
      /* Rollover style on mouse over (Data) */
      background-color:#FFF;
      /* No mouseover color in this example - specify another color if you want this */

   }

   .tbl{
      font-family:arial;
      font-size:12px;
      /* width:400px; */
      empty-cells: show;
   }

   .tbl td{
      margin:0px;
      padding:2px;
      empty-cells: show;
      border-bottom:1px solid #EAE9E1; /* Border bottom of table data cells */
      border-right:1px solid #EAE9E1;  /* Border bottom of table data cells */
      max-height:10px;

   }
   .tbl tbody{
      background-color:#FFF;
   }

   .tbl_headercell{
      /* Standard column header */
      border-top:2px solid #ECE9D8;
   }

   .tbl thead{
      /*position:relative; */ ;
   }
   .tbl thead tr{
      /*position:relative; */
      top:0px;
      bottom:0px;
   }

   .tbl .scrollingContent{
      overflow:auto;
      overflow-y:auto;                    /* NOTE: Remove for no scrolling */
      overflow:-moz-scrollbars-vertical;  /* NOTE: Remove for no scrolling */
      width:100%;
      /* NOTE: Specify a required height for the scrollable table or remove for no scrolling */
      height:350px;

   }


   /* End layout CSS */

</style>

<form action='<?= $add_url; ?>' method='POST' id='frmok_users'>
<table width="100%" border="0" cellspacing="1" cellpadding="0">
<tr>
   <th align="left" class="formSecHeader">Browsing ok_users values</th>
   <th align="right">
    <input class="redbutton" value="&nbsp;&nbsp;Add&nbsp;&nbsp;" type="submit" name='add' id='add' >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   </th>
</table>
</form>

<br />
<table class="tbl" border="0" cellpadding="2" cellspacing="1" width="100%">
<thead>
<tr>
	<th align="right" width="70"> &nbsp; sort by:&nbsp; </th>
	<th VALIGN='MIDDLE' ALIGN='CENTER'  class='tbl_headercell'>
		Id
	</th>
	<th VALIGN='MIDDLE' ALIGN='CENTER'  class='tbl_headercell'>
		Role_id
	</th>
	<th VALIGN='MIDDLE' ALIGN='CENTER'  class='tbl_headercell'>
		Username
	</th>
	<th VALIGN='MIDDLE' ALIGN='CENTER'  class='tbl_headercell'>
		Password
	</th>
	<th VALIGN='MIDDLE' ALIGN='CENTER'  class='tbl_headercell'>
		Email
	</th>
	<th VALIGN='MIDDLE' ALIGN='CENTER'  class='tbl_headercell'>
		Banned
	</th>
	<th VALIGN='MIDDLE' ALIGN='CENTER'  class='tbl_headercell'>
		Ban_reason
	</th>
	<th VALIGN='MIDDLE' ALIGN='CENTER'  class='tbl_headercell'>
		Newpass
	</th>
	<th VALIGN='MIDDLE' ALIGN='CENTER'  class='tbl_headercell'>
		Newpass_key
	</th>
	<th VALIGN='MIDDLE' ALIGN='CENTER'  class='tbl_headercell'>
		Newpass_time
	</th>
	<th VALIGN='MIDDLE' ALIGN='CENTER'  class='tbl_headercell'>
		Last_ip
	</th>
	<th VALIGN='MIDDLE' ALIGN='CENTER'  class='tbl_headercell'>
		Last_login
	</th>
	<th VALIGN='MIDDLE' ALIGN='CENTER'  class='tbl_headercell'>
		Created
	</th>
	<th VALIGN='MIDDLE' ALIGN='CENTER'  class='tbl_headercell'>
		Modified
	</th>

</tr>
</thead>
<tbody  class="scrollingContent">

      <?
         $i = 0;
         foreach ($ok_users_list as $ok_users) {
            $i++;
            if (($i%2)==0) { $bgColor = "#FFFFFF"; } else { $bgColor = "#C0C0C0"; }
      ?>
      <tr bgcolor="<?= $bgColor; ?>">
         <td align="center" nowrap="nowrap">
            <a href = "<?= $modify_url."/".$ok_users["id"]; ?>" >Edit</a>
            &nbsp;&nbsp;&nbsp;
            <a href = "<?= $delete_url."/".$ok_users["id"]; ?>" >Delete</a>
         </td>
   <td align="left" nowrap="nowrap"><?= $ok_users['id']; ?></td>
   <td align="left" nowrap="nowrap"><?= $ok_users['role_id']; ?></td>
   <td align="left" nowrap="nowrap"><?= $ok_users['username']; ?></td>
   <td align="left" nowrap="nowrap"><?= $ok_users['password']; ?></td>
   <td align="left" nowrap="nowrap"><?= $ok_users['email']; ?></td>
   <td align="left" nowrap="nowrap"><?= $ok_users['banned']; ?></td>
   <td align="left" nowrap="nowrap"><?= $ok_users['ban_reason']; ?></td>
   <td align="left" nowrap="nowrap"><?= $ok_users['newpass']; ?></td>
   <td align="left" nowrap="nowrap"><?= $ok_users['newpass_key']; ?></td>
   <td align="left" nowrap="nowrap"><?= $ok_users['newpass_time']; ?></td>
   <td align="left" nowrap="nowrap"><?= $ok_users['last_ip']; ?></td>
   <td align="left" nowrap="nowrap"><?= $ok_users['last_login']; ?></td>
   <td align="left" nowrap="nowrap"><?= $ok_users['created']; ?></td>
   <td align="left" nowrap="nowrap"><?= $ok_users['modified']; ?></td>
</tr>
      <? } ?>
</tbody>
</table>
<br />





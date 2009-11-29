<?
   $this->load->helper('url');
   $modify_url = site_url('ok_roles/modify/');
   $delete_url = site_url('ok_roles/delete/');
   $add_url    = site_url('ok_roles/add/');

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

<form action='<?= $add_url; ?>' method='POST' id='frmok_roles'>
<table width="100%" border="0" cellspacing="1" cellpadding="0">
<tr>
   <th align="left" class="formSecHeader">Browsing ok_roles values</th>
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
		Parent_id
	</th>
	<th VALIGN='MIDDLE' ALIGN='CENTER'  class='tbl_headercell'>
		Name
	</th>

</tr>
</thead>
<tbody  class="scrollingContent">

      <?
         $i = 0;
         foreach ($ok_roles_list as $ok_roles) {
            $i++;
            if (($i%2)==0) { $bgColor = "#FFFFFF"; } else { $bgColor = "#C0C0C0"; }
      ?>
      <tr bgcolor="<?= $bgColor; ?>">
         <td align="center" nowrap="nowrap">
            <a href = "<?= $modify_url."/".$ok_roles["id"]; ?>" >Edit</a>
            &nbsp;&nbsp;&nbsp;
            <a href = "<?= $delete_url."/".$ok_roles["id"]; ?>" >Delete</a>
         </td>
   <td align="left" nowrap="nowrap"><?= $ok_roles['id']; ?></td>
   <td align="left" nowrap="nowrap"><?= $ok_roles['parent_id']; ?></td>
   <td align="left" nowrap="nowrap"><?= $ok_roles['name']; ?></td>
</tr>
      <? } ?>
</tbody>
</table>
<br />





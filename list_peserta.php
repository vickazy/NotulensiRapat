<?php include ("koneksi.php");?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>
<body>
<table width="100%" border="0">
  <tr>
    <td width="37"><img src="image/Graphic1.png" width="36" height="30" /></td>
    <td width="1056"><form id="form1" name="form1" method="post" action="">
      <label for="select2"></label>
      <select
     <span class="caret"></span></button>
    <ul class="dropdown-menu">
  <?php 
  $result=mysql_query("SELECT * FROM rapat where status ='1'");
  while ($nama = mysql_fetch_array($result)){
	  echo "<option value=\"$nama[no_surat]\">$nama[hal]</option>\n";
  }
  ?>
  
      </select>
    </form>
    </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><form id="form2" name="form2" method="post" action="">
    </form>
    </td>
  </tr>
  <tr>
    <td><img src="image/Tanggal.png" width="35" height="29" /></td>
    <td><form id="form3" name="form3" method="post" action="">
    </form>
    </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><form id="form4" name="form4" method="post" action="">
    </form>
    </td>
  </tr>
</table>
<table width="100%" border="0">
  <tr>
    <td><img src="image/Location.png" width="35" height="30" /></td>
  </tr>
</table>
<table width="100%" border="0">
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>
<table width="100%" border="0">
  <tr>
    <td><img src="image/Time.png" width="32" height="37" /></td>
  </tr>
</table>
<p>&nbsp;</p>
<table width="100%" border="0">
  <tr>
    <td><blockquote>
      <blockquote>
        <blockquote>
          <blockquote>
            <blockquote>
              <blockquote>
                <blockquote>
                  <blockquote>
                    <blockquote>
                      <blockquote>
                        <blockquote>
                          <p>Peserta yang Hadir </p>
                        </blockquote>
                      </blockquote>
                    </blockquote>
                  </blockquote>
                </blockquote>
              </blockquote>
            </blockquote>
          </blockquote>
        </blockquote>
      </blockquote>
    </blockquote></td>
  </tr>
</table>
<table width="100%" border="1">
  <tr>
    <td><form id="form5" name="form5" method="post" action="">
      <label for="textfield"></label>
      <input type="text" name="textfield" id="textfield" />
    </form></td>
    <td><form id="form11" name="form11" method="post" action="">
      <label for="select2"></label>
    </form></td>
  </tr>
  <tr>
    <td><form id="form6" name="form6" method="post" action="">
      <label for="textfield2"></label>
      <input type="text" name="textfield5" id="textfield2" />
    </form></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><form id="form7" name="form7" method="post" action="">
      <label for="textfield3"></label>
      <input type="text" name="textfield6" id="textfield3" />
    </form></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><form id="form8" name="form8" method="post" action="">
      <label for="textfield4"></label>
      <input type="text" name="textfield7" id="textfield4" />
    </form></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><form id="form9" name="form9" method="post" action="">
      <label for="textfield5"></label>
      <input type="text" name="textfield8" id="textfield5" />
    </form></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><form id="form10" name="form10" method="post" action="">
      <label for="textfield6"></label>
      <input type="text" name="textfield9" id="textfield6" />
    </form></td>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ครูกำหนดที่นั่ง</title>
</head>

<body>
<p align="center">กำหนดที่นั่ง</p>
<form  name="form1" method="post" action="php/tech_createseat.php">
    <table width="396" border="0" align="center" style="width: 400px">
    <tbody>
      <tr>
        <td width="245"> &nbsp;กรอกรหัสห้องเรียน</td>
        <td width="141"><input type="text" name="class_id" id="class_id"></td>
      </tr>
      <tr>
        <td> &nbsp;จำนวนแถว</td>
        <td><input type="text" name="seat_row" id="seat_row"></td>
      </tr>
      <tr>
        <td width="245"> &nbsp;จำนวนหลัก </td>
        <td><input type="text" name="seat_col" id="seat_col"></td>
      </tr>
    <tr>
        <td width="245"> &nbsp;จำนวนที่นั่งใน 1 โต๊ะ(1-10 ที่นั่ง)  </td>
        <td><input type="text" name="seat_num" id="seat_num"></td>
      </tr>
    </tbody>
  </table>
  <p align="center"><input type="submit" name="submit" id="submit" value="Submit"></p>
    <center><button type='button' onclick='history.go(-1);'>Back </button></center>
</form>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>
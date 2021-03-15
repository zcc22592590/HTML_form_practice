<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>HW_form</title>
	<link rel="stylesheet" type="text/css" href="./css/style_form.css">
	<!-- link用來連接css檔 -->
</head>
<body>
	<form name="member" action="confirm_profile" method="POST">
		<table class="login_frame">
			<thead>
				<td colspan="2">會員資料填寫</td>
			</thead>

			<tbody>
			<tr>
				<td id="left_title">帳號</td>
				<td id="right_title"><input type="text" name="account" size="50" value="限6-12個字"></td>
			</tr>
			<tr>
				<td id="left_title">密碼</td>
				<td id="right_title"><input type="password" name="password" size="50" value="限6-12個字"></td>
			</tr>
			<tr>
				<td id="left_title">密碼確認</td>
				<td id="right_title"><input type="password" name="password_confirm" size="50" value="請再次輸入密碼"></td>
			</tr>
			<tr>
				<td id="left_title">姓名</td>
				<td id="right_title"><input type="text" name="member_name" size="50"></td>
			</tr>
			<tr>
				<td id="left_title">性別</td>
				<td id="right_title"><input type="radio" name="gender" value="1">男性
					<input type="radio" name="gender" value="2">女性
					<input type="radio" name="gender" value="3">其他</td>
			</tr>
			<tr>
				<td id="left_title">生日</td>
				<td id="right_title"><select name="birth">
					<?php

					for($i = 2021;$i >= 1911; $i--){
						echo "<option value = \"$i\" >$i</option>";
					}

					?>
					</select>年
					<select name="birth">
					<?php

					for($i = 1;$i <= 12; $i++){
						echo "<option value = \"$i\" >$i</option>";
					}

					?>
					</select>月
					<select name="birth">
					<?php

					for($i = 1;$i <= 31; $i++){
						echo "<option value = \"$i\" >$i</option>";
					}

					?>
					</select>日</td>
			</tr>
			<tr>
				<td id="left_title">電話號碼</td>
				<td id="right_title"><input type="text" name="phone" size="50" ></td>
			</tr>
			<tr>
				<td id="left_title">地址</td>
				<td id="right_title"><input type="text" name="address" size="50" ></td>
			</tr>
			<tr>
				<td id="left_title">電子郵件</td>
				<td id="right_title"><input type="email" name="email" size="50" ></td>
			</tr>
			<tr>
				<td id="left_title">暱稱</td>
				<td id="right_title"><input type="text" name="nickname" size="50" ></td>
			</tr>
			<tr>
				<td id="left_title">同意會員合約</td>
				<td id="right_title"><textarea name="membership_contract" rows="5" cols="60">會員規範會員規範會員規範會員規範會員規範會員規範會員規範會員規範會員規範會員規範會員規範會員規範會員規範會員規範會員規範會員規範會員規範會員規範會員規範會員規範會員規範會員規範會員規範會員規範會員規範會員規範會員規範會員規範會員規範會員規範會員規範會員規範會員規範會員規範會員規範會員規範會員規範會員規範會員規範會員規範會員規範會員規範會員規範會員規範會員規範會員規範會員規範會員規範會員規範會員規範會員規範會員規範會員規範會員規範會員規範會員規範會員規範會員規範會員規範會員規範會員規範會員規範會員規範會員規範會員規範會員規範會員規範會員規範會員規範會員規範會員規範會員規範會員規範會員規範會員規範會員規範會員規範會員規範會員規範會員規範會員規範會員規範</textarea></td>
			</tr>
			<tr>
				<td colspan="2" align="center"><input type="checkbox" name="confirm_contract" value="1">同意會員合約
					<br>
					<button class="submit_button" type="submit">資料送出</button> <button class="reset_button" type="reset">重新填寫</button></td>
			</tr>
			</tbody>
		</table>
	</form>
</body>
</html>
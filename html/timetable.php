<?php
/*
 * @file : timetable.php
 * @author : 임현 (hyunzion@gmail.com)
 * @since : 2018 - 03 - 17
 * @brief : 후보생 시간표 입력
 */
	$db_host = "localhost";
	$db_user = "root";
	$db_passwd = "";
	$db_name = "rotc";
	$conn = mysqli_connect($db_host,$db_user,$db_passwd,$db_name);

	if (mysqli_connect_errno($conn))
	{
		echo "데이터 베이스 연결 실패" . mysqli_connect_error();
	}
	else
	{
		echo "데이터 베이스 연결 성공";
	}

	// 문자셋 설정, utf8.
	mysqli_set_charset($conn, "utf8");

	// Data 삽입
	echo "<br>";

	$sql = "INSERT INTO timetable (OrderNum, RotcNum, Name, Year, Semester, Monday, Tuesday, Wednesday, Thursday, Friday) VALUES ('$_POST[OrderNum]', '$_POST[RotcNum]', '$_POST[Name]', '$_POST[Year]', '$_POST[Semester]', '$_POST[Monday]', '$_POST[Tuesday]', '$_POST[Wednesday]', '$_POST[Thursday]', '$_POST[Friday]')";

	if (mysqli_query($conn, $sql))
	{
		echo "등록이 완료되었습니다.";
	}
	else
	{
		echo "Error: " . $sql. "<br>" . mysqli_error($conn);
	}

	mysqli_close($conn);

	//echo ("<meta http-equiv='Refresh' content='22; URL=test.html'>");
?>
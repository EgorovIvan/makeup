<?php
	$mysqli = new mysqli("localhost", "cw58872_mysql", "qweasd123", "cw58872_mysql");

	if ($mysqli == false) {
		print("Ошибка: Невозможно подключиться к MySQL " . mysqli_connect_error());
	} else {
		$result = $mysqli->query('SELECT * FROM categories');

		while ($row = $result->fetch_array()) {
//			if ($row['oldprice']) {
//				$diff = $row['oldprice'] - $row['price'];
//				$row['percent'] = round($diff/($row['oldprice']/100));
//			}
			$CATEGORY[$row['order']] = $row;
		}
	}
	$mysqli->close();
	if (is_countable($CATEGORY) && count($CATEGORY) > 0) {
		foreach ($CATEGORY as $item) {
			?>
			<div><?= $item['category']?></div>
			<?
		}
	}

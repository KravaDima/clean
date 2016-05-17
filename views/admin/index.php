<div class="admin">
	<a href="admin/logout">Выход</a>
<h1>Заказы:</h1>
<table>
	<?php
		$list = $this->orderlist;
		foreach($list as $key => $value){
			echo "<tr>";
			echo "<td>$value[name]</td>";
			echo "<td>$value[tel]</td>";
			echo "<td>$value[address]</td>";
			switch($value[type]){
				case 1: $x = "Регулярная уборка"; break;
				case 2: $x = "Генеральная уборка"; break;
				case 3: $x = "Разовая уборка"; break;
			}
			echo "<td>$x</td>";
			echo "<td>$value[time]</td>";
			echo "</tr>";
		}
	?>
</table>
</div>
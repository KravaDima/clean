<div id="price">
	<h1>Расчёт цены и объёма работ</h1>
	<form action="<?php echo URL; ?>/price/order" name="order" method="POST">
		<div id="form_ub">
			<h1>Уборка подъезда *</h1>
			<input class="radio" id="c1" type="radio" name="type" value="1" required><label for="c1">Регулярная</label>
			<input class="radio" id="c2" type="radio" name="type" value="2"><label for="c2">Генеральная</label>
			<input class="radio" id="c3" type="radio" name="type" value="3"><label for="c3">Разовая</label>
			<!-- <h2>Дополнительно</h2>
			<input type="checkbox" name="dop1" value="d1">Входная дверь</br>
			<input type="checkbox" name="dop2" value="d2">Лифт</br>
			<input type="checkbox" name="dop3" value="d3">Окна на этаже</br>
			<input type="checkbox" name="dop4" value="d4">Двери в тамбур</br>
			<input type="checkbox" name="dop5" value="d5">Входную дверь в квартиру</br>
			<input type="checkbox" name="dop6" value="d6">Перилы</br>
 			<h2>Выберите дату и время</h2>
			<input type="date" name="calendar"> -->
		</div>
		<div id="form_ad">
			<!-- <h2>Адрес и контакты</h2> -->
			<label><h2>Улица, дом, корпус, номер квартиры: *</h2></label>
			<input id="address" type="text" name="address" required>
			<label><h2>Ваше имя: *</h2></label>
			<input type="text" name="name" required>
			<label><h2>Телефон: (в формате +380931234567) *</h2> </label>
			<input type="text" name="tel" value="+380" required>
		</div>
		<!-- <input class="link" type="submit" value="Отправить"/> -->
		<a href="javascript:checkFoo()">Оформить заказ</a>
	</form>
</div>
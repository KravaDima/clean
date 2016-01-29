function checkFoo(){
	var f = document.forms.order;
	var elm = f.elements;
	var isEmpty = false;
	var isChecked = false;
	for(var i=0; i<elm.length; i++){
		if(elm[i].type == "text"){
			if(elm[i].value == ""){
				elm[i].style.borderColor = "red";
				isEmpty = true;
			} else {
				elm[i].style.borderColor = "";
			}
		} else if(elm[i].type == "radio"){
			if (elm[i].checked) {
				isChecked = true;
			}
		}
	}
	if(isEmpty  || !(/\+380[0-9]{9}/.test(elm.tel.value))){
		alert("Заполните правильно все поля!");
	} else if(!isChecked){
		alert("Выберите \"Тип уборки\"!");
	} else {
		f.submit();
	}
}


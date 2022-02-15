// JavaScript Document
function remainLength(){
	//var objTextBox = document.getElementById('text1');
	//var MaxLength = objTextBox.maxLength;
	//var curLength = objTextBox.value.length;
	//document.getElementById('text2').innerHTML = (MaxLength - curLength) + ' of ' + MaxLength;
	if(document.formregister.txtIDCard.value.length == 13 ){
	document.getElementById('gen_button').disabled = false;
	/*document.getElementById('gen_button').style.color = "#ffffff";
	document.getElementById('gen_button').style.backgroundColor = "#3fd603";*/
	}
	else { 
	document.getElementById('gen_button').disabled = true; 
	/*document.getElementById('gen_button').style.color = "";
	document.getElementById('gen_button').style.backgroundColor = "";*/
	}
}

function chickCheckbox(){
	//if(document.Formnext2.raOption.checked == true){if(document.Formnext2.raOption[4].checked){
		if(document.getElementById('option4').checked){
			document.getElementById('lbSpecial').disabled = false;
		}
	else if(document.getElementById('option3').checked){
			document.getElementById('lbSpecial').disabled = true;
		}
	else if(document.getElementById('option2').checked){
			document.getElementById('lbSpecial').disabled = true;
		}
	else{
		document.getElementById('lbSpecial').disabled = true;
	}
}

function Parent(){
	//if(document.Formnext2.raOption.checked == true){if(document.Formnext2.raOption[4].checked){
		if(document.getElementById('optionpa3').checked){
			document.getElementById('snamepa').disabled = false;
			document.getElementById('fnamepa').disabled = false;
			document.getElementById('lnamepa').disabled = false;
			document.getElementById('telpa').disabled = false;
			document.getElementById('lbPaOccupation').disabled = false;
			document.getElementById('lbRelation').disabled = false;
		}
	else if(document.getElementById('optionpa2').checked){
			document.getElementById('snamepa').disabled = true;
			document.getElementById('fnamepa').disabled = true;
			document.getElementById('lnamepa').disabled = true;
			document.getElementById('telpa').disabled = true;
			document.getElementById('lbPaOccupation').disabled = true;
			document.getElementById('lbRelation').disabled = true;
		}
	else if(document.getElementById('optionpa1').checked){
			document.getElementById('snamepa').disabled = true;
			document.getElementById('fnamepa').disabled = true;
			document.getElementById('lnamepa').disabled = true;
			document.getElementById('telpa').disabled = true;
			document.getElementById('lbPaOccupation').disabled = true;
			document.getElementById('lbRelation').disabled = true;
		}

	else{
			//document.getElementById('snamepa').disabled = true;
			//document.getElementById('fnamepa').disabled = true;
			//document.getElementById('lnamepa').disabled = true;
			//document.getElementById('telpa').disabled = true;
			//document.getElementById('lbPaOccupation').disabled = true;
			//document.getElementById('lbRelation').disabled = true;
	}
}
	/*
	var sessionvalue = document.getElementById('nid_hidden').value;
	if(typeof(sessionvalue) == 'undefined' || sessionvalue == null ){
		document.getElementById('insertdata').disabled = true;
		document.getElementById('insertdata').style.color = "#ffffff";
		document.getElementById('insertdata').style.backgroundColor = "#3fd603";
	}
	else{
		document.getElementById('insertdata').disabled = false;
		document.getElementById('insertdata').style.color = "";
		document.getElementById('insertdata').style.backgroundColor = "";
	}
		
}
	
	
	function remainLength2(){
	//document.formfather.f5.value.length
	//document.getElementById('f5').length
	if(document.formfather.f5.value.length == 13 ){
	document.getElementById('insertdatafather').disabled = false;
	document.getElementById('insertdatafather').style.color = "#ffffff";
	document.getElementById('insertdatafather').style.backgroundColor = "#3fd603";
	}
	else { 
	document.getElementById('insertdatafather').disabled = true;
	document.getElementById('insertdatafather').style.color = "";
	document.getElementById('insertdatafather').style.backgroundColor = "";
	}
	
	
}

function remainLength3(){
	//document.formfather.f5.value.length
	//document.getElementById('f5').length
	if(document.formmather.m5.value.length == 13 ){
	document.getElementById('insertdatamather').disabled = false;
	document.getElementById('insertdatamather').style.color = "#ffffff";
	document.getElementById('insertdatamather').style.backgroundColor = "#3fd603";
	}
	else { 
	document.getElementById('insertdatamather').disabled = true;
	document.getElementById('insertdatamather').style.color = "";
	document.getElementById('insertdatamather').style.backgroundColor = "";
	}
	
	
}

function remainLength4(){
	//document.formfather.f5.value.length
	//document.getElementById('f5').length
	if(document.formother.o1.value.length != "" ){
	document.getElementById('insertother').disabled = false;
	document.getElementById('insertother').style.color = "#ffffff";
	document.getElementById('insertother').style.backgroundColor = "#3fd603";
	}
	else { 
	document.getElementById('insertother').disabled = true;
	document.getElementById('insertother').style.color = "";
	document.getElementById('insertother').style.backgroundColor = "";
	}
	
	
}

*/






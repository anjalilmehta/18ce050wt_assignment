function emailCheck(){
	var x = document.form.email.value
	if(x.indexOf("@")==-1){
		alert("Please input a valid email Id!")
		document.form.email.focus()
	}
}
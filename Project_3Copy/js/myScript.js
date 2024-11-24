function enableBtn() {
    if(document.getElementById("confirm deletion").checked)
	{
		document.getElementById("submit").disabled = false;
	}
	else
	{
		document.getElementById("submit").disabled = true;
	}
}


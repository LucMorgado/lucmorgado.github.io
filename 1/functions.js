	var showDrop = false;
	function drop(){
		var dropmenu = document.getElementById('dropmenu');

		if(showDrop){
			dropmenu.style = "display:none";
			showDrop = false;
		}else{
			dropmenu.style = "display:flex";
			showDrop = true;
		}

	}
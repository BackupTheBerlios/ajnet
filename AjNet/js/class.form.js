
	function switchElementState (elements)
	{
		elements = elements.split(",");

		for (element in elements) {
			if(elements[element].disabled == true) {
				document.forms['testForm'].elements[element].disabled = false;
			} else {
				document.forms['testForm'].elements[element].disabled = true;
			}
		}
	}
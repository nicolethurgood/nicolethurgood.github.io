function perform(action,id) {
	if (action.selectedIndex != 0) {
		location.href = "?a="+action.value+"."+id;
	} //end action.selectedIndex != 0 IF
} //end perform

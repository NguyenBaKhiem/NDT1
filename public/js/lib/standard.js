function NameStandard(name) {
	dname = name;
	ss = dname.split(' ');
	dname = "";
	for (i = 0; i < ss.length; i++)
		if (ss[i].length > 0) {
			if (dname.length > 0) dname = dname + " ";
			dname = dname + ss[i].substring(0, 1).toUpperCase();
			dname = dname + ss[i].substring(1).toLowerCase();
		}
	return dname;
}
function standar(word) {
	dname = word;
	ss = dname.split(' ');
	dname = "";
	for (i = 0; i < ss.length; i++)
		if (ss[i].length > 0) {
			if (dname.length > 0) dname = dname + " ";
			dname = dname + ss[i].substring(0, 1);
			dname = dname + ss[i].substring(1).toLowerCase();
		}
	return dname;
}
function checkwords(word) {
	dname = word;
	ss = dname.split(' ');
	dname = "";
	for (i = 0; i < ss.length; i++) {
		if(ss[i].length == ""){
			return false;
		}
	}
	return true;
}


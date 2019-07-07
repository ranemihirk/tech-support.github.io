function doc()
{
	var name1,a,pass,mail,dot,len,atrate,add;
	name1=document.myForm.first.value;
	name2=document.myForm.middle.value;
	name3=document.myForm.last.value;
	a=document.myForm.number.value;
	mail=document.myForm.email.value;
	add=document.myForm.prblm.value;
	dot=mail.indexOf(".");
	atrate=mail.indexOf("@");
	len=a.length;
	
	if(name1=="" || name2=="" || name3=="")
	{
		alert("Enter a name.");
		return false;
	}
	else if(len<10)
	{
		alert("Invalid number.");
		return false;
	}
	else if(dot==-1 || atrate==-1)
	{
		alert("Enter a valid email address.");
		return false;
	}
	else
	{
		alert("Information Successfully Submitted.");
		return true;
	}
	
}



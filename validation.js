function valid()
{
    var name = document.regg.fname.value;
    if(name == "")
    {
        alert("Please enter name");
        return false;
    }
    if(!isNaN(name))
    {
        alert("Please enter only characters for name ");
        return false;
    }

    var username = document.regg.username.value;
    if((username == ""))
    {
        alert("Please enter username");
        return false;
    }
    if(!(username.length>3))
    {
        alert("Please enter more than 3 characters for username");
        return false;
    }

    var password = document.regg.password.value;
    if(password == "")
    {
        alert("Please enter valid password");
        return false;
    }
	if(!(password.length>=8))
    {
        alert("Length of password must be more than or equal to 8 characters");
        return false;
    }

    var cpassword = document.regg.cpassword.value;
    if(cpassword == "" || !(cpassword==password))
    {
        alert("Please enter proper Password");
        return false;
    }
}

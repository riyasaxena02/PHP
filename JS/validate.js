function ValidateEmail(inputText)
{
    if (/^[a-zA-Z0-9.!#$%&'+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)$/.test(inputText.value))
     {
       return (true)
     }
       alert("You have entered an invalid email address!")
       return (false)
}

function ValidatePhone(inputText1,inputText2)
{
var phoneformat = /^\d{10}$/;
if(inputText1.value.match(phoneformat) && inputText2.value.match(phoneformat))
{
    return true;
}
else
{
alert("You have entered an invalid phone number!");
document.form1.to.focus();
return false;
}
}

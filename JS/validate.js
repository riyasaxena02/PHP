function ValidateEmail(inputText)
{
var mailformat = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
if(inputText.value.match(mailformat))
{
alert("Your details are Valid!");
document.appointment.email.focus();
return true;
}
else
{
alert("You have entered an invalid email address!");
document.appointment.email.focus();
return false;
}
}
function ValidatePhone(inputText1,inputText2)
{
var phoneformat = /^\d{10}$/;
if(inputText1.value.match(phoneformat) && inputText2.value.match(phoneformat))
{
    alert("Your details are Valid!");
    document.form1.to.focus();
    return true;
}
else
{
alert("You have entered an invalid phone number!");
document.form1.to.focus();
return false;
}
}

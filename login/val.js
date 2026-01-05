function validate123()
{
    //alert("welcome to js");
    var fn=document.getElementById('fname1').value;
    var email=document.getElementById('emailid1').value;
    var pwd=document.getElementById('pass').value;
    var pwd1=document.getElementById('password1').value;
    var no=document.getElementById('mobile1').value;
    //alert("welcome to js");
    if(fn=="")
    {
        //alert("error");
        document.getElementById('fn1').innerHTML="Full name field cannot be empty";
        document.getElementById('fn1').style.color="red";
        document.getElementById('fname1').style.borderColor="red";
        var vfn="false";
    }
    else
    {
        var fn123=/^[a-zA-Z ]*$/;
        //alert ("demooooooooooo");
        var e=fn123.test(fn);
       // alert(e);
        if(e==false)
        {
            document.getElementById('fname1').focus();
            document.getElementById('fn1').innerHTML="Full name must contain only letters";
            document.getElementById('fn1').style.color="red";
            document.getElementById('fname1').style.borderColor="red";
            vfn="false";
        }
        else
        {
            document.getElementById('fn1').innerHTML="";
            document.getElementById('fname1').style.borderColor="green";
            vfn="true";
        }
    }
    if(email=="")
    {
        document.getElementById('mail1').innerHTML="Email Address field cannot be empty";
        document.getElementById('mail1').style.color="red";
        document.getElementById('emailid1').style.borderColor="red";
        var vemail="false";
    }
    else
    {
        var em=/^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/;
        var a=em.test(email);
        if(a==false)
        {
            document.getElementById('emailid1').focus();
            document.getElementById('mail1').innerHTML="Invalid Email address Please Enter Valid Email Address";
            document.getElementById('mail1').style.color="red";
            document.getElementById('emailid1').style.borderColor="red";
            vemail="false";
        }
        else
        {
            document.getElementById('mail1').innerHTML="";
            document.getElementById('emailid1').style.borderColor="green";
            vemail="true";
        }
    }
    if(no=="")
    {
        document.getElementById('mno').innerHTML="Mobile  number cannot be empty";
        document.getElementById('mno').style.color="red";
        document.getElementById('mobile1').style.borderColor="red";
        var vno="false";
    }
    else
    {
        var mn=/^[0-9]{10}$/;
        var b=mn.test(no);
        if(b==false)
        {
            document.getElementById('mobile1').focus();
            document.getElementById('mno').innerHTML="Invalid Mobile Number Please Enter Valid Mobile Number";
            document.getElementById('mno').style.color="red";
            document.getElementById('mobile1').style.borderColor="red";
            vno="false";
        }
        else
        {

            document.getElementById('mno').innerHTML="";
            document.getElementById('mobile1').style.borderColor="green";
            vno="true";
        }
    }
    if(pwd=="")
    {
        document.getElementById('passw').innerHTML="Password field cannot be empty";
        document.getElementById('passw').style.color="red";
        document.getElementById('pass').style.borderColor="red";
        var vpwd="false";
    }
    else
    {
        re = /[0-9]/;
        re1 = /[a-z]/;
        // re2 = /[A-Z]/;
        re3=/[!@#\$%\^\&*+=._-]/;
        var a1=pwd.length<6;
        var a2=pwd.length>10;
        var a3=re.test(pwd);
        var a4=re1.test(pwd);
        // var a5=re2.test(pwd);
        var a6=re3.test(pwd);
        if(a1==true||(a2==true)||(a3==false)||(a4==false) || (a6==false))
        {
            document.getElementById('pass').focus();
            var msgpwd="Password length must be 6 to 10 charachters and must contain one small and capital letter a digit and special character";
            document.getElementById('passw').innerHTML=msgpwd;
            document.getElementById('passw').style.color="red";
            document.getElementById('pass').style.borderColor="red";
            var vpwd="false";
            //alert(vpwd);
        }
        else
        {
            var msgpwd="";
            document.getElementById('passw').innerHTML=msgpwd;
            document.getElementById('pass').style.borderColor="green";
            vpwd="true";
        }
    }
    if(pwd1=="")
    {
        document.getElementById('passw1').innerHTML="Confirm Password field cannot be empty";
        document.getElementById('passw1').style.color="red";
        document.getElementById('password1').style.borderColor="red";
        var vpwd1="false";
    }
    else
    {
        if(pwd1!=pwd)
        {
            document.getElementById('password1').focus();
            document.getElementById('passw1').innerHTML="Password and Confirm Password must be same";
            document.getElementById('passw1').style.color="red";
            document.getElementById('password1').style.borderColor="red";
            vpwd1="false";
        }
        else
        {
            document.getElementById('passw1').innerHTML="";
            document.getElementById('password1').style.borderColor="green";
            vpwd1="true";
        }
    }

    if(vemail=="true" && vno=="true" && vpwd=="true" && vpwd1=="true" && vfn=="true")
    {
        return true;
    }
    else
    {
        return false;
    } 
}
// function demo(y)
// {
//     // alert("test");
//     //  var url = "check_email.php?emailid=" + y.value ;
//      if (window.XMLHttpRequest)
//             {// code for IE7+, Firefox, Chrome, Opera, Safari
//                 xmlhttp=new XMLHttpRequest();
//             }
//             else
//             {// code for IE6, IE5
//                 xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
//             }
//             xmlhttp.open("GET",url,false);
//             xmlhttp.send(null);

//             if(xmlhttp.responseText!="success")
//             {
//                 document.getElementById('emailid1').value="";
//                 document.getElementById('emailid1').focus();
//                 // alert("Email ID is Already registered Please Enter a new Email address");   
//             }
// }
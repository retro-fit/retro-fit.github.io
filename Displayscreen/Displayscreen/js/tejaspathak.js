function updatetime()
{
    if(typeof d !== 'undefined')
    {
        d.setTime(d.getTime()+1000);
        var ele=document.getElementById("tn");
        if(ele!=null){ele.innerHTML=d.toLocaleTimeString();}
        ele=document.getElementById("status");
        if(ele!=null){ele.innerHTML= d.toLocaleTimeString() ;}
    }
}
setInterval(updatetime,1000);

function setval()
{
    document.getElementById('empid').name=document.getElementById('empid').value;
}

function ajaxhandler(data)
{
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("ajaxresult1").innerHTML = this.responseText;
            eval(document.getElementById("runscript").innerHTML);
        }
    };
    xmlhttp.open("GET", "ajaxhandler.php?"+data, true);
    xmlhttp.send();
}

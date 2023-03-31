
$("#payPalA").on('click', function(){ 
    color();
    document.getElementById("payPal").style.color = "#8FEB91";
})

$('#creditA').on('click', function(){ 
    color();
    document.getElementById("credit").style.color = "#8FEB91";
})
    
$('#bankA').on('click', function(){ 
    color();
    document.getElementById("bank").style.color = "#8FEB91";
})

$('#bitcoinA').on('click', function(){ 
    color();
    document.getElementById("bitcoin").style.color = "#8FEB91";
})

$('#achterafA').on('click', function(){ 
    color();
    document.getElementById("achteraf").style.color = "#8FEB91";
})

function color()
{
    document.getElementById("payPal").style.color = "black";
    document.getElementById("credit").style.color = "black";
    document.getElementById("bank").style.color = "black";
    document.getElementById("bitcoin").style.color = "black";
    document.getElementById("achteraf").style.color = "black";
}
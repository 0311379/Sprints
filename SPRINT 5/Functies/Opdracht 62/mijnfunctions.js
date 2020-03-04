function afmelden() {
    var antwoord = confirm("wilt u zich afmelden?");
    if (antwoord == true){
        alert("U wordt afgemeld!!!");
        window.close();
    }
}

var d = new Date()
var uur = getHours()
if (uur >=0 && uur <=11);
{
document.write("Goedemorgen!")
} 
if (uur >=12 && uur <=17);
{
    document.write("Goedemiddag!")
}
if (uur >17);
{
    document.write("Goedenavond!")
}
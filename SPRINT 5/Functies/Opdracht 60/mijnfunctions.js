function afmelden() {
    var antwoord = confirm("wilt u zich afmelden?");
    if (antwoord == true){
        alert("U wordt afgemeld!!!");
        window.close();
    }
}
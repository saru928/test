document.write ("問1<br>");

function menseki (hankei) {
    return (hankei * hankei * 3.14);
}
document.write (menseki(5) + "<br>");
document.write (menseki(7) + "<br>");
document.write (menseki(10) + "<br>");

document.write ("<br>問2<br>");

function ryoukin(otona,kodomo) {
    return otona*500 + kodomo*200 + "円です。";
}
document.write (ryoukin(2,4) + "<br>");
document.write (ryoukin(1,5) + "<br>");
document.write (ryoukin(3,7) + "<br>");
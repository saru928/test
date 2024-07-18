document.write ("問1の実行結果<br><br>");

for (var a = 1; a <= 5; a ++) {
    document.write("★");
}

document.write ("<br><br><br>");

document.write ("問2の実行結果<br><br>");

for (var b = 1; b <= 2; b ++) {
    for (var c = 1;  c <= 3; c ++) {
        document.write("★");
    }
    document.write("<br>");
}

document.write ("<br><br><br>");

document.write ("問3の実行結果<br><br>");

for (var b = 1; b <= 2; b ++) {
    for (var c = 1; c <= 5; c ++) {
        document.write("☆");
    }
    document.write("<br>");
}

document.write ("<br><br><br>");

document.write ("問4の実行結果<br><br>");

for (var b = 1; b <= 4; b ++) {
    for (var c = 1; c <= 5; c ++) {
        document.write("★");
    }
    document.write("<br>");
}

document.write("<br><br><br>");

document.write("問5の実行結果<br><br>");

for (var b = 1; b <= 4; b ++) {
    for (var c = 1; c <= 3; c ++) {
        document.write("★");
    }
    document.write("<br>");
}

document.write ("<br><br><br>");

document.write ("問6の実行結果<br><br>");

for (var b = 1; b <= 3; b ++) {
    for (var c = 1; c <= 3; c ++) {
        if (c % 2 == 1) {
            document.write("☆");
        }else {
            document.write("★");
        }
    }
    document.write("<br>");
}

document.write ("<br><br><br>");

document.write ("問7の実行結果<br><br>");

for (var b = 1; b <= 4; b ++) {
    for (var c = 1; c <= 5; c ++) {
        if (c % 2 == 0) {
            document.write("☆");
        }else {
            document.write("★");
        }
    }
    document.write ("<br>");
}

document.write ("<br><br><br>");

document.write ("問8の実行結果<br><br>");

for (var line = 1; line <= 5; line ++) {
    for (var star = 1; star <= line; star ++) {
        document.write ("★");
    }
    document.write ("<br>");
}
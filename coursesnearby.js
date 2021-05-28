var q1 = document.getElementsByName("q1")
function getAnswer(){
    for(i = 0; i < q1.length; i++) {
        if(q1[i].checked){
            return(q1[i].value);
            break
        }
    }
    return('quit')
}
function giveRec(){
    if (getAnswer() == "A"){
        alert("We recommend courses 2, 6 and 9")
    }
    if (getAnswer() == "B"){
        alert("We recommend courses 7, 8 and 10")
    }
    if (getAnswer() == "C"){
        alert("We recommend courses 1 and 4")
    }
    if (getAnswer() == "D"){
        alert("We recommend courses 3 and 5")
    }
}
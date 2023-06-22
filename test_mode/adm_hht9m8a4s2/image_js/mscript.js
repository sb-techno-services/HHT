// JavaScript Document
function ChangeBackground(what, color) {
what.style.backgroundColor=color;
}

function MouseOverMenu(what){
//what.style.cursor='hand';
ChangeBackground(what, "#D3E5ED");
}

function MouseOutMenu(what){
what.style.cursor='default';
ChangeBackground(what, "#ffffff");
}
function alertButton(){
    alert("Clicked!");
}
function color(){
    var color = document.getElementById("inputTest").value;
    // alert(color);
    // document.getElementById("d1").setAttribute("color",color);
    document.getElementById("d1").style.backgroundColor = color;
}
var x = 0;
var array = Array();
function Add_To_Array(){
    array[x] = document.getElementById("text1").value;
    alert("Element: " + array[x] + "Added at index " + x);
    x++;
    document.getElementById("text1").value = "";
}
function Display(){
    var e = "<hr/>";
    for(var t = 0; t<array.length; t++){
        e += "Element " +t + " = " + array[t] + "<hr/>"
    }
    document.getElementById("Result").innerHTML = e;
}
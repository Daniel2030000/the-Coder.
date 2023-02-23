function passValue(num){
    if(num < 5){
        console.log("Tiny")
    }
    else
    if(num < 10){
        console.log("Small");
    }else
    if(num < 15){
        console.log("Medium");
    }
    else
    if(num < 20){
        console.log("Larger");
    }
    else{
        console.log("Huge");
    }
};
console.log(passValue(44))
function loops(i){
    for(i = 10; i>=1; i--){
        console.log(i)
    }
};
console.log(loops());
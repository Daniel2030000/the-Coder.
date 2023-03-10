addNum<-function(x, y){
s<-x+y
print(s)
}
addNum(3,7)

addNum2<-function(x, y){
s<-x+y
return(s)
}
addNum(3,7)

addNum3<-function(x, y){
s<-x+y
}
addNum(3,7)

defaultArg<-function(x,y=5){
y<-y*2
s<-x+y
print(s)
}
defaultArg(3)
defaultArg(1:5)

functionArg<-function(x,y,type="sum"){
if(type =="sum"){
sum(x,y)
}else if(type=="mean"){
mean(x,y)}
}
functionArg(3,5)
functionArg(3,5,type="mean")

x<-1:3
for(y in x){
print("This is a function")
}

name<-function(x){
for(y in 1:x){
print("What is this!")
}}
name(100)

addNum<-function(x){
y=x+10
return(y)
}
addNum(5)

sum_3_items<-function(x,y,z,print_arg=TRUE)
{
if(print_arg){
print(x)
print(y)
print(z)
}
return(x+y+z)
}
sum1 <- sum_3_items(1,2,3) #arguments are printed
sum2 <- sum_3_items(10,20,30,print_arg = FALSE)

addition_function <- function(...){
total<-0

#list(...) extract the arguments to a list
for(value in list(...)){

#add each argument in ... to the total
total<- total+value
}
total
}
addition_function(2,4,6,8,10,12,14) #add several numbers
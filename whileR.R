#while(logical condition){commands}
x<-1
while(x<=10){
print(x)
x<-x+1}

x<-1
while(x<=10){
x<-x+1
print(x)}

storage<-c()
x<-1
while(x < 10){
storage<-c(storage,x)
x<-x+1 
}

i<-1
while(i<=2){
j<-1
while(j<=2){
print(c(i,j))
j<-j+1
}
i<-i+1
}

k<-1
while(k<=10){
print("Breaking News!")
k<-k+1
}

a<-1
while(a<=3){
b<-1
while(b<=3){
print(c("Daniel", "Baraka"))
b<-b+1
}
a<-a+1
}

d<-1
while(d<=7){
if(d%%5==0){
break}#breaks out of the while loop as soon the value of d is divisible by 5
print(paste("d is set to",d))
d<-d+1}
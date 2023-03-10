for(i in c(-3,6,2,5,9)){
print(i^2)}

for(i in 1:5){
print(i^2)}

x<-c(2,3,4,5,6)
for(i in x){
print(c(i,i^2))
}

storage<-numeric(5)
for(i in 1:5){
storage[i]<-i^2}
storage
mean(storage)

for(DegC in c(-3,6-2-5-9)){
DegF<-DegC*(9/5)+32
print(c(DegC,DegF))
}

for(temp in c(-4,5,10,-40,30))
if(temp>0){
print("Warm")
}else{
print("Not so warm")
}

temp<-c(-4,5,-6,10,-40,30)
for(n in temp){
if(n>0){
print("Warm")
}else{
print("Not so warm")
}

for(i in 1:3){
for(j in 1:2){
print(i+j)
}
}

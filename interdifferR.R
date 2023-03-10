f=expression(x^2+3*x)
D(f,"x")#first derivative
D(D(f,"x"),"x")#second derivative
D(D(D(f,"x"),"x"),"x")#third derivative

#integration
f<-function(x)(x^2+2*x+3)
integrate(f,0,2)
f<-function(x)(cos(28*x)+sin(50*x))^2
integrate(f,0,1)
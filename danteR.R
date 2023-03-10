height<-c(140,153,155,158,160,164,167,168,172,175)
weight<-c(62,58,50,65,75,73,78,82,86,85)
#regression of weight on height
model<-lm(weight~height)
model

#extract in the coefficient
c0<-coef(model)[1]
c1<-coef(model)[2]

#computing the predicting model
yhat<-c0+c1*height
yhat

#displaying the actual and the predicted values of weight
cbind(weight,yhat)
#computing the values of SSE

SSE<-0
for(i in 1:length(weight)){
SSE=SSE+(weight[1]-yhat[1])^2
}
print(SSE)
#computing MSE
MSE<-SSE/length(weight)
MSE
RMSE<-sqrt(MSE)
RMSE

#include <iostream>

using namespace std;
class AbstractEmployer{
void virtual AskforPromotion()= 0 ;
};
class Employer:AbstractEmployer{
private:
  string Name ;
  string company ;
  int Age ;
public:
    void setName (string name){//setter
    Name = name ;
    }
    string getName(){//getter
    return Name ;
    }
    void setCompany(string company){//setter
    Company = company ;
    }
    string getCompany(){//getter
    return Company ;
    }
    void setAge(int age){//setter
    Age = age ;
    }
    int getAge(){//getter
    return Age ;
    }
    Employer employer1 = Employer(string name ,string company ,int age){
    Name = name ;
    Company = company ;
    Age = age ;
    }
    void AskforPromotion(){
    if(Age >= 19){
        cout << Name << " Got promoted " << endl ;
    }
    else{
        cout << Name << " no promotion for you " << endl ;
    }
    }
};
int main()
{
    Employer employer1 = Employer("Daniel" ,"Amazon" ,20);
    employer1.AskforPromotion();

    Employer employer2 = Employer("Vivian" ,"YouTube" ,18);
    employer2.AskforPromotion();

    return 0;
}

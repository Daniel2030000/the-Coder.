class Point:

    def move(self):
        print("Move")

    def draw(self):
        print('Draw')


# object is an instance of a class
point1 = Point()
# can also have attributes
point1.x = 10
print(point1.x)
point1.draw()


# constructors a function that gets called at the time of creating an object
class Coordinates:
    def __init__(self, x, y): # constructor
        self.x = x
        self.y = y

    def dinate1(self):
        print("Yes!")

    def dinate2(self):
        print('NO!')


c = Coordinates(10, 20)
c.dinate1()
# you can also update
c.x = 11
print(c.x)
print(c.y)


# task
class Person:
    def name(self):
        print('Daniel Baraka')

    def talk(self):
        print('You talk too much!')


d = Person()
d.talk()
d.name()


# also
class Mtu:
    def __init__(self, name, age):
        self.name = name
        self.age = age

    def jina(self):
        print(f'I am {self.name} and I am {self.age} years old')


s = Mtu("Daniel Baraka", 20)
s.jina()

bob = Mtu('Shilingi', 80)
bob.jina()


# inheritance is a mechanism for reusing a class
class Mammal: # parent class
    def walk(self):
        print('Walk')

# child classes inheriting from the parent class
class Dog(Mammal):
    # pass  you can add methods to this class or use pass to mean nothing but don't leave it empty
    def bark(self):
        print('Barking ')


class Cat(Mammal):
    # pass
    def Mu(self):
        print('Annoying cat!')


dog1 = Dog()
dog1.walk()
dog1.bark()
cat1 = Cat()
cat1.walk()
cat1.Mu()
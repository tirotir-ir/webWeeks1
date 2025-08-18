// Class definition
class Dog {
  constructor(name, breed) {
    this.name = name;
    this.breed = breed;
  }

  bark() {
    console.log("Woof! Woof!");
  }
}

// Creating objects based on the class
let dog1 = new Dog("Buddy", "Golden Retriever");
let dog2 = new Dog("Max", "Labrador");

// Using the objects
console.log(dog1.name); // Output: Buddy
console.log(dog2.breed); // Output: Labrador

dog1.bark(); // Output: Woof! Woof!
dog2.bark(); // Output: Woof! Woof!

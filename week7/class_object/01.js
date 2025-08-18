// Class definition
class Person {
  constructor(name, age) {
    this.name = name;
    this.age = age;
  }

  greet() {
    console.log(`Hello, my name is ${this.name} and I'm ${this.age} years old.`);
  }
}

// Creating objects based on the class
let person1 = new Person("Alice", 25);
let person2 = new Person("Bob", 30);

// Calling the greet method on the objects
person1.greet(); // Output: Hello, my name is Alice and I'm 25 years old.
person2.greet(); // Output: Hello, my name is Bob and I'm 30 years old.


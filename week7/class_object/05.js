// Class definition for Student
class Student {
  constructor(name, age) {
    this.name = name;
    this.age = age;
    this.favoriteSubjects = [];
  }

  addFavoriteSubject(subject) {
    this.favoriteSubjects.push(subject);
  }

  displayInfo() {
    console.log(`Name: ${this.name}`);
    console.log(`Age: ${this.age}`);
    console.log(`Favorite Subjects: ${this.favoriteSubjects.join(", ")}`);
  }
}

// Creating objects based on the Student class
let student1 = new Student("Alice", 18);
let student2 = new Student("Bob", 20);

// Using the objects
student1.addFavoriteSubject("Math");
student1.addFavoriteSubject("History");
student2.addFavoriteSubject("Physics");

student1.displayInfo();
// Output: Name: Alice, Age: 18, Favorite Subjects: Math, History

student2.displayInfo();
// Output: Name: Bob, Age: 20, Favorite Subjects: Physics

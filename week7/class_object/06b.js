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

  removeFavoriteSubject(subject) {
    const index = this.favoriteSubjects.indexOf(subject);
    if (index !== -1) {
      this.favoriteSubjects.splice(index, 1);
      console.log(`${subject} removed from ${this.name}'s favorite subjects.`);
    } else {
      console.log(`${this.name} doesn't have ${subject} as a favorite subject.`);
    }
  }

  hasFavoriteSubject(subject) {
    return this.favoriteSubjects.includes(subject);
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

console.log(student1.hasFavoriteSubject("Math")); // Output: true
console.log(student2.hasFavoriteSubject("Biology")); // Output: false

student1.removeFavoriteSubject("Math");
student1.displayInfo();
// Output: Name: Alice, Age: 18, Favorite Subjects: History

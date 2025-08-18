// Class definition for Book
class Book {
  constructor(title, author, pages) {
    this.title = title;
    this.author = author;
    this.pages = pages;
  }

  displayInfo() {
    console.log(`Title: ${this.title}`);
    console.log(`Author: ${this.author}`);
    console.log(`Pages: ${this.pages}`);
  }
}

// Creating objects based on the Book class
let book1 = new Book("The Great Gatsby", "F. Scott Fitzgerald", 180);
let book2 = new Book("To Kill a Mockingbird", "Harper Lee", 281);

// Using the objects
book1.displayInfo(); // Output: Title: The Great Gatsby, Author: F. Scott Fitzgerald, Pages: 180
book2.displayInfo(); // Output: Title: To Kill a Mockingbird, Author: Harper Lee, Pages: 281

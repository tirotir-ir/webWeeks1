// Class definition for Book
class Book {
  constructor(title, author, pages) {
    this.title = title;
    this.author = author;
    this.pages = pages;
    this.isRead = false; // Initially, the book is not read
  }

  isThick() {
    return this.pages > 500;
  }

  setTitle(newTitle) {
    this.title = newTitle;
  }

  markAsRead() {
    this.isRead = true;
  }

  displayInfo() {
    console.log(`Title: ${this.title}`);
    console.log(`Author: ${this.author}`);
    console.log(`Pages: ${this.pages}`);
    console.log(`Read Status: ${this.isRead ? "Read" : "Not Read"}`);
  }
}

// Creating objects based on the Book class
let book1 = new Book("The Great Gatsby", "F. Scott Fitzgerald", 180);
let book2 = new Book("To Kill a Mockingbird", "Harper Lee", 281);

// Using the objects
book1.displayInfo();
// Output:
// Title: The Great Gatsby
// Author: F. Scott Fitzgerald
// Pages: 180
// Read Status: Not Read

book1.markAsRead();
book1.displayInfo();
// Output:
// Title: The Great Gatsby
// Author: F. Scott Fitzgerald
// Pages: 180
// Read Status: Read

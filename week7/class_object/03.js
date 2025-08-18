// Class definition for Car
class Car {
  constructor(make, model, year, color) {
    this.make = make;
    this.model = model;
    this.year = year;
    this.color = color;
    this.speed = 0;
  }

  accelerate() {
    this.speed += 10;
    console.log(`The ${this.color} ${this.make} ${this.model} is accelerating. Current speed: ${this.speed} km/h.`);
  }

  brake() {
    if (this.speed > 0) {
      this.speed -= 10;
      console.log(`The ${this.color} ${this.make} ${this.model} is braking. Current speed: ${this.speed} km/h.`);
    } else {
      console.log(`The ${this.color} ${this.make} ${this.model} is already stopped.`);
    }
  }
}

// Creating objects based on the Car class
let car1 = new Car("Toyota", "Corolla", 2022, "Blue");
let car2 = new Car("Honda", "Civic", 2023, "Red");

// Interacting with the objects
car1.accelerate(); // Output: The Blue Toyota Corolla is accelerating. Current speed: 10 km/h.
car2.accelerate(); // Output: The Red Honda Civic is accelerating. Current speed: 10 km/h.

car1.accelerate(); // Output: The Blue Toyota Corolla is accelerating. Current speed: 20 km/h.
car1.brake();      // Output: The Blue Toyota Corolla is braking. Current speed: 10 km/h.

car2.brake();      // Output: The Red Honda Civic is braking. Current speed: 0 km/h.

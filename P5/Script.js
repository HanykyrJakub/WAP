const langs = [
  "Hallo World",
  "Jakub Hanykýř",
  "Zdeněk Šťastný",
  "Vorlovic",
  "Zdravo svijete",
  "Hola món",
  "Kumusta Kalibutan",
  "Ahoj světe",
  "Helo Byd",
  "Hej Verden",
  "Hallo Welt",
  "Bistro 256",
  "Jakub Pavlovic",
  "Hello World",
  "Hola Mundo",
  "Tere, Maailm",
  "Kaixo Mundua",
  "Phil Schaller",
];

let charSize = 20;
let streams = [];

class Char {
  constructor(value, x, y, speed) {
    this.value = value;
    this.x = x;
    this.y = y;
    this.speed = speed;
  }

  draw() {
    // 10 percent chance of flickering a number instead
    if (random(100) < 10) {
      fill(120, 30, 100);
      text(round(random(9)), this.x, this.y);
    } else {
      text(this.value, this.x, this.y);
    }

    // Fall down and loop back to top
    this.y = this.y > height ? -charSize : this.y + this.speed;
  }
}

class Stream {
  constructor(text, x) {
    // Random initial vertical position offset (in pixels)
    const startY = random(-height, 0);
    const speed = random(2, 10);
    this.chars = [];

    // Loop from 0 to text.length - 1
    for (let i = 0; i < text.length; i++) {
      this.chars.push(
        new Char(text[i], x, startY + i * charSize, speed)
      );
    }
  }

  draw() {
    this.chars.forEach((c, i) => {
      // Highlight the lead character bright white/light-green
      if (i === this.chars.length - 1) {
        fill(120, 30, 100);
      } else {
        fill(120, 100, 90);
      }

      c.draw();
    });
  }
}

function createStreams() {
  for (let i = 0; i < width; i += charSize) {
    streams.push(new Stream(random(langs), i));
  }
}

function reset() {
  streams = [];
  createStreams();
}

function setup() {
  createCanvas(windowWidth, windowHeight);
  frameRate(20);
  colorMode(HSB);
  noStroke();
  textSize(charSize);
  textFont("monospace");
  background(0);
  reset();
}

function draw() {
  // Semi-transparent background creates the classic trailing motion blur effect
  background(0, 0, 0, 0.4);
  streams.forEach((s) => s.draw());
}

function windowResized() {
  resizeCanvas(windowWidth, windowHeight);
  background(0);
  reset();
}

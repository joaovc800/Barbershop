const ulSquares = document.querySelector("ul.squares");

for (let i = 0; i < 11; i++){
    const li = document.createElement("li");

    const ramdom = (min, max) => Math.random() * (max - min) + min;

    const size = Math.floor(ramdom(10, 120));

    const position = ramdom(1, 99);

    const delay = ramdom(5, 0.1);
    const duration = ramdom(24,12);

    li.style.width = `${size}px`;
    li.style.height = `${size}px`;
    li.style.bottom = `-${size}px`;

    li.style.left = `${position}%`;

    li.style.animationDelay = `${delay}s`;
    li.style.animationDuration = `${duration}s`;

    li.style.animationTimingFunction = `cubic-bezier()${Math.random()},${Math.random()},${Math.random()},${Math.random()},`

    ulSquares.appendChild(li);
}
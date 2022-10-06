const NB_PARTICLES = 100;
let particles_list = [];

function createParticles() {
    for (let i = 0; i < NB_PARTICLES; i++) {
        const div = document.createElement('div');
        const colors = ["red","blue","green","yellow","orange"];
        const randomColor = colors[Math.round(random(0, colors.length))];
        const size= random(10,100)

        particles_list.push({
            x: random(0, window.innerWidth),
            y: random(0, window.innerHeight),
            speedX: random (-5,5),
            speedY: random(-2,2),
            width:  size,
            height: size,
            color:randomColor,
            DOMElement: div
        });

        const particlesContainer = document.querySelector('.particles');

        particlesContainer.appendChild(div);
    }
}

function renderParticles() {

    particles_list.forEach(p => {
        p.DOMElement.style.width = `${p.width}px`;
        p.DOMElement.style.height = `${p.height}px`;
        p.DOMElement.style.backgroundColor = p.color;
        p.DOMElement.style.transform = `translate(${p.x}px, ${p.y}px)`;
        p.DOMElement.style.borderRadius = '100px';
    });

}

function animateParticles() {
    particles_list.forEach(p => {
        
        p.x += p.speedX;
        p.y += p.speedY;

        if (p.x > window.innerWidth || p.x < 0) {
            p.speedX *= -1;
        }
        if (p.y > window.innerHeight || p.y < 0) {
            p.speedY *= -1;
        }

    });
}

function boucleAnimation() {
    requestAnimationFrame(boucleAnimation); // ... qui se répète ...

    animateParticles();
    renderParticles();
}

createParticles();
boucleAnimation(); // Lancement de la boucle d'animation
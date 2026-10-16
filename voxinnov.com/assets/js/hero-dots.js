
document.addEventListener('DOMContentLoaded', function() {
    const section = document.querySelector('.hero__area-2');
    const canvas = document.getElementById('hero-dots');
    if (!section || !canvas) return;

    const scene = new THREE.Scene();
    const camera = new THREE.PerspectiveCamera(75, section.offsetWidth / section.offsetHeight, 0.1, 1000);
    const renderer = new THREE.WebGLRenderer({ canvas: canvas, alpha: true, antialias: true });
    
    const updateSize = () => {
        const width = section.offsetWidth;
        const height = section.offsetHeight;
        renderer.setSize(width, height);
        camera.aspect = width / height;
        camera.updateProjectionMatrix();
    };
    updateSize();
    renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2));

    // Significantly larger grid to cover the full section
    const amountX = 100;
    const amountY = 100;
    const numParticles = amountX * amountY;
    const positions = new Float32Array(numParticles * 3);
    const colors = new Float32Array(numParticles * 3);

    const pinkColor = new THREE.Color('#ed1c24');
    const gap = 0.5; // Increased gap for more coverage

    for (let i = 0, ix = 0; ix < amountX; ix++) {
        for (let iy = 0; iy < amountY; iy++) {
            positions[i * 3] = ix * gap - ((amountX * gap) / 2); // x
            positions[i * 3 + 1] = 0; // y
            positions[i * 3 + 2] = iy * gap - ((amountY * gap) / 2); // z

            colors[i * 3] = pinkColor.r;
            colors[i * 3 + 1] = pinkColor.g;
            colors[i * 3 + 2] = pinkColor.b;
            i++;
        }
    }

    const geometry = new THREE.BufferGeometry();
    geometry.setAttribute('position', new THREE.BufferAttribute(positions, 3));
    geometry.setAttribute('color', new THREE.BufferAttribute(colors, 3));

    const material = new THREE.PointsMaterial({
        size: 0.05,
        vertexColors: true,
        transparent: true,
        opacity: 0.4,
        sizeAttenuation: true
    });

    const particles = new THREE.Points(geometry, material);
    scene.add(particles);

    // Reposition camera for better full-section coverage
    camera.position.y = 8;
    camera.position.z = 25;
    camera.rotation.x = -0.4;

    let mouseX = 0;
    let mouseY = 0;
    let count = 0;

    window.addEventListener('mousemove', (event) => {
        mouseX = (event.clientX / window.innerWidth - 0.5);
        mouseY = (event.clientY / window.innerHeight - 0.5);
    });

    const animate = function () {
        requestAnimationFrame(animate);

        const positions = particles.geometry.attributes.position.array;

        let i = 0;
        for (let ix = 0; ix < amountX; ix++) {
            for (let iy = 0; iy < amountY; iy++) {
                // Larger, smoother waves
                positions[i * 3 + 1] = (Math.sin((ix + count) * 0.2) * 1.5) +
                                       (Math.sin((iy + count) * 0.2) * 1.5);
                i++;
            }
        }

        particles.geometry.attributes.position.needsUpdate = true;

        // Interactive movement
        particles.rotation.y += (mouseX * 0.1 - particles.rotation.y) * 0.05;
        particles.position.x += (mouseX * 5 - particles.position.x) * 0.02;
        particles.position.z += (-mouseY * 5 - particles.position.z) * 0.02;

        count += 0.05;

        renderer.render(scene, camera);
    };

    animate();

    window.addEventListener('resize', updateSize);
});

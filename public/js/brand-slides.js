const images = document.querySelectorAll('.carousel-image')
const radius = 1000
const progress = {
  value: 0
}
const carousel = document.querySelector('.carousel')

Observer.create({
  target: carousel,
  type: "wheel,pointer,drag,touch",
  onPress: (self) => {
    carousel.style.cursor = 'grabbing'
  },
  onRelease: (self) => {
    carousel.style.cursor = 'grab'
  },
  onChange: (self) => {
    const p = self.event.type === 'wheel' ? self.deltaY * -.05 : self.deltaX * .05;
    progress.value += p;
  }
})

gsap.to(progress, {
  value: "+=1",
  duration: 20,
  ease: "none",
  repeat: -1
});

const animate = () => {
  images.forEach((image, index) => {
    const theta = index / images.length - progress.value;
    const angle = theta * Math.PI * 2;

    const x = -Math.sin(angle) * radius;
    const y = Math.cos(angle) * radius;

    const isHovered = image.matches(':hover');
    const scale = isHovered ? 1.15 : 1;

    // Hanya tampilkan gambar yang ada di setengah belakang wheel
    if (y < 0) {
      image.style.opacity = 1;
      image.style.pointerEvents = 'auto';
    } else {
      image.style.opacity = 0;
      image.style.pointerEvents = 'none';
    }

    image.style.transform = 
      `translate3d(${x}px, 0px, ${y}px) rotateY(${angle * 180 / Math.PI}deg) scale(${scale})`;
  });
};
gsap.ticker.add(animate)


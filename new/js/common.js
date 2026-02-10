
if (window.innerWidth > 768) {
  let horizontalSection = document.querySelector('#product-banner');

  gsap.to('#product-banner', {
      x: () => horizontalSection.scrollWidth * -1,
      xPercent: 100,
      scrollTrigger: {
          trigger: '#product-banner',
          start: 'center-=30px center',
          end: '+=500px',
          pin: '#product-banner',
          scrub: true,
          ease: 'none',
          // markers:true,
          invalidateOnRefresh: true,
      }
  });

}


    // <!-- ------------------------------for mouse positioning--------------------------------------------- -->

    const parallaxBanner = document.querySelector('#product-banner');
    const parallaxBannerImgs = document.querySelectorAll('.banner-product-img img');



    parallaxBanner.addEventListener('mousemove', (e) => {
        const centerX = parallaxBanner.offsetWidth / 2;
        const centerY = parallaxBanner.offsetHeight / 2;
        const mouseX = e.clientX - parallaxBanner.getBoundingClientRect().left;
        const mouseY = e.clientY - parallaxBanner.getBoundingClientRect().top;

        parallaxBannerImgs.forEach((image, index) => {
            const x = (mouseX - centerX) * (index + 1) * 0.02;
            const y = (mouseY - centerY) * (index + 1) * 0.02;
            image.style.transform = `translate(${x}px, ${y}px)`;
        });
    });
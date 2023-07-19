const myCarouselElement = document.querySelector('#myCarousel1')

const carousel = new bootstrap.Carousel(myCarouselElement, {
  interval: 2000,
  wrap: true
})
const myCarouselElement = document.querySelector('#myCarousel1')

const carousel = new bootstrap.Carousel(myCarouselElement, {
  interval: 1000,
  wrap: true
})
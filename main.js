var lineDrawing = anime({
  targets: '#lineDrawing .lines path',
  strokeDashoffset: [anime.setDashoffset, 0],
  easing: 'easeInOutSine',
  duration: 1500,
  delay: function(el, i) { return i * 250 },
  direction: 'alternate',
  loop: true
});

var bg = anime({
  targets: '#bg',
  backgroundColor: ['rgb(192, 255, 241)', 'rgb(193, 255, 192)', 'rgb(255, 239, 192)'],
  easing: 'easeInOutSine',
  duration: 5000,
  direction: 'alternate',
  loop: true
});

// var loginLogo = anime({
//   targets: 'div#logo',
//   transitionY: 250,
//   opacity: 0,
//   duration: 300,
//   delay: 3500,
//   easing: 'easeInOutQuad'
// });

var loginLogo = anime({
  targets: 'div#logo',
  translateY: {
    value: -200,
    duration: 800
  },
  opacity: {
    value: ['0', '0.5'],
    duration: 1800,
    easing: 'easeInOutSine'
  },
  scale: {
    value: 0.5,
    duration: 1600,
    delay: 800,
    easing: 'easeInOutQuart'
  },
  delay: 250 // All properties except 'scale' inherit 250ms delay
});
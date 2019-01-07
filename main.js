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

// var loginLogo = anime({
//   targets: '#main .container .row .navbar',
//   translateY: {
//     value: [200, 0],
//     duration: 400
//   },
//   opacity: {
//     value: ['0', '1'],
//     duration: 800,
//     easing: 'easeInOutSine'
//   },
//   delay: 100 // All properties except 'scale' inherit 250ms delay
// });

// *********<start>*********
var loginLogo = anime({
  targets: '.main .section',
  translateY: {
    value: [50, 0],
    duration: 400
  },
  opacity: {
    value: 1,
    duration: 800,
    easing: 'easeInOutSine'
  },
  delay: function(el, i) { return i * 250 } // All properties except 'scale' inherit 250ms delay
});

var loginLogo = anime({
  targets: '.main .section',
  translateY: [50, 0],
    duration: 800,
    easing: 'easeInOutSine',
  delay: function(el, i) { return i * 250 }, // All properties except 'scale' inherit 250ms delay
});
var loginLogo2 = anime({
  targets: '.main .section',
  opacity: 1,
    duration: 800,
    easing: 'easeInOutSine',
  delay: function(el, i) { return i * 250 }, // All properties except 'scale' inherit 250ms delay
});

var loginLogo = anime({
  targets: 'ul a li',
  translateY: [50, 0],
  opacity: [0, 1],
    duration: 800,
    easing: 'easeInOutSine',
  delay: function(el, i) { return i * 250 }, // All properties except 'scale' inherit 250ms delay
});
// *********<finish>*********

var editbtn = anime({
  targets: '#Editbtn',
  opacity: 0,
  duration: 0,
  easing: 'easeInOutSine',
});
var i = 0;
function enable_edit(){
  if (i % 2 == 0) {
    var myElement = document.getElementById("Edit").disabled = false;
    var editbtn = anime({
      targets: '#Editbtn',
      translateY: [25, 0],
      opacity: [0, 1],
      duration: 800,
      easing: 'easeInOutSine',
    });
  }else{
    var myElement = document.getElementById("Edit").disabled = true;
    var editbtn = anime({
      targets: '#Editbtn',
      opacity: 0,
      duration: 0,
      easing: 'easeInOutSine',
    });
  }
  i++;
}
var j = 0;
function enable_date(){
  if (j % 2 == 0) {
    var myElement = document.getElementById("date").disabled = false;
  }else{
    var myElement = document.getElementById("date").disabled = true;
  }
  j++;
}
var k = 0;
function show_massage_box(){
  if (k % 2 == 0) {
    var myElement = document.getElementById("chatBox").style.height = "300px";
  }else{
    var myElement = document.getElementById("chatBox").style.height = "0";
  }
  k++;
}
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
var setting = anime (
        {
            targets : 'div.main.container.row.navbar a' , // I dont know what im doing 
            opacity : 
                    {
                        value : ['0' , '1'] ,
                        duration : 1500 ,
                        delay : 650 ,
                        easing : 'easeInOutSine' ,
                    } ,
           backgroundColor: [rgb(255 , 255 , 255) , rgb(209 , 208 ,208)] ,
        }
        ) ;

var division = anime(
        {
            targets : 'div.container.row.main w-100' ,
            display : none ,
            duration : 1600 ,
            delay : 800 ,
            easing : inline ,
            display : block 
        }
        ) ;
var li = anime (
        {
            targets : 'div.container.row.main w-100.col-md-4 section section1.row.ul.li  ' ,
             opacity : 
                    {
                        value : ['0' , '1'] ,
                        duration : 1600 ,
                        delay : 800 ,
                        easing : 'easeInOutSine' ,
                    } ,
        }
        ) ;

var li2 = anime(
        {
            targets :' div.container.row.main w-100.col-md-4 section section2.row.ul.li' ,
             opacity : 
                    {
                        value : ['0' , '1'] ,
                        duration : 2000 ,
                        delay : 1000 ,
                        easing : 'easeInOutSine' ,
                    } ,
        }
        );

var li3 = anime(
        {
            targets : 'div.container.row.main w-100.col-md-4 section section3.row.ul.li' ,
             opacity : 
                    {
                        value : ['0' , '1'] ,
                        duration : 2400 ,
                        delay : 1200 ,
                        easing : 'easeInOutSine' ,
                    } ,
        }
        ) ;
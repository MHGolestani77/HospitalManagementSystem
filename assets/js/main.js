var loginLogo = anime({
  targets: 'div#login div.row div img',
  opacity: 1,
  duration: 200,
  easing: 'easeInOutQuad'
});

var loginTitle = anime({
  targets: 'div#login div.row div p',
  opacity: 1,
  duration: 200,
  delay: 400,
  easing: 'easeInOutQuad'
});

var loginForm = anime({
  targets: 'div#login div.row div div.login',
  opacity: 1,
  duration: 200,
  delay: 600,
  easing: 'easeInOutQuad'
});

var loginFormAlert = anime({
  targets: 'div#login div.row div div.login form div.alert.alert-danger',
  opacity: 0,
  delay: 600,
  direction: 'alternate',
  loop: true,
  easing: 'easeInOutQuad'
});

var main = anime({
  targets: '#main .container',
  opacity: 1,
  duration: 200,
  easing: 'easeInOutQuad'
});



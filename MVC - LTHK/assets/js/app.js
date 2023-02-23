// Initiation librairie AOS
AOS.init({
});

// ---------FUNCTIONS ---------


// querySelector 
function search(e) {
  return document.querySelector(e);
}
function searchAll(e) {
  return document.querySelectorAll(e);
}
// classList 
function addClass(target, e) {
  return target.classList.add(e);
}
function removeClass(target, e) {
  return target.classList.remove(e);
}


try {
  $(document).ready(function () {
    'use strict';

    // --------- LAYOUT SCRIPTS ---------


    // SCROLL-TO-TOP 
    window.addEventListener('scroll', () => {
      (window.scrollY > 100) ? $('.to-top').addClass('active') : $('.to-top').removeClass('active')
    })


    // Color switch de la navbar au scroll
    window.addEventListener('scroll', () => {
      if (window.scrollY > 100) {
        $('.main-header').css('background-color', "var(--peach)");
        $('.main-header').css('boxShadow', '0 8px 20px rgba(0,0,0,.25)');
      } else {
        $('.main-header').css('background-color', "transparent");
        $('.main-header').css('boxShadow', 'none');
      }
    })


    // Page Loader
    setTimeout(() => {
      $('.loader').css('display', 'none')
    }, 300)


    // Menu hamburger
    $('.mobile-nav').click(function () {
      $('.mobile-nav__wrapper').addClass('expanded');
      $('.mobile-nav__content').addClass('expanded');
    });
    $('.mobile-nav__overlay').click(function () {
      $('.mobile-nav__wrapper').removeClass('expanded');
    });
    $('.mobile-nav__close').click(function () {
      $('.mobile-nav__wrapper').removeClass('expanded');
    });


    // --------- PAGE SCRIPTS ---------


    let page = window.location.href;

    // INDEX.HTLM Swiper slider
    const swiper = new Swiper('.swiper', {
      // Optional parameters
      slidesPerView: 1,
      loop: true,
      autoplay: {
        delay: 4700,
      },
      // Navigation arrows
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });


    // CHECKOUT.HTML add shiping address 
    if (page.includes('checkout')) {
      let shippingInput = searchAll('.additionnal-input');
      let shippingRequired = searchAll('.additionnal-required');

      const checkbox = search('#different-address');
      if (checkbox.checked) {
        addClass(search('.checkout__title'), 'additionnal-address')
        shippingInput.forEach((input) => {
          input.style.backgroundColor = '#f1f1f5';
          input.removeAttribute('disabled', '');
        })
        shippingRequired.forEach((input) => {
          input.setAttribute('required', '');
        })
      } else {
        removeClass(search('.checkout__title'), 'additionnal-address')
        shippingInput.forEach((input) => {
          input.setAttribute('disabled', '');
          input.style.backgroundColor = '#CBCDCB';
        })
        shippingRequired.forEach((input) => {
          input.removeAttribute('required', '');
        })
      }

      checkbox.addEventListener('click', () => {
        shippingInput.forEach((input) => {
          if (input.hasAttribute('disabled')) {
            input.removeAttribute('disabled', '');
            input.style.backgroundColor = '#f1f1f5';
          } else {
            input.setAttribute('disabled', '');
            input.style.backgroundColor = '#CBCDCB';
          }
        })
        shippingRequired.forEach((input) => {
          if (input.hasAttribute('required')) {
            input.removeAttribute('required', '');
          } else {
            input.setAttribute('required', '');
          }
        })
      })
    }


    // FINAL-CART.HTML shipping selection 
    if ($('#relay-shipping').attr('checked')) {
      $('.shipping-advice').css('visibility', 'hidden');
    }
    if ($('#home-shipping').attr('checked')) {
      $('.shipping-advice').css('visibility', 'hidden');
    }


    // Non-identical password alert message  
    $('.cust-password').on('keyup', () => {
      if ($('.cust-password').val() != $('.cust-password-bis').val()) {
        $('.pass-verify').removeClass('d-none').addClass('d-block');
        $('.pass-verify-ok').removeClass('d-block').addClass('d-none');
        $('#info-update').attr('disabled', '');
        $('#info-update').css('background-color', 'grey');
      } else {
        $('.pass-verify').removeClass('d-block').addClass('d-none');
        $('.pass-verify-ok').removeClass('d-none').addClass('d-block');
        if ($('.cust-password-bis').val().length == 0) {
          $('.pass-verify').addClass('d-none');
          $('.pass-verify-ok').addClass('d-none');
        }
        if ($('.cust-password').val().length > 0) {
          $('#info-update').removeAttr('disabled');
          $('#info-update').css('background-color', '#a2caf6');
        }
      }
    })
    $('.cust-password-bis').on('keyup', () => {
      if ($('.cust-password').val() != $('.cust-password-bis').val()) {
        $('.pass-verify').removeClass('d-none').addClass('d-block');
        $('.pass-verify-ok').removeClass('d-block').addClass('d-none');
        $('#info-update').attr('disabled', '');
        $('#info-update').css('background-color', 'grey');
      } else {
        $('.pass-verify').removeClass('d-block').addClass('d-none');
        $('.pass-verify-ok').removeClass('d-none').addClass('d-block');
        if ($('.cust-password-bis').val().length == 0) {
          $('.pass-verify').addClass('d-none');
          $('.pass-verify-ok').addClass('d-none');
        }
        if ($('.cust-password-bis').val().length > 0) {
          $('#info-update').removeAttr('disabled');
          $('#info-update').css('background-color', '#a2caf6');
        }
      }
    })


    // PASSWORD Show/Hide 
    $('.show').on('click', () => {
      $('.pass-reveal').each(function () {
        if ($(this).is('input:password')) {
          $(this).get(0).type = 'text';
          $('.show').html('<i class="fa-solid fa-eye-slash"></i>');
          $('.show').css('color', '#f61db8');
        } else {
          $(this).get(0).type = 'password';
          $('.show').html('<i class="fa-sharp fa-solid fa-eye"></i>');
          $('.show').css('color', '#222');
        }
      })
    })


    // LOGIN.HTML Signup Password Show/Hide 
    $('.show-2').on('click', () => {
      $('.pass-reveal-2').each(function () {
        if ($(this).is('input:password')) {
          $(this).get(0).type = 'text';
          $('.show-2').html('<i class="fa-solid fa-eye-slash"></i>');
          $('.show-2').css('color', '#f61db8');
        } else {
          $(this).get(0).type = 'password';
          $('.show-2').html('<i class="fa-sharp fa-solid fa-eye"></i>');
          $('.show-2').css('color', '#222');
        }
      })
    })


    // LOGIN.HTML switch blocks
    $('.login-display').click(function () {
      $('#logincard').removeClass('d-none');
      $('#loginform').addClass('d-none');
      $('#logupcard').addClass('d-none');
      $('#logupform').removeClass('d-none');
      $('.page-header_subtitle').html("Inscription");
      $('.page-header_title').html("INSCRIPTION");
    });
    $('.signin-display').click(function () {
      $('#logincard').addClass('d-none');
      $('#loginform').removeClass('d-none');
      $('#logupcard').removeClass('d-none');
      $('#logupform').addClass('d-none');
      $('.page-header_subtitle').html("Connexion");
      $('.page-header_title').html("CONNEXION");
    });


    // ACCOUNT.INFORMATIONS.HTML delete advice
    $('.delete-advice').css('visibility', 'hidden');
    $('#delete-account-btn').on('mouseover', () => {
      $('.delete-advice').css('visibility', 'visible');
    })
    $('#delete-account-btn').on('mouseout', () => {
      $('.delete-advice').css('visibility', 'hidden');
    })


    // Product quantity modification
    $('.add').on('click', function () {
      if ($(this).prev().val() < 999) {
        $(this).prev().val(+$(this).prev().val() + 1);
      }
    });
    $('.sub').on('click', function () {
      if ($(this).next().val() > 1) {
        $(this).next().val(+$(this).next().val() - 1);
      }
    });

  })

} catch (error) {
  console.log(error);
}

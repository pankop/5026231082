/*!
* Start Bootstrap - New Age v6.0.7 (https://startbootstrap.com/theme/new-age)
* Copyright 2013-2023 Start Bootstrap
* Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-new-age/blob/master/LICENSE)
*/
//
// Scripts
//

window.addEventListener('DOMContentLoaded', event => {

    // Activate Bootstrap scrollspy on the main nav element
    const mainNav = document.body.querySelector('#mainNav');
    if (mainNav) {
        new bootstrap.ScrollSpy(document.body, {
            target: '#mainNav',
            offset: 74,
        });
    };

    // Collapse responsive navbar when toggler is visible
    const navbarToggler = document.body.querySelector('.navbar-toggler');
    const responsiveNavItems = [].slice.call(
        document.querySelectorAll('#navbarResponsive .nav-link')
    );
    responsiveNavItems.map(function (responsiveNavItem) {
        responsiveNavItem.addEventListener('click', () => {
            if (window.getComputedStyle(navbarToggler).display !== 'none') {
                navbarToggler.click();
            }
        });
    });

});


function validation() {
    const nama = document.getElementById("name").value.trim();
    const email = document.getElementById("email").value.trim();
    const pesan = document.getElementById("message").value.trim();
    const phone = document.getElementById("phone").value.trim();

    if (nama.length < 2) {
      Swal.fire("Oops!", "Nama harus lebih dari 2 huruf!", "error");
      return false;
    }

    if (!email.includes("@") || email.length < 5) {
      Swal.fire("Oops!", "Masukkan email yang valid!", "error");
      return false;
    }

    if (phone.length < 12) {
      Swal.fire("Oops!", "Nomor telepon harus lebih dari 12 angka!", "error");
      return false;
    }

    if (pesan.length < 10) {
      Swal.fire("Oops!", "Pesan terlalu pendek. Tulis minimal 10 karakter.", "error");
      return false;
    }

    Swal.fire({
      title: "Berhasil!",
      text: "Pesanmu sudah terkirim!",
      icon: "success"
    });
    return false;
  }

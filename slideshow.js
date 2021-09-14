$(document).ready(function() {

   //otomatis

   $('#content-slider').cycle({
      fx: 'fade',
      speed: 100,

      //waktu yang dibutuhkan untuk melakukan transisi
      // timeout: 2000,

      //menahan posisi mouse diatas gambar
      // pause: 0

      //manual ketika di klik
       next: '#content-slider'
   });

   //manual menggunakan angka

   // $('#content-slider').before('<div id="angka">').cycle({
   //    fx: 'fade',
   //    speed: 100,
   //    timeout: 0,
   //    pager: '#angka'
   // });

   //manual menggunakan icon

   // $('#content-slider')
   // .before('<ul id="angka">').cycle({
   //    fx: 'fade',
   //    speed: 3000,
   //    timeout: 0,
   //    pager: '#angka',
   //    pagerAnchorBuilder: function(idx, slide) {
   //       return '<li><a href="#"><img src="' + slide.src + '" width="50" height="50" /></a></li>';
   //    }

 //});


});
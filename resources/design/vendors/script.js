setTimeout(function start (){

    $('.bar').each(function(i){
      var $bar = $(this);
      $(this).append('')
      setTimeout(function(){
        $bar.css('width', $bar.attr('data-percentage'));
      }, i*100);
    });

//   $('.count').each(function () {
//       $(this).prop('Counter',0).animate({
//           Counter: $(this).parent('.bar').attr('data-percentage')
//       }, {
//           duration: 2000,
//           easing: 'swing',
//           step: function (now) {
//               $(this).text(Math.ceil(now) +'%');
//           }
//       });
//   });

  }, 500)

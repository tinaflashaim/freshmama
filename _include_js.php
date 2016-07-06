<script src="js/jquery-1.11.3.min.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script src="js/vendor/slidebars/slidebars.min.js" type="text/javascript"></script>
<script src="js/vendor/slick/slick.min.js"></script>
<script src="js/vendor/jquery.lazyload.min.js"></script>

<script>


(function($) {
    $(document).ready(function() {
      var mySlidebars = new $.slidebars();
      $('.my-button').on('click', function() {
        mySlidebars.slidebars.open('left');
      });
      $('.my-other-button').on('click', function() {
        mySlidebars.slidebars.toggle('right');
        $('.slider-c').get(0).slick.setPosition();
        // $('.slider-c').slick('setPosition');
      });
      $('.my-third-button').click(mySlidebars.slidebars.close);
    });
  }) (jQuery);



      (function($) {
        $(document).ready(function() {
          $.slidebars();
        });
      }) (jQuery);
    </script>
  <script type="text/javascript">
$(function(){

     $(".slider-c, .regular").slick({
        dots: true,
        infinite: true,
        arrows: true,
        slidesToShow: 2,
        slidesToScroll: 2
      });

    $('.slider-c, .regular').show();

    
});





    $(window).on('load', function() {

        // $('.slider-c').slick({
        //             slidesToShow: 2,
        //             slidesToScroll: 2,
        //             dots: false,
        //             arrows: false,
        //             centerMode: false,
        //             focusOnSelect: true,
        //         });

      // $(".regular").slick({
      //   dots: true,
      //   infinite: true,
      //   slidesToShow: 2,
      //   slidesToScroll: 2
      // });
      $(".center").slick({
        dots: true,
        infinite: true,
        centerMode: true,
        slidesToShow: 3,
        slidesToScroll: 3
      });
      $(".variable").slick({
        dots: true,
        infinite: true,
        variableWidth: true
      });
    });
  </script>



<script src="js/common.js" type="text/javascript"></script>
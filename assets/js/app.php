<?php include '../../dictionary.php'; ?>

(function (window, document, $, undefined) {
  "use strict";
  



  // help-modal contents
  $('.helps').owlCarousel({
    items: 1,
    dots: true,
    margin: 40
  });

  $(document).on('click', '.toggle-help-modal-btn, .help-modal .modal-overlay', function() {
    $('.help-modal').toggleClass('active');
  });


  var pokes = ['0', '1/2', '1', '2', '3', '5', '8', '13', '20', '40', '100', '\u221E', '?', '<i class="fa fa-coffee"></i>'];
  
  var animations = [
    "rubberBand",
    "shake",
    "headShake",
    "swing",
    "tada",
    "wobble",
    "jello",
    "bounceIn",
    "bounceInDown",
    "bounceInUp",
    "flipInX",
    "flipInY",
    "rotateIn",
    "rollIn",
    "slideInDown",
    "slideInUp"
  ];
  
  var hideInterval, aniInterval;
  
  var app = new Vue({
    data: {
      pokes: pokes
    },
    props: {
      isHideStage: Boolean,
      allowAnimation: Boolean
    },
    methods: {
      hideStage: function() {
        var self = this;
        hideInterval = setTimeout(function() {
          self.isHideStage = true;
        }, 300);

        aniInterval = setTimeout(function() {
          $('.poke').attr('class', 'poke'); //.find('.text').attr('class', 'text');
          self.allowAnimation = true;
        }, 600);
      },
      showStage: function() {
        clearInterval(hideInterval);
        clearInterval(aniInterval);
        this.isHideStage = false;

        if (this.allowAnimation) {
          var aniName = animations[Math.round(Math.random() * (animations.length - 1))];
          $('.owl-item.active .poke').addClass('animated').addClass(aniName);
          //$('.owl-item.active .poke .text').addClass('animated').addClass('bounceIn');
        }
        this.allowAnimation = false;
      },
      holdMove: function() {
        if (!this.isHideStage) {
          clearInterval(hideInterval);
          clearInterval(aniInterval);
        }
      },
      toggleHelpModal: function() {
        $('#myModal').modal('show');
      }
    },
    mounted: function() {
      $('.owl-carousel').owlCarousel({
        loop: true,
        items: 1
      });
    }
  });
  app.$mount('.app');



} (window, document, jQuery));

/* ===============================================
  OPEN CLOSE Menu
============================================= */

function scuba_diving_sport_open_menu() {
  jQuery('button.menu-toggle').addClass('close-panal');
  setTimeout(function(){
    jQuery('nav#main-menu').show();
  }, 100);

  return false;
}

jQuery( "button.menu-toggle").on("click", scuba_diving_sport_open_menu);

function scuba_diving_sport_close_menu() {
  jQuery('button.close-menu').removeClass('close-panal');
  jQuery('nav#main-menu').hide();
}

jQuery( "button.close-menu").on("click", scuba_diving_sport_close_menu);

/* ===============================================
  TRAP TAB FOCUS ON MODAL MENU
============================================= */

jQuery('button.close-menu').on('keydown', function (e) {

  if (jQuery("this:focus") && !!e.shiftKey && e.keyCode === 9) {
  } else if (jQuery("this:focus") && (e.which === 9)) {
    e.preventDefault();
    jQuery(this).blur();
    jQuery('.nav-menu li a:first').focus()
  }
});

jQuery('.nav-menu li a:first').on('keydown', function (event) {
  if (jQuery("this:focus") && !!event.shiftKey && event.keyCode === 9) {
    event.preventDefault();
    jQuery(this).blur();
    jQuery('button.close-menu').focus()
  }
});

  /* ===============================================
  Scroll Top //
============================================= */

jQuery(window).scroll(function () {
  if (jQuery(this).scrollTop() > 100) {
      jQuery('.scroll-up').fadeIn();
  } else {
      jQuery('.scroll-up').fadeOut();
  }
});

jQuery('a[href="#tobottom"]').click(function () {
  jQuery('html, body').animate({scrollTop: 0}, 'slow');
  return false;
});
(function( $ ) {

$(window).scroll(function(){
    var sticky = $('.sticky-header'),
    scroll = $(window).scrollTop();

    if (scroll >= 100) sticky.addClass('fixed-header');
    else sticky.removeClass('fixed-header');
  });
})( jQuery );
/* ===============================================
  Custom Cursor
============================================= */

const scuba_diving_sport_customCursor = {
  init: function () {
    this.scuba_diving_sport_customCursor();
  },
  isVariableDefined: function (el) {
    return typeof el !== "undefined" && el !== null;
  },
  select: function (selectors) {
    return document.querySelector(selectors);
  },
  selectAll: function (selectors) {
    return document.querySelectorAll(selectors);
  },
  scuba_diving_sport_customCursor: function () {
    const scuba_diving_sport_cursorDot = this.select(".cursor-point");
    const scuba_diving_sport_cursorOutline = this.select(".cursor-point-outline");
    if (this.isVariableDefined(scuba_diving_sport_cursorDot) && this.isVariableDefined(scuba_diving_sport_cursorOutline)) {
      const cursor = {
        delay: 8,
        _x: 0,
        _y: 0,
        endX: window.innerWidth / 2,
        endY: window.innerHeight / 2,
        cursorVisible: true,
        cursorEnlarged: false,
        $dot: scuba_diving_sport_cursorDot,
        $outline: scuba_diving_sport_cursorOutline,

        init: function () {
          this.dotSize = this.$dot.offsetWidth;
          this.outlineSize = this.$outline.offsetWidth;
          this.setupEventListeners();
          this.animateDotOutline();
        },

        updateCursor: function (e) {
          this.cursorVisible = true;
          this.toggleCursorVisibility();
          this.endX = e.clientX;
          this.endY = e.clientY;
          this.$dot.style.top = `${this.endY}px`;
          this.$dot.style.left = `${this.endX}px`;
        },

        setupEventListeners: function () {
          window.addEventListener("load", () => {
            this.cursorEnlarged = false;
            this.toggleCursorSize();
          });

          scuba_diving_sport_customCursor.selectAll("a, button").forEach((el) => {
            el.addEventListener("mouseover", () => {
              this.cursorEnlarged = true;
              this.toggleCursorSize();
            });
            el.addEventListener("mouseout", () => {
              this.cursorEnlarged = false;
              this.toggleCursorSize();
            });
          });

          document.addEventListener("mousedown", () => {
            this.cursorEnlarged = true;
            this.toggleCursorSize();
          });
          document.addEventListener("mouseup", () => {
            this.cursorEnlarged = false;
            this.toggleCursorSize();
          });

          document.addEventListener("mousemove", (e) => {
            this.updateCursor(e);
          });

          document.addEventListener("mouseenter", () => {
            this.cursorVisible = true;
            this.toggleCursorVisibility();
            this.$dot.style.opacity = 1;
            this.$outline.style.opacity = 1;
          });

          document.addEventListener("mouseleave", () => {
            this.cursorVisible = false;
            this.toggleCursorVisibility();
            this.$dot.style.opacity = 0;
            this.$outline.style.opacity = 0;
          });
        },

        animateDotOutline: function () {
          this._x += (this.endX - this._x) / this.delay;
          this._y += (this.endY - this._y) / this.delay;
          this.$outline.style.top = `${this._y}px`;
          this.$outline.style.left = `${this._x}px`;

          requestAnimationFrame(this.animateDotOutline.bind(this));
        },

        toggleCursorSize: function () {
          if (this.cursorEnlarged) {
            this.$dot.style.transform = "translate(-50%, -50%) scale(0.75)";
            this.$outline.style.transform = "translate(-50%, -50%) scale(1.6)";
          } else {
            this.$dot.style.transform = "translate(-50%, -50%) scale(1)";
            this.$outline.style.transform = "translate(-50%, -50%) scale(1)";
          }
        },

        toggleCursorVisibility: function () {
          if (this.cursorVisible) {
            this.$dot.style.opacity = 1;
            this.$outline.style.opacity = 1;
          } else {
            this.$dot.style.opacity = 0;
            this.$outline.style.opacity = 0;
          }
        },
      };
      cursor.init();
    }
  },
};
scuba_diving_sport_customCursor.init(); 
/* ===============================================
  Progress Bar
============================================= */
const scuba_diving_sport_progressBar = {
  init: function () {
      let scuba_diving_sport_progressBarDiv = document.getElementById("elemento-progress-bar");

      if (scuba_diving_sport_progressBarDiv) {
          let scuba_diving_sport_body = document.body;
          let scuba_diving_sport_rootElement = document.documentElement;

          window.addEventListener("scroll", function (event) {
              let scuba_diving_sport_winScroll = scuba_diving_sport_body.scrollTop || scuba_diving_sport_rootElement.scrollTop;
              let scuba_diving_sport_height =
              scuba_diving_sport_rootElement.scrollHeight - scuba_diving_sport_rootElement.clientHeight;
              let scuba_diving_sport_scrolled = (scuba_diving_sport_winScroll / scuba_diving_sport_height) * 100;
              scuba_diving_sport_progressBarDiv.style.width = scuba_diving_sport_scrolled + "%";
          });
      }
  },
};
scuba_diving_sport_progressBar.init();

/* ===============================================
   sticky copyright
============================================= */

window.addEventListener('scroll', function() {
  var scuba_diving_sport_footer = document.querySelector('.sticky-copyright');
  if (!scuba_diving_sport_footer) return; 

  var scuba_diving_sport_scrollTop = window.scrollY || document.documentElement.scuba_diving_sport_scrollTop;

  if (scuba_diving_sport_scrollTop >= 100) {
    scuba_diving_sport_footer.classList.add('active-sticky');
  }
});

/* ===============================================
   sticky sidebar
============================================= */

window.addEventListener('scroll', function () {
  var scuba_diving_sport_sidebar = document.querySelector('.sidebar-sticky');
  if (!scuba_diving_sport_sidebar) return;

  var scuba_diving_sport_scrollTop = window.scrollY || document.documentElement.scrollTop;
  var scuba_diving_sport_windowHeight = window.innerHeight;
  var scuba_diving_sport_documentHeight = document.documentElement.scrollHeight;

  var scuba_diving_sport_isBottom = scuba_diving_sport_scrollTop + scuba_diving_sport_windowHeight >= scuba_diving_sport_documentHeight - 100;

  if (scuba_diving_sport_scrollTop >= 100 && !scuba_diving_sport_isBottom) {
    scuba_diving_sport_sidebar.classList.add('sidebar-fixed');
  } else {
    scuba_diving_sport_sidebar.classList.remove('sidebar-fixed');
  }
});

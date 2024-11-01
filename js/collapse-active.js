	jQuery(".accordion-Latest").collapse({
  accordion: true,
  open: function() {
	this.addClass("open");
	this.css({ height: this.children().outerHeight() });
  },
  close: function() {
	this.css({ height: "0px" });
	this.removeClass("open");
  }
});

jQuery(".accordion-collapse").collapse({
			accordion: true,
			open: function() {
            this.slideDown(150);
          },
          close: function() {
            this.slideUp(150);
          }
		});	
	


jQuery(".accordion-another").collapse({
			accordion: true,
			open: function() {
            this.slideDown(150);
          },
          close: function() {
            this.slideUp(150);
          }
		});	





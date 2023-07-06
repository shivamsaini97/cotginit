// Example starter JavaScript for disabling form submissions if there are invalid fields
(() => {
    'use strict'

    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    const forms = document.querySelectorAll('.needs-validation')

    // Loop over them and prevent submission
    Array.from(forms).forEach(form => {
        form.addEventListener('submit', event => {
            if (!form.checkValidity()) {
                event.preventDefault()
                event.stopPropagation()
            }

            form.classList.add('was-validated')
        }, false)
    })
})()
$(document).ready(function ($) {
    //Check if an element was in a screen
    function isScrolledIntoView(elem) {
        var docViewTop = $(window).scrollTop();
        var docViewBottom = docViewTop + $(window).height();
        var elemTop = $(elem).offset().top;
        var elemBottom = elemTop + $(elem).height();
        return elemBottom <= docViewBottom;
    }
    //Count up code
    function countUp() {
        $(".counter").each(function () {
            var $this = $(this), // <- Don't touch this variable. It's pure magic.
                countTo = $this.attr("data-count");
            ended = $this.attr("ended");

            if (ended != "true" && isScrolledIntoView($this)) {
                $({ countNum: $this.text() }).animate(
                    {
                        countNum: countTo,
                    },
                    {
                        duration: 2500, //duration of counting
                        easing: "swing",
                        step: function () {
                            $this.text(Math.floor(this.countNum));
                        },
                        complete: function () {
                            $this.text(this.countNum);
                        },
                    },
                );
                $this.attr("ended", "true");
            }
        });
    }
    //Start animation on page-load
    if (isScrolledIntoView(".counter")) {
        countUp();
    }
    //Start animation on screen
    $(document).scroll(function () {
        if (isScrolledIntoView(".counter")) {
            countUp();
        }
    });
});
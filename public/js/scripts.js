/* Smooth Scrolling */
document.addEventListener("DOMContentLoaded", () => {
    const smoothScroll = new SmoothScroll('[data-scroll]');
});

/* Scroll To Top */
window.addEventListener('scroll', () => {
    const height = this.scrollY;
    let topBtn = $('#toTop');
    if(height > 200) {
        topBtn.fadeIn();
    } else {
        topBtn.fadeOut();
    }
}, false);

/* Animations */
// Check if element is scrolled into view
function isScrolledIntoView(elem) {
    let docViewTop = $(window).scrollTop();
    let docViewBottom = docViewTop + $(window).height();

    let elemTop = $(elem).offset().top;
    let elemBottom = elemTop + $(elem).height();

    return ((elemBottom <= docViewBottom) && (elemTop >= docViewTop));
}

// Set animations
$(document).ready(function() {

    // Helper function
    function animateCSS(el, nm) {
        const node = $(el); //assign element
        const opacity = $(el).css('opacity'); //assign original opacity
        node.css('opacity', 0); //hide element for proper animation

        //listen for scroll event
        $(window).scroll(function() {
            if(isScrolledIntoView(node) === true) {
                node.addClass(`animated ${nm}`); //add animation

                // return non-fade elements back to original opacity
                if(!nm.startsWith("fadeIn")) {
                    node.css('opacity', opacity);
                }
            }
        });
    }

    // ABOUT SECTION
    animateCSS('#about > h1', 'fadeInDown');
    animateCSS('#about > p', 'fadeInLeft');
    animateCSS('#about > hr', 'fadeInRight');
    animateCSS('#about ul li:nth-of-type(1)', 'bounceInUp');
    animateCSS('#about ul li:nth-of-type(2)', 'bounceInDown');
    animateCSS('#about ul li:nth-of-type(3)', 'bounceInUp');
    animateCSS('#about ul li:nth-of-type(4)', 'bounceInDown');

    // STATS SECTION
    animateCSS('#stats > h1', 'fadeInDown');
    animateCSS('#stats > p', 'zoomIn');

    // MEDIA SECTION
    animateCSS('#media > h1', 'flash');
    animateCSS('#media ul li:nth-of-type(1)', 'fadeIn');
    animateCSS('#media ul li:nth-of-type(2)', 'fadeIn');
    animateCSS('#media ul li:nth-of-type(3)', 'fadeIn');
    animateCSS('#media ul li:nth-of-type(4)', 'fadeIn');
    animateCSS('#media ul li:nth-of-type(5)', 'fadeIn');
    animateCSS('#media ul li:nth-of-type(6)', 'fadeIn');

    // GEEKBEACON SECTION
    animateCSS('#geekbeacon > h1', 'bounce');
    animateCSS('#geekbeacon div > div:first-of-type', 'fadeIn');
    animateCSS('#geekbeacon div > div:last-of-type', 'fadeIn');

    // CONTACT SECTION
    animateCSS('#contact > h1', 'fadeInDown');
    animateCSS('#contact label', 'bounceIn');
    animateCSS('#contact input', 'zoomIn');
    animateCSS('#contact select', 'zoomIn');
    animateCSS('#contact textarea', 'zoomIn');
    animateCSS('#contact button', 'slideInUp');
});


/* Define variables to hold social following counts */
let data;
let fallbackData = {'facebook' : 50000, 'twitch' : 2000, 'twitter' : 32300, 'instagram' : 4800, 'youtube' : 330000, 'discord' : 4300};
let successCount = 0;
let count = 0;

// Fetch the data
fetch(`https://social.geekbeacon.org/api/v1.0/social/count/all`)
    .then((response) => response.json())
    .then(function (response) {

        //check if response is valid, if not use fallback data
        if(response !== "undefined") {
            data = response;
        } else {
            data = fallbackData;
        }
            makeChart();
    })
    .catch(function (error) {
        console.log(error);
    });

/* Stats Chart */
function makeChart() {

    am4core.useTheme(am4themes_animated); //use animations
    let chart = am4core.create("chart", am4charts.SlicedChart); //create base sliced chart

//create data
    chart.data = [{
        "name": "YouTube",
        "value": data.youtube
    }, {
        "name": "Twitter",
        "value": data.twitter
    }, {
        "name": "Facebook",
        "value": data.facebook
    }, {
        "name": "Instagram",
        "value": data.instagram
    }, {
        "name": "Discord",
        "value": data.discord
    }, {
        "name": "Twitch",
        "value": data.twitch
    }];

    let llamaChart = chart.series.push(new am4charts.PictorialStackedSeries()); //create pictorial chart
    llamaChart.labels.template.disabled = true; //hide default legend
    llamaChart.dataFields.value = "value"; //add values to new legend
    llamaChart.dataFields.category = "name"; //add names to new legend
    llamaChart.alignLabels = false; //hide alignment lines for labels
    llamaChart.orientation = "horizontal"; //make chart vertical

//assign colors to sections
    llamaChart.colors.list = [
        am4core.color("rgba(159,140,215, 0.7)"), //YT
        am4core.color("rgba(128,188,207, 0.7)"), //TT
        am4core.color("rgba(216,131,206, 0.7)"), //FB
        am4core.color("rgba(124,205,202, 0.7)"), //IG
        am4core.color("rgba(230,57,70, 0.7)"), //DC
        am4core.color("rgba(79,79,79, 0.7)"), //TW
    ];
    llamaChart.legendSettings.labelText = "[bold #fff]{name}: {value}[/]"; //create new label text layout
    chart.legend = new am4charts.Legend(); //create new legend
    chart.legend.valueLabels.template.disabled = true; // hide the default valueLabels due to spacing issue

//create llama path via svg code
    llamaChart.maskSprite.path = "M716 503.2c-.6 3.9.5 8.1.5 8.1-5.5-1.5-6.6-5-6.6-5-.5 4.5-6 11.1-6 11.1v-8.6c-4.8 4.5-1.7 13.1-1.7 13.1-4-1-5.6-4-5.6-4-4 5 1.2 11.1 1.2 11.1-4.5-.5-7-9.6-6.5-7.1s-1 11.1-1 11.1c.5-3.5-3-7.1-3-7.1 1 4-3.5 29.2-3.5 29.2l-2-7.6c.5 5-2 25.7-2 25.7l-2-3.5c2.5 8.6-3 29.2-3 27.2s-2.1-9.6-2.1-9.6c0 8.1-4.4 32.7-4.4 32.7 2.5 7.1-5 27.7-5 26.2s-1-5-1-5c-.5 7.6-4.5 19.6-4.5 19.6 1-6-2.5-2-2.5-2 .5 11.6-11.6 33.2-11.6 33.2.5-5-3.5 2-3.5 2-4 6.5-4.5 16.6-4.5 16.6l-2-2c-1.5 2 0 14.1-1 12.6s-3-.5-3-.5c-1.5 3-.5 11.1-.5 11.1l-2-4.5 1 11.6c-3-5-1 4.5-1 4.5 0 4.5 9.1 24.2 9.1 24.2 3.5-1.5 14.6.5 14.6.5 8.1 2.5 12.4 15.1 12.4 15.1s-7.6-4.5-5.5-3.5 2.3 6.9 2.3 6.9c-10.1 4.4-38.8-2.5-38.8-2.5-10.8-1.9-8.9-21.6-8.9-21.6l-1.9-5.7c-.6-8.9-2.5-5.7-2.5-5.7-3.8-7.6-5.2-14.1-5.2-14.1v4.5c-6-7.6-9.2-19.7-8.5-17.1s-1.2 5.7-1.2 10.8-2.4 20.3-2.4 20.3l-1.8-4.4-2.5 11-3.1-2.7c-3.2 7.6 7.6 29.2 7.6 29.2 5.8-1.9 13.3.6 13.3.6 8.2 3.2 13.3 17.1 13.3 17.1s-7-3.8-5.7-1.3c1.3 2.5 1.3 7 1.3 7-6.3 2.5-38.7-4.4-38.7-4.4-13.3-8.2-11.4-17.8-11.4-20.3s-3.2-21.6-3.2-21.6c-2.5-1.9-3.8 7.6-3.8 7.6-1.3-4.4 0-14.6 0-14.6l-2.5 6.3c-1.3-5.1 0-19 0-19-3.2-10.8-4.4 0-4.4 0-14.6-14.6-16.5-52-16.5-52-1.9-.6-1.9 6.3-1.9 6.3-6.3-8.2.6-40 .6-40l-3.8 8.9c-7.6-9.5-4.4-45-4.4-45l-2.5 4.4c-5.1-12.7 1.3-46.3 1.3-46.3l-3.8 3.2c7.6-29.8-2-46.3-2-46.3l-6.6 7.7s3.3-3.7.5-7c0 0-6.1 6.6-11.8 7.1 0 0 5.7-4.2 4.7-5.6s-9.9-2.3-11.8 3.3l-1.4-3.3s-1.4 6.6-.5 8.5l-4.2-8s-4.2 6.1-19.8 5.7c0 0 6.6-1.4 7.5-3.3l.9-1.9s-25.5 3.3-28.3 9.4l2.2-6.1-7.6 5.5v-3.6c-1.2-1.9-3.4 1.9-3.4 1.9-1.4-.5-8-4.2-8-4.2-3.8-.9-.3 3.8-.3 3.8-4.7-2.4-13.1-5.7-13.1-5.7-1.9 0 1 4.7 1 4.7-5.2-1.9-22.1-10.4-22.1-10.4-1.9 0 1.9 5.2 1.9 5.2-4.7-.9-12.7-7.5-12.7-7.5l-1.9 2.4c-3.8-4.7-9.4-7.1-11.3-7.1-1.9 0 1.9 5.2 1.9 5.2-10.4-4.7-20.2-16-19.3-14.1.9 1.9 2.4 6.2 2.4 6.2-11.8-14.1-19.7-8.9-19.7-8.9s-12.6 40.7-24.7 54.6c0 0 4.4-8.2 1.9-10.8s-5.7 24.7-12.7 31.7l2.5-8.9s-7 15.9-11.4 19l.6-7S278 625 274.4 625.6v-6.8s-10.8 10.6-11.4 23.9c0 0-4.8 37.4-1.6 44.4l-2.4-4.4s3.2 15.9 1.3 22.8l-2.5-5.7s3.8 19.7 1.9 26.6l-1.9-6.3s-3.8 12 3.2 22.8c0 0 23.5 25.4 25.4 30.4l15.2 3.2s11.4 7 15.2 14l-8.9 1.9 4.4 5.1s-20.9 8.9-35.5-1.3c0 0-17.1-1.6-17.1-12.7 0 0-8.2-12.1-12.1-16.5 0 0-18.4-18.4-14.6-29.2 0 0-7-14.6-7-8.2 0 0-7-12.7-7-5.1 0 0-8.2-5.1-7.6-16.5 0 0-1.9 7-.6 11.4 0 0-8.2-10.8-8.2-17.1 0 0-4.4 11.4-1.3 21.6 0 0 12.7 17.8 15.9 21.6l7.6 1.3s9.8 5.8 13.3 15.9c0 0-14.6 8.8-34.9 1.8 0 0-9.3-.9-8.7-10.6 0 0-5.8-9.6-12.2-16.6 0 0-9.5-10.1-7-23.5 0 0 3.2-4.4-3.2-10.8 0 0-3.1-3.8-3.1 1.3 0 0-9.5-10.1-9.5-14v7s-7-14-7-20.3l-3.5 4.4s.2-24.7 2.7-29.8l-5 9.5s0-26 3.2-29.8l-3.2 3.8s-4.4-31.1 1.3-35.5c0 0-8.2 16.5-8.2 9.5 0 0 1.3-32.3 11.4-43.1 0 0-3.8-.6-5.7 2.5 0 0 8.2-19.7 16.5-25.4l-6.3 1.9s16.5-20.9 25.4-25.4c0 0 7.6-9.5 7.6-20.3l-3.2-5.1-3.3 3.3c3.3-3.3 1.4-17.4 1.4-17.4 0 4.2-3.8 10.4-3.8 10.4 3.8-3.8-6.6-29.7-6.6-29.7-1.4.9 2.8 15.1 2.8 15.1-10.4-22.6-10.7-43.8-10.7-43.8-.5-25-7.7-25.5-7.7-25.5-2.4.5-.9 8-2.8 7.1-1.9-.9-1.9-4.7-1.9-4.7-4.7.5.5 9.4.5 9.4-30.2-15.1-16-80.6-18.4-79.7-2.4.9-3.8 12.3-3.8 12.3-1.4-22.2 11.3-45.2 11.3-45.2l-6.6 4.2c5.2-5.2 14.1-28.8 14.1-28.8l-4.2 3.3c5.2-15.1 26.9-23.6 26.9-23.6 4.2 0 15.6-15.1 15.6-15.1l-8.5 5.3C204 223.9 280.6 204 280.6 204h-6c28.3-14.5 91.4-3.1 91.4-3.1l-5.2-2.8c7.5-1.4 32.1 9.3 32.1 9.3-1.4 0-4.7-4.3-4.7-4.3 14.1 8 58 15 58 15 44.8 3.8 50.9 14.1 50.9 14.1l-4.2-4.7c6.6 5.7 25.5 1.9 25.5 1.9l-7.1-1.4c17.9-2.8 60.8 8 60.8 8l-4.7-2.8c8-1.4 36.8 9.8 36.8 9.8 21.7 9.4 27.8-7 27.8-7-3.8 5.7-9.4 1.9-9.4 1.9 8 .9 15.6-22.6 15.6-22.6l-2.8 2.8c2.8-13.7 11.3-25.9 11.3-25.9l-5.2 2.8c6.6-8 19.3-45.7 19.3-45.7-3.3.9-4.2 5.7-4.2 5.7 4.2-19.3 17.4-41.5 17.4-41.5l-4.2 4.7c7.1-22.6 25.9-41.5 24-39.1-1.9 2.4-5.7 1.4-5.7 1.4 13.7-9 14.6-17.4 14.6-17.4.5-1.3 1.2-2.6 2-4.1 7.2-11.7 26.7-27 26.7-27l-4.7 1.4c11.8-14.1 31.4-20.7 31.4-20.7S758 .1 776.4-12.5c0 0 27.9-30.4 33.6-25.3 0 0-28.6 38.7-21.6 50.1 0 0 7 1.3 10.8 3.2 0 0 1.3-13.9 17.1-22.2 0 0 22.8-26.6 31.7-23.5 0 0-33 41.9-26.6 49.5 0 0 23.5.6 28.5 12.1 0 0-8.2-8.2-17.8-3.2 0 0 22.2 3.8 17.8 22.8 0 0-3.8-5.1-7.6-5.1 0 0 7 9.5 6.3 17.8 0 0-5.7-3.2-9.5-1.9 0 0 12.7 11.4 19.7 15.2 0 0 24.4 7.8 26.3 35.1 0 0 10.8 18.9-4.2 20.7 0 0-6.1 11.3-14.6 7.5 0 0-13.2-.5-20.3-9 0 0-11.3-3.1-19.1 2.5l4 .9-8.4 1.6 3.4.6s-10.6 2.8-11.2 1.6l5.3.9s-8.4 3.4-17.1 3.7c0 0-8.4-2.5-7.8 11.8l-1.6-4.4s-2 7.8-.1 16.8c0 0-2.6-4-2.6-5.6v-2s-4.1 18.3.6 35.7c0 0 3 15 2 24.2 0 0-.5-3.4-1.9-6.5 0 0 1.9 18.2-3.7 35.8 0 0-2.2 11.6 1.5 19.5l-3-2.6s-1.1 9.8 2.3 16.5L786 280s4 22.1-.2 32.3c0 0 0-3.8-1.1-6.8 0 0-.2 8.3 1.3 13.1l-2.2-1.1s-3 9.8.4 16.5l-2.6-2.6s2.3 7.5-.4 14.6l-1.2-3s-3.9 12.8-7.7 18.9c0 0-5.2 7.5-1.4 18.9l-3.8-3.3s-2.8 12.7 2.4 17.9l-5.2-5.2s.9 13.7-.5 18.9l-1.9-8s-2.8 9.9 1 19.8c0 0-4.7-4.7-4.7-6.1 0-1.4-1.8 14.7 1.9 19.4 0 0-4.6-1.7-5.1-5.5 0 0-6.9 14-1.9 26.1l-4-4s-12.1 12.6-8.1 23.7c0 0-3.5-4.5-3-6s-2 18.1-9.1 25.7c0 0 3.5-6.6 0-10.1 0 0-4.5 20.7-7.6 23.2.2 0-4.3-10.1-5.3-4.1z";
}

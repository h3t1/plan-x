$(document).ready(function () {
    var page = 1;
    var perPage = 5;
    var totalPages = 1;
    var loading = false;
    var svgMaps = [];
    currentSvgIndex = 0;
    $("#nextSVG").on('click', function () {
        currentSvgIndex++;
        if (currentSvgIndex >= svgMaps.length) {
            if (page < totalPages + 1) {
                // If we're at the end of the array but there are more pages to load, load the next page of SVG images
                loadSvgImages();
            } else {
                // If we're at the end of the array and there are no more pages to load, loop back to the beginning of the array
                currentSvgIndex = 0;
                renderSvgMap(currentSvgIndex);
            }
        }
        else {
            renderSvgMap(currentSvgIndex);
        }

    });
 
    
    $(document).on('click', '.svg-map-image', function() {
        currentSvgIndex = this.getAttribute("data-index");
        console.log('currentIndex', currentSvgIndex);
        renderSvgMap(currentSvgIndex);
    });
    function loadSvgImages() {
        if (loading || page > totalPages) {
            return;
        }

        loading = true;

        $.ajax({
            url: '/svg-maps?perPage=' + perPage + '&page=' + page,
            type: 'GET',
            success: function (data) {
                if (data.currentPage) {
                    page = data.currentPage + 1;
                }
                if (data.totalPages) {
                    totalPages = data.totalPages;
                }

                svgMaps = svgMaps.concat(data.svgMaps);
                for (var i = 0; i < data.svgMaps.length; i++) {
                    // Render the SVG image and add it to the page
                    var svgCode = data.svgMaps[i].sm_markup;

                    var svgContainer = $('<div>').addClass('svg-map-image col-sm-6 col-lg-4 mb-4');
                    svgContainer.attr('data-index', (page - 2) * perPage + i);

                    $(svgCode).appendTo(svgContainer);
                    $('#svg-container').append(svgContainer);
                }
                console.log(svgMaps.length);
                renderSvgMap(currentSvgIndex);
                loading = false;
            },
            error: function () {
                loading = false;
            }
        });
    }
    function renderSvgMap(currentIndex) {
        $("#sm_description").text(svgMaps[currentIndex].sm_description);
        $("figure#sm_markup").html(svgMaps[currentIndex].sm_markup);
    }

    // Load the first page of SVG images
    loadSvgImages();

    // Load subsequent pages of SVG images when the URL ends with #siteplans and the user scrolls to the bottom of the page

    $(window).scroll(function () {
        if ($(window).scrollTop() + $(window).height() + 50 >= $(document).height()) {

            if (window.location.href.endsWith('#siteplans')) {
                loadSvgImages();
            }
        }
    });

});

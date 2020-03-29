/**
 * forEach implementation for Objects/NodeLists/Arrays, automatic type loops and context options
 *
 * @private
 * @author Todd Motto
 * @link https://github.com/toddmotto/foreach
 * @param {Array|Object|NodeList} collection - Collection of items to iterate, could be an Array, Object or NodeList
 * @callback requestCallback      callback   - Callback function for each iteration.
 * @param {Array|Object|NodeList} scope=null - Object/NodeList/Array that forEach is iterating over, to use as the this value when executing callback.
 * @returns {}
 */
var forEach = function(t, o, r) {
    if ("[object Object]" === Object.prototype.toString.call(t))
        for (var c in t)
            Object.prototype.hasOwnProperty.call(t, c) && o.call(r, t[c], c, t);
    else for (var e = 0, l = t.length; l > e; e++) o.call(r, t[e], e, t);
};

var hamburgers = document.querySelectorAll(".hamburger");
if (hamburgers.length > 0) {
    forEach(hamburgers, function(hamburger) {
        hamburger.addEventListener(
            "click",
            function() {
                this.classList.toggle("is-active");
            },
            false
        );
    });
}

function menuActive() {
    $(".hamburger").click(function() {
        $(".menuMobile").toggleClass("menuMobile--active");
        $("body").toggleClass("body--locked");
    });
}

function slider() {
    if ($(window).width() > 767) {
        $(".dropsSlider").removeClass("flexslider");
    } else {
        $(".aboutUsDrops .flexslider").flexslider({
            animation: "slide",
            controlNav: false
        });
    }
}

function storeList() {
    if ($(window).width() > 768) {
        $(".storeList ul").css("max-height", $(window).height() - 300);
    } else {
        $(".storeList ul").css("max-height", $(window).height() - 120);
    }

    $(".storeList li").each(function() {
        $(this).click(function(e) {
            e.preventDefault();
            if ($(window).width() < 768) {
                $(document).scrollTop($("#mapArea").offset().top - 30);
            }
            var src = $(this)
                .find(".mapLink")
                .attr("href");
            var iframe = $(".mapIframe").find("iframe");
            iframe.attr("src", src);
        });
    });

    $(".storePhone a, .storeSite a").click(function(e) {
        e.stopPropagation();
    });
}

function storeFilter() {
    arrCity = [];
    arrState = [];
    $(".store").each(function() {
        var city = $(this)
            .find(".storeCity")
            .text();
        if (jQuery.inArray(city, arrCity) == -1) {
            arrCity.push(city);
            arrCity.sort();
        }

        var state = $(this)
            .find(".storeState")
            .text();
        if (jQuery.inArray(state, arrState) == -1) {
            arrState.push(state);
            arrState.sort();
        }
    });

    for (var i = 0; i < arrCity.length; i++) {
        $("#storeCity").append(
            $("<option>", {
                value: arrCity[i],
                text: arrCity[i]
            })
        );
    }

    for (var i = 0; i < arrState.length; i++) {
        $("#storeState").append(
            $("<option>", {
                value: arrState[i],
                text: arrState[i]
            })
        );
    }

    var iframe1 = $(".storeList li")
        .first()
        .find("a")
        .attr("href");
    $(".mapIframe iframe").attr("src", iframe1);

    $(".storeFilter select").change(function() {
        var selected = $(this).val();
        var select = $(this).attr("id");

        if (selected != "") {
            $(".store").hide();

            $(".store").each(function() {
                var needle = $(this)
                    .find("." + select)
                    .text();
                console.log("needle" + needle);
                console.log("selected: " + selected);
                if (selected === needle) {
                    $(this).show();
                }
            });
        } else {
            $(".store").show();
        }
    });
}

$(document).ready(function() {
    menuActive();
    AOS.init();
    slider();
    storeList();
    storeFilter();
});

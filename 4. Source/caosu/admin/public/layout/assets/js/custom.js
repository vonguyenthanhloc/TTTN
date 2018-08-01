$(function () {
    $(".color_settings_box").animate({ right: "0px" }, "slow").addClass("active");

    if ($(".content-wrapper").hasClass("wood-wrapper")) {
        $("#wood-wrapper-checkbox").prop("checked", true);
    }

    $("#wood-wrapper-checkbox").on("change", function () {
        if ($(this).is(":checked")) {
            $(".content-wrapper").addClass("wood-wrapper");
        }
        else {
            $(".content-wrapper").removeClass("wood-wrapper");
        }
    });

    $(".toggle-color-settings").on("click", function () {
        if ($(".color_settings_box").hasClass("active")) {
            $(".color_settings_box").animate({ right: "-200px" }, "slow").removeClass("active");
            $(".toggle-color-settings span").text("show");
        }
        else {
            $(".color_settings_box").animate({ right: "0px" }, "slow").addClass("active");
            $(".toggle-color-settings span").text("hide");
        }
    });

    $(".color-tooltip").tooltip();

    $(".color-box").on("click", function () {
        $(this).closest(".color-settings-w").find(".color-box").removeClass("active");
        $(this).addClass("active");
        replaceElement = $(this).closest(".color-settings-w").data("replace-element");
        leaveClass = $(this).closest(".color-settings-w").data("leave-class");
        replaceWith = $(this).data("replace-with");
        $(replaceElement).prop("class", leaveClass);
        $(replaceElement).addClass(replaceWith);
    });

    $(".widget-link-remove").on("click", function () {
        $(this).closest(".widget").slideUp("fast");
    });

    $(".is-dropdown-menu").on("click", function () {
        return $(this).next("ul").slideToggle("fast", function () {
            $(this).closest("li").toggleClass("active")
        }), false
    });
});
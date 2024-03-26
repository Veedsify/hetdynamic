$(document).ready(function () {

    $(".add_more_content_buttons").click(function (e) {
        const container = $("#" + $(e.target).data("container"));
        // Empty the input fields
        const newcontent = container.children().first().clone(true);
        newcontent.find("input").val("");
        newcontent.find("textarea").val("");
        container.append(newcontent);
    });

    $(".remove_content_buttons").click(function (e) {
        const container = $("#" + $(e.target).data("container"));
        if (container.children().length > 1) {
            container.children().last().remove();
        }
    });



    $(".active_switch").on("change", function (e) {
        // all form elements except checkboxes
        const parent = $(e.target).closest("div");
        const allInputs = parent.find("input, select, textarea").not(":checkbox");
        allInputs.prop("disabled", !e.target.checked);

        // Create a gray overlay
        if (e.target.checked) {
            parent.find(".overlay").remove();
        } else {
            const overlay = $("<div>").addClass("overlay").css({
                position: "absolute",
                top: 0,
                left: 0,
                width: "100%",
                height: "100%",
                background: "rgba(0, 0, 0, 0.1)",
                zIndex: 1000
            });
            parent.prepend(overlay);
        }
    });

    $(".active_switch").trigger("change");

});

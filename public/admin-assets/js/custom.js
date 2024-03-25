$(document).ready(function() {

    $(".add_more_content_buttons").click(function(e) {
        const container = $("#" + $(e.target).data("container"));
        // Empty the input fields
        const newcontent = container.children().first().clone(true);
        newcontent.find("input").val("");
        newcontent.find("textarea").val("");
        container.append(newcontent);
    });

});

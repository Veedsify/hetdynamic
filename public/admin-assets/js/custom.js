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
                background: "rgba(255, 255, 255, 0.2)",
                backdropFilter: "blur(3px)",
                zIndex: 1000
            });
            parent.prepend(overlay);
        }
    });

    $(".active_switch").trigger("change");


    $('#addNewServiceForm').on("submit", function (e) {
        try {
            const checkBoxes = $(this).find("input[type=checkbox]:checked");
            let allFieldsFilled = true;
            let message = '';
            const title = $(this).find("input[name=title]").val().length > 0;
            const featured_image = $(this).find("input[name=image]").prop("files").length > 0;
            const tags = $(this).find("input[name=tags]").val().length > 0;
            const country = $(this).find("select[name=country]").val().length > 0;
            const service = $(this).find("select[name=service]").val().length > 0;
            const status = $(this).find("select[name=status]").val().length > 0;

            if (!title || !featured_image || !tags || !country || !service || !status) {
                allFieldsFilled = false;
                message = `Please fill in these Details: 
                    ${!title ? "Title" : ''}
                    ${!featured_image ? "Featured Image" : ''}
                    ${!tags ? "Tags" : ''}
                    ${!country ? "Country" : ''} 
                    ${!service ? "Service" : ''} 
                    ${!status ? "Status" : ''}
                `;
                return false;
            }

            checkBoxes.each(function () {
                const parent = $(this).closest("div");
                const allInputs = parent.find("input").not(":checkbox");

                allInputs.each(function () {
                    if (!$(this).val() || ($(this).attr("type") === "file" && !$(this).prop("files").length)) {
                        allFieldsFilled = false;
                        message = parent.find("h1").text().trim();
                        return false; // break the loop
                    }
                });

                if (!allFieldsFilled) {
                    return false; // break the loop
                }
            });

            if (!allFieldsFilled) {
                e.preventDefault();
                swal({
                    title: "Error!",
                    text: `Please fill all fields in the ${message}`,
                    icon: "error",
                });
            }

        }
        catch (error) {
            console.log(error);
        }
    });

});

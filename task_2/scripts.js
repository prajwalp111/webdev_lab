$(document).ready(function () {
    $("#registrationForm").submit(function (e) {
        e.preventDefault(); // Prevent form from refreshing page
        const formData = $(this).serialize();
        $.post("process.php", formData, function (data) {
            $("#response").html(data).addClass("success");
        }).fail(function () {
            $("#response").html("Error submitting the form. Please try again.").addClass("error");
        });
    });
});

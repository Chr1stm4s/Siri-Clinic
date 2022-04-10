$(".language").click(function () {
    const lang = $(this).data("lang");

    $.post("switch.php", 
        { 
            lang: lang 
        }, 
        function (result) {
            console.log(result);
            location.reload();
        }
    );
});
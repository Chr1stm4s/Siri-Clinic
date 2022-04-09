if(sessionStorage.getItem("lang")) {
    var lang = sessionStorage.getItem("lang");
} else {
    var lang = "en";

    sessionStorage.setItem("lang", "en");
}

$.get("menu-" + lang + ".html", function(data){
    $("#headerMenu").html(data);
});

$(".language").click(function() {
    // const language = $(this).data("lang");

    // sessionStorage.setItem("lang", language);

    // $.get("menu-" + language + ".html", function(data){
    //     $("#headerMenu").html(data);
    // });

    // console.log(language)
    console.log("heool")
});
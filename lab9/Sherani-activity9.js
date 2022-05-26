$(document).ready(function() {
	//on click for <a> element
    $("a").click(function () {
        var title = $(this).attr("title");        
        getJSON("json_files/"+title+".json"); 
    });

}); // end ready

function getJSON(jsonFileURL) {
    $.ajax({
        url: jsonFileURL,
        //handle as text
        dataType: "text",
        success: function (data) {
            //data downloaded + pass data
            var json = $.parseJSON(data);
            // display results
            $("main > h2").html(json.speakers[0].month + "<br/>" + json.speakers[0].speaker);
            $("main > h1").html(json.speakers[0].title);
            $("main > img").attr("src", json.speakers[0].image);
            $("main > p").html(json.speakers[0].text);
        }
    });
}

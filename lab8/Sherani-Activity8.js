//javascript section
var progLang = [
    "ActionScript",
    "AppleScript",
    "Asp",
    "JavaScript",
    "Lisp",
    "Perl",
    "PHP",
    "Python"
];

//jQuery section
$(document).ready(
    function(){
        $("#birthday").datepicker();

        $("#prog-lang").autocomplete({
            source: progLang
        });
    }
        
);

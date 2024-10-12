// ajax_comments.js
document.addEventListener("DOMContentLoaded", function() {
    loadComments();
});

function loadComments() {
    var xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("comments-container").innerHTML = this.responseText;
        }
    };

    xhttp.open("POST", "../script_php/load_comments.php", true);
    xhttp.send();
}

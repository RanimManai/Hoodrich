document.getElementById("email").placeholder="Enter your mail"
document.addEventListener("DOMContentLoaded", function() {
    var button = document.querySelector("#reset");

    button.onclick=function(event) {
        
        event.preventDefault()
        
        document.getElementById("email").value="";
        document.getElementById("country").value="";
        document.getElementById("name").value="";
        document.getElementById("last").value="";
        document.getElementById("adress").value="";
        document.getElementById("Appartement").value="";
        document.getElementById("code").value="";
        document.getElementById("City").value="";
        document.getElementById("tel").value="";
        document.getElementById("ccn").value="";
        document.getElementById("date").value="";
        document.getElementById("pass").value="";
        document.getElementById("owner").value="";
        document.getElementById("prix").value="";

        

        
    };
})

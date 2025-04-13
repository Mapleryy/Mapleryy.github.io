$(document).ready(function() {
      $("#confirmBtn").click(function(event) {
        event.preventDefault(); 

        const email = $("#email").val().trim();
        const confirmEmail = $("#confirmEmail").val().trim();

        $("#emailMsg").text("*");
        $("#confirmEmailMsg").text("*");

        let valid = true;

        if(email === ""){
          $("#emailMsg").text("This field is required.");
          valid = false;
        }

        // Check if the confirmation field is empty
        if(confirmEmail === ""){
          $("#confirmEmailMsg").text("This field is required.");
          valid = false;
        }

        // If both fields are filled, check for matching emails
        if(email !== "" && confirmEmail !== ""){
          if(email !== confirmEmail){
            // Remove the primary email asterisk and set an error on the confirm field
            $("#emailMsg").text("");
            $("#confirmEmailMsg").text("This email address does not match.");
            valid = false;
          }
        }

        // Only alert if the fields are filled and emails match
        if(valid && (email === confirmEmail)){
          alert("Email confirmation successful!");
        }
      });
    });
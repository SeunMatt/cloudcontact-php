



function showDetails(data) {
    if(data) {
//    console.log("data in showDetails \n" + JSON.stringify(data));
    
        $("#viewFirstName").html(data.first_name);
		$("#viewMiddleName").html(data.middle_name);
		$("#viewLastName").html(data.last_name);
		$("#viewMobile").html(data.mobile);
		$("#viewFax").html(data.fax);
		$("#viewAddress").html(data.address);
		$("#viewEmail").html(data.email);
		$("#viewWork").html(data.work);
		$("#viewHome").html(data.home);
                $("#viewNote").html(data.note);
                
//                console.log("show details called");
    }
};

//this is called everytime a view button is clicked from the table for a row
function loadEditDetails(data) {
     if(data) {
         console.log("data from loadEdit details " + JSON.stringify(data));
        $("#newId").val(data._id);
        $("#newFirstName").val(data.first_name);
		$("#newMiddleName").val(data.middle_name);
		$("#newLastName").val(data.last_name);
		$("#newMobile").val(data.mobile);
		$("#newFax").val(data.fax);
		$("#newAddress").val(data.address);
		$("#newEmail").val(data.email);
		$("#newWork").val(data.work);
		$("#newHome").val(data.home);
        $("#newNote").val(data.note);
    }
}


function clearEditDetails() {
        $("#newFirstName").val("");
		$("#newMiddleName").val("");
		$("#newLastName").val("");
		$("#newMobile").val("");
		$("#newFax").val("");
		$("#newAddress").val("");
		$("#newEmail").val("");
		$("#newWork").val("");
		$("#newHome").val("");
        $("#newNote").html("");
}



function saveEdit(data, token) {
    
    if(data.firstName && data.mobile) {
                      
//    console.log("token sent = " + data.token + "\n");    
    console.log("Save Edit data = \n" + JSON.stringify(data));
    
        
            $.ajax({
             type: "PUT",
             url: "/contact/",
             headers: {'X-XSRF-TOKEN' : token}, 
             cache: false,    
             data: { "data" : data },
             success: function(data) {
                console.log("returned data = " + JSON.stringify(data)); 
                $("#alertBoxModal").css({"background-color": "rgba(16,71,116,0.9)"});
                $("#logModal").html("<strong>CONTACT UPDATED SUCCESSFULLY!</strong>");
             },
            error: function(error) {
                console.log("returned error = " + JSON.stringify(error)); 
                $("#alertBoxModal").css({"background-color": "rgba(255,44,30,0.66)"});
                $("#logModal").html("<strong>OOPS! UNABLE TO UPDATE CONTACT! PLEASE TRY AGAIN</strong>");
            }
                             
          });
      } else {
        $("#logNewEdit").html("<strong>At least First Name and Mobile is Required!</strong>");
      }
}


function saveNew(data, token) {
    
   console.log("SaveNew() invoked " + JSON.stringify(data));
   
    
 if(data.firstName && data.mobile) {
    console.log("Save New data = \n" + JSON.stringify(data));
     $.ajax({
         type: "post",
         url: "/contact/",
         headers: {"X-XSRF-TOKEN": token},
         cache: false,
         data: { "data": data},
         success: function() {
            $("#alertBoxModal").css({"background-color": "rgba(16,71,116,0.9)"});
           $("#logModal").html("<strong>CONTACT SAVED SUCCESSFULLY!</strong>");
       },
       error: function() {
           $("#alertBoxModal").css({"background-color": "rgba(255,44,30,0.66)"});
           $("#logModal").html("<strong>OOPS! UNABLE TO SAVE CONTACT! PLEASE TRY AGAIN</strong>");
        }
         
     });
 } else {
     $("#logNewEdit").html("<strong>At least First Name and Mobile are Required!</strong>");
 }   
}

function deleteData(id, token) {
//    "5801b7c89177d818e0690a20"
 if(id) {
     
     console.log("id from delData " + id + "\n toke = " + token);
     
    $.ajax({
       type: "DELETE",
       url: "/contact/" + id,
       headers: {"X-XSRF-TOKEN": token},
       cache: false,    
       success: function() {
            $("#alertBox").css({"background-color": "rgba(16,71,116,0.9)"});
           $("#log").html("<strong>DELETED SUCCESSFULLY!</strong>");
       },
       error: function() {
           $("#alertBox").css({"background-color": "rgba(255,44,30,0.66)"});
           $("#log").html("<strong>OOPS! UNABLE TO DELETE CONTACT! PLEASE TRY AGAIN</strong>");
        }
    });   
 } else {
     $("#log").html("<strong>OOPS! UNABLE TO DELETE CONTACT! PLEASE TRY AGAIN</strong>");
     $("#alertBox").show();
 }
}
 
 
function deleteConfirm(msg, yesFunction) {
	 $("#confirmBody").html(msg);
	 $("#confirmModal").modal({backdrop:"static"});
	 $("#confirmYesBt").click ( yesFunction);   	 
 }
 
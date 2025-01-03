// $(document).ready(function(){
//     $("#contactForm").submit(function(event){
//         submitForm();
//         return false;
//     });
// });

// function submitForm(){
//     $.ajax({
//         type: "Post",
//         url: "saveContact.php",
//         cache:false,
//         data: $('form#contactForm').serialize(),
//         success: function(response){
//             $("#message").html(response);
//             $("#contact-modal").modal('hide');
//         },
//         error: function(){
//             alert("Error");
//         }
//     });
// }
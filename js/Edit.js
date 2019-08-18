// function fill(Value) {
//     $('#idsearch').val(Value);
//     $('#iddisplay').hide();
//  }
//  $(document).ready(function() {
//     $("#idsearch").keyup(function() {
//         console.log("Search... for id");
//         var name = $('#idsearch').val();
//         if (name == "") {
//             $("#iddisplay").html("");
//         }
//         else {
//             $.ajax({
//                 type: "POST",
//                 url: "./routes/edit.php",
//                 data: {
//                     search: name
//                 },
//                 success: function(html) {
//                     $("#iddisplay").html(html).show();
//                 }
//             });
//         }
//     });
//  });
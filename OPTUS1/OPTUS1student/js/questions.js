
<SCRIPT LANGUAGE="JavaScript">

$("document").ready(function() {


    $("p[class=pregunta]").css("color","black");
    $("input[type=radio]").css("text-align", "justify");
    $("body").css("margin-right", "100px").css("margin-left", "100px").css("margin-top", "50px");
    $("body").css("color", "black").css("background-position", "center").addClass('bg2');
    $("p[class=alerta]").css("color", "red");
    $("input[class=submit]").css("font-size", "25px").css("font-weight", "bold").css("border-weight", "20px black")

    $(document).ajaxStart(function(){
        console.log("AJAX starting");
    });
    $(document).ajaxStop(function(){
        console.log("AJAX request ended");
    });
    $(document).ajaxSend(function (evt,jqXHR, options){
        console.log("About to send request for data");
    });
    $(document).ajaxComplete(function (evt,jqXHR, options){
        console.log("Everything's finished");
    })
    $(document).ajaxError(function (evt,jqXHR, options, err){
        console.log("Hmm. something went wrong");
    });
    $(document).ajaxSuccess(function (evt,jqXHR, options){
        console.log("Looks like everything worked");
    });
    })



function testResults (form) {
var id = form.idStudents.value;
var brainQuadrant
var answer = [0,0,0,0,0,0,0,0,0,0,0,0];
  answer[0] = form.q1.value;
  answer[1] = form.q2.value;
  answer[2] = form.q3.value;
  answer[3] = form.q4.value;
  answer[8] = form.q9.value;
  answer[4] = form.q5.value;
  answer[5] = form.q6.value;
  answer[6] = form.q7.value;
  answer[7] = form.q8.value;
  answer[9] = form.q10.value;
  answer[10] = form.q11.value;
  answer[11] = form.q12.value;

for (i=0;i<12;i++){
if (answer[i] == ""){
  alert("You must answer all questions")
  i=12
  var ok = 0;
}}
if (ok !=0 ){
      var counts1 = 0;
      for(var i = 0; i < answer.length; ++i){
      if(answer[i] == 1)
      counts1++;}
      var counts2 = 0;
      for(var i = 0; i < answer.length; ++i){
      if(answer[i] == 2)
      counts2++;}
      var counts3 = 0;
      for(var i = 0; i < answer.length; ++i){
      if(answer[i] == 3)
      counts3++;}
      var counts4 = 0;
      for(var i = 0; i < answer.length; ++i){
      if(answer[i] == 4)
      counts4++;}

  var result = Math.max(counts1, counts2, counts3, counts4);
   if (result == counts1) brainQuadrant = "analytical";
   if (result == counts3) brainQuadrant = "practical";
   if (result == counts2) brainQuadrant = "relational";
   if (result == counts4) brainQuadrant = "experimental";
   alert("You are a " + brainQuadrant + " student");

  updateRecord(id, brainQuadrant);
}
}

function updateRecord(id, brainQuadrant)
{
  jQuery.ajax({
   type: "POST",
   url: "update.php",
   data: { id : id , bq : brainQuadrant },
   cache: false,
   success: function(response)
   {
     alert("Record successfully updated");
   }
 });
}



</SCRIPT>


$(document).ready(function(){
        $("#myToast").toast({ delay: 9000});
        $("#myToast").toast({ autohide: true});
        $("#myToast").toast('show');
});



//tool tip
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})

//Confirm Delete //
$(document).ready(function(){
    $(".delete").click(function(e){
        if(!confirm('This will Delete Permanently!')){
            e.preventDefault();
            return false;
        }
        return true;
    });
});

//Animated Congo Message//

var congoMessage = document.getElementById('congoMessage');
 for (var i = 0; i < congoMessage.length; i = i + 1) {
      $(congoMessage[i]).fadeOut("slow");
}

//Animated COngo message End
//Japa Counter +/-

var countPlus = document.getElementById("countPlus");
var countMinus = document.getElementById("countMinus");
var reset = document.getElementById("countReset");
var japa = document.getElementById("japa");
var mala = document.getElementById("mala");

mala.value = parseInt(document.getElementById("japa").value / 108);
 
count = japa.value;
count_ = mala.value;
countPlus.onclick = function() {
  x = parseInt(document.getElementById("japa").value);
  x += 1;
  japa.value = x;

    mala.value = parseInt(document.getElementById("japa").value / 108);
};

countMinus.onclick = function() {
  japaVal = document.getElementById("japa").value -= 1;
  if(japaVal<=0){
    e.preventDefault();
    return false;
  }
  japa.value = japaVal;
  mala.value = parseInt(document.getElementById("japa").value / 108);
};

reset.onclick = function() {
  japa.value = count;
  mala.value = count_;
};

japa.oninput = function(){
    mala.value = parseInt(document.getElementById("japa").value / 108);
}

mala.oninput = function(){
    japa.value = parseInt(document.getElementById("mala").value * 108);

}


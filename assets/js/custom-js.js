
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

//minus plus input
$(document).ready(function() {
      $('.minus').click(function () {
        var $input = $(this).parent().find('input');
        var count = parseInt($input.val()) - 1;
        count = count < 1 ? 1 : count;
        $input.val(count);
        $input.change();
        return false;
      });
      $('.plus').click(function () {
        var $input = $(this).parent().find('input');
        $input.val(parseInt($input.val()) + 1);
        $input.change();
        return false;
      });
    });

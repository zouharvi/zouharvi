var prev = '-1';
var blocked = false;

function loadNext(id)
{
  $('#game_block').show();
  $('#story_'+prev).fadeOut(function(){
    prev = id;
    $('#story_' + id).fadeIn(function(){
      $('#game_block').hide();
    });
  });
}
$(document).ready(function(){

  $('.sl').each(function(index){
    $(this).click(function(){
      if(blocked)
        return;
      $(this).fadeOut(function() {
        blocked = true;
        $(this).css('font-style', 'italic');
        $(this).fadeIn(function() { blocked = false;});
      });
      loadNext($(this).attr('n'));
    });
  });

  loadNext('0')
});

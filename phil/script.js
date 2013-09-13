function addHands (amount) {
    for (var i = 0; i < amount; i++) {
        var height = Math.floor(Math.random()*(window.innerHeight-10)+1);
        var width = Math.floor(Math.random()*(window.innerWidth-10)+1);//<!-- THESE ARE SUPPOSED TO BE RANDOM THEY ARE NOT -->
        $('body').append("<div class='hand' style='position:absolute;left:"+width+";top:"+height+";'><img src='hand.gif' height='160px'width='160px'/></div>");
    }
}
$(document).ready(function() {
    addHands (20);
    $('.welcome').fadeOut(4000);
    var amount = 20;
    $(document).on("click", '.hand', function(e) {
        $(e.target).hide('fast')
        amount--;
        $(this).off("click");
        if (amount == 10) {
            $('.secret').show();
            $('.secret').fadeOut(4000);
        }
        else if (amount <= 0) {
            $('.secretiframe').show();
        }
    });
});
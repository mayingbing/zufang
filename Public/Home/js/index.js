$(function(){
   $('#zuke').click(function(){
       $('#type').val("0");
          $(this).removeClass('unselect');
          $(this).addClass('select');
          $('#fangdong').addClass('unselect');
          $('#fangdong').removeClass('select');
       document.loginform.action = "index.php/home/zuke/zk_shouye";
   });

    $('#fangdong').click(function(){
        $('#type').val("1");
        $(this).removeClass('unselect');
        $(this).addClass('select');
        $('#zuke').addClass('unselect');
        $('#zuke').removeClass('select');
        document.loginform.action = "index.php/home/fangdong/fd_shouye";
    });

});

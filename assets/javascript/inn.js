$(function(){
  var accessToken = '1543242850.b763e13.98366cc6942a46f1b963bd0933152f16';
  $.getJSON('https://api.instagram.com/v1/users/self/media/recent/?access_token='+accessToken+'&callback=?',function (insta) {
    $.each(insta.data,function (photos,src) {
      if ( photos === 20 ) { return false; }
      $('<a href="'+src.link+'" class="post">'+
        '<div class="image" style="background-image:url('+src.images.standard_resolution.url+');"></div>'+
        '<ul>'+
        '<li><i class="fa fa-camera"></i> '+src.filter+'</li>'+
        '<li><i class="fa fa-heart"></i> '+src.likes.count+'</li>'+
        '<li><i class="fa fa-comment"></i> '+src.comments.count+'</li>'+
        '</ul></a>').appendTo('#content');
    });
  });
});
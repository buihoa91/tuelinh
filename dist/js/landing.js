function showPopupVideo(t,i){$(t).click(function(){var t=$(this).data("src"),c=$(this).data("title");$(i).fadeIn(),$(i).find("iframe").attr("src",t),$(i).find(".title").text(c),$(i+" .close-popup").click(function(){$(i).find("iframe").attr("src",""),$(i).fadeOut()})})}function showPopupNotify(t,i){$(t).fadeIn(),$(t).find(".message").html(i),$(t+" .close-popup").click(function(){$(t).fadeOut()})}$(document).ready(function(){var t=0;$(".btn-fix").click(function(){0==t?($(".time-box").addClass("active"),t++):($(".time-box").removeClass("active"),t--)})});
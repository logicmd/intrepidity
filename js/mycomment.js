$('.comment-reply-link').click(function() {
//定义一个变量atname
//查找在每条从属评论中留言者名称的样式（本例是cite），然后记录它的文字内容，也就是留言都的名字了
//你可以预先为评论的留言名称用一个包起，而这个“hisname”也就与本例的cite了。
var atname = $(this).parents.parents(".comment-avatar").find("cite").text();
//然后向留言框中输入@XXX的字样。需要指定留言框的ID，这里是#comment
//最后通过.focus()顺便激活留言框的输入状态
$("#comment").append("@" + atname + " ").focus();
});

$('#cancel-comment-reply-link').click(function() {
$("#comment").empty();
});
$(function () {
    "use strict";

    $("button.reply-to-comment").click(function () {
        var repliedToLi = $(this).closest("li");

        var replyUl = repliedToLi.next();

        if (replyUl.prop("tagName") != "UL") {
            replyUl = repliedToLi.after('<ul class="children"></ul>').next();
        }

        $("#new-comment").prependTo(replyUl);
        $(".cancel-reply").show();

        $("#comment_parent").val(repliedToLi.data("comment-id"));
    });

    $("button.cancel-reply").click(function () {
        $(".cancel-reply").hide();
        $("#new-comment").appendTo($("#commentlist"))
        $("#comment_parent").val('');
    });
})
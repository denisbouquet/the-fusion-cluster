jQuery(function(a){a(".hc_loadmore").on("click",function(t){t.preventDefault();var e=a(this).attr("data-posts"),r=a(this).attr("data-currentpage"),n=a(this).attr("data-maxpage");a(this).attr("data-currentpage",parseInt(r)+1);var o=a(this),s={action:"loadmore",query:e,page:r};a.ajax({url:hc_loadmore_params.ajaxurl,data:s,type:"POST",beforeSend:function(a){o.find("a strong").text("Loading...")},success:function(t){t?(o.find("a strong").text("Load more NEWS"),a(".js-wrapper").find("a:last-of-type").after(t),r++,r==n&&o.parents(".container").remove()):o.parents(".container").remove()}})})});
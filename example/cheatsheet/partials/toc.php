<script>

	$(document).ready(function(){
		var ToC = "<ol>";

		var newLine, section, title;

		$(".row.section").each(function() {

			section = $(this);
			title = section.attr("id");
			
			newLine = "<li><a href='#" + title + "'>" + title + "</a><ol>";

			if(this.getElementsByTagName("h4")){

				sub_titles = this.getElementsByTagName("h4");

				for (var i = 0; i <= sub_titles.length-1; i++) {
					subtitle = $(sub_titles[i]);
					subtitle_link = subtitle.text();

					subtitle.attr("id",subtitle_link);
					newLine += "<li><a href='#" + subtitle_link + "'>"+ subtitle_link +"</li>";
				};
			}

			newLine += "</ol></li>"

			ToC += newLine;

		});

		ToC += "</ol>";

		$("#toc").append(ToC);
	});

</script>

<div id="toc" class="toc">
	<h4>Content</h4>
</div>
$.noConflict();

var ftypes = [ ".txt",".text",".pdf",".doc",".docx",".xls",".xlsx",".ppt",".pptx",".gif",".jpg",".jpeg",".png",".bmp",".tif",".zip",".zipx",".rar",".tar",".gz",".dmg",".iso",".img",".bz2",".wav",".mp3",".fla",".flac",".ra",".rma",".aif",".aiff",".aa",".aac",".aax",".ac3",".au",".ogg",".avr",".3ga",".flac",".mid",".midi",".m4a",".mp4a",".amz",".mka",".asx",".pcm",".m3u",".wma",".xwma",".avi",".mpg",".mp4",".mkv",".mov",".wmv",".vp6",".264",".vid",".rv",".webm",".swf",".h264",".flv",".mk3d",".gifv",".oggv",".3gp",".m4v",".movie",".divx",".css",".js",".py",".git",".py",".cpp",".h",".ini",".config",".exe",".jar",".dll",".bat",".pl",".scr",".msi",".app",".deb",".apk",".jar",".vb",".prg",".sh" ];

jQuery(document).ready(function($){

	$(".link-header a.link-title, .link-description a:not(:has(img)), .linklist-item-title h2 a, .linklist-item-description a:not(:has(img))").each( function (nId,oData,oError){
		var fext = $(this).attr('href').split('.').pop();

		if ( ftypes.includes('.'+fext)) {
			return true;
		}

		$(oData).css(
			"background-image",
			"url(\"https://www.google.com/s2/favicons?domain="+jQuery(oData).prop("hostname")+"\")"
		);

});

});

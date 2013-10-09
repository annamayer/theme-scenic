<footer>
    <p>Copyright &copy; scenic_photo | <a href="http://www.css3templates.co.uk">design from css3templates.co.uk</a></p>
</footer>
</div>
<p>&nbsp;</p>
</body>
<?php
$site->addJavascript(BASE_URL.LIBRARY_DIR.'js/jquery/jquery.js');
$site->addJavascript(BASE_URL.LIBRARY_DIR.'js/colorbox/jquery.colorbox.js');
$site->addJavascript(BASE_URL.THEME_DIR.THEME.'/js/modernizr-1.5.min.js');
$site->addJavascript(BASE_URL.THEME_DIR.THEME.'/js/theme.js');
$site->addJavascript(BASE_URL.THEME_DIR.THEME.'/js/jquery.easing-sooper.js');
$site->addJavascript(BASE_URL.THEME_DIR.THEME.'/js/jquery.sooperfish.js');
echo $site->generateJavascript();
?>
</html>

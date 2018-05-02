<style type="text/css">
.mot {
background-color:#FFFF00;
font-weight: bold;
}
</style>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.3/jquery.min.js" /></script>
<script language="javascript" type="text/javascript">
$(document).ready(function() {
    HighlightKeywords(['je', 'mirandais']);
});
 
function HighlightKeywords(keywords) {        
var el = $('body');
    $(keywords).each(function() {
        var pattern = new RegExp('('+this+')', ['gi']);
        var rs = '<span class="mot">$1</span>';
        el.html(el.html().replace(pattern, rs));
    });
}
</script>
<body>

Bonjour à tous,
 
Je souhaiterais savoir s'il était possible de rechercher dans un texte un mot clé et de colorer toutes les occurrences en javascript.
 
Je pense que cela doit-être faisable mais je ne vois pas comment.
 
Des idées?
Merci d'avance

</body
//<![CDATA[ 
$(document).ready(function() {
    var $categoriasFiltro = $(".orderBy>select"),
    qtdeItens = $('#PS').val();

    $categoriasFiltro.find("option").map(function() {
        var $this = $(this);
        return $('<li>').append($("<a>")
            .attr("href", "?PS="+qtdeItens+"&O="+$this.attr("value"))
            .text($this.text())
            .get()).get();
    }).appendTo($("<ul id='listaCategoria'>")).parent().replaceAll($categoriasFiltro);

    $('#listaCategoria>li:first-child').hide();

});
//]]> ​
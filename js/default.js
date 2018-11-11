$('#myTab a').on('click', function (e) {
    e.preventDefault()
    $(this).tab('show')
  });

  // $('.collapse').collapse();$(document).ready(function() {
    // $(document).ready(function() {
    //   $("a#ajax").click(function() { // inclui todos os links com id="ajax"
    //     $("#attPS").load($(this).attr("href")); // carrega o conteúdo da página em HREF dentro da DIV #ajaxContent (id="ajaxContent")
    //     return false; // remove a ação do link para navegar até a página do HREF, pois ela já foi carregada na DIV
    //   });
    // });

    $('#myTab a').on('click', function (e) {
      e.preventDefault()
      $(this).tab('show')
    })

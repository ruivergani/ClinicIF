<!-- Botão de Voltar ao Topo -->
<div class="smoothscroll-top">
    <span class="scroll-top-inner">
      <i class="fas fa-arrow-alt-circle-up fa-2x"></i>
    </span>
</div>
<script type='text/javascript'>
//<![CDATA[
$(function(){
    $(document).on('scroll', function(){
   
    if ($(window).scrollTop() > 100) {
        $('.smoothscroll-top').addClass('show');
          } else {
        $('.smoothscroll-top').removeClass('show');
          }
      });
      $('.smoothscroll-top').on('click', scrollToTop);
  });
   
  function scrollToTop() {
    verticalOffset = typeof(verticalOffset) != 'undefined' ? verticalOffset : 0;
    element = $('head');
    offset = element.offset();
    offsetTop = offset.top;
    $('html, head').animate({scrollTop: offsetTop}, 600, 'linear');
}
  //]]>
  </script>
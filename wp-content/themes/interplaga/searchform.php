<?php ?>
<form method="get" class="headerBlock__top--rightBuscadorSearchForm" id="searchform" action="<?php echo site_url('/'); ?>">
    <input type="submit" class="headerBlock__top--rightBuscadorSearchFormIconSearch" value="search">
    <input type="search" class="headerBlock__top--rightBuscadorSearchFormSearchBox" name="s" id="s" placeholder="<?php esc_attr_e( ' Buscar en el sitio', 'Interplaga' ); ?>" alt="Buscar">
    <input type="hidden" name="post_type" value="Interplaga">
</form>
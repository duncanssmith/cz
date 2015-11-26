<?php 
#---------------------------------------------------------------------
# Here we are generating an XML file containing the given PHP array 
# definition 
#---------------------------------------------------------------------
  if($control['generate_pages_xml']){
    $filename=$paths['xml'].$files['pagesxml'];
    generate_xml($pages, $filename);
  }
  if($control['generate_products_xml']){
    $filename=$paths['xml'].$files['productsxml'];
#    generate_xml($products, $filename);
  }

#---------------------------------------------------------------------
# Here we are writing a text file generated from the main pages array
# This text file is included and forms the MENU navigation
# This generated file requires an intermediate temp file also
#---------------------------------------------------------------------
  if($control['generate_menu']){ 
    generate_menu($pages);
  }

  if($control['generate_tabs']){
    #generate_tabs($pages,$paths['include']."/".$files['tabs']);
		generate_tabs($pages, $files['tabs']);
  }elseif($control['include_tabs']){
    #include "include/tabs.tmp";
    include "tabs.tmp";
    tabs();
  }
?>

<script type='text/javascript'>

<?php
  if($control['generate_menu']){
    output_menu();
  }
  
  if($control['include_menu']){
    $file=$paths['include']."/".$files['menu'];
    include $file;

    // please note the closing brace 
    // of this conditional "if" statement 
    // is AFTER the following section
    // of JavaScript Menu code

    include "js/menu_base.js";
  }
?>
</script>
<noscript>Your browser does not support javascript</noscript>



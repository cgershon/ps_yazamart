<?php>

// ADDED YGPC 20 12 2016 redirect home page to the blog page 
	
class IndexControllerCore extends FrontController {</div>

public function initContent()

{

	Tools::redirect('index.php?fc=module&module=ph_simpleblog&controller=list&id_lang=1');
}

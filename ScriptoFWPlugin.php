<?php

class ScriptoFWPlugin extends Omeka_Plugin_AbstractPlugin {    
    protected $_hooks = array(
      'public_head',
      'admin_head'
    );
    
    /**
     * Add css and js in the head
     */
    public function hookPublicHead($args) {
      $this->_addHookContent($args, "public_head");
      queue_css_file('scriptofw'); // root > views > public > css
      queue_js_file('scriptofw'); // root > views > public > javascripts
    }
    public function hookAdminHead($args) {
      $this->_addHookContent($args, "public_head");
      queue_css_file('scriptofw');// root > views > admin > css
      queue_js_file('scriptofw'); // root > views > admin > javascripts
    }
    private function _addHookContent($args, $hookName)
    {        
        // Do fancy stuff here.
    }
}

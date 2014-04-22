<?php

class ScriptoFWPlugin extends Omeka_Plugin_AbstractPlugin {    
    protected $_hooks = array(
      'public_head',
      'admin_head'
    );
    
    /**
     * Add css and js in the header of the theme.
     */
    public function hookPublicHead($args) {
      $this->_addHookContent($args, "public_head");
      queue_css_file('scriptofw');
      queue_js_file('scriptofw');
    }
    public function hookAdminHead($args) {
      $this->_addHookContent($args, "public_head");
      queue_css_file('scriptofw');
      queue_js_file('scriptofw');
    }
    private function _addHookContent($args, $hookName)
    {        
        // Do stuff here.
    }
}

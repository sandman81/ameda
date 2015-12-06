<?php 
    function ameda_preprocess_page(&$vars, $hook) {
        if (isset($vars['node'])) {
            $suggest = "page__node__{$vars['node']->type}";
            $vars['theme_hook_suggestions'][] = $suggest;
        }
    }
?>

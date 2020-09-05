<?php
/**
 * Shaarli favicons Plugin
 *
 * @author Jeff Sacco 
 * @link 
 */

use Shaarli\Plugin\PluginManager;

/**
 * Get plugin assets base path
 * 
 * @param array $data - hook data
 * 
 * @return string - the basepath of the assets
 */
function favicons_get_basepath($data) {
    return ($data['_BASE_PATH_'] ?? '') . '/' . PluginManager::$PLUGINS_PATH;
}

/**
 * Hook render_includes.
 * Executed on every page redering.
 *
 * Template placeholders:
 *   - css_files
 *
 * Data:
 *   - _PAGE_: current page
 *   - _LOGGEDIN_: true/false
 *
 * @param array $data data passed to plugin
 *
 * @return array altered $data.
 */
function hook_favicons_render_includes($data)
{
    // List of plugin's CSS files.
    // Note that you just need to specify CSS path.
    $data['css_files'][] = favicons_get_basepath($data) . '/favicons/favicons.css';
    return $data;
}

/**
 * Hook render_footer.
 * Executed on every page redering.
 *
 * Template placeholders:
 *   - text
 *   - endofpage
 *   - js_files
 *
 * Data:
 *   - _PAGE_: current page
 *   - _LOGGEDIN_: true/false
 *
 * @param array $data data passed to plugin
 *
 * @return array altered $data.
 */
function hook_favicons_render_footer($data)
{
    // List of plugin's JS files.
    // Note that you just need to specify CSS path.
	$data['js_files'][] = favicons_get_basepath($data) . '/favicons/jquery-3.3.1.slim.min.js';
	$data['js_files'][] = favicons_get_basepath($data) . '/favicons/favicons.js';
    return $data;
}

/**
* This function is never called, but contains translation calls for GNU gettext extraction.
*/
function favicons_dummy_translation()
{
    // meta
    t('Adds favicon/filetype icons to links.');
}

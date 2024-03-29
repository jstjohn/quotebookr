<?php
/* SVN FILE: $Id$ */
/**
 * Debug View
 *
 * Custom Debug View class, helps with development.
 *
 * PHP versions 4 and 5
 *
 * CakePHP :  Rapid Development Framework <http://www.cakephp.org/>
 * Copyright 2006-2008, Cake Software Foundation, Inc.
 *								1785 E. Sahara Avenue, Suite 490-204
 *								Las Vegas, Nevada 89104
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @filesource
 * @copyright		Copyright 2006-2008, Cake Software Foundation, Inc.
 * @link			http://www.cakefoundation.org/projects/info/cakephp CakePHP Project
 * @package			cake
 * @subpackage		cake.cake.libs.
 * @since			CakePHP v 1.2.0.4487
 * @version			$Revision$
 * @modifiedby		$LastChangedBy$
 * @lastmodified	$Date$
 * @license			http://www.opensource.org/licenses/mit-license.php The MIT License
 */
App::import('Vendor', 'DebugKit.DebugKitDebugger');
App::import('Component', 'DebugKit.Toolbar');
/**
 * DebugView used by DebugKit
 *
 * @package debug_kit.views
 * @todo Remove workarounds.
 */
class DebugView extends DoppelGangerView {
/**
 * The old extension of the current template.
 *
 * @var string
 */
	var $_oldExtension = null;
/**
 * Overload _render to capture filenames and time actual rendering of each view file
 *
 * @param string $___viewFn Filename of the view
 * @param array $___dataForView Data to include in rendered view
 * @return string Rendered output
 * @access protected
 */
	function _render($___viewFn, $___dataForView, $loadHelpers = true, $cached = false) {
		if (isset($this->_oldExtension)) {
			$___viewFn = substr($___viewFn, 0, -10) . $this->_oldExtension;
			$this->_oldExtension = null;
		}
		if (!isset($___dataForView['disableTimer'])) {
			DebugKitDebugger::startTimer('render_' . basename($___viewFn), sprintf(__('Rendering %s', true), Debugger::trimPath($___viewFn)));
		}

		$out = parent::_render($___viewFn, $___dataForView, $loadHelpers, $cached);

		if (!isset($___dataForView['disableTimer'])) {
			DebugKitDebugger::stopTimer('render_' . basename($___viewFn));
		}
		return $out;
	}
	
/**
 * Renders view for given action and layout. If $file is given, that is used
 * for a view filename (e.g. customFunkyView.ctp).
 * Adds timers, for all subsequent rendering, and injects the debugKit toolbar.
 *
 * @param string $action Name of action to render for
 * @param string $layout Layout to use
 * @param string $file Custom filename for view
 * @return string Rendered Element
 */	
	function render($action = null, $layout = null, $file = null) {
		DebugKitDebugger::startTimer('viewRender', __('Rendering View', true));
		$out = parent::render($action, $layout, $file);
		DebugKitDebugger::stopTimer('viewRender');
		DebugKitDebugger::stopTimer('controllerRender');
		
		if (isset($this->loaded['toolbar'])) {
			$this->loaded['toolbar']->postRender();
		}
		//Temporary work around to hide the SQL dump at page bottom
		Configure::write('debug', 0);
		return $this->output;
	}

/**
 * Workaround _render() limitation in core. Which forces View::_render() for .ctp and .thtml templates
 * Creates temporary extension to trick View::render() & View::renderLayout()
 *
 * @param string $name Action name.
 * @return string
 **/
	function _getViewFileName($name = null) {
		$filename = parent::_getViewFileName($name);
		return $this->_replaceExtension($filename);
	}
	
/**
 * Workaround _render() limitation in core. Which forces View::_render() for .ctp and .thtml templates
 * Creates temporary extension to trick View::render() & View::renderLayout()
 *
 * @param string $name Layout Name
 * @return string
 **/
	function _getLayoutFileName($name = null) {
		$filename = parent::_getLayoutFileName($name);
		return $this->_replaceExtension($filename);
	}
	
/**
 * replace the Extension on a filename and set the temporary workaround extension.
 *
 * @param string $filename Filename to replace extension for.
 * @return string
 **/
	function _replaceExtension($filename) {
		if (substr($filename, -3) == 'ctp') {
			$this->_oldExtension = 'ctp';
			$filename = substr($filename, 0, strlen($filename) -3) . 'debug_view';
		} elseif (substr($filename, -5) == 'thtml') {
			$this->_oldExtension = 'thtml';
			$filename = substr($filename, 0, strlen($filename) -5) . 'debug_view';
		}
		return $filename;
	}
}
?>
<?php
App::import('Core', 'route/PluginShortRoute');
/**
 * test case for PluginShortRoute
 *
 * @package cake.tests.libs
 */
class PluginShortRouteTestCase extends  CakeTestCase {
/**
 * startTest method
 *
 * @access public
 * @return void
 */
	function startTest() {
		$this->_routing = Configure::read('Routing');
		Configure::write('Routing', array('admin' => null, 'prefixes' => array()));
		Router::reload();
	}

/**
 * end the test and reset the environment
 *
 * @return void
 **/
	function endTest() {
		Configure::write('Routing', $this->_routing);
	}

/**
 * test the parsing of routes.
 *
 * @return void
 */
	function testParsing() {
		$route = new PluginShortRoute('/:plugin', array('action' => 'index'), array('plugin' => 'foo|bar'));

		$result = $route->parse('/foo');
		$this->assertEqual($result['plugin'], 'foo');
		$this->assertEqual($result['controller'], 'foo');
		$this->assertEqual($result['action'], 'index');

		$result = $route->parse('/wrong');
		$this->assertFalse($result, 'Wrong plugin name matched %s');
	}

/**
 * test the reverse routing of the plugin shortcut urls.
 *
 * @return void
 */
	function testMatch() {
		$route = new PluginShortRoute('/:plugin', array('action' => 'index'), array('plugin' => 'foo|bar'));

		$result = $route->match(array('plugin' => 'foo', 'controller' => 'posts', 'action' => 'index'));
		$this->assertFalse($result, 'plugin controller mismatch was converted. %s');

		$result = $route->match(array('plugin' => 'foo', 'controller' => 'foo', 'action' => 'index'));
		$this->assertEqual($result, '/foo');
	}
}
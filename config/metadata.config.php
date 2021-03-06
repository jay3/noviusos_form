<?php
/**
 * NOVIUS OS - Web OS for digital communication
 *
 * @copyright  2011 Novius
 * @license    GNU Affero General Public License v3 or (at your option) any later version
 *             http://www.gnu.org/licenses/agpl-3.0.html
 * @link http://www.novius-os.org
 */

return array(
    'name'    => 'Form',
    'version' => '0.2-alpha',
    'icon16' => 'static/apps/noviusos_form/img/icons/form-16.png',
    'icon64'  => 'static/apps/noviusos_form/img/icons/form-64.png',
    'provider' => array(
        'name' => 'Novius OS',
    ),
    'namespace' => 'Nos\Form',
    'permission' => array(

    ),
    'launchers' => array(
        'noviusos_form' => array(
            'name'    => 'Forms',
            'action' => array(
                'action' => 'nosTabs',
                'tab' => array(
                    'url' => 'admin/noviusos_form/appdesk/index',
                    'iconUrl' => 'static/apps/noviusos_form/img/icons/form-32.png',
                ),
            ),
            'icon64'  => 'static/apps/noviusos_form/img/icons/form-64.png',
        ),
    ),
    'enhancers' => array(
        'noviusos_form' => array(
            'title' => 'Form',
            'desc'  => '',
            'enhancer' => 'noviusos_form/front/main',
            //'urlEnhancer' => 'noviusos_form/front/main',
            'iconUrl' => 'static/apps/noviusos_form/img/icons/form-16.png',
            'previewUrl' => 'admin/noviusos_form/enhancer/preview',
            'dialog' => array(
                'contentUrl' => 'admin/noviusos_form/enhancer/popup',
                'width' => 450,
                'height' => 400,
                'ajax' => true,
            ),
        ),
    ),
    'icons' => array(
        16  => 'static/apps/noviusos_form/img/icons/form-16.png',
        32 => 'static/apps/noviusos_form/img/icons/form-32.png',
        64    => 'static/apps/noviusos_form/img/icons/form-64.png',
    ),
);

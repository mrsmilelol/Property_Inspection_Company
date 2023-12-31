<?php
declare(strict_types=1);

/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 */

namespace App\Controller\Admin;

use Cake\Controller\Controller;
use Cake\Event\EventInterface;

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link https://book.cakephp.org/4/en/controllers.html#the-app-controller
 */
class AppController extends Controller
{
    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading components.
     *
     * e.g. `$this->loadComponent('FormProtection');`
     *
     * @return void
     */
    public function initialize(): void
    {
        parent::initialize();

        $this->loadComponent('RequestHandler');
        $this->loadComponent('Flash');
        // Add this line to check authentication result and lock your site
        $this->loadComponent('Authentication.Authentication');
    }

    /**
     * @param \Cake\Event\EventInterface $event
     * @return \Cake\Http\Response|void|null
     *
     * Use this method to specify which type of user is allowed to access the Admin prefix
     * If user type is not 1 (user isn't an Admin) redirect back to the shop page
     */
    public function beforeFilter(EventInterface $event)
    {
        // Only apply redirect rule when user is actually logged in
        if ($loggedin_user = $this->Authentication->getIdentity()) {
            //If user is not on login or logout page, check their role
            if ($loggedin_user->user_type_id != null && $loggedin_user->user_type_id != 1) {
                // the user is not an admin
                $this->Flash->error('You are a wholesale user');
                $this->redirect(['prefix' => 'Wholesale', 'controller' => 'Products', 'action' => 'shop']);
            }
        }
    }
}

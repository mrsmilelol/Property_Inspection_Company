<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
$this->layout = 'front';
?>
<!doctype html>
<html class="no-js" lang="">
<!-- Breadcrumbs Area Start -->
<div class="breadcrumbs-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcrumb-single">
                    <ul class="breadcrumbs">
                        <li><a href=<?= $this->Url->build(['controller' => 'Pages',
                                'action' => 'display', 'main']); ?> title="Return to Home">
                            <i class="fa fa-home"></i>
                            Home
                            </a></li>
                        <li>
                            <span>></span>
                        </li>
                        <li>Warranties</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumbs Area End -->
<div class="about-us-area section-padding2">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="f-title text-center">
                    <h3 class="title text-uppercase">Warranty</h3>
                </div>
            </div>
        </div>
        <div class="col-xs-12">
            <div class="about-page-cntent">
                <p>We provide a 12-month warranty for foam and fabric products that have been purchased from the Chelsea
                    Furniture warehouse.
                    The warranty period commences from the date of collection or delivery of the goods.
                </p>
                <p>
                    This warranty is subject to the Australian Competition and Consumer Act 2010 (“<strong>Australian
                        Consumer Law</strong>”).
                </p>
                <p>
                    The benefits provided in our warranty are in addition to other rights and remedies of a consumer
                    under the Australian Consumer Law, and any other laws in relation to the products to which this
                    warranty relates.
                    This warranty covers the replacement or repair of any product that has a manufacturing or material
                    defect that is not the result of normal wear and tear, or a natural characteristic of the material
                    used.
                    This warranty does not cover products used for commercial purposes.
                </p>
                <p><strong>Exclusions</strong>: Subject to the Australian Consumer Law, this warranty does not apply to
                    any products sold as seconds, floor stock, ex-display or products that have a defect that has been
                    drawn to the customer’s attention before the purchase of the product.</p>
                <h3>The warranty will not apply if: </h3>
                <p>
                    - The product has not been used or maintained in accordance with the manufacturer’s instructions as
                    provided with the product.<br>
                    - Its normal wear and tear<br>
                    - Damage occurring during your own transporting of the goods (collection)<br>
                    - Insignificant or minor variations in dimensions, colour, grain or finish
                </p>
                <h3>You may not be entitled to a refund or exchange if: </h3>
                <p>
                    - You change your mind<br>
                    - You decide you cannot afford the item<br>
                    - The product does not fit into your house or the space you were looking to place the item
                </p>
                <h3>Further Information </h3>
                <p>Chelsea Furniture has a contract with Guardsman in furniture care. You have a 5-year warranty on your
                    furniture. It includes ALL ACCIDENTAL ATTAINS AND ACCIDENTAL DAMAGE FOR 5 YEARS. </p>
                <p>You must buy Guardsman furniture care from our store to access Chelsea Furniture warranty. We need a
                    minimum 20% deposit to order our furniture for the next container. The deposit is not refundable for
                    any direct order.
                </p>
                <p>Please note:<br>
                    - Chelsea Furniture cannot guarantee the packages to be delivered on time if the payment is not
                    finalised at least two business days before the delivery.<br>
                    - Chelsea Furniture is not responsible for delivering packages if the provided delivery address is
                    incorrect.
                </p>
                <p>Once your delivery is confirmed, we will send your furniture to your delivery address. We will send
                    the installation team if you require the exact delivery day. You should contact Chelsea Furniture 48
                    hours before your scheduled delivery to cancel installation or delivery time, please ensure to send
                    the invitation link to all the participants.
                </p>
            </div>
        </div>
    </div>
</div>
</html>

<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UserAddress $userAddress
 * @var \Cake\Collection\CollectionInterface|string[] $users
 */
$this->layout = 'front';
?>
<style>
    .center {
        margin: auto;
        width: 70%;
        padding: 100px;
    }
    h1 {
        font-weight: 600;
        color: #333333;
        font-size: 22px;
    }
</style>

<html>
<div class = "center">
<head><title>Sorry something went wrong with your order!</title></head>
<body>
<h1>Sorry, something went wrong with your payment :(</h1>
<p style="color: #000;
    font-size: 13px;
    font-weight: 400;
    line-height: 20px;">
    We appreciate your business!
    Maybe try another payment method or email us at
    <a href="mailto:info@chelseafurniture.com.au" style="color: #000;
    font-size: 13px;
    font-weight: 400;
    line-height: 20px;">info@chelseafurniture.com.au</a>.
</p>
</body>
</div>
</html>


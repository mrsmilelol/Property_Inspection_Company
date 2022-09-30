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
</style>

<html>
<div class = "center">
<head><title>Sorry something went wrong with your order!</title></head>
<body>
<h1>Sorry something went wrong with your payment :(</h1>
<p>
    We appreciate your business!
    Maybe try another payment method or email us
    <a href="mailto:info@chelseafurniture.com.au">info@chelseafurniture.com.au</a>.
</p>
</body>
</div>
</html>


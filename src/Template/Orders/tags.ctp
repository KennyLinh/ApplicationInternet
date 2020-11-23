<h1>
    Orders tagged with
    <?= $this->Text->toList(h($tags), 'or') ?>
</h1>

<section>
<?php foreach ($orders as $order): ?>
    <order>
        <!-- Use the HtmlHelper to create a link -->
        <h4><?= $this->Html->link(
            $order->title,
            ['controller' => 'Orders', 'action' => 'view', $order->slug]
        ) ?></h4>
        <span><?= h($order->created) ?></span>
    </order>
<?php endforeach; ?>
</section>

<?php defined('C5_EXECUTE') or die("Access Denied."); ?>
<?php $view->inc('elements/header.php'); ?>
<body class="travelToDubai">
    <div class="aboutDubai">
        <div class="container-fluid">
            <div class="container">
            <?php $a = new Area('About Dubai'); $a->setAreaGridMaximumColumns(12); $a->display($c); ?>
            </div>
        </div>
    </div>
    <div class="tipnUsefull">
        <div class="container-fluid">
            <div class="container">
            <?php $a = new Area('Tip and full'); $a->setAreaGridMaximumColumns(12); $a->display($c); ?>
</div>
</div>
</div>
<div class="container">
<?php $a = new Area('Visa Section'); $a->setAreaGridMaximumColumns(12); $a->display($c); ?>
</div>
<div class="explorDubai">
<div class="container">
<?php $a = new Area('Exploer dubai'); $a->setAreaGridMaximumColumns(12); $a->display($c); ?>
</div>
</div>
    

    
</body>
    <?php $view->inc('elements/footer.php') ?>
<?php defined("C5_EXECUTE") or die("Access Denied."); ?>
<?php if (isset($code) && trim($code) != "") { ?>
    <pre><code><?php echo $code; ?></code></pre><?php } ?>
<?php if (isset($quick_options) && !empty($quick_options)) { ?>
    <ul><?php foreach ($quick_options as $quick_option) {
            echo '<li>' . $quick_option . '</li>';
        } ?></ul><?php } ?>
<?php if (isset($what) && trim($what) != "") { ?>
    <?php echo $what; ?><?php } ?>
<?php
defined('C5_EXECUTE') or die("Access Denied.");
?>
<section class="ccm-ui">
	<header><?=t('Location')?></header>
	<form method="post" action="<?=$controller->action('submit')?>" data-dialog-form="location" data-panel-detail-form="location">
        <input type="hidden" name="cParentID" value="<?=$cParentID?>" />

        <?php if ((!isset($isHome) || $isHome === false) && (!isset($sitemap) || $sitemap === false)) {
    ?>
            <div style="min-height: 140px">
                <?php if ($c->isPageDraft()) {
    ?>
                    <label class="control-label"><?=t('Where will this page live on the site?')?></label>
                <?php
} else {
    ?>
                    <label class="control-label"><?=t('Where does this page live on the site?')?></label>
                <?php
}
    ?>

                <div id="ccm-panel-detail-location-display"></div>

                <button class="btn btn-info"type="button" name="location"><?=t('Choose Location')?></button>

            </div>
		<hr/>
        <?php
} ?>

	<?php if ($c->isGeneratedCollection() || $c->isPageDraft()) {
    ?>

		<label class="control-label"><?=t('Current Canonical URL')?></label>
		<div class="breadcrumb">
			<?php if ($c->isPageDraft()) {
    ?>
				<?=t('None. Pages do not have canonical URLs until they are published.')?>
			<?php
} else {
    ?>
				<?php echo Loader::helper('navigation')->getLinkToCollection($c, true)?>
			<?php
}
    ?>
		</div>

	<?php
} else {
    ?>

		<label class="control-label"><?=t('URLs to this Page')?></label>

		<div>
		<table class="table table-striped ccm-page-panel-detail-location-paths">
			<thead>
			<tr>
				<th></th>
				<?php if (!$isHome) {
					?>
				<th><?=t('Canonical')?></th>
				<?php
					}
			?>
				<th style="width: 100%"><?=t('Path')?></th>
				<th></th>
			</tr>
			</thead>
			<tbody></tbody>
		</table>

		<button class="btn btn-info pull-right" type="button" data-action="add-url"><?=t('Add URL')?></button>

		<div class="clearfix"></div>
		<p class="help-block"><?=t('Note: Additional page paths are not versioned. They will be available immediately.')?></p>

		</div>

	<?php
} ?>

	<?php if (isset($sitemap) && $sitemap) {
    ?>
		<input type="hidden" name="sitemap" value="1" />
	<?php
} ?>

	</form>
	<div class="ccm-panel-detail-form-actions dialog-buttons">
		<button class="pull-left btn btn-default" type="button" data-dialog-action="cancel" data-panel-detail-action="cancel"><?=t('Cancel')?></button>
		<button class="pull-right btn btn-success" type="button" data-dialog-action="submit" data-panel-detail-action="submit"><?=t('Save Changes')?></button>
	</div>

</section>

<style type="text/css">
	table.ccm-page-panel-detail-location-paths td {
		vertical-align: middle !important;
	}
</style>

<script type="text/template" class="breadcrumb">
	<% if (parentID && parentID > 0) { %>
	<ol class="breadcrumb">
	  <li><a href="<%=parentLink%>" target="_blank"><%=parentName%></a></li>
	  <li class="active"><?=$c->getCollectionName()?></li>
	</ol>
	<% } else { %>
		<div class="breadcrumb">
		<?=t('A location has not yet been chosen.')?>
		</div>
	<% } %>
</script>

<script type="text/template" class="pagePath">
	<tr>
		<td><% if (isAutoGenerated) { %>
			<i class="fa fa-link launch-tooltip" title="<?=t('This page path is automatically generated from URL slugs. You cannot change this path.')?>"></i>
		<% } else { %>
			<i class="fa fa-external-link"></i>
		<% } %></td>
		<% if (!isHome) {  %>
		<td style="text-align: center"><input type="radio" name="canonical" value="<%=row%>" <% if (isCanonical) { %>checked<% } %> /></td>
		<% } %>
		<td><% if (isAutoGenerated) { %><input type="hidden" name="generated" value="<%=row%>"><input type="hidden" name="path[<%=row%>]" value="<%=pagePath%>"><% } %>
			<input type="text" data-input="auto" class="form-control" <% if (isAutoGenerated) { %>disabled<% } else { %>name="path[]"<% } %> value="<%=pagePath%>" /></td>
		<td><% if (!isAutoGenerated) { %><a href="#" data-action="remove-page-path" class="icon-link"><i class="fa fa-trash-o"></i></a><% } %></td>
	</tr>
</script>

<script type="text/javascript">

var renderBreadcrumb = _.template(
    $('script.breadcrumb').html()
);
var renderPagePath = _.template(
    $('script.pagePath').html()
);

$(function() {

	$('button[name=location]').on('click', function() {
		jQuery.fn.dialog.open({
			width: '90%',
			height: '70%',
			modal: true,
			title: '<?=t("Choose New Page Parent")?>',
			href: '<?=REL_DIR_FILES_TOOLS_REQUIRED?>/sitemap_search_selector?cID=<?=$c->getCollectionID()?>'
		});
	});

	$('#ccm-panel-detail-location-display').html(renderBreadcrumb({
		parentLink: '<?=Loader::helper('navigation')->getLinkToCollection($parent);?>',
		parentName: <?=json_encode($parent->getCollectionName())?>,
		parentID: '<?=$cParentID?>'
	}));

	ConcreteEvent.subscribe('SitemapSelectPage', function(e, data) {
		$('#ccm-panel-detail-location-display').html(renderBreadcrumb({
			parentLink: '<?=DIR_REL?>/<?=DISPATCHER_FILENAME?>?cID=' + data.cID,
			parentName: data.title,
			parentID: data.cID
		}));

		var container = $('form[data-panel-detail-form=location]');
		container.find('input[name=cParentID]').val(data.cID);
		$.fn.dialog.closeTop();
	});

	$('form[data-panel-detail-form=location]').on('click', 'a[data-action=remove-page-path]', function(e) {
		e.preventDefault();
		$(this).closest('tbody').find('input[type=radio]:first').prop('checked', true);
		$(this).closest('tr').remove();
	});

	$('button[data-action=add-url]').on('click', function() {
		var rows = $('table.ccm-page-panel-detail-location-paths tbody tr').length;
		$('table.ccm-page-panel-detail-location-paths tbody').append(
			renderPagePath({
				isAutoGenerated: false,
				isCanonical: false,
				isHome: <?=intval($isHome)?>,
				pagePath: '',
				row: rows
			})
		);
	});

	<?php // first, we render the URL as it would be displayed auto-generated ?>

	$('table.ccm-page-panel-detail-location-paths tbody').append(
		renderPagePath({
			isAutoGenerated: <?=intval($autoGeneratedPath->isPagePathAutoGenerated())?>,
			isCanonical: <?=intval($autoGeneratedPath->isPagePathCanonical())?>,
			isHome: <?=intval($isHome)?>,
			pagePath: '<?=$autoGeneratedPath->getPagePath()?>',
			row: 0
		})
	);

	<?php // now we loop through all the rest of the page paths ?>

    <?php foreach ($paths as $i => $path) {
    ?>
	$('table.ccm-page-panel-detail-location-paths tbody').append(
        renderPagePath({
			isAutoGenerated: <?=intval($path->isPagePathAutoGenerated())?>,
			isCanonical: <?=intval($path->isPagePathCanonical())?>,
			isHome: <?=intval($isHome)?>,
			pagePath: '<?=preg_replace("/['\"\(\)\{\}\s]/", '', $path->getPagePath())?>',
			row: <?=$i + 1?>
		})
	);
    <?php
} ?>


});
</script>

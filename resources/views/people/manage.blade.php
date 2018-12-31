
@extends('layouts.app')

@section('content')
<div class="container">
	<div id="title_bar" class="btn-toolbar">
	<button class='btn btn-info btn-sm pull-right modal-dlg' data-btn-submit='<?php echo __('common.common_submit') ?>' data-href=''
				title='<?php __('customer.customers_import_items_excel'); ?>'>
			<span class="glyphicon glyphicon-import">&nbsp</span><?php __('common.common_import_excel'); ?>
		</button>
	
	<button class='btn btn-info btn-sm pull-right modal-dlg' data-btn-submit='<?php echo __('common.common_submit') ?>' data-href=''
			title=''>
		<span class="glyphicon glyphicon-user">&nbsp</span>
	</button>
</div>

<div id="toolbar">
	<div class="pull-left btn-toolbar">
		<button id="delete" class="btn btn-default btn-sm">
			<span class="glyphicon glyphicon-trash">&nbsp</span><?php echo __("common.common_delete");?>
		</button>
		<button id="email" class="btn btn-default btn-sm">
			<span class="glyphicon glyphicon-envelope">&nbsp</span><?php echo __("common.common_email");?>
		</button>
	</div>
</div>
<div id="table_holder">
	<table id="table_id" class="display">
    <thead>
        <tr>
            <th>Column 1</th>
            <th>Column 2</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Row 1 Data 1</td>
            <td>Row 1 Data 2</td>
        </tr>
        <tr>
            <td>Row 2 Data 1</td>
            <td>Row 2 Data 2</td>
        </tr>
    </tbody>
</table>
</div>
</div>
@endsection

<script type="text/javascript">
$(document).ready(function()
{

	
	<?php //$this->load->view('partial/bootstrap_tables_locale'); ?>

	table_support.init({
		resource: '<?php echo route('customer');?>',
		headers: <?php echo $table_headers; ?>,
		pageSize: <?php echo __('lines_per_page'); ?>,
		uniqueId: 'people.person_id',
		enableActions: function()
		{
			var email_disabled = $("td input:checkbox:checked").parents("tr").find("td a[href^='mailto:']").length == 0;
			$("#email").prop('disabled', email_disabled);
		}
	});

	$("#email").click(function(event)
	{
		var recipients = $.map($("tr.selected a[href^='mailto:']"), function(element)
		{
			return $(element).attr('href').replace(/^mailto:/, '');
		});
		location.href = "mailto:" + recipients.join(",");
	});
});
</script>


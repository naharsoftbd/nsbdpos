$(document).ready( function () {
    	$('#table_id').DataTable();




		$('#confirm-delete').on('click', '.btn-ok', function(e) {
            var $modalDiv = $(e.delegateTarget);
            var orderid = $(this).data('id');
            $.ajax({
            type: "POST",
            url: host+'/delete-order/'+ orderid,
            data: {'id':orderid},
            headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
            success: function(msg) {
             	 
			}
        	});
            $modalDiv.addClass('loading');
            setTimeout(function() {
                $modalDiv.modal('hide').removeClass('loading');
                window.location.reload();
            }, 1000)
        });
        $('#confirm-delete').on('show.bs.modal', function(e) {
            var orderID = $(e.relatedTarget).data('id');
            $(e.currentTarget).find('.btn-ok').attr('data-id', orderID);
        });

        // edit 
        $('#confirm-edit').on('click', '.edit-btn-ok', function(e) {
            var $modalDiv = $(e.delegateTarget);
            $.ajax({
            type: "POST",
            url: host+'/edit-profile',
            data: $('#updatorder').serialize(),
            headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
            success: function(msg) {
             	//alert(msg); 
			}
        	});
            $modalDiv.addClass('loading');
            setTimeout(function() {
                $modalDiv.modal('hide').removeClass('loading');
                window.location.reload();
            }, 1000)
        });
        $('#confirm-edit').on('show.bs.modal', function(e) {
            var userid = $(e.relatedTarget).data('id');
            //$(e.currentTarget).find('.btn-ok').attr('data-id', orderID);
            alert(userid);
             $.ajax({
            type: "POST",
            url: host+'/get-user/'+ userid,
            data: {'id':userid},
            headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
            success: function(msg) {
             	 $('.edit-content').html(msg);
			}
        	});
        });


	});

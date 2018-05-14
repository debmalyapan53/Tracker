function build(mode){
	$('#log').load('log.php?mode='+mode);
	tally();
	}
function tally(){
	$('#tally').load('log.php?mode=tally');
	}

$(document).ready(function(){
	build('build');
	setInterval(function(){
		var mode=$('#btn-mode').data('mode');
		if(mode=='restore')
			build('build');
		else
			build('restore');
		},60000);
	
	
	
	$('#btn-mode').on('click',function(){
		var mode=$(this).data('mode');
		if(mode=='restore'){
			build('restore');
			$('#lbl-mode').html('Live');
			$(this).data('mode','live');
		}
		else{
			build('build');
			$('#lbl-mode').html('Restore');
			$(this).data('mode','restore');
		}	
	
	});
	$('#form-new').submit(function(event){
		event.preventDefault();
		//var form = $(this);
		var data = $(this).serialize();
		$.ajax({
				url:'log.php?mode=new',
				data:data,
				success:function(){
					build('build');
					}
				});
										});
$('#log').on('click','.btn-stop',function(){
	var id=$(this).data('id');
	$.ajax({
		url:'log.php?mode=stop&id='+id,
		success:function(){
			build('build');
						}		
		});
											});
$('#log').on('click','.btn-remove',function(){
	var id=$(this).data('id');
	$.ajax({
		url:'log.php?mode=remove&id='+id,
		success:function(){
			build('build');
						}		
		});
											});
$('#log').on('click','.btn-restore',function(){
	var id=$(this).data('id');
	$.ajax({
		url:'log.php?mode=status&id='+id,
		success:function(){
			build('restore');
						}		
		});
											});
											
											
								
											
});
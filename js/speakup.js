function scrollToDiv(element){
	$('html,body').animate(
		{
			scrollTop: $(element).offset().top - 15
		}, 1000);
}
var viewportwidth;        
var viewportheight;        
if (typeof window.innerWidth != 'undefined')         
{     
	viewportwidth = window.innerWidth,        
	viewportheight = window.innerHeight     
}      
if (viewportwidth < 768){
	$('#main .col-sm-4').height('auto');
}
else{
	$('#main .col-sm-4').height(1360);
}


function fillDateValue(_date){
	var viewportwidth;        
	var viewportheight;        
	if (typeof window.innerWidth != 'undefined')         
	{     
		viewportwidth = window.innerWidth,        
		viewportheight = window.innerHeight     
	}      
	if (viewportwidth < 768){
		scrollToDiv('#formContact');
		$('#txtDate').removeAttr('disabled');
		$('#txtDate').val(_date);
	}
	else{
		$('#txtDate').removeAttr('disabled');
		$('#txtDate').val(_date);
	}
}

$('#calendar').fullCalendar({
		header: {
			left: 'prev,next today',
			center: 'title',
			right: 'month,basicWeek,basicDay'
		},
		editable: true,
		firstDay: 1,
		monthNames:['Tháng Một','Tháng Hai','Tháng Ba','Tháng Bốn','Tháng Năm','Tháng Sáu','Tháng Bảy','Tháng Tám','Tháng Chín','Tháng Mười','Tháng Mười Một','Tháng Mười Hai'],
		events: [
			{
				title: 'Event số 1',
				start: '2016-05-04',
			},
			{
				title: 'Event số 2',
				start: '2016-05-05',
			},
		],
		eventClick: function(date, jsEvent, view) {
			//get date
			var _date = date.start['_i'];
			fillDateValue(_date);
		},
	});
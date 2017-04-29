(function ( $ ) {
	"use strict";

	$(function () {
	var supremePricingTables_highlightedColumns = [];
$( '.sptable-column-wrapper:not(".spt-column-highlighted")' ).hover(function() {
	var parentObject	= $(this).closest('.supreme-pricing-table-wrapper'); // get table wrapper

	switch(event.type){
		case 'mouseover':
			supremePricingTables_highlightedColumns.push($('.sptable-column-wrapper.spt-column-highlighted',parentObject)); // remember "highlighted" columns on current table
			$('.sptable-column-wrapper.spt-column-highlighted',parentObject).removeClass('spt-column-highlighted'); // remove "highlighted" class from highlighted element
			$(this).addClass('spt-column-highlighted'); // add "highlighted" class to current (hovered) element
		break;
		case 'mouseout':
			$('.sptable-column-wrapper.spt-column-highlighted',parentObject).removeClass('spt-column-highlighted'); // remove "highlighted" class from highlighted element
			$.each(supremePricingTables_highlightedColumns,function(i,val){$(val).addClass('spt-column-highlighted');}); // restore "highlighted" columns for this table
		break;
	}
});


	});

}(jQuery));
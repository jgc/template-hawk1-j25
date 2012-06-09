window.addEvent('domready', function(){
	function equals(equalClass){
		var equalClassVariable = equalClass;
		var columns = $$(equalClassVariable);
		var max_height = 0;
		columns.setStyle('height', 'auto');
		columns.each(function(item){ 
			max_height = Math.max(max_height, item.getSize().y); 
		});
		columns.setStyle('height', max_height);
	}
	window.addEvent('domready',  function(){
		equals('.equalsTopContent');
		equals('.equalsBottomContent');
		equals('.equalsContenttopContent');
		equals('.equalsContentbottomContent');
		equals('.equalsFeatureContent');
		equals('.equalsMaintopContent');
		equals('.equalsMainbottomContent');
	});
});
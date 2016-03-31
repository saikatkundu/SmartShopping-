$(document).ready(function(){
   
	/*brand checkbox unckecking script*/
    $('.brand-clear').on('click',function(){
    	if('this.checked'){
    		$('.brnd-chk').each(function(){
    			this.checked = false;
    		});
    	}
    });

    /*price checkbox unckecking script*/
    $('.price-clear').on('click',function(){
    	if('this.checked'){
    		$('.price-chk').each(function(){
    			this.checked = false;
    		});
    	}
    });

    /*availability checkbox unckecking script*/
    $('.avl-clear').on('click',function(){
    	if('this.checked'){
    		$('.avl-chk').each(function(){
    			this.checked = false;
    		});
    	}
    });

    /*os checkbox unckecking script*/
    $('.os-clear').on('click',function(){
    	if('this.checked'){
    		$('.os-chk').each(function(){
    			this.checked = false;
    		});
    	}
    });

    /*features checkbox unckecking script*/
    $('.fe4s-clear').on('click',function(){
    	if('this.checked'){
    		$('.fe4s-chk').each(function(){
    			this.checked = false;
    		});
    	}
    });

    /*internet features checkbox unckecking script*/
    $('.int-fe4s-clear').on('click',function(){
    	if('this.checked'){
    		$('.int-fe4s-chk').each(function(){
    			this.checked = false;
    		});
    	}
    });

     /*primary camera checkbox unckecking script*/
    $('.pcam-clear').on('click',function(){
    	if('this.checked'){
    		$('.pcam-chk').each(function(){
    			this.checked = false;
    		});
    	}
    });

     /*secondary camera checkbox unckecking script*/
    $('.scam-clear').on('click',function(){
    	if('this.checked'){
    		$('.scam-chk').each(function(){
    			this.checked = false;
    		});
    	}
    });





    /*------------ SORT ITEMS -------------*/

    // $('.highp').click(function(){
    // 	alert('hi');
    // });







});
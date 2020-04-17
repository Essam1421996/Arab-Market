new Vue({
    'el':'main',
    'data':{
        'count':1,
        'dynamicID':0,
        'rate':parseInt($('#rate').val()),
        'half':parseFloat($('#rate').val())-parseInt($('#rate').val()),
    	'user_rate':0
    
    },
    'methods':{
         
        'calc_dynamicID':function(cart_id){
            this.dynamicID=cart_id;
            
            return this.dynamicID;
        },
        'calc_quantity':function(){

            return parseInt($('#'+this.calc_dynamicID(this.dynamicID)).val())
        }
    }
    
});

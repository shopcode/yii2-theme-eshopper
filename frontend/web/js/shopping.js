Shopping = {
    
    /* ฟังกชั่น loading */
    loading:function(time){ 
        document.getElementById('loading').style.display = 'block';
        if(time){
            setTimeout(function() {
                document.getElementById('loading').style.display = 'none';
            }, (time * 1000)); 
        } else {
            setTimeout(function() {
                document.getElementById('loading').style.display = 'none';
            }, 2000); 
        }
    },
    setLoading:function(txtDisplay){ 
        document.getElementById('loading').style.display = txtDisplay;
        return false;
    }

    /* ===========================================================
     * Cart Method
     * =========================================================== */
    
};
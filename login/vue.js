var body = new Vue({
  el: '#body',
  data: {     
     
  },
  methods:{
    action:function(){
        console.log("ok");
    }, 
    navbarNavAltMarkup_change:function(){
      document.getElementById("navbarNavAltMarkup").className="block";
    }, 
    destroy:function(){
      Ajax("info_plus","class/php/destroy.php");
      setTimeout(function(){ 
        document.location.reload(true);
      }, 300);
    }
  }
})
 
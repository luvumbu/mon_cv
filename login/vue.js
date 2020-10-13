var body = new Vue({
  el: '#body',
  data: {
    statue_menu: false
  },
  methods: {
    action: function () {},
    navbarNavAltMarkup_change: function () {
      document.getElementById("navbarNavAltMarkup").className = "block";
    },
    destroy: function () {
      Ajax("info_plus", "class/php/destroy.php");
      setTimeout(function () {
        document.location.reload(true);
      }, 300);
    },
    home: function () {
      this.all_header();
      this.toggle_menu();
      document.getElementById("home").className = "nav-item nav-link active";
      Ajax("info_plus", "view/pages/home.php");
    },
    add_information: function () {
      this.all_header();
      this.toggle_menu();
      document.getElementById("add_information").className = "nav-item nav-link active";
      Ajax("info_plus", "view/pages/add_information.php");
    },
    my_model: function () {
      this.all_header();
      this.toggle_menu();
      document.getElementById("my_model").className = "nav-item nav-link active";
      Ajax("info_plus", "view/pages/my_model.php");
    },
    my_conf: function () {
      this.all_header();
      this.toggle_menu();
      document.getElementById("my_conf").className = "nav-item nav-link active";
      Ajax("info_plus", "view/pages/my_conf.php");
    },
    navbarNavAltMarkup: function () {
      this.toggle_menu(); 
    },
    all_header: function () {
      document.getElementById("home").className = "nav-item nav-link";
      document.getElementById("add_information").className = "nav-item nav-link";
      document.getElementById("my_model").className = "nav-item nav-link";
      document.getElementById("my_conf").className = "nav-item nav-link";
    },
    toggle_menu: function () {
      if (this.statue_menu == false) {
        document.getElementById("navbarNavAltMarkup").style = "display:block;text-align:center";
        this.statue_menu = true;
      } else {
        document.getElementById("navbarNavAltMarkup").style = "display:none;";
        this.statue_menu = false;
      }
    } 
  }
})
<!-- THIS CODE IS TO BE PLACED IN THE FILE WHERE THE CONTACT FORM IS -->        


        <!-- TO BE PLACED IN THE HEAD HTML TAG -->
        <script src="EpiCaptcha/js/jquery.1.9.1.min.js"></script>
        <script type="text/javascript" src="EpiCaptcha/js/epicaptcha.js"></script>
        <link rel="stylesheet" href="EpiCaptcha/css/epicaptcha.css" type="text/css">
        <script type="text/javascript">
          $(function(){
              ////epicaptcha div////
               $("#epicaptcha").Epicaptcha( {
                   buttonID: "epi", // the id of the form button
                   theFormID: "contact-form" // the id of the form tag                          
               });
           });

        </script>
        <!-- TO BE PLACED IN THE HEAD HTML TAG -->        
        
        
            <!-- TO BE PLACED AT THE BOTTOM INSIDE THE FORM TAG -->
            <div id="epicaptcha"></div>
            <input class="btn btn-info" id="epi" type="button" value="Send"/>
            <div id="contactMessage"></div>
            <!-- TO BE PLACED AT THE BOTTOM INSIDE THE FORM TAG -->

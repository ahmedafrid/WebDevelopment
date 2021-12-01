<div class="header-section">
        <!--menu-right-->
        <div class="top_menu">
          
          <!--/profile_details-->
          <div class="profile_details_left">
            <ul class="nofitications-dropdown">
              <li class="dropdown note dra-down">
                
                <script type="text/javascript">

                  function DropDown(el) {
                    this.dd = el;
                    this.placeholder = this.dd.children('span');
                    this.opts = this.dd.find('ul.dropdown > li');
                    this.val = '';
                    this.index = -1;
                    this.initEvents();
                  }
                  DropDown.prototype = {
                    initEvents : function() {
                      var obj = this;

                      obj.dd.on('click', function(event){
                        $(this).toggleClass('active');
                        return false;
                      });

                      obj.opts.on('click',function(){
                        var opt = $(this);
                        obj.val = opt.text();
                        obj.index = opt.index();
                        obj.placeholder.text(obj.val);
                      });
                    },
                    getValue : function() {
                      return this.val;
                    },
                    getIndex : function() {
                      return this.index;
                    }
                  }

                  $(function() {

                    var dd = new DropDown( $('#dd') );

                    $(document).click(function() {
                        ;
                                });

                  });

                </script>
              </li>
              <div>
              <p style="padding-top: 10px;color: white;text-align: left;">Customer Management System   <button style="background-color:red;"><a href="logout.php" style="margin:3px;">Logout</a></button></p> 
              
              </div>              
              <div class="clearfix"></div>  
            </ul>
          </div>
          <div class="clearfix" style="background-color: #1597E5;"></div>  
          <!--//profile_details-->
        </div>
        <!--//menu-right-->
        <div class="clearfix"></div>
      </div>
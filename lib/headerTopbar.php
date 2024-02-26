 <header class="topbar">
    <nav class="navbar top-navbar navbar-toggleable-sm navbar-light">
        <!-- ============================================================== -->
        <!-- Logo -->
        <!-- ============================================================== -->
        <div class="navbar-header">
            <a class="navbar-brand" href="index.php?module=home">
                <b>
                    <img  src="assets/images/logo-sidebar.png" alt="homepage" class="light-logo" />
                </b>

                <!--End Logo icon -->

                <!-- Logo text -->
                <span>

                 <img id="logo-colo" src="assets/images/elmasria_logo_mini2.png" class="light-logo" alt="homepage" />
             </span> 
         </a>

     </div>
     <!-- ============================================================== -->
     <!-- End Logo -->
     <!-- ============================================================== -->
     <div class="navbar-collapse">
        <!-- ============================================================== -->
        <!-- toggle and nav items -->
        <!-- ============================================================== -->
        <ul class="navbar-nav mr-auto mt-md-0 ">
            <!-- This is  -->
            <li class="nav-item"> <a class="nav-link sidebartoggler hidden-sm-down text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="icon-arrow-left-circle"></i></a> </li>
            <!-- ============================================================== -->
            <!-- Comment -->
            <!-- ============================================================== -->

            <!-- Messages -->
            <!-- ============================================================== -->

                <!-- ============================================================== -->
                <!-- End Messages -->
                <!-- ============================================================== -->
            </ul>
            <!-- ============================================================== -->
            <!-- User profile and search -->
            <!-- ============================================================== -->
            <script>
                function showResult(str) {
                    if (str.length == 0) {
                        document.getElementById("ui-id-1").innerHTML = "";
                        document.getElementById("ui-id-1").style.border = "0px";
                        return;
                    }
                    var xmlhttp = new XMLHttpRequest();
                    xmlhttp.onreadystatechange = function () {
                        if (this.readyState == 4 && this.status == 200) {
                            document.getElementById("ui-id-1").innerHTML = this.responseText;
                            document.getElementById("autoCompleteSearchOutput").style.display = "block";
                        }
                    };
                    xmlhttp.open("GET", "lib/search_lib/autoCompleteSearch?value=" + str + "&username=<?php echo $user->username; ?>&lang=<?php echo $user_lang->get_user_langauage($user->username); ?>", true);
                    xmlhttp.send();
                    document.getElementById("autoCompleteSearchInput").style.borderRadius = "25px 25px 0px 0px";
                    document.getElementById("autoCompleteSearchInput").style.borderRight = "1px solid #0275d8";
                    document.getElementById("autoCompleteSearchInput").style.borderBottom = "none";
                    document.getElementById("autoCompleteSearchInput").style.borderLeft = "1px solid #0275d8";
                    document.getElementById("autoCompleteSearchInput").style.borderTop = "1px solid #0275d8";
                    console.log(document.getElementById("tutorial_name").value);
                }
                function resetSearch() {
                    var x = document.getElementById("autoCompleteSearchInput").value;
                    if (x === "") {
                        document.getElementById("autoCompleteSearchInput").style.borderRadius = "25px 25px 25px 25px";
                        document.getElementById("autoCompleteSearchInput").style.borderBottom = "border: 1px solid rgba(0,0,0,.15)";
                        document.getElementById("autoCompleteSearchOutput").style.display = "none";
                        document.getElementById("autoCompleteSearchOutput").style.width = "620px";
                    } else if (x !== "") {
                        document.getElementById("autoCompleteSearchInput").style.borderRadius = "25px 25px 0px 0px";
                        document.getElementById("autoCompleteSearchInput").style.borderBottom = "none";
                        document.getElementById("autoCompleteSearchOutput").style.width = "620px";
                    }
                }
                function closeSearchseasion() {
                    document.getElementById("autoCompleteSearchOutput").style.width = "200px";
                }
                function closeSearchOutput(){
                    document.getElementById("autoCompleteSearchOutput").style.display = "none";

                }             
            </script>
            <ul class="navbar-nav my-lg-0">
                <li class="nav-item hidden-sm-down">
                    <form class="app-search">
                    <input type="text" onfocusout="closeSearchseasion()" onfocus="resetSearch()" onkeyup="showResult(this.value);resetSearch();" id="autoCompleteSearchInput" class="form-control" placeholder="<?php echo $lang['Search for...']; ?>"> <a class="srh-btn"><i class="ti-search"></i></a>
                    <div class="form-control" id="autoCompleteSearchOutput" style="position: absolute;width: 620px;border-radius: 0px 0px 25px 25px;border-color: #5cb3fd;display:none">
                    <!-- <button id="view-fa-fa-list" onclick="closeSearchOutput();" style="margin: 5px; font-size: 24px;" class="btn pull-right hidden-sm-down"><i class="fa fa-list"></i></button> -->
                        <ul id="ui-id-1" tabindex="0" class="ui-menu ui-widget ui-widget-content ui-autocomplete ui-front" style="list-style: none;border-radius: 0px 0px 25px 25px;">  
                        </ul>
                    </div>
                    </form>
                </li>
                <li class="nav-item hidden-sm-down">
                    <form class="app-search">
                    <div class="form-group" >
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="mdi mdi-theme-light-dark"> <a href="index?module=Change_theme"><?php echo $lang['Theme']; ?></a></i></div>
                                    <select id="changeTheme" name="changeTheme" class="form-control custom-select" onchange="changeThemeStyle();">
                                    <?php 
                                    if ($theme === 'white') {
                                    ?>
                                    <option value="white"><?php echo $lang['White']; ?></option>
                                    <option value="dark"><?php echo $lang['Dark']; ?></option>
                                    <?php
                                    } else {
                                    ?>
                                    <option value="dark"><?php echo $lang['Dark']; ?></option>
                                     <option value="white"><?php echo $lang['White']; ?></option>
                                    <?php
                                    }
                                    ?> 
                                    </select>
                                </div>
                            </div>
                    </form>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img class="img-circle" style="width: 50px;" style="border: 1px solid #000" src="<?php echo $user->user_profile_img; ?>"></a>
                    <div class="dropdown-menu dropdown-menu-right animated flipInY" style="-webkit-box-shadow: 0px 0px 15px 2px rgb(22, 100, 158);box-shadow: 0px 0px 15px 2px rgb(22, 100, 158);-moz-box-shadow: 0px 0px 15px 2px rgb(22, 100, 158);">
                        <center>
                            <ul class="dropdown-user">
                                <li>
                                    <div class="dw-user-box">
                                        <div class="u-img"><img class="form-group" src="<?php echo $user->user_profile_img; ?>"></div>
                                        <div class="u-text">
                                          <!--   <h4>WELCOM</h4> -->
                                          <h4><?php echo $user->name; ?></h4>
                                      </div>
                                </li>
                                <li role="separator" class="divider"></li>
                                <li>
                                    <button
                                        onclick="window.open('modules/log_Management/inc/log_view?token=<?php echo $user->user_token; ?>',' ','width=1200,height=200');"
                                        style="width: 35px; height: 35px; padding: 0px; font-size: 18px;"
                                        class="btn btn-info btn-circle btn-xl"
                                    >
                                        <i class="mdi mdi-eye"> </i>
                                    </button>
                                    <?php echo $lang['Show Token']; ?>  
                                </li>
                                <li><a href="index?module=Change_Password"><i class="mdi mdi-account-key"></i> <?php echo $lang['Change Password']; ?> </a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="logout?language=<?php echo $language; ?>&theme=<?php echo $theme; ?>"><i class="fa fa-power-off"></i> <?php echo $lang['Logout']; ?> </a></li>
                              </ul>
                          </center>
                      </div>
                  </li>
                  <li class="nav-item dropdown">
                    <?php 
                    if ($language === 'ar') {
                    ?>
                    <a id="currentLang" class="nav-link dropdown-toggle text-muted waves-effect waves-dark" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="flag-icon flag-icon-eg"></i></a>
                    <div class="dropdown-menu  dropdown-menu-right animated bounceInDown"> <a id ="changeLang" class="dropdown-item" href="index?module=Change_Language" ><i class="flag-icon flag-icon-us"></i> English</a> </div>
                    <?php
                    }else{
                    ?>
                    <a id="currentLang" class="nav-link dropdown-toggle text-muted waves-effect waves-dark" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="flag-icon flag-icon-us"></i></a>
                    <div class="dropdown-menu  dropdown-menu-right animated bounceInDown"> <a id ="changeLang" class="dropdown-item" href="index?module=Change_Language"><i class="flag-icon flag-icon-eg"></i> عربى</a> </div>
                    <?php
                    }
                    
                    ?>
                </li>
            </ul>
        </div>
    </nav>
</header>
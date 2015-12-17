<!DOCTYPE HTML>
    <html>
        <head>
            <title>FoodOLogy</title>
            <link type="text/css" rel="stylesheet" href="css/bootstrap.css" />
        </head>
        <body STYLE="background: url(img/fresh.jpg) no-repeat -100px -390px #FFFFFF;">
            <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <button data-target=".nav-collapse" data-toggle="collapse" class="btn btn-navbar" type="button">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a href="index.html" class="brand">Food<b style=color:red;>O</b>Logy</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="active"><a href="index.html">Home</a></li>
              <li><a href="#about">About</a></li>
              <li><a href="#contact">Contact</a></li>
              <li class="dropdown">
                <a data-toggle="dropdown" class="dropdown-toggle" href="#">Dropdown <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li class="divider"></li>
                  <li class="nav-header">Nav header</li>
                  <li><a href="#">Separated link</a></li>
                  <li><a href="#">One more separated link</a></li>
                </ul>
              </li>
            </ul>
            <form class="navbar-form pull-right" name="login" method="POST" action="login.php">
              <input type="text" placeholder="Username" class="span2" name="uname">
              <input type="password" placeholder="Password" class="span2" name="password">
              <button class="btn" type="submit">Sign in</button>
            </form>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>
            <form class="form-horizontal">
                <fieldset  style="margin-left: 850px;">
                    <!-- Form Name -->
                    <legend>Form Name</legend>
                    <!-- Select Basic -->
                    <div class="control-group">
                      <label class="control-label" for="selectbasic">Select Basic</label>
                      <div class="controls">
                        <select id="selectbasic" name="selectbasic" class="input-xlarge">
                          <option>Option one</option>
                          <option>Option two</option>
                        </select>
                      </div>
                    </div>
                    
                    <!-- Multiple Radios -->
                    <div class="control-group">
                      <label class="control-label" for="radios">Multiple Radios</label>
                      <div class="controls">
                        <label class="radio" for="radios-0">
                          <input name="radios" id="radios-0" value="Option one" checked="checked" type="radio">
                          Option one
                        </label>
                        <label class="radio" for="radios-1">
                          <input name="radios" id="radios-1" value="Option two" type="radio">
                          Option two
                        </label>
                        <label class="radio" for="radios-2">
                          <input name="radios" id="radios-2" value="Option three" type="radio">
                          Option three
                        </label>
                      </div>
                    </div>
                    
                    <!-- Multiple Radios (inline) -->
                    <div class="control-group">
                      <label class="control-label" for="radios">Inline Radios</label>
                      <div class="controls">
                        <label class="radio inline" for="radios-0">
                          <input name="radios" id="radios-0" value="1" checked="checked" type="radio">
                          1
                        </label>
                        <label class="radio inline" for="radios-1">
                          <input name="radios" id="radios-1" value="2" type="radio">
                          2
                        </label>
                        <label class="radio inline" for="radios-2">
                          <input name="radios" id="radios-2" value="3" type="radio">
                          3
                        </label>
                        <label class="radio inline" for="radios-3">
                          <input name="radios" id="radios-3" value="4" type="radio">
                          4
                        </label>
                      </div>
                    </div>
                    <!-- Textarea -->
                    <div class="control-group">
                      <label class="control-label" for="textarea">Text Area</label>
                      <div class="controls">                     
                        <textarea id="textarea" name="textarea">default text</textarea>
                      </div>
                    </div> 
                    <!-- Button (Double) -->
                    <div class="control-group">
                      <label class="control-label" for="button1id">Double Button</label>
                      <div class="controls">
                        <button id="button1id" name="button1id" class="btn btn-success">Good Button</button>
                        <button id="button2id" name="button2id" class="btn btn-danger">Scary Button</button>
                      </div>
                    </div>

                </fieldset>
            </form>
            <script src="js/bootstrap.js"></script>
            <script src="js/jquery.js"></script>
            <script src="js/bootstrap-dropdown.js"></script>
        </body>
    </html>
<?php 
ini_set(‘session.gc_maxlifetime’, 2592000);
ini_set(‘session.cookie_lifetime’, 2592000);
session_start(); 
?>
<html>
    <title>Diarium</title>
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <meta name="author" content="suicvairduCConstantinius"><link rel="shortcut icon" href="logo.ico" type="image/x-icon">   
        <meta name="format-detection" content="telephone=no">
    </head>
    <style>
    *{ color: rgba(0, 0, 0, 1); margin: 0; padding: 0; -webkit-appearance: none; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif; font-size: 1.4vmax;}
    body{display: flex; justify-content: space-around; align-items: center; flex-wrap: wrap; flex-direction: column;}.f1x{display: flex; justify-content: space-around; align-items: center;}
    .hidden{display: none;}

    .langs{display: flex; width: auto; height: auto;}
    .lang{width: 30vmin;height:30vmin;background-color: rgba(0,0,0,0.123); margin: 5vmin; border-radius: 0.5vmax;} 
    .lang:hover{font-weight: 500 ;background-color: rgba(0,0,0,0.321); cursor: pointer; border-radius: 1vmax;box-shadow: 0vmin 0vmin 3vmin 1vmin rgba(255, 0, 0, 0.044);}

    .message{width: 70vmin; height: 30vmin; background-color: rgba(0, 0, 0, 0.123);border-radius: 0.5vmax;}
    .message:hover{font-weight: 500 ;background-color: rgba(0,0,0,0.321); cursor: pointer; border-radius: 1vmax;box-shadow: 0vmin 0vmin 3vmin 1vmin rgba(255, 0, 0, 0.044);}

    a{width: 100%; height: 100%;}
    a:any-link{text-decoration: none; color: rgba(0,0,0,1);}
    a:focus{ outline: 0.3vmax solid rgba(255,0,0,0.5);}

mysteria{display: block; position: fixed; top: 0; left: 0;}
    .valuetype:hover{cursor:pointer; text-decoration: underline;}
    .search{width: 100vw; background-color: rgba(0, 0, 0, 0.123);}
    .search>form{width: 80%; height: 10vmin; display: flex; justify-content: space-around; align-items: center;}
    #submit{display: none;}
    #search{color: rgba(0, 0, 0, 0.93);font-size: 3vmin ;height: 5vmin; width: 80%; display: inline-flex; outline: none; text-indent: 2.4vw; background-color: white; border:none; border-radius: 0.5vmin; border-top-left-radius: 3vmin; border-bottom-left-radius: 3vmin; }
    #search:focus{box-shadow: 0vmin 0vmin 3vmin 1vmin rgba(255, 0, 0, 0.033);}
    .search>form>label{width: 7vmin; height: 7vmin; border-radius: 50%; margin-left: 5vmin; background-color: rgba(255,255,255,1);}
    .search>form>label:hover{box-shadow: 0vmin 0vmin 1.2vmin 0.3vmin rgba(0,0,0,0.099);}
    #logotype1, #search1{fill: rgba(255,255,255,0.62);}
    #logotype1:hover, #search1:hover{fill: rgba(255,255,255,1);}
    #logotype2, #search2{fill: rgba(0,0,0,0.62)}
    #logotype2:hover, #search2:hover{fill: rgba(0,0,0,1)}
    </style>
    <mysteria>
        <div class="f1x search">
            <form action="http://mysteria.space/search/index.php" method="get">
            <input type="text" name="search" id="search" placeholder="mysteria_" required>
            <label for="submit" title="Искать"><svg version="1.1" id="search_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="7vmin" height="7vmin" viewBox="0 0 250 250" enable-background="new 0 0 250 250" xml:space="preserve"><g id="search"><circle id="search1" cx="125" cy="125" r="85"/><path id="search2" d="M89.645,89.645c-19.523,19.523-19.523,51.188,0,70.711c18.328,18.328,47.362,19.445,66.999,3.359l24.818,24.818 c1.238-1.096,2.454-2.241,3.643-3.43c1.188-1.188,2.333-2.403,3.429-3.642l-24.819-24.819c16.087-19.636,14.97-48.67-3.358-66.998 C140.832,70.121,109.168,70.121,89.645,89.645z M160.157,153.086c-1.025,1.295-2.143,2.539-3.338,3.734 c-1.194,1.194-2.439,2.313-3.733,3.337c-17.663,14.156-43.529,13.039-59.905-3.337c-17.572-17.572-17.572-46.068,0-63.64 c17.57-17.571,46.067-17.572,63.639,0C173.196,109.557,174.313,135.423,160.157,153.086z"/></g></svg>
            </label><input type="submit" id="submit">
            </form>
            <svg version="1.1" id="mysteria" xmlns:x="&ns_extend;" xmlns:i="&ns_ai;" xmlns:graph="&ns_graphs;" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="7vmin" height="7vmin" viewBox="0 0 250 250" enable-background="new 0 0 250 250" xml:space="preserve"><switch><g i:extraneous="self"><g><circle id="logotype1" cx="125" cy="125" r="95"/><polygon id="logotype2" points="198,153 180,162 153,89.38 136.13,117.89 144,180 126,189 108,180 115.87,117.93 99,89.5 72,162 54,153 90,72 126,107.75 162,72"/></g></g></switch></svg>
        </div>
        <script>mysteria.onclick = function(){location.href="http://mysteria.space/"}</script>
    </mysteria>
    <body>
        <div class="langs">
            <div class="lang">
                <a class="f1x" href="en/">English</a> 
            </div>
            <div class="lang">
                <a class="f1x" href="ru/">Русский</a class="f1x"> 
            </div>
        </div>
        <div class="message">
            <a class="f1x" href="https://diarium.info/reg/">Write message</a>
        </div>
    </body>
</html>
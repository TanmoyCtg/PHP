# PHP
Here, I write and document all my php code. I also make some project for my future work!

<h1>How to create cookies in php?</h1>
<p>setcookie() creates the cookie.The setcookie() function must appear BEFORE the <html> tag
 You need user name and value. Then set the username in a variable like $cookie_name. cookies saved in user computer
  <h2>How to delete the cookie?</h2>
  setcookie("user",time()-3600);
 <h2>What is Sessions? Tell me something about Sessions</h2>
 Session store user information. This information used in multiple pages.<strong>session does not save in user computer</strong> 
 suppose, you have one application. You want to change application. You change it and close it. Those whole things session variables saves until the browser closed. When the browser closed, session dies. Session holds one single user information.
 <h3>How to start php session?</h3>
 You should use function which is named session_start(). Session variable are set php global variable $_SESSION
 You can print the session the value using print_r() function. Example, print_r($_SESSION).
 <h4>How to destroy the session</h4>
 You just use session_destroy() inside body tag.You can also unset session using session_unset()
</p>

# Amazon "Create a new account" Clone

 A clone I've developed to learn PHP and practice my "registration" skills! In this project, I used:
 - PHP
 - JavaScript
 - JQuery
 - MySQL
 - RegEx
 
 # How It Looks
 
 ![Website Picture](https://github.com/antoniovpires/Amazon_Register_Session_Clone/blob/main/assets/readme/amazon_clone.PNG)
 
 ## The Functionalities
 
 ### Captain Obvious
 
 You must fill all the inputs, *por supuesto*
 
 ### At least 6 characters
 
 I've used Regular Expressions to assure that every password has at least 6 characters.
 
 ```
 var password = $('#password').val();
 const re = /^.{6,}$/
 
 re.test(password)
 ```

### It's a match!

You **must** insert 2 matching passwords in order to create a new account

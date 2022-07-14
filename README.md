# Amazon "Create a new account" Clone

 A clone I've developed to learn PHP and practice my "registration" skills!
 
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

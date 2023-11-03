<?php  

function me($name = null,$email = null)
{
   echo "name - ".$name."<br> email - ".$email;
}

// me(name: "arajit",email: "smartjeet39@gmail.com");

// me(email: "smartjeet39@gmail.com");

me(email: "smartjeet39@gmail.com",name: "arajit");

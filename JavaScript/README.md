# MY JAVASCRIPT DOCUMENTATION

### Javascript can change the html content
- We can use ```getElementById``` to access html content and make changes. The following example shows how to find an element by it's ID and make changes.<br/>
```
<html>
  <head></head>
  <body>
    <h1 id="heading">Hello World!</h1>
    
    <script>
        document.getElementById("demo").innerHTML = "Hello JavaScript";
    </script>
  </body>
  </html>
 ``` 
  

# MY JAVASCRIPT DOCUMENTATION

### Javascript can change the html content
- We can use ```getElementById``` to access html content and make changes. The following example shows how to find an element by it's ID and make changes.<br/>
```
<html>
  <head></head>
  <body>
    <h1 id="heading">Hello World!</h1>
    
    <script>
        document.getElementById("heading").innerHTML = "Hello JavaScript";
    </script>
  </body>
  </html>
 ``` 
 
 This javascript line will replace the h1 tag content with id heading into Hello Javascript.<br/>
 Javascript accepts both Double Quotations ```"..."``` and ```'...'``` <br/>
 Ex:- ```document.getElementById('heading').innerHTML = 'Hello JavaScript';```

### Javascipt can change attribute values.
  Ex:-  
  ```
  <button onclick="document.getElementById('myImage').src='image.jpg'">change the image</button>
  <img id="myImage" src="pic.jpg" style="width:100px">
  ```
  Here in this example, the image with myImage id will be change into image.jpg when that particular button is clicked.
### Javascript can change html styles.
   Ex:-     ```document.getElementById("idname").style.fontSize = "35px";```
### Javascript can hide html elements.
   Ex:-```document.getElementById("idname").style.display = "none";```
### JavaScript Can Show HTML Elements.
   Ex:- ```document.getElementById("demo").style.display = "block";```


## Javascript PopUp Boxes
 - Alert
 - Confirm
 - Prompt 
 
## JavaScript built in objects
 - String object

## How to create a javascript event listener
Sample code :
```
<html>
 <head>
   <title>Creating your own event listener</title>
 </head>
 <body>
   <h1>Click me to see a message!</h1>
 </body>
</html>
```
```
var button = document.querySelector('h1');
button.onclick = function(){
    alert("Hello World!");
}
```

# Strings
## Escaping Characters
In order to indicate the ```"``` as a quotation mark, we have to escape the character using a backslash ```\```.
```
var sentence = "\"Javascript strings are useful for storing text.\"";
console.log(sentence);
```
Output:<br/>
```"Javascript strings are useful for storing text."```

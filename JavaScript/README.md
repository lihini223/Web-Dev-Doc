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
```"Javascript strings are useful for storing text."```<br/>

There are a few different characters that we must escape in order for the program to interpret a string in the correct way. These include:<br/>

```a single quote - \'```<br/>
```a double quote - \"```<br/>
```a backslash - \\```<br/>

Escaped characters can also be used to add tabs or go to the next line in your strings, with the following:<br/>

```a new line - \n```<br/>
```a tab - \t```<br/>

Example:
```
var sentence = "Javascript strings are useful for storing text.\n";
var tabbedSentence = "\tJavascript strings are also useful for manipulating text.";

console.log(sentence + tabbedSentence);
```
Output:
```
Javascript strings are useful for storing text.
	Javascript strings are also useful for manipulating text.
```

## Manipulating Arrays
### Converting to a string
The ```Array.toString()``` method will take an array and convert it into a string, with items separated by commas.
```
var studentString = students.toString();
console.log(studentString);
```

### Array Size
```Array.length``` will return the number of items currently in the array. Take notice that we do not use the parentheses operator as length is an array property, not a function.
```
var classSize = students.length;
console.log(classSize);
```
## Adding / removing items #
- Use the ```Array.push()``` method to add items to the end of an array.
- Use ```Array.pop()``` to remove the last item in the array. The ```Array.pop()``` method returns the removed item.
- Use ```Array.shift()``` to remove the first item in the array. ```Array.shift()``` returns the value that was removed as well.
- ```Array.unshift()``` adds an item to the beginning of an array. ```Array.unshift()``` returns the new size of the array.


## Accessing DOM elements 
- ```document.getElementById(id)```<br/> 
If an element has an id attribute, we can access it by using the ```document.getElementById()``` function:

# HTML Forms 
For more resources on HTML Forms, visit [W3Schools](https://www.w3schools.com/html/html_forms.asp).
## Text inputs 
We’ve seen how the ```<input>``` element can accept text values. There are several different type values that can be used, including:

   - ```text```: for plain text
   - ```password```: to obscure a password input field
   - ```search```: to indicate the text field is used for searching a page/multiple pages
   - ```url```: validates input as a URL address
   - ```tel```: for inputting phone numbers
   - ```email```: validates input as an email address<br/>
   
In the case of url and email, the browser will check to see if the input is a valid URL or email address.

## <textarea> 

If you want your user to be able to include new lines (by pressing return) in their text input, you can use a <textarea> element:

     <textarea id="multiLineInput"></textarea>

Notice how <textarea> elements have a closing tag. You can also specify the size of <textarea> by using the rows and cols attributes.

## Buttons 

A ```<button>``` element should be used whenever you want to create a clickable button to perform some action on the page.

```<button>``` elements are simple to define, and have three different type values:
 - ```submit```: submits form data to a server
 - ```reset```: resets all the data in the current form
 - ```button```: no default behavior. This type of button will be more useful when we begin our discussion of Javascript.

           <button type="submit">Submit Name</button>

```<select> ```

You can use ```<select>``` (with nested <option>) elements to create a drop-down selection of items that a user can choose from:

       <p>A <code>select</code> element allows users to input from a selection:</p>
       <select id="selector">
         <option>Option 1</option>
         <option>Option 2</option>
         <option selected>Option 3</option>
         <option>Option 4</option>
       </select>
       
Including the selected attribute in an <option> element will show that option by default.

Additionally, if you want to group options into different categories, you can nest <option> elements in an <optgroup> element:
  
         <select id="selector">
         <optgroup label="Group 1">
           <option>Option 1</option>
           <option>Option 2</option>
         </optgroup>
         <optgroup label="Group 2">
           <option>Option 3</option>
           <option>Option 4</option>
         </optgroup>
         <optgroup label="Group 3">
           <option>Option 5</option>
           <option>Option 6</option>
         </optgroup>





         

# CSS Grid

**//Displays Grid**<br/>
```display:grid;``` 

**//Display columns <br/>**
```grid-template-columns: ;``` <br/>
     ex:-display three columns with 50px units<br/>
        ```grid-template-columns: 50px 50px 50px;```
  
**// Display rows**<br/>
```grid-template-rows: ;``` <br/>
     ex:- display two rows with 50px units<br/>
         ```grid-template-rows: 50px 50px;```

**//add gap between columns** <br/>
```grid-column-gap: ;```<br/>

**//add gap between rows**<br/>
```grid-row-gap: ;```<br/>

**//add gaps faster with grid-gap**<br/>
```grid-gap: rowgap colgap ;```<br/>

**//use grid-column to control spacing**<br/>
```grid-column: startcol/endcol;```<br/>

**//use grid-row to control spacing**<br/>
```grid-row: startrow/endrow ;```<br/>

**//align an item horizontally using justify-self**<br/>
```justify-self: start/center/end ;```<br/>

**//align an item vertically using align-self**<br/>
```align-self: start/center/end;```<br/>

**//align all items horizontally using justify-items**<br/>
```justify-items: start/center/end ;```<br/>

**//Align All Items Vertically using align-items**<br/>
```align-items: start/center/end;```<br/>

**//divide the grid into an area template**<br/>
```
  grid-template-areas: 
	" header header header"
	"advert content content"
	"footer footer footer" ;
  ```
```advert``` - empty cell <br/>
```.``` can be used to designate an empty cell<br/>

//**placing items in grid areas using the grid-area property**<br/>
```grid-area: referencing name;``` [header,content,footer]<br/>

**//Use grid-area Without Creating an Areas Template**<br/>
```grid-area: horizontal line to start at / vertical line to start at / horizontal line to end at / vertical line to end at;```

**//Reduce Repetition Using the repeat Function**<br/>
```grid-template-rows: repeat(no.of rows, size);```<br/>
```grid-template-columns: repeat(no.of cols, size);```<br/>

**//Limit Item Size Using the minmax Function**<br/>
```grid-template-columns: repeat(no.of cols, minmax(min-size,max-size));```<br/>

# Lab 1:  HTML, Basics

In this lab, you will learn the basic concepts for writing web pages.  This language used to create web pages is called HTML (Hypertext Markup Language).  Although the actual HTML file that you write may not look like much, it will appear much different when seen through a Web Browser, such as chrome or Microsoft Internet Explorer.

Before writing an HTML document, you must first decide how you want your information to look like when viewed in a web browser.  For instance, you do not want all of your information just simply printed on the page.  Rather, you will want to create headings to differentiate titles from normal text.  To distinguish between the styles of your information, you must use an HTML tag.  A tag simply denotes the style of the information you are writing.  The format usually follows as such:

              <tag name>text</tag name>

The ending tag name is usually preceded by a ‘/’.  This indicates when you want your current style to end.  If you do not use an ending tag, your style will be carried out until the end of the HTML document.  An overview of this process includes the following things:

1.	First type in your document using a word processor.  For this type of file, you only need to use Notepad for Windows.  To open Notepad, click on the start menu and select the Run option.  Type ‘notepad’ in the text box and then click OK.

2.	Once you have typed your HTML document, save it as a text file with the extension .html.

3.	To view your file, open it in a Web Browser 

Your file will now appear on the browser as it would appear on the Internet.  If you want to view the changes you make to your file simply save your changes click on the refresh or reload button to see your updated file.  If you close your browser or save your file as a different name, you must repeat the steps above.  

 

Now, lets try and create our first HTML document.

1.	First open Notepad.  Now type in the text below:
<HTML><HEAD>
	<TITLE>
	Preparing a Document for the World Wide Web
	</TITLE>
	</HEAD>
	<BODY>
<H1>Preparing a Document for the World Wide Web</H1>
</BODY></HTML>

2.	Save your file on your disk as ****.html where the **** represent the first four letters of your last name.
3.	Open your HTML file in a web browser.

The file that you have just created contains many important concepts in writing HTML documents.

1.	There are two parts to every HTML file name.  The second part is the .html extension.  Every HTML document must end like this.  The other is the first part, which in this case is the first four letters of your last name, but it could be any name that you can think of.  

2.	You also witnessed the usage of HTML tags in an actual HTML document.  For instance, every HTML file begins with <HTML> and ends with </HTML>.  Other tags that you used are the <HEAD>, <TITLE>, <BODY>, and <H1> tags.  The area inside the HEAD tags contains the Title and other information.  The title is not included in the document’s text, rather it appears in the browser window.  The title should be descriptive of your document due to the fact that many Internet Searches use the title in their document searches.

The BODY segment of your file contains the text and other information that you want displayed on the browser screen.  Headings are included in the BODY segment.  In HTML, there are six levels of headings.  They are numbered H1 through H6.  They are used just as H1 was in your first HTML document.  Heading H1 is the most important while H6 is the least important.  Headings usually appear larger and bolder than regular text when viewed on a web browser.  However, headings can appear differently on different computers since users have the ability to change how headings appear on their individual computers.

Also, when using headings, always use a more important heading before a less important heading (H2 before H3).  Headings are automatically followed by a blank line.

Another very important feature in HTML is the paragraph tag, <p>.  To mark a paragraph in HTML, use the <p> tag.  This tag is an exception in HTML.  While most other tags require an end tag, the paragraph tag does not.

With the introduction of the paragraph tag, we now must deal with the problem of multiple spaces, and blank lines in the text file.

1.	The paragraph tag indicates breaks between paragraphs by inserting a blank line between the text before and after the paragraph tag.  
2.	Blank lines included in your text file are ignored when viewed on a browser.
3.	Multiple spaces in your text file are replaced by a single space.
4.	Even if your text file uses word wrapping, it will not affect its appearance on the browser.

Now lets modify our HTML document to try out the new concepts.
We want to edit the current HTML document so open your ****.html file:
1.	Insert the following including all blank lines and extra spaces between the </H1> and </BODY> tags:

Writing HTML documents takes some planning,
But the results are worthwhile.

Try to keep your Web documents simple and
short—not more than a           few screens
each.  You can link lots of information
together, so don’t worry about not being able
to cover everything you want to say in a few
screens. <p>
When you plan your document, remember that
   Readers can jump       into it from
Anywhere.  For this reason, try not to use
Phrases             like “as we said earlier.”
Readers might not 
have been there earlier! <p>

Following are some HTML features to help you
        Convey your message.
This document prepared by (put your name here).

2.	Save your file.
3.	View your file in a browser
4.	Print both the text file and the file as viewed by a web browser.
 
 

Other interesting features in HTML are line breaks and lists.  A line break can be used when you want to include short lines of text without extra blank lines.  The tag for line break is <br>.  Like the paragraph tag, the line break tag does not have an end tag.

For example:
   Dr. Schmidlap <br>
   123 Loveless Street <br>
   Wilmington, DE 19806 <p>

Produces:
   Dr. Schmidlap
   123 Loveless Street
   Wilmington, DE 19806

Lists are a great way for displaying information in a clear an organized fashion on the Web.  The most common HTML lists are: ordered lists, unordered lists, and definition lists.
There are a few things that you should know before using lists:
1.	Lists can be nested.  That is, you can have a list inside of a list.
2.	Lists can contain many paragraphs, separated by the <p> tag.
3.	Lists create their own blank lines before and after their location.  Therefore, you do not have put insert your own blank lines.
4.	Individual list elements do not need an end tag.

The ordered list displays the information in the list in a numerical fashion.  
For instance:
	<ol>
		<li>List item 1
		<li>List item 2
		<li>List item 3
	</ol>

Produces:
1.	List item 1
2.	List item 2
3.	List item 3

The unordered list follows the same syntax as the ordered list.  The only difference in the two is that the unordered list uses bullets instead of numbers to mark each list item.  The tag for an unordered list is <ul> and the end tag is </ul>.

Definition lists are a slightly different from the ordered and unordered lists.  They have three tags, one to start the list, one to identify the definition term and one to identify the definition (<dl>, <dt>, <dd>).  For example:

	<dl>
		<dt>Definition term
			<dd>Definition
		<dt>Definition term
			<dd>Definition
	</dl>

Produces:
	Definition term
		Definition
	Definition term
		Definition

Next we will use our knowledge of lists in our HTML document.
1.	Open your ****.html file and insert the following just above the BODY end tag (</BODY>).

<H2>Design aids for HTML</H2>
<ol>
	<li>Formatting tags
	<li>Style tags
</ol>

2.	Save your file and view it on the browser.
3.	Print both the text file and the file as viewed in the browser.

It is important to have variety in your HTML document.  An easy way to make your text look better is to change the style of the text.  Four easy ways for modifying the style of the text is to use bold, underline, italics and typewriter.  These use the tags <b>, <u>, <i> and <tt> respectively with their proper end tags (</b>, </u>, </i>, </tt>).

These different styles can be nested.  This means that you could combine italics and underline to create a line of text which was both underlined and italicized.  

Now modify your HTML document to apply the new styles.
1.	Open your file
2.	After the “<li>Formatting tags” line, insert the following:
<ul>
	<li>Heading tags
	<li>Paragraph tags
	<li>Line breaks
</ul>

3.	After “Style tags” insert
<ul>
	<li><b>Bold text</b>
	<li><i>Italic text</i>
	<li><u>Underlined text</u>
	<li><tt>Typewriter text</tt>
</ul>

4.	Save your file and view it in the browser
5.	Print both your text file and the file as viewed in the browser

Finally you will need to take all the concepts that you have learned and create your own HTML document.  Create a class schedule real or imagined that includes at least 6 items, uses more than one heading, an itemized list and formatting of bold and italics in some way.  It should have your name, date, and section number as the title and first heading. Save this file as Schedule.html.
Print this file out both as text and as seen in the browser. Hand in all of your printouts from the lab and the above exercise.

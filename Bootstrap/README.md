# Welcome to my Bootstrap Documentation

## You can add bootstrap to any app by adding the following element into your code.
```
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"/>
```
## Make Images Mobile Responsive :<br/> 
All you have to do is add ```class="img-responsive"``` to your image tage. look at the example below.<br/>
```<img src="https://bit.ly/fcc-running-cats" class="img-responsive">```

## Center Text with Bootstrap<br/>
All you need to do is add the ```class="text-center"``` to your code.<br/>
ex:- ```<h2 class="text-center">your text</h2>```

## Create a Bootstrap Button<br/>
All you have to do is add ```class="btn btn-default"``` to your button element. <br/>
```<button type="button" class="btn btn-default">Like</button>```

## Create a Block Element Bootstrap Button<br/>
By making them block elements with the additional class of btn-block, your button will stretch to fill your page's entire horizontal space and any elements following it will flow onto a "new line" below the block.<br/>
```<button class="btn btn-default btn-block">Submit</button>```<br/>
This button would take up 100% of the available width.

## Call out Optional Actions with btn-info
 The btn-info class is used to call attention to optional actions that the user can take.
 ```   <button class="btn btn-block btn-primary btn-info">Info</button> ```

## To showcase hero unit style component
A lightweight, flexible component that can optionally extend the entire viewport to showcase key marketing messages on your site.
```class="jumbotron"```

## Containers
Bootstrap 4 also requires a containing element to wrap site contents.<br/>
```.container``` class provides a responsive fixed width container.<br/>
```.container-fluid``` class provides a full width container, spanning the entire width of the viewport.

```.pt-3``` means "add a top padding of 16px to the container.
 
 ```my-3``` add margin-top

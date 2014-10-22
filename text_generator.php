<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pit Stop: The Developer&rsquo;s Best Friend</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <link href='http://fonts.googleapis.com/css?family=Bubblegum+Sans' rel='stylesheet' type='text/css'>
   <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
      <link rel="stylesheet" href="css/app.css" />
    <script src="js/vendor/modernizr.js"></script>


    </head>
  <body id="container">
     <img src="img/pit_stop_banner.jpg" alt="friendly pitbull with 'Pit Stop' legend" />

<div class="row">
<div class="large-12 columns">  
<h1>Placeholder Text Generator</h1>
</div>
</div><!--ends header row -->
  
<div id="wrap" class="row">
  <div class="large-10 large-centered medium-10 medium-centered columns">
  <p>Pit Stop offers traditional &ldquo;Lorem Ipsum&rdquo; text based on scrambled Latin, or choose &ldquo;Doggerel&rdquo; based on the works of 19th century poet William&nbsp;Topaz&nbsp;McGonagall.</p>
  </div>
</div>

<form action="lorem.blade.php" method="GET">
  <div id="generate" class="row">
    <div class="large-3 push-1 medium-3 push-1 columns">
      <label>Choose Lorem Ipsum 
        <input type="radio" name="text_type" value="lorem_ipsum" />
      </label>
    </div>
    <div class="large-2 push-2 medium-3 push-1 columns">
      <label>Choose Doggerel 
        <input type="radio" name="text_type" value="doggerel" />
      </label>
    </div>
    <div class="large-4  medium-4 columns">
      <div class="row collapse">
        <label>Number of paragraphs (maximum 99)</label>
        <div class="small-4 columns">
          <input type="text" name="number_of_paragraphs" id="number_of_paragraphs" />
        </div>
        <div class="small-8 columns">
        <input type="submit" id="submit" value="Fetch Text!" class="button postfix">
        </div>
      </div>
    </div>
  </div> 
</form>


   <div>
    <footer>
         <ul>
             <li><a href="index.php">Home</a></li>
            <li><a href="text_generator.php">Placeholder&nbsp;Text&nbsp;Generator</a></li>
            <li><a href="user_generator.php">Random&nbsp;User&nbsp;Generator</a></li>
          </ul>
  </footer>
  <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script> 
</div>
</body>
</html>
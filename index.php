<!-- In the name of reason and science -->
<?php
// Calling and assigning the variables here so I can use them in <HEAD>

// Gets the current day, this is how all the magic happens!
    $day_of_the_week = "Monday";
    // $day_of_the_week = date('l'); // Returns the day eg: Saturday
// Making the day into all lowercase so I can use that on places, see below:
    $current_day = strtolower($day_of_the_week);
// Getting year, month and day, it's not required but thought of displaying it on page.
// I find it very cheesy to display current date on a website but this one suits it.
    $year = date('Y'); // Getting the current year eg: 2018
    $month = date('M'); // Getting the current month eg: Jan
    $day = date('j'); // Getting the current day number.
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <!-- Here I am using the day to display as site title -->
        <title>Today is <?php echo $day_of_the_week; ?>!</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <!-- I have put the day as class so I can also change the background color of a different day -->
    <!-- I added an extra _bg at the end so I can use just saturday for the use in wrapper  -->
    <body class="<?php echo $current_day."_bg"; ?>">
        <!-- I added a class called wrapper and the saturday class to change a color of current day  -->
        <div class="wrapper <?php echo $current_day; ?>">
        <?php
            // echo "<p>$month $day, $year</p>";
            echo "<h1>Today is $day_of_the_week! </h1>";
            echo "<p>It's $day_of_the_week, $month $day. listen to this song!</p>";
            // Here I have called a different file to match the current day saturday.php
            // Inside that file I have a simple YouTube embed code.
            ?>
            <div class="video">
                <?php include 'inc/'.$current_day.'.php'; ?>
            </div>
            <p>Come back everyday to start your day with a different song. <iframe src="https://www.facebook.com/plugins/share_button.php?href=http%3A%2F%2Fwww.tamalanwar.com%2Fprojects%2Ftoday-is%2F&layout=button_count&size=small&mobile_iframe=true&appId=114661981960459&width=69&height=20" width="69" height="20" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe></p>

            <?php
            // A less cheesy way to give myself some credit :)
            echo "<br><small>Put together by Tamal Anwar on 2018 - <a href='https://github.com/TamalAnwar/today-is' target='_blank'>{Source code}</a></small>";
        ?>
        </div>
    </body>
</html>
<!-- That's all folks! -->

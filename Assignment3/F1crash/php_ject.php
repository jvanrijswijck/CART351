<!doctype html>
<html lang="en">

<head>
    <link rel="stylesheet" href="style.css"> </head>

<body>
    <header>
        <h2>The F1 WIN 'nd CRASH imaginator</h2></header>
    <?php
        
/* Grab csv */
$csv = array();
$lines = file('./F12016.csv', FILE_IGNORE_NEW_LINES);
foreach ($lines as $key => $value) {$csv[$key] = str_getcsv($value);}
   
    

    
/* Form */
echo "<div class = 'center'><form method='post' action='./php_ject.php'><select name='Winner'></div>";
foreach ($csv as $key => $value)
{
    echo "<option value='".$value[2]."'>";
    echo $value[0];
    echo "</option>";
    
}
echo "<input type='submit' name='submit'/></select></form>";
  
    
if (isset($_POST['Winner']))
{
   
    
    if ($_POST['Winner'] == '1'){
        echo "<div class='image'><a href= 'http://www.pitflaps.co.uk/wp-content/uploads/2015/05/pastor-maldonado-melbourne-2015.jpg' ><img src='images/HAM1.jpg' ></a></div>";
        echo "<h2> Hamilton won! Click image for crash! </h2>";
        
    } else if ($_POST['Winner'] == '2'){
        echo "<div class='image'><a href= 'http://www.mrsphysics.co.uk/roadcrashsafety/wp-content/uploads/2016/07/cropped-no-crashes.png' ><img src='images/HAM2.jpg' ></a></div>";
        echo "<h2>Hamilton won! Click image for crash! </h2>";
    }
      else if ($_POST['Winner'] == '3'){
        echo "<div class='image'><a href= 'http://www.mrsphysics.co.uk/roadcrashsafety/wp-content/uploads/2016/07/cropped-no-crashes.png' ><img src='images/HAM3.jpg' ></a></div>";
        echo "<h2>Hamilton won! Click image for crash! </h2>";
    }
    else if ($_POST['Winner'] == '4'){
        echo "<div class='image'><a href= 'http://www.mrsphysics.co.uk/roadcrashsafety/wp-content/uploads/2016/07/cropped-no-crashes.png' ><img src='images/HAM4.jpg' ></a></div>";
        echo "<h2>Hamilton won! Click image for crash! </h2>";
    }
    else if ($_POST['Winner'] == '5'){
        echo "<div class='image'><a href= 'http://e0.365dm.com/15/09/16-9/20/maldonado-grosjean-crash-silverstone_3351398.jpg?20150915143744' ><img src='images/ROS1.jpg' ></a></div>";
        echo "<h2>Rosberg won! Click image for crash! </h2>";
    }
    else if ($_POST['Winner'] == '6'){
        echo "<div class='image'><a href= 'http://cdn-7.motorsport.com/static/img/amp/600000/600000/607000/607600/607657/s6_320880/f1-monaco-gp-2015-max-verstappen-scuderia-toro-rosso-crashes-with-romain-grosjean-lotus-f1.jpg' ><img src='images/ROS2.jpg' ></a></div>";
        echo "<h2>Rosberg won! Click image for crash! </h2>";
    }
    else if ($_POST['Winner'] == '7'){
        echo "<div class='image'><a href= 'http://www.mrsphysics.co.uk/roadcrashsafety/wp-content/uploads/2016/07/cropped-no-crashes.png' ><img src='images/HAM5.jpg' ></a></div>";
        echo "<h2>Hamilton won! Click image for crash! </h2>";
    }
      else if ($_POST['Winner'] == '8'){
        echo "<div class='image'><a href= 'https://lowdownblog.files.wordpress.com/2015/06/f1-2015-austria-raikkonen-alonso-crash.jpg' ><img src='images/HAM6.jpg' ></a></div>";
        echo "<h2>Hamilton won! Click image for crash! </h2>";
    }
    else if ($_POST['Winner'] == '9'){
        echo "<div class='image'><a href= 'http://www.grandprixphoto.com/Business/ImageCp.aspx?id=67009&mode=limits&height=600&width=600&quality=90' ><img src='images/HAM7.jpg' ></a></div>";
        echo "<h2>Hamilton won! Click image for crash! </h2>";
    }
    else if ($_POST['Winner'] == '10'){
        echo "<div class='image'><a href= 'http://www.mrsphysics.co.uk/roadcrashsafety/wp-content/uploads/2016/07/cropped-no-crashes.png' ><img src='images/HAM8.jpg' ></a></div>";
        echo "<h2>Hamilton won! Click image for crash! </h2>";
    }
      else if ($_POST['Winner'] == '11'){
        echo "<div class='image'><a href= 'http://www.mrsphysics.co.uk/roadcrashsafety/wp-content/uploads/2016/07/cropped-no-crashes.png' ><img src='images/HAM9.jpg' ></a></div>";
        echo "<h2>Hamilton won! Click image for crash! </h2>";
    }
    else if ($_POST['Winner'] == '12'){
        echo "<div class='image'><a href= 'http://d2d0b2rxqzh1q5.cloudfront.net/sv/3.65/dir/2f5/image/2f5c209e0abac88084e80e6acfcc284c.jpg' ><img src='images/HAM10.jpg' ></a></div>";
        echo "<h2>Hamilton won! Click image for crash! </h2>";
    }
    else if ($_POST['Winner'] == '13'){
        echo "<div class='image'><a href= 'http://cdn-5.motorsport.com/static/img/mgl/4900000/4930000/4937000/4937100/4937105/s8/f1-singapore-gp-2015-nico-hulkenberg-sahara-force-india-f1-vjm08-and-felipe-massa-williams.jpg' ><img src='images/VET1.jpg' ></a></div>";
        echo "<h2>Vettel won! Click image for crash! </h2>";
    }
    else if ($_POST['Winner'] == '14'){
        echo "<div class='image'><a href= 'http://www.mrsphysics.co.uk/roadcrashsafety/wp-content/uploads/2016/07/cropped-no-crashes.png' ><img src='images/ROS3.jpg' ></a></div>";
        echo "<h2>Rosberg won! Click image for crash! </h2>";
    }
    else if ($_POST['Winner'] == '15'){
        echo "<div class='image'><a href= 'https://www.formula1.com/content/fom-website/en/latest/features/2015/10/winners-and-losers---russia/_jcr_content/featureContent/manual_gallery/image5.img.640.medium.jpg/1444642746076.jpg' ><img src='images/HAM11.jpg' ></a></div>";
        echo "<h2>Hamilton won! Click image for crash! </h2>";
    }
     else if ($_POST['Winner'] == '16'){
        echo "<div class='image'><a href= 'https://i.ytimg.com/vi/ik6mzX4b9u0/hqdefault.jpg' ><img src='images/HAM12.jpg' ></a></div>";
        echo "<h2>Hamilton won! Click image for crash! </h2>";
    }
    else if ($_POST['Winner'] == '17'){
        echo "<div class='image'><a href= 'https://www.formula1.com/content/fom-website/en/latest/interviews/2015/11/sebastian-vettel-q-a--drivers-let-ferrari-down/_jcr_content/image16x9.img.1024.medium.jpg' ><img src='images/ROS4.jpg' ></a></div>";
        echo "<h2>Rosberg won! Click image for crash! </h2>";
    }
    else if ($_POST['Winner'] == '18'){
        echo "<div class='image'><a href= 'http://www.mrsphysics.co.uk/roadcrashsafety/wp-content/uploads/2016/07/cropped-no-crashes.png' ><img src='images/ROS5.jpg' ></a></div>";
        echo "<h2>Rosberg won! Click image for crash! </h2>";
    }
    else if ($_POST['Winner'] == '19'){
        echo "<div class='image'><a href= 'http://cf.c.ooyala.com/lyeHQ0dzoyFjmCW64MsDKmkpqWaK165p/promo264423933' ><img src='images/ROS6.jpg' ></a></div>";
        echo "<h2>Rosberg won! Click image for crash! </h2>";
    }
}
    
  //echo "<img src=./images/\"$image\" />";

    ?>
</body>

</html>
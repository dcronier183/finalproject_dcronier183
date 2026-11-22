<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Directory</title>
    <link rel="stylesheet" href="styles/main.css">
    <script src="scripts/main.js" defer></script>
</head>
<body>
<h1>Student Directory<h1>
<h2>Dominique Cronier<h2>
<p><?php echo date("F j, Y"); ?></p>
<section id="ImageGallery">
<figure>
    <img src="media/nature_image1.jpg" alt="scenic view of mountains and lake">
    <figcaption>Beautiful Mountain Landscape</figcaption>
</figure>
<figure>
    <img src="media/nature_image2.jpg" alt="Slightly cloudy skies over mountain and lake with tree trunk up on bank">
    <figcaption>Cloudy Lakeside View</figcaption>
</figure>
<figure>
    <img src="media/nature_image3.jpg" alt="Majestic cluster of waterfalls streaming down into clear lake">
    <figcaption>Waterfall Paradise</figcaption>
</figure>
</section>
<form action="search.php" method="POST">
    <label for="last_name">Student Last Name:</label>
    <input type="text" id="last_name" name="last_name" required>
    <input type="submit" value="Search">
</form>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!--Important to make website responsive-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Project title-->
    <title>Find Workers.com</title>
    <!--linking Css-->
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/b98523537f.js" crossorigin="anonymous"></script> 
</head>
<body>

<script src="https://kit.fontawesome.com/b98523537f.js" crossorigin="anonymous"></script>

<style> /* CSS styles for the profile card */
        .profile-card {
            background-color: blue;
            width: 300px;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
            margin: 10px;
            display: inline-block;
        }

        .profile-image img {
            width: 100%;
            height: auto;
        }

        .profile-details {
            margin-top: 10px;
        }

        .profile-details h2 {
            font-size: 18px;
            margin: 5px 0;
        }

        .profile-details p {
            margin: 5px 0;
        }</style>
    <!-- Navbar Section Starts Here -->
    <section class="navbar">
        <div class="container">
            <div class="logo">
                <a href="#" title="Logo">
                    <img src="FW_Logo.jpeg" alt="Findworker logo" class="img-responsive">
                </a>
            </div>

            <div class="menu text-right">
                <ul>
                    <li class="active">
                        <a href="index.html"><i class="fa-solid fa-house"></i> Home</a>
                    </li>
                    <li>
                        <a href="registeration.html"><i class="fa-solid fa-certificate fa-white"></i> Register</a>
                    </li>
                    <li>
                        <a href="about.html"><i class="fa-solid fa-cheese"></i> About</a>
                    </li>
                    <li>
                        <a href="contact.html"><i class="fa-solid fa-address-book"></i> Contact</a>
                    </li>
                </ul>
            </div>

            <div class="clearfix"></div>
        </div>
    </section>
    <!-- Navbar Section Ends Here -->

    <!-- Electrician Profiles Section Starts Here -->
    <section class="profiles">
        <div class="container">
            <h1>Electrician Profiles</h1>

            <?php
            // Database configuration
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "user";

            // Create a database connection
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Check if the connection was successful
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Retrieve only electrician profiles from the database
            $sql = "SELECT * FROM workers WHERE workcategory = 'labourer'";
            $result = $conn->query($sql);

            // Check if there are electrician profiles in the database
            if ($result->num_rows > 0) {
                // Loop through each electrician profile and display it
                while ($row = $result->fetch_assoc()) {
                    echo '<div class="profile-card">';
                    echo '<div class="profile-image">';
                    echo '<img src="' . $row['profile_image'] . '" alt="Worker Image">';
                    echo '</div>';
                    echo '<div class="profile-details">';
                    echo '<h2>' . $row['fname'] . ' ' . $row['lname'] . '</h2>';
                    echo '<p><strong>Mobile:</strong> ' . $row['mobile'] . '</p>';
                    echo '<p><strong>Aadhar:</strong> ' . $row['aadhar'] . '</p>';
                    echo '<p><strong>Date of Birth:</strong> ' . $row['dob'] . '</p>';
                    echo '<p><strong>Address:</strong> ' . $row['addr'] . '</p>';
                    echo '<p><strong>City:</strong> ' . $row['city'] . '</p>';
                    echo '<p><strong>Work Category:</strong> ' . $row['workcategory'] . '</p>';
                    echo '</div>';
                    echo '</div>';
                }
            } else {
                echo "No electrician profiles found.";
            }

            // Close the statement and database connection
            $conn->close();
            ?>

        </div>
    </section>
    <!-- Electrician Profiles Section Ends Here -->

    <!-- Footer Section Starts Here -->
    <section class="footer">
        <div class="container">
            <p class="text-center">All rights reserved. Designed by <a href="#">Your Name</a></p>
        </div>
    </section>
    <!-- Footer Section Ends Here -->

</body>
</html>

<?php
    $server = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "LINKEDINPORTAL";

    $conn = new mysqli($server, $user, $pass);

    if (!($conn->connect_error))
    {
        $sql = "CREATE DATABASE IF NOT EXISTS $dbname";

        if ($conn->query($sql) == TRUE)
        {
            $conn = new mysqli($server, $user, $pass, $dbname);

            if (!($conn->connect_error))
            {
                $sql = "CREATE TABLE IF NOT EXISTS RecruiterCredentials ( id INT NOT NULL PRIMARY KEY AUTO_INCREMENT, FirstName VARCHAR(20) NOT NULL, LastName VARCHAR(15) NOT NULL, Email VARCHAR(30) NOT NULL, PhoneNo VARCHAR(15) NOT NULL, CNIC VARCHAR(15) NOT NULL, UserName VARCHAR(30) NOT NULL, Password VARCHAR(40) NOT NULL)";

                if ($conn->query($sql) == TRUE)
                {
                    $sql = "ALTER TABLE RecruiterCredentials ADD UNIQUE(Username)";

                    $conn->query($sql);

                    $sql = "CREATE TABLE IF NOT EXISTS RecruiterJobs ( id INT NOT NULL PRIMARY KEY AUTO_INCREMENT, R_ID INT NOT NULL, JobTitle VARCHAR(30) NOT NULL, Job_Desc VARCHAR(900) NOT NULL, FOREIGN KEY (Recruiter_id) REFERENCES RecruiterCredentials(id) ON UPDATE CASCADE ON DELETE CASCADE)";

                    $conn->query($sql);

                   /////////// $sql = "CREATE TABLE IF NOT EXISTS RecruiterJobsApplicants ( id INT NOT NULL PRIMARY KEY AUTO_INCREMENT, R_ID INT NOT NULL, JobTitle VARCHAR(30) NOT NULL, Job_Desc VARCHAR(900) NOT NULL, FOREIGN KEY (Recruiter_id) REFERENCES RecruiterCredentials(id) ON UPDATE CASCADE ON DELETE CASCADE)";

                    $conn->query($sql);

                    /////////////$sql = "CREATE TABLE IF NOT EXISTS RecruiterJobsApplicantsMessages ( id INT NOT NULL PRIMARY KEY AUTO_INCREMENT, R_ID INT NOT NULL, JobTitle VARCHAR(30) NOT NULL, Job_Desc VARCHAR(900) NOT NULL, FOREIGN KEY (Recruiter_id) REFERENCES RecruiterCredentials(id) ON UPDATE CASCADE ON DELETE CASCADE)";

                    $conn->query($sql);

                    $sql = "CREATE TABLE IF NOT EXISTS RecruiterMessagePortal ( id INT NOT NULL PRIMARY KEY AUTO_INCREMENT, Sender VARCHAR(30) NOT NULL, Receiver VARCHAR(30) NOT NULL, Domain VARCHAR(20) NOT NULL, Status VARCHAR(15) NOT NULL, Message VARCHAR(1000) NOT NULL, FOREIGN KEY (Sender) REFERENCES RecruiterCredentials(UserName) ON UPDATE CASCADE ON DELETE CASCADE, FOREIGN KEY (Receiver) REFERENCES RecruiterCredentials(UserName) ON UPDATE CASCADE ON DELETE CASCADE)";

                    $conn->query($sql);

                    $sql = "CREATE TABLE IF NOT EXISTS UserCredentials ( id INT NOT NULL PRIMARY KEY AUTO_INCREMENT, FirstName VARCHAR(20) NOT NULL, LastName VARCHAR(15) NOT NULL, Email VARCHAR(30) NOT NULL, PhoneNo VARCHAR(15) NOT NULL, CNIC VARCHAR(15) NOT NULL, UserName VARCHAR(30) NOT NULL, Password VARCHAR(40) NOT NULL)";

                    $conn->query($sql);

                    $sql = "ALTER TABLE UserCredentials ADD UNIQUE(Username)";

                    $conn->query($sql);

                    header("Location: HomePage.html");
                }
            }
        }
    }
?>

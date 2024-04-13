DROP DATABASE IF EXISTS task_center;
CREATE DATABASE task_center ;
USE task_center;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


CREATE TABLE Users (
    `UserID` INT AUTO_INCREMENT PRIMARY KEY,
    `fname` varchar(50) NOT NULL,
    `lname` varchar(50) NOT NULL,
    `rid` int(11) NOT NULL DEFAULT '3',
    `email` VARCHAR(255) UNIQUE NOT NULL,
    `password` VARCHAR(255) NOT NULL,
    `tel` VARCHAR(20),
    `code` VARCHAR(10) NOT NULL ,
    `is_verified` TINYINT(3) NOT NULL DEFAULT '0'
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

    CREATE TABLE JobStatus (
           StatusID INT AUTO_INCREMENT PRIMARY KEY,
           StatusName VARCHAR(50) NOT NULL
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

    INSERT INTO JobStatus (StatusName) VALUES
                                           ('Pending'), ('In Progress'),  ('Completed');


CREATE TABLE Category(
    CategoryId INT AUTO_INCREMENT PRIMARY KEY,
    CategoryName VARCHAR(255) NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO Category (CategoryName) VALUES
('Cleaning'), ('Outdoor'),('Assistance'),('Office'), ('Other');

CREATE TABLE Jobs (
    JobID INT AUTO_INCREMENT PRIMARY KEY,
    UserID INT,
    Title VARCHAR(255) NOT NULL,
    Description TEXT,
    CategoryID INT,
    StatusId INT NOT NULL DEFAULT '1',
    Location VARCHAR(255),
    PayExpected DECIMAL(10, 2),
    EstimatedWorkTime INT,
    FOREIGN KEY (UserID) REFERENCES Users(UserID),
    FOREIGN KEY (CategoryID) REFERENCES Category(CategoryId),
    FOREIGN KEY (StatusId) REFERENCES JobStatus (StatusID)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;



CREATE TABLE `Role` (
  `rid` int(11) AUTO_INCREMENT PRIMARY KEY,
  `rname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Role`
--

INSERT INTO `Role` (`rid`, `rname`) VALUES
(1, 'superadmin'),
(2, 'admin'),
(3, 'standard');


ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`rid`) REFERENCES `Role` (`rid`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;


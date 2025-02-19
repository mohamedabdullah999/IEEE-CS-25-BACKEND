CREATE DATABASE Shroweida_Airport;
USE Shroweida_Airport;

CREATE TABLE Airline_Companies (
  Airline_ID INT PRIMARY KEY AUTO_INCREMENT, 
  Airline_name VARCHAR(100) NOT NULL,
  head_quarters VARCHAR(255),
  fleet_size INT CHECK (fleet_size >= 0),
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

CREATE TABLE Planes (
  plane_id INT PRIMARY KEY AUTO_INCREMENT, 
  plane_name VARCHAR(50) NOT NULL,
  Airline_ID INT,
  passenger_capacity INT CHECK (passenger_capacity > 0),
  fuel_capacity INT CHECK (fuel_capacity > 0),
  next_trip_date DATE, 
  trip_destination VARCHAR(100),
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  FOREIGN KEY (Airline_ID) REFERENCES Airline_Companies(Airline_ID) ON DELETE SET NULL
);

CREATE TABLE Runways (
  runway_id INT PRIMARY KEY AUTO_INCREMENT,
  plane_id INT UNIQUE,
  status ENUM('open', 'close') NOT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  FOREIGN KEY (plane_id) REFERENCES Planes(plane_id) ON DELETE SET NULL
);

CREATE TABLE Flights (
  flight_ID INT PRIMARY KEY AUTO_INCREMENT,
  from_location VARCHAR(100) NOT NULL,
  destination_location VARCHAR(100) NOT NULL,
  takeoff_time DATETIME NOT NULL,
  arrival_time DATETIME NOT NULL,
  plane_id INT,
  runway_id INT,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  FOREIGN KEY (plane_id) REFERENCES Planes(plane_id) ON DELETE CASCADE,
  FOREIGN KEY (runway_id) REFERENCES Runways(runway_id) ON DELETE SET NULL
);

CREATE TABLE Users (
    user_id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(100) NOT NULL,
    gender ENUM('Male', 'Female', 'Other') NOT NULL,
    age INT CHECK (age >= 18),
    address VARCHAR(255),
    role ENUM('Passenger', 'Airport Employee', 'Flight Attendant', 'Pilot') NOT NULL,
    salary DECIMAL(10,2) DEFAULT NULL,
    plane_id INT,
    flight_id INT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (plane_id) REFERENCES Planes(plane_id) ON DELETE SET NULL,
    FOREIGN KEY (flight_id) REFERENCES Flights(flight_id) ON DELETE SET NULL
);



INSERT INTO Airline_Companies (Airline_name, head_quarters, fleet_size) VALUES
('EgyptAir', 'Cairo, Egypt', 50),
('Emirates', 'Dubai, UAE', 200);

INSERT INTO Planes (plane_name, Airline_ID, passenger_capacity, fuel_capacity, next_trip_date, trip_destination) VALUES
('Boeing 777', 1, 300, 183000, '2025-03-10', 'New York'),
('Airbus A380', 2, 850, 320000, '2025-04-15', 'London');

INSERT INTO Flights (from_location, destination_location, takeoff_time, arrival_time, plane_id) VALUES
('Cairo', 'New York', '2025-03-10 08:00:00', '2025-03-10 16:00:00', 1),
('Dubai', 'London', '2025-04-15 10:00:00', '2025-04-15 18:30:00', 2);
 
INSERT INTO Users (name, gender, age, address, role, plane_id, flight_id) VALUES
('Ahmed Ali', 'Male', 25, 'Cairo, Egypt', 'Passenger', 1, 1),
('Sara Khaled', 'Female', 22, 'Dubai, UAE', 'Passenger', 2, 2);

-- Query #1 
SELECT * 
FROM Flights
WHERE from_location LIKE '%Shroweida%'
AND takeoff_time BETWEEN NOW() AND DATE_ADD(NOW(), INTERVAL 7 DAY);

-- Query #2 
SELECT name, role 
FROM Users
WHERE plane_id = 1244
AND role IN ('Passenger', 'Pilot', 'Flight Attendant');

-- Query #3 
SELECT * 
FROM Runways
WHERE status = 'open';

-- Query #4 
SELECT P.plane_id, P.plane_name, A.Airline_name, P.passenger_capacity 
FROM Planes P
JOIN Airline_Companies A ON P.Airline_ID = A.Airline_ID
WHERE P.trip_destination LIKE '%Tanta%';

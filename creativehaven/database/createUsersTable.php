<?php

$db = Database::getDBConnection();

$sql = "CREATE TABLE IF NOT EXISTS users (user_id int NOT NULL AUTO_INCREMENT,
            first_name VARCHAR(50) NOT NULL,
            last_name VARCHAR(50) NOT NULL,
            email VARCHAR(50) NOT NULL,
            home_address VARCHAR(255),
            home_phone VARCHAR(10),
            cell_phone VARCHAR(10) NOT NULL,
            PRIMARY KEY (user_id)
        );";

// $sql .= "INSERT into users (first_name, last_name, email, home_address, home_phone, cell_phone)
// VALUES ('Mary', 'Ann', 'maryann@gmail.com', '123 Elm Street, San Jose, CA, 95192', '1234567890', '1234567890'),
// ('Shobha', 'Parekh', 'sparekh@gmail.com', '123 Oak Street, San Jose, CA, 95192', '1234567890', '1234567890'),
// ('Julie', 'Lin', 'juliel@gmail.com', '123 Pine Street, San Jose, CA, 95192', '1234567890', '1234567890'),
// ('Jack', 'Smith', 'jsmith@gmail.com', '123 Maple Ave, San Jose, CA, 95192', '1234567890', '1234567890'),
// ('Amit', 'Patel', 'amitpatel@gmail.com', '123 Elm Street, San Jose, CA, 95192', '1234567890', '1234567890'),
// ('Nadia', 'Lopez', 'nadialopez@gmail.com', '456 Oak Avenue, Los Angeles, CA, 90001', '9876543210', '9876543210'),
// ('Ahmed', 'Choi', 'ahmedchoi@gmail.com', '789 Maple Lane, New York, NY, 10001', '5551234567', '5551234567'),
// ('Laila', 'Garcia', 'lailagarcia@gmail.com', '321 Birch Street, Chicago, IL, 60601', '7778889999', '7778889999'),
// ('Hassan', 'Wang', 'hassanwang@gmail.com', '654 Pine Road, Houston, TX, 77001', '3339997777', '3339997777'),
// ('Priya', 'Martinez', 'priyamartinez@gmail.com', '987 Cedar Drive, Miami, FL, 33101', '1112223333', '1112223333'),
// ('Sohail', 'Kim', 'sohailkim@gmail.com', '147 Walnut Lane, San Francisco, CA, 94101', '2225558888', '2225558888'),
// ('Amina', 'Johnson', 'aminajohnson@gmail.com', '852 Spruce Avenue, Atlanta, GA, 30301', '4447770000', '4447770000'),
// ('Rahul', 'Chen', 'rahulchen@gmail.com', '369 Redwood Road, Dallas, TX, 75201', '9990001111', '9990001111'),
// ('Fatima', 'Nguyen', 'fatimanguyen@gmail.com', '741 Fir Street, Seattle, WA, 98101', '6664442222', '6664442222'),
// ('Javier', 'Smith', 'javiersmith@gmail.com', '258 Pinecrest Drive, Boston, MA, 02101', '3332221111', '3332221111'),
// ('Sara', 'Thompson', 'sarathompson@gmail.com', '123 Cedar Avenue, Denver, CO, 80201', '5556667777', '5556667777'),
// ('Omar', 'Martin', 'omarmartin@gmail.com', '963 Elm Street, Phoenix, AZ, 85001', '8881114444', '8881114444'),
// ('Amara', 'Harris', 'amaraharris@gmail.com', '369 Birch Road, Philadelphia, PA, 19101', '2228884444', '2228884444'),
// ('Khalid', 'Taylor', 'khalidtaylor@gmail.com', '789 Oak Lane, San Diego, CA, 92101', '7776665555', '7776665555'),
// ('Yasmin', 'Lee', 'yasminlee@gmail.com', '654 Maple Avenue, Detroit, MI, 48201', '3334447777', '3334447777');";


if ($db->multi_query($sql)) {

    do {
        
        if ($result = $db -> store_result()) {
            while ($row = $result -> fetch_row()) {
              printf("%s\n", $row[0]);
            }
           $result -> free_result();
          }
          // if there are more result-sets, then print a divider
          if ($db -> more_results()) {
            printf("-------------\n");
          }
           //Prepare next result set
        } while ($db -> next_result()); 
}

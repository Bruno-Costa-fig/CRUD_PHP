<?php

// Connect to the database
$servername = "localhost"; // The server name or IP address
$username = "root"; // The username to connect to the database
$password = ""; // The password to connect to the database
$dbname = "product_store"; // The name of the database

$conn = new mysqli($servername, $username, $password, $dbname); // Create a new MySQLi object to establish a database connection

// Check connection
if ($conn->connect_error) { // Check if the connection to the database was successful
  die("Connection failed: " . $conn->connect_error); // If the connection failed, display an error message and stop the script execution
}

// Create a new product
function createProduct($name, $price, $description) {
  global $conn; // Access the global $conn variable inside the function
  
  $sql = "INSERT INTO products (name, price, description) VALUES ('$name', $price, '$description')"; // SQL query to insert a new product into the "products" table
  
  if ($conn->query($sql) === TRUE) { // Execute the SQL query and check if it was successful
    echo "Product created successfully"; // If the query was successful, display a success message
  } else {
    echo "Error creating product: " . $conn->error; // If the query failed, display an error message with the specific error
  }
}

// Read all products
function readProducts() {
  global $conn; // Access the global $conn variable inside the function
  
  $sql = "SELECT * FROM products"; // SQL query to select all products from the "products" table
  $result = $conn->query($sql); // Execute the SQL query and store the result
  
  if ($result->num_rows > 0) { // Check if there are any rows returned from the query
    while($row = $result->fetch_assoc()) { // Loop through each row in the result set
      echo "ID: " . $row["id"]. " - Name: " . $row["name"]. " - Price: " . $row["price"]. " - Description: " . $row["description"]. "<br>"; // Display the product information
    }
  } else {
    echo "No products found"; // If no products were found, display a message
  }
}

// Update a product
function updateProduct($id, $name, $price, $description) {
  global $conn; // Access the global $conn variable inside the function
  
  $sql = "UPDATE products SET name='$name', price=$price, description='$description' WHERE id=$id"; // SQL query to update a product in the "products" table
  
  if ($conn->query($sql) === TRUE) { // Execute the SQL query and check if it was successful
    echo "Product updated successfully"; // If the query was successful, display a success message
  } else {
    echo "Error updating product: " . $conn->error; // If the query failed, display an error message with the specific error
  }
}

// Delete a product
function deleteProduct($id) {
  global $conn; // Access the global $conn variable inside the function
  
  $sql = "DELETE FROM products WHERE id=$id"; // SQL query to delete a product from the "products" table
  
  if ($conn->query($sql) === TRUE) { // Execute the SQL query and check if it was successful
    echo "Product deleted successfully"; // If the query was successful, display a success message
  } else {
    echo "Error deleting product: " . $conn->error; // If the query failed, display an error message with the specific error
  }
}

// Close the database connection
$conn->close(); // Close the database connection

?>

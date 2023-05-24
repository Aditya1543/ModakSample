<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $employeeId = $_POST["employeeId"];
  $firstName = $_POST["firstName"];
  $lastName = $_POST["lastName"];
  $email = $_POST["email"];
  $phoneNumber = $_POST["phoneNumber"];
  $hireDate = $_POST["hireDate"];
  $jobId = $_POST["jobId"];
  $salary = $_POST["salary"];
  $technology = $_POST["technology"];
  $managerId = $_POST["managerId"];
  $departmentId = $_POST["departmentId"];
  
  $newEmployee = array($employeeId, $firstName, $lastName, $email, $phoneNumber, $hireDate, $jobId, $salary, $technology, $managerId, $departmentId);
  
  $file = fopen("employee.csv", "a");
  
  fputcsv($file, $newEmployee);
  
  fclose($file);
  
  echo "<script>alert('Employee successfully added!'); window.location.href = 'home.html';</script>";
  exit();
}
?>

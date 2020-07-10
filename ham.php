<?php
    function lay_customers(){
        // Create a new PDO instanace
        $pdo = new PDO('mysql:host=localhost;dbname=classicmodels', 'root', '');
        $stmt = $pdo->prepare('SELECT customerNumber, customerName, phone FROM customers;');
        //Thiết lập kiểu dữ liệu trả về
        $stmt->setFetchMode(PDO::FETCH_ASSOC); // tra ve mang
        $stmt->execute(); // chay nhung van chua tra ve du lieu
        $customers = $stmt->fetchAll(); // tra ve du lieu mang
        return $customers;
    }

    function xoa_customer($customer_number){
        // Create a new PDO instanace
        $pdo = new PDO('mysql:host=localhost;dbname=classicmodels', 'root', '');
        $pdo->prepare('DELETE FROM customers WHERE customerNumber = ?;')->execute([$customer_number]);
    }

    function them_customer($customer){
        $pdo = new PDO('mysql:host=localhost;dbname=classicmodels', 'root', '');
        $pdo->prepare('INSERT INTO customers (customerName, phone) VALUES (?,?)')->execute([$customer['customerName'], $customer['phone']]);
    }

    function lay_customer($customerNumber){
        // Create a new PDO instanace
        $pdo = new PDO('mysql:host=localhost;dbname=classicmodels', 'root', '');
        $stmt = $pdo->prepare('SELECT customerNumber, customerName, phone FROM customers WHERE customerNumber = ?;');
        //Thiết lập kiểu dữ liệu trả về
        $stmt->setFetchMode(PDO::FETCH_ASSOC); // tra ve mang
        $stmt->execute([$customerNumber]); // chay nhung van chua tra ve du lieu
        $customers = $stmt->fetchAll(); // tra ve du lieu mang
        return $customers[0];
    } 
    function capnhat_customer($customer){
        $pdo = new PDO('mysql:host=localhost;dbname=classicmodels', 'root', '');
        $pdo->prepare('UPDATE customers SET customerName = ?, phone = ? WHERE customerNumber = ?;')->execute([$customer['customerName'], $customer['phone'], $customer['customerNumber']]);
    }
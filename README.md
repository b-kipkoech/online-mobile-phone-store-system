# ONLINE MOBILE PHONE STORE

## Table of content

- [](#)
  - [Table of content](#table-of-content)
  - [Introduction](#introduction)
    - [Objective](#objective)
  - [SRS](#srs)
  - [Users](#users)
  - [Functional requirements](#functional-requirements)
    - [Login page](#login-page)
    - [homepage /dashboard](#homepage-dashboard)
    - [phone pages](#phone-pages)
    - [payment page](#payment-page)
    - [log-out/check-out](#log-outcheck-out)
  - [Software Designs Specs](#software-designs-specs)
    - [User interface design](#user-interface-design)
    - [Database design](#database-design)

### Introduction

An online mobile phone store website to eliminate the need for customers to physically acces th estore hence reduce spred of covid-19 and customers order at the confort of their devices.

### Objective

1. To design and develop a log-in module that will record that the customer has logged into the website.
2. To design and develop a log-out module that will record that the customer has logged out of the website.
3. To design and develop an admin module for key website management operationse.g. to allow customer to select product ,add to cart ,module in which to purchase the product ,place where product to be delivered.
4. To develop a database for storing and managing stores customers inventory and purchases.
5. To buid a general interfacethat the customer and store can use when they use the website.

### SRS

### Users

1. customer
2. manager

### Functional requirements

#### Login page

1.Provides the user with text fields whwere they can enter the username and password .
2.Provides a button to 'log-in'or 'cancel' the login process.
3.If the usrname and the password is correct ,the user is directed to the dashboard/homepage of the system .
4.If the username or the password is incorrect the user is asked to enter the correct credentials.

#### homepage /dashboard

1.Gives short description of the online shop e.g. name ,aims and goals
2.displays a vaiety of phone brands
3.Gives user a chance to select the type of brand he/she wants

#### phone pages

1.display variety of phone images prices and names
2.Select specific phones displayed

#### payment page

1.Dispalys selected phones/accessories
2.Shows user number of device selected in their cart
3.Show total ,subtotal amount of price of the devices plu tax included

#### log-out/check-out

1.Provides user with a checkout button

### Software Designs Specs

#### User interface design

[login page](https://www.figma.com/proto/X3PFeBdQAw9iJqtjPqdsIZ/Untitled?node-id=1%3A3&scaling=min-zoom&page-id=0%3A1)

[homepage](https://www.figma.com/file/8gCsRP5OppFHf30Mlv9dVl/Untitled?node-id=1%3A2)

#### Database design

##### payment table

| column   | data type |
| -------- | --------- |
| product  | char      |
| quantity | integer   |
| subtotal | integer   |

##### cart

| column   | data type |
| -------- | --------- |
| product  | char      |
| quantity | integer   |
| subtotal | integer   |

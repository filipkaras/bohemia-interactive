# **PHP Developer Test**

## 👀  Assignment

Development of a User Management System with Laravel and Vue.js Integration

## 🎯  Objective

To create a robust web application that offers comprehensive user management capabilities, enabling users to efficiently register, log in, and oversee both company and user entities. Additionally, a user-friendly overview screen, implemented through Vue.js, will be provided for enhanced user experience.

## ✅  Key Deliverables:

A fully functional Laravel application with secure user management features.
User registration and login functionalities.
The ability to manage company and user entities.
An elegant Vue.js-powered overview screen for user interaction.

## 📝  Description:

### **1. User Management Application:**

Develop a Laravel-based web application that serves as the core platform for user management. Ensure the following features are implemented:

User Registration: Users must have the capability to create an account. Implement robust validation and data storage mechanisms for user registrations.

User Login: Enable secure user authentication with proper session management. Implement features to protect against session fixation and enhance security.

### **2. Entity Management:**

Create functionalities for users to manage both company and user entities. These functions should include:

Company Management: Users can create, view, edit, update, and delete company entities. Implement validations to maintain data integrity.

User Management: Users should have the ability to oversee user entities, including their creation, viewing, editing, updating, and deletion. Similar to company management, ensure proper data validation.

### **3. Vue.js Overview Screen:**

To enhance the user experience, create a visually appealing overview screen using Vue.js. This screen should provide a clear and user-friendly interface for managing companies and users. Key aspects include:

Display of Companies and Users: Employ Vue.js to render a comprehensive list of companies and users, ensuring an efficient and responsive user interface.

Interaction Features: Implement features for users to perform actions such as creating, editing, and deleting companies and users directly from the Vue.js-powered overview screen.

Security and Best Practices:

Utilize best practices for authentication and authorization to ensure the security of user data.
Implement validation and data integrity checks to safeguard against data inconsistencies.
Employ responsive design principles to ensure the application is accessible across various devices and screen sizes.

---

### **Tools:**

**🔨**  Laravel

**🔨**  vue.js

---

## 💡  Technical solution overview and developer comments:

For the implementation of this project, PHP version 7.4 was selected as the programming language. MariaDB version 10.6.4 serves as the chosen database management system. The application is built on Laravel framework version 8.64.0, with the frontend powered by Vue.js version 2.6.12. The user interface design is based on Bootstrap version 4.6.0.

The decision to opt for the latest Laravel framework version was driven by a conscious effort to mitigate known security vulnerabilities associated with Laravel 5.8, which depended on libraries with identified weaknesses.

Upon initiating the application and loading the landing page, users are seamlessly redirected to the login interface. New users have the option to register for an account. Upon successful registration or login, users gain access to the core system functionalities, allowing them to manage "company" and "user" entities. Importantly, the same "user" entity used for login authentication is leveraged for broader user management purposes. Stringent measures have been implemented to ensure that a user cannot inadvertently delete the account they are currently logged into. This safeguard has been enforced both on the frontend (by concealing the delete option) and on the backend.

### **Authentication and Validation**

The Login and Register controllers incorporate standard validation processes. Validation rules are defined directly within the "store" method. Conversely, the User and Company controllers adhere to assignment requirements, using the Request class to handle validation. Notably, the login functionality has been fortified against "session fixation" type attacks. Password hashing during the registration process has been centralized within a mutator, enhancing code readability and maintainability.

### **Entity Management**

The controllers for managing Company and User entities adhere to Laravel's conventional methods, encompassing index, show, create, store, edit, update, and destroy operations. For enhanced performance, data has been paginated in groups of 10, leveraging Laravel's native pagination features. Data retrieval from the database is seamlessly facilitated through Laravel ORM Eloquent. Moreover, measures have been taken to mitigate the N+1 query problem, enhancing application efficiency.

### **Unit Testing and Data Seeding**

To support unit testing, initial data seeding is orchestrated through Factories for both Company and User entities. Data population is achieved using the Faker class. The seeder is designed to populate the database with 16 companies and allocate 8 users to each company. Testing operations are conducted within an isolated database environment, as defined in the phpunit.xml configuration. Functional tests encompass scenarios that verify redirection for authenticated and non-authenticated users, along with subsequent login attempts and access validation for the list of companies. Unit tests, on the other hand, verify the presence and association of companies and users in the database. Specifically, they validate that the user is correctly assigned to the company with the specified name. The use of transactions during testing ensures that data is automatically cleaned up upon test completion, and all tests consistently yield successful results.

### **Routing and Middleware**

Routing within the application adheres to standard HTTP methods: GET for data retrieval, POST for entity creation, PATCH for updates, and DELETE for deletion. To maintain secure and appropriate routing for authenticated and non-authenticated users, predefined middleware, specifically 'auth' and 'guest,' have been meticulously incorporated.

### **Templating and Styling**

The application benefits from the usage of the standard Laravel Blade templating engine. The chosen approach for templating is based on the x-layout/slot methodology. Styling is predominantly achieved through the Bootstrap framework and its predefined classes and functions. The sole exception to this is the login screen, which incorporates a custom styling approach via custom.scss, subsequently compiled into app.css.

### **Vue.js Integration**

For the Vue.js demonstration, a home page has been implemented, which communicates with an API endpoint to retrieve and display a list of companies along with their respective employee counts.

This documentation provides a comprehensive overview of the technical aspects, methodologies, and best practices employed in the development of this application.

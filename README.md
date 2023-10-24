# Learn-OOPs

Welcome to the Learn-OOPs repository! This repository is designed to help you learn and understand Object-Oriented Programming (OOP) concepts in various programming languages. Whether you're new to OOP or looking to deepen your knowledge, you'll find a wealth of resources here.

## Table of Contents

- [Introduction](#introduction)
- [Getting Started](#getting-started)
- [Topics Covered](#topics-covered)
  - [Data Encapsulation](#data-encapsulation)
  - [Data Abstraction](#data-abstraction)
  - [Method Overloading & Overriding](#method-overloading-&-overriding)
- [Contributing](#contributing)
- [License](#license)

## Introduction

Object-Oriented Programming is a fundamental programming paradigm that allows you to model real-world entities as objects and define their behavior through classes and methods. OOP is widely used in software development and provides a structured approach to building complex applications.

The goal of this repository is to provide a comprehensive learning resource for OOP. It includes explanations, code examples, and exercises in various programming languages, making it accessible to learners with different language preferences.

## Getting Started

To get started with Learn-OOPs, follow these steps:

1. **Clone the Repository**: Clone this repository to your local machine using the following command:

   ```bash
   git clone https://github.com/Talha7447/Learn-OOPs.git


 ## Topics Covered
   ### Data Encapsulation
   #### Definition
   Data Encapsulation is a fundamental concept in Object-Oriented Programming (OOP) that involves bundling the data (attributes or properties) and methods (functions) that operate on that data into a single unit, called a class. The key principles of encapsulation are information hiding and data protection. In PHP, and specifically in Laravel, data encapsulation is essential for various reasons.
   #### Why do we use it?
- **Security**:
  Encapsulation allows you to restrict access to certain data and methods, providing a level of security. You can make data private or protected to prevent unauthorized external access.

- **Modularity**:
  Encapsulation makes it easier to manage and maintain your code. You can change the internal workings of a class without affecting the external code that uses it.

- **Abstraction**:
  Encapsulation abstracts the complexity of a class's implementation, exposing only what is necessary for the user to interact with. This makes your code more readable and less error-prone.

- **Code Organization**:
  Encapsulation helps organize your code by grouping related data and behavior together within a class.
  
#### Where do we use it?
You can use data encapsulation in PHP OOP in any project that employs object-oriented design principles. Common places to use encapsulation include:
Creating classes for modeling objects in your application (e.g., User, Product, Order, etc.).
Developing libraries or packages where classes should provide an intuitive and safe interface to the user.
Ensuring proper access control for database connections, user authentication, or any sensitive information.

#### Real-World Examples:
Bank Account: A BankAccount class could encapsulate balance, account number, and methods like deposit and withdraw. The balance would be private, and transactions controlled through methods.
Employee Records: An Employee class could encapsulate employee details like name, address, and salary while providing methods to update and retrieve this information.
#### Use in Laravel:
In Laravel, encapsulation is applied in various ways, primarily within the framework's core components:
Eloquent Models: Eloquent models encapsulate database tables, allowing you to interact with database records as objects. For example, you can define an Article model that represents an "articles" table and encapsulates data and methods for interacting with articles.
- **Service Providers**: Laravel's service providers encapsulate the registration of services and binding of components. They help to organize and abstract the complex setup of services, making it more maintainable and understandable.
- **Middleware:** Middleware in Laravel encapsulates HTTP request handling logic, allowing you to filter and modify requests and responses. Middleware classes encapsulate different aspects of request processing, promoting reusability and separation of concerns.
- **Authentication**: Laravel's authentication system encapsulates user authentication, registration, and password reset functionality, making it easy to include secure user authentication in your application.
In Laravel, and in PHP OOP in general, data encapsulation is a crucial principle for maintaining clean, secure, and modular code. It helps make your code more organized, secure, and maintainable by hiding implementation details and exposing a well-defined interface.
#### Code Example
```php
class BankAccount {
    private $accountBalance;

    public function __construct($initialBalance) {
        $this->accountBalance = $initialBalance;
    }

    public function deposit($amount) {
        if ($amount > 0) {
            $this->accountBalance += $amount;
        }
    }

    public function withdraw($amount) {
        if ($amount > 0 && $amount <= $this->accountBalance) {
            $this->accountBalance -= $amount;
        }
    }

    public function getBalance() {
        return $this->accountBalance;
    }
}

// Using Encapsulation
$account = new BankAccount(1000);
$account->deposit(500);
$account->withdraw(200);
$balance = $account->getBalance();

echo "Account Balance: $" . $balance;

```
In this encapsulation example, the BankAccount class encapsulates the account balance as a private property, and methods like deposit, withdraw, and getBalance provide controlled access to the balance. This ensures that the account balance can't be directly manipulated from outside the class, promoting data security.

### Data Abstraction
#### Code Example
```php
interface BankAccountInterface {
    public function deposit($amount);
    public function withdraw($amount);
    public function getBalance();
}

class AbstractBankAccount implements BankAccountInterface {
    private $accountBalance;

    public function __construct($initialBalance) {
        $this->accountBalance = $initialBalance;
    }

    public function deposit($amount) {
        if ($amount > 0) {
            $this->accountBalance += $amount;
        }
    }

    public function withdraw($amount) {
        if ($amount > 0 && $amount <= $this->accountBalance) {
            $this->accountBalance -= $amount;
        }
    }

    public function getBalance() {
        return $this->accountBalance;
    }
}

// Using Abstraction
$account = new AbstractBankAccount(1000);
$account->deposit(500);
$account->withdraw(200);
$balance = $account->getBalance();

echo "Account Balance: $" . $balance;

```
In this abstraction example, we use an interface BankAccountInterface to define the methods that a bank account should have. The AbstractBankAccount class implements this interface. The interface and the abstract class create an abstraction layer, hiding the internal details of the bank account implementation. This simplifies the interaction with the bank account, providing a clear and abstracted interface.

### Method Overloading
#### Definition
Method overloading is a feature in some programming languages that allows a class to have multiple methods with the same name but different parameters (usually a different number or types of parameters). The method that gets called is determined by the arguments provided when the method is invoked.
#### Use in Laravel/PHP
In Laravel, PHP doesn't support method overloading in the same way as languages like Java. You cannot overload PHP functions. Function signatures are based only on their names and do not include argument lists, so you cannot have two functions with the same name. Class method overloading is different in PHP than in many other languages.
#### Real World Analogy
Think of a TV remote control. It has a power button. If you press it once, the TV turns on. If you press it twice, it turns off. Same button, different actions depending on how it's used.
### Method Overriding
#### Definition
Method overriding is a concept used in inheritance. In object-oriented languages, a subclass can provide a specific implementation of a method that is already defined in its parent class. The overridden method in the subclass should have the same name, return type, and parameters as the method in the parent class.
#### Use In Laravel
In Laravel, you can override methods when extending a parent class, often when using Eloquent models. For example, you might have a base User class with a getFullName method, and you want to override it in a Customer class:
```php
class User {
    public function getFullName() {
        return $this->first_name . ' ' . $this->last_name;
    }
}

class Customer extends User {
    public function getFullName() {
        return $this->first_name . ' ' . $this->last_name . ' (Customer)';
    }
}

```
 #### Real World Analogy
 Imagine you have a "vehicle" class with a "startEngine" method. You create a subclass "Car" that inherits from the "vehicle" class, and in the "Car" class, you override the "startEngine" method to perform actions specific to starting a car's engine.
 ### Summary
 In summary, method overloading allows multiple methods with the same name but different parameters, while method overriding occurs when a subclass provides a specific implementation of a method that is already defined in its parent class. These concepts are used to handle polymorphism and dynamic dispatch in object-oriented programming.

  ## Contributing
We welcome contributions from the community! If you have knowledge to share or want to improve existing examples, please consider contributing. Here's how:

Fork the Repository: Click the "Fork" button on the top right to create your copy of the repository.

Make Changes: Create a new branch in your fork, make your changes, and add clear and concise explanations to code examples.

Submit a Pull Request: Once you're done, submit a pull request to have your changes reviewed and merged.

Please ensure that your code is well-documented and follows the conventions of the respective programming language.

## License
This repository is open-source and you are free to use, modify, and distribute the code and resources for educational and non-commercial purposes.

We're excited to be part of your learning journey. If you have questions or suggestions, feel free to open an issue or contact us directly.

Happy coding and enjoy your exploration of OOP!

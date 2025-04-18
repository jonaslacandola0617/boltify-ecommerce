<h1 align="center">Boltify</h1>

Boltify is an e-commerce platform built with Laravel, designed for hardware stores to sell products online efficiently. It provides features for product management, user authentication, order processing, and more.

## Features

-   **Product Management**: Add, edit, and remove hardware products.
-   **User Authentication**: Secure login and registration for customers.
-   **Shopping Cart & Checkout**: Seamless shopping experience with cart functionality and secure checkout.
-   **Order Management**: Track and manage customer orders.
-   **Payment Integration**: Supports various payment methods (Stripe).
-   **Admin Dashboard**: Manage products, orders, and users with ease.
-   **Responsive Design**: Fully optimized for desktop and mobile devices.

## Technologies Used

-   **Backend**: Laravel (PHP framework)
-   **Frontend**: Blade templates, Tailwind CSS, livewire
-   **Database**: MySQL
-   **Payment Gateway**: Stripe
-   **Authentication**: Laravel Breeze

## Installation

1. **Clone the repository:**
    ```sh
    git clone https://github.com/yourusername/boltify.git
    cd boltify
    ```
2. **Install dependencies:**
    ```sh
    composer install
    npm install
    ```
3. **Configure environment:**
    - Copy `.env.example` to `.env`
    - Set up database credentials and other configurations
    ```sh
    cp .env.example .env
    php artisan key:generate
    ```
4. **Run database migrations:**
    ```sh
    php artisan migrate --seed
    ```
5. **Serve the application:**
    ```sh
    php artisan serve
    ```

## Usage

-   Visit `http://localhost:8000` in your browser.
-   Register/Login as a customer to browse and purchase products.
-   Access the admin panel to manage products and orders.

## Contributing

Contributions are welcome! Feel free to fork this repository and submit pull requests.

## License

This project is licensed under the MIT License.

# Screenshots

### Login Page

![Login Page](screenshots/login.png)

### Register Page

![Register Page](screenshots/register.png)

### Product Page

![Product Page](screenshots/feed.png)

### Cart Page

![Cart Page](screenshots/cart.png)

### Order History Page

![Order History Page](screenshots/history.png)

### Payment Success Page

![Payment Success Page](screenshots/checkout-success.png)

### Admin Dashboard Page

![Admin Dashboard Page](screenshots/admin.png)

### Admin Products Page

![Admin Products Page](screenshots/product-admin.png)

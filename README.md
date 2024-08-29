# Socialite Login

This project demonstrates how to implement social login functionality in a Laravel application using Laravel Socialite. It supports Google and GitHub login providers.

## Requirements

-   Laravel 11.21
-   Laravel/UI with React Auth Package
-   Laravel Socialite
-   PHP 8.2.19 or higher
-   Composer
-   MySQL or any other supported database

## Installation

1. **Clone the Repository**

    ```bash
    git clone https://github.com/sahilkappu/Socialite-Login-s.git
    cd Socialite-Login-s
    ```

2. **Install Dependencies**

    Make sure you have Composer and npm installed. Run the following commands to install the required PHP and JavaScript dependencies:

    ```bash
    composer install
    npm install
    ```

3. **Set Up Environment**

    Copy the `.env.example` file to a new `.env` file and update the environment variables as needed:

    ```bash
    cp .env.example .env
    ```

    Generate an application key:

    ```bash
    php artisan key:generate
    ```

4. **Configure Socialite**

    You need to set up your social login credentials for Google and GitHub in your `.env` file. You can obtain these credentials by creating applications on the respective platforms' developer portals.

    Add the following to your `.env` file:

    ```env
    GOOGLE_CLIENT_ID=your-google-client-id
    GOOGLE_CLIENT_SECRET=your-google-client-secret
    GOOGLE_REDIRECT=https://your-domain.com/auth/google/callback

    GITHUB_CLIENT_ID=your-github-client-id
    GITHUB_CLIENT_SECRET=your-github-client-secret
    GITHUB_REDIRECT=https://your-domain.com/auth/github/callback

    ```

5. **Set Up Socialite**

    Install the Laravel Socialite package using Composer:

    ```bash
    composer require laravel/socialite
    ```

6. **Run Migrations**

    Make sure your database is set up and run the migrations:

    ```bash
    php artisan migrate
    ```

7. **Set Up Routes and Controllers**

    Define routes and create controllers for handling authentication. You can follow the implementation details in the `routes/web.php` and `app/Http/Controllers` directories.

8. **Build and Serve**

    Build your frontend assets and serve the application:

    ```bash
    npm run dev
    php artisan serve
    ```

    Visit `http://localhost:8000` in your browser to see the application.

## Usage

Once your setup is complete, users will be able to log in using their Google or GitHub accounts. The authentication flow will redirect them to the appropriate social provider's login page, and upon successful authentication, they will be redirected back to your application.

## Contributing

If you have any improvements or fixes, feel free to submit a pull request. Please make sure to follow the coding standards and test your changes before submitting.

## License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for details.

---

Feel free to customize this README further based on your project's specifics and any additional instructions you want to include.

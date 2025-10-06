# Laravel Dusk Test Application

A demo Laravel 12 application showcasing browser testing with **Laravel Dusk** and **Laravel Herd**. This repo provides a working example for testing Dusk compatibility with Herd setups.

<p align="center">
  <img src="https://img.shields.io/badge/Laravel-12-FF2D20?style=for-the-badge&logo=laravel" alt="Laravel 12">
  <img src="https://img.shields.io/badge/Dusk-8.3-4E56A6?style=for-the-badge" alt="Laravel Dusk">
  <img src="https://img.shields.io/badge/Tailwind-4.0-38B2AC?style=for-the-badge&logo=tailwind-css" alt="Tailwind CSS">
</p>

## 🚀 About This Project

This is a minimal Laravel application built specifically to demonstrate and test Laravel Dusk browser testing functionality with Laravel Herd. It includes:

- ✅ **5 Browser Tests** covering navigation and form submission
- 🎨 **Tailwind CSS 4** for modern, beautiful UI
- 📝 **Contact Form** with validation
- 🧪 **Full Dusk Setup** with ChromeDriver configured

Perfect for support testing, learning Dusk, or as a starter template for browser testing.

## 📋 Prerequisites

- **[Laravel Herd](https://herd.laravel.com)** installed
- **PHP 8.2+** (included with Herd)
- **Composer** (included with Herd)
- **Node.js 18+** and npm
- **Google Chrome** browser

## 🛠️ Installation

### 1. Clone the Repository

```bash
git clone <your-repo-url> dusk-tests
cd dusk-tests
```

### 2. Install Dependencies

```bash
composer install
npm install
```

### 3. Configure Environment

```bash
cp .env.example .env
php artisan key:generate
```

The `.env` file is already configured with:
```ini
APP_URL=http://dusk-tests.test
DB_CONNECTION=sqlite
```

### 4. Create Database

```bash
touch database/database.sqlite
php artisan migrate
```

### 5. Build Frontend Assets

```bash
npm run build
```

### 6. Configure Laravel Herd

Open **Laravel Herd** and:
1. Click "Add Path" or "Park Directory"
2. Select the parent directory containing your `dusk-tests` folder
3. The site should now be accessible at `http://dusk-tests.test`

Verify by visiting: **http://dusk-tests.test** in your browser

### 7. Install ChromeDriver

Laravel Dusk requires ChromeDriver to match your Chrome version:

```bash
php artisan dusk:chrome-driver --detect
```

This will automatically download the correct ChromeDriver version for your installed Chrome browser.

## 🧪 Running Dusk Tests

Run all browser tests:

```bash
php artisan dusk
```

Expected output:
```
PASS  Tests\Browser\ExampleTest
✓ can visit home page
✓ can visit about page
✓ can navigate between pages
✓ can view contact form
✓ can submit contact form

Tests:  5 passed (15 assertions)
```

### Run Tests in Headed Mode

To see the browser while tests run (useful for debugging):

```bash
php artisan dusk --without-tty
```

## 📁 Project Structure

```
dusk-tests/
├── routes/web.php              # Application routes
├── resources/views/            # Blade templates
│   ├── welcome.blade.php       # Home page
│   ├── about.blade.php         # About page
│   ├── contact.blade.php       # Contact form
│   └── contact-success.blade.php
├── tests/
│   ├── Browser/
│   │   └── ExampleTest.php     # 5 Dusk browser tests
│   └── DuskTestCase.php        # Dusk test configuration
└── public/build/               # Compiled assets
```

## 🧪 Included Tests

The application includes 5 browser tests in `tests/Browser/ExampleTest.php`:

1. **can visit home page** - Verifies homepage loads with "Laravel" text
2. **can visit about page** - Checks about page content
3. **can navigate between pages** - Tests navigation links work
4. **can view contact form** - Verifies form fields are present
5. **can submit contact form** - Tests form submission and success message

## 🎨 Features

- **Modern UI** with Tailwind CSS 4 and gradient backgrounds
- **Responsive Design** that works on all screen sizes
- **Form Validation** on the contact form
- **Navigation System** across all pages
- **Success Page** with user feedback after form submission

## 🐛 Troubleshooting

### ChromeDriver Version Mismatch

If you see errors about Chrome/ChromeDriver version mismatches:

```bash
php artisan dusk:chrome-driver --detect
```

This downloads the correct ChromeDriver for your Chrome version.

### Site Not Accessible

If `dusk-tests.test` doesn't load:

1. Check Laravel Herd is running (menu bar icon)
2. Verify the project directory is parked in Herd
3. Try restarting Herd
4. Check permissions: `chmod -R 755 storage bootstrap/cache`

### Tests Failing

1. **Ensure assets are built:** `npm run build`
2. **Clear Laravel cache:** `php artisan config:clear`
3. **Check ChromeDriver:** `php artisan dusk:chrome-driver --detect`
4. **Verify site loads:** Open http://dusk-tests.test in browser
5. **Check Herd is serving the site:** `herd list`

### Port 9515 Already in Use

If ChromeDriver port is occupied:

```bash
lsof -ti:9515 | xargs kill -9
```

### Fresh Start

To completely reset the application:

```bash
rm -rf vendor node_modules public/build
composer install
npm install
npm run build
php artisan dusk:chrome-driver --detect
```

## 📚 Learn More

- **[Laravel Dusk Documentation](https://laravel.com/docs/dusk)**
- **[Laravel Herd](https://herd.laravel.com)**
- **[Tailwind CSS](https://tailwindcss.com)**
- **[Laravel Documentation](https://laravel.com/docs)**

## 🤝 Contributing

Found an issue or want to improve this example? PRs are welcome!

## 📝 License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

---

Built with ❤️ for Laravel Herd customer support and testing.

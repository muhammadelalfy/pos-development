# 🏪 Point of Sale (POS) Development System

> A comprehensive, feature-rich Point of Sale application built with Laravel 8, designed for retail businesses with advanced inventory management, sales tracking, and reporting capabilities.

[![Laravel](https://img.shields.io/badge/Laravel-8.x-red.svg)](https://laravel.com)
[![PHP](https://img.shields.io/badge/PHP-7.3+-blue.svg)](https://php.net)
[![Bootstrap](https://img.shields.io/badge/Bootstrap-4.6.0-7952B3.svg)](https://getbootstrap.com)
[![Vue.js](https://img.shields.io/badge/Vue.js-2.6.12-4FC08D.svg)](https://vuejs.org)
[![License](https://img.shields.io/badge/License-MIT-green.svg)](LICENSE)

## 🚀 Features

### **Sales Management**
- **Quick Sales Interface** - Fast product scanning and checkout
- **Receipt Generation** - Professional invoice and receipt printing
- **Payment Processing** - Multiple payment methods support
- **Discount Management** - Flexible discount and promotion system
- **Tax Calculation** - Automatic tax computation and reporting

### **Inventory Control**
- **Real-time Stock Tracking** - Live inventory updates
- **Low Stock Alerts** - Automatic notifications for reordering
- **Product Categories** - Organized product management
- **Barcode Support** - QR code and barcode scanning
- **Bulk Operations** - Mass import/export functionality

### **Business Intelligence**
- **Sales Analytics** - Comprehensive sales reports and insights
- **Profit Margins** - Cost analysis and profitability tracking
- **Customer Insights** - Purchase history and behavior analysis
- **Performance Metrics** - Daily, weekly, and monthly reports
- **Data Export** - CSV, PDF, and Excel export capabilities

### **User Management**
- **Role-based Access** - Secure user permissions system
- **Employee Tracking** - Sales performance monitoring
- **Shift Management** - Work schedule and time tracking
- **Audit Trail** - Complete transaction history logging

### **Advanced Features**
- **Multi-branch Support** - Centralized management for multiple locations
- **Supplier Management** - Vendor relationship and ordering
- **Customer Database** - CRM functionality integration
- **Backup & Recovery** - Automated data protection
- **API Integration** - Third-party service connectivity

## 🛠️ Technology Stack

### **Backend**
- **Laravel 8.x** - Robust PHP framework
- **PHP 7.3+** - High-performance PHP runtime
- **MySQL** - Reliable database system
- **Laravel UI** - Authentication scaffolding

### **Frontend**
- **Bootstrap 4.6** - Responsive CSS framework
- **Vue.js 2.6** - Progressive JavaScript framework
- **jQuery 3.6** - DOM manipulation library
- **Sass** - CSS preprocessor for styling

### **Build Tools**
- **Laravel Mix 6.0** - Asset compilation
- **Webpack** - Module bundler
- **PostCSS** - CSS processing
- **Axios** - HTTP client for API calls

### **Specialized Packages**
- **Salla ZATCA** - Saudi e-invoicing compliance
- **Toastr** - User notification system
- **Carbon** - Date and time manipulation
- **Faker** - Test data generation

## 📁 Project Structure

```
pos-development/
├── app/
│   ├── Http/             # Controllers and middleware
│   ├── Models/           # Eloquent models
│   ├── Providers/        # Service providers
│   └── Console/          # Artisan commands
├── database/              # Migrations and seeders
├── resources/             # Views and assets
│   ├── js/               # Vue.js components
│   ├── sass/             # Stylesheets
│   └── views/            # Blade templates
├── routes/                # Application routes
├── storage/               # File storage
├── tests/                 # Test files
└── config/                # Configuration files
```

## 🚀 Quick Start

### **Prerequisites**
- PHP 7.3 or higher
- Composer
- Node.js 12+ and npm
- MySQL database

### **Installation**

1. **Clone the repository**
   ```bash
   git clone https://github.com/muhammadelalfy/pos-development.git
   cd pos-development
   ```

2. **Install PHP dependencies**
   ```bash
   composer install
   ```

3. **Install Node.js dependencies**
   ```bash
   npm install
   ```

4. **Environment setup**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

5. **Database configuration**
   ```bash
   # Update .env with your database credentials
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=pos_system
   DB_USERNAME=root
   DB_PASSWORD=
   ```

6. **Database setup**
   ```bash
   php artisan migrate
   php artisan db:seed
   ```

7. **Build assets**
   ```bash
   npm run dev
   # or for production
   npm run production
   ```

8. **Start development server**
   ```bash
   php artisan serve
   ```

## 🔧 Configuration

### **Environment Variables**
```env
APP_NAME="POS Development System"
APP_ENV=local
APP_KEY=base64:your-generated-key
APP_DEBUG=true
APP_URL=http://localhost:8000

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=pos_system
DB_USERNAME=root
DB_PASSWORD=

CACHE_DRIVER=file
SESSION_DRIVER=file
QUEUE_CONNECTION=sync
```

### **ZATCA Configuration (Saudi E-invoicing)**
```env
ZATCA_ENVIRONMENT=preprod
ZATCA_CLIENT_ID=your_client_id
ZATCA_CLIENT_SECRET=your_client_secret
ZATCA_BASIC_AUTH=your_basic_auth
```

## 📊 Database Schema

The application includes comprehensive database design for:
- **Users & Authentication** - Employee accounts and permissions
- **Products & Inventory** - Product catalog and stock management
- **Sales & Transactions** - Complete sales lifecycle
- **Customers & Suppliers** - Relationship management
- **Reports & Analytics** - Business intelligence data

## 🧪 Testing

```bash
# Run all tests
php artisan test

# Run specific test suite
php artisan test --filter=SalesTest

# Generate test coverage
php artisan test --coverage
```

## 📈 Performance Features

- **Database Optimization** - Indexed queries and efficient relationships
- **Caching Strategy** - File-based caching for improved performance
- **Asset Optimization** - Minified CSS and JavaScript
- **Lazy Loading** - Efficient data loading for large datasets
- **Query Optimization** - Optimized database queries

## 🔒 Security Features

- **Authentication** - Laravel's built-in authentication system
- **Authorization** - Role-based access control
- **CSRF Protection** - Cross-site request forgery prevention
- **Input Validation** - Comprehensive data validation
- **SQL Injection Prevention** - Parameterized queries
- **XSS Protection** - Output sanitization

## 🌐 API Endpoints

The system provides RESTful APIs for:
- **Product Management** - CRUD operations for inventory
- **Sales Operations** - Transaction processing
- **User Management** - Employee account management
- **Reporting** - Data export and analytics

## 📱 User Interface

- **Responsive Design** - Mobile-friendly interface
- **Intuitive Navigation** - User-friendly dashboard
- **Quick Actions** - Fast access to common functions
- **Real-time Updates** - Live data synchronization
- **Professional Layout** - Clean and organized interface

## 🚀 Deployment

### **Production Setup**
```bash
# Optimize for production
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Build production assets
npm run production

# Set proper permissions
chmod -R 755 storage bootstrap/cache
```

### **Server Requirements**
- PHP 7.3 or higher
- MySQL 5.7 or higher
- Apache/Nginx web server
- SSL certificate (recommended)

## 🤝 Contributing

1. Fork the repository
2. Create a feature branch (`git checkout -b feature/amazing-feature`)
3. Commit your changes (`git commit -m 'Add amazing feature'`)
4. Push to the branch (`git push origin feature/amazing-feature`)
5. Open a Pull Request

## 📝 License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## 👨‍💻 Author

**Muhammad Elalfy**
- GitHub: [@muhammadelalfy](https://github.com/muhammadelalfy)
- Email: dev.muhamadelalfy@gmail.com
- LinkedIn: [dev-muhammad-elalfy](https://linkedin.com/in/dev-muhammad-elalfy)

## 🙏 Acknowledgments

- Built with [Laravel](https://laravel.com) framework
- Styled with [Bootstrap](https://getbootstrap.com)
- Interactive features with [Vue.js](https://vuejs.org)
- Asset compilation with [Laravel Mix](https://laravel-mix.com)

---

⭐ **Star this repository if you find it helpful!**

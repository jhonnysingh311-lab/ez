-- InfinityFree Database Setup Guide
-- ====================================================
-- Follow these steps to set up the database for your project on InfinityFree.
-- Note: Replace the database name with your actual database name if needed.
-- ====================================================
-- 
-- STEP 1: Go to InfinityFree Control Panel (VistaPanel).
-- STEP 2: Scroll down to the "DATABASES" section and click "MySQL Databases".
-- STEP 3: Create a new database (e.g., "sproddeal" or "ezpay").
-- STEP 4: Note down your newly created Database Name, MySQL User, and MySQL Host.
-- STEP 5: Go back to VistaPanel Home, and click "phpMyAdmin".
-- STEP 6: Click on your new database from the left sidebar.
-- STEP 7: Click the "SQL" tab at the top.
-- STEP 8: Copy and paste all the code below into the box and click "Go".
-- ====================================================

-- 1. Create the 'users' table
CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    phone VARCHAR(15) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- 2. Create the 'verification' table
CREATE TABLE IF NOT EXISTS verification (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    full_name VARCHAR(100) NOT NULL,
    problem VARCHAR(100) NOT NULL,
    security_pin VARCHAR(255) NOT NULL,
    experience_level VARCHAR(100) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
);

-- ====================================================
-- CONGRATULATIONS! Your database is now set up.
-- Now go to your local project files:
-- Open 'api/db-config.php'
-- Replace the placeholders with your InfinityFree Database details.
-- ====================================================

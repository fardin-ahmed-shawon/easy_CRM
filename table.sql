-- Table 1: users
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    full_name VARCHAR(255) NOT NULL,
    phone VARCHAR(15) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    role ENUM('developer', 'admin', 'employee') NOT NULL,
    status ENUM('active', 'inactive') NOT NULL,
    password VARCHAR(255) NOT NULL,
    created_at DATE DEFAULT CURRENT_DATE
);

-- Table 2: services
CREATE TABLE services (
    id INT AUTO_INCREMENT PRIMARY KEY,
    service_name VARCHAR(255) NOT NULL,
    service_fee DECIMAL(10, 2) NOT NULL,
    created_at DATE DEFAULT CURRENT_DATE
);

-- Table 3: payment_plan
CREATE TABLE payment_plan (
    id INT AUTO_INCREMENT PRIMARY KEY,
    plan_name VARCHAR(255) NOT NULL,
    created_at DATE DEFAULT CURRENT_DATE
);

-- Table 4: leads
CREATE TABLE leads (
    id INT AUTO_INCREMENT PRIMARY KEY,
    agency_name VARCHAR(255) NOT NULL,
    brand_name VARCHAR(255) NOT NULL,
    client_name VARCHAR(255) NOT NULL,
    phone VARCHAR(15) NOT NULL,
    email VARCHAR(255) NOT NULL,
    title VARCHAR(255) NOT NULL,
    description TEXT,
    lead_created_at DATE DEFAULT CURRENT_DATE,
    status ENUM('active', 'onboard', 'meeting', 'pending', 'rejected') NOT NULL
);

-- Table 5: projects
CREATE TABLE projects (
    id INT AUTO_INCREMENT PRIMARY KEY,
    lead_id INT NOT NULL,
    project_type VARCHAR(255) NOT NULL,
    budget_amount DECIMAL(10, 2) NOT NULL,
    payment_plan_id INT NOT NULL,
    requirements TEXT,
    deadline DATE NOT NULL,
    onboard_date DATE DEFAULT CURRENT_DATE,
    status ENUM('onboard', 'completed', 'cancelled') NOT NULL,
    FOREIGN KEY (lead_id) REFERENCES leads(id),
    FOREIGN KEY (payment_plan_id) REFERENCES payment_plan(id)
);

-- Table 6: payments
CREATE TABLE payments (
    id INT AUTO_INCREMENT PRIMARY KEY,
    project_id INT NOT NULL,
    payment_method VARCHAR(255) NOT NULL,
    currency VARCHAR(10) NOT NULL,
    payment_amount DECIMAL(10, 2) NOT NULL,
    note TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (project_id) REFERENCES projects(id)
);
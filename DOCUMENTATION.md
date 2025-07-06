# QORA - Quezon City University Online Registration & Administration

## Table of Contents
- [Project Overview](#project-overview)
- [Technology Stack](#technology-stack)
- [Project Structure](#project-structure)
- [Installation & Setup](#installation--setup)
- [Features & Modules](#features--modules)
- [User Guides](#user-guides)
- [Development Information](#development-information)
- [Troubleshooting](#troubleshooting)

## Project Overview

QORA (Quezon City University Online Registration & Administration) is a comprehensive web application designed to streamline the enrollment and administrative processes for Quezon City University. The system serves both students and registrar staff, providing a modern interface for student registration, enrollment management, and academic administration.

### Key Objectives
- Simplify the student enrollment process
- Provide efficient tools for registrar operations
- Offer comprehensive information about university admission procedures
- Ensure a responsive, user-friendly experience across devices

## Technology Stack

### Frontend
- **HTML5** - Semantic markup structure
- **CSS3** - Custom styling with CSS variables and responsive design
- **JavaScript (ES6+)** - Interactive functionality and DOM manipulation
- **Bootstrap 5** - CSS framework for responsive layouts
- **FontAwesome** - Icon library for UI elements
- **Google Fonts** - Typography (Poppins, Dancing Script)

### Backend
- **PHP** - Server-side logic and templating
- **Apache** - Web server (via XAMPP)

### Development Tools
- **XAMPP** - Local development environment
- **Git** - Version control

## Project Structure

```
QORA/
├── index.js                 # Main JavaScript functionality
├── style.css               # Global styles and CSS variables
├── README.md               # Basic installation instructions
├── COURSE_CURRICULUM.pdf   # University curriculum document
├── images/                 # Static assets and images
├── php/                    # Main application directory
│   ├── index.php          # Application homepage
│   ├── shared/            # Reusable components
│   │   ├── header.php     # Navigation header
│   │   ├── footer.php     # Site footer
│   │   ├── link.php       # CSS/JS includes
│   │   ├── script.php     # JavaScript includes
│   │   ├── account.php    # Account management
│   │   ├── settings.php   # User settings
│   │   └── logoutModal.php # Logout confirmation
│   ├── student/           # Student module
│   │   ├── enrollment.php # Student enrollment interface
│   │   ├── grade.php      # Grade viewing
│   │   ├── program.php    # Program selection
│   │   ├── year.php       # Academic year selection
│   │   ├── input_review.php # Application review
│   │   └── reference_ID.php # Reference ID generation
│   ├── registrar/         # Administrative module
│   │   ├── index.php      # Registrar dashboard
│   │   ├── enlist.php     # Student enrollment management
│   │   ├── addCourse.php  # Course creation
│   │   ├── updateCourse.php # Course management
│   │   ├── view_profile.php # Student profile viewing
│   │   └── printing.php   # Document printing
│   ├── login/             # Authentication module
│   ├── register/          # Student registration module
│   └── be_a_qcian/        # Information module
│       ├── gap.php        # General Admission Policy
│       ├── sdc.php        # Selection for Degree Program
│       ├── gs.php         # Grading System
│       ├── far.php        # Freshman Admission Requirements
│       ├── qcucat.php     # QCUCAT Procedure
│       ├── agc.php        # Admissions Guidelines: Classifications
│       ├── agq.php        # Admissions Guidelines: Qualifications
│       ├── dpn.php        # Data Privacy Notice
│       └── pc.php         # Program Curriculum
```

## Installation & Setup

### Prerequisites
- [XAMPP](https://www.apachefriends.org/) - Apache, MySQL, PHP development environment
- [Git](https://git-scm.com/downloads) - Version control (if cloning from repository)
- Modern web browser (Chrome, Firefox, Safari, Edge)

### Installation Steps

1. **Download and Install XAMPP**
   ```bash
   # Download from https://www.apachefriends.org/
   # Install following the setup wizard
   ```

2. **Start Apache Server**
   - Open XAMPP Control Panel
   - Click "Start" next to Apache
   - Ensure Apache is running (green status)

3. **Clone/Download the Project**
   ```bash
   # Navigate to XAMPP htdocs directory
   cd /path/to/xampp/htdocs/
   
   # Clone the repository
   git clone https://github.com/xynoan/QORA.git
   
   # Or download and extract ZIP file to htdocs folder
   ```

4. **Access the Application**
   - Open your web browser
   - Navigate to: `http://localhost/QORA/php/index.php`
   - The application should load successfully

### Recommended Setup
- **Screen Resolution**: 1368 x 639 for optimal experience
- **Device**: Desktop/laptop recommended for full functionality

## Features & Modules

### 1. Homepage (`php/index.php`)
- **University Overview**: 30-year anniversary celebration content
- **Quick Navigation**: Access to all major sections
- **Dual Login System**: Separate interfaces for students and registrar
- **Information Links**: Direct access to admission information

### 2. Student Module (`php/student/`)
#### Core Features:
- **Enrollment Management** (`enrollment.php`)
  - Step-by-step enrollment process
  - Program and course selection
  - Status tracking

- **Grade Viewing** (`grade.php`)
  - Academic performance tracking
  - Semester-wise grade display

- **Program Selection** (`program.php`)
  - Available degree programs
  - Program requirements and details

- **Academic Year Selection** (`year.php`)
  - Year level progression
  - Academic calendar integration

- **Application Review** (`input_review.php`)
  - Comprehensive application overview
  - Document verification
  - Submission confirmation

- **Reference ID Generation** (`reference_ID.php`)
  - Unique student identifier creation
  - Application tracking number

### 3. Registrar Module (`php/registrar/`)
#### Administrative Features:
- **Dashboard** (`index.php`)
  - Administrative overview
  - Quick access to common tasks

- **Student Enrollment Management** (`enlist.php`)
  - Approve/reject applications
  - Enrollment status updates
  - Student record management

- **Course Management**
  - **Add Courses** (`addCourse.php`): Create new course offerings
  - **Update Courses** (`updateCourse.php`): Modify existing courses

- **Profile Management** (`view_profile.php`)
  - Comprehensive student information
  - Academic history viewing
  - Contact information management

- **Document Printing** (`printing.php`)
  - Generate official documents
  - Certificate and transcript printing

### 4. Authentication System
- **Student Registration**: New account creation
- **Secure Login**: Email/password authentication
- **Role-Based Access**: Student vs. Registrar permissions
- **Password Recovery**: Forgot password functionality
- **Remember Me**: Session persistence option

### 5. Information Module (`php/be_a_qcian/`)
#### Comprehensive University Information:
- **General Admission Policy** (`gap.php`)
- **Degree Program Selection** (`sdc.php`)
- **Grading System** (`gs.php`)
- **Admission Requirements** (`far.php`)
- **QCUCAT Procedures** (`qcucat.php`)
- **Classification Guidelines** (`agc.php`)
- **Qualification Requirements** (`agq.php`)
- **Data Privacy Notice** (`dpn.php`)
- **Program Curriculum** (`pc.php`)

### 6. Shared Components (`php/shared/`)
- **Responsive Header** (`header.php`): Navigation with hamburger menu
- **Footer** (`footer.php`): Contact information and links
- **Account Management** (`account.php`): User profile settings
- **Settings Panel** (`settings.php`): Application preferences

## User Guides

### For Students

#### 1. Creating an Account
1. Visit the homepage
2. Click "REGISTER" under "NEW APPLICANT"
3. Fill in required personal information
4. Verify email address
5. Complete profile setup

#### 2. Logging In
1. Enter email and password on homepage
2. Click "LOG IN"
3. Select "Login as Student" in the modal
4. Access your student dashboard

#### 3. Enrollment Process
1. Navigate to enrollment section
2. Select academic year and program
3. Choose courses based on curriculum
4. Review application details
5. Submit for registrar approval
6. Track application status

#### 4. Viewing Grades
1. Log into student account
2. Navigate to grade section
3. Select semester/year
4. View detailed grade breakdown

### For Registrar Staff

#### 1. Accessing Registrar Dashboard
1. Log in using registrar credentials
2. Select "Login as Registrar"
3. Access administrative dashboard

#### 2. Managing Student Enrollments
1. Navigate to enrollment management
2. Review pending applications
3. Approve or request modifications
4. Update enrollment status

#### 3. Course Management
1. Access course administration
2. Add new courses with details
3. Update existing course information
4. Manage course availability

#### 4. Student Profile Management
1. Search for student records
2. View comprehensive profiles
3. Update student information
4. Generate official documents

## Development Information

### CSS Architecture
The application uses a modern CSS architecture with:

- **CSS Custom Properties** (CSS Variables):
  ```css
  :root {
    --main-color: #010641;
    --secondary-color: #4351a2;
    --qcian: #F7F7F7;
    --brown: #A08048;
  }
  ```

- **Responsive Design**: Mobile-first approach with breakpoints
- **Component-Based Styling**: Modular CSS for reusable components
- **Smooth Animations**: CSS transitions and transforms

### JavaScript Features
- **ES6+ Syntax**: Modern JavaScript features
- **DOM Manipulation**: Interactive UI components
- **Event Handling**: User interaction management
- **Form Validation**: Client-side validation
- **OTP Input**: Specialized input handling
- **Image Upload**: File handling and preview

### PHP Structure
- **Modular Architecture**: Separated concerns by functionality
- **Template System**: Reusable header/footer components
- **Include/Require**: Efficient code organization
- **Form Processing**: Server-side data handling

### Responsive Design Breakpoints
```css
/* Mobile First */
@media (min-width: 768px) { /* Tablet */ }
@media (min-width: 992px) { /* Desktop */ }
@media (min-width: 1200px) { /* Large Desktop */ }
```

### Browser Compatibility
- **Modern Browsers**: Chrome 70+, Firefox 65+, Safari 12+, Edge 79+
- **Mobile Browsers**: iOS Safari 12+, Chrome Mobile 70+
- **Feature Detection**: Graceful degradation for older browsers

## Troubleshooting

### Common Issues

#### 1. Apache Won't Start
**Problem**: XAMPP Apache service fails to start
**Solutions**:
- Check if port 80 is already in use
- Run XAMPP as administrator
- Disable IIS or other web servers
- Check firewall settings

#### 2. Page Not Found (404)
**Problem**: Cannot access `http://localhost/QORA/php/index.php`
**Solutions**:
- Verify XAMPP Apache is running
- Check project is in correct htdocs directory
- Confirm file paths are correct
- Clear browser cache

#### 3. Styling Issues
**Problem**: CSS not loading properly
**Solutions**:
- Check file paths in `link.php`
- Verify CSS files exist
- Clear browser cache
- Check for CSS syntax errors

#### 4. JavaScript Not Working
**Problem**: Interactive features not functioning
**Solutions**:
- Check browser console for errors
- Verify JavaScript files are loading
- Ensure DOM is fully loaded before script execution
- Check for syntax errors

#### 5. Modal/Popup Issues
**Problem**: Login modal or profile popup not displaying
**Solutions**:
- Verify Bootstrap JavaScript is loaded
- Check for JavaScript conflicts
- Ensure proper modal markup
- Clear browser cache

### Performance Optimization

#### 1. Image Optimization
- Compress images before uploading
- Use appropriate image formats (JPEG for photos, PNG for graphics)
- Implement lazy loading for large galleries

#### 2. CSS Optimization
- Minimize unused CSS rules
- Use CSS minification for production
- Optimize animations for better performance

#### 3. JavaScript Optimization
- Minimize DOM queries
- Use event delegation for dynamic content
- Implement code splitting for large applications

### Security Considerations

#### 1. Input Validation
- Always validate user input server-side
- Sanitize data before database operations
- Use prepared statements for database queries

#### 2. Session Management
- Implement secure session handling
- Use HTTPS in production
- Set appropriate session timeouts

#### 3. File Upload Security
- Validate file types and sizes
- Store uploads outside web root
- Scan files for malicious content

### Development Best Practices

#### 1. Code Organization
- Maintain consistent naming conventions
- Use meaningful variable and function names
- Comment complex logic sections
- Follow PSR standards for PHP

#### 2. Version Control
- Commit frequently with descriptive messages
- Use branching for feature development
- Tag releases appropriately
- Maintain a clean commit history

#### 3. Testing
- Test across different browsers
- Verify responsive design on various devices
- Validate HTML markup
- Test all user interaction flows

---

*This documentation was last updated: [Current Date]*

For additional support or questions, please refer to the university's IT support documentation or contact the development team.
<?php 

$page = basename($_SERVER['PHP_SELF']);

switch ($page) {
    case "index.php":
        $title = 'Home';
        $description = 'Welcome to Logix9';
        $class = 'home-page';
    break;

    // Services
    case "qa-consulting.php":
        $title = 'QA Consulting';
        $description = 'Partnering with you to raise the bar of software quality! We unlock the full potential of softwares through customized QA testing and consulting solutions.';
        $class = 'qa-consulting-page';
    break;
    case "software-development-life-cycle-qa.php":
        $title = 'Software Development life cycle QA';
        $description = 'Streamline software development process with SDLC QA services! Our tailored approach from initial requirements collection, designing, coding, testing to deployment ensures the end product meets customer expectations.        ';
        $class = 'qa-sdlc-page';
    break;
    case "managed-testing-services.php":
        $title = 'Managed Testing Services';
        $description = 'Our Expert Ad-Hoc Testing Solutions Uncover Hidden Bugs and Optimize Your Software faster with flexible plans for the Best User Experience. Let Us Help You with Intuitive and Insightful testing experience on-demand.         ';
        $class = 'managed-testing-services-page';
    break;
    case "dedicated-qa-teams.php":
        $title = 'Dedicated QA Teams';
        $description = 'We take quality assurance seriously- Our QA team will catch potential issues, bugs and errors before they become problems for your users. We work closely with your development team to ensure your software is the best version of it.         ';
        $class = 'dedicated-qa-teams-page';
    break;
    case "testing-in-agile.php":
        $title = 'Software Testing In Agile';
        $description = 'Boost your software quality with our agile testing solutions. Our Scrum-certified team uses user stories, test automation, continuous integration and delivery to speed up testing without sacrificing quality. Achieve your testing goals with precision!        ';
        $class = 'testing-in-agile-page';
    break;
    case "manual-software-testing.php":
        $title = 'Manual Testing (FCTS) Services';
        $description = 'Experience reliable manual testing services that ensure comprehensive test coverage, regression testing, exploratory testing, and adherence to quality standards. Our skilled testers use a variety of techniques and tools to identify defects and ensure a smooth user experience.';
        $class = 'manual-software-testing-page';
    break;
    case "test-automation.php":
        $title = 'Automation Testing Services';
        $description = 'Make your web projects faster and better with our advanced automation technology. Experience the power of efficient software performance through smarter testing, combined AI and ML technology to devise automated QA processes.';
        $class = 'test-automation-page';
    break;
    case "functional-testing.php":
        $title = 'Functional Testing Services';
        $description = 'Maximize Functionality with Logix9s Robust Functional Testing Suite. Our Functional Testing Services provide an essential layer of quality assurance, ensuring that software applications are fully functional, bug-free, and meet the highest standards of quality.';
        $class = 'functional-testing-page';
    break;
    case "performance-testing.php":
        $title = 'Performance Testing Services';
        $description = 'Logix9 offers performance testing services to identify and resolve performance issues in software applications.  Acquire our different testing methods to simulate user traffic and provide detailed reports with optimization recommendations.        ';
        $class = 'performance-testing-page';
    break;
    case "api-testing.php":
        $title = 'API Testing Services/Application Programming Interface Testing';
        $description = 'Enhance Your API Performance with Logix9 Our comprehensive API testing services ensure that your software interfaces are functioning seamlessly and securely. Moreover, our advanced tools and techniques help in identifying bugs in your API system before they affect your end-users.        ';
        $class = 'api-testing-page';
    break;

    // Platform
    case "augmented-virtual-reality.php":
        $title = 'AR/VR Testing';
        $description = 'Logix9 offers top-notch AR/VR testing services with advanced tools and techniques. Our rigorous methodology ensures that your applications deliver an immersive experience to users. We provide comprehensive testing solutions, including functional, performance, usability, and compatibility testing. Our rigorous methodology, timely communication, detailed reporting, and personalized support bring your vision to life.        ';
        $class = 'vr-ar-page';
    break;
    case "blockchain.php":
        $title = 'Blockchain App Testing';
        $description = 'Logix9 provides comprehensive blockchain app testing services that ensure compliance with industry standards by identifying and rectifying issues, enhancing reliability, and providing actionable recommendations for improvement.        ';
        $class = 'blockchain-page';
    break;
    case "cloud.php":
        $title = 'Cloud Testing ';
        $description = 'Logix9 understands that the success of your business depends on the performance, scalability, and reliability of your cloud-based applications. Thats why we offer comprehensive testing solutions designed to identify and address potential issues before they become problems.        ';
        $class = 'cloud-page';
    break;
    case "desktop-application.php":
        $title = 'Desktop Application';
        $description = 'Logix9 offers QA services that specialize in testing desktop applications - software programs designed for personal computers or laptops only rather than on a web browser or mobile device. Whether you need an app for productivity, entertainment, or education, Logix9 s team has got you covered. ';
        $class = 'desktop-application-page';
    break;
    case "game-testing.php":
        $title = 'Game Testing';
        $description = 'Logix9 performs game testing to ensure that the client’ games prototypes are free of bugs, glitches, and other technical issues that could affect the user experience. Their testing process includes functional, compatibility, performance, and security testing, among others, to deliver high-quality games to their clients.        ';
        $class = 'game-testing-page';
    break;
    case "iot-testing-services.php":
        $title = 'Internet of things';
        $description = 'The rise of smart and connected devices, known as the Internet of Things (IoT), has a significant impact on the IT and engineering communities. The technology involves connecting physical objects through sensors or software to exchange data between systems. From common devices like smartphones and TVs to household items like lightbulbs and air conditioners, the impact of IoT is undeniable. However, with the exponential growth of IoT devices, there is a pressing need for high-quality testing services. That’s where Logix9 as an IoT QA service provider steps in! We perform comprehensive Internet of Things (IoT) testing to ensure functionality, security, reliability, and performance of these devices.        ';
        $class = 'iot-page';
    break;
    case "mobile-application.php":
        $title = 'Mobile Application Testing';
        $description = 'Logix9 offers mobile testing services for defect-free and high-performing mobile applications. Our services include functional, usability, performance, security, and compatibility testing. We ensure a seamless user experience across different devices and operating systems.        ';
        $class = 'mobile-apps-page';
    break;
    case "web-application.php":
        $title = ' Website Application Testing';
        $description = 'The rise of smart and connected devices, known as the Internet of Things (IoT), has a significant impact on the IT and engineering communities. The technology involves connecting physical objects through sensors or software to exchange data between systems. From common devices like smartphones and TVs to household items like lightbulbs and air conditioners, the impact of IoT is undeniable. However, with the exponential growth of IoT devices, there is a pressing need for high-quality testing services. That’s where Logix9 as an IoT QA service provider steps in! We perform comprehensive Internet of Things (IoT) testing to ensure functionality, security, reliability, and performance of these devices.';
        $class = 'web-application-page';
    break;

    // Common Pages
    case "testimonials.php":
        $title = 'Logix9 Testimonials';
        $description = 'Explore our client’s appraisals and feedback for our QA services.';
        $class = 'testimonials-page';
    break;
    case "projects.php":
        $title = 'Explore Our Latest Projects';
        $description = 'Revolutionizing the Way You Do Business';
        $class = 'projects-page';
    break;

    // Company Pages
    case "about-logix9.php":
        $title = 'About US';
        $description = "At Logix9, we prioritize our customers' satisfaction and ensure their peace of mind by leveraging our extensive experience, innovative solutions, and well-established processes. We strive to deliver consistent results and exceed expectations, earning the trust and confidence of our valued clients.";
        $class = 'about-logix9-page';
    break;
    case "faqs.php":
        $title = 'Frequently Asked Questions';
        $description = "Deciding whether to outsource quality analysis and software testing can be a daunting task. But at Logix9, we're here to guide you through the process. Our experienced team provides a wide range of services, including functional, regression, performance, security, and automation testing. We understand that each company's needs are unique, so we offer flexible solutions tailored to your specific requirements. Check out our FAQs to learn everything you need to know about outsourcing software QA.";
        $class = 'faqs-page';
    break;
    case "careers.php":
        $title = 'Careers at Logix9';
        $description = "Come aboard our ship to launch or elevate your career to new heights. We offer a promising future with customized guidance and expert support. Let's set sail towards your success!";
        $class = 'careers-page';
    break;
    case "career-single.php":
        $title = 'Career Details';
        $description = '';
        $class = 'career-single-page';
    break;
    case "logix9-locations.php":
        $title = 'Logix9 Locations';
        $description = '';
        $class = 'logix9-locations-page';
    break;
    case "contact-us.php":
        $title = 'Contact Logix9 for Cutting-Edge Software Testing Solutions';
        $description = 'Experience Unmatched Quality and Reliability with Our Testing Services';
        $class = 'contact-us-page';
    break;

    // Approach Pages
    case "our-process.php":
        $title = 'Our Process';
        $description = '';
        $class = 'our-process-page';
    break;
    case "our-lab.php":
        $title = 'Our Lab';
        $description = '';
        $class = 'our-lab-page';
    break;
    case "industry-expertise.php":
        $title = 'Industry Expertise';
        $description = '';
        $class = 'industry-expertise-page';
    break;
    case "offshore-qa.php":
        $title = 'Offshore QA';
        $description = '';
        $class = 'offshore-qa-page';
    break;

    // Content Pages
    case "privacy-policy.php":
        $title = 'Privacy and Cookies Terms';
        $description = "This policy describes how logix9 and its associated companies gather and handle your personal information while ensuring your privacy. It includes an overview of the methods used to collect your personal data, how it's processed, and the measures taken to safeguard it.";
        $class = 'privacy-policy-page';
    break;
    case "refund-policy.php":
        $title = 'Refund Policy';
        $description = '';
        $class = 'refund-policy-page';
    break;
    case "terms-and-conditions.php":
        $title = 'Logix9 Terms And Condition Page';
        $description = '';
        $class = 'terms-and-conditions-page';
    break;

    // Error Pages
    case "404.php":
        $title = 'Page Not Found';
        $description = '';
        $class = '404-page';
    break;

    default:
        echo "Page Not Found";
}

?>
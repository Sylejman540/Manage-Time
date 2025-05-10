<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <link rel="icon" href="images/logo.png">
    <title>TimeWise</title>
</head>
<body>
    <header class="flex justify-around items-center p-2 bg-[#FCF6F6]">
        <!-- Logo Is Positioned Here -->
        <article class="flex">
            <img src="images/logo.png" alt="Logo" class="w-12 h-12">
            <h1 class="text-4xl font-bold mr-20">Time<span class="text-blue-500">Wise</span></h1>
        </article>    

        <!-- Mobile Icon -->
        <img src="images/menu.png" alt="Menu" class="md:hidden block w-8 h-8" id="icon">
        <img src="images/x-symbol.png" alt="Symbol" class="hidden w-8 h-8">

            <!-- This Nav-Bar Is For Desktop -->
        <nav>
            <ul class="hidden md:flex space-x-8 font-bold ">
                <li><a href="#" class="hover:text-blue-500">Home</a></li>
                <li><a href="#manage1" class="hover:text-blue-500">Time Management</a></li>
                <li><a href="#about" class="hover:text-blue-500">About Us</a></li>
                <li><a href="#contact" class="hover:text-blue-500">Contact</a></li>
            </ul>
        </nav>
        
        <button class="bg-blue-500 p-2 px-5 text-white rounded-lg font-bold hover:bg-blue-800 md:ml-0 ml-25"><a href="logout.php">Logout</a></button>
    </header>

    <!-- This Nav-Bar Is For Mobile -->
    <nav>
        <ul class="hidden space-x-8 font-boldmd:ml-0 md:mr-0 ml-3" id="nav">
                <li><a href="#" class="hover:text-blue-500">Home</a></li>
                <li><a href="#manage" class="hover:text-blue-500">Time Management</a></li>
                <li><a href="#about" class="hover:text-blue-500">About Us</a></li>
                <li><a href="#contact" class="hover:text-blue-500">Contact</a></li>
            </ul>
    </nav>

    <!-- Images On The Right Side Of The Banner Section -->
    <main class="md:flex md:justify-between text-center md:text-start mt-15 md:ml-20 md:mr-10">
        <article class="grid">
            <h1 class="text-6xl font-bold">Time<span class="text-blue-500">Wise</span> - <br> Master Your Time, <br> Master Your Life</h1>
            <p class="text-gray-600 mt-4 md:ml-0 md:mr-0 ml-5 mr-5">TimeWise is your trusted partner in unlocking the power of time management.<br> Whether you're balancing work, personal life,<br> or both, our tools and strategies help you take control<br> of your time, eliminate distractions, and stay on track toward your goals.<br> Achieve more every day with less stress, and transform how<br>you manage your most valuable resource: time.</p>
            <button class="bg-blue-500 mt-10 w-50 text-white rounded-lg mb-5 p-2  md:p-0 mt-3 font-bold hover:bg-blue-800 md:ml-0 ml-25"><a href="management/index.php">Manage Your Time</a></button>
        </article>
        <!-- Images On The Right Side -->
        <section class="block">
            <article class="flex gap-5 md:mr-0">
                <img src="images/banner(1).jpg" alt="Time Management" class="md:w-60 md:h-60 w-51 h-50 rounded-xl">
                <img src="images/banner(3).jpg" alt="Time Management" class="md:w-60 md:h-60 w-51 h-50 rounded-xl">
            </article>

            <article class="mt-5 flex gap-5">
                <img src="images/banner(4).jpg" alt="Time Management" class="md:w-60 md:h-60 w-51 h-50 rounded-xl">
                <img src="images/banner(2).jpg" alt="Time Management" class="md:w-60 md:h-60 w-51 h-50 rounded-xl">
            </article>
        </section>
    </main>

    <!-- How It Works(For Mobile) -->
    <section class="py-12 mt-20 md:hidden" id="manage">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 ml-5 mr-5">
        <h2 class="text-3xl font-bold text-center text-gray-800 mb-8">How to Manage Your Time?</h2>
        <div class="overflow-x-auto md:flex md:justify-around">
        <div class="flex flex-nowrap justify-evenly relative mb-20 space-x-8 w-400 md:">
            
            <div class="bg-white p-6 rounded-lg shadow hover:shadow-lg transition">
            <div class="flex items-center justify-center w-12 h-12 bg-blue-500 rounded-full mb-3">
                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" d="M5.121 17.804A7 7 0 0112 14h0a7 7 0 016.879 3.804M12 14v-4a4 4 0 10-8 0v4m0 0a4 4 0 008 0m-8 0a4 4 0 018 0" />
                </svg>
            </div>
            <h3 class="text-xl font-semibold mb-2 text-gray-800">Step 1: Create a Plan</h3>
            <p class="text-gray-600">
                Create a detailed plan for your day by breaking down tasks and setting priorities for better time management.
            </p>
            </div>

            <div class="bg-white p-6 rounded-lg shadow hover:shadow-lg transition">
            <div class="flex items-center justify-center w-12 h-12 bg-blue-500 rounded-full mb-3">
                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" d="M8 6H21M8 12h13M8 18h7M3 6h.01M3 12h.01M3 18h.01" />
                </svg>
            </div>
            <h3 class="text-xl font-semibold mb-2 text-gray-800">Step 2: Organize Tasks</h3>
            <p class="text-gray-600">
                Prioritize your tasks and organize them based on importance and deadlines to manage your day effectively.
            </p>
            </div>

            <div class="bg-white p-6 rounded-lg shadow hover:shadow-lg transition">
            <div class="flex items-center justify-center w-12 h-12 bg-blue-500 rounded-full mb-3">
                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 14l9-5-9-5-9 5 9 5zm0 7v-7m0 0l-9-5m9 5l9-5" />
                </svg>
            </div>
            <h3 class="text-xl font-semibold mb-2 text-gray-800">Step 3: Stay Focused</h3>
            <p class="text-gray-600">
                Focus on one task at a time and eliminate distractions to make the most of your time.
            </p>
            </div>

            <div class="bg-white p-6 rounded-lg shadow hover:shadow-lg transition">
            <div class="flex items-center justify-center w-12 h-12 bg-blue-500 rounded-full mb-3">
                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                </svg>
            </div>
            <h3 class="text-xl font-semibold mb-2 text-gray-800">Step 4: Get Feedback</h3>
            <p class="text-gray-600">
                    Track your progress and adjust your approach to continuously improve your time management.
            </p>
            </div>

            <div class="bg-white p-6 rounded-lg shadow hover:shadow-lg transition">
            <div class="flex items-center justify-center w-12 h-12 bg-blue-500 rounded-full mb-3">
                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 19V6m6 13V3m6 16v-8M3 19v-2" />
                </svg>
            </div>
            <h3 class="text-xl font-semibold mb-2 text-gray-800">Step 5: Track Progress</h3>
            <p class="text-gray-600">
                Monitor your time management history, results, and performance over time to stay motivated and continue improving.
            </p>
            </div>
        </div>
        </div>
    </div>
    </section>

    <!-- How It Works(For Desktop) -->
    <section class="py-12 mt-20 hidden md:block" id="manage1">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl font-bold text-center mb-8">How to Manage Your Time?</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6">
            
        <div class="bg-white p-6 rounded-lg shadow hover:shadow-lg transition">
          <div class="flex items-center justify-center w-12 h-12 bg-blue-500 rounded-full mb-3">
            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" d="M5.121 17.804A7 7 0 0112 14h0a7 7 0 016.879 3.804M12 14v-4a4 4 0 10-8 0v4m0 0a4 4 0 008 0m-8 0a4 4 0 018 0" />
            </svg>
          </div>
          <h3 class="text-xl font-semibold mb-2 text-gray-800">Step 1: Create a Plan</h3>
          <p class="text-gray-600">
            Create a detailed plan for your day by breaking down tasks and setting priorities for better time management.
          </p>
        </div>

        <div class="bg-white p-6 rounded-lg shadow hover:shadow-lg transition">
          <div class="flex items-center justify-center w-12 h-12 bg-blue-500 rounded-full mb-3">
            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" d="M8 6H21M8 12h13M8 18h7M3 6h.01M3 12h.01M3 18h.01" />
            </svg>
          </div>
          <h3 class="text-xl font-semibold mb-2 text-gray-800">Step 2: Organize Tasks</h3>
          <p class="text-gray-600">
            Prioritize your tasks and organize them based on importance and deadlines to manage your day effectively.
          </p>
        </div>

        <div class="bg-white p-6 rounded-lg shadow hover:shadow-lg transition">
          <div class="flex items-center justify-center w-12 h-12 bg-blue-500 rounded-full mb-3">
            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" d="M12 14l9-5-9-5-9 5 9 5zm0 7v-7m0 0l-9-5m9 5l9-5" />
            </svg>
          </div>
          <h3 class="text-xl font-semibold mb-2 text-gray-800">Step 3: Stay Focused</h3>
          <p class="text-gray-600">
            Focus on one task at a time and eliminate distractions to make the most of your time.
          </p>
        </div>

        <div class="bg-white p-6 rounded-lg shadow hover:shadow-lg transition">
          <div class="flex items-center justify-center w-12 h-12 bg-blue-500 rounded-full mb-3">
            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
            </svg>
          </div>
          <h3 class="text-xl font-semibold mb-2 text-gray-800">Step 4: Get Feedback</h3>
          <p class="text-gray-600">
            Track your progress and adjust your approach to continuously improve your time management.
          </p>
        </div>

        <div class="bg-white p-6 rounded-lg shadow hover:shadow-lg transition">
          <div class="flex items-center justify-center w-12 h-12 bg-blue-500 rounded-full mb-3">
            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" d="M9 19V6m6 13V3m6 16v-8M3 19v-2" />
            </svg>
          </div>
          <h3 class="text-xl font-semibold mb-2 text-gray-800">Step 5: Track Progress</h3>
          <p class="text-gray-600">
            Monitor your time management history, results, and performance over time to stay motivated and continue improving.
          </p>
        </div>
        </div>
    </div>
    </section>

    <!-- About Us -->
    <section class="md:flex md:text-start text-center justify-around mt-20 md:ml-0 md:mr-0 ml-5 mr-5" id="about">
        <article class="block">
            <h1 class="text-3xl font-bold">Our History</h1>
            <p class="text-gray-600 mt-10">
                At <span class="font-bold text-black">Time<span class="text-blue-500">Wise</span></span>, we specialize in helping individuals and organizations manage their time more effectively.<br>
                Our goal is to provide tools, techniques, and resources that help optimize productivity, reduce stress,<br> and ensure a balanced approach to both personal and professional commitments.<br>
                We believe that with the right time management strategies, anyone can achieve their goals without<br>feeling overwhelmed. Our team is passionate about empowering people to take control of their<br> schedules and make the most out of each day.
                Whether you are a student,<br> professional, or entrepreneur, we offer customized solutions<Br> that help you stay organized, prioritize tasks, and meet deadlines with<br> ease. We are committed to fostering a culture of efficiency and success for our clients.
                <br>At <span class="font-bold text-black">Time<span class="text-blue-500">Wise</span></span>, we are here to support you every step<Br> of the way in your journey toward better time management and achieving your full potential.
            </p>
        </article>

        <article>
            <img src="images/about(1).jpg" alt="About Us" class="rounded-xl w-120 md:h-100 h-80 md:mt-0 mt-5">
        </article>
    </section>

    <!-- Feedbacks -->
    <main class="mt-20">
    <!-- Feedbacks for mobile -->
    <section class="py-12 mt-20 md:hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 ml-5 mr-5">
        <h2 class="text-3xl font-bold text-center text-gray-800 mb-8">Our Customers</h2>
        <div class="overflow-x-auto md:flex md:justify-around">
        <div class="flex flex-nowrap justify-evenly relative mb-20 space-x-8 w-400 md:">
            
        <div class="bg-white p-6 rounded-lg shadow hover:shadow-lg transition">
                    <div class="flex items-center justify-center w-12 h-12  rounded-full mb-3">
                    <img src="images/customer(1).jpg" alt="Customer" class="rounded-full w-12 h-12">
                    </div>
                    <h3 class="text-xl font-semibold mb-2 text-gray-800">Mia Nicolas</h3>
                    <p class="text-gray-600">
                        "TimeWise has helped me organize my daily schedule better. I feel more productive and less stressed knowing exactly what tasks to focus on."
                    </p>
                </div>

                <div class="bg-white p-6 rounded-lg shadow hover:shadow-lg transition">
                    <div class="flex items-center justify-center w-12 h-12  rounded-full mb-3">
                    <img src="images/customer(2).jpg" alt="Customer" class="rounded-full w-12 h-12">
                    </div>
                    <h3 class="text-xl font-semibold mb-2 text-gray-800">Bill Smith</h3>
                    <p class="text-gray-600">
                        "I now prioritize my tasks effectively, and I can meet deadlines without the last-minute panic. TimeWise has made managing my tasks much easier."
                    </p>
                </div>

                <div class="bg-white p-6 rounded-lg shadow hover:shadow-lg transition">
                    <div class="flex items-center justify-center w-12 h-12 bg-[#ffe270ff] rounded-full mb-3">
                        <img src="images/customer(4).jpg" alt="Customer" class="rounded-full w-12 h-12">
                    </div>
                    <h3 class="text-xl font-semibold mb-2 text-gray-800">Donald Johny</h3>
                    <p class="text-gray-600">
                        "By focusing on one task at a time, I’ve been able to cut down on distractions. TimeWise’s tools have helped me stay laser-focused."
                    </p>
                </div>

                <div class="bg-white p-6 rounded-lg shadow hover:shadow-lg transition">
                    <div class="flex items-center justify-center w-12 h-12 bg-[#ffe270ff] rounded-full mb-3">
                        <img src="images/customer(3).jpg" alt="Customer" class="rounded-full w-12 h-12">
                    </div>
                    <h3 class="text-xl font-semibold mb-2 text-gray-800">Leah Allen</h3>
                    <p class="text-gray-600">
                        "Tracking my progress with TimeWise has allowed me to continuously improve my time management. I’m seeing better results every day."
                    </p>
                </div>

                <div class="bg-white p-6 rounded-lg shadow hover:shadow-lg transition">
                    <div class="flex items-center justify-center w-12 h-12 bg-[#ffe270ff] rounded-full mb-3">
                        <img src="images/customer(5).jpg" alt="Customer" class="rounded-full w-12 h-12">
                    </div>
                    <h3 class="text-xl font-semibold mb-2 text-gray-800">Chloe Thomas</h3>
                    <p class="text-gray-600">
                        "Using TimeWise has given me the insight I need to monitor my time management results and make adjustments. I’m always motivated to keep improving."
                    </p>
                </div>
            </div>
        </div>
    </div>
    </section>
    
    <!-- Feedback for desktop -->
    <h1 class="text-4xl font-bold text-center mb-10 md:mt-0 mt-5">Our Customers</h1>
    <section class="py-12 mt-10 hidden md:block" id="works">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6">
                
                <div class="bg-white p-6 rounded-lg shadow hover:shadow-lg transition">
                    <div class="flex items-center justify-center w-12 h-12  rounded-full mb-3">
                    <img src="images/customer(1).jpg" alt="Customer" class="rounded-full w-12 h-12">
                    </div>
                    <h3 class="text-xl font-semibold mb-2 text-gray-800">Mia Nicolas</h3>
                    <p class="text-gray-600">
                        "TimeWise has helped me organize my daily schedule better. I feel more productive and less stressed knowing exactly what tasks to focus on."
                    </p>
                </div>

                <div class="bg-white p-6 rounded-lg shadow hover:shadow-lg transition">
                    <div class="flex items-center justify-center w-12 h-12  rounded-full mb-3">
                    <img src="images/customer(2).jpg" alt="Customer" class="rounded-full w-12 h-12">
                    </div>
                    <h3 class="text-xl font-semibold mb-2 text-gray-800">Bill Smith</h3>
                    <p class="text-gray-600">
                        "I now prioritize my tasks effectively, and I can meet deadlines without the last-minute panic. TimeWise has made managing my tasks much easier."
                    </p>
                </div>

                <div class="bg-white p-6 rounded-lg shadow hover:shadow-lg transition">
                    <div class="flex items-center justify-center w-12 h-12 bg-[#ffe270ff] rounded-full mb-3">
                        <img src="images/customer(4).jpg" alt="Customer" class="rounded-full w-12 h-12">
                    </div>
                    <h3 class="text-xl font-semibold mb-2 text-gray-800">Donald Johny</h3>
                    <p class="text-gray-600">
                        "By focusing on one task at a time, I’ve been able to cut down on distractions. TimeWise’s tools have helped me stay laser-focused."
                    </p>
                </div>

                <div class="bg-white p-6 rounded-lg shadow hover:shadow-lg transition">
                    <div class="flex items-center justify-center w-12 h-12 bg-[#ffe270ff] rounded-full mb-3">
                        <img src="images/customer(3).jpg" alt="Customer" class="rounded-full w-12 h-12">
                    </div>
                    <h3 class="text-xl font-semibold mb-2 text-gray-800">Leah Allen</h3>
                    <p class="text-gray-600">
                        "Tracking my progress with TimeWise has allowed me to continuously improve my time management. I’m seeing better results every day."
                    </p>
                </div>

                <div class="bg-white p-6 rounded-lg shadow hover:shadow-lg transition">
                    <div class="flex items-center justify-center w-12 h-12 bg-[#ffe270ff] rounded-full mb-3">
                        <img src="images/customer(5).jpg" alt="Customer" class="rounded-full w-12 h-12">
                    </div>
                    <h3 class="text-xl font-semibold mb-2 text-gray-800">Chloe Thomas</h3>
                    <p class="text-gray-600">
                        "Using TimeWise has given me the insight I need to monitor my time management results and make adjustments. I’m always motivated to keep improving."
                    </p>
                </div>
            </div>
        </div>
    </section>
    </main>



    <!-- Contact Form -->
    <section class="md:flex justify-around gap-20 md:ml-0 md:mr-0 ml-5 mr-5 mt-20 mb-10" id="contact">
        <article> 
            <img src="images/contact(1).jpg" alt="Contact Us" class="rounded-xl w-140 md:h-120 h-100" id="changeImage">
        </article>
        <form class="flex flex-col justify-center md:mr-20" action="send.php" method="post">
            <h1 class="text-4xl font-bold text-center mb-10 md:mt-0 mt-5">Contact <span class="text-blue-500">Us</span></h1>
            <input type="text" id="text" name="name" class="mt-2 p-2 mb-5 border border-gray-300 rounded-lg md:w-80 w-95 focus:outline-none focus:ring-2 focus:ring-[#5869FF]" placeholder="Enter your name">
            <input type="text" id="text" name="surname" class="mt-2 p-2 mb-5 border border-gray-300 rounded-lg md:w-80 w-95 focus:outline-none focus:ring-2 focus:ring-[#5869FF]" placeholder="Enter your message">
            <input type="email" id="email" name="email" class="mt-2 p-2 mb-5 border border-gray-300 rounded-lg md:w-80 w-95 focus:outline-none focus:ring-2 focus:ring-[#5869FF]" placeholder="Enter your email">
            <button class="bg-blue-500 w-65 text-white font-bold md:ml-8 ml-17 p-2 rounded-lg mb-5 hover:bg-blue-800">Submit</button>
        </form>
    </section>

    <!-- Footer -->
    <section class="bg-[#FCF6F6] md:py-20 py-10 px-10 md:flex justify-around">
        <div class="grid">
        <h1 class="text-4xl font-bold text-center md:text-start mb-2">Time<span class="text-blue-500">Wise</span></h1>    
            <p class="text-center md:text-start text-gray-600">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Et, esse?</p>
            <article class="flex justify-center md:justify-start">
               <img src="images/insta.jpg" alt="Social Media(Instagram)" class="rounded-xl w-12 h-12">
               <img src="images/facebook.jpg" alt="Social Media(Facebook)" class="rounded-xl w-7 h-7 mt-2.5">
               <img src="images/x.jpg" alt="Social Media(Facebook)" class="rounded-xl w-7 h-7 mt-2.5">
            </article>
        </div>
            <article class="grid"> 
               <h1 class="text-xl font-bold text-center md:mt-0 mt-5">Info</h1>
               <a href="#" class="text-center text-gray-600 hover:text-blue-500">Formats</a>
               <a href="#" class="text-center text-gray-600 hover:text-blue-500">FAQ</a>
               <a href="#" class="text-center text-gray-600 hover:text-blue-500">Pricing</a>
               <a href="#" class="text-center text-gray-600 hover:text-blue-500">Status</a>
               <a href="#" class="text-center text-gray-600 hover:text-blue-500">Policy</a> 
            </article>

            <article class="grid">
               <h1 class="text-xl font-bold text-center md:mt-0 mt-5">Resources</h1>
               <a href="#" class="text-center text-gray-600 hover:text-blue-500">API</a>
               <a href="#" class="text-center text-gray-600 hover:text-blue-500">Form Validation</a>
               <a href="#" class="text-center text-gray-600 hover:text-blue-500">Community</a>
               <a href="#" class="text-center text-gray-600 hover:text-blue-500">Visibility</a>
            </article>

            <article class="grid">
               <h1 class="text-xl font-bold text-center md:mt-0 mt-5">Getting Started</h1>
               <a href="#" class="text-center text-gray-600 hover:text-blue-500">Themes</a>
               <a href="#" class="text-center text-gray-600 hover:text-blue-500">Elements</a>
               <a href="#" class="text-center text-gray-600 hover:text-blue-500">Global</a>
               <a href="#" class="text-center text-gray-600 hover:text-blue-500">Usages</a>
            </article>
    </section>
    <div class="text-center bg-[#FCF6F6]">
        <p class="text-gray-600">© 2025 TimeWise. All rights reserved.</p>
    </div>
 
    <script src="JS/main.js"></script>
</body>
</html>
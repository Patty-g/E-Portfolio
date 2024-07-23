<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patrick Grygoruk - Portfolio</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="glow.css"> <!-- Glow effect CSS -->
    <link rel="stylesheet" href="sparkler.css"> <!-- Sparkler effect CSS -->
    <link rel="stylesheet" href="shooting-stars.css"> <!-- Shooting stars CSS -->
    <link rel="stylesheet" href="about-me.css">
    <link rel="stylesheet" href="grow.css">
    <link rel="stylesheet" href="projects.css">
    <link rel="stylesheet" href="work.css">
</head>

<body class="bg-gray-100 text-gray-900">

    <!-- Hero Section -->
    <section id="hero-section" class="star-container relative bg-black hero-section">
        <div class="relative h-full">
            <div class="cutout-text absolute text-white">
                <h1 class="text-8xl font-bold leading-none" data-text="ALTERNUM">ALTERNUM</h1>
                <p class="text-2xl mt-4" data-text="Patrick Grygoruk - Portfolio">Patrick Grygoruk - Portfolio</p>
            </div>
            <div class="cutout-text2 absolute text-white">
                <h1 class="text-8xl font-bold leading-none">ALTERNUM</h1>
                <p class="text-2xl mt-4">Patrick Grygoruk - Portfolio</p>
            </div>
            <div id="sparkler-container"></div>
            <div id="lottie-scroll" class="absolute bottom-4"></div> <!-- Lottie animation container -->
        </div>
    </section>

    <!-- About Section -->
    <section class="py-20 px-20 about-me-section">
        <div class="bg-white rounded-lg shadow-md p-6 flex about-me">
            <!-- Profile Picture and Basic Info -->
            <div class="flex-none text-center about-me-profile">
                <img class="rounded-full mx-auto mb-4 object-cover" style="height: 50%;aspect-ratio: 1 / 1;object-position: bottom;" src="./content/20240723_151152.jpg" alt="Noman Ghaffar">
                <h2 class="text-2xl font-semibold">Patrick Grygoruk</h2>
                <p class="text-purple-500">PROJECT DEVELOPER</p>
                <div class="flex justify-center mt-4 space-x-3">
                    <a href="#" class="text-gray-600"><i class="fab fa-linkedin" style="font-size:40px;"></i></a>
                    <a href="https://instagram.com/p_a_t_t_y_g" class="text-gray-600"><i class="fab fa-instagram" style="font-size:40px;"></i></a>
                </div>
                <div class="mt-4 absolute bottom-0 about-me-links">
                    <button class="bg-gray-200 px-4 py-2"><a class="h-full w-full flex items-center justify-center" href="./content/PatrickGrygorukResume.pdf" download="PatrickGrygorukResume.pdf">Download CV</a></button>
                    <button class="bg-gray-200 px-4 py-2 border-l-black">Contact Me</button>
                </div>
            </div>
            
            <!-- About Me and Skills -->
            <div class="about-me-container">
                <div class="about-me-info expandable">
                    <div class="about-me-wrap">
                        <h3 class="text-3xl font-semibold mb-8 text-purple-500">About Me</h3>
                            <p class="fade-in">Hello! I'm a dedicated and creative professional based in Ontario with a passion for tackling a wide range of projects. At 20 years old, I've already dived into various fields, including front-end and back-end web development, landscape architecture, graphic design, product design, and data analysis.</p>
                            <p class="expand-exclude">Hello! I'm a dedicated and creative professional based in Ontario with a passion for tackling a wide range of projects. At 20 years old, I've already dived into various fields, including front-end and back-end web development, landscape architecture, graphic design, product design, and data analysis.</p>
                            <br>
                            <p class=" fade-in">My diverse interests allow me to bring a unique perspective to every project I undertake. Whether it's designing a user-friendly website, creating beautiful outdoor spaces, crafting eye-catching graphics, developing innovative products, or analyzing data to uncover insights, I approach each task with enthusiasm and a commitment to excellence.</p>
                            <br>
                            <p class=" fade-in">I'm always eager to take on new challenges and collaborate on exciting projects. Let's create something amazing together!</p>
                    </div><button class="read-more-btn expand-btn expand-exclude">Read More</button>
                </div>

                <hr class="hr-1">

                <!-- Swipe Skills -->
                <div class="swiper-container">
                    <div class="swiper-wrapper">

                        <!-- Swipe Page -->
                        <div class="about-me-skills swiper-slide">
                            <h3 class="text-xl font-semibold mb-2">Web Dev Skills</h3>
                            <div class="space-y-2 skill-holder">
                                <div>
                                    <span class="text-gray-600">HTML</span>
                                    <div class="bg-gray-300 w-full h-4 rounded-full overflow-hidden">
                                        <div class=" h-full skill-bar pink-bar bar-0" style="width: 90%"></div>
                                    </div>
                                </div>
                                <div>
                                    <span class="text-gray-600">CSS</span>
                                    <div class="bg-gray-300 w-full h-4 rounded-full overflow-hidden">
                                        <div class=" h-full skill-bar pink-bar bar-0" style="width: 95%"></div>
                                    </div>
                                </div>
                                <div>
                                    <span class="text-gray-600">JavaScript</span>
                                    <div class="bg-gray-300 w-full h-4 rounded-full overflow-hidden">
                                        <div class=" h-full skill-bar pink-bar bar-0" style="width: 80%"></div>
                                    </div>
                                </div>
                                <div>
                                    <span class="text-gray-600">PHP</span>
                                    <div class="bg-gray-300 w-full h-4 rounded-full overflow-hidden">
                                        <div class=" h-full skill-bar pink-bar bar-0" style="width: 80%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Swipe Page -->
                        <div class="about-me-skills swiper-slide">
                            <h3 class="text-xl font-semibold mb-2">Design Skills</h3>
                            <div class="space-y-2 skill-holder">
                                <div>
                                    <span class="text-gray-600">SKETCHUP</span>
                                    <div class="bg-gray-300 w-full h-4 rounded-full overflow-hidden">
                                        <div class=" h-full skill-bar blue-bar bar-0" style="width: 80%"></div>
                                    </div>
                                </div>
                                <div>
                                    <span class="text-gray-600">AUTODESK INVETOR</span>
                                    <div class="bg-gray-300 w-full h-4 rounded-full overflow-hidden">
                                        <div class=" h-full skill-bar blue-bar bar-0" style="width: 60%"></div>
                                    </div>
                                </div>
                                <div>
                                    <span class="text-gray-600">AUTOCAD</span>
                                    <div class="bg-gray-300 w-full h-4 rounded-full overflow-hidden">
                                        <div class=" h-full skill-bar blue-bar bar-0" style="width: 50%"></div>
                                    </div>
                                </div>

                                <div>
                                    <span class="text-gray-600">FIGMA</span>
                                    <div class="bg-gray-300 w-full h-4 rounded-full overflow-hidden">
                                        <div class=" h-full skill-bar blue-bar bar-0" style="width: 70%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Swipe Page -->
                        <div class="about-me-skills swiper-slide">
                            <h3 class="text-xl font-semibold mb-2">Software Skills</h3>
                            <div class="space-y-2 skill-holder">
                                <div>
                                    <span class="text-gray-600">Python</span>
                                    <div class="bg-gray-300 w-full h-4 rounded-full overflow-hidden">
                                        <div class=" h-full skill-bar purple-bar bar-0" style="width: 40%"></div>
                                    </div>
                                </div>
                                <div>
                                    <span class="text-gray-600">C++</span>
                                    <div class="bg-gray-300 w-full h-4 rounded-full overflow-hidden">
                                        <div class=" h-full skill-bar purple-bar bar-0" style="width: 70%"></div>
                                    </div>
                                </div>
                                <div>
                                    <span class="text-gray-600">C#</span>
                                    <div class="bg-gray-300 w-full h-4 rounded-full overflow-hidden">
                                        <div class=" h-full skill-bar purple-bar bar-0" style="width: 80%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    
                <!-- Add Pagination -->
                <div class="swiper-pagination">
                    <span class="swiper-pagination-bullet" data-index="0"></span>
                    <span class="swiper-pagination-bullet" data-index="1"></span>
                    <span class="swiper-pagination-bullet" data-index="2"></span>
                </div>


                </div>

                
                <hr>
            </div>
        </div>
    </section>

    <!-- Portfolio Section -->

    
    <div class="enlarge-overlay" id="enlargeOverlay">
        <div class="enlarge flex justify-center content-center" id="enlargeContainer">
            <img src="hi" alt="Enlarged Photo" id="enlargedPhoto">
        </div>
    </div>

    <section class="portfolio-section">
        <div class="mx-auto py-8">
            <div class="text-center mb-8 px-4">
                <h1 class="text-4xl pb-6">My Works</h1>
                <p class="text-lg text-gray-600 mt-2">
                    Witness the beauty of nature through our lens, as we showcase stunning landscapes
                    that evoke wonder and appreciation for the environment.
                </p>
            </div>
            <div class="relative scroll-section">
                <div class="absolute arrow-cont inset-y-0 left-0 flex items-center z-50">
                    <div class="arrow bg-white p-2 rounded-full shadow" id="prev">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white arrow-svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                        </svg>
                    </div>
                </div>
                <div class="absolute arrow-cont inset-y-0 right-0 flex items-center z-50">
                    <div class="arrow  bg-white p-2 rounded-full shadow" id="next">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white arrow-svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </div>
                </div>
                
                <div class="scroll-container flex space-x-4 px-8">

                    <div class="scroll-item flex-shrink-0 bg-white rounded-lg shadow-md overflow-hidden relative expandable expand-btn">
                        <img src="./content/home-hb.jpg" alt="./content/bg.jpg3" class="w-full h-full object-cover expand-exclude">
                        <div class="absolute inset-0 bg-black bg-opacity-50 flex flex-col justify-center items-center text-white p-4 overlay expand-exclude">
                            <h2 class="text-2xl font-bold expand-exclude">Construction Website</h2>
                            <p class="mt-2 expand-exclude">Modern Comprehensive Website</p>
                        </div>
                        <div class="tag-div expand-exclude">
                            <div class="badge rounded">Web Development</div>
                            <div class="badge rounded ml-2">Buisness</div>
                        </div>
                        <div><!-- add proeject section here -->
                            <div class="container mx-auto px-4 py-8 work-container">
                                <div class="bg-white work-container rounded-lg overflow-hidden px-6">
                                    <div class="p-6 work-p">
                                        <h1 class="text-4xl font-bold mb-4">Construction Website</h1>
                                        <p class="text-lg text-gray-500 mb-6">
                                            Creating a modern, functional, and easy-to-use website for a construction company involves a thorough understanding of client needs, extensive research, prototyping, and design. The process focuses on user experience, seamless functionality, and continuous client collaboration to ensure a professional and trustworthy online presence.
                                        </p>
                                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 p-4">
                                            <div class="md:col-span-2">
                                                <h2 class="text-2xl font-semibold mb-4">Details</h2>
                                                <ul class="list-disc list-inside text-gray-700">
                                                    <div class="flex items-center mb-2 flex-row"><div class="list-point"></div><li>Initial client consultation to understand needs and goals.</li></div>
                                                    <div class="flex items-center mb-2 flex-row"><div class="list-point"></div><li>Research on current design trends and competitors.</li></div>
                                                    <div class="flex items-center mb-2 flex-row"><div class="list-point"></div><li>Creating wireframes and prototypes for structure.</li></div>
                                                    <div class="flex items-center mb-2 flex-row"><div class="list-point"></div><li>Visual design with modern color palette and branding.</li></div>
                                                    <div class="flex items-center mb-2 flex-row"><div class="list-point"></div><li>Development using the latest web technologies.</li></div>
                                                    <div class="flex items-center mb-2 flex-row"><div class="list-point"></div><li>Ensuring responsive design and fast loading times.</li></div>
                                                    <div class="flex items-center mb-2 flex-row"><div class="list-point"></div><li>SEO-optimized content creation and integration.</li></div>
                                                    <div class="flex items-center mb-2 flex-row"><div class="list-point"></div><li>Focus on intuitive UX/UI design.</li></div>
                                                    <div class="flex items-center mb-2 flex-row"><div class="list-point"></div><li>Rigorous testing and quality assurance.</li></div>
                                                    <div class="flex items-center mb-2 flex-row"><div class="list-point"></div><li>Client review and final adjustments.</li></div>
                                                    <div class="flex items-center mb-2 flex-row"><div class="list-point"></div><li>Launch and ongoing support for updates and maintenance.</li></div>
                                                </ul>
                                            </div>
                                            <div class="md:col-span-1">
                                                <h2 class="text-2xl font-semibold mb-2">Resources Used</h2>
                                                <div class="flex flex-wrap gap-2">
                                                    <div class="w-12 h-12 p-1 #cacaca border-2 rounded-xl"><svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"><title>file_type_js</title><path d="M18.774,19.7a3.727,3.727,0,0,0,3.376,2.078c1.418,0,2.324-.709,2.324-1.688,0-1.173-.931-1.589-2.491-2.272l-.856-.367c-2.469-1.052-4.11-2.37-4.11-5.156,0-2.567,1.956-4.52,5.012-4.52A5.058,5.058,0,0,1,26.9,10.52l-2.665,1.711a2.327,2.327,0,0,0-2.2-1.467,1.489,1.489,0,0,0-1.638,1.467c0,1.027.636,1.442,2.1,2.078l.856.366c2.908,1.247,4.549,2.518,4.549,5.376,0,3.081-2.42,4.769-5.671,4.769a6.575,6.575,0,0,1-6.236-3.5ZM6.686,20c.538.954,1.027,1.76,2.2,1.76,1.124,0,1.834-.44,1.834-2.15V7.975h3.422V19.658c0,3.543-2.078,5.156-5.11,5.156A5.312,5.312,0,0,1,3.9,21.688Z" style="fill:#f5de19"/></svg></div>
                                                    <div class="w-12 h-12 p-1 #cacaca border-2 rounded-xl"><svg xmlns="http://www.w3.org/2000/svg" viewBox="-18.458 -22.75 191.151 191.151"><path d="M-18.458 6.58h191.151v132.49H-18.458V6.58z" fill="none"/><path d="M40.054 113.583h-5.175c-.183-8.735-.687-16.947-1.511-24.642h-.046l-7.879 24.642h-3.94l-7.832-24.642h-.045c-.581 7.388-.947 15.602-1.099 24.642H7.81c.304-10.993 1.068-21.299 2.289-30.919h6.414l7.465 22.719h.046l7.511-22.719h6.137c1.344 11.268 2.138 21.575 2.382 30.919M62.497 90.771c-2.107 11.434-4.887 19.742-8.337 24.928-2.688 3.992-5.633 5.99-8.84 5.99-.855 0-1.91-.258-3.16-.77v-2.757c.611.088 1.328.138 2.152.138 1.498 0 2.702-.412 3.62-1.238 1.098-1.006 1.647-2.137 1.647-3.388 0-.858-.428-2.612-1.282-5.268L42.618 90.77h5.084l4.076 13.19c.916 2.995 1.298 5.086 1.145 6.277 2.229-5.953 3.786-12.444 4.673-19.468h4.901v.002z" fill="#5d87a1"/><path d="M131.382 113.583h-14.7V82.664h4.945v27.113h9.755v3.806zM112.834 114.33l-5.684-2.805c.504-.414.986-.862 1.42-1.381 2.416-2.838 3.621-7.035 3.621-12.594 0-10.229-4.014-15.346-12.045-15.346-3.938 0-7.01 1.298-9.207 3.895-2.414 2.84-3.619 7.022-3.619 12.551 0 5.435 1.068 9.422 3.205 11.951 1.955 2.291 4.902 3.438 8.843 3.438 1.47 0 2.819-.18 4.048-.543l7.4 4.308 2.018-3.474zm-18.413-6.934c-1.252-2.014-1.878-5.248-1.878-9.707 0-7.785 2.365-11.682 7.1-11.682 2.475 0 4.289.932 5.449 2.792 1.25 2.017 1.879 5.222 1.879 9.619 0 7.849-2.367 11.774-7.099 11.774-2.476.001-4.29-.928-5.451-2.796M85.165 105.013c0 2.622-.962 4.773-2.884 6.458-1.924 1.678-4.504 2.519-7.737 2.519-3.024 0-5.956-.966-8.794-2.888l1.329-2.655c2.442 1.223 4.653 1.831 6.638 1.831 1.863 0 3.319-.413 4.375-1.232 1.055-.822 1.684-1.975 1.684-3.433 0-1.837-1.281-3.407-3.631-4.722-2.167-1.19-6.501-3.678-6.501-3.678-2.349-1.712-3.525-3.55-3.525-6.578 0-2.506.877-4.529 2.632-6.068 1.757-1.545 4.024-2.315 6.803-2.315 2.87 0 5.479.769 7.829 2.291l-1.192 2.656c-2.01-.854-3.994-1.281-5.951-1.281-1.585 0-2.809.381-3.66 1.146-.858.762-1.387 1.737-1.387 2.933 0 1.828 1.308 3.418 3.722 4.759 2.196 1.192 6.638 3.723 6.638 3.723 2.409 1.709 3.612 3.53 3.612 6.534" fill="#f8981d"/><path d="M137.59 72.308c-2.99-.076-5.305.225-7.248 1.047-.561.224-1.453.224-1.531.933.303.3.338.784.601 1.198.448.747 1.229 1.752 1.942 2.276.783.6 1.569 1.194 2.393 1.717 1.453.899 3.1 1.422 4.516 2.318.825.521 1.645 1.195 2.471 1.756.406.299.666.784 1.193.971v-.114c-.264-.336-.339-.822-.598-1.196l-1.122-1.082c-1.084-1.456-2.431-2.727-3.884-3.771-1.196-.824-3.812-1.944-4.297-3.322l-.076-.076c.822-.077 1.797-.375 2.578-.604 1.271-.335 2.43-.259 3.734-.594.6-.15 1.195-.338 1.797-.523v-.337c-.676-.673-1.158-1.567-1.869-2.203-1.902-1.643-3.998-3.25-6.164-4.595-1.16-.749-2.652-1.231-3.887-1.868-.445-.225-1.195-.336-1.457-.71-.67-.822-1.047-1.904-1.533-2.877-1.08-2.053-2.129-4.331-3.061-6.502-.674-1.456-1.084-2.91-1.906-4.257-3.85-6.35-8.031-10.196-14.457-13.971-1.381-.786-3.024-1.121-4.779-1.533l-2.803-.148c-.598-.262-1.197-.973-1.719-1.309-2.132-1.344-7.621-4.257-9.189-.411-1.01 2.431 1.494 4.821 2.354 6.054.635.856 1.458 1.83 1.902 2.802.263.635.337 1.309.6 1.98.598 1.644 1.157 3.473 1.943 5.007.41.782.857 1.604 1.381 2.312.3.414.822.597.936 1.272-.521.744-.562 1.867-.861 2.801-1.344 4.221-.819 9.45 1.086 12.552.596.934 2.018 2.99 3.92 2.202 1.684-.672 1.311-2.801 1.795-4.668.111-.451.038-.747.262-1.043v.073c.521 1.045 1.047 2.052 1.53 3.1 1.159 1.829 3.177 3.735 4.858 5.002.895.676 1.604 1.832 2.725 2.245V74.1h-.074c-.227-.335-.559-.485-.857-.745-.674-.673-1.42-1.495-1.943-2.241-1.566-2.093-2.952-4.41-4.182-6.801-.602-1.16-1.121-2.428-1.606-3.586-.226-.447-.226-1.121-.601-1.346-.562.821-1.381 1.532-1.791 2.538-.711 1.609-.785 3.588-1.049 5.646l-.147.072c-1.19-.299-1.604-1.53-2.056-2.575-1.119-2.654-1.307-6.914-.336-9.976.26-.783 1.385-3.249.936-3.995-.225-.715-.973-1.122-1.383-1.685-.482-.708-1.01-1.604-1.346-2.39-.896-2.091-1.347-4.408-2.312-6.498-.451-.974-1.234-1.982-1.868-2.879-.712-1.008-1.495-1.718-2.058-2.913-.186-.411-.447-1.083-.148-1.53.073-.3.225-.412.523-.487.484-.409 1.867.111 2.352.336 1.385.56 2.543 1.083 3.699 1.867.523.375 1.084 1.085 1.755 1.272h.786c1.193.26 2.538.072 3.661.41 1.979.636 3.772 1.569 5.38 2.576 4.893 3.103 8.928 7.512 11.652 12.778.447.858.637 1.644 1.045 2.539.787 1.832 1.76 3.7 2.541 5.493.785 1.755 1.533 3.547 2.654 5.005.559.784 2.805 1.195 3.812 1.606.745.335 1.905.633 2.577 1.044 1.271.783 2.537 1.682 3.732 2.543.595.448 2.465 1.382 2.576 2.13M99.484 39.844a5.82 5.82 0 0 0-1.529.188v.075h.072c.301.597.824 1.011 1.197 1.532.301.599.562 1.193.857 1.791l.072-.074c.527-.373.789-.971.789-1.868-.227-.264-.262-.522-.451-.784-.22-.374-.705-.56-1.007-.86" fill="#5d87a1"/><path d="M141.148 113.578h.774v-3.788h-1.161l-.947 2.585-1.029-2.585h-1.118v3.788h.731v-2.882h.041l1.078 2.882h.557l1.074-2.882v2.882zm-6.235 0h.819v-3.146h1.072v-.643h-3.008v.643h1.115l.002 3.146z" fill="#f8981d"/></svg></div>
                                                    <div class="w-12 h-12 p-1 #cacaca border-2 rounded-xl"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 240 234" style="enable-background:new 0 0 240 234;" xml:space="preserve"> <style type="text/css"> .st0{fill:#001E36;} .st1{fill:#31A8FF;} </style> <g id="Layer_2_1_"> <g id="Surfaces"> <g id="Photo_Surface"> <g id="Outline_no_shadow"> <path class="st0" d="M42.5,0h155C221,0,240,19,240,42.5v149c0,23.5-19,42.5-42.5,42.5h-155C19,234,0,215,0,191.5v-149      C0,19,19,0,42.5,0z"/> </g> </g> </g> <g id="Outlined_Mnemonics_Logos"> <g id="Ps"> <path class="st1" d="M54,164.1V61.2c0-0.7,0.3-1.1,1-1.1c1.7,0,3.3,0,5.6-0.1c2.4-0.1,4.9-0.1,7.6-0.2c2.7-0.1,5.6-0.1,8.7-0.2     c3.1-0.1,6.1-0.1,9.1-0.1c8.2,0,15,1,20.6,3.1c5,1.7,9.6,4.5,13.4,8.2c3.2,3.2,5.7,7.1,7.3,11.4c1.5,4.2,2.3,8.5,2.3,13     c0,8.6-2,15.7-6,21.3c-4,5.6-9.6,9.8-16.1,12.2c-6.8,2.5-14.3,3.4-22.5,3.4c-2.4,0-4,0-5-0.1c-1-0.1-2.4-0.1-4.3-0.1v32.1     c0.1,0.7-0.4,1.3-1.1,1.4c-0.1,0-0.2,0-0.4,0H55.2C54.4,165.4,54,165,54,164.1z M75.8,79.4V113c1.4,0.1,2.7,0.2,3.9,0.2H85     c3.9,0,7.8-0.6,11.5-1.8c3.2-0.9,6-2.8,8.2-5.3c2.1-2.5,3.1-5.9,3.1-10.3c0.1-3.1-0.7-6.2-2.3-8.9c-1.7-2.6-4.1-4.6-7-5.7     c-3.7-1.5-7.7-2.1-11.8-2c-2.6,0-4.9,0-6.8,0.1C77.9,79.2,76.5,79.3,75.8,79.4L75.8,79.4z"/> <path class="st1" d="M192,106.9c-3-1.6-6.2-2.7-9.6-3.4c-3.7-0.8-7.4-1.3-11.2-1.3c-2-0.1-4.1,0.2-6,0.7c-1.3,0.3-2.4,1-3.1,2     c-0.5,0.8-0.8,1.8-0.8,2.7c0,0.9,0.4,1.8,1,2.6c0.9,1.1,2.1,2,3.4,2.7c2.3,1.2,4.7,2.3,7.1,3.3c5.4,1.8,10.6,4.3,15.4,7.3     c3.3,2.1,6,4.9,7.9,8.3c1.6,3.2,2.4,6.7,2.3,10.3c0.1,4.7-1.3,9.4-3.9,13.3c-2.8,4-6.7,7.1-11.2,8.9c-4.9,2.1-10.9,3.2-18.1,3.2     c-4.6,0-9.1-0.4-13.6-1.3c-3.5-0.6-7-1.7-10.2-3.2c-0.7-0.4-1.2-1.1-1.1-1.9v-17.4c0-0.3,0.1-0.7,0.4-0.9     c0.3-0.2,0.6-0.1,0.9,0.1c3.9,2.3,8,3.9,12.4,4.9c3.8,1,7.8,1.5,11.8,1.5c3.8,0,6.5-0.5,8.3-1.4c1.6-0.7,2.7-2.4,2.7-4.2     c0-1.4-0.8-2.7-2.4-4c-1.6-1.3-4.9-2.8-9.8-4.7c-5.1-1.8-9.8-4.2-14.2-7.2c-3.1-2.2-5.7-5.1-7.6-8.5c-1.6-3.2-2.4-6.7-2.3-10.2     c0-4.3,1.2-8.4,3.4-12.1c2.5-4,6.2-7.2,10.5-9.2c4.7-2.4,10.6-3.5,17.7-3.5c4.1,0,8.3,0.3,12.4,0.9c3,0.4,5.9,1.2,8.6,2.3     c0.4,0.1,0.8,0.5,1,0.9c0.1,0.4,0.2,0.8,0.2,1.2v16.3c0,0.4-0.2,0.8-0.5,1C192.9,107.1,192.4,107.1,192,106.9z"/> </g> </g> </g> </svg></div>
                                                    <div class="w-12 h-12 p-1 #cacaca border-2 rounded-xl"><svg id="Layer_1" style="enable-background:new 0 0 512 512;" version="1.1" viewBox="0 0 512 512" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:cc="http://creativecommons.org/ns#" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd" xmlns:svg="http://www.w3.org/2000/svg"><defs id="defs19"/><g id="g3021"/><g id="g2990"><g id="g3759"><rect height="512" id="rect2989" rx="70" ry="70" style="fill:#379ad6;fill-opacity:1;stroke:none" transform="scale(-1,-1)" width="512" x="-512" y="-512"/></g><g id="g3015" transform="matrix(1.2330496,0,0,1.2330496,-59.66069,-59.660695)"><polygon id="polygon3962" points="91.809,117.07 122.593,450.579 255.999,486.501 389.402,450.579 420.191,117.07 " style="fill:#ffffff;fill-opacity:1;fill-rule:evenodd" transform="matrix(0.66995146,0,0,0.66995146,84.49242,84.15745)"/><polygon id="polygon3968" points="255.997,144.084 255.997,457.852 256.298,457.933 364.257,428.863 389.175,144.084 " style="fill:#ffffff;fill-opacity:1;fill-rule:evenodd" transform="matrix(0.66995146,0,0,0.66995146,84.49242,84.15745)"/><path d="m 190.7226,143.04082 h 33.95515 v -13.27977 h -19.40246 v -13.29854 h 19.40246 V 101.91049 H 190.7226 v 41.13033 z m 48.4663,-26.57764 c 4.54294,4.54294 6.91189,6.71693 13.48277,13.28849 -3.84016,0 -13.48277,0.0141 -13.48277,0.0127 v 13.27642 h 33.95783 v -13.27974 l -13.56384,-13.29854 h 13.56384 V 101.91049 H 239.1889 c 0,0 0,7.30381 0,14.55269 z m 82.08848,-14.55269 h -33.95984 c 0,0 0,7.30381 0,14.55269 4.54295,4.54294 6.91323,6.71693 13.48412,13.28849 -3.83882,0 -13.48412,0.0141 -13.48412,0.0127 v 13.27642 h 33.95984 v -13.27974 l -13.5645,-13.29854 h 13.5645 v -14.55202 z" id="path4016" style="fill:#ffffff;fill-opacity:1;fill-rule:evenodd"/><path d="m 186.10184,207.69363 4,27.25 69.5,-0.5 -67,28.25 1.75,27 95,0 -2.25,35.5 -30.5,9.25 -31,-8.5 -1.75,-21.25 -27.25,0 3.5,41.75 55.75,16.25 56.75,-15.75 7,-84.25 -64.25,0 66.75,-28.25 2,-27 z" id="path4169" style="fill:#379ad6;fill-opacity:1;stroke:none"/></g></g><g id="Layer_1_1_"/></svg></div>
                                                    <div class="w-12 h-12 p-1 #cacaca border-2 rounded-xl"><svg xmlns="http://www.w3.org/2000/svg" viewBox="-52.5 0 361 361" preserveAspectRatio="xMinYMin meet"><path d="M255.555 70.766l-23.241 260.36-104.47 28.962-104.182-28.922L.445 70.766h255.11z" fill="#E44D26"/><path d="M128 337.95l84.417-23.403 19.86-222.49H128V337.95z" fill="#F16529"/><path d="M82.82 155.932H128v-31.937H47.917l.764 8.568 7.85 88.01H128v-31.937H85.739l-2.919-32.704zM90.018 236.542h-32.06l4.474 50.146 65.421 18.16.147-.04V271.58l-.14.037-35.568-9.604-2.274-25.471z" fill="#EBEBEB"/><path d="M24.18 0h16.23v16.035h14.847V0h16.231v48.558h-16.23v-16.26H40.411v16.26h-16.23V0zM92.83 16.103H78.544V0h44.814v16.103h-14.295v32.455h-16.23V16.103h-.001zM130.47 0h16.923l10.41 17.062L168.203 0h16.93v48.558h-16.164V24.49l-11.166 17.265h-.28L146.35 24.49v24.068h-15.88V0zM193.21 0h16.235v32.508h22.824v16.05h-39.06V0z"/><path d="M127.89 220.573h39.327l-3.708 41.42-35.62 9.614v33.226l65.473-18.145.48-5.396 7.506-84.08.779-8.576H127.89v31.937zM127.89 155.854v.078h77.143l.64-7.178 1.456-16.191.763-8.568H127.89v31.86z" fill="#FFF"/></svg></div>
                                                    <div class="w-12 h-12 p-1 #cacaca border-2 rounded-xl"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" fill="none"> <circle cx="16" cy="16" r="14" fill="#8892BF"/> <path d="M14.4392 10H16.1192L15.6444 12.5242H17.154C17.9819 12.5419 18.5986 12.7269 19.0045 13.0793C19.4184 13.4316 19.5402 14.1014 19.3698 15.0881L18.5541 19.4889H16.8497L17.6288 15.2863C17.7099 14.8457 17.6856 14.533 17.5558 14.348C17.426 14.163 17.146 14.0705 16.7158 14.0705L15.3644 14.0573L14.3661 19.4889H12.6861L14.4392 10Z" fill="white"/> <path fill-rule="evenodd" clip-rule="evenodd" d="M6.74092 12.5243H10.0036C10.9612 12.533 11.6552 12.8327 12.0854 13.4229C12.5156 14.0132 12.6576 14.8193 12.5115 15.8414C12.4548 16.3085 12.3289 16.7665 12.1341 17.2159C11.9474 17.6652 11.6878 18.0704 11.355 18.4317C10.9491 18.8898 10.5149 19.1805 10.0523 19.304C9.58969 19.4274 9.11076 19.489 8.61575 19.489H7.15484L6.69222 22H5L6.74092 12.5243ZM7.43485 17.9956L8.16287 14.0441H8.40879C8.49815 14.0441 8.5914 14.0396 8.6888 14.0309C9.33817 14.0221 9.87774 14.0882 10.308 14.2291C10.7462 14.37 10.8923 14.9031 10.7462 15.8282C10.5678 16.9296 10.2186 17.5727 9.69926 17.7577C9.1799 17.934 8.53053 18.0176 7.75138 18.0088H7.58094C7.53224 18.0088 7.48355 18.0043 7.43485 17.9956Z" fill="white"/> <path fill-rule="evenodd" clip-rule="evenodd" d="M24.4365 12.5243H21.1738L19.4329 22H21.1251L21.5878 19.489H23.0487C23.5437 19.489 24.0226 19.4274 24.4852 19.304C24.9479 19.1805 25.382 18.8898 25.7879 18.4317C26.1207 18.0704 26.3803 17.6652 26.567 17.2159C26.7618 16.7665 26.8877 16.3085 26.9444 15.8414C27.0905 14.8193 26.9486 14.0132 26.5183 13.4229C26.0881 12.8327 25.3942 12.533 24.4365 12.5243ZM22.5958 14.0441L21.8678 17.9956C21.9165 18.0043 21.9652 18.0088 22.0139 18.0088H22.1843C22.9635 18.0176 23.6128 17.934 24.1322 17.7577C24.6515 17.5727 25.0007 16.9296 25.1792 15.8282C25.3253 14.9031 25.1792 14.37 24.7409 14.2291C24.3107 14.0882 23.7711 14.0221 23.1217 14.0309C23.0243 14.0396 22.9311 14.0441 22.8417 14.0441H22.5958Z" fill="white"/> </svg></div>
                                                    <div class="w-12 h-12 p-1 #cacaca border-2 rounded-xl flex justify-center"><svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" viewBox="0 0 200 300" height="100%"><style type="text/css">.fst0{fill:#0acf83}.fst1{fill:#a259ff}.fst2{fill:#f24e1e}.fst3{fill:#ff7262}.fst4{fill:#1abcfe}</style><title>Figma.logo</title><desc>Created using Figma</desc><path id="path0_fill" class="fst0" d="M50 300c27.6 0 50-22.4 50-50v-50H50c-27.6 0-50 22.4-50 50s22.4 50 50 50z"/><path id="path1_fill" class="fst1" d="M0 150c0-27.6 22.4-50 50-50h50v100H50c-27.6 0-50-22.4-50-50z"/><path id="path1_fill_1_" class="fst2" d="M0 50C0 22.4 22.4 0 50 0h50v100H50C22.4 100 0 77.6 0 50z"/><path id="path2_fill" class="fst3" d="M100 0h50c27.6 0 50 22.4 50 50s-22.4 50-50 50h-50V0z"/><path id="path3_fill" class="fst4" d="M200 150c0 27.6-22.4 50-50 50s-50-22.4-50-50 22.4-50 50-50 50 22.4 50 50z"/></svg></div>
                                                    
                                                </div>
                                                <h2 class="text-2xl font-semibold mb-2 mt-10">Links</h2>
                                                <div class="flex flex-wrap gap-2">
                                                    <h2 class="text-blue-500"><a href="https://buildoreno.ca">buildoreno.ca</a></h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <h2 class="text-2xl font-semibold mb-4">Images</h2>
                                    <div class="photo-bar bg-gray-200 p-4 flex space-x-4 overflow-x-auto mb-6 rounded-lg" id="photo-bar">
                                        <img src="./content/project1-1.png" alt="Photo 2" class="w-32 h-32 object-cover rounded-xl">
                                        <img src="./content/project1-2.png" alt="Photo 1" class="w-32 h-32 object-cover rounded-xl">
                                        <img src="./content/project1-3.png" alt="Photo 1" class="w-32 h-32 object-cover rounded-xl">
                                        <img src="./content/project1-4.png" alt="Photo 3" class="w-32 h-32 object-cover rounded-xl">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="scroll-item flex-shrink-0 bg-white rounded-lg shadow-md overflow-hidden relative expandable expand-btn">
                        <img src="./content/pack1.webp" alt="./content/bg.jpg3" class="w-full h-full object-cover expand-exclude">
                        <div class="absolute inset-0 bg-black bg-opacity-50 flex flex-col justify-center items-center text-white p-4 overlay expand-exclude">
                            <h2 class="text-2xl font-bold expand-exclude">Web Game</h2>
                            <p class="mt-2 expand-exclude">Fun Web Based Game</p>
                        </div>
                        <div class="tag-div expand-exclude">
                            <div class="badge rounded">Web Development</div>
                            <div class="badge rounded ml-2">Game</div>
                        </div>
                        <div><!-- add proeject section here -->
                            <div class="container mx-auto px-4 py-8 work-container">
                                <div class="bg-white work-container rounded-lg overflow-hidden px-6">
                                    <div class="p-6 work-p">
                                        <h1 class="text-4xl font-bold mb-4">Web Game</h1>
                                        <p class="text-lg text-gray-500 mb-6">
                                        Creating TipsyGipsy.ca was a deep dive into user design and experience, database management, and game development. The goal was to create a fun, engaging, and relatable game with robust data analytics capabilities.
                                        </p>
                                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 p-4">
                                            <div class="md:col-span-2">
                                                <h2 class="text-2xl font-semibold mb-4">Details</h2>
                                                <ul class="list-disc list-inside text-gray-700">
                                                <div class="flex items-center mb-2 flex-row"><div class="list-point"></div><li>Focused extensively on learning and applying user design principles.</li></div>
                                                <div class="flex items-center mb-2 flex-row"><div class="list-point"></div><li>Created large databases to store game details, packs, and credentials.</li></div>
                                                <div class="flex items-center mb-2 flex-row"><div class="list-point"></div><li>Implemented systems to collect and analyze game statistics.</li></div>
                                                <div class="flex items-center mb-2 flex-row"><div class="list-point"></div><li>Designed gameplay to be engaging, relatable, and fun.</li></div>
                                                <div class="flex items-center mb-2 flex-row"><div class="list-point"></div><li>Ensured the game worked smoothly across different devices.</li></div>
                                                <div class="flex items-center mb-2 flex-row"><div class="list-point"></div><li>Gathered and incorporated user feedback to improve the game.</li></div>
                                                <div class="flex items-center mb-2 flex-row"><div class="list-point"></div><li>Integrated payment system using stripe.</li></div>
                                                <div class="flex items-center mb-2 flex-row"><div class="list-point"></div><li>Performed rigorous testing and debugging to ensure a smooth experience.</li></div>
                                                <div class="flex items-center mb-2 flex-row"><div class="list-point"></div><li>Provided continuous updates based on analytics and user feedback.</li></div>
                                                </ul>
                                            </div>
                                            <div class="md:col-span-1">
                                                <h2 class="text-2xl font-semibold mb-2">Resources Used</h2>
                                                <div class="flex flex-wrap gap-2">
                                                    <div class="w-12 h-12 p-1 #cacaca border-2 rounded-xl"><svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"><title>file_type_js</title><path d="M18.774,19.7a3.727,3.727,0,0,0,3.376,2.078c1.418,0,2.324-.709,2.324-1.688,0-1.173-.931-1.589-2.491-2.272l-.856-.367c-2.469-1.052-4.11-2.37-4.11-5.156,0-2.567,1.956-4.52,5.012-4.52A5.058,5.058,0,0,1,26.9,10.52l-2.665,1.711a2.327,2.327,0,0,0-2.2-1.467,1.489,1.489,0,0,0-1.638,1.467c0,1.027.636,1.442,2.1,2.078l.856.366c2.908,1.247,4.549,2.518,4.549,5.376,0,3.081-2.42,4.769-5.671,4.769a6.575,6.575,0,0,1-6.236-3.5ZM6.686,20c.538.954,1.027,1.76,2.2,1.76,1.124,0,1.834-.44,1.834-2.15V7.975h3.422V19.658c0,3.543-2.078,5.156-5.11,5.156A5.312,5.312,0,0,1,3.9,21.688Z" style="fill:#f5de19"/></svg></div>
                                                    <div class="w-12 h-12 p-1 #cacaca border-2 rounded-xl"><svg xmlns="http://www.w3.org/2000/svg" viewBox="-18.458 -22.75 191.151 191.151"><path d="M-18.458 6.58h191.151v132.49H-18.458V6.58z" fill="none"/><path d="M40.054 113.583h-5.175c-.183-8.735-.687-16.947-1.511-24.642h-.046l-7.879 24.642h-3.94l-7.832-24.642h-.045c-.581 7.388-.947 15.602-1.099 24.642H7.81c.304-10.993 1.068-21.299 2.289-30.919h6.414l7.465 22.719h.046l7.511-22.719h6.137c1.344 11.268 2.138 21.575 2.382 30.919M62.497 90.771c-2.107 11.434-4.887 19.742-8.337 24.928-2.688 3.992-5.633 5.99-8.84 5.99-.855 0-1.91-.258-3.16-.77v-2.757c.611.088 1.328.138 2.152.138 1.498 0 2.702-.412 3.62-1.238 1.098-1.006 1.647-2.137 1.647-3.388 0-.858-.428-2.612-1.282-5.268L42.618 90.77h5.084l4.076 13.19c.916 2.995 1.298 5.086 1.145 6.277 2.229-5.953 3.786-12.444 4.673-19.468h4.901v.002z" fill="#5d87a1"/><path d="M131.382 113.583h-14.7V82.664h4.945v27.113h9.755v3.806zM112.834 114.33l-5.684-2.805c.504-.414.986-.862 1.42-1.381 2.416-2.838 3.621-7.035 3.621-12.594 0-10.229-4.014-15.346-12.045-15.346-3.938 0-7.01 1.298-9.207 3.895-2.414 2.84-3.619 7.022-3.619 12.551 0 5.435 1.068 9.422 3.205 11.951 1.955 2.291 4.902 3.438 8.843 3.438 1.47 0 2.819-.18 4.048-.543l7.4 4.308 2.018-3.474zm-18.413-6.934c-1.252-2.014-1.878-5.248-1.878-9.707 0-7.785 2.365-11.682 7.1-11.682 2.475 0 4.289.932 5.449 2.792 1.25 2.017 1.879 5.222 1.879 9.619 0 7.849-2.367 11.774-7.099 11.774-2.476.001-4.29-.928-5.451-2.796M85.165 105.013c0 2.622-.962 4.773-2.884 6.458-1.924 1.678-4.504 2.519-7.737 2.519-3.024 0-5.956-.966-8.794-2.888l1.329-2.655c2.442 1.223 4.653 1.831 6.638 1.831 1.863 0 3.319-.413 4.375-1.232 1.055-.822 1.684-1.975 1.684-3.433 0-1.837-1.281-3.407-3.631-4.722-2.167-1.19-6.501-3.678-6.501-3.678-2.349-1.712-3.525-3.55-3.525-6.578 0-2.506.877-4.529 2.632-6.068 1.757-1.545 4.024-2.315 6.803-2.315 2.87 0 5.479.769 7.829 2.291l-1.192 2.656c-2.01-.854-3.994-1.281-5.951-1.281-1.585 0-2.809.381-3.66 1.146-.858.762-1.387 1.737-1.387 2.933 0 1.828 1.308 3.418 3.722 4.759 2.196 1.192 6.638 3.723 6.638 3.723 2.409 1.709 3.612 3.53 3.612 6.534" fill="#f8981d"/><path d="M137.59 72.308c-2.99-.076-5.305.225-7.248 1.047-.561.224-1.453.224-1.531.933.303.3.338.784.601 1.198.448.747 1.229 1.752 1.942 2.276.783.6 1.569 1.194 2.393 1.717 1.453.899 3.1 1.422 4.516 2.318.825.521 1.645 1.195 2.471 1.756.406.299.666.784 1.193.971v-.114c-.264-.336-.339-.822-.598-1.196l-1.122-1.082c-1.084-1.456-2.431-2.727-3.884-3.771-1.196-.824-3.812-1.944-4.297-3.322l-.076-.076c.822-.077 1.797-.375 2.578-.604 1.271-.335 2.43-.259 3.734-.594.6-.15 1.195-.338 1.797-.523v-.337c-.676-.673-1.158-1.567-1.869-2.203-1.902-1.643-3.998-3.25-6.164-4.595-1.16-.749-2.652-1.231-3.887-1.868-.445-.225-1.195-.336-1.457-.71-.67-.822-1.047-1.904-1.533-2.877-1.08-2.053-2.129-4.331-3.061-6.502-.674-1.456-1.084-2.91-1.906-4.257-3.85-6.35-8.031-10.196-14.457-13.971-1.381-.786-3.024-1.121-4.779-1.533l-2.803-.148c-.598-.262-1.197-.973-1.719-1.309-2.132-1.344-7.621-4.257-9.189-.411-1.01 2.431 1.494 4.821 2.354 6.054.635.856 1.458 1.83 1.902 2.802.263.635.337 1.309.6 1.98.598 1.644 1.157 3.473 1.943 5.007.41.782.857 1.604 1.381 2.312.3.414.822.597.936 1.272-.521.744-.562 1.867-.861 2.801-1.344 4.221-.819 9.45 1.086 12.552.596.934 2.018 2.99 3.92 2.202 1.684-.672 1.311-2.801 1.795-4.668.111-.451.038-.747.262-1.043v.073c.521 1.045 1.047 2.052 1.53 3.1 1.159 1.829 3.177 3.735 4.858 5.002.895.676 1.604 1.832 2.725 2.245V74.1h-.074c-.227-.335-.559-.485-.857-.745-.674-.673-1.42-1.495-1.943-2.241-1.566-2.093-2.952-4.41-4.182-6.801-.602-1.16-1.121-2.428-1.606-3.586-.226-.447-.226-1.121-.601-1.346-.562.821-1.381 1.532-1.791 2.538-.711 1.609-.785 3.588-1.049 5.646l-.147.072c-1.19-.299-1.604-1.53-2.056-2.575-1.119-2.654-1.307-6.914-.336-9.976.26-.783 1.385-3.249.936-3.995-.225-.715-.973-1.122-1.383-1.685-.482-.708-1.01-1.604-1.346-2.39-.896-2.091-1.347-4.408-2.312-6.498-.451-.974-1.234-1.982-1.868-2.879-.712-1.008-1.495-1.718-2.058-2.913-.186-.411-.447-1.083-.148-1.53.073-.3.225-.412.523-.487.484-.409 1.867.111 2.352.336 1.385.56 2.543 1.083 3.699 1.867.523.375 1.084 1.085 1.755 1.272h.786c1.193.26 2.538.072 3.661.41 1.979.636 3.772 1.569 5.38 2.576 4.893 3.103 8.928 7.512 11.652 12.778.447.858.637 1.644 1.045 2.539.787 1.832 1.76 3.7 2.541 5.493.785 1.755 1.533 3.547 2.654 5.005.559.784 2.805 1.195 3.812 1.606.745.335 1.905.633 2.577 1.044 1.271.783 2.537 1.682 3.732 2.543.595.448 2.465 1.382 2.576 2.13M99.484 39.844a5.82 5.82 0 0 0-1.529.188v.075h.072c.301.597.824 1.011 1.197 1.532.301.599.562 1.193.857 1.791l.072-.074c.527-.373.789-.971.789-1.868-.227-.264-.262-.522-.451-.784-.22-.374-.705-.56-1.007-.86" fill="#5d87a1"/><path d="M141.148 113.578h.774v-3.788h-1.161l-.947 2.585-1.029-2.585h-1.118v3.788h.731v-2.882h.041l1.078 2.882h.557l1.074-2.882v2.882zm-6.235 0h.819v-3.146h1.072v-.643h-3.008v.643h1.115l.002 3.146z" fill="#f8981d"/></svg></div>
                                                    <div class="w-12 h-12 p-1 #cacaca border-2 rounded-xl"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 240 234" style="enable-background:new 0 0 240 234;" xml:space="preserve"> <style type="text/css"> .st0{fill:#001E36;} .st1{fill:#31A8FF;} </style> <g id="Layer_2_1_"> <g id="Surfaces"> <g id="Photo_Surface"> <g id="Outline_no_shadow"> <path class="st0" d="M42.5,0h155C221,0,240,19,240,42.5v149c0,23.5-19,42.5-42.5,42.5h-155C19,234,0,215,0,191.5v-149      C0,19,19,0,42.5,0z"/> </g> </g> </g> <g id="Outlined_Mnemonics_Logos"> <g id="Ps"> <path class="st1" d="M54,164.1V61.2c0-0.7,0.3-1.1,1-1.1c1.7,0,3.3,0,5.6-0.1c2.4-0.1,4.9-0.1,7.6-0.2c2.7-0.1,5.6-0.1,8.7-0.2     c3.1-0.1,6.1-0.1,9.1-0.1c8.2,0,15,1,20.6,3.1c5,1.7,9.6,4.5,13.4,8.2c3.2,3.2,5.7,7.1,7.3,11.4c1.5,4.2,2.3,8.5,2.3,13     c0,8.6-2,15.7-6,21.3c-4,5.6-9.6,9.8-16.1,12.2c-6.8,2.5-14.3,3.4-22.5,3.4c-2.4,0-4,0-5-0.1c-1-0.1-2.4-0.1-4.3-0.1v32.1     c0.1,0.7-0.4,1.3-1.1,1.4c-0.1,0-0.2,0-0.4,0H55.2C54.4,165.4,54,165,54,164.1z M75.8,79.4V113c1.4,0.1,2.7,0.2,3.9,0.2H85     c3.9,0,7.8-0.6,11.5-1.8c3.2-0.9,6-2.8,8.2-5.3c2.1-2.5,3.1-5.9,3.1-10.3c0.1-3.1-0.7-6.2-2.3-8.9c-1.7-2.6-4.1-4.6-7-5.7     c-3.7-1.5-7.7-2.1-11.8-2c-2.6,0-4.9,0-6.8,0.1C77.9,79.2,76.5,79.3,75.8,79.4L75.8,79.4z"/> <path class="st1" d="M192,106.9c-3-1.6-6.2-2.7-9.6-3.4c-3.7-0.8-7.4-1.3-11.2-1.3c-2-0.1-4.1,0.2-6,0.7c-1.3,0.3-2.4,1-3.1,2     c-0.5,0.8-0.8,1.8-0.8,2.7c0,0.9,0.4,1.8,1,2.6c0.9,1.1,2.1,2,3.4,2.7c2.3,1.2,4.7,2.3,7.1,3.3c5.4,1.8,10.6,4.3,15.4,7.3     c3.3,2.1,6,4.9,7.9,8.3c1.6,3.2,2.4,6.7,2.3,10.3c0.1,4.7-1.3,9.4-3.9,13.3c-2.8,4-6.7,7.1-11.2,8.9c-4.9,2.1-10.9,3.2-18.1,3.2     c-4.6,0-9.1-0.4-13.6-1.3c-3.5-0.6-7-1.7-10.2-3.2c-0.7-0.4-1.2-1.1-1.1-1.9v-17.4c0-0.3,0.1-0.7,0.4-0.9     c0.3-0.2,0.6-0.1,0.9,0.1c3.9,2.3,8,3.9,12.4,4.9c3.8,1,7.8,1.5,11.8,1.5c3.8,0,6.5-0.5,8.3-1.4c1.6-0.7,2.7-2.4,2.7-4.2     c0-1.4-0.8-2.7-2.4-4c-1.6-1.3-4.9-2.8-9.8-4.7c-5.1-1.8-9.8-4.2-14.2-7.2c-3.1-2.2-5.7-5.1-7.6-8.5c-1.6-3.2-2.4-6.7-2.3-10.2     c0-4.3,1.2-8.4,3.4-12.1c2.5-4,6.2-7.2,10.5-9.2c4.7-2.4,10.6-3.5,17.7-3.5c4.1,0,8.3,0.3,12.4,0.9c3,0.4,5.9,1.2,8.6,2.3     c0.4,0.1,0.8,0.5,1,0.9c0.1,0.4,0.2,0.8,0.2,1.2v16.3c0,0.4-0.2,0.8-0.5,1C192.9,107.1,192.4,107.1,192,106.9z"/> </g> </g> </g> </svg></div>
                                                    <div class="w-12 h-12 p-1 #cacaca border-2 rounded-xl"><svg id="Layer_1" style="enable-background:new 0 0 512 512;" version="1.1" viewBox="0 0 512 512" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:cc="http://creativecommons.org/ns#" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd" xmlns:svg="http://www.w3.org/2000/svg"><defs id="defs19"/><g id="g3021"/><g id="g2990"><g id="g3759"><rect height="512" id="rect2989" rx="70" ry="70" style="fill:#379ad6;fill-opacity:1;stroke:none" transform="scale(-1,-1)" width="512" x="-512" y="-512"/></g><g id="g3015" transform="matrix(1.2330496,0,0,1.2330496,-59.66069,-59.660695)"><polygon id="polygon3962" points="91.809,117.07 122.593,450.579 255.999,486.501 389.402,450.579 420.191,117.07 " style="fill:#ffffff;fill-opacity:1;fill-rule:evenodd" transform="matrix(0.66995146,0,0,0.66995146,84.49242,84.15745)"/><polygon id="polygon3968" points="255.997,144.084 255.997,457.852 256.298,457.933 364.257,428.863 389.175,144.084 " style="fill:#ffffff;fill-opacity:1;fill-rule:evenodd" transform="matrix(0.66995146,0,0,0.66995146,84.49242,84.15745)"/><path d="m 190.7226,143.04082 h 33.95515 v -13.27977 h -19.40246 v -13.29854 h 19.40246 V 101.91049 H 190.7226 v 41.13033 z m 48.4663,-26.57764 c 4.54294,4.54294 6.91189,6.71693 13.48277,13.28849 -3.84016,0 -13.48277,0.0141 -13.48277,0.0127 v 13.27642 h 33.95783 v -13.27974 l -13.56384,-13.29854 h 13.56384 V 101.91049 H 239.1889 c 0,0 0,7.30381 0,14.55269 z m 82.08848,-14.55269 h -33.95984 c 0,0 0,7.30381 0,14.55269 4.54295,4.54294 6.91323,6.71693 13.48412,13.28849 -3.83882,0 -13.48412,0.0141 -13.48412,0.0127 v 13.27642 h 33.95984 v -13.27974 l -13.5645,-13.29854 h 13.5645 v -14.55202 z" id="path4016" style="fill:#ffffff;fill-opacity:1;fill-rule:evenodd"/><path d="m 186.10184,207.69363 4,27.25 69.5,-0.5 -67,28.25 1.75,27 95,0 -2.25,35.5 -30.5,9.25 -31,-8.5 -1.75,-21.25 -27.25,0 3.5,41.75 55.75,16.25 56.75,-15.75 7,-84.25 -64.25,0 66.75,-28.25 2,-27 z" id="path4169" style="fill:#379ad6;fill-opacity:1;stroke:none"/></g></g><g id="Layer_1_1_"/></svg></div>
                                                    <div class="w-12 h-12 p-1 #cacaca border-2 rounded-xl"><svg xmlns="http://www.w3.org/2000/svg" viewBox="-52.5 0 361 361" preserveAspectRatio="xMinYMin meet"><path d="M255.555 70.766l-23.241 260.36-104.47 28.962-104.182-28.922L.445 70.766h255.11z" fill="#E44D26"/><path d="M128 337.95l84.417-23.403 19.86-222.49H128V337.95z" fill="#F16529"/><path d="M82.82 155.932H128v-31.937H47.917l.764 8.568 7.85 88.01H128v-31.937H85.739l-2.919-32.704zM90.018 236.542h-32.06l4.474 50.146 65.421 18.16.147-.04V271.58l-.14.037-35.568-9.604-2.274-25.471z" fill="#EBEBEB"/><path d="M24.18 0h16.23v16.035h14.847V0h16.231v48.558h-16.23v-16.26H40.411v16.26h-16.23V0zM92.83 16.103H78.544V0h44.814v16.103h-14.295v32.455h-16.23V16.103h-.001zM130.47 0h16.923l10.41 17.062L168.203 0h16.93v48.558h-16.164V24.49l-11.166 17.265h-.28L146.35 24.49v24.068h-15.88V0zM193.21 0h16.235v32.508h22.824v16.05h-39.06V0z"/><path d="M127.89 220.573h39.327l-3.708 41.42-35.62 9.614v33.226l65.473-18.145.48-5.396 7.506-84.08.779-8.576H127.89v31.937zM127.89 155.854v.078h77.143l.64-7.178 1.456-16.191.763-8.568H127.89v31.86z" fill="#FFF"/></svg></div>
                                                    <div class="w-12 h-12 p-1 #cacaca border-2 rounded-xl"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" fill="none"> <circle cx="16" cy="16" r="14" fill="#8892BF"/> <path d="M14.4392 10H16.1192L15.6444 12.5242H17.154C17.9819 12.5419 18.5986 12.7269 19.0045 13.0793C19.4184 13.4316 19.5402 14.1014 19.3698 15.0881L18.5541 19.4889H16.8497L17.6288 15.2863C17.7099 14.8457 17.6856 14.533 17.5558 14.348C17.426 14.163 17.146 14.0705 16.7158 14.0705L15.3644 14.0573L14.3661 19.4889H12.6861L14.4392 10Z" fill="white"/> <path fill-rule="evenodd" clip-rule="evenodd" d="M6.74092 12.5243H10.0036C10.9612 12.533 11.6552 12.8327 12.0854 13.4229C12.5156 14.0132 12.6576 14.8193 12.5115 15.8414C12.4548 16.3085 12.3289 16.7665 12.1341 17.2159C11.9474 17.6652 11.6878 18.0704 11.355 18.4317C10.9491 18.8898 10.5149 19.1805 10.0523 19.304C9.58969 19.4274 9.11076 19.489 8.61575 19.489H7.15484L6.69222 22H5L6.74092 12.5243ZM7.43485 17.9956L8.16287 14.0441H8.40879C8.49815 14.0441 8.5914 14.0396 8.6888 14.0309C9.33817 14.0221 9.87774 14.0882 10.308 14.2291C10.7462 14.37 10.8923 14.9031 10.7462 15.8282C10.5678 16.9296 10.2186 17.5727 9.69926 17.7577C9.1799 17.934 8.53053 18.0176 7.75138 18.0088H7.58094C7.53224 18.0088 7.48355 18.0043 7.43485 17.9956Z" fill="white"/> <path fill-rule="evenodd" clip-rule="evenodd" d="M24.4365 12.5243H21.1738L19.4329 22H21.1251L21.5878 19.489H23.0487C23.5437 19.489 24.0226 19.4274 24.4852 19.304C24.9479 19.1805 25.382 18.8898 25.7879 18.4317C26.1207 18.0704 26.3803 17.6652 26.567 17.2159C26.7618 16.7665 26.8877 16.3085 26.9444 15.8414C27.0905 14.8193 26.9486 14.0132 26.5183 13.4229C26.0881 12.8327 25.3942 12.533 24.4365 12.5243ZM22.5958 14.0441L21.8678 17.9956C21.9165 18.0043 21.9652 18.0088 22.0139 18.0088H22.1843C22.9635 18.0176 23.6128 17.934 24.1322 17.7577C24.6515 17.5727 25.0007 16.9296 25.1792 15.8282C25.3253 14.9031 25.1792 14.37 24.7409 14.2291C24.3107 14.0882 23.7711 14.0221 23.1217 14.0309C23.0243 14.0396 22.9311 14.0441 22.8417 14.0441H22.5958Z" fill="white"/> </svg></div>
                                                    <div class="w-12 h-12 p-1 #cacaca border-2 rounded-xl"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1024 1024"> <circle cx="512" cy="512" r="512" style="fill:#635bff"/> <path d="M781.67 515.75c0-38.35-18.58-68.62-54.08-68.62s-57.23 30.26-57.23 68.32c0 45.09 25.47 67.87 62 67.87 17.83 0 31.31-4 41.5-9.74v-30c-10.19 5.09-21.87 8.24-36.7 8.24-14.53 0-27.42-5.09-29.06-22.77h73.26c.01-1.92.31-9.71.31-13.3zm-74-14.23c0-16.93 10.34-24 19.78-24 9.14 0 18.88 7 18.88 24zm-95.14-54.39a42.32 42.32 0 0 0-29.36 11.69l-1.95-9.29h-33v174.68l37.45-7.94.15-42.4c5.39 3.9 13.33 9.44 26.52 9.44 26.82 0 51.24-21.57 51.24-69.06-.12-43.45-24.84-67.12-51.05-67.12zm-9 103.22c-8.84 0-14.08-3.15-17.68-7l-.15-55.58c3.9-4.34 9.29-7.34 17.83-7.34 13.63 0 23.07 15.28 23.07 34.91.01 20.03-9.28 35.01-23.06 35.01zM496.72 438.29l37.6-8.09v-30.41l-37.6 7.94v30.56zm0 11.39h37.6v131.09h-37.6zm-40.3 11.08L454 449.68h-32.34v131.08h37.45v-88.84c8.84-11.54 23.82-9.44 28.46-7.79v-34.45c-4.78-1.8-22.31-5.1-31.15 11.08zm-74.91-43.59L345 425l-.15 120c0 22.17 16.63 38.5 38.8 38.5 12.28 0 21.27-2.25 26.22-4.94v-30.45c-4.79 1.95-28.46 8.84-28.46-13.33v-53.19h28.46v-31.91h-28.51zm-101.27 70.56c0-5.84 4.79-8.09 12.73-8.09a83.56 83.56 0 0 1 37.15 9.59V454a98.8 98.8 0 0 0-37.12-6.87c-30.41 0-50.64 15.88-50.64 42.4 0 41.35 56.93 34.76 56.93 52.58 0 6.89-6 9.14-14.38 9.14-12.43 0-28.32-5.09-40.9-12v35.66a103.85 103.85 0 0 0 40.9 8.54c31.16 0 52.58-15.43 52.58-42.25-.17-44.63-57.25-36.69-57.25-53.47z" style="fill:#fff"/> </svg></div>
                                                    <div class="w-12 h-12 p-1 #cacaca border-2 rounded-xl"><svg xmlns="http://www.w3.org/2000/svg" fill="#000000" viewBox="0 0 24 24" role="img"><title>OpenAI icon</title><path d="M22.2819 9.8211a5.9847 5.9847 0 0 0-.5157-4.9108 6.0462 6.0462 0 0 0-6.5098-2.9A6.0651 6.0651 0 0 0 4.9807 4.1818a5.9847 5.9847 0 0 0-3.9977 2.9 6.0462 6.0462 0 0 0 .7427 7.0966 5.98 5.98 0 0 0 .511 4.9107 6.051 6.051 0 0 0 6.5146 2.9001A5.9847 5.9847 0 0 0 13.2599 24a6.0557 6.0557 0 0 0 5.7718-4.2058 5.9894 5.9894 0 0 0 3.9977-2.9001 6.0557 6.0557 0 0 0-.7475-7.0729zm-9.022 12.6081a4.4755 4.4755 0 0 1-2.8764-1.0408l.1419-.0804 4.7783-2.7582a.7948.7948 0 0 0 .3927-.6813v-6.7369l2.02 1.1686a.071.071 0 0 1 .038.052v5.5826a4.504 4.504 0 0 1-4.4945 4.4944zm-9.6607-4.1254a4.4708 4.4708 0 0 1-.5346-3.0137l.142.0852 4.783 2.7582a.7712.7712 0 0 0 .7806 0l5.8428-3.3685v2.3324a.0804.0804 0 0 1-.0332.0615L9.74 19.9502a4.4992 4.4992 0 0 1-6.1408-1.6464zM2.3408 7.8956a4.485 4.485 0 0 1 2.3655-1.9728V11.6a.7664.7664 0 0 0 .3879.6765l5.8144 3.3543-2.0201 1.1685a.0757.0757 0 0 1-.071 0l-4.8303-2.7865A4.504 4.504 0 0 1 2.3408 7.872zm16.5963 3.8558L13.1038 8.364 15.1192 7.2a.0757.0757 0 0 1 .071 0l4.8303 2.7913a4.4944 4.4944 0 0 1-.6765 8.1042v-5.6772a.79.79 0 0 0-.407-.667zm2.0107-3.0231l-.142-.0852-4.7735-2.7818a.7759.7759 0 0 0-.7854 0L9.409 9.2297V6.8974a.0662.0662 0 0 1 .0284-.0615l4.8303-2.7866a4.4992 4.4992 0 0 1 6.6802 4.66zM8.3065 12.863l-2.02-1.1638a.0804.0804 0 0 1-.038-.0567V6.0742a4.4992 4.4992 0 0 1 7.3757-3.4537l-.142.0805L8.704 5.459a.7948.7948 0 0 0-.3927.6813zm1.0976-2.3654l2.602-1.4998 2.6069 1.4998v2.9994l-2.5974 1.4997-2.6067-1.4997Z"/></svg></div>
                                                </div>
                                                <h2 class="text-2xl font-semibold mb-2 mt-10">Links</h2>
                                                <div class="flex flex-wrap gap-2">
                                                    <h2 class="text-blue-500"><a href="https://tipsygipsy.ca">tipsygipsy.ca</a></h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <h2 class="text-2xl font-semibold mb-4">Images</h2>
                                    <div class="photo-bar bg-gray-200 p-4 flex space-x-4 overflow-x-auto mb-6 rounded-lg" id="photo-bar">
                                        <img src="./content/tg.png" alt="Photo 2" class="w-32 h-32 object-cover rounded-xl">
                                        <img src="./content/tg1.png" alt="Photo 1" class="w-32 h-32 object-cover rounded-xl">
                                        <img src="./content/tg2.png" alt="Photo 1" class="w-32 h-32 object-cover rounded-xl">
                                        <img src="./content/tg3.png" alt="Photo 3" class="w-32 h-32 object-cover rounded-xl">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="scroll-item flex-shrink-0 bg-white rounded-lg shadow-md overflow-hidden relative expandable expand-btn">
                        <img src="./content/keychain.png" alt="./content/bg.jpg3" class="w-full h-full object-cover expand-exclude">
                        <div class="absolute inset-0 bg-black bg-opacity-50 flex flex-col justify-center items-center text-white p-4 overlay expand-exclude">
                            <h2 class="text-2xl font-bold expand-exclude">Online Store Expirmenets</h2>
                            <p class="mt-2 expand-exclude">Creating Store & Products</p>
                        </div>
                        <div class="tag-div expand-exclude">
                            <div class="badge rounded">Online Store</div>
                            <div class="badge rounded ml-2">Products</div>
                        </div>
                        <div><!-- add proeject section here -->
                            <div class="container mx-auto px-4 py-8 work-container">
                                <div class="bg-white work-container rounded-lg overflow-hidden px-6">
                                    <div class="p-6 work-p">
                                        <h1 class="text-4xl font-bold mb-4">Online Store Expirmenets</h1>
                                        <p class="text-lg text-gray-500 mb-6">
                                        Creating web stores and products was a creative learning journey for me. I explored market trends, experimented with designs, learned 3D modeling and rendering, and used mockups to create engaging online stores.
                                        </p>
                                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 p-4">
                                            <div class="md:col-span-2">
                                                <h2 class="text-2xl font-semibold mb-4">Details</h2>
                                                <ul class="list-disc list-inside text-gray-700">
                                                <div class="flex items-center mb-2 flex-row"><div class="list-point"></div><li>Dived into market research to see what's trending and in demand.</li></div>
                                                <div class="flex items-center mb-2 flex-row"><div class="list-point"></div><li>Had fun brainstorming and creating unique store designs.</li></div>
                                                <div class="flex items-center mb-2 flex-row"><div class="list-point"></div><li>Searched for cool products and managed inventory.</li></div>
                                                <div class="flex items-center mb-2 flex-row"><div class="list-point"></div><li>Learned a lot by building the store using modern e-commerce tools.</li></div>
                                                <div class="flex items-center mb-2 flex-row"><div class="list-point"></div><li>Integrated secure payment options and learned about online security.</li></div>
                                                <div class="flex items-center mb-2 flex-row"><div class="list-point"></div><li>Enjoyed writing product descriptions and taking photos.</li></div>
                                                <div class="flex items-center mb-2 flex-row"><div class="list-point"></div><li>Tested the stores thoroughly to make sure everything worked smoothly.</li></div>
                                                <div class="flex items-center mb-2 flex-row"><div class="list-point"></div><li>Shared the stores with friends and gathered their feedback.</li></div>
                                                <div class="flex items-center mb-2 flex-row"><div class="list-point"></div><li>Learned how to 3D model and render products.</li></div>
                                                <div class="flex items-center mb-2 flex-row"><div class="list-point"></div><li>Used mockups to visualize products in real-world scenarios.</li></div>

                                                </ul>
                                            </div>
                                            <div class="md:col-span-1">
                                                <h2 class="text-2xl font-semibold mb-2">Resources Used</h2>
                                                <div class="flex flex-wrap gap-2">
                                                    <div class="w-12 h-12 p-1 #cacaca border-2 rounded-xl"><svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"><title>file_type_js</title><path d="M18.774,19.7a3.727,3.727,0,0,0,3.376,2.078c1.418,0,2.324-.709,2.324-1.688,0-1.173-.931-1.589-2.491-2.272l-.856-.367c-2.469-1.052-4.11-2.37-4.11-5.156,0-2.567,1.956-4.52,5.012-4.52A5.058,5.058,0,0,1,26.9,10.52l-2.665,1.711a2.327,2.327,0,0,0-2.2-1.467,1.489,1.489,0,0,0-1.638,1.467c0,1.027.636,1.442,2.1,2.078l.856.366c2.908,1.247,4.549,2.518,4.549,5.376,0,3.081-2.42,4.769-5.671,4.769a6.575,6.575,0,0,1-6.236-3.5ZM6.686,20c.538.954,1.027,1.76,2.2,1.76,1.124,0,1.834-.44,1.834-2.15V7.975h3.422V19.658c0,3.543-2.078,5.156-5.11,5.156A5.312,5.312,0,0,1,3.9,21.688Z" style="fill:#f5de19"/></svg></div>
                                                    <div class="w-12 h-12 p-1 #cacaca border-2 rounded-xl"><svg xmlns="http://www.w3.org/2000/svg" viewBox="-18.458 -22.75 191.151 191.151"><path d="M-18.458 6.58h191.151v132.49H-18.458V6.58z" fill="none"/><path d="M40.054 113.583h-5.175c-.183-8.735-.687-16.947-1.511-24.642h-.046l-7.879 24.642h-3.94l-7.832-24.642h-.045c-.581 7.388-.947 15.602-1.099 24.642H7.81c.304-10.993 1.068-21.299 2.289-30.919h6.414l7.465 22.719h.046l7.511-22.719h6.137c1.344 11.268 2.138 21.575 2.382 30.919M62.497 90.771c-2.107 11.434-4.887 19.742-8.337 24.928-2.688 3.992-5.633 5.99-8.84 5.99-.855 0-1.91-.258-3.16-.77v-2.757c.611.088 1.328.138 2.152.138 1.498 0 2.702-.412 3.62-1.238 1.098-1.006 1.647-2.137 1.647-3.388 0-.858-.428-2.612-1.282-5.268L42.618 90.77h5.084l4.076 13.19c.916 2.995 1.298 5.086 1.145 6.277 2.229-5.953 3.786-12.444 4.673-19.468h4.901v.002z" fill="#5d87a1"/><path d="M131.382 113.583h-14.7V82.664h4.945v27.113h9.755v3.806zM112.834 114.33l-5.684-2.805c.504-.414.986-.862 1.42-1.381 2.416-2.838 3.621-7.035 3.621-12.594 0-10.229-4.014-15.346-12.045-15.346-3.938 0-7.01 1.298-9.207 3.895-2.414 2.84-3.619 7.022-3.619 12.551 0 5.435 1.068 9.422 3.205 11.951 1.955 2.291 4.902 3.438 8.843 3.438 1.47 0 2.819-.18 4.048-.543l7.4 4.308 2.018-3.474zm-18.413-6.934c-1.252-2.014-1.878-5.248-1.878-9.707 0-7.785 2.365-11.682 7.1-11.682 2.475 0 4.289.932 5.449 2.792 1.25 2.017 1.879 5.222 1.879 9.619 0 7.849-2.367 11.774-7.099 11.774-2.476.001-4.29-.928-5.451-2.796M85.165 105.013c0 2.622-.962 4.773-2.884 6.458-1.924 1.678-4.504 2.519-7.737 2.519-3.024 0-5.956-.966-8.794-2.888l1.329-2.655c2.442 1.223 4.653 1.831 6.638 1.831 1.863 0 3.319-.413 4.375-1.232 1.055-.822 1.684-1.975 1.684-3.433 0-1.837-1.281-3.407-3.631-4.722-2.167-1.19-6.501-3.678-6.501-3.678-2.349-1.712-3.525-3.55-3.525-6.578 0-2.506.877-4.529 2.632-6.068 1.757-1.545 4.024-2.315 6.803-2.315 2.87 0 5.479.769 7.829 2.291l-1.192 2.656c-2.01-.854-3.994-1.281-5.951-1.281-1.585 0-2.809.381-3.66 1.146-.858.762-1.387 1.737-1.387 2.933 0 1.828 1.308 3.418 3.722 4.759 2.196 1.192 6.638 3.723 6.638 3.723 2.409 1.709 3.612 3.53 3.612 6.534" fill="#f8981d"/><path d="M137.59 72.308c-2.99-.076-5.305.225-7.248 1.047-.561.224-1.453.224-1.531.933.303.3.338.784.601 1.198.448.747 1.229 1.752 1.942 2.276.783.6 1.569 1.194 2.393 1.717 1.453.899 3.1 1.422 4.516 2.318.825.521 1.645 1.195 2.471 1.756.406.299.666.784 1.193.971v-.114c-.264-.336-.339-.822-.598-1.196l-1.122-1.082c-1.084-1.456-2.431-2.727-3.884-3.771-1.196-.824-3.812-1.944-4.297-3.322l-.076-.076c.822-.077 1.797-.375 2.578-.604 1.271-.335 2.43-.259 3.734-.594.6-.15 1.195-.338 1.797-.523v-.337c-.676-.673-1.158-1.567-1.869-2.203-1.902-1.643-3.998-3.25-6.164-4.595-1.16-.749-2.652-1.231-3.887-1.868-.445-.225-1.195-.336-1.457-.71-.67-.822-1.047-1.904-1.533-2.877-1.08-2.053-2.129-4.331-3.061-6.502-.674-1.456-1.084-2.91-1.906-4.257-3.85-6.35-8.031-10.196-14.457-13.971-1.381-.786-3.024-1.121-4.779-1.533l-2.803-.148c-.598-.262-1.197-.973-1.719-1.309-2.132-1.344-7.621-4.257-9.189-.411-1.01 2.431 1.494 4.821 2.354 6.054.635.856 1.458 1.83 1.902 2.802.263.635.337 1.309.6 1.98.598 1.644 1.157 3.473 1.943 5.007.41.782.857 1.604 1.381 2.312.3.414.822.597.936 1.272-.521.744-.562 1.867-.861 2.801-1.344 4.221-.819 9.45 1.086 12.552.596.934 2.018 2.99 3.92 2.202 1.684-.672 1.311-2.801 1.795-4.668.111-.451.038-.747.262-1.043v.073c.521 1.045 1.047 2.052 1.53 3.1 1.159 1.829 3.177 3.735 4.858 5.002.895.676 1.604 1.832 2.725 2.245V74.1h-.074c-.227-.335-.559-.485-.857-.745-.674-.673-1.42-1.495-1.943-2.241-1.566-2.093-2.952-4.41-4.182-6.801-.602-1.16-1.121-2.428-1.606-3.586-.226-.447-.226-1.121-.601-1.346-.562.821-1.381 1.532-1.791 2.538-.711 1.609-.785 3.588-1.049 5.646l-.147.072c-1.19-.299-1.604-1.53-2.056-2.575-1.119-2.654-1.307-6.914-.336-9.976.26-.783 1.385-3.249.936-3.995-.225-.715-.973-1.122-1.383-1.685-.482-.708-1.01-1.604-1.346-2.39-.896-2.091-1.347-4.408-2.312-6.498-.451-.974-1.234-1.982-1.868-2.879-.712-1.008-1.495-1.718-2.058-2.913-.186-.411-.447-1.083-.148-1.53.073-.3.225-.412.523-.487.484-.409 1.867.111 2.352.336 1.385.56 2.543 1.083 3.699 1.867.523.375 1.084 1.085 1.755 1.272h.786c1.193.26 2.538.072 3.661.41 1.979.636 3.772 1.569 5.38 2.576 4.893 3.103 8.928 7.512 11.652 12.778.447.858.637 1.644 1.045 2.539.787 1.832 1.76 3.7 2.541 5.493.785 1.755 1.533 3.547 2.654 5.005.559.784 2.805 1.195 3.812 1.606.745.335 1.905.633 2.577 1.044 1.271.783 2.537 1.682 3.732 2.543.595.448 2.465 1.382 2.576 2.13M99.484 39.844a5.82 5.82 0 0 0-1.529.188v.075h.072c.301.597.824 1.011 1.197 1.532.301.599.562 1.193.857 1.791l.072-.074c.527-.373.789-.971.789-1.868-.227-.264-.262-.522-.451-.784-.22-.374-.705-.56-1.007-.86" fill="#5d87a1"/><path d="M141.148 113.578h.774v-3.788h-1.161l-.947 2.585-1.029-2.585h-1.118v3.788h.731v-2.882h.041l1.078 2.882h.557l1.074-2.882v2.882zm-6.235 0h.819v-3.146h1.072v-.643h-3.008v.643h1.115l.002 3.146z" fill="#f8981d"/></svg></div>
                                                    <div class="w-12 h-12 p-1 #cacaca border-2 rounded-xl"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 240 234" style="enable-background:new 0 0 240 234;" xml:space="preserve"> <style type="text/css"> .st0{fill:#001E36;} .st1{fill:#31A8FF;} </style> <g id="Layer_2_1_"> <g id="Surfaces"> <g id="Photo_Surface"> <g id="Outline_no_shadow"> <path class="st0" d="M42.5,0h155C221,0,240,19,240,42.5v149c0,23.5-19,42.5-42.5,42.5h-155C19,234,0,215,0,191.5v-149      C0,19,19,0,42.5,0z"/> </g> </g> </g> <g id="Outlined_Mnemonics_Logos"> <g id="Ps"> <path class="st1" d="M54,164.1V61.2c0-0.7,0.3-1.1,1-1.1c1.7,0,3.3,0,5.6-0.1c2.4-0.1,4.9-0.1,7.6-0.2c2.7-0.1,5.6-0.1,8.7-0.2     c3.1-0.1,6.1-0.1,9.1-0.1c8.2,0,15,1,20.6,3.1c5,1.7,9.6,4.5,13.4,8.2c3.2,3.2,5.7,7.1,7.3,11.4c1.5,4.2,2.3,8.5,2.3,13     c0,8.6-2,15.7-6,21.3c-4,5.6-9.6,9.8-16.1,12.2c-6.8,2.5-14.3,3.4-22.5,3.4c-2.4,0-4,0-5-0.1c-1-0.1-2.4-0.1-4.3-0.1v32.1     c0.1,0.7-0.4,1.3-1.1,1.4c-0.1,0-0.2,0-0.4,0H55.2C54.4,165.4,54,165,54,164.1z M75.8,79.4V113c1.4,0.1,2.7,0.2,3.9,0.2H85     c3.9,0,7.8-0.6,11.5-1.8c3.2-0.9,6-2.8,8.2-5.3c2.1-2.5,3.1-5.9,3.1-10.3c0.1-3.1-0.7-6.2-2.3-8.9c-1.7-2.6-4.1-4.6-7-5.7     c-3.7-1.5-7.7-2.1-11.8-2c-2.6,0-4.9,0-6.8,0.1C77.9,79.2,76.5,79.3,75.8,79.4L75.8,79.4z"/> <path class="st1" d="M192,106.9c-3-1.6-6.2-2.7-9.6-3.4c-3.7-0.8-7.4-1.3-11.2-1.3c-2-0.1-4.1,0.2-6,0.7c-1.3,0.3-2.4,1-3.1,2     c-0.5,0.8-0.8,1.8-0.8,2.7c0,0.9,0.4,1.8,1,2.6c0.9,1.1,2.1,2,3.4,2.7c2.3,1.2,4.7,2.3,7.1,3.3c5.4,1.8,10.6,4.3,15.4,7.3     c3.3,2.1,6,4.9,7.9,8.3c1.6,3.2,2.4,6.7,2.3,10.3c0.1,4.7-1.3,9.4-3.9,13.3c-2.8,4-6.7,7.1-11.2,8.9c-4.9,2.1-10.9,3.2-18.1,3.2     c-4.6,0-9.1-0.4-13.6-1.3c-3.5-0.6-7-1.7-10.2-3.2c-0.7-0.4-1.2-1.1-1.1-1.9v-17.4c0-0.3,0.1-0.7,0.4-0.9     c0.3-0.2,0.6-0.1,0.9,0.1c3.9,2.3,8,3.9,12.4,4.9c3.8,1,7.8,1.5,11.8,1.5c3.8,0,6.5-0.5,8.3-1.4c1.6-0.7,2.7-2.4,2.7-4.2     c0-1.4-0.8-2.7-2.4-4c-1.6-1.3-4.9-2.8-9.8-4.7c-5.1-1.8-9.8-4.2-14.2-7.2c-3.1-2.2-5.7-5.1-7.6-8.5c-1.6-3.2-2.4-6.7-2.3-10.2     c0-4.3,1.2-8.4,3.4-12.1c2.5-4,6.2-7.2,10.5-9.2c4.7-2.4,10.6-3.5,17.7-3.5c4.1,0,8.3,0.3,12.4,0.9c3,0.4,5.9,1.2,8.6,2.3     c0.4,0.1,0.8,0.5,1,0.9c0.1,0.4,0.2,0.8,0.2,1.2v16.3c0,0.4-0.2,0.8-0.5,1C192.9,107.1,192.4,107.1,192,106.9z"/> </g> </g> </g> </svg></div>
                                                    <div class="w-12 h-12 p-1 #cacaca border-2 rounded-xl"><svg id="Layer_1" style="enable-background:new 0 0 512 512;" version="1.1" viewBox="0 0 512 512" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:cc="http://creativecommons.org/ns#" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd" xmlns:svg="http://www.w3.org/2000/svg"><defs id="defs19"/><g id="g3021"/><g id="g2990"><g id="g3759"><rect height="512" id="rect2989" rx="70" ry="70" style="fill:#379ad6;fill-opacity:1;stroke:none" transform="scale(-1,-1)" width="512" x="-512" y="-512"/></g><g id="g3015" transform="matrix(1.2330496,0,0,1.2330496,-59.66069,-59.660695)"><polygon id="polygon3962" points="91.809,117.07 122.593,450.579 255.999,486.501 389.402,450.579 420.191,117.07 " style="fill:#ffffff;fill-opacity:1;fill-rule:evenodd" transform="matrix(0.66995146,0,0,0.66995146,84.49242,84.15745)"/><polygon id="polygon3968" points="255.997,144.084 255.997,457.852 256.298,457.933 364.257,428.863 389.175,144.084 " style="fill:#ffffff;fill-opacity:1;fill-rule:evenodd" transform="matrix(0.66995146,0,0,0.66995146,84.49242,84.15745)"/><path d="m 190.7226,143.04082 h 33.95515 v -13.27977 h -19.40246 v -13.29854 h 19.40246 V 101.91049 H 190.7226 v 41.13033 z m 48.4663,-26.57764 c 4.54294,4.54294 6.91189,6.71693 13.48277,13.28849 -3.84016,0 -13.48277,0.0141 -13.48277,0.0127 v 13.27642 h 33.95783 v -13.27974 l -13.56384,-13.29854 h 13.56384 V 101.91049 H 239.1889 c 0,0 0,7.30381 0,14.55269 z m 82.08848,-14.55269 h -33.95984 c 0,0 0,7.30381 0,14.55269 4.54295,4.54294 6.91323,6.71693 13.48412,13.28849 -3.83882,0 -13.48412,0.0141 -13.48412,0.0127 v 13.27642 h 33.95984 v -13.27974 l -13.5645,-13.29854 h 13.5645 v -14.55202 z" id="path4016" style="fill:#ffffff;fill-opacity:1;fill-rule:evenodd"/><path d="m 186.10184,207.69363 4,27.25 69.5,-0.5 -67,28.25 1.75,27 95,0 -2.25,35.5 -30.5,9.25 -31,-8.5 -1.75,-21.25 -27.25,0 3.5,41.75 55.75,16.25 56.75,-15.75 7,-84.25 -64.25,0 66.75,-28.25 2,-27 z" id="path4169" style="fill:#379ad6;fill-opacity:1;stroke:none"/></g></g><g id="Layer_1_1_"/></svg></div>
                                                    <div class="w-12 h-12 p-1 #cacaca border-2 rounded-xl"><svg xmlns="http://www.w3.org/2000/svg" viewBox="-52.5 0 361 361" preserveAspectRatio="xMinYMin meet"><path d="M255.555 70.766l-23.241 260.36-104.47 28.962-104.182-28.922L.445 70.766h255.11z" fill="#E44D26"/><path d="M128 337.95l84.417-23.403 19.86-222.49H128V337.95z" fill="#F16529"/><path d="M82.82 155.932H128v-31.937H47.917l.764 8.568 7.85 88.01H128v-31.937H85.739l-2.919-32.704zM90.018 236.542h-32.06l4.474 50.146 65.421 18.16.147-.04V271.58l-.14.037-35.568-9.604-2.274-25.471z" fill="#EBEBEB"/><path d="M24.18 0h16.23v16.035h14.847V0h16.231v48.558h-16.23v-16.26H40.411v16.26h-16.23V0zM92.83 16.103H78.544V0h44.814v16.103h-14.295v32.455h-16.23V16.103h-.001zM130.47 0h16.923l10.41 17.062L168.203 0h16.93v48.558h-16.164V24.49l-11.166 17.265h-.28L146.35 24.49v24.068h-15.88V0zM193.21 0h16.235v32.508h22.824v16.05h-39.06V0z"/><path d="M127.89 220.573h39.327l-3.708 41.42-35.62 9.614v33.226l65.473-18.145.48-5.396 7.506-84.08.779-8.576H127.89v31.937zM127.89 155.854v.078h77.143l.64-7.178 1.456-16.191.763-8.568H127.89v31.86z" fill="#FFF"/></svg></div>
                                                    <div class="w-12 h-12 p-1 #cacaca border-2 rounded-xl"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" fill="none"> <circle cx="16" cy="16" r="14" fill="#8892BF"/> <path d="M14.4392 10H16.1192L15.6444 12.5242H17.154C17.9819 12.5419 18.5986 12.7269 19.0045 13.0793C19.4184 13.4316 19.5402 14.1014 19.3698 15.0881L18.5541 19.4889H16.8497L17.6288 15.2863C17.7099 14.8457 17.6856 14.533 17.5558 14.348C17.426 14.163 17.146 14.0705 16.7158 14.0705L15.3644 14.0573L14.3661 19.4889H12.6861L14.4392 10Z" fill="white"/> <path fill-rule="evenodd" clip-rule="evenodd" d="M6.74092 12.5243H10.0036C10.9612 12.533 11.6552 12.8327 12.0854 13.4229C12.5156 14.0132 12.6576 14.8193 12.5115 15.8414C12.4548 16.3085 12.3289 16.7665 12.1341 17.2159C11.9474 17.6652 11.6878 18.0704 11.355 18.4317C10.9491 18.8898 10.5149 19.1805 10.0523 19.304C9.58969 19.4274 9.11076 19.489 8.61575 19.489H7.15484L6.69222 22H5L6.74092 12.5243ZM7.43485 17.9956L8.16287 14.0441H8.40879C8.49815 14.0441 8.5914 14.0396 8.6888 14.0309C9.33817 14.0221 9.87774 14.0882 10.308 14.2291C10.7462 14.37 10.8923 14.9031 10.7462 15.8282C10.5678 16.9296 10.2186 17.5727 9.69926 17.7577C9.1799 17.934 8.53053 18.0176 7.75138 18.0088H7.58094C7.53224 18.0088 7.48355 18.0043 7.43485 17.9956Z" fill="white"/> <path fill-rule="evenodd" clip-rule="evenodd" d="M24.4365 12.5243H21.1738L19.4329 22H21.1251L21.5878 19.489H23.0487C23.5437 19.489 24.0226 19.4274 24.4852 19.304C24.9479 19.1805 25.382 18.8898 25.7879 18.4317C26.1207 18.0704 26.3803 17.6652 26.567 17.2159C26.7618 16.7665 26.8877 16.3085 26.9444 15.8414C27.0905 14.8193 26.9486 14.0132 26.5183 13.4229C26.0881 12.8327 25.3942 12.533 24.4365 12.5243ZM22.5958 14.0441L21.8678 17.9956C21.9165 18.0043 21.9652 18.0088 22.0139 18.0088H22.1843C22.9635 18.0176 23.6128 17.934 24.1322 17.7577C24.6515 17.5727 25.0007 16.9296 25.1792 15.8282C25.3253 14.9031 25.1792 14.37 24.7409 14.2291C24.3107 14.0882 23.7711 14.0221 23.1217 14.0309C23.0243 14.0396 22.9311 14.0441 22.8417 14.0441H22.5958Z" fill="white"/> </svg></div>
                                                    <div class="w-12 h-12 p-1 #cacaca border-2 rounded-xl"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1024 1024"> <circle cx="512" cy="512" r="512" style="fill:#635bff"/> <path d="M781.67 515.75c0-38.35-18.58-68.62-54.08-68.62s-57.23 30.26-57.23 68.32c0 45.09 25.47 67.87 62 67.87 17.83 0 31.31-4 41.5-9.74v-30c-10.19 5.09-21.87 8.24-36.7 8.24-14.53 0-27.42-5.09-29.06-22.77h73.26c.01-1.92.31-9.71.31-13.3zm-74-14.23c0-16.93 10.34-24 19.78-24 9.14 0 18.88 7 18.88 24zm-95.14-54.39a42.32 42.32 0 0 0-29.36 11.69l-1.95-9.29h-33v174.68l37.45-7.94.15-42.4c5.39 3.9 13.33 9.44 26.52 9.44 26.82 0 51.24-21.57 51.24-69.06-.12-43.45-24.84-67.12-51.05-67.12zm-9 103.22c-8.84 0-14.08-3.15-17.68-7l-.15-55.58c3.9-4.34 9.29-7.34 17.83-7.34 13.63 0 23.07 15.28 23.07 34.91.01 20.03-9.28 35.01-23.06 35.01zM496.72 438.29l37.6-8.09v-30.41l-37.6 7.94v30.56zm0 11.39h37.6v131.09h-37.6zm-40.3 11.08L454 449.68h-32.34v131.08h37.45v-88.84c8.84-11.54 23.82-9.44 28.46-7.79v-34.45c-4.78-1.8-22.31-5.1-31.15 11.08zm-74.91-43.59L345 425l-.15 120c0 22.17 16.63 38.5 38.8 38.5 12.28 0 21.27-2.25 26.22-4.94v-30.45c-4.79 1.95-28.46 8.84-28.46-13.33v-53.19h28.46v-31.91h-28.51zm-101.27 70.56c0-5.84 4.79-8.09 12.73-8.09a83.56 83.56 0 0 1 37.15 9.59V454a98.8 98.8 0 0 0-37.12-6.87c-30.41 0-50.64 15.88-50.64 42.4 0 41.35 56.93 34.76 56.93 52.58 0 6.89-6 9.14-14.38 9.14-12.43 0-28.32-5.09-40.9-12v35.66a103.85 103.85 0 0 0 40.9 8.54c31.16 0 52.58-15.43 52.58-42.25-.17-44.63-57.25-36.69-57.25-53.47z" style="fill:#fff"/> </svg></div>
                                                    <div class="w-12 h-12 p-1 #cacaca border-2 rounded-xl"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0.499 48.118 511.002 415.763"><path d="M510.003 279.642c-2.998-21.097-10.305-41.104-21.725-59.459-9.959-16.019-22.738-30.266-37.991-42.375l.041-.038L290.133 54.731a4.569 4.569 0 0 0-.361-.287c-5.326-4.08-12.537-6.325-20.297-6.325-7.77 0-15.263 2.25-21.088 6.338-6.263 4.375-9.843 10.18-10.093 16.359-.229 5.765 2.521 11.312 7.764 15.636 10.31 8.135 20.597 16.447 30.898 24.769 9.997 8.08 20.298 16.401 30.549 24.502l-196.213-.133c-22.439 0-37.718 10.537-40.861 28.178-1.381 7.727 1.056 16.223 6.504 22.73 5.78 6.898 14.172 10.703 23.629 10.703l14.958.01c20.664 0 41.419-.051 62.146-.101l19.766-.046-178.08 131.748-.707.517C8.7 336.953 2.188 347.642.783 358.653c-1.065 8.342.881 15.965 5.63 22.053 5.66 7.258 14.497 11.25 24.885 11.25 10.205 0 20.618-3.867 29.334-10.908l96.166-78.7c-.411 3.843-.91 9.481-.853 13.573.108 6.479 2.188 19.479 5.481 30.033 6.804 21.69 18.265 41.535 34.063 58.963 16.438 18.132 36.458 32.509 59.5 42.722 24.36 10.774 50.547 16.243 77.836 16.243h.253c27.376-.066 53.646-5.622 78.085-16.519 23.08-10.334 43.091-24.769 59.467-42.898 15.778-17.517 27.223-37.395 34.014-59.067a151.124 151.124 0 0 0 6.416-33.003c.839-10.83.478-21.85-1.057-32.753zM334.82 383.601c-60.141 0-108.911-43.627-108.911-97.447 0-53.814 48.771-97.441 108.911-97.441 60.142 0 108.907 43.627 108.907 97.441.002 53.82-48.765 97.447-108.907 97.447zm62.807-106.01c.887 16.063-5.529 30.978-16.796 42.019-11.461 11.248-27.815 18.313-46.103 18.313-18.28 0-34.637-7.065-46.102-18.313-11.262-11.041-17.665-25.954-16.783-42.006.864-15.603 8.475-29.376 19.939-39.128 11.273-9.589 26.41-15.439 42.945-15.439 16.537 0 31.67 5.852 42.944 15.439 11.47 9.752 19.083 23.515 19.956 39.115z"/></svg></div>
                                                </div>
                                                <h2 class="text-2xl font-semibold mb-2 mt-10">Links</h2>
                                                <div class="flex flex-wrap gap-2">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <h2 class="text-2xl font-semibold mb-4">Images</h2>
                                    <div class="photo-bar bg-gray-200 p-4 flex space-x-4 overflow-x-auto mb-6 rounded-lg" id="photo-bar">
                                        <img src="./content/is.png" alt="Photo 2" class="w-32 h-32 object-cover rounded-xl">
                                        <img src="./content/ba.png" alt="Photo 1" class="w-32 h-32 object-cover rounded-xl">
                                        <img src="./content/keychain.png" alt="Photo 1" class="w-32 h-32 object-cover rounded-xl">
                                        <img src="./content/SXS Tee Pink.png" alt="Photo 3" class="w-32 h-32 object-cover rounded-xl">
                                        <img src="./content/SXS Cap Rose Gold.png" alt="Photo 3" class="w-32 h-32 object-cover rounded-xl">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="scroll-item flex-shrink-0 bg-white rounded-lg shadow-md overflow-hidden relative expandable expand-btn">
                        <img src="./content/print.webp" alt="./content/bg.jpg3" class="w-full h-full object-cover expand-exclude">
                        <div class="absolute inset-0 bg-black bg-opacity-50 flex flex-col justify-center items-center text-white p-4 overlay expand-exclude">
                            <h2 class="text-2xl font-bold expand-exclude">3D Printing Projects</h2>
                            <p class="mt-2 expand-exclude">Designing & Creating Products</p>
                        </div>
                        <div class="tag-div expand-exclude">
                            <div class="badge rounded">Products</div>
                            <div class="badge rounded ml-2">Design</div>
                        </div>
                        <div><!-- add proeject section here -->
                            <div class="container mx-auto px-4 py-8 work-container">
                                <div class="bg-white work-container rounded-lg overflow-hidden px-6">
                                    <div class="p-6 work-p">
                                        <h1 class="text-4xl font-bold mb-4">3D Printing Projects</h1>
                                        <p class="text-lg text-gray-500 mb-6">
                                        My 3D printing projects involved designing and modeling products, printing and assembling them, and putting them to practical use. This process taught me a lot about design, iteration, and tolerances.
                                        </p>
                                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 p-4">
                                            <div class="md:col-span-2">
                                                <h2 class="text-2xl font-semibold mb-4">Details</h2>
                                                <ul class="list-disc list-inside text-gray-700">
                                                <div class="flex items-center mb-2 flex-row"><div class="list-point"></div><li>Designed and modeled products and components using CAD software.</li></div>
                                                <div class="flex items-center mb-2 flex-row"><div class="list-point"></div><li>Printed the designed models using a 3D printer.</li></div>
                                                <div class="flex items-center mb-2 flex-row"><div class="list-point"></div><li>Assembled the printed parts into functional products.</li></div>
                                                <div class="flex items-center mb-2 flex-row"><div class="list-point"></div><li>Put the assembled products to practical use to test their functionality.</li></div>
                                                <div class="flex items-center mb-2 flex-row"><div class="list-point"></div><li>Gained insights into the design process, from concept to creation.</li></div>
                                                <div class="flex items-center mb-2 flex-row"><div class="list-point"></div><li>Learned the importance of iteration and making continuous improvements.</li></div>
                                                <div class="flex items-center mb-2 flex-row"><div class="list-point"></div><li>Understood the critical role of tolerances in the design and assembly process.</li></div>

                                                </ul>
                                            </div>
                                            <div class="md:col-span-1">
                                                <h2 class="text-2xl font-semibold mb-2">Resources Used</h2>
                                                <div class="flex flex-wrap gap-2">
                                                    <div class="w-12 h-12 p-1 #cacaca border-2 rounded-xl"><img src="./content/fusion.png" alt=""></div>
                                                    <div class="w-12 h-12 p-1 #cacaca border-2 rounded-xl"><img src="./content/bambulab_logo.jfif" alt=""></div>
                                                </div>
                                                <h2 class="text-2xl font-semibold mb-2 mt-10">Links</h2>
                                                <div class="flex flex-wrap gap-2">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <h2 class="text-2xl font-semibold mb-4">Images</h2>
                                    <div class="photo-bar bg-gray-200 p-4 flex space-x-4 overflow-x-auto mb-6 rounded-lg" id="photo-bar">
                                        <img src="./content/print-cd.png" alt="Photo 2" class="w-32 h-32 object-cover rounded-xl">
                                        <img src="./content/print-cd1.jpg" alt="Photo 2" class="w-32 h-32 object-cover rounded-xl">
                                        <img src="./content/print-shelf.png" alt="Photo 1" class="w-32 h-32 object-cover rounded-xl">
                                        <img src="./content/print-1.jpg" alt="Photo 1" class="w-32 h-32 object-cover rounded-xl">
                                        <img src="./content/print-2.jpg" alt="Photo 3" class="w-32 h-32 object-cover rounded-xl">
                                        <img src="./content/print-3.jpg" alt="Photo 3" class="w-32 h-32 object-cover rounded-xl">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="scroll-item flex-shrink-0 bg-white rounded-lg shadow-md overflow-hidden relative expandable expand-btn">
                        <img src="./content/landscaping/17.png" alt="./content/bg.jpg3" class="w-full h-full object-cover expand-exclude">
                        <div class="absolute inset-0 bg-black bg-opacity-50 flex flex-col justify-center items-center text-white p-4 overlay expand-exclude">
                            <h2 class="text-2xl font-bold expand-exclude">Landscaping Projects</h2>
                            <p class="mt-2 expand-exclude">Landscape Design & Construuuction</p>
                        </div>
                        <div class="tag-div expand-exclude">
                            <div class="badge rounded">Architectual Desgin</div>
                            <div class="badge rounded ml-2">3D Modeling</div>
                        </div>
                        <div><!-- add proeject section here -->
                            <div class="container mx-auto px-4 py-8 work-container">
                                <div class="bg-white work-container rounded-lg overflow-hidden px-6">
                                    <div class="p-6 work-p">
                                        <h1 class="text-4xl font-bold mb-4">Landscaping Projects</h1>
                                        <p class="text-lg text-gray-500 mb-6">
                                        In my landscaping architecture/design projects, I created digital representations of proposals for clients. Using accurate material files and dimensions, I learned to compensate for real-life anomalies and make rapid adjustments based on client feedback, blending creativity with practical design.
                                        </p>
                                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 p-4">
                                            <div class="md:col-span-2">
                                                <h2 class="text-2xl font-semibold mb-4">Details</h2>
                                                <ul class="list-disc list-inside text-gray-700">
                                                <div class="flex items-center mb-2 flex-row"><div class="list-point"></div><li>Developed digital representations of landscaping proposals for clients.</li></div>
                                                <div class="flex items-center mb-2 flex-row"><div class="list-point"></div><li>Utilized manufacturer-supplied material files to ensure accuracy.</li></div>
                                                <div class="flex items-center mb-2 flex-row"><div class="list-point"></div><li>Worked with precise dimensions to reflect real-world measurements.</li></div>
                                                <div class="flex items-center mb-2 flex-row"><div class="list-point"></div><li>Adjusted designs to account for real-life anomalies and constraints.</li></div>
                                                <div class="flex items-center mb-2 flex-row"><div class="list-point"></div><li>Learned to make quick changes based on client feedback.</li></div>
                                                <div class="flex items-center mb-2 flex-row"><div class="list-point"></div><li>Balanced creative design with practical, achievable solutions.</li></div>

                                                </ul>
                                            </div>
                                            <div class="md:col-span-1">
                                                <h2 class="text-2xl font-semibold mb-2">Resources Used</h2>
                                                <div class="flex flex-wrap gap-2">
                                                    <div class="w-12 h-12 p-1 #cacaca border-2 rounded-xl"><svg xmlns="http://www.w3.org/2000/svg" fill="#000000" viewBox="0 0 32 32" version="1.1"> <title>sketchup</title> <path d="M23.064 23.335l-2.947 1.691v-1.586l2.293-1.312c1.483-1.070 2.46-2.763 2.545-4.687l0-0.013-0.009-7.129-6.256-3.6c-0.712-0.395-1.561-0.627-2.464-0.627-0.069 0-0.138 0.001-0.206 0.004l0.010-0c-0.064-0.003-0.14-0.004-0.215-0.004-0.885 0-1.72 0.215-2.455 0.594l0.030-0.014-2.197 1.263-1.387-0.801 3.035-1.736c0.873-0.418 1.898-0.661 2.98-0.661 0.070 0 0.14 0.001 0.209 0.003l-0.010-0c1.179 0.008 2.295 0.27 3.299 0.734l-0.049-0.021 7.064 4.081-0.009 7.78c-0.050 2.503-1.319 4.7-3.237 6.026l-0.025 0.016zM15.064 10.137c0.278-0.045 0.597-0.070 0.923-0.070 1.023 0 1.988 0.253 2.834 0.699l-0.033-0.016 2.713 1.562s0.004 1.371 0.004 3.419c-0.141 1.282-0.642 2.426-1.399 3.353l0.009-0.012 0.003-6.018zM29.786 7.536l-9.762-5.628c-1.116-0.571-2.435-0.905-3.832-0.905-0.064 0-0.128 0.001-0.192 0.002l0.009-0c-0.078-0.003-0.169-0.004-0.261-0.004-1.389 0-2.697 0.347-3.842 0.958l0.044-0.021-9.042 5.173 13.757 7.908v15.978l9.054-5.169c1.187-0.762 2.149-1.777 2.826-2.975l0.022-0.042c0.622-1.059 1.054-2.304 1.214-3.632l0.004-0.046zM2.214 12.285l9.643 5.533-0.007 1.65-5.486-3.147-3.453 1.962 8.932 5.148 0.006 1.587-9.57-5.505c0.265 1.586 0.874 2.995 1.748 4.199l-0.020-0.029c0.647 0.904 1.458 1.648 2.396 2.2l0.036 0.020 8.845 5.092v-15.184l-13.063-7.502z"/> </svg></div>
                                                    <div class="w-12 h-12 p-1 #cacaca border-2 rounded-xl"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0.499 48.118 511.002 415.763"><path d="M510.003 279.642c-2.998-21.097-10.305-41.104-21.725-59.459-9.959-16.019-22.738-30.266-37.991-42.375l.041-.038L290.133 54.731a4.569 4.569 0 0 0-.361-.287c-5.326-4.08-12.537-6.325-20.297-6.325-7.77 0-15.263 2.25-21.088 6.338-6.263 4.375-9.843 10.18-10.093 16.359-.229 5.765 2.521 11.312 7.764 15.636 10.31 8.135 20.597 16.447 30.898 24.769 9.997 8.08 20.298 16.401 30.549 24.502l-196.213-.133c-22.439 0-37.718 10.537-40.861 28.178-1.381 7.727 1.056 16.223 6.504 22.73 5.78 6.898 14.172 10.703 23.629 10.703l14.958.01c20.664 0 41.419-.051 62.146-.101l19.766-.046-178.08 131.748-.707.517C8.7 336.953 2.188 347.642.783 358.653c-1.065 8.342.881 15.965 5.63 22.053 5.66 7.258 14.497 11.25 24.885 11.25 10.205 0 20.618-3.867 29.334-10.908l96.166-78.7c-.411 3.843-.91 9.481-.853 13.573.108 6.479 2.188 19.479 5.481 30.033 6.804 21.69 18.265 41.535 34.063 58.963 16.438 18.132 36.458 32.509 59.5 42.722 24.36 10.774 50.547 16.243 77.836 16.243h.253c27.376-.066 53.646-5.622 78.085-16.519 23.08-10.334 43.091-24.769 59.467-42.898 15.778-17.517 27.223-37.395 34.014-59.067a151.124 151.124 0 0 0 6.416-33.003c.839-10.83.478-21.85-1.057-32.753zM334.82 383.601c-60.141 0-108.911-43.627-108.911-97.447 0-53.814 48.771-97.441 108.911-97.441 60.142 0 108.907 43.627 108.907 97.441.002 53.82-48.765 97.447-108.907 97.447zm62.807-106.01c.887 16.063-5.529 30.978-16.796 42.019-11.461 11.248-27.815 18.313-46.103 18.313-18.28 0-34.637-7.065-46.102-18.313-11.262-11.041-17.665-25.954-16.783-42.006.864-15.603 8.475-29.376 19.939-39.128 11.273-9.589 26.41-15.439 42.945-15.439 16.537 0 31.67 5.852 42.944 15.439 11.47 9.752 19.083 23.515 19.956 39.115z"/></svg></div>
                                                </div>
                                                <h2 class="text-2xl font-semibold mb-2 mt-10">Links</h2>
                                                <div class="flex flex-wrap gap-2">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <h2 class="text-2xl font-semibold mb-4">Images</h2>
                                    <div class="photo-bar bg-gray-200 p-4 flex space-x-4 overflow-x-auto mb-6 rounded-lg" id="photo-bar">
                                        <img src="./content/landscaping/1.png" alt="Photo 2" class="w-32 h-32 object-cover rounded-xl">
                                        <img src="./content/landscaping/2.png" alt="Photo 2" class="w-32 h-32 object-cover rounded-xl">
                                        <img src="./content/landscaping/3.png" alt="Photo 2" class="w-32 h-32 object-cover rounded-xl">
                                        <img src="./content/landscaping/13.png" alt="Photo 2" class="w-32 h-32 object-cover rounded-xl">
                                        <img src="./content/landscaping/14.png" alt="Photo 2" class="w-32 h-32 object-cover rounded-xl">
                                        <img src="./content/landscaping/24.png" alt="Photo 2" class="w-32 h-32 object-cover rounded-xl">
                                        <img src="./content/landscaping/16.png" alt="Photo 2" class="w-32 h-32 object-cover rounded-xl">
                                        <img src="./content/landscaping/17.png" alt="Photo 2" class="w-32 h-32 object-cover rounded-xl">
                                        <img src="./content/landscaping/18.png" alt="Photo 2" class="w-32 h-32 object-cover rounded-xl">
                                        <img src="./content/landscaping/18.png" alt="Photo 2" class="w-32 h-32 object-cover rounded-xl">
                                        <img src="./content/landscaping/21.png" alt="Photo 2" class="w-32 h-32 object-cover rounded-xl">
                                        <img src="./content/landscaping/22.png" alt="Photo 2" class="w-32 h-32 object-cover rounded-xl">
                                        <img src="./content/landscaping/23.png" alt="Photo 2" class="w-32 h-32 object-cover rounded-xl">
                                        <img src="./content/landscaping/34.png" alt="Photo 2" class="w-32 h-32 object-cover rounded-xl">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                
                </div>

                <div class="hint-container">
                    <div  class="lottie-swipe swipe-left"></div> <!-- Lottie animation container -->
                    <p class="hint">Swipe to See All My Projects</p>
                    <div  class="lottie-swipe swipe-flip swipe-right"></div> <!-- Lottie animation container -->
                </div>
            </div>
        </div>
    </section>


    <!-- Contact Section -->
    <section class="py-20">
        <div class="container mx-auto px-6">
            <h2 class="text-4xl font-bold text-center mb-8">Contact</h2>
            <div class="max-w-lg mx-auto">
                <form>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="name">Name</label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="name" type="text" placeholder="Your name">
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="email">Email</label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" type="email" placeholder="Your email">
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="message">Message</label>
                        <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="message" rows="5" placeholder="Your message"></textarea>
                    </div>
                    <div class="flex items-center justify-between">
                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
                            Send
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.7.8/lottie.min.js"></script>
    <script src="glow.js"></script> <!-- Glow effect JS -->
    <script src="sparkler.js"></script> <!-- Sparkler effect JS -->
    <script src="shooting-stars.js"></script> <!-- Shooting stars JS -->
    <script src="script.js"></script> <!-- Main JS -->
    <script src="about-me.js"></script>
    <script src="grow.js"></script>
    <script src="projects.js"></script>
    <script src="work.js"></script>
</body>

</html>

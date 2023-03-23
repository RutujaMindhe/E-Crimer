<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        .container1 {
  margin: 50px auto;
  width: 1400px;
  height: 550px;
  overflow: hidden;
  border: 1px solid;
  border-color: #856036;
  
  position: relative;
}

.photo {

  width: 1400px;
  height: 550px;
  position: absolute;
  animation: round 16s infinite;
  opacity: 0;
}

@keyframes round {
  25% {
    opacity: 1;
  }
  40% {
    opacity: 0;
  }
}
-webkit-@keyframes round {
  25% {
    opacity: 1;
    -webkit-opacity: 1;
  }
}
  40% {
    opacity: 0;
    -webkit-opacity: 0;
  }
img:nth-child(1) {
  animation-delay: 12s;
}
 
img:nth-child(2) {
  animation-delay: 8s;
}
 
img:nth-child(3) {
  animation-delay: 4s;
}
 
img:nth-child(4) {
  animation-delay: 0s;
}
    </style>
</head>

<link rel="icon" href="images/E-Crimer-modified.png" type="image/icon type">

<title>E-Crimer</title>
<body class="bg-gray-100">
    <header class="text-gray-600 body-font border-b-2 bg-white">
        <div class="container mx-auto flex flex-wrap py-3 flex-col md:flex-row items-center">
            <a href="index.php" class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
               <img class="h-12" src="images/E-Crimer-modified.png"></img>
               &nbsp;   &nbsp;

                <span style="font-family: Book Antiqua;font-size: 28px;">E-Crimer</span>
            </a>
            <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">
                <!-- <a class="mr-5 hover:text-gray-900">First Link</a>
                <a class="mr-5 hover:text-gray-900">Second Link</a> -->
                <a class="mr-5 hover:text-gray-900" href="home.php">Crime Cell</a>
                <a class="mr-5 hover:text-gray-900" href="anti_ragging_home.php">Anti-Ragging cell</a>
                
                <!-- <a class="mr-5 hover:text-gray-900" href="test_file.pdf" > Curricular</a> -->
            </nav>
            
            <a href="/chatbot/index.php"
                class="inline-flex items-center bg-red-600 text-gray-50 border-0 py-1 px-3 focus:outline-none hover:bg-red-700 rounded text-base mt-4 md:mt-0">Ask Your Query
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    class="w-4 h-4 ml-1" viewBox="0 0 24 24">
                    <path d="M5 12h14M12 5l7 7-7 7"></path>
                </svg>
            </a>
        </div>
    </header>


    <!-- //What is ragging// -->
    <div class="container1">
        <img class='photo'  src="images/crime1.jfif" alt="Image 1" />
        <img class='photo'  src="images/crime2.jfif" alt="Image 2" />
        <img class='photo'  src="images/crime3.jfif" alt="Image 3" />
        <img class='photo'  src="images/crime4.jfif" alt="Image 4" />
      </div>
    <!-- Purpose of ragging -->
    <section class="text-gray-600 body-font">
        <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
          <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6 mb-10 md:mb-0">
            <img class="object-cover object-center rounded" alt="hero" src="images/E-Crimer-rectangular.PNG">
          </div>
          <div class="lg:flex-grow md:w-1/2 lg:pl-24 md:pl-16 flex flex-col md:items-start md:text-left items-center text-center">
            <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">Who are we ?
                          </h1>
            <p class="mb-8 leading-relaxed" style="text-align:justify;">E-Crimer (Online Crime Report System) is a project to automate the existing manual
                 system of policemen, Ragging committee of colleges, and maintain computerized records of Complaints filed against crime and Ragging.
                  The main aim of this project is to give update about their complaints to all users via website and can be able to download their case status.
                   It can also be used as an application by the police department to
                   manage the records of different activities related to First Information Report and also by the colleges to maintain their AntiRagging 
                   Committee. All the activities (like registration of the complaint, updating information, adding police station incharge, assign police
                    for complaints,Ragging complaints accessed by colleges, etc.) are managed that saves time.Our main feature in crime cell is we can block the user if 
                    he registered the fake complaint.</p>
            <div class="flex justify-center">
              <!-- <button class="inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">Button</button>
              <button class="ml-4 inline-flex text-gray-700 bg-gray-100 border-0 py-2 px-6 focus:outline-none hover:bg-gray-200 rounded text-lg">Button</button> -->
            </div>
          </div>
        </div>
      </section>
  

        
<br>





 <!-- Process flow of  Offline Anti-Ragging Committee -->
      <!-- <section class="text-gray-600 body-font">
        <div class="container mx-auto flex px-5 py-24 items-center justify-center flex-col">
            <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">Process flow of Anti-Ragging Committee</h1>
          <img class="lg:w-3/6 md:w-3/6 w-4/6 mb-10 object-cover object-center rounded" alt="hero" src="Flowchart-1.png">
          <div class="text-center lg:w-2/3 w-full">
          
            <p class="mb-8 leading-relaxed">Meggings kinfolk echo park stumptown DIY, kale chips beard jianbing tousled. Chambray dreamcatcher trust fund, kitsch vice godard disrupt ramps hexagon mustache umami snackwave tilde chillwave ugh. Pour-over meditation PBR&amp;B pickled ennui celiac mlkshk freegan photo booth af fingerstache pitchfork.</p>
            <div class="flex justify-center">
              <button class="inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">Button</button>
              <button class="ml-4 inline-flex text-gray-700 bg-gray-100 border-0 py-2 px-6 focus:outline-none hover:bg-gray-200 rounded text-lg">Button</button>
            </div>
          </div>
        </div>
      </section> -->



     
    <section class="text-gray-600  body-font bg-gray-100" >
        <div class="container px-30 py-30  mx-auto bg-gray-100">
            <div class="flex flex-col text-center w-full mb-20">
                <h1 class="text-2xl font-medium title-font mb-4 text-gray-900 tracking-widest">OUR TEAM</h1>
                <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Behind every successful application is a team of 
                    dedicated Developers & Database Administrator, and here at Sinhgad Institute we are no different.
                    Our team of Developers and Programmers are not only expert in their craft, but also come up with the
                    myraid of creative ideas that turn into website for industry level.
                </p>
            </div>
            <div class="flex flex-wrap -m-4">
                <div class="p-4 lg:w-1/2">
                    <div
                        class="h-full flex sm:flex-row flex-col items-center sm:justify-start justify-center text-center sm:text-left">
                        <img alt="team"
                            class="flex-shrink-0 rounded-lg w-48 h-48 object-cover object-center sm:mb-0 mb-4"
                            src="images/tanmay.jpg">
                        <div class="flex-grow sm:pl-8">
                            <h2 class="title-font font-medium text-lg text-gray-900">Tanmay Nikam</h2>
                            <h3 class="text-gray-500 mb-3">UI Developer</h3>
                            <p class="mb-4">Designed applications that increased user satisfaction by 20% and resolved persistent browser
                                 compatibility issues for Firefox users whilst rigorously adhering to project deadlines
                                                            </p>
                            <span class="inline-flex">
                                <a class="text-gray-500" href="https://www.facebook.com/tanmayknikam?hc_ref=ART4NQwxf_vmFN7nOHrcUh9m_7fbOkq-Ch82Pu3wWuiIsYq1RJf0d6Twpbmip6vdYXQ&fref=nf&__xts__[0]=68.ARDwqVq-xpfsx9jJJeePqz1V-OzWvKYzWhys4uCHBri6KhmFlgYsClsNpoxipXgWloe8QtPiG5m9d6tXTWweQO9F5ZjOXrAaN2dLczQUijGsmQ1fOPcfH8WhHBLuFIRwFKFsEDMknIbc5KkK6gyaevi_en0WOlWFmtCv6IYmrbUQIEXU9IPtosXtboZhtzC7zTH8LV_WiFn_08Hlgw1yTyTHqT6l-Y4pvJ18dggw36CqO8nbsGiqso7IsFIJ0AvNSZFq7kUs_BLcfsiy09uscmbvbMrZ_HcWuEjhugIDYV5XkgAzD90"
                                target="_blank">
                                    <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                        <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                                    </svg>
                                </a>


                                <a class="ml-3 text-gray-500" href="https://www.instagram.com/_tanmaynikam__/?hl=en" 
                                target="_blank">
                                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                        <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                                        <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
                                    </svg>
                                </a>


                                <a class="ml-2 text-gray-500" href="https://twitter.com/Tanish_Nikam" target="_blank">
                                    <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                        <path
                                            d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z">
                                        </path>
                                    </svg>
                                </a>
                                
                                <a class="ml-2 text-gray-500" href="https://in.linkedin.com/in/tanmay-nikam" target="_blank">
                               
                                 <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
                                    <path stroke="none"
                                        d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z">
                                    </path>
                                    <circle cx="4" cy="4" r="2" stroke="none"></circle>
                                </svg>
                                </a>

                                
                            </span>
                        </div>
                    </div>
                </div>
                <div class="p-4 lg:w-1/2">
                    <div
                        class="h-full flex sm:flex-row flex-col items-center sm:justify-start justify-center text-center sm:text-left">
                        <img alt="team"
                            class="flex-shrink-0 rounded-lg w-48 h-48 object-cover object-center sm:mb-0 mb-4"
                            src="images/white-rutuja.jpg">
                        <div class="flex-grow sm:pl-8">
                            <h2 class="title-font font-medium text-lg text-gray-900">Rutuja Mindhe</h2>
                            <h3 class="text-gray-500 mb-3">Developer</h3>
                            <p class="mb-4">Highly experienced in all aspects of the software development lifecycle and end-to-end project management
                                , from concept through to development to delivery.
                            </p>

                           
                            <span class="inline-flex">
                                <!-- <a class="text-gray-500">
                                    <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                        <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                                    </svg>
                                </a> -->

                                <a class="ml-3 text-gray-500" href=" https://www.instagram.com/rutu_mindhe_/?hl=en" 
                                target="_blank">
                                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                        <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                                        <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
                                    </svg>
                                </a>

                                <!-- <a class="ml-2 text-gray-500">
                                    <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                        <path
                                            d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z">
                                        </path>
                                    </svg> -->
                                </a>
                                <a class="ml-2 text-gray-500" href="https://in.linkedin.com/in/rutuja-mindhe-b3753421b" target="_blank">
                               
                                    <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                       stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
                                       <path stroke="none"
                                           d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z">
                                       </path>
                                       <circle cx="4" cy="4" r="2" stroke="none"></circle>
                                    </svg>
                                </a>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="p-4 lg:w-1/2">
                    <div
                        class="h-full flex sm:flex-row flex-col items-center sm:justify-start justify-center text-center sm:text-left">
                        <img alt="team"
                            class="flex-shrink-0 rounded-lg w-48 h-48 object-cover object-center sm:mb-0 mb-4"
                            src="images/rupali.jpeg">
                        <div class="flex-grow sm:pl-8">
                            <h2 class="title-font font-medium text-lg text-gray-900">Rupali More</h2>
                            <h3 class="text-gray-500 mb-3">Developer</h3>
                            <p class="mb-4">Consitently recognized as a hands-on and competent leader, skilled at co-ordinating 
                                cross-functional teams in a fast-paced.
                            </p>
                            <span class="inline-flex">
                                <!-- <a class="ml-3 text-gray-500" href=" https://www.instagram.com/rutu_mindhe_/?hl=en" 
                                target="_blank">
                                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                        <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                                        <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
                                    </svg>
                                </a> -->
                                <!-- <a class="ml-2 text-gray-500">
                                    <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                        <path
                                            d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z">
                                        </path>
                                    </svg>
                                </a> -->
                                <!-- <a class="ml-2 text-gray-500">
                                    <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                        <path
                                            d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z">
                                        </path>
                                    </svg>
                                </a> -->
                            </span>
                        </div>
                    </div>
                </div>
                <div class="p-4 lg:w-1/2">
                    <div
                        class="h-full flex sm:flex-row flex-col items-center sm:justify-start justify-center text-center sm:text-left">
                        <img alt="team"
                            class="flex-shrink-0 rounded-lg w-48 h-48 object-cover object-center sm:mb-0 mb-4"
                            src="images/samiksha.jpeg">
                        <div class="flex-grow sm:pl-8">
                            <h2 class="title-font font-medium text-lg text-gray-900">Samiksha Lokhande</h2>
                            <h3 class="text-gray-500 mb-3">Database Administrator</h3>
                            <p class="mb-4">Proficient in an assortment of technologies including Oracle,PHPMyAdmin, JDBC, MySQL .
                            </p>
                            <span class="inline-flex">
                                <!-- <a href="https://google.co.in" target="_blank" class="text-gray-500">
                                    <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                        <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                                    </svg>
                                </a>
                                <a class="ml-2 text-gray-500">
                                    <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                        <path
                                            d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z">
                                        </path>
                                    </svg>
                                </a>
                                <a class="ml-2 text-gray-500">
                                    <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                        <path
                                            d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z">
                                        </path>
                                    </svg>
                                </a> -->
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- <section class="text-gray-600 body-font">
        <div class="container mx-auto flex px-5 py-24 items-center justify-center flex-col">
          <img class="lg:w-2/6 md:w-3/6 w-5/6 mb-10 object-cover object-center rounded" alt="hero" src="https://dummyimage.com/720x600">
          <div class="text-center lg:w-2/3 w-full">
            <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">Microdosing synth tattooed vexillologist</h1>
            <p class="mb-8 leading-relaxed">Meggings kinfolk echo park stumptown DIY, kale chips beard jianbing tousled. Chambray dreamcatcher trust fund, kitsch vice godard disrupt ramps hexagon mustache umami snackwave tilde chillwave ugh. Pour-over meditation PBR&amp;B pickled ennui celiac mlkshk freegan photo booth af fingerstache pitchfork.</p>
            <div class="flex justify-center">
              <button class="inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">Button</button>
              <button class="ml-4 inline-flex text-gray-700 bg-gray-100 border-0 py-2 px-6 focus:outline-none hover:bg-gray-200 rounded text-lg">Button</button>
            </div>
          </div>
        </div>
      </section> -->
      <div style="position: fixed;
      left: 0;
      bottom: 0;
      width: 100%;
      background-color: rgba(0,0,0,0.7);
      color: white;
      text-align: center;">
     <h4 style="color: white;">&copy <b>E-Crimer 2022</b></h4>
   </div>
         

</body>

</html>
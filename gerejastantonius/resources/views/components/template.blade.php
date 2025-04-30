<!doctype html>
<html>
  <head lang="en" class="h-full bg-gray-100">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')
    
    {{-- LINK TO CSS EXTENTION --}}
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&family=Dancing+Script:wght@400..700&family=Faculty+Glyphic&family=Moon+Dance&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
    <style>
      .banner {
        text-align: center;
        overflow: hidden;
        position: relative;
        background-color:#F5EEDD; 
      }

      .banner .title{
        font-family: Playfair Display, serif;
        font-weight: 900;
        color: #077A7D;
        z-index: 3;
        text-shadow: 1px 1px #DDDDAE;
      }
      
      .banner .slider {
        position: absolute;
        width: 300px;
        height: 250px;
        top: 25%;
        left: calc(50% - 150px);
        transform-style: preserve-3d;
        transform: perspective(3000px);
        animation: autoRun 30s linear infinite;
        z-index: 1;
      }

      @keyframes autoRun{
        from{
          transform: perspective(3000px) rotateX(-12deg) rotateY(0deg);
        }
        to{
          transform: perspective(3000px) rotateX(-12deg) rotateY(360deg)
        }
      }

      .banner .slider .item {
          position: absolute;
          inset: 0 0 0 0;
          transform:
          rotateY(calc( (var(--position) - 1) * (360 / var(--quantity)) * 1deg))
          translateZ(700px);
      }

      .banner .slider .item img {
          width: 100%;
          height: 100%;
          object-fit: scale-down;
      }

      .banner img{
        width: 40vw;
        max-width: 300px;
        /* position: absolute;
        inset: 0 0 0 0;
        bottom: -20vh; */
      }
    </style>
  </head> 
  <body class="h-full relative">


    <div class="h-[8vh]"></div>

    <div class="fixed top-0 right-0 left-0 z-99" ><x-navbar></x-navbar></div>


    {{-- SCRIPT JS EXTENTION --}}
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
  </body>

</html>
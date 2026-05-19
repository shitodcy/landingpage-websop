<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COMING SOON</title>
    
    <script src="https://cdn.tailwindcss.com"></script>
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#ffff00] min-h-screen flex items-center justify-center font-mono overflow-hidden text-black selection:bg-black selection:text-white">

    <div class="absolute top-8 left-0 w-full overflow-hidden border-y-8 border-black bg-white py-2 z-0 transform -skew-y-2">
        <div class="animate-marquee text-4xl font-black uppercase tracking-widest">
            *** NO RULES *** JUST CODE *** developer has a headache *** NO RULES *** JUST CODE ***
        </div>
    </div>

    <div class="relative bg-white border-8 border-black p-8 shadow-[16px_16px_0px_rgba(0,0,0,1)] z-10 max-w-2xl w-full mx-4 transform -rotate-2 hover:rotate-0 transition-transform duration-75">
        
        <div class="border-b-8 border-black pb-6 mb-6">
            
            <div class="flex items-center gap-6 sm:gap-10 mb-2">
                
                <svg viewBox="0 0 100 130" class="w-24 sm:w-32 flex-shrink-0 text-black hover:text-[#ff00ff] hover:scale-105 transition-all duration-200 cursor-default" xmlns="http://www.w3.org/2000/svg">
                     <polyline points="65,4 4,4 4,126 96,126 96,35" fill="none" stroke="currentColor" stroke-width="8" stroke-linejoin="miter"/>
    
                     <polygon points="65,4 65,35 96,35" fill="currentColor"/>
    
                     <path d="M28 55 L40 67 M40 55 L28 67 M60 55 L72 67 M72 55 L60 67" stroke="currentColor" stroke-width="6" stroke-linecap="round"/>
    
                     <path d="M28 100 Q50 80 72 100" fill="none" stroke="currentColor" stroke-width="8" stroke-linecap="round"/>
                </svg>
                
                <h1 class="text-[7rem] sm:text-[10rem] font-sans font-normal tracking-tighter leading-none hover:text-[#ff00ff] transition-colors cursor-default text-black text-center">
                    404
                </h1>
                
            </div>

            <h2 class="text-4xl sm:text-6xl font-sans font-normal tracking-tight hover:text-[#ff00ff] cursor-default text-black text-center">
                Page Not Found
            </h2>
            
        </div>
        
        <div class="bg-black text-[#00ff00] p-4 mb-6 font-bold text-xl uppercase tracking-wider">
            <p>> STATUS: COMINGSOON</p>
            <p>> STATUS: COMINGSOON</p>
            <p>> STATUS: COMINGSOON</p>
        </div>

        <button id="btn-team" class="w-full bg-[#00ff00] border-4 border-black py-4 text-3xl font-black uppercase hover:bg-black hover:text-[#00ff00] transition-colors active:translate-y-2 active:translate-x-2 active:shadow-none shadow-[8px_8px_0px_rgba(0,0,0,1)] cursor-pointer">
            [ My Team ]
        </button>
    </div>

    <div id="modal-team" class="fixed inset-0 z-[100] bg-black/80 backdrop-blur-sm hidden flex items-center justify-center p-4">
        
        <div class="relative bg-[#ffff00] border-8 border-black p-8 shadow-[16px_16px_0px_rgba(0,0,0,1)] max-w-lg w-full transform rotate-1">
            
            <button id="close-modal" class="absolute -top-6 -right-6 bg-[#ff00ff] border-4 border-black text-black font-black text-2xl w-14 h-14 flex items-center justify-center hover:bg-black hover:text-[#ff00ff] transition-colors shadow-[8px_8px_0px_rgba(0,0,0,1)] active:translate-y-2 active:translate-x-2 active:shadow-none cursor-pointer">
                X
            </button>

            <div class="border-b-8 border-black pb-4 mb-6">
                <h2 class="text-5xl font-black uppercase tracking-tighter text-black">
                    My Team
                </h2>
            </div>

            <div class="text-2xl font-bold uppercase space-y-4 max-h-[60vh] overflow-y-auto overflow-x-hidden pr-2 pb-2 w-full">
                
                <div class="relative">
                    <button class="w-full text-left bg-white text-black p-4 border-4 border-black shadow-[4px_4px_0px_rgba(0,0,0,1)] transform hover:-translate-y-1 transition-transform flex justify-start items-center gap-3 cursor-pointer member-toggle relative z-10">
                        <span class="toggle-icon inline-block transition-transform duration-200">></span>
                        <span>Putra</span>
                    </button>
                    <div class="hidden flex-col bg-[#e0e0e0] border-4 border-black border-t-0 p-4 pt-6 -mt-2 shadow-[4px_4px_0px_rgba(0,0,0,1)] member-content text-base font-mono relative z-0">
                        <div class="flex"><span class="w-20 font-black text-gray-600 text-sm">Nim</span><span>: 23.11.5494</span></div>
                </div>

                <div class="relative">
                    <button class="w-full text-left bg-white text-black p-4 border-4 border-black shadow-[4px_4px_0px_rgba(0,0,0,1)] transform hover:-translate-y-1 transition-transform flex justify-start items-center gap-3 cursor-pointer member-toggle relative z-10">
                        <span class="toggle-icon inline-block transition-transform duration-200">></span>
                        <span>Irul</span>
                    </button>
                    <div class="hidden flex-col bg-[#e0e0e0] border-4 border-black border-t-0 p-4 pt-6 -mt-2 shadow-[4px_4px_0px_rgba(0,0,0,1)] member-content text-base font-mono relative z-0">
                       <div class="flex"><span class="w-20 font-black text-gray-600 text-sm">Nim</span><span>: 23.11.5442</span></div>
                    </div>
                </div>

                <div class="relative">
                    <button class="w-full text-left bg-white text-black p-4 border-4 border-black shadow-[4px_4px_0px_rgba(0,0,0,1)] transform hover:-translate-y-1 transition-transform flex justify-start items-center gap-3 cursor-pointer member-toggle relative z-10">
                        <span class="toggle-icon inline-block transition-transform duration-200">></span>
                        <span>Maul</span>
                    </button>
                    <div class="hidden flex-col bg-[#e0e0e0] border-4 border-black border-t-0 p-4 pt-6 -mt-2 shadow-[4px_4px_0px_rgba(0,0,0,1)] member-content text-base font-mono relative z-0">
                        <div class="flex"><span class="w-20 font-black text-gray-600 text-sm">Nim</span><span>: 23.11.5485</span></div>
                    </div>
                </div>

                <div class="relative">
                    <button class="w-full text-left bg-white text-black p-4 border-4 border-black shadow-[4px_4px_0px_rgba(0,0,0,1)] transform hover:-translate-y-1 transition-transform flex justify-start items-center gap-3 cursor-pointer member-toggle relative z-10">
                        <span class="toggle-icon inline-block transition-transform duration-200">></span>
                        <span>Fanny</span>
                    </button>
                    <div class="hidden flex-col bg-[#e0e0e0] border-4 border-black border-t-0 p-4 pt-6 -mt-2 shadow-[4px_4px_0px_rgba(0,0,0,1)] member-content text-base font-mono relative z-0">
                        <div class="flex"><span class="w-20 font-black text-gray-600 text-sm">Nim</span><span>: 23.11.5471</span></div>
                    </div>
                </div>

                <div class="relative">
                    <button class="w-full text-left bg-white text-black p-4 border-4 border-black shadow-[4px_4px_0px_rgba(0,0,0,1)] transform hover:-translate-y-1 transition-transform flex justify-start items-center gap-3 cursor-pointer member-toggle relative z-10">
                        <span class="toggle-icon inline-block transition-transform duration-200">></span>
                        <span>Jihan</span>
                    </button>
                    <div class="hidden flex-col bg-[#e0e0e0] border-4 border-black border-t-0 p-4 pt-6 -mt-2 shadow-[4px_4px_0px_rgba(0,0,0,1)] member-content text-base font-mono relative z-0">
                        <div class="flex"><span class="w-20 font-black text-gray-600 text-sm">Nim</span><span>: 23.11.5492</span></div>
                    </div>
                </div>

            </div>
</body>
</html>
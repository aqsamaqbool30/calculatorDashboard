 <!-- footer -->
 <footer class="mt-0 bg-[#fafafa] w-full">
     <div class="max-w-[1120px] mx-auto grid grid-cols-4 mb-0 pt-16 px-5 md:px-7 coxl:px-10">
         <div class="col-span-4 lg:col-span-2">
             <a href="index.php"><img src="<?php echo $assetConfig['asset_url'] ?>/images/calculator-white.svg" alt="logo" class="inline-block relative w-32 xs:w-48 my-auto"></a>
             <p class="mt-5 pr-5 maxsm:text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
             <p class="mt-5 maxsm:text-sm">Subscribe our newsletter</p>
             <div class="relative w-full sm:w-[450px] h-11 mt-2 rounded-xl flex border border-gray-400 focus-within:border-primary_button focus-within:text-primary_button">
                 <input type="text" class="bg-transparent w-3/4 ml-3 outline-none border-none placeholder:text-gray-400 focus focus:placeholder:text-primary_button" placeholder="Type here....">
                 <button title="Submit" type="submit" class="absolute top-[7px] right-2 rounded-md py-1 px-2 text-sm border border-primary_button bg-primary_button text-white hover:text-primary_button hover:bg-white">Submit</button>
             </div>
             <ul class="flex mt-4">
                 <li class="flex justify-center items-center w-10 h-10 rounded-full bg-primary_button text-white border border-primary_button hover:bg-white hover:text-primary_button mr-3"><a title="Facebook" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" shape-rendering="geometricPrecision" text-rendering="geometricPrecision" image-rendering="optimizeQuality" fill="currentColor" clip-rule="evenodd" viewBox="0 0 640 640">
                             <path d="M380.001 120.001h99.993V0h-99.993c-77.186 0-139.986 62.8-139.986 139.986v60h-80.009V320h79.985v320h120.013V320h99.994l19.996-120.013h-119.99v-60.001c0-10.843 9.154-19.996 19.996-19.996v.012z" />
                         </svg></a></li>
                 <li class="flex justify-center items-center w-10 h-10 rounded-full bg-primary_button text-white border border-primary_button hover:bg-white hover:text-primary_button mr-3"><a title="Twitter" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" shape-rendering="geometricPrecision" text-rendering="geometricPrecision" image-rendering="optimizeQuality" fill="currentColor" clip-rule="evenodd" viewBox="0 0 640 640">
                             <path d="M640.012 121.513c-23.528 10.524-48.875 17.516-75.343 20.634 27.118-16.24 47.858-41.977 57.756-72.615-25.347 14.988-53.516 25.985-83.363 31.866-24-25.5-58.087-41.35-95.848-41.35-72.508 0-131.21 58.736-131.21 131.198 0 10.228 1.134 20.232 3.355 29.882-109.1-5.528-205.821-57.757-270.57-137.222a131.423 131.423 0 0 0-17.764 66c0 45.497 23.102 85.738 58.347 109.207-21.508-.638-41.74-6.638-59.505-16.359v1.642c0 63.627 45.225 116.718 105.32 128.718-11.008 2.988-22.63 4.642-34.606 4.642-8.48 0-16.654-.874-24.78-2.35 16.783 52.11 65.233 90.095 122.612 91.205-44.989 35.245-101.493 56.233-163.09 56.233-10.63 0-20.988-.65-31.334-1.89 58.229 37.359 127.206 58.997 201.31 58.997 241.42 0 373.552-200.069 373.552-373.54 0-5.764-.13-11.35-.366-16.996 25.642-18.343 47.87-41.493 65.469-67.844l.059-.059z" />
                         </svg></a></li>
                 <li class="flex justify-center items-center w-10 h-10 rounded-full bg-primary_button text-white border border-primary_button hover:bg-white hover:text-primary_button mr-3"><a title="Linkedin" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" shape-rendering="geometricPrecision" text-rendering="geometricPrecision" image-rendering="optimizeQuality" fill="currentColor" clip-rule="evenodd" viewBox="0 0 640 640">
                             <path d="M228.582 205.715h126.462v64.832h1.83c17.611-31.595 60.675-64.832 124.892-64.832C615.303 205.715 640 288.818 640 396.926v220.219H508.116V421.93c0-46.536-.969-106.442-68.576-106.442-68.67 0-79.194 50.658-79.194 103.052v198.605H228.581v-411.43zM137.152 91.43c0 37.855-30.721 68.576-68.576 68.576-37.855 0-68.587-30.721-68.587-68.576 0-37.855 30.732-68.576 68.587-68.576 37.855 0 68.576 30.721 68.576 68.576zM-.011 205.715h137.163v411.43H-.011v-411.43z" />
                         </svg></a></li>
             </ul>
             <ul class="flex flex-wrap justify-center sm:justify-start items-center mt-4 [&>*]:text-sm [&>*]:sm:text-base [&>*]:tracking-[1px]">
                 <li class="mx-2 maxcosm:my-2"><a href="#">Privacy policy</a></li>
                 <li class="mx-2">&nbsp;|&nbsp;</li>
                 <li class="mx-2 maxcosm:my-2"><a href="#">Terms of Service</a></li>
             </ul>
         </div>
         <div class="footer-col-2 maxsm:col-span-2 maxlg:mt-3 flex justify-start lg:justify-center">
             <ul>
                 <li class="!text-base md:!text-lg font-semibold">General</li>
                 <li><a title="About" href="#" class="hover:text-primary_button duration-100">About</a></li>
                 <li><a title="Blogs" href="#" class="hover:text-primary_button duration-100">Blogs</a></li>
                 <li><a title="Help" href="#" class="hover:text-primary_button duration-100">Help</a></li>
                 <li><a title="Contact us" href="#" class="hover:text-primary_button duration-100">Contact us</a></li>
             </ul>
         </div>
         <div class="footer-col-2 maxsm:col-span-2 maxlg:mt-3 flex justify-start lg:justify-center">
             <ul>
                 <li class="!text-base md:!text-lg font-semibold">Securities</li>
                 <li><a title="FAQ" href="#" class="hover:text-primary_button duration-100">FAQ</a></li>
                 <li><a title="Terms & Conditions" href="#" class="hover:text-primary_button duration-100">Terms&nbsp;&&nbsp;Conditions</a></li>
                 <li><a title="Securities" href="#" class="hover:text-primary_button duration-100">Securities</a></li>
                 <li><a title="Payment" href="#" class="hover:text-primary_button duration-100">Payment</a></li>
             </ul>
         </div>
     </div>
     <div class="pt-4 pb-7 px-5 md:px-7 coxl:px-10 text-sm lg:text-base max-w-[1120px] mx-auto text-center mb-0">
         <p><span class="text-xl">©&nbsp;</span>Copyright 2023 Design by Calculator Hub</p>

     </div>

 </footer>

 <!-- <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script> -->

 <script src="./app/views/assets/js/script.js"></script>
 <script src="./app/views/assets/js/globalFunctions.js"></script>
 <script src="./app/views/assets/js/Calculatorscript.js"></script>
 <script src="./app/views/assets/js/main.js"></script>
 </body>

 </html>
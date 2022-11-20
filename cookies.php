<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>
<style>
@import url(https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.3.45/css/materialdesignicons.min.css);
@-webkit-keyframes fadeIn {
  from { opacity:0 }
  to { opacity:1 }
}
@keyframes fadeIn {
  from { opacity:0 }
  to { opacity:1 }
}
@-webkit-keyframes fadeInUp {
  from { opacity:0; transform:translate3d(0,10%,0) }
  to { opacity:1; transform:translate3d(0,0,0) }
}
@keyframes fadeInUp {
  from { opacity:0; transform:translate3d(0,10%,0) }
  to { opacity:1; transform:translate3d(0,0,0) }
}

dialog[open] { -webkit-animation-duration:0.3s; animation-duration:0.3s; -webkit-animation-fill-mode:both; animation-fill-mode:both; -webkit-animation-name:fadeInUp; animation-name:fadeInUp }
dialog::backdrop { background: rgba(0, 0, 0, 0.3); backdrop-filter: blur(3px); -webkit-animation-duration:0.3s; animation-duration:0.3s; -webkit-animation-fill-mode:both; animation-fill-mode:both; -webkit-animation-name:fadeIn; animation-name:fadeIn  }
</style>

<div class=" h-auto bg-indigo-600 flex items-center justify-center px-5 relative" x-data="{showCookieBanner:true}">
    <section class=" fixed w-full p-5 lg:px-24 bottom-0 bg-indigo-600" x-show="showCookieBanner">
        <div class="md:flex items-center -mx-3">
            <div class="md:flex-1 px-3 mb-5 md:mb-0">
                <p class="text-center md:text-left text-xl text-white leading-tight md:pr-12">Пользуясь нашим сайтом, вы соглашаетесь с использованием нами cookie-файлов.</p>
            </div>
            <div class="px-3 text-center">
                <button id="btn" class="py-2 px-8 bg-green-400 hover:bg-green-500 text-white rounded font-bold text-sm shadow-xl" @click.prevent="showCookieBanner=!showCookieBanner">Accept cookies</button>
            </div>
        </div>
    </section>
</div>

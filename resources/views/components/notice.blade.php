@session('info')
<div class="pop-up bg-white border border-black/20 flex items-center justify-between fixed top-[90px] z-10 w-full rounded-3xl py-4 px-4 mt-3 shadow-[1px_10px_15px_-6px_rgba(0,0,0,0.64)]">
    <h3 class="text-black font-victor font-semibold">{{$value}}</h3>
    <button class="x-close bg-black/15 border border-black/20 flex rounded-[100px] p-2 hover:bg-black/20 focus:outline-black">
        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="#111111" viewBox="0 0 256 256"><path d="M202.83,197.17a4,4,0,0,1-5.66,5.66L128,133.66,58.83,202.83a4,4,0,0,1-5.66-5.66L122.34,128,53.17,58.83a4,4,0,0,1,5.66-5.66L128,122.34l69.17-69.17a4,4,0,1,1,5.66,5.66L133.66,128Z"></path></svg>
    </button>
</div>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const closeBtn = document.querySelector(".x-close");
        const popup = document.querySelector(".pop-up");

        if (closeBtn && popup) {
            closeBtn.addEventListener("click", function () {
                popup.style.display = "none";
            });
        }
    });
</script>
@endsession
<div  class="fixed right-[1rem] bottom-[2rem] z-[1100] h-[2.5rem] min-[450px]:h-[3rem] w-[2.5rem] min-[450px]:w-[3rem] cursor-pointer" id="top" onclick="toTop()">
    <img src="{{asset('/frontend/images/arr.png')}}" alt="ToTop" class="">
</div>

<script>
    function toTop(){
        window.scrollTo({top: 0, behavior: "smooth"});
    }
</script>
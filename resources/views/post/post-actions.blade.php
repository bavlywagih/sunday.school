    <div class="post-actions mt-4 mb-3 d-flex items-center">
        @auth
            @if ($checkuser)
                <a href="{{$edit}}"   class="edit" ><i class="fa-solid fa-pencil  p-2"></i></a>
                <a href="{{$delete}}" class="delete" ><i class="fa-solid fa-trash  p-2"></i></a>
            @endif
        @endauth
        <input   style="display: none;" value="{{env('APP_URL', 'http://127.0.0.1:8000')}}/post/{{$postlink}}" id="myInput{{$postlink}}">
        <button class="border-0 bg-white " id="liveToastBtn{{$postlink}}"  onclick="myFunction{{$postlink}}()">
            <i class="fa-solid fa-share"></i>
        </button>
        <div>
            <div class="toast-container position-fixed bottom-0 end-0 p-3">
                <div id="liveToast{{$postlink}}" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                    <x-post.toast/>
                </div>
            </div>
        </div>
    </div>
    <script>
        function myFunction{{$postlink}}() {
            const toastTrigger = document.getElementById('liveToastBtn{{$postlink}}')
            const toastLiveExample = document.getElementById('liveToast{{$postlink}}')
            if (toastTrigger)
                {
                    toastTrigger.addEventListener('click', () => {
                        const toast = new bootstrap.Toast(toastLiveExample)
                        toast.show()
                    })
                }
            var copyText = document.getElementById("myInput{{$postlink}}");
            copyText.select();
            copyText.setSelectionRange(0, 99999);
            navigator.clipboard.writeText(copyText.value);
        }
    </script>

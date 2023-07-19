@extends('template.template')
@section('content')
    <div>
        <div class="toast-container position-fixed bottom-0 end-0 p-3">
            <div id="liveToast{{$sessions->id}}" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                <x-post.toast/>
            </div>
        </div>
    </div>
    <div class="card m-2 session-card rounded" >
        <div class="card-body">
            <div class="d-flex justify-content-between ">
                <h2>  اسم الدرس : <span> {{ $sessions->title }}</span>   </h2>
                <div class="dropdown"  >
                    <button class="border-0 bg-white" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa-solid fa-ellipsis-vertical"></i>
                    </button>
                    <ul class="dropdown-menu">
                        @if (Auth::user()->role >= '1')<li><a class="dropdown-item text-end border-0 bg-white dropdown-item text-end bt-session-copy" >تعديل</a></li>@endif
                        <input  style="display: none;" value="{{env('APP_URL', 'http://127.0.0.1:8000')}}/session/{{$sessions->id}}" id="myInput{{$sessions->id}}">
                        <button class="border-0 bg-white w-100 padding-0 bt-session-copy" id="liveToastBtn{{$sessions->id}}"  onclick="myFunction{{$sessions->id}}()"><li><a class="dropdown-item text-end" >مشاركه</a></li></button>
                    </ul>
                </div>
            </div>
            <hr>
            <div class="accordion" id="accordionExample">
            @if($sessions->file != '' )
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingfive">
                        <div style="display: flex ;">
                            <button class="accordion-button collapsed w-75" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefive" aria-expanded="true" aria-controls="collapsefive">ملفات  الدرس</button>
                            <button type="button" class="border-0 bg-transparent w-75" >
                                <div class="d-flex justify-content-end">
                                    <div>
                                        <p id="demo" style="display: none; font-size: 14px;">بعض المتصفحات لا تدعم بعض الملفات</p>
                                    </div>
                                    <i class="fa-solid  fa-circle-info d-flex align-items-center px-3 i-session-warning" onclick="show_warning()" ></i>
                                </div>
                            </button>
                        </div>
                    </h2>
                    <div id="collapsefive" class="accordion-collapse collapse " aria-labelledby="headingfive" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <div><iframe src="{{ $sessions->file }}#toolbar=0" id="mypdf" style="height: 800px" class="card-img-top" width="640"  ></iframe></div>
                            <button onclick = "ZoomIn()"> Zoom IN </button>
                            <button onclick = "ZoomOut()"> Zoom Out </button>
                        </div>
                    </div>
                </div>
                @endif
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne"><button class="accordion-button " type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">الدرس</button></h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body kashkol ">
                            <div class="card-body content"><p>{!! $sessions->body !!}</p></div>
                            <div class="text-center">
                            <button onclick="readMore(this)" type="button" class="btn btn-primary p-2">قراءه المزيد</button>
                            </div>
                        </div>
                    </div>
                </div>
                @php $attendedUsersIds = [] @endphp
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">الحضور</button></h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            @forelse ($sessions->attentances as $attentance)
                                {{  $attentance->user->username }} <br>
                                @php array_push($attendedUsersIds, $attentance->user->id) @endphp
                            @empty
                                لا يوجد حضور
                            @endforelse
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">الغياب</button></h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            @forelse ($sessions->grade->users->whereNotIn('id', $attendedUsersIds)->whereNotNull('grade_id') as $user)
                                {!! $user->username !!} <br>
                            @empty
                                لا يوجد غياب
                            @endforelse
                        </div>
                    </div>
                </div>
                @php $attendedUsersIds = [] @endphp
            </div>
            <br>
            <div class="d-flex justify-content-between ">
                <h2>  اهم نقاط الدرس    </h2>
                <br>
                <br>
            </div>
            <h3> {!! $detailedString !!}</h3>

        </div>
    </div>
    <script>
        function myFunction{{$sessions->id}}() {
            const toastTrigger = document.getElementById('liveToastBtn{{$sessions->id}}')
            const toastLiveExample = document.getElementById('liveToast{{$sessions->id}}')
            if (toastTrigger)
                {
                    toastTrigger.addEventListener('click', () => {
                        const toast = new bootstrap.Toast(toastLiveExample)
                        toast.show()
                    })
                }
            var copyText = document.getElementById("myInput{{$sessions->id}}");
            copyText.select();
            copyText.setSelectionRange(0, 99999);
            navigator.clipboard.writeText(copyText.value);
        }
        let noOfCharac = 700;
        let contents = document.querySelectorAll(".content");
        contents.forEach(content => {
            if(content.textContent.length < noOfCharac){
                content.nextElementSibling.style.display = "none";
            }
            else{
                let displayText = content.textContent.slice(0,noOfCharac);
                let moreText = content.textContent.slice(noOfCharac);
                content.innerHTML = `${displayText}<span class="dots">...</span><span class="hide more">${moreText}</span>`;
            }
        });

        function readMore(btn){
            let kashkol = btn.parentElement;
            kashkol.querySelector(".dots").classList.toggle("hide");
            kashkol.querySelector(".more").classList.toggle("hide");
            btn.textContent == "قراءه لمزيد" ? btn.textContent = "أقرأ أقل" : btn.textContent = "قراءه لمزيد";
        }

        function show_warning() {
            var x = document.getElementById("demo");
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
        }

        let image = document.getElementById('mypdf');
        function ZoomIn() {
            let width = image.clientWidth;
            let height = image.clientHeight;
            image.style.width = (width + 50) + "px";
            image.style.height = (height + 50) + "px";
            image.style.transition = "all 1s";
        }
        function ZoomOut() {
            let width = image.clientWidth;
            let height = image.clientHeight;
            image.style.width = (width - 50) + "px";
            image.style.height = (height - 50) + "px";
            image.style.transition = "all 2s";
        }

    </script>
@endsection

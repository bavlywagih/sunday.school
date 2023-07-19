@extends('template.template')
@section('content')

<div class="mt-3 mb-3">
    <div class="card m-auto book" id="mypdf">
        <div>
            <div class="card-body d-flex justify-content-between book-dark-div ">
                <h3>
                    {{$kashkol->address}}
                </h3>
            </div>
            <div class="card-body d-flex justify-content-between book-dark-div ">
                <div class="kashkol">
                    <p class="content">{{$kashkol->content}}</p>
                    <button onclick="readMore(this)" type="button" class="btn btn-primary">قراءه لمزيد</button>
                </div>
            </div>
            <div>
                <iframe src="{{$kashkol->file}}#toolbar=0" id="mypdf" style="height: 800px" class="card-img-top" width="640"  ></iframe>
            </div>
        </div>

    </div>
</div>
<script>
var elem = document.getElementById("mypdf");
function openFullscreen() {
  if (elem.requestFullscreen) {
    elem.requestFullscreen();
  } else if (elem.webkitRequestFullscreen) {
    elem.webkitRequestFullscreen();
  } else if (elem.msRequestFullscreen) {
    elem.msRequestFullscreen();
  }
}
function closeFullscreen() {
  if (document.exitFullscreen) {
    document.exitFullscreen();
  } else if (document.webkitExitFullscreen) {
    document.webkitExitFullscreen();
  } else if (document.msExitFullscreen) {
    document.msExitFullscreen();
  }
}
function myFunction() {
  var copyText = document.getElementById("myInput");
  copyText.select();
  copyText.setSelectionRange(0, 99999);
  navigator.clipboard.writeText(copyText.value);
  // alert("Copied the text: " + copyText.value);
}
let noOfCharac = 150;
let contents = document.querySelectorAll(".content");
contents.forEach(content => {
    //If text length is less that noOfCharac... then hide the read more button
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
</script>



@endsection

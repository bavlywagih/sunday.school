<style>
    html.dark body .select-file{
        background: url('{{env("APP_URL", "http://127.0.0.1:8000")}}/image/file-solid-black.svg') no-repeat;
    }
    .main {
        background: url('{{env("APP_URL", "http://127.0.0.1:8000")}}/image/cross.png') no-repeat;
    }
    .landing::before {
        background-image: url('{{env("APP_URL", "http://127.0.0.1:8000")}}/image/texture.jpeg');
    }
    .select-file {
        background: url('{{env("APP_URL", "http://127.0.0.1:8000")}}/image/image-solid.svg') no-repeat;
    }
    .select-wrapper {
        background: url('{{env("APP_URL", "http://127.0.0.1:8000")}}/image/image-solid-black.svg') no-repeat;
    }
    html.dark body .textarea-Kashkol {
        background-image: url('{{env("APP_URL", "http://127.0.0.1:8000")}}/image/notes.png');
    }
    html.dark body .accordion-button::after {
    background-image: url('{{env("APP_URL", "http://127.0.0.1:8000")}}/image/Arrow.svg') !important;
    }
    html.dark body.accordion-button::after , html.dark body .select-wrapper {
    background: url('{{env("APP_URL", "http://127.0.0.1:8000")}}/image/image-solid.svg') no-repeat;
    }


</style>

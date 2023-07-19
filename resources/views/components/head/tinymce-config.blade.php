<div>
    <script src="{{ asset('js/tinymce/tinymce.min.js') }}" referrerpolicy="origin"></script>
    <script>

 tinymce.init({
  selector: 'textarea#post-editor',
  plugins: ['link', 'anchor', 'wordcount', 'code', 'insertdatetime', 'table' ],
  toolbar: 'undo redo | styles | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link ',
//   file_picker_callback: (callback, value, meta) => {
//     const input = document.createElement('input');
//     input.setAttribute('type', 'file');
//     input.setAttribute('accept', 'image/*');
//     input.addEventListener('change', (event) => {
//       const file = event.target.files[0];
//       const formData = new FormData();
//       formData.append('_token', document.querySelector('meta[name="_token"]').getAttribute('content'));
//       formData.append('image', file);
//       axios.post('/posts/image/upload', formData, {
//         headers: { 'Content-Type': 'multipart/form-data' }
//       }).then(response => {
//         callback(response.data.image, { title: file.name });
//         console.log(response.data.image)
//       });
//     });
//     input.click();
//   },
});
    </script>
</div>

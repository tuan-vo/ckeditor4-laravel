<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>CKEditor</title>
  <script src="https://cdn.ckeditor.com/ckeditor5/38.0.1/classic/ckeditor.js"></script>
  
</head>
<body>
    <div id="editor">This is some sample content.</div>

<script src="{{ asset('js/ckeditor.js') }}"></script>
<script>
  ClassicEditor
    .create( document.querySelector( '#editor' ),{
        plugins: [ SourceEditing, /* ... */ ],
        toolbar: [ 'sourceEditing', /* ... */ ]
    } )
    .then( editor => {
        console.log( editor );
    } )
    .catch( error => {
         console.error( error );
    } );
</script>
</body>
</html>
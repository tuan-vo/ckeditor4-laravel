# CKEditor5

1. Install CKEditor 5:
https://ckeditor.com/ckeditor-5/online-builder/
- Choose Classic Package
- Add additional packages to use
- Unzip the downloaded file and move the CKEditor folder to the public folder of the Laravel project. The path should look like this: /public/ckeditor
2. Using CKEditor in Laravel Code:
```

<textarea id="editor"></textarea>
<br>
<script src="./ckeditor5/build/ckeditor.js"></script>
<script>
ClassicEditor
    .create( document.querySelector( '#editor' ))
    .then()
    .catch();
</script>
```

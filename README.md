# CKEditor4 - Laravel

1. Install CKEditor 4:
 https://ckeditor.com/ckeditor-4/download
- choose Standard Package
- Unzip the downloaded file and move the CKEditor folder to the public folder of the Laravel project. The path should look like this: /public/ckeditor
2. Using CKEditor in Laravel Code:
```
<script src="{{ asset('ckeditor/ckeditor.js') }}"></script>

<textarea name="editor"></textarea>
<br>
<button onclick="f_getData()">get Data</button>


<script>
 CKEDITOR.replace('editor');

  function f_getData() {
      var editor = CKEDITOR.instances.editor;
      var editorData = editor.getData();
      console.log(editorData);
  }
</script>
```

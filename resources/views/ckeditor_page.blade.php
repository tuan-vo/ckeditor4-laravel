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

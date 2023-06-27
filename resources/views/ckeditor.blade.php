
<div id="editor">
    <p>This is the editor content.</p>
</div>
<br>
<button onclick="f_getData()">Submit</button>

<script src="{{ asset('js/ckeditor.js') }}"></script>
<!-- <script src="https://cdn.ckeditor.com/4.21.0/standard/ckeditor.js"></script>  -->
<!-- <script src="./node_modules/ckeditor4/ckeditor.js"></script> -->

<script>
    console.log(CKEDITOR);
    CKEDITOR.replace('editor');

    function f_getData() {
        var editor = CKEDITOR.instances.editor;
        var editorData = editor.getData();
        console.log(editorData);
    }
</script>


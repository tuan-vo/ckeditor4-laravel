import ClassicEditorBase from '@ckeditor/ckeditor5-editor-classic/src/classiceditor';
import { UploadAdapter } from '@ckeditor/ckeditor5-adapter-ckfinder/src/uploadadapter';
import { Autoformat } from '@ckeditor/ckeditor5-autoformat/src/autoformat';
import { Bold, Italic } from '@ckeditor/ckeditor5-basic-styles/src/index'; // Updated import path
import { BlockQuote } from '@ckeditor/ckeditor5-block-quote/src/blockquote';
import { Essentials } from '@ckeditor/ckeditor5-essentials/src/index'; // Updated import path


export default class ClassicEditor extends ClassicEditorBase {}

ClassicEditor.builtinPlugins = [
  Essentials,
  UploadAdapter,
  Autoformat,
  Bold,
  Italic,
  BlockQuote,
  // Add other plugins you want to include in the build
  // ...
];

ClassicEditor.defaultConfig = {
  toolbar: {
    items: [
      'heading',
      'bold',
      // Add or remove toolbar items as needed
      // ...
    ],
  },
  // Rest of classic editor configuration
  // ...
};

</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="<?= BASEURL; ?>/lte/plugins/jquery/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.45.0/codemirror.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.45.0/mode/xml/xml.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.45.0/formatting.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= BASEURL; ?>/lte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= BASEURL; ?>/lte/dist/js/adminlte.min.js"></script>
<script src="<?= BASEURL; ?>/editor/summernote.min.js"></script>
<link href="<?= BASEURL; ?>/editor/summernote.min.css" rel="stylesheet">
<script src="<?= BASEURL; ?>/editor/summernote-bs4.js"></script>
  
<script>
    $('.summernote').summernote({
      
      height:150,
      codemirror:{
        theme: 'eclipse'
      },
      toolbar: [
    
    ['basic',['style', 'fontname','color']],
    ['style',['bold','italic','underline','clear']],
    ['font',['strikethrough','superscript','subscript']],
    ['fontsize',['fontsize']],
    ['color',['furecolor','blackcolor']],
    ['block',['ul','ol','paragraph']],
    ['media',['link','picture','video','table','hr']],
    ['height',['height','codeview','fullscreen','undo','redo']]
          ]
    });
    
  </script>
</body>
</html>

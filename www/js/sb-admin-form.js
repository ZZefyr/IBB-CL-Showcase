function showWebDialog(id) {
  document.getElementById(id).style.display="block";
  var body = document.body;
  var formInputs = document.getElementsByTagName("input");
  var formTitle = document.getElementById('form-title');
  var formButton = document.getElementById('form-button'); 
  var formType = document.getElementById('form_type'); 
  var background = document.createElement('div');
   background.id = "elementBackground";
   body.appendChild(background);
}

function hideWebDialog(id) {
  document.getElementById(id).style.display="none";
  document.body.removeChild(document.getElementById('elementBackground'));
  var formInputs = document.getElementsByTagName("input");
  if(formInputs[0].readOnly){
       for(var i=0; i < formInputs.length;i++){
       formInputs[i].readOnly = false;
       }
   }
}

function drawTinyEditor(){
  document.getElementsByClassName('btn-primary')[0].style.display="none";
  tinymce.init({
      selector:'textarea',
      height: 500,
      plugins: "advcode print preview fullpage powerpaste searchreplace autolink directionality advcode visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists textcolor wordcount a11ychecker imagetools colorpicker textpattern help",
      toolbar: "code formatselect | bold italic strikethrough forecolor backcolor | link | alignleft aligncenter alignright alignjustify  | numlist bullist outdent indent | removeformat",
      verify_html : false,
      verify_css_classes : true,
      cleanup : false,
      cleanup_on_startup : false,
       setup: function (editor) {
         editor.on('focus', function (e) {
         $('.btn-primary').show(500);
      });
    }
      });
  }
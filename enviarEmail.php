<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!-- Main Quill library -->
    <script src="//cdn.quilljs.com/1.3.6/quill.js"></script>
    <!-- Theme included stylesheets -->
    <link href="//cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <link href="//cdn.quilljs.com/1.3.6/quill.bubble.css" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" 
     crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" 
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" 
    crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" 
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" 
    crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" 
    integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" 
    crossorigin="anonymous"></script>
    <title>Enviar Email</title>
</head>
<body>
    <div class="container">
        <div>
            <h1 class="text-center">Sistema de Envio Automático de email</h1>
        </div>
      
            
        <div class="container justify-content-center" id="MensagemDeEmail">
            <h1 class="text-center">Corpo do Email</h1>
            <form action="./php/email/testEmail.php" method="post">
                <div class="row">
                    <div class="col-2">
                        <label>Título:</label>
                    </div>
                    <div class="col-10">
                        <input class="form-control w-100" type="text" name="title">
                    </div>
                </div>
                <br>
                <div id="toolbar"></div>
                <!-- This container will become the editable. -->
                <input name="mensagem" id="mensagem" type="hidden">
                <div style="height: 600px;" id="editor">
                </div>
                <script>

                function imageHandler() {
                    let fileInput = this.container.querySelector('input.ql-image[type=file]');
                    if (fileInput == null) {
                        fileInput = document.createElement('input');
                        fileInput.setAttribute('type', 'file');
                        fileInput.setAttribute('accept', 'image/png, image/gif, image/jpeg, image/bmp, image/x-icon');
                        fileInput.classList.add('ql-image');
                        fileInput.addEventListener('change', () => {
                            const files = fileInput.files;
                            const range = this.quill.getSelection(true);

                            if (!files || !files.length) {
                                console.log('No files selected');
                                return;
                            }
                            var myHeaders = new Headers();
                            myHeaders.append("Authorization", "Client-ID fdec36574b9b0f4");
                            
                            const formData = new FormData();
                            formData.append('image', files[0]);

                            this.quill.enable(false);
                            var requestOptions = {
                            method: 'POST',
                            headers: myHeaders,
                            body: formData,
                            redirect: 'follow'
                            };

                            fetch("https://api.imgur.com/3/image", requestOptions)
                                .then(response => response.json())
                                .then(result => {
                                    let envio = result
                                    this.quill.enable(true);
                                    this.quill.editor.insertEmbed(range.index, 'image', result.data.link);
                                    this.quill.setSelection(range.index + 1, Quill.sources.SILENT);
                                    fileInput.value = '';
                                })
                                .catch(error => {
                                    console.log('quill image upload failed');
                                    console.log(error);
                                    this.quill.enable(true);
                                });
                        });
                        this.container.appendChild(fileInput);
                    }
                    fileInput.click();
                    }
                
               var toolbarOptions = {
                   container:[
                                ['bold', 'italic', 'underline', 'strike'],        // toggled buttons
                                ['blockquote'],
                                [{ 'list': 'ordered'}, { 'list': 'bullet' }],
                                [{ 'indent': '-1'}, { 'indent': '+1' }],          // outdent/indent
                                [{ 'direction': 'rtl' }],                         // text direction

                                [{ 'size': ['small', false, 'large', 'huge'] }],  // custom dropdown
                                [{ 'header': [1, 2, 3, 4, 5, 6, false] }],

                                [{ 'color': [] }],          // dropdown with defaults from theme
                                [{ 'font': [] }],
                                [{ 'align': [] }],

                                ['clean'],                                         // remove formatting button
                                ['image', 'video']
                                ],
                    handlers: {
                        image: imageHandler
                    }
                };
                var quill = new Quill('#editor', {
                modules: {
                    toolbar: toolbarOptions
                },
                theme: 'snow'
                });
                var mensagem = document.querySelector('input[name=mensagem]');
                quill.on('text-change', function(delta, oldDelta, source) {
                mensagem.value = quill.container.firstChild.innerHTML
        });
                </script>
                <br>
                <div class="row justify-content-center my-5 mx-5">
                <label>Senha:</label>
                <input name="senha" type="password" >   
                </div>  
                <div class="row justify-content-center my-5 mx-5">
                <input class="btn btn-primary align-center" type="submit" value="Enviar">   
                </div>            
            </form>
        </div>
    </div>
</body>
</html>
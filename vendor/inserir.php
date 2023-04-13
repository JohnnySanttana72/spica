<?php
require __DIR__.'/vendor/autoload.php';
// Importando as classes necessárias do Firebase
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;

// Carregando as credenciais do Firebase
$serviceAccount = ServiceAccount::fromJson('{
    "type": "service_account",
    "project_id": "postagens-ec3c9",
    "private_key_id": "3ee149e02fe134063671dcb0a9c0a80ef6ec2649",
    "private_key": "-----BEGIN PRIVATE KEY-----\nMIIEvQIBADANBgkqhkiG9w0BAQEFAASCBKcwggSjAgEAAoIBAQDhQ6FUNTLTuRO1\n2YdGdkOTusy4EtsIr5a8gd/lMlULadWf4Xk/Bna81ly6X7bcZ1Ry3pKUWAhprMOf\nd9Bczm9Zep8jsq2jook6V6w487Ztzapi22RdfPYOOe2Pjw4DbHOT43egE39NQnpV\n34JrHmbmidbon8HNSbiWX9TBtuSINZO2UuHDtjbawW3IErItIrkbOENWWpWPYGH8\nE2PABauZJrqdoQmW6uKHr5/9Wl9ez4r5v4RiI7AOreb/jqr8cej5kkZ46VGvndzZ\nWbtHgcos/foTmO+XOh1rNOcYMT2bCeCqKH9iIhYJPscNTSiS+I458TfNEZupo7d3\n19LwJqzzAgMBAAECggEAI5uUq2JzY9tcHcFCbGVyXi5HgQtd+zwCSE8BTNINdm3m\n2kyCZW+IomYCJ2XM2n8s7rF3GyLlRYsNKy59zcXF/S9wa2ypnPWq2oGUVDZWDnpV\npiXG8i44GNyYTDqRPQJOLMDmnnOmilhpTRy1GWinXGbKhWAHewNdvcttLqfR7SO6\n7PHiSNhOd1W8jyehfwQ9+u+/pM0rW81JZ9/2coYdWRLjKnK6pbdAGQSD5IqoGj4P\nDFVZ4ZAA29z+AN1DbIDEU9PbMMb7TaGhZbdfKrjPUQ0G/VzXRNxDXAaal+tSizv/\nq64udxRQL4QO7CeeTxjdIs3nopofxEyORN1mcKnIxQKBgQD9FoMgavOQeX9SSTw0\nXwU+AVxZ+Ik5GvqCAqiA7xuKP1c5ovw2LwhM/a+NuYnWrRJIjzDKEPjFuI/87a/A\nCFKoqijP6orGtN5GFO1swuC5ng62qcyYgon4erPRmy32HuT1B+aSibm3y4oK1ZWI\nwVKsD5ynpDjYYgCcatGrg/DJZwKBgQDj2ylEdf3wEQO85u5MHmjgRz+lTA4GMxG2\n3/fCS8EmM7Y3yY6LwX3wNjNM/ZuPoN6gE3BwO9goeiAXnerSWLsP6QCiz7PblgNc\nHjfrxKUqdaVpYqklxrKJL/buQhC5KC95gtpLHRyIsyd/XCp48TZ6TFtyYcN28pJf\nzPFQh2ZslQKBgQCOGOGuhd4Ss+SkkrHWxbLvyVvMuBpzkY4tCMkK+zT/Pej/V188\nHNQQRi8W56FYgvvM+XhvO3AxsxpE7D7NFt8yC7e2ZP1d65cQyhc0BYafMPsZ2+Qf\njMtiU6I6gWIg2d+7I6B1jhZT91eeFaVLjx+Xs3xFM5MnCn9FU0Q9hGrg6QKBgAME\nkBNcDLT1RLtnw5g2fuUZjHo/+5+RZZaqeLmWD0TWQn+Sp9SqB2T7EsreQQUx+EDe\ngQq7gC1pEKu/Z7DJhBC94UhGv/cUkY7Sx6LTw+xACqTOrbbWXt76R6b4MQiCw740\nQXflNs+Ir+k760QWzcXo5P0q1k/o/o9OQ5PxdyXRAoGARMADImZ9r/2/x3CaX1QS\nfxHpooyCrtWcSI7XkH5Y0hgJ2sA5OT1QIumpGg0ofioyMD/sMmtbVzvCsx2X1f00\nXrVXFARBRAIQ/hbEfNL/p+3nYg7rfRC6X/cXVOx6ORZ4rzGITazIZaA/JQ1qNEZ1\n+S8Dowi6PlrvyzubGHoOLRs=\n-----END PRIVATE KEY-----\n",
    "client_email": "firebase-adminsdk-wrq40@postagens-ec3c9.iam.gserviceaccount.com",
    "client_id": "100801750558245880199",
    "auth_uri": "https://accounts.google.com/o/oauth2/auth",
    "token_uri": "https://oauth2.googleapis.com/token",
    "auth_provider_x509_cert_url": "https://www.googleapis.com/oauth2/v1/certs",
    "client_x509_cert_url": "https://www.googleapis.com/robot/v1/metadata/x509/firebase-adminsdk-wrq40%40postagens-ec3c9.iam.gserviceaccount.com"
  }');

// Inicializando a instância do Firebase
$firebase = (new Factory)
    ->withServiceAccount($serviceAccount)
    ->create();

// Obtendo a referência do nó "postagens" no Realtime Database
$database = $firebase->getDatabase();
$postagensRef = $database->getReference('postagens');

// Verificando se foi enviado um formulário
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtendo os dados do formulário
    $titulo = $_POST['titulo'];
    $texto = $_POST['texto'];
    
    // Adicionando os dados no nó "postagens"
    $postagensRef->push([
        'titulo' => $titulo,
        'texto' => $texto
    ]);
}

?>

<!-- Código HTML do formulário -->
<form method="POST">
    <label>Título:</label><br>
    <input type="text" name="titulo"><br>
    <label>Texto:</label><br>
    <textarea name="texto"></textarea><br>
    <input type="submit" value="Enviar">
</form>

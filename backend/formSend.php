<?php
// Dados do formulário enviados pelo aplicativo da web
$name = "teste";
$email = "lucassoares@alunos.utfpr.edu.br";
$message = "teste message";

// Construir os dados do formulário para enviar ao Google Forms
$formData = array(
  'entry.1970420736' => $name,
  'entry.1609103231' => $email,
  'entry.1280598276' => $message
);

// URL do endpoint do Google Forms
$url = 'https://docs.google.com/forms/u/0/d/e/1FAIpQLSclfasf1m5T82vLEuLRbLQmr3ZlyNK4AgYM9694bw3voEEOrg/formResponse';

// Configurar a solicitação HTTP POST
$options = array(
  'https' => array(
    'header' => "Content-type: application/x-www-form-urlencoded\r\n",
    'method' => 'POST',
    'content' => http_build_query($formData)
  )
);

// Enviar a solicitação ao Google Forms
$context = stream_context_create($options);
$response = file_get_contents($url, false, $context);

// Verificar se a solicitação foi bem-sucedida
if ($response !== false) {
  // A solicitação foi enviada com sucesso
  echo 'Formulário enviado com sucesso!';
} else {
  // Ocorreu um erro ao enviar a solicitação
  echo 'Erro ao enviar o formulário.';
}


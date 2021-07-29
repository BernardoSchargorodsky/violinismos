<?php
ini_set ( 'display_errors', 1);
error_reporting (E_ALL);

echo '<pre>';

$nombre = '';
$apellido = '';
$email = '';
$comentario = '';





if ( !empty ( $_POST ['nombre'] ) && is_string ( $_POST ['nombre'] ) ) {
    $nombre = $_POST ['nombre'];
}  

trim ( $nombre );

if ( !empty ( $_POST ['apellido'] ) && is_string ( $_POST ['apellido'] ) ) {
    $apellido = $_POST ['apellido'];
}

if ( !empty ( $_POST ['e-mail'] ) && is_string ( $_POST ['e-mail'] ) )  {
    filter_var ( $_POST ['e-mail'], FILTER_VALIDATE_EMAIL ); 
}

if ( filter_var ( $_POST ['e-mail'], FILTER_VALIDATE_EMAIL ) !== false ) {
    $email = $_POST ['e-mail'];
}

if ( !empty ( $_POST ['comentarios'] ) && is_string ( $_POST ['comentarios'] ) ) {
    $comentario = $_POST ['comentarios'];
}

if ( $nombre !== '' && $apellido !== '' && $email !== '' ) {
    header ( 'location: success.php' );
} else {
    header ( 'location: error.php' );
}

if ( $nombre !== '' && $apellido !== '' && $email !== '' )  {

    $connection = new mysqli ('localhost','root', '', 'violinismos_contacto');

}


$nombre_esc = $connection ->real_escape_string( $nombre );
$apellido_esc = $connection ->real_escape_string( $apellido );
$email_esc = $connection ->real_escape_string( $email );

$new_user = $connection->query(
    'INSERT INTO users(name, lastname, email)
    VALUES (" ' . $nombre_esc . ' ", " ' . $apellido_esc . ' ", " ' . $email_esc . ' ")'
);

if ( $nombre_esc !== '' && $apellido_esc !== '' && $email_esc !== '' && $comentario !== '' ) {
mail ('bernardoschargorodsky@yahoo.com',
                'violinismos',
                'Se creó usuario ' . $nombre_esc . $apellido_esc . ' y su dirección de e-mail es ' . $email_esc . '. Su comentario fue ' . $comentario );

}
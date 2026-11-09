<?php
declare(strict_types=1);
header('Content-Type: application/json; charset=utf-8'); header('X-Content-Type-Options: nosniff');
if($_SERVER['REQUEST_METHOD']!=='POST'){http_response_code(405);echo json_encode(['error'=>'Method not allowed']);exit;}
require_once dirname(__DIR__).'/config.php';
$input=json_decode(file_get_contents('php://input'),true); if(!is_array($input)) $input=$_POST;
$name=trim((string)($input['name']??'')); $phone=trim((string)($input['phone']??'')); $email=trim((string)($input['email']??'')); $message=trim((string)($input['message']??''));
if($name===''||$phone===''){http_response_code(422);echo json_encode(['error'=>'Укажите имя и телефон']);exit;}
if($email!==''&&!filter_var($email,FILTER_VALIDATE_EMAIL)){http_response_code(422);echo json_encode(['error'=>'Некорректный email']);exit;}
try{$sql='INSERT INTO reservations (name,phone,email,guests,booking_date,message) VALUES (?,?,?,?,?,??)';$stmt=db()->prepare($sql);$params=[$name,$phone,$email?:null];$params[] = max(1,min(12,(int)($input['guests']??2)));$params[]=(string)($input['booking_date']??'')?:null;$params[]=$message;$stmt->execute($params);http_response_code(201);echo json_encode(['ok'=>true,'id'=>(int)db()->lastInsertId(),'message'=>'Заявка принята']);}catch(Throwable $e){error_log($e->getMessage());http_response_code(500);echo json_encode(['error'=>'Не удалось сохранить заявку']);}
